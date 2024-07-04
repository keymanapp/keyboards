<?php /*
  Name:             keyboard_malayalam
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
  $pagename = 'Inscript Malayalam Keyboard Help';
  $pagetitle = 'Inscript Malayalam Keyboard Help';
  $style = 'lang2 {font-size:250%}';
  
  require_once('header.php');
  ?>

  
<p style='margin:0px'>Keyboard &#169; 2008 Tavultesoft</p>

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
This keyboard lets you type in Malayalam with the standardised Inscript layout.  It is easy to use for people familiar with Malayalam, or with other Inscript keyboards.  The keyboard uses a normal English (QWERTY) keyboard.
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
<p>The Inscript keyboard layout was designed to make it easy to type in all Indian scripts.  It uses the same layout for all languages, and has been standardised by the Government of India.  There are separate keys for consonants and vowels.  Most Malayalam characters have both consonant and vowel parts, and each part should be typed separately.  The consonant part is always typed before the vowel, no matter where the vowel part is written..
</p>

<p>
For example, typing <span class='keys'>F</span> will produce the vowel <span class='highlightExample lang2' style='font-size:200%'>ഇ</span>.  If this vowel is combined with a consonant, though, such as <span class='highlightExample lang2' style='font-size:200%'>കി</span>, the vowel part <span class='highlightExample lang2' style='font-size:200%'>ി</span> is typed with <span class='keys'>f</span> after the consonant has been typed.  If you press Backspace once, only the vowel part will be erased, and you can type a different vowel.
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
	
<p>The On Screen Keyboard shows the 35 normal consonants <span class='lang2' style='font-size:200%'>ക ഖ ഗ ഘ ങ ച ഛ ജ ഝ ഞ ട ഠ ഡ ഢ ണ ത ഥ ദ ധ ന പ ഫ ബ ഭ മ യ ര ല വ ശ ഷ സ ഹ ള ഴ റ</span>, the vowels <span class='lang2' style='font-size:200%'>അ ആ ഇ ഈ ഉ ഊ ഋ എ ഏ ഐ ഒ ഓ ഔ   ാ ി ീ ു ൂ ൃ െ േ ൈ ൊ ോ ൌ ം ഃ</span>, and the <span class='lang2' style='font-size:200%'>്</span> mark.  There are also numbers and punctuation marks.</p>

<p>Malayalam vowels and consonants are usually combined, so when you type a consonant and a vowel part, they will be joined into one character.  If you use the arrow keys to move through the text, you only need to press an arrow key once to move past each character.  If you press Delete before (on the left of) a combined consonant and vowel, it will be erased completely, but if you press Backspace after a character, only the vowel part will be erased (even if the vowel part appears before the consonant).
</p>

<h4>Vowels and Consonants</h4>
<p>When you type consonants and vowel parts, you should always type the consonant part first, even when the vowel part appears on the left of the consonant.  If you type any of the independent vowels, they will not be combined with consonants.
</p>
<p>All the consonants naturally include the vowel sound <span class='highlightExample lang2' style='font-size:200%'>അ</span>, so if you want to produce a consonant with no vowel, you need to add the <span class='lang2' style='font-size:200%'>്</span> mark.  You can do this by typing <span class='keys'>d</span> right after typing a consonant.  After you have typed the <span class='lang2' style='font-size:200%'>്</span> mark, you cannot type a vowel to combine with that consonant.
</p>
<p>Malayalam includes many combined consonants, and these are not on the keyboard.  To type a combined consonant, type the first consonant, then the <span class='lang2' style='font-size:200%'>്</span> mark, then the second consonant.  The computer will then combine the two consonants into a single combined character.  For example, typing <span class='keys'>kdk</span> produces the combined consonant <span class='highlightExample lang2' style='font-size:200%'>ക്ക</span>.
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
		<td class='lang2' style='font-size:200%'>ക</td><td class='lang2' style='font-size:200%'>്</td><td class='lang2' style='font-size:200%'>ക്</td><td><span class='keys'>kd</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>അ</td><td class='lang2' style='font-size:200%'>ക</td><td><span class='keys'>k</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ആ</td><td class='lang2' style='font-size:200%'>കാ</td><td><span class='keys'>ke</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഇ</td><td class='lang2' style='font-size:200%'>കി</td><td><span class='keys'>kf</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഈ</td><td class='lang2' style='font-size:200%'>കീ</td><td><span class='keys'>kr</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഉ</td><td class='lang2' style='font-size:200%'>കു</td><td><span class='keys'>kg</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഊ</td><td class='lang2' style='font-size:200%'>കൂ</td><td><span class='keys'>kt</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഋ</td><td class='lang2' style='font-size:200%'>കൃ</td><td><span class='keys'>k=</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>എ</td><td class='lang2' style='font-size:200%'>കെ</td><td><span class='keys'>kz</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഏ</td><td class='lang2' style='font-size:200%'>കേ</td><td><span class='keys'>ks</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഐ</td><td class='lang2' style='font-size:200%'>കൈ</td><td><span class='keys'>kw</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഒ</td><td class='lang2' style='font-size:200%'>കൊ</td><td><span class='keys'>k`</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഓ</td><td class='lang2' style='font-size:200%'>കോ</td><td><span class='keys'>ka</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഔ</td><td class='lang2' style='font-size:200%'>കൌ</td><td><span class='keys'>kq</span></td>
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
<p><a href="/go?language=ben&amp;keyboard=keyboard_mozhi_1_1_0">Mozhi Malayalam</a><br/>
<p><a href="/go?language=ben&amp;keyboard=keyboard_isis_malayam">ISIS Malayalam</a><br/>


</div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=527&amp;FromKeyman=0">Download Inscript Malayalam for Keyman Desktop</a></p>
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
Tavultesoft gratefully acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  Their effort assists in enabling people to communicate in their own language.
</p>
<h3>Copyright and Terms of Use</h3>
<p>
The Inscript Malayalam Keyboard for Keyman Desktop and KeymanWeb is Copyright 2008 Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
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
<br/>Because Malayalam includes hundreds of combined consonants, these are not shown on this chart.  You can type some combined consonants by typing a <span class='lang2' style='font-size:200%'>്</span> mark (<span class='keys'>d</span>) between the two consonants.</p>

<table border=0 cellspacing=2 cellpadding=1>
	<col width=65 style='text-align:center; background-color:#dedede' />
	<col span=16 width=65 style='text-align:center; background-color:#ffffff' />

	<tr style='text-align:center; font-weight:normal; background-color:#dedede'>
		<td style='text-align:right; font-weight:bold; background-color:#dedede' valign=bottom>\<span style='text-decoration:underline'>&nbsp;Vowels</span>&nbsp;<br/>C'nants\</td>
		<td><span class='lang2' >്</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >അ</span><br/><span class='keys'>D</span></td>
		<td><span class='lang2' >ആ</span><br/><span class='keys'>E</span></td>
		<td><span class='lang2' >ഇ</span><br/><span class='keys'>F</span></td>
		<td><span class='lang2' >ഈ</span><br/><span class='keys'>R</span></td>
		<td><span class='lang2' >ഉ</span><br/><span class='keys'>G</span></td>
		<td><span class='lang2' >ഊ</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' >ഋ</span><br/><span class='keys'>+</span></td>
		<td><span class='lang2' >എ</span><br/><span class='keys'>Z</span></td>
		<td><span class='lang2' >ഏ</span><br/><span class='keys'>S</span></td>
		<td><span class='lang2' >ഐ</span><br/><span class='keys'>W</span></td>
		<td><span class='lang2' >ഒ</span><br/><span class='keys'>~</span></td>
		<td><span class='lang2' >ഓ</span><br/><span class='keys'>A</span></td>
		<td><span class='lang2' >ഔ</span><br/><span class='keys'>Q</span></td>
		<td><span class='lang2' >ം</span><br/><span class='keys'>x</span></td>
		<td><span class='lang2' >ഃ</span><br/><span class='keys'>_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ക</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >ക്</span><br/><span class='keys'>kd</span></td>
		<td><span class='lang2' >ക</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >കാ</span><br/><span class='keys'>ke</span></td>
		<td><span class='lang2' >കി</span><br/><span class='keys'>kf</span></td>
		<td><span class='lang2' >കീ</span><br/><span class='keys'>kr</span></td>
		<td><span class='lang2' >കു</span><br/><span class='keys'>kg</span></td>
		<td><span class='lang2' >കൂ</span><br/><span class='keys'>kt</span></td>
		<td><span class='lang2' >കൃ</span><br/><span class='keys'>k=</span></td>
		<td><span class='lang2' >കെ</span><br/><span class='keys'>kz</span></td>
		<td><span class='lang2' >കേ</span><br/><span class='keys'>ks</span></td>
		<td><span class='lang2' >കൈ</span><br/><span class='keys'>kw</span></td>
		<td><span class='lang2' >കൊ</span><br/><span class='keys'>k`</span></td>
		<td><span class='lang2' >കോ</span><br/><span class='keys'>ka</span></td>
		<td><span class='lang2' >കൌ</span><br/><span class='keys'>kq</span></td>
		<td><span class='lang2' >കം</span><br/><span class='keys'>kx</span></td>
		<td><span class='lang2' >കഃ</span><br/><span class='keys'>k_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഖ</span><br/><span class='keys'>K</span></td>
		<td><span class='lang2' >ഖ്</span><br/><span class='keys'>Kd</span></td>
		<td><span class='lang2' >ഖ</span><br/><span class='keys'>K</span></td>
		<td><span class='lang2' >ഖാ</span><br/><span class='keys'>Ke</span></td>
		<td><span class='lang2' >ഖി</span><br/><span class='keys'>Kf</span></td>
		<td><span class='lang2' >ഖീ</span><br/><span class='keys'>Kr</span></td>
		<td><span class='lang2' >ഖു</span><br/><span class='keys'>Kg</span></td>
		<td><span class='lang2' >ഖൂ</span><br/><span class='keys'>Kt</span></td>
		<td><span class='lang2' >ഖൃ</span><br/><span class='keys'>K=</span></td>
		<td><span class='lang2' >ഖെ</span><br/><span class='keys'>Kz</span></td>
		<td><span class='lang2' >ഖേ</span><br/><span class='keys'>Ks</span></td>
		<td><span class='lang2' >ഖൈ</span><br/><span class='keys'>Kw</span></td>
		<td><span class='lang2' >ഖൊ</span><br/><span class='keys'>K`</span></td>
		<td><span class='lang2' >ഖോ</span><br/><span class='keys'>Ka</span></td>
		<td><span class='lang2' >ഖൌ</span><br/><span class='keys'>Kq</span></td>
		<td><span class='lang2' >ഖം</span><br/><span class='keys'>Kx</span></td>
		<td><span class='lang2' >ഖഃ</span><br/><span class='keys'>K_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഗ</span><br/><span class='keys'>i</span></td>
		<td><span class='lang2' >ഗ്</span><br/><span class='keys'>id</span></td>
		<td><span class='lang2' >ഗ</span><br/><span class='keys'>i</span></td>
		<td><span class='lang2' >ഗാ</span><br/><span class='keys'>ie</span></td>
		<td><span class='lang2' >ഗി</span><br/><span class='keys'>if</span></td>
		<td><span class='lang2' >ഗീ</span><br/><span class='keys'>ir</span></td>
		<td><span class='lang2' >ഗു</span><br/><span class='keys'>ig</span></td>
		<td><span class='lang2' >ഗൂ</span><br/><span class='keys'>it</span></td>
		<td><span class='lang2' >ഗൃ</span><br/><span class='keys'>i=</span></td>
		<td><span class='lang2' >ഗെ</span><br/><span class='keys'>iz</span></td>
		<td><span class='lang2' >ഗേ</span><br/><span class='keys'>is</span></td>
		<td><span class='lang2' >ഗൈ</span><br/><span class='keys'>iw</span></td>
		<td><span class='lang2' >ഗൊ</span><br/><span class='keys'>i`</span></td>
		<td><span class='lang2' >ഗോ</span><br/><span class='keys'>ia</span></td>
		<td><span class='lang2' >ഗൌ</span><br/><span class='keys'>iq</span></td>
		<td><span class='lang2' >ഗം</span><br/><span class='keys'>ix</span></td>
		<td><span class='lang2' >ഗഃ</span><br/><span class='keys'>i_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഘ</span><br/><span class='keys'>I</span></td>
		<td><span class='lang2' >ഘ്</span><br/><span class='keys'>Id</span></td>
		<td><span class='lang2' >ഘ</span><br/><span class='keys'>I</span></td>
		<td><span class='lang2' >ഘാ</span><br/><span class='keys'>Ie</span></td>
		<td><span class='lang2' >ഘി</span><br/><span class='keys'>If</span></td>
		<td><span class='lang2' >ഘീ</span><br/><span class='keys'>Ir</span></td>
		<td><span class='lang2' >ഘു</span><br/><span class='keys'>Ig</span></td>
		<td><span class='lang2' >ഘൂ</span><br/><span class='keys'>It</span></td>
		<td><span class='lang2' >ഘൃ</span><br/><span class='keys'>I=</span></td>
		<td><span class='lang2' >ഘെ</span><br/><span class='keys'>Iz</span></td>
		<td><span class='lang2' >ഘേ</span><br/><span class='keys'>Is</span></td>
		<td><span class='lang2' >ഘൈ</span><br/><span class='keys'>Iw</span></td>
		<td><span class='lang2' >ഘൊ</span><br/><span class='keys'>I`</span></td>
		<td><span class='lang2' >ഘോ</span><br/><span class='keys'>Ia</span></td>
		<td><span class='lang2' >ഘൌ</span><br/><span class='keys'>Iq</span></td>
		<td><span class='lang2' >ഘം</span><br/><span class='keys'>Ix</span></td>
		<td><span class='lang2' >ഘഃ</span><br/><span class='keys'>I_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ങ</span><br/><span class='keys'>U</span></td>
		<td><span class='lang2' >ങ്</span><br/><span class='keys'>Ud</span></td>
		<td><span class='lang2' >ങ</span><br/><span class='keys'>U</span></td>
		<td><span class='lang2' >ങാ</span><br/><span class='keys'>Ue</span></td>
		<td><span class='lang2' >ങി</span><br/><span class='keys'>Uf</span></td>
		<td><span class='lang2' >ങീ</span><br/><span class='keys'>Ur</span></td>
		<td><span class='lang2' >ങു</span><br/><span class='keys'>Ug</span></td>
		<td><span class='lang2' >ങൂ</span><br/><span class='keys'>Ut</span></td>
		<td><span class='lang2' >ങൃ</span><br/><span class='keys'>U=</span></td>
		<td><span class='lang2' >ങെ</span><br/><span class='keys'>Uz</span></td>
		<td><span class='lang2' >ങേ</span><br/><span class='keys'>Us</span></td>
		<td><span class='lang2' >ങൈ</span><br/><span class='keys'>Uw</span></td>
		<td><span class='lang2' >ങൊ</span><br/><span class='keys'>U`</span></td>
		<td><span class='lang2' >ങോ</span><br/><span class='keys'>Ua</span></td>
		<td><span class='lang2' >ങൌ</span><br/><span class='keys'>Uq</span></td>
		<td><span class='lang2' >ങം</span><br/><span class='keys'>Ux</span></td>
		<td><span class='lang2' >ങഃ</span><br/><span class='keys'>U_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ച</span><br/><span class='keys'>;</span></td>
		<td><span class='lang2' >ച്</span><br/><span class='keys'>;d</span></td>
		<td><span class='lang2' >ച</span><br/><span class='keys'>;</span></td>
		<td><span class='lang2' >ചാ</span><br/><span class='keys'>;e</span></td>
		<td><span class='lang2' >ചി</span><br/><span class='keys'>;f</span></td>
		<td><span class='lang2' >ചീ</span><br/><span class='keys'>;r</span></td>
		<td><span class='lang2' >ചു</span><br/><span class='keys'>;g</span></td>
		<td><span class='lang2' >ചൂ</span><br/><span class='keys'>;t</span></td>
		<td><span class='lang2' >ചൃ</span><br/><span class='keys'>;=</span></td>
		<td><span class='lang2' >ചെ</span><br/><span class='keys'>;z</span></td>
		<td><span class='lang2' >ചേ</span><br/><span class='keys'>;s</span></td>
		<td><span class='lang2' >ചൈ</span><br/><span class='keys'>;w</span></td>
		<td><span class='lang2' >ചൊ</span><br/><span class='keys'>;`</span></td>
		<td><span class='lang2' >ചോ</span><br/><span class='keys'>;a</span></td>
		<td><span class='lang2' >ചൌ</span><br/><span class='keys'>;q</span></td>
		<td><span class='lang2' >ചം</span><br/><span class='keys'>;x</span></td>
		<td><span class='lang2' >ചഃ</span><br/><span class='keys'>;_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഛ</span><br/><span class='keys'>:</span></td>
		<td><span class='lang2' >ഛ്</span><br/><span class='keys'>:d</span></td>
		<td><span class='lang2' >ഛ</span><br/><span class='keys'>:</span></td>
		<td><span class='lang2' >ഛാ</span><br/><span class='keys'>:e</span></td>
		<td><span class='lang2' >ഛി</span><br/><span class='keys'>:f</span></td>
		<td><span class='lang2' >ഛീ</span><br/><span class='keys'>:r</span></td>
		<td><span class='lang2' >ഛു</span><br/><span class='keys'>:g</span></td>
		<td><span class='lang2' >ഛൂ</span><br/><span class='keys'>:t</span></td>
		<td><span class='lang2' >ഛൃ</span><br/><span class='keys'>:=</span></td>
		<td><span class='lang2' >ഛെ</span><br/><span class='keys'>:z</span></td>
		<td><span class='lang2' >ഛേ</span><br/><span class='keys'>:s</span></td>
		<td><span class='lang2' >ഛൈ</span><br/><span class='keys'>:w</span></td>
		<td><span class='lang2' >ഛൊ</span><br/><span class='keys'>:`</span></td>
		<td><span class='lang2' >ഛോ</span><br/><span class='keys'>:a</span></td>
		<td><span class='lang2' >ഛൌ</span><br/><span class='keys'>:q</span></td>
		<td><span class='lang2' >ഛം</span><br/><span class='keys'>:x</span></td>
		<td><span class='lang2' >ഛഃ</span><br/><span class='keys'>:_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ജ</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >ജ്</span><br/><span class='keys'>pd</span></td>
		<td><span class='lang2' >ജ</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >ജാ</span><br/><span class='keys'>pe</span></td>
		<td><span class='lang2' >ജി</span><br/><span class='keys'>pf</span></td>
		<td><span class='lang2' >ജീ</span><br/><span class='keys'>pr</span></td>
		<td><span class='lang2' >ജു</span><br/><span class='keys'>pg</span></td>
		<td><span class='lang2' >ജൂ</span><br/><span class='keys'>pt</span></td>
		<td><span class='lang2' >ജൃ</span><br/><span class='keys'>p=</span></td>
		<td><span class='lang2' >ജെ</span><br/><span class='keys'>pz</span></td>
		<td><span class='lang2' >ജേ</span><br/><span class='keys'>ps</span></td>
		<td><span class='lang2' >ജൈ</span><br/><span class='keys'>pw</span></td>
		<td><span class='lang2' >ജൊ</span><br/><span class='keys'>p`</span></td>
		<td><span class='lang2' >ജോ</span><br/><span class='keys'>pa</span></td>
		<td><span class='lang2' >ജൌ</span><br/><span class='keys'>pq</span></td>
		<td><span class='lang2' >ജം</span><br/><span class='keys'>px</span></td>
		<td><span class='lang2' >ജഃ</span><br/><span class='keys'>p_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഝ</span><br/><span class='keys'>P</span></td>
		<td><span class='lang2' >ഝ്</span><br/><span class='keys'>Pd</span></td>
		<td><span class='lang2' >ഝ</span><br/><span class='keys'>P</span></td>
		<td><span class='lang2' >ഝാ</span><br/><span class='keys'>Pe</span></td>
		<td><span class='lang2' >ഝി</span><br/><span class='keys'>Pf</span></td>
		<td><span class='lang2' >ഝീ</span><br/><span class='keys'>Pr</span></td>
		<td><span class='lang2' >ഝു</span><br/><span class='keys'>Pg</span></td>
		<td><span class='lang2' >ഝൂ</span><br/><span class='keys'>Pt</span></td>
		<td><span class='lang2' >ഝൃ</span><br/><span class='keys'>P=</span></td>
		<td><span class='lang2' >ഝെ</span><br/><span class='keys'>Pz</span></td>
		<td><span class='lang2' >ഝേ</span><br/><span class='keys'>Ps</span></td>
		<td><span class='lang2' >ഝൈ</span><br/><span class='keys'>Pw</span></td>
		<td><span class='lang2' >ഝൊ</span><br/><span class='keys'>P`</span></td>
		<td><span class='lang2' >ഝോ</span><br/><span class='keys'>Pa</span></td>
		<td><span class='lang2' >ഝൌ</span><br/><span class='keys'>Pq</span></td>
		<td><span class='lang2' >ഝം</span><br/><span class='keys'>Px</span></td>
		<td><span class='lang2' >ഝഃ</span><br/><span class='keys'>P_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഞ</span><br/><span class='keys'>}</span></td>
		<td><span class='lang2' >ഞ്</span><br/><span class='keys'>}d</span></td>
		<td><span class='lang2' >ഞ</span><br/><span class='keys'>}</span></td>
		<td><span class='lang2' >ഞാ</span><br/><span class='keys'>}e</span></td>
		<td><span class='lang2' >ഞി</span><br/><span class='keys'>}f</span></td>
		<td><span class='lang2' >ഞീ</span><br/><span class='keys'>}r</span></td>
		<td><span class='lang2' >ഞു</span><br/><span class='keys'>}g</span></td>
		<td><span class='lang2' >ഞൂ</span><br/><span class='keys'>}t</span></td>
		<td><span class='lang2' >ഞൃ</span><br/><span class='keys'>}=</span></td>
		<td><span class='lang2' >ഞെ</span><br/><span class='keys'>}z</span></td>
		<td><span class='lang2' >ഞേ</span><br/><span class='keys'>}s</span></td>
		<td><span class='lang2' >ഞൈ</span><br/><span class='keys'>}w</span></td>
		<td><span class='lang2' >ഞൊ</span><br/><span class='keys'>}`</span></td>
		<td><span class='lang2' >ഞോ</span><br/><span class='keys'>}a</span></td>
		<td><span class='lang2' >ഞൌ</span><br/><span class='keys'>}q</span></td>
		<td><span class='lang2' >ഞം</span><br/><span class='keys'>}x</span></td>
		<td><span class='lang2' >ഞഃ</span><br/><span class='keys'>}_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ട</span><br/><span class='keys'>'</span></td>
		<td><span class='lang2' >ട്</span><br/><span class='keys'>'d</span></td>
		<td><span class='lang2' >ട</span><br/><span class='keys'>'</span></td>
		<td><span class='lang2' >ടാ</span><br/><span class='keys'>'e</span></td>
		<td><span class='lang2' >ടി</span><br/><span class='keys'>'f</span></td>
		<td><span class='lang2' >ടീ</span><br/><span class='keys'>'r</span></td>
		<td><span class='lang2' >ടു</span><br/><span class='keys'>'g</span></td>
		<td><span class='lang2' >ടൂ</span><br/><span class='keys'>'t</span></td>
		<td><span class='lang2' >ടൃ</span><br/><span class='keys'>'=</span></td>
		<td><span class='lang2' >ടെ</span><br/><span class='keys'>'z</span></td>
		<td><span class='lang2' >ടേ</span><br/><span class='keys'>'s</span></td>
		<td><span class='lang2' >ടൈ</span><br/><span class='keys'>'w</span></td>
		<td><span class='lang2' >ടൊ</span><br/><span class='keys'>'`</span></td>
		<td><span class='lang2' >ടോ</span><br/><span class='keys'>'a</span></td>
		<td><span class='lang2' >ടൌ</span><br/><span class='keys'>'q</span></td>
		<td><span class='lang2' >ടം</span><br/><span class='keys'>'x</span></td>
		<td><span class='lang2' >ടഃ</span><br/><span class='keys'>'_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഠ</span><br/><span class='keys'>"</span></td>
		<td><span class='lang2' >ഠ്</span><br/><span class='keys'>"d</span></td>
		<td><span class='lang2' >ഠ</span><br/><span class='keys'>"</span></td>
		<td><span class='lang2' >ഠാ</span><br/><span class='keys'>"e</span></td>
		<td><span class='lang2' >ഠി</span><br/><span class='keys'>"f</span></td>
		<td><span class='lang2' >ഠീ</span><br/><span class='keys'>"r</span></td>
		<td><span class='lang2' >ഠു</span><br/><span class='keys'>"g</span></td>
		<td><span class='lang2' >ഠൂ</span><br/><span class='keys'>"t</span></td>
		<td><span class='lang2' >ഠൃ</span><br/><span class='keys'>"=</span></td>
		<td><span class='lang2' >ഠെ</span><br/><span class='keys'>"z</span></td>
		<td><span class='lang2' >ഠേ</span><br/><span class='keys'>"s</span></td>
		<td><span class='lang2' >ഠൈ</span><br/><span class='keys'>"w</span></td>
		<td><span class='lang2' >ഠൊ</span><br/><span class='keys'>"`</span></td>
		<td><span class='lang2' >ഠോ</span><br/><span class='keys'>"a</span></td>
		<td><span class='lang2' >ഠൌ</span><br/><span class='keys'>"q</span></td>
		<td><span class='lang2' >ഠം</span><br/><span class='keys'>"x</span></td>
		<td><span class='lang2' >ഠഃ</span><br/><span class='keys'>"_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഡ</span><br/><span class='keys'>[[</span></td>
		<td><span class='lang2' >ഡ്</span><br/><span class='keys'>[[d</span></td>
		<td><span class='lang2' >ഡ</span><br/><span class='keys'>[[</span></td>
		<td><span class='lang2' >ഡാ</span><br/><span class='keys'>[[e</span></td>
		<td><span class='lang2' >ഡി</span><br/><span class='keys'>[[f</span></td>
		<td><span class='lang2' >ഡീ</span><br/><span class='keys'>[[r</span></td>
		<td><span class='lang2' >ഡു</span><br/><span class='keys'>[[g</span></td>
		<td><span class='lang2' >ഡൂ</span><br/><span class='keys'>[[t</span></td>
		<td><span class='lang2' >ഡൃ</span><br/><span class='keys'>[[=</span></td>
		<td><span class='lang2' >ഡെ</span><br/><span class='keys'>[[z</span></td>
		<td><span class='lang2' >ഡേ</span><br/><span class='keys'>[[s</span></td>
		<td><span class='lang2' >ഡൈ</span><br/><span class='keys'>[[w</span></td>
		<td><span class='lang2' >ഡൊ</span><br/><span class='keys'>[[`</span></td>
		<td><span class='lang2' >ഡോ</span><br/><span class='keys'>[[a</span></td>
		<td><span class='lang2' >ഡൌ</span><br/><span class='keys'>[[q</span></td>
		<td><span class='lang2' >ഡം</span><br/><span class='keys'>[[x</span></td>
		<td><span class='lang2' >ഡഃ</span><br/><span class='keys'>[[_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഢ</span><br/><span class='keys'>{</span></td>
		<td><span class='lang2' >ഢ്</span><br/><span class='keys'>{d</span></td>
		<td><span class='lang2' >ഢ</span><br/><span class='keys'>{</span></td>
		<td><span class='lang2' >ഢാ</span><br/><span class='keys'>{e</span></td>
		<td><span class='lang2' >ഢി</span><br/><span class='keys'>{f</span></td>
		<td><span class='lang2' >ഢീ</span><br/><span class='keys'>{r</span></td>
		<td><span class='lang2' >ഢു</span><br/><span class='keys'>{g</span></td>
		<td><span class='lang2' >ഢൂ</span><br/><span class='keys'>{t</span></td>
		<td><span class='lang2' >ഢൃ</span><br/><span class='keys'>{=</span></td>
		<td><span class='lang2' >ഢെ</span><br/><span class='keys'>{z</span></td>
		<td><span class='lang2' >ഢേ</span><br/><span class='keys'>{s</span></td>
		<td><span class='lang2' >ഢൈ</span><br/><span class='keys'>{w</span></td>
		<td><span class='lang2' >ഢൊ</span><br/><span class='keys'>{`</span></td>
		<td><span class='lang2' >ഢോ</span><br/><span class='keys'>{a</span></td>
		<td><span class='lang2' >ഢൌ</span><br/><span class='keys'>{q</span></td>
		<td><span class='lang2' >ഢം</span><br/><span class='keys'>{x</span></td>
		<td><span class='lang2' >ഢഃ</span><br/><span class='keys'>{_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ണ</span><br/><span class='keys'>C</span></td>
		<td><span class='lang2' >ണ്</span><br/><span class='keys'>Cd</span></td>
		<td><span class='lang2' >ണ</span><br/><span class='keys'>C</span></td>
		<td><span class='lang2' >ണാ</span><br/><span class='keys'>Ce</span></td>
		<td><span class='lang2' >ണി</span><br/><span class='keys'>Cf</span></td>
		<td><span class='lang2' >ണീ</span><br/><span class='keys'>Cr</span></td>
		<td><span class='lang2' >ണു</span><br/><span class='keys'>Cg</span></td>
		<td><span class='lang2' >ണൂ</span><br/><span class='keys'>Ct</span></td>
		<td><span class='lang2' >ണൃ</span><br/><span class='keys'>C=</span></td>
		<td><span class='lang2' >ണെ</span><br/><span class='keys'>Cz</span></td>
		<td><span class='lang2' >ണേ</span><br/><span class='keys'>Cs</span></td>
		<td><span class='lang2' >ണൈ</span><br/><span class='keys'>Cw</span></td>
		<td><span class='lang2' >ണൊ</span><br/><span class='keys'>C`</span></td>
		<td><span class='lang2' >ണോ</span><br/><span class='keys'>Ca</span></td>
		<td><span class='lang2' >ണൌ</span><br/><span class='keys'>Cq</span></td>
		<td><span class='lang2' >ണം</span><br/><span class='keys'>Cx</span></td>
		<td><span class='lang2' >ണഃ</span><br/><span class='keys'>C_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ത</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >ത്</span><br/><span class='keys'>ld</span></td>
		<td><span class='lang2' >ത</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >താ</span><br/><span class='keys'>le</span></td>
		<td><span class='lang2' >തി</span><br/><span class='keys'>lf</span></td>
		<td><span class='lang2' >തീ</span><br/><span class='keys'>lr</span></td>
		<td><span class='lang2' >തു</span><br/><span class='keys'>lg</span></td>
		<td><span class='lang2' >തൂ</span><br/><span class='keys'>lt</span></td>
		<td><span class='lang2' >തൃ</span><br/><span class='keys'>l=</span></td>
		<td><span class='lang2' >തെ</span><br/><span class='keys'>lz</span></td>
		<td><span class='lang2' >തേ</span><br/><span class='keys'>ls</span></td>
		<td><span class='lang2' >തൈ</span><br/><span class='keys'>lw</span></td>
		<td><span class='lang2' >തൊ</span><br/><span class='keys'>l`</span></td>
		<td><span class='lang2' >തോ</span><br/><span class='keys'>la</span></td>
		<td><span class='lang2' >തൌ</span><br/><span class='keys'>lq</span></td>
		<td><span class='lang2' >തം</span><br/><span class='keys'>lx</span></td>
		<td><span class='lang2' >തഃ</span><br/><span class='keys'>l_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഥ</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >ഥ്</span><br/><span class='keys'>Ld</span></td>
		<td><span class='lang2' >ഥ</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >ഥാ</span><br/><span class='keys'>Le</span></td>
		<td><span class='lang2' >ഥി</span><br/><span class='keys'>Lf</span></td>
		<td><span class='lang2' >ഥീ</span><br/><span class='keys'>Lr</span></td>
		<td><span class='lang2' >ഥു</span><br/><span class='keys'>Lg</span></td>
		<td><span class='lang2' >ഥൂ</span><br/><span class='keys'>Lt</span></td>
		<td><span class='lang2' >ഥൃ</span><br/><span class='keys'>L=</span></td>
		<td><span class='lang2' >ഥെ</span><br/><span class='keys'>Lz</span></td>
		<td><span class='lang2' >ഥേ</span><br/><span class='keys'>Ls</span></td>
		<td><span class='lang2' >ഥൈ</span><br/><span class='keys'>Lw</span></td>
		<td><span class='lang2' >ഥൊ</span><br/><span class='keys'>L`</span></td>
		<td><span class='lang2' >ഥോ</span><br/><span class='keys'>La</span></td>
		<td><span class='lang2' >ഥൌ</span><br/><span class='keys'>Lq</span></td>
		<td><span class='lang2' >ഥം</span><br/><span class='keys'>Lx</span></td>
		<td><span class='lang2' >ഥഃ</span><br/><span class='keys'>L_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ദ</span><br/><span class='keys'>o</span></td>
		<td><span class='lang2' >ദ്</span><br/><span class='keys'>od</span></td>
		<td><span class='lang2' >ദ</span><br/><span class='keys'>o</span></td>
		<td><span class='lang2' >ദാ</span><br/><span class='keys'>oe</span></td>
		<td><span class='lang2' >ദി</span><br/><span class='keys'>of</span></td>
		<td><span class='lang2' >ദീ</span><br/><span class='keys'>or</span></td>
		<td><span class='lang2' >ദു</span><br/><span class='keys'>og</span></td>
		<td><span class='lang2' >ദൂ</span><br/><span class='keys'>ot</span></td>
		<td><span class='lang2' >ദൃ</span><br/><span class='keys'>o=</span></td>
		<td><span class='lang2' >ദെ</span><br/><span class='keys'>oz</span></td>
		<td><span class='lang2' >ദേ</span><br/><span class='keys'>os</span></td>
		<td><span class='lang2' >ദൈ</span><br/><span class='keys'>ow</span></td>
		<td><span class='lang2' >ദൊ</span><br/><span class='keys'>o`</span></td>
		<td><span class='lang2' >ദോ</span><br/><span class='keys'>oa</span></td>
		<td><span class='lang2' >ദൌ</span><br/><span class='keys'>oq</span></td>
		<td><span class='lang2' >ദം</span><br/><span class='keys'>ox</span></td>
		<td><span class='lang2' >ദഃ</span><br/><span class='keys'>o_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ധ</span><br/><span class='keys'>O</span></td>
		<td><span class='lang2' >ധ്</span><br/><span class='keys'>Od</span></td>
		<td><span class='lang2' >ധ</span><br/><span class='keys'>O</span></td>
		<td><span class='lang2' >ധാ</span><br/><span class='keys'>Oe</span></td>
		<td><span class='lang2' >ധി</span><br/><span class='keys'>Of</span></td>
		<td><span class='lang2' >ധീ</span><br/><span class='keys'>Or</span></td>
		<td><span class='lang2' >ധു</span><br/><span class='keys'>Og</span></td>
		<td><span class='lang2' >ധൂ</span><br/><span class='keys'>Ot</span></td>
		<td><span class='lang2' >ധൃ</span><br/><span class='keys'>O=</span></td>
		<td><span class='lang2' >ധെ</span><br/><span class='keys'>Oz</span></td>
		<td><span class='lang2' >ധേ</span><br/><span class='keys'>Os</span></td>
		<td><span class='lang2' >ധൈ</span><br/><span class='keys'>Ow</span></td>
		<td><span class='lang2' >ധൊ</span><br/><span class='keys'>O`</span></td>
		<td><span class='lang2' >ധോ</span><br/><span class='keys'>Oa</span></td>
		<td><span class='lang2' >ധൌ</span><br/><span class='keys'>Oq</span></td>
		<td><span class='lang2' >ധം</span><br/><span class='keys'>Ox</span></td>
		<td><span class='lang2' >ധഃ</span><br/><span class='keys'>O_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ന</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >ന്</span><br/><span class='keys'>vd</span></td>
		<td><span class='lang2' >ന</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >നാ</span><br/><span class='keys'>ve</span></td>
		<td><span class='lang2' >നി</span><br/><span class='keys'>vf</span></td>
		<td><span class='lang2' >നീ</span><br/><span class='keys'>vr</span></td>
		<td><span class='lang2' >നു</span><br/><span class='keys'>vg</span></td>
		<td><span class='lang2' >നൂ</span><br/><span class='keys'>vt</span></td>
		<td><span class='lang2' >നൃ</span><br/><span class='keys'>v=</span></td>
		<td><span class='lang2' >നെ</span><br/><span class='keys'>vz</span></td>
		<td><span class='lang2' >നേ</span><br/><span class='keys'>vs</span></td>
		<td><span class='lang2' >നൈ</span><br/><span class='keys'>vw</span></td>
		<td><span class='lang2' >നൊ</span><br/><span class='keys'>v`</span></td>
		<td><span class='lang2' >നോ</span><br/><span class='keys'>va</span></td>
		<td><span class='lang2' >നൌ</span><br/><span class='keys'>vq</span></td>
		<td><span class='lang2' >നം</span><br/><span class='keys'>vx</span></td>
		<td><span class='lang2' >നഃ</span><br/><span class='keys'>v_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >പ</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >പ്</span><br/><span class='keys'>hd</span></td>
		<td><span class='lang2' >പ</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >പാ</span><br/><span class='keys'>he</span></td>
		<td><span class='lang2' >പി</span><br/><span class='keys'>hf</span></td>
		<td><span class='lang2' >പീ</span><br/><span class='keys'>hr</span></td>
		<td><span class='lang2' >പു</span><br/><span class='keys'>hg</span></td>
		<td><span class='lang2' >പൂ</span><br/><span class='keys'>ht</span></td>
		<td><span class='lang2' >പൃ</span><br/><span class='keys'>h=</span></td>
		<td><span class='lang2' >പെ</span><br/><span class='keys'>hz</span></td>
		<td><span class='lang2' >പേ</span><br/><span class='keys'>hs</span></td>
		<td><span class='lang2' >പൈ</span><br/><span class='keys'>hw</span></td>
		<td><span class='lang2' >പൊ</span><br/><span class='keys'>h`</span></td>
		<td><span class='lang2' >പോ</span><br/><span class='keys'>ha</span></td>
		<td><span class='lang2' >പൌ</span><br/><span class='keys'>hq</span></td>
		<td><span class='lang2' >പം</span><br/><span class='keys'>hx</span></td>
		<td><span class='lang2' >പഃ</span><br/><span class='keys'>h_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഫ</span><br/><span class='keys'>H</span></td>
		<td><span class='lang2' >ഫ്</span><br/><span class='keys'>Hd</span></td>
		<td><span class='lang2' >ഫ</span><br/><span class='keys'>H</span></td>
		<td><span class='lang2' >ഫാ</span><br/><span class='keys'>He</span></td>
		<td><span class='lang2' >ഫി</span><br/><span class='keys'>Hf</span></td>
		<td><span class='lang2' >ഫീ</span><br/><span class='keys'>Hr</span></td>
		<td><span class='lang2' >ഫു</span><br/><span class='keys'>Hg</span></td>
		<td><span class='lang2' >ഫൂ</span><br/><span class='keys'>Ht</span></td>
		<td><span class='lang2' >ഫൃ</span><br/><span class='keys'>H=</span></td>
		<td><span class='lang2' >ഫെ</span><br/><span class='keys'>Hz</span></td>
		<td><span class='lang2' >ഫേ</span><br/><span class='keys'>Hs</span></td>
		<td><span class='lang2' >ഫൈ</span><br/><span class='keys'>Hw</span></td>
		<td><span class='lang2' >ഫൊ</span><br/><span class='keys'>H`</span></td>
		<td><span class='lang2' >ഫോ</span><br/><span class='keys'>Ha</span></td>
		<td><span class='lang2' >ഫൌ</span><br/><span class='keys'>Hq</span></td>
		<td><span class='lang2' >ഫം</span><br/><span class='keys'>Hx</span></td>
		<td><span class='lang2' >ഫഃ</span><br/><span class='keys'>H_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ബ</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >ബ്</span><br/><span class='keys'>yd</span></td>
		<td><span class='lang2' >ബ</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >ബാ</span><br/><span class='keys'>ye</span></td>
		<td><span class='lang2' >ബി</span><br/><span class='keys'>yf</span></td>
		<td><span class='lang2' >ബീ</span><br/><span class='keys'>yr</span></td>
		<td><span class='lang2' >ബു</span><br/><span class='keys'>yg</span></td>
		<td><span class='lang2' >ബൂ</span><br/><span class='keys'>yt</span></td>
		<td><span class='lang2' >ബൃ</span><br/><span class='keys'>y=</span></td>
		<td><span class='lang2' >ബെ</span><br/><span class='keys'>yz</span></td>
		<td><span class='lang2' >ബേ</span><br/><span class='keys'>ys</span></td>
		<td><span class='lang2' >ബൈ</span><br/><span class='keys'>yw</span></td>
		<td><span class='lang2' >ബൊ</span><br/><span class='keys'>y`</span></td>
		<td><span class='lang2' >ബോ</span><br/><span class='keys'>ya</span></td>
		<td><span class='lang2' >ബൌ</span><br/><span class='keys'>yq</span></td>
		<td><span class='lang2' >ബം</span><br/><span class='keys'>yx</span></td>
		<td><span class='lang2' >ബഃ</span><br/><span class='keys'>y_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഭ</span><br/><span class='keys'>Y</span></td>
		<td><span class='lang2' >ഭ്</span><br/><span class='keys'>Yd</span></td>
		<td><span class='lang2' >ഭ</span><br/><span class='keys'>Y</span></td>
		<td><span class='lang2' >ഭാ</span><br/><span class='keys'>Ye</span></td>
		<td><span class='lang2' >ഭി</span><br/><span class='keys'>Yf</span></td>
		<td><span class='lang2' >ഭീ</span><br/><span class='keys'>Yr</span></td>
		<td><span class='lang2' >ഭു</span><br/><span class='keys'>Yg</span></td>
		<td><span class='lang2' >ഭൂ</span><br/><span class='keys'>Yt</span></td>
		<td><span class='lang2' >ഭൃ</span><br/><span class='keys'>Y=</span></td>
		<td><span class='lang2' >ഭെ</span><br/><span class='keys'>Yz</span></td>
		<td><span class='lang2' >ഭേ</span><br/><span class='keys'>Ys</span></td>
		<td><span class='lang2' >ഭൈ</span><br/><span class='keys'>Yw</span></td>
		<td><span class='lang2' >ഭൊ</span><br/><span class='keys'>Y`</span></td>
		<td><span class='lang2' >ഭോ</span><br/><span class='keys'>Ya</span></td>
		<td><span class='lang2' >ഭൌ</span><br/><span class='keys'>Yq</span></td>
		<td><span class='lang2' >ഭം</span><br/><span class='keys'>Yx</span></td>
		<td><span class='lang2' >ഭഃ</span><br/><span class='keys'>Y_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >മ</span><br/><span class='keys'>c</span></td>
		<td><span class='lang2' >മ്</span><br/><span class='keys'>cd</span></td>
		<td><span class='lang2' >മ</span><br/><span class='keys'>c</span></td>
		<td><span class='lang2' >മാ</span><br/><span class='keys'>ce</span></td>
		<td><span class='lang2' >മി</span><br/><span class='keys'>cf</span></td>
		<td><span class='lang2' >മീ</span><br/><span class='keys'>cr</span></td>
		<td><span class='lang2' >മു</span><br/><span class='keys'>cg</span></td>
		<td><span class='lang2' >മൂ</span><br/><span class='keys'>ct</span></td>
		<td><span class='lang2' >മൃ</span><br/><span class='keys'>c=</span></td>
		<td><span class='lang2' >മെ</span><br/><span class='keys'>cz</span></td>
		<td><span class='lang2' >മേ</span><br/><span class='keys'>cs</span></td>
		<td><span class='lang2' >മൈ</span><br/><span class='keys'>cw</span></td>
		<td><span class='lang2' >മൊ</span><br/><span class='keys'>c`</span></td>
		<td><span class='lang2' >മോ</span><br/><span class='keys'>ca</span></td>
		<td><span class='lang2' >മൌ</span><br/><span class='keys'>cq</span></td>
		<td><span class='lang2' >മം</span><br/><span class='keys'>cx</span></td>
		<td><span class='lang2' >മഃ</span><br/><span class='keys'>c_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >യ</span><br/><span class='keys'>/</span></td>
		<td><span class='lang2' >യ്</span><br/><span class='keys'>/d</span></td>
		<td><span class='lang2' >യ</span><br/><span class='keys'>/</span></td>
		<td><span class='lang2' >യാ</span><br/><span class='keys'>/e</span></td>
		<td><span class='lang2' >യി</span><br/><span class='keys'>/f</span></td>
		<td><span class='lang2' >യീ</span><br/><span class='keys'>/r</span></td>
		<td><span class='lang2' >യു</span><br/><span class='keys'>/g</span></td>
		<td><span class='lang2' >യൂ</span><br/><span class='keys'>/t</span></td>
		<td><span class='lang2' >യൃ</span><br/><span class='keys'>/=</span></td>
		<td><span class='lang2' >യെ</span><br/><span class='keys'>/z</span></td>
		<td><span class='lang2' >യേ</span><br/><span class='keys'>/s</span></td>
		<td><span class='lang2' >യൈ</span><br/><span class='keys'>/w</span></td>
		<td><span class='lang2' >യൊ</span><br/><span class='keys'>/`</span></td>
		<td><span class='lang2' >യോ</span><br/><span class='keys'>/a</span></td>
		<td><span class='lang2' >യൌ</span><br/><span class='keys'>/q</span></td>
		<td><span class='lang2' >യം</span><br/><span class='keys'>/x</span></td>
		<td><span class='lang2' >യഃ</span><br/><span class='keys'>/_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ര</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >ര്</span><br/><span class='keys'>jd</span></td>
		<td><span class='lang2' >ര</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >രാ</span><br/><span class='keys'>je</span></td>
		<td><span class='lang2' >രി</span><br/><span class='keys'>jf</span></td>
		<td><span class='lang2' >രീ</span><br/><span class='keys'>jr</span></td>
		<td><span class='lang2' >രു</span><br/><span class='keys'>jg</span></td>
		<td><span class='lang2' >രൂ</span><br/><span class='keys'>jt</span></td>
		<td><span class='lang2' >രൃ</span><br/><span class='keys'>j=</span></td>
		<td><span class='lang2' >രെ</span><br/><span class='keys'>jz</span></td>
		<td><span class='lang2' >രേ</span><br/><span class='keys'>js</span></td>
		<td><span class='lang2' >രൈ</span><br/><span class='keys'>jw</span></td>
		<td><span class='lang2' >രൊ</span><br/><span class='keys'>j`</span></td>
		<td><span class='lang2' >രോ</span><br/><span class='keys'>ja</span></td>
		<td><span class='lang2' >രൌ</span><br/><span class='keys'>jq</span></td>
		<td><span class='lang2' >രം</span><br/><span class='keys'>jx</span></td>
		<td><span class='lang2' >രഃ</span><br/><span class='keys'>j_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ല</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >ല്</span><br/><span class='keys'>nd</span></td>
		<td><span class='lang2' >ല</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >ലാ</span><br/><span class='keys'>ne</span></td>
		<td><span class='lang2' >ലി</span><br/><span class='keys'>nf</span></td>
		<td><span class='lang2' >ലീ</span><br/><span class='keys'>nr</span></td>
		<td><span class='lang2' >ലു</span><br/><span class='keys'>ng</span></td>
		<td><span class='lang2' >ലൂ</span><br/><span class='keys'>nt</span></td>
		<td><span class='lang2' >ലൃ</span><br/><span class='keys'>n=</span></td>
		<td><span class='lang2' >ലെ</span><br/><span class='keys'>nz</span></td>
		<td><span class='lang2' >ലേ</span><br/><span class='keys'>ns</span></td>
		<td><span class='lang2' >ലൈ</span><br/><span class='keys'>nw</span></td>
		<td><span class='lang2' >ലൊ</span><br/><span class='keys'>n`</span></td>
		<td><span class='lang2' >ലോ</span><br/><span class='keys'>na</span></td>
		<td><span class='lang2' >ലൌ</span><br/><span class='keys'>nq</span></td>
		<td><span class='lang2' >ലം</span><br/><span class='keys'>nx</span></td>
		<td><span class='lang2' >ലഃ</span><br/><span class='keys'>n_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >വ</span><br/><span class='keys'>b</span></td>
		<td><span class='lang2' >വ്</span><br/><span class='keys'>bd</span></td>
		<td><span class='lang2' >വ</span><br/><span class='keys'>b</span></td>
		<td><span class='lang2' >വാ</span><br/><span class='keys'>be</span></td>
		<td><span class='lang2' >വി</span><br/><span class='keys'>bf</span></td>
		<td><span class='lang2' >വീ</span><br/><span class='keys'>br</span></td>
		<td><span class='lang2' >വു</span><br/><span class='keys'>bg</span></td>
		<td><span class='lang2' >വൂ</span><br/><span class='keys'>bt</span></td>
		<td><span class='lang2' >വൃ</span><br/><span class='keys'>b=</span></td>
		<td><span class='lang2' >വെ</span><br/><span class='keys'>bz</span></td>
		<td><span class='lang2' >വേ</span><br/><span class='keys'>bs</span></td>
		<td><span class='lang2' >വൈ</span><br/><span class='keys'>bw</span></td>
		<td><span class='lang2' >വൊ</span><br/><span class='keys'>b`</span></td>
		<td><span class='lang2' >വോ</span><br/><span class='keys'>ba</span></td>
		<td><span class='lang2' >വൌ</span><br/><span class='keys'>bq</span></td>
		<td><span class='lang2' >വം</span><br/><span class='keys'>bx</span></td>
		<td><span class='lang2' >വഃ</span><br/><span class='keys'>b_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ശ</span><br/><span class='keys'>M</span></td>
		<td><span class='lang2' >ശ്</span><br/><span class='keys'>Md</span></td>
		<td><span class='lang2' >ശ</span><br/><span class='keys'>M</span></td>
		<td><span class='lang2' >ശാ</span><br/><span class='keys'>Me</span></td>
		<td><span class='lang2' >ശി</span><br/><span class='keys'>Mf</span></td>
		<td><span class='lang2' >ശീ</span><br/><span class='keys'>Mr</span></td>
		<td><span class='lang2' >ശു</span><br/><span class='keys'>Mg</span></td>
		<td><span class='lang2' >ശൂ</span><br/><span class='keys'>Mt</span></td>
		<td><span class='lang2' >ശൃ</span><br/><span class='keys'>M=</span></td>
		<td><span class='lang2' >ശെ</span><br/><span class='keys'>Mz</span></td>
		<td><span class='lang2' >ശേ</span><br/><span class='keys'>Ms</span></td>
		<td><span class='lang2' >ശൈ</span><br/><span class='keys'>Mw</span></td>
		<td><span class='lang2' >ശൊ</span><br/><span class='keys'>M`</span></td>
		<td><span class='lang2' >ശോ</span><br/><span class='keys'>Ma</span></td>
		<td><span class='lang2' >ശൌ</span><br/><span class='keys'>Mq</span></td>
		<td><span class='lang2' >ശം</span><br/><span class='keys'>Mx</span></td>
		<td><span class='lang2' >ശഃ</span><br/><span class='keys'>M_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഷ</span><br/><span class='keys'>&lt;</span></td>
		<td><span class='lang2' >ഷ്</span><br/><span class='keys'>&lt;d</span></td>
		<td><span class='lang2' >ഷ</span><br/><span class='keys'>&lt;</span></td>
		<td><span class='lang2' >ഷാ</span><br/><span class='keys'>&lt;e</span></td>
		<td><span class='lang2' >ഷി</span><br/><span class='keys'>&lt;f</span></td>
		<td><span class='lang2' >ഷീ</span><br/><span class='keys'>&lt;r</span></td>
		<td><span class='lang2' >ഷു</span><br/><span class='keys'>&lt;g</span></td>
		<td><span class='lang2' >ഷൂ</span><br/><span class='keys'>&lt;t</span></td>
		<td><span class='lang2' >ഷൃ</span><br/><span class='keys'>&lt;=</span></td>
		<td><span class='lang2' >ഷെ</span><br/><span class='keys'>&lt;z</span></td>
		<td><span class='lang2' >ഷേ</span><br/><span class='keys'>&lt;s</span></td>
		<td><span class='lang2' >ഷൈ</span><br/><span class='keys'>&lt;w</span></td>
		<td><span class='lang2' >ഷൊ</span><br/><span class='keys'>&lt;`</span></td>
		<td><span class='lang2' >ഷോ</span><br/><span class='keys'>&lt;a</span></td>
		<td><span class='lang2' >ഷൌ</span><br/><span class='keys'>&lt;q</span></td>
		<td><span class='lang2' >ഷം</span><br/><span class='keys'>&lt;x</span></td>
		<td><span class='lang2' >ഷഃ</span><br/><span class='keys'>&lt;_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >സ</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >സ്</span><br/><span class='keys'>md</span></td>
		<td><span class='lang2' >സ</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >സാ</span><br/><span class='keys'>me</span></td>
		<td><span class='lang2' >സി</span><br/><span class='keys'>mf</span></td>
		<td><span class='lang2' >സീ</span><br/><span class='keys'>mr</span></td>
		<td><span class='lang2' >സു</span><br/><span class='keys'>mg</span></td>
		<td><span class='lang2' >സൂ</span><br/><span class='keys'>mt</span></td>
		<td><span class='lang2' >സൃ</span><br/><span class='keys'>m=</span></td>
		<td><span class='lang2' >സെ</span><br/><span class='keys'>mz</span></td>
		<td><span class='lang2' >സേ</span><br/><span class='keys'>ms</span></td>
		<td><span class='lang2' >സൈ</span><br/><span class='keys'>mw</span></td>
		<td><span class='lang2' >സൊ</span><br/><span class='keys'>m`</span></td>
		<td><span class='lang2' >സോ</span><br/><span class='keys'>ma</span></td>
		<td><span class='lang2' >സൌ</span><br/><span class='keys'>mq</span></td>
		<td><span class='lang2' >സം</span><br/><span class='keys'>mx</span></td>
		<td><span class='lang2' >സഃ</span><br/><span class='keys'>m_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഹ</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >ഹ്</span><br/><span class='keys'>ud</span></td>
		<td><span class='lang2' >ഹ</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >ഹാ</span><br/><span class='keys'>ue</span></td>
		<td><span class='lang2' >ഹി</span><br/><span class='keys'>uf</span></td>
		<td><span class='lang2' >ഹീ</span><br/><span class='keys'>ur</span></td>
		<td><span class='lang2' >ഹു</span><br/><span class='keys'>ug</span></td>
		<td><span class='lang2' >ഹൂ</span><br/><span class='keys'>ut</span></td>
		<td><span class='lang2' >ഹൃ</span><br/><span class='keys'>u=</span></td>
		<td><span class='lang2' >ഹെ</span><br/><span class='keys'>uz</span></td>
		<td><span class='lang2' >ഹേ</span><br/><span class='keys'>us</span></td>
		<td><span class='lang2' >ഹൈ</span><br/><span class='keys'>uw</span></td>
		<td><span class='lang2' >ഹൊ</span><br/><span class='keys'>u`</span></td>
		<td><span class='lang2' >ഹോ</span><br/><span class='keys'>ua</span></td>
		<td><span class='lang2' >ഹൌ</span><br/><span class='keys'>uq</span></td>
		<td><span class='lang2' >ഹം</span><br/><span class='keys'>ux</span></td>
		<td><span class='lang2' >ഹഃ</span><br/><span class='keys'>u_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ള</span><br/><span class='keys'>N</span></td>
		<td><span class='lang2' >ള്</span><br/><span class='keys'>Nd</span></td>
		<td><span class='lang2' >ള</span><br/><span class='keys'>N</span></td>
		<td><span class='lang2' >ളാ</span><br/><span class='keys'>Ne</span></td>
		<td><span class='lang2' >ളി</span><br/><span class='keys'>Nf</span></td>
		<td><span class='lang2' >ളീ</span><br/><span class='keys'>Nr</span></td>
		<td><span class='lang2' >ളു</span><br/><span class='keys'>Ng</span></td>
		<td><span class='lang2' >ളൂ</span><br/><span class='keys'>Nt</span></td>
		<td><span class='lang2' >ളൃ</span><br/><span class='keys'>N=</span></td>
		<td><span class='lang2' >ളെ</span><br/><span class='keys'>Nz</span></td>
		<td><span class='lang2' >ളേ</span><br/><span class='keys'>Ns</span></td>
		<td><span class='lang2' >ളൈ</span><br/><span class='keys'>Nw</span></td>
		<td><span class='lang2' >ളൊ</span><br/><span class='keys'>N`</span></td>
		<td><span class='lang2' >ളോ</span><br/><span class='keys'>Na</span></td>
		<td><span class='lang2' >ളൌ</span><br/><span class='keys'>Nq</span></td>
		<td><span class='lang2' >ളം</span><br/><span class='keys'>Nx</span></td>
		<td><span class='lang2' >ളഃ</span><br/><span class='keys'>N_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഴ</span><br/><span class='keys'>B</span></td>
		<td><span class='lang2' >ഴ്</span><br/><span class='keys'>Bd</span></td>
		<td><span class='lang2' >ഴ</span><br/><span class='keys'>B</span></td>
		<td><span class='lang2' >ഴാ</span><br/><span class='keys'>Be</span></td>
		<td><span class='lang2' >ഴി</span><br/><span class='keys'>Bf</span></td>
		<td><span class='lang2' >ഴീ</span><br/><span class='keys'>Br</span></td>
		<td><span class='lang2' >ഴു</span><br/><span class='keys'>Bg</span></td>
		<td><span class='lang2' >ഴൂ</span><br/><span class='keys'>Bt</span></td>
		<td><span class='lang2' >ഴൃ</span><br/><span class='keys'>B=</span></td>
		<td><span class='lang2' >ഴെ</span><br/><span class='keys'>Bz</span></td>
		<td><span class='lang2' >ഴേ</span><br/><span class='keys'>Bs</span></td>
		<td><span class='lang2' >ഴൈ</span><br/><span class='keys'>Bw</span></td>
		<td><span class='lang2' >ഴൊ</span><br/><span class='keys'>B`</span></td>
		<td><span class='lang2' >ഴോ</span><br/><span class='keys'>Ba</span></td>
		<td><span class='lang2' >ഴൌ</span><br/><span class='keys'>Bq</span></td>
		<td><span class='lang2' >ഴം</span><br/><span class='keys'>Bx</span></td>
		<td><span class='lang2' >ഴഃ</span><br/><span class='keys'>B_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >റ</span><br/><span class='keys'>J</span></td>
		<td><span class='lang2' >റ്</span><br/><span class='keys'>Jd</span></td>
		<td><span class='lang2' >റ</span><br/><span class='keys'>J</span></td>
		<td><span class='lang2' >റാ</span><br/><span class='keys'>Je</span></td>
		<td><span class='lang2' >റി</span><br/><span class='keys'>Jf</span></td>
		<td><span class='lang2' >റീ</span><br/><span class='keys'>Jr</span></td>
		<td><span class='lang2' >റു</span><br/><span class='keys'>Jg</span></td>
		<td><span class='lang2' >റൂ</span><br/><span class='keys'>Jt</span></td>
		<td><span class='lang2' >റൃ</span><br/><span class='keys'>J=</span></td>
		<td><span class='lang2' >റെ</span><br/><span class='keys'>Jz</span></td>
		<td><span class='lang2' >റേ</span><br/><span class='keys'>Js</span></td>
		<td><span class='lang2' >റൈ</span><br/><span class='keys'>Jw</span></td>
		<td><span class='lang2' >റൊ</span><br/><span class='keys'>J`</span></td>
		<td><span class='lang2' >റോ</span><br/><span class='keys'>Ja</span></td>
		<td><span class='lang2' >റൌ</span><br/><span class='keys'>Jq</span></td>
		<td><span class='lang2' >റം</span><br/><span class='keys'>Jx</span></td>
		<td><span class='lang2' >റഃ</span><br/><span class='keys'>J_</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=17>&nbsp;</td>
	</tr>
	
	<tr class='keymanweb' style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top>Numerals, etc.</td>
		<td><span class='lang2' >൧</span><br/><span class='keys'>[CA1]</span></td>
		<td><span class='lang2' >൨</span><br/><span class='keys'>[CA2]</span></td>
		<td><span class='lang2' >൩</span><br/><span class='keys'>[CA3]</span></td>
		<td><span class='lang2' >൪</span><br/><span class='keys'>[CA4]</span></td>
		<td><span class='lang2' >൫</span><br/><span class='keys'>[CA5]</span></td>
		<td><span class='lang2' >൬</span><br/><span class='keys'>[CA6]</span></td>
		<td><span class='lang2' >൭</span><br/><span class='keys'>[CA7]</span></td>
		<td><span class='lang2' >൮</span><br/><span class='keys'>[CA8]</span></td>
		<td><span class='lang2' >൯</span><br/><span class='keys'>[CA9]</span></td>
		<td><span class='lang2' >൦</span><br/><span class='keys'>[CA0]</span></td>
		<td><span class='lang2' >്ര</span><br/><span class='keys'>#</span></td>
		<td><span class='lang2' >ക്ഷ</span><br/><span class='keys'>&amp;</span></td>
		<td><span class='lang2' >ൗ</span><br/><span class='keys'>[CAq]</span></td>
		<td><span class='lang2' >ഌ</span><br/><span class='keys'>[CAD]</span></td>
		<td><span class='lang2' >ൡ</span><br/><span class='keys'>[CAR]</span></td>
		<td><span class='lang2' >ൠ</span><br/><span class='keys'>[CA+]</span></td>
	</tr>
	
</table>

<div id="Back">
<p><a href="malayalam.php">Back to Inscript Malayalam Keyboard Help</a><br/>
</p>
</div>



