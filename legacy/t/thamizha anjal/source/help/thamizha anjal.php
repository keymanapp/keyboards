<?php 
  $pagename = 'Thamizha Anjal Paangu Unicode Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>
<p>This keyboard is designed for the Tamil language. It is a phonetic keyboard, which means the Tamil characters are arranged according to the letters of the English keyboard. This makes it easy to use for people learning Tamil, as well as Tamil speakers. Typing follows a consonant-vowel pattern, and the keyboard is designed for use with a normal QWERTY (English) keyboard. </p>


  <h3>Desktop Keyboard layout</h3>
	<p><a href="Layout.png"><img class="keyboard" src="Layout.png" alt="Layout" /></a></p>

<div id='Quickstart'>
<h3>Quickstart</h3>
		<!-- Basic instructions designed to get users up and running with typing -->

<p>This keyboard makes typing in Tamil straightforward for anyone familiar with a normal English keyboard.  Consonants and vowels are arranged on the keyboard so that pressing an English letter displays the Tamil character which sounds closest to that letter.  Some characters, however, representing sounds which do not exist in the English alphabet, are located on unused keys.  Grantha consonants are also on the keyboard, and long vowels are typed by pressing the vowel key twice, or by pressing <span class='keys'>[S*]</span>and the vowel key.  For example, the vowel <span class='highlightExample'>இ</span> is typed by pressing <span class='keys'>i</span>, while pressing <span class='keys'>ii</span> or <span class='keys'>I</span> produces the long vowel <span class='highlightExample'>ஈ</span>.
</p>

<p>Most of the characters used in Tamil are combinations of consonants and vowels, and these do not appear on the keyboard. Combined consonant-vowel characters are entered by typing the consonant, then the vowel.  To enter <span class='highlightExample'>சா</span>, which is a combination of <span class='highlightExample'>ச்</span> and <span class='highlightExample'>ஆ</span>,
 type <span class='keys'>s</span> then <span class='keys'>A</span>, and the combinant character will automatically be displayed.  Pressing Backspace once will delete only the vowel component, so the character displayed on the screen will change back to <span class='highlightExample'>ச்</span>, and change again if a different vowel is typed.</p>

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
			<td><span class='lang2' style='color:#0000FF; font-size:120%'>தமிழ் அரிச்சுவடி</span><</td>
			<td>"Tamil alphabet"</td>
			<td><span class='keys'>thamiz arissuvadi</span></td>
		</tr>
	</table>

</div>

<div id="Documentation">
<h3>Full Documentation</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->
	
<p>This keyboard uses a consonant-vowel order for text input, so the consonant character is always typed before the vowel, regardless of where (relative to the consonant) the vowel marker symbol appears.  As syllables are typed, the characters entered are automatically converted to the appropriate consonant-vowel combinant.  While only the combinant characters are displayed on screen, the consonant and vowel are both stored, so that pressing Backspace once after a combinant deletes only the vowel component.  This means it is necessary to press Backspace twice to delete a combinant character.  However, pressing the Delete key with the cursor in front of a combinant character removes the whole character with one keystroke.</p>

<p>The visible keyboard layout consists of the ten vowels <span class='lang2'>அ ஆ இ ஈ உ ஊ எ ஏ ஒ ஓ</span> (the vowels <span class='lang2'>ஐ ஔ</span> are typed with two keystrokes), the eighteen consonants <span class='lang2'>க ங ச ஞ ட ண த ந ப ம ய ர ல வ ழ ள ற ன</span>, the Grantha consonants <span class='lang2'>ஸ ஜ ஹ க்ஷ</span> (<span class='lang2'>ஷ</span> is typed with two keystrokes, and <span class='lang2'>ஸ்ரீ</span> with three) and the Aytham <span class='lang2'>ஃ</span> mark.
</p>

<h4>Consonants and Pulli Marks</h4>
<p>
Most of the consonants are arranged so that they can be typed with a single key.  A few consonants which use the same English (Roman) letter as another consonant, or which have no equivalent English letter, must be typed with two keystrokes.  See the <a href="keyboardchart.htm">complete keyboard chart</a> for details.</p>
<p>
This keyboard does not have a key for the Pulli mark <span class='highlightExample'>்</span>, which defines a standalone consonant.  Instead, every consonant will display the Pulli mark when it is typed, and the Pulli mark will disappear when a vowel is typed.  The implicit vowel <span class='highlightExample'>அ</span> thus needs to be typed, though it is not actually displayed when combined with a consonant.
</p>

<h4>The SRii Character <img src='sri.png' style='vertical-align:bottom' /></h4>
<p>
There are two ways of entering this character: <span class='keys'>Sri</span> or <span class='keys'>Shri</span>.  Currently, some browsers support one, both or neither of these entry methods.
</p>

<h4>Vowels</h4>
<p>Vowels are typed using the English vowel letters.  Tamil distinguishes between short and long vowel sounds, and the keyboard is arranged so that pressing any vowel key once will produce the short vowel, while pressing it twice, or pressing <span class='keys'>[S*]</span>together with the vowel key, will produce the long vowel.  When typing, it is often more efficient to press the vowel key twice rather than using <span class='keys'>[S*]</span>.  The vowels <span class='highlightExample'>ஐ</span> and <span class='highlightExample'>ஔ</span>, which do not have equivalent single letters in English, are typed with two keystrokes as shown below.</p>

<h4>Keystroke Examples</h4>
<p>Note: for a complete table of characters and keystrokes, <a href="keyboardchart.htm">click here</a>.</p>
<p>The following table gives specific examples of how to input characters based on the consonant <span class='highlightExample'>க</span>.  The Grantha consonants  use the same input method.  Examples of these with the consonant <span class=''>ஜ</span> are also given below.</p>
<br/>
<table>
	<col width=80 span=3 />
	<col width=100 />
	<col width=40 />
	<col width=80 span=3 />
	<col width=100 />

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
		<td class='lang2'>க</td><td>்</td><td class='lang2'>க்</td><td><span class='keys'>g</span></td>
		<td></td>
		<td class='lang2'>ஜ</td><td>்</td><td class='lang2'>ஜ்</td><td><span class='keys'>j</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>அ</td><td class='lang2'>க‍</td><td><span class='keys'>ga</span></td>
		<td></td>
		<td></td><td class='lang2'>அ</td><td class='lang2'>ஜ‍</td><td><span class='keys'>ja</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>கா</td><td><span class='keys'>gaa</span></td>
		<td></td>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>ஜா</td><td><span class='keys'>jaa</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>இ</td><td class='lang2'>கி</td><td><span class='keys'>gi</span></td>
		<td></td>
		<td></td><td class='lang2'>இ</td><td class='lang2'>ஜி</td><td><span class='keys'>ji</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>கீ</td><td><span class='keys'>gii</span></td>
		<td></td>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>ஜீ</td><td><span class='keys'>jii</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>உ</td><td class='lang2'>கு</td><td><span class='keys'>gu</span></td>
		<td></td>
		<td></td><td class='lang2'>உ</td><td class='lang2'>ஜு</td><td><span class='keys'>ju</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>கூ</td><td><span class='keys'>guu</span></td>
		<td></td>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>ஜூ</td><td><span class='keys'>juu</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>எ</td><td class='lang2'>கெ</td><td><span class='keys'>ge</span></td>
		<td></td>
		<td></td><td class='lang2'>எ</td><td class='lang2'>ஜெ</td><td><span class='keys'>je</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>கே</td><td><span class='keys'>gee</span></td>
		<td></td>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>ஜே</td><td><span class='keys'>jee</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>கை</td><td><span class='keys'>gai</span></td>
		<td></td>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>ஜை</td><td><span class='keys'>jai</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>கொ</td><td><span class='keys'>go</span></td>
		<td></td>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>ஜொ</td><td><span class='keys'>jo</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>கோ</td><td><span class='keys'>goo</span></td>
		<td></td>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>ஜோ</td><td><span class='keys'>joo</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>கௌ</td><td><span class='keys'>gau</span></td>
		<td></td>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>ஜௌ</td><td><span class='keys'>jau</span></td>
	</tr>

</table>

<h4>Typing Conventions</h4>
<p>Aside from the alternate methods of typing long vowels described above, several other conventions are incorporated in this keyboard.  These are not 'rules' which must be followed, rather they are shortcuts, or ways of increasing the efficiency of typing Tamil using English (Roman) letters.  These conventions may not actually reduce the number of keystrokes needed for typing characters, but by largely avoiding <span class='keys'>[S*]</span>combinations, they make typing Tamil easier and faster.</p>
<table>
	<col width=20px span=2 />
	<col width=700px />
	<tr style='text-align:left; font-weight:bold'>
		<td></td>
		<td colspan=2 valign="top"><span class='lang2'>ற்</span> Consonant</td>
	</tr>
	<tr style='text-align:left; font-weight:normal'>
		<td colspan=2></td>
		<td valign="top">The consonant <span class='lang2' style='font-size:100%'>ற்</span> is usually typed with <span class='keys'>R</span>, while typing a lower-case <span class='keys'>r</span> produces <span class='lang2' style='font-size:100%'>ர்</span>.  Because <span class='lang2' style='font-size:100%'>ற்</span> sometimes appears twice in succession, the keyboard has been arranged so that pressing <span class='keys'>dr</span> or <span class='keys'>tr</span> produces <span class='lang2' style='font-size:100%'>ற்ற்</span>, without needing to use <span class='keys'>[S*]</span>.</td>
	</tr>
	<tr style='text-align:left; font-weight:normal'>
		<td colspan=2></td>
		<td valign="top">Similarly, because <span class='lang2' style='font-size:100%'>ற்</span> never appears after <span class='lang2' style='font-size:100%'>ன்</span>, pressing <span class='keys'>dr</span> or <span class='keys'>tr</span> after <span class='lang2' style='font-size:100%'>ன்</span> produces <span class='lang2' style='font-size:100%'>ன்ற்</span>, again avoiding the use of <span class='keys'>[S*]</span>.</td>
	</tr>

	<tr style='text-align:left; font-weight:bold'>
		<td></td>
		<td colspan=2 valign="top"><span class='lang2'>ன்</span> and <span class='lang2'>ந்</span> Consonants</td>
	</tr>
	<tr style='text-align:left; font-weight:normal'>
		<td colspan=2></td>
		<td valign="top">The consonant <span class='lang2' style='font-size:100%'>ன்</span> is usually typed by pressing <span class='keys'>n</span>, and <span class='lang2' style='font-size:100%'>ந்</span> is produced by typing <span class='keys'>w</span> or <span class='keys'>n-</span>.  However, if <span class='keys'>n</span> is pressed after a space or a carriage return, it will produce <span class='lang2' style='font-size:100%'>ந்</span>.</td>
	</tr>

	<tr style='text-align:left; font-weight:bold'>
		<td></td>
		<td colspan=2 valign="top"><span class='lang2'>ட்</span>, <span class='lang2'>ன்</span> and <span class='lang2'>ண்</span> Consonants</td>
	</tr>
	<tr style='text-align:left; font-weight:normal'>
		<td colspan=2></td>
		<td valign="top">Typing <span class='keys'>d</span> (<span class='lang2' style='font-size:100%'>ட்</span>) after <span class='lang2' style='font-size:100%'>ன்</span> will change the <span class='lang2' style='font-size:100%'>ன்</span> to <span class='lang2' style='font-size:100%'>ண்</span> (otherwise typed with <span class='keys'>N</span>).  <span class='lang2' style='font-size:100%'>ட்</span> can also be entered by pressing <span class='keys'>t</span>, but this will not change the <span class='lang2' style='font-size:100%'>ன்</span> character.</td>
	</tr>

	<tr style='text-align:left; font-weight:bold'>
		<td></td>
		<td colspan=2 valign="top"><span class='lang2'>ஞ்</span> Consonant</td>
	</tr>
	<tr style='text-align:left; font-weight:normal'>
		<td colspan=2></td>
		<td valign="top">This character can be entered either by typing <span class='keys'>W</span> or <span class='keys'>nj</span>.  When <span class='lang2' style='font-size:100%'>ஞ்</span> is followed by <span class='lang2' style='font-size:100%'>ச்</span> which is often typed with <span class='keys'>ch</span> (though <span class='keys'>s</span> is an alternate way of typing this character), the sequence <span class='keys'>njj</span> will produce <span class='lang2' style='font-size:100%'>ஞ்ச்</span>.</td>
	</tr>

	<tr style='text-align:left; font-weight:bold'>
		<td></td>
		<td colspan=2 valign="top"><span class='lang2'>த்</span> Consonant</td>
	</tr>
	<tr style='text-align:left; font-weight:normal'>
		<td colspan=2></td>
		<td valign="top">This character can be typed using either <span class='keys'>T</span> or <span class='keys'>th</span>.  In some words, this character is repeated twice in succession.  Typing <span class='keys'>tth</span> provides a shortcut to entering this.</td>
	</tr>

	<tr style='text-align:left; font-weight:bold'>
		<td></td>
		<td colspan=2 valign="top">English words used in Tamil</td>
	</tr>
	<tr style='text-align:left; font-weight:normal'>
		<td colspan=2></td>
		<td valign="top">Some English words that can be written in Tamil script will not display correctly if typed exactly as they are written, as the keyboard automatically makes some of the changes listed above.  To avoid this, it may be necessary to insert spaces when typing and delete these spaces afterwards.</td>
	</tr>

	</table>

<h4>Other Characters</h4>
<p>This keyboard does not contain characters such as the symbols for day, month, year, etc., or the glyphs used as vowel modifiers.  Some of the <a href="#Related">alternate Tamil keyboards</a> do allow these characters to be typed.</p>

</div>