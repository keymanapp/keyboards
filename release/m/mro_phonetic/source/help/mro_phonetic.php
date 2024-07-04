<?php 
  $pagename = 'Mro Phonetic Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>


<p>This keyboard uses a phonetic layout for the Mro/Mru language using the Mro script. It is based on 
the Linux keyboard which is available here: http://phjamr.github.io/mro.html
The author encourages others to build on his work. This keyboard does not support the ALT keys for Latin 
or Bengali. It solely supports the Mro script.</p>

<p>This keyboard requires the use of a Mro font. <b>Mro Unicode</b> is included with this font package, but any
	Mro script Unicode font could be used.</p>
	
<h1>Keyboard Layout</h1>

<p>Each key has four possible options:</p>

<ul>
  <li>Default (unshifted)</li>
  <li>Shift</li>
  <li>Right Alt (unshifted)</li>
  <li>Right Alt Shift</li>
</ul>
<p>Many keys do not have a shift option as the Mro script is compact enough to not require this.</p>

<p>Bengali numerals are given (with Right ALT + shift) in addition to Mro and western numerals.</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>
