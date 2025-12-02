#!/usr/bin/env bash

. "$KEYBOARDROOT/resources/zip.inc.sh"

function get_kmcomp_full_version() {
  local VERSION=$($KMCOMP_LAUNCHER "$KMCOMP" | grep -a Version | cut -d" " -f 2 - | cut -d"," -f 1 -)
  echo $VERSION
}

function regression_build {
  local SHOULD_BUILD_PACKAGES="$1"
  local SHOULD_DECOMP="$2"
  local SHOULD_ZIP="$3"
  local SHOULD_CLEAN="$4"
  local USE_LEGACY_COMPILER="$5"
  local OUTPUT_PATH=
  if [[ $# -gt 5 ]]; then
    OUTPUT_PATH="$6"
  fi
  local BUILDPATH=
  local BUILDTARGET="-T kmn"
  local DEBUGBUILD=

  #------------------------------------
  # Configuration
  #------------------------------------
  # We don't want to build .kmp files
  # BUILDTARGET=
  if $SHOULD_BUILD_PACKAGES; then
    BUILDTARGET=
  fi

  # TESTING: build just a specific path
  # For testing purposes, probably should ./build.sh -c first
  #BUILDPATH=release/a

  # We'll do a debug build because it makes comparison MUCH easier for .js in particular
  DEBUGBUILD=-d
  #------------------------------------

  #
  # Get the kmcomp version for determining our output folder
  #

  local KMCOMP_VERSION=$(get_kmcomp_full_version)

  #
  # Prepare the output folder
  #

  local OUTPUT="$KEYBOARDROOT/output/$KMCOMP_VERSION"
  if [[ ! -z "$OUTPUT_PATH" ]]; then
    OUTPUT="$OUTPUT_PATH"
  fi

  rm -rf "$OUTPUT"
  mkdir -p "$OUTPUT"

  #
  # Clean and build; we'll force -no-color because we are writing to a log file with tee
  #

  # Only add flag if this version of kmcomp supports it
  local NO_COMPILER_VERSION=
  $KMCOMP_LAUNCHER "$KMCOMP" | grep -- '-no-compiler-version' && NO_COMPILER_VERSION=-no-compiler-version

  local USE_LEGACY_COMPILER_FLAG=
  if $USE_LEGACY_COMPILER; then
    $KMCOMP_LAUNCHER "$KMCOMP" | grep -- '-use-legacy-compiler' && USE_LEGACY_COMPILER_FLAG=-use-legacy-compiler
  fi
  set -o pipefail

  # We want build to fail if keyboard build fails but exit code is hidden by `tee` call
  set -o pipefail

  if [ ! -z "$BUILDPATH" ]; then
    if $SHOULD_CLEAN; then
      "$KEYBOARDROOT/build.sh" -no-color $NO_COMPILER_VERSION -no-update-compiler -c $BUILDPATH 2>&1 | tee "$OUTPUT/clean.log" || die "Unable to clean keyboards"
    fi
    "$KEYBOARDROOT/build.sh" -no-color $NO_COMPILER_VERSION -no-update-compiler $DEBUGBUILD $BUILDTARGET $BUILDPATH 2>&1 | tee "$OUTPUT/build.log" || die "Unable to build keyboards"
  else
    if $SHOULD_CLEAN; then
      "$KEYBOARDROOT/build.sh" -no-color $NO_COMPILER_VERSION $USE_LEGACY_COMPILER_FLAG -no-update-compiler -c release 2>&1 | tee "$OUTPUT/clean.log" || die "Unable to clean keyboards"
      "$KEYBOARDROOT/build.sh" -no-color $NO_COMPILER_VERSION $USE_LEGACY_COMPILER_FLAG -no-update-compiler -c experimental 2>&1 | tee -a "$OUTPUT/clean.log" || die "Unable to clean keyboards"
    fi
    "$KEYBOARDROOT/build.sh" -no-color $NO_COMPILER_VERSION $USE_LEGACY_COMPILER_FLAG -no-update-compiler $DEBUGBUILD $BUILDTARGET release 2>&1 | tee "$OUTPUT/build.log" || die "Unable to build keyboards"
    "$KEYBOARDROOT/build.sh" -no-color $NO_COMPILER_VERSION $USE_LEGACY_COMPILER_FLAG -no-update-compiler $DEBUGBUILD $BUILDTARGET experimental 2>&1 | tee -a "$OUTPUT/build.log" || die "Unable to build keyboards"
  fi

  set +o pipefail

  #
  # Copy results into target folder
  #

  echo "Copying final build files into $OUTPUT/"
  cp -u "$KEYBOARDROOT"/release/*/*/build/* "$OUTPUT/"
  cp -u "$KEYBOARDROOT"/experimental/*/*/build/* "$OUTPUT/"

  #
  # Decompile all .kmx in output/ into .kmn; this helps us with text comparisons and round-tripping
  #

  if $SHOULD_DECOMP && [ -f "$KEYBOARDROOT/tools/kmcomp/kmdecomp.exe" ]; then
    echo "Decompiling all .kmx"
    local i
    for i in "$OUTPUT/"*.kmx; do
      echo "Decompiling $i"
      $KMCOMP_LAUNCHER "$KEYBOARDROOT/tools/kmcomp/kmdecomp.exe" "$i" || die "Failed to decompile $i"
    done
  fi

  #
  # Zip the resulting files
  #

  if $SHOULD_ZIP; then
    echo "Zipping results into $OUTPUT.zip"
    create_zip_file_strip_paths "$OUTPUT.zip" "$OUTPUT/*"
  fi
}
