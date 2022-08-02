<?php 
  $pagename = 'Choctaw Modern Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>

<p>
    Keyboard layout for the Modern Choctaw orthography.
</p>

  <h2>Desktop Keyboard layout</h2>
  
  <p>Accents are typed after the base character. a; will produce á (available on aAeEiIoOuU).</p>
  <p>Accents are typed after the base character. a` will produce ą (available on aAeEiIoOuU).</p>
  <p>Accents are typed after the base character. a/ will produce a̱ (available on aAeEiIoOuU).</p>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-phone' data-states='default shift numeric'>
</div>
