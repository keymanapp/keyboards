<?php 
  $pagename = 'Portuguese (Programmers) Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>

<p>
    This keyboard layout is designed for Portuguese programmers.  It includes an on screen keyboard which can be viewed by clicking on the Keyman icon and selecting the On Screen Keyboard menu item.
</p>
<p>This keyboard makes use of deadkeys. Typing the deadkey before the base character will output the combined character. For example:</p>
<p>´a will produce á (available on aAeEiIoOuUyY).</p>
<p>`a will produce à (available on aAeEiIoOuU).</p>
<p>¨a will produce ä (available on aAeEiIoOuUy).</p>
<p>~a will produce ã (available on aAnNoO).</p>
<p>^a will produce ä (available on aAeEiIoOuU).</p>

<h1>Keyboard Layout</h1>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default shift rightalt'>
</div>