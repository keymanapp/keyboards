#!/usr/bin/env bash

function regression_build {
  local SHOULD_BUILD_PACKAGES="$1"
  local SHOULD_DECOMP="$2"
  local BUILDPATH=
  local BUILDTARGET=
  local DEBUGBUILD=

  #------------------------------------
  # Configuration
  #------------------------------------
  # We don't want to build .kmp files
  # BUILDTARGET=
  if $SHOULD_BUILD_PACKAGES; then
    BUILDTARGET="-T kmn"
  fi

  # TESTING: build just a specific path
  #BUILDPATH=release/a

  # We'll do a debug build because it makes comparison MUCH easier for .js in particular
  DEBUGBUILD=-d
  #------------------------------------

  #
  # Get the kmcomp version for determining our output folder
  #

  local KMCOMP_VERSION=$(get_kmcomp_version)

  #
  # Prepare the output folder
  #

  local OUTPUT="$KEYBOARDROOT/output/$KMCOMP_VERSION"
  rm -rf "$OUTPUT"
  mkdir -p "$OUTPUT"

  #
  # Clean and build; we'll force -no-color because we are writing to a log file with tee
  #

  "$KEYBOARDROOT/build.sh" -no-color -no-update-compiler -c $BUILDPATH 2>&1 | tee "$OUTPUT/clean.log"
  "$KEYBOARDROOT/build.sh" -no-color -no-update-compiler $DEBUGBUILD $BUILDTARGET $BUILDPATH 2>&1 | tee "$OUTPUT/build.log"

  #
  # Copy results into target folder
  #

  echo "Copying final build files into $OUTPUT/"
  cp -u "$KEYBOARDROOT"/release/*/*/build/* "$OUTPUT/"

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
}
