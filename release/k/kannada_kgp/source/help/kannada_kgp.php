<?php
  $pagename = 'Kannada KGP keyboard help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
samp { font-family: "Noto Sans Kannada", sans-serif; font-size: 140%; }
kbd { color: black; font: 0.9em sans-serif; border: solid 1px grey; background: #eee; margin: 1px; padding: 1px 4px; border-radius: 3px; }
.inputSequences { border-collapse: collapse; }
.inputSequences th, .inputSequences td { padding: 4px 12px; border-bottom: 1px solid #e1edff; text-align: left; }
END;
  require_once('header.php');
?>

<p>Kannada KGP types Kannada on the Kannada Ganaka Parishat (KGP) phonetic layout, the standard layout of the Government of Karnataka and of the Nudi software. If you learned to type Kannada on Nudi, your fingers already know this keyboard.</p>
<p>Type a consonant, then a vowel key for its vowel sign: <kbd>k</kbd> <kbd>A</kbd> types ಕಾ. Press <kbd>f</kbd> after a consonant to join it to the next one: <kbd>k</kbd> <kbd>n</kbd> <kbd>f</kbd> <kbd>n</kbd> <kbd>w</kbd> types ಕನ್ನಡ.</p>
<h2>Vowels</h2>
<table class="inputSequences"><thead><tr><th>Key</th><th>Letter</th><th>Sign after a consonant</th></tr></thead><tbody>
<tr><td><kbd>a</kbd></td><td><samp>ಅ</samp></td><td><samp></samp></td></tr>
<tr><td><kbd>A</kbd></td><td><samp>ಆ</samp></td><td><samp>ಕಾ</samp></td></tr>
<tr><td><kbd>i</kbd></td><td><samp>ಇ</samp></td><td><samp>ಕಿ</samp></td></tr>
<tr><td><kbd>I</kbd></td><td><samp>ಈ</samp></td><td><samp>ಕೀ</samp></td></tr>
<tr><td><kbd>u</kbd></td><td><samp>ಉ</samp></td><td><samp>ಕು</samp></td></tr>
<tr><td><kbd>U</kbd></td><td><samp>ಊ</samp></td><td><samp>ಕೂ</samp></td></tr>
<tr><td><kbd>R</kbd></td><td><samp>ಋ</samp></td><td><samp>ಕೃ</samp></td></tr>
<tr><td><kbd>e</kbd></td><td><samp>ಎ</samp></td><td><samp>ಕೆ</samp></td></tr>
<tr><td><kbd>E</kbd></td><td><samp>ಏ</samp></td><td><samp>ಕೇ</samp></td></tr>
<tr><td><kbd>Y</kbd></td><td><samp>ಐ</samp></td><td><samp>ಕೈ</samp></td></tr>
<tr><td><kbd>o</kbd></td><td><samp>ಒ</samp></td><td><samp>ಕೊ</samp></td></tr>
<tr><td><kbd>O</kbd></td><td><samp>ಓ</samp></td><td><samp>ಕೋ</samp></td></tr>
<tr><td><kbd>V</kbd></td><td><samp>ಔ</samp></td><td><samp>ಕೌ</samp></td></tr>
<tr><td><kbd>M</kbd></td><td><samp>ಂ</samp></td><td><samp></samp></td></tr>
<tr><td><kbd>H</kbd></td><td><samp>ಃ</samp></td><td><samp></samp></td></tr>
</tbody></table>
<h2>Consonants</h2>
<table class="inputSequences"><thead><tr><th>Keys</th><th>Letters</th></tr></thead><tbody>
<tr><td><kbd>k</kbd> <kbd>K</kbd> <kbd>g</kbd> <kbd>G</kbd> <kbd>Z</kbd></td><td><samp>ಕ ಖ ಗ ಘ ಙ</samp></td></tr>
<tr><td><kbd>c</kbd> <kbd>C</kbd> <kbd>j</kbd> <kbd>J</kbd> <kbd>z</kbd></td><td><samp>ಚ ಛ ಜ ಝ ಞ</samp></td></tr>
<tr><td><kbd>q</kbd> <kbd>Q</kbd> <kbd>w</kbd> <kbd>W</kbd> <kbd>N</kbd></td><td><samp>ಟ ಠ ಡ ಢ ಣ</samp></td></tr>
<tr><td><kbd>t</kbd> <kbd>T</kbd> <kbd>d</kbd> <kbd>D</kbd> <kbd>n</kbd></td><td><samp>ತ ಥ ದ ಧ ನ</samp></td></tr>
<tr><td><kbd>p</kbd> <kbd>P</kbd> <kbd>b</kbd> <kbd>B</kbd> <kbd>m</kbd></td><td><samp>ಪ ಫ ಬ ಭ ಮ</samp></td></tr>
<tr><td><kbd>y</kbd> <kbd>r</kbd> <kbd>l</kbd> <kbd>v</kbd> <kbd>S</kbd> <kbd>x</kbd> <kbd>s</kbd> <kbd>h</kbd> <kbd>L</kbd></td><td><samp>ಯ ರ ಲ ವ ಶ ಷ ಸ ಹ ಳ</samp></td></tr>
</tbody></table>
<h2>Joining letters and rare letters</h2>
<table class="inputSequences"><thead><tr><th>Keys</th><th>Types</th><th></th></tr></thead><tbody>
<tr><td><kbd>k</kbd> <kbd>f</kbd></td><td><samp>ಕ್</samp></td><td>virama</td></tr>
<tr><td><kbd>k</kbd> <kbd>f</kbd> <kbd>x</kbd></td><td><samp>ಕ್ಷ</samp></td><td>f joins the next consonant (ottakshara)</td></tr>
<tr><td><kbd>n</kbd> <kbd>f</kbd> <kbd>f</kbd> <kbd>n</kbd></td><td><samp>ನ್‌ನ</samp></td><td>a second f keeps the virama visible (ZWNJ)</td></tr>
<tr><td><kbd>A</kbd> <kbd>r</kbd> <kbd>F</kbd> <kbd>y</kbd></td><td><samp>ಆರ‍್ಯ</samp></td><td>F after ರ joins it without an arkavattu (ZWJ)</td></tr>
<tr><td><kbd>s</kbd> <kbd>h</kbd> <kbd>F</kbd> <kbd>A</kbd></td><td><samp>ಸಹಆ</samp></td><td>F before a vowel key types the vowel letter, not its sign</td></tr>
<tr><td><kbd>A</kbd> <kbd>f</kbd> <kbd>y</kbd></td><td><samp>ಆ್ಯ</samp></td><td>f after ಅ or ಆ, for the vowel of English words (ಆ್ಯಪಲ್)</td></tr>
<tr><td><kbd>r</kbd> <kbd>X</kbd></td><td><samp>ಱ</samp></td><td>X types the variant of the letter before it</td></tr>
<tr><td><kbd>L</kbd> <kbd>X</kbd></td><td><samp>ೞ</samp></td><td></td></tr>
<tr><td><kbd>j</kbd> <kbd>X</kbd></td><td><samp>ಜ಼</samp></td><td>X after a consonant adds the nukta: ಕ಼ ಖ಼ ಗ಼ ಜ಼ ಡ಼ ಫ಼ ...</td></tr>
<tr><td><kbd>s</kbd> <kbd>X</kbd></td><td><samp>ಽ</samp></td><td>avagraha; a second X types ಸ಼</td></tr>
<tr><td><kbd>n</kbd> <kbd>f</kbd> <kbd>X</kbd></td><td><samp>ೝ</samp></td><td>nakaara pollu</td></tr>
<tr><td><kbd>R</kbd> <kbd>X</kbd></td><td><samp>ೠ</samp></td><td>then ಌ, then ೡ with more X</td></tr>
<tr><td><kbd>k</kbd> <kbd>R</kbd> <kbd>X</kbd></td><td><samp>ಕೄ</samp></td><td>then ೢ, then ೣ with more X</td></tr>
<tr><td><kbd>M</kbd> <kbd>X</kbd></td><td><samp>ಁ</samp></td><td>candrabindu; a second X types ಀ</td></tr>
<tr><td><kbd>H</kbd> <kbd>X</kbd></td><td><samp>ೱ</samp></td><td>jihvamuliya; a second X types ೲ</td></tr>
<tr><td><kbd>Right Alt+M</kbd></td><td><samp>ೳ</samp></td><td>Option+M on a Mac</td></tr>
<tr><td><kbd>Right Alt+O</kbd></td><td><samp>಄</samp></td><td></td></tr>
<tr><td><kbd>Right Alt+.</kbd></td><td><samp>।</samp></td><td>Right Alt+Shift+. types ॥</td></tr>
<tr><td><kbd>1</kbd> <kbd>2</kbd> <kbd>3</kbd></td><td><samp>೧೨೩</samp></td><td>digits are Kannada</td></tr>
<tr><td><kbd>\</kbd> <kbd>1</kbd></td><td><samp>1</samp></td><td>a backslash before a letter or digit types it in English</td></tr>
</tbody></table>

<h2>Desktop layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'></div>

<h2>Phone and tablet layout</h2>
<p>On a phone or tablet the keys sit where KGP puts them, with the English key letter in the corner. Press and hold a key for its Shift letter and the rarer letters: ಕ gives ಖ ಕ಼ ಖ಼, ಮ gives ಂ ಁ ಀ ೳ, ನ gives ಣ ೝ, ರ gives ಱ ಋ, ಲ gives ಳ ೞ, and ◌್ gives the ZWJ key. Tap ◌್ twice to keep a virama visible. Hold a digit for its English digit.</p>
<div id='osk-phone' data-states='default shift numeric'></div>
