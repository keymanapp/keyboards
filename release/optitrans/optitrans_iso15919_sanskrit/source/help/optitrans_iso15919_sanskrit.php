<?php
  $pagename = 'Sanskrit ISO-15919 Phonetic (OPTITRANS) ';
  $pagetitle = 'Sanskrit ISO-15919 Phonetic (OPTITRANS) ';
  $pagestyle = <<<END
    samp {font-family: Charis; font-size:20pt;   }
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
<p>Sanskrit ISO-15919 Phonetic (OPTITRANS) keyboard is ISO 15919 romanization input method by a modified version of OPTITRANS and Harvard-Kyoto transliteration systems.
<p>You can use all the standard ITRANS key sequences plus key
    sequences such as the below.</p>
<p>nk-&gt;ṅk, nkh-&gt;ṅkh, ng-&gt;ṅg, ngh-&gt;ṅgh
    nch-&gt;ñc, nCh-&gt;ñch, nc-&gt;ñc, nC-&gt;ñch, nchh-&gt;ñch,
    nj-&gt;ñj, njh-&gt;ñjh, nT-&gt;ṇṭ, nTh-&gt;ṇṭh, nD-&gt;ṇḍ, nDh-&gt;ṇḍh
    c-&gt;c, C-&gt;ch, z-&gt;z, S-&gt;ṣ, jn-&gt;jñ, R-&gt;r̥</p>
<p>Examples: Type <code>saMskRta</code> for saṃskṛta.</p>
<h2 id="details">Details</h2>
<ul>
    <li>The closely related m17n keyboard <a href="https://github.com/indic-transliteration/m17n-db-indic/blob/master/dra-iso-15919-itrans.mim">here</a></li>
    <li>The motivation behind some basic additions made to the basic ITRANS scheme is described <a href="https://sanskrit-coders.github.io/input/optitrans/">here</a>, along with a tabulated comparison with several other transliteration schemes.</li>
</ul>

<h3>Consonants</h3>

<p>The following table shows the English letters to type to get ISO 15919 letters. e.g. type <kbd>k</kbd> for <samp>k</samp>, <kbd>ka</kbd> for <samp>ka</samp>, <kbd>R</kbd> for <samp>r̥</samp>, <kbd>RR</kbd> for <samp>r̥̄</samp>, <kbd>LLi</kbd> for <samp>l̥</samp>, etc.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>k</td><td>ka</td><td></td>
<td>kh</td><td>Ka/kha</td><td></td>
<td>g</td><td>ga</td><td></td>
<td>gh</td><td>Ga/gha</td><td></td>
<td>ṅ</td><td>~Na</td>
</tr>
<tr>
<td>c</td><td>ca/cha</td><td></td>
<td>ch</td><td>Ca/Cha</td><td></td>
<td>j</td><td>ja</td><td></td>
<td>jh</td><td>Ja/jha</td><td></td>
<td>ñ</td><td>~na</td>
</tr>
<tr>
<td>ṭ</td><td>Ta</td><td></td>
<td>ṭh</td><td>Tha</td><td></td>
<td>ḍ</td><td>Da</td><td></td>
<td>ḍh</td><td>Dha</td><td></td>
<td>ṇ</td><td>Na</td>
</tr>
<tr>
<td>t</td><td>ta</td><td></td>
<td>th</td><td>tha</td><td></td>
<td>d</td><td>da</td><td></td>
<td>dh</td><td>dha</td><td></td>
<td>n</td><td>na</td>
</tr>
<tr>
<td>p</td><td>pa</td><td></td>
<td>ph</td><td>pha</td><td></td>
<td>b</td><td>ba</td><td></td>
<td>bh</td><td>bha</td><td></td>
<td>m</td><td>ma</td>
</tr>
<tr>
</tr>
<tr>
<td>y</td><td>ya</td><td></td>
<td>r</td><td>ra</td><td></td>
<td>l</td><td>la</td><td></td>
<td>ḷ</td><td>La</td><td></td>
<td>v</td><td>va/wa</td>
</tr>
<tr>
<td>ś</td><td>sha</td><td></td>
<td>ṣ</td><td>Sa/Sha</td><td></td>
<td>s</td><td>sa</td><td></td>
<td>h</td><td>ha</td><td></td>
<td>k</td><td>k</td>
</tr>
<tr>
<td>kṣ</td><td>xa/kSa</td><td></td>
<td>ṛ</td><td>.r</td>
<td>ḻ</td><td>LH</td>
<td>z</td><td>z</td>
<td>f</td><td>f</td>
</tr>
</tbody>
</table>

<h2>Vowels and Vowel Signs</h2>

<p>In the following table, vowels on their own and vowels combined with the 
consonant 'k' are shown in OPTITRANS transliteration scheme on the top two rows. 
The third row shows ISO 15919 vowels. The fourth row shows the vowel combined 
with the consonant 'k'. 'ka' needs no special key sequence, as the vowel 'a' 
is simply typed after the consonant.</p>
<p>Unlike the Indic-script versions of this keyboard, every key sequence below 
directly produces complete Latin letters; there are no bare vowel signs.</p>
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
<td>a</td><td>a</td>
<td>ā</td><td>ā</td>
<td>i</td><td>i</td>
<td>ī</td><td>ī</td>
<td>u</td><td>u</td>
<td>ū</td><td>ū</td>
<td>r̥</td><td>r̥</td>
<td>r̥̄</td><td>r̥̄</td>
<td>l̥</td><td>l̥</td>
<td>l̥̄</td><td>l̥̄</td>
<td>ē</td><td>ē</td>
<td>ai</td><td>ai</td>
<td>ō</td><td>ō</td>
<td>au</td><td>au</td>
</tr>
<tr>
<td>a</td><td>ka</td>
<td>ā</td><td>kā</td>
<td>i</td><td>ki</td>
<td>ī</td><td>kī</td>
<td>u</td><td>ku</td>
<td>ū</td><td>kū</td>
<td>r̥</td><td>kr̥</td>
<td>r̥̄</td><td>kr̥̄</td>
<td>l̥</td><td>kl̥</td>
<td>l̥̄</td><td>kl̥̄</td>
<td>ē</td><td>kē</td>
<td>ai</td><td>kai</td>
<td>ō</td><td>kō</td>
<td>au</td><td>kau</td>
</tr>
</tbody>
</table>


<p>The following table shows the same consonants again, each with the inherent vowel <samp>a</samp>.
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
    <tbody>
    <tr>
        <td>k</td><td>ka</td><td></td>
        <td>kh</td><td>Ka/kha</td><td></td>
        <td>g</td><td>ga</td><td></td>
        <td>gh</td><td>Ga/gha</td><td></td>
        <td>ṅ</td><td>~Na</td>
    </tr>
    <tr>
        <td>c</td><td>ca/cha</td><td></td>
        <td>ch</td><td>Ca/Cha</td><td></td>
        <td>j</td><td>ja</td><td></td>
        <td>jh</td><td>Ja/jha</td><td></td>
        <td>ñ</td><td>~na</td>
    </tr>
    <tr>
        <td>ṭ</td><td>Ta</td><td></td>
        <td>ṭh</td><td>Tha</td><td></td>
        <td>ḍ</td><td>Da</td><td></td>
        <td>ḍh</td><td>Dha</td><td></td>
        <td>ṇ</td><td>Na</td>
    </tr>
    <tr>
        <td>t</td><td>ta</td><td></td>
        <td>th</td><td>tha</td><td></td>
        <td>d</td><td>da</td><td></td>
        <td>dh</td><td>dha</td><td></td>
        <td>n</td><td>na</td>
    </tr>
    <tr>
        <td>p</td><td>pa</td><td></td>
        <td>ph</td><td>pha</td><td></td>
        <td>b</td><td>ba</td><td></td>
        <td>bh</td><td>bha</td><td></td>
        <td>m</td><td>ma</td>
    </tr>
    <tr>
    </tr>
    <tr>
        <td>y</td><td>ya</td><td></td>
        <td>r</td><td>ra</td><td></td>
        <td>l</td><td>la</td><td></td>
        <td>ḷ</td><td>La</td><td></td>
        <td>v</td><td>va/wa</td>
    </tr>
    <tr>
        <td>ś</td><td>sha</td><td></td>
        <td>ṣ</td><td>Sa/Sha</td><td></td>
        <td>s</td><td>sa</td><td></td>
        <td>h</td><td>ha</td><td></td>
        <td>k</td><td>k</td>
    </tr>
    <tr>
        <td>kṣ</td><td>xa/kSa</td><td></td>
        <td>ṛ</td><td>.r</td>
        <td>ḻ</td><td>LH</td>
        <td>z</td><td>z</td>
        <td>f</td><td>f</td>
    </tr>
    </tbody>
</table>

<h2>Consonantal Diacritics</h2>

<p>Arranged with the vowels are two consonantal diacritics, the final nasal anusvāra ṃ 
<kbd>M</kbd> and the final fricative visarga ḥ <kbd>H</kbd> (called aṃ and aḥ). 
Another diacritic used in transcribing other languages is the 
candrabindu/anunāsika m̐ <kbd>.</kbd><kbd>N</kbd> (am̐). These consonantal diacritics follow the 
vowel signs including the implicit `a`. The following table shows consonant `k` followed by 
various vowels and the consonantal diacritics ṃ and ḥ.

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
        <td>kṃ</td>
        <td>kāṃ</td>
        <td>kiṃ</td>
        <td>kīṃ</td>
        <td>kuṃ</td>
        <td>kūṃ</td>
        <td>kr̥ṃ</td>
        <td>kr̥̄ṃ</td>
        <td>kl̥ṃ</td>
        <td>kl̥̄ṃ</td>
        <td>kēṃ</td>
        <td>kaiṃ</td>
        <td>kōṃ</td>
        <td>kauṃ</td>
    </tr>
    <tr>
        <td><strong>H</strong></td>
        <td>kḥ</td>
        <td>kāḥ</td>
        <td>kiḥ</td>
        <td>kīḥ</td>
        <td>kuḥ</td>
        <td>kūḥ</td>
        <td>kr̥ḥ</td>
        <td>kr̥̄ḥ</td>
        <td>kl̥ḥ</td>
        <td>kl̥̄ḥ</td>
        <td>kēḥ</td>
        <td>kaiḥ</td>
        <td>kōḥ</td>
        <td>kauḥ</td>
    </tr>
    <tr>
        <td><strong>.N</strong></td>
        <td>km̐</td>
        <td>kām̐</td>
        <td>kim̐</td>
        <td>kīm̐</td>
        <td>kum̐</td>
        <td>kūm̐</td>
        <td>kr̥m̐</td>
        <td>kr̥̄m̐</td>
        <td>kl̥m̐</td>
        <td>kl̥̄m̐</td>
        <td>kēm̐</td>
        <td>kaim̐</td>
        <td>kōm̐</td>
        <td>kaum̐</td>
    </tr>
    </tbody>
</table>

<h2>Conjuncts</h2>

<p>There are no conjuncts in romanization: <kbd>k</kbd> <kbd>t</kbd> 
simply produces <samp>kt</samp>. 

<h3>No virama</h3>

<p>Romanization has no halanta to mark, so the <kbd>.h</kbd> sequence from the 
Indic-script versions does nothing special here: it produces the literal text 
<samp>.h</samp>.</p>

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
<li>Press the number keys to type Arabic digits directly. For example <kbd>9</kbd> produces <samp>9</samp>.</li>
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
<tr> <td><kbd>OM</kbd></td> <td><samp>ōṁ</samp></td> <td>OM</td></tr>
<tr> <td><kbd>.a</kbd></td> <td><samp>’</samp></td> <td> AVAGRAHA</td></tr>
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
<tr> <td><kbd>!</kbd><kbd>!</kbd></td> <td><samp>́</samp></td> <td>COMBINING ACUTE ACCENT (UDATTA)</td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd></td> <td><samp>̋</samp></td> <td>COMBINING DOUBLE ACUTE (SVATANTRA SVARITA, approximate)</td></tr>
<tr> <td><kbd>_</kbd></td> <td><samp>̀</samp></td> <td>COMBINING GRAVE ACCENT (ANUDATTA)</td></tr>
<tr> <td><kbd>p</kbd><kbd>H</kbd></td> <td><samp>ḫ</samp></td> <td>VEDIC SIGN UPADHMANIYA</td></tr>
<tr> <td><kbd>k</kbd><kbd>H</kbd></td> <td><samp>ẖ</samp></td> <td>VEDIC SIGN JIHVAMULIYA</td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd></td> <td><samp>́</samp></td> <td>COMBINING ACUTE ACCENT (UDATTA)</td></tr>
</tbody>
</table>
</center>

