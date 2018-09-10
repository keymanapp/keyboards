<?php /*
  Name:             keyboard_ekwtamil99uni
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
  $pagename = 'Tamil99 Keyboard Help';
  $pagetitle = 'Tamil99 Keyboard Help';
  $style = 'lang2 {font-size:130%}';
  
  $relatedSites = array("http://$site_tavultesoft/tamil" => "Tamil Keyboards Home");
  require_once('header.php');
  ?>

  
<p style='margin:0px'>Keyboard &#169; 2008, 2015, 2018 thamizha.com and Tavultesoft</p>

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
This keyboard is designed for the Tamil language, and uses the Tamil 99 standard which has been officially approved by the regional government of Tamil Nadu.  Typing follows a consonant-vowel pattern, and the Tamil characters are arranged to make typing simple and fast for users who are familiar with the script.  It is designed for use with a normal QWERTY (English) keyboard.
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

<p>This keyboard layout was designed for ease of typing.  Characters are arranged on the keyboard according to how frequently they are used.  Grantha letters, which are used for typing Sanskrit, are typed using the <span class='keys'>[S*]</span> key. 
Short and long vowels appear next to each other.  For example, <span class='highlightExample'>ஆ</span> (<span class='keys'>q</span> key) is above <span class='highlightExample'>அ</span> (<span class='keys'>a</span> key) , and <span class='highlightExample'>ஓ</span> (<span class='keys'>x</span> key) is beside <span class='highlightExample'>ஒ</span> (<span class='keys'>c</span> key).  Characters which normally appear together are also close together on the keyboard.</p>

<p>Most of the characters used in Tamil are combinations of consonants and vowels, and these do not appear on the keyboard. Combined consonant-vowel characters are entered by typing the consonant, then the vowel.  To enter <span class='highlightExample'>ஙா</span>, which is a combination of <span class='highlightExample'>ங</span> and <span class='highlightExample'>ஆ</span>, type <span class='keys'>b</span> then <span class='keys'>q</span>, and the combinant character will automatically be displayed.  Pressing Backspace once will delete only the vowel component, so the character displayed on the screen will change back to <span class='highlightExample'>ங</span>, and change again if a different vowel is typed.</p>


</div>

<div id="Examples">
<h3>Examples</h3>
		<!-- Simple example(s) illustrating the notes in the Quickstart section above -->

<?php renderLanguageExamples(); ?>
</div>

<div id="Documentation">
<h3>Keyboard Details</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->
	
<p>This keyboard uses a consonant-vowel order for text input, so the consonant character is always typed before the vowel, regardless of where (relative to the consonant) the vowel marker symbol appears.  As syllables are typed, the characters entered are automatically converted to the appropriate consonant-vowel combinant.  While only the combinant characters are displayed on screen, the consonant and vowel are both stored, so that pressing Backspace once after a combinant deletes only the vowel component.  This means it is necessary to press Backspace twice to delete a combinant character.  However, pressing the Delete key with the cursor in front of a combinant character removes the whole character with one keystroke.</p>

<p>The full keyboard layout consists of the twelve vowels <span class='lang2'>அ ஆ இ ஈ உ ஊ எ ஏ ஐ ஒ ஓ ஔ</span>, the eighteen consonants <span class='lang2'>க ங ச ஞ ட ண த ந ப ம ய ர ல வ ழ ள ற ன</span>, the five Grantha consonants <span class='lang2'>ஸ ஷ ஜ ஹ க்ஷ</span>, the SRii consonant <span class='lang2'>ஸ்ரீ</span>, and the Pulli <span class='lang2'>்</span> and Aytham <span class='lang2'>ஃ</span> marks.</p>

<h4>Pulli Marks and Vowels</h4>
<p>Because the consonants contain the implicit vowel <span class='lang2'>அ</span>, to produce a pure consonant it is necessary to add the Pulli mark <span class='lang2'>்</span> by typing a lower case <span class='keys'>f</span> immediately after the consonant.  Typing the same consonant twice in a row will also convert the first consonant to a consonant-Pulli combinant.  This automatic conversion is then disabled, so that typing the same consonant a third time will not produce a Pulli mark on the second consonant.  Thus typing the same consonant repeatedly results in Pulli marks on the first, third, fifth and so on: <span class='lang2'>க்கக்கக்கக்க</span></p>
<p>Similarly, tying a soft consonant followed by the corresponding hard consonant automatically produces a Pulli mark on the first consonant: <span class='lang2'>ங்க</span></p>
<p>The first vowel <span class='lang2'>அ</span> is implicit in the consonants, so typing this vowel after a consonant will not display the vowel or change the consonant to a combinant.  However, this does de-link the consonant from the next keystroke, so that typing another vowel will result in that vowel being displayed independently, rather than combining with the consonant.  This also prevents the Pulli mark being entered.</p>
<p>In general, typing a vowel after anything other than a consonant produces an independent vowel.</p>

<h4>The SRii Character <img src='srii/tamil_srii.png' style='vertical-align:middle' /></h4>
<p>
This character is entered by typing <span class='keys'>T</span>.  <span class='keymanweb'>Currently, some browsers do not display this character correctly.  <a href="srii/tamil_srii.php">Click here</a> if you are having difficulty entering this character.</span>
</p>

<h4>Keystroke Examples</h4>
<p>Note: for a complete table of characters and keystrokes, <a href="chart.php">click here</a>.</p>
<p>The following table gives specific examples of how to input characters based on the consonant <span class='highlightExample'>க</span>.  The Grantha consonants, which are entered with <span class='keys'>[S*]</span> key combinations, use the same input method.  Examples of these with the consonant <span class='highlightExample'>ஜ</span> are also given below.</p>
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
		<td class='lang2'>க</td><td>்</td><td class='lang2'>க்</td><td><span class='keys'>hf</span></td>
		<td></td>
		<td class='lang2'>ஜ</td><td>்</td><td class='lang2'>ஜ்</td><td><span class='keys'>Ef</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>அ</td><td class='lang2'>க‍</td><td><span class='keys'>ha</span></td>
		<td></td>
		<td></td><td class='lang2'>அ</td><td class='lang2'>ஜ‍</td><td><span class='keys'>Ea</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>கா</td><td><span class='keys'>hq</span></td>
		<td></td>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>ஜா</td><td><span class='keys'>Eq</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>இ</td><td class='lang2'>கி</td><td><span class='keys'>hs</span></td>
		<td></td>
		<td></td><td class='lang2'>இ</td><td class='lang2'>ஜி</td><td><span class='keys'>Es</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>கீ</td><td><span class='keys'>hw</span></td>
		<td></td>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>ஜீ</td><td><span class='keys'>Ew</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>உ</td><td class='lang2'>கு</td><td><span class='keys'>hd</span></td>
		<td></td>
		<td></td><td class='lang2'>உ</td><td class='lang2'>ஜு</td><td><span class='keys'>Ed</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>கூ</td><td><span class='keys'>he</span></td>
		<td></td>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>ஜூ</td><td><span class='keys'>Ee</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>எ</td><td class='lang2'>கெ</td><td><span class='keys'>hg</span></td>
		<td></td>
		<td></td><td class='lang2'>எ</td><td class='lang2'>ஜெ</td><td><span class='keys'>Eg</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>கே</td><td><span class='keys'>ht</span></td>
		<td></td>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>ஜே</td><td><span class='keys'>Et</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>கை</td><td><span class='keys'>hr</span></td>
		<td></td>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>ஜை</td><td><span class='keys'>Er</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>கொ</td><td><span class='keys'>hc</span></td>
		<td></td>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>ஜொ</td><td><span class='keys'>Ec</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>கோ</td><td><span class='keys'>hx</span></td>
		<td></td>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>ஜோ</td><td><span class='keys'>Ex</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>கௌ</td><td><span class='keys'>hz</span></td>
		<td></td>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>ஜௌ</td><td><span class='keys'>Ez</span></td>
	</tr>

</table>

<h4>Other Characters</h4>
<table>
	<col width=200 />
	<col width=80 span=2 />
	<col width=40 />
	<col width=200 />
	<col width=80 span=2 />
	<tr valign="top">
		<td style='text-align:left'>Apart from the Grantha consonants, several other characters are also typed using the <span class='keys'>[S*]</span> key.  These include:</td>
		<td style='text-align:center'>Character
		<p style='line-height:15px'><span class='lang2' >௳</span> (day)</p>
		<p style='line-height:15px'><span class='lang2' >௴</span> (month)</p>
		<p style='line-height:15px'><span class='lang2' >௵</span> (year)</p>
		<p style='line-height:15px'><span class='lang2' >௶</span> (debit)</p>
		<p style='line-height:15px'><span class='lang2' >௷</span> (credit)</p>
		<p style='line-height:15px'><span class='lang2' >௸</span> (etc.)</p>
		<p style='line-height:15px'><span class='lang2' >௹</span> (Rupee)</p>
		<p style='line-height:15px'><span class='lang2' >௺</span> (numeral)</p>
		</td>
		<td style='text-align:center'>Keystrokes
		<p style='line-height:15px'><span class='keys' >Z</span></p>
		<p style='line-height:15px'><span class='keys' >X</span></p>
		<p style='line-height:15px'><span class='keys' >C</span></p>
		<p style='line-height:15px'><span class='keys' >V</span></p>
		<p style='line-height:15px'><span class='keys' >B</span></p>
		<p style='line-height:15px'><span class='keys' >D</span></p>
		<p style='line-height:15px'><span class='keys' >A</span></p>
		<p style='line-height:15px'><span class='keys' >S</span></p>
		</td>
		<td width=50></td>
		<td style='text-align:left'>The caret mark (<span class='keys'>6</span>) is used to produce various other characters, such as the glyphs used as vowel modifiers.  These can be produced by typing the caret mark <span class='keys'>^</span> and then the corresponding vowel.  Other characters typed in combination with <span class='keys'>^</span> are given in the table on the right:</td>
		<td style='text-align:center'>Character
		<p style='line-height:15px'><span class='lang2'>‘</span></p>
		<p style='line-height:15px'><span class='lang2'>’</span></p>
		<p style='line-height:15px'><span class='lang2'>“</span></p>
		<p style='line-height:15px'><span class='lang2'>”</span></p>
		<p style='line-height:15px'><span class='lang2'>©</span></p>
		<p style='line-height:15px'><span class='lang2'>•</span></p>
		<p style='line-height:15px'><span class='lang2'>^</span></p>
		</td>
		<td style='text-align:center'>Keystrokes
		<p style='line-height:15px'><span class='keys'>^7</span></p>
		<p style='line-height:15px'><span class='keys'>^8</span></p>
		<p style='line-height:15px'><span class='keys'>^9</span></p>
		<p style='line-height:15px'><span class='keys'>^0</span></p>
		<p style='line-height:15px'><span class='keys'>^c</span></p>
		<p style='line-height:15px'><span class='keys'>^.</span></p>
		<p style='line-height:15px'><span class='keys'>^^</span></p>
		</td>
		</tr>
</table>

</div>

<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>
<div class='keymandesktop'>
<h4>Using Tamil keyboards with Word 2007</h4>
<p style='margin-bottom: 4px'>Sometimes when using Word 2007, the Pulli mark <span class='lang2'>்</span> is not suppressed correctly.  For example:</p>
  <table style='text-align:left'>
  <col width=180 span=3 />
  <tr><td>Key sequence</td><td>Correct output</td><td>Word output</td></tr>
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
<p>Some of the fonts included with Windows do not include all the Tamil characters that are available with this keyboard.  In order to display every character correctly, we recommend you download and install <span style="font-weight:bold">Tamil fonts</span>.</p>
<p class='keymanweb'>If the characters you type or those on the On Screen Keyboard do not appear to display correctly, please read the <a href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<h4>Problem Solving</h4>
<p>If the preceding consonant does not change to a vowel-consonant combinant character when you type a vowel, confirm that you have not typed a Pulli mark <span class='lang2'>்</span>, which identifies the consonant as a pure consonant, or the first vowel அ, which identifies the consonant as the implicit-vowel consonant.  Typing either of these after a consonant will prevent that consonant from changing to a combinant character.
</p>

</div>

<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>Further Resources</h2>
<div id="Related">
		<!-- A list of links to related keyboards - to the help pages or to (download) the keyboards? -->

<h3>Related Keyboard Layouts</h3>
<p>Other Keyboard Layouts for the Tamil language:</p>
<p><a href="/go?language=tam&amp;keyboard=Keyboard_ekwbamuni">Suratha Bamuni (Bamini Typewriter)</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_ekwunitamil">Anjal Paangu</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_isis_tamil">ISIS Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_tamil">Inscript Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_visual_media_tamil_modular">Modular (Visual Media)</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_visual_media_tamil_typewriter">Typewriter (Visual Media)</a></p>

</div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=451&amp;FromKeyman=0">Download Tamil99 Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/tamil.htm">Tamil Writing System at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/tamil_language">Tamil Language at Wikipedia.org</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/tamil_script.htm">Tamil Script at Wikipedia.org</a></p>

</div>




<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.1</p>

</div>


<div id="Authorship">
<h3>Keyboard Authorship</h3>
<p>
This keyboard was created by Mugunth (mugunth@gmail.com), Umar (csd_one@yahoo.com) and K. Sethu (skhome@gmail.com).  For more information about keyboards produced by these developers, see <a target="_blank" href="http://thamizha.com">http://thamizha.com</a>.  Tavultesoft gratefully acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  Their effort assists in enabling people to communicate in their own language.
</p>
<h3>Copyright and Terms of Use</h3>
<p>
The Tamil99 Keyboard for Keyman Desktop and KeymanWeb is Copyright 2008, 2015, 2018 thamizha.com and Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
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




