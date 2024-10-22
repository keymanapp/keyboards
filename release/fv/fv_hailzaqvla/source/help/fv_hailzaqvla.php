<?php
$pagename = 'Haíɫzaqvḷa Keyboard Help';
$pagetitle = 'Haíɫzaqvḷa Keyboard Help';
$pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

require_once ('header.php');
?>

<p style='margin: 16px 0 0 0'>
  This keyboard is designed for the <b>Haíɫzaqvḷa</b> language of the BC Coast region of Canada.
</p>
<p>
  If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below),
  please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<div class='vspace'></div>

<br />

<h2>Keyboard Layout (Desktop)</h2>
<div id='osk' data-states='default shift alt shift-alt'></div>

<h3>Notes on desktop layout</h3>

<ul>
  <li>ħ: type the Backquote key <kbd>`</kbd> (next to the number 1).</li>
  <li>λ: type the Left-bracket key <kbd>[</kbd>. (Capital is not available in all fonts.)</li>
  <li>ƛ: type the Right-bracket key <kbd>]</kbd>. (Capital is not available in all fonts.)</li>
  <li>ɫ: type the Backslash key <kbd>\</kbd>.</li>
  <li>ʔ: hold <kbd>Right-Alt</kbd> (Windows) or <kbd>⌥ Option</kbd> (Mac) key and type the Slash key <kbd>/</kbd>.</li>
  <ul>
    <li><b>NOTE</b>: When using Google Docs, <kbd>Right-Alt</kbd> or <kbd>⌥ Option</kbd> + <kbd>/</kbd> is already used
      as a shortcut. ʔ can instead be typed <kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+<kbd>/</kbd> (Windows) / <kbd>⌥
        Option</kbd>+<kbd>Shift</kbd>+<kbd>/</kbd></li>
  </ul>
  <li>ǧ x̌:
    <ul>
      <li>Type g/x, then hold <kbd>Shift</kbd> and press 6 to add the extra ˇ mark.</li>
      <li>OR hold <kbd>Right-Alt</kbd> / <kbd>⌥ Option</kbd> and type g/x.</li>
    </ul>
  </li>
  <li>ḷ ṃ ṇ:
    <ul>
      <li>Type l/m/n, then hold <kbd>Shift</kbd> and press the period key <kbd>.</kbd> to add the extra dot.</li>
      <li>OR hold <kbd>Right-Alt</kbd> / <kbd>⌥ Option</kbd> and type l/m/n.
        <br><em>Note: <kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+<kbd>m</kbd> is used in Keyman by default to open the Keyman
          menu, so this method cannot be used to type Ṃ. You must either use the first method, or go to Configuration <
            Hotkeys in the Keyman menu to remove that default.</em>
      </li>
    </ul>
  </li>
  <li>p̓ t̓ a̓, etc: Type the letter you want, then hold SHIFT and press the comma key <kbd>,</kbd> to add the glottal.
  </li>
  <li>á ú, à ù, etc:
    <ul>
      <li>Type the letter you want, then hold <kbd>Shift</kbd> and press the hyphen key <kbd>-</kbd> to add the ´
        accent.</li>
      <li>Type the letter you want, then hold <kbd>Right-Alt</kbd> / <kbd>⌥ Option</kbd> and press the Backquote key
        <kbd>`</kbd> (next to the number 1) to add the ` accent.</li>
    </ul>
  </li>
  <li>For punctuation keys that were replaced with some other letter or accent, you can get the original symbol by
    pressing <kbd>Right-Alt</kbd> / <kbd>⌥ Option</kbd>. To type the Backslash \, type <kbd>Right-Alt</kbd>+<kbd>\</kbd>
    (Windows) / <kbd>⌥ Option</kbd>+<kbd>\</kbd> (Mac).</li>
</ul>

<h2>Unicode Fonts</h2>
<p>The following font has been installed on your computer: <strong>Noto Sans Heiltsuk</strong> Please
    use these fonts when typing in your language as they have been specially built to represent your language as
    accurately as possible. </p>
<p><b>NOTE:</b> This version of the keyboard contains Unicode characters that have not yet been released and some characters may not work as intended in emails, social media, or texts until the new characters gain wider support.</p>
<p>Using Noto Sans Heiltsuk in your word processor will allow you to type the new characters as intended.</p>

<div class='vspace'></div>

<h2>Keyboard Layout (Mobile/Touch)</h2>
<div id='osk-tablet' data-states='default shift numeric'></div>

<h3>Notes on touch layout</h3>
<div id='wikitext'>
  <div class='vspace'></div>
  <table border='1' style='border-collapse:collapse' cellpadding='5'>
    <tr>
      <td align='center'>q q̓</td>
      <td align='center'>w w̓</td>
      <td align='center'>e é e̓</td>
      <td align='center'>ʔ</td>
      <td align='center'>t t̓</td>
      <td align='center'>y y̓</td>
      <td align='center'>u ú u̓</td>
      <td align='center'>i í i̓</td>
      <td align='center'>ɫ</td>
      <td align='center'>p p̓</td>
    </tr>
    <tr>
      <td align='center'>a á a̓ ǎ 'ǎ</td>
      <td align='center'>s</td>
      <td align='center'>d</td>
      <td align='center'>λ</td>
      <td align='center'>g ǧ</td>
      <td align='center'>h h̓ ħ</td>
      <td align='center'>ƛ ƛ̓</td>
      <td align='center'>k k̓</td>
      <td align='center'>l l̓ ḷ ḷ́ ḷ̓</td>
      <td align='center'>' "</td>
    </tr>
    <tr>
      <td align='center'>⇧</td>
      <td align='center'>z</td>
      <td align='center'>x x̌</td>
      <td align='center'>c c̓</td>
      <td align='center'>v</td>
      <td align='center'>b</td>
      <td align='center'>n n̓ ṇ ṇ́ ṇ̓</td>
      <td align='center'>m m̓ ṃ ṃ́ ṃ̓</td>
      <td align='center'colspan='2'>⌫</td>
    </tr>
    <tr>
            <td align='center'>123</td>
            <td align='center'>🌐</td>
            <th align="center">ʼ</th>
            <td align='center' colspan='4'>space</td>
            <td align='center'>.</td>
            <td align='center'colspan='2'>⏎</td>
        </tr>
  </table>

  <div class='vspace'></div>

  <ul>
    <li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</li>
    <li>The combining apostrophe key (ʼ) is to the left of the spacebar. You can use this instead of the hold-select
      menu.</li>
    <li>Capital forms for ƛ and λ are available, but will not work with all fonts.</li>
  </ul>

</div>