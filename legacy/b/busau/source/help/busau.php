<?php /*
  Name:        Busa Unicode
  Copyright:   2008-2011
  Description: A keyboard designed for Busa, Bokobaru and Boko languages in Africa.  Includes the Doulos SIL font.
  Authors:     Tavultesoft Pty Ltd
*/
  $pagename = 'Busa Unicode (deprecated) Keyboard Help';
  $pagetitle = 'Boko / Bokobaru / Busa Unicode (deprecated) Keyboard Help';
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
          font: 12pt "Doulos SIL", "Charis SIL", "Code2000", "Arial Unicode MS", "Arial"; 
          position: absolute; 
          display: block;
          right: 5px;
          bottom: 4px;
          color: blue;
        }    
        
        .hotkey, .hotkeya {
          border-left: solid 1px #c0c0c0;
          border-top: solid 1px #c0c0c0;
          border-right: solid 1px #808080;
          border-bottom: solid 1px #808080;
          width: 2em; height: 2em;
          text-align: center;
          padding: 4px;                  
          margin: 6px 4px;
          background: #e0e0e0;
        }                 
        
        .hotkeyplus { padding: 4px 0; margin: 6px 0; height: 2em }
        
        .hotkeya { width: 3em }
        
        .hotkeys tr td { white-space: nowrap; vertical-align: middle }
        
        td.char { font: 20pt "Doulos SIL", "Charis SIL", "Code2000", "Arial Unicode MS" }
    </style>

<h1 style='margin-bottom: 2px'>Boko / Bokobaru / Busa Keyboard</h1>
<p style='margin-top: 2px'><i>&copy; 2011 Tavultesoft Pty Ltd</i></p>
<p>This package includes a keyboard called: 
    <b><img src='busaU.ico' width='16' height='16' /> Busa</b>
designed for use with <b>Boko</b>, <b>Bokobaru</b> and <b>Busa</b> and related languages.</p>
                          
<table><tr><td style='vertical-align: top; padding-right: 30px'>

<h2>Key Combinations</h2>
    
<table class='hotkeys'>
  <tr><td><span class='hotkey'>[</span></td><td class='char'>ɛ</td><td><span class='hotkey'>{</span></td><td class='char'>Ɛ</td></tr>
  <tr><td><span class='hotkey'>]</span></td><td class='char'>ɛ</td><td><span class='hotkey'>}</span></td><td class='char'>Ɔ</td></tr>
</table>
<table class='hotkeys'>
  <tr><td><span class='hotkeya'>Shift</span><span class='hotkeyplus'> + </span><span class='hotkey'>2</span></td><td class='char'>ɑ</td><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>@</span></td><td class='char'>@</td></tr>
  <tr><td><span class='hotkeya'>Shift</span><span class='hotkeyplus'> + </span><span class='hotkey'>3</span></td><td class='char'>ɡ</td><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>#</span></td><td class='char'>#</td></tr>
  <tr><td><span class='hotkeya'>Shift</span><span class='hotkeyplus'> + </span><span class='hotkey'>6</span></td><td class='char'>ŋ</td><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>6</span></td><td class='char'>Ŋ</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>c</span></td><td class='char'>ç</td><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>C</span></td><td class='char'>Ç</td></tr>  
</table>          

</td><td style='vertical-align: top'>

<h2>Diacritic Combinations</h2>

<table class='hotkeys'>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>2</span></td><td class='char'>◌̣</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>G</span></td><td class='char'>◌̂</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>H</span></td><td class='char'>◌̀</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>J</span></td><td class='char'>◌́</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>K</span></td><td class='char'>◌̃</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>L</span></td><td class='char'>◌̃̀</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>;</span></td><td class='char'>◌̃́</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>'</span></td><td class='char'>◌̃̄</td></tr>
  <tr><td><span class='hotkeya'>Alt</span><span class='hotkeyplus'> + </span><span class='hotkey'>/</span></td><td class='char'>◌̄</td></tr>
</table> 

</td></tr></table>

<h2>Fonts</h2>

<p>The fonts <b>Doulos SIL</b> or <b>Charis SIL</b> work well with this keyboard.</p>

<h2>Terms of Use and Support</h2>

<p>These keyboards are freeware.  If you have any queries or suggestions about this keyboard, 
please post them at the Keyman <a href='https://community.software.sil.org/c/keyman'>Community site</a>.</p>

<h1>Keyboard Layout</h1>

<h1 style="clear:left">Unicode : Unshifted</h1>
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
<div class="keytext">q</div>
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
<div class="keytext">ɛ</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">ɔ</div>
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
<div class="keytext">;</div>
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
<div class="keytext">x</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">c</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">v</div>
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
</div><br style="clear: left"><h1 style="clear:left">Unicode : Shift</h1>
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
<div class="keytext">ɑ</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">ɡ</div>
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
<div class="keytext">ŋ</div>
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
<div class="keytext">-</div>
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
<div class="keytext">Q</div>
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
<div class="keytext">Ɛ</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">Ɔ</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">|</div>
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
<div class="keytext">Z</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">X</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">V</div>
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
</div><br style="clear: left"><h1 style="clear:left">Unicode : Alt</h1>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">◌̣</div>
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
<div class="keytext">Ŋ</div>
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
<div class="keytext">[</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">]</div>
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
<div class="keytext">◌̂</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">◌̀</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">◌́</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">◌̃</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">◌̃̀</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">◌̃́</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">◌̃̄</div>
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
<div class="keytext">ç</div>
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
<div class="keytext">◌̄</div>
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
</div><br style="clear: left"><h1 style="clear:left">Unicode : Shift+Alt</h1>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
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
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">^</div>
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
<div class="keytext">{</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">}</div>
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
<div class="keytext">◌̂</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">◌̀</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">◌́</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">◌̃</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">◌̃̀</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">◌̃́</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">◌̃̄</div>
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
<div class="keytext">Ç</div>
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
<div class="keytext">◌̄</div>
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
</div><br style="clear: left"/>
<br/>

<h2>Version History</h2>

<p>Version 1.3, released 09 August 2011: Add diacritics to n</p>
<p>Version 1.2, released 04 August 2011: Add ç, Ç, Ŋ and ◌̂</p>
<p>Version 1.01, released 28 February 2008: Add ~ diacritic to ɛ and ɔ</p>
<p>Version 1.0, released 25 February 2008</p>
