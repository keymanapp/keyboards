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

  $pagename = 'Tibetan Unicode EWTS (deprecated) Keyboard Help';
  $pagetitle = 'Tibetan Unicode EWTS (deprecated) Keyboard Help'; 
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
        .K_oE2 {
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
@media print {.K_CTRLR {
			  margin-left:71px;
			} 
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
		  font-size:22px;
          position: absolute; 
          display: block;
          right: 3px;
          bottom: -12px;
        }	
		#cyr .key samp {
		  bottom: 2px !important;
		}

		.LTN {
		  font-family:Arial !important;
		  font-size:10px !important;
		  color: #AD4A28 !important;
		  font-variant:small-caps;
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
  <p>Keyboard &#169; 2003 Linguasoft</p>
  <section id='overview'>
	<h2>Overview</h2>
	<p>Tibetan Unicode EWTS is based on the <a href='http://www.thlib.org/reference/transliteration/#!essay=/thl/ewts' target='_blank'>Extended Wylie Transliteration Scheme</a> (EWTS), an approach that avoids most <kbd>Shift</kbd>, <kbd>Alt</kbd>, and <kbd>Alt</kbd>+<kbd>Shift</kbd> combinations.</p> 
	<h4>Basic Function</h4>
	<p>Tibetan characters are created from Latin letters each time you type a vowel or a <kbd>Space</kbd> (tsheg). Special rules apply for long-stacks.</p>
	<p>This keyboard also features:</p>
	<ul>
		<li>Menus for extended Tibetan symbols; and</li>
    	<li>A direct Unicode input method</li>
	</ul>
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
		<li><a href='#ewts'>Tibetan using EWTS</a></li>
		<li><a href='#sym'>Extended Tibetan symbols using special menus</a></li>
		<li><a href='#hex'>Unicode characters using hex codes</a></li>
		<li><a href='#lat'>Latin</a></li>
		<li><a href='#cyr'>Cyrillic</a></li>		
	</ul>
	<section id='ewts'>
		<h3>Typing Tibetan Using EWTS</h3>
		<p>This keyboard automatically converts EWTS transliteration into Tibetan after you type a vowel or press <kbd>Space</kbd>.</p>
		<p class='example'><b>Example:</b> type <kbd>b</kbd><kbd>k</kbd><kbd>r</kbd> to see <samp>bkr</samp>. Type <kbd>i</kbd><kbd>Space</kbd> to get <samp>བཀྲི་</samp>.</p>
		<p>Whether you should type a vowel or press <kbd>Space</kbd> will depend on whether you are typing a beginning, a standalone, or an ending syllable combination.</p>
		<section id='start-combos'>
			<h4>Beginning Combinations</h4>
			<p>Only certain combinations may begin a syllable in EWTS. To convert beginning combinations into Tibetan, you must type a vowel, not a <kbd>Space</kbd>. A beginning combination will not convert into Tibetan if you press <kbd>Space</kbd>.</p>
			<p>Most beginning combinations use lowercase letters, but a few use uppercase letters. The following alphabetical list shows all the combinations which may begin a syllable in this keyboard:</p>
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
							<td colspan='2'>'</td>
						</tr>	
						<tr>
							<td><kbd>'</kbd></td>
							<td><samp>འ</samp></td>
						</tr>
						<tr>
							<td><kbd>'</kbd><kbd>b</kbd></td>
							<td><samp>འབ</samp></td>
						</tr>
						<tr>
							<td><kbd>'</kbd><kbd>b</kbd><kbd>r</kbd></td>
							<td><samp>འབྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>'</kbd><kbd>b</kbd><kbd>y</kbd></td>
							<td><samp>འབྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>'</kbd><kbd>c</kbd><kbd>h</kbd></td>
							<td><samp>འཆ</samp></td>
						</tr>
						<tr>
							<td><kbd>'</kbd><kbd>d</kbd></td>
							<td><samp>འད</samp></td>
						</tr>
						<tr>
							<td><kbd>'</kbd><kbd>d</kbd><kbd>r</kbd></td>
							<td><samp>འདྲ</samp></td>
						</tr>			
						<tr>
							<td><kbd>'</kbd><kbd>d</kbd><kbd>z</kbd></td>
							<td><samp>འཛ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>g</kbd></td>
							<td><samp>འག</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>g</kbd><kbd>r</kbd></td>
							<td><samp>འགྲ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>g</kbd><kbd>y</kbd></td>
							<td><samp>འགྱ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>j</kbd></td>
							<td><samp>འཇ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>k</kbd></td>
							<td><samp>འཀ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>k</kbd><kbd>h</kbd></td>
							<td><samp>འཁ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>k</kbd><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>འཁྲ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>k</kbd><kbd>h</kbd><kbd>y</kbd></td>
							<td><samp>འཁྱ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>p</kbd><kbd>h</kbd></td>
							<td><samp>འཕ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>p</kbd><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>འཕྲ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>p</kbd><kbd>h</kbd><kbd>y</kbd></td>
							<td><samp>འཕྱ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>t</kbd><kbd>h</kbd></td>
							<td><samp>འཐ</samp></td>
						</tr>	
						<tr>
							<td><kbd>'</kbd><kbd>t</kbd><kbd>s</kbd><kbd>h</kbd></td>
							<td><samp>འཚ</samp></td>
						</tr>	
						<tr class='headrow'>
							<td colspan='2'>b</td>
						</tr>	
						<tr>
							<td><kbd>b</kbd></td>
							<td><samp>བ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>.</kbd><kbd>r</kbd></td>
							<td><samp>བར</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>c</kbd></td>
							<td><samp>བཅ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>c</kbd><kbd>w</kbd></td>
							<td><samp>བཅྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>d</kbd></td>
							<td><samp>བད</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>d</kbd><kbd>z</kbd></td>
							<td><samp>བཛ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>g</kbd></td>
							<td><samp>བག</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>g</kbd><kbd>r</kbd></td>
							<td><samp>བགྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>g</kbd><kbd>y</kbd></td>
							<td><samp>བགྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>h</kbd></td>
							<td><samp>བྷ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>h</kbd><kbd>y</kbd></td>
							<td><samp>བྷྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>j</kbd></td>
							<td><samp>བཇ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>k</kbd></td>
							<td><samp>བཀ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>k</kbd><kbd>l</kbd></td>
							<td><samp>བཀླ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>k</kbd><kbd>r</kbd></td>
							<td><samp>བཀྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>k</kbd><kbd>y</kbd></td>
							<td><samp>བཀྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>l</kbd></td>
							<td><samp>བླ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>l</kbd><kbd>d</kbd></td>
							<td><samp>བལྡ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>l</kbd><kbd>t</kbd></td>
							<td><samp>བལྟ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>m</kbd></td>
							<td><samp>བམ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>n</kbd></td>
							<td><samp>བན</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>n</kbd><kbd>y</kbd></td>
							<td><samp>བཉ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd></td>
							<td><samp>བྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>d</kbd></td>
							<td><samp>བརྡ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>d</kbd><kbd>z</kbd></td>
							<td><samp>བརྫ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>g</kbd></td>
							<td><samp>བརྒ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>g</kbd><kbd>y</kbd></td>
							<td><samp>བརྒྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>j</kbd></td>
							<td><samp>བརྗ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>k</kbd></td>
							<td><samp>བརྐ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>k</kbd><kbd>y</kbd></td>
							<td><samp>བརྐྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>l</kbd></td>
							<td><samp>བརླ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>n</kbd></td>
							<td><samp>བརྣ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>བརྔ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>n</kbd><kbd>y</kbd></td>
							<td><samp>བརྙ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>t</kbd></td>
							<td><samp>བརྟ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>r</kbd><kbd>t</kbd><kbd>s</kbd></td>
							<td><samp>བརྩ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd></td>
							<td><samp>བས</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>d</kbd></td>
							<td><samp>བསྡ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>g</kbd></td>
							<td><samp>བསྒ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>g</kbd><kbd>r</kbd></td>
							<td><samp>བསྒྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>g</kbd><kbd>y</kbd></td>
							<td><samp>བསྒྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>h</kbd></td>
							<td><samp>བཤ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>k</kbd></td>
							<td><samp>བསྐ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>k</kbd><kbd>r</kbd></td>
							<td><samp>བསྐྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>k</kbd><kbd>y</kbd></td>
							<td><samp>བསྐྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>l</kbd></td>
							<td><samp>བསླ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>n</kbd></td>
							<td><samp>བསྣ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>བསྔ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>n</kbd><kbd>y</kbd></td>
							<td><samp>བསྙ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>r</kbd></td>
							<td><samp>བསྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>t</kbd></td>
							<td><samp>བསྟ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>s</kbd><kbd>t</kbd><kbd>s</kbd></td>
							<td><samp>བསྩ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>t</kbd></td>
							<td><samp>བཏ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>t</kbd><kbd>s</kbd></td>
							<td><samp>བཙ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>y</kbd></td>
							<td><samp>བྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>z</kbd></td>
							<td><samp>བཟ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>z</kbd><kbd>h</kbd></td>
							<td><samp>བཞ</samp></td>
						</tr>
						<tr>
							<td><kbd>b</kbd><kbd>z</kbd><kbd>l</kbd></td>
							<td><samp>བཟླ</samp></td>
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
							<td colspan='2'>c</td>
						</tr>			
						<tr>
							<td><kbd>c</kbd></td>
							<td><samp>ཅ</samp></td>
						</tr>
						<tr>
							<td><kbd>c</kbd><kbd>h</kbd></td>
							<td><samp>ཆ</samp></td>
						</tr>
						<tr>
							<td><kbd>c</kbd><kbd>r</kbd></td>
							<td><samp>ཅར</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>D</td>
						</tr>	
						<tr>
							<td><kbd>D</kbd></td>
							<td><samp>ཌ</samp></td>
						</tr>					
						<tr class='headrow'>
							<td colspan='2'>d</td>
						</tr>			
						<tr>
							<td><kbd>d</kbd></td>
							<td><samp>ད</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>b</kbd></td>
							<td><samp>དབ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>b</kbd><kbd>r</kbd></td>
							<td><samp>དབྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>b</kbd><kbd>y</kbd></td>
							<td><samp>དབྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>g</kbd></td>
							<td><samp>དག</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>g</kbd><kbd>r</kbd></td>
							<td><samp>དགྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>g</kbd><kbd>y</kbd></td>
							<td><samp>དགྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>h</kbd></td>
							<td><samp>དྷ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>དྷྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>k</kbd></td>
							<td><samp>དཀ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>k</kbd><kbd>r</kbd></td>
							<td><samp>དཀྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>k</kbd><kbd>y</kbd></td>
							<td><samp>དཀྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>m</kbd></td>
							<td><samp>དམ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>m</kbd><kbd>y</kbd></td>
							<td><samp>དམྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>དང</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>p</kbd></td>
							<td><samp>དཔ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>p</kbd><kbd>r</kbd></td>
							<td><samp>དཔྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>p</kbd><kbd>y</kbd></td>
							<td><samp>དཔྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>r</kbd></td>
							<td><samp>དྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>r</kbd><kbd>w</kbd></td>
							<td><samp>དརྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>w</kbd></td>
							<td><samp>དྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>z</kbd></td>
							<td><samp>ཛ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>z</kbd><kbd>h</kbd></td>
							<td><samp>ཛྷ</samp></td>
						</tr>
						<tr>
							<td><kbd>d</kbd><kbd>z</kbd><kbd>r</kbd></td>
							<td><samp>ཛྲ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>g</td>
						</tr>			
						<tr>
							<td><kbd>g</kbd></td>
							<td><samp>ག</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>.</kbd><kbd>y</kbd></td>
							<td><samp>གཡ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>c</kbd></td>
							<td><samp>གཅ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>d</kbd></td>
							<td><samp>གད</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>d</kbd><kbd>z</kbd></td>
							<td><samp>དཛ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>h</kbd></td>
							<td><samp>གྷ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>གྷྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>l</kbd></td>
							<td><samp>གླ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>n</kbd></td>
							<td><samp>གན</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>n</kbd><kbd>y</kbd></td>
							<td><samp>གཉ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>r</kbd></td>
							<td><samp>གྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>r</kbd><kbd>w</kbd></td>
							<td><samp>གྲྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>གས</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>s</kbd><kbd>h</kbd></td>
							<td><samp>གཤ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>t</kbd></td>
							<td><samp>གཏ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>t</kbd><kbd>s</kbd></td>
							<td><samp>གཙ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>y</kbd></td>
							<td><samp>གྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>z</kbd></td>
							<td><samp>གཟ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>z</kbd><kbd>h</kbd></td>
							<td><samp>གཞ</samp></td>
						</tr>
						<tr>
							<td><kbd>g</kbd><kbd>z</kbd><kbd>l</kbd></td>
							<td><samp>གཟླ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>h</td>
						</tr>
						<tr>
							<td><kbd>h</kbd></td>
							<td><samp>ཧ</samp></td>
						</tr>
						<tr>
							<td><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>ཧྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>h</kbd><kbd>w</kbd></td>
							<td><samp>ཧྭ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>j</td>
						</tr>
						<tr>
							<td><kbd>j</kbd></td>
							<td><samp>ཇ</samp></td>
						</tr>
						<tr>
							<td><kbd>j</kbd><kbd>n</kbd></td>
							<td><samp>ཇན</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>k</td>
						</tr>
						<tr>
							<td><kbd>k</kbd></td>
							<td><samp>ཀ</samp></td>
						</tr>
						<tr>
							<td><kbd>k</kbd><kbd>h</kbd></td>
							<td><samp>ཁ</samp></td>
						</tr>
						<tr>
							<td><kbd>k</kbd><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>ཁྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>k</kbd><kbd>h</kbd><kbd>w</kbd></td>
							<td><samp>ཁྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>k</kbd><kbd>h</kbd><kbd>y</kbd></td>
							<td><samp>ཁྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>k</kbd><kbd>l</kbd></td>
							<td><samp>ཀླ</samp></td>
						</tr>
						<tr>
							<td><kbd>k</kbd><kbd>m</kbd></td>
							<td><samp>ཀམ</samp></td>
						</tr>
						<tr>
							<td><kbd>k</kbd><kbd>r</kbd></td>
							<td><samp>ཀྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>k</kbd><kbd>w</kbd></td>
							<td><samp>ཀྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>k</kbd><kbd>y</kbd></td>
							<td><samp>ཀྱ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>l</td>
						</tr>
						<tr>
							<td><kbd>l</kbd></td>
							<td><samp>ལ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>b</kbd></td>
							<td><samp>ལྦ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>c</kbd></td>
							<td><samp>ལྕ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>d</kbd></td>
							<td><samp>ལྡ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>g</kbd></td>
							<td><samp>ལྒ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>h</kbd></td>
							<td><samp>ལྷ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>j</kbd></td>
							<td><samp>ལྗ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>k</kbd></td>
							<td><samp>ལྐ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>ལྔ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>p</kbd></td>
							<td><samp>ལྤ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>t</kbd></td>
							<td><samp>ལྟ</samp></td>
						</tr>
						<tr>
							<td><kbd>l</kbd><kbd>w</kbd></td>
							<td><samp>ལྭ</samp></td>
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
							<td colspan='2'>m</td>
						</tr>
						<tr>
							<td><kbd>m</kbd></td>
							<td><samp>མ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>c</kbd><kbd>h</kbd></td>
							<td><samp>མཆ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>d</kbd></td>
							<td><samp>མད</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>d</kbd><kbd>z</kbd></td>
							<td><samp>མཛ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>g</kbd></td>
							<td><samp>མག</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>g</kbd><kbd>r</kbd></td>
							<td><samp>མགྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>g</kbd><kbd>y</kbd></td>
							<td><samp>མགྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>j</kbd></td>
							<td><samp>མཇ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>k</kbd><kbd>h</kbd></td>
							<td><samp>མཁ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>k</kbd><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>མཁྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>k</kbd><kbd>h</kbd><kbd>y</kbd></td>
							<td><samp>མཁྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>n</kbd></td>
							<td><samp>མན</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>མང</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>n</kbd><kbd>y</kbd></td>
							<td><samp>མཉ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>r</kbd></td>
							<td><samp>མྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>t</kbd><kbd>h</kbd></td>
							<td><samp>མཐ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>t</kbd><kbd>s</kbd><kbd>h</kbd></td>
							<td><samp>མཚ</samp></td>
						</tr>
						<tr>
							<td><kbd>m</kbd><kbd>y</kbd></td>
							<td><samp>མྱ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>N</td>
						</tr>
						<tr>
							<td><kbd>N</kbd></td>
							<td><samp>ཎ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>n</td>
						</tr>
						<tr>
							<td><kbd>n</kbd></td>
							<td><samp>ན</samp></td>
						</tr>
						<tr>
							<td><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>ང</samp></td>
						</tr>
						<tr>
							<td><kbd>n</kbd><kbd>r</kbd></td>
							<td><samp>ནྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>n</kbd><kbd>y</kbd></td>
							<td><samp>ཉ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>p</td>
						</tr>
						<tr>
							<td><kbd>p</kbd></td>
							<td><samp>པ</samp></td>
						</tr>
						<tr>
							<td><kbd>p</kbd><kbd>h</kbd></td>
							<td><samp>ཕ</samp></td>
						</tr>
						<tr>
							<td><kbd>p</kbd><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>ཕྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>p</kbd><kbd>h</kbd><kbd>y</kbd></td>
							<td><samp>ཕྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>p</kbd><kbd>h</kbd><kbd>y</kbd><kbd>w</kbd></td>
							<td><samp>ཕྱྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>p</kbd><kbd>r</kbd></td>
							<td><samp>པྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>p</kbd><kbd>y</kbd></td>
							<td><samp>པྱ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>r</td>
						</tr>			
						<tr>
							<td><kbd>r</kbd></td>
							<td><samp>ར</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>b</kbd></td>
							<td><samp>རྦ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>d</kbd></td>
							<td><samp>རྡ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>d</kbd><kbd>z</kbd></td>
							<td><samp>རྫ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>g</kbd></td>
							<td><samp>རྒ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>g</kbd><kbd>y</kbd></td>
							<td><samp>རྒྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>j</kbd></td>
							<td><samp>རྗ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>k</kbd></td>
							<td><samp>རྐ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>k</kbd><kbd>y</kbd></td>
							<td><samp>རྐྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>l</kbd></td>
							<td><samp>རླ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>m</kbd></td>
							<td><samp>རྨ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>m</kbd><kbd>y</kbd></td>
							<td><samp>རྨྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>n</kbd></td>
							<td><samp>རྣ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>རྔ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>n</kbd><kbd>y</kbd></td>
							<td><samp>རྙ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>t</kbd></td>
							<td><samp>རྟ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>t</kbd><kbd>s</kbd></td>
							<td><samp>རྩ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>t</kbd><kbd>s</kbd><kbd>w</kbd></td>
							<td><samp>རྩྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>r</kbd><kbd>w</kbd></td>
							<td><samp>ཏྭ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>S</td>
						</tr>
						<tr>
							<td><kbd>S</kbd><kbd>h</kbd></td>
							<td><samp>ཥ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>s</td>
						</tr>
						<tr>
							<td><kbd>s</kbd></td>
							<td><samp>ས</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>b</kbd></td>
							<td><samp>སྦ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>b</kbd><kbd>r</kbd></td>
							<td><samp>སྦྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>b</kbd><kbd>y</kbd></td>
							<td><samp>སྦྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>d</kbd></td>
							<td><samp>སྡ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>d</kbd><kbd>z</kbd></td>
							<td><samp>སྫ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>g</kbd></td>
							<td><samp>སྒ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>g</kbd><kbd>r</kbd></td>
							<td><samp>སྒྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>g</kbd><kbd>y</kbd></td>
							<td><samp>སྒྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>h</kbd></td>
							<td><samp>ཤ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>ཤྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>h</kbd><kbd>w</kbd></td>
							<td><samp>ཤྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>k</kbd></td>
							<td><samp>སྐ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>k</kbd><kbd>r</kbd></td>
							<td><samp>སྐྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>k</kbd><kbd>y</kbd></td>
							<td><samp>སྐྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>l</kbd></td>
							<td><samp>སླ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>m</kbd></td>
							<td><samp>སྨ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>m</kbd><kbd>r</kbd></td>
							<td><samp>སྨྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>m</kbd><kbd>y</kbd></td>
							<td><samp>སྨྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>n</kbd></td>
							<td><samp>སྨ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>སྔ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>n</kbd><kbd>r</kbd></td>
							<td><samp>སྣྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>n</kbd><kbd>y</kbd></td>
							<td><samp>སྙ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>p</kbd></td>
							<td><samp>སྤ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>p</kbd><kbd>r</kbd></td>
							<td><samp>སྤྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>p</kbd><kbd>y</kbd></td>
							<td><samp>སྤྱ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>r</kbd></td>
							<td><samp>སྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>t</kbd></td>
							<td><samp>སྟ</samp></td>
						</tr>
						<tr>
							<td><kbd>s</kbd><kbd>t</kbd><kbd>s</kbd></td>
							<td><samp>སྩ</samp></td>
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
							<td colspan='2'>T</td>
						</tr>
						<tr>
							<td><kbd>T</kbd></td>
							<td><samp>ཊ</samp></td>
						</tr>
						<tr>
							<td><kbd>T</kbd><kbd>h</kbd></td>
							<td><samp>ཋ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>t</td>
						</tr>
						<tr>
							<td><kbd>t</kbd></td>
							<td><samp>ཏ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>h</kbd></td>
							<td><samp>ཐ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>h</kbd><kbd>r</kbd></td>
							<td><samp>ཐྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>r</kbd></td>
							<td><samp>ཏྲ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>s</kbd></td>
							<td><samp>ཙ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>s</kbd><kbd>h</kbd></td>
							<td><samp>ཚ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>s</kbd><kbd>h</kbd><kbd>w</kbd></td>
							<td><samp>ཚྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>s</kbd><kbd>w</kbd></td>
							<td><samp>ཙྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>w</kbd></td>
							<td><samp>ཏྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>t</kbd><kbd>y</kbd></td>
							<td><samp>ཏྱ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>w</td>
						</tr>
						<tr>
							<td><kbd>w</kbd></td>
							<td><samp>ཝ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>y</td>
						</tr>			
						<tr>
							<td><kbd>y</kbd></td>
							<td><samp>ཡ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>z</td>
						</tr>			
						<tr>
							<td><kbd>z</kbd></td>
							<td><samp>ཟ</samp></td>
						</tr>
						<tr>
							<td><kbd>z</kbd><kbd>h</kbd></td>
							<td><samp>ཞ</samp></td>
						</tr>
						<tr>
							<td><kbd>z</kbd><kbd>h</kbd><kbd>w</kbd></td>
							<td><samp>ཞྭ</samp></td>
						</tr>
						<tr>
							<td><kbd>z</kbd><kbd>l</kbd></td>
							<td><samp>ཟླ</samp></td>
						</tr>
						<tr>
							<td><kbd>z</kbd><kbd>w</kbd></td>
							<td><samp>ཟྭ</samp></td>
						</tr>
					</tbody>		
				</table>
			</article>	
		</section>
		<section id='end-combos' class='break'>
			<h4>Standalone + Ending Combinations</h4>
			<p>Only certain combinations should standalone or end a syllable in EWTS. To convert standalone and ending combinations to Tibetan, you should type a <kbd>Space</kbd>, not a vowel. Typing a vowel after a standalone or ending combination usually causes the combination to convert incorrectly.</p>
			<p>Most standalone or ending combinations use lowercase letters, but a few use uppercase letters. The following alphabetical list shows all the combinations which may standalone or finish a syllable in this keyboard. In most cases, syllables in the list are given in their standalone form and will look slightly different when typed at the end of a syllable as an ending combination:</p>
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
							<td colspan='2'>A</td>
						</tr>	
						<tr>
							<td><kbd>A</kbd></td>
							<td><samp>ཨཱ</samp></td>
						</tr>	
						<tr class='headrow'>
							<td colspan='2'>a</td>
						</tr>	
						<tr>
							<td><kbd>a</kbd></td>
							<td><samp>ཨ</samp></td>
						</tr>			
						<tr>
							<td><kbd>a</kbd><kbd>b</kbd></td>
							<td><samp>ཨབ</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>b</kbd><kbd>s</kbd></td>
							<td><samp>ཨབས</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>d</kbd></td>
							<td><samp>ཨད</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>g</kbd></td>
							<td><samp>ཨག</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨགས</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>k</kbd></td>
							<td><samp>ཨཀ</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>l</kbd></td>
							<td><samp>ཨལ</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>m</kbd></td>
							<td><samp>ཨམ</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>m</kbd><kbd>s</kbd></td>
							<td><samp>ཨམས</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>n</kbd></td>
							<td><samp>ཨན</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>ཨང</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>n</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨངས</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>r</kbd></td>
							<td><samp>ཨར</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>s</kbd></td>
							<td><samp>ཨས</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>a'</td>
						</tr>	
						<tr>
							<td><kbd>a</kbd><kbd>'</kbd></td>
							<td><samp>འ</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>'</kbd><kbd>a</kbd><kbd>m</kbd></td>
							<td><samp>འམ</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>'</kbd><kbd>a</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>འང</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>'</kbd><kbd>a</kbd><kbd>n</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>འངས</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>'</kbd><kbd>i</kbd></td>
							<td><samp>འི</samp></td>
						</tr>	
						<tr>
							<td><kbd>a</kbd><kbd>'</kbd><kbd>o</kbd></td>
							<td><samp>འོ</samp></td>
						</tr>
						<tr>
							<td><kbd>a</kbd><kbd>'</kbd><kbd>u</kbd></td>
							<td><samp>འུ</samp></td>
						</tr>						
						<tr class='headrow'>
							<td colspan='2'>e</td>
						</tr>
						<tr>
							<td><kbd>e</kbd></td>
							<td><samp>ཨེ</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>b</kbd></td>
							<td><samp>ཨེབ</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>b</kbd><kbd>s</kbd></td>
							<td><samp>ཨེབས</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>d</kbd></td>
							<td><samp>ཨེད</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>g</kbd></td>
							<td><samp>ཨེག</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨེགས</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>l</kbd></td>
							<td><samp>ཨེལ</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>m</kbd></td>
							<td><samp>ཨེམ</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>m</kbd><kbd>s</kbd></td>
							<td><samp>ཨེམས</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>n</kbd></td>
							<td><samp>ཨེན</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>ཨེང</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>n</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨེངས</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>r</kbd></td>
							<td><samp>ཨེར</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>s</kbd></td>
							<td><samp>ཨེས</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>e'</td>
						</tr>	
						<tr>
							<td><kbd>e</kbd><kbd>'</kbd><kbd>a</kbd><kbd>m</kbd></td>
							<td><samp>ེའམ</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>'</kbd><kbd>a</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>ེའང</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>'</kbd><kbd>i</kbd></td>
							<td><samp>ེའི</samp></td>
						</tr>		
						<tr>
							<td><kbd>e</kbd><kbd>'</kbd><kbd>o</kbd></td>
							<td><samp>ེའོ</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>'</kbd><kbd>u</kbd></td>
							<td><samp>ེའུ</samp></td>
						</tr>
						<tr>
							<td><kbd>e</kbd><kbd>'</kbd><kbd>u</kbd><kbd>r</kbd></td>
							<td><samp>ེའུར</samp></td>
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
							<td colspan='2'>I</td>
						</tr>				
						<tr>
							<td><kbd>I</kbd></td>
							<td><samp>ཨཱི</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>i</td>
						</tr>				
						<tr>
							<td><kbd>i</kbd></td>
							<td><samp>ཨི</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>b</kbd></td>
							<td><samp>ཨིབ</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>b</kbd><kbd>s</kbd></td>
							<td><samp>ཨིབས</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>d</kbd></td>
							<td><samp>ཨིད</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>g</kbd></td>
							<td><samp>ཨིག</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨིགས</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>l</kbd></td>
							<td><samp>ཨིལ</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>m</kbd></td>
							<td><samp>ཨིམ</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>m</kbd><kbd>s</kbd></td>
							<td><samp>ཨིམས</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>n</kbd></td>
							<td><samp>ཨིན</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>ཨིང</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>n</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨིངས</samp></td>
						</tr>

						<tr>
							<td><kbd>i</kbd><kbd>r</kbd></td>
							<td><samp>ཨིར</samp></td>
						</tr>
						<tr>
							<td><kbd>i</kbd><kbd>s</kbd></td>
							<td><samp>ཨིས</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>i'</td>
						</tr>				
						<tr>
							<td><kbd>i</kbd><kbd>'</kbd><kbd>a</kbd><kbd>m</kbd></td>
							<td><samp>ིའམ</samp></td>
						</tr>	
						<tr>
							<td><kbd>i</kbd><kbd>'</kbd><kbd>i</kbd></td>
							<td><samp>ིའི</samp></td>
						</tr>	
						<tr>
							<td><kbd>i</kbd><kbd>'</kbd><kbd>o</kbd></td>
							<td><samp>ིའོ</samp></td>
						</tr>			
						<tr>
							<td><kbd>i</kbd><kbd>'</kbd><kbd>u</kbd></td>
							<td><samp>ིའུ</samp></td>
						</tr>								
						<tr class='headrow'>
							<td colspan='2'>o</td>
						</tr>	
						<tr>
							<td><kbd>o</kbd></td>
							<td><samp>ཨོ</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>b</kbd></td>
							<td><samp>ཨོབ</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>b</kbd><kbd>s</kbd></td>
							<td><samp>ཨོབས</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>d</kbd></td>
							<td><samp>ཨོད</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>g</kbd></td>
							<td><samp>ཨོག</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨོགས</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>l</kbd></td>
							<td><samp>ཨོལ</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>m</kbd></td>
							<td><samp>ཨོམ</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>m</kbd><kbd>s</kbd></td>
							<td><samp>ཨོམས</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>n</kbd></td>
							<td><samp>ཨོན</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>ཨོང</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>n</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨོངས</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>r</kbd></td>
							<td><samp>ཨོར</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>s</kbd></td>
							<td><samp>ཨོས</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>o'</td>
						</tr>	
						<tr>
							<td><kbd>o</kbd><kbd>'</kbd><kbd>a</kbd><kbd>m</kbd></td>
							<td><samp>ོའམ</samp></td>
						</tr>
						<tr>
							<td><kbd>o</kbd><kbd>'</kbd><kbd>i</kbd></td>
							<td><samp>ོའ</samp></td>
						</tr>	
						<tr>
							<td><kbd>o</kbd><kbd>'</kbd><kbd>o</kbd></td>
							<td><samp>ོའོ</samp></td>
						</tr>	
						<tr>
							<td><kbd>o</kbd><kbd>'</kbd><kbd>u</kbd></td>
							<td><samp>ོའུ</samp></td>
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
							<td colspan='2'>U</td>
						</tr>	
						<tr>
							<td><kbd>U</kbd></td>
							<td><samp>ཨཱུ</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>u</td>
						</tr>	
						<tr>
							<td><kbd>u</kbd></td>
							<td><samp>ཨུ</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>b</kbd></td>
							<td><samp>ཨུབ</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>b</kbd><kbd>s</kbd></td>
							<td><samp>ཨུབས</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>d</kbd></td>
							<td><samp>ཨུད</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>g</kbd></td>
							<td><samp>ཨུག</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨུགས</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>l</kbd></td>
							<td><samp>ཨུལ</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>m</kbd></td>
							<td><samp>ཨུམ</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>m</kbd><kbd>s</kbd></td>
							<td><samp>ཨུམས</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>n</kbd></td>
							<td><samp>ཨུན</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>ཨུངས</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>n</kbd><kbd>g</kbd><kbd>s</kbd></td>
							<td><samp>ཨུངས</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>r</kbd></td>
							<td><samp>ཨུར</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>s</kbd></td>
							<td><samp>ཨུས</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>t</kbd></td>
							<td><samp>ཨུཏ</samp></td>
						</tr>	
						<tr class='headrow'>
							<td colspan='2'>u'</td>
						</tr>	
						<tr>
							<td><kbd>u</kbd><kbd>'</kbd><kbd>a</kbd><kbd>m</kbd></td>
							<td><samp>ུའམ</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>'</kbd><kbd>a</kbd><kbd>n</kbd><kbd>g</kbd></td>
							<td><samp>ུའང</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>'</kbd><kbd>i</kbd></td>
							<td><samp>ུའི</samp></td>
						</tr>	
						<tr>
							<td><kbd>u</kbd><kbd>'</kbd><kbd>o</kbd></td>
							<td><samp>ུའོ</samp></td>
						</tr>
						<tr>
							<td><kbd>u</kbd><kbd>'</kbd><kbd>u</kbd></td>
							<td><samp>ུའུ</samp></td>
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
		<section id='stacks'>
			<h4>Long Stacks</h4>
			<p>To create a Tibetan long stack, type <kbd>+</kbd> before typing the subjoined character. If a tsheg is present, you will need to clear it by typing <kbd>Space</kbd>. You may make a stack as long as you like.</p>
			<p class='example'><b>Example:</b> type <kbd>s</kbd><kbd>a</kbd><kbd>Space</kbd><kbd>Space</kbd><kbd>+</kbd><kbd>k</kbd><kbd>Space</kbd><kbd>+</kbd><kbd>y</kbd><kbd>Space</kbd><kbd>e</kbd><kbd>Space</kbd> to get <samp>སྐྱེ་</samp>.</p>
		</section>
		<section id='symbols'>
			<h4>Basic Symbols</h4>
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
							<td><kbd>Alt</kbd><kbd>1</kbd></td>
							<td><samp>༡</samp></td>
						</tr>	
						<tr>
							<td><kbd>Alt</kbd><kbd>2</kbd></td>
							<td><samp>༢</samp></td>
						</tr>	
						<tr>
							<td><kbd>Alt</kbd><kbd>3</kbd></td>
							<td><samp>༣</samp></td>
						</tr>	
						<tr>
							<td><kbd>Alt</kbd><kbd>4</kbd></td>
							<td><samp>༤</samp></td>
						</tr>	
						<tr>
							<td><kbd>Alt</kbd><kbd>5</kbd></td>
							<td><samp>༥</samp></td>
						</tr>	
						<tr>
							<td><kbd>Alt</kbd><kbd>6</kbd></td>
							<td><samp>༦</samp></td>
						</tr>	
						<tr>
							<td><kbd>Alt</kbd><kbd>7</kbd></td>
							<td><samp>༧</samp></td>
						</tr>	
						<tr>
							<td><kbd>Alt</kbd><kbd>8</kbd></td>
							<td><samp>༨</samp></td>
						</tr>	
						<tr>
							<td><kbd>Alt</kbd><kbd>9</kbd></td>
							<td><samp>༩</samp></td>
						</tr>	
						<tr>
							<td><kbd>Alt</kbd><kbd>0</kbd></td>
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
							<td colspan='2'>Punctuation</td>
						</tr>					
						<tr>
							<td><kbd>:</kbd></td>
							<td><samp>༔</samp></td>
						</tr>					
						<tr>
							<td><kbd>Space</kbd></td>
							<td><samp>་</samp></td>
						</tr>	
						<tr>
							<td><kbd>/</kbd></td>
							<td><samp>།</samp></td>
						</tr>				
						<tr>
							<td><kbd>/</kbd><kbd>/</kbd></td>
							<td><samp>།།</samp></td>
						</tr>	
						<tr>
							<td><kbd>;</kbd></td>
							<td><samp>༏</samp></td>
						</tr>	
						<tr>
							<td><kbd>[</kbd></td>
							<td><samp>༐</samp></td>
						</tr>	
						<tr>
							<td><kbd>|</kbd></td>
							<td><samp>༑</samp></td>
						</tr>	
						<tr>
							<td><kbd>!</kbd></td>
							<td><samp>༈</samp></td>
						</tr>	
						<tr>
							<td><kbd>]</kbd></td>
							<td><samp>༒</samp></td>
						</tr>
						<tr>
							<td><kbd>`</kbd></td>
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
							<td><kbd>=</kbd></td>
							<td><samp>༴</samp></td>
						</tr>					
						<tr>
							<td><kbd>&lt;</kbd></td>
							<td><samp>༺</samp></td>
						</tr>					
						<tr>
							<td><kbd>&gt;</kbd></td>
							<td><samp>༻</samp></td>
						</tr>					
						<tr>
							<td><kbd>(</kbd></td>
							<td><samp>༼</samp></td>
						</tr>					
						<tr>
							<td><kbd>)</kbd></td>
							<td><samp>༽</samp></td>
						</tr>
						<tr>
							<td><kbd>&amp;</kbd></td>
							<td><samp>྅</samp></td>
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
							<td colspan='2'>Diacritics</td>
						</tr>					
						<tr>
							<td><kbd>~</kbd></td>
							<td><samp>ྃ</samp></td>
						</tr>
						<tr>
							<td><kbd>[</kbd></td>
							<td><samp>༾</samp></td>
						</tr>
						<tr>
							<td><kbd>]</kbd></td>
							<td><samp>༿</samp></td>
						</tr>	
						<tr>
							<td><kbd>?</kbd></td>
							<td><samp>྄</samp></td>
						</tr>
						<tr class='headrow'>
							<td colspan='2'>Other</td>
						</tr>					
						<tr>
							<td><kbd>_</kbd></td>
							<td style='height:64px;'>White Space</td>
						</tr>				
					</tbody>
				</table>
			</article>	
		</section>
	</section>
	<section id='sym' class='break'>
		<h3>Typing Extended Tibetan Symbols Using Menus</h3>
		<p>Tibetan Unicode EWTS includes menus to make it easier to type extended Tibetan symbols. To pull up a menu, type <kbd>\</kbd> and the name of the menu. Then select a menu item by typing the number of the item.</p>
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
						<td><samp style='font-size:17pt;'>[1 LOGO  2 ASTR  3 HALF  4 CANT  5 SYMB]</samp></td>
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
					<tr class='headrow'>
						<td colspan='2'>Half-digits Menu</td>
					</tr>						
					<tr>
						<td><kbd>\</kbd><kbd>H</kbd><kbd>A</kbd><kbd>L</kbd><kbd>F</kbd></td>
						<td><samp>[1༪ 2༫ 3༬ 4༭ 5༮ 6༯ 7༰ 8༱ 9༲ 0༳]</samp></td>
					</tr>
				</tbody>
			</table>
		</article>
	</section>
	<section id='hex' class='break'>
		<h3>Typing Unicode Characters Using Hex Codes</h3>
		<p>You can directly input <a href='http://unicode.org/charts/' target='_blank'>Unicode characters</a> with this keyboard using <kbd>\</kbd> plus the Unicode codepoint hex value. This is especially helpful for typing Tibetan characters not otherwise included in this keyboard.</p>
		<p class='example'><b>Example:</b> type <kbd>\</kbd><kbd>0</kbd><kbd>f</kbd><kbd>d</kbd><kbd>1</kbd> for <samp>࿑</samp>.</p>
		<p>Unicode input is not limited to Tibetan characters</p>
		<p class='example'><b>Example:</b> type <kbd>\</kbd><kbd>2</kbd><kbd>6</kbd><kbd>1</kbd><kbd>5</kbd> for ☕.</p>	
	</section>
	<section id='lat' class='break'>
		<h3>Typing Latin</h3>
		<p>Press the <kbd>Esc</kbd> key to enter Latin mode and type Latin characters while using this keyboard. A <samp>&gt;</samp> symbol indicates the change into Latin mode and disappears when you start typing. The Latin mode keyboard follows the Windows US layout.</p> 
		<p class='example'><b>Example:</b> type <kbd>b</kbd><kbd>k</kbd><kbd>r</kbd><kbd>i</kbd><kbd>Space</kbd><kbd>Esc</kbd><kbd>=</kbd><kbd>Space</kbd><kbd>b</kbd><kbd>k</kbd><kbd>r</kbd><kbd>i</kbd> to get <samp>བཀྲི་  = bkri</samp>.</p>		
		<p>To leave Latin mode, press <kbd>Esc</kbd> again.</p>
	</section>
	<section id='cyr' class='break'>
		<h3 >Typing Cyrillic</h3>
		<p>Press <kbd>Esc</kbd><kbd>Esc</kbd> to enter Cyrillic mode and type Cyrillic characters while using this keyboard. A <samp>&gt;&gt;</samp> symbol indicates the change into Cyrillic mode and disappears when you start typing. Cyrillic mode uses the layout below. To leave Cyrillic mode, press <kbd>Esc</kbd> again.</p>
	</section>
  </section>	
  <h2>Language Example</h2>
<?php renderLanguageExamples(); ?>