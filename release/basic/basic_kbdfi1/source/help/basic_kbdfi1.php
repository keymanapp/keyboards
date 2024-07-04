<?php 
  $pagename = 'Finnish-Swedish with Sami Basic Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>
<p>
    Finnish-Swedish with Sami Basic. A good font for this keyboard would be <b>Calibri</b> or <b>Segoe UI</b> where the capital eng is correct shape for Sami.
</p>
<p>This keyboard defines some keys that are set by default as "hotkeys" when Keyman is installed. 
To use this keyboard, you will want to go to <b>Configuration.../Hotkeys</b>, 
select the hotkey name, and either change the hotkey or turn it off. 
Currently 
"Switch Keyman Desktop Off" uses Shift+Alt+O
"Show On Screen Keyboard Pane" uses Shift+Alt+K</p>

<h1>Keyboard Layout</h1>

<p>This keyboard makes use of deadkeys. Typing the deadkey before the base character will output the combined character. For example:</p>
<p>~a will produce ã (available on aAiInNoOuU).</p>
<p>´a will produce á (available on aAcCeEiIoOsSuUwWyYǻǺǽǼǿǾ).</p>
<p>`a will produce à (available on aAeEiIoOuUwWyY).</p>
<p>¨a will produce ä (available on aAeEiIoOuUwWyY).</p>
<p>^a will produce â (available on aAcCeEgGhHiIjJoOsSuUwWyY).</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal them.</p>

<div id='osk-tablet' data-states='default shift'>
</div>


<p>© SIL International</p>
