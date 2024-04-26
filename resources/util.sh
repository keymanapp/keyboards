#!/bin/bash

#
# Define terminal colours
#

if [ -t 2 ]; then
  t_red=$'\e[1;31m'
  t_grn=$'\e[1;32m'
  t_yel=$'\e[1;33m'
  t_blu=$'\e[1;34m'
  t_mag=$'\e[1;35m'
  t_cyn=$'\e[1;36m'
  t_end=$'\e[0m'
fi

#
# We want to avoid globbing * when nothing exists
#

# shopt -s nullglob

#
# Program paths
#

#
# Utility functions
#

pushd () {
    command pushd "$@" > /dev/null
}

popd () {
    command popd "$@" > /dev/null
}

function die {
  local rc=$?
  local msg=$1
  (>&2 echo "${t_red}$msg${t_end}")
  (>&2 echo "${t_red}Aborting with error $rc${t_end}")
  exit $rc
}

function parse_args {
  DO_VALIDATE=true
  DO_BUILD=true
  DO_CODESIGN=false
  DO_UPLOAD_ONLY=false
  DO_ZIP_ONLY=false
  TARGET=
  PROJECT_TARGET=
  FLAG_SILENT=
  FLAG_DEBUG=
  FLAG_CLEAN=
  FLAG_TARGET=
  START=
  
  local key
  
  # Parse args
  for key in "$@"; do
    if [[ -z "$lastkey" ]]; then
      case "$key" in
        -upload-only)
          DO_UPLOAD_ONLY=true
          ;;
        -validate)
          DO_BUILD=false
          ;;
        -codesign)
          DO_CODESIGN=true
          ;;
        -zip-only)
          DO_ZIP_ONLY=true
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
        -h|-?)
          display_usage
          ;;
        -t)
          lastkey=$key
          ;;
        *)
          TARGET="$1"
      esac
    else
      case "$lastkey" in
        -start)
          START="$1"
          ;;
        -t)
          FLAG_TARGET=-t
          PROJECT_TARGET="$1"
          ;;
      esac
      lastkey=
    fi
  done
}