#!/bin/bash

set -e
# TODO: set -u

#
# Setup environment for all build scripts
#

KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && cd .. && pwd )"

case "${OSTYPE}" in
  "cygwin") 
    KMCOMP_LAUNCHER=
    KMCOMP_DEFAULT_BITNESS=x86
    ;;
  "msys") 
    KMCOMP_LAUNCHER=
    KMCOMP_DEFAULT_BITNESS=x86
    ;;
  *) 
    KMCOMP_LAUNCHER=wine
    KMCOMP_DEFAULT_BITNESS=x64
    ;;
esac

# Allow override of compiler selection via environment KMCOMP_BITNESS
if [[ -z $KMCOMP_BITNESS ]]; then
  KMCOMP_BITNESS=$KMCOMP_DEFAULT_BITNESS
fi

if [[ $KMCOMP_BITNESS == x86 ]]; then
  KMCOMP="$KEYBOARDROOT/tools/kmcomp.exe"
else
  KMCOMP="$KEYBOARDROOT/tools/kmcomp.x64.exe"
fi

#echo "KMCOMP=$KMCOMP"
#echo "KEYBOARDROOT=$KEYBOARDROOT"
#echo "KMCOMP_BITNESS=$KMCOMP_BITNESS"
