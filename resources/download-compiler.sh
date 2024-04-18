#!/usr/bin/env bash

# Assumes parent script has already set $KEYBOARDROOT and located kmcomp

function download_and_unzip_kmcomp() {
  local VERSION=$1
  local TIER=$2

  local URL="https://keyman.com/go/download/kmcomp?version=$VERSION&tier=$TIER"
  local KMCOMP_ZIP_PATH="$KEYBOARDROOT/tools/kmcomp/"
  local KMCOMP_ZIP_FILE="$KEYBOARDROOT/tools/kmcomp.zip"

  echo "Downloading required version of kmcomp.exe and libraries from $URL"
  curl --progress-bar -qL -o "$KMCOMP_ZIP_FILE" "$URL" || die "Unable to download kmcomp.zip"

  cleanup_legacy_kmcomp
  rm -rf "$KMCOMP_ZIP_PATH"
  mkdir -p "$KMCOMP_ZIP_PATH"
  unzip -q -o "$KMCOMP_ZIP_FILE" -d "$KMCOMP_ZIP_PATH" || die "Unable to unzip kmcomp.zip"

  rm -f "$KMCOMP_ZIP_FILE"
}

function cleanup_legacy_kmcomp() {
  # Older versions of the repo put kmcomp files into tools/, which we've now moved
  # into a separate folder to keep things tidier. If these files are present, we'll
  # remove them
  local f
  for f in keyboard_info.distribution.json keyboard_info.source.json kmcmpdll.dll kmcmpdll.x64.dll kmcomp.exe kmcomp.x64.exe kmconvert.exe; do
    if [ -f "$KEYBOARDROOT/tools/$f" ]; then
      rm -f "$KEYBOARDROOT/tools/$f"
    fi
  done
}

function get_kmcomp_version() {
  local VERSION=$($KMCOMP_LAUNCHER "$KMCOMP" | grep -a Version | cut -d" " -f 2 - | sed -E 's/([0-9]+\.[0-9]+\.[0-9]+).*/\1/')
  echo $VERSION
}

function download_and_check_kmcomp() {
  local force=$1

  local REQUIRED_VERSION=$(cat "$KEYBOARDROOT/tools/kmcomp-version.txt") KMCOMP_VERSION REQUIRED_TIER
  if [ -f "$KEYBOARDROOT/tools/kmcomp-tier.txt" ]; then
    REQUIRED_TIER=$(cat "$KEYBOARDROOT/tools/kmcomp-tier.txt")
  else
    REQUIRED_TIER=stable
  fi

  if [ -f "$KMCOMP" ]; then
    KMCOMP_VERSION=$(get_kmcomp_version)
    # echo "kmcomp.exe version is $KMCOMP_VERSION"
  else
    KMCOMP_VERSION=not-present
    # echo "kmcomp.exe is not available"
  fi

  if [ "$REQUIRED_VERSION" != "$KMCOMP_VERSION" ] || $force; then
    echo "Notice: kmcomp current version is $KMCOMP_VERSION but required version is $REQUIRED_VERSION."
    download_and_unzip_kmcomp "$REQUIRED_VERSION" "$REQUIRED_TIER"
  # else
    # echo "Required version $REQUIRED_VERSION is the same as the current version $KMCOMP_VERSION"
  fi
}

function kmcomp_exists() {
  [ -f "$KMCOMP" ]
}

# Test code below:
# KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/..
# get_kmcomp_version