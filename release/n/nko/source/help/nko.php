<?php /*
  Name:             keyboard_nko
  Copyright:        Copyright (C) 2012 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      01 Jun 2012

  Modified Date:    01 Jun 2012
  Authors:          pbaehr, mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          01 Jun 2012 - pbaehr - Generate documentation from Keyman Desktop documentation
*/
  $pagename = "N'Ko Phonetic Keyboard Help";
  $pagetitle = "N'Ko Phonetic Keyboard Help";
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

section {clear:left;}

article{clear:left; margin-bottom:60px;}

/* Headers */
h1, h2, h3{color: #AD4A28; font-weight: bold;clear:left;}

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
samp{font-family: Conakry, Ebrima; color:blue;}
kbd {color:black;}

/* Printing */
.break {page-break-before:always !important;}	

/*
===========
==Welcome==
===========
*/
/* Notes (Asides) */
aside {clear:both; background-color:#eee;border:2px solid #ddd;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;margin:10px 0px; padding:0px 10px 5px;font-size:10pt;}
aside h4 {color:#AD4A28; text-align:left;padding:0px 0px 5px;margin-top:5px;font-size:11pt;}
aside p {font-size:10pt;}
aside kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px;  padding:2px 4px; vertical-align:middle; line-height:2em; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}

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
 
<body>
  <p>Keyboard &#169; 2012-2020 Michael Everson and SIL International</p>
  <section id='overview'>
	<h2>Overview</h2>
	<p>This keyboard is designed for the N'Ko script of West Africa. The keyboard has been developed to make it easy to type all of the letters and diacritics necessary for N'Ko. This keyboard is fully compliant with the <a href='http://unicode.org/standard/standard.html'>Unicode Standard</a>.</p>
	<h4>Basic Function</h4>
	<p>This keyboard is phonetic. Most N'Ko characters can be found by typing an equivalent Latin letter. For example, typing <kbd>d</kbd> produces <samp>ߘ</samp>. Some N'Ko characters require keyboard combinations. For example, type <kbd>n</kbd><kbd>y</kbd> to get <samp>ߢ</samp>. Archaic characters can be typed by following the letter with a <kbd>/</kbd>. For example, for <samp>ߪ</samp> type <kbd>r</kbd><kbd>/</kbd>. Finally, tone marks are typed <b>before</b> the base letter.</p>
	<h4>On Screen Keyboard</h4>
	<p>This keyboard includes an On Screen Keyboard view for easy reference. The On Screen Keyboard works best when associated with a QWERTY US layout.</p>
  
  <h2>Using the N'Ko keyboard on Android</h2>
  <p>April 2015: Android 4.x series does not support N'Ko in the system. This means that you can display N'Ko in the Keyman Pro app and in the Keyman Browser, but not in other apps in the system. Furthermore, the current release of Keyman Pro will not join the N'Ko letters together. This may be supported in a future version of the app.</p>

  <h2>Using the N'Ko keyboard on iPhone or iPad</h2>
  <p>April 2015: iOS 8.1 and later releases do support the N'Ko font so N'Ko will display in all apps, correctly joined, once the font is installed. Follow the prompts to install the font when you install the keyboard.</p>
  
  </section>
  <section id='layout' class='break'>
    <div id='osk-container'>
      <h2>Desktop Keyboard Layout</h2>
      <div id='osk' data-states='default shift'></div>
    </div>
  </section>
  <section id='guide' class='break'>
	<h2>Typing Guide</h2>
	<p>This typing guide is based on <a href='http://unicode.org/charts/PDF/U07C0.pdf'>the Unicode code chart for N'KO</a>.</p>
	<table class='grid colleft'>
		<col class='char' />
		<col class='keys' />
		<col class='point' />		
		<col class='name' />	
		<thead>		
			<tr>
				<th>Character</th>
				<th>Keys</th>
				<th>Codepoint</th>
				<th>Unicode Name</th>
			</tr>
		</thead>
		<tbody>
			<tr class='headrow'>
				<td colspan='4'>Digits</td>
			</tr>	
			<tr>
				<td><samp>߀</samp></td>
				<td><kbd>0</kbd></td>
				<td>U+07C0</td>
				<td>NKO DIGIT ZERO</td>
			</tr>
			<tr>
				<td><samp>߁</samp></td>
				<td><kbd>1</kbd></td>
				<td>U+07C1</td>
				<td>NKO DIGIT ONE</td>
			</tr>			
			<tr>
				<td><samp>߂</samp></td>
				<td><kbd>2</kbd></td>
				<td>U+07C2</td>
				<td>NKO DIGIT TWO</td>
			</tr>	
			<tr>
				<td><samp>߃</samp></td>
				<td><kbd>3</kbd></td>
				<td>U+07C3</td>
				<td>NKO DIGIT THREE</td>
			</tr>
			<tr>
				<td><samp>߄</samp></td>
				<td><kbd>4</kbd></td>
				<td>U+07C4</td>
				<td>NKO DIGIT FOUR</td>
			</tr>
			<tr>
				<td><samp>߅</samp></td>
				<td><kbd>5</kbd></td>
				<td>U+07C5</td>
				<td>NKO DIGIT FIVE</td>
			</tr>
			<tr>
				<td><samp>߆</samp></td>
				<td><kbd>6</kbd></td>
				<td>U+07C6</td>
				<td>NKO DIGIT SIX</td>
			</tr>
			<tr>
				<td><samp>߇</samp></td>
				<td><kbd>7</kbd></td>
				<td>U+07C7</td>
				<td>NKO DIGIT SEVEN</td>
			</tr>
			<tr>
				<td><samp>߈</samp></td>
				<td><kbd>8</kbd></td>
				<td>U+07C8</td>
				<td>NKO DIGIT EIGHT</td>
			</tr>
			<tr>
				<td><samp>߉</samp></td>
				<td><kbd>9</kbd></td>
				<td>U+07C9</td>
				<td>NKO DIGIT NINE</td>
			</tr>
			<tr class='headrow'>
				<td colspan='4'>Letters</td>
			</tr>	
			<tr>
				<td><samp>ߊ</samp></td>
				<td><kbd>a</kbd></td>
				<td>U+07CA</td>
				<td>NKO LETTER A</td>
			</tr>		
			<tr>
				<td><samp>ߋ</samp></td>
				<td><kbd>E</kbd></td>
				<td>U+07CB</td>
				<td>NKO LETTER EE</td>
			</tr>		
			<tr>
				<td><samp>ߌ</samp></td>
				<td><kbd>i</kbd></td>
				<td>U+07CC</td>
				<td>NKO LETTER I</td>
			</tr>		
			<tr>
				<td><samp>ߍ</samp></td>
				<td><kbd>e</kbd></td>
				<td>U+07CD</td>
				<td>NKO LETTER E</td>
			</tr>		
			<tr>
				<td><samp>ߎ</samp></td>
				<td><kbd>u</kbd></td>
				<td>U+07CE</td>
				<td>NKO LETER U</td>
			</tr>		
			<tr>
				<td><samp>ߏ</samp></td>
				<td><kbd>O</kbd></td>
				<td>U+07CF</td>
				<td>NKO LTTER OO</td>
			</tr>		
			<tr>
				<td><samp>ߐ</samp></td>
				<td><kbd>o</kbd></td>
				<td>U+07D0</td>
				<td>NKO LETTER O</td>
			</tr>		
			<tr>
				<td><samp>ߑ</samp></td>
				<td><kbd>`</kbd></td>
				<td>U+07D1</td>
				<td>NKO LETTER DAGBASINNA</td>
			</tr>		
			<tr>
				<td><samp>ߒ</samp></td>
				<td><kbd>N</kbd></td>
				<td>U+07D2</td>
				<td>NKO LETTER N</td>
			</tr>		
			<tr>
				<td><samp>ߓ</samp></td>
				<td><kbd>b</kbd></td>
				<td>U+07D3</td>
				<td>NKO LETTER BA</td>
			</tr>		
			<tr>
				<td><samp>ߔ</samp></td>
				<td><kbd>p</kbd></td>
				<td>U+07D4</td>
				<td>NKO LETTER PA</td>
			</tr>		
			<tr>
				<td><samp>ߕ</samp></td>
				<td><kbd>t</kbd></td>
				<td>U+07D5</td>
				<td>NKO LETTER TA</td>
			</tr>		
			<tr>
				<td><samp>ߖ</samp></td>
				<td><kbd>j</kbd></td>
				<td>U+07D6</td>
				<td>NKO LETTER JA</td>
			</tr>		
			<tr>
				<td><samp>ߗ</samp></td>
				<td><kbd>c</kbd></td>
				<td>U+07D7</td>
				<td>NKO LETTER CHA</td>
			</tr>		
			<tr>
				<td><samp>ߘ</samp></td>
				<td><kbd>d</kbd></td>
				<td>U+07D8</td>
				<td>NKO LETTER DA</td>
			</tr>		
			<tr>
				<td><samp>ߙ</samp></td>
				<td><kbd>r</kbd></td>
				<td>U+07D9</td>
				<td>NKO LETTER RA</td>
			</tr>		
			<tr>
				<td><samp>ߚ</samp></td>
				<td><kbd>R</kbd></td>
				<td>U+07DA</td>
				<td>NKO LETTER RRA</td>
			</tr>		
			<tr>
				<td><samp>ߛ</samp></td>
				<td><kbd>s</kbd></td>
				<td>U+07DB</td>
				<td>NKO LETTER SA</td>
			</tr>		
			<tr>
				<td><samp>ߜ</samp></td>
				<td><kbd>g</kbd></td>
				<td>U+07DC</td>
				<td>NKO LETTER GBA</td>
			</tr>		
			<tr>
				<td><samp>ߝ</samp></td>
				<td><kbd>f</kbd></td>
				<td>U+07DD</td>
				<td>NKO LETTER FA</td>
			</tr>		
			<tr>
				<td><samp>ߞ</samp></td>
				<td><kbd>k</kbd></td>
				<td>U+07DE</td>
				<td>NKO LETTER KA</td>
			</tr>		
			<tr>
				<td><samp>ߟ</samp></td>
				<td><kbd>l</kbd></td>
				<td>U+07DF</td>
				<td>NKO LETTER LA</td>
			</tr>		
			<tr>
				<td><samp>ߠ</samp></td>
				<td><kbd>n</kbd><kbd>n</kbd></td>
				<td>U+07E0</td>
				<td>NKO LETTER <br/>NA WOLOSO</td>
			</tr>		
			<tr>
				<td><samp>ߡ</samp></td>
				<td><kbd>m</kbd></td>
				<td>U+07E1</td>
				<td>NKO LETTER MA</td>
			</tr>		
			<tr>
				<td><samp>ߢ</samp></td>
				<td><kbd>n</kbd><kbd>y</kbd></td>
				<td>U+07E2</td>
				<td>NKO LETTER NYA</td>
			</tr>		
			<tr>
				<td><samp>ߣ</samp></td>
				<td><kbd>n</kbd></td>
				<td>U+07E3</td>
				<td>NKO LETTER NA</td>
			</tr>		
			<tr>
				<td><samp>ߤ</samp></td>
				<td><kbd>h</kbd></td>
				<td>U+07E4</td>
				<td>NKO LETTER HA</td>
			</tr>		
			<tr>
				<td><samp>ߥ</samp></td>
				<td><kbd>w</kbd></td>
				<td>U+07E5</td>
				<td>NKO LETTER WA</td>
			</tr>		
			<tr>
				<td><samp>ߦ</samp></td>
				<td><kbd>y</kbd></td>
				<td>U+07E6</td>
				<td>NKO LETTER YA</td>
			</tr>	
			<tr>
				<td><samp>ߧ</samp></td>
				<td><kbd>n</kbd><kbd>y</kbd><kbd>w</kbd></td>
				<td>U+07E7</td>
				<td>NKO LETTER <br/>NYA WOLOSO</td>
			</tr>	
		</tbody>		
	</table>
	<table class='grid colright'>
		<col class='char' />
		<col class='keys' />
		<col class='point' />		
		<col class='name' />	
		<thead>
			<tr>
				<th>Character</th>
				<th>Keys</th>
				<th>Codepoint</th>
				<th>Unicode Name</th>
			</tr>
		</thead>
		<tbody>
			<tr class='headrow'>
				<td colspan='4'>Archaic Letters</td>
			</tr>
			<tr>
				<td><samp>ߨ</samp></td>
				<td><kbd>j</kbd><kbd>/</kbd></td>
				<td>U+07E8</td>
				<td>NKO LETTER <br/>JONA JA</td>
			</tr>	
			<tr>
				<td><samp>ߩ</samp></td>
				<td><kbd>c</kbd><kbd>/</kbd></td>
				<td>U+07E9</td>
				<td>NKO LETTER <br/>JONA CHA</td>
			</tr>	
			<tr>
				<td><samp>ߪ</samp></td>
				<td><kbd>r</kbd><kbd>/</kbd></td>
				<td>U+07EA</td>
				<td>NKO LETTER <br/>JONA RA</td>
			</tr>	
			<tr class='headrow'>
				<td colspan='4'>Tone Marks</td>
			</tr>	
			<tr>
				<td><samp>߫</samp></td>
				<td><kbd>-</kbd></td>
				<td>U+07EB</td>
				<td>NKO COMBINING <br/>SHORT HIGH TONE</td>
			</tr>		
			<tr>
				<td><samp>߬</samp></td>
				<td><kbd>~</kbd></td>
				<td>U+07EC</td>
				<td>NKO COMBINING <br/>SHORT LOW TONE</td>
			</tr>	
			<tr>
				<td><samp>߭</samp></td>
				<td><kbd>^</kbd><kbd>.</kbd></td>
				<td>U+07ED</td>
				<td>NKO COMBINING <br/>SHORT RISING TONE</td>
			</tr>	
			<tr>
				<td><samp>߮</samp></td>
				<td><kbd>^</kbd></td>
				<td>U+07EE</td>
				<td>NKO COMBINING <br/>LONG DESCENDING TONE</td>
			</tr>	
			<tr>
				<td><samp>߯</samp></td>
				<td><kbd>&gt;</kbd></td>
				<td>U+07EF</td>
				<td>NKO COMBINING <br/>LONG HIGH TONE</td>
			</tr>	
			<tr>
				<td><samp>߰</samp></td>
				<td><kbd>#</kbd></td>
				<td>U+07F0</td>
				<td>NKO COMBINING <br/>LONG LOW TONE</td>
			</tr>	
			<tr>
				<td><samp>߱</samp></td>
				<td><kbd>&lt;</kbd></td>
				<td>U+07F1</td>
				<td>NKO COMBINING <br/>LONG RISING TONE</td>
			</tr>	
			<tr>
				<td><samp>߲</samp></td>
				<td><kbd>.</kbd></td>
				<td>U+07F2</td>
				<td>NKO COMBINING <br/>NASALIZATION MARK</td>
			</tr>			
			<tr>
				<td><samp>߳</samp></td>
				<td><kbd>%</kbd></td>
				<td>U+07F3</td>
				<td>NKO COMBINING <br/>DOUBLE DOT ABOVE</td>
			</tr>	
			<tr>
				<td><samp>ߴ</samp></td>
				<td><kbd>'</kbd></td>
				<td>U+07F4</td>
				<td>NKO HIGH TONE <br/>APOSTROPHE</td>
			</tr>	
			<tr>
				<td><samp>ߵ</samp></td>
				<td><kbd>"</kbd></td>
				<td>U+07F5</td>
				<td>NKO LOW TONE <br/>APOSTROPHE</td>
			</tr>	
			<tr class='headrow'>
				<td colspan='4'>Symbol</td>
			</tr>	
			<tr>
				<td><samp>߶</samp></td>
				<td><kbd>/</kbd></td>
				<td>U+07F6</td>
				<td>NKO SYMBOL <br/>OO DENNEN</td>
			</tr>			
			<tr class='headrow'>
				<td colspan='4'>Punctuation</td>
			</tr>	
			<tr>
				<td><samp>߷</samp></td>
				<td><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd></td>
				<td>U+07F7</td>
				<td>NKO SYMBOL <br/>GBAKURUNEN</td>
			</tr>	
			<tr>
				<td><samp>߸</samp></td>
				<td><kbd>,</kbd></td>
				<td>U+07F8</td>
				<td>NKO COMMA</td>
			</tr>	
			<tr>
				<td><samp>߹</samp></td>
				<td><kbd>!</kbd></td>
				<td>U+07F9</td>
				<td>NKO <br/>EXCLAMATION MARK</td>
			</tr>			
			<tr class='headrow'>
				<td colspan='4'>Letter Extender</td>
			</tr>
			<tr>
				<td><samp>ߺ</samp></td>
				<td><kbd>,</kbd><kbd>/</kbd></td>
				<td>U+07FA</td>
				<td>NKO LAJANYALAN</td>
			</tr>		
		</tbody>
	</table>
   </section>	
   
