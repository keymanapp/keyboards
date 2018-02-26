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
  $pagename = 'Tamil Typewriter (Visual Media) Keyboard Help';
  $pagetitle = 'Tamil Typewriter (Visual Media) Keyboard Help';
  $style = '.lang2 {font-size:130%}';
  $relatedSites = array("http://$site_tavultesoft/tamil" => "Tamil Keyboards Home");
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

<h2>Keyboard Reference Chart</h2>
<p>The following chart lists all the characters available with this keyboard.  Below each character are the keystrokes required to type it.</p>

<table border=0 cellspacing=2 cellpadding=1>
	<col width=76 style='text-align:center; background-color:#dedede' />
	<col span=13 width=55 style='text-align:center; background-color:#ffffff' />
	<!-- tr style='text-align: left; font-weight:bold; background-color:#ffffff'>
		<td></td>
		<td style='background-color:#dedede' colspan=13>Pulli Mark & Vowels</td>
	</tr -->
	<tr style='text-align:center; font-weight:normal; background-color:#dedede'>
		<td style='text-align:right; font-weight:bold; background-color:#dedede' valign=bottom>\<span style='text-decoration:underline'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vowels</span>&nbsp;<br/>Consonants\</td>
		<td><span class='lang2' >்</span><br/><span class='keys'>;</span></td>
		<td><span class='lang2' >அ</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >ஆ</span><br/><span class='keys'>M</span></td>
		<td><span class='lang2' >இ</span><br/><span class='keys'>,</span></td>
		<td><span class='lang2' >ஈ</span><br/><span class='keys'>,</span></td>
		<td><span class='lang2' >உ</span><br/><span class='keys'>c</span></td>
		<td><span class='lang2' >ஊ</span><br/><span class='keys'>C</span></td>
		<td><span class='lang2' >எ</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >ஏ</span><br/><span class='keys'>V</span></td>
		<td><span class='lang2' >ஐ</span><br/><span class='keys'>I</span></td>
		<td><span class='lang2' >ஒ</span><br/><span class='keys'>x</span></td>
		<td><span class='lang2' >ஓ</span><br/><span class='keys'>X</span></td>
		<td><span class='lang2' >ஔ</span><br/><span class='keys'>xs</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >க</span><br/><span class='keys'>f</span></td>
		<td><span class='lang2' >க்</span><br/><span class='keys'>f;</span></td>
		<td><span class='lang2' >க‍</span><br/><span class='keys'>f</span></td>
		<td><span class='lang2' >கா</span><br/><span class='keys'>fh</span></td>
		<td><span class='lang2' >கி</span><br/><span class='keys'>fp</span></td>
		<td><span class='lang2' >கீ</span><br/><span class='keys'>fP</span></td>
		<td><span class='lang2' >கு</span><br/><span class='keys'>F</span></td>
		<td><span class='lang2' >கூ</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' >கெ</span><br/><span class='keys'>fb</span></td>
		<td><span class='lang2' >கே</span><br/><span class='keys'>fn</span></td>
		<td><span class='lang2' >கை</span><br/><span class='keys'>fi</span></td>
		<td><span class='lang2' >கொ</span><br/><span class='keys'>fbh</span></td>
		<td><span class='lang2' >கோ</span><br/><span class='keys'>fnh</span></td>
		<td><span class='lang2' >கௌ</span><br/><span class='keys'>f}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ங</span><br/><span class='keys'>'</span></td>
		<td><span class='lang2' >ங்</span><br/><span class='keys'>';</span></td>
		<td><span class='lang2' >ங‍</span><br/><span class='keys'>'</span></td>
		<td><span class='lang2' >ஙா</span><br/><span class='keys'>'h</span></td>
		<td><span class='lang2' >ஙி</span><br/><span class='keys'>'p</span></td>
		<td><span class='lang2' >ஙீ</span><br/><span class='keys'>'P</span></td>
		<td><span class='lang2' >ஙு</span><br/><span class='keys'>'[</span></td>
		<td><span class='lang2' >ஙூ</span><br/><span class='keys'>'{</span></td>
		<td><span class='lang2' >ஙெ</span><br/><span class='keys'>'b</span></td>
		<td><span class='lang2' >ஙே</span><br/><span class='keys'>'n</span></td>
		<td><span class='lang2' >ஙை</span><br/><span class='keys'>'i</span></td>
		<td><span class='lang2' >ஙொ</span><br/><span class='keys'>'bh</span></td>
		<td><span class='lang2' >ஙோ</span><br/><span class='keys'>'nh</span></td>
		<td><span class='lang2' >ஙௌ</span><br/><span class='keys'>'}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ச</span><br/><span class='keys'>r</span></td>
		<td><span class='lang2' >ச்</span><br/><span class='keys'>r;</span></td>
		<td><span class='lang2' >ச‍</span><br/><span class='keys'>r</span></td>
		<td><span class='lang2' >சா</span><br/><span class='keys'>rh</span></td>
		<td><span class='lang2' >சி</span><br/><span class='keys'>rp</span></td>
		<td><span class='lang2' >சீ</span><br/><span class='keys'>rP</span></td>
		<td><span class='lang2' >சு</span><br/><span class='keys'>R</span></td>
		<td><span class='lang2' >சூ</span><br/><span class='keys'>N</span></td>
		<td><span class='lang2' >செ</span><br/><span class='keys'>rb</span></td>
		<td><span class='lang2' >சே</span><br/><span class='keys'>rn</span></td>
		<td><span class='lang2' >சை</span><br/><span class='keys'>ri</span></td>
		<td><span class='lang2' >சொ</span><br/><span class='keys'>rbh</span></td>
		<td><span class='lang2' >சோ</span><br/><span class='keys'>rnh</span></td>
		<td><span class='lang2' >சௌ</span><br/><span class='keys'>r}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஞ</span><br/><span class='keys'>"</span></td>
		<td><span class='lang2' >ஞ்</span><br/><span class='keys'>";</span></td>
		<td><span class='lang2' >ஞ‍</span><br/><span class='keys'>"</span></td>
		<td><span class='lang2' >ஞா</span><br/><span class='keys'>"h</span></td>
		<td><span class='lang2' >ஞி</span><br/><span class='keys'>"p</span></td>
		<td><span class='lang2' >ஞீ</span><br/><span class='keys'>"P</span></td>
		<td><span class='lang2' >ஞு</span><br/><span class='keys'>"[</span></td>
		<td><span class='lang2' >ஞூ</span><br/><span class='keys'>"{</span></td>
		<td><span class='lang2' >ஞெ</span><br/><span class='keys'>"b</span></td>
		<td><span class='lang2' >ஞை</span><br/><span class='keys'>"n</span></td>
		<td><span class='lang2' >ஞை</span><br/><span class='keys'>"i</span></td>
		<td><span class='lang2' >ஞொ</span><br/><span class='keys'>"bh</span></td>
		<td><span class='lang2' >ஞோ</span><br/><span class='keys'>"nh</span></td>
		<td><span class='lang2' >ஞௌ</span><br/><span class='keys'>"}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ட</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >ட்</span><br/><span class='keys'>l;</span></td>
		<td><span class='lang2' >ட‍</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >டா</span><br/><span class='keys'>lh</span></td>
		<td><span class='lang2' >டி</span><br/><span class='keys'>lp</span></td>
		<td><span class='lang2' >டீ</span><br/><span class='keys'>lP</span></td>
		<td><span class='lang2' >டு</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >டூ</span><br/><span class='keys'>l{</span></td>
		<td><span class='lang2' >டெ</span><br/><span class='keys'>lb</span></td>
		<td><span class='lang2' >டே</span><br/><span class='keys'>ln</span></td>
		<td><span class='lang2' >டை</span><br/><span class='keys'>li</span></td>
		<td><span class='lang2' >டொ</span><br/><span class='keys'>lbh</span></td>
		<td><span class='lang2' >டோ</span><br/><span class='keys'>lnh</span></td>
		<td><span class='lang2' >டௌ</span><br/><span class='keys'>l}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ண</span><br/><span class='keys'>z</span></td>
		<td><span class='lang2' >ண்</span><br/><span class='keys'>z;</span></td>
		<td><span class='lang2' >ண‍</span><br/><span class='keys'>z</span></td>
		<td><span class='lang2' >ணா</span><br/><span class='keys'>zh</span></td>
		<td><span class='lang2' >ணி</span><br/><span class='keys'>zp</span></td>
		<td><span class='lang2' >ணீ</span><br/><span class='keys'>zP</span></td>
		<td><span class='lang2' >ணு</span><br/><span class='keys'>Q</span></td>
		<td><span class='lang2' >ணூ</span><br/><span class='keys'>Qh</span></td>
		<td><span class='lang2' >ணெ</span><br/><span class='keys'>zb</span></td>
		<td><span class='lang2' >ணே</span><br/><span class='keys'>zn</span></td>
		<td><span class='lang2' >ணை</span><br/><span class='keys'>zi</span></td>
		<td><span class='lang2' >ணொ</span><br/><span class='keys'>zbh</span></td>
		<td><span class='lang2' >ணோ</span><br/><span class='keys'>znh</span></td>
		<td><span class='lang2' >ணௌ</span><br/><span class='keys'>z}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >த</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >த்</span><br/><span class='keys'>j;</span></td>
		<td><span class='lang2' >த‍</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >தா</span><br/><span class='keys'>jh</span></td>
		<td><span class='lang2' >தி</span><br/><span class='keys'>jp</span></td>
		<td><span class='lang2' >தீ</span><br/><span class='keys'>jP</span></td>
		<td><span class='lang2' >து</span><br/><span class='keys'>J</span></td>
		<td><span class='lang2' >தூ</span><br/><span class='keys'>Jh</span></td>
		<td><span class='lang2' >தெ</span><br/><span class='keys'>jb</span></td>
		<td><span class='lang2' >தே</span><br/><span class='keys'>jn</span></td>
		<td><span class='lang2' >தை</span><br/><span class='keys'>ji</span></td>
		<td><span class='lang2' >தொ</span><br/><span class='keys'>jbh</span></td>
		<td><span class='lang2' >தோ</span><br/><span class='keys'>jnh</span></td>
		<td><span class='lang2' >தௌ</span><br/><span class='keys'>j}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ந</span><br/><span class='keys'>e</span></td>
		<td><span class='lang2' >ந்</span><br/><span class='keys'>e;</span></td>
		<td><span class='lang2' >ந‍</span><br/><span class='keys'>e</span></td>
		<td><span class='lang2' >நா</span><br/><span class='keys'>eh</span></td>
		<td><span class='lang2' >நி</span><br/><span class='keys'>ep</span></td>
		<td><span class='lang2' >நீ</span><br/><span class='keys'>eP</span></td>
		<td><span class='lang2' >நு</span><br/><span class='keys'>E</span></td>
		<td><span class='lang2' >நூ</span><br/><span class='keys'>Eh</span></td>
		<td><span class='lang2' >நெ</span><br/><span class='keys'>eb</span></td>
		<td><span class='lang2' >நே</span><br/><span class='keys'>en</span></td>
		<td><span class='lang2' >நை</span><br/><span class='keys'>ei</span></td>
		<td><span class='lang2' >நொ</span><br/><span class='keys'>ebh</span></td>
		<td><span class='lang2' >நோ</span><br/><span class='keys'>enh</span></td>
		<td><span class='lang2' >நௌ</span><br/><span class='keys'>e}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ப</span><br/><span class='keys'>g</span></td>
		<td><span class='lang2' >ப்</span><br/><span class='keys'>g;</span></td>
		<td><span class='lang2' >ப‍</span><br/><span class='keys'>g</span></td>
		<td><span class='lang2' >பா</span><br/><span class='keys'>gh</span></td>
		<td><span class='lang2' >பி</span><br/><span class='keys'>gp</span></td>
		<td><span class='lang2' >பீ</span><br/><span class='keys'>gP</span></td>
		<td><span class='lang2' >பு</span><br/><span class='keys'>g[</span></td>
		<td><span class='lang2' >பூ</span><br/><span class='keys'>g{</span></td>
		<td><span class='lang2' >பெ</span><br/><span class='keys'>gb</span></td>
		<td><span class='lang2' >பே</span><br/><span class='keys'>gn</span></td>
		<td><span class='lang2' >பை</span><br/><span class='keys'>gi</span></td>
		<td><span class='lang2' >பொ</span><br/><span class='keys'>gbh</span></td>
		<td><span class='lang2' >போ</span><br/><span class='keys'>gnh</span></td>
		<td><span class='lang2' >பௌ</span><br/><span class='keys'>g}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ம</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >ம்</span><br/><span class='keys'>k;</span></td>
		<td><span class='lang2' >ம</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >மா</span><br/><span class='keys'>kh</span></td>
		<td><span class='lang2' >மி</span><br/><span class='keys'>kp</span></td>
		<td><span class='lang2' >ம்மீ</span><br/><span class='keys'>kP</span></td>
		<td><span class='lang2' >மு</span><br/><span class='keys'>K</span></td>
		<td><span class='lang2' >மூ</span><br/><span class='keys'>k{</span></td>
		<td><span class='lang2' >மெ</span><br/><span class='keys'>kb</span></td>
		<td><span class='lang2' >மே</span><br/><span class='keys'>kn</span></td>
		<td><span class='lang2' >மை</span><br/><span class='keys'>ki</span></td>
		<td><span class='lang2' >மொ</span><br/><span class='keys'>kbh</span></td>
		<td><span class='lang2' >மோ</span><br/><span class='keys'>knh</span></td>
		<td><span class='lang2' >மௌ</span><br/><span class='keys'>k}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ய</span><br/><span class='keys'>a</span></td>
		<td><span class='lang2' >ய்</span><br/><span class='keys'>a;</span></td>
		<td><span class='lang2' >ய‍</span><br/><span class='keys'>a</span></td>
		<td><span class='lang2' >யா</span><br/><span class='keys'>ah</span></td>
		<td><span class='lang2' >யி</span><br/><span class='keys'>ap</span></td>
		<td><span class='lang2' >யீ</span><br/><span class='keys'>aP</span></td>
		<td><span class='lang2' >யு</span><br/><span class='keys'>a[</span></td>
		<td><span class='lang2' >யூ</span><br/><span class='keys'>a{</span></td>
		<td><span class='lang2' >யெ</span><br/><span class='keys'>na</span></td>
		<td><span class='lang2' >யே</span><br/><span class='keys'>Na</span></td>
		<td><span class='lang2' >யை</span><br/><span class='keys'>ia</span></td>
		<td><span class='lang2' >யொ</span><br/><span class='keys'>nah</span></td>
		<td><span class='lang2' >யோ</span><br/><span class='keys'>Nah</span></td>
		<td><span class='lang2' >யௌ</span><br/><span class='keys'>nas</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ர</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >ர்</span><br/><span class='keys'>u;</span></td>
		<td><span class='lang2' >ர‍</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >ரா</span><br/><span class='keys'>uh</span></td>
		<td><span class='lang2' >ரி</span><br/><span class='keys'>up</span></td>
		<td><span class='lang2' >ரீ</span><br/><span class='keys'>uP</span></td>
		<td><span class='lang2' >ரு</span><br/><span class='keys'>U</span></td>
		<td><span class='lang2' >ரூ</span><br/><span class='keys'>u{</span></td>
		<td><span class='lang2' >ரெ</span><br/><span class='keys'>ub</span></td>
		<td><span class='lang2' >ரே</span><br/><span class='keys'>un</span></td>
		<td><span class='lang2' >ரை</span><br/><span class='keys'>ui</span></td>
		<td><span class='lang2' >ரொ</span><br/><span class='keys'>ubh</span></td>
		<td><span class='lang2' >ரோ</span><br/><span class='keys'>unh</span></td>
		<td><span class='lang2' >ரௌ</span><br/><span class='keys'>u}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ல</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >ல்</span><br/><span class='keys'>y;</span></td>
		<td><span class='lang2' >ல‍</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >லா</span><br/><span class='keys'>yh</span></td>
		<td><span class='lang2' >லி</span><br/><span class='keys'>yp</span></td>
		<td><span class='lang2' >லீ</span><br/><span class='keys'>yP</span></td>
		<td><span class='lang2' >லு</span><br/><span class='keys'>Y</span></td>
		<td><span class='lang2' >லூ</span><br/><span class='keys'>Yh</span></td>
		<td><span class='lang2' >லெ</span><br/><span class='keys'>yb</span></td>
		<td><span class='lang2' >லே</span><br/><span class='keys'>yn</span></td>
		<td><span class='lang2' >லை</span><br/><span class='keys'>yi</span></td>
		<td><span class='lang2' >லொ</span><br/><span class='keys'>ybh</span></td>
		<td><span class='lang2' >லோ</span><br/><span class='keys'>ynh</span></td>
		<td><span class='lang2' >லௌ</span><br/><span class='keys'>y}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >வ</span><br/><span class='keys'>t</span></td>
		<td><span class='lang2' >வ்</span><br/><span class='keys'>t;</span></td>
		<td><span class='lang2' >வ‍</span><br/><span class='keys'>t</span></td>
		<td><span class='lang2' >வா</span><br/><span class='keys'>th</span></td>
		<td><span class='lang2' >வி</span><br/><span class='keys'>tp</span></td>
		<td><span class='lang2' >வீ</span><br/><span class='keys'>tP</span></td>
		<td><span class='lang2' >வு</span><br/><span class='keys'>t[</span></td>
		<td><span class='lang2' >வூ</span><br/><span class='keys'>t{</span></td>
		<td><span class='lang2' >வெ</span><br/><span class='keys'>tb</span></td>
		<td><span class='lang2' >வே</span><br/><span class='keys'>tn</span></td>
		<td><span class='lang2' >வை</span><br/><span class='keys'>ti</span></td>
		<td><span class='lang2' >வொ</span><br/><span class='keys'>tbh</span></td>
		<td><span class='lang2' >வோ</span><br/><span class='keys'>tnh</span></td>
		<td><span class='lang2' >வௌ</span><br/><span class='keys'>t}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ழ</span><br/><span class='keys'>H</span></td>
		<td><span class='lang2' >ழ்</span><br/><span class='keys'>H;</span></td>
		<td><span class='lang2' >ழ‍</span><br/><span class='keys'>H</span></td>
		<td><span class='lang2' >ழா</span><br/><span class='keys'>Hh</span></td>
		<td><span class='lang2' >ழி</span><br/><span class='keys'>Hp</span></td>
		<td><span class='lang2' >ழீ</span><br/><span class='keys'>HP</span></td>
		<td><span class='lang2' >ழு</span><br/><span class='keys'>G</span></td>
		<td><span class='lang2' >ழூ</span><br/><span class='keys'>H{</span></td>
		<td><span class='lang2' >ழெ</span><br/><span class='keys'>Hb</span></td>
		<td><span class='lang2' >ழே</span><br/><span class='keys'>Hn</span></td>
		<td><span class='lang2' >ழை</span><br/><span class='keys'>Hi</span></td>
		<td><span class='lang2' >ழொ</span><br/><span class='keys'>Hbh</span></td>
		<td><span class='lang2' >ழோ</span><br/><span class='keys'>Hnh</span></td>
		<td><span class='lang2' >ழௌ</span><br/><span class='keys'>H}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ள</span><br/><span class='keys'>s</span></td>
		<td><span class='lang2' >ள்</span><br/><span class='keys'>s;</span></td>
		<td><span class='lang2' >ள‍</span><br/><span class='keys'>s</span></td>
		<td><span class='lang2' >ளா</span><br/><span class='keys'>sh</span></td>
		<td><span class='lang2' >ளி</span><br/><span class='keys'>sp</span></td>
		<td><span class='lang2' >ளீ</span><br/><span class='keys'>sP</span></td>
		<td><span class='lang2' >ளு</span><br/><span class='keys'>S</span></td>
		<td><span class='lang2' >ளூ</span><br/><span class='keys'>s{</span></td>
		<td><span class='lang2' >ளெ</span><br/><span class='keys'>sb</span></td>
		<td><span class='lang2' >ளே</span><br/><span class='keys'>sn</span></td>
		<td><span class='lang2' >ளை</span><br/><span class='keys'>si</span></td>
		<td><span class='lang2' >ளொ</span><br/><span class='keys'>sbh</span></td>
		<td><span class='lang2' >ளோ</span><br/><span class='keys'>snh</span></td>
		<td><span class='lang2' >ளௌ</span><br/><span class='keys'>s}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ற</span><br/><span class='keys'>w</span></td>
		<td><span class='lang2' >ற்</span><br/><span class='keys'>w;</span></td>
		<td><span class='lang2' >ற‍</span><br/><span class='keys'>w</span></td>
		<td><span class='lang2' >றா</span><br/><span class='keys'>wh</span></td>
		<td><span class='lang2' >றி</span><br/><span class='keys'>wp</span></td>
		<td><span class='lang2' >றீ</span><br/><span class='keys'>wP</span></td>
		<td><span class='lang2' >று</span><br/><span class='keys'>W</span></td>
		<td><span class='lang2' >றூ</span><br/><span class='keys'>Wh</span></td>
		<td><span class='lang2' >றெ</span><br/><span class='keys'>wb</span></td>
		<td><span class='lang2' >றே</span><br/><span class='keys'>wn</span></td>
		<td><span class='lang2' >றை</span><br/><span class='keys'>wi</span></td>
		<td><span class='lang2' >றொ</span><br/><span class='keys'>wbh</span></td>
		<td><span class='lang2' >றோ</span><br/><span class='keys'>wnh</span></td>
		<td><span class='lang2' >றௌ</span><br/><span class='keys'>w}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ன</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >ன்</span><br/><span class='keys'>d;</span></td>
		<td><span class='lang2' >ன‍</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >னா</span><br/><span class='keys'>dh</span></td>
		<td><span class='lang2' >னி</span><br/><span class='keys'>dp</span></td>
		<td><span class='lang2' >னீ</span><br/><span class='keys'>dP</span></td>
		<td><span class='lang2' >னு</span><br/><span class='keys'>D</span></td>
		<td><span class='lang2' >னூ</span><br/><span class='keys'>Dh</span></td>
		<td><span class='lang2' >னெ</span><br/><span class='keys'>db</span></td>
		<td><span class='lang2' >னே</span><br/><span class='keys'>dn</span></td>
		<td><span class='lang2' >னை</span><br/><span class='keys'>di</span></td>
		<td><span class='lang2' >னொ</span><br/><span class='keys'>dbh</span></td>
		<td><span class='lang2' >னோ</span><br/><span class='keys'>dnh</span></td>
		<td><span class='lang2' >னௌ</span><br/><span class='keys'>d}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=14>&nbsp;</td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=bottom>Grantha Consonants</td>
		<td colspan=13></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஜ</span><br/><span class='keys'>$</span></td>
		<td><span class='lang2' >ஜ்</span><br/><span class='keys'>$;</span></td>
		<td><span class='lang2' >ஜ‍</span><br/><span class='keys'>$</span></td>
		<td><span class='lang2' >ஜா</span><br/><span class='keys'>$h</span></td>
		<td><span class='lang2' >ஜி</span><br/><span class='keys'>$p</span></td>
		<td><span class='lang2' >ஜீ</span><br/><span class='keys'>$P</span></td>
		<td><span class='lang2' >ஜு</span><br/> </td>
		<td><span class='lang2' >ஜூ</span><br/> </td>
		<td><span class='lang2' >ஜெ</span><br/><span class='keys'>$b</span></td>
		<td><span class='lang2' >ஜே</span><br/><span class='keys'>$n</span></td>
		<td><span class='lang2' >ஜை</span><br/><span class='keys'>$i</span></td>
		<td><span class='lang2' >ஜொ</span><br/><span class='keys'>$bh</span></td>
		<td><span class='lang2' >ஜோ</span><br/><span class='keys'>$nh</span></td>
		<td><span class='lang2' >ஜௌ</span><br/><span class='keys'>$}</span></td>
		</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td style='background-color:#dedede'><span class='lang2' >ஷ</span><br/><span class='keys'>^</span></td>
		<td><span class='lang2' >ஷ்</span><br/><span class='keys'>^;</span></td>
		<td><span class='lang2' >ஷ‍</span><br/><span class='keys'>^</span></td>
		<td><span class='lang2' >ஷா</span><br/><span class='keys'>^h</span></td>
		<td><span class='lang2' >ஷி</span><br/><span class='keys'>^p</span></td>
		<td><span class='lang2' >ஷீ</span><br/><span class='keys'>^P</span></td>
		<td><span class='lang2' >ஷு</span><br/> </td>
		<td><span class='lang2' >ஷூ</span><br/> </td>
		<td><span class='lang2' >ஷெ</span><br/><span class='keys'>^b</span></td>
		<td><span class='lang2' >ஷே</span><br/><span class='keys'>^n</span></td>
		<td><span class='lang2' >ஷை</span><br/><span class='keys'>^i</span></td>
		<td><span class='lang2' >ஷொ</span><br/><span class='keys'>^bh</span></td>
		<td><span class='lang2' >ஷோ</span><br/><span class='keys'>^nh</span></td>
		<td><span class='lang2' >ஷௌ</span><br/><span class='keys'>^}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஸ</span><br/><span class='keys'>!</span></td>
		<td><span class='lang2' >ஸ்</span><br/><span class='keys'>!;</span></td>
		<td><span class='lang2' >ஸ‍</span><br/><span class='keys'>!</span></td>
		<td><span class='lang2' >ஸா</span><br/><span class='keys'>!h</span></td>
		<td><span class='lang2' >ஸி</span><br/><span class='keys'>!p</span></td>
		<td><span class='lang2' >ஸீ</span><br/><span class='keys'>!P</span></td>
		<td><span class='lang2' >ஸு</span><br/> </td>
		<td><span class='lang2' >ஸூ</span><br/> </td>
		<td><span class='lang2' >ஸெ</span><br/><span class='keys'>!b</span></td>
		<td><span class='lang2' >ஸே</span><br/><span class='keys'>!h</span></td>
		<td><span class='lang2' >ஸை</span><br/><span class='keys'>!i</span></td>
		<td><span class='lang2' >ஸொ</span><br/><span class='keys'>!bh</span></td>
		<td><span class='lang2' >ஸோ</span><br/><span class='keys'>!nh</span></td>
		<td><span class='lang2' >ஸௌ</span><br/><span class='keys'>!}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td style='background-color:#dedede'><span class='lang2' >ஹ</span><br/><span class='keys'>]</span></td>
		<td><span class='lang2' >ஹ்</span><br/><span class='keys'>];</span></td>
		<td><span class='lang2' >ஹ‍</span><br/><span class='keys'>]</span></td>
		<td><span class='lang2' >ஹா</span><br/><span class='keys'>]h</span></td>
		<td><span class='lang2' >ஹி</span><br/><span class='keys'>]p</span></td>
		<td><span class='lang2' >ஹீ</span><br/><span class='keys'>]P</span></td>
		<td><span class='lang2' >ஹு</span><br/> </td>
		<td><span class='lang2' >ஹூ</span><br/> </td>
		<td><span class='lang2' >ஹெ</span><br/><span class='keys'>]b</span></td>
		<td><span class='lang2' >ஹே</span><br/><span class='keys'>]n</span></td>
		<td><span class='lang2' >ஹை</span><br/><span class='keys'>]i</span></td>
		<td><span class='lang2' >ஹொ</span><br/><span class='keys'>]bh</span></td>
		<td><span class='lang2' >ஹோ</span><br/><span class='keys'>]nh</span></td>
		<td><span class='lang2' >ஹௌ</span><br/><span class='keys'>]}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >க்ஷ</span><br/><span class='keys'>B</span></td>
		<td><span class='lang2' >க்ஷ்</span><br/><span class='keys'>B;</span></td>
		<td><span class='lang2' >க்ஷ‍</span><br/><span class='keys'>B</span></td>
		<td><span class='lang2' >க்ஷா</span><br/><span class='keys'>Bh</span></td>
		<td><span class='lang2' >க்ஷி</span><br/><span class='keys'>Bp</span></td>
		<td><span class='lang2' >க்ஷீ</span><br/><span class='keys'>BP</span></td>
		<td><span class='lang2' >க்ஷு</span><br/> </td>
		<td><span class='lang2' >க்ஷூ</span><br/> </td>
		<td><span class='lang2' >க்ஷெ</span><br/><span class='keys'>Bb</span></td>
		<td><span class='lang2' >க்ஷே</span><br/><span class='keys'>Bn</span></td>
		<td><span class='lang2' >க்ஷை</span><br/><span class='keys'>Bi</span></td>
		<td><span class='lang2' >க்ஷொ</span><br/><span class='keys'>Bbh</span></td>
		<td><span class='lang2' >க்ஷோ</span><br/><span class='keys'>Bnh</span></td>
		<td><span class='lang2' >க்ஷௌ</span><br/><span class='keys'>B}</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=14>&nbsp;</td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top>Other Characters</td>
		<td><span class='lang2' >ஸ்ரீ</span><br/><span class='keys'>_</span></td>
		<td><span class='lang2' >ஃ</span><br/><span class='keys'>`</span></td>
		<td><span class='lang2' >௸</span><br/><span class='keys'>|</span></td>
		<td><span class='lang2' >,</span><br/><span class='keys'>.</span></td>
		<td><span class='lang2' >?</span><br/><span class='keys'>></span></td>
		<td><span class='lang2' >.</span><br/><span class='keys'>/</span></td>
		<td><span class='lang2' >-</span><br/><span class='keys'>?</span></td>
		<td><span class='lang2' >`</span><br/><span class='keys'>:</span></td>
		<td><span class='lang2' >'</span><br/><span class='keys'>~</span></td>
		<td><span class='lang2' >"</span><br/><span class='keys'>@</span></td>
		<td><span class='lang2' >%</span><br/><span class='keys'>#</span></td>
		<td><span class='lang2' >(</span><br/><span class='keys'>(</span></td>
		<td><span class='lang2' >)</span><br/><span class='keys'>)</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'></td>
		<td><span class='lang2' >/</span><br/><span class='keys'>-</span></td>
		<td><span class='lang2' >=</span><br/><span class='keys'>=</span></td>
		<td><span class='lang2' >+</span><br/><span class='keys'>+</span></td>
	</tr>
</table>



