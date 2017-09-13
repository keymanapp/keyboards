#!/bin/bash

#
# This script is built with commands available to Git Bash on Windows.

function display_usage {
  echo "Usage: $0 [-validate] [-codesign] [-start] [-s] [-d] [-c] [-t project_target] [target]"
  exit
}

# TODO: Test on macOS as well.
# TODO: Copy the final keyboard_info.json to resources/

KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
KEYBOARDINFO_SCHEMA_JSON="$KEYBOARDROOT/tools/keyboard_info.source.json"
KEYBOARDINFO_SCHEMA_DIST_JSON="$KEYBOARDROOT/tools/keyboard_info.distribution.json"
# KMCOMP="$KEYBOARDROOT/tools/kmcomp.exe"
KMCOMP="/c/Projects/keyman/open/windows/src/developer/kmcomp/kmcomp.exe"

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

DO_VALIDATE=true
DO_BUILD=true
DO_CODESIGN=false
TARGET=
PROJECT_TARGET=
FLAG_SILENT=
FLAG_DEBUG=
FLAG_CLEAN=
FLAG_TARGET=
START=
# TODO: implement silent, debug, clean

# Parse args
while [[ $# -gt 0 ]] ; do
  key="$1"
  case $key in
    -validate)
      DO_BUILD=false
      ;;
    -codesign)
      DO_CODESIGN=true
      ;;
    -start)
      shift
      START=$1
      ;;
    -s)
      FLAG_SILENT=-s
      ;;
    -d)
      FLAG_DEBUG=-d
      ;;
    -c)
      FLAG_CLEAN=-c
      ;;
    -h|-?)
      display_usage
      ;;
    -t)
      shift
      FLAG_TARGET=-t
      PROJECT_TARGET=$1
      ;;
    *)
      TARGET=$1
  esac
  shift # past argument
done

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
