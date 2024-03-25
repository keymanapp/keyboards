#!/usr/bin/env bash

set -e
set -u

function display_usage {
  echo "Builds regression-oriented version of all release and experimental keyboards"
  echo "and puts all built files into output/<version>/. By default, this script"
  echo "builds only .kmx and .js"
  echo
  echo "Note: all build modes overwrite existing tools/kmcomp/ except Default build mode."

  echo "Build modes:"
  echo "  regression.sh"
  echo "     Default build mode."
  echo "     Builds with current version of kmcomp already in tools/kmcomp/"
  echo
  echo "  regression.sh --local-search path"
  echo "     Searches for the first kmcomp-<version>.zip in path and uses that"
  echo "     (Used by Developer test build in CI)"
  echo
  echo "  regression.sh --local, -l kmcomp.zip|folder"
  echo "     Extracts the compiler from specified kmcomp.zip or folder and uses that"
  echo
  echo "  regression.sh --download-for-tier TIER.md"
  echo "     Uses --download semantics, reading tier from TIER.md"
  echo "     (Used by Developer test build in CI)"
  echo
  echo "  regression.sh --download, -d [version][-tier]"
  echo "     Downloads the specified version of kmcomp from keyman.com; "
  echo "     <version>, if specified, should be a version number such as 14.0.294."
  echo "     <tier>, if specified, should be 'alpha', 'beta', or 'stable'. Defaults to 'stable'."
  echo "     If <version> is omitted, downloads the latest version of kmcomp in <tier>."
  echo
  echo "General flags:"
  echo "  --packages, -p           Build .kmp packages as well as .kmx / .js"
  echo "  --decomp, -D             Decompile .kmx into .kmn in output after build"
  echo "  --output, -o <path>      Write to this folder instead of default output/<version>"
  echo "  --zip, -z                Also compress the output files into a <version>.zip file"
  echo "  --no-clean               Don't clean build folders before compiling"
  echo "  --use-legacy-compiler    Pass -use-legacy-compiler to kmcomp.exe"
  echo "  --help, -h               Show this help"
  exit 0
}

KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )/.." && pwd )"
. "$KEYBOARDROOT/tools/jq.inc.sh"

cd "$KEYBOARDROOT"

. "$KEYBOARDROOT/resources/util.sh"
. "$KEYBOARDROOT/resources/environment.sh"
. "$KEYBOARDROOT/resources/download-compiler.sh"
. "$KEYBOARDROOT/resources/regression-build.sh"

util_set_log_color_mode -no-color

locate_kmcomp

function parse_args {
  SHOULD_BUILD_PACKAGES=false
  SHOULD_EXTRACT_LOCAL=false
  SHOULD_SEARCH_LOCAL=false
  SHOULD_DOWNLOAD=false
  SHOULD_READ_TIER=false
  SHOULD_DECOMP=false
  SHOULD_ZIP=false
  SHOULD_CLEAN=true
  USE_LEGACY_COMPILER=false
  LOCAL_PATH=
  OUTPUT_PATH=
  REQUIRED_VERSION=
  REQUIRED_TIER=stable

  local lastkey=
  local key

  # Parse args
  for key in "$@"; do
    if [[ -z "$lastkey" ]]; then
      case "$key" in
        --packages|-p)
          SHOULD_BUILD_PACKAGES=true
          ;;
        --decomp|-D)
          SHOULD_DECOMP=true
          ;;
        --download|-d)
          SHOULD_DOWNLOAD=true
          lastkey="$key"
          ;;
        --download-for-tier)
          SHOULD_DOWNLOAD=true
          SHOULD_READ_TIER=true
          lastkey="$key"
          ;;
        --local|-l)
          SHOULD_EXTRACT_LOCAL=true
          lastkey="$key"
          ;;
        --local-search)
          SHOULD_EXTRACT_LOCAL=true
          SHOULD_SEARCH_LOCAL=true
          lastkey="$key"
          ;;
        --no-clean)
          SHOULD_CLEAN=false
          ;;
        --use-legacy-compiler)
          USE_LEGACY_COMPILER=true
          ;;
        --output|-o)
          lastkey="$key"
          ;;
        --zip|-z)
          SHOULD_ZIP=true
          ;;
        --help|-h)
          display_usage
          exit 0
          ;;
        *)
          echo "Invalid parameter"
          echo
          display_usage
          exit 1
      esac
    else
      case "$lastkey" in
        --local|-l)
          LOCAL_PATH="$key"
          ;;
        --output|-o)
          OUTPUT_PATH="$key"
          ;;
        --local-search)
          LOCAL_PATH="$key"
          ;;
        --download-for-tier)
          TIER_MD="$key"
          ;;
        --download)
          REQUIRED_VERSION=$(echo "$key" | cut -d- -f 1 -)
          if [[ "$2" == *"-"* ]]; then
            REQUIRED_TIER=$(echo "$key" | cut -d- -f 2 -)
          fi
          ;;
      esac
      lastkey=
    fi
  done
}


#
# Validate args
#

parse_args "$@"

if $SHOULD_EXTRACT_LOCAL; then
  if [ -z "$LOCAL_PATH" ]; then
    die "--local: path must be specified"
  fi
fi

if $SHOULD_READ_TIER; then
  if [ -z "$TIER_MD" ]; then
    die "--download-for-tier: TIER.md path must be specified"
  fi
fi

echo "Parameters:
  SHOULD_BUILD_PACKAGES: $SHOULD_BUILD_PACKAGES
  SHOULD_SEARCH_LOCAL:   $SHOULD_SEARCH_LOCAL
  SHOULD_EXTRACT_LOCAL:  $SHOULD_EXTRACT_LOCAL
  SHOULD_DOWNLOAD:       $SHOULD_DOWNLOAD
  SHOULD_CLEAN           $SHOULD_CLEAN
  SHOULD_READ_TIER:      $SHOULD_READ_TIER
  SHOULD_DECOMP:         $SHOULD_DECOMP
  USE_LEGACY_COMPILER:   $USE_LEGACY_COMPILER
  LOCAL_PATH:            $LOCAL_PATH
  OUTPUT_PATH:           $OUTPUT_PATH
  REQUIRED_VERSION:      $REQUIRED_VERSION
  REQUIRED_TIER:         $REQUIRED_TIER
"

#
# Get the most recent build for $TIER from downloads.keyman.com
#
function get_developer_remote_version {
  local TIER="$1"

  local DOWNLOADS_VERSION_API=https://downloads.keyman.com/api/version/developer
  local REMOTE_DEVELOPER_VERSIONS=`curl -s $DOWNLOADS_VERSION_API`
  REQUIRED_VERSION=`echo $REMOTE_DEVELOPER_VERSIONS | $JQ -r ".developer.$TIER"`
  echo "Latest downloadable version of kmcomp.zip for $TIER is $REQUIRED_VERSION"
}

#
# We'll now get kmcomp.exe and friends from the built kmcomp-$version.zip or the
# target path
#
function extract_local_compiler {
  local SOURCE="$1"
  if [ ! -e "$SOURCE" ]; then
    die "Source $SOURCE not found"
  fi

  local TARGET="$KEYBOARDROOT/tools/kmcomp"
  rm -rf "$TARGET"
  mkdir -p "$TARGET"

  if [ -d "$SOURCE" ]; then
    cp -r "$SOURCE"/* "$TARGET/" || die "Unable to copy source path"
  else
    unzip -q -o "$SOURCE" -d "$TARGET/" || die "Unable to unzip $SOURCE"
  fi
}

#
# Locate the first kmcomp-<version>.zip in $LOCAL_PATH and update the variable
#
function find_local_compiler {
  local COMPILERS=("$LOCAL_PATH"/*/kmcomp-*.zip)
  if [ ${#COMPILERS[@]} -eq 0 ]; then
    die "No kmcomp-<version>.zip found in immediate subdirectories of $LOCAL_PATH"
  fi
  LOCAL_PATH="${COMPILERS[0]}"
  echo "Found local compiler at $LOCAL_PATH"
}

#
# Extract tier from TIER.md
#
function read_tier_from_tier_md {
  REQUIRED_TIER=`cat "$TIER_MD"` || die "Could not read $TIER_MD"
}

#------------------------------------------------------------------------------
# main
#------------------------------------------------------------------------------
if $SHOULD_EXTRACT_LOCAL; then
  if $SHOULD_SEARCH_LOCAL; then
    find_local_compiler
  fi
  extract_local_compiler "$LOCAL_PATH"
  regression_build "$SHOULD_BUILD_PACKAGES" "$SHOULD_DECOMP" "$SHOULD_ZIP" "$SHOULD_CLEAN" "$USE_LEGACY_COMPILER" "$OUTPUT_PATH"
else
  if $SHOULD_READ_TIER; then
    read_tier_from_tier_md "$TIER_MD"
  fi

  if $SHOULD_DOWNLOAD; then
    if [ -z "$REQUIRED_VERSION" ]; then
      echo "Finding latest version of Keyman Developer for $REQUIRED_TIER"
      get_developer_remote_version "$REQUIRED_TIER"
    fi
    download_and_unzip_kmcomp "$REQUIRED_VERSION" "$REQUIRED_TIER"
  fi

  regression_build "$SHOULD_BUILD_PACKAGES" "$SHOULD_DECOMP" "$SHOULD_ZIP" "$SHOULD_CLEAN" "$USE_LEGACY_COMPILER" "$OUTPUT_PATH"
fi
