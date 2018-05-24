<?php /*
  Name:             Keyboard_chinese
  Copyright:        Copyright (C) 2009 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      27 Nov 2009

  Modified Date:    27 Nov 2009
  Authors:          mcdurdin, jmdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          27 Nov 2009 - jmdurdin - Initial version
*/
  $pagename = 'Pinyin Mandarin Chinese Keyboard Help';
  $pagetitle = 'Pinyin Mandarin Chinese Keyboard Help';
  $style = <<<END
table.usage {margin:10px;}  
table.usage tr td {padding-right:10px;vertical-align:top;}
table.usage tr td.key {padding-right:10px;vertical-align:top;padding-top:4px}
h4 {color: #a64826; text-decoration:underline}
a.int:link {color: #a64826;}
a.int:visited {color: #a64826;}
a.int:hover {color: #f00000}
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
<a style='margin-left:40px' href="#many_choices" class="int">Syllables with many possible Chinese characters</a><br/>
<a style='margin-left:40px' href="#accented" class="int">Accented Pinyin</a><br/>
<a style='margin-left:40px' href="#abbreviations" class="int">Abbreviations for place names</a><br/>
<a style='margin-left:40px' href="#type_ahead" class="int">Typing ahead</a><br/>
<a style='margin-left:40px' href="#editing" class="int">Editing existing text</a><br/>
<a style='margin-left:40px' href="#latin_text" class="int">Entering Latin alphabet text</a><br/>
<a style='margin-left:40px' href="#escape" class="int">Closing the IME window</a><br/>
<a style='margin-left:20px' href="#Troubleshooting" class="int">Troubleshooting</a><br/>
<a style='margin-left:40px' href="#no_IME" class="int">The IME window is not visible</a><br/>
<a style='margin-left:40px' href="#disappeared" class="int">After I started typing, the IME window disappeared...</a><br/>
<a style='margin-left:40px' href="#text_gone" class="int">My text was erased!</a><br/>
<a href="#Technical" class="int">Technical Information</a><br/>
<a href="#Resources" class="int">Further Resources</a><br/>
<a href="#Authorship" class="int">Authorship</a><br/>

<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically 
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard is designed for the <a href="http://en.wikipedia.org/wiki/Written_Chinese">Chinese</a> language, especially <a href="http://en.wikipedia.org/wiki/Simplified_Chinese">Simplified Chinese</a> as used in mainland China and elsewhere.  Input uses the standard <a href="http://en.wikipedia.org/wiki/Pinyin">pinyin</a> method of representing Chinese syllables with Latin alphabet characters, with an "input method editor" (IME) window showing a list of matching Chinese characters.
</p>

<p>The keyboard works best with a QWERTY (English) keyboard.</p>

<p>The keyboard has been developed and tested using the standard Unicode Chinese fonts distributed with Microsoft Windows, but any font that includes Unicode Chinese characters may be used.  If square boxes are displayed instead of characters, either when using this keyboard or in the examples below, please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>
</div>

<div id="Using">
<h2>Using this Keyboard</h2>

<div id="Quickstart">
<h3>Quickstart</h3>

<p>Type each pinyin syllable or word (without tone numbers) then select the wanted Chinese character from the displayed list of suggestions by typing the digit shown by that character. For example, <span class='highlightExample'>&#x62FC;&#x97F3;</span> is typed as <?php echo KeyRenderer::render('pinyin1'); ?>.</p>
<p>If more than nine Chinese characters are represented by the same pinyin string, use <b>PageDown</b> and <b>PageUp</b> to scroll through the list. </p>
</div>

<div id="Examples">
<h3>Example</h3>
<?php renderLanguageExamples(); ?>
</div>

<div id="Documentation">
<h3>Keyboard Use Details</h3>

<h4 id="steps">Step by step</h4>
<p>The following step-by-step example showing what happens as each letter is typed will help explain just how the keyboard is used.<br />
<table class="usage">
<tr><td class="key"><?php echo KeyRenderer::render('p'); ?></td><td>The KeymanWeb IME window appears, and a list of some of the most common characters starting with <b>p</b> is shown with a grey background, indicating that the character is not an exact match for the typed letter. </td><td><img src="Use_p.png" width="100%" /></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('i'); ?></td><td>The list changes and now shows those characters exactly matching <b>pi</b>, with a white background.</td><td width="40%"><img src="Use_pi.png" width="100%" /></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('n'); ?></td><td>Only Chinese characters for <b>pin</b> are now listed. </td><td><img src="Use_pin.png" width="100%" /></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('y'); ?></td><td>As there are no Chinese words written as <b>piny</b>, the list again shows words that start with <b>piny</b> (against a grey background).  </td><td><img src="Use_piny.png" width="100%" /></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('i'); ?></td><td>The IME now displays the only two Chinese words (in its dictionary) that start with <b>pinyi</b>.  </td><td><img src="Use_pinyi.png" width="100%" /></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('n'); ?></td><td>The exact match for <b>pinyin</b> is now shown with a white background, and one other word starting with <b>pinyin</b> is shown with grey background.  </td><td><img src="Use_pinyin.png" width="100%" /></td></tr>

<tr><td class="key"><?php echo KeyRenderer::render('1'); ?></td><td>Typing <b>1</b>, or clicking the first box, will immediately replace the entered pinyin string by the Chinese word for that string, and hide the IME window.</td><td><img src="Use_pinyin1.png" width="100%" /></td></tr>

</table>

<p style='margin-top:0'>The IME will usually display more frequently used characters or words before other characters or words matching the same input string.</p>

<p>When the IME is showing a list of suggestions, pressing the space-bar or typing <b>Enter</b> will also replace the typed pinyin letters by the first character or word currently shown. Typing any punctuation key will similarly cause the IME to insert the first listed character or word, followed by the typed punctuation character.  If <b>Space</b>, <b>Enter</b> or any digit or punctuation key is typed <i>before</i> the IME is showing a list of suggestions, it will be output directly into the document.</p>

<h4 id="many_choices">Syllables with many possible Chinese characters</h4>
<p>Where a green arrow is shown in the rightmost box, it indicates that there are more Chinese characters or words that match the entered string. Clicking on that box, or pressing <b>PageDown</b>, will show the next nine matching characters or words.  Exact matches are always shown first, followed by up to twenty common characters or words that start with the entered string. Typing <b>PageUp</b> (or clicking the left-arrow box) will move back through the list, nine suggestions at a time. Typing <b>Home</b> will move immediately to the start of the list (the most frequently encountered words matching the typed letters).</p>

<h4 id="accented">Accented Pinyin</h4>
<table class="usage" style="margin:0">
<tr><td>The accented pinyin for each character or word shown in the IME list can be seen by moving the mouse over that character:</td><td width="40%"><img src="Use_pinyin_B.png" width="100%" /></td></tr>
</table>

<h4 id="abbreviations">Abbreviations for place names</h4>
<table class="usage" style="margin:0">
<tr><td>The widely-used standard two-letter abbreviations for provinces and some cities and regions are also recognized by the IME:</td><td width="40%"><img src="Beijing.png" width="100%" /></td></tr>
</table>

<h4 id="type_ahead">Typing ahead</h4>
<p>You do not need to wait for the IME to display the list of possible Chinese characters after each key-stroke.  The IME recognizes if more characters have been typed and will only display the suggestions for the complete string that has been entered.  If you know which character you will want from the final list for a typed string, you can type the selection digit and keep on typing.  In most cases, the IME will remember what has been typed and process the entire input sequence correctly.</p>
<p>If the IME for any reason does not process the string at the insertion point correctly, press <b>Escape</b> to close the IME window, re-position the cursor as required, then continue entering text normally.</p>
 
<h4 id="editing">Editing existing text</h4>
<p>Chinese text already entered into an input area may be edited in the normal way, using cut and paste or the <b>Backspace</b> and <b>Delete</b> keys, and moving through the document with the cursor (arrow) keys.  But once a Latin letter is typed at any point, the IME will use any Latin characters immediately before that character to try and find matching Chinese characters or words. Do not use the IME to enter a Chinese character or word immediately following Latin text if that text must remain unchanged.</p>

<h4 id="latin_text">Entering Latin alphabet text</h4>
<p>If more than one or two letters (in Latin alphabet) are to be typed into the input area, the KeymanWeb keyboard should simply be disabled, then re-enabled (after white space or punctuation) when continuing to enter Chinese text. </p>
</div>

<h4 id="escape">Closing the IME window</h4>
<p>Type <b>Escape</b> to close the IME window and leave the typed Latin alphabet characters unchanged in the input area.</p>

<div id="Troubleshooting">
<h3>Troubleshooting</h3>
<h4 id="no_IME">The IME window is not visible</h4>
<p>If the IME window does not appear when a letter key is typed, then either the site has not been configured to use KeymanWeb, or else the input area you are entering text into cannot accept Chinese text.  For example, it is not yet generally possible to use email addresses written with Chinese characters, so email address fields will not accept Chinese.</p>

<h4 id="disappeared">After I started typing, the IME window disappeared...</h4>
<p>If the IME window disappears after typing some letters but before the Chinese characters have been inserted, check:
<ul><li>Has the focus been moved to another input area? If so, click back at the correct insertion point and the IME should re-appear.</li>
<li>Has the keyboard been disabled? Check the KeymanWeb toolbar - the selected language should be <b>Chinese, Mandarin</b>.</li>
<li>Is the input area near the bottom of the screen? If so, the IME window may be off-screen, so scroll down so that the input area is no longer near the edge of the screen.</li>
</ul>

<h4 id="text_gone">My text was erased!</h4>
<p>If the mouse is used to position the insertion point anywhere in a string of Latin characters, as soon as another character is typed, the IME will try and process the entire string (up to and including the typed character) as a pinyin string.  If it does not match any recognized pinyin word, the string may be deleted, as normally happens when entering text and an unrecognized sequence is typed.  The solution to this is to always insert a white-space or punctuation character before using the IME to enter text into existing (Latin-alphabet) text.</p>

<p>Please read the <a target="_blank" href="/troubleshooting/">KeymanWeb troubleshooting guide</a> for further information.</p> 

<p>For any other questions, <a target="_blank" href="http://www.tavultesoft.com/contact.php">contact us</a>.</p>

</div>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.1</p>

</div>

<div id="Resources">
<h2>Further Resources</h2>
<p>Keyman Desktop can be supplied with a Simplified Chinese IME keyboard, allowing use with a large number of Windows applications, not just web pages. Download a trial version of 
<a href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=355">Keyman Desktop - Simplified Chinese</a> and evaluate it freely for 30 days.</p>
<div>
<h3>Other Internet Resources</h3>
<ul><li><a target="_blank" href="http://www.omniglot.com/writing/chinese.htm">Information about written and spoken Chinese at Omniglot.com</a></li>
<li><a target="_blank" href="http://www.omniglot.com/writing/mandarin.htm">Information about Mandarin Chinese at Omniglot.com</a></li>
<li><a target="_blank" href="http://en.wikipedia.org/wiki/Written_Chinese">An introduction to written Chinese at Wikipedia.org</a></li>
<li><a target="_blank" href="http://en.wikipedia.org/wiki/Pinyin">A description of Pinyin romanization of Chinese language at Wikipedia.org</a></li></ul>
</div>
</div>

<div id="Author">
<h2>Keyboard Authorship</h2>
<p>
This keyboard was created by Tavultesoft.  Tavultesoft graciously acknowledges the use of some Chinese character tables and information provided by Dr. Peter Hauer of <b>Linguasoft</b>.
</p>
</div>

<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p>
The Pinyin Mandarin Chinese IME keyboard for KeymanWeb is Copyright 2009 Tavultesoft Pty Ltd.  It must not be modified or adapted in any way without written permission from Tavultesoft.
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


