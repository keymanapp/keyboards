<?php 
  $pagename = 'Dzongkha (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
	samp{font-family: 'DDC Uchen', 'Tibetan Machine Uni', 'Microsoft Himalaya'; color:blue;}
	kbd {color:black;}
	p samp {font-size:22pt; line-height:.8em;}
	p kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px; padding:0px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
END;
  require_once('header.php');
?>


	<p>This keyboard is designed for the Dzongkha language of Bhutan. The keyboard follows the current (October 2009) official Dzongkha layout approved by the Department of Information Technology and Dzongkha Development Authority of the Government of Bhutan. This keyboard is fully compliant with the <a href='http://unicode.org/standard/standard.html'>Unicode Standard</a>.</p>

	<h4>Basic Function</h4>

	<p>This keyboard has four states: unshifted, Shift, AltGr, and Shift AltGr. The AltGr state can also be called Right Alt. If your hardware keyboard does not have an <kbd>AltGr</kbd> key, you can simulate it. From the Options tab of Keyman Configuration, tick 'Simulate AltGr with Ctrl+Alt' and click <button type='button'>OK</button>. You can then use <kbd>Ctrl</kbd>+<kbd>Alt</kbd> to type any keys in the AltGr state and <kbd>Shift</kbd>+<kbd>Ctrl</kbd>+<kbd>Alt</kbd> to type any keys in the Shift AltGr state.</p>
	
	<p>You can also type Latin letters while using this keyboard. To get the standard Latin keystroke for any key instead of the Dzongkha output, type <kbd>$</kbd> first. For example, to get <samp>%</samp> instead of <samp>༎</samp> type <kbd>$</kbd><kbd>%</kbd>.
	
	<h4>On Screen Keyboard</h4>
	
	<p>This keyboard includes an On Screen Keyboard view for easy reference. The On Screen Keyboard works best when associated with a QWERTY US layout.</p>

	<h4>Fonts</h4>
	<p>This is a Unicode keyboard and works with any Unicode font which has support for Tibetan script. The <b>DDC Uchen</b> font fully supports this keyboard and is installed with the keyboard. </p>
  </section>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>
