#!/usr/bin/env python3

import argparse, re, time, json, sys
import unicodedata as ud
from palaso.font.shape import HbFont
from fontTools import ttLib
from fontTools.ttLib.tables._g_l_y_f import Glyph, GlyphComponent
from fontTools.ttLib.tables._c_m_a_p import CmapSubtable

def analyzeNames(font):
    res = set()
    for n in font['name'].names:
        x = (n.platformID, n.platEncID, n.langID)
        res.add(x)
    return res

def setname(font, nameid, s, platforms=None):
    if platforms is None:
        platforms = [(0, 3, 0), (3, 1, 0x409)]
    for p in platforms:
        font['name'].setName(s, nameid, *p)

def copyglyph(gname, infont, outfont, lsb, x):
    lsb = min(infont['hmtx'].metrics[gname][1] + x, lsb)
    if gname in outfont['glyf']:
        return lsb
    g = infont['glyf'].get(gname, None)
    if g is None:
        return lsb
    outfont['hmtx'].metrics[gname] = infont['hmtx'].metrics[gname]
    if g.isComposite():
        glyph = Glyph()
        glyph.numberOfContours = -1
        glyph.components = []
        for gc in g.components:
            glyph.components.append(gc)
            lsb = copyglyph(gc.glyphName, infont, outfont, lsb, x + gc.x)
    elif not hasattr(g, "data"):
        glyph = Glyph(g.compile(infont['glyf']))
    else:
        glyph = Glyph(g.data)
    outfont['glyf'][gname] = glyph
    return lsb

def copyfont(infont, outfont, glyphs=False):
    for a in ("post", "name"):
        outfont[a] = infont[a]
    outfont['post'].mapping = {}
    outfont['post'].extraNames = []
    for a in ("cmap", "glyf", "hmtx", "loca"):
        if not glyphs:
            outfont[a] = ttLib.newTable(a)
        elif a in infont:
            outfont[a] = infont[a]
    if not glyphs:
        cmap = CmapSubtable.newSubtable(4)
        cmap.cmap = {}
        cmap.platformID = 3
        cmap.platEncID = 1
        cmap.language = 0x409
        cmapt = outfont['cmap']
        cmapt.tableVersion = 0
        cmapt.tables = [cmap]
        outfont['glyf'].glyphs = {}
        outfont['hmtx'].metrics = {}

    for a in ("head", "maxp", "hhea", "OS/2", "cvt ", "fpgm", "gasp", "prep"):
        if a in infont:
            outfont[a] = infont[a]

def ofltest(font):
    for a in (0, 13, 14):
        s = font['name'].getDebugName(a)
        if not s:
            continue
        for b in ('open font license', 'ofl'):
            if b in s.lower():
                return True
    return False

parser = argparse.ArgumentParser()
parser.add_argument("infont", help="Input TTF font file")
parser.add_argument("-o", "--outfont", required=True, help="Output TTF font file")
parser.add_argument("-c", "--config", required=True, help="Input config file")
parser.add_argument("-n", "--name", required=True, help="Output font name")
parser.add_argument("-F", "--feat", action="append", help="feat=val repeatable")
parser.add_argument("-B", "--base", help="USV of base character for strings startwith a mark")
parser.add_argument("-L", "--license", action="store_true", help="Don't do OFL check")
parser.add_argument("-A", "--noascii", action="store_true", help="Don't copy ASCII across")
parser.add_argument("-C", "--creator", default="ttoskfont", help="Creator in copyright statement")
parser.add_argument("-V", "--version", default="0.1", help="Version of font to create")
args = parser.parse_args()

infont = ttLib.TTFont(args.infont)
if not args.license:
    if not ofltest(infont):
        print("OFL Check failed")
        sys.exit(1)
platforms = analyzeNames(infont)

outfont = ttLib.TTFont()
copyfont(infont, outfont, glyphs=False)
base = chr(int(args.base, 16)) if args.base else None

jobs = {}
if args.config.lower().endswith(".txt"):
    with open(args.config, encoding="UTF-8") as inf:
        for l in inf.readlines():
            t = re.sub(r"#.*$", "", l.strip())
            b = t.split()
            if len(b) < 2:
                continue
            try:
                bv = [int(x, 16) for x in b]
            except ValueError:
                continue
            jobs[bv[0]] = "".join(chr(x) for x in bv[1:])
elif args.config.lower().endswith(".json"):
    with open(args.config, encoding="utf-8") as inf:
        dat = json.load(inf)
    for d in dat['map']:
        s = d['str']
        if base and not len(s):
            s = base
        elif base and ud.category(s[0]).startswith("M"):
            s = base + s
        jobs[int(d["pua"], 16)] = s

if not args.noascii:
    for a in range(0x0020, 0x0080):
        if a not in jobs:
            jobs[a] = chr(a)

if args.feat and len(args.feat):
    feats = {b[0].strip(): b[1].strip() for x in args.feat for b in x.split("=")}
else:
    feats = None
hb = HbFont(args.infont, 0, False, feats=feats)

inglyphorder = infont.getGlyphOrder()
outglyphorder = []
outfont.setGlyphOrder(outglyphorder)
cmap = outfont['cmap'].getBestCmap()
for a in ('.notdef', '.null', 'space'):
    copyglyph(a, infont, outfont, 10000, 0)
cmap[32] = 'space'
cmap[0xF020] = 'space'
firstdone = False
for k, v in jobs.items():
    gs = hb.glyphs(v, includewidth=True)
    adv = gs.pop()[1][0]
    lsb = 10000
    # outglyphorder.append(glyphname) 
    if len(gs) == 1 and gs[0][1][0] == 0 and gs[0][1][1] == 0:
        gname = inglyphorder[gs[0][0]]
        lsb = copyglyph(gname, infont, outfont, lsb, 0)
        cmap[k] = gname
    else:
        glyph = Glyph()
        glyph.numberOfContours = -1
        glyph.components = []
        glyphname = ttLib.TTFont._makeGlyphName(k)
        outfont['glyf'][glyphname] = glyph
        cmap[k] = glyphname
        for g in gs:
            if g[0] == 0:
                print("Missing glyph for {} in {:04X}".format(" ".join("0x%04X" % ord(x) for x in v), k))
            gname = inglyphorder[g[0]]
            lsb = copyglyph(gname, infont, outfont, lsb, g[1][0])
            gc = GlyphComponent()
            gc.flags = 0
            gc.glyphName = gname
            gc.x = g[1][0]
            gc.y = g[1][1]
            glyph.components.append(gc)
        outfont['hmtx'].metrics[glyphname] = [adv, lsb]
        if not firstdone:
            cmap[0xF041] = cmap[k]
            firstdone = True

try:
    version = float(re.sub(r"[^0-9.]", "", args.version))
    outfont['head'].fontRevision = version
except ValueError:
    print("Invalid version number")

t = int(time.time()) + 0x7C259DC0
outfont['head'].created = t
outfont["OS/2"].recalcUnicodeRanges(outfont)
outfont["OS/2"].recalcAvgCharWidth(outfont)

# Names
subfamily = infont['name'].getBestSubFamilyName()
full = (" " + subfamily) if subfamily.lower() not in ("regular", "standard") else ""
cright = infont['name'].getDebugName(0)
family = infont['name'].getBestFamilyName()
setname(outfont, 0, "Generated by {} from {}: {}".format(args.creator, family, cright), platforms)
setname(outfont, 1, args.name, platforms)
setname(outfont, 3, "{}:{}".format(args.name, time.strftime("%Y-%m-%d")), platforms)
setname(outfont, 4, args.name + full, platforms)
setname(outfont, 5, "Version {}".format(args.version), platforms)
setname(outfont, 6, args.name.replace(" ", ""), platforms)
setname(outfont, 16, args.name, platforms)
setname(outfont, 18, args.name + full, platforms)

outfont.save(args.outfont)
