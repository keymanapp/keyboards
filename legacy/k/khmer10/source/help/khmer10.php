<?php 
  $pagename = 'Khmer (deprecated) Keyboard Help';
  $pagetitle = 'Khmer (deprecated) Keyboard Help';
  // Header we will tidy up later  
  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
This keyboard is designed for use with the <a href="http://en.wikipedia.org/wiki/Khmer_language"><b>Khmer</b></a> language of Cambodia in Southeast Asia.  It uses <b>embedded fonts</b>.
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>
<h2>Tips</h2>

<p>Press <?= $keyRenderer->render('[S ]') ?> to insert a space character, and <?= $keyRenderer->render(' ') ?> to insert an invisible break.</p>

<h2>Keyboard Layout</h2>
<div id='osk'>
</div>