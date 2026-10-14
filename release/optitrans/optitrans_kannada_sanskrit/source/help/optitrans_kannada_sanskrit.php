<?php
  $pagename = 'Kannada Sanskrit Phonetic (OPTITRANS) ';
  $pagetitle = 'Kannada Sanskrit Phonetic (OPTITRANS) ';
  $pagestyle = <<<END
    samp {font-family: Noto Sans Kannada Black; font-size:20pt;   }
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
<p>Kannada Sanskrit Phonetic (OPTITRANS) keyboard is kannaDa-sanskrit input method by a modified version of OPTITRANS and Harvard-Kyoto transliteration systems.
<p>You can use all the standard ITRANS key sequences plus key
    sequences such as the below.</p>
<p>nk-&gt;ಙ್ಕ್, nkh-&gt;ಙ್ಖ್, ng-&gt;ಙ್ಗ್, ngh-&gt;ಙ್ಘ್
    nch-&gt;ಞ್ಚ್, nCh-&gt;ಞ್ಛ್, nc-&gt;ಞ್ಚ್, nC-&gt;ಞ್ಛ್, nchh-&gt;ಞ್ಛ್,
    nj-&gt;ಞ್ಜ್, njh-&gt;ಞ್ಝ್, nT-&gt;ಣ್ಟ್, nTh-&gt;ಣ್ಠ್, nD-&gt;ಣ್ಡ್, nDh-&gt;ಣ್ಢ್
    c-&gt;ಚ್, C-&gt;ಛ್, z-&gt;ಜ಼್, S-&gt;ಷ್, jn-&gt;ಜ್ಞ್, R-&gt;ಋ</p>
<p>Examples: Type <code>saMskRta</code> for ಸಂಸ್ಕೃತ.</p>
<h2 id="details">Details</h2>
<ul>
    <li>The closely related m17n keyboard <a href="https://github.com/indic-transliteration/m17n-db-indic/blob/master/sa-vedic-itrans.mim">here</a></li>
    <li>The motivation behind some basic additions made to the basic ITRANS scheme is described <a href="https://sanskrit-coders.github.io/input/optitrans/">here</a>, along with a tabulated comparison with several other transliteration schemes.</li>
</ul>

<h3>Consonants</h3>

<p>The following table shows the English letters to type to get Kannada consonants. e.g. type <kbd>k</kbd> for <samp>ಕ್</samp>, <kbd>ka</kbd> for <samp>ಕ</samp>, <kbd>R</kbd> for <samp>ಋ</samp>, <kbd>RR</kbd> for <samp>ೠ</samp>, <kbd>LLi</kbd> for <samp>ಌ</samp>, etc.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>ಕ</td><td>ka</td><td></td>
<td>ಖ</td><td>Ka/kha</td><td></td>
<td>ಗ</td><td>ga</td><td></td>
<td>ಘ</td><td>Ga/gha</td><td></td>
<td>ಙ</td><td>~Na</td>
</tr>
<tr>
<td>ಚ</td><td>ca/cha</td><td></td>
<td>ಛ</td><td>Ca/Cha</td><td></td>
<td>ಜ</td><td>ja</td><td></td>
<td>ಝ</td><td>Ja/jha</td><td></td>
<td>ಞ</td><td>~na</td>
</tr>
<tr>
<td>ಟ</td><td>Ta</td><td></td>
<td>ಠ</td><td>Tha</td><td></td>
<td>ಡ</td><td>Da</td><td></td>
<td>ಢ</td><td>Dha</td><td></td>
<td>ಣ</td><td>Na</td>
</tr>
<tr>
<td>ತ</td><td>ta</td><td></td>
<td>ಥ</td><td>tha</td><td></td>
<td>ದ</td><td>da</td><td></td>
<td>ಧ</td><td>dha</td><td></td>
<td>ನ</td><td>na</td>
</tr>
<tr>
<td>ಪ</td><td>pa</td><td></td>
<td>ಫ</td><td>pha</td><td></td>
<td>ಬ</td><td>ba</td><td></td>
<td>ಭ</td><td>bha</td><td></td>
<td>ಮ</td><td>ma</td>
</tr>
<tr>
</tr>
<tr>
<td>ಯ</td><td>ya</td><td></td>
<td>ರ</td><td>ra</td><td></td>
<td>ಲ</td><td>la</td><td></td>
<td>ಳ</td><td>La</td><td></td>
<td>ವ</td><td>va/wa</td>
</tr>
<tr>
<td>ಶ</td><td>sha</td><td></td>
<td>ಷ</td><td>Sa/Sha</td><td></td>
<td>ಸ</td><td>sa</td><td></td>
<td>ಹ</td><td>ha</td><td></td>
<td>ಕ್</td><td>k</td>
</tr>
<tr>
<td>ಕ್ಷ</td><td>xa/kSa</td><td></td>
<td>ಱ್</td><td>rH</td>
<td>ೞ್</td><td>LH</td>
<td>ಜ಼್</td><td>z</td>
<td>ಫ಼್</td><td>F</td>
</tr>
</tbody>
</table>

<h2>Vowels and Vowel Signs</h2>

<p>In the following table, independent vowels, dependent vowel signs and vowel signs 
combined with the consonant 'k' are shown in OPTITRANS Sanskrit Pre-Vedic transliteration 
scheme on the top two rows. The third row shows Kannada Vowels in their independent 
form on the left and their corresponding dependent form (maatraa or vowel sign) on the 
right. The fourth row shows the vowel sign combined with the consonant 'k' in 
Kannada. 'ka' is without any added vowel sign, where the vowel 'a' is inherent.</p>
<p>If there is a need to type ONLY the vowel signs, it can be done 
    using `.` instead of a consonant. e.g. .A will output ಾ, .Ai will output ೈ.</p>
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
<th colspan="2">ai</th>
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
<td>ಅ</td><td></td>
<td>ಆ</td><td>ಾ</td>
<td>ಇ</td><td>ಿ</td>
<td>ಈ</td><td>ೀ</td>
<td>ಉ</td><td>ು</td>
<td>ಊ</td><td>ೂ</td>
<td>ಋ</td><td>ೃ</td>
<td>ೠ</td><td>ೄ</td>
<td>ಌ</td><td>ೢ</td>
<td>ೡ</td><td>ೣ</td>
<td>ಏ</td><td>ೇ</td>
<td>ಐ</td><td>ೈ</td>
<td>ಓ</td><td>ೋ</td>
<td>ಔ</td><td>ೌ</td>
</tr>
<tr>
<td></td><td>ಕ</td>
<td>ಆ</td><td>ಕಾ</td>
<td>ಇ</td><td>ಕಿ</td>
<td>ಈ</td><td>ಕೀ</td>
<td>ಉ</td><td>ಕು</td>
<td>ಊ</td><td>ಕೂ</td>
<td>ಋ</td><td>ಕೃ</td>
<td>ೠ</td><td>ಕೄ</td>
<td>ಌ</td><td>ಕೢ</td>
<td>ೡ</td><td>ಕೣ</td>
<td>ಏ</td><td>ಕೇ</td>
<td>ಐ</td><td>ಕೈ</td>
<td>ಓ</td><td>ಕೋ</td>
<td>ಔ</td><td>ಕೌ</td>
</tr>
</tbody>
</table>


<p>The following table shows additional vowel signs used in Kannada script by other languages.
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
    <tbody>
    <tr>
        <td>ಕ</td><td>ka</td><td></td>
        <td>ಖ</td><td>Ka/kha</td><td></td>
        <td>ಗ</td><td>ga</td><td></td>
        <td>ಘ</td><td>Ga/gha</td><td></td>
        <td>ಙ</td><td>~Na</td>
    </tr>
    <tr>
        <td>ಚ</td><td>ca/cha</td><td></td>
        <td>ಛ</td><td>Ca/Cha</td><td></td>
        <td>ಜ</td><td>ja</td><td></td>
        <td>ಝ</td><td>Ja/jha</td><td></td>
        <td>ಞ</td><td>~na</td>
    </tr>
    <tr>
        <td>ಟ</td><td>Ta</td><td></td>
        <td>ಠ</td><td>Tha</td><td></td>
        <td>ಡ</td><td>Da</td><td></td>
        <td>ಢ</td><td>Dha</td><td></td>
        <td>ಣ</td><td>Na</td>
    </tr>
    <tr>
        <td>ತ</td><td>ta</td><td></td>
        <td>ಥ</td><td>tha</td><td></td>
        <td>ದ</td><td>da</td><td></td>
        <td>ಧ</td><td>dha</td><td></td>
        <td>ನ</td><td>na</td>
    </tr>
    <tr>
        <td>ಪ</td><td>pa</td><td></td>
        <td>ಫ</td><td>pha</td><td></td>
        <td>ಬ</td><td>ba</td><td></td>
        <td>ಭ</td><td>bha</td><td></td>
        <td>ಮ</td><td>ma</td>
    </tr>
    <tr>
    </tr>
    <tr>
        <td>ಯ</td><td>ya</td><td></td>
        <td>ರ</td><td>ra</td><td></td>
        <td>ಲ</td><td>la</td><td></td>
        <td>ಳ</td><td>La</td><td></td>
        <td>ವ</td><td>va/wa</td>
    </tr>
    <tr>
        <td>ಶ</td><td>sha</td><td></td>
        <td>ಷ</td><td>Sa/Sha</td><td></td>
        <td>ಸ</td><td>sa</td><td></td>
        <td>ಹ</td><td>ha</td><td></td>
        <td>ಕ್</td><td>k</td>
    </tr>
    <tr>
        <td>ಕ್ಷ</td><td>xa/kSa</td><td></td>
        <td>ಱ್</td><td>rH</td>
        <td>ೞ್</td><td>LH</td>
        <td>ಜ಼್</td><td>z</td>
        <td>ಫ಼್</td><td>F</td>
    </tr>
    </tbody>
</table>

<h2>Consonantal Diacritics</h2>

<p>Arranged with the vowels are two consonantal diacritics, the final nasal anusvāra ಂ 
<kbd>M</kbd> and the final fricative visarga ಃ <kbd>H</kbd> (called ಅಂ aṃ and ಅಃ aḥ). 
Another diacritic used in other languages written in Kannada script is the 
candrabindu/anunāsika ಁ <kbd>M</kbd><kbd>M</kbd> (ಅಁ). These consonantal diacritics follow the 
vowel signs including the implicit `a`. The following table shows consonant `k` followed by 
various dependent vowel signs and consonantal diacritics ಂ and ಃ.

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
        <td>ಕಂ</td>
        <td>ಕಾಂ</td>
        <td>ಕಿಂ</td>
        <td>ಕೀಂ</td>
        <td>ಕುಂ</td>
        <td>ಕೂಂ</td>
        <td>ಕೃಂ</td>
        <td>ಕೄಂ</td>
        <td>ಕೢಂ</td>
        <td>ಕೣಂ</td>
        <td>ಕೇಂ</td>
        <td>ಕೈಂ</td>
        <td>ಕೋಂ</td>
        <td>ಕೌಂ</td>
    </tr>
    <tr>
        <td><strong>H</strong></td>
        <td>ಕಃ</td>
        <td>ಕಾಃ</td>
        <td>ಕಿಃ</td>
        <td>ಕೀಃ</td>
        <td>ಕುಃ</td>
        <td>ಕೂಃ</td>
        <td>ಕೃಃ</td>
        <td>ಕೄಃ</td>
        <td>ಕೢಃ</td>
        <td>ಕೣಃ</td>
        <td>ಕೇಃ</td>
        <td>ಕೈಃ</td>
        <td>ಕೋಃ</td>
        <td>ಕೌಃ</td>
    </tr>
    <tr>
        <td><strong>.N</strong></td>
        <td>ಕಁ</td>
        <td>ಕಾಁ</td>
        <td>ಕಿಁ</td>
        <td>ಕೀಁ</td>
        <td>ಕುಁ</td>
        <td>ಕೂಁ</td>
        <td>ಕೃಁ</td>
        <td>ಕೄಁ</td>
        <td>ಕೢಁ</td>
        <td>ಕೣಁ</td>
        <td>ಕೇಁ</td>
        <td>ಕೈಁ</td>
        <td>ಕೋಁ</td>
        <td>ಕೌಁ</td>
    </tr>
    </tbody>
</table>

<h2>Conjuncts</h2>

<p>Consonant conjuncts are automatically formed,  e.g. <kbd>k</kbd> <kbd>t</kbd> 
produces <samp>ಕ್ತ್‌</samp>. 

<h3>Explicit Virama</h3>

<p>To force an explicit virama at end of word, use <kbd>.h</kbd> e.g. <kbd>k</kbd> 
<kbd>t</kbd> <kbd>.h</kbd> <kbd>space</kbd> produces <samp>ಕ್ತ್‌ </samp>.</p>

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
<li>Press the number keys to type Kannada digits. for example <kbd>9</kbd> produces <samp>೯</samp>.</li>
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
<tr> <td><kbd>OM</kbd></td> <td><samp>ಓಂ</samp></td> <td>DEVANAGARI OM SIGN</td></tr>
<tr> <td><kbd>.a</kbd></td> <td><samp>ಽ</samp></td> <td> AVAGRAHA</td></tr>
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
<tr> <td><kbd>p</kbd><kbd>H</kbd></td> <td><samp>ೲ</samp></td> <td> VEDIC SIGN UPADHMANIYA</td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳓</samp></td> <td>VEDIC SIGN NIHSHVASA (also used for udAtta)</td></tr>
</tbody>
</table>
</center>

