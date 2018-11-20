<?php /*
  Name:             PhonyRus
  Copyright:        Copyright 2007
  Description:      This package includes 2 phonetic input Russian keyboards: <b>PhonyRus</b> and <b>Rus 1251</b>.
                    The idea of these keyboards is that you write in a natural way, as if you were transliterating
                    from\r\nCyrillic to Latin alphabet.</p>\r\n<p><b>PhonyRus</b> is a Unicode keyboard and should be
                    used with all modern applications.  PhonyRus includes\r\nan On Screen Keyboard.</p>\r\n<p><b>
                    Rus 1251</b> is a legacy keyboard that can be used with older applications that do not support
                    Unicode.\r\nRus 1251 does not include an On Screen Keyboard
  Authors:          Andrei Burago
*/
$pagename = 'Phonetic Russian Keyboard Help';
$pagetitle = 'Phonetic Russian Keyboards Help';
require_once('header.php');
?>

<head>
<style type="text/css">
    p {
        font: 10pt Tahoma
    }

    h1 {
        font: bold 16pt Tahoma;
        color: #4444cc
    }

    h2 {
        font: bold 12pt Tahoma;
        color: #4444cc
    }

    table.display tr td {
        font: 10pt Tahoma;
        border: solid 1px #ccccff;
        padding: 4px
    }

    table.display tr th {
        font: bold 10pt Tahoma;
        border: solid 1px #ccccff;
        padding: 4px;
        text-align: left
    }

    table.display {
        border-collapse: collapse;
    }

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

        display: none;

    }

    #K_SHIFTL {
        width: 80px;
        background-image: url('key-shiftl.gif');
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
</head>
<body>
<h1 style='margin-bottom: 2px'>Phonetic Russian Keyboards</h1>
<p style='margin-top: 2px'><i>Created by Andrei Burago</i></p>
<p>This package includes 2 phonetic input Russian keyboards: <b>PhonyRus</b> and <b>Rus 1251</b>.
    The idea of these keyboards is that you write in a natural way, as if you were transliterating from
    Cyrillic to Latin alphabet.</p>
<p><img src='rus.bmp' alt='rus' style='float: left; margin: 0 12px 12px 12px;'/><b>PhonyRus</b> is a Unicode keyboard
    and should be used with all modern applications. PhonyRus includes
    an On Screen Keyboard.</p>
<p><img src='1251.bmp' alt='1251' style='float: left; margin: 0 12px 12px 12px'/><b>Rus 1251</b> is a legacy keyboard
    that can be used with older applications that do not support Unicode.
    Rus 1251 does not include an On Screen Keyboard.</p>

<h2>An example</h2>

<table class='display'>
    <tr>
        <th>Russian</th>
        <td>А в чащах юга жил бы цитрус? Да, но фальшивый экземпляр.</td>
    </tr>
    <tr>
        <th>Type this</th>
        <td>A v chashchax yuga zhil by citrus? Da, no fal'shivyj e'kzempljar.</td>
    </tr>
</table>

<h2>Keyboard Layout Notes</h2>

<p>The following additional key sequences are utilised in the keyboard:</p>

<table class='display'>
    <tr>
        <th>Russian</th>
        <th>Type this</th>
    </tr>
    <tr>
        <td>ж</td>
        <td>zh</td>
    </tr>
    <tr>
        <td>ч</td>
        <td>ch</td>
    </tr>
    <tr>
        <td>ш</td>
        <td>sh</td>
    </tr>
    <tr>
        <td>щ</td>
        <td>shch</td>
    </tr>
    <tr>
        <td>ь</td>
        <td>' or j</td>
    </tr>
    <tr>
        <td>ъ</td>
        <td>'' or j'</td>
    </tr>
    <tr>
        <td>э</td>
        <td>e'</td>
    </tr>
    <tr>
        <td>ю</td>
        <td>ju or yu</td>
    </tr>
    <tr>
        <td>я</td>
        <td>ja or ya</td>
    </tr>
</table>

<h2 style="clear:left">Keyboard Layout - Unshifted</h2>
<div class="key plain" id="K_BKQUOTE">
    <div class="keycap">`</div>
    <div class="keytext">ё</div>
</div>
<div class="key plain" id="K_1">
    <div class="keycap">1</div>
</div>
<div class="key plain" id="K_2">
    <div class="keycap">2</div>
</div>
<div class="key plain" id="K_3">
    <div class="keycap">3</div>
</div>
<div class="key plain" id="K_4">
    <div class="keycap">4</div>
</div>
<div class="key plain" id="K_5">
    <div class="keycap">5</div>
</div>
<div class="key plain" id="K_6">
    <div class="keycap">6</div>
</div>
<div class="key plain" id="K_7">
    <div class="keycap">7</div>
</div>
<div class="key plain" id="K_8">
    <div class="keycap">8</div>
</div>
<div class="key plain" id="K_9">
    <div class="keycap">9</div>
</div>
<div class="key plain" id="K_0">
    <div class="keycap">0</div>
</div>
<div class="key plain" id="K_HYPHEN">
    <div class="keycap">-</div>
</div>
<div class="key plain" id="K_EQUAL">
    <div class="keycap">=</div>
</div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-backspace.gif');
          ">
    <div class="keycap">Backspace</div>
</div>
<br style="clear: left">
<div class="key special" id="" style="
        width: 52px;
        
          background-image: url('key-tab.gif');
          ">
    <div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
    <div class="keycap">Q</div>
</div>
<div class="key plain" id="K_W">
    <div class="keycap">W</div>
    <div class="keytext">щ</div>
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
</div>
<div class="key plain" id="K_RBRKT">
    <div class="keycap">]</div>
</div>
<div class="key plain" id="K_BKSLASH">
    <div class="keycap">\</div>
    <div class="keytext">э</div>
</div>
<br style="clear: left">
<div class="key special" id="" style="
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
    <div class="keytext">й</div>
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
</div>
<div class="key plain" id="K_QUOTE">
    <div class="keycap">'</div>
</div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
    <div class="keycap">Enter</div>
</div>
<br style="clear: left">
<div class="key special" id="K_SHIFTL" style="
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
    <div class="keytext">х</div>
</div>
<div class="key plain" id="K_C">
    <div class="keycap">C</div>
    <div class="keytext">ц</div>
</div>
<div class="key plain" id="K_V">
    <div class="keycap">V</div>
    <div class="keytext">в</div>
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
</div>
<div class="key plain" id="K_PERIOD">
    <div class="keycap">.</div>
</div>
<div class="key plain" id="K_SLASH">
    <div class="keycap">/</div>
</div>
<div class="key special" id="" style="
        width: 90px;
        
          background-image: url('key-shiftr.gif');
          ">
    <div class="keycap">Shift</div>
</div>
<br style="clear: left">
<div class="key special" id="" style="
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
    <div class="keycap"></div>
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
</div>
<br style="clear: left"/><br/>
<h2 style="clear:left">Keyboard Layout - Shift</h2>
<div class="key plain" id="K_BKQUOTE">
    <div class="keycap">`</div>
    <div class="keytext">Ё</div>
</div>
<div class="key plain" id="K_1">
    <div class="keycap">1</div>
</div>
<div class="key plain" id="K_2">
    <div class="keycap">2</div>
</div>
<div class="key plain" id="K_3">
    <div class="keycap">3</div>
</div>
<div class="key plain" id="K_4">
    <div class="keycap">4</div>
</div>
<div class="key plain" id="K_5">
    <div class="keycap">5</div>
</div>
<div class="key plain" id="K_6">
    <div class="keycap">6</div>
</div>
<div class="key plain" id="K_7">
    <div class="keycap">7</div>
</div>
<div class="key plain" id="K_8">
    <div class="keycap">8</div>
</div>
<div class="key plain" id="K_9">
    <div class="keycap">9</div>
</div>
<div class="key plain" id="K_0">
    <div class="keycap">0</div>
</div>
<div class="key plain" id="K_HYPHEN">
    <div class="keycap">-</div>
</div>
<div class="key plain" id="K_EQUAL">
    <div class="keycap">=</div>
</div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-backspace.gif');
          ">
    <div class="keycap">Backspace</div>
</div>
<br style="clear: left">
<div class="key special" id="" style="
        width: 52px;
        
          background-image: url('key-tab.gif');
          ">
    <div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
    <div class="keycap">Q</div>
</div>
<div class="key plain" id="K_W">
    <div class="keycap">W</div>
    <div class="keytext">Щ</div>
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
</div>
<div class="key plain" id="K_RBRKT">
    <div class="keycap">]</div>
</div>
<div class="key plain" id="K_BKSLASH">
    <div class="keycap">\</div>
    <div class="keytext">Э</div>
</div>
<br style="clear: left">
<div class="key special" id="" style="
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
    <div class="keytext">Й</div>
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
</div>
<div class="key plain" id="K_QUOTE">
    <div class="keycap">'</div>
</div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
    <div class="keycap">Enter</div>
</div>
<br style="clear: left">
<div class="key special" id="K_SHIFTL" style="
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
    <div class="keytext">Х</div>
</div>
<div class="key plain" id="K_C">
    <div class="keycap">C</div>
    <div class="keytext">Ц</div>
</div>
<div class="key plain" id="K_V">
    <div class="keycap">V</div>
    <div class="keytext">В</div>
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
</div>
<div class="key plain" id="K_PERIOD">
    <div class="keycap">.</div>
</div>
<div class="key plain" id="K_SLASH">
    <div class="keycap">/</div>
</div>
<div class="key special" id="" style="
        width: 90px;
        
          background-image: url('key-shiftr.gif');
          ">
    <div class="keycap">Shift</div>
</div>
<br style="clear: left">
<div class="key special" id="" style="
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
    <div class="keycap"></div>
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
</div>
<br style="clear: left"/>

<br/>
<p>Version 1.0 for Keyman Desktop 7.0. Released 24 October 2007</p>
</body>
