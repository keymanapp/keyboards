<?php 
  $pagename = 'Dakelh Keyboard Help';
  $pagetitle = 'Dakelh Keyboard Help';
  $pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
    This keyboard is designed for the <b>Dakelh</b> language of the BC Interior region of Canada.
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below),
    please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<img src="DakelhLatin.png" alt="" height="198" width="514" border="0" /></h2>
<ul>
    <li>The underlined letters s̲, z̲, t̲s̲, and d̲z̲ each have their own key. To type the underline accent separately,
        use the Backquote key <kbd>`</kbd> (left of the 1 key).</li>
    <li>To type the acute accent use the Slash key <kbd>/</kbd> — á is typed <kbd>a</kbd>+<kbd>/</kbd></li>
    <li>You can type the original English punctuation by holding down the Right-Alt or Option key. The Semicolon ; is
        typed <kbd>Right-Alt</kbd>+<kbd>;</kbd> (Windows) <kbd>⌥ Option</kbd>+<kbd>;</kbd> (Mac).
        <ul>
            <li>NOTE: When using Google Docs, Slash / is typed <kbd>Right-Alt</kbd>+<kbd>SHIFT</kbd>+<kbd>/</kbd>
                (Windows) or <kbd>⌥ Option</kbd>+<kbd>SHIFT</kbd>+<kbd>/</kbd> (Mac)</li>
        </ul>
    </li>
    <li>Opening and closing quotes. For Mac users, Right-Alt is either of the Option Keys.
        <ul>
            <li>single: ‘ <kbd>SHIFT</kbd>+<kbd>`</kbd> — ’ Apostrophe</li>
            <li>double: “ <kbd>SHIFT</kbd>+<kbd>-</kbd> — ” <kbd>SHIFT</kbd>+<kbd>=</kbd></li>
            <li>single ‹ <kbd>Right-Alt</kbd>+<kbd>SHIFT</kbd>+<kbd>9</kbd> — › <kbd>Right-Alt</kbd>+<kbd>SHIFT</kbd>+<kbd>0</kbd>
            </li>
            <li>double « <kbd>Right-Alt</kbd>+<kbd>9</kbd> — » <kbd>Right-Alt</kbd>+<kbd>0</kbd></li>
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
            <th align='center'>_</th>
            <td align='center'>w</td>
            <td align='center'>e é</td>
            <td align='center'>r</td>
            <td align='center'>t t̲s̲</td>
            <td align='center'>y</td>
            <td align='center'>u ú</td>
            <td align='center'>i í</td>
            <td align='center'>o ó</td>
            <td align='center'>p</td>
        </tr>
        <tr>
            <td align='center'>a á</td>
            <td align='center'>s s̲</td>
            <td align='center'>d d̲z̲</td>
            <td align='center'>f</td>
            <td align='center'>g</td>
            <td align='center'>h</td>
            <td align='center'>j</td>
            <td align='center'>k</td>
            <td align='center'>l</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align='center'>⇧</td>
            <td align='center'>z z̲</td>
            <th align='center'>´</th>
            <td align='center'>c</td>
            <td align='center'>v</td>
            <td align='center'>b</td>
            <td align='center'>n</td>
            <td align='center'>m</td>
            <td align='center' colspan='2'>⌫</td>
        </tr>
        <tr>
            <td align='center'>123</td>
            <td align='center'>🌐</td>
            <td align='center'>' ’: "</td>
            <td align='center' colspan='4'>space</td>
            <td align='center'>.</td>
            <td align='center' colspan='3'>⏎</td>
        </tr>
    </table>
    <div class='vspace'></div>
    <ul>
        <li>Keys with a red background are combining accents. On your mobile device, these keys will have green text.
        </li>
        <li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</li>
        <li>Common punctuation marks can be found by pressing and holding the period key on the right side of the space
            bar.</li>
    </ul>
    <div class='vspace'></div>

    <br />

    <h2>Keyboard Layout</h2>
    <div id='osk' data-states='default shift rightalt rightalt-shift'></div>