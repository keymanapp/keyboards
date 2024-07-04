<?php 
  $pagename = 'Formosa Keyboard Help';
  $pagetitle = 'Formosa Keyboard Help';
  // Header we will tidy up later  
  require_once('header.php');


?>


<p style='margin: 16px 0 0 0'>
This keyboard is a bopomofo keyboard for the bopomofo script. It is based on a US Qwerty keyboard using a phonetic layout.
</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Tablet Keyboard Layout</h2>
<div id='osk-tablet' data-states='default shift'>
</div>

<h2>Phone Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>
<div id='osk-phone' data-states='default shift numeric symbol currency'>
</div>

