<?php 
  $pagename = 'Phags-pa Basic Keyboard Help';
  $pagetitle = 'Phags-pa Basic Keyboard Help';
  // Header we will tidy up later  
  require_once('header.php');
?>


<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.

<p>This keyboard uses various kinds of spaces and joiners in addition to the normal white space. They are listed below.</p>

<ul>
	<li>ZWJ -- Zero Width Joiner (U+200D) is placed on "Shift + 8".</li>
	<li>ZWNJ -- Zero Width Non-Joiner (U+200C), "Shift + 6".</li>
	<li>NBSP -- No-Break Space (U+00A0), "Shift + Hyphen".</li>
	<li>NNBSP -- Narrow No-Break Space (U+202F), "Hyphen".</li>
	<li>TS -- Thin Space (U+2009), "Shift + Spacebar".</li>
</ul>
<p>On touch layout, they are on the longpress of the Spacebar.</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<div id='osk-tablet' data-states='default shift numeric'>
</div>