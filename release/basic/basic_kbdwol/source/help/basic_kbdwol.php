<?php 
  $pagename = 'Wolof Basic Keyboard Help';
  $pagetitle = 'Wolof Basic Keyboard Help';
  // Header we will tidy up later  
  require_once('header.php');

?>


<p>
    Keyboard for the Wolof language of Senegal. This keyboard is based on the Windows 10 keyboard layout. 
</p>

<p>This keyboard makes use of deadkeys. Typing the deadkey before the base character will output the combined character. For example:</p>
<p>^a will produce â (available on aAeEiIoOuU). (The ^ is on the US "[" key.)</p>
<p>¨a will produce ä (available on aAeEiIoOuUy). (The ¨ is on the US "{" key.)</p>
<p>~o will produce õ (available on aAnNoO).(The ~ is on the US "Right Alt 2" key.)</p>


<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<div id='osk-tablet' data-states='default shift'>
</div>


