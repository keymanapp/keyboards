#!/bin/bash

#
# Prevents 'clear' on exit of mingw64 bash shell
#
SHLVL=0

#
# Allows us to check for existence of subfolders in help/
#
shopt -s nullglob

#
# In this script we update the git repo and copy the keyboard
# documentation over, for all keyboards in release, legacy, and
# experimental. This should be run after ci.sh.
#
# The only command line flag is -f. This should only be used if you
# want to update all the keyboard documentation in the help.keyman.com repo,
# even if it already exists. This could possibly be needed if we change the
# file structure, but rarely otherwise.
#
# You can also pass a path to a single keyboard to upload only that
# keyboard's help file.
#

#
# These are passed via environment:
#
# HELP_KEYMAN_COM = the home of the help.keyman.com repository
#
# That repo must have push to origin configured and logged in
#

if [ -z ${HELP_KEYMAN_COM+x} ]; then
  >&2 echo "Not uploading documentation: must set HELP_KEYMAN_COM in environment."
  exit 1
fi

if [ ! -d "$HELP_KEYMAN_COM/keyboard" ]; then
  >&2 echo "HELP_KEYMAN_COM path ($HELP_KEYMAN_COM) does not appear to be valid."
  exit 1
fi

#
# Check command line
#

for key in "$@"; do
  case "$key" in
    -f)
      FORCE=true
      ;;
    *)
      TARGET=$key
  esac
done

#
# Environment
#

KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )/.."
CI_CACHE="$KEYBOARDROOT/.cache"
. "$KEYBOARDROOT/tools/jq.inc.sh"
keyboards_to_push=0

. "$KEYBOARDROOT/servervars.sh"
. "$KEYBOARDROOT/resources/util.sh"

echo "Uploading keyboard documentation to help.keyman.com"

#
# Uploading keyboard documentation
#

##
## Upload documentation updates to help.keyman.com
##
function upload_keyboard_help {
  local group=$1
  local keyboard=$2
  local base_keyboard=$(basename "$keyboard")
  local shortname=$(basename $(dirname "$keyboard"))
  local buildpath=$KEYBOARDROOT/$group/$shortname/$base_keyboard/build
  local sourcepath=$KEYBOARDROOT/$group/$shortname/$base_keyboard/source
  local helppath=$sourcepath/help
  local keyboard_info=$buildpath/$base_keyboard.keyboard_info

  #
  # Look for source/help folder. Verify that <id>.php exists.
  #

  if [[ ! -d "$helppath" ]]; then
    echo "${t_yel}Warning: $base_keyboard does not include any PHP documentation${t_end}"
    return 0
  fi

  #
  # Note: release/packages which contain multiple keyboards should also have the keyboards
  # as separate entries in the release/ folder. This means we may have a combined package
  # help file as well as a per-keyboard help file. It is acceptable in this situation to
  # make the combined help file link to the per-keyboard help files.
  #

  #
  # Copy all files in that folder, according to the current
  # version of the keyboard, to help.keyman.com/keyboard/<id>/<version>/
  #

  local version=`cat "$keyboard_info" | $JQ -r '.version'`
  local dstpath="$HELP_KEYMAN_COM/keyboard/$base_keyboard"

  mkdir -p "$dstpath/$version/"
  cp -r "$helppath"/* "$dstpath/$version/"
}

##
## Main function
##
function upload_keyboard_helps_by_target {
  if [[ "$TARGET" ]]; then
    if [[ "$TARGET" == */* ]] && [[ (-d "$TARGET") ]]; then
      group=$(cut -d / -f 1 <<< "$TARGET")
      echo "${t_grn}--- Only uploading $group $TARGET ---${t_end}"
      upload_keyboard_help $group "$TARGET"
    elif [[ "$TARGET" == "release" ]] || [[ "$TARGET" == "legacy" ]] || [[ "$TARGET" == "experimental" ]]; then
      # Assuming release|legacy|experimental
      echo "${t_grn}--- Only uploading $TARGET ---${t_end}"
      upload_keyboard_helps "$TARGET"
    else
      echo "Invalid $TARGET"
      display_usage
    fi
  else
    upload_keyboard_helps release
    upload_keyboard_helps legacy
    upload_keyboard_helps experimental
  fi
}

##
## (Tweaked clone of build_keyboards in compile.sh)
##
function upload_keyboard_helps {
  # $1 = path to build keyboards
  # for each keyboard, if a build.sh file exists, call it, otherwise, run the default
  # build based on the folder name and location.

  # excluded folders are: shared, packages and template

  local group=$1
  local excluded_folders=" shared packages template "

  echo "Uploading keyboards for $1"
  local shortname
  for shortname in "$KEYBOARDROOT/$group/"*/ ; do
    local base_shortname=$(basename "$shortname")
    if [[ "$base_shortname" == '*' ]]; then
      return 0
    fi

    if [[ "$excluded_folders" == *" $base_shortname "* ]]; then
      echo "- Skipping folder $group/$base_shortname"
    else
      if [[ "$base_shortname" < "$START" ]]; then
        echo "- Skipping folder $group/$base_shortname, before $START"
      else
        echo "- Uploading $group/$base_shortname"
        local keyboard
        for keyboard in "$shortname"*/ ; do
          upload_keyboard_help "$group" "$keyboard"
        done
      fi
    fi
  done

  #
  # Now upload the packages help.
  #

  if [ -d "$KEYBOARDROOT/$group/packages" ]; then
    echo "- Building $group/packages"
    local package
    for package in "$KEYBOARDROOT/$group/packages/"*/ ; do
      upload_keyboard_help "$group" "$package"
    done
  fi

  return 0
}

#
# Commit and push to the help.keyman.com repo
#

function commit_and_push {
  echo "Committing and pushing updated keyboard documentation (if any)"

  pushd $HELP_KEYMAN_COM
  git config user.name "Keyman Build Server"
  git config user.email "keyman-server@users.noreply.github.com"
  git add keyboard || return 1
  git diff --cached --no-ext-diff --quiet --exit-code && {
    # if no changes then don't do anything.
    echo "No changes to commit"
    popd
    return 0
  }

  echo "changes added to cache...>>>"
  git commit -m "Keyboard help deployment (automatic)" || return 1
  git pull origin master || return 1
  git push origin master || return 1
  popd

  echo "Push to help.keyman.com complete"

  return 0
}

#
# Main
#

upload_keyboard_helps_by_target || exit 1
commit_and_push || exit 1
