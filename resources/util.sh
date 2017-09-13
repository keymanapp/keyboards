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
