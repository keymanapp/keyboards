<?php 
  $pagename = 'Akha ACT Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
    $style = <<<END
    p { font: 12pt Khmer Mondulkiri; }
	ul { font: 12pt Khmer Mondulkiri; }
    h1 { font: bold 16pt Khmer Mondulkiri; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 14pt Khmer Mondulkiri; color: #4444cc; }
END;
  
  require_once('header.php');
?>


<p>
    A keyboard is designed for the Akha language in Latin Script.
</p>

<h1> Key features:</h1>
<ol>
	<li>Press on any of these keys ([]\{}|) twice to output the brackets instead of the Akha tone marks.</li>
	<li>On computer, please use AltGr and Shift AltGr to get "ôóõòñöÔÓÕÒÑÖ" as shown in the screenshots below.</li>
	<li>On touch devices, please use longpresses to access these characters. Find out how to do it in the last section below.</li>
</ol>

<h1>Keyboard layouts</h1>
	<h2>Desktop</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

	<h2>Touch</h2>
<div id='osk-tablet' data-states='default shift'>
	<h2>Touch - Longpress key</h2>
<p>Any key with a little gray dot on the top right can be pressed and held to reveal more key(s) as shown below.</p>
<p><a href="touch_subkey.png"><img width=720px class="keyboard" src="touch_subkey.png" alt="Touch - Longpress key" /></a></p>
</div>
