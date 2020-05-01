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
  $pagename = 'Yorùbá 8 Keyboard Help';
  $pagetitle = 'Yorùbá 8 Keyboard Help';
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
  <p>This is a Unicode keyboard and works with any Unicode font which has support for Yorùbá. </p>
  <h4>On Screen Keyboard</h4>
  <p>This keyboard includes an On Screen Keyboard view for easy reference. The On Screen Keyboard displays best on a QWERTY US layout.</p>  
  </section>
<h2>Desktop Keyboard Layout</h2>
	<h3>Default (unshifted)</h3>
	<p><a href="LayoutU_.png"><img class="keyboard" src="LayoutU_.png" alt="Default (unshifted) state" /></a></p>
	<h3>Shift</h3>
	<p><a href="LayoutU_S.png"><img class="keyboard" src="LayoutU_S.png" alt="Shift state" /></a></p>



