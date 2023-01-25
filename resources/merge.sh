#!/bin/bash

#----------------------------------------------------------------------------------------
# Merge the source .keyboard_info with data gleaned from the output files and place
# the result in the build/ folder
#----------------------------------------------------------------------------------------

function merge_keyboard_info {
  local keyboard_info=$1
  local group=$2
  local shortname=$3
  local base_keyboard=$4

  echo "Merging $keyboard_info for $base_keyboard"

  cp "$keyboard_info" "build/$keyboard_info" || die

  # Need to call into kmcomp to read the .kmp/.kmx and .js data
  # and merge the compiled data with the source keyboard_info data

  #
  # We can try and deduce packageFilename and jsFilename
  #

  if [ ! -n "$keyboard_info_packageFilename" ]; then
    # See if a name.kmp file exists in the build/ folder
    if [ -f "build/$base_keyboard.kmp" ]; then
      keyboard_info_packageFilename=$base_keyboard.kmp
    fi
  fi

  if [ ! -n "$keyboard_info_jsFilename" ]; then
    # See if a name.js file exists in the build/ folder
    if [ -f "build/$base_keyboard.js" ]; then
      keyboard_info_jsFilename=$base_keyboard.js
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
  local pHelpLink=
  local pHelpLinkFlag=
  local pValidateId=

  if [ -f build/"$keyboard_info_packageFilename" ]; then
    pInKmp=build\\"$keyboard_info_packageFilename"
    pInKmpM=-m
  fi

  if [ -f build/"$keyboard_info_jsFilename" ]; then
    pInJs=build\\"$keyboard_info_jsFilename"
    pInJsM=-m
  fi

  if [ -f source/help/"$base_keyboard".php ]; then
    pHelpLink="https://help.keyman.com/keyboard/$base_keyboard"
    pHelpLinkFlag=-add-help-link
  fi

  if [[ $group == release && $shortname != packages ]]; then
    pValidateId=-m-validate-id
  fi

  if [[ -z "$pInKmp" && -z "$pInJs" ]]; then
    echo Failure: neither a .kmp nor a .js were found for this folder
    return 1
  fi

  # echo $KMCOMP_LAUNCHER "$KMCOMP" $pValidateId -s $pInKmpM "$pInKmp" $pInJsM "$pInJs" $pHelpLinkFlag "$pHelpLink" -source-path "$group/$shortname/$base_keyboard" "$pOut"
  $KMCOMP_LAUNCHER "$KMCOMP" $pValidateId -s $pInKmpM "$pInKmp" $pInJsM "$pInJs" $pHelpLinkFlag "$pHelpLink" -source-path "$group/$shortname/$base_keyboard" "$pOut"   || die "Failed to merge keyboard_info for $1"

  # Use the date of the last committed change in this folder and insert into the destination .keyboard_info
  # Note, we trim the +00:00 time zone component and replace it with Z
  local pDate=$(TZ=UTC git log --quiet --date=iso-strict-local --format="%cd" -n 1 -- . | cut -c 1-19 -)Z

  # for macos sed is not quite gnu-compatible
  if [[ "$OSTYPE" == "darwin"* ]]; then
    sed -i '' -E 's/.+"lastModifiedDate".+/  "lastModifiedDate": "'$pDate'",/' "build/$keyboard_info"
  else
    sed -i '/"lastModifiedDate"/c\  "lastModifiedDate": "'$pDate'",' "build/$keyboard_info"
  fi

  return 0
}
