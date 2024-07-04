<?php /*
  Name:        Syriac/Aramaic
  Copyright:   2007
  Description: <p>This package includes 3 Syriac/Aramaic keyboards called: <b>Aramaic (Hebrew layout)</b>, <b>Syriac (Phonetic layout)</b>,
and <b>Syriac (Arabic layout)</b> designed for use with <b>Aramaic</b> and <b>Syriac</b> and related languages.</p>

<p>Syriac (Arabic layout) and Syriac (Phonetic layout) keyboards are based on the standard Syriac keyboards.  The Aramaic (Hebrew layout)
keyboard was originally created by Illan Gonen, and is based on the Hebrew standard keyboard layout.</p>

<p>The fonts included with these keyboards have been provided by <a target='_blank' 
href='http://www.BethMardutho.org/'>Beth Mardutho: The Syriac Institute</a>.</p>

  Authors:     Tavultesoft Pty Ltd
*/
  $pagename = 'Syriac/Aramaic (deprecated) Keyboard Help';
  $pagetitle = 'Syriac/Aramaic (deprecated) Keyboard Help';
  require_once('header.php');
?>
<style type="text/css">
td, p { font: 10pt Tahoma }
td { font-weight: bold;  padding: 2px 10px }
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
          font: 12pt "Estrangelo Edessa"; 
          position: absolute; 
          display: block;
          right: 5px;
          bottom: 4px;
          color: blue;
        }
    </style>

<h1 style='margin-bottom: 2px'>Syriac/Aramaic Keyboards</h1>
<p style='margin-top: 2px'><i>&copy; 2007 Tavultesoft Pty Ltd</i></p>
<p>This package includes 3 Syriac/Aramaic keyboards called: 
    <b><img src='Aramaic.ico' width='16' height='16' /> Aramaic (Hebrew layout)</b>, 
    <b><img src='syriac_phonetic.ico' width='16' height='16' /> Syriac (Phonetic layout)</b>,
and <b><img src='syriac_arabic.ico' width='16' height='16' /> Syriac (Arabic layout)</b> designed for use with <b>Aramaic</b> and <b>Syriac</b> and related languages.</p>

<p>Syriac (Arabic layout) and Syriac (Phonetic layout) keyboards are based on the standard Syriac keyboards.  The Aramaic (Hebrew layout)
keyboard was originally created by Illan Gonen, and is based on the Hebrew standard keyboard layout.</p>

<h2>Installation and Usage Notes</h2>
 
<p>In order to use the Syriac keyboards correctly, you need to switch to the Syriac language with the Windows Language Bar.  
This switches your application into right-to-left input mode.  When you first install this package, the Syriac language will
also be installed, and the Syriac (Phonetic layout) keyboard will be automatically selected when you choose the Syriac language.</p>

<p>If you wish to use one of the other Syriac keyboards, start Keyman Configuration, select the Languages tab, and choose your
preferred keyboard against the Syriac entry in the list.</p>

<p>If you are using Keyman Desktop Professional, you can specify a hotkey to switch to the Syriac language in the Hotkeys tab in
Keyman Configuration.  This reduces the need to use the mouse or Alt+Left Shift/Ctrl+Shift to switch languages.</p>

<h2>Fonts</h2>

<p>The following fonts are included with these keyboards.  These fonts have been provided by <a target='_blank' 
href='http://www.BethMardutho.org/'>Beth Mardutho: The Syriac Institute</a>.</p>
                            
<table>
<tr><td>East Syriac Adiabene</td>
<td>East Syriac Ctesiphon</td></tr>

<tr><td>Estrangelo Antioch</td>
<td>Estrangelo Edessa</td></tr>
<tr><td>Estrangelo Midyat</td>
<td>Estrangelo Nisibin</td></tr>
<tr><td>Estrangelo Quenneshrin</td>
<td>Estrangelo Talada</td></tr>
<tr><td>Estrangelo TurAbdin</td>
<td></td></tr>

<tr><td>Serto Batnan</td>
<td>Serto Jerusalem</td></tr>
<tr><td>Serto Kharput</td>
<td>Serto Malankara</td></tr>
<tr><td>Serto Mardin</td>
<td>Serto Urhoy</td></tr>
</table>

<p style='padding: 0 10px'><a target='_blank' href='font-license.txt'>Font license</a> &nbsp;  &nbsp;  <a target='_blank' href='melthoguide.doc'>Font documentation</a></p>

<h2>Terms of Use and Support</h2>

<p>These keyboards are freeware.  If you have any queries or suggestions about this keyboard, 
please post them at the Keyman <a href='https://community.software.sil.org/c/keyman'>Community site</a>.</p>

<h1>Keyboard Layout - Aramaic (Hebrew layout)</h1>
<h2 style="clear:left">Unshifted Layout</h2>
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
<div class="keytext">݂</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">ܹ</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">ܸ</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">ܲ</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">ܵ</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">݁</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">݂</div>
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
<div class="keytext">܀</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ܩ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ܪ</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ܐ</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ܛ</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ܘ</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">ܦ</div>
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
<div class="keytext">ܫ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ܕ</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ܓ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ܖ</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">ܥ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ܝ</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">ܚ</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">ܠ</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
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
<div class="keytext">ܙ</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ܣ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ܒ</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ܗ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ܢ</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">ܡ</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">ܨ</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">ܬ</div>
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
</div><br style="clear: left" /><br /><h2 style="clear:left">Shift Layout</h2>
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
<div class="keytext">ܜ</div>
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
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ܔ</div>
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
<div class="keytext">ܤ</div>
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
</div>
<br style="clear: left" /><br />

<h1>Keyboard Layout - Syriac (Arabic layout)</h1>


<h2 style="clear:left">Unshifted layout </h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">܏</div>
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
<div class="keytext">ܔ</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ܨ</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ܖ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ܩ</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ܦ</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ܜ</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ܥ</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ܗ</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">ܞ</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">ܚ</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">ܓ</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">ܕ</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">܆</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">ܫ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ܣ</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ܝ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ܒ</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">ܠ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ܐ</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">ܬ</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">ܢ</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">ܡ</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">ܟ</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">ܛ</div>
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
<div class="keytext">܆</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">]</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">[</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ܤ</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ܪ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ܧ</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">܀</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">.</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">ܘ</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">ܙ</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">܇</div>
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
<div class="keytext"> </div>
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
</div><br style="clear: left"><br /><h2 style="clear:left">Shift layout </h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">̮</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">!</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">̊</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">̥</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">݉</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">♰</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">♱</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">܊</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">»</div>
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
<div class="keytext">«</div>
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
<div class="keytext">ܰ</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ܳ</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ܶ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ܺ</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ܽ</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">݀</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">݁</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">̈</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">̄</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">̇</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">̃</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">݊</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">:</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">ܱ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ܴ</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ܷ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ܻ</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">ܾ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ܑ</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">ـ</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">̤</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">̱</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">̣</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">̰</div>
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
<div class="keytext">:</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">ܲ</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ܵ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ܸ</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ܼ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ܿ</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">ܹ</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">݂</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">،</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">؛</div>
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
<div class="keytext"> </div>
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
</div><br style="clear: left"><br />

<h2 style="clear:left">Right Alt layout </h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">ّ</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">܁</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">܂</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">܃</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">܄</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">܅</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">܈</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">܉</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">܋</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">܌</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">܍</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">┌</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">┐</div>
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
<div class="keytext">َ</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ً</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ُ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ٌ</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ٓ</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ٔ</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">݇</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">݃</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">݅</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">̭</div>
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
<div class="keytext">ِ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ٍ</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ٖ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ء</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">ٕ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ٰ</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">݈</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">݄</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">݆</div>
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
<div class="keytext">ْ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">‍</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">‌</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">‎</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">‏</div>
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
</div><br style="clear: left"></br />




                                            
<h1>Keyboard Layout - Syriac (Phonetic layout)</h1>



<h2 style="clear:left">Unshifted layout</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">܏</div>
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
<div class="keytext">ܩ</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ܘ</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ܖ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ܪ</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ܬ</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ܝ</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ܜ</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ܥ</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">ܧ</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">ܦ</div>
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
<div class="keytext">܆</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">ܐ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ܣ</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ܕ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ܔ</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">ܓ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ܗ</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">ܛ</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">ܟ</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">ܠ</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">ܚ</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">ܞ</div>
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
<div class="keytext">܆</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">ܙ</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ܨ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ܤ</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ܫ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ܒ</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">ܢ</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">ܡ</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">܀</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">.</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">܇</div>
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
<div class="keytext"> </div>
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
</div><br style="clear: left"><br /><h2 style="clear:left">Shift layout</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">̮</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">!</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">̊</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">̥</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">݉</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">♰</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">♱</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">܊</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">»</div>
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
<div class="keytext">«</div>
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
<div class="keytext">ܰ</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ܳ</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ܶ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ܺ</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ܽ</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">݀</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">݁</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">̈</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">̄</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">̇</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">̃</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">݊</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">:</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">ܱ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ܴ</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ܷ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ܻ</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">ܾ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ܑ</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">ـ</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">̤</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">̱</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">̣</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">̰</div>
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
<div class="keytext">:</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">ܲ</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ܵ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ܸ</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ܼ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ܿ</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">ܹ</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">݂</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">،</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">؛</div>
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
<div class="keytext"> </div>
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
</div><br style="clear: left"><br />

<h2 style="clear:left">Right Alt layout</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">ّ</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">܁</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">܂</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">܃</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">܄</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">܅</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">܈</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">܉</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">܋</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">܌</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">܍</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">┌</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">┐</div>
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
<div class="keytext">َ</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ً</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ُ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ٌ</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ٓ</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ٔ</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">݇</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">݃</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">݅</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">̭</div>
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
<div class="keytext">ِ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ٍ</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ٖ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ء</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">ٕ</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ٰ</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">݈</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">݄</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">݆</div>
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
<div class="keytext">ْ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">‍</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">‌</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">‎</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">‏</div>
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
</div><br style="clear: left"><br />


<p>Version 1.1, released 20 December 2007: added Syriac language association and documentation</p>
<p>Version 1.0, released 19 December 2007</p>
