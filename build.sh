#!/bin/bash

#
# This script is built with commands available to Git Bash on Windows.

function display_usage {
  echo "Usage: $0 [-validate] [-codesign] [-start] [-s] [-d] [-c] [-t project_target] [target]"
  exit
}

# TODO: Test on macOS as well.
# TODO: Copy the final keyboard_info.json to resources/

export KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
export KEYBOARDINFO_SCHEMA_JSON="$KEYBOARDROOT/tools/keyboard_info.source.json"
export KEYBOARDINFO_SCHEMA_DIST_JSON="$KEYBOARDROOT/tools/keyboard_info.distribution.json"
export KMCOMP="$KEYBOARDROOT/tools/kmcomp.exe"

# KMCOMP="/c/Projects/keyman/open/windows/src/developer/kmcomp/kmcomp.exe"

# Master is https://api.keyman.com/schemas/keyboard_info.json

. "$KEYBOARDROOT/resources/util.sh"
. "$KEYBOARDROOT/resources/compile.sh"
. "$KEYBOARDROOT/resources/validate.sh"
. "$KEYBOARDROOT/resources/merge.sh"

#
# Build parameters
#
# Default is validate keyboard_info, build keyboards, don't codesign
#

parse_args $@

#
# Check build environment
#

#TODO: anything else to check?

#
# Collect filenames
#
#TODO: change this to xxx = ("$KEYBOARDROOT"/*/*/*/*.keyboard_info) and update usage to avoid parsing ls output
KEYBOARD_INFOS=$(ls -1 "$KEYBOARDROOT"/*/*/*/*.keyboard_info)

#
# Run build
#

if [[ "$TARGET" ]]; then
  if [[ "$TARGET" == */* ]] && [[ (-d "$TARGET") ]]; then
    group=$(cut -d / -f 1 <<< "$TARGET")
    echo "--- Only building $group $TARGET ---"
    build_keyboard $group "$TARGET"
  elif [[ "$TARGET" == "release" ]] || [[ "$TARGET" == "legacy" ]] || [[ "$TARGET" == "experimental" ]]; then
    # Assuming release|legacy|experimental
    echo "--- Only building $TARGET ---"
    build_keyboards "$TARGET"
  else
    echo "Usage: build_keyboards [release|legacy|experimental[/k/keyboard]]"
  fi
else
  build_keyboards release
  build_keyboards legacy
  build_keyboards experimental
fi
