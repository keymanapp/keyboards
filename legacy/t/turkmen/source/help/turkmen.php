<?php /*
  Name:        Turkmen-Unicode
  Copyright:   2007-2012
  Description: For typing the Turkmen language of Turkmenistan, latest Roman-based font as introduced from 1996 onwards, and adapted to fit Central-European characters.

This package also includes a Cyrillic Turkmen keyboard.  Both keyboards are Unicode.
  Authors:     David Gray
*/
  $pagename = 'Turkmen Latin and Cyrillic Unicode (deprecated) Keyboard Help';
  $pagetitle = 'Turkmen Latin and Cyrillic Unicode (deprecated) Keyboard Help';
  require_once('header.php');
?>
<style type="text/css">
p { font: 10pt Tahoma }
h1 { font: bold 16pt Tahoma; color: #4444cc }
h2 { font: bold 12pt Tahoma; color: #4444cc }
table.display tr .gap { width: 16px; border: none; }
table.display tr td { font: 10pt Tahoma; border: solid 1px #ccccff; padding: 3px; text-align: center;}
table.display tr th { font: bold 10pt Tahoma; border: solid 1px #ccccff; padding: 3px; text-align: center; }
table.display { border-collapse: collapse; }

        .key {
            float: left;
            display: block;
            position: relative;
            overflow: hidden;
            height: 35px;
            margin: 2px 0px 0px 4px;

        }

        #K_SPACE {
          width: 234px;

            background-image: url('key-space.gif');

        }

        #K_BKSLASH {
          width: 42px;

            background-image: url('key-bkslash.gif');

        }

        #K_oE2 {

            display:none;

        }

        #K_SHIFTL {
          width: 80px;background-image: url('key-shiftl.gif');
        }

        .plain {

            background-image: url('key-plain.gif');

          background-repeat: no-repeat;
          width: 34px;
        }

        .special {
          background-repeat: no-repeat;

        }

        .keycap {
          font: bold 7pt Arial;
          position: absolute;
          left: 6px;
          top: 6px;
        }

        .key .keycap {
          display: block;
        }

        .special .keycap {
          display: block;
        }

        .keytext {
          font: 12pt Arial;
          position: absolute;
          display: block;
          right: 5px;
          bottom: 4px;
          color: blue;
        }
    </style>

<h1 style='margin-bottom: 2px'>Turkmen Latin and Cyrillic Keyboards</h1>
<p style='margin-top: 2px'><i>Created by David Gray</i></p>
<p>This package includes 2 Turkmen keyboards: <b>Latin-Turkmen-Unicode</b> and <b>Cyrillic-Turkmen-Unicode</b>.
These keyboards are designed for simple typing of Turkmen Latin and Cyrillic text.</p>
<p><img src='TKMLUNCD.bmp' alt='Turkmen Latin' style='float: left; margin: 0 12px 12px 12px;' /><b>Turkmen-Latin-Unicode</b> is a Latin script Unicode keyboard for Turkmen.  This
keyboard includes an On Screen Keyboard and is based on the US English layout.</p>
<p><img src='TKMOLD.bmp' alt='Turkmen Cyrillic' style='float: left; margin: 0 12px 12px 12px' /><b>Turkmen-Cyrillic-Unicode</b> is a Cyrillic script Unicode keyboard for Turkmen.  This
keyboard also includes an On Screen Keyboard and includes the Cyrillic letters needed for Russian loan words.</p>

<h2>Latin Keyboard Layout Notes</h2>

<p>The <span style="color: #4444CC;">★</span> key (<b>;</b>) is a special key. Type it before most keys to get the QWERTY US value of that key. Type it before some keys to get special characters.</p>

<table class='display'>
<tr>
<th>Type</th><th>To Get</th><th class='gap'></th>
<th>Type</th><th>To Get</th><th class='gap'></th>
<th>Type</th><th>To Get</th><th class='gap'></th>
<th>Type</th><th>To Get</th>
</tr>
<tr><td>★Ä</td><td>|</td><td class='gap'></td><td>★Ö</td><td>Q</td><td class='gap'></td><td>★Ý</td><td>V</td><td class='gap'></td><td>★-</td><td>—</td></tr>
<tr><td>★ä</td><td>\</td><td class='gap'></td><td>★ö</td><td>q</td><td class='gap'></td><td>★ý</td><td>v</td><td class='gap'></td><td>★—</td><td>_</td></tr>
<tr><td>★Ç</td><td>C</td><td class='gap'></td><td>★Ş</td><td>}</td><td class='gap'></td><td>★Ž</td><td>~</td><td class='gap'></td><td>★"</td><td>„</td></tr>
<tr><td>★ç</td><td>c</td><td class='gap'></td><td>★ş</td><td>]</td><td class='gap'></td><td>★ž</td><td>`</td><td class='gap'></td><td>★\</td><td>/</td></tr>
<tr><td>★Ň</td><td>X</td><td class='gap'></td><td>★Ü</td><td>{</td><td class='gap'></td><td>★J</td><td>Ž</td><td class='gap'></td><td>★&lt;</td><td>«</td></tr>
<tr><td>★ň</td><td>x</td><td class='gap'></td><td>★ü</td><td>[</td><td class='gap'></td><td>★j</td><td>ž</td><td class='gap'></td><td>★></td><td>»</td></tr>
</table>

<h2 style="clear:left">Unshifted Layout</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">ž</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">1</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">2</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">3</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">4</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">5</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">6</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">7</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">8</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">9</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">0</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">-</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">=</div>
</div>
<div class="key special" id="" style="
        width: 60px;

          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;

          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">ö</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">w</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">e</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">r</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">t</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">u</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">i</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">o</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">p</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">ü</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">ş</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">ä</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;

          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">a</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">s</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">d</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">f</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">g</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">h</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">j</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">k</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">l</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">★</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">'</div>
</div>
<div class="key special" id="" style="
        width: 70px;

          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">z</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ň</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ç</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ý</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">b</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">n</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">m</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">,</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">.</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">\</div>
</div>
<div class="key special" id="" style="
        width: 90px;

          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;

          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;

          background-image: url('key-altl.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;

          background-image: url('key-altr.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;

          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">Ctrl</div>
</div><br /><br /><br style="clear: left"><h2 style="clear:left">Shift Layout</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">Ž</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">!</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">@</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">#</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">$</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">%</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">^</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">&amp;</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">*</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">(</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">)</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">—</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">+</div>
</div>
<div class="key special" id="" style="
        width: 60px;

          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;

          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">Ö</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">W</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">E</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">R</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">T</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">Y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">U</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">I</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">O</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">P</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">Ü</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">Ş</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">Ä</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;

          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">A</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">S</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">D</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">F</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">G</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">H</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">J</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">K</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">L</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">★</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">"</div>
</div>
<div class="key special" id="" style="
        width: 70px;

          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">Z</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">Ň</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">Ç</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">Ý</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">B</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">N</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">M</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">&lt;</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">&gt;</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">?</div>
</div>
<div class="key special" id="" style="
        width: 90px;

          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;

          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;

          background-image: url('key-altl.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;

          background-image: url('key-altr.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;

          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">Ctrl</div>
</div><br style="clear: left"><br /><br />

<h2>Cyrillic Keyboard Layout Notes</h2>

<p>The <span style="color: #4444CC;">★</span> key (<b>;</b>) is a special key. Type it before some keys to get additional letters and symbols.</p>

<table class='display'>
<tr>
<th>Type</th><th>To Get</th><th class='gap'></th>
<th>Type</th><th>To Get</th><th class='gap'></th>
<th>Type</th><th>To Get</th><th class='gap'></th>
<th>Type</th><th>To Get</th>
</tr>
<tr><td>★Ө</td><td>Ъ</td><td class='gap'></td><td>★О</td><td>Ё</td><td class='gap'></td><td>★А</td><td>Я</td><td class='gap'></td><td>★Ң</td><td>Щ</td></tr>
<tr><td>★Е</td><td>Э</td><td class='gap'></td><td>★Ү</td><td>{</td><td class='gap'></td><td>★С</td><td>Ш</td><td class='gap'></td><td>★Ч</td><td>Ц</td></tr>
<tr><td>★Ы</td><td>Й</td><td class='gap'></td><td>★Ш</td><td>}</td><td class='gap'></td><td>★Җ</td><td>Ж</td><td class='gap'></td><td>★Й</td><td>Ь</td></tr>
<tr><td>★У</td><td>Ю</td><td class='gap'></td><td>★★</td><td>;</td><td class='gap'></td><td>★:</td><td>:</td><td class='gap'></td><td>★Н</td><td>Ң</td></tr>
</table>

<h2 style="clear:left">Unshifted Layout</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">`</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">1</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">2</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">3</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">4</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">5</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">6</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">7</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">8</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">9</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">0</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">-</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">=</div>
</div>
<div class="key special" id="" style="
        width: 60px;

          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;

          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">ө</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">в</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">е</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">р</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">т</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ы</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">у</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">и</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">о</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">п</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">ү</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">ш</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">ә</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;

          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">а</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">с</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">д</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ф</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">г</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">х</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">җ</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">к</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">л</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">★</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">'</div>
</div>
<div class="key special" id="" style="
        width: 70px;

          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">з</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ң</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ч</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">й</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">б</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">н</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">м</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">,</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">.</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">/</div>
</div>
<div class="key special" id="" style="
        width: 90px;

          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;

          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">L Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;

          background-image: url('key-altl.gif');
          ">
<div class="keycap">L ALt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;

          background-image: url('key-altr.gif');
          ">
<div class="keycap">R ALt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;

          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">R Ctrl</div>
</div><br /><br /><br style="clear: left"><h2 style="clear:left">Shift Layout</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">~</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">!</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">@</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">#</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">$</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">%</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">^</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">&amp;</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">*</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">(</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">)</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">_</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">+</div>
</div>
<div class="key special" id="" style="
        width: 60px;

          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;

          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">Ө</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">В</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">Е</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">Р</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">Т</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">Ы</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">У</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">И</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">О</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">П</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">Ү</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">Ш</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">Ә</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;

          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">А</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">С</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">Д</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">Ф</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">Г</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">Х</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">Җ</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">К</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">Л</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">★</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">"</div>
</div>
<div class="key special" id="" style="
        width: 70px;

          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">З</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">Ң</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">Ч</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">Й</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">Б</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">Н</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">М</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">&lt;</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">></div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">?</div>
</div>
<div class="key special" id="" style="
        width: 90px;

          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;

          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">L Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;

          background-image: url('key-altl.gif');
          ">
<div class="keycap">L ALt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;

          background-image: url('key-altr.gif');
          ">
<div class="keycap">R ALt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;

          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">R Ctrl</div>
</div><br style="clear: left">


<br />
<p>Version 1.3 - Minor corrections to Help and On Screen Keyboard - 29 March 2012</p>
<p>Version 1.2 - Minor enhancements to both keyboards, including adding dedicated "\" and "Ž" keys to TLU - 10 December 2010</p>
<p>Version 1.1 - Keyman Desktop 7.0 Release - 8 November 2007</p>

<p>Keyboard Home Page: <a href='https://keyman.com/keyboards/turkmen'>https://keyman.com/keyboards/turkmen</a></p>
