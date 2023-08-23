<?php /*
  Name:             Keyboard_gff_harari
  Copyright:        Keyboard ©2023 The Geʾez Frontier Foundation 
  Documentation:    
  Description:      
  Create Date:      13 June 2023

*/
  $pagename = 'GFF ሐረሪ (Harari) Keyboard Help';
  $pagetitle = 'GFF ሐረሪ (Harari) Keyboard Help';
  $keymanpromourl = 'http://ethiopic.keymankeyboards.com';
  $style = <<<EXTRA
  .highlightExample {font-family: GeezWeb !important; font-weight: bold; font-size: 1.4em; color: #0000ff}
  .highlightKeys img {vertical-align:baseline !important}
  .input {font-weight: bold; font-size: 1.2em; color: #a64826}
  .output {font-weight: bold; font-size: 1.2em; color: #0000ff}
  .typing p, ul {margin-top: 0px; margin-bottom: 2px}
EXTRA;
  require_once('header.php');
?>
<style type="text/css" media="screen">
code {
    padding: 0.2em 0.4em;
    margin: 0;
    font-size: 85%;
    background-color: rgba(175, 184, 193, 0.2);
    border-radius: 6px;
    box-sizing: border-box;
}
</style>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport"/>
	<link rel="stylesheet" href="kb.css"/>
</head>

<p style='margin:0px'>Keyboard © 2023. Geʾez Frontier Foundation.</p>

<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
<a style='margin-left:30px' target="_blank" href='HarariTyping-English.pdf'>Complete Typing Chart - English</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Author">Authorship</a><br/>


<div id='Overview'>
<h2>Overview</h2>
<p>
This keyboard is designed for use with the Harari language of Ethiopia in Africa. Typing follows a consonant-vowel pattern. It is designed for use with a standard (QWERTY) keyboard.
</p>
<p class='keymanweb'>Most computers will automatically download a special font to display this keyboard correctly.  However, if the layout or the charts below do not display correctly, please read the <a target="_blank" href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>
<p>
<a href="#Related">Click here</a> to see keyboard layouts for other Ethiopic languages, like Awngi, Bench, Blin, Dizi, Geʾez, Meʾen, Mursi, Sebatbeit, Suri and Tigrigna.
</p>
</div>

<div id='Using'>
<h2>Using this Keyboard</h2>

<h3>Keyboard Layout</h3>

<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift'></div>
</div>

<div id='osk-phone-container'>
  <h2>Phone Keyboard Layout</h2>

<h3>Letters</h3>

<p>When the GFF Harari mobile keyboard starts, the key layout appears as shown in the following image.  Note the relationship between the letters of the middle row and top row:</p>

<img src="images/gff_harari-default-1.jpeg" style="border: 1px solid black;"/>

<p>Tapping a key once, the modifier letters to the left (<code>አ</code>, <code>ኡ</code>, <code>ኢ</code> ) and right  (<code>ኣ</code>, <code>ኤ</code>, <code>ኦ<code>) of the spacebar will update. For example, tapping <code>ሕ</code> the modifiers change to <code>ሐ</code>, <code>ሑ</code>, <code>ሒ</code>, <code>ሓ</code>, <code>ሔ</code>, <code>ሖ</code> .  If any modifier key is tapped, ሕ will be updated on screen and replaced with the selected letter.</p>

<img src="images/gff_harari-default-2.jpeg" style="border: 1px solid black;"/>

<p>When a key has a <code>·</code> symbol in the top-right corner, it indicates that more options are available. Holding a key with a <code>·</code> down for a few moments (called a “longpress”) a popup menu appears where you can tap a letter or puncutation that appears.  The popup menu for <code>ን</code> is shown below:</p>

<img src="images/gff_harari-default-3.jpeg" style="border: 1px solid black;"/>

<p>Tapping <code>ኝ</code> will then update the modifier keys so that <code>ኘ</code>, <code>ኙ</code>, <code>ኚ</code>, etc. appear for selection. By this approach, <code>ኝ</code> was on a "hidden" or "extra" key. This approach is used to make additional letters, numbers, and punctuation available that did not fit onto the present keyboard “layer”.</p>

<img src="images/gff_harari-default-6.jpeg" style="border: 1px solid black;"/>


<h3>Punctuation</h3>

<p>When typing letters, the <code>!</code> and <code>።</code> keys are available for entering the most common punctuation without shifting to another "layer".  The following image shows the punctuation for a longpress of <code>!</code>:</p>

<img src="images/gff_harari-default-4.jpeg" style="border: 1px solid black;"/>


<p>The punctuation for a longpress of <code>።</code>:</p>

<img src="images/gff_harari-default-5.jpeg" style="border: 1px solid black;"/>

<p>For additional punctuation and numerals, tap the <code>123</code> key to shift to the next layer:</p>

<img src="images/gff_harari-punctuation-1.jpeg" style="border: 1px solid black;"/>


<p>Note that numerals on the punctuation layer use the long press approach to make Geʾez numerals available:</p>

<img src="images/gff_harari-punctuation-2.jpeg" style="border: 1px solid black;"/>

<p>Tapping the <code>@<code> key shifts to a 2nd layer to access all remaining punctuation:</p>

<img src="images/gff_harari-punctuation-3.jpeg" style="border: 1px solid black;"/>

<p>A tap of the <code>፩<code> key will go to the final layer where Geʾez numbers and some less used, and non-Harari letters, can be accessed.</p>

<h3>Extra -wa Letters</h3>

<p>Tapping the <code>ሏሟሷ</code> key shifts to the next layer which presents all 8th order and higher letters with a “wa” sound that are occasionally needed for words of other languages.</p>

<img src="images/gff_harari-labiovelar-1.jpeg" style="border: 1px solid black;"/>

<p>Most letters have only a single extra “wa” form that can be typed directly.  Blue shaded keys indicate letters that have the full five additional “wa” syllables.  Tapping the <code>ጓ<code> key, for example, the modifier keys will update to offer the five “wa” syllables as shown:</p>

<img src="images/gff_harari-labiovelar-2.jpeg" style="border: 1px solid black;"/>


<h3>Numerals</h3>

<p>The last layer to shift to presents the Geʾez numbers, all Geʾez punctuation, and letters of related languages that did not fit conveniently on the initial letters layer.</p>

<p>Note the arrow button, <code>▶</code>, at the end of the row of Geʾez numerals, tapping it will slide the numerals to the orders of ten (e.g. ፳, ፴, ፵, etc.):</p>

<img src="images/gff_harari-extra-1.jpeg" style="border: 1px solid black;"/>

<p>The Geʾez orders of ten appear as shown after the <code>▶</code> button is tapped:</p>

<img src="images/gff_harari-extra-2.jpeg" style="border: 1px solid black;"/>

<p>Tapping the <code>▶</code> button again slides to display the last two numerals, and a final tap will return to the initial Geʾez numerals.</p>

<img src="images/gff_harari-extra-3.jpeg" style="border: 1px solid black;"/>

<p>Finally, simply tap the <code>ሀለሐ</code> key to return to the starting letters layers.</p>
</div>

<div id='osk-tablet-container'>
  <h2>Tablet Keyboard Layout</h2>
  <div id='osk-tablet' data-states='default amharic-extra punctuation'></div>
</div>

<p>Note: Longpress keys are not currently visible in this static documentation, and so some additional letters may be accessible through these longpress keys.</p>

<div id='Quickstart'>
<h3>Quickstart</h3>

<p>This keyboard is designed to work intuitively with a standard (QWERTY) keyboard. This means that the Harari sounds in this keyboard can be found by thinking of the most similar English letters. For example, you can type <span class='keys'>selam</span> to get <span class='highlightExample'>ሰላም</span>.
</p>
<p>As you can see, each Harari character is typed with the base consonant first and then the vowel. For example, <span class='highlightExample'>ጤ</span> is typed <span class='keys'>T</span> then <span class='keys'>ie</span>.
</p>
</div>

<div id="Examples">
<h3>Examples</h3>
<?php renderLanguageExamples(); ?>
</div>

<div id="Documentation">
<h3>Keyboard Details</h3>
	
<p>
The Harari keyboard uses an intuitive <i>phonetic</i> system where the Harari sounds are matched to the nearest English letters. You can think of how a word sounds in
Harari and then type it out with English.
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>selam</span> produces <span class='highlightExample'>ሰላም</span></p>
<p>
Because Harari has more sounds than English, we sometimes have to adjust this
rule. For example, English does not have <span class='highlightExample'>ጠ</span> and the closest similar letter would be <span class='input'>t</span>. In this case you should type <span class='keys'>T</span>, for capital <span class='input'>T</span>:</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>TienaysTlN</span> produces <span class='highlightExample'>ጤናይስጥልኝ</span></p>
<p>Notice that we used capital <span class='input'>N</span> also for <span class='highlightExample'>ኝ</span> and we needed both <span class='input'>ie</span> together to make the 5th <span class='highlightExample'>ጠ</span> letter, <span class='highlightExample'>ጤ</span>. When the letter you want to type does not appear when you hit the similar sounding key in English, try using the capital next. If typing the capital does not work, then try hitting the key two times:
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>sselam</span> produces <span class='highlightExample'>ሠላም</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>SSeHey</span> produces <span class='highlightExample'>ፀሐይ</span></p>
<p>Next, when you need to type the extra letters of Harari like <span class='highlightExample'>ሏ</span>,<span class='highlightExample'>ሟ</span>,<span class='highlightExample'>ኳ</span> you can do so by typing an extra vowel after a <span class='input'>u</span>:
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>lua</span> produces <span class='highlightExample'>ሏ</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>mua</span> produces <span class='highlightExample'>ሟ</span></p>
<p>
Finally, we must introduce a special rule for ' (apostrophe). Some words are spelt with a <span class='highlightExample'>ሳድስ</span> (6<sup>th</sup>) letter followed by a vowel, like <span class='highlightExample'>ርኤ</span> in <span class='highlightExample'>ገብርኤል</span>. We use the apostrophe here to type <span class='keys'>gebr'iel</span> to make sure we get <span class='highlightExample'>ርኤ</span> instead of <span class='highlightExample'>ሬ</span>.
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>mel'ak</span> produces <span class='highlightExample'>መልአክ</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>m'eeraf</span> produces <span class='highlightExample'>ምዕራፍ</span></p>
<p>
Type Apostrophe twice after a 6<sup>th</sup> order letter to make it appear in your document:</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>mel''ak</span> produces <span class='highlightExample'>መል'አክ</span></p>
<p>
We also use the &ldquo;number sign&rdquo; (&ldquo;#&rdquo; also know as the &ldquo;hash mark&rdquo;) for Ethiopic numbers, so <span class='keys'>#1</span> becomes <span class='highlightExample'>፩</span> and so on. If a <span class='highlightExample'>#</span> is needed in your document before a number, type it twice and: <span class='keys'>##1</span> becomes <span class='highlight'>#1</span>. The double strike works for other punctuation as well,
so typing <span class='keys'>;</span> once makes <span class='highlightExample'>፤</span> and a second time gives English semicolon <span class='input'>;</span>. 
</p>
<p style='margin-top:10px'>
See <a target="_blank" href='HarariTyping-English.pdf'>Typing in Harari (English)</a>
for full details on how to type all Harari letters, numbers and punctuation.
</p>
</div>
</div>

<div id="Troubleshooting">
<h2>Troubleshooting</h2>
<p class='keymanweb'>If the characters you type or those on the On Screen Keyboard do not appear to display correctly, please read the <a target="_blank" href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<p>For any other questions, <a target="_blank" href="https://keyman.com/contact/">contact us</a>.</p>

</div>

<div id="Resources">
<h2>Further Resources</h2>

<div id="Related">
<h3>Related Keyboard Layouts</h3>
<p>Keyboard Layouts for other Ethiopic languages:</p>
<p><a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_harege_fidelat">Harege Fidelat (All Languages)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mesobe_fidelat">Mesobe Fidelat (All Languages)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_ethiopic">Ethiopic (All Languages)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_amharic">Amharic</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_awngi_xamtanga">Awngi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_geez">Geʾez</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_gurage">Gurage</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigre">Tigre</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_eritrea">Tigrigna (Eritrea)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_ethiopia">Tigrigna (Ethiopia)</a></p>

</div>
<div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://keymankeyboards.com/?id=455">Download the Harari Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/amharic.htm">More on the Harari Writing System at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/Harari_language">More on the Harari Language at Wikipedia.org</a><br/></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/ethiopic.htm">More on the Geʾez Script at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/Ge'ez_alphabet">More on the Geʾez Script at Wikipedia.org</a></p>
</div>
</div>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 4.1</p>

</div>

<div id="Author">
<h3>Keyboard Authorship</h3>
<p>
This keyboard was created by the Geʾez Frontier Foundation.  SIL International graciously acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb. Their effort assists in enabling people to communicate in their own language.
</p>
</div>
<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p>
The Harari keyboard layout for Keyman Desktop and KeymanWeb is Copyright 2023 Geʾez Frontier Foundation.  It may be freely distributed and used under the terms of <a href="https://opensource.org/licenses/MIT">The MIT License</a>.
</p>

</div>


