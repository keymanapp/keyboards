<?php 
  $pagename = "GFF Ge&rsquo;ez";
  $pagetitle = "The Ge&rsquo;ez Frontier Foundation Keyboard for Ge&rsquo;ez Language";
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
END;
  require_once('header.php');


?>


<h2><a id="abstract" name="abstract"></a>Introduction</h2>

<p style="text-align: justify;">
This is a Ge&rsquo;ez (ግዕዝ, ISO-639-2: gez) language mnemonic input method.  It requires a font supporting Ethiopic script under the Unicode 4.1 standard.
The Ge&rsquo;ez keyboard is &ldquo;mnemonic&rdquo; and designed for the US English QWERTY keyboard.  This means that the keyboard is designed to
be intuitive and natural with respect to the sounds available in the English language via the standard English keyboard (known as QWERTY).
The keyboard also supports mnemonic mappings from non-English letters found in European keyboards.
</p>

<p>A more complete typing manual is provided as a PDF file with this distribution.</p>

 
<h2><a id="status" name="status"></a>Typing Letter</h2>

<p style="text-align: justify;">
Only the letters used in the Ge&rsquo;ez language may be typed with this keyboard. To type additional Ethiopic letters used by other languages, please
download a keyboard for the language needed or the <em>language-neutral</em> keyboard that supports composition of all Ethiopic symbols found in Unicode 4.1
</p>


<p>
<strong>Special Notes:</strong>
</p>
<ul>
  <li>Apostrophe, ' , is a terminator following a ሳድስ (6<th>th</th> form) letter. For example: <kbd>mel'ak</kbd> becomes መልአክ , <kbd>melak</kbd> becomes መላክ .</li>
  <li>The keystroke of &lsquo;x&rsquo; is added for the &lsquo;ኀ&rsquo; family in agreement with classic Ge&rsquo;ez phonology and modern transliteration conventions.</li>
  <li>The keystroke of &lsquo;D&rsquo; is added for the &lsquo;ፀ&rsquo; family in agreement with classic Ge&rsquo;ez phonology.</li>
</ul>

<div style="margin-left: 1em;">
<table class="kb">
  <tr>
    <th>&nbsp;</th><td>ቤተሰብ</td><td>ካዕብ</td><td>ሣልስ</td><td>ግዕዝ</td><td>ራብዕ</td><td>ኃምስ</td><td>ሳድስ</td><td>ሳብዕ</td><td>ዘመደ፡ግዕዝ</td><td>ዘመደ፡ካዕብ</td><td>ዘመደ፡ሣልስ</td><td>ዘመደ፡ራብዕ</td><td>ዘመደ፡ኃምስ</td><th  style="border-bottom-color: #ffffff;">&nbsp;</th>
  </tr>
  <tr>
    <th>ቤተሰብ</th><th>Key</th><th>+[eE]</th><th>+[uU]</th><th>+[iI]</th><th>+[aA]</th><th>+[iI][eE]</th><th>&nbsp;</th><th>+[oO]</th><th>+[uU][eE]</th><th>+[uU][uU]</th><th>+[uU][iI]</th><th>+[uU][aA]</th><th>+[uU][iI][eE]</th><th style="background-color: #ffffff; border-right-color: #ffffff; border-top-color: #ffffff;">&nbsp;</th>
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
    <th>አልፍ</th><th>&nbsp;</th><td>አ<br/>a</td><td>ኡ<br/>u</td><td>ኢ<br/>i</td><td>ኣ<br/>ea</td><td>ኤ<br/>ie</td><td>እ<br/>e</td><td>ኦ<br/>o</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>ʔ</th>
  </tr>
  <tr>
    <th>ካፍ</th><th>[kK]</th><td>ከ</td><td>ኩ</td><td>ኪ</td><td>ካ</td><td>ኬ</td><td>ክ</td><td>ኮ</td><td>ኰ</td><td>ኵ</td><td>ኲ</td><td>ኳ</td><td>ኴ</td><th>k</th>
  </tr>
  <tr>
    <th>ወዌ</th><th>[wW]</th><td>ወ</td><td>ዉ</td><td>ዊ</td><td>ዋ</td><td>ዌ</td><td>ው</td><td>ዎ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>w</th>
  </tr>
  <tr>
    <!-- <th>ዐይን</th><th>A</th><td>ዐ</td><td>ዑ</td><td>ዒ</td><td>ዓ</td><td>ዔ</td><td>ዕ</td><td>ዖ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>ʕ</th> -->
    <th>ዐይን</th><th>&nbsp;</th><td>ዐ<br/>A / <br/>aaa</td><td>ዑ<br/>Au / <br/>uu</td><td>ዒ<br/>Ai / <br/>ii</td><td>ዓ<br/>Aa / <br/>aa</td><td>ዔ<br/>Aie / <br/>iie</td><td>ዕ<br/>Ae / <br/>ee</td><td>ዖ<br/>Ao / <br/>oo</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>ʕ</th>
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

<p>This keyboard is copyright © Ge&rsquo;ez Frontier Foundation, 2009-2019. It is distributed under the MIT free software license:</p>

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

