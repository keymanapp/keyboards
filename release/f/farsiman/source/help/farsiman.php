<?php 
  $pagename = 'Farsiman Keyboard Help';
  $pagetitle = 'Farsiman Keyboard Help';
  require_once('header.php');
?>

<p>Farsiman is a Farsi phonetic keyboard that enables anyone who uses a regular English keyboard write in Farsi. Look at the three screenshots in the welcome.htm and you are immediately ready to write away in Farsi.</p>

<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <p>
To get:
</p>
<ul>
<li>Zero width joiner (ZWJ), type "Ctrl + Alt + ."</li>
<li>Zero width non-joiner (ZWNJ), type "Ctrl + Alt + Spacebar"</li>
<li>Right-to-left mark (RLM), type "Ctrl + Alt + r", and</li>
<li>Left-to-right mark (LRM), type "Ctrl + Alt + l".</li>
</ul>
  <div id='osk' data-states='default shift alt ctrlalt'></div>
</div>

<div id='osk-phone-container'>
  <h2>Phone Keyboard Layout</h2>
  <p>Note: Longpress keys are not currently visible in this static documentation, and so some additional letters may be accessible through these longpress keys.</p>
  <div id='osk-tablet' data-states='default shift numeric'></div>
</div>


<h2>Release History</h2>
<p>Version 1.0, released 01 November 2019</p>
