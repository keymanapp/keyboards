<?php
  $pagename = 'Tamil Subscripted Sanskrit Phonetic (OPTITRANS) ';
  $pagetitle = 'Tamil Subscripted Sanskrit Phonetic (OPTITRANS) ';
  $pagestyle = <<<END
    samp {font-family: Noto Sans Tamil Black; font-size:20pt;   }
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
<p>Tamil Subscripted Sanskrit Phonetic (OPTITRANS) keyboard is Tamil-subscripted Sanskrit input method by a modified version of OPTITRANS and Harvard-Kyoto transliteration systems (see tamil_subscripted.toml).
<p>You can use all the standard ITRANS key sequences plus key
    sequences such as the below.</p>
<p>nk-&gt;ங்க், nkh-&gt;ங்க்₂, ng-&gt;ங்க்₃, ngh-&gt;ங்க்₄
    nch-&gt;ஞ்ச், nCh-&gt;ஞ்ச்₂, nc-&gt;ஞ்ச், nC-&gt;ஞ்ச்₂, nchh-&gt;ஞ்ச்₂,
    nj-&gt;ஞ்ஜ், njh-&gt;ஞ்ஜ்₂, nT-&gt;ண்ட், nTh-&gt;ண்ட்₂, nD-&gt;ண்ட்₃, nDh-&gt;ண்ட்₄
    c-&gt;ச், C-&gt;ச்₂, z-&gt;ஃஜ், S-&gt;ஷ், jn-&gt;ஜ்ஞ், R-&gt;ரு₂</p>
<p>Examples: Type <code>saMskRta</code> for ஸம்₂ஸ்க்ரு₂த.</p>
<h2 id="details">Details</h2>
<ul>
    <li>The closely related m17n keyboard <a href="https://github.com/indic-transliteration/indic_transliteration_py/indic_transliteration/sanscript/schemes/data/brahmic/tamil_subscripted.toml">here</a></li>
    <li>The motivation behind some basic additions made to the basic ITRANS scheme is described <a href="https://sanskrit-coders.github.io/input/optitrans/">here</a>, along with a tabulated comparison with several other transliteration schemes.</li>
</ul>

<h3>Consonants</h3>

<p>The following table shows the English letters to type to get Tamil consonants. e.g. type <kbd>k</kbd> for <samp>க்</samp>, <kbd>ka</kbd> for <samp>க</samp>, <kbd>R</kbd> for <samp>ரு₂</samp>, <kbd>RR</kbd> for <samp>ரூ₂</samp>, <kbd>LLi</kbd> for <samp>லு₂</samp>, etc.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>க்</td><td>ka</td><td></td>
<td>க்₂</td><td>Ka/kha</td><td></td>
<td>க்₃</td><td>ga</td><td></td>
<td>க்₄</td><td>Ga/gha</td><td></td>
<td>ங</td><td>~Na</td>
</tr>
<tr>
<td>ச்</td><td>ca/cha</td><td></td>
<td>ச்₂</td><td>Ca/Cha</td><td></td>
<td>ஜ்</td><td>ja</td><td></td>
<td>ஜ்₂</td><td>Ja/jha</td><td></td>
<td>ஞ</td><td>~na</td>
</tr>
<tr>
<td>ட்</td><td>Ta</td><td></td>
<td>ட்₂</td><td>Tha</td><td></td>
<td>ட்₃</td><td>Da</td><td></td>
<td>ட்₄</td><td>Dha</td><td></td>
<td>ண</td><td>Na</td>
</tr>
<tr>
<td>த்</td><td>ta</td><td></td>
<td>த்₂</td><td>tha</td><td></td>
<td>த்₃</td><td>da</td><td></td>
<td>த்₄</td><td>dha</td><td></td>
<td>ந</td><td>na</td>
</tr>
<tr>
<td>ப்</td><td>pa</td><td></td>
<td>ப்₂</td><td>pha</td><td></td>
<td>ப்₃</td><td>ba</td><td></td>
<td>ப்₄</td><td>bha</td><td></td>
<td>ம</td><td>ma</td>
</tr>
<tr>
</tr>
<tr>
<td>ய</td><td>ya</td><td></td>
<td>ர</td><td>ra</td><td></td>
<td>ல</td><td>la</td><td></td>
<td>ள</td><td>La</td><td></td>
<td>வ</td><td>va/wa</td>
</tr>
<tr>
<td>ஶ</td><td>sha</td><td></td>
<td>ஷ</td><td>Sa/Sha</td><td></td>
<td>ஸ</td><td>sa</td><td></td>
<td>ஹ</td><td>ha</td><td></td>
<td>க்</td><td>k</td>
</tr>
<tr>
<td>க்ஷ</td><td>xa/kSa</td><td></td>
<td>ற்</td><td>rH</td>
<td>ழ்</td><td>LH</td>
<td>ஃஜ்</td><td>z</td>
<td>ஃப்</td><td>f</td>
</tr>
</tbody>
</table>

<h2>Vowels and Vowel Signs</h2>

<p>In the following table, vowels on their own and vowels combined with the 
consonant 'k' are shown in OPTITRANS transliteration scheme on the top two rows. 
The third row shows Tamil vowels. The fourth row shows the vowel combined 
with the consonant 'k'. 'ka' needs no special key sequence, as the vowel 'a' 
is simply typed after the consonant.</p>
<p>Aspirated and voiced consonants (kha, gha and the like) carry subscript 
numerals that move to the end of the akshara when vowels are added: 
e.g. <kbd>g</kbd> <kbd>e</kbd> produces <samp>கெ₃</samp>.</p>
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
<td>அ</td><td></td>
<td>ஆ</td><td>ா</td>
<td>இ</td><td>ி</td>
<td>ஈ</td><td>ீ</td>
<td>உ</td><td>ு</td>
<td>ஊ</td><td>ூ</td>
<td>ரு₂</td><td>்ரு₂</td>
<td>ரூ₂</td><td>்ரூ₂</td>
<td>லு₂</td><td>்லு₂</td>
<td>லூ₂</td><td>்லூ₂</td>
<td>ஏ</td><td>ே</td>
<td>ஐ</td><td>ை</td>
<td>ஓ</td><td>ோ</td>
<td>ஔ</td><td>ௌ</td>
</tr>
<tr>
<td></td><td>க</td>
<td>ஆ</td><td>கா</td>
<td>இ</td><td>கி</td>
<td>ஈ</td><td>கீ</td>
<td>உ</td><td>கு</td>
<td>ஊ</td><td>கூ</td>
<td>ரு₂</td><td>க்ரு₂</td>
<td>ரூ₂</td><td>க்ரூ₂</td>
<td>லு₂</td><td>க்லு₂</td>
<td>லூ₂</td><td>க்லூ₂</td>
<td>ஏ</td><td>கே</td>
<td>ஐ</td><td>கை</td>
<td>ஓ</td><td>கோ</td>
<td>ஔ</td><td>கௌ</td>
</tr>
</tbody>
</table>


<p>The following table shows consonants again, each with the inherent vowel <samp>a</samp>.
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
    <tbody>
    <tr>
        <td>க</td><td>ka</td><td></td>
        <td>க</td><td>Ka/kha</td><td></td>
        <td>க</td><td>ga</td><td></td>
        <td>க</td><td>Ga/gha</td><td></td>
        <td>ங</td><td>~Na</td>
    </tr>
    <tr>
        <td>ச</td><td>ca/cha</td><td></td>
        <td>ச</td><td>Ca/Cha</td><td></td>
        <td>ஜ</td><td>ja</td><td></td>
        <td>ஜ</td><td>Ja/jha</td><td></td>
        <td>ஞ</td><td>~na</td>
    </tr>
    <tr>
        <td>ட</td><td>Ta</td><td></td>
        <td>ட</td><td>Tha</td><td></td>
        <td>ட</td><td>Da</td><td></td>
        <td>ட</td><td>Dha</td><td></td>
        <td>ண</td><td>Na</td>
    </tr>
    <tr>
        <td>த</td><td>ta</td><td></td>
        <td>த</td><td>tha</td><td></td>
        <td>த</td><td>da</td><td></td>
        <td>த</td><td>dha</td><td></td>
        <td>ந</td><td>na</td>
    </tr>
    <tr>
        <td>ப</td><td>pa</td><td></td>
        <td>ப</td><td>pha</td><td></td>
        <td>ப</td><td>ba</td><td></td>
        <td>ப</td><td>bha</td><td></td>
        <td>ம</td><td>ma</td>
    </tr>
    <tr>
    </tr>
    <tr>
        <td>ய</td><td>ya</td><td></td>
        <td>ர</td><td>ra</td><td></td>
        <td>ல</td><td>la</td><td></td>
        <td>ள</td><td>La</td><td></td>
        <td>வ</td><td>va/wa</td>
    </tr>
    <tr>
        <td>ஶ</td><td>sha</td><td></td>
        <td>ஷ</td><td>Sa/Sha</td><td></td>
        <td>ஸ</td><td>sa</td><td></td>
        <td>ஹ</td><td>ha</td><td></td>
        <td>க்</td><td>k</td>
    </tr>
    <tr>
        <td>க்ஷ</td><td>xa/kSa</td><td></td>
        <td>ற்</td><td>rH</td>
        <td>ழ்</td><td>LH</td>
        <td>ஃஜ்</td><td>z</td>
        <td>ஃப்</td><td>f</td>
    </tr>
    </tbody>
</table>

<h2>Consonantal Diacritics</h2>

<p>Arranged with the vowels are two consonantal diacritics, the final nasal anusvāra ம்₂ 
<kbd>M</kbd> and the final fricative visarga ꞉ <kbd>H</kbd> (called அம்₂ aṃ and அ꞉ aḥ). 
Another diacritic used in transcribing other languages is the 
candrabindu/anunāsika ம்₃ <kbd>.</kbd><kbd>N</kbd> (அம்₃). These consonantal diacritics follow the 
vowel signs including the implicit `a`. The following table shows consonant `k` followed by 
various vowels and the consonantal diacritics ம்₂ and ꞉.

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
        <td>கம்₂</td>
        <td>காம்₂</td>
        <td>கிம்₂</td>
        <td>கீம்₂</td>
        <td>கும்₂</td>
        <td>கூம்₂</td>
        <td>க்ரு₂ம்₂</td>
        <td>க்ரூ₂ம்₂</td>
        <td>க்லு₂ம்₂</td>
        <td>க்லூ₂ம்₂</td>
        <td>கேம்₂</td>
        <td>கைம்₂</td>
        <td>கோம்₂</td>
        <td>கௌம்₂</td>
    </tr>
    <tr>
        <td><strong>H</strong></td>
        <td>க꞉</td>
        <td>கா꞉</td>
        <td>கி꞉</td>
        <td>கீ꞉</td>
        <td>கு꞉</td>
        <td>கூ꞉</td>
        <td>க்ரு₂꞉</td>
        <td>க்ரூ₂꞉</td>
        <td>க்லு₂꞉</td>
        <td>க்லூ₂꞉</td>
        <td>கே꞉</td>
        <td>கை꞉</td>
        <td>கோ꞉</td>
        <td>கௌ꞉</td>
    </tr>
    <tr>
        <td><strong>.N</strong></td>
        <td>கம்₃</td>
        <td>காம்₃</td>
        <td>கிம்₃</td>
        <td>கீம்₃</td>
        <td>கும்₃</td>
        <td>கூம்₃</td>
        <td>க்ரு₂ம்₃</td>
        <td>க்ரூ₂ம்₃</td>
        <td>க்லு₂ம்₃</td>
        <td>க்லூ₂ம்₃</td>
        <td>கேம்₃</td>
        <td>கைம்₃</td>
        <td>கோம்₃</td>
        <td>கௌம்₃</td>
    </tr>
    </tbody>
</table>

<h2>Conjuncts</h2>

<p>Consonant clusters are automatically formed,  e.g. <kbd>k</kbd> <kbd>t</kbd> 
produces <samp>க்த்</samp>. 

<h3>Explicit pulli</h3>

<p>To force an explicit pulli at end of word, use <kbd>.h</kbd> e.g. <kbd>k</kbd> 
<kbd>t</kbd> <kbd>.h</kbd> <kbd>space</kbd> produces <samp>க்த்த் </samp>.</p>

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
<tr> <td><kbd>,</kbd><kbd>.</kbd></td> <td><samp>..</samp></td> <td>Double DanDaa</td></tr>
<tr> <td><kbd>-</kbd><kbd>-</kbd></td> <td><samp>–</samp></td> <td>En Dash</td></tr>
<tr> <td><kbd>-</kbd><kbd>-</kbd><kbd>-</kbd></td> <td><samp>—</samp></td> <td>Em Dash</td></tr>
</tbody>
</table>
<h2>Numbers</h2>
<ol>
<li>Press the number keys to type Tamil digits. for example <kbd>9</kbd> produces <samp>௯</samp>.</li>
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
<tr> <td><kbd>OM</kbd></td> <td><samp>ௐ</samp></td> <td>OM</td></tr>
<tr> <td><kbd>.a</kbd></td> <td><samp>(அ)</samp></td> <td> AVAGRAHA</td></tr>
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
<tr> <td><kbd>!</kbd><kbd>!</kbd></td> <td><samp>॑</samp></td> <td>VEDIC SVARITA</td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳙</samp></td> <td>VEDIC TONE SVATANTRA SVARITA</td></tr>
<tr> <td><kbd>_</kbd></td> <td><samp>॒</samp></td> <td>DEVANAGARI STRESS SIGN ANUDATTA</td></tr>
<tr> <td><kbd>p</kbd><kbd>H</kbd></td> <td><samp>ᳶ</samp></td> <td>VEDIC SIGN UPADHMANIYA</td></tr>
<tr> <td><kbd>k</kbd><kbd>H</kbd></td> <td><samp>ᳵ</samp></td> <td>VEDIC SIGN JIHVAMULIYA</td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳓</samp></td> <td>VEDIC SIGN NIHSHVASA (also used for udAtta)</td></tr>
</tbody>
</table>
</center>

