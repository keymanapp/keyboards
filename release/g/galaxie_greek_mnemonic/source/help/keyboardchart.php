﻿<?php
    require_once('includes/template.php');
    $pagename = 'Galaxie Greek (Mnemonic) Typing Chart';
  $pagetitle = 'Galaxie Greek (Mnemonic) Typing Chart';
  $pagestyle = <<<END
        table {border-collapse:collapse !important; margin:10px 0px 20px 40px;}
        .grid col {background-color:#ffffff;}
        col.name {width:100px;}
        col.char {width:85px;}
        col.kbd {width:120px;}
        .grid td, .grid th {padding:2px 5px;border-bottom:1px solid #ddd;}
        .grid tr {text-align:center; font-weight:normal; height:80px;}
        .grid thead tr{height:30px;}
        .grid .headrow {font-weight:bold; color:#AD4A28; background-color:#eee; text-align:left;}
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
        .key {  float: left; display: block;  position: relative; overflow: hidden; height: 35px; margin: 2px 0px 0px 2px; border: solid 1px grey; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;  } #K_BKQUOTE { width:34px; } #K_BKSP { width: 60px; } #K_TAB { width: 52px;		 } #K_BKSLASH { width: 42px;  } #K_CAPS { width: 62px; } #K_ENTER { width: 70px;  }		 #K_ENTER-EU1 { width: 42px;  -webkit-border-radius: 3px 3px 0px; -moz-border-radius: 3px 3px 0px; border-radius: 3px 3px 0px; } #K_ENTER-EU1 .keycap { left:3px !important; }    #K_ENTER-EU2 { width: 32px;  margin-top:-1px !important;  border-top:none !important; height:39px !important; -webkit-border-radius: 0px 0px 3px 3px; -moz-border-radius: 0px 0px 3px 3px; border-radius: 0px 0px 3px 3px; }		 #K_SHIFTL { width: 85px; }                 #K_SHIFTL-EU { width: 47px; }     #K_oE2 { display:none;         }      #K_SHIFTR { width: 85px; }   			 #K_CTRLL { width: 60px; } 		 #K_ALTL { width: 50px; }    #K_SPACE { width: 234px;   }  #K_ALTR { width: 50px; }  #K_CTRLR { width: 60px; } 			 .plain {  background-repeat: no-repeat; width: 34px; }  .special { background-repeat: no-repeat;  background: #c0c0c0;  }  .keycap { font: bold 7pt Arial;  position: absolute;  left: 6px;  top: 6px; }  .key .keycap {           display: block; }  .special .keycap { display: block; }  .keytext {  font:	19px "Gentium Plus";  position: absolute;  display: block; right: 5px; bottom: 0px; color: blue; } .keytext.LTN { font-size:12px !important; color: #AD4A28 !important; right:3px !important;  } .hebrew .keytext { font-family:"Ezra SIL"; } .hebrew .diacritic { font-size:30px; color:green; right:15px; bottom:-6px; } .hebrew .top { bottom:-12px !important; } .hebrew .bot{ bottom:2px !important; }
        .highlightKeys img { display: none }  .highlightKeys .key-print { display: inline }
END;
head([
  'title' => $pagetitle,
  'css' => ['template.css', 'keyboard.css', 'keys.css'],
  'index' => false,
  'toc' => false
]);
?>
    <div id='chart'>
        <h1>Complete Typing Chart</h1>
        <p>The following charts list all the characters available with the Galaxie Greek (Mnemonic) keyboard. If a key combination is not permitted by the language or available in this keyboard, it is left blank.</p>
        <p>You can type any character in the chart by pressing the key in the first column followed by the key in the top row for the desired diacritic. Diacritics can be typed in any order. When editing on the spot, diacritics can be removed by typing them
            again.
        </p>
        <p>The standard Latin ouput for a key can be generated by typing <span class='keys'>=</span> followed by the desired key.</p>
        <h3>Vowels — One Diacritic</h3>
        <table border=0 cellspacing=2 cellpadding=1 class='grid'>
            <col width=100 class='headrow' />
            <col span=9 width=50/>
            <tr class='headrow'>
                <td style='font-weight:bold;' valign=bottom>Diacritics<br/><span style='text-decoration:underline'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/>Vowels</td>
                <td><span class='lang2'>◌̔</span><br/><span class='keys'>J</span><b>&nbsp;or&nbsp;</b><span class='keys'>[</span></td>
                <td><span class='lang2'>◌̓</span><br/><span class='keys'>j</span><b>&nbsp;or&nbsp;</b><span class='keys'>]</span></td>
                <td><span class='lang2'>◌̀</span><br/><span class='keys'>V</span><b>,&nbsp;</b><span class='keys'>\</span><b>&nbsp;or&nbsp;</b><span class='keys'>`</span></td>
                <td><span class='lang2'>◌́</span><br/><span class='keys'>v</span><b>,&nbsp;</b><span class='keys'>/</span><b>&nbsp;or&nbsp;</b><span class='keys'>´</span></td>
                <td><span class='lang2'>◌͂</span><br/><span class='keys'>^</span><b>,&nbsp;</b><span class='keys'>~</span><b>&nbsp;or&nbsp;</b><span class='keys'>"</span></td>
                <td><span class='lang2'>◌ͅ</span><br/><span class='keys'>¦</span><b>,&nbsp;</b><span class='keys'>§</span><b>,&nbsp;</b><span class='keys'>ñ</span><b>&nbsp;or&nbsp;</b><span class='keys'>Ñ</span></td>
                <td><span class='lang2'>◌̈</span><br/><span class='keys'>+</span><b>,&nbsp;</b><span class='keys'>?</span><b>&nbsp;or&nbsp;</b><span class='keys'>¨</span></td>
                <td><span class='lang2'>◌̄</span><br/><span class='keys'>-</span></td>
                <td><span class='lang2'>◌̆</span><br/><span class='keys'>_</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>α</span><br/><span class='keys'>a</span></td>
                <td><span class='lang2'>ἁ</span></td>
                <td><span class='lang2'>ἀ</span></td>
                <td><span class='lang2'>ὰ</span></td>
                <td><span class='lang2'>ά</span></td>
                <td><span class='lang2'>ᾶ</span></td>
                <td><span class='lang2'>ᾳ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ᾱ</span></td>
                <td><span class='lang2'>ᾰ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ε</span><br/><span class='keys'>e</span></td>
                <td><span class='lang2'>ἑ</span></td>
                <td><span class='lang2'>ἐ</span></td>
                <td><span class='lang2'>ὲ</span></td>
                <td><span class='lang2'>έ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>η</span><br/><span class='keys'>h</span></td>
                <td><span class='lang2'>ἡ</span></td>
                <td><span class='lang2'>ἠ</span></td>
                <td><span class='lang2'>ὴ</span></td>
                <td><span class='lang2'>ή</span></td>
                <td><span class='lang2'>ῆ</span></td>
                <td><span class='lang2'>ῃ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ι</span><br/><span class='keys'>i</span></td>
                <td><span class='lang2'>ἱ</span></td>
                <td><span class='lang2'>ἰ</span></td>
                <td><span class='lang2'>ὶ</span></td>
                <td><span class='lang2'>ί</span></td>
                <td><span class='lang2'>ῖ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ϊ</span></td>
                <td><span class='lang2'>ῑ</span></td>
                <td><span class='lang2'>ῐ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ο</span><br/><span class='keys'>o</span></td>
                <td><span class='lang2'>ὁ</span></td>
                <td><span class='lang2'>ὀ</span></td>
                <td><span class='lang2'>ὸ</span></td>
                <td><span class='lang2'>ό</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>υ</span><br/><span class='keys'>u</span></td>
                <td><span class='lang2'>ὑ</span></td>
                <td><span class='lang2'>ὐ</span></td>
                <td><span class='lang2'>ὺ</span></td>
                <td><span class='lang2'>ύ</span></td>
                <td><span class='lang2'>ῦ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ϋ</span></td>
                <td><span class='lang2'>ῡ</span></td>
                <td><span class='lang2'>ῠ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ω</span><br/><span class='keys'>w</span></td>
                <td><span class='lang2'>ὡ</span></td>
                <td><span class='lang2'>ὠ</span></td>
                <td><span class='lang2'>ὼ</span></td>
                <td><span class='lang2'>ώ</span></td>
                <td><span class='lang2'>ῶ</span></td>
                <td><span class='lang2'>ῳ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr class='empty'>
                <td colspan=10>&nbsp;</td>
            </tr>
            <tr>
                <td><span class='lang2'>Α</span><br/><span class='keys'>A</span></td>
                <td><span class='lang2'>Ἁ</span></td>
                <td><span class='lang2'>Ἀ</span></td>
                <td><span class='lang2'>Ὰ</span></td>
                <td><span class='lang2'>Ά</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ᾼ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ᾱ</span></td>
                <td><span class='lang2'>Ᾰ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Ε</span><br/><span class='keys'>E</span></td>
                <td><span class='lang2'>Ἑ</span></td>
                <td><span class='lang2'>Ἐ</span></td>
                <td><span class='lang2'>Ὲ</span></td>
                <td><span class='lang2'>Έ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Η</span><br/><span class='keys'>H</span></td>
                <td><span class='lang2'>Ἡ</span></td>
                <td><span class='lang2'>Ἠ</span></td>
                <td><span class='lang2'>Ὴ</span></td>
                <td><span class='lang2'>Ή</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῌ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Ι</span><br/><span class='keys'>I</span></td>
                <td><span class='lang2'>Ἱ</span></td>
                <td><span class='lang2'>Ἰ</span></td>
                <td><span class='lang2'>Ὶ</span></td>
                <td><span class='lang2'>Ί</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ϊ</span></td>
                <td><span class='lang2'>Ῑ</span></td>
                <td><span class='lang2'>Ῐ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Ο</span><br/><span class='keys'>O</span></td>
                <td><span class='lang2'>Ὁ</span></td>
                <td><span class='lang2'>Ὀ</span></td>
                <td><span class='lang2'>Ὸ</span></td>
                <td><span class='lang2'>Ό</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Υ</span><br/><span class='keys'>U</span></td>
                <td><span class='lang2'>Ὑ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ὺ</span></td>
                <td><span class='lang2'>Ύ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ϋ</span></td>
                <td><span class='lang2'>Ῡ</span></td>
                <td><span class='lang2'>Ῠ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Ω</span><br/><span class='keys'>W</span></td>
                <td><span class='lang2'>Ὡ</span></td>
                <td><span class='lang2'>Ὠ</span></td>
                <td><span class='lang2'>Ὼ</span></td>
                <td><span class='lang2'>Ώ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῼ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
        </table>
        <h3>Vowels - Two Diacritics</h3>
        <p>Double diacritics can be typed in any order, not only the order shown, except the circumflex on capital letters. It cannot be typed first because a capital Greek letter cannot take a circumflex without a breathing mark.</p>
        <h4>Breathing Mark + Second Diacritic</h4>
        <table border=0 cellspacing=2 cellpadding=1 class='grid'>
            <col width=100 class='headrow' />
            <col span=10 width=50 />
            <tr class='headrow'>
                <td rowspan='3' style='font-weight:bold;' valign=bottom>Diacritics<br/><span style='text-decoration:underline'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/>Vowels</td>
                <td colspan='5'><span class='lang2'>◌̔</span><br/><span class='keys'>J</span><b>&nbsp;or&nbsp;</b><span class='keys'>[</span></td>
                <td colspan='5'><span class='lang2'>◌̓</span><br/><span class='keys'>j</span><b>&nbsp;or&nbsp;</b><span class='keys'>]</span></td>
            </tr>
            <tr style='background-color:#ffffff'>
                <td colspan=5 class='headrow plus'>+</td>
                <td colspan=5 class='headrow plus'>+</td>
            </tr>
            <tr class='headrow'>
                <td><span class='lang2'>◌̀</span><br/><span class='keys'>V</span><b>,&nbsp;</b><span class='keys'>\</span><b>&nbsp;or&nbsp;</b><span class='keys'>`</span></td>
                <td><span class='lang2'>◌́</span><br/><span class='keys'>v</span><b>,&nbsp;</b><span class='keys'>/</span><b>&nbsp;or&nbsp;</b><span class='keys'>´</span></td>
                <td><span class='lang2'>◌͂</span><br/><span class='keys'>^</span><b>,&nbsp;</b><span class='keys'>~</span><b>&nbsp;or&nbsp;</b><span class='keys'>"</span></td>
                <td><span class='lang2'>◌ͅ</span><br/><span class='keys'>¦</span><b>,&nbsp;</b><span class='keys'>§</span><b>,&nbsp;</b><span class='keys'>ñ</span><b>&nbsp;or&nbsp;</b><span class='keys'>Ñ</span></td>
                <td><span class='lang2'>◌̄</span><br/><span class='keys'>-</span></td>
                <td><span class='lang2'>◌̀</span><br/><span class='keys'>V</span><b>,&nbsp;</b><span class='keys'>\</span><b>&nbsp;or&nbsp;</b><span class='keys'>`</span></td>
                <td><span class='lang2'>◌́</span><br/><span class='keys'>v</span><b>,&nbsp;</b><span class='keys'>/</span><b>&nbsp;or&nbsp;</b><span class='keys'>´</span></td>
                <td><span class='lang2'>◌͂</span><br/><span class='keys'>^</span><b>,&nbsp;</b><span class='keys'>~</span><b>&nbsp;or&nbsp;</b><span class='keys'>"</span></td>
                <td><span class='lang2'>◌ͅ</span><br/><span class='keys'>¦</span><b>,&nbsp;</b><span class='keys'>§</span><b>,&nbsp;</b><span class='keys'>ñ</span><b>&nbsp;or&nbsp;</b><span class='keys'>Ñ</span></td>
                <td><span class='lang2'>◌̄</span><br/><span class='keys'>-</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>α</span><br/><span class='keys'>a</span></td>
                <td><span class='lang2'>ἃ</span></td>
                <td><span class='lang2'>ἅ</span></td>
                <td><span class='lang2'>ἇ</span></td>
                <td><span class='lang2'>ᾁ</span></td>
                <td><span class='lang2'>ᾱ̔</span></td>
                <td><span class='lang2'>ἂ</span></td>
                <td><span class='lang2'>ἄ</span></td>
                <td><span class='lang2'>ἆ</span></td>
                <td><span class='lang2'>ᾀ</span></td>
                <td><span class='lang2'>ᾱ̓</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ε</span><br/><span class='keys'>e</span></td>
                <td><span class='lang2'>ἓ</span></td>
                <td><span class='lang2'>ἕ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ἒ</span></td>
                <td><span class='lang2'>ἔ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>η</span><br/><span class='keys'>h</span></td>
                <td><span class='lang2'>ἣ</span></td>
                <td><span class='lang2'>ἥ</span></td>
                <td><span class='lang2'>ἧ</span></td>
                <td><span class='lang2'>ᾑ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ἢ</span></td>
                <td><span class='lang2'>ἤ</span></td>
                <td><span class='lang2'>ἦ</span></td>
                <td><span class='lang2'>ᾐ</span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ι</span><br/><span class='keys'>i</span></td>
                <td><span class='lang2'>ἳ</span></td>
                <td><span class='lang2'>ἵ</span></td>
                <td><span class='lang2'>ἷ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῑ̔</span></td>
                <td><span class='lang2'>ἲ</span></td>
                <td><span class='lang2'>ἴ</span></td>
                <td><span class='lang2'>ἶ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῑ̓</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ο</span><br/><span class='keys'>o</span></td>
                <td><span class='lang2'>ὃ</span></td>
                <td><span class='lang2'>ὅ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ὂ</span></td>
                <td><span class='lang2'>ὄ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>υ</span><br/><span class='keys'>u</span></td>
                <td><span class='lang2'>ὓ</span></td>
                <td><span class='lang2'>ὕ</span></td>
                <td><span class='lang2'>ὗ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῡ̔</span></td>
                <td><span class='lang2'>ὒ</span></td>
                <td><span class='lang2'>ὔ</span></td>
                <td><span class='lang2'>ὖ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῡ̓</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ω</span><br/><span class='keys'>w</span></td>
                <td><span class='lang2'>ὣ</span></td>
                <td><span class='lang2'>ὥ</span></td>
                <td><span class='lang2'>ὧ</span></td>
                <td><span class='lang2'>ᾡ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ὢ</span></td>
                <td><span class='lang2'>ὤ</span></td>
                <td><span class='lang2'>ὦ</span></td>
                <td><span class='lang2'>ᾠ</span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr class='empty'>
                <td colspan=11>&nbsp;</td>
            </tr>
            <tr>
                <td><span class='lang2'>Α</span><br/><span class='keys'>A</span></td>
                <td><span class='lang2'>Ἃ</span></td>
                <td><span class='lang2'>Ἅ</span></td>
                <td><span class='lang2'>Ἇ</span></td>
                <td><span class='lang2'>ᾉ</span></td>
                <td><span class='lang2'>Ᾱ̔</span></td>
                <td><span class='lang2'>Ἂ</span></td>
                <td><span class='lang2'>Ἄ</span></td>
                <td><span class='lang2'>Ἆ</span></td>
                <td><span class='lang2'>ᾈ</span></td>
                <td><span class='lang2'>Ᾱ̓</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Ε</span><br/><span class='keys'>E</span></td>
                <td><span class='lang2'>Ἓ</span></td>
                <td><span class='lang2'>Ἕ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ἔ</span></td>
                <td><span class='lang2'>Ἔ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Η</span><br/><span class='keys'>H</span></td>
                <td><span class='lang2'>Ἣ</span></td>
                <td><span class='lang2'>Ἥ</span></td>
                <td><span class='lang2'>Ἧ</span></td>
                <td><span class='lang2'>ᾙ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ἢ</span></td>
                <td><span class='lang2'>Ἤ</span></td>
                <td><span class='lang2'>Ἦ</span></td>
                <td><span class='lang2'>ᾘ</span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Ι</span><br/><span class='keys'>I</span></td>
                <td><span class='lang2'>Ἳ</span></td>
                <td><span class='lang2'>Ἵ</span></td>
                <td><span class='lang2'>Ἷ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ῑ̔</span></td>
                <td><span class='lang2'>Ἲ</span></td>
                <td><span class='lang2'>Ἴ</span></td>
                <td><span class='lang2'>Ἶ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ῑ̓</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Ο</span><br/><span class='keys'>O</span></td>
                <td><span class='lang2'>Ὃ</span></td>
                <td><span class='lang2'>Ὅ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ὂ</span></td>
                <td><span class='lang2'>Ὄ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Υ</span><br/><span class='keys'>U</span></td>
                <td><span class='lang2'>Ὓ</span></td>
                <td><span class='lang2'>Ὕ</span></td>
                <td><span class='lang2'>Ὗ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ῡ̔</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Ω</span><br/><span class='keys'>W</span></td>
                <td><span class='lang2'>Ὣ</span></td>
                <td><span class='lang2'>Ὥ</span></td>
                <td><span class='lang2'>Ὧ</span></td>
                <td><span class='lang2'>ᾩ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>Ὢ</span></td>
                <td><span class='lang2'>Ὤ</span></td>
                <td><span class='lang2'>Ὦ</span></td>
                <td><span class='lang2'>ᾨ</span></td>
                <td><span class='lang2'></span></td>
            </tr>
        </table>
        <h4>Accent + Iota Subscript &amp; Accent + Diaeresis</h4>
        <table border=0 cellspacing=2 cellpadding=1 class='grid'>
            <col width=100 class='headrow' />
            <col span=6 width=100 />
            <tr class='headrow'>
                <td rowspan='3' style='font-weight:bold;' valign=bottom>Diacritics<br/><span style='text-decoration:underline'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/>Vowels</td>
                <td colspan='2'><span class='lang2'>◌̀</span><br/><span class='keys'>V</span><b>,&nbsp;</b><span class='keys'>\</span><b>&nbsp;or&nbsp;</b><span class='keys'>`</span></td>
                <td colspan='2'><span class='lang2'>◌́</span><br/><span class='keys'>v</span><b>,&nbsp;</b><span class='keys'>/</span><b>&nbsp;or&nbsp;</b><span class='keys'>´</span></td>
                <td colspan='2'><span class='lang2'>◌͂</span><br/><span class='keys'>^</span><b>,&nbsp;</b><span class='keys'>~</span><b>&nbsp;or&nbsp;</b><span class='keys'>"</span></td>
            </tr>
            <tr style='background-color:#ffffff'>
                <td colspan=2 class='headrow plus'>+</td>
                <td colspan=2 class='headrow plus'>+</td>
                <td colspan=2 class='headrow plus'>+</td>
            </tr>
            <tr class='headrow'>
                <td><span class='lang2'>◌ͅ</span><br/><span class='keys'>¦</span><b>,&nbsp;</b><span class='keys'>§</span><b>,&nbsp;</b><span class='keys'>ñ</span><b>&nbsp;or&nbsp;</b><span class='keys'>Ñ</span></td>
                <td><span class='lang2'>◌̈</span><br/><span class='keys'>+</span><b>,&nbsp;</b><span class='keys'>?</span><b>&nbsp;or&nbsp;</b><span class='keys'>¨</span></td>
                <td><span class='lang2'>◌ͅ</span><br/><span class='keys'>¦</span><b>,&nbsp;</b><span class='keys'>§</span><b>,&nbsp;</b><span class='keys'>ñ</span><b>&nbsp;or&nbsp;</b><span class='keys'>Ñ</span></td>
                <td><span class='lang2'>◌̈</span><br/><span class='keys'>+</span><b>,&nbsp;</b><span class='keys'>?</span><b>&nbsp;or&nbsp;</b><span class='keys'>¨</span></td>
                <td><span class='lang2'>◌ͅ</span><br/><span class='keys'>¦</span><b>,&nbsp;</b><span class='keys'>§</span><b>,&nbsp;</b><span class='keys'>ñ</span><b>&nbsp;or&nbsp;</b><span class='keys'>Ñ</span></td>
                <td><span class='lang2'>◌̈</span><br/><span class='keys'>+</span><b>,&nbsp;</b><span class='keys'>?</span><b>&nbsp;or&nbsp;</b><span class='keys'>¨</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>α</span><br/><span class='keys'>a</span></td>
                <td><span class='lang2'>ᾲ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ᾴ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ᾷ</span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>η</span><br/><span class='keys'>h</span></td>
                <td><span class='lang2'>ῂ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῄ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῇ</span></td>
                <td><span class='lang2'></span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ι</span><br/><span class='keys'>i</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῒ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ΐ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῗ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>υ</span><br/><span class='keys'>u</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῢ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ΰ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῧ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ω</span><br/><span class='keys'>w</span></td>
                <td><span class='lang2'>ῲ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῴ</span></td>
                <td><span class='lang2'></span></td>
                <td><span class='lang2'>ῷ</span></td>
                <td><span class='lang2'></span></td>
            </tr>

        </table>


        <h3>Three Diacritics</h3>
        <p>Triple diacritics can be typed in any order, not only the order shown, except the circumflex on capital letters. It cannot be typed first because a capital Greek letter cannot take a circumflex without a breathing mark.</p>
        <table border=0 cellspacing=2 cellpadding=1 class='grid'>
            <col width=100 class='headrow' />
            <col span=10 width=50 />
            <tr class='headrow'>
                <td rowspan='5' style='font-weight:bold;' valign=bottom>Diacritics<br/><span style='text-decoration:underline'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/>Vowels</td>
                <td colspan='3'><span class='lang2'>◌̔</span><br/><span class='keys'>J</span><b>&nbsp;or&nbsp;</b><span class='keys'>[</span></td>
                <td colspan='3'><span class='lang2'>◌̓</span><br/><span class='keys'>j</span><b>&nbsp;or&nbsp;</b><span class='keys'>]</span></td>
            </tr>
            <tr style='background-color:#ffffff'>
                <td colspan='3' class='headrow plus'>+</td>
                <td colspan='3' class='headrow plus'>+</td>
            </tr>
            <tr class='headrow'>
                <td><span class='lang2'>◌̀</span><br/><span class='keys'>V</span><b>,&nbsp;</b><span class='keys'>\</span><b>&nbsp;or&nbsp;</b><span class='keys'>`</span></td>
                <td><span class='lang2'>◌́</span><br/><span class='keys'>v</span><b>,&nbsp;</b><span class='keys'>/</span><b>&nbsp;or&nbsp;</b><span class='keys'>´</span></td>
                <td><span class='lang2'>◌͂</span><br/><span class='keys'>^</span><b>,&nbsp;</b><span class='keys'>~</span><b>&nbsp;or&nbsp;</b><span class='keys'>"</span></td>
                <td><span class='lang2'>◌̀</span><br/><span class='keys'>V</span><b>,&nbsp;</b><span class='keys'>\</span><b>&nbsp;or&nbsp;</b><span class='keys'>`</span></td>
                <td><span class='lang2'>◌́</span><br/><span class='keys'>v</span><b>,&nbsp;</b><span class='keys'>/</span><b>&nbsp;or&nbsp;</b><span class='keys'>´</span></td>
                <td><span class='lang2'>◌͂</span><br/><span class='keys'>^</span><b>,&nbsp;</b><span class='keys'>~</span><b>&nbsp;or&nbsp;</b><span class='keys'>"</span></td>
            </tr>
            <tr style='background-color:#ffffff'>
                <td class='headrow plus'>+</td>
                <td class='headrow plus'>+</td>
                <td class='headrow plus'>+</td>
                <td class='headrow plus'>+</td>
                <td class='headrow plus'>+</td>
                <td class='headrow plus'>+</td>
            </tr>
            <tr class='headrow'>
                <td colspan='6'><span class='lang2'>◌ͅ</span><br/><span class='keys'>¦</span><b>,&nbsp;</b><span class='keys'>§</span><b>,&nbsp;</b><span class='keys'>ñ</span><b>&nbsp;or&nbsp;</b><span class='keys'>Ñ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>α</span><br/><span class='keys'>a</span></td>
                <td><span class='lang2'>ᾃ</span></td>
                <td><span class='lang2'>ᾅ</span></td>
                <td><span class='lang2'>ᾇ</span></td>
                <td><span class='lang2'>ᾂ</span></td>
                <td><span class='lang2'>ᾄ</span></td>
                <td><span class='lang2'>ᾆ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>η</span><br/><span class='keys'>h</span></td>
                <td><span class='lang2'>ᾓ</span></td>
                <td><span class='lang2'>ᾕ</span></td>
                <td><span class='lang2'>ᾗ</span></td>
                <td><span class='lang2'>ᾒ</span></td>
                <td><span class='lang2'>ᾔ</span></td>
                <td><span class='lang2'>ᾖ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>ω</span><br/><span class='keys'>w</span></td>
                <td><span class='lang2'>ᾣ</span></td>
                <td><span class='lang2'>ᾥ</span></td>
                <td><span class='lang2'>ᾧ</span></td>
                <td><span class='lang2'>ᾢ</span></td>
                <td><span class='lang2'>ᾤ</span></td>
                <td><span class='lang2'>ᾦ</span></td>
            </tr>
            <tr class='empty'>
                <td colspan='7'>&nbsp;</td>
            </tr>
            <tr>
                <td><span class='lang2'>Α</span><br/><span class='keys'>A</span></td>
                <td><span class='lang2'>ᾋ</span></td>
                <td><span class='lang2'>ᾍ</span></td>
                <td><span class='lang2'>ᾏ</span></td>
                <td><span class='lang2'>ᾊ</span></td>
                <td><span class='lang2'>ᾌ</span></td>
                <td><span class='lang2'>ᾎ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Η</span><br/><span class='keys'>H</span></td>
                <td><span class='lang2'>ᾛ</span></td>
                <td><span class='lang2'>ᾝ</span></td>
                <td><span class='lang2'>ᾟ</span></td>
                <td><span class='lang2'>ᾚ</span></td>
                <td><span class='lang2'>ᾜ</span></td>
                <td><span class='lang2'>ᾞ</span></td>
            </tr>
            <tr>
                <td><span class='lang2'>Ω</span><br/><span class='keys'>W</span></td>
                <td><span class='lang2'>ᾫ</span></td>
                <td><span class='lang2'>ᾭ</span></td>
                <td><span class='lang2'>ᾯ</span></td>
                <td><span class='lang2'>ᾪ</span></td>
                <td><span class='lang2'>ᾬ</span></td>
                <td><span class='lang2'>ᾮ</span></td>
            </tr>
        </table>
        <h3>Consonants</h3>
        <table border=0 cellspacing=2 cellpadding=1 class='grid'>
            <col width=120 class='headrow' />
            <col span='2' width=100 />
            <col width=100 class='headrow' />
            <col span='1' width=100 />
            <tr class='headrow'>
                <tr class='headrow'>
                    <td style='font-weight:bold;'>Lowercase</td>
                    <td><span class='lang2'>◌̔</span><br/><span class='keys'>J</span><b>&nbsp;or&nbsp;</b><span class='keys'>[</span></td>
                    <td><span class='lang2'>◌̓</span><br/><span class='keys'>j</span><b>&nbsp;or&nbsp;</b><span class='keys'>]</span></td>
                    <td style='font-weight:bold;'>Uppercase</td>
                    <td><span class='lang2'>◌̔</span><br/><span class='keys'>J</span><b>&nbsp;or&nbsp;</b><span class='keys'>[</span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>β</span><br/><span class='keys'>b</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Β</span><br/><span class='keys'>B</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>γ</span><br/><span class='keys'>g</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Γ</span><br/><span class='keys'>G</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>δ</span><br/><span class='keys'>d</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Δ</span><br/><span class='keys'>D</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>ζ</span><br/><span class='keys'>z</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Ζ</span><br/><span class='keys'>Z</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>θ</span><br/><span class='keys'>q</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Θ</span><br/><span class='keys'>Q</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>κ</span><br/><span class='keys'>k</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Κ</span><br/><span class='keys'>K</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>λ</span><br/><span class='keys'>l</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Λ</span><br/><span class='keys'>L</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>μ</span><br/><span class='keys'>m</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Μ</span><br/><span class='keys'>M</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>ν</span><br/><span class='keys'>n</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Ν</span><br/><span class='keys'>N</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>ξ</span><br/><span class='keys'>c</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Ξ</span><br/><span class='keys'>C</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>π</span><br/><span class='keys'>p</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'>Π</span><br/><span class='keys'>P</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>ρ</span><br/><span class='keys'>r</span></td>
                    <td><span class='lang2'>ῥ</span></td>
                    <td><span class='lang2'>ῤ</span></td>
                    <td><span class='lang2'>Ρ</span><br/><span class='keys'>R</span></td>
                    <td><span class='lang2'>Ῥ</span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>σ</span><br/><span class='keys'>s</span></td>
                    <td><span class='lang2'></span></td>
                    <td><span class='lang2'></span></td>
                    <td rowspan='2'><span class='lang2'>Σ</span><br/><span class='keys'>S</span></td>
                    <td><span class='lang2'></span></td>
                </tr>
                <tr>
                    <td><span class='lang2'>ς</span><br/><span class='keys'>'</span><b>,</b><span class='keys'>ç</span><b>,</b><span class='keys'>Ç</span><b>,</b><span class='keys'>ß</span><b>,</b><br/><b>OR</b><br/><span class='keys'>s</span><b> + non-letter<b></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' ></span></td>
	</tr>
	<tr>
		<td><span class='lang2' >τ</span><br/><span class='keys'>t</span></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' >Τ</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' ></span></td>
	</tr>
	<tr>
		<td><span class='lang2' >φ</span><br/><span class='keys'>f</span></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' >Φ</span><br/><span class='keys'>F</span></td>
		<td><span class='lang2' ></span></td>
	</tr>
	<tr>
		<td><span class='lang2' >χ</span><br/><span class='keys'>x</span></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' >Χ</span><br/><span class='keys'>X</span></td>
		<td><span class='lang2' ></span></td>
	</tr>
	<tr>
		<td><span class='lang2' >ψ</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' ></span></td>
		<td><span class='lang2' >Ψ</span><br/><span class='keys'>Y</span></td>
		<td><span class='lang2' ></span></td>
	</tr>
</table>
<h3>Punctuation</h3>
<p>In addition to the standard punctuation, this keyboard includes the Greek semicolon or <i>ano teleia</i>.</p>
<table border=0 cellspacing=2 cellpadding=1 class='grid'>
	<col width=75 />
	<tr class='headrow'>
		<td><span class='lang2' >·</span><br/><span class='keys'>:</span></td>
	</tr>
</table>
<div id="Back">
<p><a href="galaxie_greek_mnemonic.php">Back to Galaxie Greek (Mnemonic) Keyboard Help</a><br/>
</p>
</div>

</div>
