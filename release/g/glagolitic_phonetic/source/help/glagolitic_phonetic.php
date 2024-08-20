<?php 
  $pagename = 'Glagolitic (Phonetic) Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>

<p>
  This is a keyboard for the Glagolitic script. It is loosely based on a phonetic layout. Feedback is welcome.
</p>

<h2>Desktop Keyboard layout</h2>
<p>Combining marks may be accessed using the deadkey (on the <kbd>\</kbd> or <kbd>|</kbd> key) followed by the appropriate lowercase letter. For example, <kbd>\</kbd> + <kbd>q</kbd> will output the combining mark <i>yati</i>. There are no combining marks for some of the lowercase letters. In that case, just the lowercase letter will be output (not the combining mark).</p>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<br />

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them. The deadkey approach can be used to access the combining marks, or, long press keys can access the combining marks.</p>

<div id='osk-tablet' data-states='default shift numeric'>
</div>
