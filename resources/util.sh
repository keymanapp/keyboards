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

  # We are dying, so if previous command didn't actually give
  # an error code, we still want to give an error. We'll give
  # an arbitrary exit code to indicate this
  if [ $rc == 0 ]; then
    rc=999
  fi
  
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
  DO_EXE=true
  WARNINGS_AS_ERRORS=false
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
        -no-exe)
          DO_EXE=false
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
        -h|-?)
          display_usage
          ;;
        -t)
          lastkey=$key
          ;;
        *)
          TARGET="$key"
      esac
    else
      case "$lastkey" in
        -start)
          START="$key"
          ;;
        -t)
          FLAG_TARGET=-t
          PROJECT_TARGET="$key"
          ;;
      esac
      lastkey=
    fi
  done
}

#
# Version comparison functions, rely on sort having a -V option
# From: https://stackoverflow.com/a/4024263/1836776
#

function verlte {
  [ "$1" = "`echo -e "$1\n$2" | sort -V | head -n1`" ]
}

function verlt {
  [ "$1" = "$2" ] && return 1 || verlte $1 $2
}

# verlte 2.5.7 2.5.6 && echo "yes" || echo "no" # no
# verlt 2.4.10 2.4.9 && echo "yes" || echo "no" # no
# verlt 2.4.8 2.4.10 && echo "yes" || echo "no" # yes
# verlte 2.5.6 2.5.6 && echo "yes" || echo "no" # yes
# verlt 2.5.6 2.5.6 && echo "yes" || echo "no" # no 

# if $(verlte 2.5.7 2.5.6) ; then echo "yes" ; else echo "no" ; fi # no
# if $(verlt 2.4.10 2.4.9) ; then echo "yes" ; else echo "no" ; fi # no
# if $(verlt 2.4.8 2.4.10) ; then echo "yes" ; else echo "no" ; fi # yes
# if $(verlte 2.5.6 2.5.6) ; then echo "yes" ; else echo "no" ; fi # yes
# if $(verlt 2.5.6 2.5.6)  ; then echo "yes" ; else echo "no" ; fi # no 
