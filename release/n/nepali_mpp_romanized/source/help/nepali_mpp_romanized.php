<?php 
  $pagename = 'Nepali MPP Romanized Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
      key, span.kbd { background: none repeat scroll 0% 0% #F7F7F7; padding: 0.1em 0.6em; border: 1px solid #CCC; font-size: 10pt; color: #333; box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 2px #FFF inset; border-radius: 3px; display: inline-block; margin: 0px 0.1em; text-shadow: 0px 1px 0px #FFF; line-height: 1.4; white-space: nowrap; }
END;
  require_once('header.php');
?>

<p>
    Authentic Nepali Romanized keyboard layout conforming strictly to the official Madan Puraskar Pustakalaya (MPP) &amp; Language Technology Kendra (LTK) specification.
</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Special Keys &amp; Ligatures</h2>
<ul>
  <li><key>$</key> (Shift+4): Generates the official Nepali rupee symbol ligature <b>रु.</b> (U+0930 U+0941 U+002E).</li>
  <li><key>=</key>: Zero-Width Joiner (ZWJ, U+200D).</li>
  <li><key>+</key> (Shift+=): Zero-Width Non-Joiner (ZWNJ, U+200C).</li>
  <li><key>/</key>: Halanta / Virama (्, U+094D).</li>
  <li><key>.</key>: Nepali Danda (।, U+0964).</li>
  <li><key>L</key> (Shift+l): Nepali Double Danda (॥, U+0965).</li>
  <li><key>~</key> (Shift+`): Avagraha (ऽ, U+093D).</li>
  <li><key>`</key>: Nukta (़, U+093C).</li>
</ul>

<h2>Tablet Keyboard Layout</h2>
<div id='osk-tablet' data-states='default shift symbol'>
</div>

<h2>Phone Keyboard Layout</h2>
<div id='osk-phone' data-states='default shift numeric'>
</div>
