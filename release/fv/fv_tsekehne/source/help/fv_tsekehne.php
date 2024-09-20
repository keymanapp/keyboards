<?php 
  $pagename = 'Tsek\'ehne Keyboard Help';
  $pagetitle = 'Tsek\'ehne Keyboard Help';
  $pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
    This keyboard is designed for the <b>Tsek'ehne</b> language of the BC Interior region of Canada.
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below),
    please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<img src="Sekani.png" alt="" height="198" width="514" border="0" /></h2>
<ul>
    <li>All accents are typed after the base character — a̱ is typed <kbd>a</kbd> then Left-bracket <kbd>[</kbd>
        <ul>
            <li>To type the grave accent ` use either the Slash key <kbd>/</kbd> or Backquote key <kbd>`</kbd> — à is
                typed <kbd>a</kbd> then <kbd>/</kbd> or <kbd>a</kbd> then <kbd>`</kbd></li>
            <li>To type the underline accent _ use the Left-bracket key <kbd>[</kbd> — a̱ is typed <kbd>a</kbd> then
                <kbd>[</kbd></li>
            <li>To type the grave-underline accent _̀ use the Right-bracket <kbd>]</kbd> — à̱ is typed <kbd>a</kbd>
                then <kbd>]</kbd></li>
        </ul>
    </li>
    <li>You can type the English value of the punctuation keys by holding down the Right-Alt or Option key — the Slash /
        is typed <kbd>Right-Alt</kbd>+<kbd>/</kbd> / (Windows) <kbd>⌥ Option</kbd>+<kbd>/</kbd> (Mac).</li>
    <li>
        Opening and closing quotes. For Mac users, Right-Alt is either of the Option Keys.
        <ul>
            <li> single: ‘ <kbd>Shift</kbd>+<kbd>`</kbd> — ’ <kbd>'</kbd></li>
            <li> double: “ <kbd>Shift</kbd>+<kbd>[</kbd> — ” <kbd>Shift</kbd>+<kbd>]</kbd></li>
            <li> single ‹ <kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+<kbd>9</kbd> — ›
                <kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+<kbd>0</kbd></li>
            <li> double « <kbd>Right-Alt</kbd>+<kbd>9</kbd> — » <kbd>Right-Alt</kbd>+<kbd>0</kbd></li>
        </ul>
    </li>
</ul>

<h2>Unicode Fonts</h2>
<p>The following fonts have been installed on your computer: <strong>Aboriginal Sans, Aboriginal Serif.</strong> Please
    use these fonts when typing in your language as they have been specially built to represent your language as
    accurately as possible. </p>
<h3><a href="http://www.languagegeek.com/font/fontdownload.html">Download the latest version of Aboriginal Sans and
        Aboriginal Serif</a></h3>

		<h2>Notes on touch layout</h2>
<div id='wikitext'>
    <div class='vspace'></div>
    <table border='1' style='border-collapse:collapse' cellpadding='5'>
        <tr>
            <th align='center'>`</th>
            <td align='center'>w</td>
            <td align='center'>e è e̱ è̱</td>
            <td align="center">r</td>
            <td align='center'>t</td>
            <td align='center'>y</td>
            <td align='center'>u ù u̱ ù̱</td>
            <td align='center'>i ì i̱ ì̱</td>
            <td align='center'>o ò o̱ ò̱</td>
            <td align="center">p</td>
        </tr>
        <tr>
            <td align='center'>a à a̱ à̱</td>
            <td align='center'>s</td>
            <td align='center'>d</td>
            <td align="center">f</td>
            <td align='center'>g</td>
            <td align='center'>h</td>
            <td align='center'>j</td>
            <td align='center'>k</td>
            <td align='center'>l</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align='center'>⇧</td>
            <td align='center'>z</td>
            <th align='center'>_</th>
            <td align='center'>c</td>
            <th align='center'>_̀</th>
            <td align='center'>b</td>
            <td align='center'>n</td>
            <td align='center'>m</td>
            <td align='center' colspan='2'>⌫</td>
        </tr>
		<tr>
            <td align='center'>123</td>
            <td align='center'>🌐</td>
			<td align='center'>' "</td>
            <td align='center' colspan='4'>space</td>
            <td align='center'>.</td>
            <td align='center' colspan='2'>⏎</td>
        </tr>
    </table>
    <div class='vspace'></div>
    <ul>
        <li>Keys with a red background are combining accents. On your mobile device, these keys will have green text.
        </li>
        <li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.
        </li>
		<li>Common punctuation can be found by pressing and holding the period key on the right side of the space bar.</li>
    </ul>
</div>

<br />

<h2>Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'></div>