<?php
  $pagename = 'Pan Africa Positional (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    table { width: 100%; border-collapse: collapse; margin-top: 15px; }
    .table-container { overflow-x: auto;  display: block;}
    th, td { padding: 8px 12px; border: 1px solid #ccc; }
    th { background: #f0f0f0; }
    .key {font: 0.8em Courier New;  text-align: center;}
    .char {font-family: Charis; font-weight: Bold; font-size: 12pt; text-align: center;}
END;
  
  require_once('header.php');
?>


<p>This is the positional version of the Pan Africa (SIL) keyboard. The keyboard layout was designed to
work with a QWERTY US English keyboard. For a keyboard that is not dependent on a particular hardware 
keyboard, use "Pan Africa Mnemonic (SIL)."</p>

<p>This keyboard was developed to type the Latin-script languages of Africa.  An attempt was made to 
cover the orthographic needs for SIL in many of the countries of Africa, but this cannot be 
considered a complete list, nor should it be considered an endorsement for this particular layout. </p>

<p><b>Note:</b> If you need to use the ALT combinations, you'll need to use Keyman Configuration to change the Keyman hotkeys.</p>

<h2>Keyboard Assignments</h2>

<p>This keyboard uses deadkeys to type the special characters. For example, if you type "]v", you will get <span class="char">&#x028c;</span>;.
	With this keyboard you can also use the Left and Right Alt keys as modifiers. For example, if you type "RALT v", 
	you will also get <span class="char">&#x028c;</span>.</p>

<h3>Letters</h3>

<p>The following letters are available by typing directly: </p>

<table>
  <tr>
    <td class="char">a</td>
    <td class="char">b</td>
    <td class="char">c</td>
    <td class="char">d</td>
    <td class="char">e</td>
    <td class="char">f</td>
    <td class="char">g</td>
    <td class="char">h</td>
    <td class="char">i</td>
    <td class="char">j</td>
    <td class="char">k</td>
    <td class="char">l</td>
    <td class="char">m</td>
  </tr>
  <tr>
    <td class="char">A</td>
    <td class="char">B</td>
    <td class="char">C</td>
    <td class="char">D</td>
    <td class="char">E</td>
    <td class="char">F</td>
    <td class="char">F</td>
    <td class="char">H</td>
    <td class="char">I</td>
    <td class="char">J</td>
    <td class="char">K</td>
    <td class="char">L</td>
    <td class="char">M</td>
  </tr>
  <tr>
    <td class="char">n</td>
    <td class="char">o</td>
    <td class="char">p</td>
    <td class="char">q</td>
    <td class="char">r</td>
    <td class="char">s</td>
    <td class="char">t</td>
    <td class="char">u</td>
    <td class="char">v</td>
    <td class="char">w</td>
    <td class="char">x</td>
    <td class="char">y</td>
    <td class="char">z</td>
  </tr>
  <tr>
    <td class="char">N</td>
    <td class="char">O</td>
    <td class="char">P</td>
    <td class="char">Q</td>
    <td class="char">R</td>
    <td class="char">S</td>
    <td class="char">T</td>
    <td class="char">U</td>
    <td class="char">V</td>
    <td class="char">W</td>
    <td class="char">X</td>
    <td class="char">Y</td>
    <td class="char">Z</td>
  </tr>
</table>

<p>The following letters are available by typing the keystrokes
underneath.</p>

<div class="table-container">
<table>
 <tr>
  <td class="char">&#593;</td>
  <td class="char">&#652;</td>
  <td class="char">&#595;</td>
  <td class="char">&#392;</td>
  <td class="char">&#598;</td>
  <td class="char">&#599;</td>
  <td class="char">&#603;</td>
  <td class="char">&#477;</td>
  <td class="char">&#601;</td>
  <td class="char">&#x0192;</td>
  <td class="char">&#608;</td>
  <td class="char">&#611;</td>
  <td class="char">&#614;</td>
  <td class="char">&#616;</td>
  <td class="char">&#617;</td>
  <td class="char">&#409;</td>
</tr>
<tr>
  <td class="key">[a</td>
  <td class="key">]v</td>
  <td class="key">[b</td>
  <td class="key">[c</td>
  <td class="key">[j</td>
  <td class="key">[d</td>
  <td class="key">[s</td>
  <td class="key">[e</td>
  <td class="key">]e</td>
  <td class="key">[f</td>
  <td class="key">[g</td>
  <td class="key">[x</td>
  <td class="key">[h</td>
  <td class="key">[i</td>
  <td class="key">[l</td>
  <td class="key">[k</td>
</tr>
<tr>
  <td class="key">RALT a</td>
  <td class="key">LALT v</td>
  <td class="key">RALT b</td>
  <td class="key">RALT c</td>
  <td class="key">RALT j</td>
  <td class="key">RALT d</td>
  <td class="key">RALT s</td>
  <td class="key">RALT e</td>
  <td class="key">LALT e</td>
  <td class="key">RALT f</td>
  <td class="key">RALT g</td>
  <td class="key">RALT x</td>
  <td class="key">RALT h</td>
  <td class="key">RALT i</td>
  <td class="key">RALT l</td>
  <td class="key">RALT k</td>
</tr>
</table>

<table>
 <tr>
  <td class="char">&#11373;</td>
  <td class="char">&#581;</td>
  <td class="char">&#385;</td>
  <td class="char">&#391;</td>
  <td class="char">&#393;</td>
  <td class="char">&#394;</td>
  <td class="char">&#400;</td>
  <td class="char">&#398;</td>
  <td class="char">&#399;</td>
  <td class="char">&#401;</td>
  <td class="char">&#403;</td>
  <td class="char">&#404;</td>
  <td class="char">&#542;</td>
  <td class="char">&#407;</td>
  <td class="char">&#406;</td>
  <td class="char">&#408;</td>
 </tr>
 <tr>
  <td class="key">[A</td>
  <td class="key">]V</td>
  <td class="key">[B</td>
  <td class="key">[C</td>
  <td class="key">[J</td>
  <td class="key">[D</td>
  <td class="key">[S</td>
  <td class="key">[E</td>
  <td class="key">]E</td>
  <td class="key">[F</td>
  <td class="key">[G</td>
  <td class="key">[X</td>
  <td class="key">[H</td>
  <td class="key">[I</td>
  <td class="key">[L</td>
  <td class="key">[K</td>
</tr>  
<tr>
  <td class="key">RALT A</td>
  <td class="key">LALT V</td>
  <td class="key">RALT B</td>
  <td class="key">RALT C</td>
  <td class="key">RALT J</td>
  <td class="key">RALT D</td>
  <td class="key">RALT S</td>
  <td class="key">RALT E</td>
  <td class="key">LALT E</td>
  <td class="key">RALT F</td>
  <td class="key">RALT G</td>
  <td class="key">RALT X</td>
  <td class="key">RALT H</td>
  <td class="key">RALT I</td>
  <td class="key">RALT L</td>
  <td class="key">RALT K</td>
 </tr>
</table>


<table>
  <tr>
  <td class="char">&#626;</td>
  <td class="char">&#x014b;</td>
  <td class="char">&#x00f8;</td>
  <td class="char">&#596;</td>
  <td class="char">&#421;</td>
  <td class="char">&#589;</td>
  <td class="char">&#637;</td>
  <td class="char">&#643;</td>
  <td class="char">&#359;</td>
  <td class="char">&#429;</td>
  <td class="char">&#649;</td>
  <td class="char">&#651;</td>
  <td class="char">&#11379;</td>
  <td class="char">&#436;</td>
  <td class="char">&#658;</td>
  <td class="char">&#438;</td>
 </tr>
 <tr>
  <td class="key">[m</td>
  <td class="key">[n</td>
  <td class="key">[q</td>
  <td class="key">[o</td>
  <td class="key">[p</td>
  <td class="key">[r</td>
  <td class="key">]r</td>
  <td class="key">]s</td>
  <td class="key">]t</td>
  <td class="key">[t</td>
  <td class="key">[u</td>
  <td class="key">[v</td>
  <td class="key">[w</td>
  <td class="key">[y</td>
  <td class="key">[z</td>
  <td class="key">]z</td>
 </tr>
 <tr>
  <td class="key">RALT m</td>
  <td class="key">RALT n</td>
  <td class="key">RALT q</td>
  <td class="key">RALT o</td>
  <td class="key">RALT p</td>
  <td class="key">RALT r</td>
  <td class="key">LALT r</td>
  <td class="key">LALT s</td>
  <td class="key">RALT t</td>
  <td class="key">RALT t</td>
  <td class="key">RALT u</td>
  <td class="key">RALT v</td>
  <td class="key">RALT w</td>
  <td class="key">RALT y</td>
  <td class="key">RALT z</td>
  <td class="key">LALT z</td>
 </tr>
</table>

<table>
 <tr>
  <td class="char">&#413;</td>
  <td class="char">&#330;</td>
  <td class="char">&#x00d8;</td>
  <td class="char">&#390;</td>
  <td class="char">&#420;</td>
  <td class="char">&#588;</td>
  <td class="char">&#11364;</td>
  <td class="char">&#425;</td>
  <td class="char">&#x0166;</td>
  <td class="char">&#428;</td>
  <td class="char">&#580;</td>
  <td class="char">&#434;</td>
  <td class="char">&#11378;</td>
  <td class="char">&#435;</td>
  <td class="char">&#439;</td>
  <td class="char">&#437;</td>
 </tr>
 <tr>
  <td class="key">[M</td>
  <td class="key">[N</td>
  <td class="key">[Q</td>
  <td class="key">[O</td>
  <td class="key">[P</td>
  <td class="key">[R</td>
  <td class="key">]R</td>
  <td class="key">]S</td>
  <td class="key">]T</td>
  <td class="key">[T</td>
  <td class="key">[U</td>
  <td class="key">[V</td>
  <td class="key">[W</td>
  <td class="key">[Y</td>
  <td class="key">[Z</td>
  <td class="key">]Z</td>
 </tr>
 <tr>
  <td class="key">RALT M</td>
  <td class="key">RALT N</td>
  <td class="key">RALT Q</td>
  <td class="key">RALT O</td>
  <td class="key">RALT P</td>
  <td class="key">RALT R</td>
  <td class="key">LALT R</td>
  <td class="key">LALT S</td>
  <td class="key">LALT T</td>
  <td class="key">RALT T</td>
  <td class="key">RALT U</td>
  <td class="key">RALT V</td>
  <td class="key">RALT W</td>
  <td class="key">RALT Y</td>
  <td class="key">RALT Z</td>
  <td class="key">LALT Z</td>
 </tr>
</table>
</div>

<h3>Other</h3>

<table>
 <tr>
  <td class="char">&#660;</td>
  <td class="char">&#661;</td>
  <td class="char">&#700;</td>
 </tr>
 <tr>
  <td class="key">[?</td>
  <td class="key">]?</td>
  <td class="key">[&#8242;</td>
 </tr>
 <tr>
  <td class="key">RALT ?</td>
  <td class="key">LALT ?</td>
  <td class="key">RALT &#8242;</td>
 </tr>
</table>


<h3>Punctuation</h3>

<p>The following punctuation is available by typing directly: </p>

<table>
 <tr>
  <td class="char">!</td>
  <td class="char">#</td>
  <td class="char">$</td>
  <td class="char">%</td>
  <td class="char">&amp;</td>
  <td class="char">*</td>
  <td class="char">(</td>
  <td class="char">)</td>
  <td class="char">-</td>
  <td class="char">=</td>
  <td class="char">+</td>
  <td class="char">\</td>
  <td class="char">:</td>
  <td class="char">;</td>
  <td class="char">,</td>
  <td class="char">?</td>
 </tr>
</table>

<p>The following punctuation is available by typing the keystrokes
underneath.</p>

<table>
 <tr>
  <td class="char">&#x00AB;</td>
  <td class="char">&#x2039;</td>
  <td class="char">&#x203A;</td>
  <td class="char">&#x00BB;</td>
  <td class="char">/</td>
  <td class="char">&lt;</td>
  <td class="char">&gt;</td>
  <td class="char">@</td>
  <td class="char">[</td>
  <td class="char">]</td>
  <td class="char">^</td>
  <td class="char">_</td>
  <td class="char">`</td>
  <td class="char">~</td>
  <td class="char">{</td>
  <td class="char">}</td>
  <td class="char">|</td>
 </tr>
 <tr>
  <td class="key">&lt;&lt;</td>
  <td class="key">&lt;</td>
  <td class="key">&gt;</td>
  <td class="key">&gt;&gt;</td>
  <td class="key">]/</td>
  <td class="key">]&lt;</td>
  <td class="key">]&gt;</td>
  <td class="key">]@</td>
  <td class="key">][</td>
  <td class="key">]]</td>
  <td class="key">]^</td>
  <td class="key">]_</td>
  <td class="key">]`</td>
  <td class="key">]~</td>
  <td class="key">]{</td>
  <td class="key">]}</td>
  <td class="key">]|</td>
 </tr>
 <tr>
  <td class="char">&#x201C;</td>
  <td class="char">&#x2018;</td>
  <td class="char">&#x2019;</td>
  <td class="char">&#x201D;</td>
  <td colspan=13>&nbsp;</td>
 </tr>
 <td class="key">[&lt;[&lt;</td>
  <td class="key">[&lt;</td>
  <td class="key">[&gt;</td>
  <td class="key">[&gt;[&gt;</td>
  <td colspan=13>&nbsp;</td>
 </tr>
</table>

<h3>Diacritics</h3>

<p>Diacritics are typed <i>after</i> the character they are to
appear above (or below). If you need stacking diacritics they should be typed
in the order of lowest to highest. If you have a diacritic above and another
below, they can be combined in any order. If the precomposed character exists
in Unicode that is the character that will be output. </p>

<h4>Above</h4>

<table>
 <tr>
  <td class="char">&#9676;&#768;</td>
  <td class="char">&#9676;&#769;</td>
  <td class="char">&#9676;&#770;</td>
  <td class="char">&#9676;&#771;</td>
  <td class="char">&#9676;&#772;</td>
  <td class="char">&#9676;&#775;</td>
  <td class="char">&#9676;&#776;</td>
  <td class="char">&#9676;&#780;</td>
  <td class="char">&#9676;&#781;</td>
  <td class="char">&#9676;&#778;</td>
 </tr>
 <tr>
  <td class="key">`</td>
  <td class="key">/</td>
  <td class="key">^</td>
  <td class="key">~</td>
  <td class="key">_</td>
  <td class="key">}</td>
  <td class="key">&quot;</td>
  <td class="key">{</td>
  <td class="key">|</td>
  <td class="key">@</td>
 </tr>
</table>

<h4>Below</h4>

<table>
 <tr>
  <td class="char">&#9676;&#816;</td>
  <td class="char">&#9676;&#817;</td>
  <td class="char">&#9676;&#803;</td>
  <td class="char">&#9676;&#809;</td>
  <td class="char">&#9676;&#805;</td>
  <td class="char">&#9676;&#807;</td>
 </tr>
 <tr>
  <td class="key">[~</td>
  <td class="key">[_</td>
  <td class="key">[}</td>
  <td class="key">[|</td>
  <td class="key">[@</td>
  <td class="key">[,</td>
 </tr>
 <tr>
  <td class="key">RALT ~</td>
  <td class="key">RALT _</td>
  <td class="key">RALT .</td>
  <td class="key">RALT |</td>
  <td class="key">RALT @</td>
  <td class="key">RALT ,</td>
 </tr>
</table>

<h3>Numbers</h3>

<p>Numbers are available by typing directly: <span class="char">0123456789</span></p>

<h2>Reference</h2>

<p>This section is intended purely for reference in case a
person desires to see the Unicode Scalar Value of a particular character.</p>

<h3>Orthographic Characters</h3>

<table>
 <thead>
  <tr>
   <th>shift key keystrokes</th>
   <th>keystrokes</th>
   <th>to get</th>
   <th>Unicode</th>
   <th>shift key keystrokes</th>
   <th>keystrokes</th>
   <th>to get</th>
   <th>Unicode</th>
  </tr>
 </thead>
 <tr>
  <td class="key">a</td>
  <td class="key">a</td>
  <td class="char">a</td>
  <td>U+0061</td>
  <td class="key">A</td>
  <td class="key">A</td>
  <td class="char">A</td>
  <td>U+0041</td>
 </tr>
 <tr>
  <td class="key">RALT a</td>
  <td class="key">[ a</td>
  <td class="char">&#593;</td>
  <td>U+0251</td>
  <td class="key">RALT A</td>
  <td class="key">[ A</td>
  <td class="char">&#x2c6d;</td>
  <td>U+2C6D</td>
 </tr>
 <tr>
  <td class="key">LALT v</td>
  <td class="key">] v</td>
  <td class="char">&#652;</td>
  <td>U+028C</td>
  <td class="key">LALT V</td>
  <td class="key">] V</td>
  <td class="char">&#x0245;</td>
  <td>U+0245</td>
 </tr>
 <tr>
  <td class="key">b</td>
  <td class="key">b</td>
  <td class="char">b</td>
  <td>U+0062</td>
  <td class="key">B</td>
  <td class="key">B</td>
  <td class="char">B</td>
  <td>U+0042</td>
 </tr>
 <tr>
  <td class="key">RALT b</td>
  <td class="key">[ b</td>
  <td class="char">&#595;</td>
  <td>U+0253</td>
  <td class="key">RALT B</td>
  <td class="key">[ B</td>
  <td class="char">&#385;</td>
  <td>U+0181</td>
 </tr>
 <tr>
  <td class="key">c</td>
  <td class="key">c</td>
  <td class="char">c</td>
  <td>U+0063</td>
  <td class="key">C</td>
  <td class="key">C</td>
  <td class="char">C</td>
  <td>U+0043</td>
 </tr>
 <tr>
  <td class="key">RALT c</td>
  <td class="key">[ c</td>
  <td class="char">&#392;</td>
  <td>U+0188</td>
  <td class="key">RALT C</td>
  <td class="key">[ C</td>
  <td class="char">&#391;</td>
  <td>U+0187</td>
 </tr>
 <tr>
  <td class="key">d</td>
  <td class="key">d</td>
  <td class="char">d</td>
  <td>U+0064</td>
  <td class="key">D</td>
  <td class="key">D</td>
  <td class="char">D</td>
  <td>U+0044</td>
 </tr>
 <tr>
  <td class="key">RALT j</td>
  <td class="key">[ j</td>
  <td class="char">&#598;</td>
  <td>U+0256</td>
  <td class="key">RALT J</td>
  <td class="key">[ J</td>
  <td class="char">&#393;</td>
  <td>U+0189</td>
 </tr>
 <tr>
  <td class="key">RALT d</td>
  <td class="key">[ d</td>
  <td class="char">&#599;</td>
  <td>U+0257</td>
  <td class="key">RALT D</td>
  <td class="key">[ D</td>
  <td class="char">&#394;</td>
  <td>U+018A</td>
 </tr>
 <tr>
  <td class="key">e</td>
  <td class="key">e</td>
  <td class="char">e</td>
  <td>U+0065</td>
  <td class="key">E</td>
  <td class="key">E</td>
  <td class="char">E</td>
  <td>U+0045</td>
 </tr>
 <tr>
  <td class="key">RALT s</td>
  <td class="key">[ s</td>
  <td class="char">&#603;</td>
  <td>U+025B</td>
  <td class="key">RALT S</td>
  <td class="key">[ S</td>
  <td class="char">&#400;</td>
  <td>U+0190</td>
 </tr>
 <tr>
  <td class="key">RALT e</td>
  <td class="key">[ e</td>
  <td class="char">&#477;</td>
  <td>U+01DD</td>
  <td class="key">RALT E</td>
  <td class="key">[ E</td>
  <td class="char">&#398;</td>
  <td>U+018E</td>
 </tr>
 <tr>
  <td class="key">LALT e</td>
  <td class="key">] e</td>
  <td class="char">&#601;</td>
  <td>U+0259</td>
  <td class="key">LALT E</td>
  <td class="key">] E</td>
  <td class="char">&#399;</td>
  <td>U+018F</td>
 </tr>
 <tr>
  <td class="key">f</td>
  <td class="key">f</td>
  <td class="char">f</td>
  <td>U+0066</td>
  <td class="key">F</td>
  <td class="key">F</td>
  <td class="char">F</td>
  <td>  U+0046</td>
 </tr>
 <tr>
  <td class="key">RALT f</td>
  <td class="key">[ f</td>
  <td class="char">&#402;</td>
  <td>U+0192</td>
  <td class="key">RALT F</td>
  <td class="key">[ F</td>
  <td class="char">&#401;</td>
  <td>U+0191</td>
 </tr>
 <tr>
  <td class="key">g</td>
  <td class="key">g</td>
  <td class="char">g</td>
  <td>U+0067</td>
  <td class="key">G</td>
  <td class="key">G</td>
  <td class="char">G</td>
  <td>U+0047</td>
 </tr>
 <tr>
  <td class="key">RALT g</td>
  <td class="key">[ g</td>
  <td class="char">&#608;</td>
  <td>U+0260</td>
  <td class="key">RALT G</td>
  <td class="key">[ G</td>
  <td class="char">&#403;</td>
  <td>U+0193</td>
 </tr>
 <tr>
  <td class="key">RALT x</td>
  <td class="key">[ x</td>
  <td class="char">&#611;</td>
  <td>U+0263</td>
  <td class="key">RALT X</td>
  <td class="key">[ X</td>
  <td class="char">&#404;</td>
  <td>U+0194</td>
 </tr>
 <tr>
  <td class="key">h</td>
  <td class="key">h</td>
  <td class="char">h</td>
  <td>U+0068</td>
  <td class="key">H</td>
  <td class="key">H</td>
  <td class="char">H</td>
  <td>U+0048</td>
 </tr>
 <tr>
  <td class="key">RALT h</td>
  <td class="key">[ h</td>
  <td class="char">&#614;</td>
  <td>U+0266</td>
  <td class="key">RALT H</td>
  <td class="key">[ H</td>
  <td class="char">&#542;</td>
  <td>U+021E</td>
 </tr>
 <tr>
  <td class="key">i</td>
  <td class="key">i</td>
  <td class="char">i</td>
  <td>U+0069</td>
  <td class="key">I</td>
  <td class="key">I</td>
  <td class="char">I</td>
  <td>U+0049</td>
 </tr>
 <tr>
  <td class="key">RALT i</td>
  <td class="key">[ i</td>
  <td class="char">&#616;</td>
  <td>U+0268</td>
  <td class="key">RALT I</td>
  <td class="key">[ I</td>
  <td class="char">&#407;</td>
  <td>U+0197</td>
 </tr>
 <tr>
  <td class="key">RALT l</td>
  <td class="key">[ l</td>
  <td class="char">&#617;</td>
  <td>U+0269</td>
  <td class="key">RALT L</td>
  <td class="key">[ L</td>
  <td class="char">&#406;</td>
  <td>U+0196</td>
 </tr>
 <tr>
  <td class="key">j</td>
  <td class="key">j</td>
  <td class="char">j</td>
  <td>U+006A</td>
  <td class="key">J</td>
  <td class="key">J</td>
  <td class="char">J</td>
  <td>U+004A</td>
 </tr>
 <tr>
  <td class="key">k</td>
  <td class="key">k</td>
  <td class="char">k</td>
  <td>U+006B</td>
  <td class="key">K</td>
  <td class="key">K</td>
  <td class="char">K</td>
  <td>U+004B</td>
 </tr>
 <tr>
  <td class="key">RALT k</td>
  <td class="key">[ k</td>
  <td class="char">&#409;</td>
  <td>U+0199</td>
  <td class="key">RALT K</td>
  <td class="key">[ K</td>
  <td class="char">&#408;</td>
  <td>U+0198</td>
 </tr>
 <tr>
  <td class="key">l</td>
  <td class="key">l</td>
  <td class="char">l</td>
  <td>U+006C</td>
  <td class="key">L</td>
  <td class="key">L</td>
  <td class="char">L</td>
  <td>U+004C</td>
 </tr>
 <tr>
  <td class="key">m</td>
  <td class="key">m</td>
  <td class="char">m</td>
  <td>U+006D</td>
  <td class="key">M</td>
  <td class="key">M</td>
  <td class="char">M</td>
  <td>U+004D</td>
 </tr>
 <tr>
  <td class="key">n</td>
  <td class="key">n</td>
  <td class="char">n</td>
  <td>U+006E</td>
  <td class="key">N</td>
  <td class="key">N</td>
  <td class="char">N</td>
  <td>U+004E</td>
 </tr>
 <tr>
  <td class="key">RALT m</td>
  <td class="key">[ m</td>
  <td class="char">&#626;</td>
  <td>U+0272</td>
  <td class="key">RALT M</td>
  <td class="key">[ M</td>
  <td class="char">&#413;</td>
  <td>U+019D</td>
 </tr>
 <tr>
  <td class="key">RALT n</td>
  <td class="key">[ n</td>
  <td class="char">&#331;</td>
  <td>U+014B</td>
  <td class="key">RALT N</td>
  <td class="key">[ N</td>
  <td class="char">&#330;</td>
  <td>U+014A</td>
 </tr>
 <tr>
  <td class="key">o</td>
  <td class="key">o</td>
  <td class="char">o</td>
  <td>U+006F</td>
  <td class="key">O</td>
  <td class="key">O</td>
  <td class="char">O</td>
  <td>U+004F</td>
 </tr>
 <tr>
  <td class="key">RALT q</td>
  <td class="key">[ q</td>
  <td class="char">&#x00f8;</td>
  <td>U+00F8</td>
  <td class="key">RALT Q</td>
  <td class="key">[ Q</td>
  <td class="char">&#x00d8;</td>
  <td>U+00D8</td>
 </tr>
 <tr>
  <td class="key">RALT o</td>
  <td class="key">[ o</td>
  <td class="char">&#596;</td>
  <td>U+0254</td>
  <td class="key">RALT O</td>
  <td class="key">[ O</td>
  <td class="char">&#390;</td>
  <td>U+0186</td>
 </tr>
 <tr>
  <td class="key">p</td>
  <td class="key">p</td>
  <td class="char">p</td>
  <td>U+0070</td>
  <td class="key">P</td>
  <td class="key">P</td>
  <td class="char">P</td>
  <td>U+0050</td>
 </tr>
 <tr>
  <td class="key">RALT p</td>
  <td class="key">[ p</td>
  <td class="char">&#421;</td>
  <td>U+01A5</td>
  <td class="key">RALT P</td>
  <td class="key">[ P</td>
  <td class="char">&#420;</td>
  <td>U+01A4</td>
 </tr>
 <tr>
  <td class="key">q</td>
  <td class="key">q</td>
  <td class="char">q</td>
  <td>U+0071</td>
  <td class="key">Q</td>
  <td class="key">Q</td>
  <td class="char">Q</td>
  <td>U+0051</td>
 </tr>
 <tr>
  <td class="key">r</td>
  <td class="key">r</td>
  <td class="char">r</td>
  <td>U+0072</td>
  <td class="key">R</td>
  <td class="key">R</td>
  <td class="char">R</td>
  <td>U+0052</td>
 </tr>
 <tr>
  <td class="key">RALT r</td>
  <td class="key">[ r</td>
  <td class="char">&#x024d;</td>
  <td>U+024D</td>
  <td class="key">RALT R</td>
  <td class="key">[ R</td>
  <td class="char">&#x024c;</td>
  <td>U+024C</td>
 </tr>
 <tr>
  <td class="key">LALT r</td>
  <td class="key">] r</td>
  <td class="char">&#637;</td>
  <td>U+027D</td>
  <td class="key">LALT R</td>
  <td class="key">] R</td>
  <td class="char">&#x2c64;</td>
  <td>U+2C64</td>
 </tr>
 <tr>
  <td class="key">s</td>
  <td class="key">s</td>
  <td class="char">s</td>
  <td>U+0073</td>
  <td class="key">S</td>
  <td class="key">S</td>
  <td class="char">S</td>
  <td>U+0053</td>
 </tr>
 <tr>
  <td class="key">LALT s</td>
  <td class="key">] s</td>
  <td class="char">&#643;</td>
  <td>U+0283</td>
  <td class="key">LALT S</td>
  <td class="key">] S</td>
  <td class="char">&#425;</td>
  <td>U+01A9</td>
 </tr>
 <tr>
  <td class="key">t</td>
  <td class="key">t</td>
  <td class="char">t</td>
  <td>U+0074</td>
  <td class="key">T</td>
  <td class="key">T</td>
  <td class="char">T</td>
  <td>U+0054</td>
 </tr>
 <tr>
  <td class="key">RALT t</td>
  <td class="key">[ t</td>
  <td class="char">&#429;</td>
  <td>U+01AD</td>
  <td class="key">RALT T</td>
  <td class="key">[ T</td>
  <td class="char">&#428;</td>
  <td>U+01AC</td>
 </tr>
 <tr>
  <td class="key">LALT t</td>
  <td class="key">] t</td>
  <td class="char">&#359;</td>
  <td>U+0167</td>
  <td class="key">LALT T</td>
  <td class="key">] T</td>
  <td class="char">&#358;</td>
  <td>U+0166</td>
 </tr>
 <tr>
  <td class="key">u</td>
  <td class="key">u</td>
  <td class="char">u</td>
  <td>U+0075</td>
  <td class="key">U</td>
  <td class="key">U</td>
  <td class="char">U</td>
  <td>U+0055</td>
 </tr>
 <tr>
  <td class="key">RALT u</td>
  <td class="key">[ u</td>
  <td class="char">&#649;</td>
  <td>U+0289</td>
  <td class="key">RALT U</td>
  <td class="key">[ U</td>
  <td class="char">&#x0244;</td>
  <td>U+0244</td>
 </tr>
 <tr>
  <td class="key">v</td>
  <td class="key">v</td>
  <td class="char">v</td>
  <td>U+0076</td>
  <td class="key">V</td>
  <td class="key">V</td>
  <td class="char">V</td>
  <td>U+0056</td>
 </tr>
 <tr>
  <td class="key">RALT v</td>
  <td class="key">[ v</td>
  <td class="char">&#651;</td>
  <td>U+028B</td>
  <td class="key">RALT V</td>
  <td class="key">[ V</td>
  <td class="char">&#434;</td>
  <td>U+01B2</td>
 </tr>
 <tr>
  <td class="key">w</td>
  <td class="key">w</td>
  <td class="char">w</td>
  <td>U+0077</td>
  <td class="key">W</td>
  <td class="key">W</td>
  <td class="char">W</td>
  <td>U+0057</td>
 </tr>
 <tr>
  <td class="key">RALT w</td>
  <td class="key">[ w</td>
  <td class="char">&#x2c73;</td>
  <td>U+2C73</td>
  <td class="key">RALT W</td>
  <td class="key">[ W</td>
  <td class="char">&#x2c72;</td>
  <td>U+2C72</td>
 </tr>
 <tr>
  <td class="key">x</td>
  <td class="key">x</td>
  <td class="char">x</td>
  <td>U+0078</td>
  <td class="key">X</td>
  <td class="key">X</td>
  <td class="char">X</td>
  <td>U+0058</td>
 </tr>
 <tr>
  <td class="key">y</td>
  <td class="key">y</td>
  <td class="char">y</td>
  <td>U+0079</td>
  <td class="key">Y</td>
  <td class="key">Y</td>
  <td class="char">Y</td>
  <td>U+0059</td>
 </tr>
 <tr>
  <td class="key">RALT y</td>
  <td class="key">[ y</td>
  <td class="char">&#436;</td>
  <td>U+01B4</td>
  <td class="key">RALT Y</td>
  <td class="key">[ Y</td>
  <td class="char">&#435;</td>
  <td>U+01B3</td>
 </tr>
 <tr>
  <td class="key">z</td>
  <td class="key">z</td>
  <td class="char">z</td>
  <td>U+007A</td>
  <td class="key">Z</td>
  <td class="key">Z</td>
  <td class="char">Z</td>
  <td>U+005A</td>
 </tr>
 <tr>
  <td class="key">LALT z</td>
  <td class="key">] z</td>
  <td class="char">&#438;</td>
  <td>U+01B6</td>
  <td class="key">LALT Z</td>
  <td class="key">] Z</td>
  <td class="char">&#437;</td>
  <td>U+01B5</td>
 </tr>
 <tr>
  <td class="key">RALT z</td>
  <td class="key">[ z</td>
  <td class="char">&#658;</td>
  <td>U+0292</td>
  <td class="key">RALT Z</td>
  <td class="key">[ Z</td>
  <td class="char">&#439;</td>
  <td>U+01B7</td>
 </tr>
 <tr>
  <td class="key">&nbsp;</td>
  <td class="key">&nbsp;</td>
  <td class="char">&nbsp;</td>
  <td>&nbsp;</td>
  <td class="key">LALT ?</td>
  <td class="key">] ?</td>
  <td class="char">&#661;</td>
  <td>U+0295</td>
 </tr>
 <tr>
  <td class="key">RALT '</td>
  <td class="key">[ '</td>
  <td class="char">&#700;</td>
  <td>U+02BC</td>
  <td class="key">RALT ?</td>
  <td class="key">[ ?</td>
  <td class="char">&#660;</td>
  <td>U+0294</td>
 </tr>
</table>

<h3>Punctuation</h3>

<p>Punctuation is typed normally with the exception of the following: </p>

<table>
<thead>
 <tr>
  <th>shift key keystrokes</th>
  <th>keystrokes</td>
  <th>to get</th>
  <th>Unicode</th>
 </tr>
</thead>
  <td class="key">&nbsp;</td>
  <td class="key">&lt; &lt;</td>
  <td class="char">&#x00AB;</td>
  <td>U+00AB</td>
 </tr>
  <td class="key">&nbsp;</td>
  <td class="key">&gt; &gt;</td>
  <td class="char">&#x00BB;</td>
  <td>U+00BB</td>
 </tr>
 <tr>
  <td class="key">&nbsp;</td>
  <td class="key">&lt;</td>
  <td class="char">&#x2039;</td>
  <td>U+2039</td>
 </tr>
 <tr>
  <td class="key">&nbsp;</td>
  <td class="key">&gt;</td>
  <td class="char">&#x203a;</td>
  <td>U+203A</td>
 </tr>
 <tr>
  <td class="key">LALT /</td>
  <td class="key">] /</td>
  <td class="char">/</td>
  <td>U+002F</td>
 </tr>
 <tr>
  <td class="key">LALT &lt;</td>
  <td class="key">] &lt;</td>
  <td class="char">&lt;</td>
  <td>U+003C</td>
 </tr>
 <tr>
  <td class="key">LALT &gt;</td>
  <td class="key">] &gt;</td>
  <td class="char">&gt;</td>
  <td>U+003E</td>
 </tr>
 <tr>
  <td class="key">LALT @</td>
  <td class="key">] @</td>
  <td class="char">@</td>
  <td>U+0040</td>
 </tr>
 <tr>
  <td class="key">LALT [</td>
  <td class="key">] [</td>
  <td class="char">[</td>
  <td>U+005B</td>
 </tr>
 <tr>
  <td class="key">LALT ]</td>
  <td class="key">] ]</td>
  <td class="char">]</td>
  <td>U+005D</td>
 </tr>
 <tr>
  <td class="key">LALT ^</td>
  <td class="key">] ^</td>
  <td class="char">^</td>
  <td>U+005E</td>
 </tr>
 <tr>
  <td class="key">LALT _</td>
  <td class="key">] _</td>
  <td class="char">_</td>
  <td>U+005F</td>
 </tr>
 <tr>
  <td class="key">LALT `</td>
  <td class="key">] `</td>
  <td class="char">`</td>
  <td>U+0060</td>
 </tr>
 <tr>
  <td class="key">LALT {</td>
  <td class="key">] {</td>
  <td class="char">{</td>
  <td>U+007B</td>
 </tr>
 <tr>
  <td class="key">LALT |</td>
  <td class="key">] |</td>
  <td class="char">|</td>
  <td>U+007C</td>
 </tr>
 <tr>
  <td class="key">LALT }</td>
  <td class="key">] }</td>
  <td class="char">}</td>
  <td>U+007D</td>
 </tr>
 <tr>
  <td class="key">LALT ~</td>
  <td class="key">] ~</td>
  <td class="char">~</td>
  <td>U+007E</td>
 </tr>
</table>

<h3>Diacritics</h3>

<h4>Above</h4>


<table>
 <tr>
<thead>
 <tr>
  <th>Type after vowel</th>
  <th>to get</th>
  <th>Unicode</th>
 </tr>
</thead>
 <tr>
  <td class="key">`</td>
  <td class="char">&#9676;&#768;</td>
  <td>U+0300</td>
 </tr>
 <tr>
  <td class="key">/</td>
  <td class="char">&#9676;&#769;</td>
  <td>U+0301</td>
 </tr>
 <tr>
  <td class="key">^</td>
  <td class="char">&#9676;&#770;</td>
  <td>U+0302</td>
 </tr>
 <tr>
  <td class="key">~</td>
  <td class="char">&#9676;&#771;</td>
  <td>U+0303</td>
 </tr>
 <td class="key">_</td>
  <td class="char">&#9676;&#772;</td>
  <td>U+0304</td>
 </tr>
 <td class="key">}</td>
  <td class="char">&#9676;&#775;</td>
  <td>U+0307</td>
 </tr>
 <tr>
  <td class="key">&quot;</td>
  <td class="char">&#9676;&#776;</td>
  <td>U+0308</td>
 </tr>
 <tr>
  <td class="key">{</td>
  <td class="char">&#9676;&#780;</td>
  <td>U+030C</td>
 </tr>
 <tr>
  <td class="key">|</td>
  <td class="char">&#9676;&#781;</td>
  <td>U+030D</td>
 </tr>
 <tr>
  <td class="key">@</td>
  <td class="char">&#9676;&#778;</td>
  <td>U+030A</td>
 </tr>
</table>


<h4>Below</h4>



<table>
 	<thead>
 <tr>
  <th>shift key keystrokes <br>
  (type after vowel)</th>
  <th>deadkey keystrokes<br>
(type after vowel)</th>
  <th>to get</th>
  <th>Unicode</th>
 </tr>
</thead>


 <tr>
  <td class="key">RALT ~</td>
  <td class="key">[ ~</td>
  <td class="char">&#9676;&#816;</td>
  <td>U+0330</td>
 </tr>
 <tr>
  <td class="key">RALT _</td>
  <td class="key">[ _</td>
  <td class="char">&#9676;&#817;</td>
  <td>U+0331</td>
 </tr>
 <tr>
  <td class="key">RALT }</td>
  <td class="key">[ }</td>
  <td class="char">&#9676;&#803;</td>
  <td>U+0323</td>
 </tr>
 <tr>
  <td class="key">RALT |</td>
  <td class="key">[ |</td>
  <td class="char">&#9676;&#809;</td>
  <td>U+0329</td>
 </tr>
 <tr>
  <td class="key">RALT @</td>
  <td class="key">[ @</td>
  <td class="char">&#9676;&#805;</td>
  <td>U+0325</td>
 </tr>
 <tr>
  <td class="key">RALT ,</td>
  <td class="key">[ ,</td>
  <td class="char">&#9676;&#807;</td>
  <td>U+0327</td>
 </tr>
</table>



