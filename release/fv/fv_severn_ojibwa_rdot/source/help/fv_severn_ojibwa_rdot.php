<?php 
  $pagename = 'ᐊᓂᔑᓇᐯᒧᐎᓐ Keyboard Help';
  $pagetitle = 'ᐊᓂᔑᓇᐯᒧᐎᓐ Keyboard Help';
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
This keyboard is designed for the <b>ᐊᓂᔑᓇᐯᒧᐎᓐ</b> language of the Eastern Subarctic region of Canada.
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<img src="ojibwa_U_.png" alt="ᐊᓂᔑᓇᐯᒧᐎᓐ" width="514" height="198" /></h2>
<ul>
	<li>The on-screen keyboard shows each syllable in their final form and in their e-orientation, or in their short and long form (vowels).</li>
	<li>The syllabics used to write ᐊᓂᔑᓇᐯᒧᐎᓐ (Ojibwa) are typed primarily by writing their long-vowel equivalents, with a few exceptions. See <a href=Ojibwa.pdf>this document</a> for a full list of how to type each syllable with this keyboard, and all of the special key combinations.
		<ul>
			<li>By typing a single consonant or a key that's assigned to a consonant, the syllable final form will appear on screen. Following the consonant with a vowel will change the syllable final into its full form in the orientation corresponding with the vowel typed.</li>
				<ul>
					<li>Typing the k or g key outputs <b>ᒃ</b>. If the a key is typed after, it will change to ᑲ.</li>
				</ul>
			<li>To type a long vowel / add the top dot, type the vowel twice.</li>
				<ul>
					<li><b>ᑳ</b> is typed <b>kaa</b> or <b>gaa</b></li>
				</ul>
			<li>To add the w-dot, type the w after the first consonant</li>
				<ul>
					<li><b>ᐃᒃᐧᐁ</b> is typed <be>ik[we</b> or <b>ig[we</b></li>
				</ul>
			<li>The syllabics sets for sh- / zh- (ᔐᔑᔓᔕᔥ), ch- (ᒉᒋᒍᒐᒡ), and th- (ᕞᕠᕤᕦᕪ) are typed by SHIFT + the first letter of each sound (s, z, and t)</li>
				<ul>
					<li><b>ᐊᓂᔑᓇᐯᒧᐎᓐ</b> is typed <b>aniSinabemowin</b> or <b>aniSinapemowin</b></li>
					<li><b>ᒌᒫᓐ</b> (pointed) is typed <b>Ciimaan</b> or <b>jiimaan</b></li>
					<li><b>ᒋᒪᓐ</b> (unpointed) is typed <b>Ciman</b> or <b>jiman</b></li>
				</ul>
		</ul>
	</li>
	<li>In the case of a vowel immediately after a syllable final or two vowels that need to be side by side, use the <b>left bracket key [ </b> to keep the syllables separate
		<ul>
			<li><b>ᐊᒸᑲᓂᐎᑦ ᐊᐊ</b> (pointed) is typed <b>amwaakaniwit a[a</b></li>
			<li><b>ᐊᒶᑲᓂᐎᑦ ᐊᐊ</b> (unpointed) is typed <b>amwakaniwit a[a</b></li>
			<li><b>ᐋᓃᔥ ᐁᔥᓂᑳᔅᔾᐃᓐ</b> (pointed) is typed <b>aaniiZ eZnikaazy[in</b> or <b>aaniiS eSnigaasy[in</b></li>
			<li><b>ᐊᓂᔥ ᐁᔥᓂᑲᔅᔾᐃᓐ</b> (unpointed) is typed <b>aniZ eZnikazy[in</b> or <b>aniS eSnigasy[in</b></li>
		</ul>
	</li>
	<p></p>

<h2>Punctuation</h2>
		<li>A standalone above dot indicating vowel length can be typed with the Backquote key `</li>
		<li>A standalone w-dot can be typed with the q key.</li>
			<ul>
				<li><b>NOTE:</b> the dot indicating a long vowel and the w-dot do not need to be typed for the majority of syllables on the keyboard. They are provided as an option for syllables that do not have a single character that contains the syllable and one or both dots, ie; ᐧᕙ</li>
			</ul>
		<li><b>᙮</b> is typed with the period key .</li>
		<li>single guillement: ‹ Right-Alt+Semicolon key ; — › Right-Alt+Quote '</li>
		<li>double guillemets: « Shift+Right-Alt+Semicolon key ; — » Shift+Right-Alt+Quote '</li>
		<li>Any modified punctuation can be typed using <b>Right-Alt</b>(Windows) or <b>Option</b>(Mac) + the original key</li>
			<ul>
				<li><b>.</b> is typed Right-Alt / Option + Period key . </li>
				<li><b>-</b> is typed Right-Alt / Option + Hyphen key -</li>
				<li><b>+</b> is typed Shift+Right-Alt / Option + Equal key =</li>
			</ul>
		<li>All English letters can be typed by pressing <b>Right-Alt / Option </b> followed by the letter(s) you wish to type</li>
		<li>All uppercase English letters can be typed by pressing <b>Right-Alt / Option</b> followed by the letter(s) you wish ty type</li>

<h2>Unicode Fonts</h2>
						<p>The following fonts have been installed on your computer: <strong>Aboriginal Sans, Aboriginal Serif.</strong> Please use these fonts when typing in your language as they have been specially built to represent your language as accurately as possible. </p>
    <h3><a href="http://www.languagegeek.com/font/fontdownload.html">Download the latest version of Aboriginal Sans and Aboriginal Serif</a></h3>

<h2>Notes on touch layout</h2>
<div class='cree'>
<h3>Unshifted</h3>
<table class="keyboard-layer">
<tr >
	<td  align='center'>ᐃ</td>
	<td  align='center'>ᐱ ᕕ</td>
	<td  align='center'>ᑎ ᕠ</td>
	<td  align='center'>ᑭ</td>
	<td  align='center'>ᒋ</td>
	<td  align='center'>ᒥ</td>
	<td  align='center'>ᓂ ᓕ ᕆ</td>
	<td  align='center'>ᓯ</td>
	<td  align='center'>ᔑ</td>
	<td  align='center'>ᔨ</td>
</tr>
<tr >
	<td  align='center'>ᐊ</td>
	<td  align='center'>ᐸ ᕙ</td>
	<td  align='center'>ᑕ ᕦ</td>
	<td  align='center'>ᑲ</td>
	<td  align='center'>ᒐ</td>
	<td  align='center'>ᒪ</td>
	<td  align='center'>ᓇ ᓚ ᕋ</td>
	<td  align='center'>ᓴ</td>
	<td  align='center'>ᔕ</td>
	<td  align='center'>ᔭ</td>
</tr>
<tr >
	<td  align='center'>⇧</td>
	<td  align='center'>ᑊ ᕝ</td>
	<td  align='center'>ᐟ ᕪ</td>
	<td  align='center'>ᐠ</td>
	<td  align='center'>ᐨ</td>
	<td  align='center'>ᒼ</td>
	<td  align='center'>ᐣ ᓪ ᕐ</td>
	<td  align='center'>ᐢ</td>
	<td  align='center'>ᐡ</td>
	<td  align='center'>ᣞ</td>
</tr>
<tr >
	<td  align='center'>123</td>
	<td  align='center'>🌐/td>
	<td  align='center'>ᐧ</td>
	<td  align='center' colspan='6'>space</td>
	<th  align='center'>˙</th>
	<td  align='center'>⌫</td>
</tr>

</table>
<h3>Shifted</h3>
<table class="keyboard-layer">
<tr >
	<td  align='center'>ᐁ</td>
	<td  align='center'>ᐯ ᕓ</td>
	<td  align='center'>ᑌ ᕞ</td>
	<td  align='center'>ᑫ</td>
	<td  align='center'>ᒉ</td>
	<td  align='center'>ᒣ</td>
	<td  align='center'>ᓀ ᓓ ᕃ</td>
	<td  align='center'>ᓭ</td>
	<td  align='center'>ᔐ</td>
	<td  align='center'>ᔦ</td>
</tr>
<tr >
	<td  align='center'>ᐅ</td>
	<td  align='center'>ᐳ ᕗ</td>
	<td  align='center'>ᑐ ᕤ</td>
	<td  align='center'>ᑯ</td>
	<td  align='center'>ᒍ ᓗ ᕈ</td>
	<td  align='center'>ᒧ</td>
	<td  align='center'>ᓄ</td>
	<td  align='center'>ᓱ</td>
	<td  align='center'>ᔓ</td>
	<td  align='center'>ᔪ</td>
</tr>
<tr >
	<td  align='center'>⇧</td>
	<td  align='center'>ᓬ ᓫ</td>
	<td  align='center'>ᕒ ᕑ</td>
	<td  align='center'>ᕃ ᕆ ᕊ ᕍ ᔆ</td>
	<td  align='center'>ᖊ ᖋ ᖌ ᖍ ᙆ</td>
	<td >&nbsp;</td>
	<td  align='center'>ᐤ</td>
	<td  align='center'>ᐦ</td>
	<td  align='center'>ᐞ</td>
	<td  align='center'>ᣝ</td>
</tr>
<tr >
	<td  align='center'>123</td>
	<td  align='center'>🌐/td>
	<td  align='center'>ᐧ</td>
	<td  align='center' colspan='4'>space</td>
	<td  align='center'>᙮ . , ! ? ; : ' " ` ~</td>
	<td  align='center'>⏎</td>
	<td  align='center'>⌫</td>
</tr>
</table>
<div class='vspace'></div>
<ul>
	<li>keys with a red background are combining accents.</li>
	<li>the first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</li>
</ul>
<div class='vspace'></div></div>
<div class='vspace'></div>

</div>

<br/>

<h2>Keyboard Layout</h2>
<div id='osk'></div>

