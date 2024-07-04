<?php /*
  Name:             keyboard_visual_media_tamil_typewriter
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
  History:          18 Sep 2009 - mcdurdin - Additional help
*/
  require_once('servervars.php');
  $pagename = 'Tamil Typewriter (Visual Media) (deprecated) Keyboard Help';
  $pagetitle = 'Tamil Typewriter (Visual Media) (deprecated) Keyboard Help';
  $style = '.lang2 {font-size:130%}';
  $relatedSites = array("$keyman_com/tamil" => "Tamil Keyboards Home");
  require_once('header.php');
?>


<p style='margin:0px'>Keyboard &#169; 2008 Visual Media and Tavultesoft</p>


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

<h4><a target="_blank" href="chart.pdf"><img border=0 style='vertical-align:bottom' src="<?php echo cdn('img/pdficon_small.gif'); ?>" /></a> Download this documentation in <a target="_blank" href="chart.pdf">PDF format</a>.</h4>


<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard is designed for the Tamil language and based on the Tamil typewriter layout.  The keyboard is designed for users who are familiar with both this layout and the Tamil script, and is intended for use with a normal QWERTY (English) keyboard.
</p>
<p class='keymanweb'>
Most computers will automatically download a special font if needed to display this language correctly.
</p>
<p>
<a href="#Related">Click here</a> to see other keyboard layouts for Tamil.
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
<p>This keyboard layout is based on the Tamil typewriter, with separate keys for consonants, vowels and vowel components.  Most of the characters used in Tamil are combinations of consonants and vowels, and these do not appear on the keyboard.  Instead, the appropriate vowel component is typed after the consonant.
</p>
<p>
For example, the standalone vowel <span class='highlightExample'>இ</span> is entered by typing <span class='keys'>,</span>, but in combination with a consonant, the <span class='highlightExample'>ி</span> component (<span class='keys'>p</span> key) is usually typed instead, after the consonant, and the consonant-vowel combinant will be displayed.  Pressing Backspace once will delete only the vowel component, so the character displayed on the screen will change back to the consonant, and change again if a different component is typed.
</p>

<p>
Grantha letters, which are used for typing Sanskrit, appear on the keyboard and are treated as normal consonants.
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

<p>The visible keyboard layout consists of the eighteen consonants <span class='lang2'>க ங ச ஞ ட ண த ந ப ம ய ர ல வ ழ ள ற ன</span>, the five Grantha consonants and SRii<span class='lang2'>ஸ ஷ ஜ ஹ க்ஷ ஸ்ரீ</span>, eleven vowels <span class='lang2'>அ ஆ இ ஈ உ ஊ எ ஏ ஐ ஒ ஓ</span>, a range of vowel components and combinants characters, and the Pulli <span class='lang2'>்</span> and Aytham <span class='lang2'>ஃ</span> marks, as well as various punctuation marks.  The majority of characters are typed using a combination of keystrokes.</p>

<p>Although many Tamil characters are typed using separate keys for consonants and components, the characters that appear on screen will be combinants, which the computer sees as a single character.  This means that while two (or more) keystrokes are required to display most consonant-vowel combinants, when you use the arrow keys to move the cursor through the text, only a single keystroke is needed to move past each character.  Moving the cursor to the left of a combinant character and pressing Delete will erase the whole character, but if you move the cursor to the right of a combinant and press Backspace, only the vowel component will be erased.  This is the case whether the vowel component appears to the left or right of, above or below the consonant.
</p>

<h4>Vowels and Pulli Marks</h4>
<p>The standalone vowel characters which are on the keyboard will produce that character and will not combine with consonants.  Long vowels have their own keys.  Vowel-consonant combinant characters are entered either by typing a specific key for that combinant or by typing the consonant and vowel components separately.</p>

<p>Vowel components that combine with consonants are always typed after the consonants, even when the vowel component appears before (to the left of) the consonant component (such as <span class='highlightExample'>ெ</span> or <span class='highlightExample'>ே</span>).  If vowel components are typed before a consonant, they will not be combined with that consonant.
</p>
<p>
Because the consonants contain the implicit vowel <span class='highlightExample'>அ</span>, to produce a pure consonant it is necessary to add the Pulli mark <span class='lang2'>்</span> by typing a semicolon <span class='keys'>;</span> immediately after the consonant.  Any vowel component that is typed immediately after typing the Pulli mark will not be combined with the consonant.  However, because this keyboard acts in a similar way to a typewriter, it is possible to type a preceding vowel component followed by a consonant and the Pulli mark, or even a standalone vowel followed by the Pulli mark, producing odd combinations such as <span class='highlightExample'>மெ்</span> or <span class='highlightExample'>அ்</span>.  In every case, a consonant-Pulli mark combinant behaves the same way as a consonant-vowel combinant when you use the arrow, Backspace and Delete keys.
</p>

<div class='keymanweb'>
<h4>The SRii Character <img src='srii/tamil_srii.png' style='vertical-align:middle' /></h4>
<p>
This character is entered by typing <span class='keys'>_</span> (Shift+Underscore or Shift+Hyphen).  Currently, some browsers do not display this character correctly.  <a href="srii/tamil_srii.php">Click here</a> if you are having difficulty entering this character.
</p>
</div>

<h4>Keystroke Examples</h4>
<p>Note: for a complete table of characters and keystrokes, <a href="chart.php">click here</a>.</p>
<p>The following table gives specific examples of how to input characters based on the consonant <span class='highlightExample'>க</span>.  The Grantha consonants, which are entered with <span class='keys'>[S*]</span> key combinations, use the same input method.  Examples of these with the consonant <span class='highlightExample'>ஜ</span> are also given below.</p>
<br/>
<table>
	<col width=80 span=3 />
	<col width=150 />
	<col width=40 />
	<col width=80 span=3 />
	<col width=150 />
	<tr style='text-align:center; font-weight:bold'>
		<td colspan=4>Tamil Consonants</td>
		<td></td>
		<td colspan=4>Grantha Consonants</td>
	<tr style='text-align:center; font-weight:normal'>
		<td>Consonant</td><td>Vowel/Pulli</td><td>Combinant</td><td>Keystrokes</td>
		<td></td>
		<td>Consonant</td><td>Vowel/Pulli</td><td>Combinant</td><td>Keystrokes</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2'>க</td><td>்</td><td class='lang2'>க்</td><td><span class='keys'>f;</span></td>
		<td></td>
		<td class='lang2'>ஜ</td><td>்</td><td class='lang2'>ஜ்</td><td><span class='keys'>$;</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>அ</td><td class='lang2'>க‍</td><td><span class='keys'>f</span></td>
		<td></td>
		<td></td><td class='lang2'>அ</td><td class='lang2'>ஜ‍</td><td><span class='keys'>$</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>கா</td><td><span class='keys'>fh</span></td>
		<td></td>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>ஜா</td><td><span class='keys'>$h</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>இ</td><td class='lang2'>கி</td><td><span class='keys'>fp</span></td>
		<td></td>
		<td></td><td class='lang2'>இ</td><td class='lang2'>ஜி</td><td><span class='keys'>$p</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>கீ</td><td><span class='keys'>fP</span></td>
		<td></td>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>ஜீ</td><td><span class='keys'>$P</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>உ</td><td class='lang2'>கு</td><td><span class='keys'>F</span></td>
		<td></td>
		<td></td><td class='lang2'>உ</td><td class='lang2'>ஜு</td><td></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>கூ</td><td><span class='keys'>T</span></td>
		<td></td>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>ஜூ</td><td></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>எ</td><td class='lang2'>கெ</td><td><span class='keys'>fb</span></td>
		<td></td>
		<td></td><td class='lang2'>எ</td><td class='lang2'>ஜெ</td><td><span class='keys'>$b</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>கே</td><td><span class='keys'>fn</span></td>
		<td></td>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>ஜே</td><td><span class='keys'>$n</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>கை</td><td><span class='keys'>fi</span></td>
		<td></td>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>ஜை</td><td><span class='keys'>$i</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>கொ</td><td><span class='keys'>fbh</span></td>
		<td></td>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>ஜொ</td><td><span class='keys'>$bh</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>கோ</td><td><span class='keys'>fnh</span></td>
		<td></td>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>ஜோ</td><td><span class='keys'>$nh</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>கௌ</td><td><span class='keys'>f}</span></td>
		<td></td>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>ஜௌ</td><td><span class='keys'>$}</span></td>
	</tr>

</table>



</div>


<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>

<h4>Fonts</h4>
<p>Some of the fonts included with Windows do not include all the Tamil characters that are available with this keyboard.  In order to display every character correctly, we recommend you download and install <span style="font-weight:bold">Tamil fonts</span>.</p>
<p>If the characters you type or those on the On Screen Keyboard do not appear to display correctly, please read the <a href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<!-- <h4>Problem Solving</h4>
<p>
</p>
-->
</div>


<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>Further Resources</h2>
<div id="Related">
		<!-- A list of links to related keyboards - to the help pages or to (download) the keyboards? -->

<h3>Related Keyboard Layouts</h3>
<p>Other Keyboard Layouts for the Tamil language:</p>
<p><a href="/go?language=tam&amp;keyboard=Keyboard_ekwtamil99uni">Tamil99</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_ekwbamuni">Suratha Bamuni</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_ekwunitamil">Anjal Paangu</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_isis_tamil">ISIS Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_tamil">Inscript Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_visual_media_tamil_modular">Modular (Visual Media)</a><br/>

</div>

<h3>Other Internet Resources</h3>
<p><a href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=446&amp;FromKeyman=0">Download Visual Media Keyboard Package for Keyman Desktop</a></p>
<p><a href="http://www.omniglot.com/writing/tamil.htm">Tamil Writing System at Omniglot.com</a><br/>
<a href="http://en.wikipedia.org/wiki/tamil_language">Tamil Language at Wikipedia.org</a><br/>
<a href="http://en.wikipedia.org/wiki/tamil_script.htm">Tamil Script at Wikipedia.org</a></p>
</div>



<div id="Technical">
<h2>Technical Information</h2>
<h4>System Requirements</h4>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h4>Unicode Version</h4>
<p>This keyboard complies with Unicode 5.2</p>

</div>


<div id="Authorship">
<h3>Authorship</h3>
<p>
This keyboard was created by M. S. Murali.  Tavultesoft gratefully acknowledges the contribution made by the author in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  This effort assists in enabling people to communicate in their own language..
</p>

<h4>Copyright and Terms of Use</h4>
<p>
The Visual Media Tamil Typewriter Keyboard for Keyman Desktop and KeymanWeb is Copyright 2008 Visual Media and Tavultesoft.  It may be freely distributed for non-commercial use, but may not be modified or adapted in any way without permission from the authors.
</p>
</div>




