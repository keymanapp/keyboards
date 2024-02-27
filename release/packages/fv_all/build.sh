#!/usr/bin/env bash
# This script builds a single keyboard package for the FirstVoices app.
set -e
set -u

#
# Define paths (we are three levels down from KEYBOARDROOT)
#
KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )/../../.." && pwd )"

. "$KEYBOARDROOT/resources/util.sh"
. "$KEYBOARDROOT/resources/environment.sh"
. "$KEYBOARDROOT/tools/jq.inc.sh"

locate_kmcomp

# Parse parameters

FLAG_SILENT=
FLAG_CLEAN=
FLAG_COLOR=
FLAG_DEBUG=
FLAG_TARGET=
FLAG_COMPILER_VERSION=
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
      -no-color)
        FLAG_COLOR=-no-color
        ;;
      -color)
        FLAG_COLOR=-color
        ;;
      -no-compiler-version)
        # This flag is used only for regression tests.
        FLAG_COMPILER_VERSION=-no-compiler-version
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

util_set_log_color_mode "$FLAG_COLOR"

if [ ! -z "$FLAG_CLEAN" ]; then
  rm -f ./source/fv_all.kps
  rm -rf ./build/
  exit 0
fi

# For each keyboard in the following release folders:
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
  # version assigned later
  bcp47=${kpsdata[2]}
  langname=${kpsdata[3]}
  oskFont=${kpsdata[4]}
  displayFont=${kpsdata[5]}

  # Parse .keyboard_info file to override keyboard version because
  # some are blank due to <FollowKeyboardVersion/> (#2143)
  keyboardInfo="$KEYBOARDROOT/release/$group/$id/build/$id.keyboard_info"
  if [[ ! -f $keyboardInfo ]]; then
    die "$keyboardInfo does not exist"
  fi

  version=$(cat $keyboardInfo | $JQ -r '.version')

  # Override sil_euro_latin keyboard to English language
  if [[ $id = 'sil_euro_latin' ]]; then
    bcp47="en"
    langname="English"
  fi

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

  # Check for optional font info
  OSK_FONT_LINES_0=''
  if [[ "$oskFont" != 'none' ]]; then
    OSK_FONT_LINES_0='
      <OSKFont>'"$oskFont"'</OSKFont>'
  fi
  DISPLAY_FONT_LINES_0=''
  if [[ "$displayFont" != 'none' ]]; then
    DISPLAY_FONT_LINES_0='
      <DisplayFont>'"$displayFont"'</DisplayFont>'
  fi

  # Build a keyboard entry
  KEYBOARD_LINES_0='
    <Keyboard>
      <Name>'"$name"'</Name>
      <ID>'"$id"'</ID>
      <Version>'"$version"'</Version>'"$OSK_FONT_LINES_0$DISPLAY_FONT_LINES_0"'
      <Languages>
        <Language ID="'"$bcp47"'">'"$langname"'</Language>
      </Languages>
    </Keyboard>'

  KEYBOARD_LINES="$KEYBOARD_LINES$KEYBOARD_LINES_0"
done

# Verify keyboards exist
if [[ $KEYBOARD_LINES = '' ]]; then
  die "No built keyboards exist for fv_all"
fi

# Insert replaced text into fv_all.kps

kps=$(<source/fv_all.kps.in)
kps="${kps//@FILES/$FILE_LINES}"
echo "${kps//@KEYBOARDS/$KEYBOARD_LINES}" > source/fv_all.kps

# Build fv_all.kmp, using kmcomp as per normal build script

mkdir -p build || die "Failed to create build folder for fv_all"

$KMCOMP_LAUNCHER "$KMCOMP" -nologo $FLAG_SILENT $FLAG_COLOR $FLAG_CLEAN $FLAG_COMPILER_VERSION $FLAG_DEBUG "fv_all.kpj" $FLAG_TARGET "$PROJECT_TARGET"

rm source/fv_all.kps
