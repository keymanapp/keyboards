<?php
$pagename = 'Khamti (SIL)';
$pagetitle = 'Start Using Khamti (SIL)';
$pagestyle = <<<END
    /* Font Definitions */
@font-face
 {font-family:NamKio-Regular;
 panose-1:2 11 6 4 2 2 2 2 2 4;}
END;
 require_once('header.php');
?>

<h2>Font</h2>
<p style="text-align: justify;">
The NamKio font is included in this keyboard package.
</p>


<h2>Keyboard</h2>
<p>
The "SIL Khamti" keyboard is based on the Shan phonetic keyboard. It includes 
an on screen keyboard which can be viewed by clicking on the Keyman icon 
and selecting the On Screen Keyboard menu item.
</p>

<div id='osk-container'>
  <h3>Desktop Keyboard Layout</h3>
  <div id='osk' data-states='default shift'></div>
</div>

<div id='osk-mobi-container'>
  <h3>Mobile Keyboard Layout</h3>
  <div id='osk-phone' data-states='default shift' />
</div>
