<?php 
  $pagename = "GFF Geʾez Manuscripts";
  $pagetitle = "The Geʾez Frontier Foundation Keyboard for Geʾez Manuscripts";
  $pagestyle = <<<END
  img.indented { text-indent: 10%}

table.flat { border-spacing: 0; margin: 0.5em 0 }
table.flat td, table.kb th { border: thin solid #666; text-align: center ; padding: 0.3em }
table.flat { border-bottom: hidden }
table.flat { empty-cells: show }
table.flat th { text-align: center; border: thin solid #666; background-color: #e0dacf }
table.flat caption { margin: 0.5em 0 0 0 }

   td.divide { border-left: 1px solid black }
   td.flat-bottom { border-bottom: 1px solid black }
   td.flat-top { border-top: 1px solid black }
  .note { background: #ffa }
  .note-emph { background: #ffa; font-style: italic }
  .question-unanswered { background: #ffa; font-style: italic; color: #ff0000 }
  .question-answered { background: #bfffa0; font-style: italic; text-decoration: line-through }
   body { max-width: 1200px }

table.kb th, table.kb td { padding: 0.3em }
table.kb th:first-child { background-color: #e0dacf; }
table.kb tr:first-child { background-color: #e0dacf; font-weight:bold; }
table.kb tr:first-child th:first-child { background-color: #ffffff; border-left-color: #ffffff; border-top-color: #ffffff }
table.kb tr:first-child th:last-child { background-color: #ffffff; border-right-color: #ffffff; border-top-color: #ffffff }
table.kb th { background-color: #e0dacf; border-left-color: #ffffff }
table.kb td, table.kb th { border: thin solid #666; text-align: center }
table.kb th { text-align: center; background-color: #d7d0b9 }
table.kb { border-bottom: hidden }
table.kb { empty-cells: show }
table.kb caption { margin: 0.5em 0 0 0 }
table.kb tr:last-child { text-align: center; background-color: #d7d0b9; font-weight:bold; }
table.kb tr:last-child th:first-child { background-color: #ffffff; border-left-color: #ffffff; border-bottom-color: #ffffff }
dd {margin: 0 0 1em; padding: 0}

table.punct th { font-weight: bold;  padding: 0.3em }
table.punct td { font-weight: normal; padding: 0.3em }
table.punct th:first-child { background-color: #e0dacf; }
table.punct tr:first-child { background-color: #e0dacf; }
table.punct tr:first-child th:first-child { background-color: #ffffff; border-left-color: #ffffff; border-top-color: #ffffff }
table.punct th { background-color: #e0dacf; border-left-color: #ffffff }
table.punct td, table.punct th { border: thin solid #666; text-align: center }
table.punct th { text-align: center; background-color: #d7d0b9 }
table.punct { border-bottom: hidden }
table.punct { empty-cells: show }

table.zaima th { font-weight: bold;  padding: 0.3em }
table.zaima td { font-weight: normal; padding: 0.3em }
table.zaima th:first-child { background-color: #e0dacf;}
table.zaima tr:first-child th  { background-color: #e0dacf; }
table.zaima tr:first-child th:first-child { background-color: #ffffff; border-left-color: #ffffff; border-top-color: #ffffff }
table.zaima th { background-color: #e0dacf; border-left-color: #ffffff }
table.zaima td, table.zaima th { border: thin solid #666; text-align: center }
table.zaima th { text-align: center; background-color: #d7d0b9 }
table.zaima { border-bottom: hidden }
table.zaima { empty-cells: show }

code {
    display: inline-block;
    width: 50px;
    border: 1px solid #000;
    text-align: center;
}
END;
  require_once('header.php');
?>


<h1>The Geʾez Frontier Foundation Keyboard for Geʾez Manuscripts</h1>
<img alt="EMUFI project logo" src="https://emufi.geez.org/images/emufi-logo.png" width="600"/>

<h2><a id="abstract" name="abstract"></a>Introduction</h2>

<p style="text-align: justify;">
This is a Geʾez (ግዕዝ, ISO-639-2 gez) language mnemonic input method. They keyboard is designed
to work with the <a href="https://emufi.geez.org/">EMUFI</a> project’s “Geʾez Manuscript Zemen” font (v1.2) which in turn 
provides numerous punctuation, numerals, and letter forms found in manuscripts but not yet available under 
the Unicode standard.
</p>

<p style="text-align: justify;">
In essence, this is the <a href="https://keyman.com/keyboards/gff_geez">GFF Geʾez Keyboard</a> with the added ability to type
over 1,000 additional symbols found in Geʾez manuscripts. See the <a target="_blank" href="EMUFI-Typing-Manual.pdf">typing manual</a> 
for a detailed review of how to type these additional symbols. See the <a target="_blank" href="GeezTyping-English.pdf">basic manual</a>
for instructions on typing basic Geʾez letters, punctuation and numbers.</p>
</p>

<p style="text-align: justify;">
The following section is a summary review of the advanced typing, the <a target="_blank" href="EMUFI-Typing-Manual.pdf">pdf manual</a> 
covers typing in full detail.
</p>

<h2><a id="numeral-variations" name="numeral-variations"></a>Numeral Variations</h2>
<p style="text-align: justify;">
The specialized numerals can be entered by typing a regular number followed by the “Tab” key. Each number will have a selection “menu” available. Menus appear on screen in list within square brackets [ ] and an index number. Type the number that corresponds to the desired numeral form to select it.  For example:
</p>

<img src="images/Numeral-Input-List.png" width="600"/>

<p style="text-align: justify;">
The table below depicts the typing of available numeral forms using the regular numeral ፩ as an example.
The initial “menu” that appear (as seen in Step 1 above) is presented vertically as a simplification:
</p>

<img src="images/Numeral-Input-Tree.png" width="1000"/>

<p style="text-align: justify;">
The complete set of available numeral forms appear in the following table:
</p>

<img src="images/Numeral-Styles-Compared.png" width="1000"/>

<h2><a id="punctuation-marks" name="punctuation-marks"></a>Punctuation &amp; Marks</h2>

<p style="text-align: justify;">
In the same way that a <code>TAB</code> is used to reveal menus for the numbers, it can similarly be used with punctuation marks.  The index number will appear in a different style, for example:
</p>

<img src="images/Punctuation-Input-List.png" width="600"/>

<p style="text-align: justify;">
<img src="images/Rubricated-AratNeteb.png" height="12pt"/> and <img src="images/Rubricated-Semicolon.png" height="12pt"/>
are special cases where a rubricated style has become the default appearance (typed with ‘::’  and ‘;’ respectively). In these cases, the modern style (። and ፤) becomes the first option.  Available punctuation:
</p>

<img src="images/Punctuation-Input-Tree.png" height="800"/><br/>

<p style="text-align: justify;">
A number of the punctuation marks can be extended with a combining “stylus drag” mark by typing “-” (minus) following the punctuation mark:
</p>
<img src="images/Punctuation-Stylus-Drags.png" width="600"/>

<p style="text-align: justify;">
Rubricated full stop chaining is possible using the special joiner mark,  <img src="images/Punctuation-Chaining-Spacer.png" height="12pt"/> , which is available in the “=” symbols menu:
</p>
<img src="images/Punctuation-Arat-Neteb-Chaining.png" width="600"/>

<h2><a id="ligatures" name="ligatures"></a>Ligatures</h2>
<p style="text-align: justify;">
Ligatures may be typed by entering the individual letters followed by a “@”.  For example, with the “Geʾez Manuscript Zemen” font selected:
</p>
<img src="images/Ligatures.png" width="800"/>

<h2><a id="variants" name="variants"></a>Variants</h2>
<p style="text-align: justify;">
Variants can be typed in the same way as ligatures:
</p>
<img src="images/Variants.png" width="300"/>

<h2><a id="bet-markers" name="bet-markers"></a>Anqetse Haleita Bēt Markers</h2>
<p style="text-align: justify;">
Similar to the ligatures, Bēt marks can be entered by typing the letter sequence followed by “=”.  For example:
</p>
<img src="images/Anqetse-Haleita.png" width="800"/>

<h2><a id="marginal-markers" name="marginal-markers"></a>Marginal Markers</h2>
<p style="text-align: justify;">
Marginalia are entered identically as with Bēt:
</p>
<img src="images/Marginal-Markers.png" width="400"/>

<h2><a id="zaima-qirts" name="zaima-qirts"></a>Zaima Qirts</h2>
<p style="text-align: justify;">
The extended qirts may be entered by typing one of the regular basic notes followed by the <code>TAB</code> key, then selection of the desired complex qirts from the “menu” that appears.  The “menu” based composition works just as it did for numbers and punctuation. Most marks will have for several menu levels.  For example:
</p>
<img src="images/Qirts-Input-List.png" width="600"/>

<p style="text-align: justify;">
Viewed another way, the selection process for typing <img src="images/Diret-Difat-Short-Rikrik.png" height="12pt"/> is depicted in this tabular view:
</p>
<img src="images/Qirts-Input-Tree.png" width="600"/>

<h3><a id="zaima-qirts-input-tree" name="zaima-qirts-input-tree"></a>The Complete Qirts Input Tree</h3>
<img src="Qirts-Input-Tree-Full.png" width="600"/>

<h3><a id="extending-hidets" name="extending-hidets"></a>Extending Hidets</h3>
<p style="text-align: justify;">
Some hidets can be extended by typing a “-” (minus) sign following the mark, for example:
</p>
<img src="images/Qirts-Extending-Hidets.png" width="600"/>


 
<hr/>

<h2><a id="status" name="status"></a>Typing Letters</h2>

<p style="text-align: justify;">
<em>Only</em> the letters used in the Geʾez language may be typed with this keyboard (i.e. no extra letters for Amharic, Tigrinya, etc. are typeable). 
To type additional Ethiopic letters used by other languages, please download a keyboard for the language needed or the <a href="https://keyman.com/keyboards/gff_ethiopic"><em>language-neutral</em></a> keyboard 
that supports composition of all Ethiopic symbols found in Unicode 14.
</p>


<p>
<strong>Special Notes:</strong>
</p>
<ul>
  <li>Apostrophe, ' , is a terminator following a ሳድስ (6<th>th</th> form) letter. For example: <kbd>mel'ak</kbd> becomes መልአክ , <kbd>melak</kbd> becomes መላክ .</li>
  <li>The keystroke of &lsquo;x&rsquo; is added for the &lsquo;ኀ&rsquo; family in agreement with classic Geʾez phonology and modern transliteration conventions.</li>
  <li>The keystroke of &lsquo;D&rsquo; is added for the &lsquo;ፀ&rsquo; family in agreement with classic Geʾez phonology.</li>
</ul>

<div style="margin-left: 1em;">
<table class="kb">
  <tr>
    <th>&nbsp;</th><td>ቤተሰብ</td><td>ካዕብ</td><td>ሣልስ</td><td>ግዕዝ</td><td>ራብዕ</td><td>ኃምስ</td><td>ሳድስ</td><td>ሳብዕ</td><td>ዘመደ፡ግዕዝ</td><td>ዘመደ፡ካዕብ</td><td>ዘመደ፡ሣልስ</td><td>ዘመደ፡ራብዕ</td><td>ዘመደ፡ኃምስ</td><th  style="border-bottom-color: #ffffff;">&nbsp;</th>
  </tr>
  <tr>
    <th>ቤተሰብ</th><th>Key</th><th>+e</th><th>+u</th><th>+i</th><th>+a</th><th>+ie</th><th>&nbsp;</th><th>+o</th><th>+ue</th><th>+uu</th><th>+ui</th><th>+ua</th><th>+uie</th><th style="background-color: #ffffff; border-right-color: #ffffff; border-top-color: #ffffff;">&nbsp;</th>
  </tr>
  <tr>
    <th>ሆይ</th><th>h</th><td>ሀ</td><td>ሁ</td><td>ሂ</td><td>ሃ</td><td>ሄ</td><td>ህ</td><td>ሆ</td><td>ኈ</td><td>ኍ</td><td>ኊ</td><td>ኋ</td><td>ኌ</td><th>h</th>
  </tr>
  <tr>
    <th>ላዊ</th><th>[lL]</th><td>ለ</td><td>ሉ</td><td>ሊ</td><td>ላ</td><td>ሌ</td><td>ል</td><td>ሎ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሏ</td><td>&nbsp;</td><th>l</th>
  </tr>
  <tr>
    <th>ሐውት</th><th>H</th><td>ሐ</td><td>ሑ</td><td>ሒ</td><td>ሓ</td><td>ሔ</td><td>ሕ</td><td>ሖ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሗ</td><td>&nbsp;</td><th>ħ</th>
  </tr>
  <tr>
    <th>ማይ</th><th>[mM]</th><td>መ</td><td>ሙ</td><td>ሚ</td><td>ማ</td><td>ሜ</td><td>ም</td><td>ሞ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሟ</td><td>&nbsp;</td><th>m</th>
  </tr>
  <tr>
    <th>ሠውት</th><th>ss</th><td>ሠ</td><td>ሡ</td><td>ሢ</td><td>ሣ</td><td>ሤ</td><td>ሥ</td><td>ሦ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሧ</td><td>&nbsp;</td><th>ɬ</th>
  </tr>
  <tr>
    <th>ርእስ</th><th>[rR]</th><td>ረ</td><td>ሩ</td><td>ሪ</td><td>ራ</td><td>ሬ</td><td>ር</td><td>ሮ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሯ</td><td>&nbsp;</td><th>r</th>
  </tr>
  <tr>
    <th>ሳት</th><th>s</th><td>ሰ</td><td>ሱ</td><td>ሲ</td><td>ሳ</td><td>ሴ</td><td>ስ</td><td>ሶ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሷ</td><td>&nbsp;</td><th>s</th>
  </tr>
  <tr>
    <th>ቃፍ</th><th>[qQ]</th><td>ቀ</td><td>ቁ</td><td>ቂ</td><td>ቃ</td><td>ቄ</td><td>ቅ</td><td>ቆ</td><td>ቈ</td><td>ቍ</td><td>ቊ</td><td>ቋ</td><td>ቌ</td><th>kʼ</th>
  </tr>
  <tr>
    <th>ቤት</th><th>[bB]</th><td>በ</td><td>ቡ</td><td>ቢ</td><td>ባ</td><td>ቤ</td><td>ብ</td><td>ቦ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ቧ</td><td>&nbsp;</td><th>b</th>
  </tr>
  <tr>
    <th>ታው</th><th>t</th><td>ተ</td><td>ቱ</td><td>ቲ</td><td>ታ</td><td>ቴ</td><td>ት</td><td>ቶ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ቷ</td><td>&nbsp;</td><th>t</th>
  </tr>
  <tr>
    <th>ኀርም</th><th>[xX],hh</th><td>ኀ</td><td>ኁ</td><td>ኂ</td><td>ኃ</td><td>ኄ</td><td>ኅ</td><td>ኆ</td><td>ኈ</td><td>ኍ</td><td>ኊ</td><td>ኋ</td><td>ኌ</td><th>x</th>
  </tr>
  <tr>
    <th>ነሐስ</th><th>[nN]</th><td>ነ</td><td>ኑ</td><td>ኒ</td><td>ና</td><td>ኔ</td><td>ን</td><td>ኖ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ኗ</td><td>&nbsp;</td><th>n</th>
  </tr>
  <tr>
    <th>አልፍ</th><th>&nbsp;</th><td>አ<br/>a</td><td>ኡ<br/>u</td><td>ኢ<br/>i</td><td>ኣ<br/>aa</td><td>ኤ<br/>ie</td><td>እ<br/>e</td><td>ኦ<br/>o</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>ʔ</th>
  </tr>
  <tr>
    <th>ካፍ</th><th>[kK]</th><td>ከ</td><td>ኩ</td><td>ኪ</td><td>ካ</td><td>ኬ</td><td>ክ</td><td>ኮ</td><td>ኰ</td><td>ኵ</td><td>ኲ</td><td>ኳ</td><td>ኴ</td><th>k</th>
  </tr>
  <tr>
    <th>ወዌ</th><th>[wW]</th><td>ወ</td><td>ዉ</td><td>ዊ</td><td>ዋ</td><td>ዌ</td><td>ው</td><td>ዎ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>w</th>
  </tr>
  <tr valign="top">
    <th valign="middle">ዐይን</th><th>&nbsp;</th><td>ዐ<br/>A</td><td>ዑ<br/>Au / <br/>U</td><td>ዒ<br/>Ai / <br/>I</td><td>ዓ<br/>Aa</td><td>ዔ<br/>Aie / <br/>Ie</td><td>ዕ<br/>Ae / <br/>E</td><td>ዖ<br/>Ao / <br/>O</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th valign="middle">ʕ</th>
  </tr>
  <tr>
    <th>ዘይ</th><th>[zZ]</th><td>ዘ</td><td>ዙ</td><td>ዚ</td><td>ዛ</td><td>ዜ</td><td>ዝ</td><td>ዞ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ዟ</td><td>&nbsp;</td><th>z</th>
  </tr>
  <tr>
    <th>የመን</th><th>[yY]</th><td>የ</td><td>ዩ</td><td>ዪ</td><td>ያ</td><td>ዬ</td><td>ይ</td><td>ዮ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>y</th>
  </tr>
  <tr>
    <th>ድንት</th><th>d</th><td>ደ</td><td>ዱ</td><td>ዲ</td><td>ዳ</td><td>ዴ</td><td>ድ</td><td>ዶ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ዷ</td><td>&nbsp;</td><th>d</th>
  </tr>
  <tr>
    <th>ገምል</th><th>[gG]</th><td>ገ</td><td>ጉ</td><td>ጊ</td><td>ጋ</td><td>ጌ</td><td>ግ</td><td>ጎ</td><td>ጐ</td><td>ጕ</td><td>ጒ</td><td>ጓ</td><td>ጔ</td><th>g</th>
  </tr>
  <tr>
    <th>ጠይት</th><th>T</th><td>ጠ</td><td>ጡ</td><td>ጢ</td><td>ጣ</td><td>ጤ</td><td>ጥ</td><td>ጦ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ጧ</td><td>&nbsp;</td><th>tʼ</th>
  </tr>
  <tr>
    <th>ጰይት</th><th>P</th><td>ጰ</td><td>ጱ</td><td>ጲ</td><td>ጳ</td><td>ጴ</td><td>ጵ</td><td>ጶ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ጷ</td><td>&nbsp;</td><th>pʼ</th>
  </tr>
  <tr>
    <th>ጸደይ</th><th>S</th><td>ጸ</td><td>ጹ</td><td>ጺ</td><td>ጻ</td><td>ጼ</td><td>ጽ</td><td>ጾ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ጿ</td><td>&nbsp;</td><th>sʼ</th>
  </tr>
  <tr>
    <th>ፀጳ</th><th>D,SS</th><td>ፀ</td><td>ፁ</td><td>ፂ</td><td>ፃ</td><td>ፄ</td><td>ፅ</td><td>ፆ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>dʼ</th>
  </tr>
  <tr>
    <th>አፍ</th><th>[fF]</th><td>ፈ</td><td>ፉ</td><td>ፊ</td><td>ፋ</td><td>ፌ</td><td>ፍ</td><td>ፎ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ፏ</td><td>&nbsp;</td><th>f</th>
  </tr>
  <tr>
    <th>ፕሳ</th><th>p</th><td>ፐ</td><td>ፑ</td><td>ፒ</td><td>ፓ</td><td>ፔ</td><td>ፕ</td><td>ፖ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ፗ</td><td>&nbsp;</td><th>p</th>
  </tr>
  <tr>
    <th style="border-right-color: #ffffff;">&nbsp;</th><td style="background-color: #ffffff; border-left-color: #ffffff; border-bottom-color: #ffffff;">&nbsp;</td><td>+ə</td><td>+u</td><td>+i</td><td>+a</td><td>+e</td><td>ɨ/-</td><td>+o</td><td>+ʷə</td><td>+ʷu</td><td>+ʷi</td><td>+ʷa</td><td>+ʷe</td><th>IPA</th>
  </tr>
</table>
</div>

<h2><a id="gemination"></a>Consonant and Vowel Marks</h2>

<div style="margin-left: 1em;">
<p>Dots can be added above letters to indicate a stressed vowel or consonant using <nobr>“CTRL + <b>.</b>”.</nobr> For example:</p>

<table style="margin-top: 0; white-space: nowrap;">
<tr>
  <td>አባ CTRL .</td><td> &nbsp; ⇒ &nbsp; </td><td>አባ፞ (“abaa”, “a” is stressed)</td>
</tr>
<tr>
	<td>አባ፞ CTRL .</td><td> &nbsp; ⇒ &nbsp; </td><td>አባ፟ (“abba”, “b” is stressed)</td>
</tr>
<tr>
	<td>አባ፟ CTRL .</td><td> &nbsp; ⇒ &nbsp; </td><td>አባ፝ (“abbaa”, “b” and “a” are stressed)</td>
</tr>
</table>
</div>

<h2><a id="punctuation" name="punctuation"></a>Punctuation</h2>

<div style="margin-left: 1em;">

<h3>Ethiopic Punctuation</h3>
<table class="punct" style="margin-top: 0;">
  <tr>
    <th style="background-color: #e0dacf; border: thin solid #666;">Keystrokes</th>
    <th>:</th><th>::</th><th>,</th><th>,,</th><th>;</th><th>:-</th><th>:+</th><th>:#</th><th>?</th>
  </tr>
  <tr>
    <th>Punctuation</th>
    <td>፡</td><td>።</td><td>፥</td><td>፣</td><td>፤</td><td>፦</td><td>፠</td><td>፨</td><td>፧</td>
  </tr>
</table>

<p>Period, ‘.’ may also be used to enter ‘።’.  When a number follows ‘፡’, ‘፣’ and ‘።’ they will change back to their Latin form automatically.  For example:</p>
<dir>
123፣456	⇒  123,456<br/>
12።50	⇒  12.50<br/>
12፡50	⇒  12:50
</dir>

<h3>Keyboard Punctuation</h3>
<p>All regular punctuation on your keyboard remains available. Most punctuation can be typed
with a single keystroke as usual.  Those used to input Ethiopic symbols can be entered by
hitting the punctuation key two or more times until it appears.</p>


</div>

<h2><a id="numerals" name="numerals"></a>Typing Numerals</h2>

<div style="margin-left: 1em;">

<h3>Ethiopic Numerals</h3>
<table class="punct" style="margin-top: 0;">
  <tr>
    <th style="background-color: #e0dacf; border: thin solid #666;">Keystrokes</th>
    <th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th>
  </tr>
  <tr>
    <th>Numeral</th>
    <td>፩</td><td>፪</td><td>፫</td><td>፬</td><td>፭</td><td>፮</td><td>፯</td><td>፰</td><td>፱</td>
  </tr>
  <tr><td colspan="10" style="border-color: #ffffff;"/></tr>
  <tr>
    <th style="background-color: #e0dacf; border: thin solid #666;">Keystrokes</th>
    <th>10</th><th>20</th><th>30</th><th>40</th><th>50</th><th>60</th><th>70</th><th>80</th><th>90</th>
  </tr>
  <tr>
    <th>Numeral</th>
    <td>፲</td><td>፳</td><td>፴</td><td>፵</td><td>፶</td><td>፷</td><td>፸</td><td>፹</td><td>፺</td>
  </tr>
  <tr><td colspan="10" style="border-color: #ffffff;"/></tr>
  <tr>
    <th style="background-color: #e0dacf; border: thin solid #666;">Keystrokes</th>
    <th>100</th><th>1000</th><th>10000</th>
  </tr>
  <tr>
    <th>Numeral</th>
    <td>፻</td><td>፲፻</td><td>፼</td>
  </tr>
</table>
<p>Numeral composition will continue as 0s are entered up to ፼፼ (100,000,000).</p>


<h3>Latin Digits</h3>
<p>Western numbers may be typed with a &lsquo;#&rsquo; mark followed by the desired digit 1-9.</p>
<table class="punct" style="margin-top: 0;">
  <tr>
    <th style="background-color: #e0dacf; border: thin solid #666;">Keystrokes</th>
    <th>#1</th><th>#2</th><th>#3</th><th>#4</th><th>#5</th><th>#6</th><th>#7</th><th>#8</th><th>#9</th>
  </tr>
  <tr>
    <th>Digit</th>
    <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
  </tr>
</table>

</div>


<h2><a id="zaima" name="zaima"></a>Typing Zaima Qirts (የዜማ፡ቅርጽ፡)</h2>

<div style="margin-left: 1em;">
<table class="zaima" style="margin-top: 0;">
  <tr>
    <th>&nbsp;</th>
    <th>ይዘት</th><th>ኅጺር፡ርክርክ</th><th>ርክርክ</th><th>ቁርጥ</th><th>ደረት</th><th>ድፋት</th><th>ጭረት</th><th>ቅናት</th><th>ሒደት</th><th>ደረት፡ሒደት</th>
  </tr>
  <tr>
    <th>Keystrokes</th>
    <th>_1</th><th>_2</th><th>_3</th><th>_4</th><th>_5</th><th>_6</th><th>_7</th><th>_8</th><th>_9</th><th>_0</th>
  </tr>
  <tr>
    <th>Qurts</th>
    <td>᎐</td><td>᎓</td><td>᎒</td><td>᎙</td><td>᎑</td><td>᎔</td><td>᎖</td><td>᎕</td><td>᎗</td><td>᎘</td>
  </tr>
</table>

<p>When typing &lsquo;_&rsquo; the following menu will appear:
<dir>
[1᎐2᎓3᎒4᎙5᎑6᎔7᎖8᎕9᎗0᎘_፟]
</dir>
Type the number that corresponds to the qirts that you want and it will appear and the menu close.</p>

</div>


<p><br/></p>
<hr/>

<h2>License</h2>

<p>This keyboard is copyright © Geʾez Frontier Foundation, 2022-2023. It is distributed under the MIT free software license:</p>

<div style="margin-left: 1em;">
  <table>
    <tr>
      <td style="border: thin solid #666; text-align: justify; padding-left: 5px; padding-right: 5px;" width="700px">
        <h5>The MIT License (MIT)</h5>

<p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>

<p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>

<p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
      </td>
    </tr>
  </table>
</div>

