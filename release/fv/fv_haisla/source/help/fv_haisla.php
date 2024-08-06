<?php
$pagename = 'Haisla Keyboard Help';
$pagetitle = 'Haisla Keyboard Help';
$pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>

<p>
    The Haisla keyboard has been developed by FirstVoices and updated to suit their orthographic changes.
<p>
<p>
    More information about the Haisla archive on FirstVoices can be found here:
    <h3><a href="https://www.firstvoices.com/haisla/">Haisla</a></h3>
</p>

<h1>Keyboard Layout</h1>

<p>
  The Haisla keyboard uses the English keyboard as a base, with added key combinations in order to create special characters.</p>
  <li>Most special characters are typed by typing a punctuation mark followed by a letter <strong>without</strong> a space between them.
    <ul>
      <li>To type the Acute accent ´ use the Semicolon key <kbd>;</kbd> followed by a vowel  —  é is typed <kbd>;</kbd> then <kbd>e</kbd></li>
      <li>To type the Combining Apostrophe ’ use the Semicolon key <kbd>;</kbd> followed by a consonant  —  m̓ is typed <kbd>;</kbd> then <kbd>m</kbd></li>
      <li>To type the Macron accent ¯ use the Equals key <kbd>=</kbd>  —  x̄ is typed <kbd>=</kbd> then <kbd>x</kbd></li>
      <li>To type the l with tilde <b>ɫ</b> use the Equals key <kbd>=</kbd> followed by the l key <kbd>l</kbd></li>
    </ul>
  </li>
  <li>The Lambda, Barred Lambda, and Barred Lambda with Apostrophe are typed by using combinations of the CTRL, l, and hyphen keys.
    <ul>
      <li><b>λ</b> is typed <kbd>CTRL</kbd>+<kbd>l</kbd></li>
      <li><b>ƛ</b> is typed <kbd>CTRL</kbd>+<kbd>l</kbd>+<kbd>-</kbd></li>
      <li><b>ƛ̓</b> is typed <kbd>CTRL</kbd>+<kbd>l</kbd>+<kbd>-</kbd>+<kbd>-</kbd></li>
    </ul>
  </li>
  <li>The raised w <b>ʷ</b> is typed <kbd>Right-Alt</kbd>+<kbd>w</kbd> (Windows) or <kbd>⌥ Option</kbd>+<kbd>w</kbd> (Mac)</li>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Unicode Fonts</h2>
<p>The following fonts have been installed on your computer: <strong>Aboriginal Sans, Aboriginal Serif.</strong> Please
    use these fonts when typing in your language as they have been specially built to represent your language as
    accurately as possible. </p>
<h3><a href="http://www.languagegeek.com/font/fontdownload.html">Download the latest version of Aboriginal Sans and
        Aboriginal Serif</a></h3>

<h3>Notes on touch layout</h3>
<div id='wikitext'>
    <div class='vspace'></div>
    <table border='1' style='border-collapse:collapse' cellpadding='5'>
        <tr>
            <td align='center'>q q̓</td>
            <td align='center'>w w̓</td>
            <td align='center'>e é</td>
            <td align='center'>r</td>
            <td align='center'>t t̓</td>
            <td align='center'>y y̓</td>
            <td align='center'>u ú</td>
            <td align='center'>i í</td>
            <td align='center'>o</td>
            <td align='center'>p p̓</td>
        </tr>
        <tr>
            <td align='center'>a á</td>
            <td align='center'>s</td>
            <td align='center'>d</td>
            <td align='center'>f</td>
            <td align='center'>g ḡ</td>
            <td align='center'>h</td>
            <td align='center'>j</td>
            <td align='center'>k k̓</td>
            <td align='center'>l l̓ ɫ λ ƛ ƛ̓</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align='center'>⇧</td>
            <td align='center'>z</td>
            <td align='center'>x x̄</td>
            <td align='center'>c c̓</td>
            <td align='center'>v</td>
            <td align='center'>b</td>
            <td align='center'>n n̓</td>
            <td align='center'>m m̓</td>
            <td align='center' colspan='2'>⌫</td>
        </tr>
        <tr>
            <td align='center'>123</td>
            <td align='center'>🌐</td>
            <th align='center'>’</th>
            <td align='center' colspan='4'>space</td>
            <td align='center'>.</td>
            <td align='center' colspan='2'>⏎</td>
        </tr>
    </table>

    <div class='vspace'></div>

    <ul>
        <li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</li>
        <li>Capital forms for λ, ƛ and ƛ̓ are unavailable.</li>
        <li>Common punctuation marks can be found by pressing and holding the period key on the right side of the space
            bar.</li>
    </ul>