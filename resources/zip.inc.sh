#!/usr/bin/env bash

#
# Creates a zip file. This version strips paths from files added to the zip
# file. Uses perl which is available in git bash and cross-platform; git bash
# does not include 'zip'.
#
# $1: zip filename to create
# $2: glob to add to zip file (paths will be stripped in resultant file)
#
# Example:
#   create_zip_file_strip_paths \
#     "output/16.0.30-alpha-local.zip" \
#     "output/16.0.30-alpha-local/*"
#
function create_zip_file_strip_paths() {
  local ZIP="$1"
  local FILES="$2"

  perl -e "
    use strict;
    use warnings;
    use autodie;
    use IO::Compress::Zip qw(:all);
    zip [
      <\$ARGV[1]>
    ] => \$ARGV[0],
        FilterName => sub { s/^.+?([^\\/]+)$/\$1/ },
        Zip64 => 0,
    or die \"Zip failed: \$ZipError\n\";
  " -- "$ZIP" "$FILES"
}
