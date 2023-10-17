<?php /*
  Name:        Kmhmu 2008
  Copyright:   2008
  Description: Kmhmu language keyboard and font (Lao script).  The Kmhmu font in this package has modified an unused Lao character to permit the display of some characters found in Kmhmu not included in the Unicode standard.  Keyboard layout follows standard Lao, with a few differences to simplify entry of Kmhmu text.

  Authors:     John Durdin
*/
  $pagename = 'Kmhmu 2008 (deprecated) Keyboard Help';
  $pagetitle = 'Kmhmu 2008  (deprecated) Keyboard Help';
  require_once('header.php');
?>
<link rel="stylesheet" media="screen" href="keydocs.css" type="text/css" />
<link rel="stylesheet" media="print" href="keydocs.css" type="text/css" />
<style type="text/css">
  p { font: 10pt Tahoma }
  h1 { font: bold 16pt Tahoma; color: #4444cc }
  h2 { font: bold 12pt Tahoma; color: #4444cc }
  span.kmhmu {font-family: Kmhmu OT; font-size: 12 pt }
</style>
<h1 style='margin-bottom: 2px'>Kmhmu 2008 Keyboard and Font</h1>
<p>Thank you for downloading and installing the <b>Kmhmu 2008</b> keyboard/font package for <i>Tavultesoft <b>Keyman</b></i>. </p>
<p>This package includes the <b>Kmhmu 2008</b> keyboard and the compatible font <b>Kmhmu OT</b>.</p>
<h2>Using the Kmhmu OT Font</h1>
<p>There is currently no Unicode standard encoding for Kmhmu, and standard Lao Unicode (OpenType) fonts do not permit all character sequences found in Kmhmu to be displayed correctly.
The <b>Kmhmu OT</b> font has been developed to work around those limitations, while keeping to the Unicode encoding for Lao characters.</p>
<p>In Microsoft Word and some other Microsoft applications, when selecting the <b>Kmhmu OT</b> font, it is usually necessary to set both the <i>Latin text</i> font and the <i>Complex script</i> font to <b>Kmhmu OT</b>.  A simple way to do this in Word is to create a paragraph (or character) style, and set the font for <i>"all scripts"</i> to be Kmhmu OT.  If the new style is added to your Normal template, it can be applied whenever entering Kmhmu text.</p><h2>Keyboard Layout Notes</h2>
<p>Keyboard layout (as shown below) follows the Lao standard, with the following minor differences to simplify entry of Kmhmu text:</p>

<table class='display' width='640 px'>
<tr><th width='40 px'>Shift</th><th width='100 px'>Key</th><th width='100 px'>Result</th><th>Notes</th></tr>
<tr><td>●</td><td>Y</td><td class='kmhmu'> ກ໌ </td><td></td></tr>
<tr><td>●</td><td>U</td><td class='kmhmu'> ຍ໌ </td><td></td></tr>
<tr><td></td><td>i</td><td class='kmhmu'> ຣ </td><td rowspan='2' class='note'>This follows the pre-2005 Lao typewriter convention, <br />
  since <span class='kmhmu'>ຣ</span> is widely used in Kmhmu while <span class='kmhmu'>ຮ</span> is rarely if ever used.</td></tr>
<tr><td>●</td><td>I</td><td class='kmhmu'>ຮ</td></tr>
<tr><td></td><td>space bar<br />(pressed once)</td><td>thin space</td><td rowspan='2' class='note'>To allow narrow spacing between words, the space bar inserts a (wrapping) thin-space when pressed once, or normal spaces if pressed more than once.</td></tr>
<tr><td></td><td>space bar<br />(twice or more)</td><td>normal space</td></tr>
<tr><td>●</td><td>|</td><td>ZWSP</td><td class='note'>Zero-width (wrapping) space character</td></tr>
<tr><td>●</td><td>%</td><td class='kmhmu'> ໌ </td><td class='note'>This mark used to form modified characters found in Kmhmu (but not in Lao) replaces the "Cancellation mark" (thanthakhat) found in normal Lao fonts, so can be entered using the same keystroke.  But in most cases, the Y and U keys would be used instead. </td></tr>

</table>
<br style="clear: left">
<h2 style="clear: left; page-break-before: always">Keyboard layout - Unshifted</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">*</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">ຢ</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">ຟ</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">ໂ</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">ຖ</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">ຸ</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">ູ</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">ຄ</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">ຕ</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">ຈ</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">ຂ</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">ຊ</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">ໍ</div>
</div>
<div class="key special" id="" style="width: 60px;
	background-image: url('key-backspace.png');">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="width: 52px;
	background-image: url('key-tab.png');">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">ົ</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ໄ</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ຳ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ພ</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ະ</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ິ</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ີ</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ຣ</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">ນ</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">ຍ</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">ບ</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">ລ</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
</div><br style="clear: left"><div class="key special" id="" style="width: 62px;
      background-image: url('key-capslock.png');">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">ັ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ຫ</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ກ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ດ</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">ເ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">້</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">່</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">າ</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">ສ</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">ວ</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">ງ</div>
</div>
<div class="key special" id="" style="width: 70px;
      background-image: url('key-enter.png');">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="width: 80px;">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">ຜ</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ປ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ແ</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ອ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ຶ</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">ື</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">ທ</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">ມ</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">ໃ</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">ຝ</div>
</div>
<div class="key special" id="" style="
    width: 90px;

      background-image: url('key-shiftr.png');
      ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="width: 60px;
      background-image: url('key-ctrll.png');">
<div class="keycap">L Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="width: 50px;
      background-image: url('key-altl.png');">
<div class="keycap">L ALt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="width: 50px;
      background-image: url('key-altr.png');">
<div class="keycap">R ALt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="width: 60px;
      background-image: url('key-ctrlr.png');">
<div class="keycap">R Ctrl</div>
</div>
<br style="clear: left" />
<br style="clear: left" />
<h2 style="clear:left">Keyboard layout - with Shift</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">/</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">1</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">2</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">3</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">4</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">໌</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">ຼ</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">5</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">6</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">7</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">8</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">9</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">ໍ່</div>
</div>
<div class="key special" id="" style="width: 60px;
      background-image: url('key-backspace.png');">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="width: 52px;
      background-image: url('key-tab.png');">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">ົ້</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">0</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">້ຳ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">_</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">+</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ກ໌</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ຍ໌</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ຮ</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">ໜ</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">ຽ</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">-</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">ຫຼ</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class='keytext2'>ZWSP</div>
</div><br style="clear: left"><div class="key special" id=""
  style="width: 62px; background-image: url('key-capslock.png'); ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">ັ້</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">;</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">.</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">,</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">:</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">໊</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">໋</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">!</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">?</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">%</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">=</div>
</div>
<div class="key special" id="" style="width: 70px;
      background-image: url('key-enter.png');">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="width: px;">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">"</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">(</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ຯ</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">x</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ຶ້</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">ື້</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">ໆ</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">ໝ</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">$</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">)</div>
</div>
<div class="key special" id="" style="width: 90px;
      background-image: url('key-shiftr.png');">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="width: 60px;
      background-image: url('key-ctrll.png');">
<div class="keycap">L Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="width: 50px;
      background-image: url('key-altl.png');">
<div class="keycap">L ALt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="width: 50px;
      background-image: url('key-altr.png');">
<div class="keycap">R ALt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="width: 60px;
      background-image: url('key-ctrlr.png');">
<div class="keycap">R Ctrl</div>
</div>
<br style="clear: left"><br style="clear: left"><h2 style="clear: left">Keyboard layout - with Right
Alt</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">໑</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">໒</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">໓</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">໔</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">໕</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">໖</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">໗</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">໘</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">໙</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
</div>
<div class="key special" id="" style="width: 60px;
      background-image: url('key-backspace.png');">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="width: 52px;
      background-image: url('key-tab.png');">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">໐</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">[</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">]</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
</div><br style="clear: left"><div class="key special" id="" style="width: 62px;
      background-image: url('key-capslock.png');">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
</div>
<div class="key special" id="" style="width: 70px;
      background-image: url('key-enter.png');">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="width: px;">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
</div>
<div class="key special" id="" style="
    width: 90px;

      background-image: url('key-shiftr.png');
      ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="width: 60px;
      background-image: url('key-ctrll.png');">
<div class="keycap">L Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="width: 50px;
      background-image: url('key-altl.png');">
<div class="keycap">L ALt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="width: 50px;
      background-image: url('key-altr.png');">
<div class="keycap">R ALt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="width: 60px;
      background-image: url('key-ctrlr.png');">
<div class="keycap">R Ctrl</div>
</div>
<p><br style="clear: left"><br /><br /></p>


<h2>Further Information<h2>

<p>Version 1.0 for Keyman Desktop 7.0. Released 29 August 2008. Created by John Durdin.</p>
<p>This keyboard package may be freely used or distributed in unmodified form.</p>
