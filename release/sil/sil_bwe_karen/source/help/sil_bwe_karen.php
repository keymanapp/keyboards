<?php
  $pagename = 'SIL Bwe Karen Keyboard Help';
  $pagetitle = 'SIL Bwe Karen Keyboard Help';
  require_once('header.php');
?>
      
<body>

<h2>Font</h2>
<p>The "SIL Bwe Karen" keyboard is designed to work with the Latin script using the Charis SIL Compact font.</p>

<h2>Keyboard Layout</h2>

<p>This keyboard follows the traditional QWERTY keyboard layout with the exception that it 
replaces two unused characters with combining diacritics.</p>

<ul>
  <li>q is replaced with U+0304 (Combining Macron)</li>
  <li>f is replaced with U+0301 (Combining Acute Accent).</li>
</ul>  

<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift'></div>
</div>

<div id='osk-phone-container'>
  <h2>Phone Keyboard Layout</h2>
  <div id='osk-phone' data-states='default shift Symbol'></div>
</div>

<div id='osk-tablet-container'>
  <h2>Tablet Keyboard Layout</h2>
  <div id='osk-tablet' data-states='default shift Symbol'></div>
</div>

<h2>Technical Support</h2>
<p>If you have problems using the SIL Bwe Karen keyboard, please visit: 
<a href=https://community.software.sil.org/c/keyman>https://community.software.sil.org/c/keyman</a></p>

<h2>License</h2>
<p>
  SIL Bwe Karen keyboard is copyright ©2018 SIL International. 
  It is distributed under The MIT License (MIT)
</p>
