<?php
$pagename = '’Wuìk̓ala Keyboard Help';
$pagetitle = '’Wuìk̓ala Keyboard Help';
$pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

require_once ('header.php');
?>

<p style='margin: 16px 0 0 0'>
	This keyboard is designed for the <b>’Wuìk̓ala</b> language of the BC Coast region of Canada.
</p>

<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below),
	please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>


<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'></div>

<ul>
	<li>To type a special combining symbol, first type the base alphabet character (such as <strong>a</strong>),
		and then type the symbol key (such as <strong>SEMICOLON ;</strong>).
		<ul>
			<li>Combining háček (ˇ): type <strong>Semicolon</strong> <kbd>;</kbd> (Example: <kbd>a</kbd> +
				<kbd>;</kbd> = ǎ)
			</li>
			<li>Standalone háček (ˇ): type <strong>Backquote</strong> <kbd>`</kbd> (Example: <kbd>`</kbd> +
				<kbd>G</kbd> = ˇG)
			</li>
			<li>Combining apostrophe (ʼ): type <strong>Slash</strong> <kbd>/</kbd> (Example: <kbd>k</kbd> + <kbd>/</kbd>
				= k̓)</li>
			<li>Grave accent (ˋ): type <strong>Left-Bracket</strong> <kbd>[</kbd> (Example: <kbd>e</kbd> + <kbd>[</kbd>
				= è)</li>
			<li>Standalone apostrophe (’) is typed with <strong>Apostrophe</strong> <kbd>'</kbd></li>
		</ul>
	</li>
	<li>You can type the English value of the punctuation keys by holding down the Right-Alt or Option key. The
		Slash / is typed <kbd>Right-Alt</kbd>+<kbd>/</kbd> (Windows) or <kbd>⌥ Option</kbd>+<kbd>/</kbd> (Mac).
		<ul>
			<li><strong>NOTE:</strong> When using Google Docs, Slash / is typed
				<kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+<kbd>/</kbd> (Windows) / <kbd>⌥
					Option</kbd>+<kbd>Shift</kbd>+<kbd>/</kbd> (Mac)
			</li>
		</ul>
	</li>
	<li>Opening and closing quotes. For Mac users, Right-Alt is either of the Option Keys.</li>
	<ul>
		<li>quotations: “ <kbd>Shift</kbd>+<kbd>-</kbd> — ” <kbd>Shift</kbd>+<kbd>=</kbd></li>
		<li>single ‹ <kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+<kbd>9</kbd> — ›
			<kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+<kbd>0</kbd>
		</li>
		<li>double « <kbd>Right-Alt</kbd>+<kbd>9</kbd> — » <kbd>Right-Alt</kbd>+<kbd>0</kbd></li>
	</ul>
	<li>Some addtional characters are also available:</li>
	<ul>
		<li>Underdot (◌̣): type <strong>Backslash</strong> <kbd>\</kbd> (Example: <kbd>n</kbd> + <kbd>\</kbd> = ṇ)</li>
		<li>Diaeresis (¨): type <kbd>Shift</kbd>+<kbd>[</kbd> <strong>}</strong> (Example: <kbd>c</kbd> +
			<kbd>Shift</kbd>+<kbd>[</kbd> = c̈)
		</li>
		<li>Tie-bar (⁀) is typed between two letters using <kbd>Shift</kbd>+<kbd>\</kbd> <strong>|</strong> (Example:
			<kbd>n</kbd> +
			<kbd>Shift</kbd>+<kbd>\</kbd> + <kbd>n</kbd> = n͡n)
		</li>
	</ul>
</ul>

<p>The following Unicode fonts have been installed on your computer: <strong>Aboriginal Sans, Aboriginal Serif.</strong>
	Please use these fonts when typing in your language as they have been specially built to represent your language as
	accurately as possible. </p>

<h3><a href="http://www.languagegeek.com/font/fontdownload.html">Download the latest version of Aboriginal Sans and
		Aboriginal Serif</a></h3>

<h2>Mobile Touch Layout</h2>

<div id='wikitext'>
	<div class='vspace'></div>
	<table border='1' style='border-collapse:collapse' cellpadding='5'>
		<tr>
			<td align='center'>q q̓</td>
			<td align='center'>w w̓</td>
			<td align='center'>ə ə̀</td>
			<th align='center'>ʼ</th>
			<td align='center'>t t̓</td>
			<td align='center'>y y̓</td>
			<td align='center'>u u̓ ù</td>
			<td align='center'>i i̓ ì</td>
			<th align='center'>`</th>
			<td align='center'>p p̓</td>
		</tr>
		<tr>
			<td align='center'>a a̓ à ǎ ’ǎ</td>
			<td align='center'>s</td>
			<td align='center'>d</td>
			<td align='center'>ǧ</td>
			<td align='center'>g</td>
			<td align='center'>h h̓</td>
			<td align='center'>x̌</td>
			<td align='center'>k k̓</td>
			<td align='center'>l l̓ l͡l</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td align='center'>⇧</td>
			<td align='center'>z</td>
			<td align='center'>x</td>
			<td align='center'>c c̓</td>
			<td align='center'>v</td>
			<td align='center'>b</td>
			<td align='right'>n n̓ n͡n</td>
			<td align='center'>m m̓ m͡m</td>
			<td align='center' colspan='2'>⌫</td>
		</tr>
		<tr>
			<td align='center'>123</td>
			<td align='center'>🌐</td>
			<td align='center'>’ "</td>
			<td align='center' colspan='4'>space</td>
			<td align='center'>.</td>
			<td align='center' colspan='2'>⏎</td>
		</tr>
	</table>


	<ul>
		<li>Keys with a red background are combining accents. On your mobile device, these keys will have green text.
		</li>
		<li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</li>
		<li>Common punctuation marks can be found by pressing and holding the period key on the right side of the space
		bar.
		</li>
	</ul>


</div>