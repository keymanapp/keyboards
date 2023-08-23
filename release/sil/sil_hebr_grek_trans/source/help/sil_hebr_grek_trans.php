<?php
  $pagename = "Hebrew and Greek Transliteration (SIL) keyboard Help";
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
    <p>Hebrew and Greek Transliteration Unicode keyboard for use with any Unicode Windows fonts.</p>
<h2>Scope and limitations:</h2>

<h3>Greek:</h3>

<p>The only lower case letters needed for SIL Greek transliteration are
eta and omega, represented by e and o with macron above, respectively.</p>

<p>This keyboard should not be used for upper case Greek letters,
since some of the upper case characters are need for the Hebrew.</p>

<h3>Hebrew:</h3>
<p>This keyboard generates all the combinations of base character 
plus diacritic(s) need for the SIL Hebrew transliteration.</p>

<h1>Layout</h1>
    <h2>Default (unshifted)</h2>
    <p><img src="sil_hebr_grek_trans_U_.png" alt="Hebrew and Greek Transliteration (SIL) Keyboard: default (unshifted)"></p>
    <h2>Shift</h2>
    <p><img src="sil_hebr_grek_trans_U_S.png" alt="Hebrew and Greek Transliteration (SIL) Keyboard: shift"></p>
    <h2>ALT (unshifted)</h2>
    <p><img src="sil_hebr_grek_trans_U_A.png" alt="Hebrew and Greek Transliteration (SIL) Keyboard: ralt"></p>

<h1>Keyboard chart for special characters</h1>
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td class="heading">Consonants</td>
      <td class="heading">Type</td>
      <td class="heading">Vowels</td>
      <td class="heading">Type</td>
    </tr>
    <tr>
      <td>ʾ</td>
      <td>&gt;</td>
      <td>ā</td>
      <td>a= or A</td>
    </tr>
    <tr>
      <td>ʿ</td>
      <td>&lt;</td>
      <td>ē</td>
      <td>e= or E</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>ō</td>
      <td>o= or O</td>
    </tr>
    <tr>
      <td>ḇ</td>
      <td>B</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>ḡ</td>
      <td>G</td>
      <td>â</td>
      <td>a^</td>
    </tr>
    <tr>
      <td>ḏ</td>
      <td>D</td>
      <td>ê</td>
      <td>e^</td>
    </tr>
    <tr>
      <td>ḵ</td>
      <td>K</td>
      <td>î</td>
      <td>i^</td>
    </tr>
    <tr>
      <td>p̄</td>
      <td>P</td>
      <td>ô</td>
      <td>o^</td>
    </tr>
    <tr>
      <td>ṯ</td>
      <td>T</td>
      <td>û</td>
      <td>u^</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>ệ</td>
      <td>.e^</td>
    </tr>
    <tr>
      <td>ḥ</td>
      <td>.h or x</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>ṭ</td>
      <td>.t or v</td>
      <td>ă</td>
      <td>a;</td>
    </tr>
    <tr>
      <td>ṣ</td>
      <td>.s or c</td>
      <td>ĕ</td>
      <td>e;</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>ŏ</td>
      <td>o;</td>
    </tr>
    <tr>
      <td>ś</td>
      <td>s+ or f</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>š</td>
      <td>s^ or j</td>
      <td>ə</td>
      <td>;</td>
    </tr>
    <tr>
      <td>s̄</td>
      <td>S</td>
      <td>ᵃ</td>
      <td>alt+a</td>
    </tr>
  </tbody>
</table>

