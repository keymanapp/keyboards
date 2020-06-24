<?php
  $pagename = 'ᓀᐦᐃᔭᐍᐏᐣ Keyboard Help';
  $pagetitle = 'ᓀᐦᐃᔭᐍᐏᐣ Keyboard Help';
  $pagestyle = <<<END

table.keyboard-layer {
  margin: 12px;
  border-collapse:collapse;
  font-family: system-ui, -apple-system, "Segoe UI", Roboto, Tahoma, Euphemia, "Euphemia UCAS", "Aboriginal Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
table.keyboard-layer,
table.keyboard-layer td,
table.keyboard-layer th { border: 1px solid #888; }
table.keyboard-layer td {
  min-width: 1em;
  padding: 5px;
  text-align: center;
}
td.keyboard-layer__special { background-color: #fcc; }
td.keyboard-layer__empty { background-color: #888; }
END;

  require_once('header.php');
?>

<p>
This keyboard is for writing <b>ᓀᐦᐃᔭᐍᐏᐣ</b> (Plains Cree syllabics).
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<h2>Touch layout</h2>
<div class='cree'>
<h3>Unshifted</h3>
<table class="keyboard-layer">
  <tr><td align='center'>ᐃ</td><td>ᐱ</td><td>ᑎ</td><td>ᑭ</td><td>ᒋ</td><td>ᒥ</td><td>ᓂ</td><td>ᓯ</td><td>ᔨ</td><td>ᐦ</td></tr>
  <tr><td>ᐊ</td><td>ᐸ</td><td>ᑕ</td><td>ᑲ</td><td>ᒐ</td><td>ᒪ</td><td>ᓇ</td><td>ᓴ</td><td>ᔭ</td><td>ᕽ</td></tr>
  <tr><td>⇧</td><td>ᑊ</td><td>ᐟ</td><td>ᐠ</td><td>ᐨ</td><td>ᒼ</td><td>ᐣ</td><td>ᐢ</td><td>ᐩ</td><td>⌫</td></tr>
  <tr><td>123</td><td>🌐</td><td class="keyboard-layer__special">◌̇</td><td colspan="4">space</td><td class="keyboard-layer__special">◌ᐧ</td><td>ᐤ</td><td>⏎</td></tr>
</table>

<h3>Shifted</h3>
<table class="keyboard-layer">
  <tr><td>ᐁ</td><td>ᐯ</td><td>ᑌ</td><td>ᑫ</td><td>ᒉ</td><td>ᒣ</td><td>ᓀ</td><td>ᓭ</td><td>ᔦ</td><td>ᓬ</td></tr>
  <tr><td>ᐅ</td><td>ᐳ</td><td>ᑐ</td><td>ᑯ</td><td>ᒍ</td><td>ᒧ</td><td>ᓄ</td><td>ᓱ</td><td>ᔪ</td><td>ᕒ</td></tr>
  <tr><td>⇧</td><td class="keyboard-layer__empty" colspan="2"></td><td>ᖧ</td><td>ᖨ</td><td>ᖪ</td><td>ᖬ</td><td>ᖮ</td><td class="keyboard-layer__empty"></td><td>⌫</td></tr>
  <tr><td>123</td><td>🌐</td><td class="keyboard-layer__special">◌̇</td><td colspan="4">space</td><td class="keyboard-layer__special">◌ᐧ</td><td>ᐤ</td><td>⏎</td></tr>
</table>
<aside>Keys with a red background are combining accents.</aside>
</div>
<h3>Alternate Names</h3>
<ul>
  <li>Plains Cree</li>
  <li>Cree (Y-dialect)</li>
  <li>nêhiyawêwin</li>
</ul>

<h2>Keyboard Layout</h2>
<div id='osk-tablet' data-states='default shift numeric'></div>
