#!/bin/bash

#
# TODO: make this work for all files.
# TODO: fix build script to work with both x64 and x86 kmcomp transparently 
# and not require two folders
#


set -e

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

function extractKMPFiles() {
    while IFS= read -r line
    do
        if [[ $line == *.kmp ]]; then
            unzip "$line" -d "$line.u/"
            unzip "../keyboards/$line" -d "../keyboards/$line.u/"
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
            cmp -s "$filename" "../keyboards/$filename" || echo "Failed with $filename"
        fi
    done < folderCompareList.tmp
}

  # extract all .kmp files to .zip to 

#  if [[ $line == *.keyboard_info ]]; then
#    grep -hv lastModified < "$line" > "$line.1"
#    mv -f "$line.1" "$line"
#  fi

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
            cmp -s "$line" "../keyboards/$line" || echo "Failed with $line"
        fi
    done < comparelist.tmp
}

function removeBuildFolders() {
    ./build.sh -c
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
        cp -R "$line/*" ".backup/$line/*"
    done
}

removeBuildFolders
build_x86

purifyKeyboardInfo
extractKMPFiles
buildCompareList
backupBuildResults

removeBuildFolders
build_x64

purifyKeyboardInfo
extractKMPFiles

# Do comparisons
compareKMPFiles
compareOtherFiles
