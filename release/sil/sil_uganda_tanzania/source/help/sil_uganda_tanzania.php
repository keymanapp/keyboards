<?php
  $pagename = 'Uganda-Tanzania Bantu (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
  h1,h2,h3,p {font-family: Charis SIL;}
  p.footnote {font-family: Charis SIL;font-size: small;}
  table {border-collapse: collapse;}
  td {border: 1px solid ;font-family: Charis SIL;text-align: center;}
  td.heading {border: 1px solid ;font-family: Charis SIL;text-align: center;font-weight: bold;padding-left: 8pt;padding-right: 8pt;}
  td.phonetic {border: 1px solid ;font-family: Charis SIL;text-align: center;background-color: silver;}
  td.diacritic {border: 1px solid ;font-family: Charis SIL;text-align: left;padding-left: 10pt;}
  li {font-family: Charis SIL;}
END;
  require_once('header.php');
?>
  <section id='overview'>
	<h2>Overview</h2>
	<p>This keyboard is intended to support all the Bantu languages of Uganda and Tanzania.</p>
  <p>(Note that if alternate key strokes exist, they are indicated with ‘<i>or</i>’ in the Keying column)</p>
<h3>Consonants</h3>

<div align="center">
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td class="heading">Description</td>
      <td class="heading">Type</td>
      <td class="heading">lc</td>
      <td class="heading">Unicode</td>
      <td class="heading">Type</td>
      <td class="heading">UC</td>
      <td class="heading">Unicode</td>
    </tr>
    <tr>
      <td>eng</td>
      <td>ŋ</td>
      <td>nnn <i>or</i> ;n</td>
      <td>U+014B</td>
      <td>Ŋ</td>
      <td>NNN <i>or</i> ;N</td>
      <td>U+014A</td>
    </tr>
    <tr>
      <td>palatal nasal</td>
      <td>ɲ</td>
      <td>nnnn</td>
      <td>U+0272</td>
      <td>Ɲ</td>
      <td>NNNN</td>
      <td>U+019D</td>
    </tr>
    <tr>
      <td>s with circumflex</td>
      <td>ŝ</td>
      <td>sss <i>or</i> ;s</td>
      <td>U+015D</td>
      <td>Ŝ</td>
      <td>SSS <i>or</i> ;S</td>
      <td>U+015C</td>
    </tr>
    <tr>
      <td>z with circumflex</td>
      <td>ẑ</td>
      <td>zzz <i>or</i> ;z</td>
      <td>U+1E91</td>
      <td>Ẑ</td>
      <td>ZZZ <i>or</i> ;Z</td>
      <td>U+1E90</td>
    </tr>
    <tr>
      <td>glottal</td>
      <td>ꞌ</td>
      <td>;&apos;</td>
      <td>U+A78C</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>inverted breve below b</td>
      <td>b̯</td>
      <td>bbb <i>or</i> ;b</td>
      <td>U+0062 U+032F</td>
      <td>B̯</td>
      <td>BBB <i>or</i> ;B</td>
      <td>U+0042 U+032F</td>
    </tr>
    <tr>
      <td>modifier letter apostrophe</td>
      <td>ʼ</td>
      <td>&apos;&apos;&apos; <i>or</i> ;`</td>
      <td>U+02BC</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

  </tbody>
</table>
</div>
<h3>Modified vowels</h3>

<div align="center">
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td class="heading">Description</td>
      <td class="heading">Type</td>
      <td class="heading">lc</td>
      <td class="heading">Unicode</td>
      <td class="heading">Type</td>
      <td class="heading">UC</td>
      <td class="heading">Unicode</td>
    </tr>
    <tr>
      <td>bar i</td>
      <td>ɨ</td>
      <td>;i</td>
      <td>U+0268</td>
      <td>Ɨ</td>
      <td>;I</td>
      <td>U+0197</td>
    </tr>
    <tr>
      <td>bar u</td>
      <td>ʉ</td>
      <td>;u</td>
      <td>U+0289</td>
      <td>Ʉ</td>
      <td>;U</td>
      <td>U+0244</td>
    </tr>
    <tr>
      <td>open e</td>
      <td>ɛ</td>
      <td>;e</td>
      <td>U+025B</td>
      <td>Ɛ</td>
      <td>;E</td>
      <td>U+0190</td>
    </tr>
    <tr>
      <td>open o</td>
      <td>ɔ</td>
      <td>;o</td>
      <td>U+254</td>
      <td>Ɔ</td>
      <td>;O</td>
      <td>U+0186</td>
    </tr>
    <tr>
      <td>inverted e</td>
      <td>ǝ</td>
      <td>;a</td>
      <td>U+01DD</td>
      <td>Ǝ</td>
      <td>;A</td>
      <td>U+018E</td>
    </tr>

  </tbody>
</table>
</div>


<h3>Diacritics</h3>
	<p>The vowels may have diacritics above and/or below, e.g., á, ì̱, û̱, ʉ̀.</p>
	<p>The consonant b may have a diacritic below, b̯.</p>
	<p>Diacritics above may also be found on n, m and ŋ.</p>

<h4>Diacritics above vowels and nasals</h4>

<div align="center">
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td class="heading">Description</td>
      <td class="heading">Type</td>
      <td class="heading">lc</td>
      <td class="heading">UC</td>
      <td class="heading">Unicode</td>
    </tr>
    <tr>
      <td>acute (High tone)</td>
      <td>&apos;</td>
      <td>áéíóú ńŋ́ḿ</td>
      <td>ÁÉÍÓÚ ŃŊ́Ḿ</td>
      <td>U+0301</td>
    </tr>
    <tr>
      <td>grave (Low tone)</td>
      <td>`</td>
      <td>àèìòù ǹŋ̀m̀</td>
      <td>ÀÈÌÒÙ ǸŊ̀M̀</td>
      <td>U+0300</td>
    </tr>
    <tr>
      <td>macron (Mid tone)</td>
      <td>=</td>
      <td>āēīōū n̄ŋ̄m̄</td>
      <td>ĀĒĪŌŪ N̄Ŋ̄M̄</td>
      <td>U+0304</td>
    </tr>
    <tr>
      <td>circumflex (High-Low tone)</td>
      <td>[</td>
      <td>âêîôû n̂ŋ̂m̂</td>
      <td>ÂÊÎÔÛ N̂Ŋ̂M̂</td>
      <td>U+0302</td>
    </tr>
    <tr>
      <td>wedge (Low-High tone)</td>
      <td>]</td>
      <td>ǎěǐǒǔ ňŋ̌m̌</td>
      <td>ǍĚǏǑǓ ŇŊ̌M̌</td>
      <td>U+030C</td>
    </tr>
    <tr>
      <td>tilde</td>
      <td>~</td>
      <td>ãẽĩõũ ñŋ̃m̃</td>
      <td>ÃẼĨÕŨ ÑŊ̃M̃</td>
      <td>U+0303</td>
    </tr>
    <tr>
      <td>dieresis</td>
      <td>:</td>
      <td>äëïöü n̈ŋ̈m̈</td>
      <td>ÄËÏÖÜ N̈Ŋ̈M̈</td>
      <td>U+0308</td>
    </tr>

  </tbody>
</table>
</div>

<h4>Diacritics below vowels</h4>

<div align="center">
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td class="heading">Description</td>
      <td class="heading">Type</td>
      <td class="heading">lc</td>
      <td class="heading">Type</td>
      <td class="heading">UC</td>
      <td class="heading">Unicode</td>
    </tr>
    <tr>
      <td>macron</td>
      <td>iii uuu <i>or</i>	 _i _u</td>
      <td>i̱u̱</td>
      <td>III UUU <i>or</i>	 _I _U</td>
      <td>I̱U̱</td>
      <td>U+0331</td>
    </tr>

  </tbody>
</table>
</div>

<h5>Simple method for Uganda hard vowels</h5>
<h5>Other vowels</h5>
   <p>Diacritics below indicate a vowel modification (and can be combined with diacritics above).</p>
   
   <div align="center">
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td class="heading">Description</td>
      <td class="heading">Type</td>
      <td class="heading">lc</td>
      <td class="heading">UC</td>
      <td class="heading">Unicode</td>
    </tr>
    <tr>
      <td>macron</td>
      <td>_</td>
      <td>a̱e̱i̱o̱u̱̱</td>
      <td>A̱E̱I̱O̱U̱̱</td>
      <td>U+0331</td>
    </tr>
    <tr>
      <td>dot</td>
      <td>.</td>
      <td>ạẹịọụ</td>
      <td>ẠẸỊỌỤ</td>
      <td>U+0323</td>
    </tr>
    <tr>
      <td>tilde</td>
      <td>}</td>
      <td>a̰ḛḭo̰ṵ</td>
      <td>A̰ḚḬO̰Ṵ</td>
      <td>U+0330</td>
    </tr>
    <tr>
      <td>inverted breve</td>
      <td>,</td>
      <td>a̯e̯i̯o̯u̯</td>
      <td>A̯E̯I̯O̯U̯</td>
      <td>U+032F</td>
    </tr>
    <tr>
      <td>cedilla</td>
      <td>%</td>
      <td>a̧ȩi̧o̧u̧</td>
      <td>A̧ȨI̧O̧U̧</td>
      <td>U+0327</td>
    </tr>

  </tbody>
</table>
</div>


   <p>For multiple diacritics, use keying for modified vowel diacritics last before the vowel itself. E.g.,</p>
<ol>
<p>to obtain <samp> ù̱ </samp> type <kbd>`</kbd><kbd>_</kbd><kbd>u</kbd></p>
<p>to obtain <samp> ʉ̰̀ </samp> type <kbd>`</kbd><kbd>}</kbd><kbd>;</kbd><kbd>u</kbd></p>
</ol>



</p>
<h3>Punctuation</h3>

<div align="center">
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td class="heading">Description</td>
      <td class="heading">Type</td>
      <td class="heading">lc</td>
      <td class="heading">Unicode</td>
    </tr>
    <tr>
      <td>single opening quote</td>
      <td>&lt; <i>or</i> ;,</td>
      <td>‘</td>
      <td>U+2018</td>
    </tr>
    <tr>
      <td>single closing quote</td>
      <td>&gt; <i>or</i> ;.</td>
      <td>’</td>
      <td>U+2019</td>
    </tr>
    <tr>
      <td>double opening quote</td>
      <td>&lt;&lt; <i>or</i> ;&lt;</td>
      <td>“</td>
      <td>U+201C</td>
    </tr>
    <tr>
      <td>double closing quote</td>
      <td>&gt;&gt; <i>or</i> ;&gt;</td>
      <td>”</td>
      <td>U+201D</td>
    </tr>
    <tr>
      <td>Left wedge</td>
      <td>&lt;&lt;&lt;</td>
      <td>&lt;</td>
      <td>U+003C</td>
    </tr>
    <tr>
      <td>Right wedge</td>
      <td>&gt;&gt;&gt;</td>
      <td>&gt;</td>
      <td>U+003E</td>
    </tr>
    <tr>
      <td>Copyright symbol</td>
      <td>;@</td>
      <td>©</td>
      <td>U+00A9</td>
    </tr>
    <tr>
      <td>Null</td>
      <td>;#</td>
      <td>∅</td>
      <td>U+2205</td>
    </tr>

  </tbody>
</table>
</div>

<p>Note: Do not use punctuation characters in the middle of a word. E.g., do not use the single closing
quote (U+2019) to indicate pronunciation -- rather use the modifier letter apostrophe (U+02BC).</p>

