<?php
$pagename = 'Bengali-Assamese Phonetic (SIL) Keyboard Help';
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

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-tablet' data-states='default shift'>
</div>

<h2>Phone Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-phone' data-states='default shift numeric'>
</div>

  <h2>Other input sequences</h2>

  <p>Additional characters can be typed using the <kbd>q</kbd> key.</p>


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
                <td><samp>&#x0985;</samp></td>
                <td>U+0985</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>A</kbd> </td>
                <td><samp>&#x0986;</samp></td>
                <td>U+0986</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>i</kbd></td>
                <td><samp>&#x0987;</samp></td>
                <td>U+0987</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>I</kbd></td>
                <td><samp>&#x0988;</samp></td>
                <td>U+0988</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>u</kbd></td>
                <td><samp>&#x0989;</samp></td>
                <td>U+0989</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>U</kbd> </td>
                <td><samp>&#x098A;</samp></td>
                <td>U+098A</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>r</kbd> </td>
                <td><samp>&#x09F0;</samp></td>
                <td>U+09F0</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>l</kbd></td>
                <td><samp>&#x098C;</samp></td>
                <td>U+098C</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>e</kbd> </td>
                <td><samp>&#x098F;</samp></td>
                <td>U+098F</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>E</kbd></td>
                <td><samp>&#x0990;</samp></td>
                <td>U+0990</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>o</kbd></td>
                <td><samp>&#x0993;</samp></td>
                <td>U+0993</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>O</kbd></td>
                <td><samp>&#x0994;</samp></td>
                <td>U+0994</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>v</kbd></td>
                <td><samp>&#x09DC;</samp></td>
                <td>U+09DC</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>V</kbd></td>
                <td><samp>&#x09DD;</samp></td>
                <td>U+09DD</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>R</kbd></td>
                <td><samp>&#x098B;</samp></td>
                <td>U+098B</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>L</kbd></td>
                <td><samp>&#x09E1;</samp></td>
                <td>U+09E1</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>:</kbd></td>
                <td><samp>&#x0983;</samp></td>
                <td>U+0983</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>t</kbd></td>
                <td><samp>&#x09CE;</samp></td>
                <td>U+09CE</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>.</kbd></td>
                <td><samp>&#x0965;</samp></td>
                <td>U+0965</td>
            </tr>
            <tr>
                <td><kbd>q</kbd> <kbd>X</kbd></td>
                <td><samp>&#x09CD;&#x200C;</samp></td>
                <td>U+09CD U+200C (ZWNJ)</td>
            </tr>

        </tbody>
  </table>
                                            