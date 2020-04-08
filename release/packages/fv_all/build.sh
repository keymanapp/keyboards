#!/bin/bash
# This script builds a single keyboard package for the FirstVoices app.
set -e
set -u

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

# For each keyboard in the following folders:
# fv/*, inuktitut_*, sil_euro_latin, and basic_kbdcan
# If a .kmx or .js exists, add it to the package source file, reading the requisite keyboard name and version from the .kps file
# The fonts which are shared across the packages are already listed in fv_all.kps.in.
# If fonts need changing, manually update the file.

FILE_LINES=
KEYBOARD_LINES=

for keyboard in ../../fv/*/ ../../i/inuktitut_*/ ../../sil/sil_euro_latin/ ../../basic/basic_kbdcan/ ; do
  id=$(basename "$keyboard")
  group=$(basename $(dirname $keyboard))

  # Only interested in keyboards with a .kmx / .js
  
  if [[ ! -f $keyboard/build/$id.kmx ]] && [[ ! -f $keyboard/build/$id.js ]]; then continue; fi

  echo "Extracting $id"
  
  # Load relevant fields from the .kps file
  
  mapfile -t kpsdata < <(./parse_kps.pl $keyboard/source/$id.kps)
  name=${kpsdata[0]}
  version=${kpsdata[1]}
  bcp47=${kpsdata[2]}
  langname=${kpsdata[3]}
  
  # Build a file entry
  FILE_LINES_0=''
  FILE_LINES_1=''
  if [ -f $keyboard/build/$id.kmx ]; then
    FILE_LINES_0='
      <File>
        <Name>..\..\..\'"$group"'\'"$id"'\build\'"$id"'.kmx</Name>
        <Description>File '"$id"'.kmx</Description>
        <CopyLocation>0</CopyLocation>
        <FileType>.kmx</FileType>
      </File>'
  fi
  if [ -f $keyboard/build/$id.js ]; then
    FILE_LINES_1='
      <File>
        <Name>..\..\..\'"$group"'\'"$id"'\build\'"$id"'.js</Name>
        <Description>File '"$id"'.js</Description>
        <CopyLocation>0</CopyLocation>
        <FileType>.js</FileType>
      </File>'
  fi
  FILE_LINES="$FILE_LINES$FILE_LINES_0$FILE_LINES_1"
  
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

KMCOMP="../../../tools/kmcomp.exe"

case "${OSTYPE}" in
  "cygwin") KMCOMP_LAUNCHER= ;;
  "msys") KMCOMP_LAUNCHER= ;;
  *) KMCOMP_LAUNCHER=wine ;;
esac

$KMCOMP_LAUNCHER "$KMCOMP" -nologo $FLAG_SILENT $FLAG_CLEAN $FLAG_DEBUG "fv_all.kpj" $FLAG_TARGET "$PROJECT_TARGET"

rm source/fv_all.kps
