<?php
  $pagename = 'Galaxie Hebrew (Positional) Keyboard Help';
  $pagetitle = 'Galaxie Hebrew (Positional) Keyboard Help';
  $pagestyle = <<<END
        table.display { font-size: 0.8em; border-collapse:	collapse; }
        table.display tr td { padding: 2px 8px; }
        table.display tr th { padding: 2px 8px; background: #f3e5de }
        #osk { font-size: 18pt; margin-top: 4px }
        #osk h3 { width: 25.38em; margin: 12px 0 0 0; background: #ad4a28; font-size: 18pt; border: solid 1px #ad4a28 }
        #osk h3 span { font-size: 12pt; margin: 4px; color: white }
        #osk_caption { font-size: 10pt; padding: 4px; border: 0; margin-bottom: 8px }
        .body_text h1 {font: 36pt Tahoma;text-align: left;margin: 16px 0 24px 0;color: #000000 }
        .body_text h2 {font: 30pt Tahoma;text-align: left;margin: 16px 0 24px 0;color: #000000 }
        .body_text h3 {font: Bold 20pt Tahoma;text-align: left;margin: 16px 0 16px 0;color:black }
        .body_text h4 {font: Bold 14pt Tahoma;text-align: left;margin: 24px 0 8px 0;color: #000000 }
        .body_text h5 {font: Bold 12pt Tahoma;text-align: left;margin: 16px 0 8px 0;color: #000000 }
        .body_text p {font-size: 10pt;text-align: left;margin: 0 0 8px 0;color:#000000 }
        .body_text table {font-size: 10pt;text-align: left;margin: 8px 8px 8px 8px;color:#000000 }
        .body_text p.question {text-align: left;margin: 24px 0 8px 32px;font: Bold 12pt Tahoma;font-style: italic;font-weight: bold;color:#A94827 }
        .body_text p.answer {text-align: left;margin: 0 0 8px 32px;font-weight: normal;color:#000000 }
        .body_text li {margin-bottom: 8pt;font-size: 10pt;}
        .key {float: left;display: block;position: relative;overflow: hidden;height: 35px;margin: 2px 0px 0px 2px;border: solid 1px grey;}
        #K_SPACE {width: 234px;}
        #K_BKSLASH {width: 42px;}
        #K_oE2 {display:none;}
        #K_SHIFTL {width: 80px;}
        .plain {background-repeat: no-repeat;width: 34px;}
        .special {background-repeat: no-repeat;background: #c0c0c0;}
        .keycap {font: bold 7pt Arial;position: absolute;left: 6px;top: 6px;}
        .key .keycap {display: block;}
        .special .keycap {display: block;}
        .keytext {font:12pt "Galatia SIL";position: absolute;display: block;right: 5px;bottom: 4px;color: blue;}
        .highlightExample table { border-collapse: collapse; }
        .highlightExample {color: blue; font-weight: bold; white-space: nowrap }
        .highlightKeys {color: blue; font-weight: bold;}
        #keymanExample {clear: both; color: #000080; border: 1px solid #8080ff; background-color: #e0e0ff; margin-top: 15px; font-size: 10pt }
        #keymanExample h3 { color: white; display: block; margin: 0; padding: 2px 5px; background: #8080ff }
        #keymanExample div { padding: 10px 5px; }
        #keymanExample td { padding: 10px 5px; }
        #keymanExample th { padding: 2px 5px; text-align: left; }
        .highlightKeys .key-print { display: none }
        .highlightKeys img { vertical-align: baseline; margin: 0 2px 0 0; background-image: url('keys2.gif'); height: 15px; width: 15px; }
        .key-grp { margin: 0 4px; }
        .key-shift { width: 41px !important; margin-right: 0px !important; background-position: 0 -45px; }
        .key-ctrl { width: 33px !important; margin-right: 0px !important; background-position: -41px -45px; }
        .key-alt { width: 32px !important; margin-right: 0px !important; background-position: -74px -45px; }
        .key-32 { width: 37px !important; }
        .key-33 { background-position: -37px 0px; }
        .key-34 { background-position: -52px 0px; }
        .key-35 { background-position: -67px 0px; }
        .key-36 { background-position: -82px 0px; }
        .key-37 { background-position: -97px 0px; }
        .key-38 { background-position: -112px 0px; }
        .key-39 { background-position: -127px 0px; }
        .key-40 { background-position: -142px 0px; }
        .key-41 { background-position: -157px 0px; }
        .key-42 { background-position: -172px 0px; }
        .key-43 { background-position: -187px 0px; }
        .key-44 { background-position: -202px 0px; }
        .key-45 { background-position: -217px 0px; }
        .key-46 { background-position: -232px 0px; }
        .key-47 { background-position: -247px 0px; }
        .key-48 { background-position: -262px 0px; }
        .key-49 { background-position: -277px 0px; }
        .key-50 { background-position: -292px 0px; }
        .key-51 { background-position: -307px 0px; }
        .key-52 { background-position: -322px 0px; }
        .key-53 { background-position: -337px 0px; }
        .key-54 { background-position: -352px 0px; }
        .key-55 { background-position: -367px 0px; }
        .key-56 { background-position: -382px 0px; }
        .key-57 { background-position: -397px 0px; }
        .key-58 { background-position: -412px 0px; }
        .key-59 { background-position: -427px 0px; }
        .key-60 { background-position: -442px 0px; }
        .key-61 { background-position: -457px 0px; }
        .key-62 { background-position: -472px 0px; }
        .key-63 { background-position: -487px 0px; }
        .key-64 { background-position: 0px -15px; }
        .key-65 { background-position: -15px -15px; }
        .key-66 { background-position: -30px -15px; }
        .key-67 { background-position: -45px -15px; }
        .key-68 { background-position: -60px -15px; }
        .key-69 { background-position: -75px -15px; }
        .key-70 { background-position: -90px -15px; }
        .key-71 { background-position: -105px -15px; }
        .key-72 { background-position: -120px -15px; }
        .key-73 { background-position: -135px -15px; }
        .key-74 { background-position: -150px -15px; }
        .key-75 { background-position: -165px -15px; }
        .key-76 { background-position: -180px -15px; }
        .key-77 { background-position: -195px -15px; }
        .key-78 { background-position: -210px -15px; }
        .key-79 { background-position: -225px -15px; }
        .key-80 { background-position: -240px -15px; }
        .key-81 { background-position: -255px -15px; }
        .key-82 { background-position: -270px -15px; }
        .key-83 { background-position: -285px -15px; }
        .key-84 { background-position: -300px -15px; }
        .key-85 { background-position: -315px -15px; }
        .key-86 { background-position: -330px -15px; }
        .key-87 { background-position: -345px -15px; }
        .key-88 { background-position: -360px -15px; }
        .key-89 { background-position: -375px -15px; }
        .key-90 { background-position: -390px -15px; }
        .key-91 { background-position: -405px -15px; }
        .key-92 { background-position: -420px -15px; }
        .key-93 { background-position: -435px -15px; }
        .key-94 { background-position: -450px -15px; }
        .key-95 { background-position: -465px -15px; }
        .key-96 { background-position: 0px -30px; }
        .key-97 { background-position: -15px -30px; }
        .key-98 { background-position: -30px -30px; }
        .key-99 { background-position: -45px -30px; }
        .key-100 { background-position: -60px -30px; }
        .key-101 { background-position: -75px -30px; }
        .key-102 { background-position: -90px -30px; }
        .key-103 { background-position: -105px -30px; }
        .key-104 { background-position: -120px -30px; }
        .key-105 { background-position: -135px -30px; }
        .key-106 { background-position: -150px -30px; }
        .key-107 { background-position: -165px -30px; }
        .key-108 { background-position: -180px -30px; }
        .key-109 { background-position: -195px -30px; }
        .key-110 { background-position: -210px -30px; }
        .key-111 { background-position: -225px -30px; }
        .key-112 { background-position: -240px -30px; }
        .key-113 { background-position: -255px -30px; }
        .key-114 { background-position: -270px -30px; }
        .key-115 { background-position: -285px -30px; }
        .key-116 { background-position: -300px -30px; }
        .key-117 { background-position: -315px -30px; }
        .key-118 { background-position: -330px -30px; }
        .key-119 { background-position: -345px -30px; }
        .key-120 { background-position: -360px -30px; }
        .key-121 { background-position: -375px -30px; }
        .key-122 { background-position: -390px -30px; }
        .key-123 { background-position: -405px -30px; }
        .key-124 { background-position: -420px -30px; }
        .key-125 { background-position: -435px -30px; }
        .key-126 { background-position: -450px -30px; }
        .lang2,.languageExample {font-family:"Galatia SIL"; color:blue}
        .lang2 {font-size:150%}
END;
  require_once('header.php');
?>


	

<a href="#Overview">Overview</a><br/>
<a href="#UsingHebrew">Hebrew Keyboard</a><br/>
<a href="#Technical">Technical Information</a><br/>

<div id='Overview'>
<h2>Overview</h2>

<p>This keyboard is designed for Biblical Hebrew, a Semitic language of the ancient Near East and the language of the Hebrew Bible.</p>

<p>This keyboard layout works best with a QWERTY (English) keyboard. It mimics the QWERTY (English) layout, not the modern Greek layout. It uses standard Unicode fonts.</p>


</div>
<div id='UsingHebrew'>
<h1 style='border-top: solid 3px #ad4a28; padding-top: 8px'>Hebrew Keyboard Layout</h1>
                
<h3 style="clear:left">Unicode : Unshifted</h3>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
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
<div class="keycap">-</div>
<div class="keytext">־</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext"> ְ</div>
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
<div class="keytext">ק</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">ו</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">ךֵ</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">ר</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">ת</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">י</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">ע</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">ך</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">וֹ</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">פ</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">ף</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">ף</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext"> ּ</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">א</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">ס</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">ד</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">ט</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">ג</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">ה</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">ח</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">כ</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">ל</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">ךָ</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">'</div>
</div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: 80px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
<div class="keytext"> ּ</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">ז</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">צ</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">שׂ</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">שׁ</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">ב</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">נ</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
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
<div class="keytext">ךָ</div>
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
<div class="keycap">L Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altl.gif');
          ">
<div class="keycap">L ALt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altr.gif');
          ">
<div class="keycap">R ALt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">R Ctrl</div>
</div><br style="clear: left"><br/><h3 style="clear:left">Unicode : Shift</h3>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">~</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext"> ִ</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext"> ֵ</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext"> ֶ</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext"> ֱ</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext"> ֻ</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext"> ַ</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext"> ֲ</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext"> ָ</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext"> ֳ</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext"> ֹ</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext"> ֿ</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">+</div>
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
<div class="keycap">[</div>
<div class="keytext">ףּ</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">שּּ</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">|</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
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
<div class="keycap">;</div>
<div class="keytext">ךֶ</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">"</div>
</div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: 80px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
<div class="keytext">|</div>
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
<div class="keycap">,</div>
<div class="keytext">ם</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">.</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">ש</div>
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
<div class="keycap">L Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altl.gif');
          ">
<div class="keycap">L ALt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altr.gif');
          ">
<div class="keycap">R ALt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">R Ctrl</div>
</div><br style="clear: left" /><br />

<h3>Final mem, pe, nun and tsadi</h3>

<p>The final forms of kaf, mem, pe, nun and tsadi are generated by the keyboard layout when the <kbd>Space</kbd>, <kbd>Tab</kbd> or <kbd>Enter</kbd> keys are typed after the letter.</p>

<h3>Additional characters</h3>

<p>The <kbd>`</kbd> key is a deadkey, that allows additional characters to be typed.</p>

<table>
        <thead>
                <tr>
                        <th>Keys</th>
                        <th>Character</th>
                </tr>
        </thead>
        <tbody>
                <tr>
                        <td><kbd>`</kbd><kbd>=</kbd></td>
                        <td class="lang2">=</td>
                </tr>
                <tr>
                        <td><kbd>`</kbd><kbd>~</kbd></td>
                        <td class="lang2">~</td>
                </tr>
                <tr>
                        <td><kbd>`</kbd><kbd>|</kbd></td>
                        <td class="lang2">&#x05BD;</td>
                </tr>
                <tr>
                        <td><kbd>`</kbd><kbd>|</kbd></td>
                        <td class="lang2">&#x05AB;</td>
                </tr>
                <tr>
                        <td><kbd>`</kbd><kbd>,</kbd></td>
                        <td class="lang2">&#x05A4;</td>
                </tr>
        </tbody>
</table>

</div>






<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.1</p>

</div>

