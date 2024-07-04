<?php /*
  Name:             keyboard_galaxiegreekkm6
  Copyright:        Keyboard ©2008 Hampton Keathley
  Documentation:    
  Description:      
  Create Date:      24 Nov 2009

  Modified Date:    24 Nov 2009
  Authors:          pbaehr
  Related Files:    chart.php
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          24 Nov 2009 - pbaehr - Wrote KMW help
*/
  $pagename = 'Galaxie BibleScript Phonetic (deprecated) Keyboard Help';
  $pagetitle = 'Galaxie BibleScript Phonetic (deprecated) Keyboard Help';
  $style = <<<END
.lang2 {font-family:"Palatino Linotype", Tahoma; font-weight: bold; font-size: 1.2em; color: #0000ff}
h4 {font-size:11pt;}
table.grid { border-collapse: collapse; }
table.grid tr td, table.grid tr th { border: solid 1px #cccccc; }
END;

  require_once('header.php');


?>

<p style='margin:0px'>Keyboard &#169; 2008 Galaxie Software</p>

<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
<a style='margin-left:30px' target="_blank" href='chart.php'>Complete Typing Chart</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Author">Authorship</a><br/>

<div id='Overview'>
<h2>Overview</h2>

<p>This keyboard layout is designed for Koine Greek, a trade language of the ancient Mediterranean and the language of the New Testament and Septuagint Scriptures. It is a mnemonic keyboard layout. This means that the arrangement of the letters in the layout depends on the order of the keys on your actual keyboard.</p>

<p>This keyboard layout works best with a QWERTY (English) keyboard. It mimics the QWERTY (English) layout, not the modern Greek layout. It uses standard Unicode fonts.</p>

<p><a href="#Related">Click here</a> to see other keyboards for Greek.</p>

</div>
<div id='Using'>
<h2>Using this Keyboard</h2>

<h3>Keyboard Layout</h3>
<div id='osk'>
</div>

<div id='Quickstart'>
<h3>Quickstart</h3>
<p>This keyboard layout works intuitively with the QWERTY (English) keyboard. You can find most of the Greek letters by thinking of similar letters in English, by sound or appearance. For example, type <span class='keys'>w"[[me/ga</span> to get <span class='lang2'>ὧμέγα</span>.</p>

<p>As you can see, accents and breathing marks are typed after the vowel. They can be typed in any order. For example, <span class='lang2'>ΰ</span> is typed <span class='keys'>u/+</span> or <span class='keys'>u+/</span>.</p>

<p>When you type an accent by itself (or after a non-accentable letter), you will also get that accent. For example, typing <span class='keys'>/</span> by itself will give you <span class='lang2'>´</span> <b>not</b> <span class='lang2'>/</span>. To get the standard keystroke instead of the accent, type <span class='keys'>`</span> before the character (<span class='keys'>`</span> shares a key with <span class='keys'>~</span>). For example, to get <span class='lang2'>?</span> instead of <span class='lang2'>¨</span>, type <span class='keys'>`?</span>.</p>

</div>

<div id="Examples">
<h3>Examples</h3>
<?php renderLanguageExamples(); ?>
</div>

<div id="Documentation">
<h3>Keyboard Details</h3>
<h4>Letters</h4>	
<p>The Galaxie Greek keyboard uses an intuitive system where most of the Greek letters are matched to similar English letters, either by sound or appearance.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>w</span> produces <span class='lang2'>ω</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>u</span> produces <span class='lang2'>υ</span>.</p>

<p>A few letters in Greek have no exact match in English, by sound or appearance. These have been assigned the remaining keys.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>q</span> produces <span class='lang2'>θ</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>y</span> produces <span class='lang2'>ψ</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>c</span> produces <span class='lang2'>ξ</span>.</p>

<p>When followed by a space, sigma (<span class='lang2'>σ</span>) becomes final sigma (<span class='lang2'>ς</span>) automatically.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>sos</span> produces <span class='lang2'>σος</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>susswmos</span> produces <span class='lang2'>συσσωμος</span>.</p>

<p>Final sigma can also be typed with the apostrophe key. This method is necessary when sigma is not followed by a space.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>so':</span> produces <span class='lang2'>σος·</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>susswmo'.</span> produces <span class='lang2'>συσσωμος.</span>.</p>

<p>Capital letters are typed using shift as in English.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>[Sd]</span> produces <span class='lang2'>Δ</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>[Sw]</span> produces <span class='lang2'>Ω</span>.</p>

<h4>Accents and Other Diacritics</h4>
<p>The Galaxie Greek keyboard includes the following accents and other diacritics. </p>

<table class='grid' style='margin-left:40px'>
	<col width=150 span=4 />

	<tr style='text-align:center; font-weight:bold'>
		<td>Character</td><td>Keystroke</td><td>English Name</td><td>Greek Name</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:24pt'>῾</td><td><span class='keys'>[[</span><b>or&nbsp;</b><span class='keys'>J</span></td><td>rough breathing</td><td>dasia</td>
	</tr>	
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:24pt'>᾿</td><td><span class='keys'>]</span><b>or&nbsp;</b><span class='keys'>j</span></td><td>smooth breathing</td><td>psili</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:24pt'>ι</td><td><span class='keys'>|</span></td><td>iota subscript</td><td>ypogegrammeni/ <br/> prosgegrammeni</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:24pt'>¨</td><td><span class='keys'>+</span><b>or&nbsp;</b><span class='keys'>?</span></td><td>diaeresis</td><td>dialytika</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:24pt'>`</td><td><span class='keys'>\</span><b>or&nbsp;</b><span class='keys'>V</span></td><td>grave accent</td><td>varia</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:24pt'>´</td><td><span class='keys'>/</span><b>or&nbsp;</b><span class='keys'>v</span></td><td>acute accent</td><td>oxia</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:24pt'>῀</td><td><span class='keys'>~</span><b>or&nbsp;</b><span class='keys'>"</span></td><td>circumflex accent</td><td>perispomeni</td>
	</tr>
</table>

<p>Diacritics are typed after the vowel. They can be typed in any order.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>u/+</span> or <span class='keys'>u+/</span> produces <span class='lang2'>ΰ</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>a"]|</span> or <span class='keys'>a"|]</span> or <span class='keys'>a]|"</span> or <span class='keys'>a]"|</span> or <span class='keys'>a|"]</span> or <span class='keys'>a|]"</span> produces <span class='lang2'>ᾆ</span>.</p>

<p>The only exception to this rule is the circumflex on capital Greek letters. It cannot be typed first because a capital Greek letter cannot take a circumflex without a breathing mark.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>WJ~</span> produces <span class='lang2'>Ὧ</span>. Typing circumflex first will not produce <span class='lang2'>Ὧ</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>A]|"</span> or <span class='keys'>A]"|</span> or <span class='keys'>A|]"</span> produces <span class='lang2'>ᾎ</span>. Typing circumflex before the breathing mark will not produce <span class='lang2'>ᾎ</span>.</p>

<p>Rho (<span class='lang2'>ρ</span>) can also take the rough and smooth breathing mark, though capital rho can only take a rough breathing mark.</p> 
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>r]</span> produces <span class='lang2'>ῤ</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>R[[</span> produces <span class='lang2'>Ῥ</span>.</p>

<p>If you type a diacritic by itself or after any letter which cannot take that diacritic, you will get the diacritic by itself.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'> /</span> produces <span class='lang2'>´</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>g?d</span> produces <span class='lang2'>γ¨δ</span>.</p>

<p>To get the standard keystroke for a key instead of the diacritic, type <span class='keys'>`</span> first (<span class='keys'>`</span> shares a key with <span class='keys'>~</span>).</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>`?</span> produces <span class='lang2'>?</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>`"</span> produces <span class='lang2'>"</span>.</p>

<h4>Punctuation</h4>
<p>Most punctuation on the Galaxie Greek keyboard is typed exactly as on the QWERTY (English) keyboard, though sometimes you will need to use the 'standard keystroke' rule above to get the punctuation you need.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>.</span> produces <span class='lang2'>.</span>.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>;</span> produces <span class='lang2'>;</span>.</p>

<p>The Greek semicolon or <i>ano teleia</i> is the only exception.</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>:</span> produces <span class='lang2'>·</span>.</p>

<p>
See the <a target="_blank" href='chart.php'>Complete Typing Chart</a> 
for full details on how to type all the Galaxie Greek keyboard's letters, diacritics, and punctuation.
</p>
</div>
</div>
<div id="Troubleshooting">
<h2>Troubleshooting</h2>
<p class='keymanweb'>If the characters you type or those on the On Screen Keyboard do not appear to display correctly, please read the <a target="_blank" href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<p>For any other questions, <a target="_blank" href="https://help.keyman.com">contact us</a>.</p>

</div>
<div id="Resources">
<h2>Further Resources</h2>

<div id="Related">
<h3>Related Keyboard Layouts</h3>
<p>Other Classical and Polytonic Greek keyboard layouts:</p>
<p><a href="http://www.tavultesoft.com/greek/" target="_blank">Greek Keyboards Home</a></p>

<p>Non-classical and Monotonic Greek keyboard layouts:</p>
<p><a href="https://keyman.com/keyboards/kbdhe">Greek Basic</a><br/>
<a href="https://keyman.com/keyboards/kbdhe220">Greek (220) Basic</a><br/>
<a href="https://keyman.com/keyboards/kbdhe319">Greek (319) Basic</a></p>

</div>
<div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="https://keyman.com/keyboards/galaxiegreekandhebrew">Download the Galaxie BibleScript Greek Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/greek.htm">More on the Greek Writing System at Omniglot.com</a><br/>
<a target="_blank" href="https://en.wikipedia.org/wiki/Greek_alphabet">More on the Greek Writing System at Wikipedia.org</a></p>
<p><a target="_blank" href="https://en.wikipedia.org/wiki/Greek_language">More on Koine Greek at Wikipedia.org</a></p>
</div>
</div>
<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.1</p>

</div>

<div id="Author">
<h3>Keyboard Authorship</h3>
<p>
This keyboard was created by Hampton Keathley of Galaxie Software.  Tavultesoft graciously acknowledges the contribution made by the author in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb. His effort has assisted greatly in enabling people to communicate in Koine Greek.
</p>
</div>
<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p>
The Galaxie BibleScript Greek keyboard layout for Keyman Desktop and KeymanWeb is Copyright 2008 Galaxie Greek and Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
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


