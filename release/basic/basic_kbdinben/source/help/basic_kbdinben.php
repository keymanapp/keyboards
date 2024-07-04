<?php 
  $pagename = 'Bengali Basic Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>

<p>
This keyboard lets you type in Bengali (Bangla).  It is easy to use for people familiar with Bengali and the Inscript keyboard layout.  
It includes some characters which are not found on the Inscript keyboard.  It uses a normal English (QWERTY) keyboard.

</p>

<h1>Keyboard Layout</h1>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift leftctrl-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal them.</p>

<div id='osk-tablet' data-states='default shift numeric'>
</div>

<div id='Quickstart'>
<h3>Quickstart</h3>
		<!-- Basic instructions designed to get users up and running with typing -->
<p>This keyboard has separate keys for consonants and vowels.  Most Bengali characters have both consonant and vowel parts, and each part should be typed separately.  The consonant part is always typed before the vowel, no matter where the vowel part is written.
</p>

<p>
For example, typing <span class='keys'>F</span> will produce the vowel <span class='highlightExample lang2' style='font-size:200%'>ই</span>.  If this vowel is combined with a consonant, though, such as <span class='highlightExample lang2' style='font-size:200%'>কি</span>, the vowel part <span class='highlightExample lang2' style='font-size:200%'>ি</span> is typed with <span class='keys'>f</span> after the consonant has been typed.  If you press Backspace once, only the vowel part will be erased, and you can type a different vowel.
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
	
<p>The On Screen Keyboard shows the 35 normal consonants <span class='lang2' style='font-size:200%'>ক খ গ ঘ ঙ চ ছ জ ঝ ঞ ট ঠ ড ঢ ণ ত থ দ ধ ন প ফ ব ভ ম য় র ল শ ষ স হ য ড় ঢ়</span>, the vowels <span class='lang2' style='font-size:200%'>অ আ ই ঈ উ ঊ ঋ এ ঐ ও ঔ  ্ া ি ী ু ূ ৃ ে ৈ ো ৌ</span>, and the <span class='lang2' style='font-size:200%'>্ ত্ ং ঃ ঁ</span> marks.  To type numbers and some other characters which are used less often, use <span class='keys'>[RA*]</span>, <span class='keys'>[RSA*]</span> or <span class='keys'>[CS*]</span>.</p>

<p>Bengali vowels and consonants are usually combined, so when you type a consonant and a vowel part, they will be joined into one character.  If you use the arrow keys to move through the text, you only need to press an arrow key once to move past each character.  If you press Delete before (on the left of) a combined consonant and vowel, it will be erased completely, but if you press Backspace after a character, only the vowel part will be erased (even if the vowel part appears before the consonant).
</p>

<h4>Vowels and Consonants</h4>
<p>When you type consonants and vowel parts, you should always type the consonant part first, even when the vowel part appears on the left of the consonant.  If you type any of the independent vowels, they will not be combined with consonants.
</p>
<p>All the consonants naturally include the vowel sound <span class='highlightExample lang2' style='font-size:200%'>অ</span>, so if you want to produce a consonant with no vowel, you need to add the <span class='lang2' style='font-size:200%'>্</span> mark.  You can do this by typing <span class='keys'>d</span> right after typing a consonant.  After you have typed the <span class='lang2' style='font-size:200%'>্</span> mark, you cannot type a vowel to combine with that consonant.
</p>
<p>Bengali includes many combined consonants, and these are not shown on the keyboard.  To type a combined consonant, type the first consonant, then the <span class='lang2' style='font-size:200%'>্</span> mark, then the second consonant.  The computer will then combine the two consonants into a single combined character.  For example, typing <span class='keys'>kdk</span> produces the combined consonant <span class='highlightExample lang2' style='font-size:200%'>ক্ক</span>.
</p>

<h4>Keystroke Examples</h4>
<p>In the following table you can see examples of how to type the different vowels with the consonant <span class='highlightExample lang2' style='font-size:200%'>ক</span>.  For a table of all the normal Bengali characters and how to type them, <a href="chart.php">click here</a>.</p>
<br/>
<table>
	<col width=80 span=3 />
	<col width=150 />
	<tr style='text-align:center; font-weight:normal'>
		<td>Consonant</td><td>Vowel</td><td>Combined</td><td>Keystrokes</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'>ক</td><td class='lang2' style='font-size:200%'>্</td><td class='lang2' style='font-size:200%'>ক্</td><td><span class='keys'>kd</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>অ</td><td class='lang2' style='font-size:200%'>ক</td><td><span class='keys'>k</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>আ</td><td class='lang2' style='font-size:200%'>কা</td><td><span class='keys'>ke</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ই</td><td class='lang2' style='font-size:200%'>কি</td><td><span class='keys'>kf</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঈ</td><td class='lang2' style='font-size:200%'>কী</td><td><span class='keys'>kr</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>উ</td><td class='lang2' style='font-size:200%'>কু</td><td><span class='keys'>kg</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঊ</td><td class='lang2' style='font-size:200%'>কূ</td><td><span class='keys'>kt</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঋ</td><td class='lang2' style='font-size:200%'>কৃ</td><td><span class='keys'>k=</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>এ</td><td class='lang2' style='font-size:200%'>কে</td><td><span class='keys'>ks</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঐ</td><td class='lang2' style='font-size:200%'>কৈ</td><td><span class='keys'>kw</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ও</td><td class='lang2' style='font-size:200%'>কো</td><td><span class='keys'>ka</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ঔ</td><td class='lang2' style='font-size:200%'>কৌ</td><td><span class='keys'>kq</span></td>
	</tr>
	
</table>

</div>

<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>
<h4> Fonts</h4>
<p class='keymanweb'>If you see squares when you type, or the Bengali characters do not appear correctly, please read the <a href="https://help.keyman.com/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<h4>Problem Solving</h4>
<p>If a vowel does not combine with a consonant, make sure you have typed the consonant first.  Also check that you have not typed another vowel already, or a standalone vowel, or the <span class='lang2' style='font-size:200%'>্</span> mark.
</p>

</div>

<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>System Requirements</h2>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>

<p>© 2009-2019 SIL International</p>
