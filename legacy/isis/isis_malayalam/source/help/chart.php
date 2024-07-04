<?php /*
  Name:             keyboard_isis_malayalam
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
  $pagename = 'ISIS Malayalam Keyboard Help';
  $pagetitle = 'ISIS Malayalam Keyboard Help';
  $style = 'lang2 {font-size:250%}';
  
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

<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically 
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard lets you type in Malayalam.  It is one of the ISIS set of keyboards, which allow typing in all Indian languages.
The keyboard is phonetic, which means it follows the English (QWERTY) layout.  This makes it easy for people who are learning Malayalam to use, as well as for Malayalam speakers.
</p>
<p class='keymanweb'>
If a special font is needed for this language, most computers will download it automatically.
</p>
<p>
<a href="#Related">Click here</a> to see other keyboard layouts for Malayalam.
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
<p>Anybody who is familiary with a normal English keyboard can used this keyboard to type Malayalam.  If you press an English letter, the closest Malayalam character will be displayed.  You can type long vowels by pressing the vowel key twice.  Malayalam includes some consonants and vowels which are not in English, so these are typed with spare keys or with <span class='keys'>[S*]</span>.
</p>
<p>Most Malayalam characters have both consonant and vowel parts, and each part should be typed separately.  The consonant part is always typed before the vowel, no matter where the vowel part is written.  For example, typing <span class='keys'>i</span> will produce the vowel <span class='highlightExample lang2' style='font-size:200%'>ഇ</span>.  If this vowel is typed after a consonant has been typed, it will be combined with a consonant, such as <span class='highlightExample lang2' style='font-size:200%'>കി</span> (<span class='keys'>ki</span>).  If you press Backspace once, only the vowel part will be erased, and you can type a different vowel.
</p>

</div>

<div id="Examples">
<h3>Examples</h3>
		<!-- Simple example(s) illustrating the notes in the Quickstart section above -->

<?php renderLanguageExamples(); ?>
</div>

<div id="Documentation">
<h3>Keyboard Details</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->
	
<p>The On Screen Keyboard shows the standalone vowels <span class='lang2' style='font-size:200%'>അ ആ ഇ ഈ ഉ ഊ ഋ എ ഏ ഐ ഒ ഓ ഔ</span>, and many of the normal consonants: <span class='lang2' style='font-size:200%'>ക ഖ ഗ ഘ ങ ച ഛ ജ ഝ ട ഠ ഡ ഢ ണ ത ഥ ദ ധ ന പ ഫ ബ ഭ മ യ ര ല ശ ഷ സ ഹ ള ഴ റ</span>.  Other consonants are typed using more than one key.  The keyboard also includes Malayalam numbers, as well as punctuation and special characters.</p>

<p>Malayalam vowels and consonants are usually combined, so when you type a consonant and a vowel part, they will be joined into one character.  If you use the arrow keys to move through the text, you only need to press an arrow key once to move past each character.  If you press Delete before (on the left of) a combined consonant and vowel, it will be erased completely, but if you press Backspace after a character, only the vowel part will be erased (even if the vowel part appears before the consonant).
</p>

<h4>Vowels and Consonants</h4>
<p>When you type consonants and vowel parts, you should always type the consonant part first, even when the vowel part appears on the left of the consonant.  If you type any of the independent vowels, they will not be combined with consonants.
</p>
<p>All the consonants naturally include the vowel sound <span class='highlightExample lang2' style='font-size:200%'>അ</span>, so if you want to produce a consonant with no vowel, you need to add the <span class='lang2' style='font-size:200%'>്</span> mark.  You can do this by typing <span class='keys'>\</span> right after typing a consonant.  After you have typed the <span class='lang2' style='font-size:200%'>্</span> mark, you cannot type a vowel to combine with that consonant.
</p>
<p>Malayalam includes many combined consonants, and these are not shown on the keyboard.  To type a combined consonant, type the first consonant, then the <span class='lang2' style='font-size:200%'>്</span> mark, then the second consonant.  The computer will then combine the two consonants into a single combined character.  For example, typing <span class='keys'>k\k</span> produces the combined consonant <span class='highlightExample lang2' style='font-size:200%'>ക്ക</span>.
</p>

<h4>Keystroke Examples</h4>
<p>In the following table you can see examples of how to type the different vowels with the consonant <span class='highlightExample lang2' style='font-size:200%'>ക</span>.  For a table of all the normal Malayalam characters and how to type them, <a href="chart.php">click here</a>.</p>
<br/>
<table>
	<col width=80 span=3 />
	<col width=150 />
	<tr style='text-align:center; font-weight:normal'>
		<td>Consonant</td><td>Vowel</td><td>Combined</td><td>Keystrokes</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'>ക</td><td class='lang2' style='font-size:200%'>്</td><td class='lang2' style='font-size:200%'>ക്</td><td><span class='keys'>k\</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>അ</td><td class='lang2' style='font-size:200%'>ക</td><td><span class='keys'>k</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ആ</td><td class='lang2' style='font-size:200%'>കാ</td><td><span class='keys'>ka</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഇ</td><td class='lang2' style='font-size:200%'>കി</td><td><span class='keys'>ki</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഈ</td><td class='lang2' style='font-size:200%'>കീ</td><td><span class='keys'>kii</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഉ</td><td class='lang2' style='font-size:200%'>കു</td><td><span class='keys'>ku</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഊ</td><td class='lang2' style='font-size:200%'>കൂ</td><td><span class='keys'>kuu</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഋ</td><td class='lang2' style='font-size:200%'>കൃ</td><td></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>എ</td><td class='lang2' style='font-size:200%'>കെ</td><td><span class='keys'>ke</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഏ</td><td class='lang2' style='font-size:200%'>കേ</td><td><span class='keys'>kee</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഐ</td><td class='lang2' style='font-size:200%'>കൈ</td><td><span class='keys'>kE</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഒ</td><td class='lang2' style='font-size:200%'>കൊ</td><td><span class='keys'>ko</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഓ</td><td class='lang2' style='font-size:200%'>കോ</td><td><span class='keys'>koo</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഔ</td><td class='lang2' style='font-size:200%'>കൌ</td><td><span class='keys'>kO</span></td>
	</tr>
	
</table>

</div>

<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>
<h4> Fonts</h4>
<p class='keymanweb'>If you see squares when you type, or the Malayalam characters do not appear correctly, please read the <a href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<h4>Problem Solving</h4>
<p>If a vowel does not combine with a consonant, make sure you have typed the consonant first.  Also check that you have not typed another vowel already, or the <span class='lang2' style='font-size:200%'>്</span> mark.
</p>

</div>

<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>Further Resources</h2>
<div id="Related">
		<!-- A list of links to related keyboards - to the help pages or to (download) the keyboards? -->

<h3>Related Keyboard Layouts</h3>
<p>Other Keyboard Layouts for the Malayalam language:</p>
<p><a href="/go?language=mal&amp;keyboard=keyboard_malayalam">Mozhi Malayalam</a><br/>
<p><a href="/go?language=mal&amp;keyboard=keyboard_malayalam_inscript">Inscript Malayalam</a><br/>

</div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=424&amp;FromKeyman=0">Download ISIS Malayalam for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/malayalam.htm">Malayalam Alphabet at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/malayalam">Malayalam Language at Wikipedia.org</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/malayalam_script">Malayalam Script at Wikipedia.org</a></p>

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
This keyboard was created as part of the Indian Script Input System package by Professor Gautam Sengupta of the Center for Applied Linguistics and Translation Studies, University of Hyderabad.  Tavultesoft gratefully acknowledges the contribution made by the author in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  His effort assists in enabling people to communicate in their own language.
</p>
<h3>Copyright and Terms of Use</h3>
<p>
The ISIS Malayalam Keyboard for Keyman Desktop and KeymanWeb is Copyright Gautam Sengupta.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from the author.
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
<p>The following chart lists all the characters available with this keyboard.  Below each character are the keys used to type it.
<br/>Because Malayalam includes hundreds of combined consonants, these are not shown on this chart.  To type combined consonants, type a <span class='lang2' style='font-size:200%'>്</span> mark (<span class='keys'>\</span>) between the two consonants.</p>

<table border=0 cellspacing=2 cellpadding=1>
	<col width=65 style='text-align:center; background-color:#dedede' />
	<col span=16 width=65 style='text-align:center; background-color:#ffffff' />

	<tr style='text-align:center; font-weight:normal; background-color:#dedede'>
		<td style='text-align:right; font-weight:bold; background-color:#dedede' valign=bottom>\<span style='text-decoration:underline'>&nbsp;Vowels</span>&nbsp;<br/>C'nants\</td>
		<td><span class='lang2' >്</span><br/><span class='keys'>\</span></td>
		<td><span class='lang2' >അ</span><br/><span class='keys'>a</span></td>
		<td><span class='lang2' >ആ</span><br/><span class='keys'>aa</span></td>
		<td><span class='lang2' >ഇ</span><br/><span class='keys'>i</span></td>
		<td><span class='lang2' >ഈ</span><br/><span class='keys'>ii</span></td>
		<td><span class='lang2' >ഉ</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >ഊ</span><br/><span class='keys'>uu</span></td>
		<td><span class='lang2' >ഋ</span><br/></td>
		<td><span class='lang2' >എ</span><br/><span class='keys'>e</span></td>
		<td><span class='lang2' >ഏ</span><br/><span class='keys'>ee</span></td>
		<td><span class='lang2' >ഐ</span><br/><span class='keys'>E</span></td>
		<td><span class='lang2' >ഒ</span><br/><span class='keys'>o</span></td>
		<td><span class='lang2' >ഓ</span><br/><span class='keys'>oo</span></td>
		<td><span class='lang2' >ഔ</span><br/><span class='keys'>au</span></td>
		<td><span class='lang2' >ം</span><br/></td>
		<td><span class='lang2' >ഃ</span><br/><span class='keys'>H</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ക</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >ക്</span><br/><span class='keys'>k\</span></td>
		<td><span class='lang2' >ക</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >കാ</span><br/><span class='keys'>ka</span></td>
		<td><span class='lang2' >കി</span><br/><span class='keys'>ki</span></td>
		<td><span class='lang2' >കീ</span><br/><span class='keys'>kii</span></td>
		<td><span class='lang2' >കു</span><br/><span class='keys'>ku</span></td>
		<td><span class='lang2' >കൂ</span><br/><span class='keys'>kuu</span></td>
		<td><span class='lang2' >കൃ</span><br/></td>
		<td><span class='lang2' >കെ</span><br/><span class='keys'>ke</span></td>
		<td><span class='lang2' >കേ</span><br/><span class='keys'>kee</span></td>
		<td><span class='lang2' >കൈ</span><br/><span class='keys'>kE</span></td>
		<td><span class='lang2' >കൊ</span><br/><span class='keys'>ko</span></td>
		<td><span class='lang2' >കോ</span><br/><span class='keys'>koo</span></td>
		<td><span class='lang2' >കൌ</span><br/><span class='keys'>kO</span></td>
		<td><span class='lang2' >കം</span><br/></td>
		<td><span class='lang2' >കഃ</span><br/><span class='keys'>kH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഖ</span><br/><span class='keys'>kh</span></td>
		<td><span class='lang2' >ഖ്</span><br/><span class='keys'>kh\</span></td>
		<td><span class='lang2' >ഖ</span><br/><span class='keys'>kh</span></td>
		<td><span class='lang2' >ഖാ</span><br/><span class='keys'>kha</span></td>
		<td><span class='lang2' >ഖി</span><br/><span class='keys'>khi</span></td>
		<td><span class='lang2' >ഖീ</span><br/><span class='keys'>khii</span></td>
		<td><span class='lang2' >ഖു</span><br/><span class='keys'>khu</span></td>
		<td><span class='lang2' >ഖൂ</span><br/><span class='keys'>khuu</span></td>
		<td><span class='lang2' >ഖൃ</span><br/></td>
		<td><span class='lang2' >ഖെ</span><br/><span class='keys'>khe</span></td>
		<td><span class='lang2' >ഖേ</span><br/><span class='keys'>khee</span></td>
		<td><span class='lang2' >ഖൈ</span><br/><span class='keys'>khE</span></td>
		<td><span class='lang2' >ഖൊ</span><br/><span class='keys'>kho</span></td>
		<td><span class='lang2' >ഖോ</span><br/><span class='keys'>khoo</span></td>
		<td><span class='lang2' >ഖൌ</span><br/><span class='keys'>khO</span></td>
		<td><span class='lang2' >ഖം</span><br/></td>
		<td><span class='lang2' >ഖഃ</span><br/><span class='keys'>khH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഗ</span><br/><span class='keys'>g</span></td>
		<td><span class='lang2' >ഗ്</span><br/><span class='keys'>g\</span></td>
		<td><span class='lang2' >ഗ</span><br/><span class='keys'>g</span></td>
		<td><span class='lang2' >ഗാ</span><br/><span class='keys'>ga</span></td>
		<td><span class='lang2' >ഗി</span><br/><span class='keys'>gi</span></td>
		<td><span class='lang2' >ഗീ</span><br/><span class='keys'>gii</span></td>
		<td><span class='lang2' >ഗു</span><br/><span class='keys'>gu</span></td>
		<td><span class='lang2' >ഗൂ</span><br/><span class='keys'>guu</span></td>
		<td><span class='lang2' >ഗൃ</span><br/></td>
		<td><span class='lang2' >ഗെ</span><br/><span class='keys'>ge</span></td>
		<td><span class='lang2' >ഗേ</span><br/><span class='keys'>gee</span></td>
		<td><span class='lang2' >ഗൈ</span><br/><span class='keys'>gE</span></td>
		<td><span class='lang2' >ഗൊ</span><br/><span class='keys'>go</span></td>
		<td><span class='lang2' >ഗോ</span><br/><span class='keys'>goo</span></td>
		<td><span class='lang2' >ഗൌ</span><br/><span class='keys'>gO</span></td>
		<td><span class='lang2' >ഗം</span><br/></td>
		<td><span class='lang2' >ഗഃ</span><br/><span class='keys'>gH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഘ</span><br/><span class='keys'>gh</span></td>
		<td><span class='lang2' >ഘ്</span><br/><span class='keys'>gh\</span></td>
		<td><span class='lang2' >ഘ</span><br/><span class='keys'>gh</span></td>
		<td><span class='lang2' >ഘാ</span><br/><span class='keys'>gha</span></td>
		<td><span class='lang2' >ഘി</span><br/><span class='keys'>ghi</span></td>
		<td><span class='lang2' >ഘീ</span><br/><span class='keys'>ghii</span></td>
		<td><span class='lang2' >ഘു</span><br/><span class='keys'>ghu</span></td>
		<td><span class='lang2' >ഘൂ</span><br/><span class='keys'>ghuu</span></td>
		<td><span class='lang2' >ഘൃ</span><br/></td>
		<td><span class='lang2' >ഘെ</span><br/><span class='keys'>ghe</span></td>
		<td><span class='lang2' >ഘേ</span><br/><span class='keys'>ghee</span></td>
		<td><span class='lang2' >ഘൈ</span><br/><span class='keys'>ghE</span></td>
		<td><span class='lang2' >ഘൊ</span><br/><span class='keys'>gho</span></td>
		<td><span class='lang2' >ഘോ</span><br/><span class='keys'>ghoo</span></td>
		<td><span class='lang2' >ഘൌ</span><br/><span class='keys'>ghO</span></td>
		<td><span class='lang2' >ഘം</span><br/></td>
		<td><span class='lang2' >ഘഃ</span><br/><span class='keys'>ghH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ങ</span><br/><span class='keys'>M</span></td>
		<td><span class='lang2' >ങ്</span><br/><span class='keys'>M\</span></td>
		<td><span class='lang2' >ങ</span><br/><span class='keys'>M</span></td>
		<td><span class='lang2' >ങാ</span><br/><span class='keys'>Ma</span></td>
		<td><span class='lang2' >ങി</span><br/><span class='keys'>Mi</span></td>
		<td><span class='lang2' >ങീ</span><br/><span class='keys'>Mii</span></td>
		<td><span class='lang2' >ങു</span><br/><span class='keys'>Mu</span></td>
		<td><span class='lang2' >ങൂ</span><br/><span class='keys'>Muu</span></td>
		<td><span class='lang2' >ങൃ</span><br/></td>
		<td><span class='lang2' >ങെ</span><br/><span class='keys'>Me</span></td>
		<td><span class='lang2' >ങേ</span><br/><span class='keys'>Mee</span></td>
		<td><span class='lang2' >ങൈ</span><br/><span class='keys'>ME</span></td>
		<td><span class='lang2' >ങൊ</span><br/><span class='keys'>Mo</span></td>
		<td><span class='lang2' >ങോ</span><br/><span class='keys'>Moo</span></td>
		<td><span class='lang2' >ങൌ</span><br/><span class='keys'>MO</span></td>
		<td><span class='lang2' >ങം</span><br/></td>
		<td><span class='lang2' >ങഃ</span><br/><span class='keys'>MH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ച</span><br/><span class='keys'>c</span></td>
		<td><span class='lang2' >ച്</span><br/><span class='keys'>c\</span></td>
		<td><span class='lang2' >ച</span><br/><span class='keys'>c</span></td>
		<td><span class='lang2' >ചാ</span><br/><span class='keys'>ca</span></td>
		<td><span class='lang2' >ചി</span><br/><span class='keys'>ci</span></td>
		<td><span class='lang2' >ചീ</span><br/><span class='keys'>cii</span></td>
		<td><span class='lang2' >ചു</span><br/><span class='keys'>cu</span></td>
		<td><span class='lang2' >ചൂ</span><br/><span class='keys'>cuu</span></td>
		<td><span class='lang2' >ചൃ</span><br/></td>
		<td><span class='lang2' >ചെ</span><br/><span class='keys'>ce</span></td>
		<td><span class='lang2' >ചേ</span><br/><span class='keys'>cee</span></td>
		<td><span class='lang2' >ചൈ</span><br/><span class='keys'>cE</span></td>
		<td><span class='lang2' >ചൊ</span><br/><span class='keys'>co</span></td>
		<td><span class='lang2' >ചോ</span><br/><span class='keys'>coo</span></td>
		<td><span class='lang2' >ചൌ</span><br/><span class='keys'>cO</span></td>
		<td><span class='lang2' >ചം</span><br/></td>
		<td><span class='lang2' >ചഃ</span><br/><span class='keys'>cH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഛ</span><br/><span class='keys'>ch</span></td>
		<td><span class='lang2' >ഛ്</span><br/><span class='keys'>ch\</span></td>
		<td><span class='lang2' >ഛ</span><br/><span class='keys'>ch</span></td>
		<td><span class='lang2' >ഛാ</span><br/><span class='keys'>cha</span></td>
		<td><span class='lang2' >ഛി</span><br/><span class='keys'>chi</span></td>
		<td><span class='lang2' >ഛീ</span><br/><span class='keys'>chii</span></td>
		<td><span class='lang2' >ഛു</span><br/><span class='keys'>chu</span></td>
		<td><span class='lang2' >ഛൂ</span><br/><span class='keys'>chuu</span></td>
		<td><span class='lang2' >ഛൃ</span><br/></td>
		<td><span class='lang2' >ഛെ</span><br/><span class='keys'>che</span></td>
		<td><span class='lang2' >ഛേ</span><br/><span class='keys'>chee</span></td>
		<td><span class='lang2' >ഛൈ</span><br/><span class='keys'>chE</span></td>
		<td><span class='lang2' >ഛൊ</span><br/><span class='keys'>cho</span></td>
		<td><span class='lang2' >ഛോ</span><br/><span class='keys'>choo</span></td>
		<td><span class='lang2' >ഛൌ</span><br/><span class='keys'>chO</span></td>
		<td><span class='lang2' >ഛം</span><br/></td>
		<td><span class='lang2' >ഛഃ</span><br/><span class='keys'>chH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ജ</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >ജ്</span><br/><span class='keys'>j\</span></td>
		<td><span class='lang2' >ജ</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >ജാ</span><br/><span class='keys'>ja</span></td>
		<td><span class='lang2' >ജി</span><br/><span class='keys'>ji</span></td>
		<td><span class='lang2' >ജീ</span><br/><span class='keys'>jii</span></td>
		<td><span class='lang2' >ജു</span><br/><span class='keys'>ju</span></td>
		<td><span class='lang2' >ജൂ</span><br/><span class='keys'>juu</span></td>
		<td><span class='lang2' >ജൃ</span><br/></td>
		<td><span class='lang2' >ജെ</span><br/><span class='keys'>je</span></td>
		<td><span class='lang2' >ജേ</span><br/><span class='keys'>jee</span></td>
		<td><span class='lang2' >ജൈ</span><br/><span class='keys'>jE</span></td>
		<td><span class='lang2' >ജൊ</span><br/><span class='keys'>jo</span></td>
		<td><span class='lang2' >ജോ</span><br/><span class='keys'>joo</span></td>
		<td><span class='lang2' >ജൌ</span><br/><span class='keys'>jO</span></td>
		<td><span class='lang2' >ജം</span><br/></td>
		<td><span class='lang2' >ജഃ</span><br/><span class='keys'>jH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഝ</span><br/><span class='keys'>jh</span></td>
		<td><span class='lang2' >ഝ്</span><br/><span class='keys'>jh\</span></td>
		<td><span class='lang2' >ഝ</span><br/><span class='keys'>jh</span></td>
		<td><span class='lang2' >ഝാ</span><br/><span class='keys'>jha</span></td>
		<td><span class='lang2' >ഝി</span><br/><span class='keys'>jhi</span></td>
		<td><span class='lang2' >ഝീ</span><br/><span class='keys'>jhii</span></td>
		<td><span class='lang2' >ഝു</span><br/><span class='keys'>jhu</span></td>
		<td><span class='lang2' >ഝൂ</span><br/><span class='keys'>jhuu</span></td>
		<td><span class='lang2' >ഝൃ</span><br/></td>
		<td><span class='lang2' >ഝെ</span><br/><span class='keys'>jhe</span></td>
		<td><span class='lang2' >ഝേ</span><br/><span class='keys'>jhee</span></td>
		<td><span class='lang2' >ഝൈ</span><br/><span class='keys'>jhE</span></td>
		<td><span class='lang2' >ഝൊ</span><br/><span class='keys'>jho</span></td>
		<td><span class='lang2' >ഝോ</span><br/><span class='keys'>jhoo</span></td>
		<td><span class='lang2' >ഝൌ</span><br/><span class='keys'>jhO</span></td>
		<td><span class='lang2' >ഝം</span><br/></td>
		<td><span class='lang2' >ഝഃ</span><br/><span class='keys'>jhH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഞ</span><br/></td>
		<td><span class='lang2' >ഞ്</span><br/></td>
		<td><span class='lang2' >ഞ</span><br/></td>
		<td><span class='lang2' >ഞാ</span><br/></td>
		<td><span class='lang2' >ഞി</span><br/></td>
		<td><span class='lang2' >ഞീ</span><br/></td>
		<td><span class='lang2' >ഞു</span><br/></td>
		<td><span class='lang2' >ഞൂ</span><br/></td>
		<td><span class='lang2' >ഞൃ</span><br/></td>
		<td><span class='lang2' >ഞെ</span><br/></td>
		<td><span class='lang2' >ഞേ</span><br/></td>
		<td><span class='lang2' >ഞൈ</span><br/></td>
		<td><span class='lang2' >ഞൊ</span><br/></td>
		<td><span class='lang2' >ഞോ</span><br/></td>
		<td><span class='lang2' >ഞൌ</span><br/></td>
		<td><span class='lang2' >ഞം</span><br/></td>
		<td><span class='lang2' >ഞഃ</span><br/></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ട</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' >ട്</span><br/><span class='keys'>T\</span></td>
		<td><span class='lang2' >ട</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' >ടാ</span><br/><span class='keys'>Ta</span></td>
		<td><span class='lang2' >ടി</span><br/><span class='keys'>Ti</span></td>
		<td><span class='lang2' >ടീ</span><br/><span class='keys'>Tii</span></td>
		<td><span class='lang2' >ടു</span><br/><span class='keys'>Tu</span></td>
		<td><span class='lang2' >ടൂ</span><br/><span class='keys'>Tuu</span></td>
		<td><span class='lang2' >ടൃ</span><br/></td>
		<td><span class='lang2' >ടെ</span><br/><span class='keys'>Te</span></td>
		<td><span class='lang2' >ടേ</span><br/><span class='keys'>Tee</span></td>
		<td><span class='lang2' >ടൈ</span><br/><span class='keys'>TE</span></td>
		<td><span class='lang2' >ടൊ</span><br/><span class='keys'>To</span></td>
		<td><span class='lang2' >ടോ</span><br/><span class='keys'>Too</span></td>
		<td><span class='lang2' >ടൌ</span><br/><span class='keys'>TO</span></td>
		<td><span class='lang2' >ടം</span><br/></td>
		<td><span class='lang2' >ടഃ</span><br/><span class='keys'>TH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഠ</span><br/><span class='keys'>Th</span></td>
		<td><span class='lang2' >ഠ്</span><br/><span class='keys'>Th\</span></td>
		<td><span class='lang2' >ഠ</span><br/><span class='keys'>Th</span></td>
		<td><span class='lang2' >ഠാ</span><br/><span class='keys'>Tha</span></td>
		<td><span class='lang2' >ഠി</span><br/><span class='keys'>Thi</span></td>
		<td><span class='lang2' >ഠീ</span><br/><span class='keys'>Thii</span></td>
		<td><span class='lang2' >ഠു</span><br/><span class='keys'>Thu</span></td>
		<td><span class='lang2' >ഠൂ</span><br/><span class='keys'>Thuu</span></td>
		<td><span class='lang2' >ഠൃ</span><br/></td>
		<td><span class='lang2' >ഠെ</span><br/><span class='keys'>The</span></td>
		<td><span class='lang2' >ഠേ</span><br/><span class='keys'>Thee</span></td>
		<td><span class='lang2' >ഠൈ</span><br/><span class='keys'>ThE</span></td>
		<td><span class='lang2' >ഠൊ</span><br/><span class='keys'>Tho</span></td>
		<td><span class='lang2' >ഠോ</span><br/><span class='keys'>Thoo</span></td>
		<td><span class='lang2' >ഠൌ</span><br/><span class='keys'>ThO</span></td>
		<td><span class='lang2' >ഠം</span><br/></td>
		<td><span class='lang2' >ഠഃ</span><br/><span class='keys'>ThH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഡ</span><br/><span class='keys'>D</span></td>
		<td><span class='lang2' >ഡ്</span><br/><span class='keys'>D\</span></td>
		<td><span class='lang2' >ഡ</span><br/><span class='keys'>D</span></td>
		<td><span class='lang2' >ഡാ</span><br/><span class='keys'>Da</span></td>
		<td><span class='lang2' >ഡി</span><br/><span class='keys'>Di</span></td>
		<td><span class='lang2' >ഡീ</span><br/><span class='keys'>Dii</span></td>
		<td><span class='lang2' >ഡു</span><br/><span class='keys'>Du</span></td>
		<td><span class='lang2' >ഡൂ</span><br/><span class='keys'>Duu</span></td>
		<td><span class='lang2' >ഡൃ</span><br/></td>
		<td><span class='lang2' >ഡെ</span><br/><span class='keys'>De</span></td>
		<td><span class='lang2' >ഡേ</span><br/><span class='keys'>Dee</span></td>
		<td><span class='lang2' >ഡൈ</span><br/><span class='keys'>DE</span></td>
		<td><span class='lang2' >ഡൊ</span><br/><span class='keys'>Do</span></td>
		<td><span class='lang2' >ഡോ</span><br/><span class='keys'>Doo</span></td>
		<td><span class='lang2' >ഡൌ</span><br/><span class='keys'>DO</span></td>
		<td><span class='lang2' >ഡം</span><br/></td>
		<td><span class='lang2' >ഡഃ</span><br/><span class='keys'>DH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഢ</span><br/><span class='keys'>Dh</span></td>
		<td><span class='lang2' >ഢ്</span><br/><span class='keys'>Dh\</span></td>
		<td><span class='lang2' >ഢ</span><br/><span class='keys'>Dh</span></td>
		<td><span class='lang2' >ഢാ</span><br/><span class='keys'>Dha</span></td>
		<td><span class='lang2' >ഢി</span><br/><span class='keys'>Dhi</span></td>
		<td><span class='lang2' >ഢീ</span><br/><span class='keys'>Dhii</span></td>
		<td><span class='lang2' >ഢു</span><br/><span class='keys'>Dhu</span></td>
		<td><span class='lang2' >ഢൂ</span><br/><span class='keys'>Dhuu</span></td>
		<td><span class='lang2' >ഢൃ</span><br/></td>
		<td><span class='lang2' >ഢെ</span><br/><span class='keys'>Dhe</span></td>
		<td><span class='lang2' >ഢേ</span><br/><span class='keys'>Dhee</span></td>
		<td><span class='lang2' >ഢൈ</span><br/><span class='keys'>DhE</span></td>
		<td><span class='lang2' >ഢൊ</span><br/><span class='keys'>Dho</span></td>
		<td><span class='lang2' >ഢോ</span><br/><span class='keys'>Dhoo</span></td>
		<td><span class='lang2' >ഢൌ</span><br/><span class='keys'>DhO</span></td>
		<td><span class='lang2' >ഢം</span><br/></td>
		<td><span class='lang2' >ഢഃ</span><br/><span class='keys'>DhH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ണ</span><br/><span class='keys'>N</span></td>
		<td><span class='lang2' >ണ്</span><br/><span class='keys'>N\</span></td>
		<td><span class='lang2' >ണ</span><br/><span class='keys'>N</span></td>
		<td><span class='lang2' >ണാ</span><br/><span class='keys'>Na</span></td>
		<td><span class='lang2' >ണി</span><br/><span class='keys'>Ni</span></td>
		<td><span class='lang2' >ണീ</span><br/><span class='keys'>Nii</span></td>
		<td><span class='lang2' >ണു</span><br/><span class='keys'>Nu</span></td>
		<td><span class='lang2' >ണൂ</span><br/><span class='keys'>Nuu</span></td>
		<td><span class='lang2' >ണൃ</span><br/></td>
		<td><span class='lang2' >ണെ</span><br/><span class='keys'>Ne</span></td>
		<td><span class='lang2' >ണേ</span><br/><span class='keys'>Nee</span></td>
		<td><span class='lang2' >ണൈ</span><br/><span class='keys'>NE</span></td>
		<td><span class='lang2' >ണൊ</span><br/><span class='keys'>No</span></td>
		<td><span class='lang2' >ണോ</span><br/><span class='keys'>Noo</span></td>
		<td><span class='lang2' >ണൌ</span><br/><span class='keys'>NO</span></td>
		<td><span class='lang2' >ണം</span><br/></td>
		<td><span class='lang2' >ണഃ</span><br/><span class='keys'>NH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ത</span><br/><span class='keys'>t</span></td>
		<td><span class='lang2' >ത്</span><br/><span class='keys'>t\</span></td>
		<td><span class='lang2' >ത</span><br/><span class='keys'>t</span></td>
		<td><span class='lang2' >താ</span><br/><span class='keys'>ta</span></td>
		<td><span class='lang2' >തി</span><br/><span class='keys'>ti</span></td>
		<td><span class='lang2' >തീ</span><br/><span class='keys'>tii</span></td>
		<td><span class='lang2' >തു</span><br/><span class='keys'>tu</span></td>
		<td><span class='lang2' >തൂ</span><br/><span class='keys'>tuu</span></td>
		<td><span class='lang2' >തൃ</span><br/></td>
		<td><span class='lang2' >തെ</span><br/><span class='keys'>te</span></td>
		<td><span class='lang2' >തേ</span><br/><span class='keys'>tee</span></td>
		<td><span class='lang2' >തൈ</span><br/><span class='keys'>tE</span></td>
		<td><span class='lang2' >തൊ</span><br/><span class='keys'>to</span></td>
		<td><span class='lang2' >തോ</span><br/><span class='keys'>too</span></td>
		<td><span class='lang2' >തൌ</span><br/><span class='keys'>tO</span></td>
		<td><span class='lang2' >തം</span><br/></td>
		<td><span class='lang2' >തഃ</span><br/><span class='keys'>tH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഥ</span><br/><span class='keys'>th</span></td>
		<td><span class='lang2' >ഥ്</span><br/><span class='keys'>th\</span></td>
		<td><span class='lang2' >ഥ</span><br/><span class='keys'>th</span></td>
		<td><span class='lang2' >ഥാ</span><br/><span class='keys'>tha</span></td>
		<td><span class='lang2' >ഥി</span><br/><span class='keys'>thi</span></td>
		<td><span class='lang2' >ഥീ</span><br/><span class='keys'>thii</span></td>
		<td><span class='lang2' >ഥു</span><br/><span class='keys'>thu</span></td>
		<td><span class='lang2' >ഥൂ</span><br/><span class='keys'>thuu</span></td>
		<td><span class='lang2' >ഥൃ</span><br/></td>
		<td><span class='lang2' >ഥെ</span><br/><span class='keys'>the</span></td>
		<td><span class='lang2' >ഥേ</span><br/><span class='keys'>thee</span></td>
		<td><span class='lang2' >ഥൈ</span><br/><span class='keys'>thE</span></td>
		<td><span class='lang2' >ഥൊ</span><br/><span class='keys'>tho</span></td>
		<td><span class='lang2' >ഥോ</span><br/><span class='keys'>thoo</span></td>
		<td><span class='lang2' >ഥൌ</span><br/><span class='keys'>thO</span></td>
		<td><span class='lang2' >ഥം</span><br/></td>
		<td><span class='lang2' >ഥഃ</span><br/><span class='keys'>thH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ദ</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >ദ്</span><br/><span class='keys'>d\</span></td>
		<td><span class='lang2' >ദ</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >ദാ</span><br/><span class='keys'>da</span></td>
		<td><span class='lang2' >ദി</span><br/><span class='keys'>di</span></td>
		<td><span class='lang2' >ദീ</span><br/><span class='keys'>dii</span></td>
		<td><span class='lang2' >ദു</span><br/><span class='keys'>du</span></td>
		<td><span class='lang2' >ദൂ</span><br/><span class='keys'>duu</span></td>
		<td><span class='lang2' >ദൃ</span><br/></td>
		<td><span class='lang2' >ദെ</span><br/><span class='keys'>de</span></td>
		<td><span class='lang2' >ദേ</span><br/><span class='keys'>dee</span></td>
		<td><span class='lang2' >ദൈ</span><br/><span class='keys'>dE</span></td>
		<td><span class='lang2' >ദൊ</span><br/><span class='keys'>do</span></td>
		<td><span class='lang2' >ദോ</span><br/><span class='keys'>doo</span></td>
		<td><span class='lang2' >ദൌ</span><br/><span class='keys'>dO</span></td>
		<td><span class='lang2' >ദം</span><br/></td>
		<td><span class='lang2' >ദഃ</span><br/><span class='keys'>dH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ധ</span><br/><span class='keys'>dh</span></td>
		<td><span class='lang2' >ധ്</span><br/><span class='keys'>dh\</span></td>
		<td><span class='lang2' >ധ</span><br/><span class='keys'>dh</span></td>
		<td><span class='lang2' >ധാ</span><br/><span class='keys'>dha</span></td>
		<td><span class='lang2' >ധി</span><br/><span class='keys'>dhi</span></td>
		<td><span class='lang2' >ധീ</span><br/><span class='keys'>dhii</span></td>
		<td><span class='lang2' >ധു</span><br/><span class='keys'>dhu</span></td>
		<td><span class='lang2' >ധൂ</span><br/><span class='keys'>dhuu</span></td>
		<td><span class='lang2' >ധൃ</span><br/></td>
		<td><span class='lang2' >ധെ</span><br/><span class='keys'>dhe</span></td>
		<td><span class='lang2' >ധേ</span><br/><span class='keys'>dhee</span></td>
		<td><span class='lang2' >ധൈ</span><br/><span class='keys'>dhE</span></td>
		<td><span class='lang2' >ധൊ</span><br/><span class='keys'>dho</span></td>
		<td><span class='lang2' >ധോ</span><br/><span class='keys'>dhoo</span></td>
		<td><span class='lang2' >ധൌ</span><br/><span class='keys'>dhO</span></td>
		<td><span class='lang2' >ധം</span><br/></td>
		<td><span class='lang2' >ധഃ</span><br/><span class='keys'>dhH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ന</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >ന്</span><br/><span class='keys'>n\</span></td>
		<td><span class='lang2' >ന</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >നാ</span><br/><span class='keys'>na</span></td>
		<td><span class='lang2' >നി</span><br/><span class='keys'>ni</span></td>
		<td><span class='lang2' >നീ</span><br/><span class='keys'>nii</span></td>
		<td><span class='lang2' >നു</span><br/><span class='keys'>nu</span></td>
		<td><span class='lang2' >നൂ</span><br/><span class='keys'>nuu</span></td>
		<td><span class='lang2' >നൃ</span><br/></td>
		<td><span class='lang2' >നെ</span><br/><span class='keys'>ne</span></td>
		<td><span class='lang2' >നേ</span><br/><span class='keys'>nee</span></td>
		<td><span class='lang2' >നൈ</span><br/><span class='keys'>nE</span></td>
		<td><span class='lang2' >നൊ</span><br/><span class='keys'>no</span></td>
		<td><span class='lang2' >നോ</span><br/><span class='keys'>noo</span></td>
		<td><span class='lang2' >നൌ</span><br/><span class='keys'>nO</span></td>
		<td><span class='lang2' >നം</span><br/></td>
		<td><span class='lang2' >നഃ</span><br/><span class='keys'>nH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >പ</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >പ്</span><br/><span class='keys'>p\</span></td>
		<td><span class='lang2' >പ</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >പാ</span><br/><span class='keys'>pa</span></td>
		<td><span class='lang2' >പി</span><br/><span class='keys'>pi</span></td>
		<td><span class='lang2' >പീ</span><br/><span class='keys'>pii</span></td>
		<td><span class='lang2' >പു</span><br/><span class='keys'>pu</span></td>
		<td><span class='lang2' >പൂ</span><br/><span class='keys'>puu</span></td>
		<td><span class='lang2' >പൃ</span><br/></td>
		<td><span class='lang2' >പെ</span><br/><span class='keys'>pe</span></td>
		<td><span class='lang2' >പേ</span><br/><span class='keys'>pee</span></td>
		<td><span class='lang2' >പൈ</span><br/><span class='keys'>pE</span></td>
		<td><span class='lang2' >പൊ</span><br/><span class='keys'>po</span></td>
		<td><span class='lang2' >പോ</span><br/><span class='keys'>poo</span></td>
		<td><span class='lang2' >പൌ</span><br/><span class='keys'>pO</span></td>
		<td><span class='lang2' >പം</span><br/></td>
		<td><span class='lang2' >പഃ</span><br/><span class='keys'>pH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഫ</span><br/><span class='keys'>ph</span></td>
		<td><span class='lang2' >ഫ്</span><br/><span class='keys'>ph\</span></td>
		<td><span class='lang2' >ഫ</span><br/><span class='keys'>ph</span></td>
		<td><span class='lang2' >ഫാ</span><br/><span class='keys'>pha</span></td>
		<td><span class='lang2' >ഫി</span><br/><span class='keys'>phi</span></td>
		<td><span class='lang2' >ഫീ</span><br/><span class='keys'>phii</span></td>
		<td><span class='lang2' >ഫു</span><br/><span class='keys'>phu</span></td>
		<td><span class='lang2' >ഫൂ</span><br/><span class='keys'>phuu</span></td>
		<td><span class='lang2' >ഫൃ</span><br/></td>
		<td><span class='lang2' >ഫെ</span><br/><span class='keys'>phe</span></td>
		<td><span class='lang2' >ഫേ</span><br/><span class='keys'>phee</span></td>
		<td><span class='lang2' >ഫൈ</span><br/><span class='keys'>phE</span></td>
		<td><span class='lang2' >ഫൊ</span><br/><span class='keys'>pho</span></td>
		<td><span class='lang2' >ഫോ</span><br/><span class='keys'>phoo</span></td>
		<td><span class='lang2' >ഫൌ</span><br/><span class='keys'>phO</span></td>
		<td><span class='lang2' >ഫം</span><br/></td>
		<td><span class='lang2' >ഫഃ</span><br/><span class='keys'>phH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ബ</span><br/><span class='keys'>b</span></td>
		<td><span class='lang2' >ബ്</span><br/><span class='keys'>b\</span></td>
		<td><span class='lang2' >ബ</span><br/><span class='keys'>b</span></td>
		<td><span class='lang2' >ബാ</span><br/><span class='keys'>ba</span></td>
		<td><span class='lang2' >ബി</span><br/><span class='keys'>bi</span></td>
		<td><span class='lang2' >ബീ</span><br/><span class='keys'>bii</span></td>
		<td><span class='lang2' >ബു</span><br/><span class='keys'>bu</span></td>
		<td><span class='lang2' >ബൂ</span><br/><span class='keys'>buu</span></td>
		<td><span class='lang2' >ബൃ</span><br/></td>
		<td><span class='lang2' >ബെ</span><br/><span class='keys'>be</span></td>
		<td><span class='lang2' >ബേ</span><br/><span class='keys'>bee</span></td>
		<td><span class='lang2' >ബൈ</span><br/><span class='keys'>bE</span></td>
		<td><span class='lang2' >ബൊ</span><br/><span class='keys'>bo</span></td>
		<td><span class='lang2' >ബോ</span><br/><span class='keys'>boo</span></td>
		<td><span class='lang2' >ബൌ</span><br/><span class='keys'>bO</span></td>
		<td><span class='lang2' >ബം</span><br/></td>
		<td><span class='lang2' >ബഃ</span><br/><span class='keys'>bH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഭ</span><br/><span class='keys'>bh</span></td>
		<td><span class='lang2' >ഭ്</span><br/><span class='keys'>bh\</span></td>
		<td><span class='lang2' >ഭ</span><br/><span class='keys'>bh</span></td>
		<td><span class='lang2' >ഭാ</span><br/><span class='keys'>bha</span></td>
		<td><span class='lang2' >ഭി</span><br/><span class='keys'>bhi</span></td>
		<td><span class='lang2' >ഭീ</span><br/><span class='keys'>bhii</span></td>
		<td><span class='lang2' >ഭു</span><br/><span class='keys'>bhu</span></td>
		<td><span class='lang2' >ഭൂ</span><br/><span class='keys'>bhuu</span></td>
		<td><span class='lang2' >ഭൃ</span><br/></td>
		<td><span class='lang2' >ഭെ</span><br/><span class='keys'>bhe</span></td>
		<td><span class='lang2' >ഭേ</span><br/><span class='keys'>bhee</span></td>
		<td><span class='lang2' >ഭൈ</span><br/><span class='keys'>bhE</span></td>
		<td><span class='lang2' >ഭൊ</span><br/><span class='keys'>bho</span></td>
		<td><span class='lang2' >ഭോ</span><br/><span class='keys'>bhoo</span></td>
		<td><span class='lang2' >ഭൌ</span><br/><span class='keys'>bhO</span></td>
		<td><span class='lang2' >ഭം</span><br/></td>
		<td><span class='lang2' >ഭഃ</span><br/><span class='keys'>bhH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >മ</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >മ്</span><br/><span class='keys'>m\</span></td>
		<td><span class='lang2' >മ</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >മാ</span><br/><span class='keys'>ma</span></td>
		<td><span class='lang2' >മി</span><br/><span class='keys'>mi</span></td>
		<td><span class='lang2' >മീ</span><br/><span class='keys'>mii</span></td>
		<td><span class='lang2' >മു</span><br/><span class='keys'>mu</span></td>
		<td><span class='lang2' >മൂ</span><br/><span class='keys'>muu</span></td>
		<td><span class='lang2' >മൃ</span><br/></td>
		<td><span class='lang2' >മെ</span><br/><span class='keys'>me</span></td>
		<td><span class='lang2' >മേ</span><br/><span class='keys'>mee</span></td>
		<td><span class='lang2' >മൈ</span><br/><span class='keys'>mE</span></td>
		<td><span class='lang2' >മൊ</span><br/><span class='keys'>mo</span></td>
		<td><span class='lang2' >മോ</span><br/><span class='keys'>moo</span></td>
		<td><span class='lang2' >മൌ</span><br/><span class='keys'>mO</span></td>
		<td><span class='lang2' >മം</span><br/></td>
		<td><span class='lang2' >മഃ</span><br/><span class='keys'>mH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >യ</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >യ്</span><br/><span class='keys'>y\</span></td>
		<td><span class='lang2' >യ</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >യാ</span><br/><span class='keys'>ya</span></td>
		<td><span class='lang2' >യി</span><br/><span class='keys'>yi</span></td>
		<td><span class='lang2' >യീ</span><br/><span class='keys'>yii</span></td>
		<td><span class='lang2' >യു</span><br/><span class='keys'>yu</span></td>
		<td><span class='lang2' >യൂ</span><br/><span class='keys'>yuu</span></td>
		<td><span class='lang2' >യൃ</span><br/></td>
		<td><span class='lang2' >യെ</span><br/><span class='keys'>ye</span></td>
		<td><span class='lang2' >യേ</span><br/><span class='keys'>yee</span></td>
		<td><span class='lang2' >യൈ</span><br/><span class='keys'>yE</span></td>
		<td><span class='lang2' >യൊ</span><br/><span class='keys'>yo</span></td>
		<td><span class='lang2' >യോ</span><br/><span class='keys'>yoo</span></td>
		<td><span class='lang2' >യൌ</span><br/><span class='keys'>yO</span></td>
		<td><span class='lang2' >യം</span><br/></td>
		<td><span class='lang2' >യഃ</span><br/><span class='keys'>yH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ര</span><br/><span class='keys'>r</span></td>
		<td><span class='lang2' >ര്</span><br/><span class='keys'>r\</span></td>
		<td><span class='lang2' >ര</span><br/><span class='keys'>r</span></td>
		<td><span class='lang2' >രാ</span><br/><span class='keys'>ra</span></td>
		<td><span class='lang2' >രി</span><br/><span class='keys'>ri</span></td>
		<td><span class='lang2' >രീ</span><br/><span class='keys'>rii</span></td>
		<td><span class='lang2' >രു</span><br/><span class='keys'>ru</span></td>
		<td><span class='lang2' >രൂ</span><br/><span class='keys'>ruu</span></td>
		<td><span class='lang2' >രൃ</span><br/></td>
		<td><span class='lang2' >രെ</span><br/><span class='keys'>re</span></td>
		<td><span class='lang2' >രേ</span><br/><span class='keys'>ree</span></td>
		<td><span class='lang2' >രൈ</span><br/><span class='keys'>rE</span></td>
		<td><span class='lang2' >രൊ</span><br/><span class='keys'>ro</span></td>
		<td><span class='lang2' >രോ</span><br/><span class='keys'>roo</span></td>
		<td><span class='lang2' >രൌ</span><br/><span class='keys'>rO</span></td>
		<td><span class='lang2' >രം</span><br/></td>
		<td><span class='lang2' >രഃ</span><br/><span class='keys'>rH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ല</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >ല്</span><br/><span class='keys'>l\</span></td>
		<td><span class='lang2' >ല</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >ലാ</span><br/><span class='keys'>la</span></td>
		<td><span class='lang2' >ലി</span><br/><span class='keys'>li</span></td>
		<td><span class='lang2' >ലീ</span><br/><span class='keys'>lii</span></td>
		<td><span class='lang2' >ലു</span><br/><span class='keys'>lu</span></td>
		<td><span class='lang2' >ലൂ</span><br/><span class='keys'>luu</span></td>
		<td><span class='lang2' >ലൃ</span><br/></td>
		<td><span class='lang2' >ലെ</span><br/><span class='keys'>le</span></td>
		<td><span class='lang2' >ലേ</span><br/><span class='keys'>lee</span></td>
		<td><span class='lang2' >ലൈ</span><br/><span class='keys'>lE</span></td>
		<td><span class='lang2' >ലൊ</span><br/><span class='keys'>lo</span></td>
		<td><span class='lang2' >ലോ</span><br/><span class='keys'>loo</span></td>
		<td><span class='lang2' >ലൌ</span><br/><span class='keys'>lO</span></td>
		<td><span class='lang2' >ലം</span><br/></td>
		<td><span class='lang2' >ലഃ</span><br/><span class='keys'>lH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >വ</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >വ്</span><br/><span class='keys'>v\</span></td>
		<td><span class='lang2' >വ</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >വാ</span><br/><span class='keys'>va</span></td>
		<td><span class='lang2' >വി</span><br/><span class='keys'>vi</span></td>
		<td><span class='lang2' >വീ</span><br/><span class='keys'>vii</span></td>
		<td><span class='lang2' >വു</span><br/><span class='keys'>vu</span></td>
		<td><span class='lang2' >വൂ</span><br/><span class='keys'>vuu</span></td>
		<td><span class='lang2' >വൃ</span><br/></td>
		<td><span class='lang2' >വെ</span><br/><span class='keys'>ve</span></td>
		<td><span class='lang2' >വേ</span><br/><span class='keys'>vee</span></td>
		<td><span class='lang2' >വൈ</span><br/><span class='keys'>vE</span></td>
		<td><span class='lang2' >വൊ</span><br/><span class='keys'>vo</span></td>
		<td><span class='lang2' >വോ</span><br/><span class='keys'>voo</span></td>
		<td><span class='lang2' >വൌ</span><br/><span class='keys'>vO</span></td>
		<td><span class='lang2' >വം</span><br/></td>
		<td><span class='lang2' >വഃ</span><br/><span class='keys'>vH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ശ</span><br/><span class='keys'>sh</span></td>
		<td><span class='lang2' >ശ്</span><br/><span class='keys'>sh\</span></td>
		<td><span class='lang2' >ശ</span><br/><span class='keys'>sh</span></td>
		<td><span class='lang2' >ശാ</span><br/><span class='keys'>sha</span></td>
		<td><span class='lang2' >ശി</span><br/><span class='keys'>shi</span></td>
		<td><span class='lang2' >ശീ</span><br/><span class='keys'>shii</span></td>
		<td><span class='lang2' >ശു</span><br/><span class='keys'>shu</span></td>
		<td><span class='lang2' >ശൂ</span><br/><span class='keys'>shuu</span></td>
		<td><span class='lang2' >ശൃ</span><br/></td>
		<td><span class='lang2' >ശെ</span><br/><span class='keys'>she</span></td>
		<td><span class='lang2' >ശേ</span><br/><span class='keys'>shee</span></td>
		<td><span class='lang2' >ശൈ</span><br/><span class='keys'>shE</span></td>
		<td><span class='lang2' >ശൊ</span><br/><span class='keys'>sho</span></td>
		<td><span class='lang2' >ശോ</span><br/><span class='keys'>shoo</span></td>
		<td><span class='lang2' >ശൌ</span><br/><span class='keys'>shO</span></td>
		<td><span class='lang2' >ശം</span><br/></td>
		<td><span class='lang2' >ശഃ</span><br/><span class='keys'>shH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഷ</span><br/><span class='keys'>S</span></td>
		<td><span class='lang2' >ഷ്</span><br/><span class='keys'>S\</span></td>
		<td><span class='lang2' >ഷ</span><br/><span class='keys'>S</span></td>
		<td><span class='lang2' >ഷാ</span><br/><span class='keys'>Sa</span></td>
		<td><span class='lang2' >ഷി</span><br/><span class='keys'>Si</span></td>
		<td><span class='lang2' >ഷീ</span><br/><span class='keys'>Sii</span></td>
		<td><span class='lang2' >ഷു</span><br/><span class='keys'>Su</span></td>
		<td><span class='lang2' >ഷൂ</span><br/><span class='keys'>Suu</span></td>
		<td><span class='lang2' >ഷൃ</span><br/></td>
		<td><span class='lang2' >ഷെ</span><br/><span class='keys'>Se</span></td>
		<td><span class='lang2' >ഷേ</span><br/><span class='keys'>See</span></td>
		<td><span class='lang2' >ഷൈ</span><br/><span class='keys'>SE</span></td>
		<td><span class='lang2' >ഷൊ</span><br/><span class='keys'>So</span></td>
		<td><span class='lang2' >ഷോ</span><br/><span class='keys'>Soo</span></td>
		<td><span class='lang2' >ഷൌ</span><br/><span class='keys'>SO</span></td>
		<td><span class='lang2' >ഷം</span><br/></td>
		<td><span class='lang2' >ഷഃ</span><br/><span class='keys'>SH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >സ</span><br/><span class='keys'>s</span></td>
		<td><span class='lang2' >സ്</span><br/><span class='keys'>s\</span></td>
		<td><span class='lang2' >സ</span><br/><span class='keys'>s</span></td>
		<td><span class='lang2' >സാ</span><br/><span class='keys'>sa</span></td>
		<td><span class='lang2' >സി</span><br/><span class='keys'>si</span></td>
		<td><span class='lang2' >സീ</span><br/><span class='keys'>sii</span></td>
		<td><span class='lang2' >സു</span><br/><span class='keys'>su</span></td>
		<td><span class='lang2' >സൂ</span><br/><span class='keys'>suu</span></td>
		<td><span class='lang2' >സൃ</span><br/></td>
		<td><span class='lang2' >സെ</span><br/><span class='keys'>se</span></td>
		<td><span class='lang2' >സേ</span><br/><span class='keys'>see</span></td>
		<td><span class='lang2' >സൈ</span><br/><span class='keys'>sE</span></td>
		<td><span class='lang2' >സൊ</span><br/><span class='keys'>so</span></td>
		<td><span class='lang2' >സോ</span><br/><span class='keys'>soo</span></td>
		<td><span class='lang2' >സൌ</span><br/><span class='keys'>sO</span></td>
		<td><span class='lang2' >സം</span><br/></td>
		<td><span class='lang2' >സഃ</span><br/><span class='keys'>sH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഹ</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >ഹ്</span><br/><span class='keys'>h\</span></td>
		<td><span class='lang2' >ഹ</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >ഹാ</span><br/><span class='keys'>ha</span></td>
		<td><span class='lang2' >ഹി</span><br/><span class='keys'>hi</span></td>
		<td><span class='lang2' >ഹീ</span><br/><span class='keys'>hii</span></td>
		<td><span class='lang2' >ഹു</span><br/><span class='keys'>hu</span></td>
		<td><span class='lang2' >ഹൂ</span><br/><span class='keys'>huu</span></td>
		<td><span class='lang2' >ഹൃ</span><br/></td>
		<td><span class='lang2' >ഹെ</span><br/><span class='keys'>he</span></td>
		<td><span class='lang2' >ഹേ</span><br/><span class='keys'>hee</span></td>
		<td><span class='lang2' >ഹൈ</span><br/><span class='keys'>hE</span></td>
		<td><span class='lang2' >ഹൊ</span><br/><span class='keys'>ho</span></td>
		<td><span class='lang2' >ഹോ</span><br/><span class='keys'>hoo</span></td>
		<td><span class='lang2' >ഹൌ</span><br/><span class='keys'>hO</span></td>
		<td><span class='lang2' >ഹം</span><br/></td>
		<td><span class='lang2' >ഹഃ</span><br/><span class='keys'>hH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ള</span><br/><span class='keys'>ll</span></td>
		<td><span class='lang2' >ള്</span><br/><span class='keys'>ll\</span></td>
		<td><span class='lang2' >ള</span><br/><span class='keys'>ll</span></td>
		<td><span class='lang2' >ളാ</span><br/><span class='keys'>lla</span></td>
		<td><span class='lang2' >ളി</span><br/><span class='keys'>lli</span></td>
		<td><span class='lang2' >ളീ</span><br/><span class='keys'>llii</span></td>
		<td><span class='lang2' >ളു</span><br/><span class='keys'>llu</span></td>
		<td><span class='lang2' >ളൂ</span><br/><span class='keys'>lluu</span></td>
		<td><span class='lang2' >ളൃ</span><br/></td>
		<td><span class='lang2' >ളെ</span><br/><span class='keys'>lle</span></td>
		<td><span class='lang2' >ളേ</span><br/><span class='keys'>llee</span></td>
		<td><span class='lang2' >ളൈ</span><br/><span class='keys'>llE</span></td>
		<td><span class='lang2' >ളൊ</span><br/><span class='keys'>llo</span></td>
		<td><span class='lang2' >ളോ</span><br/><span class='keys'>lloo</span></td>
		<td><span class='lang2' >ളൌ</span><br/><span class='keys'>llO</span></td>
		<td><span class='lang2' >ളം</span><br/></td>
		<td><span class='lang2' >ളഃ</span><br/><span class='keys'>llH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഴ</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >ഴ്</span><br/><span class='keys'>L\</span></td>
		<td><span class='lang2' >ഴ</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >ഴാ</span><br/><span class='keys'>La</span></td>
		<td><span class='lang2' >ഴി</span><br/><span class='keys'>Li</span></td>
		<td><span class='lang2' >ഴീ</span><br/><span class='keys'>Lii</span></td>
		<td><span class='lang2' >ഴു</span><br/><span class='keys'>Lu</span></td>
		<td><span class='lang2' >ഴൂ</span><br/><span class='keys'>Luu</span></td>
		<td><span class='lang2' >ഴൃ</span><br/></td>
		<td><span class='lang2' >ഴെ</span><br/><span class='keys'>Le</span></td>
		<td><span class='lang2' >ഴേ</span><br/><span class='keys'>Lee</span></td>
		<td><span class='lang2' >ഴൈ</span><br/><span class='keys'>LE</span></td>
		<td><span class='lang2' >ഴൊ</span><br/><span class='keys'>Lo</span></td>
		<td><span class='lang2' >ഴോ</span><br/><span class='keys'>Loo</span></td>
		<td><span class='lang2' >ഴൌ</span><br/><span class='keys'>LO</span></td>
		<td><span class='lang2' >ഴം</span><br/></td>
		<td><span class='lang2' >ഴഃ</span><br/><span class='keys'>LH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >റ</span><br/><span class='keys'>R</span></td>
		<td><span class='lang2' >റ്</span><br/><span class='keys'>R\</span></td>
		<td><span class='lang2' >റ</span><br/><span class='keys'>R</span></td>
		<td><span class='lang2' >റാ</span><br/><span class='keys'>Ra</span></td>
		<td><span class='lang2' >റി</span><br/><span class='keys'>Ri</span></td>
		<td><span class='lang2' >റീ</span><br/><span class='keys'>Rii</span></td>
		<td><span class='lang2' >റു</span><br/><span class='keys'>Ru</span></td>
		<td><span class='lang2' >റൂ</span><br/><span class='keys'>Ruu</span></td>
		<td><span class='lang2' >റൃ</span><br/></td>
		<td><span class='lang2' >റെ</span><br/><span class='keys'>Re</span></td>
		<td><span class='lang2' >റേ</span><br/><span class='keys'>Ree</span></td>
		<td><span class='lang2' >റൈ</span><br/><span class='keys'>RE</span></td>
		<td><span class='lang2' >റൊ</span><br/><span class='keys'>Ro</span></td>
		<td><span class='lang2' >റോ</span><br/><span class='keys'>Roo</span></td>
		<td><span class='lang2' >റൌ</span><br/><span class='keys'>RO</span></td>
		<td><span class='lang2' >റം</span><br/></td>
		<td><span class='lang2' >റഃ</span><br/><span class='keys'>RH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=17>&nbsp;</td>
	</tr>

	<tr class='keymanweb' style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top>Numerals, etc.</td>
		<td><span class='lang2' >൧</span><br/><span class='keys'>1</span></td>
		<td><span class='lang2' >൨</span><br/><span class='keys'>2</span></td>
		<td><span class='lang2' >൩</span><br/><span class='keys'>3</span></td>
		<td><span class='lang2' >൪</span><br/><span class='keys'>4</span></td>
		<td><span class='lang2' >൫</span><br/><span class='keys'>5</span></td>
		<td><span class='lang2' >൬</span><br/><span class='keys'>6</span></td>
		<td><span class='lang2' >൭</span><br/><span class='keys'>7</span></td>
		<td><span class='lang2' >൮</span><br/><span class='keys'>8</span></td>
		<td><span class='lang2' >൯</span><br/><span class='keys'>9</span></td>
		<td><span class='lang2' >൦</span><br/><span class='keys'>0</span></td>
		<td></td>
		<td><span class='lang2' >।</span><br/><span class='keys'>|</span></td>
	</tr>

	
</table>



