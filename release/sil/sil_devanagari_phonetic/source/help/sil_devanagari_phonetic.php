<?php
  $pagename = 'Devanagari Phonetic (SIL)  Keyboard Help';
  $pagetitle = 'Devanagari Phonetic (SIL)  Keyboard Help';
  $pagestyle = <<<END
    samp {font-family: Annapurna SIL; font-size:20pt;   }
    kbd {color:black; font: 0.8em sans-serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
    .inputSequences {border-collapse: collapse;font-size: 14px;min-width: 592px;}
    .inputSequences th, .inputSequences td {padding: 7px 17px;}
    .inputSequences thead th {border-bottom: 2px solid #6ea1cc;text-transform: uppercase;}
    .inputSequences tbody td {border-bottom: 1px solid #e1edff;color: #353535;text-align: center;}
    .inputSequences tbody tr:nth-child(odd) td {background-color: #f4fbff;}
    .inputSequences tbody tr:hover td {background-color: #ffffa2;border-color: #ffff0f;}
END;
  require_once('header.php');
?>

    <p>A Devanagari keyboard layout where each Devanagari letter is mapped as closely as possible to a corresponding key on the US English keyboard.</p>

    <h2>Keyboard layout</h2>

<h3>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h3>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-tablet' data-states='default shift rightalt'>
</div>

    <h2>Other input sequences</h2>
    <h3>Independent vowels</h3>
    <p>Independent vowels can be typed by the following keystrokes:</p>

    <table class="inputSequences">
        <thead>
            <tr>
                <th>Type</th>
                <th>Character</th>
                <th>Codepoint</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>q</kbd> <kbd>a</kbd></td>
                <td>&#x0905;</td>
                <td>U+0905</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>a</kbd> <kbd>a</kbd> </td>
                <td>&#x0906;</td>
                <td>U+0906</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>A</kbd> </td>
                <td>&#x0906;</td>
                <td>U+0906</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>e</kbd> </td>
                <td>&#x090F;</td>
                <td>U+090F</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>E</kbd></td>
                <td>&#x0910;</td>
                <td>U+0910</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>i</kbd></td>
                <td>&#x0907;</td>
                <td>U+0907</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>I</kbd></td>
                <td>&#x0908;</td>
                <td>U+0908</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>o</kbd></td>
                <td>&#x0913;</td>
                <td>U+0913</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>O</kbd></td>
                <td>&#x0914;</td>
                <td>U+0914</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>u</kbd></td>
                <td>&#x0909;</td>
                <td>U+0909</td>
            </tr>
            <tr>
                <td><kbd>q</kbd><kbd>U</kbd> </td>
                <td>&#x090a;</td>
                <td>U+090a</td>
            </tr>
        </tbody>
    </table>

    <h3>Vocalic R</h3>

    <p><samp>ऋ</samp> can be typed by <kbd>q</kbd> <kbd>Right Alt + L</kbd>.</p>

    <h3>Repha</h3>

    <p>Repha <samp>र्◌</samp> can be typed using the <kbd>R</kbd> key. It is typed after the consonant or mantra, or example:</p>
    <ul>
        <li><kbd>k</kbd> <kbd>R</kbd> generates <samp>र्क</samp></li>
        <li><kbd>k</kbd> <kbd>i</kbd> <kbd>R</kbd> generates <samp>र्कि</samp></li>
        <li><kbd>k</kbd> <kbd>&gt;</kbd> <kbd>i</kbd> <kbd>R</kbd> produces <samp>र्क़ि</samp></li>
    </ul>

    <h3>Virama</h3>

    <p>The semicolon <kbd>;</kbd> is used to type stacked consonants or conjuncts. Eg <kbd>k</kbd> <kbd>;</kbd> <kbd>S</kbd> will generate <samp>क्ष</samp></p>

    <!--
        क + ् + ष = क्ष 
        क + ् + zwnj + ष = क्‌ष
        क + ् + zwj + ष = क्‍ष
    -->


    <h3>Explicit Virama (Halat)</h3>

    <p>A full (live) consonant with visible virama can be typed using <kbd>X</kbd>, e.g. <kbd>k</kbd> <kbd>X</kbd> <kbd>S</kbd> produces <samp>क्‌ष</samp>  </p>

    <p>To force conjunct formation, <kbd>x</kbd> can be typed between the consonants, for example: <kbd>k</kbd> <kbd>x</kbd> <kbd>S</kbd> will generate <samp>क्‍ष</samp>.</p>
    <!--
        "x"     > U+094d U+200D  c halant (and the zero-width joiner to get half-character)
        "X"     > U+094d U+200C  c halant (and the zero-width non-joining to get full-char                plus halant) 
    -->



    <h3>Typing Latin letters</h3>

    <p>Words in written in Latin letters can be typed by first typing <kbd>Q</kbd> at the start of the word, for example:
    <kbd>Q</kbd> <kbd>H</kbd> <kbd>i</kbd> <kbd>n</kbd> <kbd>d</kbd> <kbd>i</kbd> will type the word <strong>Hindi</strong>.</p>

    <h3>Numbers</h3>

    <p>Press the number keys to type Arabic digits, There are two ways to type Devanagari digits:</p>
        <ol>
            <li>Typing the Arabic digit and then typing backspace key, for example <kbd>9</kbd> <kbd>Back space</kbd> produces <samp>९</samp></li>
            <li>Typing the Shift + Right Alt version of the digit key, for instance <kbd>Shift + Right Alt + 9</kbd> produces <samp>९</samp></li>
        </ol>

    <!-- 
        + any(Digits)           > index(Digits,1)
        + any(Digits) + [K_BKSP]  > index(DigitsU,1)
        + [SHIFT RALT K_0]    > U+0966 c Devanagari digit 0
        + [SHIFT RALT K_1]    > U+0967 c Devanagari digit 1
        + [SHIFT RALT K_2]    > U+0968 c Devanagari digit 2
        + [SHIFT RALT K_3]    > U+0969 c Devanagari digit 3
        + [SHIFT RALT K_4]    > U+096A c Devanagari digit 4
        + [SHIFT RALT K_5]    > U+096B c Devanagari digit 5
        + [SHIFT RALT K_6]    > U+096C c Devanagari digit 6
        + [SHIFT RALT K_7]    > U+096D c Devanagari digit 7
        + [SHIFT RALT K_8]    > U+096E c Devanagari digit 8
        + [SHIFT RALT K_9]    > U+096F c Devanagari digit 9
    -->

    <h3>Punctuation</h3>

    <table class="inputSequences">
        <thead>
            <tr>
                <th>Type</th>
                <th>Character</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>.</kbd></td>
                <td><samp>।</samp></td>
            </tr>
            <tr>
                <td><kbd>.</kbd><kbd>.</kbd></td>
                <td><samp>.</samp></td>
            </tr>
            <tr>
                <td><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd></td>
                <td><samp>॥</samp></td>
            </tr>
            <tr>
                <td><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd></td>
                <td><samp>…</samp></td>
            </tr>
        </tbody>
    </table>


