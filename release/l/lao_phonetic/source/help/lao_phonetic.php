<?php
  $pagename = 'Lao Phonetic Keyboard Help';
  $pagetitle = 'Lao Phonetic Keyboard Help';
  $style = <<<EXTRA
  html * {font-family: Arial;background-color:#ffffe0;}
  body p {margin-left: 10px}
  p, li {line-height: 150%}
  
  span.lao {font-family: "Saysettha OT"; font-size: 120%; font-weight: bold;}
  span.wd {font-family: helvetica,Arial,sansserif; font-weight: bold; }
  
  table.phonetic {margin-left: 20px; border: 3px double black; border-collapse:collapse; font-size: 100%;font-family: Tahoma;}
  table.phonetic tr td {text-align: center; border-right: 1pt solid gray; border-bottom: 1pt dotted gray;}
  table.phonetic tr td.lao {font-family: "Saysettha OT"; font-size: 120%; font-weight: bold; border-right: 1pt dotted gray;}
  table.phonetic tr th {font-style: italic; font-weight: normal; border-right: 1pt solid gray; border-bottom: 1pt solid gray; }
  
  img {margin-left:30px; margin-right:30px}
  img.inline {margin:0; height: 1em}
EXTRA;
  require_once('header.php');
?>

<p>
This package includes a phonetic-input keyboard, for entering Lao characters according to the sounds of the letters on an English keyboard, and
a selection of Lao OpenType (Unicode) fonts, optimized for use on OS X, but also fully compatible with Windows, iOS and most other platforms.
</p>
<p>
The keyboard in this package does not insert hidden break codes, since most OS X applications (as well as recent versions of Microsoft Office on Windows) 
automatically wrap Lao text correctly at word boundaries.  (Another Lao keyboard package, Lao Rapid 2008, is available for older systems that inserts hidden break codes 
at syllable boundaries for text wrapping.)
</p>

<h2 id="phonetic">Phonetic ("Romanized") entry of Lao Text</h2>
<p class="haslao">
Users who are unfamiliar with the Lao typewriter layout and have any standard, latin-alphabet, keyboard (for example,
English or French), will often find it easier to enter Lao text using a phonetic ("romanized") input method,
especially where Lao keyboard stickers are unavailable.  With phonetic input, you can type "kan" for <span class="lao">ກັນ</span>,
"tham" for <span class="lao">ທຳ</span>, "pheuan1" for <span class="lao">ເພື່ອນ</span>, etc., or
"hkian phaa saa laaw boh1 nyaak!" for <span class="lao">ຂຽນພາສາລາວບໍ່ຍາກ!</span>
</p>
<h3>Phonetic Entry Principles</h3>
<p>
Many suggestions have been made for romanizing Lao text, and there is no
perfect solution, since it is not possible to represent Lao phonetics exactly
in English.  The phonetic input approach adopted is based on
following principles:
</p>
<ul class="haslao">
<li>
  The convention should be systematic and intuitive for English speakers as much as possible.
</li>
<li>
  It should be possible to enter most Lao words using only <i>lower-case</i> letters,
  to facilitate text entry.
</li>
<li>
  Syllable-final consonants can be entered either phonetically or as written, so type
  <b>-d</b> or <b>-t</b> for <span class="lao">-ດ</span>,
  <b>-b</b> or <b>-p</b> for <span class="lao">-ບ</span>,
  and <b>-y</b> for <span class="lao">-ຍ</span>.
</li>
<li>
  For syllables with tone marks, the number (1 to 4) should be typed <i>after the keys for the consonant and vowel sequence</i>,
  which will add the tone mark to the initial consonant and mark the syllable as complete.  For syllables without a tone mark, 
  the <i>space bar</i> should be pressed instead to mark the syllable as complete. Pressing the space bar
  again, or in any other context, will insert a space character in the usual way.
</li>
<li>
  Punctuation and symbol keys output the character shown on the key, except for the
  digits 1 to 4 when entered to indicate a tone mark in a Lao syllable (as noted above),
  and % when entered immediately after a Lao consonant (see below).
</li>
<li>
  Phonetic transcription follows the system keyboard in use, not the physical layout.
  So you can type "kan" with either a QWERTY (English layout) or an AZERTY (French layout)
  keyboard to get <span class="lao">ກັນ</span>.
</li>
</ul>

<h4>Special conventions</h4>
<ul>
<li>
  When % is typed immediately after a Lao consonant, the <i>THANTHAKHAT</i> symbol (U+0ECC)
  will be placed over that consonant.  This is mainly useful for loan words, so for example,
  type <b>mail%</b> for <span class="lao">ໄມ​ລ໌​</span> ("mile").
</li>
<li>
  Most "long" vowels (for example <span class="lao">ອາ ເອ ອີ ໂອ ອູ ອື ແອ</span>) vowels are entered
  either by repeating the letter used for the corresponding "short" vowel, or by using
  the upper-case (shifted) letter, if you prefer.
</li>
<li>
  <b>Right Alt</b> with any numeral key (in the top row) will output the Lao numerals
  <span class="lao">໐,໑,໒...໙</span> instead of standard numerals <b>0,1,2,...9</b>.
  <b>Right Alt</b> + ` (accent or backquote) gives the Lao Kip symbol <span class="lao">₭</span>, and 
  <b>Right Alt</b> + = (equals sign) gives the Euro symbol (€).
</li>
</ul>

<h3>Entering Lao Consonants Phonetically</h3>
<p>The letter (or letters) to type for each Lao consonant is shown in the following table.
Alternate key sequences are shown in parentheses after the default convention.</p>
<table class="phonetic">
<tr>
  <th>Lao</th><th>Phonetic</th>
  <th>Lao</th><th>Phonetic</th>
  <th>Lao</th><th>Phonetic</th>
  <th>Lao</th><th>Phonetic</th>
</tr>
<tr>
  <td class="lao">ກ</td><td>k</td>
  <td class="lao">ຂ</td><td>hk (K)</td>
  <td class="lao">ຄ</td><td>kh</td>
  <td class="lao"></td><td></td>
</tr>
<tr>
  <td class="lao">ດ</td><td>d (t*)</td>
  <td class="lao">ຕ</td><td>t</td>
  <td class="lao">ຖ</td><td>ht (T)</td>
  <td class="lao">ທ</td><td>th</td>
</tr>
<tr>
  <td class="lao">ບ</td><td>b (p*)</td>
  <td class="lao">ປ</td><td>p</td>
  <td class="lao">ຜ</td><td>hp (P)</td>
  <td class="lao">ພ</td><td>ph</td>
</tr>
<tr>
  <td class="lao">ງ</td><td>ng (g)</td>
  <td class="lao">ຫງ</td><td>hng (G)</td>
  <td class="lao">ຍ</td><td>ny (y*)</td>
  <td class="lao">ຫຍ</td><td>hny (Y)</td>
</tr>
<tr>
  <td class="lao">ຈ</td><td>j (c,ch)</td>
  <td class="lao">ສ</td><td>s (S)</td>
  <td class="lao">ຊ</td><td>x</td>
  <td class="lao"></td><td></td>
</tr>
<tr>
  <td class="lao">ນ</td><td>n</td>
  <td class="lao">ໜ</td><td>hn (N)</td>
  <td class="lao">ຫນ</td><td>nh</td>
  <td class="lao"></td><td></td>
</tr>
<tr>
  <td class="lao">ມ</td><td>m</td>
  <td class="lao">ໝ</td><td>hm (M)</td>
  <td class="lao">ຫມ</td><td>mh</td>
  <td class="lao"></td><td></td>
</tr>
<tr>
  <td class="lao">ຟ</td><td>f</td>
  <td class="lao">ຝ</td><td>hf (F)</td>
  <td class="lao"></td><td></td>
  <td class="lao"></td><td></td>
</tr>
<tr>
  <td class="lao">ລ</td><td>l</td>
  <td class="lao">ຫຼ</td><td>hl (L)</td>
  <td class="lao">ຫລ</td><td>lh</td>
  <td class="lao"></td><td></td>
</tr>
<tr>
  <td class="lao">ຣ</td><td>r</td>
  <td class="lao">ຫຣ</td><td>hr</td>
  <td class="lao">ຼ</td><td>rr</td>
  <td class="lao"></td><td></td>
</tr>
<tr>
  <td class="lao">​ວ</td><td>v (w)</td>
  <td class="lao">ຫວ</td><td>hw (W)</td>
  <td class="lao">ຮວ</td><td>hv</td>
  <td class="lao">ຢ</td><td>y</td>
</tr>
<tr>
  <td class="lao">ອ</td><td>(**)</td>
  <td class="lao">ຮ</td><td>h</td>
  <td class="lao">ຫ</td><td>hh (H)</td>
  <td class="lao"></td><td></td>
</tr>
</table>

<p>
  * Type <b>ny</b> to enter the Lao letter <span class="lao">ຍ</span> at the start of a syllable, 
  or <b>y</b> to add <span class="lao">ຍ</span> to the end of a syllable. Either <b>t</b> or <b>d</b> can be used to enter <span class="lao">ດ</span> 
  at the end of a syllable, and similarly, either <b>p</b> or <b>b</b> will appear as <span class="lao">ບ</span>.  
</p>
<p>
  **For any syllable that starts with a vowel, the character <span class="lao">ອ</span> will be inserted automatically
when the vowel character is typed.  If it is ever necessary to insert <span class="lao">ອ</span> separately, just
type any vowel letter, then press backspace to delete the Lao vowel character, leaving <span class="lao">ອ</span>.
</p>

<h3>Entering Lao Vowels, Tones and Special Symbols</h3>
<p>
  In the following table, each vowel is shown in a syllable, using <span class="lao">ກ</span>
  and <span class="lao">ນ</span> as place-holders for the initial and final consonants.
</p>
<table class="phonetic">
<tr>
  <th>Lao</th><th>Phonetic</th>
  <th>Lao</th><th>Phonetic</th>
  <th>Lao</th><th>Phonetic</th>
  <th>Lao</th><th>Phonetic</th>
  <th>Lao</th><th>Phonetic</th>
</tr>
<tr>
  <td class="lao">ກະ</td><td>ka </td>
  <td class="lao">ເກ</td><td>kee</td>
  <td class="lao">ເກືອ</td><td>keua</td>
  <td class="lao">ກົນ</td><td>kon </td>
  <td class="lao">ເກະ</td><td>ke </td>
</tr>
<tr>
  <td class="lao">ກັນ</td><td>kan</td>
  <td class="lao">ແກະ</td><td>kea (kz)</td>
  <td class="lao">ແກັນ</td><td>kean (kzn)</td>
   <td class="lao">ກັອນ</td><td>ko`n</td>
  <td class="lao">ເກຶອ</td><td>keua`</td>
</tr>
<tr>
  <td class="lao">ກາ</td><td>kaa</td>
  <td class="lao">ແກ</td><td>kae​ (kZ)</td>
  <td class="lao">ກົວະ</td><td>kua`</td>
  <td class="lao">ກໍ</td><td>koh</td>
  <td class="lao">ກ່າ​</td><td>kaa1</td>
</tr>
<tr>
  <td class="lao">ກິ</td><td>ki </td>
  <td class="lao">ໂກະ</td><td>ko`</td>
  <td class="lao">ກົວ</td><td>kua</td>
  <td class="lao">ກວນ</td><td>kuan</td>
  <td class="lao">ກ້າ​</td><td>kaa2</td>
</tr>
<tr>
  <td class="lao">ກີ</td><td>kii (kI)</td>
  <td class="lao">ໂກ</td><td>koo (kO)</td>
  <td class="lao">ໄກ</td><td>kai</td>
  <td class="lao">ເກັຍ</td><td>kia`</td>
  <td class="lao">ກ໊າ​</td><td>kaa3</td>
</tr>
<tr>
  <td class="lao">ກຶ</td><td>kue (kq)</td>
  <td class="lao">ເກາະ</td><td>ko</td>
  <td class="lao">ໃກ</td><td>kay</td>
  <td class="lao">​ເກຍ</td><td>kia</td>
  <td class="lao">ກ໋າ​</td><td>kaa4</td>
</tr>
<tr>
  <td class="lao">ກື</td><td>keu (kqq,kQ)</td>
  <td class="lao">ກໍ</td><td>koh</td>
  <td class="lao">ເກົາ</td><td>kao</td>
  <td class="lao">ກຽນ</td><td>kian</td>
  </td><td class="lao">ກາ​ສ໌​</td><td>kaas%</td>
</tr>
<tr>
  <td class="lao">ກຸ</td><td>ku </td>
  <td class="lao">ເກິ</td><td>koe</td>
  <td class="lao">ກຳ</td><td>kam</td>
  <td class="lao">ກັຍ</td><td>kay`</td>
  <td class="lao">ໆ</td><td>R</td>
</tr>
<tr>
  <td class="lao">ກູ</td><td>kuu</td>
  <td class="lao">ເກີ</td><td>ker</td>
  <td class="lao">ເກັນ</td><td>ken </td>
  <td class="lao">ກັມ</td><td>kam`</td>
  <td class="lao">ຯ</td><td>X</td>
</tr>
</table>

<p>
  * The digits 1-4 and % only translate to tone marks at the end of a syllable.
  Otherwise, they appear as digits and percent as usual.
</p>
<p>For easier use, the accent key alternates between some vowels, for example:
  <ul><li>
    <b>ko</b><span class="wd"> &#8594; </span><span class="lao">ເກາະ</span>
    <b> + `</b><span class="wd"> &#8594; </span><span class="lao">ໂກະ</span>
    <b> + `</b><span class="wd"> &#8594; </span><span class="lao">ເກາະ</span>
  </li></ul>
</p>
<p>
  Many old spelling conventions can also be entered, by using the accent key to change between conventions:
</p>
  <ul><li>
    <b>mia</b> <span class="wd"> &#8594; </span><span class="lao">ເມຍ</span>
    <b> + `</b><span class="wd"> &#8594; </span><span class="lao">ເມັຍ</span>
    <b> + `</b><span class="wd"> &#8594; </span><span class="lao">ເມັຍະ</span>
    <b> + `</b><span class="wd"> &#8594; </span><span class="lao">ເມັຽ</span>
    <b> + `</b><span class="wd"> &#8594; </span><span class="lao">ເມຍ</span>
  </li></ul>
<p>
  or by using <b>J</b> to enter <span class="lao">ຽ</span> as a final semi-vowel:
</p>
<ul>
  <li><b>dooy</b><span class="wd"> &#8594; </span><span class="lao">ໂດຍ</span></li>
  <li><b>dooJ</b><span class="wd"> &#8594; </span><span class="lao">ໂດຽ</span></li>
</ul>
<p>
  You can also use the accent key to cycle through currency symbols:
</p>
<ul><li>
  <b>$</b>
  <b> + `</b><span class="wd"> &#8594; </span><b>&#8365;</b>
  <b> + `</b><span class="wd"> &#8594; </span><b>&#8364;</b>
  <b> + `</b><span class="wd"> &#8594; </span><b>£</b>
  <b> + `</b><span class="wd"> &#8594; </span><b>¥</b>
  <b> + `</b><span class="wd"> &#8594; </span><b>$</b>
</li></ul>
<p>Copyright <a href="http://laoscript.net/">Dr John M Durdin</a>, <a href="http://laoscript.net/">laoscript.net</a></p>

</body>
</html>
