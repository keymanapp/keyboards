<?php 
  $pagename = 'Cham (Eastern) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
  samp {font-family: Cham East BinhThuan; font-size:20pt;   }
  kbd {color:black; font: 0.8em sans-serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
END;
  require_once('header.php');
?>
<p>
  This keyboard is for the Eastern Cham language using the Cham script.
</p>

  <h2>Desktop Keyboard layout</h2>

<p><kbd>~</kbd>, <kbd>`</kbd>, <kbd>=</kbd>, and <kbd>+</kbd> are all “Escape Keys”.</p>
<p>Press any “Escape key” plus a consonant to produce the final consonant form.</p>
<p>Press any “Escape key” plus a punctuation key (based on US Qwerty) to produce that punctuation character.</p>
<p>Press <kbd>/</kbd> twice for <samp>꩞</samp>; press <kbd>/</kbd> three times for <samp>꩟</samp></p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>
