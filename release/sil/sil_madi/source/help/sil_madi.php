<?php
  $pagename = 'Ma'di Keyboard Help';
  $pagetitle = 'Ma'di Keyboard Help';
  require_once('header.php');
?>

  <style type="text/css">
    p { font: 10pt Tahoma; }
    h1 { font: bold 16pt Tahoma; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 12pt Tahoma; color: #4444cc; }
	kbd {
		background-color: #eee;
		border-radius: 3px;
		border: 1px solid #b4b4b4;
		box-shadow: 0 1px 1px rgba(0, 0, 0, .2), 0 2px 0 0 rgba(255, 255, 255, .7) inset;
		color: #333;
		display: inline-block;
		font-size: .85em;
		font-weight: 700;
		line-height: 1;
		padding: 2px 4px;
		white-space: nowrap;
   }
  </style>
</head>
<body>

<h1>Start Using Ma'di Keyboard</h1>

<p>
    This keyboard is desgined based on the new orthogrphy of Ma'di language spoken in South Sudan and Uganda.
</p>

<p>Ma'di keyboard is similar to the English (US) keyboard, except the way to type out the below dot and tone marks on the vowels.</p>
<ul>
  <li>Type any vowel + dot to get the vowel with a combining dot below. <br/>For examples: <br/>
	  <ul style="font-family:Charis SIL">
		  <li><kbd>U</kbd> + <kbd>.</kbd> &#x21D2; ụ </li> 
		  <li><kbd>Shift</kbd> <kbd>U</kbd> + <kbd>.</kbd> &#x21D2; Ụ </li>
		  <li><kbd>E</kbd> + <kbd>.</kbd> &#x21D2; ẹ </li>
		  <li><kbd>Shift</kbd> <kbd>E</kbd> + <kbd>.</kbd> &#x21D2; Ẹ </li>
	  </ul>
  </li>
  <li>Type any vowel + / to get the vowel with a combining acute accent. <br/>For examples: <br/>
	  <ul style="font-family:Charis SIL">
		  <li><kbd>A</kbd> + <kbd>/</kbd> &#x21D2; á </li> 
		  <li><kbd>Shift</kbd> <kbd>A</kbd> + <kbd>/</kbd> &#x21D2; Á </li>
		  <li><kbd>E</kbd> + <kbd>/</kbd> &#x21D2; é </li>
		  <li><kbd>Shift</kbd> <kbd>E</kbd> + <kbd>/</kbd> &#x21D2; É </li>
	  </ul>
  </li>
  <li>Type any vowel + ^ to get the vowel with a combining circumflex accent. <br/>For examples: <br/>
	  <ul style="font-family:Charis SIL">
		  <li><kbd>A</kbd> + <kbd>Shift</kbd> <kbd>6</kbd> &#x21D2; â </li> 
		  <li><kbd>Shift</kbd> <kbd>A</kbd> + <kbd>Shift</kbd> <kbd>6</kbd> &#x21D2; Â </li>
		  <li><kbd>E</kbd> + <kbd>Shift</kbd> <kbd>6</kbd> &#x21D2; ê </li>
		  <li><kbd>Shift</kbd> <kbd>E</kbd> + <kbd>Shift</kbd> <kbd>6</kbd> &#x21D2; Ê </li>
	  </ul>
  </li>
  <li>Type any vowel + ~ to get the vowel with a combining tilde sign. <br/>For examples: <br/>
	  <ul style="font-family:Charis SIL">
		  <li><kbd>A</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> &#x21D2; ã </li> 
		  <li><kbd>Shift</kbd> <kbd>A</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> &#x21D2; Ã </li>
		  <li><kbd>E</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> &#x21D2; ẽ </li>
		  <li><kbd>Shift</kbd> <kbd>E</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> &#x21D2; Ẽ </li>
	  </ul>
  </li>
  <li>Type / after any vowel with a below dot to get the vowel with both a combining below dot and a combining acute accent. For the other two tone marks, follow this same method.<br/>For examples: <br/>
	  <ul style="font-family:Charis SIL">
		  <li><kbd>U</kbd> + <kbd>.</kbd> + <kbd>/</kbd> &#x21D2; ụ́ </li> 
		  <li><kbd>Shift</kbd> <kbd>U</kbd> + <kbd>.</kbd> + <kbd>/</kbd> &#x21D2; Ụ́ </li>
		  <li><kbd>E</kbd> + <kbd>.</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> &#x21D2; ẹ̃ </li>
		  <li><kbd>Shift</kbd> <kbd>E</kbd> + <kbd>.</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> &#x21D2; Ẹ̃ </li>
		  <li><kbd>O</kbd> + <kbd>.</kbd> + <kbd>Shift</kbd> <kbd>6</kbd> &#x21D2; ộ </li>
		  <li><kbd>Shift</kbd> <kbd>O</kbd> + <kbd>.</kbd> + <kbd>Shift</kbd> <kbd>6</kbd> &#x21D2; Ộ </li>
	  </ul>
  </li>
</ul>

<p><b>Note:</b>The glottal stop character is on the normal single quote key <kbd>'</kbd>. For example: ã'ụ́ (chicken), type <kbd>A</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> + <kbd>'</kbd> + <kbd>U</kbd> + <kbd>.</kbd> + <kbd>/</kbd>.
</p>

<h2>Full stop</h2>
<p><kbd>.</kbd> key would output the sentence final punctuation mark -- full stop -- if the character right before it is a vowel with a dot below or a tone mark.</p>
<p>For examples:</p>
	  <ul style="font-family:Charis SIL">
		  <li><kbd>Shift</kbd> <kbd>N</kbd> + <kbd>Y</kbd> + <kbd>I</kbd> + <kbd>/</kbd> + <kbd>Space</kbd> + <kbd>A</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> + <kbd>N</kbd> + <kbd>Y</kbd> + <kbd>A</kbd> + <kbd>/</kbd> + <kbd>Space</kbd> + <kbd>'</kbd> + <kbd>I</kbd> + <kbd>.</kbd> + <kbd>.</kbd> &#x21D2; Nyí ãnyá 'ị.	(You are grinding the grain.)</li>
		  <li><kbd>Shift</kbd> <kbd>M</kbd> + <kbd>A</kbd> + <kbd>/</kbd> + <kbd>Space</kbd> + <kbd>T</kbd> + <kbd>A</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> + <kbd>Space</kbd> + <kbd>L</kbd> + <kbd>A</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> + <kbd>.</kbd> &#x21D2; Má tã lã. (I'm reading.)</li> 
	  </ul>

<p>To get a vowel without a dot below at the end of the sentence, press the <kbd>.</kbd> key thrice after the vowel.</p>
<p>For example:</p>
	  <ul style="font-family:Charis SIL">
		  <li><kbd>Shift</kbd> <kbd>N</kbd> + <kbd>Y</kbd> + <kbd>I</kbd> + <kbd>/</kbd> + <kbd>Space</kbd> + <kbd>A</kbd> + <kbd>Shift</kbd> <kbd>`</kbd> + <kbd>N</kbd> + <kbd>Y</kbd> + <kbd>A</kbd> + <kbd>/</kbd> + <kbd>Space</kbd> + <kbd>I</kbd> + <kbd>D</kbd> + <kbd>A</kbd> + <kbd>.</kbd> + <kbd>.</kbd> + <kbd>.</kbd> &#x21D2; Nyí ãnyá ida.	(You are regrinding the grain.)</li> 
	  </ul>
	  
<h1>Keyboard Layout</h1>
<h2>Keyboard Layout on PC</h2>
<div id='osk' data-states='default shift'>

<h2>Keyboard Layout on mobile devices</h2>
<div id='tablet' data-states='default shift numeric'>
	<h3>Long Press</h3>
	<p>Press and hold on a key with a little dot on the top right corner of the key to reveal more keys, then roll over to the key you like.</p>
	<p><a href="touch_longpress.png"><img width="80%" class="keyboard" src="touch_longpress.png" alt="Long Press state" /></a></p>


</div>



