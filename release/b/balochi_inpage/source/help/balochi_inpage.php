<?php 
$pagename = 'Balochi InPage Keyboard Help';
$pagetitle = $pagename;
// Header
require_once('header.php');
?>

<p>This keyboard layout is designed for transcribing Balochi languages based on the InPage Urdu keyboard layout. 
It includes an on screen keyboard which can be viewed by clicking on the Keyman icon 
and selecting the On Screen Keyboard menu item. Similar keyboards are also available for other desktop and mobile platforms.</p>

<h1>Keyboard Layout</h1>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift leftctrl'>
</div>

<h2>Tablet Keyboard Layout</h2>
<div id='osk-tablet' data-states='default shift numeric'>
</div>

<h2>Phone Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press.
Press and hold on the key with a little dot on the top right to reveal them.</p>
<div id='osk-phone' data-states='default shift numeric'>
</div>
