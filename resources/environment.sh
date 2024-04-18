#!/usr/bin/env bash

function locate_xmllint() {
  # Look for xmllint on path or XMLLINT env var
  if [ -z ${XMLLINT+x} ]; then
    if ! hash xmllint 2>/dev/null; then
      XMLLINT=
    else
      XMLLINT=xmllint
    fi
  fi
}

function locate_kmcomp() {
  KMCOMP="$KEYBOARDROOT/tools/kmcomp/kmcomp.exe"

  case "${OSTYPE}" in
    "cygwin")
      KMCOMP_LAUNCHER=
      ;;
    "msys")
      KMCOMP_LAUNCHER=
      ;;
    "darwin"*)
      # For Catalina (10.15) onwards, must use wine64
      base_macos_ver=10.15
      macos_ver=$(sw_vers -productVersion)
      if verlt "$macos_ver" "$base_macos_ver"; then
        KMCOMP_LAUNCHER=wine
      else
        # On Catalina, and later versions:
        # wine-4.12.1 works; wine-5.0, wine-5.7 do not.
        # retrieve these from:
        # `brew tap gcenx/wine && brew install --cask --no-quarantine wine-crossover`
        # may also need to `sudo spctl --master-disable`
        KMCOMP_LAUNCHER=wine64
        KMCOMP="$KEYBOARDROOT/tools/kmcomp/kmcomp.x64.exe"
      fi
      ;;
    *)
      KMCOMP_LAUNCHER=wine
      ;;
  esac
}

function locate_keyboardinfo_schema() {
  # Master json schema is from https://api.keyman.com/schemas/keyboard_info.json
  KEYBOARDINFO_SCHEMA_JSON="$KEYBOARDROOT/tools/kmcomp/keyboard_info.source.json"
  KEYBOARDINFO_SCHEMA_DIST_JSON="$KEYBOARDROOT/tools/kmcomp/keyboard_info.distribution.json"
}