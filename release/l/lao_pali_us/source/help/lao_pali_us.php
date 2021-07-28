<?php
  $pagename = 'Lao Pali (US) Keyboard Help';
  $pagetitle = 'Lao Pali (US) Keyboard Help';
  $style = <<<EXTRA
  p { font: 10pt Tahoma; }
  h1 { font: bold 16pt Tahoma; color: #4444cc;margin-bottom: 2px; }
  h2 { font: bold 12pt Tahoma; color: #4444cc; }
  img {width:100% ;max-width:750px;}
  kbd {font-weight: bold;}
EXTRA;
  require_once('header.php');
?>

  <p>
    This package includes the <b>Lao Pali (US)</b> keyboard and the font <b>SengBuhan</b>
    and follows the "Lao Original (Lao Pali)" key layout for easier typing for users familiar with 
    the standard US English keyboard. The keyboard supports entry of all Lao Pali and Lao Sanskrit characters included in Unicode 13. 
  </p>
  <p>
    The <b>SengBuhan</b> font also includes all characters output by the keyboard. 
  </p>
  
  <h2 style="clear: left; page-break-before: always">Keyboard layout - Unshifted</h2>
  <p><img alt="Lao Pali keyboard layout: normal (default) state" src="./lao_pali_us_U.png"/></p>
  <h2 style="clear: left; page-break-before: always">Keyboard layout - with Shift</h2>
  <p><img alt="Lao Pali keyboard layout: shift state" src="./lao_pali_us_S.png"/></p>

  <hr/>

  <p>&copy; 2021  Dr Khampha Sidavong & John Durdin</p> 

</body>
</html>
