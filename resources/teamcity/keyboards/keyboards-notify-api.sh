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
  "Notify api.keyman.com of updated keyboards" \
  "all            run all actions" \
  "--webhook-token=WEBHOOK_TOKEN  Token for api.keyman.com webhook"

builder_parse "$@"

function _notify_api() {
  API_URL=$1
  URL="https://${API_URL}/_control/webhook/keyboards-build-success.json?token=${WEBHOOK_TOKEN}"
  HTTPRESULT=$(curl --silent --write-out "\n\nHTTP status code: %{http_code}" "${URL}")
  STATUSCODE=$(echo "${HTTPRESULT}" | tail -n1 | cut -d" " -f 4)
  builder_echo "${HTTPRESULT}"
  if [[ $STATUSCODE -ne 200 ]]; then
    builder_echo "-----------------------------------"
    builder_echo error "ERROR: call failed with $STATUSCODE"
    exit 1
  fi
}

function do_notify_api_keyman_com() {
  builder_echo "Notifying api.keyman.com of updated keyboards"
  _notify_api "api.keyman.com"
  builder_echo "Finished notifying api.keyman.com of updated keyboards"
}

function do_notify_api_keyman_staging_com() {
  builder_echo "Notifying api.keyman-staging.com of updated keyboards"
  _notify_api "api.keyman-staging.com"
  builder_echo "Finished notifying api.keyman-staging.com of updated keyboards"
}

do_notify_api_keyman_com
do_notify_api_keyman_staging_com
