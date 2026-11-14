<?php
  $pagename = 'KW SRO Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    table.sro { border-collapse: collapse; margin-bottom: 1em; }
    table.sro th, table.sro td { text-align: left; padding: 4px 16px 4px 0; border-bottom: 1px solid #ddd; }
    table.sro .big { font-size: 1.25em; }
  END;
  require_once('header.php');
?>

<p>For Plains, Woods, Swampy, and East Cree, and for Nakawē (Saulteaux), in Standard Roman Orthography (SRO). It also works for Stoney Nakoda, Algonquin, and Mohawk.</p>

<h2>On a computer</h2>
<p>Type the letter, then the key for the mark you want.</p>
<table class="sro">
  <tr><th>Type</th><th>You get</th></tr>
  <tr><td><kbd>a</kbd> <kbd>\</kbd></td><td class="big">ā ē ī ō ū</td></tr>
  <tr><td><kbd>a</kbd> <kbd>]</kbd></td><td class="big">â ê î ô û</td></tr>
  <tr><td><kbd>a</kbd> <kbd>[</kbd></td><td class="big">á é í ó ú</td></tr>
  <tr><td><kbd>a</kbd> <kbd>`</kbd></td><td class="big">à è ì ò ù</td></tr>
  <tr><td><kbd>y</kbd> <kbd>[</kbd></td><td class="big">ý</td></tr>
  <tr><td><kbd>s</kbd> <kbd>\</kbd></td><td class="big">š</td></tr>
  <tr><td><kbd>a</kbd> <kbd>\</kbd> <kbd>\</kbd></td><td class="big">a\</td></tr>
  <tr><td><kbd>\</kbd> <kbd>\</kbd></td><td class="big">\</td></tr>
  <tr><td><kbd>[</kbd> <kbd>[</kbd></td><td class="big">[</td></tr>
  <tr><td><kbd>]</kbd> <kbd>]</kbd></td><td class="big">]</td></tr>
  <tr><td><kbd>`</kbd> <kbd>`</kbd></td><td class="big">`</td></tr>
</table>
<ul>
  <li>Some Nakawē writers use š and č: type <kbd>s</kbd> or <kbd>c</kbd>, then <kbd>\</kbd>.</li>
  <li>For East Cree and Stoney Nakoda, <kbd>u</kbd> then <kbd>]</kbd> gives û.</li>
  <li>The grave (à) is for Algonquin and Mohawk.</li>
  <li>Capitals work the same way: <kbd>A</kbd> <kbd>\</kbd> gives Ā.</li>
  <li>To replace a mark with a different one, press the key for the new mark: ā then <kbd>]</kbd> gives â.</li>
  <li>Backspace takes off the mark first.</li>
  <li>Every other key types as usual.</li>
</ul>

<h2>Desktop keyboard layout</h2>
<div id='osk' data-states='default shift'></div>

<h2>On a phone or tablet</h2>
<ul>
  <li>Hold a letter for its marked forms: a for ā, â, á, and à; s for š; c for č.</li>
  <li>Or tap <b>◌̄</b> after a vowel; hold it for <b>◌̂</b>, <b>◌́</b>, <b>◌̀</b>, or <b>◌̌</b> (after s or c).</li>
  <li>Tap <b>◌̄</b> again to take the mark off.</li>
  <li>The hyphen is beside the space bar.</li>
</ul>

<h2>Touch keyboard layout</h2>
<div id='osk-phone' data-states='default shift numeric'></div>

<p>Based on the FirstVoices Cree - Roman Orthography keyboard (MIT licence).</p>
