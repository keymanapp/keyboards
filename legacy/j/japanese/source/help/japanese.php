<?php /*
  Name:             Keyboard_japanese
  History:          8 jam 2010 - jmdurdin - Initial version
                    05 Mar 2010 - mcdurdin - Publish Japanese version
*/
  $pagename = 'Japanese Keyboard Help';
  $pagetitle = 'Japanese Keyboard Help';
  $style = <<<END
table.usage {margin:10px;}
table.usage tr td {padding-right:10px;vertical-align:top;}
table.usage tr td.demo {padding-right:10px;vertical-align:middle;}
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
<a style='margin-left:40px' href="#katakana" class="int">Entering Katakana</a><br/>
<a style='margin-left:40px' href="#many_choices" class="int">Hiragana matching many Kanji words</a><br/>
<a style='margin-left:40px' href="#glosses" class="int">English glosses</a><br/>
<a style='margin-left:40px' href="#romaji" class="int">Romanization (Romaji) conventions</a><br/>
<a style='margin-left:40px' href="#type_ahead" class="int">Typing ahead</a><br/>
<a style='margin-left:40px' href="#editing" class="int">Editing existing text</a><br/>
<a style='margin-left:40px' href="#latin" class="int">Entering Latin alphabet words</a><br/>
<a style='margin-left:40px' href="#escape" class="int">Closing the IME window</a><br/>
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
This keyboard is designed for the <a target="_blank" href="http://en.wikipedia.org/wiki/Japanese_writing_system">Japanese</a> language as used in Japan (and elsewhere).  Japanese text is entered using Latin alphabet characters (<a target="_blank" href="http://en.wikipedia.org/wiki/W%C4%81puro_r%C5%8Dmaji">W&#x0101;puro r&#x014d;maji</a>) for the corresponding Japanese letters, and are output as the equivalent <a target="_blank"  href="http://en.wikipedia.org/wiki/Hiragana">Hiragana</a> or <a target="_blank" href="http://en.wikipedia.org/wiki/Katakana">Katakana</a>.  An "input method editor" (IME) window is used to select from a  list of matching <a target="_blank" href="http://en.wikipedia.org/wiki/Kanji">Kanji</a> characters (with or without <a target="_blank" href="http://en.wikipedia.org/wiki/okurigana">okurigana</a>).
</p>

<p>The keyboard works best with a QWERTY (English) keyboard.</p>

<p>The keyboard has been developed and tested using the standard Unicode Japanese fonts distributed with Microsoft Windows, but any font that includes Unicode Japanese (Hiragana, Katakana and Kanji) characters may be used.  If square boxes are displayed instead of characters, either when using this keyboard or in the examples below, please read our <a target="_blank" href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>
</div>

<div id="Using">
<h2>Using this Keyboard</h2>


<!--
<h3>Test only!</h3>
<span class='keys'>[Ctrl n][Shift p][!PgUp][!PgDn][!Shift][!Ctrl][!Alt][!Ins][!Del][!Bksp][!Up][!Down][!Left][!Right][!Home][!End][!Tab][!Caps][!Esc][!Enter][CSA!Tab][Shift!Enter]</span>
-->

<div id="Quickstart">
<h3>Quickstart</h3>

<p>Enter a word or phrase phonetically using the English keyboard, and it will appear immediately as Hiragana, and can be converted to Kanji by selecting from the displayed list of matching words using the indicated numeral key or mouse. To leave the Hiragana unconverted, press <b>Space</b> or <b>Esc</b> instead of selecting from the dictionary list. For example, type <span class='keys'>nihongo1</span> to get <span class='highlightExample'>日本語</span>, or <span class='keys'>ogenkideska</span> then <b>Space</b> to get <span class='highlightExample'>おげんきですか</span>.</p>
<p>If the same Hiragana string matches (or partly matches) more than nine Japanese words, use <b>PageDown</b> and <b>PageUp</b> to scroll through the list. </p>
</div>

<div id="Documentation">
<h3>Keyboard Use Details</h3>

<h4 id="steps">Step by step</h4>
<p>The following step-by-step example shows what happens as each letter is typed:<br />
<table class="usage">
<tr><td class="key"><span class='keys'>n</span></td><td>The Hiragana letter <span class='highlightExample'>ん</span> for syllable-final 'n' will appear in the output window. As no words in Japanese can start with <span class='highlightExample'>ん</span>, the IME title bar will be shown, indicating that the IME is active with text pending, but no list will be displayed: </td><td width="40%"><img src="Use_n.png" width="100%" /></td></tr>

<tr><td class="key"><span class='keys'>i</span></td><td>The Hiragana will change to <span class='highlightExample'>に</span> (the syllable for 'ni'), and the KeymanWeb IME window will now display a list of  Kanji matching <span class='highlightExample'>に</span> (with a white background), and Kanji starting with <span class='highlightExample'>に</span> (with a grey background):</td><td class="demo"><img src="Use_ni.png" width="100%"/></td></tr>

<tr><td class="key"><span class='keys'>h</span></td><td>As more letters are added, they are automatically converted to Hiragana, and the list of exact and starting matches to Kanji words is updated accordingly:</td><td><img src="Use_nih.png" width="100%" /></td></tr>

<tr><td class="key"><span class='keys'>on</span></td><td>Two words are now shown exactly matching <span class='highlightExample'>にほん</span>, and more words starting with <span class='highlightExample'>にほん</span> (against a grey background):  </td><td><img src="Use_nihon.png" width="100%" /></td></tr>

<tr><td class="key"><span class='keys'>go</span></td><td>The exact match for <span class='highlightExample'>にほんご</span> is now displayed in the first box with a white background (and other words starting with <span class='highlightExample'>にほんご</span> with a grey background):</td><td><img src="Use_nihongo.png" width="100%" /></td></tr>

<tr><td class="key"><span class='keys'>1</span></td><td>Press <b>1</b> (or <b>Enter</b>) to select the first displayed Kanji and close the IME window:</td><td><img src="Use_nihongo1.png" width="100%" /></td></tr>

</table>

<p>When the IME is showing a list of suggestions, typing any digit (or selecting from the list with the mouse) will replace the pending Hiragana by the selected Kanji. Pressing <b>Enter</b> will always select the first displayed Kanji.  Pressing <b>Space</b> or <b>Esc</b> will close the IME window leaving the Hiragana or Katakana as displayed. Similarly, typing any punctuation key will insert the typed punctuation character after the currently displayed kana, then close the IME window.  But if <b>Space</b>, <b>Enter</b> or any digit or punctuation key is typed <i>before</i> any letter key (or when the IME title bar and list are not visible), it will be output directly into the document.</p>

<h4 id="katakana">Entering Katakana</h4>
<p>To enter Katakana, enter as for Hiragana, but press and release <b>Shift</b> before pressing <b>Space</b> or <b>Escape</b> to accept the entered text.</p>
<p>For example, type <span class='keys'>amerika</span> followed by <b>Shift</b> then <b>Space</b> to get <span class='highlightExample'>アメリカ</span>. </p>
<p>At any time, pressing <b>Shift</b> will toggle the pending text between Hiragana and Katakana.</p>

<h4 id="many_choices">Hiragana matching many Kanji words</h4>
<p>The IME will only display nine words at a time, but if more matches have been returned from the dictionary lookup, it will be indicated by a green arrowhead in the right-most box. Clicking that icon, or pressing <b>PageDown</b>, will show the next nine matches, etc.  Pressing <b>PageUp</b> (or clicking the green arrowhead in the left-most box) will move back to the previously displayed matches. All exactly matching Kanji words and up to twenty partly-matched words will be returned from the dictionary, with more commonly used words shown first. Pressing <b>Home</b> will always go back to the start of the list, and show the most frequently used matching words.</p>

<h4 id="glosses">English glosses</h4>
<table class="usage" style="margin:0">
<tr><td>If uncertain of the right Kanji to use, an English gloss for each dictionary word can be seen by moving the mouse cursor over the box with that word:</td><td width="40%"><img src="Show_gloss.png" width="100%" /></td></tr>
</table>

<h4 id="romaji">Romanization (W&#x0101;puro r&#x014d;maji) conventions</h4>
<p>Input follows widely-used <a target="_blank" href="http://en.wikipedia.org/wiki/W%C4%81puro_r%C5%8Dmaji">W&#x0101;puro r&#x014d;maji</a> conventions, but note the following: </p>
<ul>
<li>Long vowels are entered using kana spelling rules, thus, <span class='highlightExample'>kou</span> for <span class='highlightExample'>こう</span> and <span class='highlightExample'>kuu</span> for <span class='highlightExample'>くう</span>.</li>
<li>Small kana can be entered by prefacing them with <span class='highlightExample'>x</span>, e.g. <span class='highlightExample'>xa</span> for <span class='highlightExample'>ぁ</span>, or <span class='highlightExample'>xtu</span> for <span class='highlightExample'>っ</span>.</li>
<li>When typing, the letter <span class='highlightExample'>l</span> is generally equivalent to <span class='highlightExample'>r</span>.</li>
<li><span class='highlightExample'>じゃ</span>, <span class='highlightExample'>じゅ</span> and <span class='highlightExample'>じょ</span> may be input by typing either <span class='highlightExample'>ja</span>, <span class='highlightExample'>ju</span> and <span class='highlightExample'>jo</span>, or <span class='highlightExample'>jya</span>, <span class='highlightExample'>jyu</span> and <span class='highlightExample'>jyo</span>.</li>
<li>Either <span class='highlightExample'>-tchi</span> or <span class='highlightExample'>-cchi</span> may be used to produce <span class='highlightExample'>っち</span>.</li>
<li>To prevent a syllable-final <span class='highlightExample'>n</span> from being treated as the start of the following syllable, insert a single quote after the <span class='highlightExample'>n'</span>.  This is generally only necessary when the second syllable starts with a vowel or semi-vowel (y or w).  So typing <span class='highlightExample'>kanou</span> produces <span class='highlightExample'>かのう</span>, but typing <span class='highlightExample'>kan'ou</span> will produce <span class='highlightExample'>かんおう</span>.</li>
</ul>

<h4 id="type_ahead">Typing ahead</h4>
<p>You do not need to wait for the IME to display the list of possible Japanese words after each key-stroke.  The IME recognizes if more characters have been typed and will only display the suggestions for the complete string that has been entered.  If you know which word you will want from the final list for a typed string, you can type the selection digit and keep on typing.  In most cases, the IME will remember what has been typed and process the entire input sequence correctly.</p>
<p>If the IME for any reason does not process the string at the insertion point correctly, press <b>Escape</b> to close the IME window, re-position the cursor as required, then continue entering text normally.</p>

<h4 id="editing">Editing existing text</h4>
<p>Japanese text already entered into an input area may be edited in the normal way, using cut and paste or the <b>Backspace</b> and <b>Delete</b> keys, and moving through the document with the cursor (arrow) keys.  But once a letter is re-typed at any point, the IME will convert the input to Hiragana and try and find matching Japanese words.</p>

</div>

<h4 id="latin">Entering Latin alphabet words</h4>
<p>To enter Latin alphabet words within the Japanese text, temporarily disable the Japanese IME keyboard (using the keyboard list on the KeymanWeb icon), then re-enable it.</p>

<h4 id="escape">Closing the IME window</h4>
<p>Press <b>Space</b> or <b>Escape</b> to close the IME window and leave the entered text as Hiragana (or Katakana) as currently displayed.</p>

<div id="Troubleshooting">
<h3>Troubleshooting</h3>
<h4 id="no_IME">The IME window is not visible</h4>
<p>If the IME window does not appear when a letter key is typed, then either the site has not been configured to use KeymanWeb, or else the input area you are entering text into cannot accept Japanese text.  For example, it is not yet generally possible to use email addresses written with Japanese Kanji, so email address fields will not accept Kanji.</p>
<p>A delay of one or two seconds may be experienced in some cases before the IME window is updated.  This is normal, and the more the IME is used, the faster the average response will be, since it remembers the results for words already looked up.</p>

<h4 id="disappeared">After I started typing, the IME window disappeared...</h4>
<p>If the IME window disappears after typing some letters but before the selected Kanji has been inserted, check:
<ul>
<li>Was <b>Space</b>, <b>Escape</b> or a punctuation key pressed?  If so, the IME will assume that the entered text should remain displayed as Hiragana or Katakana.</li>
<li>Has the focus been moved to another input area? Moving the focus also causes the IME to leave the entered text as currently displayed.</li>
<li>Has the keyboard been disabled? Check the KeymanWeb toolbar - the selected language should be <b>Japanese</b>.</li>
<li>Is the input area near the bottom of the screen? If so, the IME window may be off-screen, so scroll down so that the input area is no longer near the edge of the screen.</li>
</ul>

<p>Please read the <a target="_blank" href="/troubleshooting/">KeymanWeb troubleshooting guide</a> for further information.</p>

<p>For any other questions, <a target="_blank" href="https://community.software.sil.org/c/keyman">contact us</a>.</p>

</div>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 13.0</p>

</div>

<h3>Other Internet Resources</h3>
<ul><li><a target="_blank" href="http://www.omniglot.com/writing/japanese.htm">Information about written Japanese at Omniglot.com</a></li>
<li><a target="_blank" href="http://en.wikipedia.org/wiki/Japanese_language">An introduction to Japanese language at Wikipedia.org</a></li>
<li><a target="_blank" href="http://en.wikipedia.org/wiki/Hiragana">A description of Hiragana at Wikipedia.org</a></li>
<li><a target="_blank" href="http://en.wikipedia.org/wiki/Katakana">A description of Katakana at Wikipedia.org</a></li>
<li><a target="_blank" href="http://en.wikipedia.org/wiki/Okurigana">An explanation of Okurigana (accompanying letters) at Wikipedia.org</a></li>
<li><a target="_blank" href="http://en.wikipedia.org/wiki/Kanji">An introduction to the Japanese Kanji writing system at Wikipedia.org</a></li>
<li><a target="_blank" href="http://en.wikipedia.org/wiki/Wapuro">An explanation of Wāpuro rōmaji at Wikipedia.org</a></li>
</ul>
</div>

<div id="Author">
<h2>Keyboard Authorship and Acknowledgements</h2>
<p>
This keyboard was originally created by Tavultesoft.  SIL International graciously acknowledges the use of the <a target="_blank" href="http://www.csse.monash.edu.au/~jwb/edict.html">EDICT</a> Japanese dictionary developed and made available by Dr Jim Breen, Electronic Dictionary Research Group, Clayton School of Information Technology, Monash University, Clayton, VIC 3800, Australia.
</p>
</div>

<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p>
The Japanese IME keyboard for KeymanWeb is copyright &copy; 2010-2020 SIL International and made available under the terms of the MIT license.
The Japanese dictionary used in this keyboard is copyright &copy;
<a href='http://www.csse.monash.edu.au/~jwb/edict.html' target='_blank'>Electronic Dictionary Research Group</a>.
</p>
</div>
