<?php
  $pagename = 'Galaxie Hebrew (Mnemonic) Keyboard Help';
  $pagetitle = 'Galaxie Hebrew (Mnemonic) Keyboard Help';
  $pagestyle = <<<END
        table {border-collapse:collapse !important; margin:10px 0px 20px 40px;}
        .grid col {background-color:#ffffff;}
        col.name   {width:100px;}
        col.char   {width:85px;}
        col.kbd     {width:120px;}
        .grid td, .grid th {padding:2px 5px;border-bottom:1px solid #ddd;}
        .grid tr {text-align:center; font-weight:normal; height:80px;}
        .grid thead tr{height:30px;}
        .grid .headrow {font-weight:bold; color:#AD4A28; background-color:#eee; text-align:left;}
        .columns {width:560px; -webkit-column-count: 3; -webkit-column-gap: 13px; -moz-column-count: 3; -moz-column-gap: 13px; column-count: 3; column-gap: 13px;}
        .columns2 {width:375px; -webkit-column-count: 2; -webkit-column-gap: 10px; -moz-column-count: 2; -moz-column-gap: 10px; column-count: 2; column-gap: 10px;}
        .button {text-decoration: none !important; margin:0px 1px; padding:1px 2px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; white-space: nowrap; color: #2D2C2C !important; border:solid 1px #707070; background: #D4D4D4; background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.15, #F2F2F2), color-stop(0.47, #EBEBEB), color-stop(0.48, #DDDDDD), color-stop(0.9, #CFCFCF)); background-image: -webkit-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: -moz-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: -ms-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: -o-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%);}
        .button:hover {background: #BEE6FD; background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.15, #EAF6FD), color-stop(0.47, #D9F0FC), color-stop(0.48, #BEE6FD), color-stop(0.9, #A7D8F5)); background-image: -webkit-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: -moz-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: -ms-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: -o-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%);}
        .lang2,.languageExample {font-family:"Gentium Plus"; color:blue; }
        .lang2 {font-size:150%; line-height:1em;}
        .hebrew .lang2, .hebrew .languageExample {font-family:"Ezra SIL";}
        .keys {border-style:solid; color:black; border-width:1px 1px 2px; border-color: #6B6867 #6B6867 #111111; background:#dddddd; margin:0px 1px; padding:2px 3px; line-height:30px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;}
        .welcome {float:left; width:385px; height:540px;border:1px solid #dddddd;padding:8px 15px; margin-top:20px;margin-left:5px;}
        .right {}
        #osk_tabsheets { border: solid 1px #ad4a28; margin: 0 4px 4px 4px; background: white; z-index: 101; }
        .osk_tabsheet_selected { display: block; padding: 2px 10px 12px; width: 561px; border: solid 1px #ad4a28;-webkit-border-radius: 0px 4px 4px; -moz-border-radius: 0px 4px 4px; border-radius: 0px 4px 4px;}
        .osk_tabsheet { display: none; }
        #osk_tabs { margin: 4px 4px 0px 0px; z-index: 100; }
        .osk_tab { background: white; color: #ad4a28; border: solid 1px #ad4a28; display: inline; padding: 2px 5px 0px 5px; height: 17px; -webkit-border-radius: 4px 4px 0px 0px; -moz-border-radius: 4px 4px 0px 0px; border-radius: 4px 4px 0px 0px;cursor:pointer;}
        .osk_tab_selected { background: white; color: #ad4a28; border: solid 1px #ad4a28; display: inline; padding: 2px 5px 1px; border-bottom: none; margin-top: -1px; height: 19px;-webkit-border-radius: 4px 4px 0px 0px; -moz-border-radius: 4px 4px 0px 0px; border-radius: 4px 4px 0px 0px;cursor:pointer;}
        .key { float: left;display: block;position: relative;overflow: hidden;height: 35px;    margin: 2px 0px 0px 2px;    border: solid 1px grey;    -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
        #K_BKQUOTE {width:34px;}
        #K_BKSP {width: 60px;}
        #K_TAB {width: 52px;}
        #K_BKSLASH {width: 42px;}
        #K_CAPS {width: 62px;}
        #K_ENTER {width: 70px;}		
        #K_ENTER-EU1 {width: 42px;-webkit-border-radius: 3px 3px 0px; -moz-border-radius: 3px 3px 0px; border-radius: 3px 3px 0px;}
        #K_ENTER-EU1 .keycap {left:3px !important;}   
        #K_ENTER-EU2 {width: 32px;margin-top:-1px !important;border-top:none !important;height:39px !important;-webkit-border-radius: 0px 0px 3px 3px; -moz-border-radius: 0px 0px 3px 3px; border-radius: 0px 0px 3px 3px;}		
        #K_SHIFTL {width: 85px;}                
        #K_SHIFTL-EU {width: 47px;}    
        #K_oE2 {display:none;}     
        #K_SHIFTR {width: 85px;}   			
        #K_CTRLL {width: 60px;} 		
        #K_ALTL {width: 50px;}   
        #K_SPACE {width: 234px;} 
        #K_ALTR {width: 50px;} 
        #K_CTRLR {width: 60px;} 			
        .plain {background-repeat: no-repeat;width: 34px;}
        .special {background-repeat: no-repeat;background: #c0c0c0;}
        .keycap {font: bold 7pt Arial;position: absolute;left: 6px;top: 6px;}
        .key .keycap {display: block;}
        .special .keycap {display: block;}
        .keytext {font:	19px "Gentium Plus";position: absolute;display: block;right: 5px;bottom: 0px;color: blue;}
        .keytext.LTN {font-size:12px !important;color: #AD4A28 !important;right:3px !important;}
        .hebrew .keytext {font-family:"Ezra SIL";}
        .hebrew .diacritic {font-size:30px;color:green;right:15px;bottom:-6px;}
        .hebrew .top {bottom:-12px !important;}
        .hebrew .bot{bottom:2px !important;}
END;
  require_once('header.php');
?>

<br/>
	<a href="#Overview">Overview</a><br/>
	<a href="#UsingGreek">Hebrew Keyboard</a><br/>
	<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
	<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
	<a style='margin-left:20px' href="#Examples">Examples</a><br/>
	<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
	<a href="#Technical">Technical Information</a><br/>
	<a style='margin-left:20px' href="#Author">Authorship</a><br/>

<div id='Overview'>
	<h2>Overview</h2>
	<p>This Keyman keyboard is designed for Biblical Hebrew, a Semitic language of the ancient Near East and the language of the Hebrew Bible. It is a mnemonic Keyman keyboard. This means that the arrangement of the letters in the Keyman keyboard will depend on the order of the keys on your hardware layout.</p>

	<p>This keyboard has been optimised for use with the following hardware layouts:</p>
	<ul class='columns'>
		<li>AZERTY French</li>
		<li>QWERTY UK</li>
		<li>QWERTY US</li>
		<li>QWERTZ German</li>
	</ul>	

	<p>This keyboard includes an On Screen Keyboard view, which displays best on a QWERTY US layout.</p>

	<p>This keyboard works with standard Unicode fonts.</p>

</div>
<div id='UsingGreek'  class='break'>
	<h2>Keyboard Layout</h2>

	<div id='osk_tabs'>
	  <div class='osk_tab_selected' id='osk_us_tab'><b>QWERTY US</b></div>
	  <div class='osk_tab' id='osk_uk_tab'><b>QWERTY UK</b></div>
	  <div class='osk_tab' id='osk_fr_tab'><b>AZERTY</b></div>
	  <div class='osk_tab' id='osk_de_tab'><b>QWERTZ</b></div>  
	</div>

	<div class='osk_tabsheets'>
		<div class='osk_tabsheet_selected' id='osk_us_tabsheet'>
			<h3 style="clear:left">QWERTY US : Unshifted</h3>
			<div class="key plain" id="K_BKQUOTE">
			<div class="keycap">`</div>
			<div class="keytext top diacritic">֫ </div>
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
			<div class="keytext">־</div>
			</div>
			<div class="key plain" id="K_EQUAL">
			<div class="keycap">=</div>
			<div class="keytext bot diacritic">ְ </div>
			</div>
			<div class="key special" id="K_BKSP">
			<div class="keycap">Backspace</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_TAB">
			<div class="keycap">Tab</div>
			</div>
			<div class="key plain" id="K_Q">
			<div class="keycap">q</div>
			<div class="keytext">ק</div>
			</div>
			<div class="key plain" id="K_W">
			<div class="keycap">w</div>
			<div class="keytext">ו</div>
			</div>
			<div class="key plain" id="K_E">
			<div class="keycap">e</div>
			<div class="keytext">ךֵ</div>
			</div>
			<div class="key plain" id="K_R">
			<div class="keycap">r</div>
			<div class="keytext">ר</div>
			</div>
			<div class="key plain" id="K_T">
			<div class="keycap">t</div>
			<div class="keytext">ת</div>
			</div>
			<div class="key plain" id="K_Y">
			<div class="keycap">y</div>
			<div class="keytext">י</div>
			</div>
			<div class="key plain" id="K_U">
			<div class="keycap">u</div>
			<div class="keytext">ע</div>
			</div>
			<div class="key plain" id="K_I">
			<div class="keycap">i</div>
			<div class="keytext">ך</div>
			</div>
			<div class="key plain" id="K_O">
			<div class="keycap">o</div>
			<div class="keytext">וֹ</div>
			</div>
			<div class="key plain" id="K_P">
			<div class="keycap">p</div>
			<div class="keytext">פ</div>
			</div>
			<div class="key plain" id="K_LBRKT">
			<div class="keycap">[</div>
			<div class="keytext">ף</div>
			</div>
			<div class="key plain" id="K_RBRKT">
			<div class="keycap">]</div>
			<div class="keytext">ש</div>
			</div>
			<div class="key plain" id="K_BKSLASH">
			<div class="keycap">\</div>
			<div class="keytext bot diacritic">ֽ </div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_CAPS">
			<div class="keycap">Caps Lock</div>
			</div>
			<div class="key plain" id="K_A">
			<div class="keycap">a</div>
			<div class="keytext">א</div>
			</div>
			<div class="key plain" id="K_S">
			<div class="keycap">s</div>
			<div class="keytext">ס</div>
			</div>
			<div class="key plain" id="K_D">
			<div class="keycap">d</div>
			<div class="keytext">ד</div>
			</div>
			<div class="key plain" id="K_F">
			<div class="keycap">f</div>
			<div class="keytext">ט</div>
			</div>
			<div class="key plain" id="K_G">
			<div class="keycap">g</div>
			<div class="keytext">ג</div>
			</div>
			<div class="key plain" id="K_H">
			<div class="keycap">h</div>
			<div class="keytext">ה</div>
			</div>
			<div class="key plain" id="K_J">
			<div class="keycap">j</div>
			<div class="keytext">ח</div>
			</div>
			<div class="key plain" id="K_K">
			<div class="keycap">k</div>
			<div class="keytext">כ</div>
			</div>
			<div class="key plain" id="K_L">
			<div class="keycap">l</div>
			<div class="keytext">ל</div>
			</div>
			<div class="key plain" id="K_COLON">
			<div class="keycap">;</div>
			<div class="keytext">ךָ</div>
			</div>
			<div class="key plain" id="K_QUOTE">
			<div class="keycap">'</div>
			<div class="keytext">׳</div>
			</div>
			<div class="key special" id="K_ENTER">
			<div class="keycap">Enter</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_SHIFTL">
			<div class="keycap">Shift</div>
			</div>
			<div class="key plain" id="K_oE2">
			<div class="keycap">\</div>
			</div>
			<div class="key plain" id="K_Z">
			<div class="keycap">z</div>
			<div class="keytext">ז</div>
			</div>
			<div class="key plain" id="K_X">
			<div class="keycap">x</div>
			<div class="keytext">צ</div>
			</div>
			<div class="key plain" id="K_C">
			<div class="keycap">c</div>
			<div class="keytext">שׂ</div>
			</div>
			<div class="key plain" id="K_V">
			<div class="keycap">v</div>
			<div class="keytext">שׁ</div>
			</div>
			<div class="key plain" id="K_B">
			<div class="keycap">b</div>
			<div class="keytext">ב</div>
			</div>
			<div class="key plain" id="K_N">
			<div class="keycap">n</div>
			<div class="keytext">נ</div>
			</div>
			<div class="key plain" id="K_M">
			<div class="keycap">m</div>
			<div class="keytext">מ</div>
			</div>
			<div class="key plain" id="K_COMMA">
			<div class="keycap">,</div>
			<div class="keytext">,</div>
			</div>
			<div class="key plain" id="K_PERIOD">
			<div class="keycap">.</div>
			<div class="keytext">׃</div>
			</div>
			<div class="key plain" id="K_SLASH">
			<div class="keycap">/</div>
			<div class="keytext">ן</div>
			</div>
			<div class="key special" id="K_SHIFTR">
			<div class="keycap">Shift</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_CTRLL">
			<div class="keycap">Ctrl</div>
			</div>
			<div style="width: 30px; display: block; float: left;"> </div>
			<div class="key special" id="K_ALTL">
			<div class="keycap">Alt</div>
			</div>
			<div class="key plain" id="K_SPACE">
			<div class="keycap"> </div>
			<div class="keytext"> </div>
			</div>
			<div class="key special" id="K_ALTR">
			<div class="keycap">Alt</div>
			</div>
			<div style="width: 54px; display: block; float: left;"> </div>
			<div class="key special" id="K_CTRLR">
			<div class="keycap">Ctrl</div>

			</div><br style="clear: left"><h3 style="clear:left">QWERTY US : Shifted</h3>
			<div class="key plain" id="K_BKQUOTE">
			<div class="keycap">~</div>
			<div class="keytext bot diacritic">֤ </div>
			</div>
			<div class="key plain" id="K_1">
			<div class="keycap">!</div>
			<div class="keytext bot diacritic">ִ </div>
			</div>
			<div class="key plain" id="K_2">
			<div class="keycap">@</div>
			<div class="keytext bot diacritic">ֵ </div>
			</div>
			<div class="key plain" id="K_3">
			<div class="keycap">#</div>
			<div class="keytext bot diacritic">ֶ </div>
			</div>
			<div class="key plain" id="K_4">
			<div class="keycap">$</div>
			<div class="keytext bot diacritic">ֱ </div>
			</div>
			<div class="key plain" id="K_5">
			<div class="keycap">%</div>
			<div class="keytext bot diacritic">ֻ </div>
			</div>
			<div class="key plain" id="K_6">
			<div class="keycap">^</div>
			<div class="keytext bot diacritic">ַ </div>
			</div>
			<div class="key plain" id="K_7">
			<div class="keycap">&amp;</div>
			<div class="keytext bot diacritic">ֲ </div>
			</div>
			<div class="key plain" id="K_8">
			<div class="keycap">*</div>
			<div class="keytext bot diacritic">ָ </div>
			</div>
			<div class="key plain" id="K_9">
			<div class="keycap">(</div>
			<div class="keytext bot diacritic">ֳ </div>
			</div>
			<div class="key plain" id="K_0">
			<div class="keycap">)</div>
			<div class="keytext top diacritic"> ֹ</div> 
			</div>
			<div class="key plain" id="K_HYPHEN">
			<div class="keycap">_</div>
			<div class="keytext top diacritic">ֿ </div>
			</div>
			<div class="key plain" id="K_EQUAL">
			<div class="keycap">+</div>
			<div class="keytext LTN">‹LTN›</div>
			</div>
			<div class="key special" id="K_BKSP">
			<div class="keycap">Backspace</div>
			</div><br style="clear: left">
			<div class="key special" id="K_TAB">
			<div class="keycap">Tab</div>
			</div>
			<div class="key plain" id="K_Q">
			<div class="keycap">Q</div>
			<div class="keytext">קּ</div>
			</div>
			<div class="key plain" id="K_W">
			<div class="keycap">W</div>
			<div class="keytext">וּ</div>
			</div>
			<div class="key plain" id="K_E">
			<div class="keycap">E</div>
			<div class="keytext">ךְ</div>
			</div>
			<div class="key plain" id="K_R">
			<div class="keycap">R</div>
			<div class="keytext">רּ</div>
			</div>
			<div class="key plain" id="K_T">
			<div class="keycap">T</div>
			<div class="keytext">תּ</div>
			</div>
			<div class="key plain" id="K_Y">
			<div class="keycap">Y</div>
			<div class="keytext">יּ</div>
			</div>
			<div class="key plain" id="K_U">
			<div class="keycap">U</div>
			<div class="keytext">עּ</div>
			</div>
			<div class="key plain" id="K_I">
			<div class="keycap">I</div>
			<div class="keytext">ךּ</div>
			</div>
			<div class="key plain" id="K_O">
			<div class="keycap">O</div>
			<div class="keytext">וֹּ</div>
			</div>
			<div class="key plain" id="K_P">
			<div class="keycap">P</div>
			<div class="keytext">פּ</div>
			</div>
			<div class="key plain" id="K_LBRKT">
			<div class="keycap">{</div>
			<div class="keytext">ףּ</div>
			</div>
			<div class="key plain" id="K_RBRKT">
			<div class="keycap">}</div>
			<div class="keytext">שּ</div>
			</div>
			<div class="key plain" id="K_BKSLASH">
			<div class="keycap">¦</div>
			<div class="keytext">׀</div>
			</div><br style="clear: left">

			<div class="key special" id="K_CAPS">
			<div class="keycap">Caps Lock</div>
			</div>
			<div class="key plain" id="K_A">
			<div class="keycap">A</div>
			<div class="keytext">אּ</div>
			</div>
			<div class="key plain" id="K_S">
			<div class="keycap">S</div>
			<div class="keytext">סּ</div>
			</div>
			<div class="key plain" id="K_D">
			<div class="keycap">D</div>
			<div class="keytext">דּ</div>
			</div>
			<div class="key plain" id="K_F">
			<div class="keycap">F</div>
			<div class="keytext">טּ</div>
			</div>
			<div class="key plain" id="K_G">
			<div class="keycap">G</div>
			<div class="keytext">גּ</div>
			</div>
			<div class="key plain" id="K_H">
			<div class="keycap">H</div>
			<div class="keytext">ץ</div>
			</div>
			<div class="key plain" id="K_J">
			<div class="keycap">J</div>
			<div class="keytext">חּ</div>
			</div>
			<div class="key plain" id="K_K">
			<div class="keycap">K</div>
			<div class="keytext">כּ</div>
			</div>
			<div class="key plain" id="K_L">
			<div class="keycap">L</div>
			<div class="keytext">לּ</div>
			</div>
			<div class="key plain" id="K_COLON">
			<div class="keycap">:</div>
			<div class="keytext">ךֶ</div>
			</div>
			<div class="key plain" id="K_QUOTE">
			<div class="keycap">"</div>
			<div class="keytext">״</div>
			</div>
			<div class="key special" id="K_ENTER">
			<div class="keycap">Enter</div>
			</div><br style="clear: left">
			<div class="key special" id="K_SHIFTL">
			<div class="keycap">Shift</div>
			</div>
			<div class="key plain" id="K_Z">
			<div class="keycap">Z</div>
			<div class="keytext">זּ</div>
			</div>
			<div class="key plain" id="K_X">
			<div class="keycap">X</div>
			<div class="keytext">צּ</div>
			</div>
			<div class="key plain" id="K_C">
			<div class="keycap">C</div>
			<div class="keytext">שּׂ</div>
			</div>
			<div class="key plain" id="K_V">
			<div class="keycap">V</div>
			<div class="keytext">שּׁ</div>
			</div>
			<div class="key plain" id="K_B">
			<div class="keycap">B</div>
			<div class="keytext">בּ</div>
			</div>
			<div class="key plain" id="K_N">
			<div class="keycap">N</div>
			<div class="keytext">נּ</div>
			</div>
			<div class="key plain" id="K_M">
			<div class="keycap">M</div>
			<div class="keytext">מּ</div> 
			</div>
			<div class="key plain" id="K_COMMA">
			<div class="keycap">&lt;</div>
			<div class="keytext">ם</div>
			</div>
			<div class="key plain" id="K_PERIOD">
			<div class="keycap">&gt;</div>   
			<div class="keytext">.</div>
			</div>
			<div class="key plain" id="K_SLASH">
			<div class="keycap">?</div>
			<div class="keytext diacritic">ּ </div>
			</div>
			<div class="key special" id="K_SHIFTR">
			<div class="keycap">Shift</div>
			</div><br style="clear: left"><div class="key special" id="K_CTRLL">
			<div class="keycap">Ctrl</div>
			</div>
			<div style="width: 30px; display: block; float: left;"> </div>
			<div class="key special" id="K_ALTL">
			<div class="keycap">Alt</div>
			</div>
			<div class="key plain" id="K_SPACE">
			<div class="keycap"> </div>
			</div>
			<div class="key special" id="K_ALTR">
			<div class="keycap">Alt</div>
			</div>
			<div style="width: 54px; display: block; float: left;"> </div>
			<div class="key special" id="K_CTRLR">
			<div class="keycap">Ctrl</div>
			</div>

			<br style="clear: left" />
		</div><!--End of QWERTY US tabsheet-->
		<div class='osk_tabsheet' id='osk_uk_tabsheet'>
			<h3 style="clear:left">QWERTY UK : Unshifted</h3>
			<div class="key plain" id="K_BKQUOTE">
			<div class="keycap">`</div>
			<div class="keytext top diacritic">֫ </div>
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
			<div class="keytext">־</div>
			</div>
			<div class="key plain" id="K_EQUAL">
			<div class="keycap">=</div>
			<div class="keytext bot diacritic">ְ </div>
			</div>
			<div class="key special" id="K_BKSP">
			<div class="keycap">Backspace</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_TAB">
			<div class="keycap">Tab</div>
			</div>
			<div class="key plain" id="K_Q">
			<div class="keycap">q</div>
			<div class="keytext">ק</div>
			</div>
			<div class="key plain" id="K_W">
			<div class="keycap">w</div>
			<div class="keytext">ו</div>
			</div>
			<div class="key plain" id="K_E">
			<div class="keycap">e</div>
			<div class="keytext">ךֵ</div>
			</div>
			<div class="key plain" id="K_R">
			<div class="keycap">r</div>
			<div class="keytext">ר</div>
			</div>
			<div class="key plain" id="K_T">
			<div class="keycap">t</div>
			<div class="keytext">ת</div>
			</div>
			<div class="key plain" id="K_Y">
			<div class="keycap">y</div>
			<div class="keytext">י</div>
			</div>
			<div class="key plain" id="K_U">
			<div class="keycap">u</div>
			<div class="keytext">ע</div>
			</div>
			<div class="key plain" id="K_I">
			<div class="keycap">i</div>
			<div class="keytext">ך</div>
			</div>
			<div class="key plain" id="K_O">
			<div class="keycap">o</div>
			<div class="keytext">וֹ</div>
			</div>
			<div class="key plain" id="K_P">
			<div class="keycap">p</div>
			<div class="keytext">פ</div>
			</div>
			<div class="key plain" id="K_LBRKT">
			<div class="keycap">[</div>
			<div class="keytext">ף</div>
			</div>
			<div class="key plain" id="K_RBRKT">
			<div class="keycap">]</div>
			<div class="keytext">ש</div>
			</div>
			<div class="key special" id="K_ENTER-EU1">
			<div class="keycap">Enter</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_CAPS">
			<div class="keycap">Caps Lock</div>
			</div>
			<div class="key plain" id="K_A">
			<div class="keycap">a</div>
			<div class="keytext">א</div>
			</div>
			<div class="key plain" id="K_S">
			<div class="keycap">s</div>
			<div class="keytext">ס</div>
			</div>
			<div class="key plain" id="K_D">
			<div class="keycap">d</div>
			<div class="keytext">ד</div>
			</div>
			<div class="key plain" id="K_F">
			<div class="keycap">f</div>
			<div class="keytext">ט</div>
			</div>
			<div class="key plain" id="K_G">
			<div class="keycap">g</div>
			<div class="keytext">ג</div>
			</div>
			<div class="key plain" id="K_H">
			<div class="keycap">h</div>
			<div class="keytext">ה</div>
			</div>
			<div class="key plain" id="K_J">
			<div class="keycap">j</div>
			<div class="keytext">ח</div>
			</div>
			<div class="key plain" id="K_K">
			<div class="keycap">k</div>
			<div class="keytext">כ</div>
			</div>
			<div class="key plain" id="K_L">
			<div class="keycap">l</div>
			<div class="keytext">ל</div>
			</div>
			<div class="key plain" id="K_COLON">
			<div class="keycap">;</div>
			<div class="keytext">ךָ</div>
			</div>
			<div class="key plain" id="K_QUOTE">
			<div class="keycap">'</div>
			<div class="keytext">׳</div>
			</div>
			<div class="key plain">
			<div class="keycap">#</div>
			<div class="keytext bot diacritic">ֶ </div>
			</div>
			<div class="key special" id="K_ENTER-EU2">
			<div class="keycap"></div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_SHIFTL-EU">
			<div class="keycap">Shift</div>
			</div>
			<div class="key plain">
			<div class="keycap">\</div>
			<div class="keytext bot diacritic">ֽ </div>
			</div>
			<div class="key plain" id="K_Z">
			<div class="keycap">z</div>
			<div class="keytext">ז</div>
			</div>
			<div class="key plain" id="K_X">
			<div class="keycap">x</div>
			<div class="keytext">צ</div>
			</div>
			<div class="key plain" id="K_C">
			<div class="keycap">c</div>
			<div class="keytext">שׂ</div>
			</div>
			<div class="key plain" id="K_V">
			<div class="keycap">v</div>
			<div class="keytext">שׁ</div>
			</div>
			<div class="key plain" id="K_B">
			<div class="keycap">b</div>
			<div class="keytext">ב</div>
			</div>
			<div class="key plain" id="K_N">
			<div class="keycap">n</div>
			<div class="keytext">נ</div>
			</div>
			<div class="key plain" id="K_M">
			<div class="keycap">m</div>
			<div class="keytext">מ</div>
			</div>
			<div class="key plain" id="K_COMMA">
			<div class="keycap">,</div>
			<div class="keytext">,</div>
			</div>
			<div class="key plain" id="K_PERIOD">
			<div class="keycap">.</div>
			<div class="keytext">׃</div>
			</div>
			<div class="key plain" id="K_SLASH">
			<div class="keycap">/</div>
			<div class="keytext">ן</div>
			</div>
			<div class="key special" id="K_SHIFTR">
			<div class="keycap">Shift</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_CTRLL">
			<div class="keycap">Ctrl</div>
			</div>
			<div style="width: 30px; display: block; float: left;"> </div>
			<div class="key special" id="K_ALTL">
			<div class="keycap">Alt</div>
			</div>
			<div class="key plain" id="K_SPACE">
			<div class="keycap"> </div>
			<div class="keytext"> </div>
			</div>
			<div class="key special" id="K_ALTR">
			<div class="keycap">Alt</div>
			</div>
			<div style="width: 54px; display: block; float: left;"> </div>
			<div class="key special" id="K_CTRLR">
			<div class="keycap">Ctrl</div>

			</div><br style="clear: left"><h3 style="clear:left">QWERTY UK : Shifted</h3>
			<div class="key plain" id="K_BKQUOTE">
			<div class="keycap">¬</div>
			<div class="keytext">¬</div>
			</div>
			<div class="key plain" id="K_1">
			<div class="keycap">!</div>
			<div class="keytext bot diacritic">ִ </div>
			</div>
			<div class="key plain" id="K_2">
			<div class="keycap">"</div>
			<div class="keytext">״</div>
			</div>
			<div class="key plain" id="K_3">
			<div class="keycap">£</div>
			<div class="keytext">ףּ</div>
			</div>
			<div class="key plain" id="K_4">
			<div class="keycap">$</div>
			<div class="keytext bot diacritic">ֱ </div>
			</div>
			<div class="key plain" id="K_5">
			<div class="keycap">%</div>
			<div class="keytext bot diacritic">ֻ </div>
			</div>
			<div class="key plain" id="K_6">
			<div class="keycap">^</div>
			<div class="keytext bot diacritic">ַ </div>
			</div>
			<div class="key plain" id="K_7">
			<div class="keycap">&amp;</div>
			<div class="keytext bot diacritic">ֲ </div>
			</div>
			<div class="key plain" id="K_8">
			<div class="keycap">*</div>
			<div class="keytext bot diacritic">ָ </div>
			</div>
			<div class="key plain" id="K_9">
			<div class="keycap">(</div>
			<div class="keytext bot diacritic">ֳ </div>
			</div>
			<div class="key plain" id="K_0">
			<div class="keycap">)</div>
			<div class="keytext top diacritic">ֹ </div>
			</div>
			<div class="key plain" id="K_HYPHEN">
			<div class="keycap">_</div>
			<div class="keytext top diacritic">ֿ </div>
			</div>
			<div class="key plain" id="K_EQUAL">
			<div class="keycap">+</div>
			<div class="keytext LTN">‹LTN›</div>
			</div>
			<div class="key special" id="K_BKSP">
			<div class="keycap">Backspace</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_TAB">
			<div class="keycap">Tab</div>
			</div>
			<div class="key plain" id="K_Q">
			<div class="keycap">Q</div>
			<div class="keytext">קּ</div>
			</div>
			<div class="key plain" id="K_W">
			<div class="keycap">W</div>
			<div class="keytext">וּ</div>
			</div>
			<div class="key plain" id="K_E">
			<div class="keycap">E</div>
			<div class="keytext">ךְ</div>
			</div>
			<div class="key plain" id="K_R">
			<div class="keycap">R</div>
			<div class="keytext">רּ</div>
			</div>
			<div class="key plain" id="K_T">
			<div class="keycap">T</div>
			<div class="keytext">תּ</div>
			</div>
			<div class="key plain" id="K_Y">
			<div class="keycap">Y</div>
			<div class="keytext">יּ</div>
			</div>
			<div class="key plain" id="K_U">
			<div class="keycap">U</div>
			<div class="keytext">עּ</div>
			</div>
			<div class="key plain" id="K_I">
			<div class="keycap">I</div>
			<div class="keytext">ךּ</div>
			</div>
			<div class="key plain" id="K_O">
			<div class="keycap">O</div>
			<div class="keytext">וֹּ</div>
			</div>
			<div class="key plain" id="K_P">
			<div class="keycap">P</div>
			<div class="keytext">פּ</div>
			</div>
			<div class="key plain" id="K_LBRKT">
			<div class="keycap">{</div>
			<div class="keytext">ףּ</div>
			</div>
			<div class="key plain" id="K_RBRKT">
			<div class="keycap">}</div>
			<div class="keytext">שּ</div>
			</div>
			<div class="key special" id="K_ENTER-EU1">
			<div class="keycap">Enter</div>
			</div>
			<br style="clear: left">

			<div class="key special" id="K_CAPS">
			<div class="keycap">Caps Lock</div>
			</div>
			<div class="key plain" id="K_A">
			<div class="keycap">A</div>
			<div class="keytext">אּ</div>
			</div>
			<div class="key plain" id="K_S">
			<div class="keycap">S</div>
			<div class="keytext">סּ</div>
			</div>
			<div class="key plain" id="K_D">
			<div class="keycap">D</div>
			<div class="keytext">דּ</div>
			</div>
			<div class="key plain" id="K_F">
			<div class="keycap">F</div>
			<div class="keytext">טּ</div>
			</div>
			<div class="key plain" id="K_G">
			<div class="keycap">G</div>
			<div class="keytext">גּ</div>
			</div>
			<div class="key plain" id="K_H">
			<div class="keycap">H</div>
			<div class="keytext">ץ</div>
			</div>
			<div class="key plain" id="K_J">
			<div class="keycap">J</div>
			<div class="keytext">חּ</div>
			</div>
			<div class="key plain" id="K_K">
			<div class="keycap">K</div>
			<div class="keytext">כּ</div>
			</div>
			<div class="key plain" id="K_L">
			<div class="keycap">L</div>
			<div class="keytext">לּ</div>
			</div>
			<div class="key plain" id="K_COLON">
			<div class="keycap">:</div>
			<div class="keytext">ךֶ</div>
			</div>
			<div class="key plain" id="K_QUOTE">
			<div class="keycap">@</div>
			<div class="keytext bot diacritic">ֵ </div>
			</div>
			<div class="key plain">
			<div class="keycap">~</div>
			<div class="keytext bot diacritic">֤ </div>
			</div>
			<div class="key special" id="K_ENTER-EU2">
			<div class="keycap"></div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_SHIFTL-EU">
			<div class="keycap">Shift</div>
			</div>
			<div class="key plain">
			<div class="keycap">¦</div>
			<div class="keytext">׀</div>
			</div>
			<div class="key plain" id="K_Z">
			<div class="keycap">Z</div>
			<div class="keytext">זּ</div>
			</div>
			<div class="key plain" id="K_X">
			<div class="keycap">X</div>
			<div class="keytext">צּ</div>
			</div>
			<div class="key plain" id="K_C">
			<div class="keycap">C</div>
			<div class="keytext">שּׂ</div>
			</div>
			<div class="key plain" id="K_V">
			<div class="keycap">V</div>
			<div class="keytext">שּׁ</div>
			</div>
			<div class="key plain" id="K_B">
			<div class="keycap">B</div>
			<div class="keytext">בּ</div>
			</div>
			<div class="key plain" id="K_N">
			<div class="keycap">N</div>
			<div class="keytext">נּ</div>
			</div>
			<div class="key plain" id="K_M">
			<div class="keycap">M</div>
			<div class="keytext">מּ</div>
			</div>
			<div class="key plain" id="K_COMMA">
			<div class="keycap">&lt;</div>
			<div class="keytext">ם</div>
			</div>
			<div class="key plain" id="K_PERIOD">
			<div class="keycap">&gt;</div>
			<div class="keytext">.</div>
			</div>
			<div class="key plain" id="K_SLASH">
			<div class="keycap">?</div>
			<div class="keytext diacritic">ּ </div>
			</div>
			<div class="key special" id="K_SHIFTR">
			<div class="keycap">Shift</div>
			</div><br style="clear: left"><div class="key special" id="K_CTRLL">
			<div class="keycap">Ctrl</div>
			</div>
			<div style="width: 30px; display: block; float: left;"> </div>
			<div class="key special" id="K_ALTL">
			<div class="keycap">Alt</div>
			</div>
			<div class="key plain" id="K_SPACE">
			<div class="keycap"> </div>
			</div>
			<div class="key special" id="K_ALTR">
			<div class="keycap">Alt</div>
			</div>
			<div style="width: 54px; display: block; float: left;"> </div>
			<div class="key special" id="K_CTRLR">
			<div class="keycap">Ctrl</div>
			</div>

			<br style="clear: left" />
		</div><!--End of QWERTY UK tabsheet-->
		<div class='osk_tabsheet' id='osk_fr_tabsheet'>
			<h3 style="clear:left">AZERTY : Unshifted</h3>
			<div class="key plain" id="K_BKQUOTE">
			<div class="keycap">²</div>
			<div class="keytext top diacritic">֫ </div>
			</div>
			<div class="key plain" id="K_1">
			<div class="keycap">&amp;</div>
			<div class="keytext bot diacritic">ֲ </div>
			</div>
			<div class="key plain" id="K_2">
			<div class="keycap">é</div>
			<div class="keytext bot diacritic">ֵ </div>
			</div>
			<div class="key plain" id="K_3">
			<div class="keycap">"</div>
			<div class="keytext">״</div>
			</div>
			<div class="key plain" id="K_4">
			<div class="keycap">'</div>
			<div class="keytext">׳</div>
			</div>
			<div class="key plain" id="K_5">
			<div class="keycap">(</div>
			<div class="keytext bot diacritic">ֳ </div>
			</div>
			<div class="key plain" id="K_6">
			<div class="keycap">-</div>
			<div class="keytext">־</div>
			</div>
			<div class="key plain" id="K_7">
			<div class="keycap">è</div>
			<div class="keytext bot diacritic">ֶ </div>
			</div>
			<div class="key plain" id="K_8">
			<div class="keycap">_</div>
			<div class="keytext top diacritic">ֿ </div>
			</div>
			<div class="key plain" id="K_9">
			<div class="keycap">ç</div>
			<div class="keytext">ש</div>
			</div>
			<div class="key plain" id="K_0">
			<div class="keycap">à</div>
			<div class="keytext bot diacritic">֤ </div>
			</div>
			<div class="key plain" id="K_HYPHEN">
			<div class="keycap">)</div>
			<div class="keytext top diacritic">ֹ </div>
			</div>
			<div class="key plain" id="K_EQUAL">
			<div class="keycap">=</div>
			<div class="keytext bot diacritic">ְ </div>
			</div>
			<div class="key special" id="K_BKSP">
			<div class="keycap">RET.ARR</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_TAB">
			<div class="keycap">TAB</div>
			</div>
			<div class="key plain" id="K_Q">
			<div class="keycap">a</div>
			<div class="keytext">א</div>
			</div>
			<div class="key plain" id="K_W">
			<div class="keycap">z</div>
			<div class="keytext">ז</div>
			</div>
			<div class="key plain" id="K_E">
			<div class="keycap">e</div>
			<div class="keytext">ךֵ</div>
			</div>
			<div class="key plain" id="K_R">
			<div class="keycap">r</div>
			<div class="keytext">ר</div>
			</div>
			<div class="key plain" id="K_T">
			<div class="keycap">t</div>
			<div class="keytext">ת</div>
			</div>
			<div class="key plain" id="K_Y">
			<div class="keycap">y</div>
			<div class="keytext">י</div>
			</div>
			<div class="key plain" id="K_U">
			<div class="keycap">u</div>
			<div class="keytext">ע</div>
			</div>
			<div class="key plain" id="K_I">
			<div class="keycap">i</div>
			<div class="keytext">ך</div>
			</div>
			<div class="key plain" id="K_O">
			<div class="keycap">o</div>
			<div class="keytext">וֹ</div>
			</div>
			<div class="key plain" id="K_P">
			<div class="keycap">p</div>
			<div class="keytext">פ</div>
			</div>
			<div class="key plain" id="K_LBRKT">
			<div class="keycap">^</div>
			<div class="keytext bot diacritic">ַ </div>
			</div>
			<div class="key plain" id="K_RBRKT">
			<div class="keycap">$</div>
			<div class="keytext bot diacritic">ֱ </div>
			</div>
			<div class="key special" id="K_ENTER-EU1">
			<div class="keycap">ENTREE</div>
			</div>

			<br style="clear: left">
			<div class="key special" id="K_CAPS">
			<div class="keycap">VERR.MAJ</div>
			</div>
			<div class="key plain" id="K_A">
			<div class="keycap">q</div>
			<div class="keytext">ק</div>
			</div>
			<div class="key plain" id="K_S">
			<div class="keycap">s</div>
			<div class="keytext">ס</div>
			</div>
			<div class="key plain" id="K_D">
			<div class="keycap">d</div>
			<div class="keytext">ד</div>
			</div>
			<div class="key plain" id="K_F">
			<div class="keycap">f</div>
			<div class="keytext">ט</div>
			</div>
			<div class="key plain" id="K_G">
			<div class="keycap">g</div>
			<div class="keytext">ג</div>
			</div>
			<div class="key plain" id="K_H">
			<div class="keycap">h</div>
			<div class="keytext">ה</div>
			</div>
			<div class="key plain" id="K_J">
			<div class="keycap">j</div>
			<div class="keytext">ח</div>
			</div>
			<div class="key plain" id="K_K">
			<div class="keycap">k</div>
			<div class="keytext">כ</div>
			</div>
			<div class="key plain" id="K_L">
			<div class="keycap">l</div>
			<div class="keytext">ל</div>
			</div>
			<div class="key plain" id="K_COLON">
			<div class="keycap">m</div>
			<div class="keytext">מ</div>
			</div>
			<div class="key plain" id="K_QUOTE">
			<div class="keycap">ù</div>
			<div class="keytext">ף</div>
			</div>
			<div class="key plain">
			<div class="keycap">*</div>
			<div class="keytext bot diacritic">ָ </div>
			</div>
			<div class="key special" id="K_ENTER-EU2">
			<div class="keycap"></div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_SHIFTL-EU">
			<div class="keycap">MAJ</div>
			</div>
			<div class="key plain">
			<div class="keycap">&lt;</div>
			<div class="keytext">ם</div>
			</div>
			<div class="key plain" id="K_Z">
			<div class="keycap">w</div>
			<div class="keytext">ו</div>
			</div>
			<div class="key plain" id="K_X">
			<div class="keycap">x</div>
			<div class="keytext">צ</div>
			</div>
			<div class="key plain" id="K_C">
			<div class="keycap">c</div>
			<div class="keytext">שׂ</div>
			</div>
			<div class="key plain" id="K_V">
			<div class="keycap">v</div>
			<div class="keytext">שׁ</div>
			</div>
			<div class="key plain" id="K_B">
			<div class="keycap">b</div>
			<div class="keytext">ב</div>
			</div>
			<div class="key plain" id="K_N">
			<div class="keycap">n</div>
			<div class="keytext">נ</div>
			</div>
			<div class="key plain" id="K_M">
			<div class="keycap">,</div>
			<div class="keytext">,</div>
			</div>
			<div class="key plain" id="K_COMMA">
			<div class="keycap">;</div>
			<div class="keytext">ךָ</div>
			</div>
			<div class="key plain" id="K_PERIOD">
			<div class="keycap">:</div>
			<div class="keytext">ךֶ</div>
			</div>
			<div class="key plain" id="K_SLASH">
			<div class="keycap">!</div>
			<div class="keytext bot diacritic">ִ </div>
			</div>
			<div class="key special" id="K_SHIFTR">
			<div class="keycap">MAJ</div>
			</div><br style="clear: left">
			<div class="key special" id="K_CTRLL">
			<div class="keycap">CTRL</div>
			</div>
			<div style="width: 30px; display: block; float: left;"> </div>
			<div class="key special" id="K_ALTL">
			<div class="keycap">ALT</div>
			</div>
			<div class="key plain" id="K_SPACE">
			<div class="keycap"> </div>
			<div class="keytext"> </div>
			</div>
			<div class="key special" id="K_ALTR">
			<div class="keycap">ALT<br/>DROITE</div>
			</div>
			<div style="width: 54px; display: block; float: left;"> </div>
			<div class="key special" id="K_CTRLR">
			<div class="keycap">CTRL<br/>DROITE</div>
			</div>

			<br style="clear: left">

			<h3 style="clear:left">AZERTY : Shifted</h3>
			<div class="key special" id="K_BKQUOTE">
			<div class="keycap"></div>
			<div class="keytext"></div>
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
			<div class="keycap">°</div>
			<div class="keytext bot diacritic">ֽ </div>
			</div>
			<div class="key plain" id="K_EQUAL">
			<div class="keycap">+</div>
			<div class="keytext LTN">‹LTN›</div>
			</div>
			<div class="key special" id="K_BKSP">
			<div class="keycap">RET.ARR</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_TAB">
			<div class="keycap">TAB</div>
			</div>
			<div class="key plain" id="K_Q">
			<div class="keycap">A</div>
			<div class="keytext">אּ</div>
			</div>
			<div class="key plain" id="K_W">
			<div class="keycap">Z</div>
			<div class="keytext">זּ</div>
			</div>
			<div class="key plain" id="K_E">
			<div class="keycap">E</div>
			<div class="keytext">ךְ</div>
			</div>
			<div class="key plain" id="K_R">
			<div class="keycap">R</div>
			<div class="keytext">רּ</div>
			</div>
			<div class="key plain" id="K_T">
			<div class="keycap">T</div>
			<div class="keytext">תּ</div>
			</div>
			<div class="key plain" id="K_Y">
			<div class="keycap">Y</div>
			<div class="keytext">יּ</div>
			</div>
			<div class="key plain" id="K_U">
			<div class="keycap">U</div>
			<div class="keytext">עּ</div>
			</div>
			<div class="key plain" id="K_I">
			<div class="keycap">I</div>
			<div class="keytext">ךּ</div>
			</div>
			<div class="key plain" id="K_O">
			<div class="keycap">O</div>
			<div class="keytext">וֹּ</div>
			</div>
			<div class="key plain" id="K_P">
			<div class="keycap">P</div>
			<div class="keytext">פּ</div>
			</div>
			<div class="key plain" id="K_LBRKT">
			<div class="keycap">¨</div>
			<div class="keytext bot diacritic">ֵ </div>
			</div>
			<div class="key plain" id="K_RBRKT">
			<div class="keycap">£</div>
			<div class="keytext">ףּ</div>
			</div>
			<div class="key special" id="K_ENTER-EU1">
			<div class="keycap">ENTREE</div>
			</div>

			<br style="clear: left">
			<div class="key special" id="K_CAPS">
			<div class="keycap">VERR.MAJ</div>
			</div>
			<div class="key plain" id="K_A">
			<div class="keycap">Q</div>
			<div class="keytext">קּ</div>
			</div>
			<div class="key plain" id="K_S">
			<div class="keycap">S</div>
			<div class="keytext">סּ</div>
			</div>
			<div class="key plain" id="K_D">
			<div class="keycap">D</div>
			<div class="keytext">דּ</div>
			</div>
			<div class="key plain" id="K_F">
			<div class="keycap">F</div>
			<div class="keytext">טּ</div>
			</div>
			<div class="key plain" id="K_G">
			<div class="keycap">G</div>
			<div class="keytext">גּ</div>
			</div>
			<div class="key plain" id="K_H">
			<div class="keycap">H</div>
			<div class="keytext">ץ</div>
			</div>
			<div class="key plain" id="K_J">
			<div class="keycap">J</div>
			<div class="keytext">חּ</div>
			</div>
			<div class="key plain" id="K_K">
			<div class="keycap">K</div>
			<div class="keytext">כּ</div>
			</div>
			<div class="key plain" id="K_L">
			<div class="keycap">L</div>
			<div class="keytext">לּ</div>
			</div>
			<div class="key plain" id="K_COLON">
			<div class="keycap">M</div>
			<div class="keytext">מּ</div>
			</div>
			<div class="key plain" id="K_QUOTE">
			<div class="keycap">%</div>
			<div class="keytext bot diacritic">ֻ </div>
			</div>
			<div class="key plain">
			<div class="keycap">µ</div>
			<div class="keytext">שּ</div>
			</div>
			<div class="key special" id="K_ENTER-EU2">
			<div class="keycap"></div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_SHIFTL-EU">
			<div class="keycap">MAJ</div>
			</div>
			<div class="key plain">
			<div class="keycap">&gt;</div>
			<div class="keytext">.</div>
			</div>
			<div class="key plain" id="K_Z">
			<div class="keycap">W</div>
			<div class="keytext">וּ</div>
			</div>
			<div class="key plain" id="K_X">
			<div class="keycap">X</div>
			<div class="keytext">צּ</div>
			</div>
			<div class="key plain" id="K_C">
			<div class="keycap">C</div>
			<div class="keytext">שּׂ</div>
			</div>
			<div class="key plain" id="K_V">
			<div class="keycap">V</div>
			<div class="keytext">שּׁ</div>
			</div>
			<div class="key plain" id="K_B">
			<div class="keycap">B</div>
			<div class="keytext">בּ</div>
			</div>
			<div class="key plain" id="K_N">
			<div class="keycap">N</div>
			<div class="keytext">נּ</div>
			</div>
			<div class="key plain" id="K_M">
			<div class="keycap">?</div>
			<div class="keytext diacritic">ּ </div>
			</div>
			<div class="key plain" id="K_COMMA">
			<div class="keycap">.</div>
			<div class="keytext">׃</div>
			</div>
			<div class="key plain" id="K_PERIOD">
			<div class="keycap">/</div>
			<div class="keytext">ן</div>
			</div>
			<div class="key plain" id="K_SLASH">
			<div class="keycap">§</div>
			<div class="keytext">׀</div>
			</div>
			<div class="key special" id="K_SHIFTR">
			<div class="keycap">MAJ</div>
			</div><br style="clear: left">
			<div class="key special" id="K_CTRLL">
			<div class="keycap">CTRL</div>
			</div>
			<div style="width: 30px; display: block; float: left;"> </div>
			<div class="key special" id="K_ALTL">
			<div class="keycap">ALT</div>
			</div>
			<div class="key plain" id="K_SPACE">
			<div class="keycap"> </div>
			<div class="keytext"> </div>
			</div>
			<div class="key special" id="K_ALTR">
			<div class="keycap">ALT<br/>DROITE</div>
			</div>
			<div style="width: 54px; display: block; float: left;"> </div>
			<div class="key special" id="K_CTRLR">
			<div class="keycap">CTRL<br/>DROITE</div>
			</div>

			<br style="clear: left" />
		</div><!--End of AZERTY FR tabsheet-->
		<div class='osk_tabsheet' id='osk_de_tabsheet'>
			<h3 style="clear:left">QWERTZ : Unshifted</h3>
			<div class="key plain" id="K_BKQUOTE">
			<div class="keycap">^</div>
			<div class="keytext bot diacritic">ַ </div>
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
			<div class="keycap">ß</div>
			<div class="keytext">ש</div>
			</div>
			<div class="key plain" id="K_EQUAL">
			<div class="keycap">´</div>
			<div class="keytext bot diacritic">֤ </div>
			</div>
			<div class="key special" id="K_BKSP">
			<div class="keycap">Rück</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_TAB">
			<div class="keycap">Tab</div>
			</div>
			<div class="key plain" id="K_Q">
			<div class="keycap">q</div>
			<div class="keytext">ק</div>
			</div>
			<div class="key plain" id="K_W">
			<div class="keycap">w</div>
			<div class="keytext">ו</div>
			</div>
			<div class="key plain" id="K_E">
			<div class="keycap">e</div>
			<div class="keytext">ךֵ</div>
			</div>
			<div class="key plain" id="K_R">
			<div class="keycap">r</div>
			<div class="keytext">ר</div>
			</div>
			<div class="key plain" id="K_T">
			<div class="keycap">t</div>
			<div class="keytext">ת</div>
			</div>
			<div class="key plain" id="K_Z">
			<div class="keycap">z</div>
			<div class="keytext">ז</div>
			</div>
			<div class="key plain" id="K_U">
			<div class="keycap">u</div>
			<div class="keytext">ע</div>
			</div>
			<div class="key plain" id="K_I">
			<div class="keycap">i</div>
			<div class="keytext">ך</div>
			</div>
			<div class="key plain" id="K_O">
			<div class="keycap">o</div>
			<div class="keytext">וֹ</div>
			</div>
			<div class="key plain" id="K_P">
			<div class="keycap">p</div>
			<div class="keytext">פ</div>
			</div>
			<div class="key plain" id="K_LBRKT">
			<div class="keycap">ü</div>
			<div class="keytext">ף</div>
			</div>
			<div class="key plain" id="K_RBRKT">
			<div class="keycap">+</div>
			<div class="keytext LTN">‹LTN›</div>
			</div>
			<div class="key special" id="K_ENTER-EU1">
			<div class="keycap">Eingabe</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_CAPS">
			<div class="keycap">Feststell</div>
			</div>
			<div class="key plain" id="K_A">
			<div class="keycap">a</div>
			<div class="keytext">א</div>
			</div>
			<div class="key plain" id="K_S">
			<div class="keycap">s</div>
			<div class="keytext">ס</div>
			</div>
			<div class="key plain" id="K_D">
			<div class="keycap">d</div>
			<div class="keytext">ד</div>
			</div>
			<div class="key plain" id="K_F">
			<div class="keycap">f</div>
			<div class="keytext">ט</div>
			</div>
			<div class="key plain" id="K_G">
			<div class="keycap">g</div>
			<div class="keytext">ג</div>
			</div>
			<div class="key plain" id="K_H">
			<div class="keycap">h</div>
			<div class="keytext">ה</div>
			</div>
			<div class="key plain" id="K_J">
			<div class="keycap">j</div>
			<div class="keytext">ח</div>
			</div>
			<div class="key plain" id="K_K">
			<div class="keycap">k</div>
			<div class="keytext">כ</div>
			</div>
			<div class="key plain" id="K_L">
			<div class="keycap">l</div>
			<div class="keytext">ל</div>
			</div>
			<div class="key plain" id="K_COLON">
			<div class="keycap">ö</div>
			<div class="keytext">ש</div>
			</div>
			<div class="key plain" id="K_QUOTE">
			<div class="keycap">ä</div>
			<div class="keytext bot diacritic">ֵ </div>
			</div>
			<div class="key plain">
			<div class="keycap">#</div>
			<div class="keytext bot diacritic">ֶ </div>
			</div>
			<div class="key special" id="K_ENTER-EU2">
			<div class="keycap"></div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_SHIFTL-EU">
			<div class="keycap" style='left:3px'>Umschalt</div>
			</div>
			<div class="key plain">
			<div class="keycap">&lt;</div>
			<div class="keytext">ם</div>
			</div>
			<div class="key plain" id="K_Y">
			<div class="keycap">y</div>
			<div class="keytext">י</div>
			</div>
			<div class="key plain" id="K_X">
			<div class="keycap">x</div>
			<div class="keytext">צ</div>
			</div>
			<div class="key plain" id="K_C">
			<div class="keycap">c</div>
			<div class="keytext">שׂ</div>
			</div>
			<div class="key plain" id="K_V">
			<div class="keycap">v</div>
			<div class="keytext">שׁ</div>
			</div>
			<div class="key plain" id="K_B">
			<div class="keycap">b</div>
			<div class="keytext">ב</div>
			</div>
			<div class="key plain" id="K_N">
			<div class="keycap">n</div>
			<div class="keytext">נ</div>
			</div>
			<div class="key plain" id="K_M">
			<div class="keycap">m</div>
			<div class="keytext">מ</div>
			</div>
			<div class="key plain" id="K_COMMA">
			<div class="keycap">,</div>
			<div class="keytext">,</div>
			</div>
			<div class="key plain" id="K_PERIOD">
			<div class="keycap">.</div>
			<div class="keytext">׃</div>
			</div>
			<div class="key plain" id="K_SLASH">
			<div class="keycap">-</div>
			<div class="keytext">־</div>
			</div>
			<div class="key special" id="K_SHIFTR">
			<div class="keycap">Umschalt</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_CTRLL">
			<div class="keycap">Strg</div>
			</div>
			<div style="width: 30px; display: block; float: left;"> </div>
			<div class="key special" id="K_ALTL">
			<div class="keycap">Alt</div>
			</div>
			<div class="key plain" id="K_SPACE">
			<div class="keycap"> </div>
			<div class="keytext"> </div>
			</div>
			<div class="key special" id="K_ALTR">
			<div class="keycap">Alt GR</div>
			</div>
			<div style="width: 54px; display: block; float: left;"> </div>
			<div class="key special" id="K_CTRLR">
			<div class="keycap">Strg-Recht</div>

			</div><br style="clear: left"><h3 style="clear:left">QWERTZ : Shifted</h3>
			<div class="key plain" id="K_BKQUOTE">
			<div class="keycap">°</div>
			<div class="keytext bot diacritic">ֽ </div>
			</div>
			<div class="key plain" id="K_1">
			<div class="keycap">!</div>
			<div class="keytext bot diacritic">ִ </div>
			</div>
			<div class="key plain" id="K_2">
			<div class="keycap">"</div>
			<div class="keytext">״</div>
			</div>
			<div class="key plain" id="K_3">
			<div class="keycap">§</div>
			<div class="keytext">׀</div>
			</div>
			<div class="key plain" id="K_4">
			<div class="keycap">$</div>
			<div class="keytext bot diacritic">ֱ </div>
			</div>
			<div class="key plain" id="K_5">
			<div class="keycap">%</div>
			<div class="keytext bot diacritic">ֻ </div>
			</div>
			<div class="key plain" id="K_6">
			<div class="keycap">&amp;</div>
			<div class="keytext bot diacritic">ֲ </div>
			</div>
			<div class="key plain" id="K_7">
			<div class="keycap">/</div>
			<div class="keytext">ן</div>
			</div>
			<div class="key plain" id="K_8">
			<div class="keycap">(</div>
			<div class="keytext bot diacritic">ֳ </div>
			</div>
			<div class="key plain" id="K_9">
			<div class="keycap">)</div>
			<div class="keytext top diacritic">ֹ </div>
			</div>
			<div class="key plain" id="K_0">
			<div class="keycap">=</div>
			<div class="keytext bot diacritic">ְ </div>
			</div>
			<div class="key plain" id="K_HYPHEN">
			<div class="keycap">?</div>
			<div class="keytext diacritic">ּ </div>
			</div>
			<div class="key plain" id="K_EQUAL">
			<div class="keycap">`</div>
			<div class="keytext top diacritic">֫ </div>
			</div>
			<div class="key special" id="K_BKSP">
			<div class="keycap">Rück</div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_TAB">
			<div class="keycap">Tab</div>
			</div>
			<div class="key plain" id="K_Q">
			<div class="keycap">Q</div>
			<div class="keytext">קּ</div>
			</div>
			<div class="key plain" id="K_W">
			<div class="keycap">W</div>
			<div class="keytext">וּ</div>
			</div>
			<div class="key plain" id="K_E">
			<div class="keycap">E</div>
			<div class="keytext">ךְ</div>
			</div>
			<div class="key plain" id="K_R">
			<div class="keycap">R</div>
			<div class="keytext">רּ</div>
			</div>
			<div class="key plain" id="K_T">
			<div class="keycap">T</div>
			<div class="keytext">תּ</div>
			</div>
			<div class="key plain" id="K_Z">
			<div class="keycap">Z</div>
			<div class="keytext">זּ</div>
			</div>
			<div class="key plain" id="K_U">
			<div class="keycap">U</div>
			<div class="keytext">עּ</div>
			</div>
			<div class="key plain" id="K_I">
			<div class="keycap">I</div>
			<div class="keytext">ךּ</div>
			</div>
			<div class="key plain" id="K_O">
			<div class="keycap">O</div>
			<div class="keytext">וֹּ</div>
			</div>
			<div class="key plain" id="K_P">
			<div class="keycap">P</div>
			<div class="keytext">פּ</div>
			</div>
			<div class="key plain" id="K_LBRKT">
			<div class="keycap">Ü</div>
			<div class="keytext">ףּ</div>
			</div>
			<div class="key plain" id="K_RBRKT">
			<div class="keycap">*</div>
			<div class="keytext bot diacritic">ָ </div>
			</div>
			<div class="key special" id="K_ENTER-EU1">
			<div class="keycap">Eingabe</div>
			</div>
			<br style="clear: left">

			<div class="key special" id="K_CAPS">
			<div class="keycap">Feststell</div>
			</div>
			<div class="key plain" id="K_A">
			<div class="keycap">A</div>
			<div class="keytext">אּ</div>
			</div>
			<div class="key plain" id="K_S">
			<div class="keycap">S</div>
			<div class="keytext">סּ</div>
			</div>
			<div class="key plain" id="K_D">
			<div class="keycap">D</div>
			<div class="keytext">דּ</div>
			</div>
			<div class="key plain" id="K_F">
			<div class="keycap">F</div>
			<div class="keytext">טּ</div>
			</div>
			<div class="key plain" id="K_G">
			<div class="keycap">G</div>
			<div class="keytext">גּ</div>
			</div>
			<div class="key plain" id="K_H">
			<div class="keycap">H</div>
			<div class="keytext">ץ</div>
			</div>
			<div class="key plain" id="K_J">
			<div class="keycap">J</div>
			<div class="keytext">חּ</div>
			</div>
			<div class="key plain" id="K_K">
			<div class="keycap">K</div>
			<div class="keytext">כּ</div>
			</div>
			<div class="key plain" id="K_L">
			<div class="keycap">L</div>
			<div class="keytext">לּ</div>
			</div>
			<div class="key plain" id="K_COLON">
			<div class="keycap">Ö</div>
			<div class="keytext">שּ</div>
			</div>
			<div class="key plain" id="K_QUOTE">
			<div class="keycap">Ä</div>
			<div class="keytext bot diacritic">ְ </div>
			</div>
			<div class="key plain">
			<div class="keycap">'</div>
			<div class="keytext">׳</div>
			</div>
			<div class="key special" id="K_ENTER-EU2">
			<div class="keycap"></div>
			</div>
			<br style="clear: left">
			<div class="key special" id="K_SHIFTL-EU">
			<div class="keycap" style='left:3px'>Umschalt</div>
			</div>
			<div class="key plain">
			<div class="keycap">&gt;</div>
			<div class="keytext">.</div>
			</div>
			<div class="key plain" id="K_Y">
			<div class="keycap">Y</div>
			<div class="keytext">יּ</div>
			</div>
			<div class="key plain" id="K_X">
			<div class="keycap">X</div>
			<div class="keytext">צּ</div>
			</div>
			<div class="key plain" id="K_C">
			<div class="keycap">C</div>
			<div class="keytext">שּׂ</div>
			</div>
			<div class="key plain" id="K_V">
			<div class="keycap">V</div>
			<div class="keytext">שּׁ</div>
			</div>
			<div class="key plain" id="K_B">
			<div class="keycap">B</div>
			<div class="keytext">בּ</div>
			</div>
			<div class="key plain" id="K_N">
			<div class="keycap">N</div>
			<div class="keytext">נּ</div>
			</div>
			<div class="key plain" id="K_M">
			<div class="keycap">M</div>
			<div class="keytext">מּ</div>
			</div>
			<div class="key plain" id="K_COMMA">
			<div class="keycap">;</div>
			<div class="keytext">ךָ</div>
			</div>
			<div class="key plain" id="K_PERIOD">
			<div class="keycap">:</div>
			<div class="keytext">ךֶ</div>
			</div>
			<div class="key plain" id="K_SLASH">
			<div class="keycap">_</div>
			<div class="keytext top diacritic">ֿ </div>
			</div>
			<div class="key special" id="K_SHIFTR">
			<div class="keycap">Umschalt</div>
			</div><br style="clear: left"><div class="key special" id="K_CTRLL">
			<div class="keycap">Strg</div>
			</div>
			<div style="width: 30px; display: block; float: left;"> </div>
			<div class="key special" id="K_ALTL">
			<div class="keycap">Alt</div>
			</div>
			<div class="key plain" id="K_SPACE">
			<div class="keycap"> </div>
			</div>
			<div class="key special" id="K_ALTR">
			<div class="keycap">Alt Gr</div>
			</div>
			<div style="width: 54px; display: block; float: left;"> </div>
			<div class="key special" id="K_CTRLR">
			<div class="keycap">Strg-Recht</div>
			</div>

			<br style="clear: left" />
		</div><!--End of QWERTZ tabsheet-->
	</div><!--End of tabsheets-->
</div>

<div id='Quickstart'>
	<h2>Quickstart</h2>
	<p>This Keyman keyboard works intuitively with a Latin-letter hardware layout. You can usually find Hebrew letters on this keyboard by typing the equivalent Latin letter. For example, type <span class='keys'>D</span><span class='keys'>*</span><span class='keys'>g</span> to get <span class='lang2'>דָּג</span>.</p>

	<p>Vowels and diacritical marks are typed after the letter. They can be typed in any order. For example, <span class='lang2'>דָּ</span> can be typed <span class='keys'>d</span><span class='keys'>?</span><span class='keys'>*</span> or <span class='keys'>d</span><span class='keys'>*</span><span class='keys'>?</span>. As you can see, a dagesh ( <span class='lang2'>ּ</span> ) can be typed two ways — with <span class='keys'>?</span> or by using the Shift key.</p>
	<p>To get the standard keystroke for a key instead of Hebrew output, type <span class='keys'>+</span> before the character (e.g. to get <span class='lang2'>[</span> instead of <span class='lang2'>ף</span> type <span class='keys'>+</span><span class='keys'>[</span>).</p>

</div>
<div id="Documentation"  class='break'>
	<h2>Keyboard Details</h2>
	<h3>Letters</h3>
	<p>The Galaxie Hebrew Mnemonic keyboard uses an intuitive system where most of the Hebrew letters are matched to equivalent Latin letters.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>q</span> produces <span class='lang2'>ק</span>.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>o</span> produces <span class='lang2'>וֹ</span>.</p>

	<p>Some Hebrew letters have no English match. These have been assigned the remaining keys.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>x</span> produces <span class='lang2'>צ</span>.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>c</span> produces <span class='lang2'>שׂ</span>.</p>

	<p>When followed by a <span class='keys'>Space</span>, <span class='keys'>Tab</span>, or <span class='keys'>Enter</span>, letters automatically take their word-final form.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>k</span><span class='keys'>Space</span> produces <span class='lang2'>ך</span> .</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>m</span><span class='keys'>Enter</span> produces <span class='lang2'>ם</span>.</p>

	<p>To prevent a letter from taking a final form, use <span class='keys'>Ctrl</span>+<span class='keys'>Space</span>.
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>x</span><span class='keys'>Space</span> produces <span class='lang2'>ץ </span>, but typing <span class='keys'>x</span><span class='keys'>Ctrl</span>+<span class='keys'>Space</span> produces <span class='lang2'>צ </span>.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>p</span><span class='keys'>Space</span> produces <span class='lang2'>ף </span>, but typing <span class='keys'>p</span><span class='keys'>Ctrl</span>+<span class='keys'>Space</span> produces <span class='lang2'>פ </span>.</p>
	
	<p>Final forms also each have a dedicated key.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>H</span> produces <span class='lang2'>ץ</span>.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>/</span> produces <span class='lang2'>ן</span>.</p>

	<p>Dagesh can be typed using <span class='keys'>?</span> or with <span class='keys'>Shift</span>+ the letter.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>Shift</span>+<span class='keys'>b</span> produces <span class='lang2'>בּ</span>.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>r</span><span class='keys'>?</span> produces <span class='lang2'>רּ</span>.</p>

	<p>To get the standard Latin keystroke for any key instead of Hebrew output, type <span class='keys'>+</span> first.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>+</span><span class='keys'>{</span> produces <span class='lang2'>{</span>.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>+</span><span class='keys'>+</span> produces <span class='lang2'>+</span>.</p>	
	
	<h3  class='break'>Vowels + Diacritics</h3>
	<p>The Galaxie Hebrew keyboard includes the following vowels and diacritics. </p>

	<table class='grid' id='diacritic' style='margin-left:40px'>
		<col class='name' />
		<col class='char' />
		<col class='kbd' />
		<thead>
			<tr style='text-align:center; font-weight:bold'>
				<th>Name</th>
				<th>Character</th>
				<th>Keys</th>
			</tr>
		</thead>
		<tbody>
			<tr style='text-align:center'>
				<td>Sh'wa</td>
				<td class='lang2' style='font-size:24pt'>ְ</td>
				<td><span class='keys'>=</span><b>&nbsp;or&nbsp;</b><span class='keys'>Ä</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Hiriq</td>
				<td class='lang2' style='font-size:24pt'>ִ</td>
				<td><span class='keys'>!</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Tsere</td>
				<td class='lang2' style='font-size:24pt'>ֵ</td>
				<td><span class='keys'>@</span><b>,&nbsp;</b><span class='keys'>ä</span><b>,&nbsp;</b><span class='keys'>¨</span><b>&nbsp;or&nbsp;</b><span class='keys'>é</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Segol</td>
				<td class='lang2' style='font-size:24pt'>ֶ</td>
				<td><span class='keys'>#</span><b>&nbsp;or&nbsp;</b><span class='keys'>è</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Hatef Segol</td>
				<td class='lang2' style='font-size:24pt'>ֱ</td>
				<td><span class='keys'>$</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Qubuts</td>
				<td class='lang2' style='font-size:24pt'>ֻ</td>
				<td><span class='keys'>%</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Patakh</td>
				<td class='lang2' style='font-size:24pt'>ַ</td>
				<td><span class='keys'>^</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Hatef Patakh</td>
				<td class='lang2' style='font-size:24pt'>ֲ</td>
				<td><span class='keys'>&amp;</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Qamats</td>
				<td class='lang2' style='font-size:24pt'>ָ</td>
				<td><span class='keys'>*</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Hatef Qamats</td>
				<td class='lang2' style='font-size:24pt'>ֳ</td>
				<td><span class='keys'>(</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Holam</td>
				<td class='lang2' style='font-size:24pt'><br/>ֹ</td>
				<td><span class='keys'>)</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Raphe</td>
				<td class='lang2' style='font-size:24pt'>ֿ</td>
				<td><span class='keys'>_</span></td>
			</tr>
			<tr style='text-align:center'>
				<td>Dagesh or Mapiq</td>
				<td class='lang2' style='font-size:24pt'>ּ</td>
				<td><span class='keys'>?</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Ole</td>
				<td class='lang2' style='font-size:24pt'>֫</td>
				<td><span class='keys'>`</span><b>&nbsp;or&nbsp;</b><span class='keys'>²</span></td>
			</tr>		
			<tr style='text-align:center'>
				<td>Mahpach</td>
				<td class='lang2' style='font-size:24pt'>֤</td>
				<td><span class='keys'>´</span><b>,&nbsp;</b><span class='keys'>~</span><b>&nbsp;or&nbsp;</b><span class='keys'>é</span></td>
			</tr>
			<tr style='text-align:center'>
				<td>Meteg</td>
				<td class='lang2' style='font-size:24pt'>ֽ</td>
				<td><span class='keys'>\</span><b>&nbsp;or&nbsp;</b><span class='keys'>°</span></td>
			</tr>
		</tbody>
	</table>

	<p>Vowels and diacritical marks are typed after the letter. They can be typed in any order.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>d</span><span class='keys'>?</span><span class='keys'>*</span> or <span class='keys'>d</span><span class='keys'>*</span><span class='keys'>?</span> produces <span class='lang2'>דָּ</span>.</p>

	<p>On European hardware layouts where <span class='keys'>`</span>,<span class='keys'>´</span>,<span class='keys'>^</span>,<span class='keys'>~</span>, and/or <span class='keys'>¨</span> already function as deadkeys, you'll need to type a <span class='keys'>Space</span> after just those keys in order to get the proper vowel or diacritic.</p>
	<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>b</span><span class='keys'>´</span><span class='keys'>Space</span> on a  German QWERTZ keyboard produces <span class='lang2'>ב֤</span>.</p>

	<h3  class='break'>Punctuation</h3>
	<p>The Galaxie Hebrew keyboard includes the following Hebrew punctuation. </p>
	<table class='grid' style='margin-left:40px'>
		<col class='name' />
		<col class='char' />
		<col class='kbd' />		
		<thead>
			<tr style='text-align:center; font-weight:bold'>
				<th>Character</th>
				<th>Character</th>
				<th>Keys</th>
			</tr>
		</thead>
		<tbody>
			<tr style='text-align:center'>
				<td>Comma</td>
				<td class='lang2' style='font-size:24pt'>,</td>
				<td><span class='keys'>,</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Sof Pasuq</td>
				<td class='lang2' style='font-size:24pt'>׃</td>
				<td><span class='keys'>.</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Full Stop</td>
				<td class='lang2' style='font-size:24pt'>.</td>
				<td><span class='keys'>&gt;</span></td>
			</tr>		
			<tr style='text-align:center'>
				<td>Geresh</td>
				<td class='lang2' style='font-size:24pt'>׳</td>
				<td><span class='keys'>'</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Gershayim</td>
				<td class='lang2' style='font-size:24pt'>״</td>
				<td><span class='keys'>"</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Maqaf</td>
				<td class='lang2' style='font-size:24pt'>־</td>
				<td><span class='keys'>-</span></td>
			</tr>	
			<tr style='text-align:center'>
				<td>Paseq</td>
				<td class='lang2' style='font-size:24pt'>׀</td>
				<td><span class='keys'>¦</span><b>&nbsp;or&nbsp;</b><span class='keys'>§</span></td>
			</tr>
		</tbody>
	</table>	

</div>

<div id="Technical">
	<h2>Technical Information</h2>
	<h3>System Requirements</h3>
	<p>It is recommended that you use one of the following hardware layouts with this Keyman keyboard:</p>
	<ul class='columns'>
		<li>AZERTY French</li>
		<li>QWERTY UK</li>
		<li>QWERTY US</li>
		<li>QWERTZ German</li>
	</ul>

	<h3>Unicode Version</h3>
	<p>This keyboard complies with Unicode 6.0</p>

</div>

<script type='text/javascript'><!--
 
 $ = function(n,e)
 {
   return (e ? e : document).getElementById(n);
 }
 
 window.onload = function()
 {
  e = $('osk_tabs');
  e2 = $('osk_tabsheets');
  var ch = [$('osk_us_tab'), $('osk_uk_tab'), $('osk_fr_tab'), $('osk_de_tab')];
  var ch2 = [$('osk_us_tabsheet'), $('osk_uk_tabsheet'), $('osk_fr_tabsheet'), $('osk_de_tabsheet')];
  for(var i = 0; i < ch.length; i++) 
	  ch[i].onclick = (function(i) { return function(e) 
	  { 
		for(var j = 0; j < ch.length; j++)
		{
		  ch[j].className = "osk_tab" + (i == j ? "_selected" : "");
		  ch2[j].className = "osk_tabsheet" + (i == j ? "_selected" : "");
		}
	  }
	})(i); 
}
   --></script>


