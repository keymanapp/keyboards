<?php /*
  Name:             keyboard_ekwbamuni
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
  $pagename = 'சுரதா-பாமுனி | Suratha Bamini Keyboard Help';
  $pagetitle = $pagename;
  $style = '.lang2 {font-size:130%}';
  require_once('header.php');
?>


<br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Documentation</a><br/>
<a href="#Authorship">Authorship</a><br/>
<a href="#KeyboardChart">Keyboard Chart</a><br/>


<p>
This keyboard, usually known as the Bamini layout, is designed for the Tamil language. 
It is originally based on a Tamil typewriter keyboard, and is used particularly in 
Sri Lanka. The keyboard is designed for users who are familiar with both this layout 
and the Tamil script, as consonants and vowels are typed in written order, and is 
intended for use with a normal QWERTY (English) keyboard. </p>



<div id='Using'>
<h2>Using this Keyboard</h2>

<div id='osk'>
  <h3>Desktop Keyboard layout</h3>
</div>
		

<div id='Quickstart'>
<h3>Quickstart</h3>
		<!-- Basic instructions designed to get users up and running with typing -->

<p>This keyboard layout was designed for ease of typing.  Characters are arranged on the keyboard according to how frequently they are used.  Grantha letters, which are used for typing Sanskrit, are typed using the <span class='keys'>[S*]</span> key. 
Short and long vowels appear next to each other.  For example, <span class='highlightExample'>ஆ</span> (<span class='keys'>[Sm]</span> key) is above <span class='highlightExample'>அ</span> (<span class='keys'>m;</span> key) , and <span class='highlightExample'>ஓ</span> (<span class='keys'>[Sx]</span> key) is beside <span class='highlightExample'>ஒ</span> (<span class='keys'>x</span> key).  Characters which normally appear together are also close together on the keyboard.</p>

<p>Most of the characters used in Tamil are combinations of consonants and vowels, and these do not appear on the keyboard. Combined consonant-vowel characters are entered by typing the consonant, then the vowel.  To enter <span class='highlightExample'>ஙா</span>, which is a combination of <span class='highlightExample'>ங</span> and <span class='highlightExample'>ஆ</span>,
 type <span class='keys'>q</span> then <span class='keys'>h</span>, and the combinant character will automatically be displayed.  Pressing Backspace once will delete only the vowel component, so the character displayed on the screen will change back to <span class='highlightExample'>ங</span>, and change again if a different vowel is typed.</p>


</div>

<div id="Examples">
<h3>Examples</h3>
		<!-- Simple example(s) illustrating the notes in the Quickstart section above -->
	<table cellspacing=4 style='border-style:solid; border-width:1px; border-color:#8080FF; background-color:#E0E0FF; padding:4px'>
		<col width=100px />
		<col width=150px />
		<col width=150px />
		<col width=350px />
		</col>
		<tr style='color:#0000AF; font-weight:bold'>
			<td>Language</td>
			<td>Phrase</td>
			<td>Meaning</td>
			<td>Type the following keys</td>
		</tr>
		<tr style='color:#0000AF; font-weight:normal'>
			<td>Tamil</td>
			<td><span class='lang2' style='color:#0000FF'>தமிழ் அரிச்சுவடி</span></td>
			<td>"Tamil alphabet"</td>
			<td><span class='keys'>jkpo; mupr;[SR]tlp</td>
		</tr>
	</table>

</div>

<div id="Documentation">
<h3>Full Documentation</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->
	
<p>This keyboard uses a consonant-vowel order for text input, so the consonant character is always typed before the vowel, regardless of where (relative to the consonant) the vowel marker symbol appears.  As syllables are typed, the characters entered are automatically converted to the appropriate consonant-vowel combinant.  While only the combinant characters are displayed on screen, the consonant and vowel are both stored, so that pressing Backspace once after a combinant deletes only the vowel component.  This means it is necessary to press Backspace twice to delete a combinant character.  However, pressing the Delete key with the cursor in front of a combinant character removes the whole character with one keystroke.</p>

<p>The full keyboard layout consists of the twelve vowels <span class='lang2'>அ ஆ இ ஈ உ ஊ எ ஏ ஐ ஒ ஓ ஔ</span>, the eighteen consonants <span class='lang2'>க ங ச ஞ ட ண த ந ப ம ய ர ல வ ழ ள ற ன</span>, the five Grantha consonants <span class='lang2'>ஸ ஷ ஜ ஹ க்ஷ</span>, the SRii consonant <span class='lang2'>ஸ்ரீ</span>, and the Pulli <span class='lang2'>்</span> and Aytham <span class='lang2'>ஃ</span> marks.</p>

<h4>Pulli Marks and Vowels</h4>
<p>Because the consonants contain the implicit vowel <span class='lang2'>அ</span>, to produce a pure consonant it is necessary to add the Pulli mark <span class='lang2'>்</span> by typing a lower case <span class='keys'>;</span> immediately after the consonant.  </p>
<p>The first vowel <span class='lang2'>அ</span> is implicit in the consonants, so typing this vowel after a consonant will not display the vowel or change the consonant to a combinant.  However, this does de-link the consonant from the next keystroke, so that typing another vowel will result in that vowel being displayed independently, rather than combining with the consonant.  This also prevents the Pulli mark being entered.</p>
<p>In general, typing a vowel after anything other than a consonant produces an independent vowel.</p>


<h4>Keystroke Examples</h4>
<p>Note: for a complete table of characters and keystrokes, <a href="#KeyboardChart">click here</a>.</p>
<p>The following table gives specific examples of how to input characters based on the consonant <span class='highlightExample'>க</span>.  The Grantha consonants, which are entered with <span class='keys'>[S*]</span> key combinations, use the same input method.  Examples of these with the consonant <span class='highlightExample'>ஜ</span> are also given below.</p>
<br/>
<table>
	<col width=80 span=3 />
	<col width=100 />
	<col width=40 />
	<col width=80 span=3 />
	<col width=100>
	</col>
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
		<td class='lang2'>ஜ</td><td>்</td><td class='lang2'>ஜ்</td><td><span class='keys'>[[;</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>அ</td><td class='lang2'>க‍</td><td><span class='keys'>f</span></td>
		<td></td>
		<td></td><td class='lang2'>அ</td><td class='lang2'>ஜ‍</td><td><span class='keys'>[</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>கா</td><td><span class='keys'>fh</span></td>
		<td></td>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>ஜா</td><td><span class='keys'>[[h</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>இ</td><td class='lang2'>கி</td><td><span class='keys'>fp</span></td>
		<td></td>
		<td></td><td class='lang2'>இ</td><td class='lang2'>ஜி</td><td><span class='keys'>[[p</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>கீ</td><td><span class='keys'>f[SP]</span></td>
		<td></td>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>ஜீ</td><td><span class='keys'>[[[SP]</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>உ</td><td class='lang2'>கு</td><td><span class='keys'>[SF]</span></td>
		<td></td>
		<td></td><td class='lang2'>உ</td><td class='lang2'>ஜு</td><td><span class='keys'>[[-</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>கூ</td><td><span class='keys'>[S$]</span></td>
		<td></td>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>ஜூ</td><td><span class='keys'>[[--</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>எ</td><td class='lang2'>கெ</td><td><span class='keys'>nf</span></td>
		<td></td>
		<td></td><td class='lang2'>எ</td><td class='lang2'>ஜெ</td><td><span class='keys'>n[[</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>கே</td><td><span class='keys'>[SN]f</span></td>
		<td></td>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>ஜே</td><td><span class='keys'>[SN][[</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>கை</td><td><span class='keys'>if</span></td>
		<td></td>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>ஜை</td><td><span class='keys'>;[[</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>கொ</td><td><span class='keys'>nfh</span></td>
		<td></td>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>ஜொ</td><td><span class='keys'>n[[h</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>கோ</td><td><span class='keys'>[SN]fh</span></td>
		<td></td>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>ஜோ</td><td><span class='keys'>[SN][[h</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>கௌ</td><td><span class='keys'>nfs</span></td>
		<td></td>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>ஜௌ</td><td><span class='keys'>n[[s</span></td>
	</tr>

</table>

</div>



<div id="Authorship">
<h2>Authorship</h2>
<p>
This keyboard was created by Mugunth (mugunth@gmail.com), Umar (csd_one@yahoo.com) and K. Sethu (skhome@gmail.com).  For more information about keyboards produced by these developers, see <a href="http://thamiza.com">http://thamiza.com</a>.  Tavultesoft gratefully acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  Their effort assists in enabling people to communicate in their own language.
</p>

</div>
<div id="KeyboardChart">
<h2>Keyboard Reference Chart</h2>
<p>The following chart lists all the characters available with this keyboard.  Below each character are the keystrokes required to type it.</p>

<table border=0 cellspacing=2 cellpadding=1>
	<col width=76 style='text-align:center; background-color:#dedede'>
	<col span=13 width=55 style='text-align:center; background-color:#ffffff'>
	<!-- tr style='text-align: left; font-weight:bold; background-color:#ffffff'>
		<td></td>
		<td style='background-color:#dedede' colspan=13>Pulli Mark & Vowels</td>
	</tr -->
	<tr style='text-align:center; font-weight:normal; background-color:#dedede'>
		<td style='text-align:right; font-weight:bold; background-color:#dedede' valign=bottom>\<span style='text-decoration:underline'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vowels</span>&nbsp;<br/>Consonants\</td>
		<td><span class='lang2' >்</span><br/ ><span class='keys'>;</span></td>
		<td><span class='lang2' >அ</span><br/ ><span class='keys'>m</span></td>
		<td><span class='lang2' >ஆ</span><br/ ><span class='keys'>[SM]</span></td>
		<td><span class='lang2' >இ</span><br/ ><span class='keys'>,</span></td>
		<td><span class='lang2' >ஈ</span><br/ ><span class='keys'>[S,]</span></td>
		<td><span class='lang2' >உ</span><br/ ><span class='keys'>c</span></td>
		<td><span class='lang2' >ஊ</span><br/ ><span class='keys'>[SC]</span></td>
		<td><span class='lang2' >எ</span><br/ ><span class='keys'>v</span></td>
		<td><span class='lang2' >ஏ</span><br/ ><span class='keys'>[SV]</span></td>
		<td><span class='lang2' >ஐ</span><br/ ><span class='keys'>[SI]</span></td>
		<td><span class='lang2' >ஒ</span><br/ ><span class='keys'>x</span></td>
		<td><span class='lang2' >ஓ</span><br/ ><span class='keys'>[SX]</span></td>
		<td><span class='lang2' >ஔ</span><br/ ><span class='keys'>xs</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >க</span><br/ ><span class='keys'>f</span></td></td>
		<td><span class='lang2' >க்</span><br/ ><span class='keys'>f;</span></td></td>
		<td><span class='lang2' >க‍</span><br/ ><span class='keys'>f</span></td></td>
		<td><span class='lang2' >கா</span><br/ ><span class='keys'>fh</span></td></td>
		<td><span class='lang2' >கி</span><br/ ><span class='keys'>fp</span></td></td>
		<td><span class='lang2' >கீ</span><br/ ><span class='keys'>f[SP]</span></td></td>
		<td><span class='lang2' >கு</span><br/ ><span class='keys'>[SF]</span></td></td>
		<td><span class='lang2' >கூ</span><br/ ><span class='keys'>[S$]</span></td></td>
		<td><span class='lang2' >கெ</span><br/ ><span class='keys'>nf</span></td></td>
		<td><span class='lang2' >கே</span><br/ ><span class='keys'>[SN]f</span></td></td>
		<td><span class='lang2' >கை</span><br/ ><span class='keys'>if</span></td></td>
		<td><span class='lang2' >கொ</span><br/ ><span class='keys'>nfh</span></td></td>
		<td><span class='lang2' >கோ</span><br/ ><span class='keys'>[SN]fh</span></td></td>
		<td><span class='lang2' >கௌ</span><br/ ><span class='keys'>nfs</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ங</span><br/ ><span class='keys'>q</span></td></td>
		<td><span class='lang2' >ங்</span><br/ ><span class='keys'>q;</span></td></td>
		<td><span class='lang2' >ங‍</span><br/ ><span class='keys'>q</span></td></td>
		<td><span class='lang2' >ஙா</span><br/ ><span class='keys'>qh</span></td></td>
		<td><span class='lang2' >ஙி</span><br/ ><span class='keys'>qp</span></td></td>
		<td><span class='lang2' >ஙீ</span><br/ ><span class='keys'>q[SP]</span></td></td>
		<td><span class='lang2' >ஙு</span><br/ ><span class='keys'>q-</span></td></td>
		<td><span class='lang2' >ஙூ</span><br/ ><span class='keys'>q--</span></td></td>
		<td><span class='lang2' >ஙெ</span><br/ ><span class='keys'>nq</span></td></td>
		<td><span class='lang2' >ஙே</span><br/ ><span class='keys'>[SN]q</span></td></td>
		<td><span class='lang2' >ஙை</span><br/ ><span class='keys'>iq</span></td></td>
		<td><span class='lang2' >ஙொ</span><br/ ><span class='keys'>nqh</span></td></td>
		<td><span class='lang2' >ஙோ</span><br/ ><span class='keys'>[SN]qh</span></td></td>
		<td><span class='lang2' >ஙௌ</span><br/ ><span class='keys'>nqs</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ச</span><br/ ><span class='keys'>r</span></td></td>
		<td><span class='lang2' >ச்</span><br/ ><span class='keys'>r;</span></td></td>
		<td><span class='lang2' >ச‍</span><br/ ><span class='keys'>r</span></td></td>
		<td><span class='lang2' >சா</span><br/ ><span class='keys'>rh</span></td></td>
		<td><span class='lang2' >சி</span><br/ ><span class='keys'>rp</span></td></td>
		<td><span class='lang2' >சீ</span><br/ ><span class='keys'>r[SP]</span></td></td>
		<td><span class='lang2' >சு</span><br/ ><span class='keys'>[SR]</span></td></td>
		<td><span class='lang2' >சூ</span><br/ ><span class='keys'>[S#]</span></td></td>
		<td><span class='lang2' >செ</span><br/ ><span class='keys'>nr</span></td></td>
		<td><span class='lang2' >சே</span><br/ ><span class='keys'>[SN]r</span></td></td>
		<td><span class='lang2' >சை</span><br/ ><span class='keys'>ir</span></td></td>
		<td><span class='lang2' >சொ</span><br/ ><span class='keys'>nrh</span></td></td>
		<td><span class='lang2' >சோ</span><br/ ><span class='keys'>[SN]rh</span></td></td>
		<td><span class='lang2' >சௌ</span><br/ ><span class='keys'>nrs</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஞ</span><br/ ><span class='keys'>[SQ]</span></td></td>
		<td><span class='lang2' >ஞ்</span><br/ ><span class='keys'>[SQ];</span></td></td>
		<td><span class='lang2' >ஞ‍</span><br/ ><span class='keys'>[SQ]</span></td></td>
		<td><span class='lang2' >ஞா</span><br/ ><span class='keys'>[SQ]h</span></td></td>
		<td><span class='lang2' >ஞி</span><br/ ><span class='keys'>[SQ]p</span></td></td>
		<td><span class='lang2' >ஞீ</span><br/ ><span class='keys'>[SQ][SP]</span></td></td>
		<td><span class='lang2' >ஞு</span><br/ ><span class='keys'>[SQ][-]</span></td></td>
		<td><span class='lang2' >ஞூ</span><br/ ><span class='keys'>[SQ][-][-]</span></td></td>
		<td><span class='lang2' >ஞெ</span><br/ ><span class='keys'>n[SQ]</span></td></td>
		<td><span class='lang2' >ஞே</span><br/ ><span class='keys'>[SN][SQ]</span></td></td>
		<td><span class='lang2' >ஞை</span><br/ ><span class='keys'>i[SQ]</span></td></td>
		<td><span class='lang2' >ஞொ</span><br/ ><span class='keys'>n[SQ]h</span></td></td>
		<td><span class='lang2' >ஞோ</span><br/ ><span class='keys'>[SN][SQ]h</span></td></td>
		<td><span class='lang2' >ஞௌ</span><br/ ><span class='keys'>n[SQ]s</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ட</span><br/ ><span class='keys'>l</span></td></td>
		<td><span class='lang2' >ட்</span><br/ ><span class='keys'>l;</span></td></td>
		<td><span class='lang2' >ட‍</span><br/ ><span class='keys'>l</span></td></td>
		<td><span class='lang2' >டா</span><br/ ><span class='keys'>lh</span></td></td>
		<td><span class='lang2' >டி</span><br/ ><span class='keys'>lp</span></td></td>
		<td><span class='lang2' >டீ</span><br/ ><span class='keys'>l[SP]</span></td></td>
		<td><span class='lang2' >டு</span><br/ ><span class='keys'>[SL]</span></td></td>
		<td><span class='lang2' >டூ</span><br/ ><span class='keys'>[S^]</span></td></td>
		<td><span class='lang2' >டெ</span><br/ ><span class='keys'>nl</span></td></td>
		<td><span class='lang2' >டே</span><br/ ><span class='keys'>[SN]l</span></td></td>
		<td><span class='lang2' >டை</span><br/ ><span class='keys'>il</span></td></td>
		<td><span class='lang2' >டொ</span><br/ ><span class='keys'>nlh</span></td></td>
		<td><span class='lang2' >டோ</span><br/ ><span class='keys'>[SN]lh</span></td></td>
		<td><span class='lang2' >டௌ</span><br/ ><span class='keys'>nls</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ண</span><br/ ><span class='keys'>z</span></td></td>
		<td><span class='lang2' >ண்</span><br/ ><span class='keys'>z;</span></td></td>
		<td><span class='lang2' >ண‍</span><br/ ><span class='keys'>z</span></td></td>
		<td><span class='lang2' >ணா</span><br/ ><span class='keys'>zh</span></td></td>
		<td><span class='lang2' >ணி</span><br/ ><span class='keys'>zp</span></td></td>
		<td><span class='lang2' >ணீ</span><br/ ><span class='keys'>z[SP]</span></td></td>
		<td><span class='lang2' >ணு</span><br/ ><span class='keys'>[SZ]</span></td></td>
		<td><span class='lang2' >ணூ</span><br/ ><span class='keys'>[SZ]h</span></td></td>
		<td><span class='lang2' >ணெ</span><br/ ><span class='keys'>nz</span></td></td>
		<td><span class='lang2' >ணே</span><br/ ><span class='keys'>[SN]z</span></td></td>
		<td><span class='lang2' >ணை</span><br/ ><span class='keys'>iz</span></td></td>
		<td><span class='lang2' >ணொ</span><br/ ><span class='keys'>nzh</span></td></td>
		<td><span class='lang2' >ணோ</span><br/ ><span class='keys'>[SN]zh</span></td></td>
		<td><span class='lang2' >ணௌ</span><br/ ><span class='keys'>nzs</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >த</span><br/ ><span class='keys'>j</span></td></td>
		<td><span class='lang2' >த்</span><br/ ><span class='keys'>j;</span></td></td>
		<td><span class='lang2' >த‍</span><br/ ><span class='keys'>j</span></td></td>
		<td><span class='lang2' >தா</span><br/ ><span class='keys'>jh</span></td></td>
		<td><span class='lang2' >தி</span><br/ ><span class='keys'>jp</span></td></td>
		<td><span class='lang2' >தீ</span><br/ ><span class='keys'>j[SP]</span></td></td>
		<td><span class='lang2' >து</span><br/ ><span class='keys'>[SJ]</span></td></td>
		<td><span class='lang2' >தூ</span><br/ ><span class='keys'>[SJ]h</span></td></td>
		<td><span class='lang2' >தெ</span><br/ ><span class='keys'>nj</span></td></td>
		<td><span class='lang2' >தே</span><br/ ><span class='keys'>[SN]j</span></td></td>
		<td><span class='lang2' >தை</span><br/ ><span class='keys'>ij</span></td></td>
		<td><span class='lang2' >தொ</span><br/ ><span class='keys'>njh</span></td></td>
		<td><span class='lang2' >தோ</span><br/ ><span class='keys'>[SN]jh</span></td></td>
		<td><span class='lang2' >தௌ</span><br/ ><span class='keys'>njs</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ந</span><br/ ><span class='keys'>e</span></td></td>
		<td><span class='lang2' >ந்</span><br/ ><span class='keys'>e;</span></td></td>
		<td><span class='lang2' >ந‍</span><br/ ><span class='keys'>e</span></td></td>
		<td><span class='lang2' >நா</span><br/ ><span class='keys'>eh</span></td></td>
		<td><span class='lang2' >நி</span><br/ ><span class='keys'>ep</span></td></td>
		<td><span class='lang2' >நீ</span><br/ ><span class='keys'>e[SP]</span></td></td>
		<td><span class='lang2' >நு</span><br/ ><span class='keys'>[SE]</span></td></td>
		<td><span class='lang2' >நூ</span><br/ ><span class='keys'>[SE]h</span></td></td>
		<td><span class='lang2' >நெ</span><br/ ><span class='keys'>ne</span></td></td>
		<td><span class='lang2' >நே</span><br/ ><span class='keys'>[SN]e</span></td></td>
		<td><span class='lang2' >நை</span><br/ ><span class='keys'>ie</span></td></td>
		<td><span class='lang2' >நொ</span><br/ ><span class='keys'>neh</span></td></td>
		<td><span class='lang2' >நோ</span><br/ ><span class='keys'>[SN]eh</span></td></td>
		<td><span class='lang2' >நௌ</span><br/ ><span class='keys'>nes</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ப</span><br/ ><span class='keys'>g</span></td></td>
		<td><span class='lang2' >ப்</span><br/ ><span class='keys'>g;</span></td></td>
		<td><span class='lang2' >ப‍</span><br/ ><span class='keys'>g</span></td></td>
		<td><span class='lang2' >பா</span><br/ ><span class='keys'>gh</span></td></td>
		<td><span class='lang2' >பி</span><br/ ><span class='keys'>gp</span></td></td>
		<td><span class='lang2' >பீ</span><br/ ><span class='keys'>g[SP]</span></td></td>
		<td><span class='lang2' >பு</span><br/ ><span class='keys'>[SG]</span></td></td>
		<td><span class='lang2' >பூ</span><br/ ><span class='keys'>[SG]h</span></td></td>
		<td><span class='lang2' >பெ</span><br/ ><span class='keys'>ng</span></td></td>
		<td><span class='lang2' >பே</span><br/ ><span class='keys'>[SN]g</span></td></td>
		<td><span class='lang2' >பை</span><br/ ><span class='keys'>ig</span></td></td>
		<td><span class='lang2' >பொ</span><br/ ><span class='keys'>ngh</span></td></td>
		<td><span class='lang2' >போ</span><br/ ><span class='keys'>[SN]gh</span></td></td>
		<td><span class='lang2' >பௌ</span><br/ ><span class='keys'>ngs</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ம</span><br/ ><span class='keys'>k</span></td></td>
		<td><span class='lang2' >ம்</span><br/ ><span class='keys'>k;</span></td></td>
		<td><span class='lang2' >மா</span><br/ ><span class='keys'>k</span></td></td>
		<td><span class='lang2' >மா</span><br/ ><span class='keys'>kh</span></td></td>
		<td><span class='lang2' >மி</span><br/ ><span class='keys'>kp</span></td></td>
		<td><span class='lang2' >ம்மீ</span><br/ ><span class='keys'>k[SP]</span></td></td>
		<td><span class='lang2' >மு</span><br/ ><span class='keys'>[SK]</span></td></td>
		<td><span class='lang2' >மூ</span><br/ ><span class='keys'>[SK]h</span></td></td>
		<td><span class='lang2' >மெ</span><br/ ><span class='keys'>nk</span></td></td>
		<td><span class='lang2' >மே</span><br/ ><span class='keys'>[SN]k</span></td></td>
		<td><span class='lang2' >மை</span><br/ ><span class='keys'>ik</span></td></td>
		<td><span class='lang2' >மொ</span><br/ ><span class='keys'>nkh</span></td></td>
		<td><span class='lang2' >மோ</span><br/ ><span class='keys'>[SN]kh</span></td></td>
		<td><span class='lang2' >மௌ</span><br/ ><span class='keys'>nks</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ய</span><br/ ><span class='keys'>a</span></td></td>
		<td><span class='lang2' >ய்</span><br/ ><span class='keys'>a;</span></td></td>
		<td><span class='lang2' >ய‍</span><br/ ><span class='keys'>a</span></td></td>
		<td><span class='lang2' >யா</span><br/ ><span class='keys'>ah</span></td></td>
		<td><span class='lang2' >யி</span><br/ ><span class='keys'>ap</span></td></td>
		<td><span class='lang2' >யீ</span><br/ ><span class='keys'>a[SP]</span></td></td>
		<td><span class='lang2' >யு</span><br/ ><span class='keys'>[SA]</span></td></td>
		<td><span class='lang2' >யூ</span><br/ ><span class='keys'>[SA]h</span></td></td>
		<td><span class='lang2' >யெ</span><br/ ><span class='keys'>na</span></td></td>
		<td><span class='lang2' >யே</span><br/ ><span class='keys'>[SN]a</span></td></td>
		<td><span class='lang2' >யை</span><br/ ><span class='keys'>ia</span></td></td>
		<td><span class='lang2' >யொ</span><br/ ><span class='keys'>nah</span></td></td>
		<td><span class='lang2' >யோ</span><br/ ><span class='keys'>[SN]ah</span></td></td>
		<td><span class='lang2' >யௌ</span><br/ ><span class='keys'>nas</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ர</span><br/ ><span class='keys'>u</span></td></td>
		<td><span class='lang2' >ர்</span><br/ ><span class='keys'>u;</span></td></td>
		<td><span class='lang2' >ர‍</span><br/ ><span class='keys'>u</span></td></td>
		<td><span class='lang2' >ரா</span><br/ ><span class='keys'>uh</span></td></td>
		<td><span class='lang2' >ரி</span><br/ ><span class='keys'>up</span></td></td>
		<td><span class='lang2' >ரீ</span><br/ ><span class='keys'>u[SP]</span></td></td>
		<td><span class='lang2' >ரு</span><br/ ><span class='keys'>[SU]</span></td></td>
		<td><span class='lang2' >ரூ</span><br/ ><span class='keys'>[SU]h</span></td></td>
		<td><span class='lang2' >ரெ</span><br/ ><span class='keys'>nu</span></td></td>
		<td><span class='lang2' >ரே</span><br/ ><span class='keys'>[SN]u</span></td></td>
		<td><span class='lang2' >ரை</span><br/ ><span class='keys'>iu</span></td></td>
		<td><span class='lang2' >ரொ</span><br/ ><span class='keys'>nuh</span></td></td>
		<td><span class='lang2' >ரோ</span><br/ ><span class='keys'>[SN]uh</span></td></td>
		<td><span class='lang2' >ரௌ</span><br/ ><span class='keys'>nus</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ல</span><br/ ><span class='keys'>y</span></td></td>
		<td><span class='lang2' >ல்</span><br/ ><span class='keys'>y;</span></td></td>
		<td><span class='lang2' >ல‍</span><br/ ><span class='keys'>y</span></td></td>
		<td><span class='lang2' >லா</span><br/ ><span class='keys'>yh</span></td></td>
		<td><span class='lang2' >லி</span><br/ ><span class='keys'>yp</span></td></td>
		<td><span class='lang2' >லீ</span><br/ ><span class='keys'>y[SP]</span></td></td>
		<td><span class='lang2' >லு</span><br/ ><span class='keys'>[SY]</span></td></td>
		<td><span class='lang2' >லூ</span><br/ ><span class='keys'>[SY]h</span></td></td>
		<td><span class='lang2' >லெ</span><br/ ><span class='keys'>ny</span></td></td>
		<td><span class='lang2' >லே</span><br/ ><span class='keys'>[SN]y</span></td></td>
		<td><span class='lang2' >லை</span><br/ ><span class='keys'>iy</span></td></td>
		<td><span class='lang2' >லொ</span><br/ ><span class='keys'>nyh</span></td></td>
		<td><span class='lang2' >லோ</span><br/ ><span class='keys'>[SN]yh</span></td></td>
		<td><span class='lang2' >லௌ</span><br/ ><span class='keys'>nys</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >வ</span><br/ ><span class='keys'>t</span></td></td>
		<td><span class='lang2' >வ்</span><br/ ><span class='keys'>t;</span></td></td>
		<td><span class='lang2' >வ‍</span><br/ ><span class='keys'>t</span></td></td>
		<td><span class='lang2' >வா</span><br/ ><span class='keys'>th</span></td></td>
		<td><span class='lang2' >வி</span><br/ ><span class='keys'>tp</span></td></td>
		<td><span class='lang2' >வீ</span><br/ ><span class='keys'>t[SP]</span></td></td>
		<td><span class='lang2' >வு</span><br/ ><span class='keys'>[ST]</span></td></td>
		<td><span class='lang2' >வூ</span><br/ ><span class='keys'>[ST]h</span></td></td>
		<td><span class='lang2' >வெ</span><br/ ><span class='keys'>nt</span></td></td>
		<td><span class='lang2' >வே</span><br/ ><span class='keys'>[SN]t</span></td></td>
		<td><span class='lang2' >வை</span><br/ ><span class='keys'>it</span></td></td>
		<td><span class='lang2' >வொ</span><br/ ><span class='keys'>nth</span></td></td>
		<td><span class='lang2' >வோ</span><br/ ><span class='keys'>[SN]th</span></td></td>
		<td><span class='lang2' >வௌ</span><br/ ><span class='keys'>nts</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ழ</span><br/ ><span class='keys'>o</span></td></td>
		<td><span class='lang2' >ழ்</span><br/ ><span class='keys'>o;</span></td></td>
		<td><span class='lang2' >ழ‍</span><br/ ><span class='keys'>o</span></td></td>
		<td><span class='lang2' >ழா</span><br/ ><span class='keys'>oh</span></td></td>
		<td><span class='lang2' >ழி</span><br/ ><span class='keys'>op</span></td></td>
		<td><span class='lang2' >ழீ</span><br/ ><span class='keys'>o[SP]</span></td></td>
		<td><span class='lang2' >ழு</span><br/ ><span class='keys'>[SO]</span></td></td>
		<td><span class='lang2' >ழூ</span><br/ ><span class='keys'>[SO]h</span></td></td>
		<td><span class='lang2' >ழெ</span><br/ ><span class='keys'>no</span></td></td>
		<td><span class='lang2' >ழே</span><br/ ><span class='keys'>[SN]o</span></td></td>
		<td><span class='lang2' >ழை</span><br/ ><span class='keys'>io</span></td></td>
		<td><span class='lang2' >ழொ</span><br/ ><span class='keys'>noh</span></td></td>
		<td><span class='lang2' >ழோ</span><br/ ><span class='keys'>[SN]oh</span></td></td>
		<td><span class='lang2' >ழௌ</span><br/ ><span class='keys'>nos</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ள</span><br/ ><span class='keys'>s</span></td></td>
		<td><span class='lang2' >ள்</span><br/ ><span class='keys'>s;</span></td></td>
		<td><span class='lang2' >ள‍</span><br/ ><span class='keys'>s</span></td></td>
		<td><span class='lang2' >ளா</span><br/ ><span class='keys'>sh</span></td></td>
		<td><span class='lang2' >ளி</span><br/ ><span class='keys'>sp</span></td></td>
		<td><span class='lang2' >ளீ</span><br/ ><span class='keys'>s[SP]</span></td></td>
		<td><span class='lang2' >ளு</span><br/ ><span class='keys'>[SS]</span></td></td>
		<td><span class='lang2' >ளூ</span><br/ ><span class='keys'>[SS]h</span></td></td>
		<td><span class='lang2' >ளெ</span><br/ ><span class='keys'>ns</span></td></td>
		<td><span class='lang2' >ளே</span><br/ ><span class='keys'>[SN]s</span></td></td>
		<td><span class='lang2' >ளை</span><br/ ><span class='keys'>is</span></td></td>
		<td><span class='lang2' >ளொ</span><br/ ><span class='keys'>nsh</span></td></td>
		<td><span class='lang2' >ளோ</span><br/ ><span class='keys'>[SN]sh</span></td></td>
		<td><span class='lang2' >ளௌ</span><br/ ><span class='keys'>nss</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ற</span><br/ ><span class='keys'>w</span></td></td>
		<td><span class='lang2' >ற்</span><br/ ><span class='keys'>w;</span></td></td>
		<td><span class='lang2' >ற‍</span><br/ ><span class='keys'>w</span></td></td>
		<td><span class='lang2' >றா</span><br/ ><span class='keys'>wh</span></td></td>
		<td><span class='lang2' >றி</span><br/ ><span class='keys'>wp</span></td></td>
		<td><span class='lang2' >றீ</span><br/ ><span class='keys'>w[SP]</span></td></td>
		<td><span class='lang2' >று</span><br/ ><span class='keys'>[SW]</span></td></td>
		<td><span class='lang2' >றூ</span><br/ ><span class='keys'>[SW]h</span></td></td>
		<td><span class='lang2' >றெ</span><br/ ><span class='keys'>nw</span></td></td>
		<td><span class='lang2' >றே</span><br/ ><span class='keys'>[SN]w</span></td></td>
		<td><span class='lang2' >றை</span><br/ ><span class='keys'>iw</span></td></td>
		<td><span class='lang2' >றொ</span><br/ ><span class='keys'>nwh</span></td></td>
		<td><span class='lang2' >றோ</span><br/ ><span class='keys'>[SN]wh</span></td></td>
		<td><span class='lang2' >றௌ</span><br/ ><span class='keys'>nws</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ன</span><br/ ><span class='keys'>d</span></td></td>
		<td><span class='lang2' >ன்</span><br/ ><span class='keys'>d;</span></td></td>
		<td><span class='lang2' >ன‍</span><br/ ><span class='keys'>d</span></td></td>
		<td><span class='lang2' >னா</span><br/ ><span class='keys'>dh</span></td></td>
		<td><span class='lang2' >னி</span><br/ ><span class='keys'>dp</span></td></td>
		<td><span class='lang2' >னீ</span><br/ ><span class='keys'>d[SP]</span></td></td>
		<td><span class='lang2' >னு</span><br/ ><span class='keys'>[SD]</span></td></td>
		<td><span class='lang2' >னூ</span><br/ ><span class='keys'>[SD]h</span></td></td>
		<td><span class='lang2' >னெ</span><br/ ><span class='keys'>nd</span></td></td>
		<td><span class='lang2' >னே</span><br/ ><span class='keys'>[SN]d</span></td></td>
		<td><span class='lang2' >னை</span><br/ ><span class='keys'>id</span></td></td>
		<td><span class='lang2' >னொ</span><br/ ><span class='keys'>ndh</span></td></td>
		<td><span class='lang2' >னோ</span><br/ ><span class='keys'>[SN]dh</span></td></td>
		<td><span class='lang2' >னௌ</span><br/ ><span class='keys'>nds</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=14>&nbsp;</td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=bottom>Grantha Consonants</td>
		<td colspan=13><span class='lang2' ></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஜ</span><br/ ><span class='keys'>[[</span></td></td>
		<td><span class='lang2' >ஜ்</span><br/ ><span class='keys'>[[;</span></td></td>
		<td><span class='lang2' >ஜ‍</span><br/ ><span class='keys'>[[</span></td></td>
		<td><span class='lang2' >ஜா</span><br/ ><span class='keys'>[[h</span></td></td>
		<td><span class='lang2' >ஜி</span><br/ ><span class='keys'>[[p</span></td></td>
		<td><span class='lang2' >ஜீ</span><br/ ><span class='keys'>[[[SP]</span></td></td>
		<td><span class='lang2' >ஜு</span><br/ ><span class='keys'>[[[-]</span></td></td>
		<td><span class='lang2' >ஜூ</span><br/ ><span class='keys'>[[[-][-]</span></td></td>
		<td><span class='lang2' >ஜெ</span><br/ ><span class='keys'>n[[</span></td></td>
		<td><span class='lang2' >ஜே</span><br/ ><span class='keys'>[SN][[</span></td></td>
		<td><span class='lang2' >ஜை</span><br/ ><span class='keys'>i[[</span></td></td>
		<td><span class='lang2' >ஜொ</span><br/ ><span class='keys'>n[[h</span></td></td>
		<td><span class='lang2' >ஜோ</span><br/ ><span class='keys'>[SN][[h</span></td></td>
		<td><span class='lang2' >ஜௌ</span><br/ ><span class='keys'>n[[s</span></td></td>
		</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td style='background-color:#dedede'><span class='lang2' >ஷ</span><br/ ><span class='keys'>\</span></td></td>
		<td><span class='lang2' >ஷ்</span><br/ ><span class='keys'>\;</span></td></td>
		<td><span class='lang2' >ஷ‍</span><br/ ><span class='keys'>\</span></td></td>
		<td><span class='lang2' >ஷா</span><br/ ><span class='keys'>\h</span></td></td>
		<td><span class='lang2' >ஷி</span><br/ ><span class='keys'>\p</span></td></td>
		<td><span class='lang2' >ஷீ</span><br/ ><span class='keys'>\[SP]</span></td></td>
		<td><span class='lang2' >ஷு</span><br/ ><span class='keys'>\[-]</span></td></td>
		<td><span class='lang2' >ஷூ</span><br/ ><span class='keys'>\[-][-]</span></td></td>
		<td><span class='lang2' >ஷெ</span><br/ ><span class='keys'>n\</span></td></td>
		<td><span class='lang2' >ஷே</span><br/ ><span class='keys'>[SN]\</span></td></td>
		<td><span class='lang2' >ஷை</span><br/ ><span class='keys'>i\</span></td></td>
		<td><span class='lang2' >ஷொ</span><br/ ><span class='keys'>n\h</span></td></td>
		<td><span class='lang2' >ஷோ</span><br/ ><span class='keys'>[SN]\h</span></td></td>
		<td><span class='lang2' >ஷௌ</span><br/ ><span class='keys'>n\s</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee''>
		<td style='background-color:#dedede'><span class='lang2' >ஸ</span><br/ ><span class='keys'>]</span></td></td>
		<td><span class='lang2' >ஸ்</span><br/ ><span class='keys'>];</span></td></td>
		<td><span class='lang2' >ஸ‍</span><br/ ><span class='keys'>]</span></td></td>
		<td><span class='lang2' >ஸா</span><br/ ><span class='keys'>]h</span></td></td>
		<td><span class='lang2' >ஸி</span><br/ ><span class='keys'>]p</span></td></td>
		<td><span class='lang2' >ஸீ</span><br/ ><span class='keys'>][SP]</span></td></td>
		<td><span class='lang2' >ஸு</span><br/ ><span class='keys'>][-]</span></td></td>
		<td><span class='lang2' >ஸூ</span><br/ ><span class='keys'>][-][-]</span></td></td>
		<td><span class='lang2' >ஸெ</span><br/ ><span class='keys'>n]</span></td></td>
		<td><span class='lang2' >ஸே</span><br/ ><span class='keys'>[SN]]</span></td></td>
		<td><span class='lang2' >ஸை</span><br/ ><span class='keys'>i]</span></td></td>
		<td><span class='lang2' >ஸொ</span><br/ ><span class='keys'>n]h</span></td></td>
		<td><span class='lang2' >ஸோ</span><br/ ><span class='keys'>[SN]]h</span></td></td>
		<td><span class='lang2' >ஸௌ</span><br/ ><span class='keys'>n]s</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td style='background-color:#dedede'><span class='lang2' >ஹ</span><br/ ><span class='keys'>`</span></td></td>
		<td><span class='lang2' >ஹ்</span><br/ ><span class='keys'>`;</span></td></td>
		<td><span class='lang2' >ஹ‍</span><br/ ><span class='keys'>`</span></td></td>
		<td><span class='lang2' >ஹா</span><br/ ><span class='keys'>`h</span></td></td>
		<td><span class='lang2' >ஹி</span><br/ ><span class='keys'>`p</span></td></td>
		<td><span class='lang2' >ஹீ</span><br/ ><span class='keys'>`[SP]</span></td></td>
		<td><span class='lang2' >ஹு</span><br/ ><span class='keys'>`[-]</span></td></td>
		<td><span class='lang2' >ஹூ</span><br/ ><span class='keys'>`[-][-]</span></td></td>
		<td><span class='lang2' >ஹெ</span><br/ ><span class='keys'>n`</span></td></td>
		<td><span class='lang2' >ஹே</span><br/ ><span class='keys'>[SN]`</span></td></td>
		<td><span class='lang2' >ஹை</span><br/ ><span class='keys'>i`</span></td></td>
		<td><span class='lang2' >ஹொ</span><br/ ><span class='keys'>n`h</span></td></td>
		<td><span class='lang2' >ஹோ</span><br/ ><span class='keys'>[SN]`h</span></td></td>
		<td><span class='lang2' >ஹௌ</span><br/ ><span class='keys'>n`s</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee''>
		<td style='background-color:#dedede'><span class='lang2' >க்ஷ</span><br/ ><span class='keys'>f;\</span></td></td>
		<td><span class='lang2' >க்ஷ்</span><br/ ><span class='keys'>f;\;</span></td></td>
		<td><span class='lang2' >க்ஷ‍</span><br/ ><span class='keys'>f;\</span></td></td>
		<td><span class='lang2' >க்ஷா</span><br/ ><span class='keys'>f;\h</span></td></td>
		<td><span class='lang2' >க்ஷி</span><br/ ><span class='keys'>f;\p</span></td></td>
		<td><span class='lang2' >க்ஷீ</span><br/ ><span class='keys'>f;\[SP]</span></td></td>
		<td><span class='lang2' >க்ஷு</span><br/ ><span class='keys'>f;\-</span></td></td>
		<td><span class='lang2' >க்ஷூ</span><br/ ><span class='keys'>f;\--</span></td></td>
		<td><span class='lang2' >க்ஷெ</span><br/ ><span class='keys'>f;n\</span></td></td>
		<td><span class='lang2' >க்ஷே</span><br/ ><span class='keys'>f;[SN]\</span></td></td>
		<td><span class='lang2' >க்ஷை</span><br/ ><span class='keys'>f;i\</span></td></td>
		<td><span class='lang2' >க்ஷொ</span><br/ ><span class='keys'>f;n\h</span></td></td>
		<td><span class='lang2' >க்ஷோ</span><br/ ><span class='keys'>f;[SN]\h</span></td></td>
		<td><span class='lang2' >க்ஷௌ</span><br/ ><span class='keys'>f;n\s</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=14>&nbsp;</td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top>Other Characters</td>
		<td><span class='lang2' >ஃ</span><br/ ><span class='keys'>/</span></td></td>
		<td><span class='lang2' >.</span><br/ ><span class='keys'>.</span></td></td>
		<td><span class='lang2' >-</span><br/ ><span class='keys'>-</span></td></td>
		<td><span class='lang2' >!</span><br/ ><span class='keys'>[S!]</span></td></td>
		<td><span class='lang2' >;</span><br/ ><span class='keys'>[S2]</span></td></td>
		<td><span class='lang2' >(</span><br/ ><span class='keys'>[S(]</span></td></td>
		<td><span class='lang2' >)</span><br/ ><span class='keys'>[S)]</span></td></td>
		<td><span class='lang2' >'</span><br/ ><span class='keys'>[S|]</span></td></td>
		<td><span class='lang2' >'</span><br/ ><span class='keys'>'</span></td></td>
		<td><span class='lang2' >:</span><br/ ><span class='keys'>[S:]</span></td></td>
		<td><span class='lang2' >,</span><br/ ><span class='keys'>[S>]</span></td></td>
		<td><span class='lang2' >?</span><br/ ><span class='keys'>[S/]</span></td></td>
		<td><span class='lang2' >=</span><br/ ><span class='keys'>=</span></td></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top></td>
		<td><span class='lang2' >~</span><br/ ><span class='keys'>[S~]</span></td></td>
		<td><span class='lang2' >*</span><br/ ><span class='keys'>[S*]</span></td></td>
		<td><span class='lang2' >_</span><br/ ><span class='keys'>[S_]</span></td></td>
		<td><span class='lang2' >+</span><br/ ><span class='keys'>[S+]</span></td></td>
		<td><span class='lang2' >{</span><br/ ><span class='keys'>[S{}]</span></td></td>
		<td><span class='lang2' >}</span><br/ ><span class='keys'>[S}]</span></td></td>
		<td><span class='lang2' ></span><br/ ><span class='keys'></span></td></td>
		<td><span class='lang2' ></span><br/ ><span class='keys'></span></td></td>
		<td><span class='lang2' ></span><br/ ><span class='keys'></span></td></td>
		<td><span class='lang2' ></span><br/ ><span class='keys'></span></td></td>
		<td><span class='lang2' ></span><br/ ><span class='keys'></span></td></td>
		<td><span class='lang2' ></span><br/ ><span class='keys'></span></td></td>
		<td><span class='lang2' ></span><br/ ><span class='keys'></span></td></td>
	</tr> 
	</table>
</div>

</div>