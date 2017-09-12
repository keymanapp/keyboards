#!/bin/bash

#----------------------------------------------------------------------------------------
# Build all the keyboards in a given group
#----------------------------------------------------------------------------------------

function build_keyboards {
  # $1 = path to build keyboards
  # for each keyboard, if a build.sh file exists, call it, otherwise, run the default 
  # build based on the folder name and location.
  
  # excluded folders are: shared, packages and template
  
  local group=$1
  local excluded_folders=" shared packages template "
  
  echo "Building keyboards for $1"
  local shortname
  for shortname in "$KEYBOARDROOT/$group/"*/ ; do
    local base_shortname=$(basename "$shortname")
    if [[ "$base_shortname" == '*' ]]; then
      exit 0
    fi
    
    if [[ "$excluded_folders" == *" $base_shortname "* ]]; then
      echo "- Skipping folder $group/$base_shortname"
    else 
      if [[ "$base_shortname" < "$START" ]]; then
        echo "- Skipping folder $group/$base_shortname, before $START"
      else
        echo "- Building $group/$base_shortname"
        local keyboard
        for keyboard in "$shortname"*/ ; do
          build_keyboard "$group" "$keyboard"
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
    for package in "$KEYBOARDROOT/$group/packages/*/" ; do
      build_package "$group" "$package"
    done
  fi
  
  echo
}

#----------------------------------------------------------------------------------------
# Build a keyboard package, e.g. in the release/ folder
#----------------------------------------------------------------------------------------

function build_package {
  local group=$1
  local package=$2
  local base_package=$(basename "$package")
  echo "  - Building package $group/$base_package"
  # TODO: build_keyboard $group $package
  die "not yet implemented"
}

#----------------------------------------------------------------------------------------
# Build a keyboard
#----------------------------------------------------------------------------------------

function build_keyboard {
  local group=$1
  local keyboard=$2
  local base_keyboard=$(basename "$keyboard")
  
  if [ "$DO_BUILD" = false ]; then
    echo "Validating $base_keyboard"
  else
    echo "Building $base_keyboard"
  fi

  pushd "$keyboard"
  
  #
  # Validate the .keyboard_info before build
  #
  
  validate_keyboard_info "$base_keyboard.keyboard_info" || die "Failed to validate $base_keyboard.keyboard_info in $keyboard"
  validate_keyboard_uniqueness "$group" "$keyboard" "$base_keyboard"
  
  if [ "$DO_BUILD" = false ]; then
    popd
    return 0
  fi
  
  #
  # Get documentation, .js and .kmp data out of the .keyboard_info
  #

  # Load the relevant fields from the .keyboard_info file into local variables
  #
  # Variables are named:
  #  * keyboard_info_packageFilename
  #  * keyboard_info_jsFilename
  #  * keyboard_info_documentationFilename
  #
  
  `"$NODEJS" "$KEYBOARDROOT/resources/extract_keyboard_info_properties.js" "$base_keyboard.keyboard_info"` || die "Failed to run extract_keyboard_info_properties"

  #
  # Determine how we will build the keyboard. If a build.sh file exists, then that does
  # the legwork of building. Otherwise, we assume that the keyboard will be built by the
  # standard mechanisms.
  #
  if [ -f build.sh ]; then
    # We call this build.sh and assume it generates the
    # right stuff
    . ./build.sh || die "Failed to build keyboard $base_keyboard"
  else
    # We will use the standard build based on the group
    if [[ $group == release ]]; then
      # We will do a RELEASE build for $keyboard
      build_release_keyboard "$keyboard" || die "Failed to build release keyboard $base_keyboard"
    else
      # We will do a COPY for $keyboard
      copy_keyboard "$keyboard" || die "Failed to copy $group keyboard $base_keyboard"
    fi
  fi
  
  #
  # Now, validate the build artifacts and merge the data with the .keyboard_info file
  #
  
  if [ -n "$keyboard_info_packageFilename" ]; then test -f "build/$keyboard_info_packageFilename" || die "Could not find output file build/$keyboard_info_packageFilename"; fi
  if [ -n "$keyboard_info_jsFilename" ]; then test -f "build/$keyboard_info_jsFilename" || die "Could not find output file build/$keyboard_info_jsFilename"; fi
  if [ -n "$keyboard_info_documentationFilename" ]; then test -f "build/$keyboard_info_documentationFilename" || die "Could not find output file build/$keyboard_info_documentationFilename"; fi
    
  merge_keyboard_info "$base_keyboard.keyboard_info" || die "Failed to merge keyboard_info for $base_keyboard"
  
  #
  # Back to root of repo
  #
  
  popd
  return 0
}

#----------------------------------------------------------------------------------------
# Copy the pre-compiled keyboard artifacts from the source/ to build/ folder for 
# legacy/ and experimental/ keyboards
#----------------------------------------------------------------------------------------

function copy_keyboard {
  local keyboard=$1
  local base_keyboard=$(basename "$keyboard")
  
  echo "copying keyboard $keyboard"
    
  # Clean build folder
  
  if [[ -d build ]]; then
    rm -rf build/ || die
  fi
  mkdir build || die "Failed to create build folder for $keyboard"
  
  # Copy the target files
  
  if [ -n "$keyboard_info_packageFilename" ]; then
    echo "Package filename = $keyboard_info_packageFilename"
    cp "source/$keyboard_info_packageFilename" "build/$keyboard_info_packageFilename" || die
  fi

  if [ -n "$keyboard_info_jsFilename" ]; then
    echo "JS filename = $keyboard_info_jsFilename"
    cp "source/$keyboard_info_jsFilename" "build/$keyboard_info_jsFilename" || die
  fi
  
  if [ -n "$keyboard_info_documentationFilename" ]; then
    echo "Documentation filename = $keyboard_info_documentationFilename"
    cp "source/$keyboard_info_documentationFilename" "build/$keyboard_info_documentationFilename" || die
  fi
  
  # TODO: Copy fonts
  
  return 0
}

#----------------------------------------------------------------------------------------
# Build a keyboard in the release/ folder from full source
#----------------------------------------------------------------------------------------

function build_release_keyboard {
  local keyboard=$1
  local base_keyboard=$(basename "$keyboard")
  echo "building keyboard $1"
  
  local kpj="$base_keyboard.kpj"
  
  "$KMCOMP" -nologo $FLAG_SILENT $FLAG_CLEAN $FLAG_DEBUG "$kpj" $FLAG_TARGET "$PROJECT_TARGET" || die "Could not compile keyboard"

  return 0
}

