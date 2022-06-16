#!/usr/bin/env bash

function download_and_unzip_kmcomp() {
  local VERSION=$1
  local TIER=$2
  local URL="https://keyman.com/go/download/kmcomp?version=$VERSION&tier=$TIER"
  echo "Downloading required version of kmcomp.exe and libraries from $URL"
  curl --progress-bar -qL -o "$KEYBOARDROOT/tools/kmcomp.zip" "$URL" || die "Unable to download kmcomp.zip"
  # We'll only unzip files in the root of kmcomp.zip
  unzip -o "$KEYBOARDROOT/tools/kmcomp.zip" -x '**/*' -d "$KEYBOARDROOT/tools/" || die "Unable to unzip kmcomp.zip"
  rm -f "$KEYBOARDROOT/tools/kmcomp.zip"
}

function get_kmcomp_version() {
  local VERSION=$("$KMCOMP_LAUNCHER" "$KMCOMP" | grep -a Version | cut -d" " -f 2 - | sed -E 's/([0-9]+\.[0-9]+\.[0-9]+).*/\1/')
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
    echo "Required version is $REQUIRED_VERSION; current version is $KMCOMP_VERSION"
    download_and_unzip_kmcomp "$REQUIRED_VERSION" "$REQUIRED_TIER"
  # else
    # echo "Required version $REQUIRED_VERSION is the same as the current version $KMCOMP_VERSION"
  fi
}

function kmcomp_exists() {
  [ -f "$KEYBOARDROOT/tools/kmcomp.exe" ]
}

# Test code below:
# KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/..
# get_kmcomp_version