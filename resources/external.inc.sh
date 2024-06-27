#----------------------------------------------------------------------------------------
# Source keyboard or model from external repository or binary download location
# This file corresponds very closely to external.sh in keymanapp/lexical-models
#----------------------------------------------------------------------------------------

retrieve_external_keyboard() {
  # Assume we are starting in the correct folder
  [ -f external_source ] || die "No external_source file found"

  local source=`_urldecode $(<external_source)`

  if _is_external_source_keyboard "$source"; then
    # If the external_source file has a single line referencing a GitHub commit
    # hash, then we can treat this as a source reference.
    local repo_owner=${BASH_REMATCH[1]}
    local repo_name=${BASH_REMATCH[2]}
    local repo_hash=${BASH_REMATCH[3]}
    local repo_path=${BASH_REMATCH[4]:-}
    [[ $repo_path =~ \.\. ]] && die "cannot contain .. in path"

    _retrieve_external_source_keyboard "$repo_owner" "$repo_name" "$repo_hash" "$repo_path"
  else
    # Otherwise, if the external_source file consists exclusively of
    # filename=url pairs, then we treat this as a binary reference, and download
    # these files into the source folder, and create the local .source_is_binary
    # file
    _retrieve_external_binary_keyboard
  fi
}

clean_external_target_folder() {
  # Assume we are starting in the correct folder
  [ -f external_source ] || die "No external_source file found"

  local files=`find * \! -name '.gitignore' -a \! -name 'external_source' -a \! -name 'README_EXTERNAL.md' -print`
  rm -f .source_is_binary
  if [ ! -z "$files" ]; then
    rm -rf $files
  fi
}

_is_external_source_keyboard() {
  # https://github.com/(owner)/(repo)/tree/(commit)/(path?)
  [[ $1 =~ ^https:\/\/github.com\/([^\/]+)\/([^\/]+)\/tree\/([a-z0-9]{40})(\/.+)?$ ]]
}

_urldecode() {
  # https://stackoverflow.com/a/37840948/1836776, no +
  echo -e "${*//%/\\x}";
}

_retrieve_external_source_keyboard() {
  local repo_owner="$1"
  local repo_name="$2"
  local repo_hash="$3"
  local repo_path="$4"

  rm -f .source_is_binary

  # create a temp folder
  local source_path=`mktemp -d`
  local dest_path=`pwd`
  pushd "$source_path"

  # fetch the specific commit into the local temp repository
  git init
  git remote add origin "https://github.com/$repo_owner/$repo_name"
  git fetch origin "$repo_hash"
  git reset --hard FETCH_HEAD

  # copy the relevant subfolder tree entirely to this folder
  if [ ! -z "$repo_path" ]; then
    pushd ".$repo_path"
  fi

  # We copy all files (excluding dot-files such as .git, .gitignore)
  cp -R -t "$dest_path" *

  # remove temp folder

  if [ ! -z "$repo_path" ]; then
    popd
  fi

  popd
  rm -rf "$source_path"
}

#
# Download all the files referenced in external_source
#
_retrieve_external_binary_keyboard() {
  # We'll read .source line by line...
  touch .source_is_binary
  mkdir -p source

  # for each line in the external_source file
  while IFS="" read -r line
  do
    line=`echo "$line" | sed 's/^[ \t]*//;s/[ \t]*$//'` # trim whitespace
    local regex='(.+) (.+) (.+)'
    [[ $line =~ $regex ]] || die "Invalid entry \"$line\", expecting file url hash"
    local filename="${BASH_REMATCH[1]}"
    local url="${BASH_REMATCH[2]}"
    local sha256="${BASH_REMATCH[3]}"
    [[ $filename =~ \.\. ]] && die "path cannot contain .."
    [[ $filename =~ ^/ ]] && die "path cannot start with /"
    local path=
    [[ ! $filename =~ .keyboard_info$ ]] && path=source/
    curl -s -L "$url" --output "$path$filename" --create-dirs || die "Unable to download $filename"
    echo "$sha256 $path$filename" | sha256sum -c --quiet || die "Invalid checksum for $filename"
  done < external_source
}

