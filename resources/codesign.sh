#!/bin/bash

# Code signing functionality

SERVERLIST=(http://timestamp.comodoca.com/authenticode http://timestamp.verisign.com/scripts/timstamp.dll http://timestamp.globalsign.com/scripts/timestamp.dll http://tsa.starfieldtech.com)
RFC3161SERVERLIST=(http://timestamp.comodoca.com/rfc3161)

function codesign {
  local target="$1"
  local SIGNNAME="$2"
  local SIGNFILE="$target"

  local file_extension=${target##*.}
  if [[ "$file_extension" == "msi" ]] || [[ "$file_extension" == "msm" ]]; then
    # msi can only be single-signed, not dual-signed
    "$SIGNTOOL" sign //f "$SC_PFX_SHA256" //fd sha256 //du "$SC_URL" //p "$SC_PWD" //v //d "$SIGNNAME" "$SIGNFILE" || die "Unable to sign with sha256 $SIGNFILE"
    codesign_timestamp "$SIGNFILE" sha256msi
  else
    # dual sign, first with sha1, then with sha256
    "$SIGNTOOL" sign //f "$SC_PFX_SHA1" //fd sha1 //du "$SC_URL" //p "$SC_PWD" //v //d "$SIGNNAME" "$SIGNFILE" || die "Unable to sign with sha1 $SIGNFILE"
    codesign_timestamp "$SIGNFILE" sha1
    "$SIGNTOOL" sign //as //f "$SC_PFX_SHA256" //fd sha256 //du "$SC_URL" //p "$SC_PWD" //v //d "$SIGNNAME" "$SIGNFILE" || die "Unable to sign with sha256 $SIGNFILE"
    codesign_timestamp "$SIGNFILE" sha256
  fi
}

function codesign_timestamp {
  local SIGNFILE=$1
  local MODE=$2
  
  if [[ $MODE == sha1 ]]; then
    local SERVERS=$SERVERLIST
  else
    local SERVERS=$RFC3161SERVERLIST
  fi
  
  local a
  local s
  
  for a in `seq 1 10`; do
    for s in $SERVERS; do
      # try to timestamp the file. This operation is unreliable and may need to be repeated...
      case $MODE in
        sha1)
          "$SIGNTOOL" timestamp //t "$s" //v "$SIGNFILE" && return 0
          ;;
        sha256)
          "$SIGNTOOL" timestamp //tr "$s" //tp 1 //td sha256 //v "$SIGNFILE" && return 0
          ;;
        sha256msi)
          "$SIGNTOOL" timestamp //tr "$s" //td sha256 //v "$SIGNFILE" && return 0
          ;;
      esac
      
      echo "Signing failed. Probably cannot find the timestamp server at $s"
    done

    sleep 2
  done

  return 1
}
