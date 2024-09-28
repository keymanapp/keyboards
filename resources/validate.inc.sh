#
# Validate that the keyboard exists in only one folder in the repository
#

function validate_keyboard_uniqueness {
  local group=$1
  local keyboard=$2
  local base_keyboard=$3
  local shortname=$(basename `dirname "$keyboard"`)

  local folderlist=$(echo "$KEYBOARD_INFOS" | grep "/$base_keyboard/$base_keyboard.keyboard_info")
#   ls -d "*/*/$base_keyboard") # | grep -v $group/$shortname/$base_keyboard)
  local duplicate_count=$(wc -l <<< "$folderlist")

  if [[ $duplicate_count -gt 1 ]]; then
    die "Keyboard $base_keyboard exists in more than one location:
$folderlist"
  fi

  return 0
}
