#!/bin/bash

#
# validate .keyboard_info
#

function validate_keyboard_info {
  if [ ! -f "$1" ]; then
    echo "Keyboard info file $1 is missing"
    return 99
  fi

  $KMCOMP_LAUNCHER "$KMCOMP" -s -v "$1" || return 1
  return 0
}

#
# validate .kps file per XML schema
#
function validate_package_file {
  if [ -z "$XMLLINT" ]; then
    # if xmllint is not installed, then we'll just skip validation
    echo "Note: not validating structure of package file $1"
    return 0
  fi

  if [ ! -f "$1" ]; then
    echo "Note: Package file $1 is missing (not failing build)"
    return 0
  fi

  "$XMLLINT" --schema "$KEYBOARDROOT/tools/kps.xsd" --noout "$1" || return 1
  return 0
}

#
# Validate that the keyboard exists in only one folder in the repository
#

function validate_keyboard_uniqueness {
  local group=$1
  local keyboard=$2
  local base_keyboard=$3
  local shortname=$(basename `dirname "$keyboard"`)

  local folderlist=$(echo "$KEYBOARD_INFOS" | grep "/$base_keyboard/$base_keyboard.keyboard_info")
#   ls -d "*/*/$base_keyboard") # | grep -v $group/$shortname/$base_keyboard)
  local duplicate_count=$(wc -l <<< "$folderlist")

  if [[ $duplicate_count -gt 1 ]]; then
    die "Keyboard $base_keyboard exists in more than one location:
$folderlist"
  fi

  return 0
}
