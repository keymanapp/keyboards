<?php	
  $pagename = 'ISIS Tamil Keyboard Help';
  $pagetitle = 'ISIS Tamil Keyboard Help';
  $style = '.lang2 {font-size:130%}';
  require_once('header.php');
?>
  
<p style='margin:0px'>Keyboard &#169; 2008 Gautam Sengupta</p>


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

<h4><a target="_blank" href="chart.pdf"><img border=0 style='vertical-align:bottom' src="<?php echo cdn('img/pdficon_small.gif'); ?>" /></a> Download this documentation in <a target="_blank" href="chart.pdf">PDF format</a>.</h4>


<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically 
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard is designed for the Tamil language, and is part of the ISIS set of keyboards designed to allow typing in all Indic languages.  It is a phonetic keyboard, which means the Tamil characters are arranged according to the letters of the English keyboard.  This makes it easy to use for people learning Tamil, as well as Tamil speakers.  Typing follows a consonant-vowel pattern, and the keyboard is designed for use with a normal QWERTY (English) keyboard.
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

	<p>This keyboard makes typing in Tamil straightforward for anyone familiar with a normal English keyboard.  Consonants and vowels are arranged on the keyboard so that pressing an English letter generally displays the Tamil character which sounds closest to that letter.  Long vowels are usually typed by pressing the vowel key twice.  Some vowels and consonants, however, representing sounds which do not exist in the English alphabet, are located on unused keys or are entered using <span class='keys'>[S*]</span> combinations.  Grantha consonants are also on the keyboard.
</p>

<p>Most of the characters used in Tamil are combinations of consonants and vowels, and these do not appear on the keyboard. Combined consonant-vowel characters are entered by typing the consonant, then the vowel.  To enter <span class='highlightExample'>சா</span>, which is a combination of <span class='highlightExample'>ச்</span> and <span class='highlightExample'>ஆ</span>, type <span class='keys'>ca</span>, and the combinant character will automatically be displayed.  Pressing Backspace once will delete only the vowel component, so the character displayed on the screen will change back to <span class='highlightExample'>ச</span>, and change again if a different vowel is typed.</p>
</div>

<div id="Examples">
<h3>Examples</h3>
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
			<td><span class='lang2' style='color:#0000FF; font-size:120%'>தமிழ் அரிச்சுவடி</span></td>
			<td>"Tamil alphabet"</td>
			<td><span class='keys'>tmiL\ aric\cuvTi</span></td>
		</tr>
	</table>

</div>

<div id="Documentation">
<h3>Keyboard Details</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->
		
<div id='isispackage'>This package is part of the <a target='_blank' href='https://keyman.com/keyboards/isis'>Indian Script Input System (ISIS) keyboard package</a>.</div>
	
<p>This keyboard uses a consonant-vowel order for text input, so the consonant character is always typed before the vowel, regardless of where (relative to the consonant) the vowel marker symbol appears.  As syllables are typed, the characters entered are automatically converted to the appropriate consonant-vowel combinant.  While only the combinant characters are displayed on screen, the consonant and vowel are both stored, so that pressing Backspace once after a combinant deletes only the vowel component.  This means it is necessary to press Backspace twice to delete a combinant character.  However, pressing the Delete key with the cursor in front of a combinant character removes the whole character with one keystroke.</p>

<p>The visible keyboard layout consists of the ten vowels <span class='lang2'>அ ஆ இ ஈ உ ஊ எ ஐ ஒ ஔ</span> (the vowels <span class='lang2'>ஏ ஓ</span> are typed with two keystrokes), the fourteen consonants <span class='lang2'>க ச ட ண த ந ப ம ய ர ல வ ழ ற</span> (others are typed with multiple keystrokes), the Grantha consonants <span class='lang2'>ஸ ஜ ஹ ஷ</span> (<span class='lang2'>க்ஷ</span> is typed with two keystrokes, <span class='lang2'>ஸ்ரீ</span> with five) and the Pulli <span class='lang2'>்</span> and Aytham <span class='lang2'>ஃ</span> marks, and the numerals <span class='lang2'>௧ ௨ ௩ ௪ ௫ ௬ ௭ ௮ ௯ ௰ ௱ ௲</span>.
</p>

<h4>Consonants and Pulli Marks</h4>

<p>Because the consonants contain the implicit vowel <span class='lang2'>அ</span>, to produce a pure consonant it is necessary to add the Pulli mark <span class='lang2'>்</span> by typing <span class='keys'>\</span> immediately after the consonant.  To produce a combined consonant, type the two consonants followed by <span class='keys'>/</span>, which will place the Pulli mark on the first consonant.
</p>
<p>
Most of the consonants are arranged so that they can be typed with a single key.  A few consonants which use the same English (Roman) letter as another consonant, or which have no equivalent English letter, must be typed with two keystrokes.  See the <a href="chart.php">complete keyboard chart</a> for details.
</p>

<h4>Vowels</h4>
<p>Vowels are typed using the English vowel letters.  Tamil distinguishes between short and long vowel sounds, and the keyboard is arranged so that pressing any vowel key once will produce the short vowel, while pressing it twice will produce the long vowel.  For some vowels, pressing <span class='keys'>[S*]</span>together with the vowel key will produce the long vowel, but the vowels <span class='highlightExample'>ஐ</span> and <span class='highlightExample'>ஔ</span>, are typed using the <span class='keys'>[S*]</span>key as shown below.</p>

<p>The first vowel <span class='lang2'>அ</span> is implicit in the consonants.  To produce this as a standalone vowel, press <span class='keys'>a</span>.  Typing <span class='keys'>a</span> immediately after a consonant, however, will produce a combinant of that consonant and the long vowel <span class='lang2'>ஆ</span>.  In general, typing a vowel after anything other than a consonant produces an independent vowel.</p>

<h4>The SRii Character <img src='tamil_srii.png' style='vertical-align:middle' /></h4>
<p>
This character is entered by typing <span class='keys'>s\rii</span>.  <span class='keymanweb'>Currently, some browsers support one, both or neither of these entry methods.  <a href="tamil_srii.php">Click here</a> if you are having difficulty entering this character.</span>
</p>


<h4>Keystroke Examples</h4>
<p>Note: for a complete table of characters and keystrokes, <a href="chart.php">click here</a>.</p>
<p>The following table gives specific examples of how to input characters based on the consonant <span class='highlightExample'>க</span>.  The Grantha consonants  use the same input method.  Examples of these with the consonant <span class='highlightExample'>ஜ</span> are also given below.</p>
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
		<td class='lang2'>க</td><td>்</td><td class='lang2'>க்</td><td><span class='keys'>k\</span></td>
		<td></td>
		<td class='lang2'>ஜ</td><td>்</td><td class='lang2'>ஜ்</td><td><span class='keys'>j\</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>அ</td><td class='lang2'>க‍</td><td><span class='keys'>k</span></td>
		<td></td>
		<td></td><td class='lang2'>அ</td><td class='lang2'>ஜ‍</td><td><span class='keys'>j</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>கா</td><td><span class='keys'>ka</span></td>
		<td></td>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>ஜா</td><td><span class='keys'>ja</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>இ</td><td class='lang2'>கி</td><td><span class='keys'>ki</span></td>
		<td></td>
		<td></td><td class='lang2'>இ</td><td class='lang2'>ஜி</td><td><span class='keys'>ji</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>கீ</td><td><span class='keys'>kii</span></td>
		<td></td>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>ஜீ</td><td><span class='keys'>jii</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>உ</td><td class='lang2'>கு</td><td><span class='keys'>ku</span></td>
		<td></td>
		<td></td><td class='lang2'>உ</td><td class='lang2'>ஜு</td><td><span class='keys'>ju</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>கூ</td><td><span class='keys'>kuu</span></td>
		<td></td>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>ஜூ</td><td><span class='keys'>juu</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>எ</td><td class='lang2'>கெ</td><td><span class='keys'>ke</span></td>
		<td></td>
		<td></td><td class='lang2'>எ</td><td class='lang2'>ஜெ</td><td><span class='keys'>je</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>கே</td><td><span class='keys'>kee</span></td>
		<td></td>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>ஜே</td><td><span class='keys'>jee</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>கை</td><td><span class='keys'>kE</span></td>
		<td></td>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>ஜை</td><td><span class='keys'>jE</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>கொ</td><td><span class='keys'>ko</span></td>
		<td></td>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>ஜொ</td><td><span class='keys'>jo</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>கோ</td><td><span class='keys'>ko</span></td>
		<td></td>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>ஜோ</td><td><span class='keys'>joo</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>கௌ</td><td><span class='keys'>kO</span></td>
		<td></td>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>ஜௌ</td><td><span class='keys'>jO</span></td>
	</tr>

</table>

<h4>Typing Conventions</h4>
<p>All ISIS keyboards are phonetic.  Some hints on how to use the keyboard:</p>

<ul>
<li>The system is phonetic in the true sense, so that's how you get the standalone consonants and vowels.</li>
<li>For long vowels, press the concerned vowel key twice.</li>
<li>To get an aspirated consonant, press <span class='skey'>h</span> after its unaspirated counterpart.</li>
<li>Try typing a vowel after a consonant.</li>
<li>Experiment with <span class='skey'>Shift</span>+<span class='skey'>&lt;any key&gt;</span>.</li>
<li>To get a joined consonant (yukta varna), press <span class='skey'>/</span> (once or twice) after typing the constituent consonants.</li>
<li>To break up a joined consonant, press <span class='skey'>Ctrl</span>+<span class='skey'>/</span>.</li>
</ul>

<h4>Other Characters</h4>
<p>This keyboard does not contain characters such as the symbols for day, month, year, etc., or the glyphs used as vowel modifiers.  Some of the <a href="#Related">alternate Tamil keyboards</a> do allow these characters to be typed.</p>

</div>
<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>
<h4> Fonts</h4>
<p>This keyboard allows only the standard Tamil characters, so will work with the fonts supplied with Windows.  No further downloads of fonts should be required.</p>
<p>If the characters you type or those on the On Screen Keyboard do not appear to display correctly, please read the <a href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<h4>Problem Solving</h4>
<p>If the preceding consonant does not change to a vowel-consonant combinant character when you type a vowel, confirm that you have not typed a Pulli mark ், which identifies the consonant as a pure consonant, or a space.  Typing either of these after a consonant will prevent that consonant from changing to a combinant character.
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
<a href="/go?language=tam&amp;keyboard=Keyboard_ekwunitamil">Anjal Paangu Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_tamil">Inscript Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_visual_media_tamil_modular">Modular (Visual Media)</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_visual_media_tamil_typewriter">Typewriter (Visual Media)</a></p>

</div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="https://keyman.com/keyboards/isis_tamil">Download ISIS Tamil Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/tamil.htm">Tamil Writing System at Omniglot.com</a><br/>
<a target="_blank" href="https://en.wikipedia.org/wiki/Tamil_language">Tamil Language at Wikipedia.org</a><br/>
<a target="_blank" href="https://en.wikipedia.org/wiki/Tamil_script.htm">Tamil Script at Wikipedia.org</a></p>

</div>




<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>All ISIS Keyboards require Windows 2000, XP or greater.
<p>This keyboard requires an English QWERTY hardware keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.2</p>

</div>


<div id="Authorship">
<h3>Authorship</h3>
<p>
This keyboard was created as part of the Indian Script Input System package by Professor Gautam Sengupta of the Center for Applied Linguistics and Translation Studies, University of Hyderabad.  Tavultesoft gratefully acknowledges the contribution made by the author in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  His effort assists in enabling people to communicate in their own language.
</p>
<h3>Copyright and Terms of Use</h3>
<p>
The ISIS Tamil Keyboard for Keyman Desktop and KeymanWeb is Copyright Gautam Sengupta.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from the author.
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



