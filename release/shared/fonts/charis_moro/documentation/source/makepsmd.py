#!/usr/bin/env python
'''Process font documentation .md files for use on product sites '''
__url__ = 'https://github.com/silnrsi/fontdocs'
__copyright__ = 'Copyright (c) 2021-2025 SIL Global (https://www.sil.org)'
__license__ = 'Released under the MIT License (https://opensource.org/licenses/MIT)'
__author__ = 'Victor Gaultney'

import re
from silfont.core import execute

argspec = [
    ('infile', {'help': 'Input .md filename'}, {'type': 'infile'}),
    ('outfile',{'help': 'Output .md filename'}, {'type': 'outfile'})
]

def doit(args):
    infile = args.infile
    outfile = args.outfile

    firstline = True
    inheader = False
    inpsonly = False
    infontsc = False
    
    classes = []

    temptext = ""

    # remove YAML header and uncomment the [font] shortcode
    for line in infile:
        if firstline:
            firstline = False
            inheader = True
            continue
        if inheader:
            if line.startswith("---"):
                inheader = False
            continue
        if line.startswith("<!-- PRODUCT SITE ONLY"):
            inpsonly = True
            continue
        if inpsonly:
            if line.startswith("-->"):
                inpsonly = False
                continue
        if line.startswith("[font") and infontsc == False:
            infontsc = True
            fontscre = re.compile(r"\[font id='(\w+)'(.+)\]")
            fontsc = fontscre.match(line)
            fontscid = fontsc.group(1)
            fontscend = fontsc.group(2)
        temptext = temptext + line

    # reconfigure image markup
    mdimage = re.compile(r"!\[(.*?)\]\((\S+\.\w+)\)\{\.(\S+)\}\n?<!--\sPRODUCT\sSITE\sIMAGE\sSRC\s(\S+)\s-->")
    temptext = mdimage.sub(r"<img class='\3' alt='\1' src='\4' />", temptext)
    mdimagecap = re.compile(r"<figcaption>(.*?)<\/figcaption>")
    temptext = mdimagecap.sub(r"[caption]<em>\1</em>[/caption]", temptext)

    # replace local links with site references
    mdlink = re.compile(r"\((?!https://)(?P<path>[^()]*).md\)")
    temptext = mdlink.sub(r"(\g<path>)",temptext)

    # replace links to external markdown files
    temptext = temptext.replace(".rawmd",".md")

    # replace escaped @ in link texts
    temptext = temptext.replace(r"[\@",r"[@")

    # make a list of new classes needed for font shortcode
    # separate searches for spans with 1, 2, or 3 settings
    fontclass1 = re.compile(r"style='font-feature-settings:\s\"(\w+\d*)\"\s(\d+)'")
    fontclass2 = re.compile(r"style='font-feature-settings:\s\"(\w+\d*)\"\s(\d+),\s\"(\w+\d*)\"\s(\d+)'")
    fontclass3 = re.compile(r"style='font-feature-settings:\s\"(\w+\d*)\"\s(\d+),\s\"(\w+\d*)\"\s(\d+),\s\"(\w+\d*)\"\s(\d+)'")
    for match in fontclass1.finditer(temptext):
         classes.append(("-" + match.group(1) + "-" + match.group(2), match.group(1) + " " + match.group(2)))
    for match in fontclass2.finditer(temptext):
         classes.append(("-" + match.group(1) + "-" + match.group(2) + "-" + match.group(3) + "-" + match.group(4), match.group(1) + " " + match.group(2) + ", " + match.group(3) + " " + match.group(4)))
    for match in fontclass3.finditer(temptext):
         classes.append(("-" + match.group(1) + "-" + match.group(2) + "-" + match.group(3) + "-" + match.group(4) + "-" + match.group(5) + "-" + match.group(6), match.group(1) + " " + match.group(2) + ", " + match.group(3) + " " + match.group(4) + ", " + match.group(5) + " " + match.group(6)))

    # transform explicit font feature settings into classes
    # separate searches for spans with 1, 2, or 3 settings
    fontspan1 = re.compile(r"class='(\w+)+-(\w+)+\snormal'\sstyle='font-feature-settings:\s\"(\w+\d*)\"\s(\d+)'>")
    fontspan2 = re.compile(r"class='(\w+)+-(\w+)+\snormal'\sstyle='font-feature-settings:\s\"(\w+\d*)\"\s(\d+),\s\"(\w+\d*)\"\s(\d+)'>")
    fontspan3 = re.compile(r"class='(\w+)+-(\w+)+\snormal'\sstyle='font-feature-settings:\s\"(\w+\d*)\"\s(\d+),\s\"(\w+\d*)\"\s(\d+),\s\"(\w+\d*)\"\s(\d+)'>")
    temptext = fontspan1.sub(r"class='\1-\3-\4-\2 normal'>", temptext)
    temptext = fontspan2.sub(r"class='\1-\3-\4-\5-\6-\2 normal'>", temptext)
    temptext = fontspan3.sub(r"class='\1-\3-\4-\5-\6-\7-\8-\2 normal'>", temptext)

    # add new font sortcodes for added classes
    for c in classes:
        temptext = temptext + "[font id='" + fontscid + c[0] + "'" + fontscend + " feats='" + c[1] + "']\n"

    outfile.write(temptext)

    return


def cmd() : execute(None,doit, argspec)
if __name__ == "__main__": cmd()
