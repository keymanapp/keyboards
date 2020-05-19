<?php 
  $pagename = 'Turkish F Basic Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>


<p>
    This keyboard layout is designed for Turkish.  It includes an on screen keyboard which can be viewed by clicking on the Keyman icon and selecting the On Screen Keyboard menu item. The keyboard layout follows the Windows 10 Turkish F layout.
</p>
<p>This keyboard makes use of the SHIFT+RALT+O and Shift+Alt+M keys which are set by default when Keyman is installed. 
	To use this keyboard, you must go to <b>Configuration.../Hotkeys</b> and select the hotkey for "Switch Keyman Desktop Off". 
	Either change the hotkey or turn it off. Do the same for "Open Keyboard Menu".</p>
<p>This keyboard makes use of deadkeys. Typing the deadkey before the base character will output the combined character. For example:</p>
<p>^a will produce ä (available on aAeEıIoOuUiİ).</p>
<p>¨a will produce ä (available on aAeEıIoOuUyiİ).</p>
<p>~a will produce ã (available on aAnNoO).</p>
<p>`a will produce à (available on aAeEıIoOuUiİ).</p>
<p>´a will produce á (available on aAeEıIoOuUiİ).</p>

<h1>Keyboard Layout</h1>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default shift rightalt'>
</div>
