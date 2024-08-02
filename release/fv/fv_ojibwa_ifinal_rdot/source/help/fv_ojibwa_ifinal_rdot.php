<?php 
  $pagename = 'ᐊᓂᔑᓇᐯᒧᐏᣙ (Ojibwa, i-finals, right w-dot) Keyboard Help';
  $pagetitle = 'ᐊᓂᔑᓇᐯᒧᐏᣙ (Ojibwa, i-finals, right w-dot) Keyboard Help';
  $pagestyle = <<<END
 
table.keyboard-layer {
	margin: 12px;
	border-collapse:collapse;
	font-family: system-ui, -apple-system, "Segoe UI", Roboto, Tahoma, Euphemia, "Euphemia UCAS", "Aboriginal Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  }
  table.keyboard-layer,
  table.keyboard-layer td,
  table.keyboard-layer th { border: 1px solid #888; }
  table.keyboard-layer td {
	min-width: 1em;
	padding: 5px;
	text-align: center;
  }
  td.keyboard-layer__special { background-color: #fcc; }
  td.keyboard-layer__empty { background-color: #888; }
END;

  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
    This keyboard is designed for the <b>ᐊᓂᔑᓇᐯᒧᐏᣙ</b> language of the Eastern Subarctic region of Canada.
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below),
    please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<img src="fv_ojibwa_ifinal_rdot_U_.png" alt="ᐊᓂᔑᓇᐯᒧᐏᣙ" width="514" height="198" /></h2>
<ul>
	<li>The on-screen keyboard shows each syllable in their final form and in their e-orientation, or in their short and long form (vowels).</li>
	<li>The syllabics used to write ᐊᓂᔑᓇᐯᒧᐏᣙ (Ojibwa) are typed primarily by writing their long-vowel equivalents, with a few exceptions. See <a href=Ojibwa_ifinal_rdot.pdf>this document</a> for a full list of how to type each syllable with this keyboard, and all of the special key combinations.
		<ul>
			<li>By typing a single consonant or a key that's assigned to a consonant, the syllable final form will appear on screen. Following the consonant with a vowel will change the syllable final into its full form in the orientation corresponding with the vowel typed.
				<ul>
					<li>Typing the <kbd>k</kbd> or <kbd>g</kbd> key outputs <b>ᣖ</b>. If the <kbd>a</kbd> key is typed after, it will change to <b>ᑲ</b>.</li>
				</ul>
			</li>
			<li>To type a long vowel / add the top dot, type the vowel twice.
				<ul>
					<li><b>ᑳ</b> is typed <b>kaa</b> or <b>gaa</b></li>
				</ul>
			</li>
			<li>To add the w-dot, type the w after the first consonant.
				<ul>
					<li><b>ᐃᣖᐍ</b> is typed <b>ik[we</b> or <b>ig[we</b></li>
				</ul>
			</li>
			<li>The syllabics sets for sh- / zh- (ᔐᔑᔓᔕᔥ), ch- (ᒉᒋᒍᒐᒡ), and th- (ᕞᕠᕤᕦᕪ) are typed by <kbd>Shift</kbd> + the first letter of each sound (s, z, and t).
				<ul>
					<li><b>ᐊᓂᔑᓇᐯᒧᐏᣙ</b> is typed <b>aniSinabemowin</b> or <b>aniSinapemowin</b></li>
					<li><b>ᒌᒫᣙ</b> (pointed) is typed <b>Ciimaan</b> or <b>jiimaan</b></li>
					<li><b>ᒋᒪᣙ</b> (unpointed) is typed <b>Ciman</b> or <b>jiman</b></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>In the case of a vowel immediately after a syllable final or two vowels that need to be side by side, use the <b>left bracket key</b> <kbd>[</kbd> to keep the syllables separate.
		<ul>
			<li><b>ᐋ</b> is typed <b>aa</b></li>
			<li><b>ᐊᐊ</b> is typed <b>a[a</b></li>
			<li><b>ᐃᑵ</b> (pointed) is typed <b>ikwe</b> or <b>igwe</b></li>
			<li><b>ᐃᣖᐍ</b> (pointed) is typed <b>ik[we</b> or <b>ig[we</b></li>
		</ul>
	</li>
	<p></p>

<h2>Punctuation</h2>
	<ul>
		<li>A standalone above dot indicating vowel length can be typed with the Backquote key <kbd>`</kbd></li>
		<li>A standalone w-dot can be typed with the q key <kbd>q</kbd>
			<ul>
				<li><b>NOTE:</b> the dot indicating a long vowel and the w-dot do not need to be typed for the majority of syllables on the keyboard. They are provided as an option for syllables that do not have a single character that contains the syllable and one or both dots, ie; ᕙᐧ.</li>
			</ul>
		</li>
		<li><b>᙮</b> is typed with the period key <kbd>.</kbd></li>
		<li>single guillement: ‹ <kbd>Right-Alt</kbd>+<kbd>;</kbd> — › <kbd>Right-Alt</kbd>+<kbd>'</kbd></li>
		<li>double guillemets: « <kbd>Shift</kbd>+<kbd>Right-Alt</kbd>+<kbd>;</kbd> — » <kbd>Shift</kbd>+<kbd>Right-Alt</kbd>+<kbd>'</kbd></li>
		<li>Any modified punctuation can be typed using <b>Right-Alt</b> (Windows) or <b>Option</b> (Mac) + the original key.
			<ul>
				<li><b>.</b> is typed <kbd>Right-Alt</kbd>+<kbd>.</kbd> / <kbd>⌥ Option</kbd>+<kbd>.</kbd></li>
				<li><b>-</b> is typed <kbd>Right-Alt</kbd>+<kbd>-</kbd> / <kbd>⌥ Option</kbd>+<kbd>-</kbd></li>
				<li><b>+</b> is typed <kbd>Shift</kbd>+<kbd>Right-Alt</kbd>+<kbd>=</kbd> / <kbd>Shift</kbd>+<kbd>⌥ Option</kbd>+<kbd>=</kbd></li>
			</ul>
		</li>
		<li>All English letters can be typed by pressing <kbd>Right-Alt</kbd> (Windows) / <kbd>⌥ Option</kbd> (Mac) followed by the letter(s) you wish to type.</li>
		<li>All uppercase English letters can be typed by pressing <kbd>Right-Alt</kbd> (Windows) / <kbd>⌥ Option</kbd> (Mac) followed by the letter(s) you wish to type.</li>
	</ul>

<h2>Unicode Fonts</h2>
<p>The following fonts have been installed on your computer: <strong>Aboriginal Serif, BC Sans.</strong> Please use this
    font when typing in your language as it has been specially built to represent your language as accurately as
    possible. </p>
<h3><a href="http://www.languagegeek.com/font/fontdownload.html">Download the latest version of Aboriginal
        Serif</a></h3>
<h3><a
        href="https://www2.gov.bc.ca/gov/content/governments/services-for-government/policies-procedures/bc-visual-identity/bc-sans">Download
        the latest version of BC Sans</a></h3>

<h2>Notes on touch layout</h2>
<div class='cree'>
    <h3>Unshifted</h3>
    <table class="keyboard-layer">
        <tr>
            <td align='center'>ᐃ</td>
            <td align='center'>ᐱ ᕕ</td>
            <td align='center'>ᑎ ᕠ</td>
            <td align='center'>ᑭ</td>
            <td align='center'>ᒋ</td>
            <td align='center'>ᒥ</td>
            <td align='center'>ᓂ ᓕ ᕆ</td>
            <td align='center'>ᓯ</td>
            <td align='center'>ᔑ</td>
            <td align='center'>ᔨ</td>
        </tr>
        <tr>
            <td align='center'>ᐊ</td>
            <td align='center'>ᐸ ᕙ</td>
            <td align='center'>ᑕ ᕦ</td>
            <td align='center'>ᑲ</td>
            <td align='center'>ᒐ</td>
            <td align='center'>ᒪ</td>
            <td align='center'>ᓇ ᓚ ᕋ</td>
            <td align='center'>ᓴ</td>
            <td align='center'>ᔕ</td>
            <td align='center'>ᔭ</td>
        </tr>
        <tr>
            <td align='center'>⇧</td>
            <td align='center'>ᣔ ᕝ</td>
            <td align='center'>ᣕ ᕪ</td>
            <td align='center'>ᣖ</td>
            <td align='center'>ᣗ</td>
            <td align='center'>ᣘ</td>
            <td align='center'>ᣙ ᓪ ᕐ</td>
            <td align='center'>ᣚ</td>
            <td align='center'>ᣛ</td>
            <td align='center'>ᐞ</td>
        </tr>
        <tr>
            <td align='center'>123</td>
            <td align='center'>🌐</td>
            <td align='center'>ᐧ</td>
            <td align='center' colspan='5'>space</td>
            <th align='center'>˙</th>
            <td align='center'>⌫</td>
        </tr>

    </table>
    <h3>Shifted</h3>
    <table class="keyboard-layer">
        <tr>
            <td align='center'>ᐁ</td>
            <td align='center'>ᐯ ᕓ</td>
            <td align='center'>ᑌ ᕞ</td>
            <td align='center'>ᑫ</td>
            <td align='center'>ᒉ</td>
            <td align='center'>ᒣ</td>
            <td align='center'>ᓀ ᓓ ᕃ</td>
            <td align='center'>ᓭ</td>
            <td align='center'>ᔐ</td>
            <td align='center'>ᔦ</td>
        </tr>
        <tr>
            <td align='center'>ᐅ</td>
            <td align='center'>ᐳ ᕗ</td>
            <td align='center'>ᑐ ᕤ</td>
            <td align='center'>ᑯ</td>
            <td align='center'>ᒍ</td>
            <td align='center'>ᒧ</td>
            <td align='center'>ᓄ ᓗ ᕈ</td>
            <td align='center'>ᓱ</td>
            <td align='center'>ᔓ</td>
            <td align='center'>ᔪ</td>
        </tr>
        <tr>
            <td align='center'>⇧</td>
            <td align='center'>ᓬ ᓫ</td>
            <td align='center'>ᕒ ᕑ</td>
            <td align='center'>ᕃ ᕆ ᕊ ᕍ ᔆ</td>
            <td align='center'>ᖊ ᖋ ᖌ ᖍ ᙆ</td>
            <td>&nbsp;</td>
            <td align='center'>ᐤ</td>
            <td align='center'>ᐦ</td>
            <td align='center'>ᣞ</td>
            <td align='center'>ᣝ</td>
        </tr>
        <tr>
            <td align='center'>123</td>
            <td align='center'>🌐</td>
            <td align='center'>ᐧ</td>
            <td align='center' colspan='4'>space</td>
            <td align='center'>᙮</td>
            <td align='center'>⏎</td>
            <td align='center'>⌫</td>
        </tr>
    </table>
    <div class='vspace'></div>
    <ul>
        <li>Keys with a red background are combining accents. On your mobile device, these keys will have green text.
        </li>
        <li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</li>
        <li>Common punctuation can be found by pressing and holding on the full stop key (᙮) on the right side of the
            spacebar. </li>
    </ul>
    <div class='vspace'></div>
</div>
<div class='vspace'></div>

<br />

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'></div>