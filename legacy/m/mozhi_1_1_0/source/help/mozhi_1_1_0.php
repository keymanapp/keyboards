<?php /*
  Name:             keyboard_mozhi_1_1_0
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
  $pagename = 'Mozhi Malayalam (deprecated) Keyboard Help';
  $pagetitle = $pagename;
  $style = 'lang2 {font-size:250%}';
  
  require_once('header.php');
  ?>

  
<p style='margin:0px'>Keyboard &#169; 2006 Raj Nair</p>

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
This keyboard uses the Mozhi layout to let you type in Malayalam.  It is a phonetic keyboard, based on the normal English (QWERTY) keyboard letters.  This makes the keyboard easy to use for anybody familiar with Malayalam, or with a normal keyboard.
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
<p>The Mozhi keyboard layout was designed to make it easy to type in Malayalam.  The characters are arranged according to the closest English consonants and vowels.  Most Malayalam characters have both consonant and vowel parts, and each part should be typed separately.  The consonant part is always typed before the vowel, no matter where the vowel part is written.
</p>

<p>
For example, typing <span class='keys'>i</span> will produce the vowel <span class='highlightExample lang2' style='font-size:200%'>ഇ</span>.  If the <span class='keys'>i</span> key is typed after a consonant, though, the vowel will be combined with the consonant.  For example, typing <span class='keys'>ki</span> produces <span class='highlightExample lang2' style='font-size:200%'>കി</span>.  If you press Backspace once, only the vowel part will be erased, and you can type a different vowel.
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
	
<p>The On Screen Keyboard shows the 35 normal consonants <span class='lang2' style='font-size:200%'>ക ഖ ഗ ഘ ങ ച ഛ ജ ഝ ഞ ട ഠ ഡ ഢ ണ ത ഥ ദ ധ ന പ ഫ ബ ഭ മ യ ര ല വ ശ ഷ സ ഹ ള ഴ റ</span>, the vowels <span class='lang2' style='font-size:200%'>അ ആ ഇ ഈ ഉ ഊ ഋ എ ഏ ഐ ഒ ഓ ഔ</span>, and the <span class='lang2' style='font-size:200%'>്</span> mark.  There are also numbers and punctuation marks.</p>

<p>Malayalam vowels and consonants are usually combined, so when you type a consonant and a vowel part, they will be joined into one character.  If you use the arrow keys to move through the text, you only need to press an arrow key once to move past each character.  If you press Delete before (on the left of) a combined consonant and vowel, it will be erased completely, but if you press Backspace after a character, only the vowel part will be erased (even if the vowel part appears before the consonant).
</p>

<h4>Vowels and Consonants</h4>
<p>When you type consonants and vowel parts, you should always type the consonant part first, even when the vowel part appears on the left of the consonant.  If you type any of the independent vowels, they will not be combined with consonants.  If you want to type just the vowel part, without a consonant, type <span class='keys'>@</span>, then the vowel.  For example, typing <span class='keys'>e</span> produces <span class='lang2' style='font-size:200%'>എ</span>, while typing <span class='keys'>@e</span> produces <span class='lang2' style='font-size:200%'>െ</span>.
</p>
<p>In Malayalam writing, all the consonants naturally include the vowel sound <span class='highlightExample lang2' style='font-size:200%'>അ</span>.  If you want to write a consonant with no vowel, you need to add the <span class='lang2' style='font-size:200%'>്</span> mark.  With the Mozhi keyboard, this mark is added automatically every time you type a consonant.  You can also add the mark by typing <span class='keys'>~</span> right after typing a consonant.  After you have typed the <span class='lang2' style='font-size:200%'>്</span> mark, you cannot type a vowel to combine with that consonant.
</p>
<p>Malayalam includes many combined consonants, and these are not on the keyboard.  To type a combined consonant, type the first consonant, then the second consonant, and then a vowel.  The computer will then combine the two consonants into a single combined character.  For example, typing <span class='keys'>kka</span> produces the combined consonant <span class='highlightExample lang2' style='font-size:200%'>ക്ക</span>.
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
		<td class='lang2' style='font-size:200%'>ക</td><td class='lang2' style='font-size:200%'>്</td><td class='lang2' style='font-size:200%'>ക്</td><td><span class='keys'>k</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>അ</td><td class='lang2' style='font-size:200%'>ക</td><td><span class='keys'>ka</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ആ</td><td class='lang2' style='font-size:200%'>കാ</td><td><span class='keys'>kA</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഇ</td><td class='lang2' style='font-size:200%'>കി</td><td><span class='keys'>ki</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഈ</td><td class='lang2' style='font-size:200%'>കീ</td><td><span class='keys'>kI</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഉ</td><td class='lang2' style='font-size:200%'>കു</td><td><span class='keys'>ku</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഊ</td><td class='lang2' style='font-size:200%'>കൂ</td><td><span class='keys'>kU</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഋ</td><td class='lang2' style='font-size:200%'>കൃ</td><td><span class='keys'>kr^</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>എ</td><td class='lang2' style='font-size:200%'>കെ</td><td><span class='keys'>ke</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഏ</td><td class='lang2' style='font-size:200%'>കേ</td><td><span class='keys'>kE</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഐ</td><td class='lang2' style='font-size:200%'>കൈ</td><td><span class='keys'>kai</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഒ</td><td class='lang2' style='font-size:200%'>കൊ</td><td><span class='keys'>ko</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഓ</td><td class='lang2' style='font-size:200%'>കോ</td><td><span class='keys'>kO</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഔ</td><td class='lang2' style='font-size:200%'>കൌ</td><td><span class='keys'>kau</span></td>
	</tr>
	
</table>

</div>

<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>
<h4> Fonts</h4>
<p class='keymanweb'>If you see squares when you type, or the Malayalam characters do not appear correctly, please read the <a href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<h4>Problem Solving</h4>
<p>If a vowel does not combine with a consonant, make sure you have typed the consonant first.  Also check that you have not typed another vowel already, or a standalone vowel, or the <span class='lang2' style='font-size:200%'>്</span> mark.
</p>

</div>

<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>Further Resources</h2>
<div id="Related">
		<!-- A list of links to related keyboards - to the help pages or to (download) the keyboards? -->

<h3>Related Keyboard Layouts</h3>
<p>Other Keyboard Layouts for the Malayalam language:</p>
<p><a href="/go?language=mal&amp;keyboard=keyboard_malayalam">Inscript Malayalam</a><br/>
<p><a href="/go?language=mal&amp;keyboard=keyboard_isis_malayam">ISIS Malayalam</a><br/>


</div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=533&amp;FromKeyman=0">Download Malayalam Basic for Keyman Desktop</a></p>
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
The Mozhi Malayalam Keyboard is Copyright 2006 by Raj Nair.
Tavultesoft gratefully acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  Their effort assists in enabling people to communicate in their own language.
</p>
<h3>Copyright and Terms of Use</h3>
<p>
The Mozhi Malayalam Keyboard for Keyman Desktop and KeymanWeb is Copyright 2008 Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
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




