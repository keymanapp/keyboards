<?php 
  $pagename = 'Bunong (SIL) Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>
  <style type="text/css">
    p { font: 10pt Tahoma; }
	ul { font: 10pt Tahoma; }
    h1 { font: bold 16pt Tahoma; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 12pt Tahoma; color: #4444cc; }
	span { font: 11pt Khmer Mondulkiri;}
	kbd
	{
    -moz-border-radius:3px;
    -moz-box-shadow:0 1px 0 rgba(0,0,0,0.2),0 0 0 2px #fff inset;
    -webkit-border-radius:3px;
    -webkit-box-shadow:0 1px 0 rgba(0,0,0,0.2),0 0 0 2px #fff inset;
    background-color:#f7f7f7;
    border:1px solid #ccc;
    border-radius:3px;
    box-shadow:0 1px 0 rgba(0,0,0,0.2),0 0 0 2px #fff inset;
    color:#333;
    display:inline-block;
    font-family:Arial,Helvetica,sans-serif;
    font-size:11px;
    line-height:1.4;
    margin:0 .1em;
    padding:.1em .6em;
    text-shadow:0 1px 0 #fff;
	}
  </style>

<p>
    This keyboard is designed for typing Bunong language using Khmer characters.
</p>

<p>
	Khmer Mondulkiri font is embedded and included in the keyboard package. It will be installed and uninstalled along with the keyboard.
</p>

<p>
	All vowels on the phone layout are highlighted to help you locate where the Bunong vowels are on both the Default and Shift layers.
</p>

<p>
	Rota rules help you to flick through the similar characters. These work on both the desktop and touch layotus.
</p>
<ul>
<li>Press <kbd>I</kbd> twice to get <span style="font-family:Khmer Mondulkiri;"> ី</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">ិ</span>.</li>
<li>Press <kbd>W</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">ឺ</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">ឹ</span>.</li>
<li>Press <kbd>U</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">ូ</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">ុ</span>.</li>
<li>Press <kbd>E</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">ែ</span>, thrice <span style="font-family:Khmer Mondulkiri;">ៃ</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">េ</span>.</li>
<li>Press <kbd>[</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">ឿ</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">ៀ</span>.</li>
<li>Press <kbd>O</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">ៅ</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">ោ</span>.</li>
<li>Press <kbd>I</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">ិ</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">ី</span>.</li>
</ul>
<ul>
<li>Press <kbd>.</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">៕</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">។</span>.</li>
<li>Press <kbd>`</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">"</span>, thrice <span style="font-family:Khmer Mondulkiri;">'</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">«</span>.</li>
<li>Press <kbd>Shift</kbd><kbd>`</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">"</span>, thrice <span style="font-family:Khmer Mondulkiri;">'</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">»</span>.</li>
<li>Press <kbd>I</kbd> twice to get <span style="font-family:Khmer Mondulkiri;">ិ</span> and press it one more time to get back to <span style="font-family:Khmer Mondulkiri;">ី</span>.</li>
</ul>

<h1>Keyboard Layout</h1>

  <h2>Desktop</h2>
   <div id='osk' data-states='default shift'></div>
   
  <h2>Phone</h2>
   <div id='osk-phone' data-states='default shift'></div>
   <h3>Longpress</h3>
	<p>Keys with a little dot on the top right can be pressed and held for more keys.</p>
	<p><a href="phone_longpress.png"><img class="keyboard" src="phone_longpress.png" alt="Longpress state" /></a></p>
	
     <h2>Tablet</h2>
   <div id='osk-tablet' data-states='default shift'></div>


<p>(c) 2021 SIL International</p>
