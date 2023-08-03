<?php 
  $pagename = 'Suratha Bamuni (Bamini Unicode) (deprecated) Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>
<p>This keyboard, usually known as the <span class='highlightExample'>Bamini</span> layout, is designed for the Tamil language.  It is originally based on a Tamil typewriter keyboard, and is used particularly in Sri Lanka.  The keyboard is designed for users who are familiar with both this layout and the Tamil script, as consonants and vowels are typed in written order, and is intended for use with a normal QWERTY (English) keyboard.</p>


  <h3>Desktop Keyboard layout</h3>
	<p><a href="Layout.png"><img class="keyboard" src="Layout.png" alt="Layout" /></a></p>

<div id='Quickstart'>
<h3>Quickstart</h3>
		<!-- Basic instructions designed to get users up and running with typing -->
<p>This keyboard layout is largely based on the Tamil typewriter, with separate keys for consonants, vowels and vowel diacritics.  Most of the characters used in Tamil are combinations of consonants and vowels, and these do not appear on the keyboard.  Instead, the appropriate vowel diacritic is typed either before or after the consonant, in the same order as it would be written.  Note that some diacritics will not be displayed until a consonant is typed.
</p>
<p>
For example, the standalone vowel <span class='highlightExample'>இ</span> is entered by typing <span class='keys'>,</span>, but in combination with a consonant, the <span class='highlightExample'>ி</span> diacritic (<span class='keys'>p</span> key) is usually typed instead, after the consonant, and the consonant-vowel combinant will be displayed.  Pressing Backspace once will delete only the vowel component, so the character displayed on the screen will change back to the consonant, and change again if a different diacritic is typed.
</p>

<p>
Grantha letters, which are used for typing Sanskrit, appear on the keyboard and are treated as normal consonants. 
</p>

</div>

<div id="Examples">
<h3>Examples</h3>
		<!-- Simple example(s) illustrating the notes in the Quickstart section above -->

	<table cellspacing=4 style='border-style:solid; border-width:1px; border-color:#8080FF; background-color:#E0E0FF; padding:4px'>
		<col width=100px />
		<col width=150px />
		<col width=150px />
		<col width=350px />

		<tr style='color:#0000AF; font-weight:bold'>
			<td>Language</td>
			<td>Phrase</td>
			<td>Meaning</td>
			<td>Type the following keys</td>
		</tr>
		<tr style='color:#0000AF; font-weight:normal'>
			<td>Tamil</td>
			<td><span class='lang2' style='color:#0000FF; font-size:120%'>தமிழ்</span></td>
			<td>"Tamil"</td>
			<td><span class='keys'>jkpo;</span></td>
		</tr>
	</table>
	
		
</div>

<div id="Documentation">
<h3>Full Documentation</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->
	
<p>The full keyboard layout consists of the eighteen consonants <span class='lang2'>க ங ச ஞ ட ண த ந ப ம ய ர ல வ ழ ள ற ன</span>, four Grantha consonants <span class='lang2'>ஸ ஷ ஜ ஹ</span> (<span class='lang2'>க்ஷ</span> and <span class='lang2'>ஸ்ரீ</span> are typed with key combinations), eleven vowels <span class='lang2'>அ ஆ இ ஈ உ ஊ எ ஏ ஐ ஒ ஓ</span>, vowel diacritics <span class='lang2'>ி ீ ா ர் பெ பே பை </span>, combinants and components <span class='lang2'>சூ கூ மூ டூ ரூ ஞ று நு சு வு லு ரு ழு யு ளு னு கு பு து மு டு ணு டி டீ</span> and the Pulli <span class='lang2'>்</span> and Aytham <span class='lang2'>ஃ</span> marks, as well as various punctuation marks.  The vowel <span class='lang2'>ஔ</span> is typed using a combination of keystrokes.</p>

<p>Although Tamil characters are typed using separate keys for consonants and diacritics, the characters that appear on screen will be combinants, which the computer sees as a single character.  This means that while two (or more) keystrokes are required to display most consonant-vowel combinants, when you use the arrow keys to move the cursor through the text, only a single keystroke is needed to move past each character.  Moving the cursor to the left of a combinant character and pressing Delete will erase the whole character, but if you move the cursor to the right of a combinant and press Backspace, only the vowel component will be erased.  This is the case whether the vowel component appears to the left or right of, above or below the consonant.
</p>

<h4>Vowels and Pulli Marks</h4>
<p>In general, characters should be entered with this keyboard in the same order as they would be written on paper.  When a vowel or part of a vowel appears before a consonant, it should be typed first.  When the vowel component appears above, below or to the right of a consonant, it should be typed after the consonant.  The vowel diacritics <span class='highlightExample'>பெ</span> (<span class='keys'>n</span>), <span class='highlightExample'>பே</span> (<span class='keys'>N</span>) and <span class='highlightExample'>பை</span> (<span class='keys'>i</span>) will not be displayed until a consonant is typed (in the preceding examples the consonant <span class='highlightExample'>ப</span> is shown).  The first vowel <span class='highlightExample'>அ</span> is implicit in the consonants, so typing this vowel after a consonant will display this as a standalone vowel, and not combine it with the consonant.
</p>
<p>Long vowel characters are typed either by a combination of <span class='keys'>!!S!!</span> the basic vowel key, or by pressing the vowel key twice.
</p>
<p>
Because the consonants contain the implicit vowel <span class='highlightExample'>அ</span>, to produce a pure consonant it is necessary to add the Pulli mark <span class='lang2'>்</span> by typing a semicolon <span class='keys'>;</span> immediately after the consonant.  Any vowel diacritic that is typed immediately after typing the Pulli mark will not be combined with the consonant.  However, because this keyboard acts in a similar way to a typewriter, it is possible to type a preceding vowel diacritic followed by a consonant and the Pulli mark, or even a standalone vowel followed by the Pulli mark, producing odd combinations such as <span class='highlightExample'>மெ்</span> or <span class='highlightExample'>அ்</span>.  In every case, a consonant-Pulli mark combinant behaves the same way as a consonant-vowel combinant when you use the arrow, Backspace and Delete keys.
</p>

<div class='keymanweb'>
<h4>The SRii Character <img src='sri.png' style='vertical-align:bottom' /></h4>
<p>
This character is entered by typing <span class='keys'>];uP</span>.  Currently, some browsers do not display this character correctly.
</p>
</div>

<h4>Keystroke Examples</h4>
<p>Note: for a complete table of characters and keystrokes, <a href="keyboardchart.htm">click here</a>.</p>
<p>The following table gives specific examples of how to input characters based on the consonant <span class='highlightExample'>க</span>.  The Grantha consonants, which are entered with <span class='keys'>!!S!!</span> key combinations, use the same input method.  Examples of these with the consonant <span class='highlightExample'>ஜ</span> are also given below.</p>
<br/>
<table>
	<col width=80 span=3 />
	<col width=100 />
	<col width=40 />
	<col width=80 span=3 />
	<col width=100>
	</col>
	<tr style='text-align:center; font-weight:bold'>
		<td colspan=4>Tamil Consonants</td>
		<td></td>
		<td colspan=4>Grantha Consonants</td>
	<tr style='text-align:center; font-weight:normal'>
		<td>Consonant</td><td>Vowel/Pulli</td><td>Combinant</td><td>Keystrokes</td>
		<td></td>
		<td>Consonant</td><td>Vowel/Pulli</td><td>Combinant</td><td>Keystrokes</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2'>க</td><td>்</td><td class='lang2'>க்</td><td><span class='keys'>f;</span></td>
		<td></td>
		<td class='lang2'>ஜ</td><td>்</td><td class='lang2'>ஜ்</td><td><span class='keys'>[[;</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>அ</td><td class='lang2'>க‍</td><td><span class='keys'>f</span></td>
		<td></td>
		<td></td><td class='lang2'>அ</td><td class='lang2'>ஜ‍</td><td><span class='keys'>[[</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>கா</td><td><span class='keys'>fh</span></td>
		<td></td>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>ஜா</td><td><span class='keys'>[[h</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>இ</td><td class='lang2'>கி</td><td><span class='keys'>fp</span></td>
		<td></td>
		<td></td><td class='lang2'>இ</td><td class='lang2'>ஜி</td><td><span class='keys'>[[p</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>கீ</td><td><span class='keys'>fP</span></td>
		<td></td>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>ஜீ</td><td><span class='keys'>[[P</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>உ</td><td class='lang2'>கு</td><td><span class='keys'>F</span></td>
		<td></td>
		<td></td><td class='lang2'>உ</td><td class='lang2'>ஜு</td><td></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>கூ</td><td><span class='keys'>$</span></td>
		<td></td>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>ஜூ</td><td></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>எ</td><td class='lang2'>கெ</td><td><span class='keys'>nf</span></td>
		<td></td>
		<td></td><td class='lang2'>எ</td><td class='lang2'>ஜெ</td><td><span class='keys'>n[[</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>கே</td><td><span class='keys'>Nf</span></td>
		<td></td>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>ஜே</td><td><span class='keys'>N[[</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>கை</td><td><span class='keys'>if</span></td>
		<td></td>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>ஜை</td><td><span class='keys'>i[[</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>கொ</td><td><span class='keys'>nfh</span></td>
		<td></td>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>ஜொ</td><td><span class='keys'>n[[h</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>கோ</td><td><span class='keys'>Nfh</span></td>
		<td></td>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>ஜோ</td><td><span class='keys'>N[[h</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>கௌ</td><td><span class='keys'>nfs</span></td>
		<td></td>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>ஜௌ</td><td><span class='keys'>n[[s</span></td>
	</tr>

</table>

<p>For a complete table of characters and keystrokes, <a href="keyboardchart.htm">click here</a>.</p>


</div>