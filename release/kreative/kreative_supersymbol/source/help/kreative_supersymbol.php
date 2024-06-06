<?php
  $pagetitle = 'Kreative SuperSymbol Keyboard Layout';
  $pagename = 'SuperSymbol Keyboard Layout';
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
END;
  require_once('header.php');
?>
<h2>for Keyman</h2>
<p>Type every character in Adobe and Mac OS Symbol encodings.</p>
<p>Type Greek letters, arrows, and mathematical symbols easily.</p>
<h3>The Layout</h3>
<p>
	Kreative SuperSymbol keyboard layout is based on the Symbol font from Mac OS Classic<br>
	and older versions of Windows, which mapped mathematical symbols to standard ASCII.<br>
	SuperSymbol allows you to type the proper Unicode characters using a similar mapping.<br>
	Type alternate characters using Option on Mac OS X, Right Alt on Linux and Windows.
</p>
		<table border="0" cellpadding="0" cellspacing="0" class="k">
			<tr>
				<td colspan="2" class="tl">≈</td>
				<td colspan="2" class="tr">⌡</td>
				<td colspan="2" class="tl">!</td>
				<td colspan="2" class="tr">⎠</td>
				<td colspan="2" class="tl">≅</td>
				<td colspan="2" class="tr">⎦</td>
				<td colspan="2" class="tl">#</td>
				<td colspan="2" class="tr">⎭</td>
				<td colspan="2" class="tl">€</td>
				<td colspan="2" class="tr">⎟</td>
				<td colspan="2" class="tl">%</td>
				<td colspan="2" class="tr">⎥</td>
				<td colspan="2" class="tl">⊥</td>
				<td colspan="2" class="tr">⎬</td>
				<td colspan="2" class="tl">&amp;</td>
				<td colspan="2" class="tr">⎞</td>
				<td colspan="2" class="tl">∗</td>
				<td colspan="2" class="tr">⎤</td>
				<td colspan="2" class="tl">(</td>
				<td colspan="2" class="tr">⎫</td>
				<td colspan="2" class="tl">)</td>
				<td colspan="2" class="tr">⎮</td>
				<td colspan="2" class="tl">⎯</td>
				<td colspan="2" class="tr"></td>
				<td colspan="2" class="tl">±</td>
				<td colspan="2" class="tr">⊕</td>
				<td colspan="8" class="t m"></td>
			</tr>
			<tr>
				<td colspan="2" class="bl">∼</td>
				<td colspan="2" class="br">⌠</td>
				<td colspan="2" class="bl">1</td>
				<td colspan="2" class="br">⎝</td>
				<td colspan="2" class="bl">2</td>
				<td colspan="2" class="br">⎣</td>
				<td colspan="2" class="bl">3</td>
				<td colspan="2" class="br">⎩</td>
				<td colspan="2" class="bl">4</td>
				<td colspan="2" class="br">⎜</td>
				<td colspan="2" class="bl">5</td>
				<td colspan="2" class="br">⎢</td>
				<td colspan="2" class="bl">6</td>
				<td colspan="2" class="br">⎨</td>
				<td colspan="2" class="bl">7</td>
				<td colspan="2" class="br">⎛</td>
				<td colspan="2" class="bl">8</td>
				<td colspan="2" class="br">⎡</td>
				<td colspan="2" class="bl">9</td>
				<td colspan="2" class="br">⎧</td>
				<td colspan="2" class="bl">0</td>
				<td colspan="2" class="br">⎪</td>
				<td colspan="2" class="bl">−</td>
				<td colspan="2" class="br">¬</td>
				<td colspan="2" class="bl">≠</td>
				<td colspan="2" class="br">≡</td>
				<td colspan="8" class="b m">
					<span class="mac hidden">delete</span>
					<span class="linux win hidden">backspace</span>
				</td>
			</tr>
			<tr>
				<td colspan="6" class="t m"></td>
				<td colspan="2" class="tl">Θ</td>
				<td colspan="2" class="tr">♣</td>
				<td colspan="2" class="tl">Ω</td>
				<td colspan="2" class="tr">♦</td>
				<td colspan="2" class="tl">Ε</td>
				<td colspan="2" class="tr">∉</td>
				<td colspan="2" class="tl">Ρ</td>
				<td colspan="2" class="tr">ℜ</td>
				<td colspan="2" class="tl">Τ</td>
				<td colspan="2" class="tr">⌥</td>
				<td colspan="2" class="tl">Ψ</td>
				<td colspan="2" class="tr">√</td>
				<td colspan="2" class="tl">Υ</td>
				<td colspan="2" class="tr">∩</td>
				<td colspan="2" class="tl">Ι</td>
				<td colspan="2" class="tr">ℑ</td>
				<td colspan="2" class="tl">Ο</td>
				<td colspan="2" class="tr">∅</td>
				<td colspan="2" class="tl">Π</td>
				<td colspan="2" class="tr">∏</td>
				<td colspan="2" class="tl">{</td>
				<td colspan="2" class="tr">⊆</td>
				<td colspan="2" class="tl">}</td>
				<td colspan="2" class="tr">⊇</td>
				<td colspan="3" class="tl">⏐</td>
				<td colspan="3" class="tr"></td>
			</tr>
			<tr>
				<td colspan="6" class="b m">tab</td>
				<td colspan="2" class="bl">θ</td>
				<td colspan="2" class="br">♠</td>
				<td colspan="2" class="bl">ω</td>
				<td colspan="2" class="br">♥</td>
				<td colspan="2" class="bl">ε</td>
				<td colspan="2" class="br">∈</td>
				<td colspan="2" class="bl">ρ</td>
				<td colspan="2" class="br">®</td>
				<td colspan="2" class="bl">τ</td>
				<td colspan="2" class="br">™</td>
				<td colspan="2" class="bl">ψ</td>
				<td colspan="2" class="br">ϒ</td>
				<td colspan="2" class="bl">υ</td>
				<td colspan="2" class="br">∪</td>
				<td colspan="2" class="bl">ι</td>
				<td colspan="2" class="br">∞</td>
				<td colspan="2" class="bl">ο</td>
				<td colspan="2" class="br">°</td>
				<td colspan="2" class="bl">π</td>
				<td colspan="2" class="br">℘</td>
				<td colspan="2" class="bl">[</td>
				<td colspan="2" class="br">⊂</td>
				<td colspan="2" class="bl">]</td>
				<td colspan="2" class="br">⊃</td>
				<td colspan="3" class="bl">∴</td>
				<td colspan="3" class="br">÷</td>
			</tr>
			<tr>
				<td colspan="7" class="t m"></td>
				<td colspan="2" class="tl">Α</td>
				<td colspan="2" class="tr">ℵ</td>
				<td colspan="2" class="tl">Σ</td>
				<td colspan="2" class="tr">∑</td>
				<td colspan="2" class="tl">Δ</td>
				<td colspan="2" class="tr">∇</td>
				<td colspan="2" class="tl">Φ</td>
				<td colspan="2" class="tr">⇧</td>
				<td colspan="2" class="tl">Γ</td>
				<td colspan="2" class="tr">⇪</td>
				<td colspan="2" class="tl">Η</td>
				<td colspan="2" class="tr">⇐</td>
				<td colspan="2" class="tl">ϑ</td>
				<td colspan="2" class="tr">⇓</td>
				<td colspan="2" class="tl">Κ</td>
				<td colspan="2" class="tr">⇑</td>
				<td colspan="2" class="tl">Λ</td>
				<td colspan="2" class="tr">⇒</td>
				<td colspan="2" class="tl">∀</td>
				<td colspan="2" class="tr">⇔</td>
				<td colspan="2" class="tl">″</td>
				<td colspan="2" class="tr">∋</td>
				<td colspan="9" class="t m"></td>
			</tr>
			<tr>
				<td colspan="7" class="b m">caps lock</td>
				<td colspan="2" class="bl">α</td>
				<td colspan="2" class="br">∝</td>
				<td colspan="2" class="bl">σ</td>
				<td colspan="2" class="br">∫</td>
				<td colspan="2" class="bl">δ</td>
				<td colspan="2" class="br">∂</td>
				<td colspan="2" class="bl">φ</td>
				<td colspan="2" class="br">ƒ</td>
				<td colspan="2" class="bl">γ</td>
				<td colspan="2" class="br">⌃</td>
				<td colspan="2" class="bl">η</td>
				<td colspan="2" class="br">←</td>
				<td colspan="2" class="bl">ϕ</td>
				<td colspan="2" class="br">↓</td>
				<td colspan="2" class="bl">κ</td>
				<td colspan="2" class="br">↑</td>
				<td colspan="2" class="bl">λ</td>
				<td colspan="2" class="br">→</td>
				<td colspan="2" class="bl">∃</td>
				<td colspan="2" class="br">↔</td>
				<td colspan="2" class="bl">′</td>
				<td colspan="2" class="br">∍</td>
				<td colspan="9" class="b m">
					<span class="mac hidden">return</span>
					<span class="linux win hidden">enter</span>
				</td>
			</tr>
			<tr>
				<td colspan="9" class="t m"></td>
				<td colspan="2" class="tl">Ζ</td>
				<td colspan="2" class="tr">◊</td>
				<td colspan="2" class="tl">Ξ</td>
				<td colspan="2" class="tr">⊗</td>
				<td colspan="2" class="tl">Χ</td>
				<td colspan="2" class="tr">⊄</td>
				<td colspan="2" class="tl">ς</td>
				<td colspan="2" class="tr">∧</td>
				<td colspan="2" class="tl">Β</td>
				<td colspan="2" class="tr">•</td>
				<td colspan="2" class="tl">Ν</td>
				<td colspan="2" class="tr">⍻</td>
				<td colspan="2" class="tl">Μ</td>
				<td colspan="2" class="tr">⌘</td>
				<td colspan="2" class="tl">&lt;</td>
				<td colspan="2" class="tr">≤</td>
				<td colspan="2" class="tl">&gt;</td>
				<td colspan="2" class="tr">≥</td>
				<td colspan="2" class="tl">?</td>
				<td colspan="2" class="tr">∠</td>
				<td colspan="11" class="t m"></td>
			</tr>
			<tr>
				<td colspan="9" class="b m">shift</td>
				<td colspan="2" class="bl">ζ</td>
				<td colspan="2" class="br">…</td>
				<td colspan="2" class="bl">ξ</td>
				<td colspan="2" class="br">×</td>
				<td colspan="2" class="bl">χ</td>
				<td colspan="2" class="br">©</td>
				<td colspan="2" class="bl">ϖ</td>
				<td colspan="2" class="br">∨</td>
				<td colspan="2" class="bl">β</td>
				<td colspan="2" class="br">⋅</td>
				<td colspan="2" class="bl">ν</td>
				<td colspan="2" class="br">✓</td>
				<td colspan="2" class="bl">μ</td>
				<td colspan="2" class="br">↵</td>
				<td colspan="2" class="bl">,</td>
				<td colspan="2" class="br">〈</td>
				<td colspan="2" class="bl">.</td>
				<td colspan="2" class="br">〉</td>
				<td colspan="2" class="bl">/</td>
				<td colspan="2" class="br">⁄</td>
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
