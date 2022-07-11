<?php
  $pagename = 'Kayaw (SIL) Keyboard Help';
  $pagetitle = 'Kayaw (SIL) Keyboard Help';
  require_once('header.php');
?>

<h2>Keyboard</h2>
<p>
  This keyboard is for the Kayaw language using Latin script. It includes
  an on screen keyboard which can be viewed by clicking on the Keyman icon
  and selecting the On Screen Keyboard menu item. This keyboard follows the standard QWERTY 
  keyboard layout with the following changes:
</p>
<p>
  <b>For Desktop Layout</b>
</p>
<ul>
  <li>6 is replaced by U+0302               (Combining Circumflex Accent)</li>
  <li>7 is replaced by U+0304               (Combining Macron)</li>
  <li>^ is replaced by Numeral 6</li>
  <li>&amp; is replaced by Numeral 7</li>
  <li>q is replaced by U+0300 U+030C        (Combining Grave Accent, Combining Caron)</li>
  <li>[ is replaced by U+0300 U+0304        (Combining Grave Accent, Combining Macron)</li>
  <li>f is replaced by U+0300               (Combining Grave Accent)</li>
  <li>z is replaced by U+0302 U+0304        (Combining Circumflex Accent, Combining Macron)</li>
  <li>x is replaced by U+0302 U+030C        (Combining Circumflex Accent, Combining Caron)</li>
  <li>v is replaced by U+030C               (Combining Caron)</li>
</ul>

<p>
  <b>For Touch Screen Keyboards</b>
</p>
<ul>
  <li>accents are on the first row of both default and shift layers</li>
  <li>numerals are accessed through the numeric layer</li>
</ul>

<p>
  q z x and v are available on the touch screen version of the keyboard by 
  long pressing their traditional QWERTY keys.
</p>

<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift'></div>
</div>

<div id='osk-phone-container'>
  <h2>Mobile Keyboard Layout</h2>
  <div id='osk-phone' data-states='default shift numeric'></div>
</div>


