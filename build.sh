#!/bin/bash

#
# This script is built with commands available to Git Bash on Windows. (mingw32)
#
# This script and scripts in resources/ should be identical in the 
# https://github.com/keymanapp/keyboards and 
# https://github.com/keymanapp/keyboards_starter repos
#

function display_usage {
  echo "Usage: $0 [-validate] [-codesign] [-start] [-s] [-d] [-c] [-w] [-T [kmn|kps]] [-t project_target] [target]"
  exit 1
}

#
# Prevents 'clear' on exit of mingw64 bash shell
#
SHLVL=0

# TODO: Test on macOS as well.
# TODO: Copy the final keyboard_info.json to resources/

#
# Define paths
#
KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
KMCOMP="$KEYBOARDROOT/tools/kmcomp.exe"

if [[ "${OSTYPE}" != "darwin"* ]]; then
  KMCOMP_LAUNCHER=
else
  KMCOMP_LAUNCHER=wine
fi

# Master json schema is from https://api.keyman.com/schemas/keyboard_info.json
KEYBOARDINFO_SCHEMA_JSON="$KEYBOARDROOT/tools/keyboard_info.source.json"
KEYBOARDINFO_SCHEMA_DIST_JSON="$KEYBOARDROOT/tools/keyboard_info.distribution.json"

. "$KEYBOARDROOT/resources/util.sh"
. "$KEYBOARDROOT/resources/compile.sh"
. "$KEYBOARDROOT/resources/validate.sh"
. "$KEYBOARDROOT/resources/merge.sh"

#
# Build parameters
#
# Default is validate keyboard_info, build keyboards, don't code-sign
#

parse_args "$@"

#
# Are we in the keyboards_starter repo?
#

if [[ -d "$KEYBOARDROOT/template" ]]; then
  if [[ -d "$KEYBOARDROOT/release" ]]; then
    die "This repo should not have both a /release/ folder and a /template/ folder. The /template/ folder should be present only in the keyboards_starter repo."
  fi
  KEYBOARDS_STARTER=1
fi

#
# Select action
#

if [ "$DO_BUILD" = false ]; then
  ACTION_VERB=Validating
elif [[ ! -z "$FLAG_CLEAN" ]]; then
  ACTION_VERB=Cleaning
else
  ACTION_VERB=Building
fi

#
# Collect filenames
#

if [[ $KEYBOARDS_STARTER == 1 ]]; then
  KEYBOARD_INFO_PATHS="$KEYBOARDROOT"/*/*/*/*/*.keyboard_info
else
  KEYBOARD_INFO_PATHS="$KEYBOARDROOT"/*/*/*/*.keyboard_info
fi

KEYBOARD_INFOS=($KEYBOARD_INFO_PATHS)
KEYBOARD_INFOS=`printf -- '%s\n' "${KEYBOARD_INFOS[@]}"`

#
# Run build
#

if [[ $KEYBOARDS_STARTER == 1 ]]; then
  if [[ "$TARGET" ]]; then
    build_keyboard "$TARGET"
  else
    build_keyboards
  fi
else
  if [[ "$TARGET" ]]; then
    if [[ "$TARGET" == */*/* ]] && [[ (-d "$TARGET") ]]; then
      group=$(cut -d / -f 1 <<< "$TARGET")
      echo "--- Only building $group $TARGET ---"
      build_keyboard $group "$TARGET"
    elif [[ "$TARGET" == "release" ]] || [[ "$TARGET" == "legacy" ]] || [[ "$TARGET" == "experimental" ]]; then
      # Assuming release|legacy|experimental
      echo "--- Only building $TARGET ---"
      build_keyboards "$TARGET"
    else
      display_usage
    fi
  else
    build_keyboards release
    build_keyboards legacy
    build_keyboards experimental
  fi
fi
