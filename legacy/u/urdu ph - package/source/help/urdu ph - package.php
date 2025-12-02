<?php /*
  Name:        Urdu Phonetic Keyboard
  Copyright:   2007
  Description: This package includes a phonetic keyboard called <b>Multi Pak Phonetic</b> and the font <b>Pak Nastaleeq</b> optimised for use with <b>Urdu</b>.
  Authors:     Zeeshan Hyder
*/
  $pagename = 'Urdu Phonetic (deprecated) Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>

<head>
<style type="text/css">
p { font: 10pt Tahoma }
h1 { font: bold 16pt Tahoma; color: #4444cc }
h2 { font: bold 12pt Tahoma; color: #4444cc }
table.display tr .gap { width: 16px; border: none; }
table.display tr td { font: 10pt Tahoma; border: solid 1px #ccccff; padding: 4px }
table.display tr th { font: bold 10pt Tahoma; border: solid 1px #ccccff; padding: 4px; text-align: left }
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
          font: 12pt "Pak Nastaleeq"; 
          position: absolute; 
          display: block;
          right: 5px;
          bottom: 4px;
          color: blue;
        }
    </style>
</head>
<body>
<h1 style='margin-bottom: 2px'>Urdu Phonetic Keyboard</h1>
<p style='margin-top: 2px'><i>Created by Zeeshan Hyder</i></p>
<p>This package includes a phonetic keyboard called <b>Multi Pak Phonetic</b> and the font <b>Pak Nastaleeq</b> optimised for use with
<b>Urdu</b>. Please note that the On Screen Keyboard is based on a US English keyboard layout.</p>
<p>This keyboard is freeware.</p>

<h1>Keyboard Layout</h1>
<h2 style="clear:left"> Unshifted</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">ٍ</div>
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
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
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
<div class="keytext">ق</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">و</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ع</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ر</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ت</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ے</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ء</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ى</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">ہ</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">پ</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">]</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">[</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">\</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">ا</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">س</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">د</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ف</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">گ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ھ</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">ج</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">ك</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">ل</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">؛</div>
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
<div class="keytext">ز</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ش</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">چ</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ط</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ب</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">ن</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">م</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">،</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">۔</div>
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
</div><br style="clear: left"><h2 style="clear:left"> Shift</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">ً</div>
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
<div class="keytext">)</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">(</div>
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
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;
        
          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">ْ</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ﷺ</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ؑ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ڑ</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ٹ</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">،</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ٰ</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">ۃ</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">ُ</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">}</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">{</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">ٓ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ص</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ڈ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ٖ</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">غ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ح</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">ض</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">خ</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">ؒ</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">:</div>
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
<div class="keytext">ذ</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ژ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ث</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ظ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ؓ</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">ں</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">ِ</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">َ</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">؟</div>
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
</div><br style="clear: left"><h2 style="clear:left"> Control</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
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
</div><br style="clear: left"><div class="key special" id="" style="
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
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ٕ</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ئ</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">ٌ</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">ؔ</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">‘</div>
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
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">٪</div>
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
</div><br style="clear: left"><h2 style="page-break-before: always; clear:left"> Shift+Control</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
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
<div class="keytext">ّ</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
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
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">؎</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">“</div>
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
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
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
</div><br style="clear: left"><h2 style="clear:left"> Alt</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">١</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">٢</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">٣</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">٤</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">٥</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">٦</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">٧</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">٨</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">٩</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">٠</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">ّ</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
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
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ٔ</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">’</div>
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
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ٮ</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
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
</div><br style="clear: left"><h2 style="clear:left"> Shift+Alt</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
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
</div><br style="clear: left"><div class="key special" id="" style="
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
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">آ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">”</div>
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
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ۗ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
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
</div><br style="clear: left"></body>
</html>
