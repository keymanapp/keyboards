<?php
  $pagename = 'Arabic Phonetic (SIL) Keyboard Help';
  $pagetitle = 'Arabic Phonetic (SIL) Keyboard Help';
  require_once('header.php');
?>
<p>This is a keyboard for entering Arabic phonetically using a standard English keyboard.</p>

<h2>Keyboard Layout</h2>

<div id='osk-container'>
  <h3>Desktop Keyboard Layout</h3>
  <div id='osk' data-states='default shift'></div>
</div>

<div id='osk-tablet-container'>
  <h3>Mobile/Tablet Keyboard Layout</h3>
  <div id='osk-tablet' data-states='default numeric'></div>
</div>
      	                                      
<h2>Usage Notes</h2>

<p>This keyboard has several shortcuts to make it easier to type phonetically:</p>

<ul>
<li>To make a long vowel, type the vowel twice.  This is supported for:
  <ul>
    <li><b>aa</b> (<span class='a'>ا)</li>
    <li><b>AA</b> (<span class='a'>آ)</li>
    <li><b>uu</b> (<span class='a'>ؤ)</li>
    <li><b>ee</b> (<span class='a'>إ)</li>
  </ul>
</li>
<li>Four other multiple key outputs are supported:
  <ul>
    <li><b>yx</b> (<span class='a'>ئ</span>)</li>
    <li><b>ao</b> (<span class='a'> ً </span>)</li>
    <li><b>uo</b> (<span class='a'> ٌ </span>)</li>
    <li><b>eo</b> (<span class='a'> ٍ </span>)</li>
  </ul>
</li>
<li>To add a Shadda (e.g. shown here on Beh, <span class='a'>بّ</span>), type the consonant twice</li>
<li>To type Allah (<span class='a'>لله</span>), type <b>llh</b></li>
<li>Type any digit + &gt; to get U+066C (thousands separator)</li>
<li>Type any digit + &lt; to get U+066B (decimal separator)</li>
<li>To cycle through different variations of a letter, use the slash key (<b>/</b>).  This is currently supported for:
  <ul>
   <li>alef/ain/fatha (<b>a/</b>)</li>
   <li>dad/dal (<b>d/</b>)</li>
   <li>heh/khah/hah (<b>h/</b>)</li>
   <li>sad/sheen/seen (<b>s/</b>)</li>
   <li>tah/teh marbuta/theh/zah/thal/teh (<b>t/</b>)</li>
  </ul>
</li>
</ul>

