<?php
  $pagename = 'Lithuanian Keyboard Help';
  $pagetitle = 'Lithuanian Keyboard Help';
  require_once('header.php');
?>

<p>This is the default Lithuanian keyboard layout. It is also commonly known as Numeric, because it places all Lithuanian letters with diacritics in the numeric row of the keyboard.</p>

<p>Numbers and special characters are accessible via Ctrl+Alt and Ctrl+Alt+Shift, respectively. Normally, right Alt (also known as AltGr) would be used instead of Ctrl+Alt, but this is not yet supported by KeymanWeb.</p>

<h2>Keyboard Layout</h2>

<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift ctrl-alt shift-ctrl-alt'></div>
</div>

<div id='osk-phone-container'>
  <h2>Phone Keyboard Layout</h2>
  <div id='osk-phone' data-states='default shift numeric symbol'></div>
</div>


