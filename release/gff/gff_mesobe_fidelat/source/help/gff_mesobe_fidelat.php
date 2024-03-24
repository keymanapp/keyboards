<?php /*
  Name:             Keyboard_gff_mesobe_fidelat
  Copyright:        Keyboard © 2022-2023 The Geʾez Frontier Foundation 
  Documentation:    
  Description:      
  Create Date:      23 Oct 2022
  Last Update:      08 Jul 2023
*/
  $pagename = 'Mesobe Fidelat Keyboard Help';
  $pagetitle = 'Mesobe Fidelat Keyboard Help';
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

<p style='margin:0px'>Keyboard © 2022-2023. Geʾez Frontier Foundation.</p>

<br/>
<a href="#Overview">Overview</a><br/>
<a style='margin-left:20px' href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:40px' href="#MobileLayout">Mobile Layout &amp; Layers</a><br/>
<a style='margin-left:40px' href="#TabletLayout">Tablet Layout &amp; Layers</a><br/>
<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Author">Authorship</a><br/>


<div id='Overview'>
<h2>Overview</h2>
<p style="text-align: justify;">
This is a language-neutral touch (only) keyboard for mobile devices. The keyboard provides all Ethiopic letters in active use on a single layer in a circular, semi-clockwise orientation. It is meant to be intuitive for new typists and fits more comfortably on a tablet device than on a mobile phone.
</p>
</div>

<div id='Using'>
<h2>Using this Keyboard</h2>

<div id="MobileLayout">
<h3>Mobile Layout &amp; Layers</h3>

<p style="text-align: justify;">
The mobile keyboard uses the “Mesob” style layout of letters where letters are arranged in a series of 4 rings.  Modifier keys that will change the vowel of a letter appear in the outer most ring. 
</p>

<p style="text-align: justify;">
The Mesob layout also has the goal of providing <em>all</em> letters actively used by the languages written with Geʾez script in a single keyboard “layer”. Given the high number of letters appearing on the keyboard, it is a better fit for tablet devices than for typical mobile phones. Consider using the more compact <a href="https://keyman.com/keyboards/gff_harege_fidelat">Harege Fidelat Keyboard</a> which is a similar design and fits more comfortably on the smaller mobile phone screens.
</p>

<div style="margin-left: 1em;">
<h4>Letters</h4>
<p style="text-align: justify;">
The most frequently used letters generally appear in the inner rings, and less used letters appear in the out rings. Letters are arranged in a semi-alphabetic arrangement in the clockwise direction, but not strictly so.  Some effort is made to group related letters together (related either by sound or shape).
</p>

<img src="images/gff_mesobe_fidelat-default-1.jpeg" style="border: 1px solid black;" width="100%"/>


<p style="text-align: justify;">
Tapping a key once, the modifier letters on the left (<code>ኡ</code>, <code>ኢ</code> <code>ኣ</code>,) and right  (<code>ኤ</code>, <code>ኦ</code>, <code>ዋ</code>) of the outer ring will update. For example, tapping <code>ገ</code>, the modifiers change to <code>ጉ</code>, <code>ጊ</code>, <code>ጋ</code>, <code>ጌ</code>, <code>ጎ</code> and  <code>ጓ</code>.  If a modifier is tapped, ገ will be updated on screen and replaced with the selected letter.
</p>

<img src="images/gff_mesobe_fidelat-default-2.jpeg" style="border: 1px solid black;" width="100%"/> 


<p style="text-align: justify;">
Note how the <code>ዋ</code> key changes to <code>ጓ</code>.  Tapping the <code>ጓ</code> key repeatedly will update <code>ጓ</code> on the screen to the related syllables: 
 <code>ጐ</code>, <code>ጒ</code>, <code>ጔ</code> and <code>ጕ</code>. 
</p>

<p style="text-align: justify;">
As an alternative, if preferred, holding a key down for a few moments (called a “longpress”) a popup menu appears where you can tap the letter desired.  The popup menu for <code>ግ</code> is shown below:
</p>

<img src="images/gff_mesobe_fidelat-default-3.jpeg" style="border: 1px solid black;" width="100%"/> 


<p style="text-align: justify;">
Like the letter keys, the <code>።</code> and <code>’</code> keys also have popup menus that offer the most frequently used punctuation.
</p>
</div>

<div style="margin-left: 1em;">
<h4>Numerals</h4>

<p style="text-align: justify;">
Tap the <code>1/፩</code> key to shift to the numerals layer. The numerals layer presents the Western numbers, Geʾez numbers, and all Geʾez punctuation.
</p>

<img src="images/gff_mesobe_fidelat-numerals-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p style="text-align: justify;">
Tapping the <code>@</code> shifts to a 3rd layer to access all remaining punctuation:
</p>

</div>

<div style="margin-left: 1em;">
<h4>Punctuation</h4>

<p style="text-align: justify;">
Punctuation is distributed over two layers on mobile phones, and appears on a single layer on tablets where more screen space is available. The first punctuation layer provides the most frequently used set of symbols:
</p>

<img src="images/gff_mesobe_fidelat-punctuation-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p style="text-align: justify;">
Tapping the <code>#+€</code> key shifts to a final layer to access all remaining punctuation:
</p>
<img src="images/gff_mesobe_fidelat-punctuation-2.jpeg" style="border: 1px solid black;" width="100%"/> 

<p style="text-align: justify;">
Simply tap the <code>ሀለሐ</code> key to return to the Mesob letters layers.
</p>

</div>
</div>

<div id="TabletLayout">
<h2>Tablet Layout &amp; Layers</h2>
<p style="text-align: justify;">
The Mesob tablet layout is <em>identical</em> to the mobile phone layout with the exception that a single punctuation layer is used. The single takes advantage of the greater screen space available.  The larger punctuation layer is shown in the following image:
</p>

<img src="images/gff_mesobe_fidelat-tablet-punctuation-1.jpeg" style="border: 1px solid black;" width="100%"/>
</div>
</div>

<div id="Troubleshooting">
<h2>Troubleshooting</h2>
<p class='keymanweb' style="text-align: justify;">It is expected some of the newer letters introduced for the Gurage language will not appear on screen when using
Keyman with other apps, such as for text messaging.  This will be resolved in the near future when companies like Apple and Samsung update
their products.</p>

<p>For any other questions, <a target="_blank" href="https://keyman.com/contact/">contact us</a>.</p>

</div>

<div id="Resources">
<h2>Further Resources</h2>

<div id="Related">
<h3>Related Keyboard Layouts</h3>
<p>Keyboard Layouts for other Ethiopic languages:</p>
<p><p><a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_ethiopic">Ethiopic (Modern Geʾez</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_amharic">Amharic</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_awngi_xamtanta">Awngi &amp; Khimtanga</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_blin">Blin</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_harari">Harari</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_geez">Geʾez</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_gurage">Gurage</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigre">Tigre</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_eritrea">Tigrigna (Eritrea)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_ethiopia">Tigrigna (Ethiopia)</a></p>

</div>
<div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://en.wikipedia.org/wiki/Ge'ez_alphabet">More on the Geʾez Script at Wikipedia.org</a><br/>
<a target="_blank" href="http://www.omniglot.com/writing/ethiopic.htm">More on the Geʾez Script at Omniglot.com</a></p>
</div>
</div>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p style="text-align: justify;">
Due to the keyboard's width it is ideally suited for tablet devices but is also suitable for larger mobile phones.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 14</p>

</div>

<div id="Author">
<h3>Keyboard Authorship</h3>
<p style="text-align: justify;">
This keyboard was created by the Geʾez Frontier Foundation.  SIL International graciously acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb. Their effort assists in enabling people to communicate in their own language.
</p>
</div>
<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p style="text-align: justify;">
The Ethiopic keyboard layout for Keyman Mobile is Copyright 2022-2023 Geʾez Frontier Foundation.  It may be freely distributed and used under the terms of <a href="https://opensource.org/licenses/MIT">The MIT License</a>.
</p>

</div>


