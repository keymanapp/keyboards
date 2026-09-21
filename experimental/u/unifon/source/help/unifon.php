<?php 
  $pagename = 'Unifon Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');


?>

<p style="background-color:Pink;"><b>Note:</b> Please note that this keyboard (and associated font) is using a custom encoding. Because this script is not encoded in Unicode, mobile devices will not include fonts supporting this keyboard. Additionally, on mobile devices the keyboard will only display the correct characters within the Keyman application.</p>

<p>
This keyboard is designed for the Unifon aphabet.
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
<div id='osk-phone' data-states='default shift'>
</div>

