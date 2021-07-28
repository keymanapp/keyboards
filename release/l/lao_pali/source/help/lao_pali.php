<?php
  $pagename = 'Lao Pali Keyboard Help';
  $pagetitle = 'Lao Pali Keyboard Help';
  $style = <<<EXTRA
  p { font: 10pt Tahoma; }
  h1 { font: bold 16pt Tahoma; color: #4444cc;margin-bottom: 2px; }
  h2 { font: bold 12pt Tahoma; color: #4444cc; }
  img {width:100% ;max-width:750px;}
  kbd {font-weight: bold;}
EXTRA;
  require_once('header.php');
?>

  <p>This package includes the <b>Lao Pali</b> keyboard and the font <b>SengBuhan</b>.</p>
  <p>The keyboard uses the official Lao standard layout, adapted to support entry of the Lao Pali and Lao Sanskrit characters included in Unicode 13. The keyboard includes some overtyping constraints but minimal re-ordering and no automatic break insertion.  A break character (ZWSP = U+200B) can, however, be inserted manually with  <kbd>|</kbd>.</p>
  <p>The <b>SengBuhan</b> font also includes all characters output by the keyboard. </p>

  
  <h2 style="clear: left; page-break-before: always">Keyboard layout - Unshifted</h2>
  <p><img alt="Lao Pali keyboard layout: normal (default) state" src="./lao_pali_U.png"/></p>
  <h2 style="clear: left; page-break-before: always">Keyboard layout - with Shift</h2>
  <p><img alt="Lao Pali keyboard layout: shift state" src="./lao_pali_S.png"/></p>
  <h2 style="clear: left; page-break-before: always">Keyboard layout - with Right Alt</h2>
  <p><img alt="Lao Pali keyboard layout: AltGr state" src="./lao_pali_RA.png"/></p>


  <hr/>
  <p>&copy; 2021 John Durdin</p>


</body>
</html>
