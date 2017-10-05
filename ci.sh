#!/bin/bash

function display_usage {
  echo "Usage: ci.sh [release|legacy|experimental[/k/keyboard]]"
  exit 1
}

#
# Define paths; note Windows hosted bash assumptions for now
#
KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
JQ="$KEYBOARDROOT/tools/jq-win64.exe"
RSYNC="$KEYBOARDROOT/tools/rsync.exe"
CI_CACHE="$KEYBOARDROOT/.cache"

. "$KEYBOARDROOT/servervars.sh"
. "$KEYBOARDROOT/resources/util.sh"
. "$KEYBOARDROOT/resources/codesign.sh"
. "$KEYBOARDROOT/resources/rsync-tools.sh"

parse_args "$@"

if [[ $DO_UPLOAD_ONLY == true ]]; then
  rsync_to_downloads_keyman_com "$CI_CACHE/upload/" keyboards/
  exit 0
fi

if [ ! -d "$CI_CACHE" ]; then
  mkdir "$CI_CACHE"
fi

if [ -d "$CI_CACHE/upload" ]; then
  rm -rf "$CI_CACHE/upload"
  mkdir "$CI_CACHE/upload"
fi

##
## Calls the Keyman Desktop downloads API to determine latest stable Keyman Desktop version 
## on download server and populates shell variables from there
##
function check_latest_stable_keymandesktop {
  local API_VERSION_JSON=`curl -s "$DOWNLOADS_KEYMAN_COM_URL/api/version/windows/2.0"`
  KEYMANDESKTOP_VERSION=`echo $API_VERSION_JSON | $JQ -r '.windows.stable.version'`
  MSI_FILENAME=`echo $API_VERSION_JSON | $JQ -r '.windows.stable.files[].file | match("^keymandesktop.+.msi$").string'`
  MSI_MD5=`echo $API_VERSION_JSON | $JQ -r '.windows.stable.files["'$MSI_FILENAME'"].md5'`
  SETUP_MD5=`echo $API_VERSION_JSON | $JQ -r '.windows.stable.files["setup.exe"].md5'`
  
  SETUP_EXE_URL=$DOWNLOADS_KEYMAN_COM_URL/windows/stable/$KEYMANDESKTOP_VERSION/setup.exe
  MSI_URL=$DOWNLOADS_KEYMAN_COM_URL/windows/stable/$KEYMANDESKTOP_VERSION/$MSI_FILENAME
}

##
## Checks if the files in the CI_CACHE are out of date, and if so, downloads an updated
## version from downloads.keyman.com
##
function check_and_download_keymandesktop_artifacts {

  if [ ! -d "$CI_CACHE/$KEYMANDESKTOP_VERSION" ]; then
    mkdir "$CI_CACHE/$KEYMANDESKTOP_VERSION"
  fi
  
  check_and_download $KEYMANDESKTOP_VERSION/setup.exe $SETUP_MD5 "$SETUP_EXE_URL"
  check_and_download $KEYMANDESKTOP_VERSION/$MSI_FILENAME $MSI_MD5 "$MSI_URL"
}

##
## Main function
##
function upload_keyboards_by_target {
  if [[ "$TARGET" ]]; then
    if [[ "$TARGET" == */* ]] && [[ (-d "$TARGET") ]]; then
      group=$(cut -d / -f 1 <<< "$TARGET")
      echo "${t_grn}--- Only uploading $group $TARGET ---${t_end}"
      upload_keyboard $group "$TARGET"
    elif [[ "$TARGET" == "release" ]] || [[ "$TARGET" == "legacy" ]] || [[ "$TARGET" == "experimental" ]]; then
      # Assuming release|legacy|experimental
      echo "${t_grn}--- Only uploading $TARGET ---${t_end}"
      upload_keyboards "$TARGET"
    else
      echo "Invalid $TARGET"
      display_usage
    fi
  else
    upload_keyboards release
    upload_keyboards legacy
    upload_keyboards experimental
  fi
  
  rsync_to_downloads_keyman_com "$CI_CACHE/upload/" keyboards/
}

##
## Checks if a specific file is missing or has a different md5, and if so, downloads it
## from the URL given
##
function check_and_download {
  local filename=$1
  local md5=$2
  local url=$3
    
  if [ -f "$CI_CACHE/$filename" ]; then
    local md5=$(md5sum "$CI_CACHE/$filename" | cut -f 1 -d ' ')
    if [ "$md5" == "$2" ]; then
      return
    fi
  fi
  
  echo "Downloading $url"
  curl -# -o "$CI_CACHE/$filename" "$url"
}

##
## Tests if a specific file exists online, and if so if it is the same size.
## If it is the same size (or local file does not exist), returns 1
##
function test_if_file_exists_online {
  local local_path=$1
  local remote_path=$2
  local remote_size=$(curl -sI "$remote_path" | grep content-length | cut -d ':' -f 2)
  if [[ -z "$remote_size" ]]; then
    return 0
  fi

  if [[ -f $local_path ]]; then
    local local_size=$(stat --printf="%s" $local_path)
  
    # If not present or incomplete (by heuristic size test)
    if [[ $local_size == $remote_size ]]; then
      return 0
    fi
  fi
  
  return 1
}

##
## Prepare for upload
##
function prepare_for_upload {
  local source_filename=$1
  local upload_filename=$2
  local upload_path=`dirname "$upload_filename"`

  mkdir -p "$CI_CACHE/upload/$upload_path"
  cp "$source_filename" "$CI_CACHE/upload/$upload_filename"
}

function upload_keyboard {
  local group=$1
  local keyboard=$2
  local base_keyboard=$(basename "$keyboard")
  local shortname=$(basename $(dirname "$keyboard"))
  local buildpath=$KEYBOARDROOT/$group/$shortname/$base_keyboard/build
  local keyboard_info=$buildpath/$base_keyboard.keyboard_info
  
  echo "${t_grn}Uploading $keyboard${t_end}"
  
  [ -f "$keyboard_info" ] || die "Failed to locate $keyboard_info"
  
  local package_filename=`cat "$keyboard_info" | $JQ -r '.packageFilename'`
  local js_filename=`cat "$keyboard_info" | $JQ -r '.jsFilename'`

  # jq returns 'null' if the entry is missing, instead of ''
  if [[ $package_filename == "null" ]]; then
    package_filename=
  else
    [ -f "$buildpath/$package_filename" ] || die "Failed to locate $buildpath/$package_filename"
  fi

  if [[ $js_filename == "null" ]]; then
    js_filename=
  else
    [ -f "$buildpath/$js_filename" ] || die "Failed to locate $buildpath/$js_filename"
  fi

  local package_version=`cat "$keyboard_info" | $JQ -r '.version'`
  local package_name=`cat "$keyboard_info" | $JQ -r '.name'`
  local installer_filename=keymandesktop-$KEYMANDESKTOP_VERSION-$base_keyboard-$package_version.exe
  local package_upload_path=$base_keyboard/$package_version/$package_filename
  local keyboard_info_upload_path=$base_keyboard/$package_version/$base_keyboard.keyboard_info
  local installer_upload_path=$base_keyboard/$package_version/$installer_filename
  local js_upload_path=$base_keyboard/$package_version/$js_filename
  
  local package_url=$DOWNLOADS_KEYMAN_COM_URL/keyboards/$package_upload_path
  local keyboard_info_url=$DOWNLOADS_KEYMAN_COM_URL/keyboards/$keyboard_info_upload_path
  local installer_url=$DOWNLOADS_KEYMAN_COM_URL/keyboards/$installer_upload_path
  local js_url=$DOWNLOADS_KEYMAN_COM_URL/keyboards/$js_upload_path
  
  echo "${t_grn}Package name: $package_name${t_end}"

  # check_and_upload $package_filename $package_url
  #echo Keyboard info: $keyboard_info
  #echo Local file: $buildpath/$package_filename
  #echo Package version: $package_version
  #echo $keyboard_info_url
  #echo $package_url
  #echo $installer_url
  #echo $installer_filename
  
  #test_if_file_exists_online $buildpath/$base_keyboard.keyboard_info $keyboard_info_url
  #local keyboard_info_exists=$?
  #if [[ $keyboard_info_exists == 0 ]]; then
  prepare_for_upload "$buildpath/$base_keyboard.keyboard_info" "$keyboard_info_upload_path"
  #fi

  if [[ ! -z $js_filename ]]; then
    #test_if_file_exists_online "$buildpath/$js_filename" "$js_url"
    #local js_exists=$?
    #if [[ $js_exists == 0 ]]; then
    prepare_for_upload "$buildpath/$js_filename" "$js_upload_path"
    #fi
  fi
  
  if [[ ! -z $package_filename ]]; then
    #test_if_file_exists_online "$buildpath/$package_filename" "$package_url"
    #local kmp_exists=$?
    #if [[ $kmp_exists == 0 ]]; then
    prepare_for_upload "$buildpath/$package_filename" "$package_upload_path"
    #fi
  fi
  
  if [[ ${package_filename##*.} == kmp ]]; then
    # We only upload a combined installer for .kmp files, and only do it if the file is not already
    # online, because this is the slowest part of the buld
    #test_if_file_exists_online $buildpath/$installer_filename $installer_url
    #local installer_exists=$?
    #if [[ $installer_exists == 0 ]]; then
    create_package_installer "$buildpath" "$buildpath/$installer_filename" "$buildpath/$package_filename" "$package_name" "$package_version"
    prepare_for_upload "$buildpath/$installer_filename" "$installer_upload_path"
    #fi
  fi
  
  # Test for existence of https://downloads.keyman.com/keyboards/<package>/<package-version>/<package>.kmp
    # If not present or incomplete (by size test), then rsync keyboard.kmp to
    # https://downloads.keyman.com/keyboards/<keyboard>/<keyboard-version>/ 

    # Test for existence of https://downloads.keyman.com/keyboards/<package>/<package-version>/keymandesktop-<version>-<package>-<package-version>.exe
    # If not present or incomplete (by size test), then:
      # Create setup.inf
      # Zip setup.inf + keymandesktop<num>.msi + <keyboard.kmp> to temp zip file.
      # Create a new file that append temp zip file to setup.exe, call it keymandesktop-<version>-<keyboard>-<keyboard-version>.exe
      # Codesign keymandesktop-<version>-<keyboard>-<keyboard-version>.exe
      # Rsync keymandesktop-<version>-<keyboard>-<keyboard-version>.exe to https://downloads.keyman.com/keyboards/<keyboard>/<keyboard-version>/ 
      # ** Don't use rsync to determine if incomplete. Code signing will cause bits to change in content and we really don't want to 
      # ** refresh existing files if they have no significant changes.
  
}

##
## Create a .exe installer from a package file for the selected Keyman Desktop version
##
function create_package_installer {
  local buildpath=$1
  local exe_filename=$2
  local kmp_filename=$3
  local package_name=$4
  local package_version=$5
  
  local kmp_basename=`basename "$kmp_filename"`
  
  # Generate installer metadata
  
  cat > "$buildpath/setup.inf" <<END
[Setup]
Version=$KEYMANDESKTOP_VERSION
OnlineProductID=20
MSIFileName=$MSI_FILENAME
MSIOptions=
Title=Keyman Desktop $KEYMANDESKTOP_VERSION
License=license.html

[Packages]
$kmp_basename=$package_name $package_version

[Strings]
END

  # Construct the archive

  if [[ -f "$buildpath/setup.zip" ]]; then
    rm "$buildpath/setup.zip"
  fi
   
  7za a "$buildpath/setup.zip" "$CI_CACHE/$KEYMANDESKTOP_VERSION/$MSI_FILENAME" "$buildpath/setup.inf" "$kmp_filename"
  cat "$CI_CACHE/$KEYMANDESKTOP_VERSION/setup.exe" "$buildpath/setup.zip" > "$exe_filename"
  
  rm "$buildpath/setup.zip"
  rm "$buildpath/setup.inf"
  
  # Codesign the archive
  
  codesign "$exe_filename" "Keyman Desktop Setup"
}

##
## Clone of build_keyboards in compile.sh
##

function upload_keyboards {
  # $1 = path to build keyboards
  # for each keyboard, if a build.sh file exists, call it, otherwise, run the default 
  # build based on the folder name and location.
  
  # excluded folders are: shared, packages and template

  local group=$1
  local excluded_folders=" shared packages template "
  
  echo "Uploading keyboards for $1"
  local shortname
  for shortname in "$KEYBOARDROOT/$group/"*/ ; do
    local base_shortname=$(basename "$shortname")
    if [[ "$base_shortname" == '*' ]]; then
      return 0
    fi
    
    if [[ "$excluded_folders" == *" $base_shortname "* ]]; then
      echo "- Skipping folder $group/$base_shortname"
    else 
      if [[ "$base_shortname" < "$START" ]]; then
        echo "- Skipping folder $group/$base_shortname, before $START"
      else
        echo "- Uploading $group/$base_shortname"
        local keyboard
        for keyboard in "$shortname"*/ ; do
          upload_keyboard "$group" "$keyboard"
        done
      fi
    fi
  done
  
  #
  # If a packages/ folder exists, we now need to build it. We have to wait until the keyboards are built because it 
  # depends on files created by the keyboards
  #
  
  if [ -d "$KEYBOARDROOT/$group/packages" ]; then
    echo "- Building $group/packages"
    local package
    for package in "$KEYBOARDROOT/$group/packages/"*/ ; do
      upload_keyboard "$group" "$package"
    done
  fi
  
  return 0
}

# GET https://downloads.keyman.com/api/version/windows/2.0

check_latest_stable_keymandesktop

# If a new stable version is present, download it into the version cache:

  # GET https://downloads.keyman.com/windows/stable/<version>/setup.exe
  # GET https://downloads.keyman.com/windows/stable/<version>/keymandesktop<num>.msi

check_and_download_keymandesktop_artifacts

#  echo $KEYMANDESKTOP_VERSION
#  echo $SETUP_MD5
#  echo $MSI_MD5
#  echo $MSI_URL

# For each package.kmp:

upload_keyboards_by_target

  # Test for existence of https://downloads.keyman.com/keyboards/<package>/<package-version>/<package>.kmp
    # If not present or incomplete (by size test), then rsync keyboard.kmp to
    # https://downloads.keyman.com/keyboards/<keyboard>/<keyboard-version>/ 
    # ** Don't use rsync to determine if incomplete. Compiler version change will cause bits to change in content 
    # ** and we really don't want to refresh existing files if they have no significant changes.
    # rsync .keyboard_info as well
  # Test for existence of https://downloads.keyman.com/keyboards/<package>/<package-version>/keymandesktop-<version>-<package>-<package-version>.exe
    # If not present or incomplete (by size test), then:
      # Create setup.inf
      # Zip setup.inf + keymandesktop<num>.msi + <keyboard.kmp> to temp zip file.
      # Create a new file that append temp zip file to setup.exe, call it keymandesktop-<version>-<keyboard>-<keyboard-version>.exe
      # Codesign keymandesktop-<version>-<keyboard>-<keyboard-version>.exe
      # Rsync keymandesktop-<version>-<keyboard>-<keyboard-version>.exe to https://downloads.keyman.com/keyboards/<keyboard>/<keyboard-version>/ 
      # ** Don't use rsync to determine if incomplete. Code signing will cause bits to change in content and we really don't want to 
      # ** refresh existing files if they have no significant changes.

#? do we get identical bits on each run of a keyboard compile? I think so...  only changes if compiler version changes. 
#? 
