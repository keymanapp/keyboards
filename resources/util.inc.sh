#!/usr/bin/env bash

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

function do_cleanup() {
  # Removing old version of kmcomp to avoid confusion
  if [[ -d  "$THIS_SCRIPT_PATH/tools/kmcomp" ]]; then
    rm -rf "$THIS_SCRIPT_PATH/tools/kmcomp"
  fi
}