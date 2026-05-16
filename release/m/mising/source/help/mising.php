<?php 
  $pagename = 'Mising (Latin) Keyboard Help';
  $pagetitle = $pagename;
  // Header
  require_once('header.php');
?>

<style>
  /* ── Base ── */
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    color: #1a1a1a;
    background: #ffffff;
    max-width: 860px;
    margin: 0 auto;
    padding: 24px 28px 48px;
    line-height: 1.6;
  }

  /* ── Header ── */
  .kb-header {
    border-bottom: 3px solid #1F5C99;
    padding-bottom: 12px;
    margin-bottom: 24px;
  }
  .kb-header h1 {
    font-size: 22px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 2px;
  }
  .kb-header .subtitle {
    font-size: 13px;
    color: #666;
    font-style: italic;
  }

  /* ── Part headings ── */
  .part-heading {
    font-size: 17px;
    font-weight: 700;
    color: #1F5C99;
    border-bottom: 2px solid #D9E2F3;
    padding-bottom: 5px;
    margin: 32px 0 14px;
  }

  /* ── Section headings ── */
  h3 {
    font-size: 14px;
    font-weight: 700;
    color: #1F5C99;
    margin: 22px 0 7px;
  }

  /* ── Body text ── */
  p { margin-bottom: 9px; font-size: 13.5px; }

  .note {
    font-size: 12.5px;
    color: #444;
    margin-bottom: 8px;
  }

  /* ── Reference tables ── */
  table.ref {
    width: 100%;
    border-collapse: collapse;
    margin: 8px 0 18px;
    font-size: 13px;
  }
  table.ref th {
    background: #D9E2F3;
    color: #1a1a1a;
    font-weight: 700;
    padding: 6px 10px;
    border: 1px solid #aaa;
    text-align: left;
  }
  table.ref td {
    padding: 5px 10px;
    border: 1px solid #ccc;
    vertical-align: middle;
  }
  table.ref tr:nth-child(even) td { background: #F4F7FC; }
  table.ref td.key {
    color: #2E74B5;
    font-weight: 700;
    white-space: nowrap;
  }
  table.ref td.out {
    font-weight: 700;
    font-size: 14px;
  }
  table.ref td.long {
    color: #7A5C00;
    font-weight: 700;
  }

  /* ── Touch keyboard grid ── */
  .kb-layer-label {
    font-size: 12px;
    font-weight: 700;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin: 14px 0 5px;
  }

  .kb-grid {
    display: flex;
    flex-direction: column;
    gap: 4px;
    margin-bottom: 10px;
    background: #c8cdd6;
    border: 1px solid #999;
    border-radius: 6px;
    padding: 6px;
    width: fit-content;
    max-width: 100%;
  }

  .kb-row {
    display: flex;
    gap: 4px;
    justify-content: center;
  }

  .key {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #EEF3FA;
    border: 1px solid #9AABCC;
    border-bottom: 3px solid #7A90B8;
    border-radius: 4px;
    font-size: 13px;
    font-weight: 700;
    color: #1a1a1a;
    min-width: 38px;
    height: 38px;
    padding: 0 4px;
    cursor: default;
    white-space: nowrap;
    user-select: none;
  }

  .key.special {
    background: #C9D3E8;
    border-color: #8090B8;
    border-bottom-color: #5A6898;
    font-size: 11px;
    font-weight: 700;
    color: #333;
    font-style: italic;
  }

  .key.space-key {
    min-width: 200px;
    background: #D9E0EF;
    font-size: 11px;
    font-style: italic;
    color: #555;
  }

  .key.wide-1-5 { min-width: 60px; }
  .key.wide-2   { min-width: 80px; }

  /* subkey indicator dot */
  .key .sk-dot {
    font-size: 7px;
    vertical-align: super;
    color: #2E74B5;
    margin-left: 2px;
  }

  /* ── Subkey legend ── */
  .sk-legend {
    font-size: 12px;
    color: #2E74B5;
    margin: -4px 0 10px;
  }

  /* ── Footer ── */
  .kb-footer {
    margin-top: 36px;
    border-top: 1px solid #ccc;
    padding-top: 8px;
    font-size: 11.5px;
    color: #888;
    font-style: italic;
  }
</style>

<div class="kb-header">
  <h1>Mising Keyboard</h1>
  <div class="subtitle">Version 1.0 &nbsp; &nbspKeyman Keyboard Help</div>
</div>

<p>This keyboard was specifically developed for the Mising community to provide a native digital voice. This layout replaces those generic English interfaces with a native-first design, allowing for natural, fluid communication in the Mising language without compromise. Technical Features MAK Orthography Support: Fully accommodates the standard Mising Agom K&eacute;bang (MAK) orthography (modified Roman script), ensuring all community standards are met. Linguistic Precision: Optimised for both everyday digital use and rigorous linguistic documentation. Data Integrity: Specifically engineered to prevent character fragmentation, ensuring clean data entry for building professional pronunciation dictionaries and annotating acoustic data. Intuitive Design: Built upon a familiar QWERTY foundation to maintain an easy learning curve for all users.</p>

<div class="part-heading">Part 1 &mdash; Desktop / Laptop Keyboard</div>

<p>This keyboard uses a standard QWERTY base. All Roman letters remain in their
normal positions. Four QWERTY keys not used in Mising Agom K&eacute;bang (MAK)
orthography &mdash; <strong>Q, X, V, C</strong> &mdash; are reassigned to frequently
occurring Mising phonemes. The original Latin letters
<em>q, x, v, c</em> remain accessible via the <strong>AltGr</strong> (Right Alt)
recovery layer.</p>

<p>Long vowels are entered with a <strong>dead key</strong>: press
<strong>Semicolon&nbsp;(;)</strong> to activate length mode, then press the vowel.
The semicolon itself is recovered via <strong>AltGr+;</strong>.</p>

<h3>1.1 &nbsp; Consonants</h3>
<p class="note">Standard MAK consonants are typed directly &mdash; no modifier required.</p>
<table class="ref">
  <tr><th>Output</th><th>Key</th><th>Description</th></tr>
  <tr><td class="out">p / P</td><td class="key">p &nbsp;/&nbsp; Shift+P</td><td>Bilabial plosive (voiceless)</td></tr>
  <tr><td class="out">b / B</td><td class="key">b &nbsp;/&nbsp; Shift+B</td><td>Bilabial plosive (voiced)</td></tr>
  <tr><td class="out">t / T</td><td class="key">t &nbsp;/&nbsp; Shift+T</td><td>Alveolar plosive (voiceless)</td></tr>
  <tr><td class="out">d / D</td><td class="key">d &nbsp;/&nbsp; Shift+D</td><td>Alveolar plosive (voiced)</td></tr>
  <tr><td class="out">k / K</td><td class="key">k &nbsp;/&nbsp; Shift+K</td><td>Velar plosive (voiceless)</td></tr>
  <tr><td class="out">g / G</td><td class="key">g &nbsp;/&nbsp; Shift+G</td><td>Velar plosive (voiced)</td></tr>
  <tr><td class="out">s / S</td><td class="key">s &nbsp;/&nbsp; Shift+S</td><td>Alveolar fricative (voiceless)</td></tr>
  <tr><td class="out">j / J</td><td class="key">j &nbsp;/&nbsp; Shift+J</td><td>Palatal affricate / approximant</td></tr>
  <tr><td class="out">m / M</td><td class="key">m &nbsp;/&nbsp; Shift+M</td><td>Bilabial nasal</td></tr>
  <tr><td class="out">n / N</td><td class="key">n &nbsp;/&nbsp; Shift+N</td><td>Alveolar nasal</td></tr>
  <tr><td class="out">r / R</td><td class="key">r &nbsp;/&nbsp; Shift+R</td><td>Alveolar trill / flap</td></tr>
  <tr><td class="out">l / L</td><td class="key">l &nbsp;/&nbsp; Shift+L</td><td>Alveolar lateral approximant</td></tr>
  <tr><td class="out">y / Y</td><td class="key">y &nbsp;/&nbsp; Shift+Y</td><td>Palatal approximant</td></tr>
  <tr><td class="out">w / W</td><td class="key">w &nbsp;/&nbsp; Shift+W</td><td>Labio-velar approximant</td></tr>
  <tr><td class="out">h / H</td><td class="key">h &nbsp;/&nbsp; Shift+H</td><td>Glottal fricative</td></tr>
  <tr><td class="out">f / F</td><td class="key">f &nbsp;/&nbsp; Shift+F</td><td>Labiodental fricative (loanwords)</td></tr>
  <tr><td class="out">z / Z</td><td class="key">z &nbsp;/&nbsp; Shift+Z</td><td>Alveolar fricative voiced (loanwords)</td></tr>
</table>

<h3>1.2 &nbsp; Digraph Consonants &mdash; Reassigned Keys (Q &amp; X)</h3>
<p class="note">Two MAK digraph consonants are produced with a single keystroke.</p>
<table class="ref">
  <tr><th>Output</th><th>Key</th><th>Phonetic value</th></tr>
  <tr><td class="out">ng</td><td class="key">q</td><td>Velar nasal /&#331;/ &mdash; assigned to Q</td></tr>
  <tr><td class="out">Ng</td><td class="key">Shift+Q</td><td>Capitalised velar nasal</td></tr>
  <tr><td class="out">ny</td><td class="key">x</td><td>Palatal nasal /&#626;/ &mdash; assigned to X</td></tr>
  <tr><td class="out">Ny</td><td class="key">Shift+X</td><td>Capitalised palatal nasal</td></tr>
</table>

<h3>1.3 &nbsp; Short Vowels</h3>
<p class="note">Standard MAK vowels on natural QWERTY keys. Two Mising central vowels on V and C.</p>
<table class="ref">
  <tr><th>Output</th><th>Key</th><th>IPA / Description</th></tr>
  <tr><td class="out">a / A</td><td class="key">a &nbsp;/&nbsp; Shift+A</td><td>/a/ &mdash; open front unrounded</td></tr>
  <tr><td class="out">e / E</td><td class="key">e &nbsp;/&nbsp; Shift+E</td><td>/e/ &mdash; close-mid front unrounded</td></tr>
  <tr><td class="out">i / I</td><td class="key">i &nbsp;/&nbsp; Shift+I</td><td>/i/ &mdash; close front unrounded</td></tr>
  <tr><td class="out">o / O</td><td class="key">o &nbsp;/&nbsp; Shift+O</td><td>/o/ &mdash; close-mid back rounded</td></tr>
  <tr><td class="out">u / U</td><td class="key">u &nbsp;/&nbsp; Shift+U</td><td>/u/ &mdash; close back rounded</td></tr>
  <tr><td class="out">&eacute; / &Eacute;</td><td class="key">v &nbsp;/&nbsp; Shift+V</td><td>/&#604;/ &mdash; mid central vowel &mdash; assigned to V</td></tr>
  <tr><td class="out">&iacute; / &Iacute;</td><td class="key">c &nbsp;/&nbsp; Shift+C</td><td>/&#616;/ &mdash; close central unrounded &mdash; assigned to C</td></tr>
</table>

<h3>1.4 &nbsp; Long Vowels </h3>
<p>Press <strong>Semicolon&nbsp;(;)</strong> first, then the vowel key. For uppercase long vowels,
press Semicolon, then <strong>Shift+vowel</strong>.</p>
<table class="ref">
  <tr><th>Output</th><th>Keystroke sequence</th><th>Notes</th></tr>
  <tr><td class="out">a:</td><td class="key">; &rarr; a</td><td>Long /a:/</td></tr>
  <tr><td class="out">e:</td><td class="key">; &rarr; e</td><td>Long /e:/</td></tr>
  <tr><td class="out">i:</td><td class="key">; &rarr; i</td><td>Long /i:/</td></tr>
  <tr><td class="out">o:</td><td class="key">; &rarr; o</td><td>Long /o:/</td></tr>
  <tr><td class="out">u:</td><td class="key">; &rarr; u</td><td>Long /u:/</td></tr>
  <tr><td class="out">&eacute;:</td><td class="key">; &rarr; v</td><td>Long central /&#604;:/</td></tr>
  <tr><td class="out">&iacute;:</td><td class="key">; &rarr; c</td><td>Long central /&#616;:/</td></tr>
  <tr><td class="out">A:</td><td class="key">; &rarr; Shift+A</td><td>Long /a:/ uppercase</td></tr>
  <tr><td class="out">E:</td><td class="key">; &rarr; Shift+E</td><td>Long /e:/ uppercase</td></tr>
  <tr><td class="out">I:</td><td class="key">; &rarr; Shift+I</td><td>Long /i:/ uppercase</td></tr>
  <tr><td class="out">O:</td><td class="key">; &rarr; Shift+O</td><td>Long /o:/ uppercase</td></tr>
  <tr><td class="out">U:</td><td class="key">; &rarr; Shift+U</td><td>Long /u:/ uppercase</td></tr>
  <tr><td class="out">&Eacute;:</td><td class="key">; &rarr; Shift+V</td><td>Long /&#604;:/ uppercase</td></tr>
  <tr><td class="out">&Iacute;:</td><td class="key">; &rarr; Shift+C</td><td>Long /&#616;:/ uppercase</td></tr>
</table>

<h3>1.5 &nbsp; AltGr Recovery Layer</h3>
<p class="note">Hold <strong>Right Alt (AltGr)</strong> to recover the original Latin letters and semicolon/colon.</p>
<table class="ref">
  <tr><th>Output</th><th>Keystroke</th><th>Purpose</th></tr>
  <tr><td class="out">q / Q</td><td class="key">AltGr+Q &nbsp;/&nbsp; AltGr+Shift+Q</td><td>Latin q (loanwords, linguistic notation)</td></tr>
  <tr><td class="out">x / X</td><td class="key">AltGr+X &nbsp;/&nbsp; AltGr+Shift+X</td><td>Latin x</td></tr>
  <tr><td class="out">v / V</td><td class="key">AltGr+V &nbsp;/&nbsp; AltGr+Shift+V</td><td>Latin v</td></tr>
  <tr><td class="out">c / C</td><td class="key">AltGr+C &nbsp;/&nbsp; AltGr+Shift+C</td><td>Latin c</td></tr>
  <tr><td class="out">;</td><td class="key">AltGr+;</td><td>Semicolon (standard punctuation)</td></tr>
  <tr><td class="out">:</td><td class="key">AltGr+Shift+;</td><td>Colon (not a length marker)</td></tr>
</table>

<h3>1.6 &nbsp; Apostrophe / Glottal Stop Marker</h3>
<table class="ref">
  <tr><th>Output</th><th>Key</th><th>Description</th></tr>
  <tr><td class="out">&#x2019;</td><td class="key">' (apostrophe key)</td><td>Smart right single quotation mark (U+2019) &mdash; used as glottal stop marker in MAK transcription</td></tr>
</table>

<h3>1.7 &nbsp; Number Row and Standard Punctuation</h3>
<p class="note">All digits and punctuation follow the standard QWERTY layout without modification.</p>
<table class="ref">
  <tr><th>Output</th><th>Key</th><th>Description</th></tr>
  <tr><td class="out">1 &ndash; 0</td><td class="key">1 &ndash; 0</td><td>Digits</td></tr>
  <tr><td class="out">! @ # $ % ^ &amp; * ( )</td><td class="key">Shift + 1&ndash;0</td><td>Standard shift-row symbols</td></tr>
  <tr><td class="out">- &nbsp;/&nbsp; _</td><td class="key">- &nbsp;/&nbsp; Shift+-</td><td>Hyphen / underscore</td></tr>
  <tr><td class="out">= &nbsp;/&nbsp; +</td><td class="key">= &nbsp;/&nbsp; Shift+=</td><td>Equals / plus</td></tr>
  <tr><td class="out">[ { &nbsp;&nbsp;] }</td><td class="key">[ / Shift+[ &nbsp;&nbsp;&nbsp; ] / Shift+]</td><td>Brackets / braces</td></tr>
  <tr><td class="out">\ &nbsp;/&nbsp; |</td><td class="key">\ &nbsp;/&nbsp; Shift+\</td><td>Backslash / pipe</td></tr>
  <tr><td class="out">, &nbsp;/&nbsp; &lt;</td><td class="key">, &nbsp;/&nbsp; Shift+,</td><td>Comma / less-than</td></tr>
  <tr><td class="out">. &nbsp;/&nbsp; &gt;</td><td class="key">. &nbsp;/&nbsp; Shift+.</td><td>Full stop / greater-than</td></tr>
  <tr><td class="out">/ &nbsp;/&nbsp; ?</td><td class="key">/ &nbsp;/&nbsp; Shift+/</td><td>Forward slash / question mark</td></tr>
  <tr><td class="out">` &nbsp;/&nbsp; ~</td><td class="key">` &nbsp;/&nbsp; Shift+`</td><td>Grave accent / tilde</td></tr>
</table>


<div class="part-heading">Part 2 &mdash; Phone / Touch Keyboard</div>

<p>The Mising touch keyboard has four layers: <strong>Default</strong> (lowercase),
<strong>Shift</strong> (uppercase), <strong>Caps</strong> (caps lock), and
<strong>Numeric</strong>. Long vowels are accessed by <strong>holding (long-pressing)</strong>
the vowel key to reveal a subkey popup. The period key also carries a subkey strip for
common punctuation.</p>

<p class="sk-legend">&#9679; A small dot on a key in the diagrams below indicates that a
long-press subkey is available.</p>

<h3>2.1 &nbsp; Default Layer (Lowercase)</h3>
<p class="note">This is the layer shown when the keyboard first opens.</p>

<div class="kb-grid">
  <div class="kb-row">
    <div class="key">ng</div>
    <div class="key">w</div>
    <div class="key">e<span class="sk-dot">&#9679;</span></div>
    <div class="key">r</div>
    <div class="key">t</div>
    <div class="key">y</div>
    <div class="key">u<span class="sk-dot">&#9679;</span></div>
    <div class="key">i<span class="sk-dot">&#9679;</span></div>
    <div class="key">o<span class="sk-dot">&#9679;</span></div>
    <div class="key">p</div>
  </div>
  <div class="kb-row">
    <div class="key">a<span class="sk-dot">&#9679;</span></div>
    <div class="key">s</div>
    <div class="key">d</div>
    <div class="key">f</div>
    <div class="key">g</div>
    <div class="key">h</div>
    <div class="key">j</div>
    <div class="key">k</div>
    <div class="key">l</div>
  </div>
  <div class="kb-row">
    <div class="key special wide-1-5">&#x21E7; Shift</div>
    <div class="key">z</div>
    <div class="key">ny</div>
    <div class="key">&iacute;<span class="sk-dot">&#9679;</span></div>
    <div class="key">&eacute;<span class="sk-dot">&#9679;</span></div>
    <div class="key">b</div>
    <div class="key">n</div>
    <div class="key">m</div>
    <div class="key">.<span class="sk-dot">&#9679;</span></div>
    <div class="key special wide-1-5">&#x232B; BkSp</div>
  </div>
  <div class="kb-row">
    <div class="key special wide-1-5">123</div>
    <div class="key special">&#x2630; Menu</div>
    <div class="key special space-key">Space</div>
    <div class="key special wide-1-5">&#x21B5; Enter</div>
  </div>
</div>

<h3>2.2 &nbsp; Shift Layer (Uppercase)</h3>
<p class="note">Active after one tap of &#x21E7;&nbsp;Shift. Tap &#x21E7;&nbsp;Shift again to enter Caps lock.</p>

<div class="kb-grid">
  <div class="kb-row">
    <div class="key">Ng</div>
    <div class="key">W</div>
    <div class="key">E<span class="sk-dot">&#9679;</span></div>
    <div class="key">R</div>
    <div class="key">T</div>
    <div class="key">Y</div>
    <div class="key">U<span class="sk-dot">&#9679;</span></div>
    <div class="key">I<span class="sk-dot">&#9679;</span></div>
    <div class="key">O<span class="sk-dot">&#9679;</span></div>
    <div class="key">P</div>
  </div>
  <div class="kb-row">
    <div class="key">A<span class="sk-dot">&#9679;</span></div>
    <div class="key">S</div>
    <div class="key">D</div>
    <div class="key">F</div>
    <div class="key">G</div>
    <div class="key">H</div>
    <div class="key">J</div>
    <div class="key">K</div>
    <div class="key">L</div>
  </div>
  <div class="kb-row">
    <div class="key special wide-1-5">&#x21E7; Shift</div>
    <div class="key">Z</div>
    <div class="key">Ny</div>
    <div class="key">&Iacute;<span class="sk-dot">&#9679;</span></div>
    <div class="key">&Eacute;<span class="sk-dot">&#9679;</span></div>
    <div class="key">B</div>
    <div class="key">N</div>
    <div class="key">M</div>
    <div class="key">.</div>
    <div class="key special wide-1-5">&#x232B; BkSp</div>
  </div>
  <div class="kb-row">
    <div class="key special wide-1-5">123</div>
    <div class="key special">&#x2630; Menu</div>
    <div class="key special space-key">Space</div>
    <div class="key special wide-1-5">&#x21B5; Enter</div>
  </div>
</div>

<h3>2.3 &nbsp; Numeric Layer</h3>
<p class="note">Activated by tapping <strong>123</strong>. Tap <strong>abc</strong> to return to the Default layer.</p>

<div class="kb-grid">
  <div class="kb-row">
    <div class="key">1</div>
    <div class="key">2</div>
    <div class="key">3</div>
    <div class="key">4</div>
    <div class="key">5</div>
    <div class="key">6</div>
    <div class="key">7</div>
    <div class="key">8</div>
    <div class="key">9</div>
    <div class="key">0</div>
  </div>
  <div class="kb-row">
    <div class="key">$</div>
    <div class="key">@</div>
    <div class="key">#</div>
    <div class="key">%</div>
    <div class="key">&amp;</div>
    <div class="key">_</div>
    <div class="key">=</div>
    <div class="key">|</div>
    <div class="key">\</div>
  </div>
  <div class="kb-row">
    <div class="key wide-1-5">[<span class="sk-dot">&#9679;</span></div>
    <div class="key">(</div>
    <div class="key">)</div>
    <div class="key wide-1-5">]<span class="sk-dot">&#9679;</span></div>
    <div class="key">+</div>
    <div class="key">-</div>
    <div class="key">*</div>
    <div class="key">/</div>
    <div class="key special wide-1-5">&#x232B; BkSp</div>
  </div>
  <div class="kb-row">
    <div class="key special wide-1-5">abc</div>
    <div class="key special">&#x2630; Menu</div>
    <div class="key special space-key">Space</div>
    <div class="key special wide-1-5">&#x21B5; Enter</div>
  </div>
</div>

<h3>2.4 &nbsp; Long-Vowel Subkeys (Hold / Long-Press)</h3>
<p>On the Default layer, hold any vowel key to reveal its long form. On the Shift layer,
the same applies for uppercase long vowels.</p>
<table class="ref">
  <tr><th>Key</th><th>Tap &rarr; output</th><th>Hold &rarr; subkey</th><th>IPA (short / long)</th></tr>
  <tr><td class="out">e</td><td class="key">e</td><td class="long">e:</td><td>/e/ &mdash; /e:/</td></tr>
  <tr><td class="out">u</td><td class="key">u</td><td class="long">u:</td><td>/u/ &mdash; /u:/</td></tr>
  <tr><td class="out">i</td><td class="key">i</td><td class="long">i:</td><td>/i/ &mdash; /i:/</td></tr>
  <tr><td class="out">o</td><td class="key">o</td><td class="long">o:</td><td>/o/ &mdash; /o:/</td></tr>
  <tr><td class="out">a</td><td class="key">a</td><td class="long">a:</td><td>/a/ &mdash; /a:/</td></tr>
  <tr><td class="out">&iacute; &nbsp;(C key)</td><td class="key">&iacute;</td><td class="long">&iacute;:</td><td>/&#616;/ &mdash; /&#616;:/</td></tr>
  <tr><td class="out">&eacute; &nbsp;(V key)</td><td class="key">&eacute;</td><td class="long">&eacute;:</td><td>/&#604;/ &mdash; /&#604;:/</td></tr>
  <tr><td class="out">E (Shift)</td><td class="key">E</td><td class="long">E:</td><td>/e:/ uppercase</td></tr>
  <tr><td class="out">U (Shift)</td><td class="key">U</td><td class="long">U:</td><td>/u:/ uppercase</td></tr>
  <tr><td class="out">I (Shift)</td><td class="key">I</td><td class="long">I:</td><td>/i:/ uppercase</td></tr>
  <tr><td class="out">O (Shift)</td><td class="key">O</td><td class="long">O:</td><td>/o:/ uppercase</td></tr>
  <tr><td class="out">A (Shift)</td><td class="key">A</td><td class="long">A:</td><td>/a:/ uppercase</td></tr>
  <tr><td class="out">&Iacute; (Shift)</td><td class="key">&Iacute;</td><td class="long">&Iacute;:</td><td>/&#616;:/ uppercase</td></tr>
  <tr><td class="out">&Eacute; (Shift)</td><td class="key">&Eacute;</td><td class="long">&Eacute;:</td><td>/&#604;:/ uppercase</td></tr>
</table>

<h3>2.5 &nbsp; Period Key Subkeys (Hold / Long-Press)</h3>
<p class="note">Hold the period key <strong>(.)</strong> on the Default or Shift layer to access these characters.</p>
<table class="ref">
  <tr><th>Subkey output</th><th>Character name</th><th>Notes</th></tr>
  <tr><td class="out">,</td><td>Comma</td><td>Standard comma</td></tr>
  <tr><td class="out">!</td><td>Exclamation mark</td><td>Uses Shift layer</td></tr>
  <tr><td class="out">?</td><td>Question mark</td><td>Uses Shift layer</td></tr>
  <tr><td class="out">&#x2019;</td><td>Apostrophe</td><td>Smart right single quote / glottal stop marker (U+2019)</td></tr>
  <tr><td class="out">"</td><td>Double quote</td><td>Uses Shift layer</td></tr>
  <tr><td class="out">\</td><td>Backslash</td><td></td></tr>
  <tr><td class="out">:</td><td>Colon</td><td>Uses Shift layer</td></tr>
  <tr><td class="out">;</td><td>Semicolon</td><td></td></tr>
</table>

<h3>2.6 &nbsp; Bracket Key Subkeys (Numeric Layer)</h3>
<p class="note">Hold <strong>[</strong> or <strong>]</strong> on the Numeric layer for additional bracket characters.</p>
<table class="ref">
  <tr><th>Hold key</th><th>Subkeys available</th></tr>
  <tr><td class="out">[</td><td class="key">&#xAB; &nbsp;&nbsp; &lt; &nbsp;&nbsp; {</td></tr>
  <tr><td class="out">]</td><td class="key">&#xBB; &nbsp;&nbsp; &gt; &nbsp;&nbsp; }</td></tr>
</table>

<h3>2.7 &nbsp; Layer Navigation Summary</h3>
<table class="ref">
  <tr><th>Action</th><th>Result</th><th>Notes</th></tr>
  <tr><td>Tap &#x21E7;&nbsp;Shift (on Default)</td><td>Switch to Shift layer</td><td>One more tap of Shift enters Caps lock</td></tr>
  <tr><td>Tap &#x21E7;&nbsp;Shift (on Shift)</td><td>Switch to Caps layer</td><td>All letters uppercase; long vowels unavailable in Caps</td></tr>
  <tr><td>Tap &#x21E7;&nbsp;Shift (on Caps)</td><td>Return to Default layer</td><td></td></tr>
  <tr><td>Tap 123</td><td>Switch to Numeric layer</td><td>Available from all letter layers</td></tr>
  <tr><td>Tap abc (on Numeric)</td><td>Return to Default layer</td><td></td></tr>
  <tr><td>Tap &#x2630;&nbsp;Menu</td><td>Open Keyman menu</td><td>Language switch, keyboard settings</td></tr>
</table>

<div class="kb-footer">
  Mising (Latin) Keyboard v1.0 &nbsp;&bull;&nbsp;
  Developed by Vivian Pegu &nbsp;&bull;&nbsp;
  Copyright &copy; Vivian Pegu &nbsp;&bull;&nbsp;
  Optimised for MAK (Mising Agom K&eacute;bang) orthography
</div> 