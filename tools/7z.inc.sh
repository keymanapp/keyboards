#!/usr/bin/env bash
#
# Setup APP7Z environment variable according to the user's system
#
# Windows: /c/Program Files/7-Zip/7z.exe
# Linux/macOS: $SEVENZ_HOME/7z
#

## START STANDARD BUILD SCRIPT INCLUDE
# adjust relative paths as necessary

# . "${THIS_SCRIPT%/*}/build-utils.sh"
## END STANDARD BUILD SCRIPT INCLUDE

case "${OSTYPE}" in
  "cygwin")
    APP7Z="/c/Program Files/7-Zip/7z.exe"
    ;;
  "msys")
    APP7Z="/c/Program Files/7-Zip/7z.exe"
    ;;
  *)
    # echo "SEVENZ_HOME: ${SEVENZ_HOME}"
    if [ -z "${SEVENZ_HOME+x}" ]; then
      builder_die "7zip requires SEVENZ_HOME path"
    fi
    APP7Z="$SEVENZ_HOME/7z"
    ;;
esac

readonly APP7Z
