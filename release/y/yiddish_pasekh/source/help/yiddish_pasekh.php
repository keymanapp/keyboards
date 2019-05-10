<?php
  $pagename = 'Yiddish Pasekh Keyboard Help';
  $pagetitle = 'Yiddish Pasekh Keyboard Help';
  require_once('header.php');
?>

<h2>Overview</h2>

<p>This keyboard layout is designed to type Yiddish by transliteration.</p>

<p>This keyboard layout works best with a QWERTY (English) keyboard.  It uses standard Unicode fonts.  Many common Windows fonts support Yiddish,
including Times New Roman and Arial.  Use the Font Helper in Keyman Desktop to find more fonts that work with Yiddish.</p>
<p>This keyboard complies with Unicode 5.1</p>


<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift'></div>
</div>



<div id='Quickstart'>
<h2>Quickstart</h2>

<p>Type Yiddish by transliteration: type
<span class='lang2'>ש</span> (<em>shin</em>) with <span class='keys'>sh</span> or <span class='lang2'>אײַ</span> (<em>pasekh tsvey yudn</em>) with
<span class='keys'>ay</span>.</p>

<p>You can use idle keys to speed up typing but you do not have to:</p>

<table class='grid'>
<tr><th>Key</th><th>Alternate method</th><th>Yiddish</th><th>Note</th></tr>
<tr><td><span class='keys'>c</span></td><td><span class='keys'>ts</span></td><td><span class='lang2'>ץ</span></td><td class='note'>From Eastern European orthographies</td></tr>
<tr><td><span class='keys'>j</span></td><td><span class='keys'>ey</span></td><td><span class='lang2'>ײ</span></td><td class='note'>The name of j rhymes with ey</td></tr>
<tr><td><span class='keys'>w</span></td><td><span class='keys'>sh</span></td><td><span class='lang2'>ש</span></td><td class='note'>Looks like</td></tr>
<tr><td><span class='keys'>x</span></td><td><span class='keys'>kh</span></td><td><span class='lang2'>ך</span></td><td class='note'>Phonetic symbol</td></tr>
</table>

<p><EM>Khof, mem, nun, fey</EM> and <EM>tsadek</EM>
are shaped automatically:&nbsp; they take their final forms at the end
of words and their regular forms otherwise.&nbsp; Isolated final forms
can be typed with shifted keys:</p>

<table class='grid'>
<tr><th>Key</th><th>Yiddish</th><th>Note</th></tr>
<tr><td><span class='keys'>[SHIFT]+[C]</span></td><td><span class='lang2'>ץ</span></td><td class='note'>Final tsadek</td></tr>
<tr><td><span class='keys'>[SHIFT]+[X]</span></td><td><span class='lang2'>ך</span></td><td class='note'>Final khof</td></tr>
</table>

<p><EM>Shtumer Alef</EM> is automatically inserted
before <EM>ay, ey, i, oy,</EM> or <EM>u</EM> at the beginning of
words.&nbsp; You can type a word-internal shtumer alef with
<span class='keys'>[SHIFT]+[A]</span></p>

<p>Occasionally, you may need initial <EM>ay, ey,</EM>
etc. without a shtumer alef, e.g. when you want to list the letters of
the <EM>alefbeys</EM>.&nbsp; You can type them with the following key
combinations:</P>

<table class='grid'>
<tr><th>Key</th><th>Yiddish</th><th>Note</th></tr>
<tr><td><span class='keys'>E</span></td><td><span class='lang2'>ײ</span></td><td class='note'>ey</td></tr>
<tr><td><span class='keys'>I</span></td><td><span class='lang2'>י</span></td><td class='note'>i</td></tr>
<tr><td><span class='keys'>J</span></td><td><span class='lang2'>ײ</span></td><td class='note'>ey (the name of J rhymes with ey)</td></tr>
<tr><td><span class='keys'>O</span></td><td><span class='lang2'>ױ</span></td><td class='note'>oy</td></tr>
<tr><td><span class='keys'>U</span></td><td><span class='lang2'>ו</span></td><td class='note'>u</td></tr>
<tr><td><span class='keys'>Y</span></td><td><span class='lang2'>ײַ</span></td><td class='note'>ay (the name of Y rhymes with ay)</td></tr>
<tr><td><span class='keys'>yi</span></td><td><span class='lang2'>ייִ</span></td><td></td></tr>
<tr><td><span class='keys'>iy</span></td><td><span class='lang2'>יִי</span></td><td></td></tr>
<tr><td><span class='keys'>Ei</span></td><td><span class='lang2'>ײיִ</span></td><td></td></tr>
<tr><td><span class='keys'>Ui</span></td><td><span class='lang2'>ויִ</span></td><td></td></tr>
</table>

<p>Hebrew-specific letters are typed with shifted keys, too:</p>

<table class='grid'>
<tr><th>Key</th><th>Hebrew</th><th>Note</th></tr>
<tr><td><span class='keys'>B</span></td><td><span class='lang2'>בֿ</span></td><td class='note'>veys</td></tr>
<tr><td><span class='keys'>H</span></td><td><span class='lang2'>ח</span></td><td class='note'>khes</td></tr>
<tr><td><span class='keys'>K</span></td><td><span class='lang2'>כּ</span></td><td class='note'>kof (Hebrew kaf)</td></tr>
<tr><td><span class='keys'>S</span></td><td><span class='lang2'>ת</span></td><td class='note'>sof</td></tr>
<tr><td><span class='keys'>T</span></td><td><span class='lang2'>תּ</span></td><td class='note'>tof</td></tr>
<tr><td><span class='keys'>W</span></td><td><span class='lang2'>שׂ</span></td><td class='note'>sin</td></tr>
</table>

<p><EM>Geresh</EM> is typed with <span class='keys'>[SHIFT]+[G]</span> and <EM>curly 
double quotes</EM> are typed with the <span class='keys'>q</span> key.&nbsp; The opening
quotation mark is low if Q is unshifted and high if shifted.</P>

<p>The backslash (<span class='keys'>\</span>) key functions as a temporary place holder to separate letters or parts of compound words.&nbsp;
Type <span class='keys'>s\h</span> to output <span class='lang2'>סה</span> (<em>samekh hey</em>) instead of <span class='lang2'>ש</span> (<em>shin</em>), 
or type <span class='keys'>ge\aylt</span> to insert a <EM>shtumer alef</EM> between the <EM>ayen</EM> and the <EM>pasekh tsvey yudn</EM>.</p>

<p>The hyphen (<span class='keys'>-</span>) key outputs a <em>makef</em> after a Yiddish letter and a hyphen otherwise.&nbsp; If, for some reason, you need a
hyphen after a Yiddish letter, press the hyphen key twice.</p>

<p>A hyphen after a hyphen turns the hyphen into an en dash.<br />
A hyphen after an en dash turns the en dash into an em dash.<br />
A <em>geresh</em> after a <em>geresh</em> turns the <em>geresh</em> into <em>gershayim.</em></p>


<div id="Copyright">
<p>© 2002-2019 Gyula Zsigri.</p>

</div>

