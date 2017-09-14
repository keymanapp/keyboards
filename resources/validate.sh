#!/bin/bash

#
# validate .keyboard_info
#

function validate_keyboard_info {
  if [ ! -f "$1" ]; then
    echo "Keyboard info file $1 is missing"
    return 99
  fi
  
  "$KMCOMP" -s -v "$1" || return 1
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

  local folderlist=$(grep -w "/$base_keyboard/$base_keyboard.keyboard_info" <<< "$KEYBOARD_INFOS")
#   ls -d "*/*/$base_keyboard") # | grep -v $group/$shortname/$base_keyboard)
  local duplicate_count=$(wc -l <<< "$folderlist")
    
  if [[ $duplicate_count -gt 1 ]]; then
    die "Keyboard $base_keyboard exists in more than one location:
$folderlist"
  fi

  return 0  
}
