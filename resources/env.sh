#!/bin/bash

#
# Setup environment for all build scripts
#

KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && cd .. && pwd )"

#
# Check execution environment for x86 vs x64
#
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

#
# Allow override of compiler selection via environment KMCOMP_BITNESS
#

if [ -v ${KMCOMP_BITNESS+defined} ]; then
  KMCOMP_BITNESS=$KMCOMP_DEFAULT_BITNESS
fi

if [[ $KMCOMP_BITNESS == x86 ]]; then
  KMCOMP="$KEYBOARDROOT/tools/kmcomp.exe"
else
  KMCOMP="$KEYBOARDROOT/tools/kmcomp.x64.exe"
fi

echo "Using $KMCOMP_BITNESS bit version of kmcomp"
#echo "KMCOMP=$KMCOMP"
#echo "KEYBOARDROOT=$KEYBOARDROOT"
#echo "KMCOMP_BITNESS=$KMCOMP_BITNESS"
