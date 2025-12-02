<?php 
  $pagename = 'Kashmiri Phonetic Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>


<p>
  Kashmiri Phonetic keyboard layout for the Kashmiri language. This keyboard works best with a US Qwerty keyboard and is based on a phonetic layout. This is an experimental keyboard. Feedback and suggestions are welcomed.
</p>

<h2>Desktop Keyboard layout</h2>
<p>Depending on the font, a few characters may look similar. The Kashmiri fullstop (U+06D4) is available on the "." key. The kashida/tatweel (U+0640) is available on the SHIFT+6 key. The Latin hyphen (U+002D) is available on the RALT+hyphen key.</p>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them. Most of the combining marks are found on one longpress key. Many common punctuation characters are found on another longpress key on the default layer.</p>

<div id='osk-tablet' data-states='default numeric'>
</div>
