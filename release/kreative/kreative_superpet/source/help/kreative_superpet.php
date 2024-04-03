<?php
  $pagetitle = 'Kreative SuperPET Keyboard Layout';
  $pagename = 'SuperPET Keyboard Layout';
  $pagestyle = <<<END
	th, td {
		padding: 1pt 12pt 1pt 0pt;
		text-align: left;
	}
	.hidden {
		display: none !important;
	}
	code {
		font-size: 10pt;
		font-weight: bold;
		padding: 4px;
	}
	/* KEYBOARD */
	table.k {
		font-family: "Georgia", "Times New Roman", serif;
		font-size: 16px;
		border-collapse: collapse;
		table-layout: fixed;
		width: 842px;
	}
	table.k td {
		padding: 2px;
		text-align: center;
		vertical-align: middle;
		height: 23px;
	}
	table.k td.t,
	table.k td.tl,
	table.k td.tr {
		border-top: solid 2px black;
	}
	table.k td.b,
	table.k td.bl,
	table.k td.br {
		border-bottom: solid 2px black;
	}
	table.k td.t,
	table.k td.b,
	table.k td.tl,
	table.k td.bl {
		border-left: solid 2px black;
	}
	table.k td.t,
	table.k td.b,
	table.k td.tr,
	table.k td.br {
		border-right: solid 2px black;
	}
	table.k td.m {
		background: #ccc;
	}
	table.k td.d {
		background: #fd5;
	}
	table.k td.o {
		background: #ddf;
	}
	.ol {
		border: solid 1px #999;
		/* Rendering hack - disables hinting??? */
		display: inline-block;
		width: 14px;
		height: 14px;
		line-height: 14px;
		transform: scale(1.00001);
	}
	.ksq {
		font-family: "Kreative Square";
		font-size: 14px;
	}
	@font-face {
		font-family: "Kreative Square";
		src: url(KreativeSquare.ttf) format("truetype");
	}
END;
  require_once('header.php');
?>
<h2>for Keyman</h2>
<p>Type every PETSCII, ZX80, ZX81, and ZX Spectrum character.</p>
<p>Type many block element and box drawing characters easily.</p>
<h3>The Layout</h3>
<p>
	Kreative SuperPET keyboard layout is based on the PETSCII character set and keyboard<br>
	from the Commodore PET and its descendants, including David Murray's Commander X16.<br>
	SuperPET allows you to type the equivalent Unicode characters using a similar mapping.<br>
	Many of these characters have been made available for the first time in Unicode 13.0.<br>
	Type graphical characters using Option on Mac OS X, Right Alt on Linux and Windows.
</p>
		<table border="0" cellpadding="0" cellspacing="0" class="k">
			<tr>
				<td colspan="2" class="tl">~</td>
				<td colspan="2" class="tr">π</td>
				<td colspan="2" class="tl">!</td>
				<td colspan="2" class="tr ksq"><span class="ol">▛</span></td>
				<td colspan="2" class="tl">@</td>
				<td colspan="2" class="tr ksq"><span class="ol">▜</span></td>
				<td colspan="2" class="tl">#</td>
				<td colspan="2" class="tr ksq"><span class="ol">▙</span></td>
				<td colspan="2" class="tl">$</td>
				<td colspan="2" class="tr ksq"><span class="ol">▟</span></td>
				<td colspan="2" class="tl">%</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮑</span></td>
				<td colspan="2" class="tl">^</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮔</span></td>
				<td colspan="2" class="tl">&amp;</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮱</span></td>
				<td colspan="2" class="tl">*</td>
				<td colspan="2" class="tr ksq"><span class="ol">▀</span></td>
				<td colspan="2" class="tl">(</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮐</span></td>
				<td colspan="2" class="tl">)</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮖</span></td>
				<td colspan="2" class="tl">_</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮌</span></td>
				<td colspan="2" class="tl">+</td>
				<td colspan="2" class="tr ksq"><span class="ol">▒</span></td>
				<td colspan="8" class="t m"></td>
			</tr>
			<tr>
				<td colspan="2" class="bl">`</td>
				<td colspan="2" class="br">←</td>
				<td colspan="2" class="bl">1</td>
				<td colspan="2" class="br ksq"><span class="ol">◘</span></td>
				<td colspan="2" class="bl">2</td>
				<td colspan="2" class="br ksq"><span class="ol">◙</span></td>
				<td colspan="2" class="bl">3</td>
				<td colspan="2" class="br">£</td>
				<td colspan="2" class="bl">4</td>
				<td colspan="2" class="br ksq"></td>
				<td colspan="2" class="bl">5</td>
				<td colspan="2" class="br">€</td>
				<td colspan="2" class="bl">6</td>
				<td colspan="2" class="br">↑</td>
				<td colspan="2" class="bl">7</td>
				<td colspan="2" class="br ksq"><span class="ol">✓</span></td>
				<td colspan="2" class="bl">8</td>
				<td colspan="2" class="br ksq"><span class="ol">🮘</span></td>
				<td colspan="2" class="bl">9</td>
				<td colspan="2" class="br ksq"><span class="ol">🮙</span></td>
				<td colspan="2" class="bl">0</td>
				<td colspan="2" class="br ksq"><span class="ol">🮕</span></td>
				<td colspan="2" class="bl">-</td>
				<td colspan="2" class="br ksq"><span class="ol">│</span></td>
				<td colspan="2" class="bl">=</td>
				<td colspan="2" class="br ksq"><span class="ol">┼</span></td>
				<td colspan="8" class="b m">
					<span class="mac hidden">delete</span>
					<span class="linux win hidden">backspace</span>
				</td>
			</tr>
			<tr>
				<td colspan="6" class="t m"></td>
				<td colspan="2" class="tl">Q</td>
				<td colspan="2" class="tr ksq"><span class="ol">├</span></td>
				<td colspan="2" class="tl">W</td>
				<td colspan="2" class="tr ksq"><span class="ol">┤</span></td>
				<td colspan="2" class="tl">E</td>
				<td colspan="2" class="tr ksq"><span class="ol">┴</span></td>
				<td colspan="2" class="tl">R</td>
				<td colspan="2" class="tr ksq"><span class="ol">┬</span></td>
				<td colspan="2" class="tl">T</td>
				<td colspan="2" class="tr ksq"><span class="ol">▔</span></td>
				<td colspan="2" class="tl">Y</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮂</span></td>
				<td colspan="2" class="tl">U</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮃</span></td>
				<td colspan="2" class="tl">I</td>
				<td colspan="2" class="tr ksq"><span class="ol">▄</span></td>
				<td colspan="2" class="tl">O</td>
				<td colspan="2" class="tr ksq"><span class="ol">▃</span></td>
				<td colspan="2" class="tl">P</td>
				<td colspan="2" class="tr ksq"><span class="ol">▂</span></td>
				<td colspan="2" class="tl">{</td>
				<td colspan="2" class="tr ksq"><span class="ol">▁</span></td>
				<td colspan="2" class="tl">}</td>
				<td colspan="2" class="tr ksq"><span class="ol">◥</span></td>
				<td colspan="3" class="tl">|</td>
				<td colspan="3" class="tr ksq"><span class="ol">🮏</span></td>
			</tr>
			<tr>
				<td colspan="6" class="b m">tab</td>
				<td colspan="2" class="bl">q</td>
				<td colspan="2" class="br ksq"><span class="ol">•</span></td>
				<td colspan="2" class="bl">w</td>
				<td colspan="2" class="br ksq"><span class="ol">○</span></td>
				<td colspan="2" class="bl">e</td>
				<td colspan="2" class="br ksq"><span class="ol">🭶</span></td>
				<td colspan="2" class="bl">r</td>
				<td colspan="2" class="br ksq"><span class="ol">🭻</span></td>
				<td colspan="2" class="bl">t</td>
				<td colspan="2" class="br ksq"><span class="ol">🭰</span></td>
				<td colspan="2" class="bl">y</td>
				<td colspan="2" class="br ksq"><span class="ol">🭵</span></td>
				<td colspan="2" class="bl">u</td>
				<td colspan="2" class="br ksq"><span class="ol">╭</span></td>
				<td colspan="2" class="bl">i</td>
				<td colspan="2" class="br ksq"><span class="ol">╮</span></td>
				<td colspan="2" class="bl">o</td>
				<td colspan="2" class="br ksq"><span class="ol">🭽</span></td>
				<td colspan="2" class="bl">p</td>
				<td colspan="2" class="br ksq"><span class="ol">🭾</span></td>
				<td colspan="2" class="bl">[</td>
				<td colspan="2" class="br ksq"><span class="ol">🭿</span></td>
				<td colspan="2" class="bl">]</td>
				<td colspan="2" class="br ksq"><span class="ol">─</span></td>
				<td colspan="3" class="bl">\</td>
				<td colspan="3" class="br ksq"><span class="ol">◤</span></td>
			</tr>
			<tr>
				<td colspan="7" class="t m"></td>
				<td colspan="2" class="tl">A</td>
				<td colspan="2" class="tr ksq"><span class="ol">┌</span></td>
				<td colspan="2" class="tl">S</td>
				<td colspan="2" class="tr ksq"><span class="ol">┐</span></td>
				<td colspan="2" class="tl">D</td>
				<td colspan="2" class="tr ksq"><span class="ol">▗</span></td>
				<td colspan="2" class="tl">F</td>
				<td colspan="2" class="tr ksq"><span class="ol">▖</span></td>
				<td colspan="2" class="tl">G</td>
				<td colspan="2" class="tr ksq"><span class="ol">▏</span></td>
				<td colspan="2" class="tl">H</td>
				<td colspan="2" class="tr ksq"><span class="ol">▎</span></td>
				<td colspan="2" class="tl">J</td>
				<td colspan="2" class="tr ksq"><span class="ol">▍</span></td>
				<td colspan="2" class="tl">K</td>
				<td colspan="2" class="tr ksq"><span class="ol">▌</span></td>
				<td colspan="2" class="tl">L</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮈</span></td>
				<td colspan="2" class="tl">:</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮇</span></td>
				<td colspan="2" class="tl">"</td>
				<td colspan="2" class="tr ksq"><span class="ol">▕</span></td>
				<td colspan="9" class="t m"></td>
			</tr>
			<tr>
				<td colspan="7" class="b m">caps lock</td>
				<td colspan="2" class="bl">a</td>
				<td colspan="2" class="br ksq"><span class="ol">♠</span></td>
				<td colspan="2" class="bl">s</td>
				<td colspan="2" class="br ksq"><span class="ol">♥</span></td>
				<td colspan="2" class="bl">d</td>
				<td colspan="2" class="br ksq"><span class="ol">🭷</span></td>
				<td colspan="2" class="bl">f</td>
				<td colspan="2" class="br ksq"><span class="ol">🭺</span></td>
				<td colspan="2" class="bl">g</td>
				<td colspan="2" class="br ksq"><span class="ol">🭱</span></td>
				<td colspan="2" class="bl">h</td>
				<td colspan="2" class="br ksq"><span class="ol">🭴</span></td>
				<td colspan="2" class="bl">j</td>
				<td colspan="2" class="br ksq"><span class="ol">╰</span></td>
				<td colspan="2" class="bl">k</td>
				<td colspan="2" class="br ksq"><span class="ol">╯</span></td>
				<td colspan="2" class="bl">l</td>
				<td colspan="2" class="br ksq"><span class="ol">🭼</span></td>
				<td colspan="2" class="bl">;</td>
				<td colspan="2" class="br ksq"><span class="ol">🭿</span></td>
				<td colspan="2" class="bl">'</td>
				<td colspan="2" class="br ksq"><span class="ol">█</span></td>
				<td colspan="9" class="b m">
					<span class="mac hidden">return</span>
					<span class="linux win hidden">enter</span>
				</td>
			</tr>
			<tr>
				<td colspan="9" class="t m"></td>
				<td colspan="2" class="tl">Z</td>
				<td colspan="2" class="tr ksq"><span class="ol">└</span></td>
				<td colspan="2" class="tl">X</td>
				<td colspan="2" class="tr ksq"><span class="ol">┘</span></td>
				<td colspan="2" class="tl">C</td>
				<td colspan="2" class="tr ksq"><span class="ol">▝</span></td>
				<td colspan="2" class="tl">V</td>
				<td colspan="2" class="tr ksq"><span class="ol">▘</span></td>
				<td colspan="2" class="tl">B</td>
				<td colspan="2" class="tr ksq"><span class="ol">▚</span></td>
				<td colspan="2" class="tl">N</td>
				<td colspan="2" class="tr ksq"><span class="ol">🮇</span></td>
				<td colspan="2" class="tl">M</td>
				<td colspan="2" class="tr ksq"><span class="ol">▕</span></td>
				<td colspan="2" class="tl">&lt;</td>
				<td colspan="2" class="tr ksq"><span class="ol">▐</span></td>
				<td colspan="2" class="tl">&gt;</td>
				<td colspan="2" class="tr ksq"><span class="ol">▞</span></td>
				<td colspan="2" class="tl">?</td>
				<td colspan="2" class="tr ksq"><span class="ol">◣</span></td>
				<td colspan="11" class="t m"></td>
			</tr>
			<tr>
				<td colspan="9" class="b m">shift</td>
				<td colspan="2" class="bl">z</td>
				<td colspan="2" class="br ksq"><span class="ol">♦</span></td>
				<td colspan="2" class="bl">x</td>
				<td colspan="2" class="br ksq"><span class="ol">♣</span></td>
				<td colspan="2" class="bl">c</td>
				<td colspan="2" class="br ksq"><span class="ol">🭸</span></td>
				<td colspan="2" class="bl">v</td>
				<td colspan="2" class="br ksq"><span class="ol">🭹</span></td>
				<td colspan="2" class="bl">b</td>
				<td colspan="2" class="br ksq"><span class="ol">🭲</span></td>
				<td colspan="2" class="bl">n</td>
				<td colspan="2" class="br ksq"><span class="ol">🭳</span></td>
				<td colspan="2" class="bl">m</td>
				<td colspan="2" class="br ksq"><span class="ol">╲</span></td>
				<td colspan="2" class="bl">,</td>
				<td colspan="2" class="br ksq"><span class="ol">╱</span></td>
				<td colspan="2" class="bl">.</td>
				<td colspan="2" class="br ksq"><span class="ol">╳</span></td>
				<td colspan="2" class="bl">/</td>
				<td colspan="2" class="br ksq"><span class="ol">◢</span></td>
				<td colspan="11" class="b m">shift</td>
			</tr>
			<tr class="mac hidden">
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t o"></td>
				<td colspan="6" class="t m"></td>
				<td colspan="26" class="t">nbsp</td>
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t o"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="mac hidden">
				<td colspan="6" class="b m">control</td>
				<td colspan="5" class="b o">option</td>
				<td colspan="6" class="b m">command</td>
				<td colspan="26" class="b">space</td>
				<td colspan="6" class="b m">command</td>
				<td colspan="5" class="b o">option</td>
				<td colspan="6" class="b m">control</td>
			</tr>
			<tr class="linux hidden">
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="23" class="t">nbsp</td>
				<td colspan="5" class="t o"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="linux hidden">
				<td colspan="6" class="b m">ctrl</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">alt</td>
				<td colspan="23" class="b">space</td>
				<td colspan="5" class="b o">alt gr</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">▤</td>
				<td colspan="6" class="b m">ctrl</td>
			</tr>
			<tr class="win hidden">
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="23" class="t">nbsp</td>
				<td colspan="5" class="t o"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="win hidden">
				<td colspan="6" class="b m">ctrl</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">alt</td>
				<td colspan="23" class="b">space</td>
				<td colspan="5" class="b o">alt gr</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">▤</td>
				<td colspan="6" class="b m">ctrl</td>
			</tr>
		</table>
<p>
	Two diagonal box drawing characters have been moved from the V and N keys to the period and comma<br>
	keys to make room for block element characters which are equivalent to box drawing characters in<br>
	PETSCII but have been disunified in Unicode. The pound symbol (£) has been placed on the 3 key.<br>
	Otherwise all other symbols are in the same locations as on the Commander X16 keyboard.
</p>
<p>
	Alt-4 is mapped to U+F821, which is the Commodore logo in the
	<a href="http://www.kreativekorp.com/software/fonts/index.shtml#kore"
	target="_blank">Kreative Kore</a> fonts.
</p>
<p>© 2019-2022 Kreative Software</p>
<script>
	function prep() {
		var ua = navigator.userAgent || navigator.appVersion;
		var mac = (ua.indexOf('Macintosh') >= 0) || (ua.indexOf('Mac OS') >= 0) || (ua.indexOf('MacOS') >= 0);
		var win = (ua.indexOf('Windows') >= 0);
		var os = (mac ? 'mac' : (win ? 'win' : 'linux'));
		var e = document.getElementsByClassName(os);
		for (var i = 0; i < e.length; i++) {
			e[i].className = e[i].className.replace('hidden', '');
		}
	}
	prep();
</script>
