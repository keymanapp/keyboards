<?php /*
  Name:             keyboard_ekwunitamil
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:
  Description:
  Create Date:      18 Sep 2009

  Modified Date:    18 Sep 2009
  Authors:          mcdurdin
  Related Files:
  Dependencies:

  Bugs:
  Todo:
  Notes:
  History:          18 Sep 2009 - mcdurdin - Full help
*/
  require_once('servervars.php');
  $pagename = 'Tamil Anjal Paangu Keyboard Help';
  $pagetitle = 'Tamil Anjal Paangu Keyboard Help';
  $style = '.lang2 {font-size:130%}';
  $relatedSites = array("$keyman_com/tamil" => "Tamil Keyboards Home");

  require_once('header.php');
?>


<p style='margin:0px'>Keyboard &#169; 2008 thamizha.com and Tavultesoft</p>


<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
<a style='margin-left:30px' href="chart.php">Complete Keyboard Reference Chart</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Authorship">Authorship</a><br/>



<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard is designed for the Tamil language.  It is a phonetic keyboard, which means the Tamil characters are arranged according to the letters of the English keyboard.  This makes it easy to use for people learning Tamil, as well as Tamil speakers.  Typing follows a consonant-vowel pattern, and the keyboard is designed for use with a normal QWERTY (English) keyboard.
</p>
<p class='keymanweb'>
Most computers will automatically download a special font if needed to display this language correctly.
</p>
<p>
<a href="#Related">Click here</a> to see other keyboard layouts for Tamil.
</p>
</div>


<div id='Using'>
<h2>Using this Keyboard</h2>
</div>

<h3>Keyboard Layout</h3>
		<!-- On Screen Keyboard is automatically included here -->

<div id='osk'>
</div>

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

<?php renderLanguageExamples(); ?>

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
<h3>Keyboard Details</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->

<p>This keyboard uses a consonant-vowel order for text input, so the consonant character is always typed before the vowel, regardless of where (relative to the consonant) the vowel marker symbol appears.  As syllables are typed, the characters entered are automatically converted to the appropriate consonant-vowel combinant.  While only the combinant characters are displayed on screen, the consonant and vowel are both stored, so that pressing Backspace once after a combinant deletes only the vowel component.  This means it is necessary to press Backspace twice to delete a combinant character.  However, pressing the Delete key with the cursor in front of a combinant character removes the whole character with one keystroke.</p>

<p>The visible keyboard layout consists of the ten vowels <span class='lang2'>அ ஆ இ ஈ உ ஊ எ ஏ ஒ ஓ</span> (the vowels <span class='lang2'>ஐ ஔ</span> are typed with two keystrokes), the eighteen consonants <span class='lang2'>க ங ச ஞ ட ண த ந ப ம ய ர ல வ ழ ள ற ன</span>, the Grantha consonants <span class='lang2'>ஸ ஜ ஹ க்ஷ</span> (<span class='lang2'>ஷ</span> is typed with two keystrokes, and <span class='lang2'>ஸ்ரீ</span> with three) and the Aytham <span class='lang2'>ஃ</span> mark.
</p>

<h4>Consonants and Pulli Marks</h4>
<p>
Most of the consonants are arranged so that they can be typed with a single key.  A few consonants which use the same English (Roman) letter as another consonant, or which have no equivalent English letter, must be typed with two keystrokes.  See the <a href="chart.php">complete keyboard chart</a> for details.</p>
<p>
This keyboard does not have a key for the Pulli mark <span class='highlightExample'>்</span>, which defines a standalone consonant.  Instead, every consonant will display the Pulli mark when it is typed, and the Pulli mark will disappear when a vowel is typed.  The implicit vowel <span class='highlightExample'>அ</span> thus needs to be typed, though it is not actually displayed when combined with a consonant.
</p>

<h4>The SRii Character <img src='srii/tamil_srii.png' style='vertical-align:middle' /></h4>
<p>
There are two ways of entering this character: <span class='keys'>Sri</span> or <span class='keys'>Shri</span>.  <span class='keymanweb'>Currently, some browsers support one, both or neither of these entry methods.  <a href="srii/tamil_srii.php">Click here</a> if you are having difficulty entering this character.</span>
</p>

<h4>Vowels</h4>
<p>Vowels are typed using the English vowel letters.  Tamil distinguishes between short and long vowel sounds, and the keyboard is arranged so that pressing any vowel key once will produce the short vowel, while pressing it twice, or pressing <span class='keys'>[S*]</span>together with the vowel key, will produce the long vowel.  When typing, it is often more efficient to press the vowel key twice rather than using <span class='keys'>[S*]</span>.  The vowels <span class='highlightExample'>ஐ</span> and <span class='highlightExample'>ஔ</span>, which do not have equivalent single letters in English, are typed with two keystrokes as shown below.</p>

<h4>Keystroke Examples</h4>
<p>Note: for a complete table of characters and keystrokes, <a href="chart.php">click here</a>.</p>
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

<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>
<div class='keymandesktop'>
<h4>Using Tamil keyboards with Word 2007</h4>
<p style='margin-bottom: 4px'>Sometimes when using Word 2007, the Pulli mark ் is not suppressed correctly.  For example:</p>
  <table style='text-align:left'>
  <col width=180 span=3 />
  <tr><th>Key sequence</th><th>Correct output</th><th>Word output</th></tr>
  <tr class='lang2'><td>&#x0b95; + &#x0b85; + &#x0b95;</td><td>&#x0b95;&#x0b95;</td><td>&#x0b95;&#x0bcd;&#x0b95;</td></tr>
  <tr class='lang2'><td>&#x0b95; + &#x0b95; + &#x0b95;+ &#x0b95;</td>
    <td>&#x0b95;&#x0bcd;&#x0b95;&#x0b95;&#x0bcd;&#x0b95;</td>
    <td>&#x0b95;&#x0bcd;&#x0b95;&#x0bcd;&#x0b95;&#x0bcd;&#x0b95;</td>
  </tr>
  </table>

<p style='margin-top: 4px'>The easiest ways to deal with this are to move the cursor and press Backspace to delete the unwanted Pulli mark, or else enable the <span style='font-weight:bold'>Text Services Framework Add-In</span> if you are using Keyman Desktop Professional.
Disabling <span style='font-style:italic'>Tamil language editing</span> in <span style='font-style:italic'>Microsoft Office Language Settings</span> will also correct the input behaviour, but this is not recommended, as it makes selection of fonts more difficult.</p>
</div>
<h4> Fonts</h4>
<p>This keyboard allows only the standard Tamil characters, so will work with the fonts supplied with Windows.  No further downloads of fonts should be required.</p>
<p>If the characters you type or those on the On Screen Keyboard do not appear to display correctly, please read the <a href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<h4>Problem Solving</h4>
<p>If the preceding consonant does not change to a vowel-consonant combinant character when you type a vowel, confirm that you have not typed  the first vowel அ, which identifies the consonant as the implicit-vowel consonant, or a space.  Typing either of these after a consonant will prevent that consonant from changing to a combinant character.
</p>

</div>

<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>Further Resources</h2>
<div id="Related">
		<!-- A list of links to related keyboards - to the help pages or to (download) the keyboards? -->

<h3>Related Keyboard Layouts</h3>
<p>Other Keyboard Layouts for the Tamil language:</p>
<p>
<a href="/go?language=tam&amp;keyboard=Keyboard_ekwtamil99uni">Tamil99</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_ekwbamuni">Suratha Bamuni (Bamini Typewriter)</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_isis_tamil">ISIS Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_tamil">Inscript Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_visual_media_tamil_modular">Modular (Visual Media)</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_visual_media_tamil_typewriter">Typewriter (Visual Media)</a></p>

</div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=448&amp;FromKeyman=0">Download Anjal Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/tamil.htm">Tamil Writing System at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/tamil_language">Tamil Language at Wikipedia.org</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/tamil_script.htm">Tamil Script at Wikipedia.org</a></p>

</div>




<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>This keyboard requires an English QWERTY hardware keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.2</p>

</div>


<div id="Authorship">
<h3>Authorship</h3>
<p>
This keyboard was created by Mugunth (mugunth@gmail.com), Umar (csd_one@yahoo.com) and K. Sethu (skhome@gmail.com).  For more information about keyboards produced by these developers, see <a target="_blank" href="http://thamizha.com">http://thamizha.com</a>.  Tavultesoft gratefully acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  Their effort assists in enabling people to communicate in their own language.
</p>
<h3>Copyright and Terms of Use</h3>
<p>
The Anjal Paangu Keyboard for Keyman Desktop and KeymanWeb is Copyright 2008 thamizha.com and Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
</p>
<p>
THIS SOFTWARE IS PROVIDED BY TAVULTESOFT PTY LTD "AS IS" AND ANY
EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL TAVULTESOFT PTY LTD BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
</p>
</div>

<h2>Keyboard Reference Chart</h2>
<p>The following chart lists all the characters available with this keyboard.  Below each character are the keystrokes required to type it.</p>

<table border=0 cellspacing=2 cellpadding=1>
	<col width=76 style='text-align:center; background-color:#dedede' />
	<col span=13 width=55 style='text-align:center; background-color:#ffffff' />
	<!-- tr style='text-align: left; font-weight:bold; background-color:#ffffff'>
		<td></td>
		<td style='background-color:#dedede' colspan=13>Pulli Mark & Vowels</td>
	</tr -->
	<tr style='text-align:center; font-weight:normal; background-color:#dedede'>
		<td rowspan=2 style='text-align:right; font-weight:bold; background-color:#dedede' valign=bottom>\<span style='text-decoration:underline'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vowels</span>&nbsp;<br/>Consonants\</td>
		<td><span class='lang2' >்</span><br/> </td>
		<td><span class='lang2' >அ</span><br/><span class='keys'>a</span></td>
		<td><span class='lang2' >ஆ</span><br/><span class='keys'>aa</span></td>
		<td><span class='lang2' >இ</span><br/><span class='keys'>i</span></td>
		<td><span class='lang2' >ஈ</span><br/><span class='keys'>ii</span></td>
		<td><span class='lang2' >உ</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >ஊ</span><br/><span class='keys'>uu</span></td>
		<td><span class='lang2' >எ</span><br/><span class='keys'>e</span></td>
		<td><span class='lang2' >ஏ</span><br/><span class='keys'>ee</span></td>
		<td><span class='lang2' >ஐ</span><br/><span class='keys'>ai</span></td>
		<td><span class='lang2' >ஒ</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >ஓ</span><br/><span class='keys'>uu</span></td>
		<td><span class='lang2' >ஔ</span><br/><span class='keys'>au</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#dedede'>
		<td>  </td>
		<td>  </td>
		<td> <span class='keys'>A</span></td>
		<td>  </td>
		<td> <span class='keys'>I</span></td>
		<td>  </td>
		<td> <span class='keys'>O</span></td>
		<td>  </td>
		<td> <span class='keys'>E</span></td>
		<td>  </td>
		<td>  </td>
		<td> <span class='keys'>U</span></td>
		<td>  </td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >க</span><br/> </td>
		<td><span class='lang2' >க்</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >க‍</span><br/><span class='keys'>ka</span></td>
		<td><span class='lang2' >கா</span><br/><span class='keys'>kaa</span></td>
		<td><span class='lang2' >கி</span><br/><span class='keys'>ki</span></td>
		<td><span class='lang2' >கீ</span><br/><span class='keys'>kii</span></td>
		<td><span class='lang2' >கு</span><br/><span class='keys'>ko</span></td>
		<td><span class='lang2' >கூ</span><br/><span class='keys'>koo</span></td>
		<td><span class='lang2' >கெ</span><br/><span class='keys'>ke</span></td>
		<td><span class='lang2' >கே</span><br/><span class='keys'>kee</span></td>
		<td><span class='lang2' >கை</span><br/><span class='keys'>kai</span></td>
		<td><span class='lang2' >கொ</span><br/><span class='keys'>ku</span></td>
		<td><span class='lang2' >கோ</span><br/><span class='keys'>kuu</span></td>
		<td><span class='lang2' >கௌ</span><br/><span class='keys'>kau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ங</span><br/> </td>
		<td><span class='lang2' >ங்</span><br/><span class='keys'>X</span></td>
		<td><span class='lang2' >ங‍</span><br/><span class='keys'>Xa</span></td>
		<td><span class='lang2' >ஙா</span><br/><span class='keys'>Xaa</span></td>
		<td><span class='lang2' >ஙி</span><br/><span class='keys'>Xi</span></td>
		<td><span class='lang2' >ஙீ</span><br/><span class='keys'>Xii</span></td>
		<td><span class='lang2' >ஙு</span><br/><span class='keys'>Xo</span></td>
		<td><span class='lang2' >ஙூ</span><br/><span class='keys'>Xoo</span></td>
		<td><span class='lang2' >ஙெ</span><br/><span class='keys'>Xe</span></td>
		<td><span class='lang2' >ஙே</span><br/><span class='keys'>Xee</span></td>
		<td><span class='lang2' >ஙை</span><br/><span class='keys'>Xai</span></td>
		<td><span class='lang2' >ஙொ</span><br/><span class='keys'>Xu</span></td>
		<td><span class='lang2' >ஙோ</span><br/><span class='keys'>Xuu</span></td>
		<td><span class='lang2' >ஙௌ</span><br/><span class='keys'>Xau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ச</span><br/> </td>
		<td><span class='lang2' >ச்</span><br/><span class='keys'>s</span></td>
		<td><span class='lang2' >ச‍</span><br/><span class='keys'>sa</span></td>
		<td><span class='lang2' >சா</span><br/><span class='keys'>saa</span></td>
		<td><span class='lang2' >சி</span><br/><span class='keys'>si</span></td>
		<td><span class='lang2' >சீ</span><br/><span class='keys'>sii</span></td>
		<td><span class='lang2' >சு</span><br/><span class='keys'>so</span></td>
		<td><span class='lang2' >சூ</span><br/><span class='keys'>soo</span></td>
		<td><span class='lang2' >செ</span><br/><span class='keys'>se</span></td>
		<td><span class='lang2' >சே</span><br/><span class='keys'>see</span></td>
		<td><span class='lang2' >சை</span><br/><span class='keys'>sai</span></td>
		<td><span class='lang2' >சொ</span><br/><span class='keys'>su</span></td>
		<td><span class='lang2' >சோ</span><br/><span class='keys'>suu</span></td>
		<td><span class='lang2' >சௌ</span><br/><span class='keys'>sau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஞ</span><br/> </td>
		<td><span class='lang2' >ஞ்</span><br/><span class='keys'>W</span></td>
		<td><span class='lang2' >ஞ‍</span><br/><span class='keys'>Wa</span></td>
		<td><span class='lang2' >ஞா</span><br/><span class='keys'>Waa</span></td>
		<td><span class='lang2' >ஞி</span><br/><span class='keys'>Wi</span></td>
		<td><span class='lang2' >ஞீ</span><br/><span class='keys'>Wii</span></td>
		<td><span class='lang2' >ஞு</span><br/><span class='keys'>Wo</span></td>
		<td><span class='lang2' >ஞூ</span><br/><span class='keys'>Woo</span></td>
		<td><span class='lang2' >ஞெ</span><br/><span class='keys'>We</span></td>
		<td><span class='lang2' >ஞை</span><br/><span class='keys'>Wee</span></td>
		<td><span class='lang2' >ஞை</span><br/><span class='keys'>Wai</span></td>
		<td><span class='lang2' >ஞொ</span><br/><span class='keys'>Wu</span></td>
		<td><span class='lang2' >ஞோ</span><br/><span class='keys'>Wuu</span></td>
		<td><span class='lang2' >ஞௌ</span><br/><span class='keys'>Wau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ட</span><br/> </td>
		<td><span class='lang2' >ட்</span><br/><span class='keys'>t</span></td>
		<td><span class='lang2' >ட‍</span><br/><span class='keys'>ta</span></td>
		<td><span class='lang2' >டா</span><br/><span class='keys'>taa</span></td>
		<td><span class='lang2' >டி</span><br/><span class='keys'>ti</span></td>
		<td><span class='lang2' >டீ</span><br/><span class='keys'>tii</span></td>
		<td><span class='lang2' >டு</span><br/><span class='keys'>to</span></td>
		<td><span class='lang2' >டூ</span><br/><span class='keys'>too</span></td>
		<td><span class='lang2' >டெ</span><br/><span class='keys'>te</span></td>
		<td><span class='lang2' >டே</span><br/><span class='keys'>tee</span></td>
		<td><span class='lang2' >டை</span><br/><span class='keys'>tai</span></td>
		<td><span class='lang2' >டொ</span><br/><span class='keys'>tu</span></td>
		<td><span class='lang2' >டோ</span><br/><span class='keys'>tuu</span></td>
		<td><span class='lang2' >டௌ</span><br/><span class='keys'>tau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ண</span><br/> </td>
		<td><span class='lang2' >ண்</span><br/><span class='keys'>N</span></td>
		<td><span class='lang2' >ண‍</span><br/><span class='keys'>Na</span></td>
		<td><span class='lang2' >ணா</span><br/><span class='keys'>Naa</span></td>
		<td><span class='lang2' >ணி</span><br/><span class='keys'>Ni</span></td>
		<td><span class='lang2' >ணீ</span><br/><span class='keys'>Nii</span></td>
		<td><span class='lang2' >ணு</span><br/><span class='keys'>No</span></td>
		<td><span class='lang2' >ணூ</span><br/><span class='keys'>Noo</span></td>
		<td><span class='lang2' >ணெ</span><br/><span class='keys'>Ne</span></td>
		<td><span class='lang2' >ணே</span><br/><span class='keys'>Nee</span></td>
		<td><span class='lang2' >ணை</span><br/><span class='keys'>Nai</span></td>
		<td><span class='lang2' >ணொ</span><br/><span class='keys'>Nu</span></td>
		<td><span class='lang2' >ணோ</span><br/><span class='keys'>Nuu</span></td>
		<td><span class='lang2' >ணௌ</span><br/><span class='keys'>Nau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >த</span><br/> </td>
		<td><span class='lang2' >த்</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' >த‍</span><br/><span class='keys'>Ta</span></td>
		<td><span class='lang2' >தா</span><br/><span class='keys'>Taa</span></td>
		<td><span class='lang2' >தி</span><br/><span class='keys'>Ti</span></td>
		<td><span class='lang2' >தீ</span><br/><span class='keys'>Tii</span></td>
		<td><span class='lang2' >து</span><br/><span class='keys'>To</span></td>
		<td><span class='lang2' >தூ</span><br/><span class='keys'>Too</span></td>
		<td><span class='lang2' >தெ</span><br/><span class='keys'>Te</span></td>
		<td><span class='lang2' >தே</span><br/><span class='keys'>Tee</span></td>
		<td><span class='lang2' >தை</span><br/><span class='keys'>Tai</span></td>
		<td><span class='lang2' >தொ</span><br/><span class='keys'>Tu</span></td>
		<td><span class='lang2' >தோ</span><br/><span class='keys'>Tu</span></td>
		<td><span class='lang2' >தௌ</span><br/><span class='keys'>Tau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ந</span><br/> </td>
		<td><span class='lang2' >ந்</span><br/><span class='keys'>w</span></td>
		<td><span class='lang2' >ந‍</span><br/><span class='keys'>wa</span></td>
		<td><span class='lang2' >நா</span><br/><span class='keys'>waa</span></td>
		<td><span class='lang2' >நி</span><br/><span class='keys'>wi</span></td>
		<td><span class='lang2' >நீ</span><br/><span class='keys'>wii</span></td>
		<td><span class='lang2' >நு</span><br/><span class='keys'>wo</span></td>
		<td><span class='lang2' >நூ</span><br/><span class='keys'>woo</span></td>
		<td><span class='lang2' >நெ</span><br/><span class='keys'>we</span></td>
		<td><span class='lang2' >நே</span><br/><span class='keys'>wee</span></td>
		<td><span class='lang2' >நை</span><br/><span class='keys'>wai</span></td>
		<td><span class='lang2' >நொ</span><br/><span class='keys'>wu</span></td>
		<td><span class='lang2' >நோ</span><br/><span class='keys'>wuu</span></td>
		<td><span class='lang2' >நௌ</span><br/><span class='keys'>wau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ப</span><br/> </td>
		<td><span class='lang2' >ப்</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >ப‍</span><br/><span class='keys'>pa</span></td>
		<td><span class='lang2' >பா</span><br/><span class='keys'>paa</span></td>
		<td><span class='lang2' >பி</span><br/><span class='keys'>pi</span></td>
		<td><span class='lang2' >பீ</span><br/><span class='keys'>pii</span></td>
		<td><span class='lang2' >பு</span><br/><span class='keys'>po</span></td>
		<td><span class='lang2' >பூ</span><br/><span class='keys'>poo</span></td>
		<td><span class='lang2' >பெ</span><br/><span class='keys'>pe</span></td>
		<td><span class='lang2' >பே</span><br/><span class='keys'>pee</span></td>
		<td><span class='lang2' >பை</span><br/><span class='keys'>pai</span></td>
		<td><span class='lang2' >பொ</span><br/><span class='keys'>pu</span></td>
		<td><span class='lang2' >போ</span><br/><span class='keys'>puu</span></td>
		<td><span class='lang2' >பௌ</span><br/><span class='keys'>pau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ம</span><br/> </td>
		<td><span class='lang2' >ம்</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >மா</span><br/><span class='keys'>ma</span></td>
		<td><span class='lang2' >மா</span><br/><span class='keys'>maa</span></td>
		<td><span class='lang2' >மி</span><br/><span class='keys'>mi</span></td>
		<td><span class='lang2' >ம்மீ</span><br/><span class='keys'>mii</span></td>
		<td><span class='lang2' >மு</span><br/><span class='keys'>mo</span></td>
		<td><span class='lang2' >மூ</span><br/><span class='keys'>moo</span></td>
		<td><span class='lang2' >மெ</span><br/><span class='keys'>me</span></td>
		<td><span class='lang2' >மே</span><br/><span class='keys'>mee</span></td>
		<td><span class='lang2' >மை</span><br/><span class='keys'>mai</span></td>
		<td><span class='lang2' >மொ</span><br/><span class='keys'>mu</span></td>
		<td><span class='lang2' >மோ</span><br/><span class='keys'>muu</span></td>
		<td><span class='lang2' >மௌ</span><br/><span class='keys'>mau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ய</span><br/> </td>
		<td><span class='lang2' >ய்</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >ய‍</span><br/><span class='keys'>ya</span></td>
		<td><span class='lang2' >யா</span><br/><span class='keys'>yaa</span></td>
		<td><span class='lang2' >யி</span><br/><span class='keys'>yi</span></td>
		<td><span class='lang2' >யீ</span><br/><span class='keys'>yii</span></td>
		<td><span class='lang2' >யு</span><br/><span class='keys'>yo</span></td>
		<td><span class='lang2' >யூ</span><br/><span class='keys'>yoo</span></td>
		<td><span class='lang2' >யெ</span><br/><span class='keys'>ye</span></td>
		<td><span class='lang2' >யே</span><br/><span class='keys'>yee</span></td>
		<td><span class='lang2' >யை</span><br/><span class='keys'>yai</span></td>
		<td><span class='lang2' >யொ</span><br/><span class='keys'>yu</span></td>
		<td><span class='lang2' >யோ</span><br/><span class='keys'>yuu</span></td>
		<td><span class='lang2' >யௌ</span><br/><span class='keys'>yau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ர</span><br/> </td>
		<td><span class='lang2' >ர்</span><br/><span class='keys'>r</span></td>
		<td><span class='lang2' >ர‍</span><br/><span class='keys'>ra</span></td>
		<td><span class='lang2' >ரா</span><br/><span class='keys'>raa</span></td>
		<td><span class='lang2' >ரி</span><br/><span class='keys'>ri</span></td>
		<td><span class='lang2' >ரீ</span><br/><span class='keys'>rii</span></td>
		<td><span class='lang2' >ரு</span><br/><span class='keys'>ro</span></td>
		<td><span class='lang2' >ரூ</span><br/><span class='keys'>roo</span></td>
		<td><span class='lang2' >ரெ</span><br/><span class='keys'>re</span></td>
		<td><span class='lang2' >ரே</span><br/><span class='keys'>ree</span></td>
		<td><span class='lang2' >ரை</span><br/><span class='keys'>rai</span></td>
		<td><span class='lang2' >ரொ</span><br/><span class='keys'>ru</span></td>
		<td><span class='lang2' >ரோ</span><br/><span class='keys'>ruu</span></td>
		<td><span class='lang2' >ரௌ</span><br/><span class='keys'>rau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ல</span><br/> </td>
		<td><span class='lang2' >ல்</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >ல‍</span><br/><span class='keys'>la</span></td>
		<td><span class='lang2' >லா</span><br/><span class='keys'>laa</span></td>
		<td><span class='lang2' >லி</span><br/><span class='keys'>li</span></td>
		<td><span class='lang2' >லீ</span><br/><span class='keys'>lii</span></td>
		<td><span class='lang2' >லு</span><br/><span class='keys'>lo</span></td>
		<td><span class='lang2' >லூ</span><br/><span class='keys'>loo</span></td>
		<td><span class='lang2' >லெ</span><br/><span class='keys'>le</span></td>
		<td><span class='lang2' >லே</span><br/><span class='keys'>lee</span></td>
		<td><span class='lang2' >லை</span><br/><span class='keys'>lai</span></td>
		<td><span class='lang2' >லொ</span><br/><span class='keys'>lu</span></td>
		<td><span class='lang2' >லோ</span><br/><span class='keys'>luu</span></td>
		<td><span class='lang2' >லௌ</span><br/><span class='keys'>lau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >வ</span><br/> </td>
		<td><span class='lang2' >வ்</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >வ‍</span><br/><span class='keys'>va</span></td>
		<td><span class='lang2' >வா</span><br/><span class='keys'>vaa</span></td>
		<td><span class='lang2' >வி</span><br/><span class='keys'>vi</span></td>
		<td><span class='lang2' >வீ</span><br/><span class='keys'>vii</span></td>
		<td><span class='lang2' >வு</span><br/><span class='keys'>vo</span></td>
		<td><span class='lang2' >வூ</span><br/><span class='keys'>voo</span></td>
		<td><span class='lang2' >வெ</span><br/><span class='keys'>ve</span></td>
		<td><span class='lang2' >வே</span><br/><span class='keys'>vee</span></td>
		<td><span class='lang2' >வை</span><br/><span class='keys'>vai</span></td>
		<td><span class='lang2' >வொ</span><br/><span class='keys'>vu</span></td>
		<td><span class='lang2' >வோ</span><br/><span class='keys'>vuu</span></td>
		<td><span class='lang2' >வௌ</span><br/><span class='keys'>vau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ழ</span><br/> </td>
		<td><span class='lang2' >ழ்</span><br/><span class='keys'>z</span></td>
		<td><span class='lang2' >ழ‍</span><br/><span class='keys'>za</span></td>
		<td><span class='lang2' >ழா</span><br/><span class='keys'>zaa</span></td>
		<td><span class='lang2' >ழி</span><br/><span class='keys'>zi</span></td>
		<td><span class='lang2' >ழீ</span><br/><span class='keys'>zii</span></td>
		<td><span class='lang2' >ழு</span><br/><span class='keys'>zo</span></td>
		<td><span class='lang2' >ழூ</span><br/><span class='keys'>zoo</span></td>
		<td><span class='lang2' >ழெ</span><br/><span class='keys'>ze</span></td>
		<td><span class='lang2' >ழே</span><br/><span class='keys'>zee</span></td>
		<td><span class='lang2' >ழை</span><br/><span class='keys'>zai</span></td>
		<td><span class='lang2' >ழொ</span><br/><span class='keys'>zu</span></td>
		<td><span class='lang2' >ழோ</span><br/><span class='keys'>zuu</span></td>
		<td><span class='lang2' >ழௌ</span><br/><span class='keys'>zau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ள</span><br/> </td>
		<td><span class='lang2' >ள்</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >ள‍</span><br/><span class='keys'>La</span></td>
		<td><span class='lang2' >ளா</span><br/><span class='keys'>Laa</span></td>
		<td><span class='lang2' >ளி</span><br/><span class='keys'>Li</span></td>
		<td><span class='lang2' >ளீ</span><br/><span class='keys'>Lii</span></td>
		<td><span class='lang2' >ளு</span><br/><span class='keys'>Lo</span></td>
		<td><span class='lang2' >ளூ</span><br/><span class='keys'>Loo</span></td>
		<td><span class='lang2' >ளெ</span><br/><span class='keys'>Le</span></td>
		<td><span class='lang2' >ளே</span><br/><span class='keys'>Lee</span></td>
		<td><span class='lang2' >ளை</span><br/><span class='keys'>Lai</span></td>
		<td><span class='lang2' >ளொ</span><br/><span class='keys'>Lu</span></td>
		<td><span class='lang2' >ளோ</span><br/><span class='keys'>Luu</span></td>
		<td><span class='lang2' >ளௌ</span><br/><span class='keys'>Lau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ற</span><br/> </td>
		<td><span class='lang2' >ற்</span><br/><span class='keys'>R</span></td>
		<td><span class='lang2' >ற‍</span><br/><span class='keys'>Ra</span></td>
		<td><span class='lang2' >றா</span><br/><span class='keys'>Raa</span></td>
		<td><span class='lang2' >றி</span><br/><span class='keys'>Ri</span></td>
		<td><span class='lang2' >றீ</span><br/><span class='keys'>Rii</span></td>
		<td><span class='lang2' >று</span><br/><span class='keys'>Ro</span></td>
		<td><span class='lang2' >றூ</span><br/><span class='keys'>Roo</span></td>
		<td><span class='lang2' >றெ</span><br/><span class='keys'>Re</span></td>
		<td><span class='lang2' >றே</span><br/><span class='keys'>Ree</span></td>
		<td><span class='lang2' >றை</span><br/><span class='keys'>Rai</span></td>
		<td><span class='lang2' >றொ</span><br/><span class='keys'>Ru</span></td>
		<td><span class='lang2' >றோ</span><br/><span class='keys'>Ruu</span></td>
		<td><span class='lang2' >றௌ</span><br/><span class='keys'>Rau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ன</span><br/> </td>
		<td><span class='lang2' >ன்</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >ன‍</span><br/><span class='keys'>na</span></td>
		<td><span class='lang2' >னா</span><br/><span class='keys'>naa</span></td>
		<td><span class='lang2' >னி</span><br/><span class='keys'>ni</span></td>
		<td><span class='lang2' >னீ</span><br/><span class='keys'>nii</span></td>
		<td><span class='lang2' >னு</span><br/><span class='keys'>no</span></td>
		<td><span class='lang2' >னூ</span><br/><span class='keys'>noo</span></td>
		<td><span class='lang2' >னெ</span><br/><span class='keys'>ne</span></td>
		<td><span class='lang2' >னே</span><br/><span class='keys'>nee</span></td>
		<td><span class='lang2' >னை</span><br/><span class='keys'>nai</span></td>
		<td><span class='lang2' >னொ</span><br/><span class='keys'>nu</span></td>
		<td><span class='lang2' >னோ</span><br/><span class='keys'>nuu</span></td>
		<td><span class='lang2' >னௌ</span><br/><span class='keys'>nau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=14>&nbsp;</td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=bottom>Grantha Consonants</td>
		<td colspan=13></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஜ</span><br/> </td>
		<td><span class='lang2' >ஜ்</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >ஜ‍</span><br/><span class='keys'>ja</span></td>
		<td><span class='lang2' >ஜா</span><br/><span class='keys'>jaa</span></td>
		<td><span class='lang2' >ஜி</span><br/><span class='keys'>ji</span></td>
		<td><span class='lang2' >ஜீ</span><br/><span class='keys'>jii</span></td>
		<td><span class='lang2' >ஜு</span><br/><span class='keys'>jo</span></td>
		<td><span class='lang2' >ஜூ</span><br/><span class='keys'>joo</span></td>
		<td><span class='lang2' >ஜெ</span><br/><span class='keys'>je</span></td>
		<td><span class='lang2' >ஜே</span><br/><span class='keys'>jee</span></td>
		<td><span class='lang2' >ஜை</span><br/><span class='keys'>jai</span></td>
		<td><span class='lang2' >ஜொ</span><br/><span class='keys'>ju</span></td>
		<td><span class='lang2' >ஜோ</span><br/><span class='keys'>juu</span></td>
		<td><span class='lang2' >ஜௌ</span><br/><span class='keys'>jau</span></td>
		</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td style='background-color:#dedede'><span class='lang2'>ஷ</span><br/> </td>
		<td><span class='lang2' >ஷ்</span><br/><span class='keys'>sh</span></td>
		<td><span class='lang2' >ஷ‍</span><br/><span class='keys'>sha</span></td>
		<td><span class='lang2' >ஷா</span><br/><span class='keys'>sha</span></td>
		<td><span class='lang2' >ஷி</span><br/><span class='keys'>shi</span></td>
		<td><span class='lang2' >ஷீ</span><br/><span class='keys'>shii</span></td>
		<td><span class='lang2' >ஷு</span><br/><span class='keys'>sho</span></td>
		<td><span class='lang2' >ஷூ</span><br/><span class='keys'>shoo</span></td>
		<td><span class='lang2' >ஷெ</span><br/><span class='keys'>she</span></td>
		<td><span class='lang2' >ஷே</span><br/><span class='keys'>shee</span></td>
		<td><span class='lang2' >ஷை</span><br/><span class='keys'>shai</span></td>
		<td><span class='lang2' >ஷொ</span><br/><span class='keys'>shu</span></td>
		<td><span class='lang2' >ஷோ</span><br/><span class='keys'>shuu</span></td>
		<td><span class='lang2' >ஷௌ</span><br/><span class='keys'>shau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஸ</span><br/> </td>
		<td><span class='lang2' >ஸ்</span><br/><span class='keys'>S</span></td>
		<td><span class='lang2' >ஸ‍</span><br/><span class='keys'>Sa</span></td>
		<td><span class='lang2' >ஸா</span><br/><span class='keys'>Saa</span></td>
		<td><span class='lang2' >ஸி</span><br/><span class='keys'>Si</span></td>
		<td><span class='lang2' >ஸீ</span><br/><span class='keys'>Sii</span></td>
		<td><span class='lang2' >ஸு</span><br/><span class='keys'>So</span></td>
		<td><span class='lang2' >ஸூ</span><br/><span class='keys'>Soo</span></td>
		<td><span class='lang2' >ஸெ</span><br/><span class='keys'>Se</span></td>
		<td><span class='lang2' >ஸே</span><br/><span class='keys'>See</span></td>
		<td><span class='lang2' >ஸை</span><br/><span class='keys'>Sai</span></td>
		<td><span class='lang2' >ஸொ</span><br/><span class='keys'>Su</span></td>
		<td><span class='lang2' >ஸோ</span><br/><span class='keys'>Suu</span></td>
		<td><span class='lang2' >ஸௌ</span><br/><span class='keys'>Sau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td style='background-color:#dedede'><span class='lang2' >ஹ</span><br/> </td>
		<td><span class='lang2' >ஹ்</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >ஹ‍</span><br/><span class='keys'>ha</span></td>
		<td><span class='lang2' >ஹா</span><br/><span class='keys'>haa</span></td>
		<td><span class='lang2' >ஹி</span><br/><span class='keys'>hi</span></td>
		<td><span class='lang2' >ஹீ</span><br/><span class='keys'>hii</span></td>
		<td><span class='lang2' >ஹு</span><br/><span class='keys'>ho</span></td>
		<td><span class='lang2' >ஹூ</span><br/><span class='keys'>hoo</span></td>
		<td><span class='lang2' >ஹெ</span><br/><span class='keys'>he</span></td>
		<td><span class='lang2' >ஹே</span><br/><span class='keys'>hee</span></td>
		<td><span class='lang2' >ஹை</span><br/><span class='keys'>hai</span></td>
		<td><span class='lang2' >ஹொ</span><br/><span class='keys'>hu</span></td>
		<td><span class='lang2' >ஹோ</span><br/><span class='keys'>huu</span></td>
		<td><span class='lang2' >ஹௌ</span><br/><span class='keys'>hau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >க்ஷ</span><br/> </td>
		<td><span class='lang2' >க்ஷ்</span><br/><span class='keys'>x</span></td>
		<td><span class='lang2' >க்ஷ‍</span><br/><span class='keys'>xa</span></td>
		<td><span class='lang2' >க்ஷா</span><br/><span class='keys'>xaa</span></td>
		<td><span class='lang2' >க்ஷி</span><br/><span class='keys'>xi</span></td>
		<td><span class='lang2' >க்ஷீ</span><br/><span class='keys'>xii</span></td>
		<td><span class='lang2' >க்ஷு</span><br/><span class='keys'>xo</span></td>
		<td><span class='lang2' >க்ஷூ</span><br/><span class='keys'>xoo</span></td>
		<td><span class='lang2' >க்ஷெ</span><br/><span class='keys'>xe</span></td>
		<td><span class='lang2' >க்ஷே</span><br/><span class='keys'>xee</span></td>
		<td><span class='lang2' >க்ஷை</span><br/><span class='keys'>xai</span></td>
		<td><span class='lang2' >க்ஷொ</span><br/><span class='keys'>xu</span></td>
		<td><span class='lang2' >க்ஷோ</span><br/><span class='keys'>xuu</span></td>
		<td><span class='lang2' >க்ஷௌ</span><br/><span class='keys'>xau</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=14>&nbsp;</td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top>Other Characters</td>
		<td colspan=2><span class='lang2' >ஸ்ரீ்</span><br/><span class='keys'>S</span><br /><span class='keys'>hri</span></td>
		<td><span class='lang2' >ஃ</span><br/><span class='keys'>q</span></td>
	</tr>
</table>




