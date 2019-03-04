<?php
  $pagename = 'Polytonic Greek (SIL) Keyboard Help';
  $pagetitle = 'Polytonic Greek (SIL) Keyboard Help';
  $pagestyle = <<<END
  div, p, li { margin-bottom: 8px }
  table.inputSequences {border: 1px solid #1C6EA4;background-color: #FFFFFF;text-align: left;}
  table.inputSequences td, table.inputSequences th {border: 1px solid #FFFFFF;padding: 3px 2px;}
  table.inputSequences tr:nth-child(even) {background: #D0E4F5;}
  table.inputSequences thead {background: #1C6EA4;background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);border-bottom: 2px solid #444444;}
  table.inputSequences thead th {font-weight: bold;color: #FFFFFF;border-left: 4px solid #D0E4F5;}
  table.inputSequences thead th:first-child {border-left: none;}
  table.inputSequences tfoot td {font-size: 14px;}
  table.inputSequences tfoot .links {text-align: right;}
  table.inputSequences tfoot .links a{display: inline-block;background: #1C6EA4;color: #FFFFFF;padding: 2px 8px;border-radius: 5px;}
  th {width: 100px;}
  td { width: 60px;}
  tr.glyphs td { font-size: 1.1em;}
  span[lang=grc] {font-style:italic;}
  table+table {margin-top: 1.0em;}
END;
  require_once('header.php');
?>





<h2>General layout</h2>

<p><img alt="Normal (default keyboard state)" src="sil_greek_polytonicU_.png"></p>
<p><img alt="Shift state" src="sil_greek_polytonicU_S.png"></p>

<h2>Keyboard Assignments</h2>
<p>The main purpose of the keyboards is to provide a wide range of keying options, so many characters can be entered in multiple ways. If you are typing and make a mistake and use the backspace key to delete characters, the keyboard remembers the context.</p>

<h3>Letters</h3>
<table class="inputSequences">
    <tbody>
        <tr class="glyphs">
            <th>Character:</th>
            <td>α</td>
            <td>β</td>
            <td>γ</td>
            <td>δ</td>
            <td>ε</td>
            <td>ζ</td>
            <td>η</td>
            <td>θ</td>
            <td>ι</td>
            <td>κ</td>
            <td>λ</td>
            <td>μ</td>
            <td>ν</td>
            <td>ξ</td>
        </tr>
        <tr>
            <th>Type:</th>
            <td>a</td>
            <td>b</td>
            <td>g</td>
            <td>d</td>
            <td>e</td>
            <td>z</td>
            <td>j, e=, e~ or e^</td>
            <td>q or th</td>
            <td>i</td>
            <td>k</td>
            <td>l</td>
            <td>m</td>
            <td>n</td>
            <td>x</td>
        </tr>
    </tbody>
</table>

<table class="inputSequences">
    <tbody>
        <tr class="glyphs">
            <th>Character:</th>
<td>ο</td>
<td>π</td>
<td>ρ</td>
<td>σ, ς</td>
<td>τ</td>
<td>υ</td>
<td>φ</td>
<td>χ</td>
<td>ψ</td>
<td>ω</td>
</tr>
<tr>
    <th>Type:</th>
    <td>o</td>
    <td>p</td>
    <td>r</td>
    <td>s</td>
    <td>t</td>
    <td>u</td>
    <td>f or ph</td>
    <td>c , ch or kh</td>
    <td>y or ps</td>
    <td>w , o= , o~ or o^</td>
</tr>
</tbody>
</table>

<p>The keyboard automatically chooses the correct code for the <em>sigma</em> depending upon the encoding and the context, so the correct final form is used when appropriate.</p>

<table class="inputSequences">
    <tbody>
        <tr class="glyphs">
            <th>Characters</th>
            <td>γγ</td>
            <td>γκ</td>
            <td>γξ</td>
            <td>γχ</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>ngg</td>
            <td>nk</td>
            <td>nx</td>
            <td>nc(h)</td>
        </tr>
    </tbody>
</table>

<p>When <em>gamma</em> occurs before another <em>gamma</em>, it can be typed as <b class="input">ng</b>, meaning that <span lang="grc">ἀγγελος</span> can be typed (space) <b class="input">anggelos</b>. When <em>gamma</em> occurs before <em>kappa</em>, <em>xi</em> or <em>chi</em>, it can be typed as <b class="input">n</b>. Note that <b class="input">ng</b> alone produces <em>νγ,</em> as in <span lang="grc">μενουνγε</span>.</p>


<h3>Diacritics</h3>

<table class="inputSequences">
    <tbody>
        <tr class="glyphs">
            <th>Characters</th>
<td>ά</td>
<td>ᾶ</td>
<td>ὰ</td>
<td>ᾳ</td>
<td>ϊ</td>
</tr>
<tr>
    <th>Type</th>
    <td>' or /</td>
    <td>^ , ~ or =</td>
    <td>` or \</td>
    <td>!, | , + or _</td>
    <td>"</td>
</tr>
</tbody>
</table>

<p>Diacritics are usually typed after vowels, but may also be typed before word-initial vowels and should be typed before uppercase letters. They can be combined in any order. If you accidentally type the wrong diacritic, you can change it by typing the correct one immediately.</p>

<h3>Breath Marks</h3>
<table class="inputSequences">
    <tbody>
        <tr class="glyphs">
            <th>Characters</th>
<td>ἀ</td>
<td>ἁ</td>
</tr>
<tr>
    <th>Type</th>
<td>&gt;</td>
<td>h or &lt;</td>
</tr>
</tbody>
</table>

<p>A smooth breathing is automatically added to a word-initial vowel and a rough breathing to a word-initial <em>rho</em>. To get a rough breathing on an initial vowel, type <b class="input">h</b>, e.g. <b class="input">huper</b> for <span lang="grc">ὑπερ</span>         . If you type a word that is all uppercase, the initial breathing mark is automatically removed.</p>

<p>Like other diacritics, they are usually typed after vowels, but may be typed before word-initial vowels. They can also be combined with other diacritics by typing them in any order after the base character. If you type a diphthong, any breath marks and accents on the first vowel are correctly moved to the second vowel.</p>

<p>For example, to type <span lang="grc">Οὐκ εἰμι ἐγω ὁ Χριστος. (ΙΩΑΝΝΗΝ 3 28)</span> you only need to press the following keys:<br>
<b class="input">O u k SPACE e i m i SPACE e g w SPACE h o SPACE C r i s t o s PERIOD SPACE ( I W A N N J N SPACE 3 : 2 8 )</b></p>

<p>You can also press <b class="input">*</b> to remove the breathing mark from a vowel or <em>rho</em>.</p>
<p>In a few words, a vowel with <em>dieresis</em> follows an accented vowel. You will need to type <b class="input">@</b> before
the vowel with <em>dieresis<em> to get the right behavior. For example, to get <span lang="grc">Ἰάϊρος</span>, type <b class="input">Ia/@i"ros</b>.</p>


<h3>Punctuation</h3>
<table class="inputSequences">
    <tbody>
        <tr class="glyphs">
            <th>Characters</th>
            <td>,</td>
            <td>.</td>
            <td>;</td>
            <td> ̓</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>,</td>
            <td>.</td>
            <td>:</td>
            <td>; or ?</td>
            <td>' ' (two)</td>
        </tr>
    </tbody>
</table>

 <p>To type an apostrophe following a vowel (as in <span lang="grc">δι ̓ αὐτοῦ</span>) press the quote key twice.</p>

<h3>Other Characters</h3>

<p>The following characters are available for typing directly:</p>
<table class="inputSequences">
    <tbody>
        <tr class="glyphs">
            <td>&</td>
            <td>(</td>
            <td>)</td>
            <td>-</td>
            <td>0</td>
            <td>...</td>
            <td>9</td>
            <td>[</td>
            <td>]</td>
            <td>{</td>
            <td>  }</td>
        </tr>
    </tbody>
</table>



<p>
Others can be typed by preceding them with <b class="input">@</b> (the <b class="input">@</b> produces .):</p>

<table class="inputSequences">
    <tbody>
        <tr class="glyphs">
            <th>Characters</th>
            <td>!</td>
            <td>«</td>
            <td>»</td>
            <td>*</td>
            <td>+</td>
            <td>&mdash; <br>em-dash</td>
            <td>&ndash; <br>en-dash</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>@!</td>
            <td>@(</td>
            <td>@)</td>
            <td>@*</td>
            <td>@+</td>
            <td>@~</td>
            <td>@-</td>
        </tr>
    </tbody>
</table>


<table class="inputSequences">
    <tbody>
        <tr class="glyphs">
            <th>Characters</th>
            <td>/</td>
            <td>:</td>
            <td><</td>
            <td>=</td>
            <td>></td>
            <td>\</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>@/</td>
            <td>@:</td>
            <td>@<</td>
            <td>@=</td>
            <td>@></td>
            <td>@\ or %</td>
        </tr>
    </tbody>
</table>
