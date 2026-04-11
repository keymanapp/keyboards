<?php
  $pagename = 'Eastern Congo Keyboard Help';
  $pagetitle = $pagename;
$pagestyle = <<<END
    html,body {font-family: sans-serif;font-size: 100%;}
    kbd {color:black; font: 0.8em sans-serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
    .inputSequences {border-collapse: collapse;font-size: 14px;min-width: 592px;}
    .inputSequences th, .inputSequences td {padding: 7px 17px;}
    .inputSequences thead th {border-bottom: 2px solid #6ea1cc;text-transform: uppercase;}
    .inputSequences tbody td {border-bottom: 1px solid #e1edff;color: #353535;text-align: center;}
    .inputSequences tbody tr:nth-child(odd) td {background-color: #f4fbff;}
    .inputSequences tbody tr:hover td {background-color: #ffffa2;border-color: #ffff0f;}
    samp {font-family: sans-serif;font-size: 1.8rem;}
    img.keyboard {max-width: 760px;width: 100%;}
END;
require_once('header.php');
?>

    <p>Eastern Congo keyboard for languages of the Democratic Republic of the Congo.</p>
    <h2>Desktop Layout</h2>
<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift'></div>
</div>

    <h2>Input sequences</h2>
    <h3>Alphabetic</h3>
  <table class="inputSequences">
        <thead>
            <tr>
                <th>Keystroke</th>
                <th>Character</th>
                <th>Keystroke</th>
                <th>Character</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>;</kbd> <kbd>a</kbd></td>
                <td>ä</td>
                <td><kbd>;</kbd> <kbd>A</kbd></td>
                <td>Ä</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>b</kbd></td>
                <td>ɓ</td>
                <td><kbd>;</kbd> <kbd>B</kbd></td>
                <td>Ɓ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>c</kbd></td>
                <td>ç</td>
                <td><kbd>;</kbd> <kbd>C</kbd></td>
                <td>Ç</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>d</kbd></td>
                <td>ɗ</td>
                <td><kbd>;</kbd> <kbd>D</kbd></td>
                <td>Ɗ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>e</kbd></td>
                <td>ɛ</td>
                <td><kbd>;</kbd> <kbd>E</kbd></td>
                <td>Ɛ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>r</kbd></td>
                <td>ə</td>
                <td><kbd>;</kbd> <kbd>R</kbd></td>
                <td>Ə (make sure to use the correct lowercase character that goes with this uppercase character)</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>t</kbd></td>
                <td>ǝ</td>
                <td><kbd>;</kbd> <kbd>T</kbd></td>
                <td>Ǝ (make sure to use the correct lowercase character that goes with this uppercase character)</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>h</kbd></td>
                <td>ħ</td>
                <td><kbd>;</kbd> <kbd>H</kbd></td>
                <td>Ħ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>j</kbd></td>
                <td>ɦ</td>
                <td><kbd>;</kbd> <kbd>J</kbd></td>
                <td>Ɦ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>i</kbd></td>
                <td>ɨ</td>
                <td><kbd>;</kbd> <kbd>I</kbd></td>
                <td>Ɨ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>8</kbd></td>
                <td>ɩ</td>
                <td><kbd>;</kbd> <kbd>*</kbd></td>
                <td>Ɩ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>6</kbd></td>
                <td>ɪ</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>m</kbd></td>
                <td>ɲ</td>
                <td><kbd>;</kbd> <kbd>M</kbd></td>
                <td>Ɲ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>n</kbd></td>
                <td>ŋ</td>
                <td><kbd>;</kbd> <kbd>N</kbd></td>
                <td>Ŋ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>o</kbd></td>
                <td>ɔ</td>
                <td><kbd>;</kbd> <kbd>O</kbd></td>
                <td>Ɔ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>9</kbd></td>
                <td>ɵ</td>
                <td><kbd>;</kbd> <kbd>(</kbd></td>
                <td>Ɵ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>p</kbd></td>
                <td>ø</td>
                <td><kbd>;</kbd> <kbd>P</kbd></td>
                <td>Ø</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>u</kbd></td>
                <td>ʉ</td>
                <td><kbd>;</kbd> <kbd>U</kbd></td>
                <td>Ʉ</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>7</kbd></td>
                <td>ʊ</td>
                <td><kbd>;</kbd> <kbd>&</kbd></td>
                <td>Ʊ</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><kbd>;</kbd> <kbd>G</kbd></td>
                <td>ß</td>
            </tr>
        </tbody>
    </table>

    <h3>Diacritics</h3>
  <table class="inputSequences">
        <thead>
            <tr>
                <th>Keystroke</th>
                <th>Character</th>
                <th>Example Keystroke</th>
                <th>Example Result</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>&apos;</kbd></td>
                <td>◌́</td>
                <td><kbd>&apos;</kbd> <kbd>;</kbd> <kbd>E</kbd></td>
                <td>Ɛ́</td>
                <td>Combining mark (typed before any vowel and dDmMnNŋŊrRsSzZ)</td>
            </tr>
            <tr>
                <td><kbd>`</kbd></td>
                <td>◌̀</td>
                <td><kbd>`;N</kbd></td>
                <td>Ŋ̀</td>
                <td>Combining mark (typed before any vowel and dDmMnNŋŊrRsSzZ)</td>
            </tr>
            <tr>
                <td><kbd>^</kbd></td>
                <td>◌̂</td>
                <td><kbd>^</kbd> <kbd>A</kbd></td>
                <td>Â</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>!</kbd></td>
                <td>◌̌</td>
                <td><kbd>!</kbd> <kbd>;</kbd> <kbd>U</kbd></td>
                <td>Ʉ̌</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>:</kbd></td>
                <td>◌̈</td>
                <td><kbd>:</kbd> <kbd>;</kbd> <kbd>7</kbd></td>
                <td>ʊ̈</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>@</kbd></td>
                <td>◌̄</td>
                <td><kbd>@</kbd> <kbd>;</kbd> <kbd>I</kbd></td>
                <td>Ɨ̄</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>~</kbd></td>
                <td>◌̃</td>
                <td><kbd>~</kbd> <kbd>;</kbd> <kbd>I</kbd></td>
                <td>Ɨ̃</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>&apos;</kbd></td>
                <td>´</td>
                <td><kbd>e</kbd> <kbd>;</kbd> <kbd>&apos;</kbd> <kbd>e</kbd></td>
                <td>e´e</td>
                <td>Spacing</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>`</kbd></td>
                <td>ˋ</td>
                <td><kbd>e</kbd> <kbd>;</kbd> <kbd>`</kbd> <kbd>e</kbd></td>
                <td>eˋe</td>
                <td>Spacing</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>^</kbd></td>
                <td>ˆ</td>
                <td><kbd>e</kbd> <kbd>;</kbd> <kbd>^</kbd> <kbd>e</kbd></td>
                <td>eˆe</td>
                <td>Spacing</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>!</kbd></td>
                <td>ˇ</td>
                <td><kbd>e</kbd> <kbd>;</kbd> <kbd>!</kbd> <kbd>e</kbd></td>
                <td>eˇe</td>
                <td>Spacing</td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>;</kbd> <kbd>&apos;</kbd></td>
                <td>◌́</td>
                <td><kbd>e</kbd> <kbd>=</kbd> <kbd>;</kbd> <kbd>&apos;</kbd></td>
                <td>é</td>
                <td>Combining mark (typed after the character)</td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>;</kbd> <kbd>`</kbd></td>
                <td>◌̀</td>
                <td><kbd>;</kbd> <kbd>i</kbd> <kbd>=</kbd> <kbd>;</kbd> <kbd>`</kbd></td>
                <td>ɨ̀</td>
                <td>Combining mark (typed after the character)</td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>;</kbd> <kbd>^</kbd></td>
                <td>◌̂</td>
                <td><kbd>;</kbd> <kbd>u</kbd> <kbd>=</kbd> <kbd>;</kbd> <kbd>^</kbd></td>
                <td>ʉ̂</td>
                <td>Combining mark (typed after the character)</td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>;</kbd> <kbd>!</kbd></td>
                <td>◌̌</td>
                <td><kbd>;</kbd> <kbd>(</kbd> <kbd>=</kbd> <kbd>;</kbd> <kbd>!</kbd></td>
                <td>Ɵ̌</td>
                <td>Combining mark (typed after the character)</td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>;</kbd> <kbd>@</kbd></td>
                <td>◌̄</td>
                <td><kbd>;</kbd> <kbd>e</kbd> <kbd>=</kbd> <kbd>;</kbd> <kbd>@</kbd></td>
                <td>ɛ̄</td>
                <td>Combining mark (typed after the character)</td>
            </tr>
        </tbody>
    </table>

    <h3>Other</h3>
  <table class="inputSequences">
        <thead>
            <tr>
                <th>Keystroke</th>
                <th>Character</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>;</kbd> <kbd>?</kbd></td>
                <td>&#x02BC;</td>
                <td>Glottal stop (modifier apostrophe)</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>&apos;</kbd> <kbd>&apos;</kbd></td>
                <td>&#xA78C;</td>
                <td>Glottal stop (Saltillo)</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>|</kbd></td>
                <td>&#xA71C;</td>
                <td>Downstep</td>
            </tr>
            <tr>
                <td><kbd>;</kbd>:</kbd></td>
                <td>&#xA789;</td>
                <td>Budu past tense</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>=</kbd></td>
                <td>&#xA78A;</td>
                <td>Budu future tense</td>
            </tr>
            <tr>
                <td><kbd>.</kbd> <kbd>.</kbd> <kbd>.</kbd></td>
                <td>…</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>&lt;</kbd></td>
                <td>‹</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>&gt;</kbd></td>
                <td>›</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>&lt;</kbd> <kbd>&lt;</kbd></td>
                <td>«</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>&gt;</kbd> <kbd>&gt;</kbd></td>
                <td>»</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>`</kbd></td>
                <td>‘</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>&apos;</kbd></td>
                <td>&#x2019;</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>`</kbd> <kbd>`</kbd></td>
                <td>“</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>&apos;</kbd> <kbd>&apos;</kbd></td>
                <td>”</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>_</kbd></td>
                <td>—</td>
                <td>Em dash</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>-</kbd></td>
                <td>–</td>
                <td>En dash</td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>x</kbd></td>
                <td>×</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>\</kbd></td>
                <td>÷</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>1</kbd> <kbd>/</kbd> <kbd>4</kbd></td>
                <td>¼</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>1</kbd> <kbd>/</kbd> <kbd>2</kbd></td>
                <td>½</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>3</kbd> <kbd>/</kbd> <kbd>4</kbd></td>
                <td>¾</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>(</kbd> <kbd>C</kbd> <kbd>)</kbd></td>
                <td>©</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>(</kbd> <kbd>R</kbd> <kbd>)</kbd></td>
                <td>®</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>space</kbd> <kbd>!</kbd></td>
                <td> !</td>
                <td>Narrow <abbr title="Non-breaking space">NBSP</abbr> plus exclamation mark</td>
            </tr>
            <tr>
                <td><kbd>space</kbd> <kbd>?</kbd></td>
                <td> ?</td>
                <td>Narrow <abbr title="Non-breaking space">NBSP</abbr> plus question mark</td>
            </tr>
            <tr>
                <td><kbd>space</kbd> <kbd>;</kbd></td>
                <td> :</td>
                <td>Narrow <abbr title="Non-breaking space">NBSP</abbr> plus semi-colon</td>
            </tr>
            <tr>
                <td><kbd>space</kbd> <kbd>;</kbd> <kbd>space</kbd></td>
                <td> ; </td>
                <td>Narrow <abbr title="Non-breaking space">NBSP</abbr> plus semi-colon plus space</td>
            </tr>
            <tr>
                <td><kbd>;&lt;</kbd> <kbd>space</kbd></td>
                <td>‹ </td>
                <td>Left single guillemet plus narrow <abbr title="Non-breaking space">NBSP</abbr></td>
            </tr>
            <tr>
                <td><kbd>;&lt;</kbd> <kbd>&lt;</kbd> <kbd>space</kbd></td>
                <td>« </td>
                <td>Left double guillemet plus narrow <abbr title="Non-breaking space">NBSP</abbr></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>s</kbd></td>
                <td> </td>
                <td>Narrow <abbr title="Non-breaking space">NBSP</abbr></td>
            </tr>
            <tr>
                <td><kbd>&apos;</kbd> <kbd>&apos;</kbd></td>
                <td>&apos; </td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>;</kbd> <kbd>;</kbd></td>
                <td>; </td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>`</kbd> <kbd>`</kbd></td>
                <td>` </td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>&#x0022;</kbd> <kbd>&#x0022;</kbd></td>
                <td>&#x0022;</td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>=</kbd> <kbd>=</td>
                <td>= </td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>:</kbd> <kbd>:</td>
                <td>: </td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>^</kbd> <kbd>^</td>
                <td>^ </td>
                <td></td>
            </tr>
            <tr>
                <td><kbd>@</kbd> <kbd>@</kbd></td>
                <td>@ </td>
                <td></td>
            </tr>

        </tbody>
    </table>

<div id='osk-container'>
  <h2>Mobile Keyboard Layout</h2>
  <p>The mobile layout can use the same keystrokes as the desktop. However, the mobile layout also has most of the special characters on longpress keys as well. For example, epsilon can be typed by using longpress e. The combining marks can also be typed different from the desktop keyboard. There is a key to the right of the spacebar where the combining marks can be accessed. If you do it this way, the combining mark <em>must</em> be typed after the base character (not before as the desktop does).</p>
<div id='osk-tablet' data-states='default shift numeric'></div>
</div>

