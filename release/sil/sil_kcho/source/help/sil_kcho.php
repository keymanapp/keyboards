<?php
  $pagename = 'Kcho (SIL) Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>



<p>
  Keyboard for Kcho (Mün Chin and Dao languages in Myanmar). Outputs NFC when possible.
</p>

<h2>Desktop Keyboard Layout</h2>

<p>Special Vowels</p>
<p>
  <img src="vowels.png" alt="Keys to type special vowels"/>
</p>

<p>Add tones to a vowel</p>
<p>
  <img src="tones.png" alt="Keys to add tones to a vowel" />
</p>

<div id='osk' data-states='default shift rightalt'>
</div>

<h2>Mobile Keyboard Layout</h2>

<div id='osk-mobi-container'>
  <h3>Mobile Keyboard Layout</h3>
  <div id='osk-phone' data-states='default shift rightalt numeric'></div>
</div>
