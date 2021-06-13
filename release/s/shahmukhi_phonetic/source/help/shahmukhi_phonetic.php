<?php 
  $pagename = 'Shahmukhi Phonetic Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>


<h1>Start Using Shahmukhi Phonetic</h1>

<p>
Shahmukhi is a modified Perso-Arab script and this keyboard intends to include support for characters, 
not supported by the Urdu phonetics keyboard such as ArNoon (ݨ) and ArLaam (ࣇ - U+08C7 in Unicode),
(ਣ and ਲ਼ in Gurmukhi, respectively).  ArLaam was added to Unicode recently and proper positioning 
may not work in all applications. The Scheherazade New font supports the ArLaam and is included
in this keyboard package.
</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default shift rightalt'>
</div>
