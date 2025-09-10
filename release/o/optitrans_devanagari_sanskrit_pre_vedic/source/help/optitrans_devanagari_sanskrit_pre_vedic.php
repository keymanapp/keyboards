<?php
  $pagename = 'Pre-Vedic Sanskrit Devanagari Phonetic (OPTITRANS) ';
  $pagetitle = 'Pre-Vedic Sanskrit Devanagari Phonetic (OPTITRANS) ';
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

<h2 id="description">Description</h2>
<p>Pre-Vedic Sanskrit Devanagari Phonetic (OPTITRANS) keyboard is Sanskrit devanAgarI input method by a modified version of OPTITRANS and Harvard-Kyoto transliteration systems with the following special features:</p>
<ul>
    <li>greater reliance on reconstructed early vedic pronunciation (details and demo <a href="https://vishvAsa.github.io/sanskrit/registers/early-vedic">here</a>) <ul>
        <li>ai=ए, Ai=ऐ, au=ओ, Au=औ.</li>
        <li>emphasis on the udAtta accent instead of svarita.</li>
    </ul>
    </li>
    <li>allow input of hrasva ऎ and ऒ.</li>
    <li>support for common dravidian sounds (useful for maNipravALa).</li>
</ul>
<p>You can use all the standard ITRANS key sequences plus key
    sequences such as the below.</p>
<p>nk-&gt;ङ्क्, nkh-&gt;ङ्ख्, ng-&gt;ङ्ग्, ngh-&gt;ङ्घ्
    nch-&gt;ञ्च्, nCh-&gt;ञ्छ्, nc-&gt;ञ्च्, nC-&gt;ञ्छ्, nchh-&gt;ञ्छ्,
    nj-&gt;ञ्ज्, njh-&gt;ञ्झ्, nT-&gt;ण्ट्, nTh-&gt;ण्ठ्, nD-&gt;ण्ड्, nDh-&gt;ण्ढ्
    c-&gt;च्, C-&gt;छ्, z-&gt;श्, S-&gt;ष्, jn-&gt;ज्ञ्, R-&gt;ऋ</p>
<p>Examples: Type <code>saMskRta</code> for संस्कृत.</p>
<h2 id="details">Details</h2>
<ul>
    <li>The closely related m17n keyboard <a href="https://github.com/indic-transliteration/m17n-db-indic/blob/master/sa-vedic-itrans.mim">here</a></li>
    <li>The motivation behind some basic additions made to the basic ITRANS scheme is described <a href="https://sanskrit-coders.github.io/input/optitrans/">here</a>, along with a tabulated comparison with several other transliteration schemes.</li>
</ul>

<h3>Consonants</h3>

<p>The following table shows the English letters to type to get Devanagari consonants. e.g. type <kbd>k</kbd> for <samp>क्</samp>, <kbd>ka</kbd> for <samp>क</samp>, <kbd>R</kbd> for <samp>र्‍</samp> (eyelash Ra for Marathi), <kbd>R</kbd> for <samp>ऋ</samp>, <kbd>RR</kbd> for <samp>ॠ</samp>, <kbd>LLi</kbd> for <samp>ऌ</samp>, etc.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>क</td><td>ka</td><td></td>
<td>ख</td><td>Ka/kha</td><td></td>
<td>ग</td><td>ga</td><td></td>
<td>घ</td><td>Ga/gha</td><td></td>
<td>ङ</td><td>~Na</td>
</tr>
<tr>
<td>च</td><td>ca/cha</td><td></td>
<td>छ</td><td>Ca/Cha</td><td></td>
<td>ज</td><td>ja</td><td></td>
<td>झ</td><td>Ja/jha</td><td></td>
<td>ञ</td><td>~na</td>
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
<td>क्ष</td><td>xa/kSa</td><td></td>
<td>ऱ्</td><td>rH</td>
<td>ऴ्</td><td>LH</td>
<td>ज़्</td><td>z</td>
<td>फ़्</td><td>F</td>
</tr>
</tbody>
</table>

<h2>Vowels and Vowel Signs</h2>

<p>In the following table, independent vowels, dependent vowel signs and vowel signs 
combined with the consonant 'k' are shown in OPTITRANS Sanskrit Pre-Vedic transliteration 
scheme on the top two rows. The third row shows Devanagari Vowels in their independent 
form on the left and their corresponding dependent form (maatraa or vowel sign) on the 
right. The fourth row shows the vowel sign combined with the consonant 'k' in 
Devanagari. 'ka' is without any added vowel sign, where the vowel 'a' is inherent.</p>
<p>If there is a need to type ONLY the vowel signs, it can be done 
    using `.` instead of a consonant. e.g. .A will output ा, .Ai will output ै.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<thead>
<tr>
<th colspan="2">a</th>
<th colspan="2">aa/A</th>
<th colspan="2">i</th>
<th colspan="2">ii/I</th>
<th colspan="2">u</th>
<th colspan="2">uu/U</th>
<th colspan="2">R</th>
<th colspan="2">RR</th>
<th colspan="2">LL^i</th>
<th colspan="2">LL^I</th>
<th colspan="2">e</th>
<th colspan="2">Ai/aai</th>
<th colspan="2">o</th>
<th colspan="2">Au/aau</th>
</tr>
<tr>
<th>a</th><th>ka</th>
<th>aa</th><th>kA</th>
<th>i</th><th>ki</th>
<th>ii</th><th>kI</th>
<th>u</th><th>ku</th>
<th>uu</th><th>kU</th>
<th>R</th><th>kR</th>
<th>RR</th><th>kRR</th>
<th>LLi</th><th>kLLi</th>
<th>LLI</th><th>kLLI</th>
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
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
    <tbody>
    <tr>
        <td>क</td><td>ka</td><td></td>
        <td>ख</td><td>Ka/kha</td><td></td>
        <td>ग</td><td>ga</td><td></td>
        <td>घ</td><td>Ga/gha</td><td></td>
        <td>ङ</td><td>~Na</td>
    </tr>
    <tr>
        <td>च</td><td>ca/cha</td><td></td>
        <td>छ</td><td>Ca/Cha</td><td></td>
        <td>ज</td><td>ja</td><td></td>
        <td>झ</td><td>Ja/jha</td><td></td>
        <td>ञ</td><td>~na</td>
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
        <td>क्ष</td><td>xa/kSa</td><td></td>
        <td>ऱ्</td><td>rH</td>
        <td>ऴ्</td><td>LH</td>
        <td>ज़्</td><td>z</td>
        <td>फ़्</td><td>F</td>
    </tr>
    </tbody>
</table>

<h2>Consonantal Diacritics</h2>

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
        <th>kR</th>
        <th>kRR</th>
        <th>kLLi</th>
        <th>kLLI</th>
        <th>kai/kE</th>
        <th>kAi</th>
        <th>kau/kO</th>
        <th>kAu</th>
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
        <td><strong>.N</strong></td>
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

<h2>Conjuncts</h2>

<p>Consonant conjuncts are automatically formed,  e.g. <kbd>k</kbd> <kbd>t</kbd> 
produces <samp>क्त्‌</samp>. 

<h3>Explicit Virama</h3>

<p>To force an explicit virama at end of word, use <kbd>.h</kbd> e.g. <kbd>k</kbd> 
<kbd>t</kbd> <kbd>.h</kbd> <kbd>space</kbd> produces <samp>क्त्‌ </samp>.</p>

<h2>Punctuation</h2>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>...</kbd></td> <td><samp>॰</samp></td> <td>Devanagari Abbreviation Sign</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd></td> <td><samp>।</samp></td> <td>DanDaa</td></tr>
<tr> <td><kbd>,</kbd><kbd>.</kbd></td> <td><samp>॥</samp></td> <td>Double DanDaa</td></tr>
<tr> <td><kbd>-</kbd><kbd>-</kbd></td> <td><samp>–</samp></td> <td>En Dash</td></tr>
<tr> <td><kbd>-</kbd><kbd>-</kbd><kbd>-</kbd></td> <td><samp>—</samp></td> <td>Em Dash</td></tr>
</tbody>
</table>
<h2>Numbers</h2>
<ol>
<li>Press the number keys to type Devanagari digits. for example <kbd>9</kbd> produces <samp>९</samp>.</li>
<li>For typing the Arabic digits, press the number keys and then the backspace key, for example <kbd>9</kbd> <kbd>Back space</kbd> produces <samp>9</samp>.</li>
</ol>
<h2>Special Symbols</h2>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>OM</kbd></td> <td><samp>ॐ</samp></td> <td>DEVANAGARI OM SIGN</td></tr>
<tr> <td><kbd>.a</kbd></td> <td><samp>ऽ</samp></td> <td> AVAGRAHA</td></tr>
</tbody>
</table>

<h2>Commonly used Vedic Accents</h2>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>!</kbd><kbd>!</kbd><kbd>'</kbd></td> <td><samp>᳚</samp></td> <td>VEDIC TONE SVARITA </td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳙</samp></td> <td>VEDIC TONE SVATANTRA SVARITA</td></tr>
<tr> <td><kbd>_</kbd></td> <td><samp>॒</samp></td> <td>DEVANAGARI STRESS SIGN ANUDATTA</td></tr>
<tr> <td><kbd>p</kbd><kbd>H</kbd></td> <td><samp>ᳶ</samp></td> <td> VEDIC SIGN UPADHMANIYA</td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳓</samp></td> <td>VEDIC SIGN NIHSHVASA (also used for udAtta)</td></tr>
</tbody>
</table>
</center>

