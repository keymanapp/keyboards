<?php 
  $pagename = 'Hindi Modular Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>


<p>
This keyboard is designed for use with the languages of India and other regions in South Asia 
which use the Devanagari script. It uses standard Windows fonts. This is one of the most popular 
keyboard layouts for professional DTP work.
</p>

<h1>Keyboard Layout</h1>
<p>This keyboard allows the user to type "g" (for   ि ) either before <em>or</em> after the consonant. (The keyboard
	will reorder the position of the <em>vowel sign i</em> to the proper position. </p>
<p>The keyboard also allows the user to type a SHIFT RALT Z to follow a consonant which will then 
	form a half form when another consonant follows. </p>
<p>A backslash outputs a Zero Width Joiner after a consonant.</p>
<p>The following keystrokes output Zero Width Non-Joiner before what is on the keycap: D, kl, kp
</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default shift rightalt'>
</div>