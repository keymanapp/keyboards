<?php
  $pagename = 'Kmhmu (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
  .kmhmu {font-family: "Leelawadee UI","Kmhmu MX","Kmhmu OT"; font-size: 12pt; }
  .display { border-collapse: collapse; width:640px;}
  .narrow {width:40px;}
  .medium {width:100px;}
END;
  require_once('header.php');
?>

<h2>Desktop Keyboard Layout Notes</h2>
<p>Keyboard layout (as shown below) follows the Lao standard, with the following minor differences to simplify entry of Kmhmu text:</p>

<table class='display'>
<tr>
  <th class="narrow">Shift</th>
  <th class="medium">Key</th>
  <th class="medium">Result</th>
  <th>Notes</th></tr>
<tr>
  <td>●</td>
  <td>U</td>
  <td class='kmhmu'> ໟ </td>
  <td></td>
</tr>
<tr>
  <td>●</td>
  <td>Y</td>
  <td class='kmhmu'> ໞ </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>i</td>
  <td class='kmhmu'> ຣ </td>
  <td rowspan='2' class='note'>This follows the pre-2005 Lao typewriter convention, <br />
  since <span class='kmhmu'>ຣ</span> is widely used in Kmhmu while <span class='kmhmu'>ຮ</span> is rarely if ever used.</td>
</tr>
<tr>
  <td>●</td>
  <td>I</td>
  <td class='kmhmu'>ຮ</td>
</tr>
<tr>
  <td></td>
  <td>space bar<br />(pressed once)</td>
  <td>thin space</td>
  <td rowspan='2' class='note'>To allow narrow spacing between words, the space bar inserts a (wrapping) thin-space when pressed once, or normal spaces if pressed more than once.</td>
</tr>
<tr>
  <td></td>
  <td>space bar<br />(twice or more)</td>
  <td>normal space</td>
</tr>
<tr>
  <td>●</td>
  <td>|</td>
  <td>ZWSP</td>
  <td class='note'>Zero-width (wrapping) space character</td>
</tr>
<tr>
  <td>●</td>
  <td>%</td>
  <td class='kmhmu'> ໌ </td>
  <td class='note'>This mark used to form modified characters found in Kmhmu (but not in Lao) replaces the "Cancellation mark" (thanthakhat) found in normal Lao fonts, so can be entered using the same keystroke.  But in most cases, the Y and U keys would be used instead. </td>
</tr>
</table>
<h2>Mobile  Keyboard Layout Notes</h2>
<p>Mobile Keyboard follows the same layout as the Desktop keyboard with minor exceptions.  The Lao numerals are made available as a choice via long pressing the Arabic Numeral</p>

<table class='display'>
<tr>
  <th class="narrow">Long Press </th>
  <th class="medium">Key</th>
  <th class="medium">Result</th>
<tr>
  <td>●</td>
  <td>1</td>
  <td class='kmhmu'> ໑ </td>
</tr>
<tr>
  <td>●</td>
  <td>2</td>
  <td class='kmhmu'> ໒ </td>
</tr>
<tr>
  <td>●</td>
  <td>3</td>
  <td class='kmhmu'> ໓ </td>
</tr>
<tr>
  <td>●</td>
  <td>4</td>
  <td class='kmhmu'> ໔ </td>
</tr>
<tr>
  <td>●</td>
  <td>5</td>
  <td class='kmhmu'> ໕ </td>
</tr>
<tr>
  <td>●</td>
  <td>6</td>
  <td class='kmhmu'> ໖ </td>
</tr>
<tr>
  <td>●</td>
  <td>7</td>
  <td class='kmhmu'> ໗ </td>
</tr>
<tr>
  <td>●</td>
  <td>8</td>
  <td class='kmhmu'> ໘ </td>
</tr>
<tr>
  <td>●</td>
  <td>9</td>
  <td class='kmhmu'> ໙ </td>
</tr>
<tr>
  <td>●</td>
  <td>0</td>
  <td class='kmhmu'> ໐ </td>
</tr>
<tr>
  <td>●</td>
  <td>(</td>
  <td class='kmhmu'> [ or {</td>
</tr>
<tr>
  <td>●</td>
  <td>)</td>
  <td class='kmhmu'> ] or }</td>
</tr>
</table>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default symbol'>
</div>

<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<h2 style="clear: left; page-break-before: always">Mobile Keyboard layout - with Longpress</h2>
<p><img alt="Kmhmu (SIL) Mobile keyboard layout: Longpress" src="sil_kmhmumobile_longpress.jpg"/></p>

<h2>Fonts</h2>
  <p>The font <b>Kmhmu OT 2.002</b> and <b>Kmhmu MX</b> have been included with the keyboard layout.</p>
  <p>Both font will be installed on Windows, but Kmhmu OT 2.002 is selected by default for OSK and Keyman app.</p>
  <p>When using outside Keyman app, the default system font may be used instead.</p>
