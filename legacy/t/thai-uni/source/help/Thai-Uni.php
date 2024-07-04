<?php /*
  Name:             keyboard_hieroglyphic
  Copyright:        Copyright (C) 2012 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      May 2012

  Modified Date:    01 Jun 2012
  Authors:          mcdurdin, pbaehr
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          May 2012 - mcdurdin - Generate documentation from Keyman Desktop documentation
*/
  $pagename = 'Thai Unicode Keyboard Help';
  $pagetitle = 'Thai Unicode Keyboard Help';
  $style = <<<END
/* 
===========
==General==
===========
*/
body {
	margin: 30px; 
	font-family: 'Arial Unicode MS', Helvetica, sans-serif; 
	font-size: 11pt;color: #2D2C2C;}
img {border: none; }

p {font-size: 11pt; margin:5px 0px 0px;}
.example {margin-left:40px}

section {clear:left;}

article{clear:left; margin-bottom:60px;}

/* Headers */
h1, h2, h3{color: #AD4A28; font-weight: bold;clear:left;}

h1 {font-size: 22pt; margin: 22px 0px 11px; padding:0px;}
h2 {font-size: 16pt; margin: 14px 0px 7px; padding:0px;}
h3 {font-size: 12pt; margin: 12px 0px 6px; padding:0px;}
h4 {font-size: 11pt; margin: 10px 0px 5px; padding:0px;}

/* Links */
a:link {color: #AD4A28; text-decoration: none;}
a:visited {color: #AD4A28;text-decoration: none;}
a:hover {color: #AD4A28;text-decoration: underline;}

/* Language + Keyboard */
samp{font-family: Tahoma; color:blue;}
kbd {color:black;}

/* Printing */
.break {page-break-before:always !important;}	

/*
===========
==Welcome==
===========
*/
/* Tables */
table {border-collapse:collapse !important; margin:10px 0px 20px 40px;}
.grid col {background-color:#ffffff;}
.grid td, .grid th {padding:2px 5px;border-bottom:1px solid #ddd;}
.grid tr {text-align:center; font-weight:normal; height:55px;}
.grid thead tr,.grid .headrow{height:30px;}
.grid .headrow {font-weight:bold; color:#AD4A28; background-color:#eee; text-align:left;}
col.char   {width:85px;}
col.keys   {width:75px;}
col.point {width:85px;}
col.name   {width:165px;}
td samp {font-size:24pt}
table kbd {color:black; font:12pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px;  padding:2px 4px; vertical-align:middle; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}

/* Columns + Psuedo-Columns (Floats)*/
.columns  {width:375px; -webkit-column-count: 2; -webkit-column-gap: 10px; -moz-column-count: 2; -moz-column-gap: 10px; column-count: 2; column-gap: 10px;}
.colleft, .colright {position:relative; float:left;}
.colright {padding-left:40px;}

/* Language Examples */
p samp {font-size:22pt; line-height:.8em;}
p kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px; padding:0px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}

/* OSK Keys */
        .key { 
		float: left;		
        display:block; 		
        position: relative;	
        overflow: hidden;		
        height: 35px;
        margin: 2px 0px 0px 2px;
        border: solid 1px grey;
		-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;     
		}
        .plain {
        background-repeat: no-repeat;
        width: 34px;
        }	
		.empty {
		background:#eee;
		}
		.K_BKQUOTE {
		width:34px;
		}
        .K_BKSP {
		width: 60px;
		}
		.K_TAB {
		width: 52px;		
		}
        .K_BKSLASH {
        width: 42px; 
        }
		.K_CAPS {
		width: 62px;
		}
		.K_ENTER {
        width: 70px; 
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
          width: 85px;
        }                
        .K_SHIFTL-EU {
          width: 47px;
        }    
        #layout .K_oE2 {
          display:none;        
        }     
		.K_SHIFTR {
          width: 85px;
        }  
		.K_CTRLL {
		  width:60px;
		  margin-right: 40px; 
        } 		
		.K_ALTL {
          width: 40px;
        }   
        .K_SPACE , .K_SPACE samp{
          width: 224px;  
        } 
		.K_ALTR {
          width: 40px;
        } 		
		.K_CTRLR {
          width: 60px;
		  margin-left: 76px;
		}

        
        .special {
          background-repeat: no-repeat;
		  background: #c0c0c0;
        }
        
        .key kbd {
          font: bold 7pt Arial; 
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
		  font-size:24px;
          position: absolute; 
          display: block;
          right: 3px;
          bottom: 1px;
        }	

		.LTN {
		  font-family:Arial !important;
		  font-size:12px !important;
		  color: #AD4A28 !important;
		  right:2px !important;
		  bottom:2px !important; 
		  font-variant:small-caps;
		}
END;
  require_once('header.php');
?>
  <p>Created by Samuel	A. Mattix</p>
  <section id='overview'>
	<h2>Overview</h2>
	<p>Thai-Unicode is a Thai script Unicode keyboard based on the standard Thai Kedmanee layout. This keyboard is fully compliant with the <a href='http://unicode.org/standard/standard.html'>Unicode Standard</a>.</p>
	<h4>Basic Function</h4>	
	<p>This keyboard follows the standard Thai Kedmanee layout. It also allows efficient input of uncommon Thai symbols. Characters are reordered while you type to ensure a consistent underlying sequence of diacritic vowels and tones, making tasks like search and replace much easier. Additional rules prevent you from typing many illegal vowel and tone sequences. This keyboard has also been optimised to take advantage of context-sensitive multiple keyboard switching capabilities in Toolbox (a flat database program) available from <a href='http://www.sil.org/computing/toolbox/index.htm'>SIL</a>.</p>
	<h4>Fonts</h4>
	<p>This is a Unicode keyboard and works with any Unicode font which has support for Thai. The standard Windows fonts <b>Tahoma</b> and <b>Arial Unicode MS</b> include support for this keyboard. To see which fonts on your computer support this keyboard, use the Keyman <a href='http://help.keymandesktop.com/docs/start_font.php'>Font Helper</a>.</p>
	<h4>Keyboard Hotkey</h4>
	<p>This keyboard comes preassigned with a hotkey. You can use the hotkey <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>T</kbd> to start the keyboard at any time. To remove or change the hotkey, visit the Hotkeys tab of Keyman Configuration, available from the Keyman menu.</p>	
	<h4>On Screen Keyboard</h4>
	<p>This keyboard includes an On Screen Keyboard view for easy reference. The On Screen Keyboard works best when associated with a QWERTY US layout.</p>	
  </section>
  <section id='layout' class='break'>
	<h2>Keyboard Layout</h2>
	<article id='unshifted'>
		<h3 style="clear:left">Unshifted</h3>
		<div class="key plain K_BKQUOTE">
			<kbd>`</kbd>
			<samp>_</samp>
		</div>
		<div class="key plain K_1">
			<kbd>1</kbd>
			<samp>ๅ</samp>
		</div>
		<div class="key plain K_2">
			<kbd>2</kbd>
			<samp>/</samp>
		</div>
		<div class="key plain K_3">
			<kbd>3</kbd>
			<samp>-</samp>
		</div>
		<div class="key plain K_4">
			<kbd>4</kbd>
			<samp>ภ</samp>
		</div>
		<div class="key plain K_5">
			<kbd>5</kbd>
			<samp>ถ</samp>
		</div>
		<div class="key plain K_6">
			<kbd>6</kbd>
			<samp>ุ</samp>
		</div>
		<div class="key plain K_7">
			<kbd>7</kbd>
			<samp>ึ</samp>
		</div>
		<div class="key plain K_8">
			<kbd>8</kbd>
			<samp>ค</samp>
		</div>
		<div class="key plain K_9">
			<kbd>9</kbd>
			<samp>ต</samp>
		</div>
		<div class="key plain K_0">
			<kbd>0</kbd>
			<samp>จ</samp>
		</div>
		<div class="key plain K_HYPHEN">
			<kbd>-</kbd>
			<samp>ข</samp>
		</div>
		<div class="key plain K_EQUAL">
			<kbd>=</kbd>
			<samp>ช</samp>
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
			<samp>ๆ</samp>
		</div>
		<div class="key plain K_W">
			<kbd>w</kbd>
			<samp>ไ</samp>
		</div>
		<div class="key plain K_E">
			<kbd>e</kbd>
			<samp>ำ</samp>
		</div>
		<div class="key plain K_R">
			<kbd>r</kbd>
			<samp>พ</samp>
		</div>
		<div class="key plain K_T">
			<kbd>t</kbd>
			<samp>ะ</samp>
		</div>
		<div class="key plain K_Y">
			<kbd>y</kbd>
			<samp>ั</samp>
		</div>
		<div class="key plain K_U">
			<kbd>u</kbd>
			<samp>ี</samp>
		</div>
		<div class="key plain K_I">
			<kbd>i</kbd>
			<samp>ร</samp>
		</div>
		<div class="key plain K_O">
			<kbd>o</kbd>
			<samp>น</samp>
		</div>
		<div class="key plain K_P">
			<kbd>p</kbd>
			<samp>ย</samp>
		</div>
		<div class="key plain K_LBRKT">
			<kbd>[</kbd>
			<samp>บ</samp>
		</div>
		<div class="key plain K_RBRKT">
			<kbd>]</kbd>
			<samp>ล</samp>
		</div>
		<div class="key plain K_BKSLASH">
			<kbd>\</kbd>
			<samp>ฃ</samp>
		</div>
		<br style="clear: left">
		<div class="key special K_CAPS">
			<kbd>Caps Lock</kbd>
		</div>
		<div class="key plain K_A">
			<kbd>a</kbd>
			<samp>ฟ</samp>
		</div>
		<div class="key plain K_S">
			<kbd>s</kbd>
			<samp>ห</samp>
		</div>
		<div class="key plain K_D">
			<kbd>d</kbd>
			<samp>ก</samp>
		</div>
		<div class="key plain K_F">
			<kbd>f</kbd>
			<samp>ด</samp>
		</div>
		<div class="key plain K_G">
			<kbd>g</kbd>
			<samp>เ</samp>
		</div>
		<div class="key plain K_H">
			<kbd>h</kbd>
			<samp>้</samp>
		</div>
		<div class="key plain K_J">
			<kbd>j</kbd>
			<samp>่</samp>
		</div>
		<div class="key plain K_K">
			<kbd>k</kbd>
			<samp>า</samp>
		</div>
		<div class="key plain K_L">
			<kbd>l</kbd>
			<samp>ส</samp>
		</div>
		<div class="key plain K_COLON">
			<kbd>;</kbd>
			<samp>ว</samp>
		</div>
		<div class="key plain K_QUOTE">
			<kbd>'</kbd>
			<samp>ง</samp>
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
			<samp>ผ</samp>
		</div>
		<div class="key plain K_X">
			<kbd>x</kbd>
			<samp>ป</samp>
		</div>
		<div class="key plain K_C">
			<kbd>c</kbd>
			<samp>แ</samp>
		</div>
		<div class="key plain K_V">
			<kbd>v</kbd>
			<samp>อ</samp>
		</div>
		<div class="key plain K_B">
			<kbd>b</kbd>
			<samp>ิ</samp>
		</div>
		<div class="key plain K_N">
			<kbd>n</kbd>
			<samp>ื</samp>
		</div>
		<div class="key plain K_M">
			<kbd>m</kbd>
			<samp>ท</samp>
		</div>
		<div class="key plain K_COMMA">
			<kbd>,</kbd>
			<samp>ม</samp>
		</div>
		<div class="key plain K_PERIOD">
			<kbd>.</kbd>
			<samp>ใ</samp>
		</div>
		<div class="key plain K_SLASH">
			<kbd>/</kbd>
			<samp>ฝ</samp>
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
			<samp> </samp>
		</div>
		<div class="key special K_ALTR">
			<kbd>Alt</kbd>
		</div>
		<div class="key special K_CTRLR">
			<kbd>Ctrl</kbd>
		</div>
	</article>
	<article>
		<h3 style="clear:left">Shift</h3>
		<div class="key plain K_BKQUOTE">
			<kbd>~</kbd>
			<samp>%</samp>
		</div>
		<div class="key plain K_1">
			<kbd>!</kbd>
			<samp>+</samp>
		</div>
		<div class="key plain K_2">
			<kbd>@</kbd>
			<samp>๑</samp>
		</div>
		<div class="key plain K_3">
			<kbd>#</kbd>
			<samp>๒</samp>
		</div>
		<div class="key plain K_4">
			<kbd>$</kbd>
			<samp>๓</samp>
		</div>
		<div class="key plain K_5">
			<kbd>%</kbd>
			<samp>๔</samp>
		</div>
		<div class="key plain K_6">
			<kbd>^</kbd>
			<samp>ู</samp>
		</div>
		<div class="key plain K_7">
			<kbd>&amp;</kbd>
			<samp>฿</samp>
		</div>
		<div class="key plain K_8">
			<kbd>*</kbd>
			<samp>๕</samp>
		</div>
		<div class="key plain K_9">
			<kbd>(</kbd>
			<samp>๖</samp>
		</div>
		<div class="key plain K_0">
			<kbd>)</kbd>
			<samp>๗</samp>
		</div>
		<div class="key plain K_HYPHEN">
			<kbd>_</kbd>
			<samp>๘</samp>
		</div>
		<div class="key plain K_EQUAL">
			<kbd>+</kbd>
			<samp>๙</samp>
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
			<samp>๐</samp>
		</div>
		<div class="key plain K_W">
			<kbd>W</kbd>
			<samp>"</samp>
		</div>
		<div class="key plain K_E">
			<kbd>E</kbd>
			<samp>ฏ</samp>
		</div>
		<div class="key plain K_R">
			<kbd>R</kbd>
			<samp>ฑ</samp>
		</div>
		<div class="key plain K_T">
			<kbd>T</kbd>
			<samp>ธ</samp>
		</div>
		<div class="key plain K_Y">
			<kbd>Y</kbd>
			<samp>ํ</samp>
		</div>
		<div class="key plain K_U">
			<kbd>U</kbd>
			<samp>๊</samp>
		</div>
		<div class="key plain K_I">
			<kbd>I</kbd>
			<samp>ณ</samp>
		</div>
		<div class="key plain K_O">
			<kbd>O</kbd>
			<samp>ฯ</samp>
		</div>
		<div class="key plain K_P">
			<kbd>P</kbd>
			<samp>ญ</samp>
		</div>
		<div class="key plain K_LBRKT">
			<kbd>{</kbd>
			<samp>ฐ</samp>
		</div>
		<div class="key plain K_RBRKT">
			<kbd>}</kbd>
			<samp>,</samp>
		</div>
		<div class="key plain K_BKSLASH">
			<kbd>|</kbd>
			<samp>ฅ</samp>
		</div>
		<br style="clear: left">
		<div class="key special K_CAPS">
			<kbd>Caps Lock</kbd>
		</div>
		<div class="key plain K_A">
			<kbd>A</kbd>
			<samp>ฤ</samp>
		</div>
		<div class="key plain K_S">
			<kbd>S</kbd>
			<samp>ฆ</samp>
		</div>
		<div class="key plain K_D">
			<kbd>D</kbd>
			<samp>ฎ</samp>
		</div>
		<div class="key plain K_F">
			<kbd>F</kbd>
			<samp>โ</samp>
		</div>
		<div class="key plain K_G">
			<kbd>G</kbd>
			<samp>ฌ</samp>
		</div>
		<div class="key plain K_H">
			<kbd>H</kbd>
			<samp>็</samp>
		</div>
		<div class="key plain K_J">
			<kbd>J</kbd>
			<samp>๋</samp>
		</div>
		<div class="key plain K_K">
			<kbd>K</kbd>
			<samp>ษ</samp>
		</div>
		<div class="key plain K_L">
			<kbd>L</kbd>
			<samp>ศ</samp>
		</div>
		<div class="key plain K_COLON">
			<kbd>:</kbd>
			<samp>ซ</samp>
		</div>
		<div class="key plain K_QUOTE">
			<kbd>"</kbd>
			<samp>.</samp>
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
			<samp>(</samp>
		</div>
		<div class="key plain K_X">
			<kbd>X</kbd>
			<samp>)</samp>
		</div>
		<div class="key plain K_C">
			<kbd>C</kbd>
			<samp>ฉ</samp>
		</div>
		<div class="key plain K_V">
			<kbd>V</kbd>
			<samp>ฮ</samp>
		</div>
		<div class="key plain K_B">
			<kbd>B</kbd>
			<samp>ฺ</samp>
		</div>
		<div class="key plain K_N">
			<kbd>N</kbd>
			<samp>์</samp>
		</div>
		<div class="key plain K_M">
			<kbd>M</kbd>
			<samp>?</samp>
		</div>
		<div class="key plain K_COMMA">
			<kbd>&lt;</kbd>
			<samp>ฒ</samp>
		</div>
		<div class="key plain K_PERIOD">
			<kbd>&gt;</kbd>
			<samp>ฬ</samp>
		</div>
		<div class="key plain K_SLASH">
			<kbd>?</kbd>
			<samp>ฦ</samp>
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
			<samp> </samp>
		</div>
		<div class="key special K_ALTR">
			<kbd>Alt</kbd>
		</div>
		<div class="key special K_CTRLR">
			<kbd>Ctrl</kbd>
		</div>
	</article>		
  </section>
  <span style='clear:both'></span>
  <section id='details'>
	<h2>Keyboard Details</h2>
	<h3>Shortcuts for Special Symbols and Codes</h3>
	<p><b>Paiyanyai</b> — type characters <samp>ฯ</samp><samp>ฯ</samp> (keys <kbd>O</kbd><kbd>O</kbd>) to get <samp>ฯลฯ</samp>.</p>
	<p><b>Yamakkan</b> — type characters <samp>_</samp><samp>-</samp> (keys <kbd>`</kbd><kbd>3</kbd>) to get <samp>๎</samp>.</p>
	<p><b>Fongman</b> — type characters <samp>_</samp><samp>.</samp> (keys <kbd>`</kbd><kbd>"</kbd>) to get <samp>๏</samp>.</p>
	<p><b>Angkhankhu</b> — type characters <samp>_</samp><samp>ฯ</samp> (keys <kbd>`</kbd><kbd>O</kbd>) to get <samp>๚</samp>.</p>
	<p><b>Khomut</b> — type characters <samp>_</samp><samp>ฯ</samp><samp>ฯ</samp> (keys <kbd>`</kbd><kbd>O</kbd><kbd>O</kbd>) to get <samp>๛</samp>.</p>
	<p><b>Bullet</b> — type characters <samp>_</samp><samp>๑</samp> (keys <kbd>`</kbd><kbd>@</kbd>) to get <samp>•</samp>.</p>
	<p><b>Zero width space</b> — type character <samp>_</samp>+<kbd>Space</kbd> (keys <kbd>`</kbd><kbd>Space</kbd>) to get zero width space.</p>
  </section>
  <section id='additional' class='break'>
	<h2>Additional Information</h2>  
	<p>Version 1.1 for Keyman Desktop 7.0. Released 30 January 2008. Public Domain.</p>
	<p>Version 1.2 for Keyman Desktop 8.0. Released 24 May 2012 — Minor Revisions to On Screen Keyboard. Revised help.</p>
	
	<p>Keyboard Home Page: <a href="http://lao-thai.keymankeyboards.com/">http://lao-thai.keymankeyboards.com/</a></p>
  </section>


