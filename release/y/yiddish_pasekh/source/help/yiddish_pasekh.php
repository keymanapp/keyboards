<?php
  $pagename = 'Yiddish Pasekh Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    samp {font:18pt Arial; color:blue; }
    kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px;  padding:2px 4px; vertical-align:middle; line-height:2em; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
END;
   require_once('header.php');
?>



<p>This keyboard layout is designed to type Yiddish by transliteration.</p>

<p>This keyboard layout works best with a QWERTY (English) keyboard. It uses standard Unicode fonts. Many common Windows fonts support Yiddish, including Times New Roman and Arial. Use the Font Helper in Keyman Desktop to find more fonts that work with Yiddish.</p>
<p>This keyboard complies with Unicode 5.1</p>


<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift'></div>
</div>



<div id='Quickstart'>
<h2>Quickstart</h2>

<p>Type Yiddish by transliteration: type <kbd>sh</kbd> for <samp>&#x05E9;</samp> (<em>shin</em> 05E9) or type <kbd>ay</kbd> for <samp>&#x05D0;&#x05F2;&#x05B7;</samp> (<em>pasekh tsvey yudn</em> 05D0 05F2 05B7).</p>

<p>You can use idle keys to speed up typing but you do not have to:</p>

<table class='grid'>
<tr><th>Key</th><th>Alternate method</th><th>Yiddish</th><th>Note</th></tr>
<tr><td><kbd>c</kbd></td><td><kbd>ts</kbd></td><td><samp>&#x05E5;</samp> (05E5)</td><td class='note'>From Eastern European orthographies</td></tr>
<tr><td><kbd>j</kbd></td><td><kbd>ey</kbd></td><td><samp>&#x05F2;</samp> (05F2)</td><td class='note'>The name of j rhymes with ey</td></tr>
<tr><td><kbd>w</kbd></td><td><kbd>sh</kbd></td><td><samp>&#x05E9;</samp> (05E9)</td><td class='note'>Looks like</td></tr>
<tr><td><kbd>x</kbd></td><td><kbd>kh</kbd></td><td><samp>&#x05DA;</samp> (05DA)</td><td class='note'>Phonetic symbol</td></tr>
</table>

<p><EM>Khof, mem, nun, fey</EM> and <EM>tsadek</EM>
are shaped automatically:&nbsp; they take their final forms at the end
of words and their regular forms otherwise.&nbsp; Isolated final forms
can be typed with shifted keys:</p>

<table class='grid'>
<tr><th>Key</th><th>Yiddish</th><th>Note</th></tr>
<tr><td><kbd>SHIFT</kbd>+<kbd>C</kbd></td><td><samp>&#x05E5;</samp> (05E5)</td><td class='note'>Final tsadek</td></tr>
<tr><td><kbd>SHIFT</kbd>+<kbd>X</kbd></td><td><samp>&#x05DA;</samp> (05DA)</td><td class='note'>Final khof</td></tr>
</table>

<p><EM>Shtumer Alef</EM> is automatically inserted
before <EM>ay, ey, i, oy,</EM> or <EM>u</EM> at the beginning of
words.&nbsp; You can type a word-internal shtumer alef with
<kbd>SHIFT</kbd>+<kbd>A</kbd> <samp>&#x05D0;</samp> (05D0)</p>

<p>Occasionally, you may need initial <EM>ay, ey,</EM>
etc. without a shtumer alef, e.g. when you want to list the letters of
the <EM>alefbeys</EM>.&nbsp; You can type them with the following key
combinations:</P>

<table class='grid'>
<tr><th>Key</th><th>Yiddish</th><th>Note</th></tr>
<tr><td><kbd>E</kbd></td><td><samp>&#x05F2;</samp> (05F2)</td><td class='note'>ey (yiddish double yod)</td></tr>
<tr><td><kbd>I</kbd></td><td><samp>&#x05D9;</samp> (05D9)</td><td class='note'>i (yod)</td></tr>
<tr><td><kbd>J</kbd></td><td><samp>&#x05F2;</samp> (05F2)</td><td class='note'>ey (yiddish double yod)</td></tr>
<tr><td><kbd>O</kbd></td><td><samp>&#x05F1;</samp> (05F1)</td><td class='note'>oy (yiddish vav yod)</td></tr>
<tr><td><kbd>U</kbd></td><td><samp>&#x05D5;</samp> (05D5)</td><td class='note'>u (vav)</td></tr>
<tr><td><kbd>Y</kbd></td><td><samp>&#x05F2;&#x05B7;</samp> (05F2 05B7)</td><td class='note'>ay (yiddish double yod + patah)</td></tr>
<tr><td><kbd>yi</kbd></td><td><samp>&#x05D9;&#x05D9;&#x05B4;</samp> (05D9 05D9 05B4)</td> <td class='note'>(yod+yod+hiriq)</td></tr>
<tr><td><kbd>iy</kbd></td><td><samp>&#x05D9;&#x05B4;&#x05D9;</samp> (05D9 05B4 05D9)</td><td class='note'>(yod+hiriq+yod)</td></tr>
<tr><td><kbd>Ei</kbd></td><td><samp>&#x05F2;&#x05D9;&#x05B4;</samp> (05F2 05D9 05B4)</td><td class='note'>(yiddish double yod+yod+hiriq)</td></tr>
<tr><td><kbd>Ui</kbd></td><td><samp>&#x05D5;&#x05D9;&#x05B4;</samp> (05D5 05D9 05B4)</td><td class='note'>(vav+yod+hiriq)</td></tr>
<tr><td><kbd>II</kbd></td><td><samp>&#x05D9;&#x05B4;</samp> (05D9 05B4)</td><td class='note'>(yod+hiriq)</td></tr>
</table>

<p>Hebrew-specific letters are typed with shifted keys, too:</p>

<table class='grid'>
<tr><th>Key</th><th>Hebrew</th><th>Note</th></tr>
<tr><td><kbd>B</kbd></td><td><samp>&#x05D1;&#x05BF;</samp> (05D1 05BF)</td><td class='note'>veys</td></tr>
<tr><td><kbd>H</kbd></td><td><samp>&#x05D7;</samp> (05D7)</td><td class='note'>khes</td></tr>
<tr><td><kbd>K</kbd></td><td><samp>&#x05DB;&#x05BC;</samp> (05DB 05BC)</td><td class='note'>kof (Hebrew kaf)</td></tr>
<tr><td><kbd>S</kbd></td><td><samp>&#x05EA;</samp> (05EA)</td><td class='note'>sof</td></tr>
<tr><td><kbd>T</kbd></td><td><samp>&#x05EA;&#x05BC;</samp> (05EA 05BC)</td><td class='note'>tof</td></tr>
<tr><td><kbd>W</kbd></td><td><samp>&#x05E9;&#x05C2;</samp> (05E9 05C2)</td><td class='note'>sin</td></tr>
</table>

<p><EM>Geresh</EM> is typed with <kbd>SHIFT</kbd>+<kbd>G</kbd> <samp>&#x05F3;</samp> (05F3) and <EM>curly double quotes</EM> are typed with the <kbd>q</kbd> <samp>&#x201E;</samp> (201E) key.&nbsp; The opening
quotation mark is low if Q is unshifted and high if shifted.</P>

<p>The backslash (<kbd>\</kbd>) key functions as a temporary place holder to separate letters or parts of compound words.&nbsp;<br/>
Type <kbd>s\h</kbd> to output <samp>סה</samp> (<em>samekh hey</em>) instead of <samp>ש</samp> (<em>shin</em>), 
or type <kbd>ge\aylt</kbd> to insert a <em>shtumer alef</em> between the <em>ayen</em> and the <em>pasekh tsvey yudn</em>.</p>
<p><i>dagesh or mapiq</i> can be accessed following the appropriate letters. Some of these are available on single keystrokes and some are available by typing a backslash <kbd>\</kbd> before a key.</p>
<p>Type <kbd>K</kbd> or <kbd>\K</kbd> to output <samp>&#x05DB;&#x05BC;</samp> (05DB 05BC) kaf mapiq</p>
<p>Type <kbd>p</kbd> or <kbd>\p</kbd> to output <samp>&#x05E4;&#x05BC;</samp> (05E4 05BC) pe mapiq</p>
<p>Type <kbd>T</kbd> or <kbd>\T</kbd> to output <samp>&#x05EA;&#x05BC;</samp> (05EA 05BC) tav mapiq</p>
<p>Type <kbd>\U</kbd> to output <samp>&#x05D5;&#x05BC;</samp> (05D5 05BC) vav mapiq</p>

<p>The hyphen (<kbd>-</kbd>) key outputs a <em>makef</em> after a Yiddish letter and a hyphen otherwise.&nbsp; If, for some reason, you need a hyphen after a Yiddish letter, press the hyphen key twice.</p>

<p>A hyphen after a hyphen turns the hyphen into an en dash.<br />
A hyphen after an en dash turns the en dash into an em dash.<br />
A <em>geresh</em> after a <em>geresh</em> turns the <em>geresh</em> into <em>gershayim.</em></p>

