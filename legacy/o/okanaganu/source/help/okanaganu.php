<?php 
  $pagename = 'Okanagan-Colville Keyboard Help';
  $pagetitle = $pagename;
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
        .keytext {font:12pt "Charis SIL Mali";position: absolute;display: block;right: 5px;bottom: 4px;color: blue;}
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
        .lang2,.languageExample {font-family:"Charis SIL Mali"; color:blue}
        .lang2 {font-size:150%}
END;
  require_once('header.php');
?>   

<h1>How To Type Okanagan-Colville</h1>

This package installs the OkanaganU keyboard on your computer.
It also installs the Charis SIL font, a font that has all the characters needed for Okanagan-Colville.
A Windows font that has almost all the needed characters is Lucida Sans Unicode.
Select one of these fonts when entering data in your word processor.<p>
 
 <a name="single">When the OkanaganU keyboard is selected, the keys shown in the first row are reassigned to Okanagan letter symbols as shown in the white row:</a>
<table><tbody>
  <tr><th>4</th></th><th>6</th><th>7</th><th>8</th><th>v</th><th>|</th>&nbsp;</th></tr>
  <tr><td>ƛ</td></td><td>ʕ</td><td>ʔ</td><td>ɣ</td><td>ə</td><td>ɬ</td></tr>
   </tbody></table>
<br>

The following keys are also reassigned to punctuation or other non-letter symbols as follows:

<table><tbody>
  <tr><th>Q</th><th>W</th><th>:</th><th>=</th><th>_</th></tr>
  <tr><td>√</td><td>ʷ</td></td><td>ˑ</td><td></td><td>‿</td></tr>
   </tbody></table>

Note: the short double hyphen shows correctly in the Charis SIL font, but may not in other Unicode fonts.
<br /><br />
<a name="restore">To restore any of the reassigned keys without exiting the ThompsonU keyboard, type a zero (0) followed by the wanted key:</a>

<table><tbody>
  <tr><td>&nbsp;</td><th>04</th></th><th>06</th><th>07</th><th>08</th><th>0f</th><th>0|</th><th>0Q</th><th>0W</th><th>0:</th><th>0=</th><th>0_</th></tr>
  <tr><th>0</th><td>4</td></td><td>6</td><td>7</td><td>8</td><td>f</td><td>|</td><td>Q</td><td>W</td><td>:</td><td>=</td><td>_</td></tr>
   </tbody></table>
<br>

<a name="stressV">To obtain an accented vowel, type the vowel as shown in the top row followed by / or \ to get the acute or grave vowel shown in the white row:         </a>
<table><tbody>
  <tr><th>a</th></th><th>e</th><th>i</th><th>o</th><th>u</th>&nbsp;</th></tr>
  <tr><td>á</td></td><td>é</td><td>í</td><td>ó</td><td>ú</td><th>/</th></tr>
  <tr><td>à</td><td>è</td><td>ì</td><td>ò</td><td>ù</td><th>\</th></tr>
 </tbody></table>
 Note: e is not an Okanagan vowel. The symbols are provided for convenience.<br>
 <br>


<a name="glott">Glottalized or laryngealized consonant are obtained typing the consonant key followed by the apostrophe:</a>

<br />
<table>
<tr><th>p</th><th>t</th><th>c</th><th>4</th><th>k</th><th>q</th><th>m</th><th>n</th><th>l</th><th>r</th><th>y</th><th>8</th><th>w</th><th>6</th></tr>
<tr><td>p̓</td><td>t̕</td><td>c̓</td><td>ƛ̓</td><td>k̓</td><td>q̓</td><td>m̓</td><td>n̓</td><td>l̕</td><td>r̓</td><td>y̓</td><td>ɣ̓</td><td>w̓</td><td>ʕ̓</td><th>'</th></tr>
</table>
                            
<br />

<a name="bull">A bullet (•) is obtained by typing H (capital H) followed by : (colon):</a>
<table><tbody>
  <tr><th>H:</th></tr>
  <tr><td>•</td></tr>
   </tbody></table>
<br>

<a name="bull">ḥ and x̌ are obtained by typing . (period) followed by the letter as shown:</a>
<table><tbody>
  <tr><td>&nbsp;</td><th>h</th><th>x</th></tr>
  <tr><th>.</th><td>ḥ</td><td>x̌</td></tr>
   </tbody></table>
<br>

<a name="rounded">Rounded consonants are obtained typing the consonant key followed by W (capital W):</a>
<table>
<tr><th>k</th><th>q</th><th>x</th><th>.x</th><th>6</th><td></td></tr>
<tr><td>kʷ</td><td>qʷ</td><td>xʷ</td><td>x̌ʷ</td><td>ʕʷ</td><th>W</th></tr>
</table>

<br />

<a name="rdglott">Glottalized and rounded consonants are obtained typing the consonant followed by the apostrophe and the capital W:</a>
<table>
<tr><th>k'W</th><th>q'W</th><th>6'W</th></tr>
<tr><td>k̓ʷ</td><td>q̓ʷ</td><td>ʕ̓ʷ</td></tr>
</table>

<br/>


