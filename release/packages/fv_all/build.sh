#!/bin/bash

set -e
# set -u TODO (lookup how to validate bash env var when -u is in use)

# Parse parameters

FLAG_SILENT=
FLAG_CLEAN=
FLAG_DEBUG=
FLAG_TARGET=
PROJECT_TARGET=
lastkey=

# Parse args
for key in "$@"; do
  if [[ -z "$lastkey" ]]; then
    case "$key" in
      -s)
        FLAG_SILENT=-s
        ;;
      -d)
        FLAG_DEBUG=-d
        ;;
      -c)
        FLAG_CLEAN=-c
        ;;
      -t)
        lastkey="$key"
        ;;
    esac
  else
    case "$lastkey" in
      -t)
        FLAG_TARGET=-t
        PROJECT_TARGET="$key"
        if [[ "$PROJECT_TARGET" != "fv_all.kps" ]]; then 
          echo "Skipping fv_all.kps"
          exit 0; 
        fi
        ;;
    esac
    lastkey=
  fi
done

if [[ ! -z $FLAG_CLEAN ]]; then
  if [[ -d build ]]; then 
    rm -rf build/
  fi
  exit 0;
fi

# For each keyboard in the fv/ folder, if a .kmx exists, add it to the package source file, reading the requisite keyboard name and version from the .kps file
# The fonts which are shared across the packages are already listed in fv_all.kps.in.
# If fonts need changing, manually update the file.

FILE_LINES=
KEYBOARD_LINES=

for keyboard in ../../fv/*/ ; do
  id=$(basename "$keyboard")
  
  # Only interested in keyboards with a .kmx
  
  if [[ ! -f $keyboard/build/$id.kmx ]]; then continue; fi

  echo "Extracting $id"
  
  # Load relevant fields from the .kps file
  
  mapfile -t kpsdata < <(./parse_kps.pl $keyboard/source/$id.kps)
  name=${kpsdata[0]}
  version=${kpsdata[1]}
  bcp47=${kpsdata[2]}
  langname=${kpsdata[3]}
  
  # Build a file entry
  
  FILE_LINES_0='
    <File>
      <Name>..\..\..\fv\'"$id"'\build\'"$id"'.kmx</Name>
      <Description>File '"$id"'.kmx</Description>
      <CopyLocation>0</CopyLocation>
      <FileType>.kmx</FileType>
    </File>'

  FILE_LINES="$FILE_LINES$FILE_LINES_0"
  
  # Build a keyboard entry
    
  KEYBOARD_LINES_0='
    <Keyboard>
      <Name>'"$name"'</Name>
      <ID>'"$id"'</ID>
      <Version>'"$version"'</Version>
      <Languages>
        <Language ID="'"$bcp47"'">'"$langname"'</Language>
      </Languages>
    </Keyboard>'

  KEYBOARD_LINES="$KEYBOARD_LINES$KEYBOARD_LINES_0"
done

# Insert replaced text into fv_all.kps

kps=$(<source/fv_all.kps.in)
kps="${kps//@FILES/$FILE_LINES}"
echo "${kps//@KEYBOARDS/$KEYBOARD_LINES}" > source/fv_all.kps

# Build fv_all.kmp, using kmcomp as per normal build script
  
mkdir -p build || die "Failed to create build folder for fv_all"

. ../../../resources/env.sh

$KMCOMP_LAUNCHER "$KMCOMP" -nologo $FLAG_SILENT $FLAG_CLEAN $FLAG_DEBUG "fv_all.kpj" $FLAG_TARGET "$PROJECT_TARGET"

rm source/fv_all.kps
