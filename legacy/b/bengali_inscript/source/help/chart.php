<?php /*
  Name:             bengali_inscript
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
  $pagename = 'Inscript Bengali Keyboard Help';
  $pagetitle = 'Inscript Bengali Keyboard Help';
  $style = 'lang2 {font-size:250%}';
  
  $relatedSites = array("http://$site_tavultesoft/bengali" => "Bengali Keyboards Home");
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

<!-- <h4><a target="_blank" href="chart.pdf"><img border=0 style='vertical-align:bottom' src="<?php echo cdn('img/pdficon_small.gif'); ?>" /></a> Download this documentation in <a target="_blank" href="chart.pdf">PDF format</a>.</h4> -->

<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically 
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard lets you type in Bengali (Bangla) with the standardised Inscript layout.  It is easy to use for people familiar with Bengali.  
The keyboard uses a normal English (QWERTY) keyboard.
</p>
<p class='keymanweb'>
If a special font is needed for this language, most computers will download it automatically.
</p>
<!-- <p>
<a href="#Related">Click here</a> to see other keyboard layouts for Sinhala.
</p> -->
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
<p>The Inscript keyboard layout was designed to make it easy to type in all Indian scripts.  It uses the same layout for all languages, and has been standardised by the Government of India.  There are separate keys for consonants and vowels.  Most Bengali characters have both consonant and vowel parts, and each part should be typed separately.  The consonant part is always typed before the vowel, no matter where the vowel part is written..
</p>
<p>

<p>
For example, typing <span class='keys'>F</span> will produce the vowel <span class='highlightExample lang2' style='font-size:200%'>ই</span>.  If this vowel is combined with a consonant, though, such as <span class='highlightExample lang2' style='font-size:200%'>কি</span>, the vowel part <span class='highlightExample lang2' style='font-size:200%'>ি</span> is typed with <span class='keys'>f</span> after the consonant has been typed.  If you press Backspace once, only the vowel part will be erased, and you can type a different vowel.
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
	
<p>The On Screen Keyboard shows the 35 normal consonants <span class='lang2' style='font-size:200%'>ক খ গ ঘ ঙ চ ছ জ ঝ ঞ ট ঠ ড ঢ ণ ত থ দ ধ ন প ফ ব ভ ম য় র ল শ ষ স হ য ড় ঢ়</span>, the vowels <span class='lang2' style='font-size:200%'>অ আ ই ঈ উ ঊ ঋ এ ঐ ও ঔ  ্ া ি ী ু ূ ৃ ে ৈ ো ৌ</span>, and the <span class='lang2' style='font-size:200%'>্ ত্ ং ঃ ঁ</span> marks.  There are also numbers and punctuation marks.</p>

<p>Bengali vowels and consonants are usually combined, so when you type a consonant and a vowel part, they will be joined into one character.  If you use the arrow keys to move through the text, you only need to press an arrow key once to move past each character.  If you press Delete before (on the left of) a combined consonant and vowel, it will be erased completely, but if you press Backspace after a character, only the vowel part will be erased (even if the vowel part appears before the consonant).
</p>

<h4>Vowels and Consonants</h4>
<p>When you type consonants and vowel parts, you should always type the consonant part first, even when the vowel part appears on the left of the consonant.  If you type any of the independent vowels, they will not be combined with consonants.
</p>
<p>All the consonants naturally include the vowel sound <span class='highlightExample lang2' style='font-size:200%'>অ</span>, so if you want to produce a consonant with no vowel, you need to add the <span class='lang2' style='font-size:200%'>্</span> mark.  You can do this by typing <span class='keys'>d</span> right after typing a consonant.  After you have typed the <span class='lang2' style='font-size:200%'>্</span> mark, you cannot type a vowel to combine with that consonant.
</p>
<p>Bengali includes many combined consonants, and these are not on the keyboard.  To type a combined consonant, type the first consonant, then the <span class='lang2' style='font-size:200%'>্</span> mark, then the second consonant.  The computer will then combine the two consonants into a single combined character.  For example, typing <span class='keys'>kdk</span> produces the combined consonant <span class='highlightExample lang2' style='font-size:200%'>ক্ক</span>.
</p>

<h4>Keystroke Examples</h4>
<p>In the following table you can see examples of how to type the different vowels with the consonant <span class='highlightExample lang2' style='font-size:200%'>ক</span>.  For a table of all the normal Bengali characters and how to type them, <a href="chart.php">click here</a>.</p>
<br/>
<table>
	<col width=80 span=3 />
	<col width=150 />
	<tr style='text-align:center; font-weight:normal'>
		<td>Consonant</td><td>Vowel</td><td>Combined</td><td>Keystrokes</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'>ক</td><td class='lang2' style='font-size:200%'>্</td><td class='lang2' style='font-size:200%'>ক্</td><td><span class='keys'>kd</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>অ</td><td class='lang2' style='font-size:200%'>ক</td><td><span class='keys'>k</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>আ</td><td class='lang2' style='font-size:200%'>কা</td><td><span class='keys'>ke</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ই</td><td class='lang2' style='font-size:200%'>কি</td><td><span class='keys'>kf</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঈ</td><td class='lang2' style='font-size:200%'>কী</td><td><span class='keys'>kr</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>উ</td><td class='lang2' style='font-size:200%'>কু</td><td><span class='keys'>kg</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঊ</td><td class='lang2' style='font-size:200%'>কূ</td><td><span class='keys'>kt</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঋ</td><td class='lang2' style='font-size:200%'>কৃ</td><td><span class='keys'>k=</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>এ</td><td class='lang2' style='font-size:200%'>কে</td><td><span class='keys'>ks</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঐ</td><td class='lang2' style='font-size:200%'>কৈ</td><td><span class='keys'>kw</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ও</td><td class='lang2' style='font-size:200%'>কো</td><td><span class='keys'>ka</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঔ</td><td class='lang2' style='font-size:200%'>কৌ</td><td><span class='keys'>kq</span></td>
	</tr>
	
</table>

</div>

<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>
<h4> Fonts</h4>
<p class='keymanweb'>If you see squares when you type, or the Bengali characters do not appear correctly, please read the <a href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<h4>Problem Solving</h4>
<p>If a vowel does not combine with a consonant, make sure you have typed the consonant first.  Also check that you have not typed another vowel already, or a standalone vowel, or the <span class='lang2' style='font-size:200%'>্</span> mark.
</p>

</div>

<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>Further Resources</h2>
<div id="Related">
		<!-- A list of links to related keyboards - to the help pages or to (download) the keyboards? -->

<h3>Related Keyboard Layouts</h3>
<p>Other Keyboard Layouts for the Bengali language:</p>
<p><a href="/go?language=tam&amp;keyboard=bengali">Bengali Traditional</a><br/>
<p><a href="/go?language=tam&amp;keyboard=isis_bangla">ISIS Bangla</a><br/>


</div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=527&amp;FromKeyman=0">Download Inscript Bengali for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/sinhala.htm">Bengali Alphabet at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/bengali_language">Bengali Language at Wikipedia.org</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/bengali_script">Bengali Script at Wikipedia.org</a></p>

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
The Inscript Bengali Keyboard for Keyman Desktop and KeymanWeb is Copyright 2008 Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
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
<p>The following chart lists all the normal characters available with this keyboard.  Below each character are the keys used to type it.
<br/>Because Bengali includes hundreds of combined consonants, these are not shown on this chart.  To type combined consonants, type a <span class='lang2' style='font-size:200%'>্</span> mark (<span class='keys'>d</span>) between the two consonants.</p>

<table border=0 cellspacing=2 cellpadding=1>
	<col width=65 style='text-align:center; background-color:#dedede' />
	<col span=12 width=65 style='text-align:center; background-color:#ffffff' />

	<tr style='text-align:center; font-weight:normal; background-color:#dedede'>
		<td style='text-align:right; font-weight:bold; background-color:#dedede' valign=bottom>\<span style='text-decoration:underline'>&nbsp;Vowels</span>&nbsp;<br/>C'nants\</td>
		<td><span class='lang2' >্</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >অ</span><br/><span class='keys'>D</span></td>
		<td><span class='lang2' >আ</span><br/><span class='keys'>E</span></td>
		<td><span class='lang2' >ই</span><br/><span class='keys'>F</span></td>
		<td><span class='lang2' >ঈ</span><br/><span class='keys'>R</span></td>
		<td><span class='lang2' >উ</span><br/><span class='keys'>G</span></td>
		<td><span class='lang2' >ঊ</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' >ঋ</span><br/><span class='keys'>+</span></td>
		<td><span class='lang2' >এ</span><br/><span class='keys'>S</span></td>
		<td><span class='lang2' >ঐ</span><br/><span class='keys'>W</span></td>
		<td><span class='lang2' >ও</span><br/><span class='keys'>A</span></td>
		<td><span class='lang2' >ঔ</span><br/><span class='keys'>Q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ক</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >ক্</span><br/><span class='keys'>kd</span></td>
		<td><span class='lang2' >ক</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >কা</span><br/><span class='keys'>ke</span></td>
		<td><span class='lang2' >কি</span><br/><span class='keys'>kf</span></td>
		<td><span class='lang2' >কী</span><br/><span class='keys'>kr</span></td>
		<td><span class='lang2' >কু</span><br/><span class='keys'>kg</span></td>
		<td><span class='lang2' >কূ</span><br/><span class='keys'>kt</span></td>
		<td><span class='lang2' >কৃ</span><br/><span class='keys'>k=</span></td>
		<td><span class='lang2' >কে</span><br/><span class='keys'>ks</span></td>
		<td><span class='lang2' >কৈ</span><br/><span class='keys'>kw</span></td>
		<td><span class='lang2' >কো</span><br/><span class='keys'>ka</span></td>
		<td><span class='lang2' >কৌ</span><br/><span class='keys'>kq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >খ</span><br/><span class='keys'>K</span></td>
		<td><span class='lang2' >খ্</span><br/><span class='keys'>Kd</span></td>
		<td><span class='lang2' >খ</span><br/><span class='keys'>K</span></td>
		<td><span class='lang2' >খা</span><br/><span class='keys'>Ke</span></td>
		<td><span class='lang2' >খি</span><br/><span class='keys'>Kf</span></td>
		<td><span class='lang2' >খী</span><br/><span class='keys'>Kr</span></td>
		<td><span class='lang2' >খু</span><br/><span class='keys'>Kg</span></td>
		<td><span class='lang2' >খূ</span><br/><span class='keys'>Kt</span></td>
		<td><span class='lang2' >খৃ</span><br/><span class='keys'>K=</span></td>
		<td><span class='lang2' >খে</span><br/><span class='keys'>Ks</span></td>
		<td><span class='lang2' >খৈ</span><br/><span class='keys'>Kw</span></td>
		<td><span class='lang2' >খো</span><br/><span class='keys'>Ka</span></td>
		<td><span class='lang2' >খৌ</span><br/><span class='keys'>Kq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >গ</span><br/><span class='keys'>i</span></td>
		<td><span class='lang2' >গ্</span><br/><span class='keys'>id</span></td>
		<td><span class='lang2' >গ</span><br/><span class='keys'>i</span></td>
		<td><span class='lang2' >গা</span><br/><span class='keys'>ie</span></td>
		<td><span class='lang2' >গি</span><br/><span class='keys'>if</span></td>
		<td><span class='lang2' >গী</span><br/><span class='keys'>ir</span></td>
		<td><span class='lang2' >গু</span><br/><span class='keys'>ig</span></td>
		<td><span class='lang2' >গূ</span><br/><span class='keys'>it</span></td>
		<td><span class='lang2' >গৃ</span><br/><span class='keys'>i=</span></td>
		<td><span class='lang2' >গে</span><br/><span class='keys'>is</span></td>
		<td><span class='lang2' >গৈ</span><br/><span class='keys'>iw</span></td>
		<td><span class='lang2' >গো</span><br/><span class='keys'>ia</span></td>
		<td><span class='lang2' >গৌ</span><br/><span class='keys'>iq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ঘ</span><br/><span class='keys'>I</span></td>
		<td><span class='lang2' >ঘ্</span><br/><span class='keys'>Id</span></td>
		<td><span class='lang2' >ঘ</span><br/><span class='keys'>I</span></td>
		<td><span class='lang2' >ঘা</span><br/><span class='keys'>Ie</span></td>
		<td><span class='lang2' >ঘি</span><br/><span class='keys'>If</span></td>
		<td><span class='lang2' >ঘী</span><br/><span class='keys'>Ir</span></td>
		<td><span class='lang2' >ঘু</span><br/><span class='keys'>Ig</span></td>
		<td><span class='lang2' >ঘূ</span><br/><span class='keys'>It</span></td>
		<td><span class='lang2' >ঘৃ</span><br/><span class='keys'>I=</span></td>
		<td><span class='lang2' >ঘে</span><br/><span class='keys'>Is</span></td>
		<td><span class='lang2' >ঘৈ</span><br/><span class='keys'>Iw</span></td>
		<td><span class='lang2' >ঘো</span><br/><span class='keys'>Ia</span></td>
		<td><span class='lang2' >ঘৌ</span><br/><span class='keys'>Iq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ঙ</span><br/><span class='keys'>U</span></td>
		<td><span class='lang2' >ঙ্</span><br/><span class='keys'>Ud</span></td>
		<td><span class='lang2' >ঙ</span><br/><span class='keys'>U</span></td>
		<td><span class='lang2' >ঙা</span><br/><span class='keys'>Ue</span></td>
		<td><span class='lang2' >ঙি</span><br/><span class='keys'>Uf</span></td>
		<td><span class='lang2' >ঙী</span><br/><span class='keys'>Ur</span></td>
		<td><span class='lang2' >ঙু</span><br/><span class='keys'>Ug</span></td>
		<td><span class='lang2' >ঙূ</span><br/><span class='keys'>Ut</span></td>
		<td><span class='lang2' >ঙৃ</span><br/><span class='keys'>U=</span></td>
		<td><span class='lang2' >ঙে</span><br/><span class='keys'>Us</span></td>
		<td><span class='lang2' >ঙৈ</span><br/><span class='keys'>Uw</span></td>
		<td><span class='lang2' >ঙো</span><br/><span class='keys'>Ua</span></td>
		<td><span class='lang2' >ঙৌ</span><br/><span class='keys'>Uq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >চ</span><br/><span class='keys'>;</span></td>
		<td><span class='lang2' >চ্</span><br/><span class='keys'>;d</span></td>
		<td><span class='lang2' >চ</span><br/><span class='keys'>;</span></td>
		<td><span class='lang2' >চা</span><br/><span class='keys'>;e</span></td>
		<td><span class='lang2' >চি</span><br/><span class='keys'>;f</span></td>
		<td><span class='lang2' >চী</span><br/><span class='keys'>;r</span></td>
		<td><span class='lang2' >চু</span><br/><span class='keys'>;g</span></td>
		<td><span class='lang2' >চূ</span><br/><span class='keys'>;t</span></td>
		<td><span class='lang2' >চৃ</span><br/><span class='keys'>;=</span></td>
		<td><span class='lang2' >চে</span><br/><span class='keys'>;s</span></td>
		<td><span class='lang2' >চৈ</span><br/><span class='keys'>;w</span></td>
		<td><span class='lang2' >চো</span><br/><span class='keys'>;a</span></td>
		<td><span class='lang2' >চৌ</span><br/><span class='keys'>;q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ছ</span><br/><span class='keys'>:</span></td>
		<td><span class='lang2' >ছ্</span><br/><span class='keys'>:d</span></td>
		<td><span class='lang2' >ছ</span><br/><span class='keys'>:</span></td>
		<td><span class='lang2' >ছা</span><br/><span class='keys'>:e</span></td>
		<td><span class='lang2' >ছি</span><br/><span class='keys'>:f</span></td>
		<td><span class='lang2' >ছী</span><br/><span class='keys'>:r</span></td>
		<td><span class='lang2' >ছু</span><br/><span class='keys'>:g</span></td>
		<td><span class='lang2' >ছূ</span><br/><span class='keys'>:t</span></td>
		<td><span class='lang2' >ছৃ</span><br/><span class='keys'>:=</span></td>
		<td><span class='lang2' >ছে</span><br/><span class='keys'>:s</span></td>
		<td><span class='lang2' >ছৈ</span><br/><span class='keys'>:w</span></td>
		<td><span class='lang2' >ছো</span><br/><span class='keys'>:a</span></td>
		<td><span class='lang2' >ছৌ</span><br/><span class='keys'>:q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >জ</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >জ্</span><br/><span class='keys'>pd</span></td>
		<td><span class='lang2' >জ</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >জা</span><br/><span class='keys'>pe</span></td>
		<td><span class='lang2' >জি</span><br/><span class='keys'>pf</span></td>
		<td><span class='lang2' >জী</span><br/><span class='keys'>pr</span></td>
		<td><span class='lang2' >জু</span><br/><span class='keys'>pg</span></td>
		<td><span class='lang2' >জূ</span><br/><span class='keys'>pt</span></td>
		<td><span class='lang2' >জৃ</span><br/><span class='keys'>p=</span></td>
		<td><span class='lang2' >জে</span><br/><span class='keys'>ps</span></td>
		<td><span class='lang2' >জৈ</span><br/><span class='keys'>pw</span></td>
		<td><span class='lang2' >জো</span><br/><span class='keys'>pa</span></td>
		<td><span class='lang2' >জৌ</span><br/><span class='keys'>pq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ঝ</span><br/><span class='keys'>P</span></td>
		<td><span class='lang2' >ঝ্</span><br/><span class='keys'>Pd</span></td>
		<td><span class='lang2' >ঝ</span><br/><span class='keys'>P</span></td>
		<td><span class='lang2' >ঝা</span><br/><span class='keys'>Pe</span></td>
		<td><span class='lang2' >ঝি</span><br/><span class='keys'>Pf</span></td>
		<td><span class='lang2' >ঝী</span><br/><span class='keys'>Pr</span></td>
		<td><span class='lang2' >ঝু</span><br/><span class='keys'>Pg</span></td>
		<td><span class='lang2' >ঝূ</span><br/><span class='keys'>Pt</span></td>
		<td><span class='lang2' >ঝৃ</span><br/><span class='keys'>P=</span></td>
		<td><span class='lang2' >ঝে</span><br/><span class='keys'>Ps</span></td>
		<td><span class='lang2' >ঝৈ</span><br/><span class='keys'>Pw</span></td>
		<td><span class='lang2' >ঝো</span><br/><span class='keys'>Pa</span></td>
		<td><span class='lang2' >ঝৌ</span><br/><span class='keys'>Pq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ঞ</span><br/><span class='keys'>}</span></td>
		<td><span class='lang2' >ঞ্</span><br/><span class='keys'>}d</span></td>
		<td><span class='lang2' >ঞ</span><br/><span class='keys'>}</span></td>
		<td><span class='lang2' >ঞা</span><br/><span class='keys'>}e</span></td>
		<td><span class='lang2' >ঞি</span><br/><span class='keys'>}f</span></td>
		<td><span class='lang2' >ঞী</span><br/><span class='keys'>}r</span></td>
		<td><span class='lang2' >ঞু</span><br/><span class='keys'>}g</span></td>
		<td><span class='lang2' >ঞূ</span><br/><span class='keys'>}t</span></td>
		<td><span class='lang2' >ঞৃ</span><br/><span class='keys'>}=</span></td>
		<td><span class='lang2' >ঞে</span><br/><span class='keys'>}s</span></td>
		<td><span class='lang2' >ঞৈ</span><br/><span class='keys'>}w</span></td>
		<td><span class='lang2' >ঞো</span><br/><span class='keys'>}a</span></td>
		<td><span class='lang2' >ঞৌ</span><br/><span class='keys'>}q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ট</span><br/><span class='keys'>'</span></td>
		<td><span class='lang2' >ট্</span><br/><span class='keys'>'d</span></td>
		<td><span class='lang2' >ট</span><br/><span class='keys'>'</span></td>
		<td><span class='lang2' >টা</span><br/><span class='keys'>'e</span></td>
		<td><span class='lang2' >টি</span><br/><span class='keys'>'f</span></td>
		<td><span class='lang2' >টী</span><br/><span class='keys'>'r</span></td>
		<td><span class='lang2' >টু</span><br/><span class='keys'>'g</span></td>
		<td><span class='lang2' >টূ</span><br/><span class='keys'>'t</span></td>
		<td><span class='lang2' >টৃ</span><br/><span class='keys'>'=</span></td>
		<td><span class='lang2' >টে</span><br/><span class='keys'>'s</span></td>
		<td><span class='lang2' >টৈ</span><br/><span class='keys'>'w</span></td>
		<td><span class='lang2' >টো</span><br/><span class='keys'>'a</span></td>
		<td><span class='lang2' >টৌ</span><br/><span class='keys'>'q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ঠ</span><br/><span class='keys'>"</span></td>
		<td><span class='lang2' >ঠ্</span><br/><span class='keys'>"d</span></td>
		<td><span class='lang2' >ঠ</span><br/><span class='keys'>"</span></td>
		<td><span class='lang2' >ঠা</span><br/><span class='keys'>"e</span></td>
		<td><span class='lang2' >ঠি</span><br/><span class='keys'>"f</span></td>
		<td><span class='lang2' >ঠী</span><br/><span class='keys'>"r</span></td>
		<td><span class='lang2' >ঠু</span><br/><span class='keys'>"g</span></td>
		<td><span class='lang2' >ঠূ</span><br/><span class='keys'>"t</span></td>
		<td><span class='lang2' >ঠৃ</span><br/><span class='keys'>"=</span></td>
		<td><span class='lang2' >ঠে</span><br/><span class='keys'>"s</span></td>
		<td><span class='lang2' >ঠৈ</span><br/><span class='keys'>"w</span></td>
		<td><span class='lang2' >ঠো</span><br/><span class='keys'>"a</span></td>
		<td><span class='lang2' >ঠৌ</span><br/><span class='keys'>"q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ড</span><br/><span class='keys'>[[</span></td>
		<td><span class='lang2' >ড্</span><br/><span class='keys'>[[d</span></td>
		<td><span class='lang2' >ড</span><br/><span class='keys'>[[</span></td>
		<td><span class='lang2' >ডা</span><br/><span class='keys'>[[e</span></td>
		<td><span class='lang2' >ডি</span><br/><span class='keys'>[[f</span></td>
		<td><span class='lang2' >ডী</span><br/><span class='keys'>[[r</span></td>
		<td><span class='lang2' >ডু</span><br/><span class='keys'>[[g</span></td>
		<td><span class='lang2' >ডূ</span><br/><span class='keys'>[[t</span></td>
		<td><span class='lang2' >ডৃ</span><br/><span class='keys'>[[=</span></td>
		<td><span class='lang2' >ডে</span><br/><span class='keys'>[[s</span></td>
		<td><span class='lang2' >ডৈ</span><br/><span class='keys'>[[w</span></td>
		<td><span class='lang2' >ডো</span><br/><span class='keys'>[[a</span></td>
		<td><span class='lang2' >ডৌ</span><br/><span class='keys'>[[q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ঢ</span><br/><span class='keys'>{</span></td>
		<td><span class='lang2' >ঢ্</span><br/><span class='keys'>{d</span></td>
		<td><span class='lang2' >ঢ</span><br/><span class='keys'>{</span></td>
		<td><span class='lang2' >ঢা</span><br/><span class='keys'>{e</span></td>
		<td><span class='lang2' >ঢি</span><br/><span class='keys'>{f</span></td>
		<td><span class='lang2' >ঢী</span><br/><span class='keys'>{r</span></td>
		<td><span class='lang2' >ঢু</span><br/><span class='keys'>{g</span></td>
		<td><span class='lang2' >ঢূ</span><br/><span class='keys'>{t</span></td>
		<td><span class='lang2' >ঢৃ</span><br/><span class='keys'>{=</span></td>
		<td><span class='lang2' >ঢে</span><br/><span class='keys'>{s</span></td>
		<td><span class='lang2' >ঢৈ</span><br/><span class='keys'>{w</span></td>
		<td><span class='lang2' >ঢো</span><br/><span class='keys'>{a</span></td>
		<td><span class='lang2' >ঢৌ</span><br/><span class='keys'>{q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ণ</span><br/><span class='keys'>C</span></td>
		<td><span class='lang2' >ণ্</span><br/><span class='keys'>Cd</span></td>
		<td><span class='lang2' >ণ</span><br/><span class='keys'>C</span></td>
		<td><span class='lang2' >ণা</span><br/><span class='keys'>Ce</span></td>
		<td><span class='lang2' >ণি</span><br/><span class='keys'>Cf</span></td>
		<td><span class='lang2' >ণী</span><br/><span class='keys'>Cr</span></td>
		<td><span class='lang2' >ণু</span><br/><span class='keys'>Cg</span></td>
		<td><span class='lang2' >ণূ</span><br/><span class='keys'>Ct</span></td>
		<td><span class='lang2' >ণৃ</span><br/><span class='keys'>C=</span></td>
		<td><span class='lang2' >ণে</span><br/><span class='keys'>Cs</span></td>
		<td><span class='lang2' >ণৈ</span><br/><span class='keys'>Cw</span></td>
		<td><span class='lang2' >ণো</span><br/><span class='keys'>Ca</span></td>
		<td><span class='lang2' >ণৌ</span><br/><span class='keys'>Cq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ত</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >ত্</span><br/><span class='keys'>ld</span></td>
		<td><span class='lang2' >ত</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >তা</span><br/><span class='keys'>le</span></td>
		<td><span class='lang2' >তি</span><br/><span class='keys'>lf</span></td>
		<td><span class='lang2' >তী</span><br/><span class='keys'>lr</span></td>
		<td><span class='lang2' >তু</span><br/><span class='keys'>lg</span></td>
		<td><span class='lang2' >তূ</span><br/><span class='keys'>lt</span></td>
		<td><span class='lang2' >তৃ</span><br/><span class='keys'>l=</span></td>
		<td><span class='lang2' >তে</span><br/><span class='keys'>ls</span></td>
		<td><span class='lang2' >তৈ</span><br/><span class='keys'>lw</span></td>
		<td><span class='lang2' >তো</span><br/><span class='keys'>la</span></td>
		<td><span class='lang2' >তৌ</span><br/><span class='keys'>lq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >থ</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >থ্</span><br/><span class='keys'>Ld</span></td>
		<td><span class='lang2' >থ</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >থা</span><br/><span class='keys'>Le</span></td>
		<td><span class='lang2' >থি</span><br/><span class='keys'>Lf</span></td>
		<td><span class='lang2' >থী</span><br/><span class='keys'>Lr</span></td>
		<td><span class='lang2' >থু</span><br/><span class='keys'>Lg</span></td>
		<td><span class='lang2' >থূ</span><br/><span class='keys'>Lt</span></td>
		<td><span class='lang2' >থৃ</span><br/><span class='keys'>L=</span></td>
		<td><span class='lang2' >থে</span><br/><span class='keys'>Ls</span></td>
		<td><span class='lang2' >থৈ</span><br/><span class='keys'>Lw</span></td>
		<td><span class='lang2' >থো</span><br/><span class='keys'>La</span></td>
		<td><span class='lang2' >থৌ</span><br/><span class='keys'>Lq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >দ</span><br/><span class='keys'>o</span></td>
		<td><span class='lang2' >দ্</span><br/><span class='keys'>od</span></td>
		<td><span class='lang2' >দ</span><br/><span class='keys'>o</span></td>
		<td><span class='lang2' >দা</span><br/><span class='keys'>oe</span></td>
		<td><span class='lang2' >দি</span><br/><span class='keys'>of</span></td>
		<td><span class='lang2' >দী</span><br/><span class='keys'>or</span></td>
		<td><span class='lang2' >দু</span><br/><span class='keys'>og</span></td>
		<td><span class='lang2' >দূ</span><br/><span class='keys'>ot</span></td>
		<td><span class='lang2' >দৃ</span><br/><span class='keys'>o=</span></td>
		<td><span class='lang2' >দে</span><br/><span class='keys'>os</span></td>
		<td><span class='lang2' >দৈ</span><br/><span class='keys'>ow</span></td>
		<td><span class='lang2' >দো</span><br/><span class='keys'>oa</span></td>
		<td><span class='lang2' >দৌ</span><br/><span class='keys'>oq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ধ</span><br/><span class='keys'>O</span></td>
		<td><span class='lang2' >ধ্</span><br/><span class='keys'>Od</span></td>
		<td><span class='lang2' >ধ</span><br/><span class='keys'>O</span></td>
		<td><span class='lang2' >ধা</span><br/><span class='keys'>Oe</span></td>
		<td><span class='lang2' >ধি</span><br/><span class='keys'>Of</span></td>
		<td><span class='lang2' >ধী</span><br/><span class='keys'>Or</span></td>
		<td><span class='lang2' >ধু</span><br/><span class='keys'>Og</span></td>
		<td><span class='lang2' >ধূ</span><br/><span class='keys'>Ot</span></td>
		<td><span class='lang2' >ধৃ</span><br/><span class='keys'>O=</span></td>
		<td><span class='lang2' >ধে</span><br/><span class='keys'>Os</span></td>
		<td><span class='lang2' >ধৈ</span><br/><span class='keys'>Ow</span></td>
		<td><span class='lang2' >ধো</span><br/><span class='keys'>Oa</span></td>
		<td><span class='lang2' >ধৌ</span><br/><span class='keys'>Oq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ন</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >ন্</span><br/><span class='keys'>vd</span></td>
		<td><span class='lang2' >ন</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >না</span><br/><span class='keys'>ve</span></td>
		<td><span class='lang2' >নি</span><br/><span class='keys'>vf</span></td>
		<td><span class='lang2' >নী</span><br/><span class='keys'>vr</span></td>
		<td><span class='lang2' >নু</span><br/><span class='keys'>vg</span></td>
		<td><span class='lang2' >নূ</span><br/><span class='keys'>vt</span></td>
		<td><span class='lang2' >নৃ</span><br/><span class='keys'>v=</span></td>
		<td><span class='lang2' >নে</span><br/><span class='keys'>vs</span></td>
		<td><span class='lang2' >নৈ</span><br/><span class='keys'>vw</span></td>
		<td><span class='lang2' >নো</span><br/><span class='keys'>va</span></td>
		<td><span class='lang2' >নৌ</span><br/><span class='keys'>vq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >প</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >প্</span><br/><span class='keys'>hd</span></td>
		<td><span class='lang2' >প</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >পা</span><br/><span class='keys'>he</span></td>
		<td><span class='lang2' >পি</span><br/><span class='keys'>hf</span></td>
		<td><span class='lang2' >পী</span><br/><span class='keys'>hr</span></td>
		<td><span class='lang2' >পু</span><br/><span class='keys'>hg</span></td>
		<td><span class='lang2' >পূ</span><br/><span class='keys'>ht</span></td>
		<td><span class='lang2' >পৃ</span><br/><span class='keys'>h=</span></td>
		<td><span class='lang2' >পে</span><br/><span class='keys'>hs</span></td>
		<td><span class='lang2' >পৈ</span><br/><span class='keys'>hw</span></td>
		<td><span class='lang2' >পো</span><br/><span class='keys'>ha</span></td>
		<td><span class='lang2' >পৌ</span><br/><span class='keys'>hq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ফ</span><br/><span class='keys'>H</span></td>
		<td><span class='lang2' >ফ্</span><br/><span class='keys'>Hd</span></td>
		<td><span class='lang2' >ফ</span><br/><span class='keys'>H</span></td>
		<td><span class='lang2' >ফা</span><br/><span class='keys'>He</span></td>
		<td><span class='lang2' >ফি</span><br/><span class='keys'>Hf</span></td>
		<td><span class='lang2' >ফী</span><br/><span class='keys'>Hr</span></td>
		<td><span class='lang2' >ফু</span><br/><span class='keys'>Hg</span></td>
		<td><span class='lang2' >ফূ</span><br/><span class='keys'>Ht</span></td>
		<td><span class='lang2' >ফৃ</span><br/><span class='keys'>H=</span></td>
		<td><span class='lang2' >ফে</span><br/><span class='keys'>Hs</span></td>
		<td><span class='lang2' >ফৈ</span><br/><span class='keys'>Hw</span></td>
		<td><span class='lang2' >ফো</span><br/><span class='keys'>Ha</span></td>
		<td><span class='lang2' >ফৌ</span><br/><span class='keys'>Hq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ব</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >ব্</span><br/><span class='keys'>yd</span></td>
		<td><span class='lang2' >ব</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >বা</span><br/><span class='keys'>ye</span></td>
		<td><span class='lang2' >বি</span><br/><span class='keys'>yf</span></td>
		<td><span class='lang2' >বী</span><br/><span class='keys'>yr</span></td>
		<td><span class='lang2' >বু</span><br/><span class='keys'>yg</span></td>
		<td><span class='lang2' >বূ</span><br/><span class='keys'>yt</span></td>
		<td><span class='lang2' >বৃ</span><br/><span class='keys'>y=</span></td>
		<td><span class='lang2' >বে</span><br/><span class='keys'>ys</span></td>
		<td><span class='lang2' >বৈ</span><br/><span class='keys'>yw</span></td>
		<td><span class='lang2' >বো</span><br/><span class='keys'>ya</span></td>
		<td><span class='lang2' >বৌ</span><br/><span class='keys'>yq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ভ</span><br/><span class='keys'>Y</span></td>
		<td><span class='lang2' >ভ্</span><br/><span class='keys'>Yd</span></td>
		<td><span class='lang2' >ভ</span><br/><span class='keys'>Y</span></td>
		<td><span class='lang2' >ভা</span><br/><span class='keys'>Ye</span></td>
		<td><span class='lang2' >ভি</span><br/><span class='keys'>Yf</span></td>
		<td><span class='lang2' >ভী</span><br/><span class='keys'>Yr</span></td>
		<td><span class='lang2' >ভু</span><br/><span class='keys'>Yg</span></td>
		<td><span class='lang2' >ভূ</span><br/><span class='keys'>Yt</span></td>
		<td><span class='lang2' >ভৃ</span><br/><span class='keys'>Y=</span></td>
		<td><span class='lang2' >ভে</span><br/><span class='keys'>Ys</span></td>
		<td><span class='lang2' >ভৈ</span><br/><span class='keys'>Yw</span></td>
		<td><span class='lang2' >ভো</span><br/><span class='keys'>Ya</span></td>
		<td><span class='lang2' >ভৌ</span><br/><span class='keys'>Yq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ম</span><br/><span class='keys'>c</span></td>
		<td><span class='lang2' >ম্</span><br/><span class='keys'>cd</span></td>
		<td><span class='lang2' >ম</span><br/><span class='keys'>c</span></td>
		<td><span class='lang2' >মা</span><br/><span class='keys'>ce</span></td>
		<td><span class='lang2' >মি</span><br/><span class='keys'>cf</span></td>
		<td><span class='lang2' >মী</span><br/><span class='keys'>cr</span></td>
		<td><span class='lang2' >মু</span><br/><span class='keys'>cg</span></td>
		<td><span class='lang2' >মূ</span><br/><span class='keys'>ct</span></td>
		<td><span class='lang2' >মৃ</span><br/><span class='keys'>c=</span></td>
		<td><span class='lang2' >মে</span><br/><span class='keys'>cs</span></td>
		<td><span class='lang2' >মৈ</span><br/><span class='keys'>cw</span></td>
		<td><span class='lang2' >মো</span><br/><span class='keys'>ca</span></td>
		<td><span class='lang2' >মৌ</span><br/><span class='keys'>cq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >য</span><br/><span class='keys'>/</span></td>
		<td><span class='lang2' >য্</span><br/><span class='keys'>/d</span></td>
		<td><span class='lang2' >য</span><br/><span class='keys'>/</span></td>
		<td><span class='lang2' >যা</span><br/><span class='keys'>/e</span></td>
		<td><span class='lang2' >যি</span><br/><span class='keys'>/f</span></td>
		<td><span class='lang2' >যী</span><br/><span class='keys'>/r</span></td>
		<td><span class='lang2' >যু</span><br/><span class='keys'>/g</span></td>
		<td><span class='lang2' >যূ</span><br/><span class='keys'>/t</span></td>
		<td><span class='lang2' >যৃ</span><br/><span class='keys'>/=</span></td>
		<td><span class='lang2' >যে</span><br/><span class='keys'>/s</span></td>
		<td><span class='lang2' >যৈ</span><br/><span class='keys'>/w</span></td>
		<td><span class='lang2' >যো</span><br/><span class='keys'>/a</span></td>
		<td><span class='lang2' >যৌ</span><br/><span class='keys'>/q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >র</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >র্</span><br/><span class='keys'>jd</span></td>
		<td><span class='lang2' >র</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >রা</span><br/><span class='keys'>je</span></td>
		<td><span class='lang2' >রি</span><br/><span class='keys'>jf</span></td>
		<td><span class='lang2' >রী</span><br/><span class='keys'>jr</span></td>
		<td><span class='lang2' >রু</span><br/><span class='keys'>jg</span></td>
		<td><span class='lang2' >রূ</span><br/><span class='keys'>jt</span></td>
		<td><span class='lang2' >রৃ</span><br/><span class='keys'>j=</span></td>
		<td><span class='lang2' >রে</span><br/><span class='keys'>js</span></td>
		<td><span class='lang2' >রৈ</span><br/><span class='keys'>jw</span></td>
		<td><span class='lang2' >রো</span><br/><span class='keys'>ja</span></td>
		<td><span class='lang2' >রৌ</span><br/><span class='keys'>jq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ল</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >ল্</span><br/><span class='keys'>nd</span></td>
		<td><span class='lang2' >ল</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >লা</span><br/><span class='keys'>ne</span></td>
		<td><span class='lang2' >লি</span><br/><span class='keys'>nf</span></td>
		<td><span class='lang2' >লী</span><br/><span class='keys'>nr</span></td>
		<td><span class='lang2' >লু</span><br/><span class='keys'>ng</span></td>
		<td><span class='lang2' >লূ</span><br/><span class='keys'>nt</span></td>
		<td><span class='lang2' >লৃ</span><br/><span class='keys'>n=</span></td>
		<td><span class='lang2' >লে</span><br/><span class='keys'>ns</span></td>
		<td><span class='lang2' >লৈ</span><br/><span class='keys'>nw</span></td>
		<td><span class='lang2' >লো</span><br/><span class='keys'>na</span></td>
		<td><span class='lang2' >লৌ</span><br/><span class='keys'>nq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >শ</span><br/><span class='keys'>M</span></td>
		<td><span class='lang2' >শ্</span><br/><span class='keys'>Md</span></td>
		<td><span class='lang2' >শ</span><br/><span class='keys'>M</span></td>
		<td><span class='lang2' >শা</span><br/><span class='keys'>Me</span></td>
		<td><span class='lang2' >শি</span><br/><span class='keys'>Mf</span></td>
		<td><span class='lang2' >শী</span><br/><span class='keys'>Mr</span></td>
		<td><span class='lang2' >শু</span><br/><span class='keys'>Mg</span></td>
		<td><span class='lang2' >শূ</span><br/><span class='keys'>Mt</span></td>
		<td><span class='lang2' >শৃ</span><br/><span class='keys'>M=</span></td>
		<td><span class='lang2' >শে</span><br/><span class='keys'>Ms</span></td>
		<td><span class='lang2' >শৈ</span><br/><span class='keys'>Mw</span></td>
		<td><span class='lang2' >শো</span><br/><span class='keys'>Ma</span></td>
		<td><span class='lang2' >শৌ</span><br/><span class='keys'>Mq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ষ</span><br/><span class='keys'>&lt;</span></td>
		<td><span class='lang2' >ষ্</span><br/><span class='keys'>&lt;d</span></td>
		<td><span class='lang2' >ষ</span><br/><span class='keys'>&lt;</span></td>
		<td><span class='lang2' >ষা</span><br/><span class='keys'>&lt;e</span></td>
		<td><span class='lang2' >ষি</span><br/><span class='keys'>&lt;f</span></td>
		<td><span class='lang2' >ষী</span><br/><span class='keys'>&lt;r</span></td>
		<td><span class='lang2' >ষু</span><br/><span class='keys'>&lt;g</span></td>
		<td><span class='lang2' >ষূ</span><br/><span class='keys'>&lt;t</span></td>
		<td><span class='lang2' >ষৃ</span><br/><span class='keys'>&lt;=</span></td>
		<td><span class='lang2' >ষে</span><br/><span class='keys'>&lt;s</span></td>
		<td><span class='lang2' >ষৈ</span><br/><span class='keys'>&lt;w</span></td>
		<td><span class='lang2' >ষো</span><br/><span class='keys'>&lt;a</span></td>
		<td><span class='lang2' >ষৌ</span><br/><span class='keys'>&lt;q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >স</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >স্</span><br/><span class='keys'>md</span></td>
		<td><span class='lang2' >স</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >সা</span><br/><span class='keys'>me</span></td>
		<td><span class='lang2' >সি</span><br/><span class='keys'>mf</span></td>
		<td><span class='lang2' >সী</span><br/><span class='keys'>mr</span></td>
		<td><span class='lang2' >সু</span><br/><span class='keys'>mg</span></td>
		<td><span class='lang2' >সূ</span><br/><span class='keys'>mt</span></td>
		<td><span class='lang2' >সৃ</span><br/><span class='keys'>m=</span></td>
		<td><span class='lang2' >সে</span><br/><span class='keys'>ms</span></td>
		<td><span class='lang2' >সৈ</span><br/><span class='keys'>mw</span></td>
		<td><span class='lang2' >সো</span><br/><span class='keys'>ma</span></td>
		<td><span class='lang2' >সৌ</span><br/><span class='keys'>mq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >হ</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >হ্</span><br/><span class='keys'>ud</span></td>
		<td><span class='lang2' >হ</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >হা</span><br/><span class='keys'>ue</span></td>
		<td><span class='lang2' >হি</span><br/><span class='keys'>uf</span></td>
		<td><span class='lang2' >হী</span><br/><span class='keys'>ur</span></td>
		<td><span class='lang2' >হু</span><br/><span class='keys'>ug</span></td>
		<td><span class='lang2' >হূ</span><br/><span class='keys'>ut</span></td>
		<td><span class='lang2' >হৃ</span><br/><span class='keys'>u=</span></td>
		<td><span class='lang2' >হে</span><br/><span class='keys'>us</span></td>
		<td><span class='lang2' >হৈ</span><br/><span class='keys'>uw</span></td>
		<td><span class='lang2' >হো</span><br/><span class='keys'>ua</span></td>
		<td><span class='lang2' >হৌ</span><br/><span class='keys'>uq</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >য়</span><br/><span class='keys'>?</span></td>
		<td><span class='lang2' >য়্</span><br/><span class='keys'>?d</span></td>
		<td><span class='lang2' >য়</span><br/><span class='keys'>?</span></td>
		<td><span class='lang2' >য়া</span><br/><span class='keys'>?e</span></td>
		<td><span class='lang2' >য়ি</span><br/><span class='keys'>?f</span></td>
		<td><span class='lang2' >য়ী</span><br/><span class='keys'>?r</span></td>
		<td><span class='lang2' >য়ু</span><br/><span class='keys'>?g</span></td>
		<td><span class='lang2' >য়ূ</span><br/><span class='keys'>?t</span></td>
		<td><span class='lang2' >য়ৃ</span><br/><span class='keys'>?=</span></td>
		<td><span class='lang2' >য়ে</span><br/><span class='keys'>?s</span></td>
		<td><span class='lang2' >য়ৈ</span><br/><span class='keys'>?w</span></td>
		<td><span class='lang2' >য়ো</span><br/><span class='keys'>?a</span></td>
		<td><span class='lang2' >য়ৌ</span><br/><span class='keys'>?q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ড়</span><br/><span class='keys'>[[]</span></td>
		<td><span class='lang2' >ড়্</span><br/><span class='keys'>[[]d</span></td>
		<td><span class='lang2' >ড়</span><br/><span class='keys'>[[]</span></td>
		<td><span class='lang2' >ড়া</span><br/><span class='keys'>[[]e</span></td>
		<td><span class='lang2' >ড়ি</span><br/><span class='keys'>[[]f</span></td>
		<td><span class='lang2' >ড়ী</span><br/><span class='keys'>[[]r</span></td>
		<td><span class='lang2' >ড়ু</span><br/><span class='keys'>[[]g</span></td>
		<td><span class='lang2' >ড়ূ</span><br/><span class='keys'>[[]t</span></td>
		<td><span class='lang2' >ড়ৃ</span><br/><span class='keys'>[[]=</span></td>
		<td><span class='lang2' >ড়ে</span><br/><span class='keys'>[[]s</span></td>
		<td><span class='lang2' >ড়ৈ</span><br/><span class='keys'>[[]w</span></td>
		<td><span class='lang2' >ড়ো</span><br/><span class='keys'>[[]a</span></td>
		<td><span class='lang2' >ড়ৌ</span><br/><span class='keys'>[[]q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ঢ়</span><br/><span class='keys'>{]</span></td>
		<td><span class='lang2' >ঢ়্</span><br/><span class='keys'>{]d</span></td>
		<td><span class='lang2' >ঢ়</span><br/><span class='keys'>{]</span></td>
		<td><span class='lang2' >ঢ়া</span><br/><span class='keys'>{]e</span></td>
		<td><span class='lang2' >ঢ়ি</span><br/><span class='keys'>{]f</span></td>
		<td><span class='lang2' >ঢ়ী</span><br/><span class='keys'>{]r</span></td>
		<td><span class='lang2' >ঢ়ু</span><br/><span class='keys'>{]g</span></td>
		<td><span class='lang2' >ঢ়ূ</span><br/><span class='keys'>{]t</span></td>
		<td><span class='lang2' >ঢ়ৃ</span><br/><span class='keys'>{]=</span></td>
		<td><span class='lang2' >ঢ়ে</span><br/><span class='keys'>{]s</span></td>
		<td><span class='lang2' >ঢ়ৈ</span><br/><span class='keys'>{]w</span></td>
		<td><span class='lang2' >ঢ়ো</span><br/><span class='keys'>{]a</span></td>
		<td><span class='lang2' >ঢ়ৌ</span><br/><span class='keys'>{]q</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=13>&nbsp;</td>
	</tr>

	<tr class='keymanweb' style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top>Numerals</td>
		<td><span class='lang2' >১</span><br/><span class='keys'>1</span></td>
		<td><span class='lang2' >২</span><br/><span class='keys'>2</span></td>
		<td><span class='lang2' >৩</span><br/><span class='keys'>3</span></td>
		<td><span class='lang2' >৪</span><br/><span class='keys'>4</span></td>
		<td><span class='lang2' >৫</span><br/><span class='keys'>5</span></td>
		<td><span class='lang2' >৬</span><br/><span class='keys'>6</span></td>
		<td><span class='lang2' >৭</span><br/><span class='keys'>7</span></td>
		<td><span class='lang2' >৮</span><br/><span class='keys'>8</span></td>
		<td><span class='lang2' >৯</span><br/><span class='keys'>9</span></td>
		<td><span class='lang2' >০</span><br/><span class='keys'>0</span></td>
	</tr>
	
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=13>&nbsp;</td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top>Others</td>
		<td><span class='lang2' >্</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >ত্</span><br/><span class='keys'>ld</span></td>
		<td><span class='lang2' >ং</span><br/><span class='keys'>x</span></td>
		<td><span class='lang2' >ঃ</span><br/><span class='keys'>_</span></td>
		<td><span class='lang2' >ঁ</span><br/><span class='keys'>X</span></td>
	</tr>

	
</table>



