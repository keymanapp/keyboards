<?php
  $pagename = 'Punjabi/Gurmukhi Phonetic (ITRANS)';
  $pagetitle = 'Punjabi/Gurmukhi Phonetic (ITRANS)';
  $pagestyle = <<<END
    samp {font-family: font-size:20pt;   }
    kbd {color:black; font: serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
    .inputSequences {border-collapse: collapse;font-size: 14px;min-width: 592px;}
    .inputSequences th, .inputSequences td {padding: 7px 17px;}
    .inputSequences thead th {border-bottom: 2px solid #6ea1cc;text-transform: uppercase;}
    .inputSequences tbody td {border-bottom: 1px solid #e1edff;color: #353535;text-align: center;}
    .inputSequences tbody tr:nth-child(odd) td {background-color: #f4fbff;}
    .inputSequences tbody tr:hover td {background-color: #ffffa2;border-color: #ffff0f;}
END;
  require_once('header.php');
?>

<p>This is a phonetic keyboard layout for Punjabi and Sindhi languages written in Gurmukhi script. It is based on 
<strong><a href="https://www.aczoom.com/itrans/">ITRANS</a></strong> transliteration scheme 
with some modifications. You can phonetically type using the modified ITRANS scheme on a 
regular QWERTY keyboard and get Gurmukhi Unicode output.</p>
<p>For example, type <kbd>hindI</kbd> for ਹਿਨ੍ਦੀ, <kbd>gujarAtI</kbd> for ਗੁਜਰਾਤੀ.</p>

<h3>Keyboard layouts</h3>
<p>The default and shifted layouts cover digits, consonants, vowels and other commonly used characters.</p>

<center>
<p>
<img src="itrans_gurmukhi.png" alt="ITRANS Gurmukhi keyboard layouts" />
</p>
</center>

<h3>Gurmukhi Alphabet</h3>
<p>The following table shows the English letters to type to get the Gurmukhi Alphabet. 
The first three letters of the alphabet are the base for forming the independent vowels 
using the dependent vowel signs. </p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>ੳ (ura)</td> <td>$</td> <td>|</td>
<td>ਅ(aim)</td> <td>a</td> <td>|</td>
<td>ੲ (iri)</td> <td>%</td> <td>|</td>
<td>ਸ</td> <td>sa</td> <td>|</td>
<td>ਹ</td> <td>ha</td>
</tr>
<tr>
<td>ਕ</td> <td>ka</td> <td>|</td>
<td>ਖ</td> <td>Ka/kha</td> <td>|</td>
<td>ਗ</td> <td>ga</td> <td>|</td>
<td>ਘ</td> <td>Ga/gha</td> <td>|</td>
<td>ਙ</td> <td>~Na/Nga</td>
</tr>
<tr>
<td>ਚ</td> <td>ca/cha</td> <td>|</td>
<td>ਛ</td> <td>Ca/Cha</td> <td>|</td>
<td>ਜ</td> <td>ja</td> <td>|</td>
<td>ਝ</td> <td>Ja/jha</td> <td>|</td>
<td>ਞ</td> <td>~na/Ya</td>
</tr>
<tr>
<td>ਟ</td> <td>Ta</td> <td>|</td>
<td>ਠ</td> <td>Tha</td> <td>|</td>
<td>ਡ</td> <td>Da</td> <td>|</td>
<td>ਢ</td> <td>Dha</td> <td>|</td>
<td>ਣ</td> <td>Na</td>
</tr>
<tr>
<td>ਤ</td> <td>ta</td> <td>|</td>
<td>ਥ</td> <td>tha</td> <td>|</td>
<td>ਦ</td> <td>da</td> <td>|</td>
<td>ਧ</td> <td>dha</td> <td>|</td>
<td>ਨ</td> <td>na</td>
</tr>
<tr>
<td>ਪ</td> <td>pa</td> <td>|</td>
<td>ਫ</td> <td>pha</td> <td>|</td>
<td>ਬ</td> <td>ba</td> <td>|</td>
<td>ਭ</td> <td>bha</td> <td>|</td>
<td>ਮ</td> <td>ma</td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td>ਯ</td> <td>ya</td> <td>|</td>
<td>ਰ</td> <td>ra</td> <td>|</td>
<td>ਲ</td> <td>la</td> <td>|</td>
<td>ਵ</td> <td>va</td> <td>|</td>
<td>ੜ</td> <td>Ra</td> 
</tr>

</tbody>
</table>

<h3>Combining Marks</h3>
<p>The combining marks, nukta, addak, udaat, should occur after the consonant to which they attach, and before any vowel sign.
<li>Ṭippi ( ੰ ) and bindi ( ਂ ) are used for producing a nasal phoneme depending on the following obstruent or a nasal vowel at the end of a word. All short vowels utilise ṭippi and all long vowels are paired with bindi except for Dulankar ( ੂ ) which uses ṭippi instead. <kbd>M</kbd> will choose the correct form based on context.
<li>The use of addak ( ੱ ) indicates that the following consonant is geminate. This means that the subsequent consonant is doubled or reinforced.
<li>The visarg symbol (ਃ U+0A03) is used very occasionally in Gurmukhi. 
<li>The udaat symbol (ੑ U+0A51) occurs in older texts and indicates a high tone.
<li>The virama (੍) character is not used when writing Punjabi in Gurmukhi, except for Sanskritized words. Virama (੍) when followed by ਰ(r), ਵ(v) and ਹ(h) makes subscript letters.
</p>

<h3>Consonants with nukta (pairī̃ bindi, or "dot at the foot")</h3>
<p>There are six consonants created by placing a dot (bindi) at the foot (pair) of the consonant. These should be entered as follows:
</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>ਸ਼</td> <td>Sa/sha</td> <td>|</td>
<td>ਖ਼</td> <td>xa</td> <td>|</td>
<td>ਗ਼</td> <td>qa</td> <td>|</td>
<td>ਜ਼</td> <td>za</td> <td>|</td>
<td>ਫ਼</td> <td>fa</td> <td>|</td>
<td>ਲ਼</td> <td>La</td> 
</tr>
</tbody>
</table>

<h3>Subscript letters (pairī̃ akkhar, or "letters at the foot")</h3>
<p>Some Punjabi words require consonants to be written in a conjunct form, 
which takes the shape of a subscript to the main letter. The second consonant is 
written under the first as a subscript. There are only three commonly used 
subjoined letters. The subscript ਰ(r) and ਵ(v) are used to make consonant clusters 
and behave similarly; subjoined ਹ(h) raises tone. 
There is also a half-form of the letter ਯ(y) used exclusively for Sanskrit borrowings, 
which is referred to as yakash, <samp></samp>. 
Udaat <samp>ੑ</samp> is used in older texts to indicate a high tone.</p>
<p>When following the ITRANS transliteration scheme, the subscript letters are formed automatically. 
e.g. typing <kbd>pr</kbd> will output <samp>ਪ੍ਰ</samp>.
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr><td>|</td><td>੍ਰ</td><td>|</td><td>Virama r</td><td>|</td><td>pairī̃ rāarāa</td><td>|</td></tr>
<tr><td>|</td><td>੍ਹ</td><td>|</td><td>Virama h</td><td>|</td><td>pairī̃ hāahāa - tone</td><td>|</td></tr>
<tr><td>|</td><td>ੑੵ</td><td>|</td><td>w</td><td>|</td><td>udaat - high tone</td><td>|</td></tr>
<tr><td>|</td><td>੍ਵ</td><td>|</td><td>Virama v</td><td>|</td><td>pairī̃ vāavāa - used rarely</td><td>|</td></tr>
<tr><td>|</td><td>ੵ</td><td>|</td><td>&</td><td>|</td><td>yakash - used rarely</td><td>|</td></tr>
</tbody>
</table>

<h3>Vowels and Vowel Signs</h3>
<p>In Punjabi, independent vowels are represented by dependent vowels carried by the first three letters of the Gurmukhi alphabet.</p>
<p>In the following table, independent vowels, dependent vowel signs and vowel signs combined with 
the consonant `k` are shown in ITRANS transliteration scheme and in Gurmukhi script. 
The second row shows Vowels in their independent form and the third row shows their corresponding dependent 
form (maatraa or vowel sign). If there is a need to type ONLY the vowel signs, it can be done 
using `@` instead of a consonant. e.g. <kbd>@A</kbd> will output <samp>ਾ</samp>, 
<kbd>@ai</kbd> will output <samp>ੈ</samp>.</p>
<p>The fourth row shows the vowel sign combined with the 
consonant `k` in ITRANS and the fifth in Gurmukhi script. 
`ka` is without any added vowel sign, where the vowel `a` is inherent.</p>
<p>

<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>a</th>
<th>aa/A</th>
<th>i</th>
<th>ii/I/ee</th>
<th>u</th>
<th>uu/U/oo</th>
<th>e</th>
<th>ai/ei</th>
<th>o</th>
<th>au/ou</th>
</tr>
</thead>
<tr>
<td>ਅ</td>
<td>ਆ</td>
<td>ਇ</td>
<td>ਈ</td>
<td>ਉ</td>
<td>ਊ</td>
<td>ਏ</td>
<td>ਐ</td>
<td>ਓ</td>
<td>ਔ</td>
</tr>
<tr>
<td></td>
<td>ਾ</td>
<td>ਿ</td>
<td>ੀ</td>
<td>ੁ</td>
<td>ੂ</td>
<td>ੇ</td>
<td>ੈ</td>
<td>ੋ</td>
<td>ੌ</td>
</tr>
</table>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>ka</th>
<th>kA</th>
<th>ki</th>
<th>kI</th>
<th>ku</th>
<th>kU</th>
<th>ke</th>
<th>kai</th>
<th>ko</th>
<th>kau</th>
</tr>
</thead>
<tr>
<td>ਕ</td>
<td>ਕਾ</td>
<td>ਕਿ</td>
<td>ਕੀ</td>
<td>ਕੁ</td>
<td>ਕੂ</td>
<td>ਕੇ</td>
<td>ਕੈ</td>
<td>ਕੋ</td>
<td>ਕੌ</td>
</tr>
</table>


<p>The consonantal diacritics follow the vowel signs including the implicit ’a’. The following table shows consonant ’k’ followed by
various dependent vowel signs and consonantal diacritics.</p>
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
<th>ke</th>
<th>kai</th>
<th>ko</th>
<th>kau</th>
</tr>
</thead>
<tbody>
<tr>
<td><kbd>M</kbd> TIPPI/BINDI</td>
<td>ਕੰ</td>
<td>ਕਾਂ</td>
<td>ਕਿੰ</td>
<td>ਕੀਂ</td>
<td>ਕੁੰ</td>
<td>ਕੂੰ</td>
<td>ਕੇੰ</td>
<td>ਕੈਂ</td>
<td>ਕੋੰ</td>
<td>ਕੌਂ</td>
</tr>
<tr>
<td><kbd>&gt;</kbd> ADDAK</td>
<td>ਕੱ</td>
<td>ਕਾੱ</td>
<td>ਕਿੱ</td>
<td>ਕੀੱ</td>
<td>ਕੁੱ</td>
<td>ਕੂੱ</td>
<td>ਕੇੱ</td>
<td>ਕੈੱ</td>
<td>ਕੋੱ</td>
<td>ਕੌੱ</td>
</tr>
<tr>
<td><kbd>MM</kbd> ADAK BINDI </td>
<td>ਕਁ</td>
<td>ਕਾਁ</td>
<td>ਕਿਁ</td>
<td>ਕੀਁ</td>
<td>ਕੁਁ</td>
<td>ਕੂਁ</td>
<td>ਕੇਁ</td>
<td>ਕੈਁ</td>
<td>ਕੋਁ</td>
<td>ਕੌਁ</td>
</tr>
</tbody>
</table>

<h3>Punctuation</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Keys Input</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr><td><kbd>,</kbd></td><td><samp>,</samp></td><td>Comma</td></tr>
<tr> <td><kbd>,</kbd><kbd>,</kbd></td> <td><samp>૰</samp></td> <td>Gurmukhi Abbreviation Sign</td></tr>
<tr><td><kbd>.</kbd></td><td><samp>.</samp></td><td>Period</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd></td> <td><samp>।</samp></td> <td>DanDaa</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd></td> <td>॥</samp></td> <td>Double DanDaa</td></tr>
<tr><td><kbd>-</kbd></td><td><samp>-</samp></td><td>Dash</td></tr>
<tr><td><kbd>-</kbd><kbd>-</kbd></td><td><samp>–</samp></td><td>En Dash</td></tr>
<tr><td><kbd>-</kbd><kbd>-</kbd><kbd>-</kbd></td><td><samp>—</samp></td><td>Em Dash</td></tr>
</tbody>
</table>

<h3>Numbers</h3>
<ol>
<li>Press the number keys to type Gurmukhi digits. for example <kbd>9</kbd> produces 
<samp>੯</samp>.</li>
<li>For typing the Arabic digits, press the number keys and then the backspace key, for example 
<kbd>9</kbd> <kbd>Back space</kbd> produces <samp>9</samp>.</li>
</ol>

<h3>Special Symbols</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Key</th><th>Output Character</th><th>Comment</th></tr>
</thead>
<tbody>
<tr><td><kbd>#</kbd></td><td><samp>ੴ</samp></td><td>ek onkar SIGN</td></tr>
<tr><td><kbd>$</kbd></td><td><samp>ੲ</samp></td><td>iri SIGN</td></tr>
<tr> <td><kbd>%</kbd></td> <td><samp>ੳ</samp></td> <td>ura SIGN</td></tr>
<tr><td><kbd>*</kbd></td><td><samp>☬</samp></td><td>khanda SIGN</td></tr>
</tbody>
</table>

<hr>
<p> Note: Gurmukhi script related information is taken from the following web pages:</p>
<ul>
<li><a href="https://en.wikipedia.org/wiki/Gurmukhi">https://en.wikipedia.org/wiki/Gurmukhi</a></li>
<li><a href="http://www.discoversikhism.com/punjabi/punjabi_gurmukhi_alphabet.html">http://www.discoversikhism.com/punjabi/punjabi_gurmukhi_alphabet.html</a></li>
<li><a href="https://r12a.github.io/scripts/gurmukhi/">https://r12a.github.io/scripts/gurmukhi/</a></li>
<li><a href="http://www.alanwood.net/unicode/gurmukhi.html">http://www.alanwood.net/unicode/gurmukhi.html</a></li>
</ul>
<hr>

