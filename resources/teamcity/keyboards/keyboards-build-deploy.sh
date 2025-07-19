#!/usr/bin/env bash
# Keyman is copyright (C) SIL Global. MIT License.

# shellcheck disable=SC2164
# shellcheck disable=SC1091

## START STANDARD BUILD SCRIPT INCLUDE
# adjust relative paths as necessary
THIS_SCRIPT="$(readlink -f "${BASH_SOURCE[0]}")"
. "${THIS_SCRIPT%/*}/../../../resources/builder.inc.sh"
## END STANDARD BUILD SCRIPT INCLUDE

################################ Main script ################################

builder_describe \
  "Build and deploy keyboards" \
  "all            run all actions" \
  "build          build keyboards" \
  "publish        deploy keyboards" \
  "--downloads-keyman-com=DOWNLOADS_KEYMAN_COM_URL  URL of downloads server" \
  "--help-keyman-com=HELP_KEYMAN_COM                Path to help.keyman.com repository" \
  "--s-keyman-com=S_KEYMAN_COM                      Path to s.keyman.com repository" \
  "--rsync-path=REMOTE_RSYNC_PATH                   Path to rsync on remote server" \
  "--rsync-dest=RSYNC_DEST                          Destination for rsync"

builder_parse "$@"

function do_build() {
  builder_echo "Building all keyboards"
  "${REPO_ROOT}/build.sh"
  builder_echo "Finished building all keyboards"
}

function _upload_to_downloads_keyman_com() {
  builder_echo "Uploading keyboards to downloads.keyman.com"
  "${REPO_ROOT}/ci.sh" -no-exe
  builder_echo "Finished uploading keyboards to downloads.keyman.com"
}

function _upload_to_s_keyman_com() {
  builder_echo "Uploading new keyboards to s.keyman.com"
  (
    cd "${REPO_ROOT}/resources"
    "${REPO_ROOT}/resources/s-keyman-com.sh"
  )
  builder_echo "Finished uploading new keyboards to s.keyman.com"
}

function _upload_to_help_keyman_com() {
  builder_echo "Uploading new keyboard help to help.keyman.com"
  (
    cd "${REPO_ROOT}/resources"
    "${REPO_ROOT}/resources/help-keyman-com.sh"
  )
  builder_echo "Finished uploading new keyboard help to help.keyman.com"
}

function do_publish() {
  _upload_to_downloads_keyman_com
  _upload_to_s_keyman_com
  _upload_to_help_keyman_com
}

cd "${REPO_ROOT}"

if builder_has_action all; then
  do_build
  do_publish
else
  builder_run_action  build    do_build
  builder_run_action  publish  do_publish
fi
