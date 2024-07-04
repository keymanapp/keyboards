<?php /*
  Name:        Farsi Unicode
  Copyright:   2003
  Description: Farsi Unicode keyboard: phonetic input to Farsi.  Documentation on how to use the keyboard is shown when you install the keyboard.
  Authors:     Peter E. Hauer, Linguasoft
*/
  $pagename = 'Farsi Phonetic Unicode Keyboard Help';
  $pagetitle = 'Farsi Phonetic Unicode Keyboard Help';
  require_once('header.php');
?>

<style type="text/css">
li, p { font: 10pt Tahoma }
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
          font: 12pt Arial;
          position: absolute; 
          display: block;
          right: 5px;
          bottom: 4px;
          color: blue;
        }
</style>

<h1 style='margin-bottom: 2px'>Farsi Phonetic to Unicode Keyboard</h1>
<p style='margin-top: 2px'><i>© 2003 Peter E. Hauer, Linguasoft</i></p>
<p>This package includes a phonetic Farsi (Persian) keyboard.
This keyboard is designed for typing Farsi on a European keyboard layout.  Please note that the On Screen Keyboard
is based on a US English keyboard layout.</p>

<h1>Additional Windows Configuration for Farsi</h1>

<p>You will need to take complete some additional steps in order to type Farsi correctly on your computer:</p>

<ol>
<li>Go to Control Panel, Regional and Language Options dialog, Languages tab.</li>
<li>If the box “Install files for complex script and right-to-left languages (including Thai)” is not already ticked, tick it and click OK to install the language support files.  Windows may prompt you to insert the Windows XP CD, and will restart once installation is complete.  Once Windows restarts, open the Regional and Language Options dialog again, and click on the Languages tab again.</li>
<li>Click on the Details button.   Click Add and select Farsi from the list of languages, but (and here is the important bit!) select US in  the “Keyboard layout/IME” box.</li>
<li>Click OK, OK, OK to save changes here</li>
<li>Start Keyman Configuration and click on the Languages tab.  For the entry titled Farsi/US, select the Keyman Farsi keyboard.</li>
<li>Click OK to save changes again</li>
</ol>

<p>Now, when you wish to type Farsi, select the Windows language Farsi, and Keyman will automatically switch on the Farsi keyboard.</p>

<h1>Additional MS Office Configuration for Farsi</h1>

<p>You may also need to install Farsi language support in MS Office:</p>

<ol>
<li>Click Start menu, All Programs, Microsoft Office,  Microsoft Office Tools, Microsoft Office Language Settings</li>
<li>In the list of Available languages, select Persian (for some reason Microsoft use the name Persian in Office but Farsi elsewhere).  Click Add &gt;&gt;</li>
<li>Click OK to save changes</li>
</ol>



<p><a href='farsi_unicode.pdf'>Full Documentation (PDF)</a></p>

<h2 style="clear:left">Keyboard Layout (Unshifted)</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">ٔ</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">۱</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">۲</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">۳</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">۴</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">۵</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">۶</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">۷</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">۸</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">۹</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">۰</div>
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
<div class="keytext">ش</div>
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
<div class="keytext">ی</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ؤ</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ئ</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">ء</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">پ</div>
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
<div class="keytext">ه</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">ج</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">ک</div>
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
<div class="keytext">ض</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">ث</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">و</div>
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
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">٫</div>
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
</div><br /><br /><br style="clear: left" /><h2 style="clear:left">Shift</h2>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">ٓ</div>
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
<div class="keytext">×</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">÷</div>
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
<div class="keytext">ـ</div>
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
<div class="keytext">غ</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ّ</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ِ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ريال</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ط</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">ىٰ</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ُ</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ِ</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">ُ</div>
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
<div class="keytext">َ</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ص</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ذ</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ح</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">چ</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">خ</div>
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
<div class="keytext">ژ</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">ظ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">ڤ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">ْ</div>
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
<div class="keytext">‌</div>
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

<br /><p>Version 1.2 for Keyman Desktop 7.0. Released 24 March 2008 - Added instructions on Farsi configuration in Windows</p>
<p>Version 1.1 for Keyman Desktop 7.0. Released 27 November 2007</p>       
