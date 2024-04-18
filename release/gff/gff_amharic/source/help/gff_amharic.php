<?php /*
  Name:             Keyboard_gff_amhamaric
  Copyright:        Keyboard ©1997-2022 The Geʾez Frontier Foundation 
  Documentation:    
  Description:      
  Create Date:      18 Sep 2009

  Modified Date:    06 April 2023
  Authors:          dyacob, mcdurdin, pbaehr
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Sep 2009 - mcdurdin - Polish help
*/
  $pagename = 'አማርኛ (Amharic) Keyboard Help';
  $pagetitle = 'አማርኛ (Amharic) Keyboard Help';
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

<p style='margin:0px'>Keyboard &#169; 1997-2022. Geʾez Frontier Foundation.</p>

<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
<a style='margin-left:30px' target="_blank" href='AmharicTyping-English.pdf'>Complete Typing Chart - English</a><br/>
<a style='margin-left:30px' target="_blank" href='AmharicTyping-Amharic.pdf'>Complete Typing Chart - Amharic</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Author">Authorship</a><br/>


<div id='Overview'>
<h2>Overview</h2>
<p>
This keyboard is designed for use with the Amharic language of Ethiopia in Africa. Typing follows a consonant-vowel pattern. It is designed for use with a standard (QWERTY) keyboard.
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

<p>
When the GFF Amharic mobile keyboard starts, the key layout appears as shown in the following image.  Note the relationship between the letters of the middle row and top row:
</p>

<img src="images/gff_amharic-default-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p>
Tapping a key once, the modifier letters to the left (<code>አ</code>, <code>ኡ</code>, <code>ኢ</code>) and right  (<code>ኣ</code>, <code>ኤ</code>, <code>ኦ</code>) of the spacebar. For example, tapping <code>ግ</code> the modifiers change to <code>ገ</code>, <code>ጉ</code>, <code>ጊ</code>, <code>ጋ</code>, <code>ጌ</code>, <code>ጎ</code> .  If a modifier is tapped, ግ will be updated on screen.
</p>

<img src="images/gff_amharic-default-2.jpeg" style="border: 1px solid black;" width="100%"/>

<p>
As an alternative, if preferred, holding a key down for a few moments (called a “longpress”) a popup menu appears where you can tap the letter desired.  The popup menu for <code>ግ</code> is shown below:
</p>

<img src="images/gff_amharic-default-4.jpeg" style="border: 1px solid black;" width="100%"/>

<p>
The modifier keys will also have popups as applicable.  For example to enter the extended syllables for <code>ጐ</code>, <code>ጒ</code>, <code>ጓ</code>, <code>ጔ</code> and <code>ጕ</code> as shown:
</p>

<img src="images/gff_amharic-default-3.jpeg" style="border: 1px solid black;" width="100%"/>


<h3>Punctuation</h3>

<p>When typing letters, the <code>!</code> and <code>።</code> keys are available for entering the most common punctuation without shifting to another “layer”.  The following image shows the punctuation for a longpress of <code>!</code>:</p>

<img src="images/gff_amharic-punctuation-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p>The punctuation for a longpress of <code>።</code>:</p>

<img src="images/gff_amharic-punctuation-2.jpeg" style="border: 1px solid black;" width="100%"/>

<p>For additional punctuation and numerals, tap the <code>123</code> key to shift to the next layer:</p>

<img src="images/gff_amharic-punctuation-3.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Note that numerals on the punctuation layer use the long press feature to make Geʾez numerals available:</p>

<img src="images/gff_amharic-numerals-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Tapping the <code>@</code> shifts to a 2nd layer to access all remaining punctuation:</p>

<img src="images/gff_amharic-punctuation-4.jpeg" style="border: 1px solid black;" width="100%"/>

<p>A tap of the <code>፩</code> key will go to the final layer where Geʾez numbers and some less used, and non-Amharic letters, can be accessed.</p>

<h3>Numerals</h3>

<p>The last layer to shift to presents the Geʾez numbers, all Geʾez punctuation, letters of related languages, and a few lesser used letters that did not fit conveniently on the initial letters layer.</p>

<p>Note the arrow button, <code>▶</code>, at the end of the row of Geʾez numerals, tapping it will slide the numerals to the remaining numbers that are orders of ten (e.g. ፳, ፴, ፵, etc.):</p>

<img src="images/gff_amharic-numerals-2.jpeg" style="border: 1px solid black;" width="100%"/>

<p>After tapping the <code>▶</code> button, the Geʾez orders of ten appear as shown:</p>

<img src="images/gff_amharic-numerals-3.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Tapping the <code>▶</code> button again slides to the western digits, a final tap will return to the initial Geʾez numerals.</p>

<img src="images/gff_amharic-numerals-4.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Simply tap the <code>ሀለሐ</code> key to return to the starting letters layers.</p>
</div>

<div id='osk-tablet-container'>
  <h2>Tablet Keyboard Layout</h2>
  <div id='osk-tablet' data-states='default amharic-extra punctuation'></div>
</div>

<p>Note: Longpress keys are not currently visible in this static documentation, and so some additional letters may be accessible through these longpress keys.</p>

<div id='Quickstart'>
<h3>Quickstart</h3>

<p>This keyboard is designed to work intuitively with a standard (QWERTY) keyboard. This means that the Amharic sounds in this keyboard can be found by thinking of the most similar English letters. For example, you can type <span class='keys'>selam</span> to get <span class='highlightExample'>ሰላም</span>.
</p>
<p>As you can see, each Amharic character is typed with the base consonant first and then the vowel. For example, <span class='highlightExample'>ጤ</span> is typed <span class='keys'>T</span> then <span class='keys'>ie</span>.
</p>
</div>

<div id="Examples">
<h3>Examples</h3>
<?php renderLanguageExamples(); ?>
</div>

<div id="Documentation">
<h3>Keyboard Details</h3>
	
<p>
The Amharic keyboard uses an intuitive <i>phonetic</i> system where the Amharic sounds are matched to the nearest English letters. You can think of how a word sounds in
Amharic and then type it out with English.
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>selam</span> produces <span class='highlightExample'>ሰላም</span></p>
<p>
Because Amharic has more sounds than English, we sometimes have to adjust this
rule. For example, English does not have <span class='highlightExample'>ጠ</span> and the closest similar letter would be <span class='input'>t</span>. In this case you should type <span class='keys'>T</span>, for capital <span class='input'>T</span>:</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>TienaysTlN</span> produces <span class='highlightExample'>ጤናይስጥልኝ</span></p>
<p>Notice that we used capital <span class='input'>N</span> also for <span class='highlightExample'>ኝ</span> and we needed both <span class='input'>ie</span> together to make the 5th <span class='highlightExample'>ጠ</span> letter, <span class='highlightExample'>ጤ</span>. When the letter you want to type does not appear when you hit the similar sounding key in English, try using the capital next. If typing the capital does not work, then try hitting the key two times:
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>sselam</span> produces <span class='highlightExample'>ሠላም</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>SSeHey</span> produces <span class='highlightExample'>ፀሐይ</span></p>
<p>Next, when you need to type the extra letters of Amharic like <span class='highlightExample'>ሏ</span>,<span class='highlightExample'>ሟ</span>,<span class='highlightExample'>ኴ</span> you can do so by typing an extra vowel after a <span class='input'>u</span>:
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>mua</span> produces <span class='highlightExample'>ሟ</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>guie</span> produces <span class='highlightExample'>ጔ</span></p>
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
See <a target="_blank" href='AmharicTyping-English.pdf'>Typing in Amharic (English)</a> or 
<a target="_blank" href='AmharicTyping-Amharic.pdf'>Typing in Amharic (Amharic)</a> 
for full details on how to type all Amharic letters, numbers and punctuation.
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
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_awn_7">Awngi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_bcq_7">Bench</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_blin">Blin</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mdx_7">Dizi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_geez">Geʾez</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_gurage">Gurage</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mym_7">Meʾen</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_muz_7">Mursi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_suq_7">Suri</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_eritrea">Tigrigna (Eritrea)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_ethiopia">Tigrigna (Ethiopia)</a></p>

</div>
<div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://keymankeyboards.com/?id=455">Download the Amharic Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/amharic.htm">More on the Amharic Writing System at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/Amharic_language">More on the Amharic Language at Wikipedia.org</a><br/></p>
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
The Amharic keyboard layout for Keyman Desktop and KeymanWeb is Copyright 1997-2023 Geʾez Frontier Foundation and SIL International.  It may be freely distributed and used under the terms of <a href="https://opensource.org/licenses/MIT">The MIT License</a>.
</p>

</div>


