<?php
  $pagename = 'Vedic Sanskrit Devanagari Phonetic (ITRANS) Keyboard Help';
  $pagetitle = 'Vedic Sanskrit Devanagari Phonetic (ITRANS) Keyboard Help';
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

<h1>Vedic Sanskrit Devanagari Phonetic (ITRANS) Keyboard Help</h1>
<h2>Version 1.0.2</h1>

<h3><span style="color: chocolate;">Vedic Sanskrit Devanagari Phonetic (ITRANS) </span>Keyboard</h3>
<p>This is a phonetic Devanagari (ITRANS) keyboard layout with support for Vedic Sanskrit (Devanagari Extended and Vedic Extensions Unicode ranges).
</p>
<p><strong>Vedic Sanskrit Devanagari Phonetic (ITRANS) Keyboard</strong> is based on <strong><a href="https://www.aczoom.com/itrans/">ITRANS</a></strong> transliteration scheme with some modifications. You can phonetically type using the QWERTY keyboard with ITRANS trasliteration scheme and get Devanagari output. For example, the keys <kbd>s</kbd> <kbd>a</kbd> <kbd>M</kbd> <kbd>s</kbd> <kbd>k</kbd> <kbd>R</kbd> <kbd>t</kbd> <kbd>a</kbd> will output the word <strong>संस्कृत</strong>, <kbd>m</kbd> <kbd>a</kbd> <kbd>n</kbd> <kbd>g</kbd> <kbd>a</kbd> <kbd>l</kbd> <kbd>space</kbd> will output the word <strong>मङ्गल </strong>, <kbd>l</kbd> <kbd>a</kbd> <kbd>x</kbd> <kbd>m</kbd> <kbd>I</kbd> will output the word <strong>लक्ष्मी</strong>.</p>

<h3>Keyboard layouts</h3>
<p>The default and shifted layouts cover Devanagari digits, consonants, vowels and other commonly used characters.
<center>
<h3>Default (unshifted)</h3>
<p><img src="itrans_devanagari_sanskrit_vedicU_.png" alt="Default (unshifted) state"/></p>
<h3>Shift</h3>
<p><img src="itrans_devanagari_sanskrit_vedicU_S.png" alt="Shift state"/></p>
</center>

<h3>Consonants</h3>
<p>The following table shows the English letters to type to get Devanagari consonants.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>क</td><td>ka</td><td>&nbsp;</td>
<td>ख</td><td>Ka/kha</td><td>&nbsp;</td>
<td>ग</td><td>ga</td><td>&nbsp;</td>
<td>घ</td><td>Ga/gha</td><td>&nbsp;</td>
<td>ङ</td><td>~Na/Nga</td>
</tr>
<tr>
<td>च</td><td>ca/cha</td><td>&nbsp;</td>
<td>छ</td><td>Ca/Cha</td><td>&nbsp;</td>
<td>ज</td><td>ja</td><td>&nbsp;</td>
<td>झ</td><td>Ja/jha</td><td>&nbsp;</td>
<td>ञ</td><td>~na/Ya</td>
</tr>
<tr>
<td>ट</td><td>Ta</td><td>&nbsp;</td>
<td>ठ</td><td>Tha</td><td>&nbsp;</td>
<td>ड</td><td>Da</td><td>&nbsp;</td>
<td>ढ</td><td>Dha</td><td>&nbsp;</td>
<td>ण</td><td>Na</td>
</tr>
<tr>
<td>त</td><td>ta</td><td>&nbsp;</td>
<td>थ</td><td>tha</td><td>&nbsp;</td>
<td>द</td><td>da</td><td>&nbsp;</td>
<td>ध</td><td>dha</td><td>&nbsp;</td>
<td>न</td><td>na</td>
</tr>
<tr>
<td>प</td><td>pa</td><td>&nbsp;</td>
<td>फ</td><td>pha</td><td>&nbsp;</td>
<td>ब</td><td>ba</td><td>&nbsp;</td>
<td>भ</td><td>bha</td><td>&nbsp;</td>
<td>म</td><td>ma</td>
</tr>
<tr>
</tr>
<tr>
<td>य</td><td>ya</td><td>&nbsp;</td>
<td>र</td><td>ra</td><td>&nbsp;</td>
<td>ल</td><td>la</td><td>&nbsp;</td>
<td>ळ</td><td>La</td><td>&nbsp;</td>
<td>व</td><td>va/wa</td>
</tr>
<tr>
<td>श</td><td>sha</td><td>&nbsp;</td>
<td>ष</td><td>Sa/Sha</td><td>&nbsp;</td>
<td>स</td><td>sa</td><td>&nbsp;</td>
<td>ह</td><td>ha</td><td>&nbsp;</td>
<td>क्</td><td>k</td>
</tr>
<tr>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td>क्ष</td><td>xa/kSa</td><td>&nbsp;</td>
<td>त्र</td><td>tra</td><td>&nbsp;</td>
<td>ज्ञ</td><td>GYa/j~na</td><td>&nbsp;</td>
<td>&nbsp;</td><td>&nbsp;</td>
</tr>
</tbody>
</table>

<h3>Vowels</h3>
<p>In the following table, vowels in ITRANS Sanskrit Vedic transliteration scheme are shown on the top two rows. The third row shows Devanagari Vowels in their independent form on the left and their corresponding dependent form (maatraa or vowel sign) on the right. The fourth row shows the vowel sign combined with the consonant 'k'. 'ka' is without any added vowel sign, where the vowel 'a' is inherent.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<thead>
<tr>
<th colspan="2">a</th>
<th colspan="2">aa/A</th>
<th colspan="2">{</th>
<th colspan="2">}</th>
<th colspan="2">i</th>
<th colspan="2">ii/I/ee</th>
<th colspan="2">u</th>
<th colspan="2">uu/U/oo</th>
</tr>
<tr>
<th>a</th><th>ka</th>
<th>aa</th><th>kA</th>
<th>{</th><th>k{</th>
<th>}</th><th>k}</th>
<th>i</th><th>ki</th>
<th>ii</th><th>kI</th>
<th>u</th><th>ku</th>
<th>uu</th><th>kU</th>
</tr>
</thead>
<tr>
<td>अ</td><td></td>
<td>आ</td><td>ा</td>
<td>ॲ</td><td>ॅ</td>
<td>ऑ</td><td>ॉ</td>
<td>इ</td><td>ि</td>
<td>ई</td><td>ी</td>
<td>उ</td><td>ु</td>
<td>ऊ</td><td>ू</td>
</tr>
<tr>
<td></td><td>क</td>
<td></td><td>का</td>
<td></td><td>कॅ</td>
<td></td><td>कॉ</td>
<td></td><td>कि</td>
<td></td><td>की</td>
<td></td><td>कु</td>
<td></td><td>कू</td>
</tr>
</tbody>
</table>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<thead>
<tr>
<th colspan="2">[</th>
<th colspan="2">e/E</th>
<th colspan="2">ai/ei</th>
<th colspan="2">]</th>
<th colspan="2">o/O</th>
<th colspan="2">au/ou</th>
</tr>
<tr>
<th>[</th><th>k[</th>
<th>e</th><th>kE</th>
<th>ai</th><th>kai</th>
<th>]</th><th>k]</th>
<th>o</th><th>kO</th>
<th>au</th><th>kau</th>
</tr>
</thead>
<tr>
<td>ऎ</td><td>ॆ</td>
<td>ए</td><td>े</td>
<td>ऐ</td><td>ै</td>
<td>ऒ</td><td>ॊ</td>
<td>ओ</td><td>ो</td>
<td>औ</td><td>ौ</td>
</tr>
<tr>
<td></td><td>कॆ</td>
<td></td><td>के</td>
<td></td><td>कै</td>
<td></td><td>कॊ</td>
<td></td><td>को</td>
<td></td><td>कौ</td>
</tr>
</tbody>
</table>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<thead>
<tr>
<th colspan="2">R</th>
<th colspan="2">R^</th>
<th colspan="2">|</th>
<th colspan="2">|^</th>
<th colspan="2">M</th>
<th colspan="2">H</th>
<th> </th>
<th> </th>
</tr>
<tr>
<th>R</th><th>kR</th>
<th>R^</th><th>kR^</th>
<th>|</th><th>k|</th>
<th>|^</th><th>k|^</th>
<th>M</th><th>kaM</th>
<th>H</th><th>kaH</th>
<th>k_</th><th>k^</th>
</tr>
</thead>
<tr>
<td>ऋ</td><td>ृ</td>
<td>ॠ</td><td>ॄ</td>
<td>ऌ</td><td>ॢ</td>
<td>ॡ</td><td>ॣ</td>
<td>अं</td><td>ं</td>
<td>अः</td><td>ः</td>
<td>क्</td><td>्</td>
</tr>
<tr>
<td></td><td>कृ</td>
<td></td><td>कॄ</td>
<td></td><td>कॢ</td>
<td></td><td>कॣ</td>
<td></td><td>कं</td>
<td></td><td>कः</td>
<td></td><td>क्</td>
</tr>
</tbody>
</table>

<h3>Conjuncts</h3>
<p>Consonant conjuncts are automatically formed,  e.g. <kbd>k</kbd> <kbd>t</kbd> produces <samp>क्त्‌</samp>. The inherent <strong>a</strong> is only applied when followed by <kbd>space</kbd>. e.g. <kbd>k</kbd> <kbd>t</kbd> <kbd>a</kbd> or <kbd>k</kbd> <kbd>t</kbd> <kbd>space</kbd> produces <samp>क्त</samp>. To force an explicit virama at end of word, use <kbd>^</kbd> e.g. <kbd>k</kbd> <kbd>t</kbd> <kbd>^</kbd> <kbd>space</kbd> produces <samp>क्त्‌ </samp>.</p>
<p>A full (live) consonant with visible virama in middle of words can be typed using <kbd>^</kbd>, e.g. <kbd>k</kbd> <kbd>^</kbd> <kbd>S</kbd> produces <samp>क्‌ष</samp>.</p>

<h3>Zero Width Non Joiner (ZWNJ)</h3>
<p>To type a Zero Width Non Joiner, <kbd>_</kbd> can be typed between the letters, for example: <kbd>a</kbd> <kbd>_</kbd> <kbd>i</kbd> will generate <samp>अ‌इ</samp>.</p>

<h3>Typing English letters</h3>
<p>Words in written in English letters can be typed by first typing <kbd>Q</kbd> at the start of the word, for example:
<kbd>Q</kbd> <kbd>S</kbd> <kbd>a</kbd> <kbd>n</kbd> <kbd>s</kbd> <kbd>k</kbd> <kbd>r</kbd> <kbd>i</kbd> <kbd>t</kbd>  will type the word <strong>Sanskrit</strong>.</p>
<h3>Punctuation</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>,</kbd></td> <td><samp>॰</samp></td> <td>Devanagari Abbreviation Sign</td></tr>
<tr> <td><kbd>.</kbd></td> <td><samp>।</samp></td> <td>DanDaa</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd></td> <td><samp>॥</samp></td> <td>Double DanDaa</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd></td> <td><samp>…</samp></td> <td>Ellipsis</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd></td> <td><samp>.</samp></td> <td>Period</td></tr>
<tr> <td><kbd>-</kbd></td> <td><samp>-</samp></td> <td>Dash</td></tr>
<tr> <td><kbd>-</kbd><kbd>-</kbd></td> <td><samp>–</samp></td> <td>En Dash</td></tr>
<tr> <td><kbd>-</kbd><kbd>-</kbd><kbd>-</kbd></td> <td><samp>—</samp></td> <td>Em Dash</td></tr>
</tbody>
</table>
<h3>Numbers</h3>
<ol>
<li>Press the number keys to type Devanagari digits. for example <kbd>9</kbd> produces <samp>९</samp>.</li>
<li>For typing the Arabic digits, press the number keys and then the backspace key, for example <kbd>9</kbd> <kbd>Back space</kbd> produces <samp>9</samp>.</li>
</ol>
<h3>Special Symbols</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>#</kbd></td> <td><samp>ॐ</samp></td> <td>DEVANAGARI OM SIGN</td></tr>
<tr> <td><kbd>$</kbd></td> <td><samp>࿕</samp></td> <td>U+0FD5  RIGHT-FACING SVASTI SIGN</td></tr>
<tr> <td><kbd>%</kbd></td> <td><samp>࿗</samp></td> <td>U+0FD7  RIGHT-FACING SVASTI SIGN WITH DOTS</td></tr>
<tr> <td><kbd>*</kbd></td> <td><samp>❀</samp></td> <td>U+2740 WHITE FLORETTE UNICODE CHARACTER</td></tr>
<tr> <td><kbd>&</kbd></td> <td><samp>☸</samp></td> <td>U+2638 WHEEL OF DHARMA UNICODE CHARACTER </td></tr>
<tr> <td><kbd><</kbd></td> <td><samp>ँ</samp></td> <td> CHANDRABINDU</td></tr>
<tr> <td><kbd>z</kbd></td> <td><samp>ऽ</samp></td> <td> AVAGRAHA</td></tr>
<tr> <td><kbd>\</kbd></td> <td><samp>़</samp></td> <td>U+093C   NUKTA</td></tr>
</tbody>
</table>
<h3>Commonly used Vedic Accents</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>'</kbd></td> <td><samp>॑</samp></td> <td>DEVANAGARI STRESS SIGN UDATTA - SVARITA</td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳚</samp></td> <td>VEDIC TONE DOUBLE SVARITA </td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳛</samp></td> <td>VEDIC TONE TRIPLE SVARITA</td></tr>
<tr> <td><kbd>`</kbd></td> <td><samp>॒</samp></td> <td>DEVANAGARI STRESS SIGN ANUDATTA</td></tr>
<tr> <td><kbd>></kbd></td> <td><samp>ꣳ</samp></td> <td> CANDRABINDU VIRAMA</td></tr>
<tr> <td><kbd>=</kbd><kbd>=</kbd></td> <td><samp>ᳶ</samp></td> <td> VEDIC SIGN UPADHMANIYA</td></tr>
</tbody>
</table>
<h3>Samaveda Combining Marks</h3>
<ol>
<li>For typing Samaveda combining mark with digits, press the number keys and then the equal key, for example <kbd>9</kbd> <kbd>=</kbd> produces <samp>꣩</samp>.</li>
<li>For typing other Samaveda combining marks, press the letter key and then the equal key as per the following table.
</li>
</ol>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>a</kbd><kbd>=</kbd></td> <td><samp>꣪</samp></td> <td>COMBINING DEVANAGARI LETTER A </td></tr>
<tr> <td><kbd>u</kbd><kbd>=</kbd></td> <td><samp>꣫</samp></td> <td>COMBINING DEVANAGARI LETTER U </td></tr>
<tr> <td><kbd>k</kbd><kbd>=</kbd></td> <td><samp>꣬</samp></td> <td>COMBINING DEVANAGARI LETTER KA </td></tr>
<tr> <td><kbd>n</kbd><kbd>=</kbd></td> <td><samp>꣭</samp></td> <td>COMBINING DEVANAGARI LETTER NA </td></tr>
<tr> <td><kbd>p</kbd><kbd>=</kbd></td> <td><samp>꣮</samp></td> <td>COMBINING DEVANAGARI LETTER PA </td></tr>
<tr> <td><kbd>r</kbd><kbd>=</kbd></td> <td><samp>꣯</samp></td> <td>COMBINING DEVANAGARI LETTER RA </td></tr>
<tr> <td><kbd>s</kbd><kbd>=</kbd></td> <td><samp>꣱</samp></td> <td>COMBINING DEVANAGARI SIGN AVAGRAHA </td></tr>
<tr> <td><kbd>v</kbd><kbd>=</kbd></td> <td><samp>꣰</samp></td> <td>COMBINING DEVANAGARI LETTER VI </td></tr>
</tbody>
</table>

<h3>Other Vedic characters</h3>
<center>
<h3>AltGr (RAlt)</h3>
<p><img src="itrans_devanagari_sanskrit_vedicU_RA.png" alt="AltGr (RAlt) state"/></p>
</center>

</body>
</html>
