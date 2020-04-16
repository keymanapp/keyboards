<?php 
  $pagename = 'Pinyin Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>


<p>
The Pinyin Keyboard Package provides a simple method 
of entering accented Pinyin for all Unicode-aware 
applications.  Simply type the pinyin using tone numbers 
and as soon as a number is typed, the syllable will be 
changed to the accented form.</p>

<p>You may enter either u: or v for &uuml;.</p>

<p>The font that is used must include all of the accented 
vowels required by pinyin, at the correct Unicode code points.</p>

<p>The keyboard also supports direct entry of both standard 
and surrogate pair (supplementary plane) Unicode characters, 
by entering the hexadecimal Unicode codepoint using the
format U+nnnn (or U+nnnnn).  This can be especially helpful 
for entering supplementary plane characters or any characters 
that may not be recognized by the input method being used.  
However, note that in general, older applications do not 
support the display of supplementary plane characters.</p>

<p>For a keyboard for Simplified Chinese that includes an 
Input Method Extension for selecting Han characters, 
please use either the CS-Pinyin or the CS-Pinyin Demo package.
</p>
