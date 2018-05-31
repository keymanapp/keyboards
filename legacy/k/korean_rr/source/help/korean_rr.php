<?php /*
  Name:             Keyboard_korean_rr
  Copyright:        Copyright (C) 2010 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      09 Apr 2010

  Modified Date:    09 Apr 2010
  Authors:          jmdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          09 Apr 2010 - jmdurdin - Initial version                    
*/
  $pagename = 'Korean RR Keyboard Help';
  $pagetitle = 'Korean RR Keyboard Help';
  $style = <<<END
table.usage {margin:10px;}  
table.usage tr td {padding-right:10px;vertical-align:top;}
table.usage tr td.demo {padding-right:10px;vertical-align:middle;}
table.usage tr td.key {padding-right:10px;vertical-align:top;padding-top:4px}
h4 {color: #a64826; text-decoration:underline}
a.int:link {color: #a64826;}
a.int:visited {color: #a64826;}
a.int:hover {color: #f00000}
td.output {border: 1px dotted gray; }
table.rrconv {margin: 10px; border: 3px double gray; border-collapse:collapse}
table.rrconv tr.kk td {color: #0000ff; text-align: center; width: 3em; border: 1px dotted gray; padding: 2px 0; border-top: 1px solid gray;}
table.rrconv tr.ee td {color: #000000; text-align: center; width: 3em; border: 1px dotted gray; padding: 2px 0; border-bottom: 1px solid gray; }
END;
  
  require_once('header.php');

?>
<br/>
<a href="#Overview" class="int">Overview</a><br/>
<a href="#Using" class="int">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#Quickstart" class="int">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples" class="int">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation" class="int">Keyboard Use Details</a><br/>
<a style='margin-left:40px' href="#steps" class="int">Step by step</a><br/>
<a style='margin-left:40px' href="#hanja" class="int">Entering Hanja characters</a><br/>
<a style='margin-left:40px' href="#hangul2" class="int">Hanja matching more than one Hangeul syllable</a><br/>
<a style='margin-left:40px' href="#rr" class="int">Revised Romanization conventions</a><br/>
<a style='margin-left:20px' href="#Troubleshooting" class="int">Troubleshooting</a><br/>
<a style='margin-left:40px' href="#no_IME" class="int">The IME window is not visible</a><br/>
<a style='margin-left:40px' href="#disappeared" class="int">After I started typing, the IME window disappeared...</a><br/>
<a href="#Technical" class="int">Technical Information</a><br/>
<a href="#Resources" class="int">Further Resources</a><br/>
<a href="#Authorship" class="int">Authorship and Acknowledgements</a><br/>

<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically 
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard is designed for entering the <a target="_blank" href="https://en.wikipedia.org/wiki/Korean">Korean</a> language, supporting both the 
<a target="_blank" href="https://en.wikipedia.org/wiki/Korean_language#Writing_system">Hangeul</a> alphabet and 
<a target="_blank" href="https://en.wikipedia.org/wiki/Hanja">Hanja</a> ideographic characters, as used in Republic of Korea.  
Korean text is entered using Latin alphabet characters, closely following the Korean standard Revised Romanization conventions and displayed as <a target="_blank" href="https://en.wikipedia.org/wiki/Hangul_consonant_and_vowel_tables">jamo</a> character components, which are 
combined to form <a target="_blank" href="https://en.wikipedia.org/wiki/Hangul">hangeul</a> characters by pressing the space bar, or <a target="_blank" href="https://en.wikipedia.org/wiki/Hanja">hanja</a> ideographs by selecting from an IME (Input Method Editor) list.   
</p>

<p>The keyboard is especially developed for use by those unfamiliar with the standard Korean keyboard layout, and works best with a QWERTY (English) system keyboard.</p>

<p>The keyboard has been developed and tested using the standard Unicode Korean fonts distributed with Microsoft Windows, but any font that includes Unicode Korean (<b>hangeul</b> and <b>hanja</b>) characters may be used.  If square boxes are displayed instead of characters, either when using this keyboard or in the examples below, please read our <a target="_blank" href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>
</div>

<div id="Using">
<h2>Using this Keyboard</h2>

<div id="Quickstart">
<h3>Quickstart</h3>

<p>Enter a word or phrase phonetically (as it would be written if romanized) using the English keyboard, and it will appear immediately as Korean <b>jamo</b>.  After each syllable, press <b>Space</b> to combine the separate <b>jamo</b> into a single <b>hangeul</b> character. For example, type <?php echo KeyRenderer::render('han guk '); ?> to get <span class='highlightExample'>한국</span>.</p>
<p>If any punctuation character is pressed before the entered <b>jamo</b> character components are combined, the <b>jamo</b> components will be combined into the appropriate <b>hangeul</b> character before the new character is output.  Capitalizing the first letter of each <b>hangeul</b> syllable may also be used to compose the preceding syllable instead of separating syllables by pressing <b>Space</b>.   
</p>
</div>

<!--
<div id="Examples">
<h3>Example</h3>
<?php renderLanguageExamples(); ?>
</div>
-->
<div id="Documentation">
<h3>Keyboard Use Details</h3>

<h4 id="steps">Step by step</h4>
<p>The following step-by-step example for entering hangeul shows what happens as each letter is typed:<br />
<table class="usage">
<tr><td class="key" width="10%"><?php echo KeyRenderer::render('h'); ?></td><td>The <b>jamo</b> for 'h' will appear in the output window:</td>
<td class="output" width="20%"><span class='highlightExample'>ㅎ</span></td></tr>
<tr><td class="key"><?php echo KeyRenderer::render('a'); ?></td><td>The two <b>jamo</b> for 'ha' will now be displayed. Some browsers will combine them so that they appear as a single character, but the separate <b>jamo</b> will not yet be combined in the document.</td>
<td class="output"><span class='highlightExample'>ㅎㅏ</span></td></tr>
<tr><td class="key"><?php echo KeyRenderer::render('n'); ?></td><td>The <b>jamo</b> for 'han' will now be displayed, either separately or visually combined, but not yet combined in the document:</td>
<td class="output"><span class='highlightExample'>ㅎㅏㄴ</span></td></tr>
<tr><td class="key"><?php echo KeyRenderer::render(' '); ?></td><td>Press the space bar to combine the <b>jamo</b> as a single <b>hangeul</b> character.</td><td class="output"><span class='highlightExample'>한</span></td></tr>
<tr><td class="key"><?php echo KeyRenderer::render('g'); ?></td><td>The <b>jamo</b> for 'g' will be added to the output:</td>
<td class="output" width="20%"><span class='highlightExample'>한ㄱ</span></td></tr>
<tr><td class="key"><?php echo KeyRenderer::render('u'); ?></td><td>The <b>jamo</b> for 'gu' will be seen (separately or combined):</td>
<td class="output"><span class='highlightExample'>한ㄱㅜ</span></td></tr>
<tr><td class="key"><?php echo KeyRenderer::render('k'); ?></td><td>The three <b>jamo</b> for 'guk' will be shown, still not yet combined in the document:</td>
<td class="output"><span class='highlightExample'>한ㄱㅜㄱ</span></td></tr>
<tr><td class="key"><?php echo KeyRenderer::render(' '); ?></td><td>Press the space bar to combine the <b>jamo</b> as a single <b>hangeul</b> character.</td><td class="output"><span class='highlightExample'>한국</span></td></tr>
</table>

<p>Pressing any punctuation key, or <b>Enter</b>, will compose any pending <b>jamo</b> before the punctuation or new line is inserted. Pressing a digit will select from the <b>hanja</b> displayed in the IME list (see below).  Letter keys will be accepted if they can be combined with the uncomposed jamo, or blocked if not.  So, for example, after an 's' has been entered showing the <b>jamo</b> <span class='highlightExample'>ㅅ</span>, entering a second 's' will convert the <b>jamo</b> to <span class='highlightExample'>ㅆ</span> (for 'ss'), but other consonants would be blocked since the two letters would not represent a valid <b>jamo</b>.  In the same way, you may only enter those combinations of Latin script vowels (with 'y' and 'w') that are recognized by the Revised Romanization of Korean standard. To ensure that the <b>jamo</b> are composed into the correct <b>hangeul</b> character, it is important to press the space bar or a punctuation key before entering more Korean text. 
</p>

<h4 id="hanja">Entering Hanja characters</h4>
<p>To include <b>Hanja</b> ideographs in the text, make sure that the on-screen keyboard is visible, and when the entered <b>jamo</b> result in a list of possible matching <b>hanja</b> characters, scroll through the list <b>PageDown</b> and <b>PageUp</b> keys and select the appropriate character using the indicated numeral key instead of pressing the space bar to combine the <b>jamo</b>. 
The mouse may also be used to scroll through the list and select a <b>hanja</b> character. <b>Hanja</b> characters are often used in Korean to distinguish between homophones, so for example, <?php echo KeyRenderer::render('su do '); ?>displays the <b>hangeul</b> <span class='highlightExample'>수도</span>. 
However, typing <?php echo KeyRenderer::render('su[!PgDn]9do8'); ?> replaces the <b>hangeul</b> by <span class='highlightExample'>水搯</span> (<i>rice</i>), while typing <?php echo KeyRenderer::render('su[!PgDn][!PgDn][!PgDn]8do[!PgDn][!PgDn][!PgDn][!PgDn]9'); ?>, inserts <span class='highlightExample'>囚徒</span> (<i>prisoner</i>).</p>

<table class="usage">
<tr><td class="key"><?php echo KeyRenderer::render('s'); ?></td><td>The <b>jamo</b> for 's' will appear in the output window:</td>
<td class="output" width="50%"><span class='highlightExample'>ㅅ</span></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('u'); ?></td><td>The <b>jamo</b> for 'u' will be added, and the IME list window will now appear, showing the first nine Hanja for the <b>hangeul</b> syllable <span class='highlightExample'>수</span>.</td>
<td class="output"><span class='highlightExample'>ㅅㅜ</span><img src="IME1.png" width="100%" /></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('[!PgDn]'); ?></td><td>Press <b>PageDown</b> to scroll through the list. Moving the mouse over each cell highlights the ideograph in that cell. The <b>hangeul</b> matching the highlighted <b>hanja</b> is also shown in a 'tool-tip' beneath that cell.</td><td class="output"><span class='highlightExample'>수</span><img src="IME2.png" width="100%" /></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('9'); ?></td><td>Click the selected cell, or press '9' to select the required Hanja and close the IME list window: </td>
<td class="output"><span class='highlightExample'>水</span></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('d'); ?></td><td>The <b>jamo</b> for 'd' will appear:</td>
<td class="output"><span class='highlightExample'>水ㄷ</span></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('o'); ?></td><td>The <b>jamo</b> for 'o' will be added, and the IME window will show <b>hanja</b> characters for 'do':</td>
<td class="output"><span class='highlightExample'>水ㄷㅗ</span><img src="IME3.png" width="100%" /></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('8'); ?></td><td>Press '8' to select the <b>hanja</b> to complete the word for 'rice', and close the IME list:</td>
<td class="output"><span class='highlightExample'>水稻</span></td></tr>

</table>
<p>Sometimes a <b>hangeul</b> syllable may match many <b>hanja</b> characters, so it will be necessary to press the <?php echo KeyRenderer::render('[!PgDn]'); ?> key several times to scroll through the list and select the wanted <b>hanja</b>.</p>
  
<h4 id="hangul2">Hanja matching more than one Hangeul syllable</h4>
<p>Some <b>hanja</b> characters will replace two or more <b>hangeul</b> syllables, not just a single syllable.  When selected, the matching <b>hangeul</b> syllables will all be replaced. So, for example:</p>
<table class="usage">
<tr><td>Type <?php echo KeyRenderer::render('gang hang'); ?> to get:</td>
<td width="50%" class="output"><span class="highlightExample">강ㅎㅏㅇ</span><img src="IME4.png" width="100%" /></td></tr>
<tr><td>And press '1' (or click the first cell with the mouse) to replace <span class="highlightExample">강항</span> with the selected <b>hanja</b>:</td>
<td class="output"><span class="highlightExample">降</span></td</tr>
</table>
<p><b>Hanja</b> matching more than one <b>hangeul</b> will always be shown before other matching <b>hangeul</b> in the IME list.</p>

<h3 id="rr">Revised Romanization conventions</h3>
<p>Input conventions are summarized in the following tables:</p>

<h4>Consonant letters</h4>
<table class="rrconv">
  <tr class="kk">
    <td>ㄱ</td>
    <td>ㄲ</td>
    <td>ㅋ</td>
    <td>ㄷ</td>
    <td>ㄸ</td>
    <td>ㅌ</td>
    <td>ㅂ</td>
    <td>ㅃ</td>
    <td>ㅍ</td>
    <td> </td>
  </tr>
  <tr class="ee">
    <td>g, k</td>
    <td>kk</td>
    <td>k</td>
    <td>d, t</td>
    <td>tt</td>
    <td>t</td>
    <td>b, p</td>
    <td>pp</td>
    <td>p</td>
  </tr>
  <tr class="kk">
    <td>ㅈ</td>
    <td>ㅉ</td>
    <td>ㅊ</td>
    <td>ㅅ</td>
    <td>ㅆ</td>
    <td>ㅎ</td>
    <td>ㄴ</td>
    <td>ㅁ</td>
    <td>ㅇ</td>
    <td>ㄹ</td>
  </tr>
  <tr class="ee">
    <td>j</td>
    <td>jj</td>
    <td>ch</td>
    <td>s</td>
    <td>ss</td>
    <td>h</td>
    <td>n</td>
    <td>m</td>
    <td>ng</td>
    <td>r,l</td>
  </tr>
</table>


<h4>Vowel letters</h4>
<table class="rrconv">
  <tr class="kk">
    <td>ㅏ</td>
    <td>ㅓ</td>
    <td>ㅗ</td>
    <td>ㅜ</td>
    <td>ㅡ</td>
    <td>ㅣ</td>
    <td>ㅐ</td>
  </tr>
  <tr class="ee">
    <td>a</td>
    <td>eo</td>
    <td>o</td>
    <td>u</td>
    <td>eu</td>
    <td>i</td>
    <td>ae</td>
  </tr>
  <tr class="kk">
    <td>ㅔ</td>
    <td>ㅚ</td>
    <td>ㅟ</td>
    <td>ㅑ</td>
    <td>ㅕ</td>
    <td>ㅛ</td>
    <td>ㅠ</td>
  </tr>
  <tr class="ee">
    <td>e</td>
    <td>oe</td>
    <td>wi</td>
    <td>ya</td>
    <td>yeo</td>
    <td>yo</td>
    <td>yu</td>
  </tr>
  <tr class="kk">
    <td>ㅒ</td>
    <td>ㅖ</td>
    <td>ㅘ</td>
    <td>ㅙ</td>
    <td>ㅝ</td>
    <td>ㅞ</td>
    <td>ㅢ</td>
  </tr>
  <tr class="ee">
    <td>yae</td>
    <td>ye</td>
    <td>wa</td>
    <td>wae</td>
    <td>wo</td>
    <td>we</td>
    <td>ui</td>
  </tr>
</table>


<p>
For the <b>jamo</b> <span class="highlightExample">ㄱ ㄷ ㅂ ㄹ</span>, the <a target="_blank" href="https://en.wikipedia.org/wiki/Revised_Romanization_of_Korean">Revised Romanization</a> conventions specify a different letter to be used when the <b>jamo</b> occurs initially (as <i>choseong</i>) from that used when it occurs at the end of a syllable (as <i>jongseong</i>).  In that case, the two letters used are shown separated by a comma, so <b>g,k</b> for <span class="highlightExample">ㄱ</span>.
</p>
<p>
While the revised romanization standard for Korean always represents <span class="highlightExample">ㄹ</span> as 'r' syllable-initially and usually as 'l' syllable-finally, either may be used in either position for the purpose of entering Korean text.
</p>

<h4>Final consonant combinations (double <i>jongseong</i> consonants)</h4>

<p>The following final consonant (<i>jongseong</i>) combinations can also be entered:</p>
<table class="rrconv">
  <tr class="kk">
    <td>ㄵ</td>
    <td>ㄶ</td>
    <td>ㄺ</td>
    <td>ㄻ</td>
    <td>ㄼ</td>
    <td>ㄽ</td>
    <td>ㄾ</td>
    <td>ㄿ</td>
    <td>ㅀ</td>
    <td>ㅄ</td>
    <td>ㅋ</td>
    <td>ㅌ</td>
    <td>ㅍ</td>
  </tr>
  <tr class="ee">
    <td>nj,nch</td>
    <td>nh</td>
    <td>rk</td>
    <td>rm</td>
    <td>rb</td>
    <td>rs</td>
    <td>rt</td>
    <td>rp</td>
    <td>rh</td>
    <td>ps</td>
    <td>kh</td>
    <td>th</td>
    <td>ph</td>
  </tr>
</table>

<h4>Alternate input conventions</h4>
<p>Some alternate vowel input conventions commonly used in older romanization conventions are also supported, and are shown here above the corresponding standard input convention:</p>

<table class="rrconv">
  <tr class="kk">
    <td>ㅐ</td>
    <td>ㅒ</td>
    <td>ㅙ</td>
    <td>ㅜ</td>
    <td>ㅜ</td>
    <td>ㅜ</td>
    <td>ㅢ</td>
  </tr>
  <tr class="ee">
    <td>ai</td>
    <td>yai</td>
    <td>wai</td>
    <td>oo</td>
    <td>wu</td>
    <td>woo</td>
    <td>eui</td>
  </tr>
  <tr class="ee">
    <td>ae</td>
    <td>yae</td>
    <td>wae</td>
    <td>u</td>
    <td>u</td>
    <td>u</td>
    <td>ui</td>
  </tr>
  </table>
 
<div id="Troubleshooting">
<h3>Troubleshooting</h3>
<h4 id="no_IME">The IME window is not visible</h4>
<p>If the IME window does not appear when a letter key is typed, then either the site has not been configured to use KeymanWeb, or else the input area you are entering text into cannot accept Korean <b>hanja</b>.  For example, it is not yet generally possible to include <b>hanja</b> in email addresses.</p>

<h4 id="disappeared">After I started typing, the IME window disappeared...</h4>
<p>If the IME window disappears after typing some letters but before the selected <b>hanja</b> has been inserted, check:
<ul>
<li>Was the space bar or a punctuation key pressed?  If so, the <b>jamo</b> will have been composed as <b>hangeul</b>, so no IME window will be visible.</li>  
<li>Has the focus been moved to another input area? Moving the focus also causes the IME to leave the entered text as currently displayed.</li>
<li>Has the keyboard been disabled? Check the KeymanWeb toolbar - the selected language should be <b>Korean</b>.</li>
<li>Is the input area near the bottom of the screen? If so, the IME window may be off-screen, so scroll down so that the input area is no longer near the edge of the screen.</li>
</ul>

<p>Please read the <a target="_blank" href="/troubleshooting/">KeymanWeb troubleshooting guide</a> for further information.</p> 

<p>For any other questions, <a target="_blank" href="https://keyman.com/contact/">contact us</a>.</p>

</div>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.1</p>

</div>
<!-- **get keyboard uploaded and correct ID before including this!**
<div id="Resources">
<h2>Further Resources</h2>
<p>Keyman Desktop can be supplied with a Korean IME keyboard, allowing use with a large number of Windows applications, not just web pages. Download a trial version of 
<a href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=xxx">Keyman Desktop - Korean</a> and evaluate it freely for 30 days.</p>
<div>
-->
<h3>Other Internet Resources</h3>
<ul><li><a target="_blank" href="http://www.omniglot.com/writing/korean.htm">Information about Korean language at Omniglot.com</a></li>
<!-- <li><a target="_blank" href="http://www.mct.go.kr/english/roman/roman.jsp">Korean Ministry of Culture description of Romanization conventions</a></li> -->
<li><a target="_blank" href="https://en.wikipedia.org/wiki/Korean_language">Korean language at Wikipedia.org</a></li>
<li><a target="_blank" href="https://en.wikipedia.org/wiki/Revised_Romanization_of_Korean">Revised Romanization of Korean at Wikipedia.org</a></li>
<li><a target="_blank" href="https://en.wikipedia.org/wiki/Korean_language_and_computers">Korean language and computers</a></li>
<li><a target="_blank" href="https://en.wikipedia.org/wiki/Hangul">Korean writing system: Hangul at Wikipedia.org</a></li>
<li><a target="_blank" href="https://en.wikipedia.org/wiki/Hanja">Korean writing system: Hanja at Wikipedia.org</a></li>
<li><a target="_blank" href="https://en.wikipedia.org/wiki/Hangul_consonant_and_vowel_tables">Korean writing system: Jamo at Wikipedia.org</a></li>
</ul>
</div>

<div id="Author">
<h2>Keyboard Authorship and Acknowledgements</h2>
<p>
This keyboard was created by Tavultesoft.
</p>
</div>

<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p>
The Korean IME keyboard for KeymanWeb is copyright &copy; 2010 Tavultesoft Pty Ltd.  It must not be modified or adapted in any way without written permission from Tavultesoft.
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
</div>
