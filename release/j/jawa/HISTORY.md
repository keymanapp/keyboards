Nulisa Aksara Jawa Keyboard Change History
=======================


-----------------
1 December 2023 - 2.0.1
-----------------
* Update to use newest version of fonts

-----------------
6 April 2021 - 2.0
-----------------
Update to version 2.0
* Harmonize with the standard Javanese keyboard layout (Javanese Script Congress -- March 2021)

-----------------
26 Feb 2020
-----------------
KMN file
*add pangkon + pada lingsa/lungsi rule
*add exception rule for pasangan "nga lelet" > pasangan "la pepet"
*add ALT+0 = pepet
*disallow number/symbol + pangkon/sesigeg/wyanjana
*dirgamure (ai) also works for murda and cecak telu (rekan) now (line 270-1)
*add 'reu' (long 're')
*change the way '?' switcher rotate (no more cecak telu, include '?' symbol)
*restore some commented-out codes: space > zws, 'eu', and 'ny'
*change ZWJ constant name > ZWS

KPS file
* Add more supported languages (total 8)

HTM file
* Expand welcome2.htm

Minor update on the layout in kvks and touch

-----------------
22 Feb 2020 - 1.1
-----------------
* Revamped the touch keyboard layout. Made into 4 layers: default, shift, numeric, and symbol
** On the default layer, there's modified-qwerty layout, with longpress for Latin alphabets, and Latin symbols (which are also in symbol layer) on 5 keys ',', '.', '?', to the right of the letter 'l', and where the 'q' letter usually located (to the left of the letter 'w').
** On the shift (Aksara) layer, there's the rare Javanese characters, such as 'murda's, 'mahaprana's, 'swara's. Each of these can be achieved by the combination in the 'default' layout. (such as in the welcome.htm table)
** On the numeric layer, there's the '1' to '0' numbers, with their longpress option each; all the 'sandhangan's (vowels), 'sesigeg's, 'wyanjana's, and some basic Latin symbol, corresponding to numerals, such as +, -, /, =, as well as 'point' and 'comma'. Due to no space left, I didn't include '*' symbol.
** On the symbol layer (go to numeric layer, and press the lower left button), I put the longpress option for the numbers in the top row, from '!' to ')', as well as rare Javanese character symbols in the middle row, the rest of symbol on US basic keyboard minus '[', ']', '{', '}' in the third row [see note below], and on the last row, I put the super-unnecessary-Javanese-characters, just for completeness sake. Nobody will ever use them. Ever.
** Note: if one need to access the '[', ']', '{', '}' symbols, just go to the default layer, and longpress either ',' or '.' keys. That's the only way to access them right now. Every other symbol have at least two way to access, longpress from default layer, or from numeric/symbol layers.

-----------------
21 Feb 2020 - Released version 1.0
-----------------
* The keyboard is published on https://keyman.com/keyboards/jawa
* Create the touch keyboard layout
* Activate target web, android, mobile, tablet.
* Remove Tuladha Jejeg: doesn't work on the Keyman Android App, maybe because it's gradle based? Removing it reduce the .kmp size from 550k to 150k.
* Changing the .kmn file, put a name for every character, for greater readibility of the code and possible development for other Indonesian scripts in the future.
* Modify touch layout (add long press option)
* Expand the welcome.htm help file

-----------------
(28 Jan 2019)
-----------------

* Made a lot of improvements: Added documentation, help file, welcome file, fix bugs, more Sundanese support, rekan support, code simplification with store()s, less comments, harder to read, but shorter code
* Tried to publish, but there's some minor fixes that needs to be resolved before it can get published
* Unfortunately, I'm unable to continue develop for about one year after this.

-----------------
(24 Jan 2019) - Initial version
-----------------

* Read about Keyman while browsing through SIL's product page. I tried to create this keyboard just in one day. Based on my previous work for online transliteration (http://bennylin.github.io/transliterasijawa). I've been looking for a long time for keyboard that are able to do this. Thanks.
