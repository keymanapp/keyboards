#!/usr/bin/env bash
# Keyman is copyright (C) SIL Global. MIT License.

## START STANDARD BUILD SCRIPT INCLUDE
# adjust relative paths as necessary
THIS_SCRIPT="$(readlink -f "${BASH_SOURCE[0]}")"
. "${THIS_SCRIPT%/*}/../../../resources/builder.inc.sh"
## END STANDARD BUILD SCRIPT INCLUDE

cd "$THIS_SCRIPT_PATH"

################################ Main script ################################

builder_describe "Build version tooling" clean configure build test run \
  "--teamcity-token=TEAMCITY_TOKEN" \
  "--github-token=GITHUB_TOKEN" \
  "--build-id=BUILD_ID"

builder_describe_outputs \
  configure /resources/build/version/node_modules \
  build     /resources/build/version/build/src/index.js

builder_parse "$@"

do_test() {
  node_modules/.bin/tsc --build tests/
  node_modules/.bin/mocha
}

do_run() {
  if ! builder_has_option --teamcity-token ||
      ! builder_has_option --github-token ||
      ! builder_has_option --build-id; then
    builder_die "Parameters --teamcity-token, --github-token, --build-id are required"
  fi
  node . run --teamcity-token "$TEAMCITY_TOKEN" --github-token "$GITHUB_TOKEN" --build-id "$BUILD_ID"
}

builder_run_action clean      rm -rf build/ node_modules/
builder_run_action configure  npm ci
builder_run_action build      node_modules/.bin/tsc --build
builder_run_action test       do_test
builder_run_action run        do_run