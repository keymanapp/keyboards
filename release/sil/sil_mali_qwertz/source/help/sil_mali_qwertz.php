<?php
  $pagename = 'Clavier du Mali (Qwertz) Keyboard Help';
  $pagetitle = 'Clavier du Mali (Qwertz) Keyboard Help';
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
        .keytext {font:12pt "Charis SIL";position: absolute;display: block;right: 5px;bottom: 4px;color: blue;}
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
        .lang2,.languageExample {font-family:"Charis SIL"; color:blue}
        .lang2 {font-size:150%}
END;
  require_once('header.php');
?>

<div id='Overview'>
<h2>Overview</h2>

<p>Ce clavier est adapté pour les caractères spéciaux nécessaires pour les langues maliennes. 
	This keyboard is suitable for the special characters needed for Malian languages.</p>

<p>This keyboard outputs mostly precomposed (NFC) Unicode characters. However, please be aware that it is not completely NFC. </p>
</div>

<h3 style="clear:left">Unshifted</h3>
  <h3>Default (Unshifted) state</h3>
  <p><img src="sil_mali_qwertzU_.png" alt=" Clavier du Mali (Qwertz) Keyboard: Unshifted (default) state"></p>
    <h3>Shift state</h3>
    <p><img src="sil_mali_qwertzU_S.png" alt="Clavier du Mali (Qwertz) Keyboard: Shifted state"></p>
    <h3>RALT state</h3>
    <p><img src="sil_mali_qwertzU_RA.png" alt="Clavier du Mali (Qwertz) Keyboard: RALT state"></p>


<h2>Comment composer les caractères spéciaux (How to compose special characters)</h2>
<h3>Des lettres (Letters)</h3>

<table class="grid">
<thead>
	<tr>
		<th>Caractères (Character)</th>
		<th>Taper (Type)</th>
		<th>Codepoint</th>
		<th>Caractères (Character)</th>
		<th>Taper (Type)</th>
		<th>Codepoint</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><span class='lang2'>ɓ</span></td><td>,b</td><td>0253</td>
		<td><span class='lang2'>Ɓ</span></td><td>,B</td><td>0181</td>
	</tr>
	<tr>
		<td><span class='lang2'>ç</span></td><td>,c</td><td>00E7</td>
		<td><span class='lang2'>Ç</span></td><td>,C</td><td>00C7</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɗ</span></td><td>,d</td><td>0257</td>
		<td><span class='lang2'>Ɗ</span></td><td>,D</td><td>018A</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɛ</span></td><td>,e</td><td>025B</td>
		<td><span class='lang2'>Ɛ</span></td><td>,E</td><td>0190</td>
	</tr>
	<tr>
		<td><span class='lang2'>ǝ</span></td><td>,m</td><td>01DD</td>
		<td><span class='lang2'>Ǝ</span></td><td>,M</td><td>018E</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɩ</span></td><td>,i</td><td>0261</td>
		<td><span class='lang2'>Ɩ</span></td><td>,I</td><td>0196</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɲ</span></td><td>,j</td><td>0272</td>
		<td><span class='lang2'>Ɲ</span></td><td>,J</td><td>019D</td>
	</tr>
	<tr>
		<td><span class='lang2'>ŋ</span></td><td>,n / ,g</td><td>014B</td>
		<td><span class='lang2'>Ŋ</span></td><td>,N / ,G </td><td>014A</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɔ</span></td><td>,o</td><td>0254</td>
		<td><span class='lang2'>Ɔ</span></td><td>,O</td><td>0186</td>
	</tr>
	<tr>
		<td><span class='lang2'>œ</span></td><td>,f</td><td>0153</td>
		<td><span class='lang2'>Œ</span></td><td>,F</td><td>0152</td>
	</tr>
	<tr>
		<td><span class='lang2'>ʋ</span></td><td>,u</td><td>028B</td>
		<td><span class='lang2'>Ʋ</span></td><td>,U</td><td>01B2</td>
	</tr>
	<tr>
		<td><span class='lang2'>ƴ</span></td><td>,y</td><td>01B4</td>
		<td><span class='lang2'>Ƴ</span></td><td>,Y</td><td>01B3</td>
	</tr>
	<tr>
		<td><span class='lang2'>ʒ</span></td><td>,z</td><td>0292</td>
		<td><span class='lang2'>Ʒ</span></td><td>,Z</td><td>01B7</td>
	</tr>
</tbody>
</table>

<h3>Lettres supplémentaires (Additional Letters)</h3>

<table class="grid">
<thead>
	<tr>
		<th>Caractères (Character)</th>
		<th>Taper (Type)</th>
		<th>Codepoint</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><span class='lang2'>ʼ</span><sup><a href="#fn2" id="ref2">2</a></sup></td><td>,l</td><td>02BC</td>
	</tr>
	<tr>
		<td><span class='lang2'>ʔ</span></td><td>,h</td><td>0294</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɑ</span></td><td>,L</td><td>0251</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɡ</span></td><td>,x</td><td>0261</td>
	</tr>
	<tr>
		<td><span class='lang2'>ʃ</span></td><td>,S</td><td>0283</td>
	</tr>
</tbody>
</table>




<h3>Diacritiques (Diacritics)</h3>
	<p>Appuyez soit sur une voyelle, soit sur une nasal<sup><a href="#fn1" id="ref1">1</a></sup>, ensuite la touche suivante.</p>
	<p>Press either a vowel or a nasal, then the accent key.</p>
<table class="grid">
<thead>
	<tr>
		<th>Diacritic</th><th>Caractères (Character)</th><th>Taper (Type)</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>aguï</td><td><span class='lang2'>◌́, ɛ́, á</span></td><td>´</td>
	</tr>
	<tr>
		<td>grave</td><td><span class='lang2'>◌̀, M̀, ǝ̀</span></td><td>`</td>

	</tr>
	<tr>
		<td>macron</td><td><span class='lang2'>◌̄, ɔ̄, ā</span></td><td>=</td>

	</tr>
	<tr>
		<td>circonflexe</td><td><span class='lang2'>◌̂, ŋ̂, î</span></td><td>^</td>

	</tr>
	<tr>
		<td>diérèses</td><td><span class='lang2'>◌̈, ä, ʋ̈</span></td><td>%</td>

	</tr>
	<tr>
		<td>caron</td><td><span class='lang2'>◌̌, š, ž</span></td><td>)</td>

	</tr>
	<tr>
		<td>tilde</td><td><span class='lang2'>◌̃, ñ́, ã́</span></td><td>$</td>

	</tr>
	<tr>
		<td>point en bas</td><td><span class='lang2'>◌̣, ḍ, Ẓ</span></td><td>§</td>
	</tr>

</tbody>
</table>


<h3>D’autres symboles importantes (Other Important Symbols)</h3>

<table class="grid">
<thead>
	<tr>
		<th>Caractères (Character)</th>
		<th>Taper (Type)</th>
		<th>Codepoint</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><span class='lang2'>;</span></td><td>,s</td><td>003B</td>
	</tr>
	<tr>
		<td><span class='lang2'>✓</span></td><td>,X</td><td>2713</td>
	</tr>
	<tr>
		<td><span class='lang2'>†</span></td><td>,v</td><td>2020</td>
	</tr>
	<tr>
		<td><span class='lang2'>‡</span></td><td>,V</td><td>2021</td>
	</tr>
	<tr>
		<td><span class='lang2'>‘</span></td><td>,w</td><td>2018</td>
	</tr>
	<tr>
		<td><span class='lang2'>’</span><sup><a href="#fn3" id="ref3">3</a></sup></td><td>,W</td><td>2019</td>
	</tr>
	<tr>
		<td><span class='lang2'>“</span></td><td>,p</td><td>201C</td>
	</tr>
	<tr>
		<td><span class='lang2'>”</span></td><td>,P</td><td>201D</td>
	</tr>
	<tr>
		<td><span class='lang2'>‹</span></td><td>,t</td><td>2039</td>
	</tr>
	<tr>
		<td><span class='lang2'>›</span></td><td>,T</td><td>203A</td>
	</tr>
	<tr>
		<td><span class='lang2'>«</span></td><td>,a</td><td>00AB</td>
	</tr>
	<tr>
		<td><span class='lang2'>»</span></td><td>,A</td><td>00BB</td>
	</tr>
		<tr>
			<td><span class='lang2'>½</span></td><td>!12</td><td>00BD</td>
		</tr>
		<tr>
			<td><span class='lang2'>¼</span></td><td>!14</td><td>00BC</td>
		</tr>
		<tr>
			<td><span class='lang2'>¾</span></td><td>!34</td><td>00BE</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅓</span></td><td>!13</td><td>2153</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅔</span></td><td>!23<td>2154</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅕</span></td><td>!15</td><td>2155</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅖</span></td><td>!25</td><td>2156</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅗</span></td><td>!35</td><td>2157</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅘</span></td><td>!45</td><td>2158</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅙</span></td><td>!16</td><td>2159</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅚</span></td><td>!56</td><td>215A</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅛</span></td><td>!18</td><td>215B</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅜</span></td><td>!38</td><td>215C</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅝</span></td><td>!58</td><td>215D</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅞</span></td><td>!78</td><td>215E</td>
			</tr>
	</tbody>
</table>

<h2>Fonts</h2>

<p>The <a href="https://software.sil.org/charis/">Charis SIL Mali</a> font family is included with the keyboard package.</p>

<hr></hr>

<sup id="fn1">1. N’importe quelle voyelle ou nasal comme a, e, i, o, u, ɛ, ɔ, ǝ, æ, œ, ɨ ɩ, ʋ  et  n, m, ɲ, ŋ +d, g, h, l, s, t, w, x, z.  Cela marche aussi pour les majuscules A, E, I, O, U, Ɛ, Ɔ, Ǝ, Ɩ, Ʋ  et  N, M, Ɲ, Ŋ + D, G, H, L, S, T, Z.<a href="#ref1" title="Jump back to footnote 1 in the text.">↩</a></sup><br/>
<sup id="fn2">2. Cet Apostrophe ’ est pour les mots contractés. C’est une lettre qui peut être au milieu des mots.<a href="#ref2" title="Jump back to footnote 2 in the text.">↩</a></sup><br/>
<sup id="fn3">3. Les guillemets américains simples ‘ ’ (sur le ‘r ’) sont pour les citations ou les mots français. C’est des marques de ponctuation.<a href="#ref3" title="Jump back to footnote 3 in the text.">↩</a></sup>
