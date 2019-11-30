#!/bin/bash
#
# This script builds all keyboards, first with kmcomp x86 and
# then with kmcomp x64, then compares the results. Some cleanup
# is done to avoid mismatches on time and date stamps.
#

set -e
set -u

# Start in keyboards root

KEYBOARDROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && cd ../.. && pwd )"

pushd "$KEYBOARDROOT"

#
# Build list of files to compare
#
function buildCompareList() {
    find . -wholename './release/*/*/build/*' > comparelist.tmp
}

#
# purify .keyboard_info files to remove the lastModified line
#

function purifyKeyboardInfo() {
    while IFS= read -r line
    do
        if [[ $line == *.keyboard_info ]]; then
            grep -hv lastModified < "$line" > "$line.1"
            mv -f "$line.1" "$line"
        fi
    done < comparelist.tmp
}

#
# extract all .kmp files to .zip
#
# Note: we unzip the .kmp files because they differ slightly
# between the x86 and x64 builds because of the timestamps
# on the included files. That's the only difference; unzipping
# them allows us to confirm that.
#

function extractKMPFiles() {
    while IFS= read -r line
    do
        if [[ $line == *.kmp ]]; then
            if [[ -d $line.u ]]; then rm -rf "$line.u"; fi
            unzip "$line" -d "$line.u/"
        fi
    done < comparelist.tmp
}

#
# compare a folder
# 

function compareFolder() {
    local folder=$1
    find "$folder" -name "*" > folderCompareList.tmp
    while IFS= read -r filename
    do
        if [[ ! -d $filename ]]; then
            cmp -s "$filename" ".backup/$filename" || echo "$filename differs between x86 and x64"
        fi
    done < folderCompareList.tmp
}

function compareKMPFiles() {
    while IFS= read -r line
    do
        if [[ $line == *.kmp ]]; then
            compareFolder "$line.u/"
        fi
    done < comparelist.tmp
}

function compareOtherFiles() {
    while IFS= read -r line
    do
        if [[ $line != *.kmp ]]; then
            if [[ ! -d $line ]]; then
                cmp -s "$line" ".backup/$line" || echo "$line is different between x86 and x64"
            fi;
        fi
    done < comparelist.tmp
}

function removeBuildFolders() {
    ./build.sh -c release
}

function build_x86() {
    KMCOMP_BITNESS=x86 ./build.sh release
}

function build_x64() {
    KMCOMP_BITNESS=x64 ./build.sh release
}

function backupBuildResults() {
    if [[ -d ./.backup ]]; then rm -rf ./.backup; fi
    find . -wholename "./release/*/*/build" > buildFolders.tmp
    while IFS= read -r line
    do
        mkdir -p ".backup/$line"
        cp -R "$line" ".backup/$line/.."
    done < buildFolders.tmp
}

# Build with kmcomp.exe
echo "-- Building with kmcomp x86 --"
removeBuildFolders
build_x86

# Build list of files for comparison
echo "-- Building list of files for comparison --"
buildCompareList

# Cleanup results (remove date stamps and unzip kmps)
echo "-- Processing x86 resuls --"
purifyKeyboardInfo
extractKMPFiles

# Backup to .backup/ ready for comparison
echo "-- Backing up x86 results --"
backupBuildResults

# Build with kmcomp.x64.exe
echo "-- Building with kmcomp x64 --"
removeBuildFolders
build_x64

# Cleanup results (remove date stampe and unzip kmps)
echo "-- Processing x64 results --"
purifyKeyboardInfo
extractKMPFiles

# Do comparisons
echo "-- Comparing Content --"
compareKMPFiles
compareOtherFiles

