<?php
  $pagename = 'Uzbek Latin 2026 Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>

<p>
  This keyboard types the Uzbek Latin alphabet as amended in 2026 (Law No. ORQ-1184 of 21 October 2026):
  the letters <b>ö ğ ş ç</b> and the tutuq <b>ʼ</b> (U+02BC MODIFIER LETTER APOSTROPHE).
</p>

<p>
  <b>Note:</b> the desktop layout follows the layout <i>proposed</i> at the Senate on 10 September 2026.
  It is not an official standard.
</p>

<h2>Desktop Keyboard Layout</h2>

<p>All keys are as on a US QWERTY keyboard, except these five:</p>

<table>
  <tr><th>Key</th><th>Key alone</th><th>Shift</th><th>Right Alt (AltGr)</th><th>Right Alt + Shift</th></tr>
  <tr><td><kbd>[</kbd></td><td>ö</td><td>Ö</td><td>[</td><td>{</td></tr>
  <tr><td><kbd>]</kbd></td><td>ğ</td><td>Ğ</td><td>]</td><td>}</td></tr>
  <tr><td><kbd>;</kbd></td><td>ş</td><td>Ş</td><td>;</td><td>:</td></tr>
  <tr><td><kbd>'</kbd></td><td>ç</td><td>Ç</td><td>'</td><td>"</td></tr>
  <tr><td><kbd>\</kbd></td><td>ʼ</td><td>ʼ</td><td>\</td><td>|</td></tr>
</table>

<p>Caps Lock gives Ö Ğ Ş Ç. The tutuq ʼ is the same with or without Shift.</p>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<p>
  On a phone, ö ğ ş ç ʼ are on their own row above the letters. On a tablet they are where they are on the desktop.
  On both, touch and hold <b>o</b>, <b>g</b>, <b>s</b> or <b>c</b> to get ö, ğ, ş or ç.
  The <b>123</b> key opens numbers and symbols.
</p>

<div id='osk-phone' data-states='default shift numeric'>
</div>

<div id='osk-tablet' data-states='default shift numeric'>
</div>

<p>© bitg contributors — <a href="https://bitg.uz">bitg.uz</a></p>
