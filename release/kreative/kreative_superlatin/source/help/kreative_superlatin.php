<?php
  $pagetitle = 'Kreative SuperLatin Keyboard Layout';
  $pagename = 'SuperLatin Keyboard Layout';
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
	/* DEADKEYS */
	table.dk {
		font-family: "Helvetica", sans-serif;
		font-size: 14px;
		border-collapse: collapse;
		table-layout: fixed;
		width: 1009px;
	}
	table.dk th,
	table.dk td {
		padding: 4px 2px;
		text-align: center;
		vertical-align: middle;
		border: solid 1px #ccc;
	}
	table.dk th.x {
		border: none;
	}
	table.dk th.uc,
	table.dk td.uc {
		padding-right: 0;
		border-right: none;
	}
	table.dk th.lc,
	table.dk td.lc {
		padding-left: 0;
		border-left: none;
	}
	table.dk th.d {
		background: #fd5;
	}
	table.dk td:empty {
		background: #ddd;
	}
END;
  require_once('header.php');
?>
<h2>for Keyman</h2>
<p>Type every character in ISO Latin 1, Windows ANSI, MacRoman, and Latin Extended A.</p>
<p>Type smart quotes, Euro sign, numero sign, uppercase sharp S, interrobang, and more!</p>
<h3>The Layout</h3>
<p>
	Kreative SuperLatin keyboard layout is consistent across all supported platforms.<br>
	Type alternate characters using Option on Mac OS X, Right Alt on Linux and Windows.<br>
	Right Windows key on Linux becomes a Compose key.
</p>
		<table border="0" cellpadding="0" cellspacing="0" class="k">
			<tr>
				<td colspan="2" class="tl">~</td>
				<td colspan="2" class="tr">≈</td>
				<td colspan="2" class="tl">!</td>
				<td colspan="2" class="tr">¡</td>
				<td colspan="2" class="tl">@</td>
				<td colspan="2" class="tr">€</td>
				<td colspan="2" class="tl">#</td>
				<td colspan="2" class="tr">£</td>
				<td colspan="2" class="tl">$</td>
				<td colspan="2" class="tr">¢</td>
				<td colspan="2" class="tl">%</td>
				<td colspan="2" class="tr">‰</td>
				<td colspan="2" class="tl">^</td>
				<td colspan="2" class="tr">°</td>
				<td colspan="2" class="tl">&amp;</td>
				<td colspan="2" class="tr">∞</td>
				<td colspan="2" class="tl">*</td>
				<td colspan="2" class="tr">•</td>
				<td colspan="2" class="tl">(</td>
				<td colspan="2" class="tr">·</td>
				<td colspan="2" class="tl">)</td>
				<td colspan="2" class="tr">-</td>
				<td colspan="2" class="tl">_</td>
				<td colspan="2" class="tr">—</td>
				<td colspan="2" class="tl">+</td>
				<td colspan="2" class="tr">±</td>
				<td colspan="8" class="t m"></td>
			</tr>
			<tr>
				<td colspan="2" class="bl">`</td>
				<td colspan="2" class="br d">ˋ</td>
				<td colspan="2" class="bl">1</td>
				<td colspan="2" class="br d">´</td>
				<td colspan="2" class="bl">2</td>
				<td colspan="2" class="br d">˝</td>
				<td colspan="2" class="bl">3</td>
				<td colspan="2" class="br d">˙</td>
				<td colspan="2" class="bl">4</td>
				<td colspan="2" class="br d">¨</td>
				<td colspan="2" class="bl">5</td>
				<td colspan="2" class="br d">˚</td>
				<td colspan="2" class="bl">6</td>
				<td colspan="2" class="br d">ˆ</td>
				<td colspan="2" class="bl">7</td>
				<td colspan="2" class="br d">ˇ</td>
				<td colspan="2" class="bl">8</td>
				<td colspan="2" class="br d">˘</td>
				<td colspan="2" class="bl">9</td>
				<td colspan="2" class="br d">˜</td>
				<td colspan="2" class="bl">0</td>
				<td colspan="2" class="br d">¯</td>
				<td colspan="2" class="bl">-</td>
				<td colspan="2" class="br">–</td>
				<td colspan="2" class="bl">=</td>
				<td colspan="2" class="br">≠</td>
				<td colspan="8" class="b m">
					<span class="mac hidden">delete</span>
					<span class="linux win hidden">backspace</span>
				</td>
			</tr>
			<tr>
				<td colspan="6" class="t m"></td>
				<td colspan="2" class="tl">Q</td>
				<td colspan="2" class="tr">ª</td>
				<td colspan="2" class="tl">W</td>
				<td colspan="2" class="tr">º</td>
				<td colspan="2" class="tl">E</td>
				<td colspan="2" class="tr">∑</td>
				<td colspan="2" class="tl">R</td>
				<td colspan="2" class="tr">√</td>
				<td colspan="2" class="tl">T</td>
				<td colspan="2" class="tr">Þ</td>
				<td colspan="2" class="tl">Y</td>
				<td colspan="2" class="tr">‽</td>
				<td colspan="2" class="tl">U</td>
				<td colspan="2" class="tr">Ω</td>
				<td colspan="2" class="tl">I</td>
				<td colspan="2" class="tr">ﬁ</td>
				<td colspan="2" class="tl">O</td>
				<td colspan="2" class="tr">Œ</td>
				<td colspan="2" class="tl">P</td>
				<td colspan="2" class="tr">∏</td>
				<td colspan="2" class="tl">{</td>
				<td colspan="2" class="tr">«</td>
				<td colspan="2" class="tl">}</td>
				<td colspan="2" class="tr">»</td>
				<td colspan="3" class="tl">|</td>
				<td colspan="3" class="tr">¦</td>
			</tr>
			<tr>
				<td colspan="6" class="b m">tab</td>
				<td colspan="2" class="bl">q</td>
				<td colspan="2" class="br">¶</td>
				<td colspan="2" class="bl">w</td>
				<td colspan="2" class="br">§</td>
				<td colspan="2" class="bl">e</td>
				<td colspan="2" class="br">ə</td>
				<td colspan="2" class="bl">r</td>
				<td colspan="2" class="br">®</td>
				<td colspan="2" class="bl">t</td>
				<td colspan="2" class="br">þ</td>
				<td colspan="2" class="bl">y</td>
				<td colspan="2" class="br">¥</td>
				<td colspan="2" class="bl">u</td>
				<td colspan="2" class="br">µ</td>
				<td colspan="2" class="bl">i</td>
				<td colspan="2" class="br">ı</td>
				<td colspan="2" class="bl">o</td>
				<td colspan="2" class="br">œ</td>
				<td colspan="2" class="bl">p</td>
				<td colspan="2" class="br">π</td>
				<td colspan="2" class="bl">[</td>
				<td colspan="2" class="br">‹</td>
				<td colspan="2" class="bl">]</td>
				<td colspan="2" class="br">›</td>
				<td colspan="3" class="bl">\</td>
				<td colspan="3" class="br">÷</td>
			</tr>
			<tr>
				<td colspan="7" class="t m"></td>
				<td colspan="2" class="tl">A</td>
				<td colspan="2" class="tr">Æ</td>
				<td colspan="2" class="tl">S</td>
				<td colspan="2" class="tr">ẞ</td>
				<td colspan="2" class="tl">D</td>
				<td colspan="2" class="tr">Ð</td>
				<td colspan="2" class="tl">F</td>
				<td colspan="2" class="tr">ﬂ</td>
				<td colspan="2" class="tl">G</td>
				<td colspan="2" class="tr">Ŋ</td>
				<td colspan="2" class="tl">H</td>
				<td colspan="2" class="tr">‡</td>
				<td colspan="2" class="tl">J</td>
				<td colspan="2" class="tr">∫</td>
				<td colspan="2" class="tl">K</td>
				<td colspan="2" class="tr">◊</td>
				<td colspan="2" class="tl">L</td>
				<td colspan="2" class="tr">„</td>
				<td colspan="2" class="tl">:</td>
				<td colspan="2" class="tr">“</td>
				<td colspan="2" class="tl">"</td>
				<td colspan="2" class="tr">”</td>
				<td colspan="9" class="t m"></td>
			</tr>
			<tr>
				<td colspan="7" class="b m">caps lock</td>
				<td colspan="2" class="bl">a</td>
				<td colspan="2" class="br">æ</td>
				<td colspan="2" class="bl">s</td>
				<td colspan="2" class="br">ß</td>
				<td colspan="2" class="bl">d</td>
				<td colspan="2" class="br">ð</td>
				<td colspan="2" class="bl">f</td>
				<td colspan="2" class="br">ƒ</td>
				<td colspan="2" class="bl">g</td>
				<td colspan="2" class="br">ŋ</td>
				<td colspan="2" class="bl">h</td>
				<td colspan="2" class="br">†</td>
				<td colspan="2" class="bl">j</td>
				<td colspan="2" class="br">ȷ</td>
				<td colspan="2" class="bl">k</td>
				<td colspan="2" class="br">ĸ</td>
				<td colspan="2" class="bl">l</td>
				<td colspan="2" class="br">‚</td>
				<td colspan="2" class="bl">;</td>
				<td colspan="2" class="br">‘</td>
				<td colspan="2" class="bl">'</td>
				<td colspan="2" class="br">’</td>
				<td colspan="9" class="b m">
					<span class="mac hidden">return</span>
					<span class="linux win hidden">enter</span>
				</td>
			</tr>
			<tr>
				<td colspan="9" class="t m"></td>
				<td colspan="2" class="tl">Z</td>
				<td colspan="2" class="tr">ſ</td>
				<td colspan="2" class="tl">X</td>
				<td colspan="2" class="tr">¤</td>
				<td colspan="2" class="tl">C</td>
				<td colspan="2" class="tr">℗</td>
				<td colspan="2" class="tl">V</td>
				<td colspan="2" class="tr">∇</td>
				<td colspan="2" class="tl">B</td>
				<td colspan="2" class="tr">∆</td>
				<td colspan="2" class="tl">N</td>
				<td colspan="2" class="tr">№</td>
				<td colspan="2" class="tl">M</td>
				<td colspan="2" class="tr">⌘</td>
				<td colspan="2" class="tl">&lt;</td>
				<td colspan="2" class="tr">≤</td>
				<td colspan="2" class="tl">&gt;</td>
				<td colspan="2" class="tr">≥</td>
				<td colspan="2" class="tl">?</td>
				<td colspan="2" class="tr">¿</td>
				<td colspan="11" class="t m"></td>
			</tr>
			<tr>
				<td colspan="9" class="b m">shift</td>
				<td colspan="2" class="bl">z</td>
				<td colspan="2" class="br">…</td>
				<td colspan="2" class="bl">x</td>
				<td colspan="2" class="br">×</td>
				<td colspan="2" class="bl">c</td>
				<td colspan="2" class="br">©</td>
				<td colspan="2" class="bl">v</td>
				<td colspan="2" class="br">¬</td>
				<td colspan="2" class="bl">b</td>
				<td colspan="2" class="br">∂</td>
				<td colspan="2" class="bl">n</td>
				<td colspan="2" class="br">ŉ</td>
				<td colspan="2" class="bl">m</td>
				<td colspan="2" class="br">™</td>
				<td colspan="2" class="bl">,</td>
				<td colspan="2" class="br d">¸</td>
				<td colspan="2" class="bl">.</td>
				<td colspan="2" class="br d">˛</td>
				<td colspan="2" class="bl">/</td>
				<td colspan="2" class="br d">⁄</td>
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
				<td colspan="5" class="t o"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="linux hidden">
				<td colspan="6" class="b m">ctrl</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">alt</td>
				<td colspan="23" class="b">space</td>
				<td colspan="5" class="b o">alt gr</td>
				<td colspan="5" class="b o">compose</td>
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
<p>For example:</p>
<table border="0" cellpadding="0" cellspacing="0" class="ex">
	<tr><td>Single quotes:</td><td>Alt-L</td><td>Alt-;</td><td>Alt-'</td></tr>
	<tr><td>Double quotes:</td><td>Alt-Shift-L</td><td>Alt-Shift-;</td><td>Alt-Shift-'</td></tr>
	<tr><td>Single guillemets:</td><td>Alt-[</td><td>Alt-]</td></tr>
	<tr><td>Double guillemets:</td><td>Alt-Shift-[</td><td>Alt-Shift-]</td></tr>
	<tr><td>En dash:</td><td>Alt-Hyphen</td></tr>
	<tr><td>Em dash:</td><td>Alt-Shift-Hyphen</td></tr>
	<tr><td>Euro sign:</td><td>Alt-Shift-2</td></tr>
	<tr><td>Numero sign:</td><td>Alt-Shift-N</td></tr>
	<tr><td>Uppercase sharp S:</td><td>Alt-Shift-S</td></tr>
	<tr><td>Interrobang:</td><td>Alt-Shift-Y</td></tr>
</table>
<h3>Dead Keys</h3>
<p>
	Type a dead key (shown in yellow) followed by a letter for the following characters on Mac OS X and Windows.<br>
	A dead key followed by a space produces a spacing modifier; followed by Alt-Space produces a combining mark.<br>
	(On Linux, dead keys are instead determined by the Compose file as is standard for that platform.)
</p>
<table border="0" cellpadding="0" cellspacing="0" class="dk">
	<tr><th class="x"></th><th class="uc">A</th><th class="lc">a</th><th class="uc">B</th><th class="lc">b</th><th class="uc">C</th><th class="lc">c</th><th class="uc">D</th><th class="lc">d</th><th class="uc">E</th><th class="lc">e</th><th class="uc">F</th><th class="lc">f</th><th class="uc">G</th><th class="lc">g</th><th class="uc">H</th><th class="lc">h</th><th class="uc">I</th><th class="lc">i</th><th class="uc">J</th><th class="lc">j</th><th class="uc">K</th><th class="lc">k</th><th class="uc">L</th><th class="lc">l</th><th class="uc">M</th><th class="lc">m</th><th class="uc">N</th><th class="lc">n</th><th class="uc">O</th><th class="lc">o</th><th class="uc">P</th><th class="lc">p</th><th class="uc">Q</th><th class="lc">q</th><th class="uc">R</th><th class="lc">r</th><th class="uc">S</th><th class="lc">s</th><th class="uc">T</th><th class="lc">t</th><th class="uc">U</th><th class="lc">u</th><th class="uc">V</th><th class="lc">v</th><th class="uc">W</th><th class="lc">w</th><th class="uc">X</th><th class="lc">x</th><th class="uc">Y</th><th class="lc">y</th><th class="uc">Z</th><th class="lc">z</th><th class="n">0</th><th class="n">1</th><th class="n">2</th><th class="n">3</th><th class="n">4</th><th class="n">5</th><th class="n">6</th><th class="n">7</th><th class="n">8</th><th class="n">9</th></tr>
	<tr><th class="d">ˋ</th><td class="uc">À</td><td class="lc">à</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">È</td><td class="lc">è</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ì</td><td class="lc">ì</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ǹ</td><td class="lc">ǹ</td><td class="uc">Ò</td><td class="lc">ò</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ù</td><td class="lc">ù</td><td class="uc"></td><td class="lc"></td><td class="uc">Ẁ</td><td class="lc">ẁ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ỳ</td><td class="lc">ỳ</td><td class="uc"></td><td class="lc"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">´</th><td class="uc">Á</td><td class="lc">á</td><td class="uc"></td><td class="lc"></td><td class="uc">Ć</td><td class="lc">ć</td><td class="uc"></td><td class="lc"></td><td class="uc">É</td><td class="lc">é</td><td class="uc"></td><td class="lc"></td><td class="uc">Ǵ</td><td class="lc">ǵ</td><td class="uc"></td><td class="lc"></td><td class="uc">Í</td><td class="lc">í</td><td class="uc"></td><td class="lc"></td><td class="uc">Ḱ</td><td class="lc">ḱ</td><td class="uc">Ĺ</td><td class="lc">ĺ</td><td class="uc">Ḿ</td><td class="lc">ḿ</td><td class="uc">Ń</td><td class="lc">ń</td><td class="uc">Ó</td><td class="lc">ó</td><td class="uc">Ṕ</td><td class="lc">ṕ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ŕ</td><td class="lc">ŕ</td><td class="uc">Ś</td><td class="lc">ś</td><td class="uc"></td><td class="lc"></td><td class="uc">Ú</td><td class="lc">ú</td><td class="uc"></td><td class="lc"></td><td class="uc">Ẃ</td><td class="lc">ẃ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ý</td><td class="lc">ý</td><td class="uc">Ź</td><td class="lc">ź</td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">ˆ</th><td class="uc">Â</td><td class="lc">â</td><td class="uc"></td><td class="lc"></td><td class="uc">Ĉ</td><td class="lc">ĉ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ê</td><td class="lc">ê</td><td class="uc"></td><td class="lc"></td><td class="uc">Ĝ</td><td class="lc">ĝ</td><td class="uc">Ĥ</td><td class="lc">ĥ</td><td class="uc">Î</td><td class="lc">î</td><td class="uc">Ĵ</td><td class="lc">ĵ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ô</td><td class="lc">ô</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ŝ</td><td class="lc">ŝ</td><td class="uc"></td><td class="lc"></td><td class="uc">Û</td><td class="lc">û</td><td class="uc"></td><td class="lc"></td><td class="uc">Ŵ</td><td class="lc">ŵ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ŷ</td><td class="lc">ŷ</td><td class="uc">Ẑ</td><td class="lc">ẑ</td><td class="n">⁰</td><td class="n">¹</td><td class="n">²</td><td class="n">³</td><td class="n">⁴</td><td class="n">⁵</td><td class="n">⁶</td><td class="n">⁷</td><td class="n">⁸</td><td class="n">⁹</td></tr>
	<tr><th class="d">˜</th><td class="uc">Ã</td><td class="lc">ã</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ẽ</td><td class="lc">ẽ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ĩ</td><td class="lc">ĩ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ñ</td><td class="lc">ñ</td><td class="uc">Õ</td><td class="lc">õ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ũ</td><td class="lc">ũ</td><td class="uc">Ṽ</td><td class="lc">ṽ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ỹ</td><td class="lc">ỹ</td><td class="uc"></td><td class="lc"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">¯</th><td class="uc">Ā</td><td class="lc">ā</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ē</td><td class="lc">ē</td><td class="uc"></td><td class="lc"></td><td class="uc">Ḡ</td><td class="lc">ḡ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ī</td><td class="lc">ī</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ō</td><td class="lc">ō</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ū</td><td class="lc">ū</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ȳ</td><td class="lc">ȳ</td><td class="uc"></td><td class="lc"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">˘</th><td class="uc">Ă</td><td class="lc">ă</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ĕ</td><td class="lc">ĕ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ğ</td><td class="lc">ğ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ĭ</td><td class="lc">ĭ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ŏ</td><td class="lc">ŏ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ŭ</td><td class="lc">ŭ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">˙</th><td class="uc">Ȧ</td><td class="lc">ȧ</td><td class="uc">Ḃ</td><td class="lc">ḃ</td><td class="uc">Ċ</td><td class="lc">ċ</td><td class="uc">Ḋ</td><td class="lc">ḋ</td><td class="uc">Ė</td><td class="lc">ė</td><td class="uc">Ḟ</td><td class="lc">ḟ</td><td class="uc">Ġ</td><td class="lc">ġ</td><td class="uc">Ḣ</td><td class="lc">ḣ</td><td class="uc">İ</td><td class="lc">ı</td><td class="uc"></td><td class="lc">ȷ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ŀ</td><td class="lc">ŀ</td><td class="uc">Ṁ</td><td class="lc">ṁ</td><td class="uc">Ṅ</td><td class="lc">ṅ</td><td class="uc">Ȯ</td><td class="lc">ȯ</td><td class="uc">Ṗ</td><td class="lc">ṗ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ṙ</td><td class="lc">ṙ</td><td class="uc">Ṡ</td><td class="lc">ṡ</td><td class="uc">Ṫ</td><td class="lc">ṫ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ẇ</td><td class="lc">ẇ</td><td class="uc">Ẋ</td><td class="lc">ẋ</td><td class="uc">Ẏ</td><td class="lc">ẏ</td><td class="uc">Ż</td><td class="lc">ż</td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">¨</th><td class="uc">Ä</td><td class="lc">ä</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ë</td><td class="lc">ë</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ḧ</td><td class="lc">ḧ</td><td class="uc">Ï</td><td class="lc">ï</td><td class="uc">Ĳ</td><td class="lc">ĳ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ö</td><td class="lc">ö</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc">ẗ</td><td class="uc">Ü</td><td class="lc">ü</td><td class="uc"></td><td class="lc"></td><td class="uc">Ẅ</td><td class="lc">ẅ</td><td class="uc">Ẍ</td><td class="lc">ẍ</td><td class="uc">Ÿ</td><td class="lc">ÿ</td><td class="uc"></td><td class="lc"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">˚</th><td class="uc">Å</td><td class="lc">å</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ů</td><td class="lc">ů</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc">ẘ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc">ẙ</td><td class="uc"></td><td class="lc"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">˝</th><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ő</td><td class="lc">ő</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ű</td><td class="lc">ű</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">ˇ</th><td class="uc">Ǎ</td><td class="lc">ǎ</td><td class="uc"></td><td class="lc"></td><td class="uc">Č</td><td class="lc">č</td><td class="uc">Ď</td><td class="lc">ď</td><td class="uc">Ě</td><td class="lc">ě</td><td class="uc"></td><td class="lc"></td><td class="uc">Ǧ</td><td class="lc">ǧ</td><td class="uc">Ȟ</td><td class="lc">ȟ</td><td class="uc">Ǐ</td><td class="lc">ǐ</td><td class="uc"></td><td class="lc">ǰ</td><td class="uc">Ǩ</td><td class="lc">ǩ</td><td class="uc">Ľ</td><td class="lc">ľ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ň</td><td class="lc">ň</td><td class="uc">Ǒ</td><td class="lc">ǒ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ř</td><td class="lc">ř</td><td class="uc">Š</td><td class="lc">š</td><td class="uc">Ť</td><td class="lc">ť</td><td class="uc">Ǔ</td><td class="lc">ǔ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ž</td><td class="lc">ž</td><td class="n">₀</td><td class="n">₁</td><td class="n">₂</td><td class="n">₃</td><td class="n">₄</td><td class="n">₅</td><td class="n">₆</td><td class="n">₇</td><td class="n">₈</td><td class="n">₉</td></tr>
	<tr><th class="d">¸</th><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ç</td><td class="lc">ç</td><td class="uc">Ḑ</td><td class="lc">ḑ</td><td class="uc">Ȩ</td><td class="lc">ȩ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ģ</td><td class="lc">ģ</td><td class="uc">Ḩ</td><td class="lc">ḩ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ķ</td><td class="lc">ķ</td><td class="uc">Ļ</td><td class="lc">ļ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ņ</td><td class="lc">ņ</td><td class="uc">Ơ</td><td class="lc">ơ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ŗ</td><td class="lc">ŗ</td><td class="uc">Ş</td><td class="lc">ş</td><td class="uc">Ţ</td><td class="lc">ţ</td><td class="uc">Ư</td><td class="lc">ư</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">˛</th><td class="uc">Ą</td><td class="lc">ą</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ę</td><td class="lc">ę</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Į</td><td class="lc">į</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ǫ</td><td class="lc">ǫ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ș</td><td class="lc">ș</td><td class="uc">Ț</td><td class="lc">ț</td><td class="uc">Ų</td><td class="lc">ų</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td><td class="n"></td></tr>
	<tr><th class="d">⁄</th><td class="uc">Ⱥ</td><td class="lc">ⱥ</td><td class="uc">Ƀ</td><td class="lc">ƀ</td><td class="uc">Ȼ</td><td class="lc">ȼ</td><td class="uc">Đ</td><td class="lc">đ</td><td class="uc">Ɇ</td><td class="lc">ɇ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ǥ</td><td class="lc">ǥ</td><td class="uc">Ħ</td><td class="lc">ħ</td><td class="uc">Ɨ</td><td class="lc">ɨ</td><td class="uc">Ɉ</td><td class="lc">ɉ</td><td class="uc">Ꝁ</td><td class="lc">ꝁ</td><td class="uc">Ł</td><td class="lc">ł</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ø</td><td class="lc">ø</td><td class="uc">Ᵽ</td><td class="lc">ᵽ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ɍ</td><td class="lc">ɍ</td><td class="uc"></td><td class="lc"></td><td class="uc">Ŧ</td><td class="lc">ŧ</td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc"></td><td class="lc"></td><td class="uc">Ɏ</td><td class="lc">ɏ</td><td class="uc">Ƶ</td><td class="lc">ƶ</td><td class="n">⅟</td><td class="n">⅛</td><td class="n">¼</td><td class="n">⅓</td><td class="n">⅜</td><td class="n">½</td><td class="n">⅝</td><td class="n">⅔</td><td class="n">¾</td><td class="n">⅞</td></tr>
</table>
<p>For example, Alt-9 then Shift-N will produce Ñ.</p>
<p>You can remember the mapping of keys to diacritics thusly:</p>
<table border="0" cellpadding="0" cellspacing="0" class="mn">
	<tr><td class="center">`</td><td class="center">ˋ</td><td>grave</td><td>key has a grave on it</td></tr>
	<tr><td class="center">1</td><td class="center">´</td><td>acute</td><td>1 = single acute; next to grave</td></tr>
	<tr><td class="center">2</td><td class="center">˝</td><td>double acute</td><td>2 = double acute; close to grave</td></tr>
	<tr><td class="center">3</td><td class="center">˙</td><td>dot</td><td></td></tr>
	<tr><td class="center">4</td><td class="center">¨</td><td>diaeresis</td><td></td></tr>
	<tr><td class="center">5</td><td class="center">˚</td><td>ring</td><td>circles of percent sign resemble ring</td></tr>
	<tr><td class="center">6</td><td class="center">ˆ</td><td>circumflex</td><td>key has a circumflex on it</td></tr>
	<tr><td class="center">7</td><td class="center">ˇ</td><td>caron</td><td>7 resembles caron; next to circumflex</td></tr>
	<tr><td class="center">8</td><td class="center">˘</td><td>breve</td><td>8 is round like breve</td></tr>
	<tr><td class="center">9</td><td class="center">˜</td><td>tilde</td><td>9 = nueve starts with N</td></tr>
	<tr><td class="center">0</td><td class="center">¯</td><td>macron</td><td>next to hyphen</td></tr>
	<tr><td class="center">,</td><td class="center">¸</td><td>cedilla</td><td>comma resembles cedilla</td></tr>
	<tr><td class="center">.</td><td class="center">˛</td><td>ogonek</td><td>next to cedilla</td></tr>
	<tr><td class="center">/</td><td class="center">⁄</td><td>stroke</td><td>slash resembles stroke</td></tr>
</table>
<p>© 2014-2022 Kreative Software</p>
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
