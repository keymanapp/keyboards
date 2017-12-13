#!/bin/bash

#----------------------------------------------------------------------------------------
# Merge the source .keyboard_info with data gleaned from the output files and place
# the result in the build/ folder
#----------------------------------------------------------------------------------------

function merge_keyboard_info {
  local keyboard_info=$1
  local group=$2
  local shortname=$3
  
  echo "Merging $keyboard_info"
  
  cp "$keyboard_info" "build/$keyboard_info" || die
  
  # Need to call into kmcomp to read the .kmp/.kmx and .js data
  # and merge the compiled data with the source keyboard_info data
  
  #
  # We can try and deduce packageFilename and jsFilename
  #
   
  if [ ! -n "$keyboard_info_packageFilename" ]; then
    # See if a .kmp file exists in the build/ folder
    local packages=(build/*.kmp)
    if [ -f "${packages[0]}" ]; then
      keyboard_info_packageFilename=`basename "${packages[0]}"`
    fi
  fi
    
  if [ ! -n "$keyboard_info_jsFilename" ]; then
    # See if a .js file exists in the build/ folder, ignore the obsolete _load file
    local jsfiles=(build/*.js)
    if [[ "${jsfiles[0]}" == *_load.js ]]; then
      jsfile="${jsfiles[1]}"
    else
      jsfile="${jsfiles[0]}"
    fi
    if [ -f "$jsfile" ]; then
      keyboard_info_jsFilename=`basename "$jsfile"`
    fi
  fi
  
  #
  # Here we come a bit unstuck with slash vs backslash, because of quoted parameters
  # to a Windows PE executable. So we pass \\ instead of / to avoid the problem. Lots
  # of ways to skin this cat but this one works as well as any!
  #

  local pOut=build\\"$keyboard_info"
  local pInKmp=
  local pInKmpM=
  local pInJs=
  local pInJsM=
  local pValidateId=
    
  if [ -f build/"$keyboard_info_packageFilename" ]; then
    pInKmp=build\\"$keyboard_info_packageFilename"
    pInKmpM=-m
  fi

  if [ -f build/"$keyboard_info_jsFilename" ]; then
    pInJs=build\\"$keyboard_info_jsFilename"
    pInJsM=-m
  fi
  
  if [[ $group == release && $shortname != packages ]]; then
    pValidateId=-m-validate-id
  fi
  
  if [[ -z "$pInKmp" && -z "$pInJs" ]]; then
    echo Failure: neither a .kmp nor a .js were found for this folder
    return 1
  fi
  
  $KMCOMP_LAUNCHER "$KMCOMP" $pValidateId -s $pInKmpM "$pInKmp" $pInJsM "$pInJs" "$pOut" || die "Failed to merge keyboard_info for $1"
  
  return 0
}
