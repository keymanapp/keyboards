#!/bin/bash

#----------------------------------------------------------------------------------------
# Build all the keyboards in a given group
#----------------------------------------------------------------------------------------

function build_keyboards {
  # $1 = path to build keyboards
  # for each keyboard, if a build.sh file exists, call it, otherwise, run the default
  # build based on the folder name and location.

  # excluded folders are: shared, packages and template

  if [[ $KEYBOARDS_STARTER == 1 ]]; then
    local starter_keyboard
    local excluded_folders=" docs resources template tools "
    for starter_keyboard in "$KEYBOARDROOT/"*/ ; do
      if [ ! "$(ls -A $starter_keyboard)" ]; then
        if [ "$WARNINGS_AS_ERRORS" = true ]; then
          die "$starter_keyboard is empty."
        fi
        echo "$starter_keyboard is empty. skipping..."
        continue
      fi

      local base_starter_keyboard=$(basename "$starter_keyboard")
      if [[ "$base_starter_keyboard" == '*' ]]; then
        exit 0
      fi

      if [[ "$excluded_folders" == *" $base_starter_keyboard "* ]]; then
        echo "- Skipping folder /$base_starter_keyboard"
      else
        echo "- $ACTION_VERB /$base_starter_keyboard"
        build_keyboard "$base_starter_keyboard"
      fi
    done
  else
    local group=$1
    local excluded_folders=" shared packages template "

    echo "$ACTION_VERB keyboards for $1"

    local shortname
    for shortname in "$KEYBOARDROOT/$group/"*/ ; do
      if [ ! "$(ls -A $shortname)" ]; then
        if [ "$WARNINGS_AS_ERRORS" = true ]; then
          die "$shortname is empty."
        fi
        echo "$shortname is empty. skipping..."
        continue
      fi

      local base_shortname=$(basename "$shortname")
      if [[ "$base_shortname" == '*' ]]; then
        exit 0
      fi

      if [[ "$excluded_folders" == *" $base_shortname "* ]]; then
        echo "- Skipping folder $group/$base_shortname"
      else
        if [[ "$base_shortname" < "$START_BASE" ]]; then
          echo "- Skipping folder $group/$base_shortname, before $START_BASE"
        else
          echo "- $ACTION_VERB $group/$base_shortname"
          local keyboard
          for keyboard in "$shortname"*/ ; do
            local basename_keyboard
            basename_keyboard=`basename "$keyboard"`
            if [[ "$basename_keyboard" < "$START_KEYBOARD" ]]; then
              echo "- Skipping keyboard $keyboard, before $START_KEYBOARD"
            else
              build_keyboard "$group" "$keyboard"
            fi
          done
        fi
      fi
    done

    #
    # If a packages/ folder exists, we now need to build it. We have to wait until the keyboards are built because it
    # depends on files created by the keyboards
    #

    if [[ -z "$PROJECT_TARGET_TYPE" ]]; then
      if [ -d "$KEYBOARDROOT/$group/packages" ]; then
        echo "- $ACTION_VERB $group/packages"
        local package
        for package in "$KEYBOARDROOT/$group/packages/"*/ ; do
          build_keyboard "$group" "$package"
        done
      fi
    fi
  fi

  return 0
}

function build_keyboard_group {
  # Build a single group of keyboards, e.g. release/a
  # This function is only valid for the keyboards repo; it is
  # unnecessary for the keyboards_starter repo.
  local shortname=$(basename "$1")
  local group=$(dirname "$1")

  local keyboard
  for keyboard in "$group/$shortname/"*/ ; do
    build_keyboard "$group" "$keyboard"
  done
}

#----------------------------------------------------------------------------------------
# Build a keyboard
#----------------------------------------------------------------------------------------

function build_keyboard {
  if [[ $KEYBOARDS_STARTER == 1 ]]; then
    local base_keyboard=$1
    local shortname=($base_keyboard/release/*)
    local group=release
    shortname=$(basename $shortname)
    local keyboard="$base_keyboard/release/$shortname/$base_keyboard"
  else
    local group=$1
    local keyboard=$2
    local base_keyboard=$(basename "$keyboard")
    local shortname=$(basename $(dirname "$keyboard"))
  fi

  echo "$t_blu$ACTION_VERB $base_keyboard$t_end"

  pushd "$keyboard"

  #
  # Check if .keyboard_info doesn't exist
  #
  local keyboard_infoFilename="$base_keyboard.keyboard_info"
  if [ ! -f "$keyboard_infoFilename" ]; then
    if [ "$WARNINGS_AS_ERRORS" = true ]; then
      die "$keyboard_infoFilename doesn't exist"
    fi
    echo "  No $keyboard_infoFilename file. Skipping..."
    popd
    return 0
  fi

  #
  # Validate the .keyboard_info and .kps before build
  #

  local packageFilename="source/$base_keyboard.kps"
  validate_keyboard_info "$keyboard_infoFilename" || die "Failed to validate $keyboard_infoFilename in $keyboard"
  validate_keyboard_uniqueness "$group" "$keyboard" "$base_keyboard"
  validate_package_file "$packageFilename" || die "Failed to validate $packageFilename"

  if [ "$DO_BUILD" = false ]; then
    popd
    return 0
  fi

  #
  # Get documentation, .js and .kmp data out of the .keyboard_info
  #
  # Load the relevant fields from the .keyboard_info file into local variables. These are
  # needed for the legacy/ folder, where we don't assume filenames. For release/ and
  # experimental/ folders, we can determine because there will only ever be one matching
  # filename.
  #
  # Variables are named:
  #  * keyboard_info_license
  #  * keyboard_info_packageFilename
  #  * keyboard_info_jsFilename
  #  * keyboard_info_documentationFilename
  #

  local keyboard_info_license=
  local keyboard_info_packageFilename=
  local keyboard_info_jsFilename=
  local keyboard_info_documentationFilename=

  lines=$($KMCOMP_LAUNCHER "$KMCOMP" -nologo -extract-keyboard-info packageFilename,license,jsFilename,documentationFilename "$base_keyboard.keyboard_info" | grep -v "^$" | tr -d "\r") || die "Failed to extract keyboard_info properties: at least license must be specified"
  lines="$(sed "s/^/keyboard_info_/g" <<< "$lines")"

  eval $lines

  #
  # Determine how we will build the keyboard. If a build.sh file exists, then that does
  # the legwork of building. Otherwise, we assume that the keyboard will be built by the
  # standard mechanisms.
  #
  if [ -f build.sh ]; then
    # We call this build.sh and assume it generates the
    # right stuff
    if [[ ! -z "$PROJECT_TARGET_TYPE" ]]; then
      PROJECT_TARGET="$base_keyboard.$PROJECT_TARGET_TYPE"
      FLAG_TARGET=-t
    fi
    ./build.sh $FLAG_SILENT $FLAG_CLEAN $FLAG_DEBUG "$kpj" $FLAG_TARGET "$PROJECT_TARGET" || die "Custom build script failed with an error"
  else
    # We will use the standard build based on the group
    if [[ $group == release ]] || [[ $group == experimental ]] || [[ $KEYBOARDS_STARTER == 1 ]]; then
      # We will do a release/experimental build for $keyboard (experimental keyboards are built same way as release keyboards)
      build_release_keyboard "$keyboard" || die "Failed to build $group keyboard $base_keyboard"
    else
      # We will do a COPY for $keyboard
      copy_keyboard "$keyboard" || die "Failed to copy $group keyboard $base_keyboard"
    fi
  fi

  if [[ ! -z "$FLAG_CLEAN" ]]; then
    popd
    return 0
  fi

  if [[ ! -z "$PROJECT_TARGET_TYPE" ]]; then
    popd
    return 0
  fi

  #
  # Copy the documentation file manually
  #

  if [ -n "$keyboard_info_documentationFilename" ]; then
    #echo "Documentation filename = $keyboard_info_documentationFilename"
    cp "source/$keyboard_info_documentationFilename" "build/$keyboard_info_documentationFilename" || die
  fi

  #
  # Now, validate the build artifacts and merge the data with the .keyboard_info file.
  # These tests are mostly needed for the legacy/ folder.
  #

  if [ -n "$keyboard_info_packageFilename" ]; then test -f "build/$keyboard_info_packageFilename" || die "Could not find output file build/$keyboard_info_packageFilename"; fi
  if [ -n "$keyboard_info_jsFilename" ]; then test -f "build/$keyboard_info_jsFilename" || die "Could not find output file build/$keyboard_info_jsFilename"; fi
  if [ -n "$keyboard_info_documentationFilename" ]; then test -f "build/$keyboard_info_documentationFilename" || die "Could not find output file build/$keyboard_info_documentationFilename"; fi

  merge_keyboard_info "$base_keyboard.keyboard_info" $group $shortname "$base_keyboard" || die "Failed to merge keyboard_info for $base_keyboard"

  #
  # Back to root of repo
  #

  popd
  return 0
}

#----------------------------------------------------------------------------------------
# Copy the pre-compiled keyboard artifacts from the source/ to build/ folder for
# legacy/ keyboards
#----------------------------------------------------------------------------------------

function copy_keyboard {
  local keyboard=$1
  local base_keyboard=$(basename "$keyboard")

  if [[ ! -z "$FLAG_CLEAN" ]]; then
    echo "Cleaning keyboard $keyboard"
  else
    echo "Copying keyboard $keyboard"
  fi

  # Clean build folder

  if [[ -d build ]]; then
    rm -rf build/ || die
  fi

  if [[ ! -z "$FLAG_CLEAN" ]]; then
    return 0
  fi

  # Recreate build folder

  mkdir build || die "Failed to create build folder for $keyboard"

  # Copy the target files

  if [ -n "$keyboard_info_packageFilename" ]; then
    #echo "Package filename = $keyboard_info_packageFilename"
    cp "source/$keyboard_info_packageFilename" "build/$keyboard_info_packageFilename" || die
  fi

  if [ -n "$keyboard_info_jsFilename" ]; then
    #echo "JS filename = $keyboard_info_jsFilename"
    cp "source/$keyboard_info_jsFilename" "build/$keyboard_info_jsFilename" || die
  fi

  # TODO: Copy fonts

  return 0
}

#----------------------------------------------------------------------------------------
# Build a keyboard in the release/ or experimental/ folders from full source
#----------------------------------------------------------------------------------------

function build_release_keyboard {
  local keyboard=$1
  local base_keyboard=$(basename "$keyboard")
  echo "$ACTION_VERB keyboard $1"

  local kpj="$base_keyboard.kpj"

  # Clean build folder

  if [[ -d build ]]; then
    rm -rf build/ || die
  fi

  if [[ ! -z "$FLAG_CLEAN" ]]; then
    # We only remove the tests folder when cleaning the repo
    if [[ -d tests ]]; then
      rm -rf tests/ || die
    fi
    return 0
  fi

  # Recreate build folder

  mkdir build || die "Failed to create build folder for $keyboard"

  if [[ ! -z "$PROJECT_TARGET_TYPE" ]]; then
    PROJECT_TARGET="$base_keyboard.$PROJECT_TARGET_TYPE"
  fi

  $KMCOMP_LAUNCHER "$KMCOMP" -nologo $FLAG_SILENT $FLAG_CLEAN $FLAG_DEBUG "$kpj" $FLAG_TARGET "$PROJECT_TARGET" || die "Could not compile keyboard"

  return 0
}

