<?php
  $pagename = 'Vedic Sanskrit Devanagari Phonetic (ITRANS) ';
  $pagetitle = 'Vedic Sanskrit Devanagari Phonetic (ITRANS) ';
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

<h2>Vedic Sanskrit Devanagari Phonetic (ITRANS) </h2>

<h3> <font color=Chocolate>Vedic Sanskrit Devanagari Phonetic (ITRANS) </font>Keyboard</h3>

<p>This is a phonetic Devanagari keyboard layout with support for Vedic Sanskrit 
(Devanagari Extended and Vedic Extensions Unicode ranges). 
It is based on the <strong><a href="https://www.aczoom.com/itrans/">ITRANS</a></strong>
transliteration scheme by Avinash Chopde, with some minor modifications.
You need to use a Unicode Devanagari font which has support for Vedic Sanskrit, e.g. 
<strong><a href="http://svayambhava.blogspot.com/p/siddhanta-devanagariunicode-open-type.html">
Siddhanta</a></strong> font by Mihail Bayaryn. </p>

<p>Additionally, it can also be used for typing <strong>Hindi</strong>, <strong>Marathi</strong> 
and other languages written in Devanagari script.<p>

<p>You can phonetically type using the QWERTY keyboard with ITRANS trasliteration scheme and 
get Devanagari output. For example, 
the keys <kbd>saMskRRta</kbd> will output the word <strong>संस्कृत</strong>, 
<kbd>mangaLa</kbd> will output the word <strong>मङ्गळ</strong>, 
<kbd>laxmI</kbd> will output the word <strong>लक्ष्मी</strong>.</p>

<h3>Hindi mode</h3>

<p>Implicit `a` instead of explicit Virama for Hindi mode can be activated by pressing 
<kbd>RCTRL</kbd><kbd>RALT</kbd><kbd>1</kbd> keys. In this mode, 
the implicit <strong>a</strong> is applied after the word ending consonant. 
e.g. <kbd>kt</kbd> <kbd>space</kbd> produces <samp>क्त </samp> and  
<kbd>rAm,</kbd> produces <samp>राम,</samp> instead of <samp>राम्,</samp> 
output in the default Sanskrit mode. 
Press <kbd>RCTRL</kbd><kbd>RALT</kbd><kbd>0</kbd> keys to reset the Hindi option.</p>

<h3>Special Consonant conjuncts</h3>

<p>In the default Sanskrit mode, `Panchama varna`  <samp>ङ्</samp> 
and <samp>ञ्</samp> as part of consonant conjuncts 
can be typed as <kbd>n</kbd> e.g. <kbd>mangal</kbd> <kbd>space</kbd> 
will output the word <strong>मङ्गल </strong>, <kbd>chanchala</kbd> will 
output the word <strong>चञ्चल</strong>.</p>

<h3>Keyboard layouts</h3>

<p>The default and shifted layouts cover Devanagari digits, consonants, vowels and other 
commonly used characters.</p>

<center>
<h3>Default (unshifted)</h3>
<p><img src="itrans_devanagari_sanskrit_vedicU_.png" alt="Default (unshifted) state"/>
</p>
<h3>Shift</h3>
<p><img src="itrans_devanagari_sanskrit_vedicU_S_edited.png" alt="Shift state"/></p>
</center>

<h3>Consonants</h3>

<p>The following table shows the English letters to type to get Devanagari consonants. e.g. type <kbd>k</kbd> for <samp>क्</samp>, <kbd>ka</kbd> for <samp>क</samp>, <kbd>R</kbd> for <samp>र्‍</samp> (eyelash Ra for Marathi), <kbd>RR</kbd> for <samp>ऋ</samp>, <kbd>RR^</kbd> for <samp>ॠ</samp>, <kbd>LL</kbd> for <samp>ऌ</samp>, etc.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>क</td><td>ka</td><td></td>
<td>ख</td><td>Ka/kha</td><td></td>
<td>ग</td><td>ga</td><td></td>
<td>घ</td><td>Ga/gha</td><td></td>
<td>ङ</td><td>~Na/Nga/Fa</td>
</tr>
<tr>
<td>च</td><td>ca/cha</td><td></td>
<td>छ</td><td>Ca/Cha</td><td></td>
<td>ज</td><td>ja</td><td></td>
<td>झ</td><td>Ja/jha</td><td></td>
<td>ञ</td><td>~na/Ya</td>
</tr>
<tr>
<td>ट</td><td>Ta</td><td></td>
<td>ठ</td><td>Tha</td><td></td>
<td>ड</td><td>Da</td><td></td>
<td>ढ</td><td>Dha</td><td></td>
<td>ण</td><td>Na</td>
</tr>
<tr>
<td>त</td><td>ta</td><td></td>
<td>थ</td><td>tha</td><td></td>
<td>द</td><td>da</td><td></td>
<td>ध</td><td>dha</td><td></td>
<td>न</td><td>na</td>
</tr>
<tr>
<td>प</td><td>pa</td><td></td>
<td>फ</td><td>pha</td><td></td>
<td>ब</td><td>ba</td><td></td>
<td>भ</td><td>bha</td><td></td>
<td>म</td><td>ma</td>
</tr>
<tr>
</tr>
<tr>
<td>य</td><td>ya</td><td></td>
<td>र</td><td>ra</td><td></td>
<td>ल</td><td>la</td><td></td>
<td>ळ</td><td>La</td><td></td>
<td>व</td><td>va/wa</td>
</tr>
<tr>
<td>श</td><td>sha</td><td></td>
<td>ष</td><td>Sa/Sha</td><td></td>
<td>स</td><td>sa</td><td></td>
<td>ह</td><td>ha</td><td></td>
<td>क्</td><td>k</td>
</tr>
<tr>
<td>श्र</td><td>shra</td><td></td>
<td>क्ष</td><td>xa/kSa</td><td></td>
<td>त्र</td><td>tra</td><td></td>
<td>ज्ञ</td><td>GYa/j~na/Xa</td><td></td>
<td>र्‍ (eyelash Ra)</td><td>R</td>
</tr>
</tbody>
</table>

<h3>Vowels and Vowel Signs</h3>

<p>In the following table, independent vowels, dependent vowel signs and vowel signs 
combined with the consonant 'k' are shown in ITRANS Sanskrit Vedic transliteration 
scheme on the top two rows. The third row shows Devanagari Vowels in their independent 
form on the left and their corresponding dependent form (maatraa or vowel sign) on the 
right. The fourth row shows the vowel sign combined with the consonant 'k' in 
Devanagari. 'ka' is without any added vowel sign, where the vowel 'a' is inherent.</p>
<p>If there is a need to type ONLY the vowel signs, it can be done 
    using `@` instead of a consonant. e.g. @A will output ा, @ai will output ै.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<thead>
<tr>
<th colspan="2">a</th>
<th colspan="2">aa/A</th>
<th colspan="2">i</th>
<th colspan="2">ii/I/ee</th>
<th colspan="2">u</th>
<th colspan="2">uu/U/oo</th>
<th colspan="2">RR</th>
<th colspan="2">RR^</th>
<th colspan="2">LL</th>
<th colspan="2">LL^</th>
<th colspan="2">e</th>
<th colspan="2">ai/ei</th>
<th colspan="2">o</th>
<th colspan="2">au/ou</th>
</tr>
<tr>
<th>a</th><th>ka</th>
<th>aa</th><th>kA</th>
<th>i</th><th>ki</th>
<th>ii</th><th>kI</th>
<th>u</th><th>ku</th>
<th>uu</th><th>kU</th>
<th>RR</th><th>kRR</th>
<th>RR^</th><th>kRR^</th>
<th>LL</th><th>kLL</th>
<th>LL^</th><th>kLL^</th>
<th>e</th><th>ke</th>
<th>ai</th><th>kai</th>
<th>o</th><th>ko</th>
<th>au</th><th>kau</th>
</tr>
</thead>
<tr>
<td>अ</td><td></td>
<td>आ</td><td>ा</td>
<td>इ</td><td>ि</td>
<td>ई</td><td>ी</td>
<td>उ</td><td>ु</td>
<td>ऊ</td><td>ू</td>
<td>ऋ</td><td>ृ</td>
<td>ॠ</td><td>ॄ</td>
<td>ऌ</td><td>ॢ</td>
<td>ॡ</td><td>ॣ</td>
<td>ए</td><td>े</td>
<td>ऐ</td><td>ै</td>
<td>ओ</td><td>ो</td>
<td>औ</td><td>ौ</td>
</tr>
<tr>
<td></td><td>क</td>
<td>आ</td><td>का</td>
<td>इ</td><td>कि</td>
<td>ई</td><td>की</td>
<td>उ</td><td>कु</td>
<td>ऊ</td><td>कू</td>
<td>ऋ</td><td>कृ</td>
<td>ॠ</td><td>कॄ</td>
<td>ऌ</td><td>कॢ</td>
<td>ॡ</td><td>कॣ</td>
<td>ए</td><td>के</td>
<td>ऐ</td><td>कै</td>
<td>ओ</td><td>को</td>
<td>औ</td><td>कौ</td>
</tr>
</tbody>
</table>


<p>The following table shows additional vowel signs used in Devanagari script by other languages. 
<table class="inputSequences" style="margin-left: auto; margin-right: auto; text-align: center;">
<tbody>
<thead>
<tr>
<th>E/ae</th>
<th>O/aw</th>
<th>W</th>
<th>[</th>
<th>]</th>
<th>{</th>
<th>}</th>
<th>q</th>
<th>Q</th>
<th>z</th>
<th>Z</th>
</tr>
<tr>
<th>kE/kae</th>
<th>kO/kaw</th>
<th>kW</th>
<th>k[</th>
<th>k]</th>
<th>k{</th>
<th>k}</th>
<th>kq</th>
<th>kQ</th>
<th>kz</th>
<th>kZ</th>
</tr>
</thead>
<tr>
<td>ऍ</td>
<td>ऑ</td>
<td>ऄ</td>
<td>ऎ</td>
<td>ऒ</td>
<td>ꣾ</td>
<td>ॵ</td>
<td>ॳ</td>
<td>ॴ</td>
<td>ॶ</td>
<td>ॷ</td>
</tr>
<tr>
<td>ॅ</td>
<td>ॉ</td>
<td>ॆ</td>
<td>ॆ</td>
<td>ॊ</td>
<td>ꣾ</td>
<td>ॏ</td>
<td>ऺ</td>
<td>ऻ</td>
<td>ॖ</td>
<td>ॗ</td>
</tr>
<tr>
<td>कॅ</td>
<td>कॉ</td>
<td>कॆ</td>
<td>कॆ</td>
<td>कॊ</td>
<td>कॊ</td>
<td>कꣾ</td>
<td>कॏ</td>
<td>कऺ</td>
<td>कऻ</td>
<td>कॖ</td>
<td>कॗ</td>
</tr>
</tbody>
</table>

<h3>Consonantal Diacritics</h3>

<p>Arranged with the vowels are two consonantal diacritics, the final nasal anusvāra ं 
<kbd>M</kbd> and the final fricative visarga ः <kbd>H</kbd> (called अं aṃ and अः aḥ). 
Another diacritic used in other languages written in Devanagari script is the 
candrabindu/anunāsika ँ <kbd>M</kbd><kbd>M</kbd> (अँ). These consonantal diacritics follow the 
vowel signs including the implicit `a`. The following table shows consonant `k` followed by 
various dependent vowel signs and consonantal diacritics ं and ः.
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<thead>
<tr>
<th></th>
<th>ka</th>
<th>kA</th>
<th>ki</th>
<th>kI</th>
<th>ku</th>
<th>kU</th>
<th>kRR</th>
<th>kRR^</th>
<th>kLL</th>
<th>kLL^</th>
<th>ke</th>
<th>kai</th>
<th>ko</th>
<th>kau</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>M</strong></td>
<td>कं</td>
<td>कां</td>
<td>किं</td>
<td>कीं</td>
<td>कुं</td>
<td>कूं</td>
<td>कृं</td>
<td>कॄं</td>
<td>कॢं</td>
<td>कॣं</td>
<td>कें</td>
<td>कैं</td>
<td>कों</td>
<td>कौं</td>
</tr>
<tr>
<td><strong>H</strong></td>
<td>कः</td>
<td>काः</td>
<td>किः</td>
<td>कीः</td>
<td>कुः</td>
<td>कूः</td>
<td>कृः</td>
<td>कॄः</td>
<td>कॢः</td>
<td>कॣः</td>
<td>केः</td>
<td>कैः</td>
<td>कोः</td>
<td>कौः</td>
</tr>
<tr>
<td><strong>MM</strong></td>
<td>कँ</td>
<td>काँ</td>
<td>किँ</td>
<td>कीँ</td>
<td>कुँ</td>
<td>कूँ</td>
<td>कृँ</td>
<td>कॄँ</td>
<td>कॢँ</td>
<td>कॣँ</td>
<td>केँ</td>
<td>कैँ</td>
<td>कोँ</td>
<td>कौँ</td>
</tr>
</tbody>
</table>

<h3>Conjuncts</h3>

<p>Consonant conjuncts are automatically formed,  e.g. <kbd>k</kbd> <kbd>t</kbd> 
produces <samp>क्त्‌</samp>. 

<h3>Explicit Virama</h3>

<p>To force an explicit virama at end of word, use <kbd>^</kbd> e.g. <kbd>k</kbd> 
<kbd>t</kbd> <kbd>^</kbd> <kbd>space</kbd> produces <samp>क्त्‌ </samp>.</p>

<p>A full (live) consonant with visible virama in middle of words can be typed using 
<kbd>^</kbd>, e.g. <kbd>k</kbd> <kbd>^</kbd> <kbd>S</kbd> produces <samp>क्‌ष्
</samp>.</p>

<h3>Zero Width Non Joiner (ZWNJ)</h3>

<p>To type a Zero Width Non Joiner, <kbd>_</kbd> can be typed between the letters, 
for example: <kbd>a</kbd> <kbd>_</kbd> <kbd>i</kbd> will generate <samp>अ‌इ
</samp>, <kbd>k</kbd> <kbd>_</kbd> <kbd>S</kbd> will generate <samp>क्‌ष्
</samp>.</p>

<h3>Zero Width Joiner (ZWJ)</h3>

<p>To type a Zero Width Joiner, <kbd>+</kbd> can be typed between the letters, 
for example: <kbd>k</kbd> <kbd>+</kbd> <kbd>S</kbd> will generate <samp>क्‍ष्
</samp>, while <kbd>k</kbd><kbd>S</kbd> generates <samp>क्ष्</samp>.</p>

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
<tr> <td><kbd>,</kbd><kbd>,</kbd></td> <td><samp>॰</samp></td> <td>Devanagari Abbreviation Sign</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd></td> <td><samp>।</samp></td> <td>DanDaa</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd></td> <td>॥</samp></td> <td>Double DanDaa</td></tr>
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
<tr> <td><kbd>$</kbd></td> <td><samp>₹</samp></td> <td>RUPEE SIGN</td></tr>
<tr> <td><kbd>%</kbd></td> <td><samp>࿕</samp></td> <td>U+0FD5  RIGHT-FACING SVASTI SIGN</td></tr>
<tr> <td><kbd>*</kbd></td> <td><samp>❀</samp></td> <td>U+2740 WHITE FLORETTE UNICODE CHARACTER</td></tr>
<tr> <td><kbd>&</kbd></td> <td><samp>☸</samp></td> <td>U+2638 WHEEL OF DHARMA UNICODE CHARACTER </td></tr>
<tr> <td><kbd>V</kbd></td> <td><samp>ऽ</samp></td> <td> AVAGRAHA</td></tr>
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
<tr> <td><kbd>'</kbd><kbd>'</kbd></td> <td><samp>॑</samp></td> <td>DEVANAGARI STRESS SIGN UDATTA - SVARITA</td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳚</samp></td> <td>VEDIC TONE DOUBLE SVARITA </td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳛</samp></td> <td>VEDIC TONE TRIPLE SVARITA</td></tr>
<tr> <td><kbd>`</kbd><kbd>`</kbd></td> <td><samp>॒</samp></td> <td>DEVANAGARI STRESS SIGN ANUDATTA</td></tr>
<tr> <td><kbd>M</kbd><kbd>M</kbd><kbd>^</kbd></td> <td><samp>ꣳ</samp></td> <td> CANDRABINDU VIRAMA</td></tr>
<tr> <td><kbd>=</kbd><kbd>=</kbd></td> <td><samp>ᳶ</samp></td> <td> VEDIC SIGN UPADHMANIYA</td></tr>
</tbody>
</table>

<h3>Cantillation marks for Samaveda</h3>
<ol>
<li>For typing cantillation marks for Samaveda with digits (1-7), press the number keys and then 
the EQUAL key, for example <kbd>7</kbd> <kbd>=</kbd> produces <samp>꣧</samp>.
</li>
<li>The number keys 0, 8 and 9 when followed by the EQUAL key produce frequently used
combinations of cantillation marks.
</li>
<li>For typing other cantillation marks for Samaveda, press the letter key and then the EQUAL 
key as per the following table.
</li>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>8</kbd><kbd>=</kbd></td> <td><samp>꣢꣯</samp></td> <td>e.g. ज꣢꣯</td></tr>
<tr> <td><kbd>9</kbd><kbd>=</kbd></td> <td><samp>꣢꣫</samp></td> <td>e.g. ल꣢꣫ </td></tr>
<tr> <td><kbd>0</kbd><kbd>=</kbd></td> <td><samp>꣣꣬</samp></td> <td>e.g. क꣣꣬</td></tr>
<tr></tr>
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
<p>
<li>Alternately use the Right Ctrl layout which is mapped with same set of keys (without EQUAL sign). 
It also has Tone marks and Breathing mark for Samaveda, Signs for Jaiminiya Sama Veda
 and nasalization marks from Devanagari Extended Unicode range.</li>
<center>
<h3>RCtrl</h3>

<p><img src="itrans_devanagari_sanskrit_vedicU_RC.png" alt="RCtrl state"/></p>
</center>
</ol>

<h3>Other Vedic characters</h3>
<center>
<h3>AltGr (RAlt)</h3>

<p><img src="itrans_devanagari_sanskrit_vedicU_RA.png" alt="AltGr (RAlt) state"/></p>
</center>

