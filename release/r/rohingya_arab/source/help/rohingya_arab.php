<?php
  $pagename = 'Rohingya Arabic Keyboard Help';
  $pagetitle = 'Rohingya Arabic Keyboard Help';
  require_once('header.php');
?>

<h1>Rohingya Arabic keyboard for Keyman</h1>

<p>This keyboard layout is designed for Rohingya Arabic. It includes an on screen keyboard.</p>
<h2>Fonts</h2>

<p>The keyboard will work with any extended Arabic script font. However, because Rohingya requires some special glyph variants, 
	the <a href=http://software.sil.org/scheherazade>Scheherazade</a> font developed by SIL International is best suited for Rohingya. 
	This keyboard package comes with the Scheherazade Rohingya font which has all the special glyph variants.</p>


<h2>Keyboard Layout</h2>
<p>To get the "-tan" characters, type the vowel two times. For example, type "a" to get U+064E (fatha) and "aa" to get U+064B (fathatan).</p>
<p>Tone marks must follow a vowel. Nothing will be output if the vowel is not typed first. Tone marks will switch to the correct above or below 
	mark depending on whether the vowel is an above or below character. Thus, type "ba" to get "بَ" (no tone) and "ba[" to get "بَ࣪" (with above tone) or "bi[" to get "بِ࣭" (with below tone).</p>
<p>To get Latin-style punctuation, type ".." to get a fullstop, "--" to get a hyphen, "//" to get a backslash and '""' to get smart quotes.</p>

<p><img src='rohingya_arab.png' alt='Keyboard Layout' width='100%'></p>

