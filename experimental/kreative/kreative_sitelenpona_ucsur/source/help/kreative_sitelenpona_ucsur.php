<?php
  $pagetitle = 'Sitelen Pona Keyboard Layout';
  $pagename = 'Sitelen Pona Keyboard Layout';
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
	/* SITELEN PONA */
	@font-face {
		font-family: "FairfaxHDRemote";
		src: url(https://www.kreativekorp.com/lib/font/FairfaxHD.eot);
		src: url(https://www.kreativekorp.com/lib/font/FairfaxHD.ttf) format("truetype");
	}
	.sp {
		font-family: "Fairfax HD", "nasin-nanpa", "linja-nanpa", "linja lipamanka", "FairfaxHDRemote";
	}
	td.cf {
		position: relative;
		font-family: Helvetica, Arial, sans-serif;
		font-size: 12px;
	}
	span.cf {
		display: block;
		position: absolute;
		top: 2px;
		left: -8px;
		width: 38px;
		height: 19px;
		line-height: 19px;
		border: black;
		border-width: 1px 2px;
		border-style: dashed dotted;
		transform: scale(0.5, 1);
	}
END;
  require_once('header.php');
?>
<h2>for Keyman</h2>
<p>Type all sitelen pona characters from a standard keyboard.</p>
<h3>The Layout</h3>
<p>
	All sitelen pona characters in the UCSUR encoding are mapped to a key combination on a standard keyboard.<br>
	The most common words are typed using no modifiers. The next most common words are typed using only Shift.<br>
	Rarer and non-pu words are typed using Option on Mac OS X, Right Alt on Linux and Windows.
</p>
		<table border="0" cellpadding="0" cellspacing="0" class="k">
			<tr>
				<td colspan="2" class="tl">)</td>
				<td colspan="2" class="tr">&gt;</td>
				<td colspan="2" class="tl sp">󱤹</td>
				<td colspan="2" class="tr sp">󱥹</td>
				<td colspan="2" class="tl sp">󱤾</td>
				<td colspan="2" class="tr sp">󱤁</td>
				<td colspan="2" class="tl sp">󱤽</td>
				<td colspan="2" class="tr sp">󱥽</td>
				<td colspan="2" class="tl sp">󱤈</td>
				<td colspan="2" class="tr sp">󱦡</td>
				<td colspan="2" class="tl sp">󱥌</td>
				<td colspan="2" class="tr sp">󱥻</td>
				<td colspan="2" class="tl sp">󱥣</td>
				<td colspan="2" class="tr sp">󱦃</td>
				<td colspan="2" class="tl sp">󱥢</td>
				<td colspan="2" class="tr sp">󱦀</td>
				<td colspan="2" class="tl sp">󱥶</td>
				<td colspan="2" class="tr sp">󱥸</td>
				<td colspan="2" class="tl sp">󱦐</td>
				<td colspan="2" class="tr sp">󱦣</td>
				<td colspan="2" class="tl sp">󱦑</td>
				<td colspan="2" class="tr sp">🗧</td>
				<td colspan="2" class="tl cf"><span class="cf">ZWJ</span></td>
				<td colspan="2" class="tr cf"><span class="cf">CCE</span></td>
				<td colspan="2" class="tl cf"><span class="cf">ScJ</span></td>
				<td colspan="2" class="tr cf"><span class="cf">CLGE</span></td>
				<td colspan="8" class="t m"></td>
			</tr>
			<tr>
				<td colspan="2" class="bl">(</td>
				<td colspan="2" class="br">&lt;</td>
				<td colspan="2" class="bl sp">󱥳</td>
				<td colspan="2" class="br sp">󱥗</td>
				<td colspan="2" class="bl sp">󱥮</td>
				<td colspan="2" class="br sp">󱥑</td>
				<td colspan="2" class="bl sp">󱤼</td>
				<td colspan="2" class="br sp">󱤋</td>
				<td colspan="2" class="bl sp">󱥩</td>
				<td colspan="2" class="br sp">󱤲</td>
				<td colspan="2" class="bl sp">󱤭</td>
				<td colspan="2" class="br sp">󱥃</td>
				<td colspan="2" class="bl sp">󱤨</td>
				<td colspan="2" class="br sp">󱥦</td>
				<td colspan="2" class="bl sp">󱤊</td>
				<td colspan="2" class="br sp">󱥴</td>
				<td colspan="2" class="bl sp">󱤖</td>
				<td colspan="2" class="br sp">󱤦</td>
				<td colspan="2" class="bl sp">󱤄</td>
				<td colspan="2" class="br sp">󱥇</td>
				<td colspan="2" class="bl sp">󱤂</td>
				<td colspan="2" class="br sp">󱥋</td>
				<td colspan="2" class="bl cf"><span class="cf">ZWJ</span></td>
				<td colspan="2" class="br cf"><span class="cf">SLP</span></td>
				<td colspan="2" class="bl cf"><span class="cf">StJ</span></td>
				<td colspan="2" class="br cf"><span class="cf">CLPE</span></td>
				<td colspan="8" class="b m">
					<span class="mac hidden">delete</span>
					<span class="linux win hidden">backspace</span>
				</td>
			</tr>
			<tr>
				<td colspan="6" class="t m"></td>
				<td colspan="2" class="tl sp">󱥤</td>
				<td colspan="2" class="tr sp">󱤺</td>
				<td colspan="2" class="tl sp">󱥵</td>
				<td colspan="2" class="tr sp">󱥲</td>
				<td colspan="2" class="tl sp">󱥖</td>
				<td colspan="2" class="tr sp">󱥼</td>
				<td colspan="2" class="tl sp">󱤤</td>
				<td colspan="2" class="tr sp">󱦇</td>
				<td colspan="2" class="tl sp">󱥭</td>
				<td colspan="2" class="tr sp">󱥾</td>
				<td colspan="2" class="tl sp">󱤇</td>
				<td colspan="2" class="tr sp">󱦁</td>
				<td colspan="2" class="tl sp">󱤕</td>
				<td colspan="2" class="tr sp">󱥯</td>
				<td colspan="2" class="tl sp">󱤎</td>
				<td colspan="2" class="tr sp">󱦂</td>
				<td colspan="2" class="tl sp">󱤌</td>
				<td colspan="2" class="tr sp">󱥺</td>
				<td colspan="2" class="tl sp">󱥈</td>
				<td colspan="2" class="tr sp">󱥕</td>
				<td colspan="2" class="tl cf"><span class="cf">SRLG</span></td>
				<td colspan="2" class="tr">{</td>
				<td colspan="2" class="tl cf"><span class="cf">ERLG</span></td>
				<td colspan="2" class="tr">}</td>
				<td colspan="3" class="tl">_</td>
				<td colspan="3" class="tr">|</td>
			</tr>
			<tr>
				<td colspan="6" class="b m">tab</td>
				<td colspan="2" class="bl sp">󱥙</td>
				<td colspan="2" class="br sp">󱤜</td>
				<td colspan="2" class="bl sp">󱤡</td>
				<td colspan="2" class="br sp">󱥚</td>
				<td colspan="2" class="bl sp">󱤉</td>
				<td colspan="2" class="br sp">󱥓</td>
				<td colspan="2" class="bl sp">󱥫</td>
				<td colspan="2" class="br sp">󱤫</td>
				<td colspan="2" class="bl sp">󱥬</td>
				<td colspan="2" class="br sp">󱥥</td>
				<td colspan="2" class="bl sp">󱤬</td>
				<td colspan="2" class="br sp">󱤗</td>
				<td colspan="2" class="bl sp">󱥞</td>
				<td colspan="2" class="br sp">󱥰</td>
				<td colspan="2" class="bl sp">󱤍</td>
				<td colspan="2" class="br sp">󱤏</td>
				<td colspan="2" class="bl sp">󱥄</td>
				<td colspan="2" class="br sp">󱥜</td>
				<td colspan="2" class="bl sp">󱥔</td>
				<td colspan="2" class="br sp">󱥒</td>
				<td colspan="2" class="bl cf"><span class="cf">SLG</span></td>
				<td colspan="2" class="br">[</td>
				<td colspan="2" class="bl cf"><span class="cf">ELG</span></td>
				<td colspan="2" class="br">]</td>
				<td colspan="3" class="bl">/</td>
				<td colspan="3" class="br">\</td>
			</tr>
			<tr>
				<td colspan="7" class="t m"></td>
				<td colspan="2" class="tl sp">󱤆</td>
				<td colspan="2" class="tr sp">󱤅</td>
				<td colspan="2" class="tl sp">󱥠</td>
				<td colspan="2" class="tr sp">󱥘</td>
				<td colspan="2" class="tl sp">󱤪</td>
				<td colspan="2" class="tr sp">󱤃</td>
				<td colspan="2" class="tl sp">󱥐</td>
				<td colspan="2" class="tr sp">󱦠</td>
				<td colspan="2" class="tl sp">󱤟</td>
				<td colspan="2" class="tr sp">󱦅</td>
				<td colspan="2" class="tl sp">󱥝</td>
				<td colspan="2" class="tr sp">󱦢</td>
				<td colspan="2" class="tl sp">󱤓</td>
				<td colspan="2" class="tr sp">󱤒</td>
				<td colspan="2" class="tl sp">󱤙</td>
				<td colspan="2" class="tr sp">󱦈</td>
				<td colspan="2" class="tl sp">󱤮</td>
				<td colspan="2" class="tr sp">󱤯</td>
				<td colspan="2" class="tl sp">󱦝</td>
				<td colspan="2" class="tr">:</td>
				<td colspan="2" class="tl">"</td>
				<td colspan="2" class="tr">*</td>
				<td colspan="9" class="t m"></td>
			</tr>
			<tr>
				<td colspan="7" class="b m">caps lock</td>
				<td colspan="2" class="bl sp">󱤀</td>
				<td colspan="2" class="br sp">󱤔</td>
				<td colspan="2" class="bl sp">󱥡</td>
				<td colspan="2" class="br sp">󱥛</td>
				<td colspan="2" class="bl sp">󱥨</td>
				<td colspan="2" class="br sp">󱤥</td>
				<td colspan="2" class="bl sp">󱥍</td>
				<td colspan="2" class="br sp">󱤚</td>
				<td colspan="2" class="bl sp">󱥆</td>
				<td colspan="2" class="br sp">󱤣</td>
				<td colspan="2" class="bl sp">󱥂</td>
				<td colspan="2" class="br sp">󱥊</td>
				<td colspan="2" class="bl sp">󱤑</td>
				<td colspan="2" class="br sp">󱤐</td>
				<td colspan="2" class="bl sp">󱤘</td>
				<td colspan="2" class="br sp">󱤛</td>
				<td colspan="2" class="bl sp">󱤧</td>
				<td colspan="2" class="br sp">󱤩</td>
				<td colspan="2" class="bl sp">󱦜</td>
				<td colspan="2" class="br">;</td>
				<td colspan="2" class="bl">'</td>
				<td colspan="2" class="br">+</td>
				<td colspan="9" class="b m">
					<span class="mac hidden">return</span>
					<span class="linux win hidden">enter</span>
				</td>
			</tr>
			<tr>
				<td colspan="9" class="t m"></td>
				<td colspan="2" class="tl sp">󱤢</td>
				<td colspan="2" class="tr sp">󱤸</td>
				<td colspan="2" class="tl sp">󱤶</td>
				<td colspan="2" class="tr sp">󱥟</td>
				<td colspan="2" class="tl sp">󱥅</td>
				<td colspan="2" class="tr sp">󱦄</td>
				<td colspan="2" class="tl sp">󱥪</td>
				<td colspan="2" class="tr sp">󱥿</td>
				<td colspan="2" class="tl sp">󱤿</td>
				<td colspan="2" class="tr sp">󱤵</td>
				<td colspan="2" class="tl sp">󱤻</td>
				<td colspan="2" class="tr sp">󱥀</td>
				<td colspan="2" class="tl sp">󱤰</td>
				<td colspan="2" class="tr sp">󱤳</td>
				<td colspan="2" class="tl">「</td>
				<td colspan="2" class="tr">『</td>
				<td colspan="2" class="tl">」</td>
				<td colspan="2" class="tr">』</td>
				<td colspan="2" class="tl">=</td>
				<td colspan="2" class="tr">?</td>
				<td colspan="11" class="t m"></td>
			</tr>
			<tr>
				<td colspan="9" class="b m">shift</td>
				<td colspan="2" class="bl sp">󱥧</td>
				<td colspan="2" class="br sp">󱤷</td>
				<td colspan="2" class="bl sp">󱥉</td>
				<td colspan="2" class="br sp">󱥱</td>
				<td colspan="2" class="bl sp">󱥎</td>
				<td colspan="2" class="br sp">󱤞</td>
				<td colspan="2" class="bl sp">󱥷</td>
				<td colspan="2" class="br sp">󱤝</td>
				<td colspan="2" class="bl sp">󱥁</td>
				<td colspan="2" class="br sp">󱥏</td>
				<td colspan="2" class="bl sp">󱦆</td>
				<td colspan="2" class="br sp">󱤠</td>
				<td colspan="2" class="bl sp">󱤴</td>
				<td colspan="2" class="br sp">󱤱</td>
				<td colspan="2" class="bl">、</td>
				<td colspan="2" class="br">,</td>
				<td colspan="2" class="bl">。</td>
				<td colspan="2" class="br">.</td>
				<td colspan="2" class="bl">-</td>
				<td colspan="2" class="br">!</td>
				<td colspan="11" class="b m">shift</td>
			</tr>
			<tr class="mac hidden">
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t o"></td>
				<td colspan="6" class="t m"></td>
				<td colspan="26" class="t">space</td>
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t o"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="mac hidden">
				<td colspan="6" class="b m">control</td>
				<td colspan="5" class="b o">option</td>
				<td colspan="6" class="b m">command</td>
				<td colspan="26" class="b">idsp</td>
				<td colspan="6" class="b m">command</td>
				<td colspan="5" class="b o">option</td>
				<td colspan="6" class="b m">control</td>
			</tr>
			<tr class="linux hidden">
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="23" class="t">space</td>
				<td colspan="5" class="t o"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="linux hidden">
				<td colspan="6" class="b m">ctrl</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">alt</td>
				<td colspan="23" class="b">idsp</td>
				<td colspan="5" class="b o">alt gr</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">▤</td>
				<td colspan="6" class="b m">ctrl</td>
			</tr>
			<tr class="win hidden">
				<td colspan="6" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="23" class="t">space</td>
				<td colspan="5" class="t o"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="5" class="t m"></td>
				<td colspan="6" class="t m"></td>
			</tr>
			<tr class="win hidden">
				<td colspan="6" class="b m">ctrl</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">alt</td>
				<td colspan="23" class="b">idsp</td>
				<td colspan="5" class="b o">alt gr</td>
				<td colspan="5" class="b m">❖</td>
				<td colspan="5" class="b m">▤</td>
				<td colspan="6" class="b m">ctrl</td>
			</tr>
		</table>
<p>The hyphen, equals, and bracket keys are used for entering control characters for composite and long glyphs:</p>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td>-</td><td>ZWJ</td><td>zero-width joiner</td></tr>
<tr><td>=</td><td>StJ</td><td>stacking joiner</td></tr>
<tr><td>Shift-=</td><td>ScJ</td><td>scaling joiner</td></tr>
<tr><td>[</td><td>SLG</td><td>start of long glyph</td></tr>
<tr><td>]</td><td>ELG</td><td>end of long glyph</td></tr>
<tr><td>Shift-[</td><td>SRLG</td><td>start of reverse long glyph</td></tr>
<tr><td>Shift-]</td><td>ERLG</td><td>end of reverse long glyph</td></tr>
</table>
<p>Use of the following control characters is not recommended but the characters can still be accessed:</p>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td>Alt-Shift--</td><td>CCE</td><td>combining cartouche extension</td></tr>
<tr><td>Alt--</td><td>SLP</td><td>start of long pi</td></tr>
<tr><td>Alt-=</td><td>CLPE</td><td>combining long pi extension</td></tr>
<tr><td>Alt-Shift-=</td><td>CLGE</td><td>combining long glyph extension</td></tr>
</table>
<p>© 2022 Kreative Software</p>
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
