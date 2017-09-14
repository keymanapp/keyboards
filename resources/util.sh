#!/bin/bash

#
# Define terminal colours
#

t_red=$'\e[1;31m'
t_grn=$'\e[1;32m'
t_yel=$'\e[1;33m'
t_blu=$'\e[1;34m'
t_mag=$'\e[1;35m'
t_cyn=$'\e[1;36m'
t_end=$'\e[0m'

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
  echo "${t_red}$msg${t_end}"
  echo "${t_red}Aborting with error $rc${t_end}"
  exit $rc
}

function parse_args {
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
}