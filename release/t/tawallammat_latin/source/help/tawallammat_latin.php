<?php 
  $pagename = 'Tawallammat Latin Keyboard Help';
  $pagetitle = 'Tawallammat Latin Keyboard Help';
  $style = <<<EXTRA
	.kbd {
		background-color: #eee;
		border-radius: 3px;
		border: 1px solid #b4b4b4;
		box-shadow: 0 1px 1px rgba(0, 0, 0, .2), 0 2px 0 0 rgba(255, 255, 255, .7) inset;
		color: #333;
		display: inline-block;
		font-size: .85em;
		font-weight: 700;
		line-height: 1;
		padding: 2px 4px;
		white-space: nowrap; 
		}
	.table { border-collapse: collapse;  width: 700px; }
	.th, .td { text-align: center; padding: 8px; }
	.tr:nth-child(even) { background-color: #f2f2f2 }
	.th { background-color: #4CAF50; color: white; }
EXTRA;
  require_once('header.php');
?>


<h1>Start Using Tawallammat Latin</h1>

<p>
    This keyboard covers all posible characters needed to type Tamajaq language for Latin orthography. Additional characters have been added to avoid having to switch keyboard to French or English while typing.
</p>

<p>Thanks to Mr. Joseph Gallop for contributing to the development of this keyboard.</p>
	
	<h2>Desktop Keyboard Layout</h2>
	<div id='osk' data-states='default shift'></div>

	<h2>Mobile/Tablet Keyboard Layout</h2>
	<div id='osk-tablet' data-states='default shift numeric'></div>

	<h3>Long Press</h3>
	<p>Press and hold on the key with a little dot on the top right to reveal more keys.</p>
	<p>Press and hold on key <kbd>.</kbd>, you should see:</p>
	<p><a href="tawallammat_latin_longpress.jpg"><img class="keyboard" src="tawallammat_latin_longpress.jpg" width=40% /></a></p>
	<p>Press and hold on key <kbd>a</kbd>, you should see:</p>
	<p><a href="tawallammat_latin_longpress_a.jpg"><img class="keyboard" src="tawallammat_latin_longpress_a.jpg" width=40% /></a></p>
	

<h1>Special Keystrokes</h1>
<table style="font-family:'Charis';">
<thead><tr><th>Keystrokes</th><th> Outputs  </th></tr></thead><tbody>
 <tr><td><kbd>,</kbd> + <kbd>C</kbd></td><td> Ç  </td></tr>
 <tr><td><kbd>,</kbd> + <kbd>c</kbd></td><td> ç  </td></tr>
 <tr><td><kbd>,</kbd> + <kbd>G</kbd></td><td> Ɣ  </td></tr>
 <tr><td><kbd>,</kbd> + <kbd>g</kbd></td><td> ɣ  </td></tr>
 <tr><td><kbd>,</kbd> + <kbd>Z</kbd></td><td> Ž  </td></tr>
 <tr><td><kbd>,</kbd> + <kbd>z</kbd></td><td> ž  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>]</kbd> <br>(On mobile: press and hold on key <kbd>s</kbd> and roll over to <kbd>ṣ̌</kbd>)</td><td> ṣ̌  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>}</kbd> <br>(On mobile: press and hold on key <kbd>S</kbd> and roll over to <kbd>Ṣ̌</kbd>)</td><td> Ṣ̌  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>+</kbd> <br>(On mobile: press and hold on key <kbd>Ŋ</kbd> and roll over to <kbd>Ŋ̇</kbd>)</td><td> Ŋ̇  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>=</kbd> <br>(On mobile: press and hold on key <kbd>ŋ</kbd> and roll over to <kbd>ŋ̇</kbd>)</td><td> ŋ̇  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>B</kbd></td><td> Ḅ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>b</kbd></td><td> ḅ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>D</kbd></td><td> Ḍ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>d</kbd></td><td> ḍ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>F</kbd></td><td> F̣  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>f</kbd></td><td> f̣  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>g</kbd></td><td> g̣  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>G</kbd></td><td> G̣  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>H</kbd></td><td> Ḥ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>h</kbd></td><td> ḥ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>j</kbd></td><td> j̣  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>J</kbd></td><td> J̣  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>K</kbd></td><td> Ḳ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>k</kbd></td><td> ḳ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>L</kbd></td><td> Ḷ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>l</kbd></td><td> ḷ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>M</kbd></td><td> Ṃ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>m</kbd></td><td> ṃ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>N</kbd></td><td> Ṇ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>n</kbd></td><td> ṇ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>R</kbd></td><td> Ṛ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>r</kbd></td><td> ṛ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>S</kbd></td><td> Ṣ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>s</kbd></td><td> ṣ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>T</kbd></td><td> Ṭ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>t</kbd></td><td> ṭ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>W</kbd></td><td> Ẉ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>w</kbd></td><td> ẉ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>Y</kbd></td><td> Ỵ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>y</kbd></td><td> ỵ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>Z</kbd></td><td> Ẓ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>z</kbd></td><td> ẓ  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>,</kbd> + <kbd>Z</kbd></td><td> Ẓ̌  </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>,</kbd> + <kbd>z</kbd></td><td> ẓ̌  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>A</kbd></td><td> Á  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>a</kbd></td><td> á  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>E</kbd></td><td> É  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>e</kbd></td><td> é  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>I</kbd></td><td> Í  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>i</kbd></td><td> í  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>O</kbd></td><td> Ó  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>o</kbd></td><td> ó  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>U</kbd></td><td> Ú  </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>u</kbd></td><td> ú  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>A</kbd></td><td> Ä  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>a</kbd></td><td> ä  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>E</kbd></td><td> Ë  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>e</kbd></td><td> ë  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>I</kbd></td><td> Ï  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>i</kbd></td><td> ï  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>O</kbd></td><td> Ö  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>o</kbd></td><td> ö  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>U</kbd></td><td> Ü  </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>u</kbd></td><td> ü  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>A</kbd></td><td> Â  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>a</kbd></td><td> â  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>E</kbd></td><td> Ê  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>e</kbd></td><td> ê  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>I</kbd></td><td> Î  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>i</kbd></td><td> î  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>O</kbd></td><td> Ô  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>o</kbd></td><td> ô  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>U</kbd></td><td> Û  </td></tr>
 <tr><td><kbd>^</kbd> + <kbd>u</kbd></td><td> û  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>A</kbd></td><td> À  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>a</kbd></td><td> à  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>E</kbd></td><td> È  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>e</kbd></td><td> è  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>I</kbd></td><td> Ì  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>i</kbd></td><td> ì  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>O</kbd></td><td> Ò  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>o</kbd></td><td> ò  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>U</kbd></td><td> Ù  </td></tr>
 <tr><td><kbd>`</kbd> + <kbd>u</kbd></td><td> ù  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>A</kbd></td><td> Ă  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>a</kbd></td><td> ă  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>E</kbd></td><td> Ĕ  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>e</kbd></td><td> ĕ  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>I</kbd></td><td> Ĭ  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>i</kbd></td><td> ĭ  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>O</kbd></td><td> Ŏ  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>o</kbd></td><td> ŏ  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>U</kbd></td><td> Ŭ  </td></tr>
 <tr><td><kbd>~</kbd> + <kbd>u</kbd></td><td> ŭ  </td></tr>
 <tr><td><kbd>,</kbd> + <kbd>></kbd></td><td>’ (right single quotation mark)</td></tr>
 <tr><td><kbd>,</kbd> + <kbd><</kbd></td><td>‘ (left single quotation mark)</td></tr>
 <tr><td><kbd>‘</kbd> (left single quotation mark) + <kbd><</kbd></td><td>“</td></tr>
 <tr><td><kbd>’</kbd> (right single quotation mark) + <kbd>></kbd></td><td>”</td></tr>
 <tr><td><kbd>‹</kbd> + <kbd><</kbd> <br>(press <kbd>‹</kbd> twice)</td><td> «  </td></tr>
 <tr><td><kbd>›</kbd> + <kbd>></kbd> <br>(press <kbd>›</kbd> twice)</td><td>»  </td></tr>
 <tr><td><kbd>;</kbd> + <kbd>[</kbd></td><td> [  </td></tr>
 <tr><td><kbd>;</kbd> + <kbd>]</kbd></td><td> ]  </td></tr>
 <tr><td><kbd>;</kbd> + <kbd>{</kbd></td><td> {  </td></tr>
 <tr><td><kbd>;</kbd> + <kbd>}</kbd></td><td> }  </td></tr>
 <tr><td><kbd>;</kbd> + <kbd>+</kbd></td><td> +  </td></tr>
 <tr><td><kbd>;</kbd> + <kbd>=</kbd></td><td> =  </td></tr>
</tbody></table>

<p>© Christian Grandouiller</p>
