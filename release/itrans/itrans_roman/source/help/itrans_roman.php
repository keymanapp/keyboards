<?php
  $pagename = 'IAST from  Phonetic (ITRANS) Help';
  $pagetitle = 'IAST from  Phonetic (ITRANS) Help';
  $pagestyle = <<<END
    samp {font-family: Siddhanta; font-size:20pt;   }
    kbd {color:black; font: 0.8em sans-serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
    .inputSequences {border-collapse: collapse;font-size: 14px;min-width: 592px;}
    .inputSequences th, .inputSequences td {padding: 7px 17px;}
    .inputSequences thead th {border-bottom: 2px solid #6ea1cc;text-transform: uppercase;}
    .inputSequences tbody td {border-bottom: 1px solid #e1edff;color: #353535;text-align: center;}
    .inputSequences tbody tr:nth-child(odd) td {background-color: #f4fbff;}
    .inputSequences tbody tr:hover td {background-color: #ffffa2;border-color: #ffff0f;}
END;
  require_once('header.php');
?>

<h2><span style="color: chocolate;">Indic Romanization from ITRANS</span> Keyboard Version 1.0.0</h2>

<p>This is a phonetic keyboard for Indic Romanization which is based on  
<strong><a href="https://www.aczoom.com/itrans/">ITRANS</a></strong> 
transliteration scheme with some modifications for input. 7bit ISO scheme
has also been referred to for modifying the input scheme. 
Accented letters used by various Indic Romanization schemes such as 
<strong><a href="https://en.wikipedia.org/wiki/ISO_15919">ISO 15919</a></strong>, 
<strong><a href="https://en.wikipedia.org/wiki/International_Alphabet_of_Sanskrit_Transliteration">IAST</a></strong>,
<strong><a href="https://en.wikipedia.org/wiki/National_Library_at_Kolkata_romanisation#Scheme_table">NLK</a></strong>  are supported for output.</p>

<p>The modified input scheme 
uses only lowercase letters. This allows the same letters to be typed
with CAPS LOCK/SHIFT to get Unicode Romanized output in UPPERCASE letters, 
which is useful for typing Proper names, Headings, etc. </p>

<h3>Vowels</h3>
<p>The following table shows the letters to type to get the vowels.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Devanagari</th><th>Input</th><th>Output</th><th>Scheme</th></tr>
</thead>
<tbody>
<tr><td>अ</td><td>a</td> <td><strong>a</strong></td><td>IAST/ISO</td></tr>
<tr><td>आ</td><td>aa</td> <td><strong>ā</strong></td><td>IAST/ISO</td></tr>
<tr><td>इ</td><td>i</td> <td><strong>i</strong></td><td>IAST/ISO</td></tr>
<tr><td>ई</td><td>ii/ee/-i</td> <td><strong>ī</strong></td><td>IAST/ISO</td></tr>
<tr><td>उ</td><td>u</td> <td><strong>u</strong></td><td>IAST/ISO</td></tr>
<tr><td>ऊ</td><td>uu/oo/-u</td> <td><strong>ū</strong></td><td>IAST/ISO</td></tr>
<tr><td>ऋ</td><td>.r</td> <td><strong>ṛ</strong></td><td>IAST</td></tr>
<tr><td>ॠ</td><td>.rr</td> <td><strong>ṝ</strong></td><td>IAST</td></tr>
<tr><td>ऌ</td><td>.l</td> <td><strong>ḷ</strong></td><td>IAST</td></tr>
<tr><td>ॡ</td><td>.ll</td> <td><strong>ḹ</strong></td><td>IAST</td></tr>
<tr><td>ऋ</td><td>,r</td> <td><strong>r̥</strong></td><td>ISO</td></tr>
<tr><td>ॠ</td><td>,rr</td> <td><strong>r̥̄</strong></td><td>ISO</td></tr>
<tr><td>ऌ</td><td>,l</td> <td><strong>l̥</strong></td><td>ISO</td></tr>
<tr><td>ॡ</td><td>,ll</td> <td><strong>l̥̄</strong></td><td>ISO</td></tr>
<tr><td>ऍ</td><td>^e</td> <td><strong>ê</strong></td><td>ISO</td></tr>
<tr><td>ऎ</td><td>e</td> <td><strong>e</strong></td><td>ISO</td></tr>
<tr><td>ए</td><td>-e</td> <td><strong>ē</strong></td><td>ISO</td></tr>
<tr><td>ॲ</td><td>ae</td> <td><strong>ĕ</strong></td><td></td></tr>
<tr><td>ऍ</td><td>ae</td> <td><strong>ĕ</strong></td><td></td></tr>
<tr><td>ऎ</td><td>~e</td> <td><strong>ẽ</strong></td><td></td></tr>
<tr><td>ए</td><td>e</td> <td><strong>e</strong></td><td>IAST</td></tr>
<tr><td>ऐ</td><td>ai</td> <td><strong>ai</strong></td><td>IAST/ISO</td></tr>
<tr><td>ऑ</td><td>^o</td> <td><strong>ô</strong></td><td>ISO</td></tr>
<tr><td>ऒ</td><td>o</td> <td><strong>o</strong></td><td>ISO</td></tr>
<tr><td>ओ</td><td>-o</td> <td><strong>ō</strong></td><td>ISO</td></tr>
<tr><td>ऑ</td><td>aw</td> <td><strong>ŏ</strong></td><td></td></tr>
<tr><td>ऒ</td><td>~o</td> <td><strong>õ</strong></td><td></td></tr>
<tr><td>ओ</td><td>o</td> <td><strong>o</strong></td><td>IAST</td></tr>
<tr><td>औ</td><td>au</td> <td><strong>au</strong></td><td>IAST/ISO</td></tr>
<tr><td>ः</td><td>.h</td> <td><strong>ḥ</strong></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><strong></strong></td><td></tr>
<tr><td>ं</td><td>.m</td> <td><strong> ̇</strong></td><td>for ȧ ā̇ ï ī̇ u̇ ū̇ ė aï ȯ au̇ </td></tr>
<tr><td>ँ</td><td>.c</td> <td><strong> ̐</strong></td><td>for a̐ ā̐ i̐ ī̐ u̐ ū̐ e̐ ai̐ o̐ au̐ </td></tr>
<tr><td>ं</td><td>;m/m.m</td> <td><strong>ṁ</strong></td><td>ISO</td></tr>
<tr><td>ँ</td><td>~m/m.c</td> <td><strong>m̐</strong></td><td>IAST/ISO</td></tr>
<tr><td>ं</td><td>.mm</td> <td><strong>ṃ</strong></td><td>IAST</td></tr>
<tr><td>ं</td><td>.mm</td> <td><strong>ṃ</strong></td><td>ISO - Gurmukhi Tippi</td></tr>
<tr><td></td><td></td> <td><strong></strong></td><td></tr>
<tr><td>ऽ</td><td>'</td> <td><strong>’</strong></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><strong></strong></td><td></tr>
<tr><td>ᳵ</td><td>_h</td> <td><strong>ẖ</strong></td><td>ISO</td></tr>
<tr><td>ᳶ</td><td>^h</td> <td><strong>ḫ</strong></td><td>ISO</td></tr>
</tbody>
</table>

<h3>Consonants</h3>
<p>The following table shows the letters to type to get the consonants.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Devanagari</th><th>Input</th><th>Output</th><th>Scheme</th></tr>
</thead>
<tbody>
<tr><td>क्</td><td>k</td> <td><strong>k</strong></td><td>IAST/ISO</td></tr>
<tr><td>ख्</td><td>kh</td> <td><strong>kh</strong></td><td>IAST/ISO</td></tr>
<tr><td>ग्</td><td>g</td> <td><strong>g</strong></td><td>IAST/ISO</td></tr>
<tr><td>घ्</td><td>gh</td> <td><strong>gh</strong></td><td>IAST/ISO</td></tr>
<tr><td>ङ्</td><td>.nn/;n</td> <td><strong>ṅ</strong></td><td>IAST/ISO</td></tr>
<tr><td>च्</td><td>c</td> <td><strong>c</strong></td><td>IAST/ISO</td></tr>
<tr><td>छ्</td><td>ch</td> <td><strong>ch</strong></td><td>IAST/ISO</td></tr>
<tr><td>ज्</td><td>j</td> <td><strong>j</strong></td><td>IAST/ISO</td></tr>
<tr><td>झ्</td><td>jh</td> <td><strong>jh</strong></td><td>IAST/ISO</td></tr>
<tr><td>ञ्</td><td>~n</td> <td><strong>ñ</strong></td><td>IAST/ISO</td></tr>
<tr><td>ट्</td><td>.t</td> <td><strong>ṭ</strong></td><td>IAST/ISO</td></tr>
<tr><td>ठ्</td><td>.th</td> <td><strong>ṭh</strong></td><td>IAST/ISO</td></tr>
<tr><td>ड्</td><td>.d</td> <td><strong>ḍ</strong></td><td>IAST/ISO</td></tr>
<tr><td>ढ्</td><td>.dh</td> <td><strong>ḍh</strong></td><td>IAST/ISO</td></tr>
<tr><td>ण्</td><td>.n</td> <td><strong>ṇ</strong></td><td>IAST/ISO</td></tr>
<tr><td>त्</td><td>t</td> <td><strong>t</strong></td><td>IAST/ISO</td></tr>
<tr><td>थ्</td><td>th</td> <td><strong>th</strong></td><td>IAST/ISO</td></tr>
<tr><td>द्</td><td>d</td> <td><strong>d</strong></td><td>IAST/ISO</td></tr>
<tr><td>ध्</td><td>dh</td> <td><strong>dh</strong></td><td>IAST/ISO</td></tr>
<tr><td>न्</td><td>n</td> <td><strong>n</strong></td><td>IAST/ISO</td></tr>
<tr><td>प्</td><td>p</td> <td><strong>p</strong></td><td>IAST/ISO</td></tr>
<tr><td>फ्</td><td>ph</td> <td><strong>ph</strong></td><td>IAST/ISO</td></tr>
<tr><td>ब्</td><td>b</td> <td><strong>b</strong></td><td>IAST/ISO</td></tr>
<tr><td>भ्</td><td>bh</td> <td><strong>bh</strong></td><td>IAST/ISO</td></tr>
<tr><td>म्</td><td>m</td> <td><strong>m</strong></td><td>IAST/ISO</td></tr>
<tr><td>य्</td><td>y</td> <td><strong>y</strong></td><td>IAST/ISO</td></tr>
<tr><td>र्</td><td>r</td> <td><strong>r</strong></td><td>IAST/ISO</td></tr>
<tr><td>ल्</td><td>l</td> <td><strong>l</strong></td><td>IAST/ISO</td></tr>
<tr><td>व्</td><td>v</td> <td><strong>v</strong></td><td>IAST/ISO</td></tr>
<tr><td>श्</td><td>sh/s'/;s</td> <td><strong>ś</strong></td><td>IAST/ISO</td></tr>
<tr><td>ष्</td><td>.s</td> <td><strong>ṣ</strong></td><td>IAST/ISO</td></tr>
<tr><td>स्</td><td>s</td> <td><strong>s</strong></td><td>IAST/ISO</td></tr>
<tr><td>ह्</td><td>h</td> <td><strong>h</strong></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><strong></strong></td><td></tr>
<tr><td>क्ष्</td><td>k.s</td> <td><strong>kṣ</strong></td><td>IAST/ISO</td></tr>
<tr><td>त्र्</td><td>tr</td> <td><strong>tr</strong></td><td>IAST/ISO</td></tr>
<tr><td>ज्ञ्</td><td>j~n</td> <td><strong>jñ</strong></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><strong></strong></td><td></tr>
<tr><td>ळ्</td><td>.l</td> <td><strong>ḷ</strong></td><td>ISO</td></tr>
<tr><td>ळ्</td><td>..l</td> <td><strong>l̤</strong></td><td>IAST</td></tr>
<tr><td></td><td></td> <td><strong></strong></td><td></tr>
<tr><td>क़्</td><td>q</td> <td><strong>q</strong></td><td>IAST/ISO</td></tr>
<tr><td>ख़्</td><td>x</td> <td><strong>x</strong></td><td>ISO</td></tr>
<tr><td>ख़्</td><td>-kh</td> <td><strong>k͟h</strong></td><td>IAST</td></tr>
<tr><td>ग़्</td><td>;g/.gg</td> <td><strong>ġ</strong></td><td>ISO</td></tr>
<tr><td>ज़्</td><td>z</td> <td><strong>z</strong></td><td>ISO</td></tr>
<tr><td>फ़्</td><td>f</td> <td><strong>f</strong></td><td>ISO</td></tr>
<tr><td></td><td></td> <td><strong></strong></td><td></tr>
<tr><td>ड़्</td><td>.r</td> <td><strong>ṛ</strong></td><td>ISO</td></tr>
<tr><td>ढ़्</td><td>.rh</td> <td><strong>ṛh</strong></td><td>ISO</td></tr>
<tr><td>ड़्</td><td>..r</td> <td><strong>r̤</strong></td><td>IAST</td></tr>
<tr><td>ढ़्</td><td>..rh</td> <td><strong>r̤h</strong></td><td>IAST</td></tr>
<tr><td>ड़्</td><td>..d</td> <td><strong>d̤</strong></td><td></td></tr>
<tr><td>ढ़्</td><td>..dh</td> <td><strong>d̤h</strong></td><td></td></tr>
<tr><td></td><td></td> <td><strong></strong></td><td></tr>
<tr><td>र्‍</td><td>^r</td> <td><strong>r̆</strong></td><td>ISO</td></tr>
</tbody>
</table>

<h3>Additional characters</h3>
<p>The following table shows the letters to type to get additional
romanized letters needed for other Indic languages 
as per ISO 15919 scheme.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Indic</th><th>Input</th><th>Output</th><th>Scheme</th></tr>
</thead>
<tbody>
<tr><td></td><td>^u</td> <td><strong>ŭ</strong></td><td>ISO</td></tr>
<tr><td></td><td>^n</td> <td><strong>n̆</strong></td><td>ISO</td></tr>
<tr><td></td><td>_k</td> <td><strong>ḵ</strong></td><td>ISO</td></tr>
<tr><td></td><td>^c</td> <td><strong>ĉ</strong></td><td>ISO</td></tr>
<tr><td>ऱ्</td><td>-r</td> <td><strong>ṟ</strong></td><td>IAST/ISO</td></tr>
<tr><td></td><td>_t</td> <td><strong>ṯ</strong></td><td>ISO</td></tr>
<tr><td>ऩ्</td><td>-n</td> <td><strong>ṉ</strong></td><td>IAST/ISO</td></tr>
<tr><td>ऴ्</td><td>-l</td> <td><strong>ḻ</strong></td><td>IAST/ISO</td></tr>
<tr><td>य़्</td><td>;y</td> <td><strong>ẏ</strong></td><td>IAST/ISO</td></tr>
</tbody>
</table>
