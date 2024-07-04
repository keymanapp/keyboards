<?php
  $pagename = 'Tai Dam Latin (SIL) Keyboard Help';
  $pagetitle = 'Tai Dam Latin (SIL) Keyboard Help';
  require_once('header.php');
?>
<style type="text/css">
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

        .context {
          
            background-image: url('key-red.gif');
          
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
          
					font:
						12pt
							 
						"Arial"; 
          position: absolute; 
          display: block;
          right: 5px;
          bottom: 4px;
          color: blue;
        }

    </style>

<body>

<p>SIL's Tai Dam Latin keyboard has been optimized for typing the Tai Dam language in the Latin script. It can also be used for typing the Tai Dón language in the Latin scrit.

<h2>Fonts</h2>

<p>No fonts are included in this keyboard package. The keyboard can be used with any font that includes coverage for the Vietnamese alphabet, plus two characters required for Tai Dam:</p>
<ul>
    <li>LATIN SMALL LETTER SALTILLO (U+A78C)</li>
    <li>NON-BREAKING HYPHEN (U+2011)</li>
</ul>
<p>and one character required for Tai Dón:</p>
<ul>
    <li>COMBINING MACRON (U+0304)</li>
</ul>
<p>Any current version of SIL's Latin fonts, as well as many commercially available fonts, meet this requirement.</p>

<h2>Keyboard features</h2>

<p>SIL's Tai Dam Latin keyboard has been optimized for the Tai Dam language by moving three frequently used tone marks to the center of the keyboard. This was done to reduce the stress on the little fingers that occurs when the most frequently used characters are placed at the corners of the keyboard.
</p>
<p>Another feature of the keyboard is that it uses context sensitivity to control the production of the tone marks used in Tai Dam, Tai Dón, and Vietnamese. Thus, the keys to which the Combining Acute, Combining Hook, Combining Dot Below, Combining Grave, Combining Tilde, and Combining Macron are assigned will produce those tone marks only after a vowel. In other contexts, the keys will produce the underlying default characters assigned to them.</p>
<p>Finally, any key that is remapped will produce its underlying default character if it is pressed twice.</p>

<h2>Keyboard layout</h2>

<h3 style="clear:left">Unshifted</h3>
<div class="key context" id="K_BKQUOTE">
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
<div class="keytext">‑</div>
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
<div class="keytext">ê</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">e</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ꞌ</div>
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
<div class="keytext">ô</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">]</div>
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
<div class="key context" id="K_D">
<div class="keycap">D</div>
<div class="keytext">d</div>
</div>
<div class="key context" id="K_F">
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
<div class="keytext">ư</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">k</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">l</div>
</div>
<div class="key context" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">;</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">ơ</div>
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
<div class="keytext">ă</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">đ</div>
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
</div><br style="clear: left">

<h3 style="clear:left">Shift</h3>
<div class="key context" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">~</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">“</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">”</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">#</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">‘</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">’</div>
</div>
<div class="key context" id="K_6">
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
<div class="key context" id="K_HYPHEN">
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
<div class="keytext">Q</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">Ê</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">E</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ꞌ</div>
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
<div class="keytext">Ô</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">}</div>
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
<div class="keytext">A</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">S</div>
</div>
<div class="key context" id="K_D">
<div class="keycap">D</div>
<div class="keytext">D</div>
</div>
<div class="key context" id="K_F">
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
<div class="keytext">Ư</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">K</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">L</div>
</div>
<div class="key context" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">:</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">Ơ</div>
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
<div class="keytext">Ă</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">Đ</div>
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
</div><br style="clear: left">

<h3>Notes:</h3>
<ul>
    <li>The <span style="color:red">red keys </span>are context sensitive. In mosts contexts 
        they will produce their default values (as shown above), but 
        after a vowel (lower or upper case <b>a ă â e ê i o ô ơ u ư</b>) they will produce the 
        following Combining Diacritical Marks:</li>
</ul>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=400
 style='margin-left:40px; ;border-collapse:collapse;border:none'>
 <thead>
  <tr style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica;page-break-after:avoid'>
   <td colspan="3" width=400 valign=bottom style='border:solid windowtext 2.25pt;
   padding:0pt 0pt 0in 0pt'>
   <p class=MsoNormal align=center><b>Context Sensitive Keys<br>Output after vowels</b></p>
   </td>
  </tr>
  <tr style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica;page-break-after:avoid'>
   <td width=125 valign=bottom style='border:solid windowtext 2.25pt;
   border-right:none;padding:0pt 0pt 0in 0pt'>
   <p class=MsoNormal align=center><b>Key Cap</b></p>
   </td>
   <td width=50 valign=bottom style='width:36pt;border-top:solid windowtext 2.25pt;
   border-left:none;border-right:none;border-bottom:solid windowtext 2.25pt;padding:0pt 0pt 0in 0pt'>
   <p class=MsoNormal align=center><b>Character</b></p>
   </td>
   <td width=225 valign=bottom style='border:solid windowtext 2.25pt;
   border-left:none;padding:0pt 0pt 0in 0pt'>
   <p class=MsoNormal align=center><b>Character Name</b></p>
   </td>
  </tr>
 </thead>
 
 <tr style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica;page-break-after:avoid'>
  <td width=125 valign=center style='border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Back Quote<br>(unshifted)</p>
  </td>
  <td width=50 valign=center style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center><span style='font-family:Times;font-size:20.0pt'>&#x25CC;&#x0300;</span></p>
  </td>
  <td width=225 valign=center style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Combining Grave Accent<br>(U+0300)</p>
  </td>
   </tr>
 
 <tr style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica;page-break-after:avoid'>
  <td width=125 valign=center style='border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Tilde<br>(shifted)</p>
  </td>
  <td width=50 valign=center style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center><span style='font-family:Times;font-size:20.0pt'>&#x25CC;&#x0303;</span></p>
  </td>
  <td width=225 valign=center style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Combining Tilde<br>(U+0303)</p>
  </td>
   </tr>

 <tr style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica;page-break-after:avoid'>
  <td width=125 valign=center style='border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Circumflex<br>(shifted)</p>
  </td>
  <td width=50 valign=center style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center><span style='font-family:Times;font-size:20.0pt'>&#x25CC;&#x0302;</span></p>
  </td>
  <td width=225 valign=center style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Combining Circumflex Accent<br>(U+0302)</p>
  </td>
   </tr>
   
 <tr style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica;page-break-after:avoid'>
  <td width=125 valign=center style='border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Underscore<br>(shifted)</p>
  </td>
  <td width=50 valign=center style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center><span style='font-family:Times;font-size:20.0pt'>&#x25CC;&#x0304;</span></p>
  </td>
  <td width=225 valign=center style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Combining Macron<br>(U+0304)</p>
  </td>
   </tr>

 <tr style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica;page-break-after:avoid'>
  <td width=125 valign=center style='border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>D</p>
  </td>
  <td width=50 valign=center style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center><span style='font-family:Times;font-size:20.0pt'>&#x25CC;&#x0309;</span></p>
  </td>
  <td width=225 valign=center style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Combining Hook Above<br>(U+0309)</p>
  </td>
   </tr>
 
 <tr style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica;page-break-after:avoid'>
  <td width=125 valign=center style='border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>F</p>
  </td>
  <td width=50 valign=center style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center><span style='font-family:Times;font-size:20.0pt'>&#x25CC;&#x0301;</span></p>
  </td>
  <td width=225 valign=center style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Combining Acute Accent<br>(U+0301)</p>
  </td>
   </tr>
 
 <tr style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica;page-break-after:avoid'>
  <td width=125 valign=center style='border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 2.25pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Semicolon<br>or<br>Colon</></p>
  </td>
  <td width=50 valign=center style='border:none;border-bottom:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center><span style='font-family:Times;font-size:20.0pt'>&#x25CC;&#x0323;</span></p>
  </td>
  <td width=225 valign=center style='border-top:none;border-left:none;
  border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center>Combining Dot Below<br>(U+0323)</p>
  </td>
   </tr>

 </table>

<ul>
    <li>Press the <b>Hyphen key</b> to produce a <b>Non-Breaking Hyphen</b> (U+2011), 
        which is preferred over the default Hyphen-Minus (U+002D) for multisyllable 
        Tai Dam words. Press the key twice to Hyphen-Minus.</li>
    <li>Press the sequence <b>Left Parenthesis</b>, <b>Right Parenthesis</b> 
        (with nothing between them) to produce a dotted circle (U+25CC).</li>
    <li>Press <b>Ctrl+Shift+Space</b> to produce a No-Break Space (U+00A0).</li>
    <li>Press any remapped key twice to produce its default (unmapped) value.</li>
</ul>


</body>
