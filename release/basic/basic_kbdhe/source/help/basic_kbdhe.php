<?php 
  $pagename = 'Greek Basic Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>
<p>
    Greek Basic. The keyboard layout follows the Windows 10 layout.
</p>

<p>This keyboard makes use of deadkeys. Typing the deadkey before the base character will output the combined character. For example:</p>
<p>΅ι will produce ΐ (available on ιυ).</p>
<p>΄α will produce ά (available on αΑεΕηΗιΙοΟωΩυΥ).</p>
<p>¨ι will produce ϊ (available on ιΙυΥ).</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default shift rightalt'>
</div>