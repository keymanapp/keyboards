<?php
  $pagename = 'Lao 2008 Rapid Keyboard Help';
  $pagetitle = 'Lao 2008 Rapid Keyboard Help';
  $style = <<<EXTRA
  img.kbdlayout {width:100% ;max-width:750px;}
  kbd {font-weight: bold;}
EXTRA;
  require_once('header.php');
?>

<p>The package includes the Lao Unicode (OpenType) font <b>Saysettha OT</b> and the Lao 2008 Rapid keyboard.</p>

<p>The keyboard:</p>
<ul>
   <li>prevents accidentally overtyping vowel or tone marks;</li>
   <li>automatic re-ordering of vowel and tone marks; and</li>
   <li>word-wrap by automatic insertion of hidden break characters at syllable boundaries</li>
</ul>

<p>The keyboard outputs Lao Unicode characters according to the the official Lao standard layout, and may be used with any Lao Unicode font. <br />
  Hidden break characters (Zero Width Space (<abbr title="Zero Width Space">ZWSP</abbr>), U+200B) can be inserted manually by using the <kbd>|</kbd> key. </p>

<p><abbr title="Zero Width Space">ZWSP</abbr> is used to improve wrapping of text at the end of a line, but some applications use their own techniques to do this and may ignore the ZWSP.</p>


  <h2 style="clear: left; page-break-before: always">Keyboard layout - Unshifted</h2>
  <p><img class="kbdlayout" alt="Lao 2008 Rapid keyboard layout: normal (default) state" src="lao_2008_rapidU_.png"/></p>
  <h2 style="clear: left; page-break-before: always">Keyboard layout - with Shift</h2>
  <p><img class="kbdlayout" alt="Lao 2008 Rapid keyboard layout: shift state" src="lao_2008_rapidU_S.png"/></p>
  <h2 style="clear: left; page-break-before: always">Keyboard layout - with Right Alt</h2>
  <p><img class="kbdlayout" alt="Lao 2008 Rapid keyboard layout: AltGr state" src="lao_2008_rapidU_RA.png"/></p>



</body>
</html>
