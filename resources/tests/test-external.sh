#!/usr/bin/env bash

source ../external.inc.sh

die() { echo "$*" 1>&2 ; exit 1; }

test_is_external_source_keyboard() {
  echo "Test $1 is a source"
  if ! _is_external_source_keyboard "$1"; then die "$1 should be a valid source"; fi
}

test_is_not_external_source_keyboard() {
  echo "Test $1 is not a source"
  if _is_external_source_keyboard "$1"; then die "$1 should not be a valid source"; fi
}

test_urldecode() {
  echo "Test urldecode $1 matches $2"
  local output=`_urldecode $1`
  [[ $output == $2 ]] || die "No match"
}

test_is_external_source_keyboard "https://github.com/mcdurdin/external_experiment_1/tree/0619c3a12a0d48b3ead3d02e9a5b15b325213fcd"
test_is_external_source_keyboard "https://github.com/mcdurdin/external_experiment_1/tree/0619c3a12a0d48b3ead3d02e9a5b15b325213fcd/e/experimental"
test_is_external_source_keyboard "https://github.com/mcdurdin/external_experiment_2/tree/ade06704300fe7a1fdd40e101c415f23dabc6839/e/external_experiment_2"
test_is_not_external_source_keyboard "http"
test_is_not_external_source_keyboard "http://github.com/mcdurdin/external_experiment_1/tree/0619c3a12a0d48b3ead3d02e9a5b15b325213fcd"
test_is_not_external_source_keyboard "https://github.com/mcdurdin/external_experiment_1/tree/0619c3a"

test_urldecode "https://github.com/mcdurdin/external_experiment_1/tree/0619c3a12a0d48b3ead3d02e9a5b15b325213fcd" "https://github.com/mcdurdin/external_experiment_1/tree/0619c3a12a0d48b3ead3d02e9a5b15b325213fcd"
test_urldecode "https://github.com/s%20s/" "https://github.com/s s/"

echo "All tests passed"

test_retrieve_external_source_keyboard() {
  local t=`mktemp -d`
  pushd "$t"
  _retrieve_external_source_keyboard "$1" "$2" "$3" "${4:-}"
  [ -f ./README.md ] || die "expected README.md to exist"
  [ -f ./LICENSE.md ] || die "expected LICENSE.md to exist"
  [ -f ./HISTORY.md ] || die "expected HISTORY.md to exist"
  [ -f ./source/readme.htm ] || die "expected source/readme.htm to exist"
  popd
  rm -rf "$t"
}

test_retrieve_external_source_keyboard "mcdurdin" "external_experiment_1" "0619c3a12a0d48b3ead3d02e9a5b15b325213fcd"
test_retrieve_external_source_keyboard "mcdurdin" "external_experiment_2" "ade06704300fe7a1fdd40e101c415f23dabc6839" "/e/external_experiment_2"

echo "---ALL TESTS PASSED---"