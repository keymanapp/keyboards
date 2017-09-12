#!/bin/bash

#----------------------------------------------------------------------------------------
# Merge the source .keyboard_info with data gleaned from the output files and place
# the result in the build/ folder
#----------------------------------------------------------------------------------------

function merge_keyboard_info {
  local keyboard_info=$1
  echo "merging $keyboard_info"
  
  cp "$keyboard_info" "build/$keyboard_info" || die
  
  # Need to call into something that reads the .kmp/.kmx and .js data ... yeesh
  
  #
  # Call nodejs to load data from .kmp's kmp.inf into a variable
  # And load the .js data at the same time
  #
  
  #
  # For release/ folder, we can deduce packageFilename and jsFilename
  #
  
  if [ ! -n "$keyboard_info_packageFilename" ]; then
    # See if a .kmp file exists in the build/ folder
    local packages=(build/*.kmp)
    if [ -f "${packages[0]}" ]; then
      keyboard_info_packageFilename=`basename "${packages[0]}"`
    fi
  fi
  
  if [ ! -n "$keyboard_info_jsFilename" ]; then
    # See if a .js file exists in the build/ folder
    local jsfiles=(build/*.js)
    if [ -f "${jsfiles[0]}" ]; then
      keyboard_info_jsFilename=`basename "${jsfiles[0]}"`
    fi
  fi
  
  `"$NODEJS" "$KEYBOARDROOT/resources/merge_compiled_keyboard_info.js" "build/$keyboard_info" "build/$keyboard_info_packageFilename" "build/$keyboard_info_jsFilename"` || die "Failed to run merge_compiled_keyboard_info"
  
  return 0
}
