#
# Build a list of all targets that we will be building, in a specific order:
# * release          (except release/packages)
# * release/packages (except release/packages/fv_all)
# * experimental
# * legacy
#
# The following paths are always excluded:
# * release/shared    - not keyboards, but files shared with other projects (TODO: move folder to top level)
# * release/template  - not a keyboard, but a template layout for keyboards (TODO: move folder to top level)
#
# Expects global $TARGETS array; does not take this as a parameter due to
# spaces in paths which are tedious to avoid
#
function collect_build_targets() {
  rm -f build_targets.txt build_targets_temp.txt build_external_targets.txt build_fv_all.txt build_legacy.txt

  local target=
  local fv_all=false

  for target in "${TARGETS[@]}"; do
    # strip trailing delimiter if present
    target="${target%%/}"

    # because of special cases, it's easiest to treat each level of possible target separately

    if [[ "$target" == */*/* ]]; then
      # echo "$target" >> build_targets.txt
      find "$target" -maxdepth 1 -type d -wholename "$target" | grep -vP '^(release/packages/fv_all)' >> build_targets_temp.txt
      if [[ "$target" == "release/packages/fv_all" ]]; then
        fv_all=true
      fi
    elif [[ "$target" == */* ]]; then
      find "$target" -maxdepth 1 -type d -wholename "$target"'/*' | grep -vP '^(release/packages/fv_all)' >> build_targets_temp.txt
      if [[ "$target" == "release/packages" ]]; then
        fv_all=true
      fi
    else
      find "$target" -maxdepth 2 -type d -wholename "$target"'/*/*' | grep -vP '^(release/packages|release/shared|release/template)' >> build_targets_temp.txt
      if [[ "$target" == release ]]; then
        find "$target" -maxdepth 2 -type d -wholename 'release/packages/*' | grep -vP '^(release/packages/fv_all)' >> build_targets_temp.txt
        fv_all=true
      fi
    fi
  done

  if [[ -f build_targets_temp.txt ]]; then
    # filter build_targets.txt to exclude externally built here
    while IFS= read -r target; do
      local keyboard_name="${target##*/}"
      if [[ "$target" =~ ^legacy/ ]]; then
        echo "$target" >> build_legacy.txt
      elif [[ -f "$target/external_source" ]]; then
        echo "$target" >> build_external_targets.txt
      elif [[ -f "$target/source/$keyboard_name.kps" ]]; then
        # only include targets with a source .kps
        echo "$target" >> build_targets.txt
      fi
    done < build_targets_temp.txt
  fi

  if $fv_all; then
    echo "release/packages/fv_all" > build_fv_all.txt
  fi

  rm -f build_targets_temp.txt
}