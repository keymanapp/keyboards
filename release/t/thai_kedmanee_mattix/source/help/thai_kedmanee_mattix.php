<?php
    $pagename = 'Thai Kedmanee (Mattix) Keyboard Help';
    $pagetitle = 'Thai Kedmanee (Mattix) Keyboard Help';
    require_once('header.php');

    $pagestyle = <<<END
        .keyman-table {
            border-collapse: collapse;
            margin-top: 15px;
        }

        .keyman-table th,
        .keyman-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;       
            vertical-align: middle; 
        }

        .keyman-table th {
            background: #f3f3f3;
        }

        
    END;
?>

<p>
    Thai Kedmanee (Mattix) is a Thai script Unicode keyboard based on the standard Thai Kedmanee layout. This keyboard is fully compliant with the <a href="https://unicode.org/standard/standard.html">Unicode Standard</a>.
</p>

<div class="overview">
    <h2>Overview</h2>

    <h3>Basic Function</h3>
    <p>
        This keyboard follows the standard Thai Kedmanee layout. It also allows efficient input of uncommon Thai symbols. Characters are reordered while you type to ensure a consistent underlying sequence of diacritic vowels and tones, making tasks like search and replace much easier. Additional rules prevent you from typing many illegal vowel and tone sequences. This keyboard has also been optimised to take advantage of context-sensitive multiple keyboard switching capabilities in Toolbox (a flat database program) available from <a href="https://software.sil.org/fieldworks/download/">SIL</a>.
    </p>

    <h3>Fonts</h3>
    <p>
        This is a Unicode keyboard and works with any Unicode font which has support for Thai. The standard Windows fonts <b>Tahoma</b> and <b>Arial Unicode MS</b> include support for this keyboard. To see which fonts on your computer support this keyboard, use the <a href="https://help.keyman.com/products/windows/current-version/basic/toolbox/font-helper">Keyman Font Helper</a>.
    </p>

    <h3>Keyboard Hotkey</h3>
    <p>
        This keyboard comes preassigned with a hotkey. You can use the hotkey <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>T</kbd> to start the keyboard at any time. To remove or change the hotkey, visit the Hotkeys tab of Keyman Configuration, available from the Keyman menu.
    </p>
</div>

<div id='osk-container'>
    <p>
        This keyboard includes an On Screen Keyboard view for easy reference. The On Screen Keyboard works best when associated with a QWERTY US layout.
    </p>

    <h2>Desktop Keyboard Layout</h2>

    <div id='osk' data-states='default shift'></div>

    <h2>Thai Special Character Shortcuts</h2>

    <table class="keyman-table">
        <tr>
            <th>Description</th>
            <th>Output</th>
            <th>Keys</th>
        </tr>

        <tr>
            <td>Paiyanyai</td>
            <td>ฯลฯ</td>
            <td><kbd>น</kbd><kbd>น</kbd></td>
        </tr>

        <tr>
            <td>Yamakkan</td>
            <td> ๎</td>
            <td><kbd>`</kbd><kbd>3</kbd></td>
        </tr>

        <tr>
            <td>Fongman</td>
            <td>๏</td>
            <td><kbd>`</kbd><kbd>"</kbd></td>
        </tr>

        <tr>
            <td>Angkhankhu</td>
            <td>๚</td>
            <td><kbd>`</kbd><kbd>ฯ</kbd></td>
        </tr>

        <tr>
            <td>Khomut</td>
            <td>๛</td>
            <td><kbd>`</kbd><kbd>ฯ</kbd><kbd>ฯ</kbd></td>
        </tr>

        <tr>
            <td>Bullet</td>
            <td>•</td>
            <td><kbd>`</kbd><kbd>๑</kbd></td>
        </tr>

        <tr>
            <td>Zero Width Space</td>
            <td>(invisible)</td>
            <td><kbd>`</kbd><kbd>Space</kbd></td>
        </tr>
    </table>
</div>

<div id='osk-tablet-container'>
  <h2>Mobile/Tablet Keyboard Layout</h2>
    <p>
        The touch layout for mobile devices (Android and iOS) has a slightly different key arrangement that fits all characters across
        three layers (Default, Shift, and Numeric) and includes a long-press gestures, maintaining user-friendly interactions and clean layout designs.
    </p>

  <div id='osk-tablet' data-states='default shift numeric'></div>

  <h3>Long press</h3>
  
  <img src="longpress.gif" alt="Longpress Gesture">
</div>
