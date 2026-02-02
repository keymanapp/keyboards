<?php 
  $pagename = 'Nɬeʔkepmxcín Keyboard Help';
  $pagetitle = 'Nɬeʔkepmxcín Keyboard Help';
  $pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
    This keyboard is designed for the <b>Nɬeʔkepmxcín</b> language of the BC Interior region of Canada.
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below),
    please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<ul>
    <li>The special characters of Nɬeʔkepmxcín have been assigned to the number keys. To type the numerals, hold down
        the Right-Alt or Option key then press the appropriate number key. The Numeric keypad on the right side of many
        keyoards keep its original numbers</li>
    <li>All accents are typed after the base character — á is typed <kbd>a</kbd> then Semicolon <kbd>;</kbd>
        <ul>
            <li>To type the acute accent use the Semicolon key <kbd>;</kbd> — é is typed <kbd>e</kbd> then <kbd>;</kbd>
            </li>
            <li>To type the apostrophe accent use the apostrophe key <kbd>'</kbd> — k̓ is typed <kbd>k</kbd> then
                <kbd>'</kbd><br />
                The ƛ̓ automatically types the glottal accent in one keystroke.
            </li>
            <li>To type the under-dot accent use the number 1 key <kbd>1</kbd> — c̣ is typed <kbd>c</kbd> then
                <kbd>1</kbd><br />
                The x̣ character has its own key 7. <br />
            </li>
            <li>To type the grave accent use the backquote key <kbd>`</kbd> — à is typed <kbd>a</kbd> then
                <kbd>`</kbd><br />
                This accent is occasionally used for linguistic purposes.
            </li>
            <li>To type x̌ type <kbd>x</kbd> then <kbd>=</kbd></li>
        </ul>
    </li>
    <li>The original values of the punctuation keys can be typed by holding down the Right-Alt or Option key — the
        Semicolon ; is typed <kbd>Right-Alt</kbd>+<kbd>;</kbd> (Windows) / <kbd>⌥ Option</kbd>+<kbd>;</kbd> (Mac).</li>


    <li>Opening and closing quotes. For Mac users, Right-Alt is either of the Option Keys.
        <ul>
            <li>single: ‘ <kbd>[</kbd> — ’ <kbd>]</kbd></li>
            <li>double: “ <kbd>Shift</kbd>+<kbd>[</kbd> — ” <kbd>Shift</kbd>+<kbd>]</kbd></li>
            <li>single ‹ <kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+<kbd>9</kbd> — ›
                <kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+<kbd>0</kbd>
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
            <td align='center'>q q̓</td>
            <td align='center'>w w̓</td>
            <td align='center'>e é</td>
            <th align='center'>’</th>
            <td align='center'>t t̓</td>
            <td align='center'>y y̓</td>
            <td align='center'>u ú</td>
            <td align='center'>i í ị ị́</td>
            <td align='center'>o ó</td>
            <td align='center'>p p̓</td>
        </tr>
        <tr>
            <td align='center'>a á</td>
            <td align='center'>s ṣ</td>
            <td align='center'>ʔ</td>
            <td align='center'>ƛ̓</td>
            <td align='center'>ɣ ɣ̓</td>
            <td align='center'>h</td>
            <td align='center'>ʷ</td>
            <td align='center'>k k̓</td>
            <td align='center'>l l̓</td>
            <td align='center'>ɬ</td>
        </tr>
        <tr>
            <td align='center'>⇧</td>
            <td align='center'>z z̓ θ θ̓</td>
            <td align='center'>x x̣</td>
            <td align='center'>c c̓ c̣</td>
            <th align='center'>.</th>
            <td align='center'>ʕ ʕ̓</td>
            <td align='center'>n n̓</td>
            <td align='center'>m m̓</td>
            <td align='center'>ə ə́ ə̣ ə̣́</td>
            <td align='center'>⌫</td>
        </tr>
        <tr>
            <td align='center'>123</td>
            <td align='center'>🌐</td>
            <td align='center' colspan='5'>space</td>
            <td align='center'>.</td>
            <th align='center'>´</th>
            <td align='center'>⏎</td>
        </tr>
    </table>
    <div class='vspace'></div>
    <ul>
        <li>Keys with a red background are combining accents. On your mobile device, these keys will have green text.
        </li>
        <li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.
        </li>Common punctuation marks can be found by pressing and holding the period key on the right side of the space
        bar.</li>
    </ul>
</div>

<br />

<h2>Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'></div>
</div>
