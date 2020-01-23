<?php 
  $pagename = 'Galaxie Greek (Phonetic) Keyboard Help';
  $pagetitle = 'Galaxie Greek (Phonetic) Keyboard Help';
  $pagestyle = <<<END
    table {border-collapse:collapse !important; margin:10px 0px 20px 40px;}
    .grid col {background-color:#ffffff;}
    col.name {width:100px;}
    col.char {width:85px;}
    col.kbd {width:120px;}
    .grid td, .grid th {padding:2px 5px;border-bottom:1px solid #ddd;}
    .grid tr {text-align:center; font-weight:normal; height:80px;}
    .grid thead tr{height:30px;}
    .grid .headrow {font-weight:bold; color:#AD4A28; background-color:#eee; text-align:left;} .columns {width:560px; -webkit-column-count: 3; -webkit-column-gap: 13px; -moz-column-count: 3; -moz-column-gap: 13px; column-count: 3; column-gap: 13px;}
    .columns2 {width:375px; -webkit-column-count: 2; -webkit-column-gap: 10px; -moz-column-count: 2; -moz-column-gap: 10px; column-count: 2; column-gap: 10px;} .button {text-decoration: none !important; margin:0px 1px; padding:1px 2px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; white-space: nowrap; color: #2D2C2C !important; border:solid 1px #707070; background: #D4D4D4; background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.15, #F2F2F2), color-stop(0.47, #EBEBEB), color-stop(0.48, #DDDDDD), color-stop(0.9, #CFCFCF)); background-image: -webkit-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: -moz-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: -ms-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: -o-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%);}
    .button:hover {background: #BEE6FD; background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.15, #EAF6FD), color-stop(0.47, #D9F0FC), color-stop(0.48, #BEE6FD), color-stop(0.9, #A7D8F5)); background-image: -webkit-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: -moz-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: -ms-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: -o-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%);} .lang2,.languageExample {font-family:"Gentium Plus"; color:blue; }
    .lang2 {font-size:150%; line-height:1em;}
    .hebrew .lang2, .hebrew .languageExample {font-family:"Ezra SIL";} .keys {border-style:solid; color:black; border-width:1px 1px 2px; border-color: #6B6867 #6B6867 #111111; background:#dddddd; margin:0px 1px; padding:2px 3px; line-height:30px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;} .welcome {float:left; width:385px; height:540px;border:1px solid #dddddd;padding:8px 15px; margin-top:20px;margin-left:5px;}
    .right {} #osk_tabsheets { border: solid 1px #ad4a28; margin: 0 4px 4px 4px; background: white; z-index: 101; }
    .osk_tabsheet_selected { display: block; padding: 2px 10px 12px; width: 561px; border: solid 1px #ad4a28;-webkit-border-radius: 0px 4px 4px; -moz-border-radius: 0px 4px 4px; border-radius: 0px 4px 4px;}
    .osk_tabsheet { display: none; }
    #osk_tabs { margin: 4px 4px 0px 0px; z-index: 100; }
    .osk_tab { background: white; color: #ad4a28; border: solid 1px #ad4a28; display: inline; padding: 2px 5px 0px 5px; height: 17px; -webkit-border-radius: 4px 4px 0px 0px; -moz-border-radius: 4px 4px 0px 0px; border-radius: 4px 4px 0px 0px;cursor:pointer;}
    .osk_tab_selected { background: white; color: #ad4a28; border: solid 1px #ad4a28; display: inline; padding: 2px 5px 1px; border-bottom: none; margin-top: -1px; height: 19px;-webkit-border-radius: 4px 4px 0px 0px; -moz-border-radius: 4px 4px 0px 0px; border-radius: 4px 4px 0px 0px;cursor:pointer;} .key { float: left; display: block; position: relative; overflow: hidden; height: 35px; margin: 2px 0px 0px 2px; border: solid 1px grey; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; } #K_BKQUOTE { width:34px; } #K_BKSP { width: 60px; } #K_TAB { width: 52px; } #K_BKSLASH { width: 42px; } #K_CAPS { width: 62px; } #K_ENTER { width: 70px; } #K_ENTER-EU1 { width: 42px; -webkit-border-radius: 3px 3px 0px; -moz-border-radius: 3px 3px 0px; border-radius: 3px 3px 0px; } #K_ENTER-EU1 .keycap { left:3px !important; } #K_ENTER-EU2 { width: 32px; margin-top:-1px !important; border-top:none !important; height:39px !important; -webkit-border-radius: 0px 0px 3px 3px; -moz-border-radius: 0px 0px 3px 3px; border-radius: 0px 0px 3px 3px; } #K_SHIFTL { width: 85px; } #K_SHIFTL-EU { width: 47px; } #K_oE2 { display:none; } #K_SHIFTR { width: 85px; } #K_CTRLL { width: 60px; } #K_ALTL { width: 50px; } #K_SPACE { width: 234px; } #K_ALTR { width: 50px; } #K_CTRLR { width: 60px; } .plain { background-repeat: no-repeat; width: 34px; } .special { background-repeat: no-repeat; background: #c0c0c0; } .keycap { font: bold 7pt Arial; position: absolute; left: 6px; top: 6px; } .key .keycap { display: block; } .special .keycap { display: block; } .keytext { font:	19px "Gentium Plus"; position: absolute; display: block; right: 5px; bottom: 0px; color: blue; } .keytext.LTN { font-size:12px !important; color: #AD4A28 !important; right:3px !important; } .hebrew .keytext { font-family:"Ezra SIL"; } .hebrew .diacritic { font-size:30px; color:green; right:15px; bottom:-6px; } .hebrew .top { bottom:-12px !important; } .hebrew .bot{ bottom:2px !important; } .lang2, .languageExample { font-family: "Galatia SIL"; color: blue } .lang2 { font-size: 150% } .highlightKeys img { display: none } .highlightKeys .key-print { display: inline }
END;
  require_once('header.php');
?>


    <p style='margin:0px'>Keyboard &#169; 2004-2018 Galaxie Software and SIL International</p>

    <br/>
    <a href="#Overview">Overview</a><br/>
    <a href="#UsingGreek">Greek Keyboard</a><br/>
    <a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
    <a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
    <a style='margin-left:20px' href="#Examples">Examples</a><br/>
    <a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
    <a style='margin-left:30px' target="_blank" href='keyboardchart.htm'>Complete Typing Chart</a><br/>
    <a href="#Technical">Technical Information</a><br/>
    <a style='margin-left:20px' href="#Author">Authorship</a><br/>

    <div id='Overview'>
        <h2>Overview</h2>

        <p>This keyboard layout is designed for Koine Greek, a trade language of the ancient Mediterranean and the language of the New Testament and Septuagint Scriptures.</p>

        <p>This keyboard layout works best with a QWERTY (English) keyboard. It mimics the QWERTY (English) layout, not the modern Greek layout. It uses standard Unicode fonts.</p>

    </div>

    <div id='UsingGreek'>

        <h1 style='border-top: solid 3px #ad4a28; padding-top: 8px'>Greek Keyboard Layout</h1>

        <h3 style="clear:left">Unicode : Unshifted</h3>
        <div class="key plain" id="K_BKQUOTE">
            <div class="keycap">`</div>
            <div class="keytext">…</div>
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
            <div class="keytext">-</div>
        </div>
        <div class="key plain" id="K_EQUAL">
            <div class="keycap">=</div>
            <div class="keytext">=</div>
        </div>
        <div class="key special" id="" style="
        width: 60px;
        ">
            <div class="keycap">Backspace</div>
        </div><br style="clear: left">
        <div class="key special" id="" style="
        width: 52px;
        ">
            <div class="keycap">Tab</div>
        </div>
        <div class="key plain" id="K_Q">
            <div class="keycap">Q</div>
            <div class="keytext">θ</div>
        </div>
        <div class="key plain" id="K_W">
            <div class="keycap">W</div>
            <div class="keytext">ω</div>
        </div>
        <div class="key plain" id="K_E">
            <div class="keycap">E</div>
            <div class="keytext">ε</div>
        </div>
        <div class="key plain" id="K_R">
            <div class="keycap">R</div>
            <div class="keytext">ρ</div>
        </div>
        <div class="key plain" id="K_T">
            <div class="keycap">T</div>
            <div class="keytext">τ</div>
        </div>
        <div class="key plain" id="K_Y">
            <div class="keycap">Y</div>
            <div class="keytext">ψ</div>
        </div>
        <div class="key plain" id="K_U">
            <div class="keycap">U</div>
            <div class="keytext">υ</div>
        </div>
        <div class="key plain" id="K_I">
            <div class="keycap">I</div>
            <div class="keytext">ι</div>
        </div>
        <div class="key plain" id="K_O">
            <div class="keycap">O</div>
            <div class="keytext">ο</div>
        </div>
        <div class="key plain" id="K_P">
            <div class="keycap">P</div>
            <div class="keytext">π</div>
        </div>
        <div class="key plain" id="K_LBRKT">
            <div class="keycap">[</div>
            <div class="keytext">῾</div>
        </div>
        <div class="key plain" id="K_RBRKT">
            <div class="keycap">]</div>
            <div class="keytext">᾿</div>
        </div>
        <div class="key plain" id="K_BKSLASH">
            <div class="keycap">\</div>
            <div class="keytext">`</div>
        </div><br style="clear: left">
        <div class="key special" id="" style="
        width: 62px;
        ">
            <div class="keycap">Caps Lock</div>
        </div>
        <div class="key plain" id="K_A">
            <div class="keycap">A</div>
            <div class="keytext">α</div>
        </div>
        <div class="key plain" id="K_S">
            <div class="keycap">S</div>
            <div class="keytext">σ</div>
        </div>
        <div class="key plain" id="K_D">
            <div class="keycap">D</div>
            <div class="keytext">δ</div>
        </div>
        <div class="key plain" id="K_F">
            <div class="keycap">F</div>
            <div class="keytext">φ</div>
        </div>
        <div class="key plain" id="K_G">
            <div class="keycap">G</div>
            <div class="keytext">γ</div>
        </div>
        <div class="key plain" id="K_H">
            <div class="keycap">H</div>
            <div class="keytext">η</div>
        </div>
        <div class="key plain" id="K_J">
            <div class="keycap">J</div>
            <div class="keytext">᾿</div>
        </div>
        <div class="key plain" id="K_K">
            <div class="keycap">K</div>
            <div class="keytext">κ</div>
        </div>
        <div class="key plain" id="K_L">
            <div class="keycap">L</div>
            <div class="keytext">λ</div>
        </div>
        <div class="key plain" id="K_COLON">
            <div class="keycap">;</div>
            <div class="keytext">;</div>
        </div>
        <div class="key plain" id="K_QUOTE">
            <div class="keycap">'</div>
            <div class="keytext">ς</div>
        </div>
        <div class="key special" id="" style="
        width: 70px;
        ">
            <div class="keycap">Enter</div>
        </div><br style="clear: left">
        <div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
            <div class="keycap">Shift</div>
        </div>
        <div class="key plain" id="K_oE2">
            <div class="keycap">\</div>
        </div>
        <div class="key plain" id="K_Z">
            <div class="keycap">Z</div>
            <div class="keytext">ζ</div>
        </div>
        <div class="key plain" id="K_X">
            <div class="keycap">X</div>
            <div class="keytext">χ</div>
        </div>
        <div class="key plain" id="K_C">
            <div class="keycap">C</div>
            <div class="keytext">ξ</div>
        </div>
        <div class="key plain" id="K_V">
            <div class="keycap">V</div>
            <div class="keytext">´</div>
        </div>
        <div class="key plain" id="K_B">
            <div class="keycap">B</div>
            <div class="keytext">β</div>
        </div>
        <div class="key plain" id="K_N">
            <div class="keycap">N</div>
            <div class="keytext">ν</div>
        </div>
        <div class="key plain" id="K_M">
            <div class="keycap">M</div>
            <div class="keytext">μ</div>
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
            <div class="keytext">´</div>
        </div>
        <div class="key special" id="" style="
        width: 90px;
        ">
            <div class="keycap">Shift</div>
        </div><br style="clear: left">
        <div class="key special" id="" style="
        width: 60px;
        ">
            <div class="keycap">Ctrl</div>
        </div>
        <div style="width: 30px; display: block; float: left;"> </div>
        <div class="key special" id="" style="
        width: 50px;
        ">
            <div class="keycap">Alt</div>
        </div>
        <div class="key plain" id="K_SPACE">
            <div class="keycap"> </div>
            <div class="keytext"> </div>
        </div>
        <div class="key special" id="" style="
        width: 50px;
        ">
            <div class="keycap">Alt</div>
        </div>
        <div style="width: 54px; display: block; float: left;"> </div>
        <div class="key special" id="" style="
        width: 60px;
        ">
            <div class="keycap">Ctrl</div>
        </div><br style="clear: left">
        <h3 style="clear:left">Unicode : Shift</h3>
        <div class="key plain" id="K_BKQUOTE">
            <div class="keycap">`</div>
            <div class="keytext">῀</div>
        </div>
        <div class="key plain" id="K_1">
            <div class="keycap">1</div>
            <div class="keytext">!</div>
        </div>
        <div class="key plain" id="K_2">
            <div class="keycap">2</div>
            <div class="keytext">@</div>
        </div>
        <div class="key plain" id="K_3">
            <div class="keycap">3</div>
            <div class="keytext">#</div>
        </div>
        <div class="key plain" id="K_4">
            <div class="keycap">4</div>
            <div class="keytext">$</div>
        </div>
        <div class="key plain" id="K_5">
            <div class="keycap">5</div>
            <div class="keytext">%</div>
        </div>
        <div class="key plain" id="K_6">
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
        <div class="key plain" id="K_HYPHEN">
            <div class="keycap">-</div>
            <div class="keytext">_</div>
        </div>
        <div class="key plain" id="K_EQUAL">
            <div class="keycap">=</div>
            <div class="keytext">¨</div>
        </div>
        <div class="key special" id="" style="
        width: 60px;
        ">
            <div class="keycap">Backspace</div>
        </div><br style="clear: left">
        <div class="key special" id="" style="
        width: 52px;
        ">
            <div class="keycap">Tab</div>
        </div>
        <div class="key plain" id="K_Q">
            <div class="keycap">Q</div>
            <div class="keytext">Θ</div>
        </div>
        <div class="key plain" id="K_W">
            <div class="keycap">W</div>
            <div class="keytext">Ω</div>
        </div>
        <div class="key plain" id="K_E">
            <div class="keycap">E</div>
            <div class="keytext">Ε</div>
        </div>
        <div class="key plain" id="K_R">
            <div class="keycap">R</div>
            <div class="keytext">Ρ</div>
        </div>
        <div class="key plain" id="K_T">
            <div class="keycap">T</div>
            <div class="keytext">Τ</div>
        </div>
        <div class="key plain" id="K_Y">
            <div class="keycap">Y</div>
            <div class="keytext">Ψ</div>
        </div>
        <div class="key plain" id="K_U">
            <div class="keycap">U</div>
            <div class="keytext">Υ</div>
        </div>
        <div class="key plain" id="K_I">
            <div class="keycap">I</div>
            <div class="keytext">Ι</div>
        </div>
        <div class="key plain" id="K_O">
            <div class="keycap">O</div>
            <div class="keytext">Ο</div>
        </div>
        <div class="key plain" id="K_P">
            <div class="keycap">P</div>
            <div class="keytext">Π</div>
        </div>
        <div class="key plain" id="K_LBRKT">
            <div class="keycap">[</div>
            <div class="keytext">{</div>
        </div>
        <div class="key plain" id="K_RBRKT">
            <div class="keycap">]</div>
            <div class="keytext">}</div>
        </div>
        <div class="key plain" id="K_BKSLASH">
            <div class="keycap">\</div>
            <div class="keytext">ι</div>
        </div><br style="clear: left">
        <div class="key special" id="" style="
        width: 62px;
        ">
            <div class="keycap">Caps Lock</div>
        </div>
        <div class="key plain" id="K_A">
            <div class="keycap">A</div>
            <div class="keytext">Α</div>
        </div>
        <div class="key plain" id="K_S">
            <div class="keycap">S</div>
            <div class="keytext">Σ</div>
        </div>
        <div class="key plain" id="K_D">
            <div class="keycap">D</div>
            <div class="keytext">Δ</div>
        </div>
        <div class="key plain" id="K_F">
            <div class="keycap">F</div>
            <div class="keytext">Φ</div>
        </div>
        <div class="key plain" id="K_G">
            <div class="keycap">G</div>
            <div class="keytext">Γ</div>
        </div>
        <div class="key plain" id="K_H">
            <div class="keycap">H</div>
            <div class="keytext">Η</div>
        </div>
        <div class="key plain" id="K_J">
            <div class="keycap">J</div>
            <div class="keytext">῾</div>
        </div>
        <div class="key plain" id="K_K">
            <div class="keycap">K</div>
            <div class="keytext">Κ</div>
        </div>
        <div class="key plain" id="K_L">
            <div class="keycap">L</div>
            <div class="keytext">Λ</div>
        </div>
        <div class="key plain" id="K_COLON">
            <div class="keycap">;</div>
            <div class="keytext">·</div>
        </div>
        <div class="key plain" id="K_QUOTE">
            <div class="keycap">'</div>
            <div class="keytext">῀</div>
        </div>
        <div class="key special" id="" style="
        width: 70px;
        ">
            <div class="keycap">Enter</div>
        </div><br style="clear: left">
        <div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
            <div class="keycap">Shift</div>
        </div>
        <div class="key plain" id="K_oE2">
            <div class="keycap">\</div>
        </div>
        <div class="key plain" id="K_Z">
            <div class="keycap">Z</div>
            <div class="keytext">Ζ</div>
        </div>
        <div class="key plain" id="K_X">
            <div class="keycap">X</div>
            <div class="keytext">Χ</div>
        </div>
        <div class="key plain" id="K_C">
            <div class="keycap">C</div>
            <div class="keytext">Ξ</div>
        </div>
        <div class="key plain" id="K_V">
            <div class="keycap">V</div>
            <div class="keytext">`</div>
        </div>
        <div class="key plain" id="K_B">
            <div class="keycap">B</div>
            <div class="keytext">Β</div>
        </div>
        <div class="key plain" id="K_N">
            <div class="keycap">N</div>
            <div class="keytext">Ν</div>
        </div>
        <div class="key plain" id="K_M">
            <div class="keycap">M</div>
            <div class="keytext">Μ</div>
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
            <div class="keytext">¨</div>
        </div>
        <div class="key special" id="" style="
        width: 90px;
        ">
            <div class="keycap">Shift</div>
        </div><br style="clear: left">
        <div class="key special" id="" style="
        width: 60px;
        ">
            <div class="keycap">Ctrl</div>
        </div>
        <div style="width: 30px; display: block; float: left;"> </div>
        <div class="key special" id="" style="
        width: 50px;
        ">
            <div class="keycap">Alt</div>
        </div>
        <div class="key plain" id="K_SPACE">
            <div class="keycap"> </div>
        </div>
        <div class="key special" id="" style="
        width: 50px;
        ">
            <div class="keycap">Alt</div>
        </div>
        <div style="width: 54px; display: block; float: left;"> </div>
        <div class="key special" id="" style="
        width: 60px;
        ">
            <div class="keycap">Ctrl</div>
        </div>

        <br style="clear: left" />

    </div>

    <div id='Quickstart'>
        <h2>Quickstart</h2>
        <p>This keyboard layout works intuitively with the QWERTY (English) keyboard. You can find most of the Greek letters by thinking of similar letters in English, by sound or appearance. For example, type <span class='keys'>w"[me/ga</span> to get
            <span class='lang2'>ὧμέγα</span>.</p>

        <p>As you can see, accents and breathing marks are typed after the vowel. They can be typed in any order. For example, <span class='lang2'>ΰ</span> is typed <span class='keys'>u/+</span> or <span class='keys'>u+/</span>.</p>

        <p>When you type an accent by itself (or after a non-accentable letter), you will also get that accent. For example, typing <span class='keys'>/</span> by itself will give you <span class='lang2'>´</span> <b>not</b> <span class='lang2'>/</span>.
            To get the standard keystroke instead of the accent, type <span class='keys'>`</span> before the character (<span class='keys'>`</span> shares a key with <span class='keys'>~</span>). For example, to get <span class='lang2'>?</span> instead
            of <span class='lang2'>¨</span>, type <span class='keys'>`?</span>.</p>

    </div>

    <div id="Examples">
        <h2>Examples</h2>

        <table cellspacing=4 style='border-style:solid; border-width:1px; border-color:#8080FF; background-color:#E0E0FF; padding:4px'>
            <col width=100px />
            <col width=150px />
            <col width=150px />
            <col width=350px />

            <tr style='color:#0000AF; font-weight:bold'>
                <td>Language</td>
                <td>Phrase</td>
                <td>Meaning</td>
                <td>Type the following keys</td>
            </tr>
            <tr style='color:#0000AF; font-weight:normal'>
                <td>Greek (Monotonic)</td>
                <td><span class='lang2'>εδακρυσεν ο Ιησους </span></td>
                <td>"Jesus wept", John 11:35; note final sigma entered using s then spacebar</td>
                <td><span class='keys'>edakrusen o Ihsous </span></td>
            </tr>
            <tr style='color:#0000AF; font-weight:normal'>
                <td>Greek (Polytonic)</td>
                <td><span class='lang2'>ἐδάκρυσεν ὁ Ἰησοῦς </span></td>
                <td>"Jesus wept", John 11:35; note final sigma entered using s then spacebar</td>
                <td><span class='keys'>e]davkrusen o[ I]hsou~s </span></td>
            </tr>
        </table>

    </div>

    <div id="Documentation">
        <h2>Keyboard Details</h2>
        <h3>Letters</h3>
        <p>The Galaxie Greek keyboard uses an intuitive system where most of the Greek letters are matched to similar English letters, either by sound or appearance.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>w</span> produces <span class='lang2'>ω</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>u</span> produces <span class='lang2'>υ</span>.</p>

        <p>A few letters in Greek have no exact match in English, by sound or appearance. These have been assigned the remaining keys.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>q</span> produces <span class='lang2'>θ</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>y</span> produces <span class='lang2'>ψ</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>c</span> produces <span class='lang2'>ξ</span>.</p>

        <p>When followed by a space, sigma (<span class='lang2'>σ</span>) becomes final sigma (<span class='lang2'>ς</span>) automatically.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>sos</span> produces <span class='lang2'>σος</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>susswmos</span> produces <span class='lang2'>συσσωμος</span>.</p>

        <p>Final sigma can also be typed with the apostrophe key. This method is necessary when sigma is not followed by a space.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>so':</span> produces <span class='lang2'>σος·</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>susswmo'.</span> produces <span class='lang2'>συσσωμος.</span>.</p>

        <p>Capital letters are typed using shift as in English.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>[Sd]</span> produces <span class='lang2'>Δ</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>[Sw]</span> produces <span class='lang2'>Ω</span>.</p>

        <h3>Accents and Other Diacritics</h3>
        <p>The Galaxie Greek keyboard includes the following accents and other diacritics. </p>

        <table class='grid' style='margin-left:40px'>
            <col width=150 span=4 />

            <tr style='text-align:center; font-weight:bold'>
                <td>Character</td>
                <td>Keystroke</td>
                <td>English Name</td>
                <td>Greek Name</td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>῾</td>
                <td><span class='keys'>[[</span><b>or&nbsp;</b><span class='keys'>J</span></td>
                <td>rough breathing</td>
                <td>dasia</td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>᾿</td>
                <td><span class='keys'>]</span><b>or&nbsp;</b><span class='keys'>j</span></td>
                <td>smooth breathing</td>
                <td>psili</td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ι</td>
                <td><span class='keys'>|</span></td>
                <td>iota subscript</td>
                <td>ypogegrammeni/ <br/> prosgegrammeni</td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>¨</td>
                <td><span class='keys'>+</span><b>or&nbsp;</b><span class='keys'>?</span></td>
                <td>diaeresis</td>
                <td>dialytika</td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>`</td>
                <td><span class='keys'>\</span><b>or&nbsp;</b><span class='keys'>V</span></td>
                <td>grave accent</td>
                <td>varia</td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>´</td>
                <td><span class='keys'>/</span><b>or&nbsp;</b><span class='keys'>v</span></td>
                <td>acute accent</td>
                <td>oxia</td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>῀</td>
                <td><span class='keys'>~</span><b>or&nbsp;</b><span class='keys'>"</span></td>
                <td>circumflex accent</td>
                <td>perispomeni</td>
            </tr>
        </table>

        <p>Diacritics are typed after the vowel. They can be typed in any order.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>u/+</span> or <span class='keys'>u+/</span> produces <span class='lang2'>ΰ</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>a"]|</span> or <span class='keys'>a"|]</span> or <span class='keys'>a]|"</span> or <span class='keys'>a]"|</span> or <span class='keys'>a|"]</span> or <span class='keys'>a|]"</span> produces <span class='lang2'>ᾆ</span>.</p>

        <p>The only exception to this rule is the circumflex on capital Greek letters. It cannot be typed first because a capital Greek letter cannot take a circumflex without a breathing mark.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>WJ~</span> produces <span class='lang2'>Ὧ</span>. Typing circumflex first will not produce <span class='lang2'>Ὧ</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>A]|"</span> or <span class='keys'>A]"|</span> or <span class='keys'>A|]"</span> produces <span class='lang2'>ᾎ</span>. Typing circumflex before the breathing mark will not produce <span class='lang2'>ᾎ</span>.</p>

        <p>Rho (<span class='lang2'>ρ</span>) can also take the rough and smooth breathing mark, though capital rho can only take a rough breathing mark.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>r]</span> produces <span class='lang2'>ῤ</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>R[[</span> produces <span class='lang2'>Ῥ</span>.</p>

        <p>If you type a diacritic by itself or after any letter which cannot take that diacritic, you will get the diacritic by itself.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'> /</span> produces <span class='lang2'>´</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>g?d</span> produces <span class='lang2'>γ¨δ</span>.</p>

        <p>To get the standard keystroke for a key instead of the diacritic, type <span class='keys'>`</span> first (<span class='keys'>`</span> shares a key with <span class='keys'>~</span>).</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>`?</span> produces <span class='lang2'>?</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>`"</span> produces <span class='lang2'>"</span>.</p>

        <h3>Punctuation</h3>
        <p>Most punctuation on the Galaxie Greek keyboard is typed exactly as on the QWERTY (English) keyboard, though sometimes you will need to use the 'standard keystroke' rule above to get the punctuation you need.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>.</span> produces <span class='lang2'>.</span>.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>;</span> produces <span class='lang2'>;</span>.</p>

        <p>The Greek semicolon or <i>ano teleia</i> is the only exception.</p>
        <p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>:</span> produces <span class='lang2'>·</span>.</p>

        <p>
            See the <a href="keyboardchart.htm">Complete Typing Chart</a> for full details on how to type all the Galaxie Greek keyboard's letters, diacritics, and punctuation.
        </p>

    </div>


    <div id="Technical">
        <h2>Technical Information</h2>
        <h3>System Requirements</h3>
        <p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
        </p>
        <h3>Unicode Version</h3>
        <p>This keyboard complies with Unicode 5.1</p>

    </div>

    <div id="Author">
        <h3>Keyboard Authorship</h3>
        <p>
            This keyboard was created by Hampton Keathley of Galaxie Software. SIL International graciously acknowledges the contribution made by the author in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb. His
            effort has assisted greatly in enabling people to communicate in Koine Greek.
        </p>

        <p>
            Version 2.1 released 15 December 2009. Full Greek documentation.<br /> Version 2.02 released 11 April 2008. Fixed Greek: rho + dasia and rho + psili with [ and ] keys.<br /> Version 2.01 released 13 March 2008. Fixed Hebrew: holem and other
            letters in On Screen Keyboard, added support for final mem, peh, nun with enter.<br /> Version 2.0 for Keyman Desktop 7.0. Released 24 October 2007
        </p>

    </div>
    <div id="Copyright">
        <h3>Copyright and Terms of Use</h3>
        <p>
            The Galaxie Greek (Phonetic) keyboard layout for Keyman is Copyright 2004-2018 Galaxie Systems and SIL International. It is released under the MIT license.
        </p>
    </div>

