<?php /*
  Name:             keyboard_yoruba8
  Copyright:        Copyright (C) 2012 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      02 Nov 2012

  Modified Date:    02 Nov 2012
  Authors:          tpbaehr
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          02 Nov 2012 - tpbaehr - Create online help from package help.
*/
  $pagename = 'Yorùbá 8 (deprecated) Keyboard Help';
  $pagetitle = 'Yorùbá 8 (deprecated) Keyboard Help';
  $style = <<<END
/* 
===========
==General==
===========
*/
body {
  margin: 30px; 
  font-family: Arial, Helvetica, sans-serif; 
  font-size: 10pt;color: #2D2C2C;}
img {border: none; }

p {font-size: 10pt; margin:5px 0px 0px; line-height:20px;}
p.example {margin-left:40px; line-height:45px;}

section {clear:left;}

article{clear:left; margin-bottom:60px;}
  
/* Headers */
h1, h2, h3{color: #AD4A28; font-weight: bold;}

h1 {font-size: 22pt; margin: 22px 0px 11px; padding:0px;}
h2 {font-size: 16pt; margin: 14px 0px 7px; padding:0px;}
h3 {font-size: 12pt; margin: 12px 0px 6px; padding:0px;}
h4 {font-size: 11pt; margin: 10px 0px 5px; padding:0px;}
h5 {font-size: 10pt; margin: 8px 0px 4px; padding:0px;}

/* Links */
a:link {color: #AD4A28; text-decoration: none;}
a:visited {color: #AD4A28;text-decoration: none;}
a:hover {color: #AD4A28;text-decoration: underline;}

/* Language + Keyboard */
samp{font-family: "Times New Roman"; color:blue;}
kbd {color:black;}

/* Printing */
.clear {clear:both;}
@media print{.break {page-break-before:always; padding-top:20px;clear:both;}}


/*
===========
==Welcome==
===========
*/
/* Notes (Asides) */
aside {background-color:#eee;border:2px solid #ddd;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;margin:10px 0px; padding:0px 10px 5px;font-size:10pt;}
aside h4 {color:#AD4A28; text-align:left;padding:0px 0px 5px;margin-top:5px;font-size:11pt;}
aside p {font-size:10pt;}
aside kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px;  padding:2px 4px; vertical-align:middle; line-height:2em; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}

/* Tables */
table {border-collapse:collapse !important; margin:10px 0px 20px 40px;}
@media print {table {margin:10px 10px 0px 0px;}}
.grid col {background-color:#ffffff;}
.grid td, .grid th {padding:2px 5px;border-bottom:1px solid #ddd;}
@media print {.grid th {font-size:9pt;}}
.grid tr {text-align:center; font-weight:normal; height:55px;}
.grid thead tr,.grid .headrow{height:30px;}
.grid .headrow {font-weight:bold; color:#AD4A28; background-color:#eee; text-align:center;}
col.menu   {width:580px;}

td samp {font-size:24pt}
@media print {td samp {font-size:20pt;}}
table kbd {color:black; font:12pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px;  padding:2px 4px; vertical-align:middle; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
@media print {table kbd {font-size:8pt;}}


/* Columns + Psuedo-Columns (Floats)*/
.columns  {width:375px; -webkit-column-count: 2; -webkit-column-gap: 10px; -moz-column-count: 2; -moz-column-gap: 10px; column-count: 2; column-gap: 10px;}
.colleft, .colright {position:relative; float:left;}
.colright {padding-left:40px;}

/* Language Examples */
p samp {font-size:20pt;}
p kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px; padding:0px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}

/* OSK Keys */
        .key { 
            float: left;
            display: block; 
            position: relative;
            overflow: hidden;
            height: 40px;
            margin: 2px 0px 0px 2px;
            border: solid 1px grey;
      -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;     
        }
    
        .plain {
          background-repeat: no-repeat;
          width: 40px;
        } 
    .empty {
      background:#eee;
    }
        .K_BKSP {
    width: 65px;
    }
    .K_TAB {
    width: 62px;    
    }
        .K_BKSLASH {
        width: 42px; 
        }
    .K_CAPS {
    width: 72px;
    }
    .K_ENTER {
        width: 76px; 
    }   
    .K_ENTER-EU1 {
        width: 42px; 
    -webkit-border-radius: 3px 3px 0px; -moz-border-radius: 3px 3px 0px; border-radius: 3px 3px 0px;
    }
    .K_ENTER-EU1 .key kbd {
    left:3px !important;
    }   
    .K_ENTER-EU2 {
        width: 32px; 
    margin-top:-1px !important; 
    border-top:none !important;
    height:39px !important;
    -webkit-border-radius: 0px 0px 3px 3px; -moz-border-radius: 0px 0px 3px 3px; border-radius: 0px 0px 3px 3px;
    }   
        .K_SHIFTL {
          width: 91px;
        }                
        .K_SHIFTL-EU {
          width: 47px;
        }    
        .K_oE2 {
          display:none;        
        }     
    .K_SHIFTR {
          width: 100px;
        }  
    .K_CTRLL {
      width:66px;
      margin-right: 55px; 
        }     
    .K_ALTL {
          width: 40px;
        }   
        .K_SPACE , .K_SPACE samp{
          width: 245px;  
        } 
    .K_ALTR {
          width: 40px;
        }     
    .K_CTRLR {
          width: 66px;
      margin-left: 109px;
    }
@media print {.K_CTRLR {
        margin-left:104px;
      } 
    }
        
        .special {
          background-repeat: no-repeat;
      background: #c0c0c0;
        }
        
        .key kbd {
          font: bold 8pt Arial; 
          position: absolute; 
          left: 3px; 
          top: 3px;
        }
        
        .key kbd {          
          display: block;
        }
        
        .special kbd {
          display: block;
        }
        
        .key samp {
      font-size:22px;
          position: absolute; 
          display: block;
          right: 2px;
          bottom: 2px;
        } 

    .LTN {
      /* font-family:Arial !important;
      font-size:10px !important;*/
      color: #AD4A28 !important;
      /*font-variant:small-caps;*/
      padding:8px 0px 0px 1px;
      line-height:1em;
    }

    .K_SPACE samp,
    .K_SPACE .LTN {
     text-align:center;
      }

END;
  
  require_once('header.php');
?>

<p>Keyboard &#169; 2012 Tavultesoft Pty Ltd</p>
  <section id='overview'>
  <h2>Overview</h2>
  <p>Yorùbá 8 is a simple Unicode keyboard for the Yorùbá language, with the option to use either the modern dot or the traditional bar under the letters <samp>ẹ</samp>|<samp>e̩</samp>, <samp>ọ</samp>|<samp>o̩</samp>, and <samp>ṣ</samp>|<samp>s̩</samp>.</p> 
  <h4>Function</h4>
  <p>The Yorùbá 8 keyboard is adaptive. The arrangement of keys in Yorùbá 8 will adapt to your default Windows layout. For example, you can find the <samp>´</samp> (acute accent) on the <kbd>]</kbd> key on your keyboard, no matter whether you are using an English(QWERTY), a German (QWERTZ), or a French (AZERTY) keyboard.</p>
  <p>You can type all of the special Yorùbá letters with a single key using this keyboard. Here is how:</p>
  <article class='guide'>
    <table class='grid colleft'>
      <col class='keys' />
      <col class='char' />  
      <thead>   
        <tr>
          <th>Key</th>
          <th>Accent</th>
        </tr>
      </thead>
      <tbody>       
        <tr>
          <td><kbd>q</kbd></td>
          <td><samp>gb</samp></td>
        </tr>
        <tr>
          <td><kbd>z</kbd></td>
          <td><samp>ṣ</samp> or <samp>s̩</samp></td>
        </tr>
        <tr>
          <td><kbd>x</kbd></td>
          <td><samp>ọ</samp> or <samp>o̩</samp></td>
        </tr>
        <tr>
          <td><kbd>v</kbd></td>
          <td><samp>ẹ</samp> or <samp>e̩</samp></td>
        </tr>   
        <tr>
          <td><kbd>^</kbd></td>
          <td><samp>₦</samp></td>
        </tr>         
      </tbody>
    </table>
  </article>  
  <p class='clear'>You can chose with this keyboard whether to use the traditional bar form or the modern dot form of the letters <samp>ẹ</samp>|<samp>e̩</samp>, <samp>ọ</samp>|<samp>o̩</samp>, and <samp>ṣ</samp>|<samp>s̩</samp>. When the keyboard is on, type <kbd>Ctrl</kbd>+<kbd>.</kbd> to switch between the dot form and the bar form of the letters. Keyman Desktop remembers your choice whenever you return to use the keyboard.</p>
  <aside><b>Note:</b> For best practice, we do not recommend using both the dot and the bar forms of the Yorùbá letters in the same document.</aside>
  
  
  
  <p class='break'>You can type all of the Yorùbá accents with this keyboard. Here is how:</p>
  <article class='guide'>
    <table class='grid colleft'>
      <col class='keys' />
      <col class='char' />  
      <thead>   
        <tr>
          <th>Key</th>
          <th>Accent</th>
        </tr>
      </thead>
      <tbody>       
        <tr>
          <td><kbd>[</kbd></td>
          <td><samp>`</samp></td>
        </tr>
        <tr>
          <td><kbd>]</kbd></td>
          <td><samp>´</samp></td>
        </tr>
        <tr>
          <td><kbd>{</kbd></td>
          <td><samp>ˆ</samp></td>
        </tr>
        <tr>
          <td><kbd>}</kbd></td>
          <td><samp>ˇ</samp></td>
        </tr>
        <tr>
          <td><kbd>|</kbd></td>
          <td><samp>ˉ</samp></td>
        </tr>       
      </tbody>
    </table>
  </article>
  <p class='clear'>Accents are typed after the base leter. Accents can be added to the letters <samp>a</samp>, <samp>e</samp>, <samp>ẹ</samp> or <samp>e̩</samp>, <samp>i</samp>, <samp>m</samp>, <samp>n</samp>, <samp>o</samp>, <samp>ọ</samp> or <samp>o̩</samp>, and <samp>u</samp>.</p>
  <p class='example'><b>Example:</b> type <kbd>a</kbd><kbd>[</kbd> to get <samp>à</samp>.</p>
  <p class='example'><b>Example:</b> type <kbd>M</kbd><kbd>|</kbd> to get <samp>M̄</samp>.</p>  
  <p>To get the standard output for any key instead of Yorùbá, type the <kbd>`</kbd> first. This is shown as a <samp class='LTN'>★</samp> on the On Screen Keyboard.</p>
  <p class='example'><b>Example:</b> type <kbd>`</kbd><kbd>Q</kbd> to get <samp>Q</samp> (instead of <samp>GB</samp>).</p>
  <p class='example'><b>Example:</b> type <kbd>`</kbd><kbd>{</kbd> to get <samp>{</samp> (instead of <samp>ˆ</samp>).</p>
  <p class='example'><b>Example:</b> type <kbd>`</kbd><kbd>v</kbd> to get <samp>v</samp> (instead of <samp>ẹ</samp> or <samp>e̩</samp>).</p>
  <h4>Fonts</h4>
  <p>This is a Unicode keyboard and works with any Unicode font which has support for Yorùbá. The <b>Gentium Plus</b> font family supports Yorùbá and is installed with the keyboard. To find other fonts on your computer which support this keyboard, use the Keyman Desktop Font Helper.</p>
  <h4>On Screen Keyboard</h4>
  <p>This keyboard includes an On Screen Keyboard view for easy reference. The On Screen Keyboard displays best on a QWERTY US layout.</p>  
  </section>
  <section id='layout' class='break'>
  <h2>Keyboard Layout</h2>
  <article id='unshifted'>
    <h3 style="clear:left">Unshifted</h3>
    <div class="key plain K_BKQUOTE">
      <kbd>`</kbd>
      <samp class='LTN'>★</samp>
    </div>
    <div class="key plain K_1">
      <kbd>1</kbd>
      <samp>1</samp>
    </div>
    <div class="key plain K_2">
      <kbd>2</kbd>
      <samp>2</samp>
    </div>
    <div class="key plain K_3">
      <kbd>3</kbd>
      <samp>3</samp>
    </div>
    <div class="key plain K_4">
      <kbd>4</kbd>
      <samp>4</samp>
    </div>
    <div class="key plain K_5">
      <kbd>5</kbd>
      <samp>5</samp>
    </div>
    <div class="key plain K_6">
      <kbd>6</kbd>
      <samp>6</samp>
    </div>
    <div class="key plain K_7">
      <kbd>7</kbd>
      <samp>7</samp>
    </div>
    <div class="key plain K_8">
      <kbd>8</kbd>
      <samp>8</samp>
    </div>
    <div class="key plain K_9">
      <kbd>9</kbd>
      <samp>9</samp>
    </div>
    <div class="key plain K_0">
      <kbd>0</kbd>
      <samp>0</samp>
    </div>
    <div class="key plain K_HYPHEN">
      <kbd>-</kbd>
      <samp>-</samp>
    </div>
    <div class="key plain K_EQUAL">
      <kbd>=</kbd>
      <samp>=</samp>
    </div>
    <div class="key special K_BKSP">
      <kbd>Backspace</kbd>
    </div>
    <br style="clear: left">
    <div class="key special K_TAB">
      <kbd>Tab</kbd>
    </div>
    <div class="key plain K_Q">
      <kbd>q</kbd>
      <samp>gb</samp>
    </div>
    <div class="key plain K_W">
      <kbd>w</kbd>
      <samp>w</samp>
    </div>
    <div class="key plain K_E">
      <kbd>e</kbd>
      <samp>e</samp>
    </div>
    <div class="key plain K_R">
      <kbd>r</kbd>
      <samp>r</samp>
    </div>
    <div class="key plain K_T">
      <kbd>t</kbd>
      <samp>t</samp>
    </div>
    <div class="key plain K_Y">
      <kbd>y</kbd>
      <samp>y</samp>
    </div>
    <div class="key plain K_U">
      <kbd>u</kbd>
      <samp>u</samp>
    </div>
    <div class="key plain K_I">
      <kbd>i</kbd>
      <samp>i</samp>
    </div>
    <div class="key plain K_O">
      <kbd>o</kbd>
      <samp>o</samp>
    </div>
    <div class="key plain K_P">
      <kbd>p</kbd>
      <samp>p</samp>
    </div>
    <div class="key plain K_LBRKT">
      <kbd>[</kbd>
      <samp>`</samp>
    </div>
    <div class="key plain K_RBRKT">
      <kbd>]</kbd>
      <samp>´</samp>
    </div>
    <div class="key plain K_BKSLASH">
      <kbd>\</kbd>
      <samp>\</samp>
    </div>
    <br style="clear: left">
    <div class="key special K_CAPS">
      <kbd>Caps Lock</kbd>
    </div>
    <div class="key plain K_A">
      <kbd>a</kbd>
      <samp>a</samp>
    </div>
    <div class="key plain K_S">
      <kbd>s</kbd>
      <samp>s</samp>
    </div>
    <div class="key plain K_D">
      <kbd>d</kbd>
      <samp>d</samp>
    </div>
    <div class="key plain K_F">
      <kbd>f</kbd>
      <samp>f</samp>
    </div>
    <div class="key plain K_G">
      <kbd>g</kbd>
      <samp>g</samp>
    </div>
    <div class="key plain K_H">
      <kbd>h</kbd>
      <samp>h</samp>
    </div>
    <div class="key plain K_J">
      <kbd>j</kbd>
      <samp>j</samp>
    </div>
    <div class="key plain K_K">
      <kbd>k</kbd>
      <samp>k</samp>
    </div>
    <div class="key plain K_L">
      <kbd>l</kbd>
      <samp>l</samp>
    </div>
    <div class="key plain K_COLON">
      <kbd>;</kbd>
      <samp>;</samp>
    </div>
    <div class="key plain K_QUOTE">
      <kbd>'</kbd>
      <samp>'</samp>
    </div>
    <div class="key special K_ENTER">
      <kbd>Enter</kbd>
    </div>
    <br style="clear: left">
    <div class="key special K_SHIFTL">
      <kbd>Shift</kbd>
    </div>
    <div class="key plain K_oE2">
      <kbd>\</kbd>
    </div>
    <div class="key plain K_Z">
      <kbd>z</kbd>
      <samp>ṣ|s̩</samp>
    </div>
    <div class="key plain K_X">
      <kbd>x</kbd>
      <samp>ọ|o̩</samp>
    </div>
    <div class="key plain K_C">
      <kbd>c</kbd>
      <samp>c</samp>
    </div>
    <div class="key plain K_V">
      <kbd>v</kbd>
      <samp>ẹ|e̩</samp>
    </div>
    <div class="key plain K_B">
      <kbd>b</kbd>
      <samp>b</samp>
    </div>
    <div class="key plain K_N">
      <kbd>n</kbd>
      <samp>n</samp>
    </div>
    <div class="key plain K_M">
      <kbd>m</kbd>
      <samp>m</samp>
    </div>
    <div class="key plain K_COMMA">
      <kbd>,</kbd>
      <samp>,</samp>
    </div>
    <div class="key plain K_PERIOD">
      <kbd>.</kbd>
      <samp>.</samp>
    </div>
    <div class="key plain K_SLASH">
      <kbd>/</kbd>
      <samp>/</samp>
    </div>
    <div class="key special K_SHIFTR">
      <kbd>Shift</kbd>
    </div>
    <br style="clear: left">
    <div class="key special K_CTRLL">
      <kbd>Ctrl</kbd>
    </div>
    <div class="key special K_ALTL">
      <kbd>Alt</kbd>
    </div>
    <div class="key plain K_SPACE">
      <kbd> </kbd>
      <samp></samp>
    </div>
    <div class="key special K_ALTR">
      <kbd>Alt</kbd>
    </div>
    <div class="key special K_CTRLR">
      <kbd>Ctrl</kbd>
    </div>
  </article>
  <article id='shift'>
    <h3 style="clear:left">Shift</h3>
    <div class="key plain K_BKQUOTE">
      <kbd>~</kbd>
      <samp>~</samp>
    </div>
    <div class="key plain K_1">
      <kbd>!</kbd>
      <samp>!</samp>
    </div>
    <div class="key plain K_2">
      <kbd>@</kbd>
      <samp>@</samp>
    </div>
    <div class="key plain K_3">
      <kbd>#</kbd>
      <samp>#</samp>
    </div>
    <div class="key plain K_4">
      <kbd>$</kbd>
      <samp>$</samp>
    </div>
    <div class="key plain K_5">
      <kbd>%</kbd>
      <samp>%</samp>
    </div>
    <div class="key plain K_6">
      <kbd>^</kbd>
      <samp>₦</samp>
    </div>
    <div class="key plain K_7">
      <kbd>&amp;</kbd>
      <samp>&amp;</samp>
    </div>
    <div class="key plain K_8">
      <kbd>*</kbd>
      <samp>*</samp>
    </div>
    <div class="key plain K_9">
      <kbd>(</kbd>
      <samp>(</samp>
    </div>
    <div class="key plain K_0">
      <kbd>)</kbd>
      <samp>)</samp>
    </div>
    <div class="key plain K_HYPHEN">
      <kbd>_</kbd>
      <samp>_</samp>
    </div>
    <div class="key plain K_EQUAL">
      <kbd>+</kbd>
      <samp>+</samp>
    </div>
    <div class="key special K_BKSP">
      <kbd>Backspace</kbd>
    </div>
    <br style="clear: left">
    <div class="key special K_TAB">
      <kbd>Tab</kbd>
    </div>
    <div class="key plain K_Q">
      <kbd>Q</kbd>
      <samp>GB</samp>
    </div>
    <div class="key plain K_W">
      <kbd>W</kbd>
      <samp>W</samp>
    </div>
    <div class="key plain K_E">
      <kbd>E</kbd>
      <samp>E</samp>
    </div>
    <div class="key plain K_R">
      <kbd>R</kbd>
      <samp>R</samp>
    </div>
    <div class="key plain K_T">
      <kbd>T</kbd>
      <samp>T</samp>
    </div>
    <div class="key plain K_Y">
      <kbd>Y</kbd>
      <samp>Y</samp>
    </div>
    <div class="key plain K_U">
      <kbd>U</kbd>
      <samp>U</samp>
    </div>
    <div class="key plain K_I">
      <kbd>I</kbd>
      <samp>I</samp>
    </div>
    <div class="key plain K_O">
      <kbd>O</kbd>
      <samp>O</samp>
    </div>
    <div class="key plain K_P">
      <kbd>P</kbd>
      <samp>P</samp>
    </div>
    <div class="key plain K_LBRKT">
      <kbd>{</kbd>
      <samp>ˆ</samp>
    </div>
    <div class="key plain K_RBRKT">
      <kbd>}</kbd>
      <samp>ˇ</samp>
    </div>
    <div class="key plain K_BKSLASH">
      <kbd>|</kbd>
      <samp>ˉ</samp>
    </div>
    <br style="clear: left">
    <div class="key special K_CAPS">
      <kbd>Caps Lock</kbd>
    </div>
    <div class="key plain K_A">
      <kbd>A</kbd>
      <samp>A</samp>
    </div>
    <div class="key plain K_S">
      <kbd>S</kbd>
      <samp>S</samp>
    </div>
    <div class="key plain K_D">
      <kbd>D</kbd>
      <samp>D</samp>
    </div>
    <div class="key plain K_F">
      <kbd>F</kbd>
      <samp>F</samp>
    </div>
    <div class="key plain K_G">
      <kbd>G</kbd>
      <samp>G</samp>
    </div>
    <div class="key plain K_H">
      <kbd>H</kbd>
      <samp>H</samp>
    </div>
    <div class="key plain K_J">
      <kbd>J</kbd>
      <samp>J</samp>
    </div>
    <div class="key plain K_K">
      <kbd>K</kbd>
      <samp>K</samp>
    </div>
    <div class="key plain K_L">
      <kbd>L</kbd>
      <samp>L</samp>
    </div>
    <div class="key plain K_COLON">
      <kbd>:</kbd>
      <samp>:</samp>
    </div>
    <div class="key plain K_QUOTE">
      <kbd>"</kbd>
      <samp>"</samp>
    </div>
    <div class="key special K_ENTER">
      <kbd>Enter</kbd>
    </div>
    <br style="clear: left">
    <div class="key special K_SHIFTL">
      <kbd>Shift</kbd>
    </div>
    <div class="key plain K_oE2">
      <kbd>\</kbd>
    </div>
    <div class="key plain K_Z">
      <kbd>Z</kbd>
      <samp>Ṣ|S̩</samp>
    </div>
    <div class="key plain K_X">
      <kbd>X</kbd>
      <samp>Ọ|O̩</samp>
    </div>
    <div class="key plain K_C">
      <kbd>C</kbd>
      <samp>C</samp>
    </div>
    <div class="key plain K_V">
      <kbd>V</kbd>
      <samp>Ẹ|E̩</samp>
    </div>
    <div class="key plain K_B">
      <kbd>B</kbd>
      <samp>B</samp>
    </div>
    <div class="key plain K_N">
      <kbd>N</kbd>
      <samp>N</samp>
    </div>
    <div class="key plain K_M">
      <kbd>M</kbd>
      <samp>M</samp>
    </div>
    <div class="key plain K_COMMA">
      <kbd>&lt;</kbd>
      <samp>&lt;</samp>
    </div>
    <div class="key plain K_PERIOD">
      <kbd>&gt;</kbd>
      <samp>&gt;</samp>
    </div>
    <div class="key plain K_SLASH">
      <kbd>?</kbd>
      <samp>?</samp>
    </div>
    <div class="key special K_SHIFTR">
      <kbd>Shift</kbd>
    </div>
    <br style="clear: left">
    <div class="key special K_CTRLL">
      <kbd>Ctrl</kbd>
    </div>
    <div class="key special K_ALTL">
      <kbd>Alt</kbd>
    </div>
    <div class="key plain K_SPACE">
      <kbd> </kbd>
      <samp></samp>
    </div>
    <div class="key special K_ALTR">
      <kbd>Alt</kbd>
    </div>
    <div class="key special K_CTRLR">
      <kbd>Ctrl</kbd>
    </div>
  </article>
</section>


