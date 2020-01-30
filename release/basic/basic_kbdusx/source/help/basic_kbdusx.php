<?php 
  $pagename = 'United States-International Basic Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>

<p>
    This keyboard layout is designed for English.  It includes an on screen keyboard which can be viewed by clicking on the Keyman icon and selecting the On Screen Keyboard menu item. The keyboard layout follows the Windows 10 United States-International layout.
</p>
<p>This keyboard makes use of the SHIFT+RALT+O keys which are set by default when Keyman is installed. 
	To use this keyboard, you must go to <b>Configuration.../Hotkeys</b> and select the hotkey for "Switch Keyman Desktop Off". 
	Either change the hotkey or turn it off.</p>

<p>This keyboard makes use of "deadkeys" which are listed below:</p>

<p>^a will produce â (available on aAeEiIoOuU).</p>
<p>`a will produce à (available on aAeEiIoOuU).</p>
<p>~a will produce ã (available on aAnNoO).</p>
<p>'a will produce á (available on aAeEiIoOuUyY).</p>
<p>'c will produce ç (available on cC).</p>
<p>"a will produce ä (available on aAeEiIoOuUy).</p>

<h1>Keyboard Layout</h1>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>


<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some shift states are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal them.</p>

<div id='osk-tablet' data-states='default shift rightalt rightalt-shift'>
</div>