#!/bin/bash

echo "************ manually update version in HISTORY.md and the .kmn file before running this ****************"
# update version in all files
OLDVER=1\\.0\\.0
NEWVER=1\\.0\\.0

sed  -i -e  "s/$OLDVER/$NEWVER/" ../../*.kpj
sed  -i -e   "s/$OLDVER/$NEWVER/" ../*.kps
sed  -i -e  "s/$OLDVER/$NEWVER/" ./*help.htm

# Use common html for welcome.htm and  ./itrans_odia-help.php
cat ./welcome.hdr ./itrans_odia-help.htm >  ../welcome/welcome.htm
cat ./help.hdr  ./itrans_odia-help.htm > ../help/itrans_odia.php

grep $OLDVER *.*
grep $OLDVER ../*.*
grep $OLDVER ../*/*.*
grep $OLDVER ../../*.*

grep $NEWVER *.*
grep $NEWVER ../*.*
grep $NEWVER ../*/*.*
grep $NEWVER ../../*.*

# cp keyboard images to ./welcome and ./help

cp *.png ../welcome/
cp *.png ../help/
