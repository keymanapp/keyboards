<?php
  $pagetitle = 'Kreative SuperIPA Keyboard Layout';
  $pagename = 'SuperIPA Keyboard Layout';
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
	/* MAPPING TABLE */
	table.map {
		line-height: 16px;
	}
	table.map th {
		padding: 5pt 12pt 3pt 0;
	}
	table.map th[colspan] {
		background: #ddd;
	}
	.cxs {
		color: #0c0;
	}
END;
  require_once('header.php');
?>
<h2>for Keyman</h2>
<p>Type every character and diacritic from the International Phonetic Alphabet easily.</p>
<h3>The Layout</h3>
<p>
	Kreative SuperIPA keyboard layout is based on CXS, a variant of<br>
	X-SAMPA, a mapping from ASCII to the International Phonetic Alphabet.<br>
	Most X-SAMPA mappings that use <code>\</code> or <code>`</code> for alternate characters can<br>
	be typed using Option on Mac OS X, Right Alt on Linux and Windows.<br>
	Diacritics can be typed using a Shift-Hyphen dead key on Mac OS X and<br>
	Windows (but not Linux), or direct key bindings on all supported systems.
</p>
		<table border="0" cellpadding="0" cellspacing="0" class="k">
			<tr>
				<td colspan="2" class="tl">◌̃</td>
				<td colspan="2" class="tr">◌̰</td>
				<td colspan="2" class="tl">ꜜ</td>
				<td colspan="2" class="tr">‼</td>
				<td colspan="2" class="tl">ə</td>
				<td colspan="2" class="tr">ɘ</td>
				<td colspan="2" class="tl">◌́</td>
				<td colspan="2" class="tr">◌̋</td>
				<td colspan="2" class="tl">◌̄</td>
				<td colspan="2" class="tr">ɻ</td>
				<td colspan="2" class="tl">◌̀</td>
				<td colspan="2" class="tr">◌̏</td>
				<td colspan="2" class="tl">ꜛ</td>
				<td colspan="2" class="tr">◌̌</td>
				<td colspan="2" class="tl">æ</td>
				<td colspan="2" class="tr">ɶ</td>
				<td colspan="2" class="tl">*</td>
				<td colspan="2" class="tr">◌᷄</td>
				<td colspan="2" class="tl">(</td>
				<td colspan="2" class="tr">◌͡◌</td>
				<td colspan="2" class="tl">)</td>
				<td colspan="2" class="tr">◌͜◌</td>
				<td colspan="2" class="tl d">◌͜◌</td>
				<td colspan="2" class="tr">◌̠</td>
				<td colspan="2" class="tl">◌̯</td>
				<td colspan="2" class="tr">◌̟</td>
				<td colspan="8" class="t m"></td>
			</tr>
			<tr>
				<td colspan="2" class="bl">◌˞</td>
				<td colspan="2" class="br">◌̤</td>
				<td colspan="2" class="bl">ɨ</td>
				<td colspan="2" class="br">ǃ</td>
				<td colspan="2" class="bl">ø</td>
				<td colspan="2" class="br">◌̽</td>
				<td colspan="2" class="bl">ɜ</td>
				<td colspan="2" class="br">ɞ</td>
				<td colspan="2" class="bl">ɾ</td>
				<td colspan="2" class="br">ɽ</td>
				<td colspan="2" class="bl">ɫ</td>
				<td colspan="2" class="br">◌̴</td>
				<td colspan="2" class="bl">ɐ</td>
				<td colspan="2" class="br">◌̂</td>
				<td colspan="2" class="bl">ɤ</td>
				<td colspan="2" class="br">◌᷈</td>
				<td colspan="2" class="bl">ɵ</td>
				<td colspan="2" class="br">◌᷅</td>
				<td colspan="2" class="bl">œ</td>
				<td colspan="2" class="br">◌̚</td>
				<td colspan="2" class="bl">◌̥</td>
				<td colspan="2" class="br">◌̬</td>
				<td colspan="2" class="bl">-</td>
				<td colspan="2" class="br">‿</td>
				<td colspan="2" class="bl">◌̩</td>
				<td colspan="2" class="br">ǂ</td>
				<td colspan="8" class="b m">
					<span class="mac hidden">delete</span>
					<span class="linux win hidden">backspace</span>
				</td>
			</tr>
			<tr>
				<td colspan="6" class="t m"></td>
				<td colspan="2" class="tl">ɒ</td>
				<td colspan="2" class="tr">◌̻</td>
				<td colspan="2" class="tl">ʍ</td>
				<td colspan="2" class="tr">◌̼</td>
				<td colspan="2" class="tl">ɛ</td>
				<td colspan="2" class="tr">ɝ</td>
				<td colspan="2" class="tl">ʁ</td>
				<td colspan="2" class="tr">ʀ</td>
				<td colspan="2" class="tl">θ</td>
				<td colspan="2" class="tr">↗</td>
				<td colspan="2" class="tl">ʏ</td>
				<td colspan="2" class="tr">ʛ</td>
				<td colspan="2" class="tl">ʊ</td>
				<td colspan="2" class="tr">ᵿ</td>
				<td colspan="2" class="tl">ɪ</td>
				<td colspan="2" class="tr">ᵻ</td>
				<td colspan="2" class="tl">ɔ</td>
				<td colspan="2" class="tr">ʘ</td>
				<td colspan="2" class="tl">ʋ</td>
				<td colspan="2" class="tr">↘</td>
				<td colspan="2" class="tl">{</td>
				<td colspan="2" class="tr">◌̘</td>
				<td colspan="2" class="tl">}</td>
				<td colspan="2" class="tr">◌̙</td>
				<td colspan="3" class="tl">‖</td>
				<td colspan="3" class="tr">ǁ</td>
			</tr>
			<tr>
				<td colspan="6" class="b m">tab</td>
				<td colspan="2" class="bl">q</td>
				<td colspan="2" class="br">ˠ</td>
				<td colspan="2" class="bl">w</td>
				<td colspan="2" class="br">ʷ</td>
				<td colspan="2" class="bl">e</td>
				<td colspan="2" class="br">ɚ</td>
				<td colspan="2" class="bl">r</td>
				<td colspan="2" class="br">ɹ</td>
				<td colspan="2" class="bl">t</td>
				<td colspan="2" class="br">ʈ</td>
				<td colspan="2" class="bl">y</td>
				<td colspan="2" class="br">ɠ</td>
				<td colspan="2" class="bl">u</td>
				<td colspan="2" class="br">ʉ</td>
				<td colspan="2" class="bl">i</td>
				<td colspan="2" class="br">ɨ</td>
				<td colspan="2" class="bl">o</td>
				<td colspan="2" class="br">ˡ</td>
				<td colspan="2" class="bl">p</td>
				<td colspan="2" class="br">ɸ</td>
				<td colspan="2" class="bl">[</td>
				<td colspan="2" class="br">◌̝</td>
				<td colspan="2" class="bl">]</td>
				<td colspan="2" class="br">◌̞</td>
				<td colspan="3" class="bl">|</td>
				<td colspan="3" class="br">ǀ</td>
			</tr>
			<tr>
				<td colspan="7" class="t m"></td>
				<td colspan="2" class="tl">ɑ</td>
				<td colspan="2" class="tr">◌̺</td>
				<td colspan="2" class="tl">ʃ</td>
				<td colspan="2" class="tr">ʂ</td>
				<td colspan="2" class="tl">ð</td>
				<td colspan="2" class="tr">◌̪</td>
				<td colspan="2" class="tl">ɱ</td>
				<td colspan="2" class="tr">ʄ</td>
				<td colspan="2" class="tl">ɣ</td>
				<td colspan="2" class="tr">ɢ</td>
				<td colspan="2" class="tl">ɥ</td>
				<td colspan="2" class="tr">ʜ</td>
				<td colspan="2" class="tl">ɲ</td>
				<td colspan="2" class="tr">ɟ</td>
				<td colspan="2" class="tl">ɬ</td>
				<td colspan="2" class="tr">ɮ</td>
				<td colspan="2" class="tl">ʎ</td>
				<td colspan="2" class="tr">ʟ</td>
				<td colspan="2" class="tl">ː</td>
				<td colspan="2" class="tr">ˑ</td>
				<td colspan="2" class="tl">ˌ</td>
				<td colspan="2" class="tr">◌̈</td>
				<td colspan="9" class="t m"></td>
			</tr>
			<tr>
				<td colspan="7" class="b m">caps lock</td>
				<td colspan="2" class="bl">a</td>
				<td colspan="2" class="br">ʰ</td>
				<td colspan="2" class="bl">s</td>
				<td colspan="2" class="br">ɕ</td>
				<td colspan="2" class="bl">d</td>
				<td colspan="2" class="br">ɖ</td>
				<td colspan="2" class="bl">f</td>
				<td colspan="2" class="br">ɗ</td>
				<td colspan="2" class="bl">g</td>
				<td colspan="2" class="br">ɡ</td>
				<td colspan="2" class="bl">h</td>
				<td colspan="2" class="br">ɦ</td>
				<td colspan="2" class="bl">j</td>
				<td colspan="2" class="br">ʝ</td>
				<td colspan="2" class="bl">k</td>
				<td colspan="2" class="br">ɭ</td>
				<td colspan="2" class="bl">l</td>
				<td colspan="2" class="br">ɺ</td>
				<td colspan="2" class="bl">ʲ</td>
				<td colspan="2" class="br">◌̆</td>
				<td colspan="2" class="bl">ˈ</td>
				<td colspan="2" class="br">ʼ</td>
				<td colspan="9" class="b m">
					<span class="mac hidden">return</span>
					<span class="linux win hidden">enter</span>
				</td>
			</tr>
			<tr>
				<td colspan="9" class="t m"></td>
				<td colspan="2" class="tl">ʒ</td>
				<td colspan="2" class="tr">ʐ</td>
				<td colspan="2" class="tl">χ</td>
				<td colspan="2" class="tr">ħ</td>
				<td colspan="2" class="tl">ç</td>
				<td colspan="2" class="tr">◌̹</td>
				<td colspan="2" class="tl">ʌ</td>
				<td colspan="2" class="tr">ⱱ</td>
				<td colspan="2" class="tl">β</td>
				<td colspan="2" class="tr">ʙ</td>
				<td colspan="2" class="tl">ŋ</td>
				<td colspan="2" class="tr">ɴ</td>
				<td colspan="2" class="tl">ɯ</td>
				<td colspan="2" class="tr">ɰ</td>
				<td colspan="2" class="tl">&lt;</td>
				<td colspan="2" class="tr">ʢ</td>
				<td colspan="2" class="tl">&gt;</td>
				<td colspan="2" class="tr">ʡ</td>
				<td colspan="2" class="tl">ʔ</td>
				<td colspan="2" class="tr">ʕ</td>
				<td colspan="11" class="t m"></td>
			</tr>
			<tr>
				<td colspan="9" class="b m">shift</td>
				<td colspan="2" class="bl">z</td>
				<td colspan="2" class="br">ʑ</td>
				<td colspan="2" class="bl">x</td>
				<td colspan="2" class="br">ɧ</td>
				<td colspan="2" class="bl">c</td>
				<td colspan="2" class="br">◌̜</td>
				<td colspan="2" class="bl">v</td>
				<td colspan="2" class="br">ʋ</td>
				<td colspan="2" class="bl">b</td>
				<td colspan="2" class="br">ɓ</td>
				<td colspan="2" class="bl">n</td>
				<td colspan="2" class="br">ɳ</td>
				<td colspan="2" class="bl">m</td>
				<td colspan="2" class="br">ⁿ</td>
				<td colspan="2" class="bl">,</td>
				<td colspan="2" class="br">⟨</td>
				<td colspan="2" class="bl">.</td>
				<td colspan="2" class="br">⟩</td>
				<td colspan="2" class="bl">/</td>
				<td colspan="2" class="br">ˤ</td>
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
<h3>The Mapping</h3>
<p>
	A complete mapping between IPA, X-SAMPA, CXS, and SuperIPA follows.<br>
	Differences between X-SAMPA and CXS are highlighted in <span class="cxs">green</span>.
</p>
<table border="0" cellpadding="0" cellspacing="0" class="map">
	<tr><th colspan="5">CONSONANTS (PULMONIC)</th></tr>
	<tr><th>IPA</th><th>X-SAMPA</th><th>CXS</th><th>SuperIPA</th><th>Description</th></tr>
	<tr><td>p</td><td><code>p</code></td><td><code>p</code></td><td>P</td><td>voiceless bilabial plosive</td></tr>
	<tr><td>b</td><td><code>b</code></td><td><code>b</code></td><td>B</td><td>voiced bilabial plosive</td></tr>
	<tr><td>t</td><td><code>t</code></td><td><code>t</code></td><td>T</td><td>voiceless alveolar plosive</td></tr>
	<tr><td>d</td><td><code>d</code></td><td><code>d</code></td><td>D</td><td>voiced alveolar plosive</td></tr>
	<tr><td>ʈ</td><td><code>t`</code></td><td><code>t`</code></td><td>Alt-T</td><td>voiceless retroflex plosive</td></tr>
	<tr><td>ɖ</td><td><code>d`</code></td><td><code>d`</code></td><td>Alt-D</td><td>voiced retroflex plosive</td></tr>
	<tr><td>c</td><td><code>c</code></td><td><code>c</code></td><td>C</td><td>voiceless palatal plosive</td></tr>
	<tr><td>ɟ</td><td><code>J\</code></td><td><code>J\</code></td><td>Alt-Shift-J</td><td>voiced palatal plosive</td></tr>
	<tr><td>k</td><td><code>k</code></td><td><code>k</code></td><td>K</td><td>voiceless velar plosive</td></tr>
	<tr><td>g (or ɡ)</td><td><code>g</code></td><td><code>g</code></td><td>G (or Alt-G)</td><td>voiced velar plosive</td></tr>
	<tr><td>q</td><td><code>q</code></td><td><code>q</code></td><td>Q</td><td>voiceless uvular plosive</td></tr>
	<tr><td>ɢ</td><td><code>G\</code></td><td><code>G\</code></td><td>Alt-Shift-G</td><td>voiced uvular plosive</td></tr>
	<tr><td>ʔ</td><td><code>?</code></td><td><code>?</code></td><td>Shift-/</td><td>glottal stop</td></tr>
	<tr><td>m</td><td><code>m</code></td><td><code>m</code></td><td>M</td><td>bilabial nasal</td></tr>
	<tr><td>ɱ</td><td><code>F</code></td><td><code>F</code></td><td>Shift-F</td><td>labiodental nasal</td></tr>
	<tr><td>n</td><td><code>n</code></td><td><code>n</code></td><td>N</td><td>alveolar nasal</td></tr>
	<tr><td>ɳ</td><td><code>n`</code></td><td><code>n`</code></td><td>Alt-N</td><td>retroflex nasal</td></tr>
	<tr><td>ɲ</td><td><code>J</code></td><td><code>J</code></td><td>Shift-J</td><td>palatal nasal</td></tr>
	<tr><td>ŋ</td><td><code>N</code></td><td><code>N</code></td><td>Shift-N</td><td>velar nasal</td></tr>
	<tr><td>ɴ</td><td><code>N\</code></td><td><code>N\</code></td><td>Alt-Shift-N</td><td>uvular nasal</td></tr>
	<tr><td>ʙ</td><td><code>B\</code></td><td><code>B\</code></td><td>Alt-Shift-B</td><td>bilabial trill</td></tr>
	<tr><td>r</td><td><code>r</code></td><td><code>r</code></td><td>R</td><td>alveolar trill</td></tr>
	<tr><td>ʀ</td><td><code>R\</code></td><td><code>R\</code></td><td>Alt-Shift-R</td><td>uvular trill</td></tr>
	<tr><td>ⱱ</td><td><code></code></td><td class="cxs"><code>V\</code></td><td>Alt-Shift-V</td><td>labiodental flap</td></tr>
	<tr><td>ɾ</td><td><code>4</code></td><td><code>4</code></td><td>4</td><td>alveolar flap</td></tr>
	<tr><td>ɽ</td><td><code>r`</code></td><td><code>r`</code></td><td>Alt-4</td><td>retroflex flap</td></tr>
	<tr><td>ɸ</td><td><code>p\</code></td><td><code>p\</code></td><td>Alt-P</td><td>voiceless bilabial fricative</td></tr>
	<tr><td>β</td><td><code>B</code></td><td><code>B</code></td><td>Shift-B</td><td>voiced bilabial fricative</td></tr>
	<tr><td>f</td><td><code>f</code></td><td><code>f</code></td><td>F</td><td>voiceless labiodental fricative</td></tr>
	<tr><td>v</td><td><code>v</code></td><td><code>v</code></td><td>V</td><td>voiced labiodental fricative</td></tr>
	<tr><td>θ</td><td><code>T</code></td><td><code>T</code></td><td>Shift-T</td><td>voiceless dental fricative</td></tr>
	<tr><td>ð</td><td><code>D</code></td><td><code>D</code></td><td>Shift-D</td><td>voiced dental fricative</td></tr>
	<tr><td>s</td><td><code>s</code></td><td><code>s</code></td><td>S</td><td>voiceless alveolar fricative</td></tr>
	<tr><td>z</td><td><code>z</code></td><td><code>z</code></td><td>Z</td><td>voiced alveolar fricative</td></tr>
	<tr><td>ʃ</td><td><code>S</code></td><td><code>S</code></td><td>Shift-S</td><td>voiceless postalveolar fricative</td></tr>
	<tr><td>ʒ</td><td><code>Z</code></td><td><code>Z</code></td><td>Shift-Z</td><td>voiced postalveolar fricative</td></tr>
	<tr><td>ʂ</td><td><code>s`</code></td><td><code>s`</code></td><td>Alt-Shift-S</td><td>voiceless retroflex fricative</td></tr>
	<tr><td>ʐ</td><td><code>z`</code></td><td><code>z`</code></td><td>Alt-Shift-Z</td><td>voiced retroflex fricative</td></tr>
	<tr><td>ç</td><td><code>C</code></td><td><code>C</code></td><td>Shift-C</td><td>voiceless palatal fricative</td></tr>
	<tr><td>ʝ</td><td><code>j\</code></td><td><code>j\</code></td><td>Alt-J</td><td>voiced palatal fricative</td></tr>
	<tr><td>x</td><td><code>x</code></td><td><code>x</code></td><td>X</td><td>voiceless velar fricative</td></tr>
	<tr><td>ɣ</td><td><code>G</code></td><td><code>G</code></td><td>Shift-G</td><td>voiced velar fricative</td></tr>
	<tr><td>χ</td><td><code>X</code></td><td><code>X</code></td><td>Shift-X</td><td>voiceless uvular fricative</td></tr>
	<tr><td>ʁ</td><td><code>R</code></td><td><code>R</code></td><td>Shift-R</td><td>voiced uvular fricative</td></tr>
	<tr><td>ħ</td><td><code>X\</code></td><td><code>X\</code></td><td>Alt-Shift-X</td><td>voiceless pharyngeal fricative</td></tr>
	<tr><td>ʕ</td><td><code>?\</code></td><td><code>?\</code></td><td>Alt-Shift-/</td><td>voiced pharyngeal fricative</td></tr>
	<tr><td>h</td><td><code>h</code></td><td><code>h</code></td><td>H</td><td>voiceless glottal fricative</td></tr>
	<tr><td>ɦ</td><td><code>h\</code></td><td><code>h\</code></td><td>Alt-H</td><td>voiced glottal fricative</td></tr>
	<tr><td>ɬ</td><td><code>K</code></td><td><code>K</code></td><td>Shift-K</td><td>voiceless alveolar lateral fricative</td></tr>
	<tr><td>ɮ</td><td><code>K\</code></td><td><code>K\</code></td><td>Alt-Shift-K</td><td>voiced alveolar lateral fricative</td></tr>
	<tr><td>ʋ</td><td><code>P</code> or <code>v\</code></td><td><code>P</code> or <code>v\</code></td><td>Shift-P (or Alt-V)</td><td>labiodental approximant</td></tr>
	<tr><td>ɹ</td><td><code>r\</code></td><td><code>r\</code></td><td>Alt-R</td><td>alveolar approximant</td></tr>
	<tr><td>ɻ</td><td><code>r\`</code></td><td><code>r\`</code></td><td>Alt-Shift-4</td><td>retroflex approximant</td></tr>
	<tr><td>j</td><td><code>j</code></td><td><code>j</code></td><td>J</td><td>palatal approximant</td></tr>
	<tr><td>ɰ</td><td><code>M\</code></td><td><code>M\</code></td><td>Alt-Shift-M</td><td>velar approximant</td></tr>
	<tr><td>l</td><td><code>l</code></td><td><code>l</code></td><td>L</td><td>alveolar lateral approximant</td></tr>
	<tr><td>ɭ</td><td><code>l`</code></td><td><code>l`</code></td><td>Alt-K</td><td>retroflex lateral approximant</td></tr>
	<tr><td>ʎ</td><td><code>L</code></td><td><code>L</code></td><td>Shift-L</td><td>palatal lateral approximant</td></tr>
	<tr><td>ʟ</td><td><code>L\</code></td><td><code>L\</code></td><td>Alt-Shift-L</td><td>velar lateral approximant</td></tr>
	<tr><th colspan="5">CONSONANTS (NON-PULMONIC)</th></tr>
	<tr><th>IPA</th><th>X-SAMPA</th><th>CXS</th><th>SuperIPA</th><th>Description</th></tr>
	<tr><td>ʘ</td><td><code>O\</code></td><td><code>O\</code></td><td>Alt-Shift-O</td><td>bilabial click</td></tr>
	<tr><td>ǀ</td><td><code>|\</code></td><td><code>|\</code></td><td>Alt-\</td><td>dental click</td></tr>
	<tr><td>ǃ</td><td><code>!\</code></td><td><code>!\</code></td><td>Alt-1</td><td>postalveolar click</td></tr>
	<tr><td>‼</td><td><code></code></td><td class="cxs"><code>!\`</code></td><td>Alt-Shift-1</td><td>retroflex click</td></tr>
	<tr><td>ǂ</td><td><code>=\</code></td><td><code>=\</code></td><td>Alt-=</td><td>palatal click</td></tr>
	<tr><td>ǁ</td><td><code>|\|\</code></td><td><code>|\|\</code></td><td>Alt-Shift-\</td><td>alveolar lateral click</td></tr>
	<tr><td>ɓ</td><td><code>b_&lt;</code></td><td><code>b_&lt;</code></td><td>Alt-B</td><td>voiced bilabial implosive</td></tr>
	<tr><td>ɗ</td><td><code>d_&lt;</code></td><td><code>d_&lt;</code></td><td>Alt-F</td><td>voiced alveolar implosive</td></tr>
	<tr><td>ʄ</td><td><code>J\_&lt;</code></td><td><code>J\_&lt;</code></td><td>Alt-Shift-F</td><td>voiced palatal implosive</td></tr>
	<tr><td>ɠ</td><td><code>g_&lt;</code></td><td><code>g_&lt;</code></td><td>Alt-Y</td><td>voiced velar implosive</td></tr>
	<tr><td>ʛ</td><td><code>G\_&lt;</code></td><td><code>G\_&lt;</code></td><td>Alt-Shift-Y</td><td>voiced uvular implosive</td></tr>
	<tr><td>ʼ</td><td><code>_&gt;</code></td><td><code>_&gt;</code></td><td>Alt-'</td><td>ejective</td></tr>
	<tr><th colspan="5">VOWELS</th></tr>
	<tr><th>IPA</th><th>X-SAMPA</th><th>CXS</th><th>SuperIPA</th><th>Description</th></tr>
	<tr><td>i</td><td><code>i</code></td><td><code>i</code></td><td>I</td><td>close front unrounded vowel</td></tr>
	<tr><td>y</td><td><code>y</code></td><td><code>y</code></td><td>Y</td><td>close front rounded vowel</td></tr>
	<tr><td>ɨ</td><td><code>1</code></td><td class="cxs"><code>1</code> or <code>i\</code></td><td>1 (or Alt-I)</td><td>close central unrounded vowel</td></tr>
	<tr><td>ʉ</td><td><code>}</code></td><td class="cxs"><code>u\</code></td><td>Alt-U</td><td>close central rounded vowel</td></tr>
	<tr><td>ɯ</td><td><code>M</code></td><td><code>M</code></td><td>Shift-M</td><td>close back unrounded vowel</td></tr>
	<tr><td>u</td><td><code>u</code></td><td><code>u</code></td><td>U</td><td>close back rounded vowel</td></tr>
	<tr><td>ɪ</td><td><code>I</code></td><td><code>I</code></td><td>Shift-I</td><td>near-close near-front unrounded vowel</td></tr>
	<tr><td>ʏ</td><td><code>Y</code></td><td><code>Y</code></td><td>Shift-Y</td><td>near-close near-front rounded vowel</td></tr>
	<tr><td>ɪ̈ (or ᵻ)</td><td><code>I\</code></td><td><code>I\</code></td><td>Alt-Shift-I</td><td>near-close central unrounded vowel</td></tr>
	<tr><td>ʊ̈ (or ᵿ)</td><td><code>U\</code></td><td><code>U\</code></td><td>Alt-Shift-U</td><td>near-close central rounded vowel</td></tr>
	<tr><td>ʊ</td><td><code>U</code></td><td><code>U</code></td><td>Shift-U</td><td>near-close near-back rounded vowel</td></tr>
	<tr><td>e</td><td><code>e</code></td><td><code>e</code></td><td>E</td><td>close-mid front unrounded vowel</td></tr>
	<tr><td>ø</td><td><code>2</code></td><td><code>2</code></td><td>2</td><td>close-mid front rounded vowel</td></tr>
	<tr><td>ɘ</td><td><code>@\</code></td><td><code>@\</code></td><td>Alt-Shift-2</td><td>close-mid central unrounded vowel</td></tr>
	<tr><td>ɵ</td><td><code>8</code></td><td><code>8</code></td><td>8</td><td>close-mid central rounded vowel</td></tr>
	<tr><td>ɤ</td><td><code>7</code></td><td><code>7</code></td><td>7</td><td>close-mid back unrounded vowel</td></tr>
	<tr><td>o</td><td><code>o</code></td><td><code>o</code></td><td>O</td><td>close-mid back rounded vowel</td></tr>
	<tr><td>ə</td><td><code>@</code></td><td><code>@</code></td><td>Shift-2</td><td>schwa</td></tr>
	<tr><td>ɛ</td><td><code>E</code></td><td><code>E</code></td><td>Shift-E</td><td>open-mid front unrounded vowel</td></tr>
	<tr><td>œ</td><td><code>9</code></td><td><code>9</code></td><td>9</td><td>open-mid front rounded vowel</td></tr>
	<tr><td>ɜ</td><td><code>3</code></td><td><code>3</code></td><td>3</td><td>open-mid central unrounded vowel</td></tr>
	<tr><td>ɞ</td><td><code>3\</code></td><td><code>3\</code></td><td>Alt-3</td><td>open-mid central rounded vowel</td></tr>
	<tr><td>ʌ</td><td><code>V</code></td><td><code>V</code></td><td>Shift-V</td><td>open-mid back unrounded vowel</td></tr>
	<tr><td>ɔ</td><td><code>O</code></td><td><code>O</code></td><td>Shift-O</td><td>open-mid back rounded vowel</td></tr>
	<tr><td>æ</td><td><code>{</code></td><td class="cxs"><code>&amp;</code></td><td>Shift-7</td><td>near-open front unrounded vowel</td></tr>
	<tr><td>ɐ</td><td><code>6</code></td><td><code>6</code></td><td>6</td><td>near-open central vowel</td></tr>
	<tr><td>a</td><td><code>a</code></td><td><code>a</code></td><td>A</td><td>open front unrounded vowel</td></tr>
	<tr><td>ɶ</td><td><code>&amp;</code></td><td class="cxs"><code>&amp;\</code></td><td>Alt-Shift-7</td><td>open front rounded vowel</td></tr>
	<tr><td>ɑ</td><td><code>A</code></td><td><code>A</code></td><td>Shift-A</td><td>open back unrounded vowel</td></tr>
	<tr><td>ɒ</td><td><code>Q</code></td><td><code>Q</code></td><td>Shift-Q</td><td>open back rounded vowel</td></tr>
	<tr><th colspan="5">OTHER SYMBOLS</th></tr>
	<tr><th>IPA</th><th>X-SAMPA</th><th>CXS</th><th>SuperIPA</th><th>Description</th></tr>
	<tr><td>ʍ</td><td><code>W</code></td><td><code>W</code></td><td>Shift-W</td><td>voiceless labial-velar fricative</td></tr>
	<tr><td>w</td><td><code>w</code></td><td><code>w</code></td><td>W</td><td>labial-velar approximant</td></tr>
	<tr><td>ɥ</td><td><code>H</code></td><td><code>H</code></td><td>Shift-H</td><td>labial-palatal approximant</td></tr>
	<tr><td>ʜ</td><td><code>H\</code></td><td><code>H\</code></td><td>Alt-Shift-H</td><td>voiceless epiglottal fricative</td></tr>
	<tr><td>ʢ</td><td><code><\</code></td><td><code><\</code></td><td>Alt-Shift-,</td><td>voiced epiglottal fricative</td></tr>
	<tr><td>ʡ</td><td><code>>\</code></td><td><code>>\</code></td><td>Alt-Shift-.</td><td>epiglottal plosive</td></tr>
	<tr><td>ɕ</td><td><code>s\</code></td><td><code>s\</code></td><td>Alt-S</td><td>voiceless alveolo-palatal fricative</td></tr>
	<tr><td>ʑ</td><td><code>z\</code></td><td><code>z\</code></td><td>Alt-Z</td><td>voiced alveolo-palatal fricative</td></tr>
	<tr><td>ɺ</td><td><code>l\</code></td><td><code>l\</code></td><td>Alt-L</td><td>alveolar lateral flap</td></tr>
	<tr><td>ɧ</td><td><code>x\</code></td><td><code>x\</code></td><td>Alt-X</td><td>voiceless palatal-velar fricative</td></tr>
	<tr><td>◌͡◌</td><td><code>_</code></td><td class="cxs"><code>_</code> or <code>)</code></td><td>Alt-Shift-9</td><td>upper tie bar</td></tr>
	<tr><td>◌͜◌</td><td><code>_</code></td><td class="cxs"><code>_</code> or <code>)</code></td><td>Alt-Shift-0</td><td>lower tie bar</td></tr>
	<tr><th colspan="5">SUPRASEGMENTALS</th></tr>
	<tr><th>IPA</th><th>X-SAMPA</th><th>CXS</th><th>SuperIPA</th><th>Description</th></tr>
	<tr><td>ˈ</td><td><code>"</code></td><td class="cxs"><code>'</code> or <code>"</code></td><td>'</td><td>primary stress</td></tr>
	<tr><td>ˌ</td><td><code>%</code></td><td class="cxs"><code>"</code> or <code>,</code></td><td>Shift-'</td><td>secondary stress</td></tr>
	<tr><td>ː</td><td><code>:</code></td><td><code>:</code></td><td>Shift-;</td><td>long</td></tr>
	<tr><td>ˑ</td><td><code>:\</code></td><td><code>:\</code></td><td>Alt-Shift-;</td><td>half long</td></tr>
	<tr><td>◌̆</td><td><code>_X</code></td><td><code>_X</code></td><td>Alt-;</td><td>extra-short</td></tr>
	<tr><td>|</td><td><code>|</code></td><td><code>|</code></td><td>\</td><td>minor (foot) group</td></tr>
	<tr><td>‖</td><td><code>||</code></td><td><code>||</code></td><td>Shift-\</td><td>major (intonation) group</td></tr>
	<tr><td>.</td><td><code>.</code></td><td><code>.</code></td><td>.</td><td>syllable break</td></tr>
	<tr><td>‿</td><td><code>-\</code></td><td><code>-\</code></td><td>Alt--</td><td>linking mark</td></tr>
	<tr><th colspan="5">TONES AND WORD ACCENTS</th></tr>
	<tr><th>IPA</th><th>X-SAMPA</th><th>CXS</th><th>SuperIPA</th><th>Description</th></tr>
	<tr><td>◌̋</td><td><code>_T</code></td><td><code>_T</code></td><td>Alt-Shift-3</td><td>extra high tone</td></tr>
	<tr><td>◌́</td><td><code>_H</code></td><td><code>_H</code></td><td>Shift-3</td><td>high tone</td></tr>
	<tr><td>◌̄</td><td><code>_M</code></td><td><code>_M</code></td><td>Shift-4</td><td>mid tone</td></tr>
	<tr><td>◌̀</td><td><code>_L</code></td><td><code>_L</code></td><td>Shift-5</td><td>low tone</td></tr>
	<tr><td>◌̏</td><td><code>_B</code></td><td><code>_B</code></td><td>Alt-Shift-5</td><td>extra low tone</td></tr>
	<tr><td>◌̌</td><td><code>_R</code> or <code>_/</code></td><td><code>_R</code> or <code>_/</code></td><td>Alt-Shift-6</td><td>rising tone</td></tr>
	<tr><td>◌̂</td><td><code>_F</code> or <code>_\</code></td><td><code>_F</code> or <code>_\</code></td><td>Alt-6</td><td>falling tone</td></tr>
	<tr><td>◌᷄</td><td><code>_H_T</code></td><td><code>_H_T</code></td><td>Alt-Shift-8</td><td>high rising tone</td></tr>
	<tr><td>◌᷅</td><td><code>_B_L</code></td><td><code>_B_L</code></td><td>Alt-8</td><td>low rising tone</td></tr>
	<tr><td>◌᷈</td><td><code>_R_F</code></td><td><code>_R_F</code></td><td>Alt-7</td><td>rising falling tone</td></tr>
	<tr><td>ꜜ</td><td><code>!</code></td><td><code>!</code></td><td>Shift-1</td><td>downstep</td></tr>
	<tr><td>ꜛ</td><td><code>^</code></td><td><code>^</code></td><td>Shift-6</td><td>upstep</td></tr>
	<tr><td>↗</td><td><code>&lt;R&gt;</code></td><td><code>&lt;R&gt;</code></td><td>Alt-Shift-T</td><td>global rise</td></tr>
	<tr><td>↘</td><td><code>&lt;F&gt;</code></td><td><code>&lt;F&gt;</code></td><td>Alt-Shift-P</td><td>global fall</td></tr>
	<tr><th colspan="5">DIACRITICS</th></tr>
	<tr><th>IPA</th><th>X-SAMPA</th><th>CXS</th><th>SuperIPA</th><th>Description</th></tr>
	<tr><td>◌̥</td><td><code>_0</code></td><td><code>_0</code></td><td>0</td><td>voiceless</td></tr>
	<tr><td>◌̬</td><td><code>_v</code></td><td><code>_v</code></td><td>Alt-0</td><td>voiced</td></tr>
	<tr><td>ʰ</td><td><code>_h</code></td><td><code>_h</code></td><td>Alt-A</td><td>aspirated</td></tr>
	<tr><td>◌̹</td><td><code>_O</code></td><td><code>_O</code></td><td>Alt-Shift-C</td><td>more rounded</td></tr>
	<tr><td>◌̜</td><td><code>_c</code></td><td><code>_c</code></td><td>Alt-C</td><td>less rounded</td></tr>
	<tr><td>◌̟</td><td><code>_+</code></td><td><code>_+</code></td><td>Alt-Shift-=</td><td>advanced</td></tr>
	<tr><td>◌̠</td><td><code>_-</code></td><td><code>_-</code></td><td>Alt-Shift--</td><td>retracted</td></tr>
	<tr><td>◌̈</td><td><code>_"</code></td><td><code>_"</code></td><td>Alt-Shift-'</td><td>centralized</td></tr>
	<tr><td>◌̽</td><td><code>_x</code></td><td><code>_x</code></td><td>Alt-2</td><td>mid-centralized</td></tr>
	<tr><td>◌̩</td><td><code>=</code> or <code>_=</code></td><td><code>=</code> or <code>_=</code></td><td>=</td><td>syllabic</td></tr>
	<tr><td>◌̯</td><td><code>_^</code></td><td><code>_^</code></td><td>Shift-=</td><td>non-syllabic</td></tr>
	<tr><td>◌˞</td><td><code>`</code></td><td><code>`</code></td><td>`</td><td>rhoticity</td></tr>
	<tr><td>ɚ</td><td><code>@`</code></td><td><code>@`</code></td><td>Alt-E</td><td>rhoticized ə</td></tr>
	<tr><td>ɝ</td><td><code>3`</code></td><td><code>3`</code></td><td>Alt-Shift-E</td><td>rhoticized ɜ</td></tr>
	<tr><td>◌̤</td><td><code>_t</code></td><td><code>_t</code></td><td>Alt-`</td><td>breathy voice</td></tr>
	<tr><td>◌̰</td><td><code>_k</code></td><td><code>_k</code></td><td>Alt-Shift-`</td><td>creaky voice</td></tr>
	<tr><td>◌̼</td><td><code>_N</code></td><td><code>_N</code></td><td>Alt-Shift-W</td><td>linguolabial</td></tr>
	<tr><td>ʷ</td><td><code>_w</code></td><td><code>_w</code></td><td>Alt-W</td><td>labialized</td></tr>
	<tr><td>ʲ</td><td><code>'</code> or <code>_j</code></td><td class="cxs"><code>;</code> or <code>_j</code></td><td>;</td><td>palatalized</td></tr>
	<tr><td>ˠ</td><td><code>_G</code></td><td><code>_G</code></td><td>Alt-Q</td><td>velarized</td></tr>
	<tr><td>ˤ</td><td><code>_?\</code></td><td><code>_?\</code></td><td>Alt-/</td><td>pharyngealized</td></tr>
	<tr><td>◌̴</td><td><code>_e</code></td><td><code>_e</code></td><td>Alt-5</td><td>velarized or pharyngealized</td></tr>
	<tr><td>ɫ</td><td><code>5</code></td><td><code>5</code></td><td>5</td><td>velarized alveolar lateral approximant</td></tr>
	<tr><td>◌̝</td><td><code>_r</code></td><td><code>_r</code></td><td>Alt-[</td><td>raised</td></tr>
	<tr><td>◌̞</td><td><code>_o</code></td><td><code>_o</code></td><td>Alt-]</td><td>lowered</td></tr>
	<tr><td>◌̘</td><td><code>_A</code></td><td><code>_A</code></td><td>Alt-Shift-[</td><td>advanced tongue root</td></tr>
	<tr><td>◌̙</td><td><code>_q</code></td><td><code>_q</code></td><td>Alt-Shift-]</td><td>retracted tongue root</td></tr>
	<tr><td>◌̪</td><td><code>_d</code></td><td><code>_d</code></td><td>Alt-Shift-D</td><td>dental</td></tr>
	<tr><td>◌̺</td><td><code>_a</code></td><td><code>_a</code></td><td>Alt-Shift-A</td><td>apical</td></tr>
	<tr><td>◌̻</td><td><code>_m</code></td><td><code>_m</code></td><td>Alt-Shift-Q</td><td>laminal</td></tr>
	<tr><td>◌̃</td><td><code>~</code> or <code>_~</code></td><td><code>~</code> or <code>_~</code></td><td>Shift-`</td><td>nasalization</td></tr>
	<tr><td>ⁿ</td><td><code>_n</code></td><td><code>_n</code></td><td>Alt-M</td><td>nasal release</td></tr>
	<tr><td>ˡ</td><td><code>_l</code></td><td><code>_l</code></td><td>Alt-O</td><td>lateral release</td></tr>
	<tr><td>◌̚</td><td><code>_}</code></td><td><code>_}</code></td><td>Alt-9</td><td>no audible release</td></tr>
</table>
<p>© 2018-2022 Kreative Software</p>
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
