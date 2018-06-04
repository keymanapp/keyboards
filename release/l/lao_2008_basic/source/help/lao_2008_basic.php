<?php
  $pagename = 'Lao 2008 Basic Keyboard Help';
  $pagetitle = 'Lao 2008 Basic Keyboard Help';
  $style = <<<EXTRA
  img {width:100% ;max-width:750px;}
EXTRA;
  require_once('header.php');
?>

<p>The package includes the Lao Unicode (OpenType) font <b>Saysettha OT</b> and the Lao 2008 Basic keyboard.</p>

<p>The keyboard:</p>
<ul>
   <li>prevents accidentally overtyping vowel or tone marks;</li>
   <li>has no re-ordering or automatic break insertion</li>
   <li>provides word-wrap by manual entry of break characters at syllable or word boundaries</li>
</ul>

<p>The keyboard outputs Lao Unicode characters according to the the official Lao standard layout, and may be used with any Lao Unicode font. Hidden break characters (Zero Width Space (<abbr title="Zero Width Space">ZWSP</abbr>), U+200B) can be inserted by using the <kbd>|</kbd> key. </p>

<p><abbr title="Zero Width Space">ZWSP</abbr> is used to improve wrapping of text at the end of a line, but some applications use their own techniques to do this and may ignore the ZWSP.</p>



  <h2 style="clear: left; page-break-before: always">Keyboard layout - Unshifted</h2>
  <p><img alt="Lao 2008 Basic keyboard layout: normal (default) state" src="lao_2008_basicU_.png"/></p>
  <h2 style="clear: left; page-break-before: always">Keyboard layout - with Shift</h2>
  <p><img alt="Lao 2008 Basic keyboard layout: shift state" src="lao_2008_basicU_S.png"/></p>
  <h2 style="clear: left; page-break-before: always">Keyboard layout - with Right Alt</h2>
  <p><img alt="Lao 2008 Basic keyboard layout: AltGr state" src="lao_2008_basicU_RA.png"/></p>


</body>
</html>
