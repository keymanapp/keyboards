#!/bin/bash

#
# Prevents 'clear' on exit of mingw64 bash shell
#
SHLVL=0

#
# In this script we update the git repo and copy the keyboards over,
# for all keyboards in .cache/upload. So this should be run after ci.sh.
#
# The only command line parameter is -f. This should only be used if you
# want to update all the keyboards in the s.keyman.com repo, even if they
# already exist. This could possibly be needed if a severe compiler bug is
# found, but rarely otherwise. Note that this would only update the file on
# s.keyman.com, and user devices would not receive the updated file if they
# already have it installed, so it's not really sufficient for rolling out a
# fix, anyway.
#

#
# These are passed via environment:
#
# S_KEYMAN_COM = the home of the s.keyman.com repository
#
# That repo must have push to origin configured and logged in
#

if [ -z ${S_KEYMAN_COM+x} ]; then
  >&2 echo "Must set S_KEYMAN_COM in environment."
  exit 1
fi

if [ ! -d "$S_KEYMAN_COM/keyboard" ]; then
  >&2 echo "S_KEYMAN_COM path does not appear to be valid."
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
  esac
done

#
# Environment
#

KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )/.."
CI_CACHE="$KEYBOARDROOT/.cache"
keyboards_to_push=0

echo "Uploading keyboards to s.keyman.com"

#
# Uploading keyboards
#

function upload_keyboard {
  local keyboard="$1"
  for version in "$CI_CACHE/upload/$keyboard/"*/ ; do
    local base_version=$(basename "$version")
    if [[ "$base_version" == '*' ]]; then
      return 0
    fi

    local srcpath="$CI_CACHE/upload/$keyboard/$base_version/"
    local srcfile="$srcpath/$keyboard.js"
    local dstpath="$S_KEYMAN_COM/keyboard/$keyboard/$base_version/"
    local dstfile="$dstpath/$keyboard-$base_version.js"
    if [ -f "$srcfile" ]; then
      if [ ! -f "$dstfile" ] || [[ $FORCE == true ]] ; then
        echo Uploading new $keyboard $base_version
        mkdir -p $dstpath || return 1
        cp $srcfile $dstfile || return 1
        keyboards_to_push=1
      fi
    fi
  done

  return 0
}

function upload_keyboards {
  local keyboardname
  for keyboardname in "$CI_CACHE/upload/"*/ ; do
    local base_keyboardname=$(basename "$keyboardname")
    if [[ "$base_keyboardname" == '*' ]]; then
      return 0
    fi

    upload_keyboard $base_keyboardname || return 1
  done

  return 0
}

#
# Upload fonts
#

function upload_fonts {
  local fontname=

  # search for .ttf, .otf, .woff, .woff2; handles whitespace in filenames

  find "$KEYBOARDROOT/release/shared/fonts/" -type f \
    -regex '.+\.woff' -print0 -or \
    -regex '.+\.woff2' -print0 -or \
    -regex '.+\.ttf' -print0 -or \
    -regex '.+\.otf' -print0 |
  while IFS= read -r -d '' fontname; do
    local base_fontname=$(basename "$fontname")

    echo "Uploading $base_fontname"
    cp -f "$fontname" "$S_KEYMAN_COM/font/deploy/$base_fontname"
  done

  return 0
}

#
# Commit and push to the s.keyman.com repo
#

function commit_and_push {
  echo "Committing and pushing updated keyboards and fonts (if any)"

  pushd $S_KEYMAN_COM
  git config user.name "Keyman Build Server"
  git config user.email "keyman-server@users.noreply.github.com"

  local uuid=
  if [[ -z ${BUILD_NUMBER+x} ]]; then
    uuid=$(uuidgen)
  else
    uuid=TC-$BUILD_NUMBER
  fi

  local branch=auto/keyboards/upload/$uuid

  git add keyboard font/deploy || return 1
  git diff --cached --no-ext-diff --quiet --exit-code && {
    # if no changes then don't do anything.
    echo "No changes to commit"
    popd
    return 0
  }
  echo "changes added to cache...>>>"

  echo "creating new branch '$branch'"
  git switch -c $branch
  echo "committed keyboards and fonts to '$branch'"
  git commit -m "auto: Keyboard and font deployment" || return 1
  git push origin $branch || return 1
  echo "Push to s.keyman.com complete"

  hub pull-request -f --no-edit -l auto || return 1
  echo "PR created"

  git switch master || return 1
  echo "switched back to master"

  popd

  return 0
}

#
# Main
#

# Ensure s.keyman.com is up to date

pushd $S_KEYMAN_COM
git pull origin master || return 1
popd

upload_keyboards || exit 1
upload_fonts || exit 1
commit_and_push || exit 1

