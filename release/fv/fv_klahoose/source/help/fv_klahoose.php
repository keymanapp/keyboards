<?php 
  $pagename = 'Éy7á7juuthem Keyboard Help';
  $pagetitle = 'Éy7á7juuthem Keyboard Help';
  $pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
This keyboard is designed for the <b>Éy7á7juuthem</b> language of the BC Coast region of Canada.
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default'></div>

<ul>
	<li>The "Default" keymap above shows how to type the following characters in Éy7á7juuthem.</li>
		<ul>
			<li>ƛ	—	<kbd>[</kbd> left bracket</li>
			<li>θ	—	<kbd>]</kbd> right bracket</li>
			<li>ə	—	<kbd>;</kbd> semicolon</li>
			<li>ʔ	—	<kbd>/</kbd> slash</li>
		</ul>
	<li>To type a <strong>combining accent</strong>, first type the base vowel and then type the accent key.</li>
	<ul>
		<li>Acute accent (◌́)	—	Backtick <kbd>`</kbd> (next to 1)
			<ul><li><kbd>e</kbd>+<kbd>`</kbd> = <kbd>é</kbd> </li></ul>
		</li>
		<li>Combining glottal apostrophe (◌̓)	—	Apostrophe <kbd>'</kbd>
			<ul><li><kbd>m<kbd>+<kbd>'</kbd> = m̓ </li></ul>
		</li>
		<li>Caron (◌̌)	—	Backslash <kbd>\</kbd>
			<ul><li><kbd>c</kbd>+<kbd>\</kbd> = č</li></ul>
		</li>
	</ul>
	<li>You can type the original English value of the keys by holding down the <kbd>Right-Alt</kbd> key (Win) or <kbd>Option</kbd> key (Mac).
		<ul>
			<li>The barred lambda ƛ is typed <kbd>[</kbd>.</li>
			<li>The right bracket [ is typed <kbd>Right-Alt</kbd>+<kbd>[</kbd> or <kbd>Option</kbd>+<kbd>[</kbd>.
		</ul>
	</li>
</ul>

<div id='osk' data-states='shift'></div>

<ul>
	<li>The "Shifted" keymap above shows characters in Éy7á7juuthem that can be typed with <kbd>SHIFT</kbd> key combinations.</li>
		<ul>
			<li>ɛ	— <kbd>SHIFT</kbd>+<kbd>e</kbd></li>
			<li>ʊ	—	<kbd>SHIFT</kbd>+<kbd>u</kbd></li>
			<li>I	—	<kbd>SHIFT</kbd>+<kbd>i</kbd></li>
			<li>ɔ	— <kbd>SHIFT</kbd>+<kbd>e</kbd></li>
			<li>æ	—	<kbd>SHIFT</kbd>+<kbd>a</kbd></li>
			<li>ɬ	— <kbd>SHIFT</kbd>+<kbd>l</kbd></li>
			<li>χ	— <kbd>SHIFT</kbd>+<kbd>x</kbd></li>
			<li>w̥	— <kbd>SHIFT</kbd>+<kbd>v</kbd></li>
		</ul>
	<li>You can type the original English value of the keys by holding down the <kbd>Right-Alt</kbd> key (Win) or <kbd>Option</kbd> key (Mac).
		<ul>
			<li>æ is typed <kbd>SHIFT</kbd>+<kbd>a</kbd></li>
			<li>A is typed <kbd>RightAlt</kbd>+<kbd>a</kbd> or <kbd>Option</kbd>+<kbd>a</kbd>.</li>
		</ul>
	</li>
</ul>
	
<h3>Typing raised characters</h3>
	<li>To type a <strong>raised character</strong>, first type the base character and then type the Caret <kbd>^</kbd> (<kbd>Shift</kbd>+<kbd>6</kbd>).
		<ul>
			<li>Raised ᶿ: <kbd>θ</kbd>+<kbd>^</kbd> or <kbd>t</kbd>+<kbd>^</kbd></li> 
			<li>Raised ʷ: <kbd>w</kbd>+<kbd>^</kbd></li>
			<li>Raised ʸ: <kbd>y</kbd>+<kbd>^</kbd></li>
		</ul>
	</li>
</ul> 

<p>The following Unicode fonts have been installed on your computer: <strong>Aboriginal Sans, Aboriginal Serif.</strong> Please use these fonts when typing in your language as they have been specially built to represent your language as accurately as possible. </p>

<h3><a href="http://www.languagegeek.com/font/fontdownload.html">Download the latest version of Aboriginal Sans and Aboriginal Serif</a></h3>


<h2>Mobile Touch Layout</h2>
<div id='wikitext'>
<div class='vspace'></div>

<table border='1' style='border-collapse:collapse' cellpadding='5' >
	<tr >
		<td  align='center'>q q̓</td>
		<td  align='center'>w w̓ w̥</td>
		<td  align='center'>ɛ e</td>
		<td  align='center'>ə</td>
		<td  align='center'>t t̓</td>
		<td  align='right'>y y̓ ʸ</td>
		<td  align='center'>ʊ u</td>
		<td  align='center'>i ɩ</td>
		<td  align='right'>o ɔ</td>
		<td  align='center'>p p̓</td>
	</tr>
	<tr >
		<td  align='center'>a æ</td>
		<td  align='center'>s</td>
		<td  align='center'>ʔ</td>
		<td  align='center'>θ tᶿ t̓ᶿ</td>
		<td  align='center'>g</td>
		<td  align='center'>h</td>
		<td  align='center'>ǰ</td>
		<td  align='center'>k k̓</td>
		<td  align='center'>l l̓</td>
		<td  align='center'>ɬ</td>
	</tr>
	<tr >
		<td >&nbsp;</td>
		<td  align='center'>š</td>
		<td  align='center'>χ x</td>
		<td  align='center'>č č̓</td>
		<td  align='center'>ƛ ƛ̓</td>
		<td  align='center'>ʷ</td>
		<td  align='center'>n n̓</td>
		<td  align='center'>m m̓</td>
		<td  colspan='2'>&nbsp;</td>
	</tr>
	</tr>
	<tr >
		<td >123</td>
		<td  align='center'>🌐</td>
		<th  align='center'>´</th>
		<td  colspan='4' align='center'>space</td>
		<td  align='center'>.</td>
		<td  align='center' colspan='2'>⏎</td>
	</tr>
</table>

<div class='vspace'></div>
<ul>
	<li>Keys with a red background are combining accents. On your mobile device, they will have green text.</li>
	<li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</li>
	<li>Common punctuation marks can be found by pressing and holding the period key on the right side of the space bar.</li>
</ul>

<div class='vspace'></div>
</div>

