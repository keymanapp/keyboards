#!/bin/bash

##
## Use rsync to copy over specific files listed in syncfiles.txt
##
function rsync_to_downloads_keyman_com {
  local source=$1
  local dest=$2

  #
  # Upload a single file with rsync to downloads.keyman.com
  #

  #rsync_args = (
  #  '-vztp',                                  # verbose, zip, preserve times, permissions
  #  '--chmod=Dug=rwx,Do=rx,Fug=rw,Fo=r',      # map Windows security to host security
  #  '--stats',                                # show statistics for log
  #  "--rsync-path=$REMOTE_RSYNC_PATH",        # path on remote server
  #  "--rsh=ssh",                              # use ssh
  #  "$source",                                # source path
  #  "$dstroot/$dest"                          # target server + dest path
  #)
  
  pushd $source
  
  "$RSYNC" -vtrp --chmod=Dug=rwx,Do=rx,Fug=rw,Fo=r --stats --rsync-path="$REMOTE_RSYNC_PATH" --rsh=ssh --ignore-existing . "$RSYNC_DEST/$dest"
  
  popd
}

# rsync_to_downloads_keyman_com . keyboards/
