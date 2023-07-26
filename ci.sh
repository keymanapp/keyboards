#!/usr/bin/env bash

set -e
set -u

function display_usage {
  echo "
Usage: ci.sh [flags] [release|legacy|experimental[/k/keyboard]]

Flags:
  -no-exe                   Ignored, legacy flag
  -upload-only              Only upload keyboards already prepared
  -zip-only                 Only prepare and transfer the database
  -prepare-and-upload-only  Prepare and upload keyboards but not database
"

  exit 1
}

#
# Prevents 'clear' on exit of mingw64 bash shell
#
SHLVL=0

#
# Define paths; note Windows hosted bash assumptions for now
#
KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
. "$KEYBOARDROOT/tools/jq.inc.sh"
RSYNC="$KEYBOARDROOT/tools/rsync.exe"
CI_CACHE="$KEYBOARDROOT/.cache"

if [ ! -z "${SEVENZ_HOME+x}" ]; then
  APP7Z="$SEVENZ_HOME/7z"
else
  APP7Z="/c/Program Files/7-Zip/7z.exe"
fi

. "$KEYBOARDROOT/servervars.sh"
. "$KEYBOARDROOT/resources/util.sh"
. "$KEYBOARDROOT/resources/codesign.sh"
. "$KEYBOARDROOT/resources/rsync-tools.sh"

function parse_args {
  DO_CODESIGN=false
  DO_UPLOAD_ONLY=false
  DO_ZIP_ONLY=false
  DO_DATA=true
  DO_EXE=false
  TARGET=
  FLAG_COLOR=
  START=
  START_BASE=
  START_KEYBOARD=
  DO_UPDATE_COMPILER=true
  FORCE_UPDATE_COMPILER=false

  local lastkey=
  local key

  # Parse args
  for key in "$@"; do
    if [[ -z "$lastkey" ]]; then
      case "$key" in
        -upload-only)
          DO_UPLOAD_ONLY=true
          ;;
        -codesign)
          DO_CODESIGN=true
          ;;
        -zip-only)
          DO_ZIP_ONLY=true
          ;;
        -no-update-compiler)
          DO_UPDATE_COMPILER=false
          ;;
        -force-update-compiler)
          FORCE_UPDATE_COMPILER=true
          ;;
        -prepare-and-upload-only)
          DO_DATA=false
          ;;
        -no-exe)
          # Ignore this flag; legacy only
          ;;
        -no-color)
          FLAG_COLOR=-no-color
          ;;
        -color)
          FLAG_COLOR=-color
          ;;
        -start)
          lastkey=$key
          ;;
        -h|-\?)
          display_usage
          ;;
        *)
          TARGET="$key"
      esac
    else
      case "$lastkey" in
        -start)
          START="$key"
          START_BASE=`dirname "$START"`
          START_KEYBOARD=`basename "$START"`
          if [[ "START_BASE" == "." ]]; then
            START_BASE="$START"
          fi
          ;;
      esac
      lastkey=
    fi
  done
}

parse_args "$@"

function run {

  if [ ! -d "$CI_CACHE" ]; then
    mkdir "$CI_CACHE"
  fi

  if [[ $DO_UPLOAD_ONLY == true ]]; then
    if [ ! -d "$CI_CACHE/upload" ]; then
      mkdir "$CI_CACHE/upload"
    fi
    rsync_to_downloads_keyman_com "$CI_CACHE/upload/" keyboards/ true
    exit 0
  fi

  if [[ $DO_ZIP_ONLY == true ]]; then
    if [ ! -d "$CI_CACHE/data" ]; then
      mkdir "$CI_CACHE/data"
    fi
    if [ ! -d "$CI_CACHE/upload" ]; then
      mkdir "$CI_CACHE/upload"
    fi
    zip_keyboard_info
    rsync_to_downloads_keyman_com "$CI_CACHE/data/" data/ false
    exit 0
  fi

  if [ -d "$CI_CACHE/upload" ]; then
    rm -rf "$CI_CACHE/upload"
  fi
  mkdir "$CI_CACHE/upload"

  if [ -d "$CI_CACHE/data" ]; then
    rm -rf "$CI_CACHE/data"
  fi
  mkdir "$CI_CACHE/data"

  upload_keyboards_by_target

  if [[ $DO_DATA == true ]]; then
    zip_keyboard_info
    rsync_to_downloads_keyman_com "$CI_CACHE/data/" data/ false
  fi
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

  rsync_to_downloads_keyman_com "$CI_CACHE/upload/" keyboards/ true
}

##
## Prepare for upload puts a file into the upload cache
## in preparation for it being rsync'd to the server
##
function prepare_for_upload {
  local source_filename=$1
  local upload_filename=$2
  local upload_path=`dirname "$upload_filename"`

  mkdir -p "$CI_CACHE/upload/$upload_path"
  cp "$source_filename" "$CI_CACHE/upload/$upload_filename"
}

##
## Prepares a single keyboard for upload
##
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
  local min_required_version=`cat "$keyboard_info" | $JQ -r '.minKeymanVersion'`
  local platform_windows=`cat "$keyboard_info" | $JQ -r '.platformSupport.windows'`

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
  local package_upload_path=$base_keyboard/$package_version/$package_filename
  local keyboard_info_upload_path=$base_keyboard/$package_version/$base_keyboard.keyboard_info
  local js_upload_path=$base_keyboard/$package_version/$js_filename

  echo "${t_grn}Package name: $package_name${t_end}"

  prepare_for_upload "$buildpath/$base_keyboard.keyboard_info" "$keyboard_info_upload_path"

  if [[ ! -z $js_filename ]]; then
    prepare_for_upload "$buildpath/$js_filename" "$js_upload_path"
  fi

  if [[ ! -z $package_filename ]]; then
    prepare_for_upload "$buildpath/$package_filename" "$package_upload_path"
  fi
}

##
## (Tweaked clone of build_keyboards in compile.sh)
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

##
## zips all .keyboard_info files from .cache/upload/ into .cache/data/keyboard_info.zip
##

function zip_keyboard_info {
  # We use an @list file to give a specific list of files to
  # 7z so that it does not include pathnames in the archive
  # The "./" on the front of the search is also needed to force 7Z to not
  # include pathnames in the archive
  local files=(./.cache/upload/*/*/*.keyboard_info)
  printf "%s\n" "${files[@]}" > .cache/keyboard_info.list
  "$APP7Z" a ".cache/data/keyboard_info.zip" @.cache/keyboard_info.list
  rm .cache/keyboard_info.list
}

############################################################################################

run

############################################################################################
# EOF
############################################################################################