<?php 
  $pagename = 'Cherokee Nation Phonetic Basic Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
div.c { clear: both }
.group { float: left; margin-right: 2em; margin-bottom: 2em }
div.metaGroup table { font-size: small; }
table.scGroup { float: left; margin-right: 2em; font-size: small; margin-bottom: 2em }
div.kbConfig { text-align: right; font-size: smaller; background-color: rgb(238, 238, 238); border: solid 1px #ddd; border-radius: 6px; padding: 9px }
table, td, th { border: solid 1px black; border-collapse: collapse }
table { empty-cells: hide }
td, th { padding: 5px; }
th { text-align: left; }
.nr { background-color: rgb(238, 238, 238); }
span.leg { border: solid 1px black; width: 0.75em; height: 0.75em; display: inline-block; }
ul.spaced li { margin-bottom: 1em }
div#logo a, h1 a { color: black; text-decoration: none }
div.klGroup h3, div.metaGroup h2 { margin-bottom: 0.1em }
div.featureTile { background-color: rgb(238, 238, 238); border: solid 1px #ddd; border-radius: 6px; padding: 9px }
div.featureTile a { margin-top: 9px; display: block }
table.tileKey { border-style: none }
table.tileKey th { min-width: 24px; height: 24px; border: solid 1px black; border-radius: 6px; vertical-align: middle; text-align: center; font-weight: normal; font-size: 24px; background-color: white }
table.tileKey td { border-style: none }
table.dead { float: left }
table.unreachable, tr.sp, div.sp, table.sgcaps td.dead, table.ss td.dead { background-color: rgb(238, 238, 238); }
div.sp { width: 1em; height: 1em; border: solid 1px black; float: left; margin-right: 0.5em }
table.liga td.ch { font-size: small; }
table.ss { border-style: none; margin-bottom: 1em }
table.ss th.n { color: darkgray; }
table.ss th { font-size: small; background-color: rgb(238, 238, 238); }
table.ss td:empty { border: none }
table.ss td { text-align: center }
table.ss th.td { font-weight: normal; font-size: inherit; background-color: inherit; }
table.ss td > a { color: black; text-decoration: none; }
table.uni span { display: inline-block }
ol.sp li { margin-bottom: 1em }

span.k { display: inline-block; padding: 3px 5px; font-size: small; color: #444d56; vertical-align: middle; background-color: #fafbfc; border: solid 1px #c6cbd1; border-bottom-color: #959da5; border-radius: 3px; box-shadow: inset 0 -1px 0 #959da5 }
END;
  require_once('header.php');
?>

<p>
This keyboard layout is designed for Cherokee.  It includes an on screen keyboard 
which can be viewed by clicking on the Keyman icon and selecting the On Screen Keyboard menu 
item. The keyboard layout follows the Windows 10 Cherokee Nation Phonetic layout.
</p>

<h1>Keyboard Layout</h1>
<p>This keyboard utilizes dead keys to reach the Cherokee characters. The dead keys on this layout have square brackets around them. For example, "[q]" is a dead key.</p>


<h2>Keyboard Layout</h1>
<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Dead keys</h2>
<p>This keyboard utilizes dead keys to reach the Cherokee characters.</p>
<p>Type the dead key (such as a "q") followed by a character in second row. The output will be the corresponding cell beneath the last character that was typed</p>
<div class="group"><table class="" title="q"><tr><th colspan="7">q or Q</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13CA CHEROKEE LETTER QUU">Ꮚ</td><td title="U&#x2B;13C6 CHEROKEE LETTER QUA">Ꮖ</td><td title="U&#x2B;13C7 CHEROKEE LETTER QUE">Ꮗ</td><td title="U&#x2B;13C8 CHEROKEE LETTER QUI">Ꮘ</td><td title="U&#x2B;13C9 CHEROKEE LETTER QUO">Ꮙ</td><td title="U&#x2B;13CB CHEROKEE LETTER QUV">Ꮛ</td></tr></table></div>
<div class="group"><table class="" title="w"><tr><th colspan="7">w or W</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13E9 CHEROKEE LETTER WA">Ꮹ</td><td title="U&#x2B;13E9 CHEROKEE LETTER WA">Ꮹ</td><td title="U&#x2B;13EA CHEROKEE LETTER WE">Ꮺ</td><td title="U&#x2B;13EB CHEROKEE LETTER WI">Ꮻ</td><td title="U&#x2B;13EC CHEROKEE LETTER WO">Ꮼ</td><td title="U&#x2B;13ED CHEROKEE LETTER WU">Ꮽ</td><td title="U&#x2B;13EE CHEROKEE LETTER WV">Ꮾ</td></tr></table></div>
<div class="group"><table class="" title="T"><tr><th colspan="10">t or T</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13D4 CHEROKEE LETTER TA">Ꮤ</td><td title="U&#x2B;13D4 CHEROKEE LETTER TA">Ꮤ</td><td title="U&#x2B;13D6 CHEROKEE LETTER TE">Ꮦ</td><td title="U&#x2B;13D8 CHEROKEE LETTER TI">Ꮨ</td><td title="U&#x2B;13DA CHEROKEE LETTER DU">Ꮪ</td><td title="U&#x2B;13DB CHEROKEE LETTER DV">Ꮫ</td></tr></table></div>
<div class="group"><table class="" title="y"><tr><th colspan="7">y or Y</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13EF CHEROKEE LETTER YA">Ꮿ</td><td title="U&#x2B;13EF CHEROKEE LETTER YA">Ꮿ</td><td title="U&#x2B;13F0 CHEROKEE LETTER YE">Ᏸ</td><td title="U&#x2B;13F1 CHEROKEE LETTER YI">Ᏹ</td><td title="U&#x2B;13F2 CHEROKEE LETTER YO">Ᏺ</td><td title="U&#x2B;13F3 CHEROKEE LETTER YU">Ᏻ</td><td title="U&#x2B;13F4 CHEROKEE LETTER YV">Ᏼ</td></tr></table></div>
		<div class="c"></div>
<div class="group"><table class="" title="s"><tr><th colspan="10">s or S</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;0060 GRAVE ACCENT">`</td><td title="U&#x2B;0078 LATIN SMALL LETTER X">x</td><td title="U&#x2B;0058 LATIN CAPITAL LETTER X">X</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13CD CHEROKEE LETTER S">Ꮝ</td><td title="U&#x2B;13CD CHEROKEE LETTER S">Ꮝ</td><td title="U&#x2B;13CD CHEROKEE LETTER S">Ꮝ</td><td title="U&#x2B;13CD CHEROKEE LETTER S">Ꮝ</td><td title="U&#x2B;13CC CHEROKEE LETTER SA">Ꮜ</td><td title="U&#x2B;13CE CHEROKEE LETTER SE">Ꮞ</td><td title="U&#x2B;13CF CHEROKEE LETTER SI">Ꮟ</td><td title="U&#x2B;13D0 CHEROKEE LETTER SO">Ꮠ</td><td title="U&#x2B;13D1 CHEROKEE LETTER SU">Ꮡ</td><td title="U&#x2B;13D2 CHEROKEE LETTER SV">Ꮢ</td></tr></table></div>
<div class="group"><table class="" title="d"><tr><th colspan="13">d or D</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13D3 CHEROKEE LETTER DA">Ꮣ</td><td title="U&#x2B;13D3 CHEROKEE LETTER DA">Ꮣ</td><td title="U&#x2B;13D5 CHEROKEE LETTER DE">Ꮥ</td><td title="U&#x2B;13D7 CHEROKEE LETTER DI">Ꮧ</td><td title="U&#x2B;13D9 CHEROKEE LETTER DO">Ꮩ</td><td title="U&#x2B;13DA CHEROKEE LETTER DU">Ꮪ</td><td title="U&#x2B;13DB CHEROKEE LETTER DV">Ꮫ</td></tr></table></div>
<div class="group"><table class="" title="g"><tr><th colspan="11">g or G</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13A6 CHEROKEE LETTER GA">Ꭶ</td><td title="U&#x2B;13A6 CHEROKEE LETTER GA">Ꭶ</td><td title="U&#x2B;13A8 CHEROKEE LETTER GE">Ꭸ</td><td title="U&#x2B;13A9 CHEROKEE LETTER GI">Ꭹ</td><td title="U&#x2B;13AA CHEROKEE LETTER GO">Ꭺ</td><td title="U&#x2B;13AB CHEROKEE LETTER GU">Ꭻ</td><td title="U&#x2B;13AC CHEROKEE LETTER GV">Ꭼ</td></tr></table></div>
		<div class="c"></div>
<div class="group"><table class="" title="h"><tr><th colspan="9">h or H</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13AD CHEROKEE LETTER HA">Ꭽ</td><td title="U&#x2B;13AD CHEROKEE LETTER HA">Ꭽ</td><td title="U&#x2B;13AE CHEROKEE LETTER HE">Ꭾ</td><td title="U&#x2B;13AF CHEROKEE LETTER HI">Ꭿ</td><td title="U&#x2B;13B0 CHEROKEE LETTER HO">Ꮀ</td><td title="U&#x2B;13B1 CHEROKEE LETTER HU">Ꮁ</td><td title="U&#x2B;13B2 CHEROKEE LETTER HV">Ꮂ</td></tr></table></div>
<div class="group"><table class=""><tr><th colspan="7">j or J</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13E3 CHEROKEE LETTER TSA">Ꮳ</td><td title="U&#x2B;13E3 CHEROKEE LETTER TSA">Ꮳ</td><td title="U&#x2B;13E4 CHEROKEE LETTER TSE">Ꮴ</td><td title="U&#x2B;13E5 CHEROKEE LETTER TSI">Ꮵ</td><td title="U&#x2B;13E6 CHEROKEE LETTER TSO">Ꮶ</td><td title="U&#x2B;13E7 CHEROKEE LETTER TSU">Ꮷ</td><td title="U&#x2B;13E8 CHEROKEE LETTER TSV">Ꮸ</td></tr></table></div>
<div class="group"><table class="" title="k"><tr><th colspan="7">k or K</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td></tr><tr><td title="U&#x2B;13A7 CHEROKEE LETTER KA">Ꭷ</td><td title="U&#x2B;13A7 CHEROKEE LETTER KA">Ꭷ</td><td title="U&#x2B;13AA CHEROKEE LETTER GO">Ꭺ</td></tr></table></div>
<div class="group"><table class="" title="l or L"><tr><th colspan="7">l</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13B3 CHEROKEE LETTER LA">Ꮃ</td><td title="U&#x2B;13B3 CHEROKEE LETTER LA">Ꮃ</td><td title="U&#x2B;13B4 CHEROKEE LETTER LE">Ꮄ</td><td title="U&#x2B;13B5 CHEROKEE LETTER LI">Ꮅ</td><td title="U&#x2B;13B6 CHEROKEE LETTER LO">Ꮆ</td><td title="U&#x2B;13B7 CHEROKEE LETTER LU">Ꮇ</td><td title="U&#x2B;13B8 CHEROKEE LETTER LV">Ꮈ</td></tr></table></div>
		<div class="c"></div>
<div class="group"><table class="" title="x"><tr><th colspan="1">x or X</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td></tr><tr><td title="U&#x2B;0078 LATIN SMALL LETTER X">x</td></tr></table></div>
<div class="group"><table class="" title="c"><tr><th colspan="2">c or C</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td></tr><tr><td title="U&#x2B;13A7 CHEROKEE LETTER KA">Ꭷ</td><td title="U&#x2B;13A7 CHEROKEE LETTER KA">Ꭷ</td></tr></table></div>
<div class="group"><table class="" title="n"><tr><th colspan="9">n or N</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;0068 LATIN SMALL LETTER H">h</td><td title="U&#x2B;0048 LATIN CAPITAL LETTER H">H</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td><td title="U&#x2B;13A5 CHEROKEE LETTER V">Ꭵ</td></tr><tr><td title="U&#x2B;13BE CHEROKEE LETTER NA">Ꮎ</td><td title="U&#x2B;13C0 CHEROKEE LETTER NAH">Ꮐ</td><td title="U&#x2B;13C0 CHEROKEE LETTER NAH">Ꮐ</td><td title="U&#x2B;13BE CHEROKEE LETTER NA">Ꮎ</td><td title="U&#x2B;13C1 CHEROKEE LETTER NE">Ꮑ</td><td title="U&#x2B;13C2 CHEROKEE LETTER NI">Ꮒ</td><td title="U&#x2B;13C3 CHEROKEE LETTER NO">Ꮓ</td><td title="U&#x2B;13C4 CHEROKEE LETTER NU">Ꮔ</td><td title="U&#x2B;13C5 CHEROKEE LETTER NV">Ꮕ</td></tr></table></div>
<div class="group"><table class="" title="m"><tr><th colspan="6">m or M</th></tr><tr><td title="U+0020 SPACE">&nbsp;</td><td title="U&#x2B;13A0 CHEROKEE LETTER A">Ꭰ</td><td title="U&#x2B;13A1 CHEROKEE LETTER E">Ꭱ</td><td title="U&#x2B;13A2 CHEROKEE LETTER I">Ꭲ</td><td title="U&#x2B;13A3 CHEROKEE LETTER O">Ꭳ</td><td title="U&#x2B;13A4 CHEROKEE LETTER U">Ꭴ</td></tr><tr><td title="U&#x2B;13B9 CHEROKEE LETTER MA">Ꮉ</td><td title="U&#x2B;13B9 CHEROKEE LETTER MA">Ꮉ</td><td title="U&#x2B;13BA CHEROKEE LETTER ME">Ꮊ</td><td title="U&#x2B;13BB CHEROKEE LETTER MI">Ꮋ</td><td title="U&#x2B;13BC CHEROKEE LETTER MO">Ꮌ</td><td title="U&#x2B;13BD CHEROKEE LETTER MU">Ꮍ</td></tr></table></div>
		<div class="c"></div>

	</div>
