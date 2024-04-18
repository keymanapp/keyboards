#!/usr/bin/env bash

set -e
set -u

#
# This script is built with commands available to Git Bash on Windows. (mingw32)
#
# This script and scripts in resources/ should be identical in the
# https://github.com/keymanapp/keyboards and
# https://github.com/keymanapp/keyboards_starter repos
#

function display_usage {
  echo "Usage: $0 [-validate] [-start] [-s] [-d] [-c] [-w] [-T [kmn|kps]] [-t project_target] [-no-update-compiler|-force-update-compiler] [target]"
  echo "  target should be a folder, for example: release, or release/k, or release/k/keyboard"
  echo "  (on keyboards_starter repo, target is not necessary)"
  echo
  echo "  -no-update-compiler     Don't check kmcomp version or update it before building, unless kmcomp.exe is missing"
  echo "  -force-update-compiler  Redownload and install kmcomp, even if correct version appears already present"
  echo "  -use-legacy-compiler    Pass -use-legacy-compiler flag to kmcomp"
  echo "  -color, -no-color       Force color or no-color for log messages, if omitted detects from console mode"
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

. "$KEYBOARDROOT/resources/util.sh"
. "$KEYBOARDROOT/resources/environment.sh"

locate_xmllint
locate_kmcomp
locate_keyboardinfo_schema

. "$KEYBOARDROOT/resources/download-compiler.sh"
. "$KEYBOARDROOT/resources/compile.sh"
. "$KEYBOARDROOT/resources/validate.sh"
. "$KEYBOARDROOT/resources/merge.sh"
. "$KEYBOARDROOT/resources/external.sh"

#
# Build parameters
#
# Default is validate keyboard_info, build keyboards, don't code-sign
#

function parse_args {
  DO_BUILD=true
  WARNINGS_AS_ERRORS=false
  TARGET=
  PROJECT_TARGET_TYPE=
  PROJECT_TARGET=
  FLAG_SILENT=
  FLAG_DEBUG=
  FLAG_CLEAN=
  FLAG_TARGET=
  FLAG_COLOR=
  FLAG_COMPILER_VERSION=
  START=
  START_BASE=
  START_KEYBOARD=
  DO_UPDATE_COMPILER=true
  USE_LEGACY_COMPILER=
  FORCE_UPDATE_COMPILER=false

  local lastkey=
  local key

  # Parse args
  for key in "$@"; do
    if [[ -z "$lastkey" ]]; then
      case "$key" in
        -validate)
          DO_BUILD=false
          ;;
        -no-update-compiler)
          DO_UPDATE_COMPILER=false
          ;;
        -use-legacy-compiler)
          USE_LEGACY_COMPILER=-use-legacy-compiler
          ;;
        -force-update-compiler)
          FORCE_UPDATE_COMPILER=true
          ;;
        -no-color)
          FLAG_COLOR=-no-color
          ;;
        -color)
          FLAG_COLOR=-color
          ;;
        -no-compiler-version)
          # This flag is used only for regression tests.
          FLAG_COMPILER_VERSION=-no-compiler-version
          ;;
        -start)
          lastkey=$key
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
        -w)
          WARNINGS_AS_ERRORS=true
          ;;
        -h|-\?)
          display_usage
          ;;
        -T)
          lastkey="$key"
          ;;
        -t)
          lastkey="$key"
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
        -t)
          FLAG_TARGET=-t
          PROJECT_TARGET="$key"
          ;;
        -T)
          FLAG_TARGET=-t
          PROJECT_TARGET_TYPE="$key"
          ;;
      esac
      lastkey=
    fi
  done
}

parse_args "$@"

util_set_log_color_mode "$FLAG_COLOR"

#
# Are we in the keyboards_starter repo?
#

KEYBOARDS_STARTER=0
if [[ -d "$KEYBOARDROOT/template" ]]; then
  if [[ -d "$KEYBOARDROOT/release" ]]; then
    die "This repo should not have both a /release/ folder and a /template/ folder. The /template/ folder should be present only in the keyboards_starter repo."
  fi
  KEYBOARDS_STARTER=1
fi

#
# Check if tools need downloading or updating
#

if ! kmcomp_exists || $DO_UPDATE_COMPILER || $FORCE_UPDATE_COMPILER; then
  download_and_check_kmcomp $FORCE_UPDATE_COMPILER
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
    elif [[ "$TARGET" == */* ]] && [[ (-d "$TARGET") ]]; then
      echo "--- Only building $TARGET ---"
      build_keyboard_group "$TARGET"
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
