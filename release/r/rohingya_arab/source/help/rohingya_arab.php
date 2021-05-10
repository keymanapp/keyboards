<?php
  $pagename = 'Rohingya Arabic Keyboard Help';
  $pagetitle = 'Rohingya Arabic Keyboard Help';
  require_once('header.php');
?>

<p>This keyboard layout is designed for Rohingya Arabic. It includes an on screen keyboard.</p>
<h2>Fonts</h2>

<p>The keyboard will work with any extended Arabic script font. However, because Rohingya requires some special glyph variants, 
	the <a href=http://software.sil.org/scheherazade>Scheherazade</a> font developed by SIL International is best suited for Rohingya. 
	This keyboard package comes with the Scheherazade New Rohingya font which has all the special glyph variants.</p>


<h1>Keyboard Layout</h1>
<p>To get the "-tan" characters, type the vowel two times. For example, type "a" to get U+064E (fatha) and "aa" to get U+064B (fathatan).</p>
<p>Tone marks must follow a vowel. Nothing will be output if the vowel is not typed first. Tone marks will switch to the correct above or below 
	mark depending on whether the vowel is an above or below character. Thus, type "ba" to get "بَ" (no tone) and "ba[" to get "بَ࣪" (with above tone) or "bi[" to get "بِ࣭" (with below tone).</p>
<p>To get Latin-style punctuation, type ".." to get a fullstop, "--" to get a hyphen, "//" to get a backslash and '""' to get smart quotes.</p>
<p>The "I" key is considered a deadkey. When typed by itself it does not produce anything. However, when typed followed by "1234567890" it will produce the U+0660..U+0669 range of digits (Rohingya uses the Eastern digits U+06F0..U+06F9). When "I" is typed followed by "A", it produces U+FDF2 (ﷲ).</p>
<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default shift'>
</div>
