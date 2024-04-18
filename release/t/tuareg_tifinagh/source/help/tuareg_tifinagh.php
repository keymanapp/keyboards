<?php
$pagename = 'Tuareg Tifinagh Keyboard Help';
$pagetitle = $pagename;
// Header
require_once('header.php');
?>

<p> Tuareg Tifinagh is designed for typing Tifinagh characters in the Tamahaq and Tamashek languages. </p>
<p>
	It is based on the Standard Moroccan Tamazight Tifinagh AZERTY keyboard and 
	Microsoft's Central Atlas Tamazight (Tifinagh Extended) keyboard layout spec.
	Additional keys include the Tifinagh Consonant Joiner (U+2D7F) to create bi-consonant ligatures. 
	Also included are the Right-To-Left Override key (U+202E) for right-to-left writing and 
	POP Directional Formatting key (U+202C) to reverse the right-to-left writing.
</p>

<p>The <b>Akatab</b> font is recommended for this keyboard.
<b><a href="https://software.sil.org/akatab/" title="Download the latest version of the Akatab font" target="_blank" rel="noopener noreferrer">Download the latest version of the Akatab font</a></b>.
</p>

<h2>Desktop Keyboard Layout</h2>

<p>
   <b>Some tips for obscure keys</b><br>
   Use RightAlt+7 for TIFINAGH CONSONANT JOINER<br>
   Use RightAlt+d for RIGHT-TO-LEFT OVERRIDE (rappelez-vous <b>d</b>roit à gauche)<br>
   Use RightAlt+f for POP DIRECTIONAL FORMATTING<br>
   Use RightAlt+g for LEFT-TO-RIGHT OVERRIDE (rappelez-vous <b>g</b>auche à droit)
</p>
<div id='osk' data-states='default shift rightalt'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press.
Press and hold on the key with a little dot on the top right to reveal them.</p>

<div id='osk-phone' data-states='default shift rightalt'>
</div>
<div id='osk-tablet' data-states='default shift rightalt'>
</div>
