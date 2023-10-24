#!/usr/bin/env bash
#
# This script is built with commands available to Git Bash on Windows. (mingw32)

# Prevents 'clear' on exit of mingw64 bash shell
SHLVL=0

## START STANDARD BUILD SCRIPT INCLUDE
# adjust relative paths as necessary
THIS_SCRIPT="$(readlink -f "${BASH_SOURCE[0]}")"
. "${THIS_SCRIPT%/*}/resources/builder.inc.sh"
# END STANDARD BUILD SCRIPT INCLUDE

# script runs from repo root
cd "$THIS_SCRIPT_PATH"

. "./resources/util.inc.sh"
. "./resources/build_targets.inc.sh"
. "./resources/external.inc.sh"

builder_describe \
  "Build Keyman keyboards" \
  clean \
  configure \
  build \
  test \
  "--keyboard,-k=KEYBOARD    Build specific targets only, e.g. release/ or release/a/ or release/a/anii/, comma separated" \
  "--silent,-s               Suppress unnecessary messages"

builder_describe_outputs \
  configure   /node_modules

builder_parse "$@"

#------------------------------------------------------------
# Definitions
#------------------------------------------------------------

if [[ -z ${KMC+x} ]]; then
  export KMC="${REPO_ROOT}/node_modules/.bin/kmc"
  readonly KMC
fi

# TODO: remove -W
export KMC_BUILD_PARAMS="build $builder_debug -W --for-publishing"
readonly KMC_BUILD_PARAMS

#------------------------------------------------------------
# Commands
#------------------------------------------------------------

function do_clean() {
  rm -f build_targets.txt build_targets_temp.txt build_external_targets.txt build_fv_all.txt build_legacy.txt
  do_clean_externals
  do_clean_targets
}

function do_clean_externals() {
  test -f build_external_targets.txt || return 0
  local keyboard=
  build_external_targets.txt
  while IFS= read -r keyboard; do
    pushd "$keyboard"
    clean_external_target_folder
    popd
  done < build_external_targets.txt
}

function do_clean_targets() {
  test -f build_targets.txt || return 0
  local keyboard=
  while IFS= read -r keyboard; do
    rm -rf "$keyboard/build/"
    rm -f "$keyboard/*.kpj.user"
  done < build_targets.txt
}

#------------------------------------------------------------

function do_configure() {
  npm install --no-optional
  builder_echo "kmc version: $($KMC --version)"
}

#------------------------------------------------------------

function do_build() {
  do_build_externals
  do_build_targets
  do_build_legacy
  do_build_fv_all
}

function do_build_externals() {
  test -f build_external_targets.txt || return 0
  local keyboard=
  while IFS= read -r keyboard; do
    local keyboard_basename=$(basename $keyboard)
    builder_echo "Downloading external keyboard $keyboard"
    pushd "$keyboard"
    retrieve_external_keyboard

    if [ -f .source_is_binary ]; then
      mkdir -p build/
      cp $keyboard_basename.keyboard_info build/
      cp source/* build/
      # TODO: consider verifying the .keyboard_info
    else
      # add it to list of build targets
      echo "$keyboard" >> "$THIS_SCRIPT_PATH/build_targets.txt"
    fi

    popd
  done < build_external_targets.txt
}

function do_build_targets() {
  test -f build_targets.txt || return 0
  $KMC $KMC_BUILD_PARAMS @build_targets.txt
}

function do_build_legacy() {
  test -f build_legacy.txt || return 0
  while IFS= read -r path; do
    local keyboard="$(basename "$path")"
    if [[ -f $path/$keyboard.keyboard_info ]]; then
      builder_echo "Building $path"
      rm -rf "$path/build"
      mkdir -p "$path/build"
      cp "$path/$keyboard.keyboard_info" "$path/build/"
      if [[ -f "$path/source/$keyboard.js" ]]; then
        cp "$path/source/$keyboard.js" "$path/build/"
      fi
      if [[ -f "$path/source/$keyboard.kmp" ]]; then
        cp "$path/source/$keyboard.kmp" "$path/build/"
      fi
    fi
  done < build_legacy.txt
}

function do_build_fv_all() {
  test -f build_fv_all.txt || return 0
  ./release/packages/fv_all/build.sh
}

#------------------------------------------------------------

function do_test() {
  echo "TODO: support test"
  # ./node_modules/.bin/kmc test @build_targets.txt
}

#------------------------------------------------------------
# Main
#------------------------------------------------------------

if builder_has_option --keyboard; then
  # Split $KEYBOARD into an array, split with comma
  IFS=',' read -ra TARGETS <<< "$KEYBOARD"
else
  TARGETS=(release experimental legacy)
fi

collect_build_targets

builder_run_action clean      do_clean
builder_run_action configure  do_configure
builder_run_action build      do_build
builder_run_action test       do_test
