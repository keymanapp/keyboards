<?php
  $pagename = "Dega Keyboard Help";
  $pagetitle = $pagename;
  require_once('header.php');
?>

<p>
  <strong>Dega</strong> is a free keyboard for the indigenous languages of Vietnam's Central Highlands,
  including Rhade (Êđê), Jarai, Koho, Bahnar and Mnong. It works on Windows, macOS, Linux,
  iPhone, iPad, Android and the web.
</p>

<h2>Quick start</h2>
<p>Type the plain letter, then a second key to add the mark. Hold <kbd>Shift</kbd> for capitals.</p>
<table>
  <tr><th>To get</th><th>Type</th><th>Example</th></tr>
  <tr><td>â ê ô</td><td><kbd>a</kbd><kbd>a</kbd> · <kbd>e</kbd><kbd>e</kbd> · <kbd>o</kbd><kbd>o</kbd></td><td>amaao → amâo</td></tr>
  <tr><td>ơ ư</td><td><kbd>o</kbd><kbd>w</kbd> · <kbd>u</kbd><kbd>w</kbd> (or <kbd>u</kbd><kbd>u</kbd>)</td><td>jowrai → jơrai</td></tr>
  <tr><td>ă ĕ ĭ ŏ ŭ (breve)</td><td>vowel + <kbd>x</kbd></td><td>ax → ă</td></tr>
  <tr><td>đ ƀ č ñ</td><td><kbd>d</kbd><kbd>d</kbd> · <kbd>b</kbd><kbd>b</kbd> · <kbd>c</kbd><kbd>c</kbd> · <kbd>n</kbd><kbd>n</kbd></td><td>hddeh → hđeh</td></tr>
  <tr><td>â̆ ê̆ ô̆ ơ̆ ư̆</td><td>add <kbd>x</kbd> after the mark</td><td>oox → ô̆ · owx → ơ̆</td></tr>
</table>

<h2>Smart breve</h2>
<p>
  You can type <kbd>x</kbd> at the <strong>end of the word</strong>. Dega puts the breve on the last vowel.
</p>
<ul>
  <li>ananx → <strong>anăn</strong></li>
  <li>hlamx → <strong>hlăm</strong></li>
  <li>srangx → <strong>srăng</strong></li>
  <li>klongx → <strong>klŏng</strong></li>
</ul>

<h2>Typing English in Dega</h2>
<p>If a letter changes and you did not want it, <strong>press the same key once more</strong> to get the plain letters back:</p>
<ul>
  <li>s e e <kbd>e</kbd> → <strong>see</strong></li>
  <li>b o o <kbd>o</kbd> k → <strong>book</strong></li>
  <li>a d d <kbd>d</kbd> → <strong>add</strong></li>
  <li>b o x <kbd>x</kbd> → <strong>box</strong></li>
</ul>
<p>Each word is separate: after a space or punctuation, nothing you type changes the previous word.</p>

<h2>Typo fixes</h2>
<p>Common mistakes with two letters swapped are fixed as you type, using the Rhade dictionary:</p>
<ul>
  <li>suiah → <strong>suaih</strong></li>
  <li>mnuhi → <strong>mnuih</strong></li>
</ul>
<p>A word is never changed if it is already a correct word.</p>

<h2>Word suggestions (Rhade)</h2>
<p>
  On phones and tablets, install the <strong>Ede (Rhade) Dictionary Suggestions</strong> model in the Keyman app
  to see words above the keyboard as you type. More than 3,200 words from a curated Ede dictionary.
  Suggestions work even if you skip a mark: <em>anan</em> → anăn, <em>hdeh</em> → hđeh.
  Tap a suggestion to use it. We recommend keeping <strong>auto-correct off</strong> for Ede.
</p>

<h2>Phone and tablet</h2>
<ul>
  <li><strong>Long-press</strong> a letter for its Ede forms: <kbd>e</kbd> → ê ĕ ê̆ · <kbd>o</kbd> → ô ơ ŏ · <kbd>a</kbd> → â ă · <kbd>d</kbd> → đ</li>
  <li><kbd>😀</kbd> opens the emoji page; <kbd>abc</kbd> goes back to letters</li>
  <li><kbd>123</kbd> for numbers and symbols · <kbd>🌐</kbd> switches to your other keyboards</li>
  <li>Long-press <kbd>'</kbd> for ’ (as in Kơ’Ho)</li>
</ul>
<p><img src="touch_longpress.png" alt="Long-press on a key shows the Ede letters"></p>

<h2>Desktop shortcuts (Right Alt / AltGr)</h2>
<p>Hold <kbd>Right Alt</kbd> (Mac: <kbd>Right Option</kbd>) and press a key. Add <kbd>Shift</kbd> for capitals.</p>
<table>
  <tr><td><kbd>A</kbd> â</td><td><kbd>Q</kbd> ă</td><td><kbd>E</kbd> ê</td><td><kbd>W</kbd> ĕ</td><td><kbd>O</kbd> ô</td><td><kbd>R</kbd> ŏ</td></tr>
  <tr><td><kbd>P</kbd> ơ</td><td><kbd>U</kbd> ư</td><td><kbd>T</kbd> ŭ</td><td><kbd>I</kbd> ĭ</td><td><kbd>D</kbd> đ</td><td><kbd>B</kbd> ƀ</td></tr>
  <tr><td><kbd>C</kbd> č</td><td><kbd>N</kbd> ñ</td><td><kbd>X</kbd> ◌̆</td><td><kbd>Z</kbd> ◌̂</td><td><kbd>'</kbd> ’</td><td></td></tr>
</table>

<h2>Other marks</h2>
<ul>
  <li><kbd>i</kbd><kbd>^</kbd> → î · <kbd>u</kbd><kbd>^</kbd> → û (add <kbd>x</kbd><kbd>x</kbd> for î̆ û̆)</li>
  <li>Grave accent with <kbd>`</kbd>: a` → à · aa` → ầ · e` → è · o` → ò · u` → ù</li>
</ul>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'></div>

<h2>Phone Keyboard Layout</h2>
<div id='osk-phone' data-states='default shift numeric more emoji'></div>

<h2>Tablet Keyboard Layout</h2>
<div id='osk-tablet' data-states='default shift emoji'></div>
