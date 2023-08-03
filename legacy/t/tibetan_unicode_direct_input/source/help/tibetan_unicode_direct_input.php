<?php /*
  Name:             keyboard_tibetan_direct_unicode
  Copyright:        Keyboard ©2003 Peter Hauer
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

  $pagename = 'Tibetan Unicode Direct Input (deprecated) Keyboard Help';
  $pagetitle = 'Tibetan Unicode Direct Input (deprecated) Keyboard Help'; 
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

p, ul {font-size: 10pt; margin:5px 0px 0px; line-height:25px;}
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
samp{font-family: 'Tibetan Machine Uni', 'Microsoft Himalaya'; color:blue;}
#cyr samp {font-family:'Times New Roman' !important;}
kbd {color:black;}

/* Printing */
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
p samp {font-size:22pt;}
p kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px; padding:0px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}

/* OSK Keys */
        .key { 
            float: left;
            display: block; 
            position: relative;
            overflow: hidden;
            height: 45px;
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
		  font-size:26px;
          position: absolute; 
          display: block;
          right: 8px;
          bottom: -10px;
        }	
		#cyr .key samp {
		  bottom: 2px !important;
		}

		.LTN {
		  font-family:Arial !important;
		  font-size:11px !important;
		  color: #AD4A28 !important;
		  font-variant:small-caps;
		  padding:16px 0px 0px 1px;
		  line-height:1em;
		}

		.K_SPACE samp,
		.K_SPACE .LTN {
 		 text-align:center;
     	}

END;

  require_once('header.php');


?>

   <p>Keyboard &#169; 2003 Linguasoft</p>
   <section id='overview'>
	<h2>Overview</h2>
	<p>Tibetan Unicode Direct Input is designed to type all Tibetan characters and stacks directly, without any <kbd>Alt</kbd> or transliteration+<kbd>Space</kbd> combinations. The keyboard types in a phonetic style based on the English (QWERTY) layout.</p> 
	<h4>Basic Function</h4>
	<p>You can get many of the Tibetan letters on this keyboard by typing the closest English equivalent. For example, type <kbd>n</kbd> to get <samp>ན</samp>. Keys without a direct Tibetan equivalent in Enlish get the remaining Tibetan letters. For example, type <kbd>.</kbd> to get <samp>ཉ</samp>. To create a long stack, use <kbd>Shift</kbd> + the letter(s) you would like to subjoin. For example, type <kbd>s</kbd><kbd>K</kbd><kbd>Y</kbd> to get <samp>སྐྱ</samp>.</p>	
	<p>This keyboard also features special menus for Tibetan symbols.</p>
	<h4>Latin + Cyrillic</h4>	
	<p>You can type Latin and Cyrillic letters while using this keyboard. To use the Latin mode and get standard Latin output for any keystroke instead of Tibetan, type <kbd>Esc</kbd> first. Type <kbd>Esc</kbd> again to return to Tibetan. To use the Cyrillic mode, type <kbd>Esc</kbd><kbd>Esc</kbd>. Type <kbd>Esc</kbd> again to return to Tibetan.</p>	
	<h4>Fonts</h4>
	<p>This is a Unicode keyboard and works with any Unicode font which has support for Tibetan script. The <b>Tibetan Machine Uni</b> font supports Tibetan script and is installed with the keyboard. To find other fonts on your computer which support this keyboard, use the Keyman Desktop Font Helper.</p>
  </section>
  <section id='layout' class='break'>
    <h3>Keyboard Layout</h3>
    <div id='osk'>
    </div>
  </section>
  <section id='details'  class='break'>
	<h2>Keyboard Details</h2>
	<p>This keyboard can be used to type:</p>
	<ul>
		<li><a href='#di'>Tibetan using Direct Input</a></li>
		<li><a href='#sym'>Extended Tibetan symbols using special menus</a></li>
		<li><a href='#lat'>Latin</a></li>
		<li><a href='#cyr'>Cyrillic</a></li>		
	</ul>
	<section id='di'>
		<h3>Typing Tibetan Using Direct Input</h3>
		<section id='letters'>
			<h4>Letters, Diacritics + Stacks</h4>
			<p>This keyboard uses a phonetic style system based on the English (QWERTY) layout. Where a Tibetan letter has an equivalent letter in English, it's as easy as typing the English key to get the Tibetan letter:</p>
			<p class='example'><b>Example:</b> type <kbd>a</kbd> to get <samp>ཨ</samp>.</p>
			<p class='example'><b>Example:</b> type <kbd>m</kbd> to get <samp>མ</samp>.</p>
			<p class='example'><b>Example:</b> type <kbd>z</kbd> to get <samp>ཟ</samp>.</p>
			<p>Vowel diacritics are added in the same way:</p>
			<p class='example'><b>Example:</b> type <kbd>i</kbd> to get <samp>ི</samp>.</p>
			<p class='example'><b>Example:</b> type <kbd>o</kbd> to get <samp>ོ</samp>.</p>	
			<p>Some letters have no equivalent between Tibetan and English. These are given the remaining keys:</p>
			<p class='example'><b>Example:</b> type <kbd>[</kbd> to get <samp>ཁ</samp>.</p> 
			<p class='example'><b>Example:</b> type <kbd>,</kbd> to get <samp>ང</samp>.</p>
			<p>A few Tibetan and Sanskrit letters are accessed by typing <kbd>*</kbd> after the letter:</p>
			<p class='example'><b>Example:</b> type <kbd>d</kbd> to get <samp>ད</samp>, but type <kbd>d</kbd><kbd>*</kbd> to get <samp>ཌ</samp>.</p> 
			<p class='example'><b>Example:</b> type <kbd>j</kbd> to get <samp>ཇ</samp>, but type <kbd>j</kbd><kbd>*</kbd> to get <samp>ཛ</samp>.</p> 
			<p>To create a long stack with this keyboard, press or hold <kbd>Shift</kbd> and type the letters you would like to subjoin. You must type the subjoined letters before typing your vowel.</p>
			<p class='example'><b>Example:</b> type <kbd>s</kbd><kbd>K</kbd><kbd>Y</kbd><kbd>e</kbd>  to get <samp>སྐྱེ</samp>.</p>
			<p class='example'><b>Example:</b> type <kbd>s</kbd><kbd>K</kbd><kbd>Q</kbd><kbd>*</kbd>  to get <samp>སྐྵ</samp>.</p>
			<p>The following list shows how to type all the basic letters and diacritics in this keyboard:</p>
			<article class='guide'>
				<table class='grid colleft'>
					<col class='keys' />
					<col class='char' />	
					<thead>		
						<tr>
							<th>Keys</th>
							<th>Character</th>
						</tr>
					</thead>
					<tbody>
						<tr class='headrow'>
							<td colspan='2'>A</td>
						</tr>					
						<tr>
							<td><kbd>a</kbd></td>
							<td><samp>ཨ</samp></td>
						</tr>
						<tr>
							<td><kbd>A</kbd></td>
							<td><samp>ྸ</samp></td>
						</tr>						
						<tr>
							<td><kbd>a</kbd><kbd>o</kbd><kbd>~</kbd></td>
							<td><samp>ༀ</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>*</kbd></td>
							<td><samp>༁</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>*</kbd><kbd>*</kbd></td>
							<td><samp>༁ྃ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>B</td>
						</tr>						
						<tr>
							<td><kbd>b</kbd></td>
							<td><samp>བ</samp></td>
						</tr>
						<tr>
							<td><kbd>B</kbd></td>
							<td><samp>ྦ</samp></td>
						</tr>						
						<tr class='headrow'>
							<td colspan='2'>C</td>
						</tr>
						<tr>
							<td><kbd>c</kbd></td>
							<td><samp>ཅ</samp></td>
						</tr>
						
						<tr>
							<td><kbd>C</kbd></td>
							<td><samp>ྕ</samp></td>
						</tr>
						<tr>
							<td><kbd>c</kbd><kbd>*</kbd></td>
							<td><samp>ཙ</samp></td>
						</tr>
						
						<tr>
							<td><kbd>C</kbd><kbd>*</kbd></td>
							<td><samp>ྩ</samp></td>
						</tr>						
						<tr class='headrow'>
							<td colspan='2'>D</td>
						</tr>
						<tr>
							<td><kbd>d</kbd></td>
							<td><samp>ད</samp></td>
						</tr>
						<tr>
							<td><kbd>D</kbd></td>
							<td><samp>ྡ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>*</kbd></td>
							<td><samp>ཌ</samp></td>
						</tr>
						<tr>
							<td><kbd>D</kbd><kbd>*</kbd></td>
							<td><samp>ྜ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>E</td>
						</tr>						
						<tr>
							<td><kbd>e</kbd></td>
							<td><samp>ེ</samp></td>
						</tr>
						<tr>
							<td><kbd>E</kbd></td>
							<td><samp>ཻ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>F</td>
						</tr>						
						<tr>
							<td><kbd>f</kbd></td>
							<td><samp>ཕ</samp></td>
						</tr>
						<tr>
							<td><kbd>F</kbd></td>
							<td><samp>ྥ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>G</td>
						</tr>						
						<tr>
							<td><kbd>g</kbd></td>
							<td><samp>ག</samp></td>
						</tr>
						<tr>
							<td><kbd>G</kbd></td>
							<td><samp>ྒ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>H</td>
						</tr>						
						<tr>
							<td><kbd>h</kbd></td>
							<td><samp>ཧ</samp></td>
						</tr>
						<tr>
							<td><kbd>H</kbd></td>
							<td><samp>ྷ</samp></td>
						</tr>						
						<tr class='headrow'>
							<td colspan='2'>I</td>
						</tr>						
						<tr>
							<td><kbd>i</kbd></td>
							<td><samp>ི</samp></td>
						</tr>
						<tr>
							<td><kbd>I</kbd></td>
							<td><samp>ྀ</samp></td>
						</tr>
					</tbody>
				</table>
				<table class='grid colright'>
					<col class='keys' />
					<col class='char' />	
					<thead>		
						<tr>
							<th>Keys</th>
							<th>Characters</th>
						</tr>
					</thead>
					<tbody>							
						<tr class='headrow'>
							<td colspan='2'>J</td>
						</tr>						
						<tr>
							<td><kbd>j</kbd></td>
							<td><samp>ཇ</samp></td>
						</tr>
						<tr>
							<td><kbd>J</kbd></td>
							<td><samp>ྗ</samp></td>
						</tr>
						<tr>
							<td><kbd>j</kbd><kbd>*</kbd></td>
							<td><samp>ཛ</samp></td>
						</tr>
						<tr>
							<td><kbd>J</kbd><kbd>*</kbd></td>
							<td><samp>ྫ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>K</td>
						</tr>						
						<tr>
							<td><kbd>k</kbd></td>
							<td><samp>ཀ</samp></td>
						</tr>
						<tr>
							<td><kbd>K</kbd></td>
							<td><samp>ྐ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>L</td>
						</tr>						
						<tr>
							<td><kbd>l</kbd></td>
							<td><samp>ལ</samp></td>
						</tr>
						<tr>
							<td><kbd>L</kbd></td>
							<td><samp>ླ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>M</td>
						</tr>						
						<tr>
							<td><kbd>m</kbd></td>
							<td><samp>མ</samp></td>
						</tr>
						<tr>
							<td><kbd>M</kbd></td>
							<td><samp>ྨ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>N</td>
						</tr>						
						<tr>
							<td><kbd>n</kbd></td>
							<td><samp>ན</samp></td>
						</tr>
						<tr>
							<td><kbd>N</kbd></td>
							<td><samp>ྣ</samp></td>
						</tr>
						<tr>
							<td><kbd>n</kbd><kbd>*</kbd></td>
							<td><samp>ཎ</samp></td>
						</tr>
						<tr>
							<td><kbd>N</kbd><kbd>*</kbd></td>
							<td><samp>ྞ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>O</td>
						</tr>						
						<tr>
							<td><kbd>o</kbd></td>
							<td><samp>ོ</samp></td>
						</tr>
						<tr>
							<td><kbd>O</kbd></td>
							<td><samp>ཽ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>P</td>
						</tr>						
						<tr>
							<td><kbd>p</kbd></td>
							<td><samp>པ</samp></td>
						</tr>
						<tr>
							<td><kbd>P</kbd></td>
							<td><samp>ྤ</samp></td>
						</tr>													
						<tr class='headrow'>
							<td colspan='2'>Q</td>
						</tr>						
						<tr>
							<td><kbd>q</kbd></td>
							<td><samp>ཤ</samp></td>
						</tr>
						<tr>
							<td><kbd>Q</kbd></td>
							<td><samp>ྴ</samp></td>
						</tr>
						<tr>
							<td><kbd>q</kbd><kbd>*</kbd></td>
							<td><samp>ཥ</samp></td>
						</tr>
						<tr>
							<td><kbd>Q</kbd><kbd>*</kbd></td>
							<td><samp>ྵ</samp></td>
						</tr>
					</tbody>
				</table>
				<table class='grid colright'>
					<col class='keys' />
					<col class='char' />	
					<thead>		
						<tr>
							<th>Keys</th>
							<th>Characters</th>
						</tr>
					</thead>
					<tbody>							
						<tr class='headrow'>
							<td colspan='2'>R</td>
						</tr>						
						<tr>
							<td><kbd>r</kbd></td>
							<td><samp>ར</samp></td>
						</tr>
						<tr>
							<td><kbd>R</kbd></td>
							<td><samp>ྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>*</kbd></td>
							<td><samp>ཪ</samp></td>
						</tr>
						<tr>
							<td><kbd>R</kbd><kbd>*</kbd></td>
							<td><samp>ྼ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>S</td>
						</tr>						
						<tr>
							<td><kbd>s</kbd></td>
							<td><samp>ས</samp></td>
						</tr>
						<tr>
							<td><kbd>S</kbd></td>
							<td><samp>ྶ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>T</td>
						</tr>						
						<tr>
							<td><kbd>t</kbd></td>
							<td><samp>ཏ</samp></td>
						</tr>
						<tr>
							<td><kbd>T</kbd></td>
							<td><samp>ྟ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>*</kbd></td>
							<td><samp>ཊ</samp></td>
						</tr>
						<tr>
							<td><kbd>T</kbd><kbd>*</kbd></td>
							<td><samp>ྚ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>U</td>
						</tr>						
						<tr>
							<td><kbd>u</kbd></td>
							<td><samp>ུ</samp></td>
						</tr>
						<tr>
							<td><kbd>U</kbd></td>
							<td><samp>༁ྃ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>V</td>
						</tr>						
						<tr>
							<td><kbd>v</kbd></td>
							<td><samp>ཝ</samp></td>
						</tr>
						<tr>
							<td><kbd>V</kbd></td>
							<td><samp>ྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>V</kbd><kbd>*</kbd></td>
							<td><samp>ྺ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>W</td>
						</tr>							
						<tr>
							<td><kbd>w</kbd></td>
							<td><samp>ཞ</samp></td>
						</tr>
						<tr>
							<td><kbd>W</kbd></td>
							<td><samp>ྮ</samp></td>
						</tr>											
						<tr class='headrow'>
							<td colspan='2'>X</td>
						</tr>							
						<tr>
							<td><kbd>x</kbd></td>
							<td><samp>ཆ</samp></td>
						</tr>
						<tr>
							<td><kbd>X</kbd></td>
							<td><samp style="font-family:'Microsoft Himalaya', Kokonor;">ྖ</samp></td>
						</tr>
						<tr>
							<td><kbd>x</kbd><kbd>*</kbd></td>
							<td><samp>ཚ</samp></td>
						</tr>
						<tr>
							<td><kbd>X</kbd><kbd>*</kbd></td>
							<td><samp>ྪ</samp></td>
						</tr>
					</tbody>
				</table>
				<table class='grid colright'>
					<col class='keys' />
					<col class='char' />	
					<thead>		
						<tr>
							<th>Keys</th>
							<th>Characters</th>
						</tr>
					</thead>
					<tbody>							
						<tr class='headrow'>
							<td colspan='2'>Y</td>
						</tr>							
						<tr>
							<td><kbd>y</kbd></td>
							<td><samp>ཡ</samp></td>
						</tr>
						<tr>
							<td><kbd>Y</kbd></td>
							<td><samp>ྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>Y</kbd><kbd>*</kbd></td>
							<td><samp>ྱ༨</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>Z</td>
						</tr>							
						<tr>
							<td><kbd>z</kbd></td>
							<td><samp>ཟ</samp></td>
						</tr>
						<tr>
							<td><kbd>Z</kbd></td>
							<td><samp>ྯ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>Other Character Keys</td>
						</tr>
						<tr>
							<td><kbd>`</kbd></td>
							<td><samp>྄</samp></td>
						</tr>
						<tr>
							<td><kbd>~</kbd></td>
							<td><samp>ཾ</samp></td>
						</tr>
						<tr>
							<td><kbd>~</kbd><kbd>*</kbd></td>
							<td><samp>ྃ</samp></td>
						</tr>
						<tr>
							<td><kbd>~</kbd><kbd>*</kbd><kbd>*</kbd></td>
							<td><samp>ྂ</samp></td>
						</tr>
						<tr>
							<td><kbd>&amp;</kbd></td>
							<td><samp>྅</samp></td>
						</tr>						
						<tr>
							<td><kbd>[</kbd></td>
							<td><samp>ཁ</samp></td>
						</tr>					
						<tr>
							<td><kbd>{</kbd></td>
							<td><samp>ྑ</samp></td>
						</tr>
						<tr>
							<td><kbd>]</kbd></td>
							<td><samp>ཐ</samp></td>
						</tr>							
						<tr>
							<td><kbd>}</kbd></td>
							<td><samp>ྠ</samp></td>
						</tr>
						<tr>
							<td><kbd>]</kbd><kbd>*</kbd></td>
							<td><samp>ཋ</samp></td>
						</tr>						
						<tr>
							<td><kbd>}</kbd><kbd>*</kbd></td>
							<td><samp>ྛ</samp></td>
						</tr>					
						<tr>
							<td><kbd>:</kbd></td>
							<td><samp>ཿ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd></td>
							<td><samp>འ</samp></td>
						</tr>						
						<tr>
							<td><kbd>"</kbd></td>
							<td><samp>ཱ</samp></td>
						</tr>
						<tr>
							<td><kbd>"</kbd><kbd>*</kbd></td>
							<td><samp>ྰ</samp></td>
						</tr>					
						<tr>
							<td><kbd>,</kbd></td>
							<td><samp>ང</samp></td>
						</tr>	
						<tr>
							<td><kbd>&lt;</kbd></td>
							<td><samp>ྔ</samp></td>
						</tr>							
						<tr>
							<td><kbd>.</kbd></td>
							<td><samp>ཉ</samp></td>
						</tr>
						<tr>
							<td><kbd>&gt;</kbd></td>
							<td><samp>ྙ</samp></td>
						</tr>											
					</tbody>
				</table>
			</article>
		</section>	
		<section id='tsheg' class='break'>
			<h4>Tsheg + White Space</h4>
			<p>This keyboard includes two different tshegs. Typing <kbd>Space</kbd> creates a standard tsheg. To clear a standard tsheg, type <kbd>Space</kbd> again. For a non-breaking tsheg, type <kbd>-</kbd>. If you need to type multiple tshegs, you should use the non-breaking tsheg <kbd>-</kbd>. To get white space, type <kbd>_</kbd>.</p>
			<p class='example'><b>Example:</b> type <kbd>Space</kbd> for <samp>་</samp>.</p>
			<p class='example'><b>Example:</b> type <kbd>-</kbd><kbd>-</kbd> for <samp>༌༌</samp>.</p>
			<p class='example'><b>Example:</b> type <kbd>_</kbd> for white space.</p>
		</section>
		<section id='symbols'>
			<h4>Numbers + Punctuation</h4>
			<p>This keyboard also enables you to type a collection of basic Tibetan symbols, as follows:</p>
			<article class='guide'>
				<table class='grid colleft'>
					<col class='keys' />
					<col class='char' />	
					<thead>		
						<tr>
							<th>Keys</th>
							<th>Characters</th>
						</tr>
					</thead>
					<tbody>
						<tr class='headrow'>
							<td colspan='2'>Numbers</td>
						</tr>	
						<tr>
							<td><kbd>1</kbd></td>
							<td><samp>༡</samp></td>
						</tr>	
						<tr>
							<td><kbd>2</kbd></td>
							<td><samp>༢</samp></td>
						</tr>	
						<tr>
							<td><kbd>3</kbd></td>
							<td><samp>༣</samp></td>
						</tr>	
						<tr>
							<td><kbd>4</kbd></td>
							<td><samp>༤</samp></td>
						</tr>	
						<tr>
							<td><kbd>5</kbd></td>
							<td><samp>༥</samp></td>
						</tr>	
						<tr>
							<td><kbd>6</kbd></td>
							<td><samp>༦</samp></td>
						</tr>	
						<tr>
							<td><kbd>7</kbd></td>
							<td><samp>༧</samp></td>
						</tr>	
						<tr>
							<td><kbd>8</kbd></td>
							<td><samp>༨</samp></td>
						</tr>	
						<tr>
							<td><kbd>9</kbd></td>
							<td><samp>༩</samp></td>
						</tr>	
						<tr>
							<td><kbd>0</kbd></td>
							<td><samp>༠</samp></td>
						</tr>
					</tbody>
				</table>
				<table class='grid colright'>
					<col class='keys' />
					<col class='char' />	
					<thead>		
						<tr>
							<th>Keys</th>
							<th>Characters</th>
						</tr>
					</thead>
					<tbody>
						<tr class='headrow'>
							<td colspan='2'>Numbers</td>
						</tr>	
						<tr>
							<td><kbd>1</kbd><kbd>*</kbd></td>
							<td><samp>༪</samp></td>
						</tr>	
						<tr>
							<td><kbd>2</kbd><kbd>*</kbd></td>
							<td><samp>༫</samp></td>
						</tr>	
						<tr>
							<td><kbd>3</kbd><kbd>*</kbd></td>
							<td><samp>༬</samp></td>
						</tr>	
						<tr>
							<td><kbd>4</kbd><kbd>*</kbd></td>
							<td><samp>༭</samp></td>
						</tr>	
						<tr>
							<td><kbd>5</kbd><kbd>*</kbd></td>
							<td><samp>༮</samp></td>
						</tr>	
						<tr>
							<td><kbd>6</kbd><kbd>*</kbd></td>
							<td><samp>༯</samp></td>
						</tr>	
						<tr>
							<td><kbd>7</kbd><kbd>*</kbd></td>
							<td><samp>༰</samp></td>
						</tr>	
						<tr>
							<td><kbd>8</kbd><kbd>*</kbd></td>
							<td><samp>༱</samp></td>
						</tr>	
						<tr>
							<td><kbd>9</kbd><kbd>*</kbd></td>
							<td><samp>༲</samp></td>
						</tr>	
						<tr>
							<td><kbd>0</kbd><kbd>*</kbd></td>
							<td><samp>༳</samp></td>
						</tr>
					</tbody>
				</table>				
				<table class='grid colright'>
					<col class='keys' />
					<col class='char' />	
					<thead>		
						<tr>
							<th>Keys</th>
							<th>Characters</th>
						</tr>
					</thead>
					<tbody>
						<tr class='headrow'>
							<td colspan='2'>Punctuation</td>
						</tr>	
						<tr>
							<td><kbd>_</kbd></td>
							<td style='height:64px;'>White Space</td>
						</tr>							
						<tr>
							<td><kbd>Space</kbd></td>
							<td><samp>་</samp></td>
						</tr>	
						<tr>
							<td><kbd>;</kbd></td>
							<td><samp>༔</samp></td>
						</tr>						
						<tr>
							<td><kbd>/</kbd></td>
							<td><samp>།</samp></td>
						</tr>				
						<tr>
							<td><kbd>/</kbd><kbd>/</kbd></td>
							<td><samp>༎</samp></td>
						</tr>	
						<tr>
							<td><kbd>/</kbd><kbd>*</kbd></td>
							<td><samp>༏</samp></td>
						</tr>	
						<tr>
							<td><kbd>/</kbd><kbd>*</kbd><kbd>*</kbd></td>
							<td><samp>༐</samp></td>
						</tr>	
						<tr>
							<td style='height:118px;'><kbd>/</kbd><kbd>*</kbd><kbd>*</kbd><kbd>*</kbd><br/><br/><b>OR</b><br/><br/><kbd>?</kbd></td>
							<td><samp>༑</samp></td>
						</tr>	
						<tr>
							<td><kbd>!</kbd></td>
							<td><samp>༈</samp></td>
						</tr>	
						<tr>
							<td><kbd>+</kbd></td>
							<td><samp>༒</samp></td>
						</tr>
						<tr>
							<td><kbd>*</kbd></td>
							<td><samp>༓</samp></td>
						</tr>					
					</tbody>
				</table>
				<table class='grid colright'>
					<col class='keys' />
					<col class='char' />	
					<thead>		
						<tr>
							<th>Keys</th>
							<th>Characters</th>
						</tr>
					</thead>
					<tbody>
						<tr class='headrow'>
							<td colspan='2'>Punctuation</td>
						</tr>	
						<tr>
							<td><kbd>=</kbd></td>
							<td><samp>༴</samp></td>
						</tr>													
						<tr>
							<td><kbd>@</kbd></td>
							<td><samp>༄</samp></td>
						</tr>					
						<tr>
							<td><kbd>#</kbd></td>
							<td><samp>༅</samp></td>
						</tr>					
						<tr>
							<td><kbd>$</kbd></td>
							<td><samp>༆</samp></td>
						</tr>					
						<tr>
							<td><kbd>%</kbd></td>
							<td><samp>༇</samp></td>
						</tr>										
						<tr>
							<td><kbd>^</kbd></td>
							<td><samp>༺</samp></td>
						</tr>					
						<tr>
							<td><kbd>^</kbd><kbd>*</kbd></td>
							<td><samp>༻</samp></td>
						</tr>					
						<tr>
							<td><kbd>(</kbd></td>
							<td><samp>༼</samp></td>
						</tr>					
						<tr>
							<td><kbd>(</kbd><kbd>*</kbd></td>
							<td><samp>༿</samp></td>
						</tr>
						<tr>
							<td><kbd>)</kbd></td>
							<td><samp>༽</samp></td>
						</tr>

						<tr>
							<td><kbd>)</kbd><kbd>*</kbd></td>
							<td><samp>༾</samp></td>
						</tr>											
					</tbody>
				</table>
			</article>	
		</section>
	</section>
	<section id='sym' class='break'>
		<h3>Typing Extended Tibetan Symbols Using Menus</h3>
		<p>Tibetan Unicode Direct Input includes menus to make it easier to type extended Tibetan symbols. To pull up a menu, type <kbd>\</kbd> and the name of the menu. Then select a menu item by typing the number of the item.</p>
		<p class='example'><b>Example:</b> type <kbd>\</kbd><kbd>H</kbd><kbd>A</kbd><kbd>L</kbd><kbd>F</kbd> to pull up the half-digits menu. Press <kbd>5</kbd> to get <samp>༮</samp>.</p>	
		<p>There are six menus with 2 to 10 items each:</p>
		<article class='guide'>
			<table class='grid colleft'>
				<col class='keys' />
				<col class='menu' />	
				<thead>		
					<tr>
						<th>Keys</th>
						<th>Menu Items</th>
					</tr>
				</thead>
				<tbody>
					<tr class='headrow'>
						<td colspan='2'>Main Menu</td>
					</tr>				
					<tr>
						<td><kbd>\</kbd><kbd>M</kbd><kbd>E</kbd><kbd>N</kbd><kbd>U</kbd></td>
						<td><samp style='font-size:17pt;'>[1 LOGO  2 ASTR  3 HALF  4 CANT  5 SYMB ]</samp></td>
					</tr>
					<tr class='headrow'>
						<td colspan='2'>Logotypes Menu</td>
					</tr>						
					<tr>
						<td><kbd>\</kbd><kbd>L</kbd><kbd>O</kbd><kbd>G</kbd><kbd>O</kbd></td>
						<td><samp>[1༕ 2༖]</samp></td>
					</tr>
					<tr class='headrow'>
						<td colspan='2'>Astrological Signs Menu</td>
					</tr>						
					<tr>
						<td><kbd>\</kbd><kbd>A</kbd><kbd>S</kbd><kbd>T</kbd><kbd>R</kbd></td>
						<td><samp>[1༗ 2༘ 3༙ 4༾ 5༿ 6࿏]</samp></td>
					</tr>
					<tr class='headrow'>
						<td colspan='2'>Half-digits Menu</td>
					</tr>						
					<tr>
						<td><kbd>\</kbd><kbd>H</kbd><kbd>A</kbd><kbd>L</kbd><kbd>F</kbd></td>
						<td><samp>[1༪ 2༫ 3༬ 4༭ 5༮ 6༯ 7༰ 8༱ 9༲ 0༳]</samp></td>
					</tr>					
					<tr class='headrow'>
						<td colspan='2'>Cantillation Signs Menu</td>
					</tr>						
					<tr>
						<td><kbd>\</kbd><kbd>C</kbd><kbd>A</kbd><kbd>N</kbd><kbd>T</kbd></td>
						<td><samp>[1࿀ 2࿁ 3࿂ 4࿃]</samp></td>
					</tr>
					<tr class='headrow'>
						<td colspan='2'>Religious Symbols Menu</td>
					</tr>		
					<tr>
						<td><kbd>\</kbd><kbd>S</kbd><kbd>Y</kbd><kbd>M</kbd><kbd>B</kbd></td>
						<td><samp>[1࿄ 2࿅ 3࿆ 4࿇ 5࿈ 6࿉ 7࿊ 8࿋ 9࿌]</samp></td>
					</tr>
				</tbody>
			</table>
		</article>
	</section>
	<section id='lat' class='break'>
		<h3>Typing Latin</h3>
		<p>Press the <kbd>Esc</kbd> key to enter Latin mode and type Latin characters while using this keyboard. A <samp>&gt;</samp> symbol indicates the change into Latin mode and disappears when you start typing. The Latin mode keyboard follows the Windows US layout.</p> 
		<p class='example'><b>Example:</b> type <kbd>b</kbd><kbd>k</kbd><kbd>R</kbd><kbd>i</kbd><kbd>_</kbd><kbd>Esc</kbd><kbd>=</kbd><kbd>Space</kbd><kbd>b</kbd><kbd>k</kbd><kbd>R</kbd><kbd>i</kbd> to get <samp>བཀྲི = bkri</samp>.</p>		
		<p>To leave Latin mode, press <kbd>Esc</kbd> again.</p>
	</section>
	<section id='cyr'>
		<h3 >Typing Cyrillic</h3>
		<p>Press <kbd>Esc</kbd><kbd>Esc</kbd> to enter Cyrillic mode and type Cyrillic characters while using this keyboard. A <samp>&gt;&gt;</samp> symbol indicates the change into Cyrillic mode and disappears when you start typing. To leave Cyrillic mode, press <kbd>Esc</kbd> again.</p>
	</section>
  </section>
  <h2>Language Example</h2>	
<?php renderLanguageExamples(); ?>