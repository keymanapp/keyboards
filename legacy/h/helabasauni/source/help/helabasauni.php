<?php /*
  Name:             keyboard_helabasauni
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
  $pagename = 'Helabasa Sinhala Keyboard Help';
  $pagetitle = 'Helabasa Sinhala Keyboard Help';
  $style = 'lang2 {font-size:250%}';
  
  $relatedSites = array("http://www.helabasa.com" => "Sinhala Keyboards Home");
  require_once('header.php');
  ?>

  
<p style='margin:0px'>Keyboard &#169; 2008 MyPC Computer Systems and Tavultesoft</p>

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
<!-- <a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/> -->
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Authorship">Authorship</a><br/>

<h4><a target="_blank" href="chart.pdf"><img border=0 style='vertical-align:bottom' src="<?php echo cdn('img/pdficon_small.gif'); ?>" /></a> Download this documentation in <a target="_blank" href="chart.pdf">PDF format</a>.</h4>

<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically 
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard lets you type in Sinhala (Sinhalese).  It works in a similar way to the Wijesekara Sinhala typewriter, so people who are used to typing in Sinhala will find it easy to use.  It works with a normal English (QWERTY) keyboard.
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

<p>This keyboard is based on the Sinhala typewriter.  There are separate keys for consonants and vowels.  As most Sinhala characters are made up of both consonant and vowel parts, each part needs to be typed separately, and they will be combined automatically.  You should type the characters in the same order that they would be written on paper.
</p>

<p>
For example, typing <span class='keys'>c</span> will produce the vowel <span class='highlightExample lang2' style='font-size:200%'>ඉ</span>.  If this vowel is combined with a consonant, though, such as <span class='highlightExample lang2' style='font-size:200%'>කි</span>, the vowel part <span class='highlightExample lang2' style='font-size:200%'>ි</span> is typed with <span class='keys'>s</span> after the consonant has been typed.  If you press Backspace once, only the vowel part will be erased, and you can type a different vowel.
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
	
<p>On the On Screen Keyboard you can see the 40 consonants <span class='lang2' style='font-size:200%'>ක ඛ ග ඝ ඞ හ ච ඡ ජ ඣ ඤ ට ඨ ඩ ඪ ණ ඬ ත ථ ද ධ න ඳ ප ඵ බ භ ම ඹ ය ර ල ව ළ ශ ෂ ස ඦ ඟ ෆ</span>, the vowels <span class='lang2' style='font-size:200%'>අ ආ ඇ ඈ ඉ ඊ උ ඌ ඍ ඎ එ ඒ ‌ඓ ඔ ඕ ඖ    ා ැ ෑ ි ී ු ූ ෘ ෲ ෙ ේ ෛ ො ෝ ෞ ං ඃ </span>, and the <span class='lang2' style='font-size:200%'>් ෴</span> marks.  There are also numbers and punctuation marks.</p>

<p>When you type a consonant and a vowel part, the computer will automatically combine them to make one character.  If you use the arrow keys to move through the text, you only need to press an arrow key once to move past each character.  If you press Delete before (on the left of) a combined consonant and vowel, it will be erased completely, but if you press Backspace after a character, only the vowel part will be erased (even if you typed the vowel before the consonant).
</p>

<h4>Vowels</h4>
<p>When you type consonants and vowel parts, you should follow the same order that the parts are written on paper with.  Vowel parts that appear on the left of the consonant should be typed first, but all others should be typed after the consonant.  If you type any of the independent vowels, they will not be combined with consonants.</p>

<p>
All the consonants naturally include the vowel sound <span class='highlightExample lang2' style='font-size:200%'>අ</span>, so if you want to produce a consonant with no vowel, you need to add the <span class='lang2' style='font-size:200%'>්</span> mark.  You can do this by typing <span class='keys'>a</span> right after typing a consonant.  After you have typed the <span class='lang2' style='font-size:200%'>්</span> mark, you cannot type a vowel to combine with that consonant.</p>

<h4>Keystroke Examples</h4>
<p>In the following table you can see examples of how to type the different vowels with the consonant <span class='highlightExample lang2' style='font-size:200%'>ක</span>.  For a complete table of Sinhala characters and how to type them, <a href="chart.php">click here</a>.</p>
<br/>
<table>
	<col width=80 span=3 />
	<col width=150 />
	<col width=40 />
	<col width=80 span=3 />
	<col width=150 />
	<tr style='text-align:center; font-weight:normal'>
		<td>Consonant</td><td>Vowel</td><td>Combined</td><td>Keystrokes</td>
		<td></td>
		<td>Consonant</td><td>Vowel</td><td>Combined</td><td>Keystrokes</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'>ක</td><td class='lang2' style='font-size:200%'>්</td><td class='lang2' style='font-size:200%'>ක්</td><td><span class='keys'>ka</span></td>
		<td></td>
		<td class='lang2' style='font-size:200%'>ක</td><td class='lang2' style='font-size:200%'>ඍ</td><td class='lang2' style='font-size:200%'>කෘ</td><td><span class='keys'>kD</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>අ</td><td class='lang2' style='font-size:200%'>ක</td><td><span class='keys'>k</span></td>
		<td></td>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ඎ</td><td class='lang2' style='font-size:200%'>කෲ</td><td><span class='keys'>kDD</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'> </td><td class='lang2' style='font-size:200%'>ආ</td><td class='lang2' style='font-size:200%'>කා</td><td><span class='keys'>kd</span></td>
		<td></td>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>එ</td><td class='lang2' style='font-size:200%'>කෙ</td><td><span class='keys'>fk</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'> </td><td class='lang2' style='font-size:200%'>ඇ</td><td class='lang2' style='font-size:200%'>කැ</td><td><span class='keys'>fka</span></td>
		<td></td>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ඒ</td><td class='lang2' style='font-size:200%'>කේ</td><td><span class='keys'>ffk</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'> </td><td class='lang2' style='font-size:200%'>ඈ</td><td class='lang2' style='font-size:200%'>කෑ</td><td><span class='keys'>fkd</span></td>
		<td></td>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>‌ඓ</td><td class='lang2' style='font-size:200%'>කෛ</td><td><span class='keys'>fkda</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'> </td><td class='lang2' style='font-size:200%'>ඉ</td><td class='lang2' style='font-size:200%'>කි</td><td><span class='keys'>ks</span></td>
		<td></td>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ඔ</td><td class='lang2' style='font-size:200%'>කො</td><td><span class='keys'>fk[Ad];</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'> </td><td class='lang2' style='font-size:200%'>ඊ</td><td class='lang2' style='font-size:200%'>කී</td><td><span class='keys'>kS</span></td>
		<td></td>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ඕ</td><td class='lang2' style='font-size:200%'>කෝ</td><td><span class='keys'>k[Aj];</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'> </td><td class='lang2' style='font-size:200%'>උ</td><td class='lang2' style='font-size:200%'>කු</td><td><span class='keys'>kq</span></td>
		<td></td>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ඖ</td><td class='lang2' style='font-size:200%'>කෞ</td><td><span class='keys'>k[Ay];</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'> </td><td class='lang2' style='font-size:200%'>ඌ</td><td class='lang2' style='font-size:200%'>කූ</td><td><span class='keys'>kQ</span></td>
		<td></td>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'></td><td></td>
	</tr>
	
</table>

</div>

<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>
<h4> Fonts</h4>
<p class='keymanweb'>If you see squares when you type, or the Sinhala characters do not appear correctly, please read the <a href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<h4>Problem Solving</h4>
<p>If a vowel does not appear when you type it, make sure you have not typed another vowel already, or the <span class='lang2' style='font-size:200%'>්</span> mark.  Also, some of the vowel parts will not appear until you have typed a consonant.
</p>

</div>

<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>Further Resources</h2>
<div id="Related">
		<!-- A list of links to related keyboards - to the help pages or to (download) the keyboards? -->

<!-- <h3>Related Keyboard Layouts</h3>
<p>Other Keyboard Layouts for the Sinhala language:</p>
<p><a href="/go?language=tam&amp;keyboard=Keyboard_ekwbamuni">Suratha Bamuni (Bamini Typewriter)</a><br/>
-->

</div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=428&amp;FromKeyman=0">Download Helabasa Sinhala Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/sinhala.htm">Sinhala Writing System at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/sinhala_language">Sinhala Language at Wikipedia.org</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/sinhala_script">Sinhala Script at Wikipedia.org</a></p>

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
This keyboard was created by MyPC Computer Systems.  For more information about keyboards produced by these developers, see <a target="_blank" href="http://www.helabasa.com">http://www.helabasa.com</a>.  Tavultesoft gratefully acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  Their effort assists in enabling people to communicate in their own language.
</p>
<h3>Copyright and Terms of Use</h3>
<p>
The Helabasa Sinhala Keyboard for Keyman Desktop and KeymanWeb is Copyright 2008 MyPC Computer Systems and Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
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




