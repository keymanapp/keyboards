<?php
  $pagename = 'CreeBoard Keyboard Help';
  $pagetitle = 'CreeBoard Keyboard Help';
  $pagestyle = <<<END
	  	.cree {font-family: 'BJCree UNI';}
      .msg-important { color: rgb(238, 0, 0); background-color: rgb(255, 213, 213); border: 2px dashed rgb(238, 0, 0); padding: 8pt 16pt; margin: 8pt 0; display: inline-block; }
END;
  require_once('header.php');
?>
<p>
    This Cree keyboard is based on the Cree School Board Old Macintosh keyboard layout. It a "typewriter-style" layout (type one key for one character). It uses Unified Canadian Aboriginal Syllabics.
</p>
<div class="msg-important">
  <p><b>Important Notice:</b> The default for this keyboard is for characters to be composed. For example, this sequence "_k" or "Ck" would produce ᐗ (U+1417) and "_ + RALT + k" would product ᐙ (U+1419).</p>
  <p>You can change the keyboard to produce decomposed characters in two ways. The preferred method is to use <b>Keyman → Configuration</b>.</p>
<ol>
	<li><b>Using Keyman Configuration</b>: On Windows or Linux, go to <b>Keyman → Configuration → Keyboard Layouts → CreeBoard → Keyboard Options</b> and choose <b>Decomposed</b>. 
	You may need to close and reopen your input application and keyboard, before the default behavior changes. This method will change your default to <i>Decomposed</i> and 
	everytime you switch to this keyboard it will remain using the <i>Decomposed</i> style until you change it back to <i>Composed</i> style using <b>Keyman configuration</b>.</li>
<li><b>Using RALT hotkeys</b> (primarily needed for macOS): It is also possible to switch from <i>Composed</i> to <i>Decomposed</i> using the RALT HYPHEN sequence (RALT+-). 
	Switch back to <i>Composed</i> using the RALT EQUAL sequence (RALT+=). This method will change to <i>Decomposed</i> during just this session of 
	using the keyboard. After you stop using the keyboard it will return to <i>Composed</i>.</li>
</ol>
</div>

<h1>Keyboard Layout</h1>
<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>


