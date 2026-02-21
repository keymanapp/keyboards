#!/usr/bin/env bash
# This script builds a single keyboard package for the FirstVoices app.
set -e
set -u

## START STANDARD BUILD SCRIPT INCLUDE
# adjust relative paths as necessary
THIS_SCRIPT="$(readlink -f "${BASH_SOURCE[0]}")"
. "${THIS_SCRIPT%/*}/../../../resources/builder.inc.sh"
# END STANDARD BUILD SCRIPT INCLUDE

# Script runs from this path

cd "$THIS_SCRIPT_PATH"

. "$REPO_ROOT/resources/util.inc.sh"
. "$REPO_ROOT/resources/zip.inc.sh"
. "$REPO_ROOT/tools/jq.inc.sh"

builder_describe \
  "Build fv_all package" \
  clean \
  configure \
  build \
  test

builder_describe_outputs \
  configure   /node_modules

builder_parse "$@"

#------------------------------------------------------------
# Definitions
#------------------------------------------------------------

if [[ -z ${KMC+x} ]]; then
  export KMC="${REPO_ROOT}/node_modules/.bin/kmc"
  readonly KMC
fi

# TODO: remove -W
if [[ -z ${KMC_BUILD_PARAMS+x} ]]; then
  export KMC_BUILD_PARAMS="build $builder_debug -W --for-publishing"
  readonly KMC_BUILD_PARAMS
fi

function do_clean() {
  rm -f ./source/fv_all.kps
  rm -rf ./build/
}

function do_configure() {
  pushd "$REPO_ROOT"
  npm install
  popd
}

# Convert Bash array to JSONArray
function convertToJSONArray() {
  local mergedKeyboards=("$@")
  local length=${#mergedKeyboards[@]}
  echo "["
  for key in "${!mergedKeyboards[@]}";
  do
    separator=","
    if [[ $key -eq $length-1 ]]; then
      separator=""
    fi
    echo "${mergedKeyboards[$key]}${separator}"
  done
  echo "]"
}

function do_build_kmp() {
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
    keyboardInfo="$REPO_ROOT/release/$group/$id/build/$id.keyboard_info"
    if [[ ! -f $keyboardInfo ]]; then
      die "$keyboardInfo does not exist"
    fi

    version=$(cat $keyboardInfo | $JQ -r '.version')

    # Override sil_euro_latin keyboard to English language
    if [[ $id = 'sil_euro_latin' ]]; then
      name="English"
      bcp47="en"  
      langname="English"
    elif [[ $id = 'basic_kbdcan' ]]; then
      name="Français"
      bcp47="fr-CA"
      langname="French (Canada)"
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

  # Build fv_all.kmp, using kmc as per normal build script

  mkdir -p build || builder_die "Failed to create build folder for fv_all"

  $KMC $KMC_BUILD_PARAMS .

  rm source/fv_all.kps
}

# Create keyboards.json by merging keyboards from kmp.json with regions.json
# Then add keyboards.json to fv_all.kmp
function do_build_region() {
  if [[ ! -f "build/fv_all.kmp" ]]; then
    builder_die "build/fv_all.kmp doesn't exist"
  fi

  # Extract kmp.json (overwrite) from build/fv_all.kmp
  unzip -o build/fv_all.kmp kmp.json -d build
  [ -f "build/kmp.json" ] || builder_die "fv_all: Failed to extract kmp.json"

  kmpKeyboards=$("$JQ" -r '.keyboards' build/kmp.json)

  count=$("$JQ" length <<< "$kmpKeyboards")
  declare -a regions=()
  declare -a mergedKeyboards=()

  # For each keyboard entry in kmp.json, determine the corresponding region and add property
  for (( i=0; i < count; i++))
  do
    kmpKeyboard=$($JQ -r ".[$i]" <<< "$kmpKeyboards")
    id=$($JQ -r ".id" <<< "$kmpKeyboard")
    region=$($JQ -r ".$id" source/regions.json)
    if [[ "${region}" == "null" ]]; then
      builder_die "Region for $id not found in regions.json"
    fi

    # Add corresponding region info
    keyboard=$($JQ ". += { region: \"${region}\" }" <<< "$kmpKeyboard")
    mergedKeyboards+=( "$keyboard" )
  done

  # Convert to JSONArray and write to keyboards.json file
  convertToJSONArray "${mergedKeyboards[@]}" > "build/keyboards.json"
 
  # Add keyboards.json to kmp.json
  if [[ ! -f "build/keyboards.json" ]]; then
    builder_die "Failed to generate build/keyboards.json"
  fi
  add_zip_files build/fv_all.kmp ./build/keyboards.json
}

function do_build() {
  do_build_kmp
  do_build_region
}

function do_test() {
  # no op
  echo TODO: test
}

builder_run_action clean      do_clean
builder_run_action configure  do_configure
builder_run_action build      do_build
builder_run_action test       do_test

