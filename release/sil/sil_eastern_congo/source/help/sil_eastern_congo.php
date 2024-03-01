<?php
  $pagename = 'Eastern Congo Keyboard Help';
  $pagetitle = $pagename;
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
                <th>Keystroke</th><th>Character</th><th>Keystroke</th><th>Character</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>;a</td><td>ä</td><td>;A</td><td>Ä</td>
            </tr>
            <tr>
                <td>;b</td><td>ɓ</td><td>;B</td><td>Ɓ</td>
            </tr>
            <tr>
                <td>;c</td><td>ç</td><td>;C</td><td>Ç</td>
            </tr>
            <tr>
                <td>;d</td><td>ɗ</td><td>;D</td><td>Ɗ</td>
            </tr>
            <tr>
                <td>;e</td><td>ɛ</td><td>;E</td><td>Ɛ</td>
            </tr>
            <tr>
                <td>;r</td><td>ə</td><td>;R</td><td>Ə (make sure to use the correct lowercase character that goes with this uppercase character)</td>
            </tr>
            <tr>
                <td>;t</td><td>ǝ</td><td>;T</td><td>Ǝ (make sure to use the correct lowercase character that goes with this uppercase character)</td>
            </tr>
            <tr>
                <td>;h</td><td>ħ</td><td>;H</td><td>Ħ</td>
            </tr>
            <tr>
                <td>;j</td><td>ɦ</td><td>;J</td><td>Ɦ</td>
            </tr>
            <tr>
                <td>;i</td><td>ɨ</td><td>;I</td><td>Ɨ</td>
            </tr>
            <tr>
                <td>;8</td><td>ɩ</td><td>;*</td><td>Ɩ</td>
            </tr>
            <tr>
                <td>;6</td><td>ɪ</td><td></td><td></td>
            </tr>
            <tr>
                <td>;m</td><td>ɲ</td><td>;M</td><td>Ɲ</td>
            </tr>
            <tr>
                <td>;n</td><td>ŋ</td><td>;N</td><td>Ŋ</td>
            </tr>
            <tr>
                <td>;o</td><td>ɔ</td><td>;O</td><td>Ɔ</td>
            </tr>
            <tr>
                <td>;9</td><td>ɵ</td><td>;(</td><td>Ɵ</td>
            </tr>
            <tr>
                <td>;p</td><td>ø</td><td>;P</td><td>Ø</td>
            </tr>
            <tr>
                <td>;u</td><td>ʉ</td><td>;U</td><td>Ʉ</td>
            </tr>
            <tr>
                <td>;7</td><td>ʊ</td><td>;&</td><td>Ʊ</td>
            </tr>
            <tr>
                <td></td><td></td><td>;G</td><td>ß</td>
            </tr>
        </tbody>
    </table>

    <h3>Diacritics</h3>
    <table class="inputSequences">
        <thead>
            <tr>
                <th>Keystrokes</th><th>Character</th><th>Example keystrokes</th><th>Example result</th><th>Commments</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&apos;</td><td>◌́</td><td>&apos;;E</td><td>Ɛ́</td><td>Combining mark (typed before any vowel and dDmMnNŋŊrRsSzZ)</td>
            </tr>
            <tr>
                <td>`</td><td>◌̀</td><td>`;N</td><td>Ŋ̀</td><td>Combining mark (typed before any vowel and dDmMnNŋŊrRsSzZ)</td>
            </tr>
            <tr>
                <td>^</td><td>◌̂</td><td>^A</td><td>Â</td><td></td>
            </tr>
            <tr>
                <td>!</td><td>◌̌</td><td>!;U</td><td>Ʉ̌</td><td></td>
            </tr>
            <tr>
                <td>:</td><td>◌̈</td><td>:;7</td><td>ʊ̈</td><td></td>
            </tr>
            <tr>
                <td>@</td><td>◌̄</td><td>@;I</td><td>Ɨ̄</td><td></td>
            </tr>
            <tr>
                <td>~</td><td>◌̃</td><td>~;I</td><td>Ɨ̃</td><td></td>
            </tr>
            <tr>
                <td>;&apos;</td><td>´</td><td>e;&apos;e</td><td>e´e</td><td>Spacing</td>
            </tr>
            <tr>
                <td>;`</td><td>ˋ</td><td>e;`e</td><td>eˋe</td><td>Spacing</td>
            </tr>
            <tr>
                <td>;^</td><td>ˆ</td><td>e;^e</td><td>eˆe</td><td>Spacing</td>
            </tr>
            <tr>
                <td>;!</td><td>ˇ</td><td>e;!e</td><td>eˇe</td><td>Spacing</td>
            </tr>
            <tr>
                <td>=;&apos;</td><td>◌́</td><td>e=;'</td><td>é</td><td>Combining mark (typed after the character)</td>
            </tr>
            <tr>
                <td>=;`</td><td>◌̀</td><td>;i=;`</td><td>ɨ̀</td><td>Combining mark (typed after the character)</td>
            </tr>
            <tr>
                <td>=;^</td><td>◌̂</td><td>;u=;^</td><td>ʉ̂</td><td>Combining mark (typed after the character)</td>
            </tr>
            <tr>
                <td>=;!</td><td>◌̌</td><td>;(=;!</td><td>Ɵ̌</td><td>Combining mark (typed after the character)</td>
            </tr>
            <tr>
                <td>=;@</td><td>◌̄</td><td>;e=;@</td><td>ɛ̄</td><td>Combining mark (typed after the character)</td>
            </tr>
        </tbody>
    </table>

    <h3>Other</h3>
    <table class="inputSequences">
        <thead>
            <tr>
                <th>Keystroke</th><th>Character</th><th>Comment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>;?</td><td>&#x02BC;</td><td>Glottal stop (modifier apostrophe)</td>
            </tr>
            <tr>
                <td>;&apos;&apos;</td><td>&#xA78C;</td><td>Glottal stop (Saltillo)</td>
            </tr>
            <tr>
                <td>;|</td><td>&#xA71C;</td><td>Downstep</td>
            </tr>
            <tr>
                <td>;:</td><td>&#xA789;</td><td>Budu past tense</td>
            </tr>
            <tr>
                <td>;=</td><td>&#xA78A;</td><td>Budu future tense</td>
            </tr>
            <tr>
                <td>...</td><td>…</td><td></td>
            </tr>
            <tr>
                <td>;&lt;</td><td>‹</td><td></td>
            </tr>
            <tr>
                <td>;&gt;</td><td>›</td><td></td>
            </tr>
            <tr>
                <td>;&lt;&lt;</td><td>«</td><td></td>
            </tr>
            <tr>
                <td>;&gt;&gt;</td><td>»</td><td></td>
            </tr>
            <tr>
                <td>=`</td><td>‘</td><td></td>
            </tr>
            <tr>
                <td>=&apos;</td><td>&#x2019;</td><td></td>
            </tr>
            <tr>
                <td>=``</td><td>“</td><td></td>
            </tr>
            <tr>
                <td>=&apos;&apos;</td><td>”</td><td></td>
            </tr>
            <tr>
                <td>;_</td><td>—</td><td>Em dash</td>
            </tr>
            <tr>
                <td>;-</td><td>–</td><td>En dash</td>
            </tr>
            <tr>
                <td>;x</td><td>×</td><td></td>
            </tr>
            <tr>
                <td>;\</td><td>÷</td><td></td>
            </tr>
            <tr>
                <td>;1/4</td><td>¼</td><td></td>
            </tr>
            <tr>
                <td>;1/2</td><td>½</td><td></td>
            </tr>
            <tr>
                <td>;3/4</td><td>¾</td><td></td>
            </tr>
            <tr>
                <td>(C)</td><td>©</td><td></td>
            </tr>
            <tr>
                <td>(R)</td><td>®</td><td></td>
            </tr>
            <tr>
                <td>space !</td><td> !</td><td>Narrow <abbr title="Non-breaking space">NBSP</abbr> plus exclamation mark</td>
            </tr>
            <tr>
                <td>space ?</td><td> ?</td><td>Narrow <abbr title="Non-breaking space">NBSP</abbr> plus question mark</td>
            </tr>
            <tr>
                <td>space ;</td><td> :</td><td>Narrow <abbr title="Non-breaking space">NBSP</abbr> plus semi-colon</td>
            </tr>
            <tr>
                <td>space ; space</td><td> ; </td><td>Narrow <abbr title="Non-breaking space">NBSP</abbr> plus semi-colon plus space</td>
            </tr>
            <tr>
                <td>;&lt; space</td><td>‹ </td><td>Left single guillemet plus narrow <abbr title="Non-breaking space">NBSP</abbr></td>
            </tr>
            <tr>
                <td>;&lt;&lt; space</td><td>« </td><td>Left double guillemet plus narrow <abbr title="Non-breaking space">NBSP</abbr></td>
            </tr>
            <tr>
                <td>;s</td><td> </td><td>Narrow <abbr title="Non-breaking space">NBSP</abbr></td>
            </tr>
            <tr>
                <td>&apos;&apos;</td><td>&apos; </td><td></td>
            </tr>
            <tr>
                <td>;;</td><td>; </td><td></td>
            </tr>
            <tr>
                <td>``</td><td>` </td><td></td>
            </tr>
            <tr>
                <td>""</td><td>" </td><td></td>
            </tr>
            <tr>
                <td>==</td><td>= </td><td></td>
            </tr>
            <tr>
                <td>::</td><td>: </td><td></td>
            </tr>
            <tr>
                <td>^^</td><td>^ </td><td></td>
            </tr>
            <tr>
                <td>@@</td><td>@ </td><td></td>
            </tr>

        </tbody>
    </table>

<div id='osk-container'>
  <h2>Mobile Keyboard Layout</h2>
  <p>The mobile layout can use the same keystrokes as the desktop. However, the mobile layout also has most of the special characters on longpress keys as well. For example, epsilon can be typed by using longpress e. The combining marks can also be typed different from the desktop keyboard. There is a key to the right of the spacebar where the combining marks can be accessed. If you do it this way, the combining mark <em>must</em> be typed after the base character (not before as the desktop does).</p>
<div id='osk-tablet' data-states='default shift numeric'></div>
</div>

