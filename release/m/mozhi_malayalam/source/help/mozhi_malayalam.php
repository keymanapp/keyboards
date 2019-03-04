<?php
  $pagename = 'Mozhi Malayalam Keyboard Help';
  $pagetitle = 'Mozhi Malayalam Keyboard Help';
  $pagestyle = <<<END
    .lang2,.languageExample {font-family:AnjaliOldLipi;}
    .lang2 {font-size:150%}
    table td{width: 180px;text-align: center;}
    table{SIL Hebrewbackground: #e3e3e3;}
    .col1 {width: 100px;}
    .col2, .col3 {width: 150px;}
    .col4 {width: 350px;}
END;
  require_once('header.php');
?>


<p style='margin:0px'>Keyboard &#169; 2006-2018 Raj Nair</p>

<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard uses the Mozhi layout to let you type in Malayalam.  It is a phonetic keyboard, based on the normal English (QWERTY) keyboard letters.  This makes the keyboard easy to use for anybody familiar with Malayalam, or with a normal keyboard.
</p>
<p>
    This keyboard has now been updated to support Unicode 5.1 encoding of Atomic Chilus.
</p>
</div>


<div id='Using'>
<h2>Using this Keyboard</h2>
</div>

<h3>Keyboard Layout</h3>
		<!-- On Screen Keyboard is automatically included here -->

<h4>Default state</h4>
<p><img src="mozhi_malayalamU_.png" alt="Mozhi Malayalam Keyboard: default state"></p>
<h4>Shift state</h4>
<p><img src="mozhi_malayalamU_S.png" alt="Mozhi Malayalam Keyboard: default state"></p>

<div id='Quickstart'>
<h3>Quickstart</h3>
		<!-- Basic instructions designed to get users up and running with typing -->
<p>The Mozhi keyboard layout was designed to make it easy to type in Malayalam.  The characters are arranged according to the closest English consonants and vowels.  Most Malayalam characters have both consonant and vowel parts, and each part should be typed separately.  The consonant part is always typed before the vowel, no matter where the vowel part is written.
</p>

<p>
For example, typing <kbd>i</kbd> will produce the vowel <span class='highlightExample lang2' style='font-size:200%'>ഇ</span>.  If the <kbd>i</kbd> key is typed after a consonant, though, the vowel will be combined with the consonant.  For example, typing <kbd>ki</kbd> produces <span class='highlightExample lang2' style='font-size:200%'>കി</span>.  If you press Backspace once, only the vowel part will be erased, and you can type a different vowel.
</p>


</div>

<div id="Examples">
<h3>Examples</h3>
		<!-- Simple example(s) illustrating the notes in the Quickstart section above -->

	<table style='border-style:solid; border-width:1px; border-color:#8080FF; background-color:#E0E0FF; padding:4px'>
		<col class="col1" />
		<col class="col2" />
		<col class="col3" />
		<col class="col4" />

		<tr style='color:#0000AF; font-weight:bold'>
			<td>Language</td>
			<td>Phrase</td>
			<td>Meaning</td>
			<td>Type the following keys</td>
		</tr>
		<tr style='color:#0000AF; font-weight:normal'>
			<td>Malayalam</td>
			<td><span class='lang2' style='color:#0000FF; font-size:120%'>മലയാളം</span></td>
			<td>"Malayam language"</td>
			<td><kbd>m</kbd><kbd>a</kbd><kbd>l</kbd><kbd>a</kbd><kbd>y</kbd><kbd>a</kbd><kbd>a</kbd><kbd>L</kbd><kbd>a</kbd><kbd>m</kbd></td>
		</tr>
	</table>
</div>

<div id="Documentation">
<h3>Keyboard Details</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->

<p>The On Screen Keyboard shows the 35 normal consonants <span class='lang2' style='font-size:200%'>ക ഖ ഗ ഘ ങ ച ഛ ജ ഝ ഞ ട ഠ ഡ ഢ ണ ത ഥ ദ ധ ന പ ഫ ബ ഭ മ യ ര ല വ ശ ഷ സ ഹ ള ഴ റ</span>, the vowels <span class='lang2' style='font-size:200%'>അ ആ ഇ ഈ ഉ ഊ ഋ എ ഏ ഐ ഒ ഓ ഔ</span>, and the <span class='lang2' style='font-size:200%'>്</span> mark.  There are also numbers and punctuation marks.</p>

<p>Malayalam vowels and consonants are usually combined, so when you type a consonant and a vowel part, they will be joined into one character.  If you use the arrow keys to move through the text, you only need to press an arrow key once to move past each character.  If you press Delete before (on the left of) a combined consonant and vowel, it will be erased completely, but if you press Backspace after a character, only the vowel part will be erased (even if the vowel part appears before the consonant).
</p>

<h4>Vowels and Consonants</h4>
<p>When you type consonants and vowel parts, you should always type the consonant part first, even when the vowel part appears on the left of the consonant.  If you type any of the independent vowels, they will not be combined with consonants.  If you want to type just the vowel part, without a consonant, type <kbd>@</kbd>, then the vowel.  For example, typing <kbd>e</kbd> produces <span class='lang2' style='font-size:200%'>എ</span>, while typing <kbd>@e</kbd> produces <span class='lang2' style='font-size:200%'>െ</span>.
</p>
<p>In Malayalam writing, all the consonants naturally include the vowel sound <span class='highlightExample lang2' style='font-size:200%'>അ</span>.  If you want to write a consonant with no vowel, you need to add the <span class='lang2' style='font-size:200%'>്</span> mark.  With the Mozhi keyboard, this mark is added automatically every time you type a consonant.  You can also add the mark by typing <kbd>~</kbd> right after typing a consonant.  After you have typed the <span class='lang2' style='font-size:200%'>്</span> mark, you cannot type a vowel to combine with that consonant.
</p>
<p>Malayalam includes many combined consonants, and these are not on the keyboard.  To type a combined consonant, type the first consonant, then the second consonant, and then a vowel.  The computer will then combine the two consonants into a single combined character.  For example, typing <span class='keys'>kka</span> produces the combined consonant <span class='highlightExample lang2' style='font-size:200%'>ക്ക</span>.
</p>

<h4>Keystroke Examples</h4>
<p>In the following table you can see examples of how to type the different vowels with the consonant <span class='highlightExample lang2' style='font-size:200%'>ക</span>.</p>
<br/>
<table>
	<col style="width:80px" span=3 />
	<col class="col2" />
	<tr style='text-align:center; font-weight:normal'>
		<td>Consonant</td><td>Vowel</td><td>Combined</td><td>Keystrokes</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'>ക</td><td class='lang2' style='font-size:200%'>്</td><td class='lang2' style='font-size:200%'>ക്</td><td><span class='keys'>k</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>അ</td><td class='lang2' style='font-size:200%'>ക</td><td><span class='keys'>ka</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ആ</td><td class='lang2' style='font-size:200%'>കാ</td><td><span class='keys'>kA</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഇ</td><td class='lang2' style='font-size:200%'>കി</td><td><span class='keys'>ki</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഈ</td><td class='lang2' style='font-size:200%'>കീ</td><td><span class='keys'>kI</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഉ</td><td class='lang2' style='font-size:200%'>കു</td><td><span class='keys'>ku</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഊ</td><td class='lang2' style='font-size:200%'>കൂ</td><td><span class='keys'>kU</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഋ</td><td class='lang2' style='font-size:200%'>കൃ</td><td><span class='keys'>kr^</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>എ</td><td class='lang2' style='font-size:200%'>കെ</td><td><span class='keys'>ke</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഏ</td><td class='lang2' style='font-size:200%'>കേ</td><td><span class='keys'>kE</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഐ</td><td class='lang2' style='font-size:200%'>കൈ</td><td><span class='keys'>kai</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഒ</td><td class='lang2' style='font-size:200%'>കൊ</td><td><span class='keys'>ko</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഓ</td><td class='lang2' style='font-size:200%'>കോ</td><td><span class='keys'>kO</span></td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2' style='font-size:200%'></td><td class='lang2' style='font-size:200%'>ഔ</td><td class='lang2' style='font-size:200%'>കൌ</td><td><span class='keys'>kau</span></td>
	</tr>

</table>

</div>


<div id="KeyboardChart">
<h2>Keyboard Reference Chart</h2>
<p>The following chart lists all the characters available with this keyboard.  Below each character are the keys used to type it.
<br/>Because Malayalam includes hundreds of combined consonants, these are not shown on this chart.  You can type some combined consonants by typing the two consonants with no vowel.  Other combined consonants are on the keyboard (see the bottom of this chart).</p>

<table border=0 cellspacing=2 cellpadding=1>
	<col width=65 style='text-align:center; background-color:#dedede' />
	<col span=16 width=65 style='text-align:center; background-color:#ffffff' />

	<tr style='text-align:center; font-weight:normal; background-color:#dedede'>
		<td style='text-align:right; font-weight:bold; background-color:#dedede' valign=bottom>\<span style='text-decoration:underline'>&nbsp;Vowels</span>&nbsp;<br/>C'nants\</td>
		<td><span class='lang2' >്</span><br/><span class='keys'>~</span></td>
		<td><span class='lang2' >അ</span><br/><span class='keys'>a</span></td>
		<td><span class='lang2' >ആ</span><br/><span class='keys'>A</span></td>
		<td><span class='lang2' >ഇ</span><br/><span class='keys'>i</span></td>
		<td><span class='lang2' >ഈ</span><br/><span class='keys'>I</span></td>
		<td><span class='lang2' >ഉ</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >ഊ</span><br/><span class='keys'>U</span></td>
		<td><span class='lang2' >ഋ</span><br/><span class='keys'>r^</span></td>
		<td><span class='lang2' >എ</span><br/><span class='keys'>e</span></td>
		<td><span class='lang2' >ഏ</span><br/><span class='keys'>E</span></td>
		<td><span class='lang2' >ഐ</span><br/><span class='keys'>ai</span></td>
		<td><span class='lang2' >ഒ</span><br/><span class='keys'>o</span></td>
		<td><span class='lang2' >ഓ</span><br/><span class='keys'>O</span></td>
		<td><span class='lang2' >ഔ</span><br/><span class='keys'>au</span></td>
		<td><span class='lang2' >ം</span><br/><span class='keys'>am</span></td>
		<td><span class='lang2' >ഃ</span><br/><span class='keys'>H</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ക</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >ക്</span><br/><span class='keys'>k~</span></td>
		<td><span class='lang2' >ക</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >കാ</span><br/><span class='keys'>kA</span></td>
		<td><span class='lang2' >കി</span><br/><span class='keys'>ki</span></td>
		<td><span class='lang2' >കീ</span><br/><span class='keys'>kI</span></td>
		<td><span class='lang2' >കു</span><br/><span class='keys'>ku</span></td>
		<td><span class='lang2' >കൂ</span><br/><span class='keys'>kU</span></td>
		<td><span class='lang2' >കൃ</span><br/><span class='keys'>kr^</span></td>
		<td><span class='lang2' >കെ</span><br/><span class='keys'>ke</span></td>
		<td><span class='lang2' >കേ</span><br/><span class='keys'>kE</span></td>
		<td><span class='lang2' >കൈ</span><br/><span class='keys'>kai</span></td>
		<td><span class='lang2' >കൊ</span><br/><span class='keys'>ko</span></td>
		<td><span class='lang2' >കോ</span><br/><span class='keys'>kO</span></td>
		<td><span class='lang2' >കൌ</span><br/><span class='keys'>kau</span></td>
		<td><span class='lang2' >കം</span><br/><span class='keys'>kam</span></td>
		<td><span class='lang2' >കഃ</span><br/><span class='keys'>kaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഖ</span><br/><span class='keys'>kh</span></td>
		<td><span class='lang2' >ഖ്</span><br/><span class='keys'>kh~</span></td>
		<td><span class='lang2' >ഖ</span><br/><span class='keys'>kh</span></td>
		<td><span class='lang2' >ഖാ</span><br/><span class='keys'>khA</span></td>
		<td><span class='lang2' >ഖി</span><br/><span class='keys'>khi</span></td>
		<td><span class='lang2' >ഖീ</span><br/><span class='keys'>khI</span></td>
		<td><span class='lang2' >ഖു</span><br/><span class='keys'>khu</span></td>
		<td><span class='lang2' >ഖൂ</span><br/><span class='keys'>khU</span></td>
		<td><span class='lang2' >ഖൃ</span><br/><span class='keys'>khr^</span></td>
		<td><span class='lang2' >ഖെ</span><br/><span class='keys'>khe</span></td>
		<td><span class='lang2' >ഖേ</span><br/><span class='keys'>khE</span></td>
		<td><span class='lang2' >ഖൈ</span><br/><span class='keys'>khai</span></td>
		<td><span class='lang2' >ഖൊ</span><br/><span class='keys'>kho</span></td>
		<td><span class='lang2' >ഖോ</span><br/><span class='keys'>khO</span></td>
		<td><span class='lang2' >ഖൌ</span><br/><span class='keys'>khau</span></td>
		<td><span class='lang2' >ഖം</span><br/><span class='keys'>kham</span></td>
		<td><span class='lang2' >ഖഃ</span><br/><span class='keys'>khaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഗ</span><br/><span class='keys'>g</span></td>
		<td><span class='lang2' >ഗ്</span><br/><span class='keys'>g~</span></td>
		<td><span class='lang2' >ഗ</span><br/><span class='keys'>g</span></td>
		<td><span class='lang2' >ഗാ</span><br/><span class='keys'>gA</span></td>
		<td><span class='lang2' >ഗി</span><br/><span class='keys'>gi</span></td>
		<td><span class='lang2' >ഗീ</span><br/><span class='keys'>gI</span></td>
		<td><span class='lang2' >ഗു</span><br/><span class='keys'>gu</span></td>
		<td><span class='lang2' >ഗൂ</span><br/><span class='keys'>gU</span></td>
		<td><span class='lang2' >ഗൃ</span><br/><span class='keys'>gr^</span></td>
		<td><span class='lang2' >ഗെ</span><br/><span class='keys'>ge</span></td>
		<td><span class='lang2' >ഗേ</span><br/><span class='keys'>gE</span></td>
		<td><span class='lang2' >ഗൈ</span><br/><span class='keys'>gai</span></td>
		<td><span class='lang2' >ഗൊ</span><br/><span class='keys'>go</span></td>
		<td><span class='lang2' >ഗോ</span><br/><span class='keys'>gO</span></td>
		<td><span class='lang2' >ഗൌ</span><br/><span class='keys'>gau</span></td>
		<td><span class='lang2' >ഗം</span><br/><span class='keys'>gam</span></td>
		<td><span class='lang2' >ഗഃ</span><br/><span class='keys'>gaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഘ</span><br/><span class='keys'>gh</span></td>
		<td><span class='lang2' >ഘ്</span><br/><span class='keys'>gh~</span></td>
		<td><span class='lang2' >ഘ</span><br/><span class='keys'>gh</span></td>
		<td><span class='lang2' >ഘാ</span><br/><span class='keys'>ghA</span></td>
		<td><span class='lang2' >ഘി</span><br/><span class='keys'>ghi</span></td>
		<td><span class='lang2' >ഘീ</span><br/><span class='keys'>ghI</span></td>
		<td><span class='lang2' >ഘു</span><br/><span class='keys'>ghu</span></td>
		<td><span class='lang2' >ഘൂ</span><br/><span class='keys'>ghU</span></td>
		<td><span class='lang2' >ഘൃ</span><br/><span class='keys'>ghr^</span></td>
		<td><span class='lang2' >ഘെ</span><br/><span class='keys'>ghe</span></td>
		<td><span class='lang2' >ഘേ</span><br/><span class='keys'>ghE</span></td>
		<td><span class='lang2' >ഘൈ</span><br/><span class='keys'>ghai</span></td>
		<td><span class='lang2' >ഘൊ</span><br/><span class='keys'>gho</span></td>
		<td><span class='lang2' >ഘോ</span><br/><span class='keys'>ghO</span></td>
		<td><span class='lang2' >ഘൌ</span><br/><span class='keys'>ghau</span></td>
		<td><span class='lang2' >ഘം</span><br/><span class='keys'>gham</span></td>
		<td><span class='lang2' >ഘഃ</span><br/><span class='keys'>ghaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ങ</span><br/><span class='keys'>ng</span></td>
		<td><span class='lang2' >ങ്</span><br/><span class='keys'>ng~</span></td>
		<td><span class='lang2' >ങ</span><br/><span class='keys'>ng</span></td>
		<td><span class='lang2' >ങാ</span><br/><span class='keys'>ngA</span></td>
		<td><span class='lang2' >ങി</span><br/><span class='keys'>ngi</span></td>
		<td><span class='lang2' >ങീ</span><br/><span class='keys'>ngI</span></td>
		<td><span class='lang2' >ങു</span><br/><span class='keys'>ngu</span></td>
		<td><span class='lang2' >ങൂ</span><br/><span class='keys'>ngU</span></td>
		<td><span class='lang2' >ങൃ</span><br/><span class='keys'>ngr^</span></td>
		<td><span class='lang2' >ങെ</span><br/><span class='keys'>nge</span></td>
		<td><span class='lang2' >ങേ</span><br/><span class='keys'>ngE</span></td>
		<td><span class='lang2' >ങൈ</span><br/><span class='keys'>ngai</span></td>
		<td><span class='lang2' >ങൊ</span><br/><span class='keys'>ngo</span></td>
		<td><span class='lang2' >ങോ</span><br/><span class='keys'>ngO</span></td>
		<td><span class='lang2' >ങൌ</span><br/><span class='keys'>ngau</span></td>
		<td><span class='lang2' >ങം</span><br/><span class='keys'>ngam</span></td>
		<td><span class='lang2' >ങഃ</span><br/><span class='keys'>ngaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ച</span><br/><span class='keys'>ch</span></td>
		<td><span class='lang2' >ച്</span><br/><span class='keys'>ch~</span></td>
		<td><span class='lang2' >ച</span><br/><span class='keys'>ch</span></td>
		<td><span class='lang2' >ചാ</span><br/><span class='keys'>chA</span></td>
		<td><span class='lang2' >ചി</span><br/><span class='keys'>chi</span></td>
		<td><span class='lang2' >ചീ</span><br/><span class='keys'>chI</span></td>
		<td><span class='lang2' >ചു</span><br/><span class='keys'>chu</span></td>
		<td><span class='lang2' >ചൂ</span><br/><span class='keys'>chU</span></td>
		<td><span class='lang2' >ചൃ</span><br/><span class='keys'>chr^</span></td>
		<td><span class='lang2' >ചെ</span><br/><span class='keys'>che</span></td>
		<td><span class='lang2' >ചേ</span><br/><span class='keys'>chE</span></td>
		<td><span class='lang2' >ചൈ</span><br/><span class='keys'>chai</span></td>
		<td><span class='lang2' >ചൊ</span><br/><span class='keys'>cho</span></td>
		<td><span class='lang2' >ചോ</span><br/><span class='keys'>chO</span></td>
		<td><span class='lang2' >ചൌ</span><br/><span class='keys'>chau</span></td>
		<td><span class='lang2' >ചം</span><br/><span class='keys'>cham</span></td>
		<td><span class='lang2' >ചഃ</span><br/><span class='keys'>chaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഛ</span><br/><span class='keys'>chh</span></td>
		<td><span class='lang2' >ഛ്</span><br/><span class='keys'>chh~</span></td>
		<td><span class='lang2' >ഛ</span><br/><span class='keys'>chh</span></td>
		<td><span class='lang2' >ഛാ</span><br/><span class='keys'>chhA</span></td>
		<td><span class='lang2' >ഛി</span><br/><span class='keys'>chhi</span></td>
		<td><span class='lang2' >ഛീ</span><br/><span class='keys'>chhI</span></td>
		<td><span class='lang2' >ഛു</span><br/><span class='keys'>chhu</span></td>
		<td><span class='lang2' >ഛൂ</span><br/><span class='keys'>chhU</span></td>
		<td><span class='lang2' >ഛൃ</span><br/><span class='keys'>chhr^</span></td>
		<td><span class='lang2' >ഛെ</span><br/><span class='keys'>chhe</span></td>
		<td><span class='lang2' >ഛേ</span><br/><span class='keys'>chhE</span></td>
		<td><span class='lang2' >ഛൈ</span><br/><span class='keys'>chhai</span></td>
		<td><span class='lang2' >ഛൊ</span><br/><span class='keys'>chho</span></td>
		<td><span class='lang2' >ഛോ</span><br/><span class='keys'>chhO</span></td>
		<td><span class='lang2' >ഛൌ</span><br/><span class='keys'>chhau</span></td>
		<td><span class='lang2' >ഛം</span><br/><span class='keys'>chham</span></td>
		<td><span class='lang2' >ഛഃ</span><br/><span class='keys'>chhaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ജ</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >ജ്</span><br/><span class='keys'>j~</span></td>
		<td><span class='lang2' >ജ</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >ജാ</span><br/><span class='keys'>jA</span></td>
		<td><span class='lang2' >ജി</span><br/><span class='keys'>ji</span></td>
		<td><span class='lang2' >ജീ</span><br/><span class='keys'>jI</span></td>
		<td><span class='lang2' >ജു</span><br/><span class='keys'>ju</span></td>
		<td><span class='lang2' >ജൂ</span><br/><span class='keys'>jU</span></td>
		<td><span class='lang2' >ജൃ</span><br/><span class='keys'>jr^</span></td>
		<td><span class='lang2' >ജെ</span><br/><span class='keys'>je</span></td>
		<td><span class='lang2' >ജേ</span><br/><span class='keys'>jE</span></td>
		<td><span class='lang2' >ജൈ</span><br/><span class='keys'>jai</span></td>
		<td><span class='lang2' >ജൊ</span><br/><span class='keys'>jo</span></td>
		<td><span class='lang2' >ജോ</span><br/><span class='keys'>jO</span></td>
		<td><span class='lang2' >ജൌ</span><br/><span class='keys'>jau</span></td>
		<td><span class='lang2' >ജം</span><br/><span class='keys'>jam</span></td>
		<td><span class='lang2' >ജഃ</span><br/><span class='keys'>jaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഝ</span><br/><span class='keys'>jh</span></td>
		<td><span class='lang2' >ഝ്</span><br/><span class='keys'>jh~</span></td>
		<td><span class='lang2' >ഝ</span><br/><span class='keys'>jh</span></td>
		<td><span class='lang2' >ഝാ</span><br/><span class='keys'>jhA</span></td>
		<td><span class='lang2' >ഝി</span><br/><span class='keys'>jhi</span></td>
		<td><span class='lang2' >ഝീ</span><br/><span class='keys'>jhI</span></td>
		<td><span class='lang2' >ഝു</span><br/><span class='keys'>jhu</span></td>
		<td><span class='lang2' >ഝൂ</span><br/><span class='keys'>jhU</span></td>
		<td><span class='lang2' >ഝൃ</span><br/><span class='keys'>jhr^</span></td>
		<td><span class='lang2' >ഝെ</span><br/><span class='keys'>jhe</span></td>
		<td><span class='lang2' >ഝേ</span><br/><span class='keys'>jhE</span></td>
		<td><span class='lang2' >ഝൈ</span><br/><span class='keys'>jhai</span></td>
		<td><span class='lang2' >ഝൊ</span><br/><span class='keys'>jho</span></td>
		<td><span class='lang2' >ഝോ</span><br/><span class='keys'>jhO</span></td>
		<td><span class='lang2' >ഝൌ</span><br/><span class='keys'>jhau</span></td>
		<td><span class='lang2' >ഝം</span><br/><span class='keys'>jham</span></td>
		<td><span class='lang2' >ഝഃ</span><br/><span class='keys'>jhaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഞ</span><br/><span class='keys'>nj</span></td>
		<td><span class='lang2' >ഞ്</span><br/><span class='keys'>nj~</span></td>
		<td><span class='lang2' >ഞ</span><br/><span class='keys'>nj</span></td>
		<td><span class='lang2' >ഞാ</span><br/><span class='keys'>njA</span></td>
		<td><span class='lang2' >ഞി</span><br/><span class='keys'>nji</span></td>
		<td><span class='lang2' >ഞീ</span><br/><span class='keys'>njI</span></td>
		<td><span class='lang2' >ഞു</span><br/><span class='keys'>nju</span></td>
		<td><span class='lang2' >ഞൂ</span><br/><span class='keys'>njU</span></td>
		<td><span class='lang2' >ഞൃ</span><br/><span class='keys'>njr^</span></td>
		<td><span class='lang2' >ഞെ</span><br/><span class='keys'>nje</span></td>
		<td><span class='lang2' >ഞേ</span><br/><span class='keys'>njE</span></td>
		<td><span class='lang2' >ഞൈ</span><br/><span class='keys'>njai</span></td>
		<td><span class='lang2' >ഞൊ</span><br/><span class='keys'>njo</span></td>
		<td><span class='lang2' >ഞോ</span><br/><span class='keys'>njO</span></td>
		<td><span class='lang2' >ഞൌ</span><br/><span class='keys'>njau</span></td>
		<td><span class='lang2' >ഞം</span><br/><span class='keys'>njam</span></td>
		<td><span class='lang2' >ഞഃ</span><br/><span class='keys'>njaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ട</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' >ട്</span><br/><span class='keys'>T~</span></td>
		<td><span class='lang2' >ട</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' >ടാ</span><br/><span class='keys'>TA</span></td>
		<td><span class='lang2' >ടി</span><br/><span class='keys'>Ti</span></td>
		<td><span class='lang2' >ടീ</span><br/><span class='keys'>TI</span></td>
		<td><span class='lang2' >ടു</span><br/><span class='keys'>Tu</span></td>
		<td><span class='lang2' >ടൂ</span><br/><span class='keys'>TU</span></td>
		<td><span class='lang2' >ടൃ</span><br/><span class='keys'>Tr^</span></td>
		<td><span class='lang2' >ടെ</span><br/><span class='keys'>Te</span></td>
		<td><span class='lang2' >ടേ</span><br/><span class='keys'>TE</span></td>
		<td><span class='lang2' >ടൈ</span><br/><span class='keys'>Tai</span></td>
		<td><span class='lang2' >ടൊ</span><br/><span class='keys'>To</span></td>
		<td><span class='lang2' >ടോ</span><br/><span class='keys'>TO</span></td>
		<td><span class='lang2' >ടൌ</span><br/><span class='keys'>Tau</span></td>
		<td><span class='lang2' >ടം</span><br/><span class='keys'>Tam</span></td>
		<td><span class='lang2' >ടഃ</span><br/><span class='keys'>TaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഠ</span><br/><span class='keys'>Th</span></td>
		<td><span class='lang2' >ഠ്</span><br/><span class='keys'>Th~</span></td>
		<td><span class='lang2' >ഠ</span><br/><span class='keys'>Th</span></td>
		<td><span class='lang2' >ഠാ</span><br/><span class='keys'>ThA</span></td>
		<td><span class='lang2' >ഠി</span><br/><span class='keys'>Thi</span></td>
		<td><span class='lang2' >ഠീ</span><br/><span class='keys'>ThI</span></td>
		<td><span class='lang2' >ഠു</span><br/><span class='keys'>Thu</span></td>
		<td><span class='lang2' >ഠൂ</span><br/><span class='keys'>ThU</span></td>
		<td><span class='lang2' >ഠൃ</span><br/><span class='keys'>Thr^</span></td>
		<td><span class='lang2' >ഠെ</span><br/><span class='keys'>The</span></td>
		<td><span class='lang2' >ഠേ</span><br/><span class='keys'>ThE</span></td>
		<td><span class='lang2' >ഠൈ</span><br/><span class='keys'>Thai</span></td>
		<td><span class='lang2' >ഠൊ</span><br/><span class='keys'>Tho</span></td>
		<td><span class='lang2' >ഠോ</span><br/><span class='keys'>ThO</span></td>
		<td><span class='lang2' >ഠൌ</span><br/><span class='keys'>Thau</span></td>
		<td><span class='lang2' >ഠം</span><br/><span class='keys'>Tham</span></td>
		<td><span class='lang2' >ഠഃ</span><br/><span class='keys'>ThaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഡ</span><br/><span class='keys'>D</span></td>
		<td><span class='lang2' >ഡ്</span><br/><span class='keys'>D~</span></td>
		<td><span class='lang2' >ഡ</span><br/><span class='keys'>D</span></td>
		<td><span class='lang2' >ഡാ</span><br/><span class='keys'>DA</span></td>
		<td><span class='lang2' >ഡി</span><br/><span class='keys'>Di</span></td>
		<td><span class='lang2' >ഡീ</span><br/><span class='keys'>DI</span></td>
		<td><span class='lang2' >ഡു</span><br/><span class='keys'>Du</span></td>
		<td><span class='lang2' >ഡൂ</span><br/><span class='keys'>DU</span></td>
		<td><span class='lang2' >ഡൃ</span><br/><span class='keys'>Dr^</span></td>
		<td><span class='lang2' >ഡെ</span><br/><span class='keys'>De</span></td>
		<td><span class='lang2' >ഡേ</span><br/><span class='keys'>DE</span></td>
		<td><span class='lang2' >ഡൈ</span><br/><span class='keys'>Dai</span></td>
		<td><span class='lang2' >ഡൊ</span><br/><span class='keys'>Do</span></td>
		<td><span class='lang2' >ഡോ</span><br/><span class='keys'>DO</span></td>
		<td><span class='lang2' >ഡൌ</span><br/><span class='keys'>Dau</span></td>
		<td><span class='lang2' >ഡം</span><br/><span class='keys'>Dam</span></td>
		<td><span class='lang2' >ഡഃ</span><br/><span class='keys'>DaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഢ</span><br/><span class='keys'>Dh</span></td>
		<td><span class='lang2' >ഢ്</span><br/><span class='keys'>Dh~</span></td>
		<td><span class='lang2' >ഢ</span><br/><span class='keys'>Dh</span></td>
		<td><span class='lang2' >ഢാ</span><br/><span class='keys'>DhA</span></td>
		<td><span class='lang2' >ഢി</span><br/><span class='keys'>Dhi</span></td>
		<td><span class='lang2' >ഢീ</span><br/><span class='keys'>DhI</span></td>
		<td><span class='lang2' >ഢു</span><br/><span class='keys'>Dhu</span></td>
		<td><span class='lang2' >ഢൂ</span><br/><span class='keys'>DhU</span></td>
		<td><span class='lang2' >ഢൃ</span><br/><span class='keys'>Dhr^</span></td>
		<td><span class='lang2' >ഢെ</span><br/><span class='keys'>Dhe</span></td>
		<td><span class='lang2' >ഢേ</span><br/><span class='keys'>DhE</span></td>
		<td><span class='lang2' >ഢൈ</span><br/><span class='keys'>Dhai</span></td>
		<td><span class='lang2' >ഢൊ</span><br/><span class='keys'>Dho</span></td>
		<td><span class='lang2' >ഢോ</span><br/><span class='keys'>DhO</span></td>
		<td><span class='lang2' >ഢൌ</span><br/><span class='keys'>Dhau</span></td>
		<td><span class='lang2' >ഢം</span><br/><span class='keys'>Dham</span></td>
		<td><span class='lang2' >ഢഃ</span><br/><span class='keys'>DhaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ണ</span><br/><span class='keys'>N</span></td>
		<td><span class='lang2' >ണ്</span><br/><span class='keys'>N~</span></td>
		<td><span class='lang2' >ണ</span><br/><span class='keys'>N</span></td>
		<td><span class='lang2' >ണാ</span><br/><span class='keys'>NA</span></td>
		<td><span class='lang2' >ണി</span><br/><span class='keys'>Ni</span></td>
		<td><span class='lang2' >ണീ</span><br/><span class='keys'>NI</span></td>
		<td><span class='lang2' >ണു</span><br/><span class='keys'>Nu</span></td>
		<td><span class='lang2' >ണൂ</span><br/><span class='keys'>NU</span></td>
		<td><span class='lang2' >ണൃ</span><br/><span class='keys'>Nr^</span></td>
		<td><span class='lang2' >ണെ</span><br/><span class='keys'>Ne</span></td>
		<td><span class='lang2' >ണേ</span><br/><span class='keys'>NE</span></td>
		<td><span class='lang2' >ണൈ</span><br/><span class='keys'>Nai</span></td>
		<td><span class='lang2' >ണൊ</span><br/><span class='keys'>No</span></td>
		<td><span class='lang2' >ണോ</span><br/><span class='keys'>NO</span></td>
		<td><span class='lang2' >ണൌ</span><br/><span class='keys'>Nau</span></td>
		<td><span class='lang2' >ണം</span><br/><span class='keys'>Nam</span></td>
		<td><span class='lang2' >ണഃ</span><br/><span class='keys'>NaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ത</span><br/><span class='keys'>th</span></td>
		<td><span class='lang2' >ത്</span><br/><span class='keys'>th~</span></td>
		<td><span class='lang2' >ത</span><br/><span class='keys'>th</span></td>
		<td><span class='lang2' >താ</span><br/><span class='keys'>thA</span></td>
		<td><span class='lang2' >തി</span><br/><span class='keys'>thi</span></td>
		<td><span class='lang2' >തീ</span><br/><span class='keys'>thI</span></td>
		<td><span class='lang2' >തു</span><br/><span class='keys'>thu</span></td>
		<td><span class='lang2' >തൂ</span><br/><span class='keys'>thU</span></td>
		<td><span class='lang2' >തൃ</span><br/><span class='keys'>thr^</span></td>
		<td><span class='lang2' >തെ</span><br/><span class='keys'>the</span></td>
		<td><span class='lang2' >തേ</span><br/><span class='keys'>thE</span></td>
		<td><span class='lang2' >തൈ</span><br/><span class='keys'>thai</span></td>
		<td><span class='lang2' >തൊ</span><br/><span class='keys'>tho</span></td>
		<td><span class='lang2' >തോ</span><br/><span class='keys'>thO</span></td>
		<td><span class='lang2' >തൌ</span><br/><span class='keys'>thau</span></td>
		<td><span class='lang2' >തം</span><br/><span class='keys'>tham</span></td>
		<td><span class='lang2' >തഃ</span><br/><span class='keys'>thaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഥ</span><br/><span class='keys'>thh</span></td>
		<td><span class='lang2' >ഥ്</span><br/><span class='keys'>thh~</span></td>
		<td><span class='lang2' >ഥ</span><br/><span class='keys'>thh</span></td>
		<td><span class='lang2' >ഥാ</span><br/><span class='keys'>thhA</span></td>
		<td><span class='lang2' >ഥി</span><br/><span class='keys'>thhi</span></td>
		<td><span class='lang2' >ഥീ</span><br/><span class='keys'>thhI</span></td>
		<td><span class='lang2' >ഥു</span><br/><span class='keys'>thhu</span></td>
		<td><span class='lang2' >ഥൂ</span><br/><span class='keys'>thhU</span></td>
		<td><span class='lang2' >ഥൃ</span><br/><span class='keys'>thhr^</span></td>
		<td><span class='lang2' >ഥെ</span><br/><span class='keys'>thhe</span></td>
		<td><span class='lang2' >ഥേ</span><br/><span class='keys'>thhE</span></td>
		<td><span class='lang2' >ഥൈ</span><br/><span class='keys'>thhai</span></td>
		<td><span class='lang2' >ഥൊ</span><br/><span class='keys'>thho</span></td>
		<td><span class='lang2' >ഥോ</span><br/><span class='keys'>thhO</span></td>
		<td><span class='lang2' >ഥൌ</span><br/><span class='keys'>thhau</span></td>
		<td><span class='lang2' >ഥം</span><br/><span class='keys'>thham</span></td>
		<td><span class='lang2' >ഥഃ</span><br/><span class='keys'>thhaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ദ</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >ദ്</span><br/><span class='keys'>d~</span></td>
		<td><span class='lang2' >ദ</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >ദാ</span><br/><span class='keys'>dA</span></td>
		<td><span class='lang2' >ദി</span><br/><span class='keys'>di</span></td>
		<td><span class='lang2' >ദീ</span><br/><span class='keys'>dI</span></td>
		<td><span class='lang2' >ദു</span><br/><span class='keys'>du</span></td>
		<td><span class='lang2' >ദൂ</span><br/><span class='keys'>dU</span></td>
		<td><span class='lang2' >ദൃ</span><br/><span class='keys'>dr^</span></td>
		<td><span class='lang2' >ദെ</span><br/><span class='keys'>de</span></td>
		<td><span class='lang2' >ദേ</span><br/><span class='keys'>dE</span></td>
		<td><span class='lang2' >ദൈ</span><br/><span class='keys'>dai</span></td>
		<td><span class='lang2' >ദൊ</span><br/><span class='keys'>do</span></td>
		<td><span class='lang2' >ദോ</span><br/><span class='keys'>dO</span></td>
		<td><span class='lang2' >ദൌ</span><br/><span class='keys'>dau</span></td>
		<td><span class='lang2' >ദം</span><br/><span class='keys'>dam</span></td>
		<td><span class='lang2' >ദഃ</span><br/><span class='keys'>daH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ധ</span><br/><span class='keys'>dh</span></td>
		<td><span class='lang2' >ധ്</span><br/><span class='keys'>dh~</span></td>
		<td><span class='lang2' >ധ</span><br/><span class='keys'>dh</span></td>
		<td><span class='lang2' >ധാ</span><br/><span class='keys'>dhA</span></td>
		<td><span class='lang2' >ധി</span><br/><span class='keys'>dhi</span></td>
		<td><span class='lang2' >ധീ</span><br/><span class='keys'>dhI</span></td>
		<td><span class='lang2' >ധു</span><br/><span class='keys'>dhu</span></td>
		<td><span class='lang2' >ധൂ</span><br/><span class='keys'>dhU</span></td>
		<td><span class='lang2' >ധൃ</span><br/><span class='keys'>dhr^</span></td>
		<td><span class='lang2' >ധെ</span><br/><span class='keys'>dhe</span></td>
		<td><span class='lang2' >ധേ</span><br/><span class='keys'>dhE</span></td>
		<td><span class='lang2' >ധൈ</span><br/><span class='keys'>dhai</span></td>
		<td><span class='lang2' >ധൊ</span><br/><span class='keys'>dho</span></td>
		<td><span class='lang2' >ധോ</span><br/><span class='keys'>dhO</span></td>
		<td><span class='lang2' >ധൌ</span><br/><span class='keys'>dhau</span></td>
		<td><span class='lang2' >ധം</span><br/><span class='keys'>dham</span></td>
		<td><span class='lang2' >ധഃ</span><br/><span class='keys'>dhaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ന</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >ന്</span><br/><span class='keys'>n~</span></td>
		<td><span class='lang2' >ന</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >നാ</span><br/><span class='keys'>nA</span></td>
		<td><span class='lang2' >നി</span><br/><span class='keys'>ni</span></td>
		<td><span class='lang2' >നീ</span><br/><span class='keys'>nI</span></td>
		<td><span class='lang2' >നു</span><br/><span class='keys'>nu</span></td>
		<td><span class='lang2' >നൂ</span><br/><span class='keys'>nU</span></td>
		<td><span class='lang2' >നൃ</span><br/><span class='keys'>nr^</span></td>
		<td><span class='lang2' >നെ</span><br/><span class='keys'>ne</span></td>
		<td><span class='lang2' >നേ</span><br/><span class='keys'>nE</span></td>
		<td><span class='lang2' >നൈ</span><br/><span class='keys'>nai</span></td>
		<td><span class='lang2' >നൊ</span><br/><span class='keys'>no</span></td>
		<td><span class='lang2' >നോ</span><br/><span class='keys'>nO</span></td>
		<td><span class='lang2' >നൌ</span><br/><span class='keys'>nau</span></td>
		<td><span class='lang2' >നം</span><br/><span class='keys'>nam</span></td>
		<td><span class='lang2' >നഃ</span><br/><span class='keys'>naH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >പ</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >പ്</span><br/><span class='keys'>p~</span></td>
		<td><span class='lang2' >പ</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >പാ</span><br/><span class='keys'>pA</span></td>
		<td><span class='lang2' >പി</span><br/><span class='keys'>pi</span></td>
		<td><span class='lang2' >പീ</span><br/><span class='keys'>pI</span></td>
		<td><span class='lang2' >പു</span><br/><span class='keys'>pu</span></td>
		<td><span class='lang2' >പൂ</span><br/><span class='keys'>pU</span></td>
		<td><span class='lang2' >പൃ</span><br/><span class='keys'>pr^</span></td>
		<td><span class='lang2' >പെ</span><br/><span class='keys'>pe</span></td>
		<td><span class='lang2' >പേ</span><br/><span class='keys'>pE</span></td>
		<td><span class='lang2' >പൈ</span><br/><span class='keys'>pai</span></td>
		<td><span class='lang2' >പൊ</span><br/><span class='keys'>po</span></td>
		<td><span class='lang2' >പോ</span><br/><span class='keys'>pO</span></td>
		<td><span class='lang2' >പൌ</span><br/><span class='keys'>pau</span></td>
		<td><span class='lang2' >പം</span><br/><span class='keys'>pam</span></td>
		<td><span class='lang2' >പഃ</span><br/><span class='keys'>paH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഫ</span><br/><span class='keys'>ph</span></td>
		<td><span class='lang2' >ഫ്</span><br/><span class='keys'>ph~</span></td>
		<td><span class='lang2' >ഫ</span><br/><span class='keys'>ph</span></td>
		<td><span class='lang2' >ഫാ</span><br/><span class='keys'>phA</span></td>
		<td><span class='lang2' >ഫി</span><br/><span class='keys'>phi</span></td>
		<td><span class='lang2' >ഫീ</span><br/><span class='keys'>phI</span></td>
		<td><span class='lang2' >ഫു</span><br/><span class='keys'>phu</span></td>
		<td><span class='lang2' >ഫൂ</span><br/><span class='keys'>phU</span></td>
		<td><span class='lang2' >ഫൃ</span><br/><span class='keys'>phr^</span></td>
		<td><span class='lang2' >ഫെ</span><br/><span class='keys'>phe</span></td>
		<td><span class='lang2' >ഫേ</span><br/><span class='keys'>phE</span></td>
		<td><span class='lang2' >ഫൈ</span><br/><span class='keys'>phai</span></td>
		<td><span class='lang2' >ഫൊ</span><br/><span class='keys'>pho</span></td>
		<td><span class='lang2' >ഫോ</span><br/><span class='keys'>phO</span></td>
		<td><span class='lang2' >ഫൌ</span><br/><span class='keys'>phau</span></td>
		<td><span class='lang2' >ഫം</span><br/><span class='keys'>pham</span></td>
		<td><span class='lang2' >ഫഃ</span><br/><span class='keys'>phaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ബ</span><br/><span class='keys'>b</span></td>
		<td><span class='lang2' >ബ്</span><br/><span class='keys'>b~</span></td>
		<td><span class='lang2' >ബ</span><br/><span class='keys'>b</span></td>
		<td><span class='lang2' >ബാ</span><br/><span class='keys'>bA</span></td>
		<td><span class='lang2' >ബി</span><br/><span class='keys'>bi</span></td>
		<td><span class='lang2' >ബീ</span><br/><span class='keys'>bI</span></td>
		<td><span class='lang2' >ബു</span><br/><span class='keys'>bu</span></td>
		<td><span class='lang2' >ബൂ</span><br/><span class='keys'>bU</span></td>
		<td><span class='lang2' >ബൃ</span><br/><span class='keys'>br^</span></td>
		<td><span class='lang2' >ബെ</span><br/><span class='keys'>be</span></td>
		<td><span class='lang2' >ബേ</span><br/><span class='keys'>bE</span></td>
		<td><span class='lang2' >ബൈ</span><br/><span class='keys'>bai</span></td>
		<td><span class='lang2' >ബൊ</span><br/><span class='keys'>bo</span></td>
		<td><span class='lang2' >ബോ</span><br/><span class='keys'>bO</span></td>
		<td><span class='lang2' >ബൌ</span><br/><span class='keys'>bau</span></td>
		<td><span class='lang2' >ബം</span><br/><span class='keys'>bam</span></td>
		<td><span class='lang2' >ബഃ</span><br/><span class='keys'>baH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഭ</span><br/><span class='keys'>bh</span></td>
		<td><span class='lang2' >ഭ്</span><br/><span class='keys'>bh~</span></td>
		<td><span class='lang2' >ഭ</span><br/><span class='keys'>bh</span></td>
		<td><span class='lang2' >ഭാ</span><br/><span class='keys'>bhA</span></td>
		<td><span class='lang2' >ഭി</span><br/><span class='keys'>bhi</span></td>
		<td><span class='lang2' >ഭീ</span><br/><span class='keys'>bhI</span></td>
		<td><span class='lang2' >ഭു</span><br/><span class='keys'>bhu</span></td>
		<td><span class='lang2' >ഭൂ</span><br/><span class='keys'>bhU</span></td>
		<td><span class='lang2' >ഭൃ</span><br/><span class='keys'>bhr^</span></td>
		<td><span class='lang2' >ഭെ</span><br/><span class='keys'>bhe</span></td>
		<td><span class='lang2' >ഭേ</span><br/><span class='keys'>bhE</span></td>
		<td><span class='lang2' >ഭൈ</span><br/><span class='keys'>bhai</span></td>
		<td><span class='lang2' >ഭൊ</span><br/><span class='keys'>bho</span></td>
		<td><span class='lang2' >ഭോ</span><br/><span class='keys'>bhO</span></td>
		<td><span class='lang2' >ഭൌ</span><br/><span class='keys'>bhau</span></td>
		<td><span class='lang2' >ഭം</span><br/><span class='keys'>bham</span></td>
		<td><span class='lang2' >ഭഃ</span><br/><span class='keys'>bhaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >മ</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >മ്</span><br/><span class='keys'>m~</span></td>
		<td><span class='lang2' >മ</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >മാ</span><br/><span class='keys'>mA</span></td>
		<td><span class='lang2' >മി</span><br/><span class='keys'>mi</span></td>
		<td><span class='lang2' >മീ</span><br/><span class='keys'>mI</span></td>
		<td><span class='lang2' >മു</span><br/><span class='keys'>mu</span></td>
		<td><span class='lang2' >മൂ</span><br/><span class='keys'>mU</span></td>
		<td><span class='lang2' >മൃ</span><br/><span class='keys'>mr^</span></td>
		<td><span class='lang2' >മെ</span><br/><span class='keys'>me</span></td>
		<td><span class='lang2' >മേ</span><br/><span class='keys'>mE</span></td>
		<td><span class='lang2' >മൈ</span><br/><span class='keys'>mai</span></td>
		<td><span class='lang2' >മൊ</span><br/><span class='keys'>mo</span></td>
		<td><span class='lang2' >മോ</span><br/><span class='keys'>mO</span></td>
		<td><span class='lang2' >മൌ</span><br/><span class='keys'>mau</span></td>
		<td><span class='lang2' >മം</span><br/><span class='keys'>mam</span></td>
		<td><span class='lang2' >മഃ</span><br/><span class='keys'>maH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >യ</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >യ്</span><br/><span class='keys'>y~</span></td>
		<td><span class='lang2' >യ</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >യാ</span><br/><span class='keys'>yA</span></td>
		<td><span class='lang2' >യി</span><br/><span class='keys'>yi</span></td>
		<td><span class='lang2' >യീ</span><br/><span class='keys'>yI</span></td>
		<td><span class='lang2' >യു</span><br/><span class='keys'>yu</span></td>
		<td><span class='lang2' >യൂ</span><br/><span class='keys'>yU</span></td>
		<td><span class='lang2' >യൃ</span><br/><span class='keys'>yr^</span></td>
		<td><span class='lang2' >യെ</span><br/><span class='keys'>ye</span></td>
		<td><span class='lang2' >യേ</span><br/><span class='keys'>yE</span></td>
		<td><span class='lang2' >യൈ</span><br/><span class='keys'>yai</span></td>
		<td><span class='lang2' >യൊ</span><br/><span class='keys'>yo</span></td>
		<td><span class='lang2' >യോ</span><br/><span class='keys'>yO</span></td>
		<td><span class='lang2' >യൌ</span><br/><span class='keys'>yau</span></td>
		<td><span class='lang2' >യം</span><br/><span class='keys'>yam</span></td>
		<td><span class='lang2' >യഃ</span><br/><span class='keys'>yaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ര</span><br/><span class='keys'>r</span></td>
		<td><span class='lang2' >ര്</span><br/><span class='keys'>r~</span></td>
		<td><span class='lang2' >ര</span><br/><span class='keys'>r</span></td>
		<td><span class='lang2' >രാ</span><br/><span class='keys'>rA</span></td>
		<td><span class='lang2' >രി</span><br/><span class='keys'>ri</span></td>
		<td><span class='lang2' >രീ</span><br/><span class='keys'>rI</span></td>
		<td><span class='lang2' >രു</span><br/><span class='keys'>ru</span></td>
		<td><span class='lang2' >രൂ</span><br/><span class='keys'>rU</span></td>
		<td><span class='lang2' >രൃ</span><br/><span class='keys'>rr^</span></td>
		<td><span class='lang2' >രെ</span><br/><span class='keys'>re</span></td>
		<td><span class='lang2' >രേ</span><br/><span class='keys'>rE</span></td>
		<td><span class='lang2' >രൈ</span><br/><span class='keys'>rai</span></td>
		<td><span class='lang2' >രൊ</span><br/><span class='keys'>ro</span></td>
		<td><span class='lang2' >രോ</span><br/><span class='keys'>rO</span></td>
		<td><span class='lang2' >രൌ</span><br/><span class='keys'>rau</span></td>
		<td><span class='lang2' >രം</span><br/><span class='keys'>ram</span></td>
		<td><span class='lang2' >രഃ</span><br/><span class='keys'>raH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ല</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >ല്</span><br/><span class='keys'>l~</span></td>
		<td><span class='lang2' >ല</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >ലാ</span><br/><span class='keys'>lA</span></td>
		<td><span class='lang2' >ലി</span><br/><span class='keys'>li</span></td>
		<td><span class='lang2' >ലീ</span><br/><span class='keys'>lI</span></td>
		<td><span class='lang2' >ലു</span><br/><span class='keys'>lu</span></td>
		<td><span class='lang2' >ലൂ</span><br/><span class='keys'>lU</span></td>
		<td><span class='lang2' >ലൃ</span><br/><span class='keys'>lr^</span></td>
		<td><span class='lang2' >ലെ</span><br/><span class='keys'>le</span></td>
		<td><span class='lang2' >ലേ</span><br/><span class='keys'>lE</span></td>
		<td><span class='lang2' >ലൈ</span><br/><span class='keys'>lai</span></td>
		<td><span class='lang2' >ലൊ</span><br/><span class='keys'>lo</span></td>
		<td><span class='lang2' >ലോ</span><br/><span class='keys'>lO</span></td>
		<td><span class='lang2' >ലൌ</span><br/><span class='keys'>lau</span></td>
		<td><span class='lang2' >ലം</span><br/><span class='keys'>lam</span></td>
		<td><span class='lang2' >ലഃ</span><br/><span class='keys'>laH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >വ</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >വ്</span><br/><span class='keys'>v~</span></td>
		<td><span class='lang2' >വ</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >വാ</span><br/><span class='keys'>vA</span></td>
		<td><span class='lang2' >വി</span><br/><span class='keys'>vi</span></td>
		<td><span class='lang2' >വീ</span><br/><span class='keys'>vI</span></td>
		<td><span class='lang2' >വു</span><br/><span class='keys'>vu</span></td>
		<td><span class='lang2' >വൂ</span><br/><span class='keys'>vU</span></td>
		<td><span class='lang2' >വൃ</span><br/><span class='keys'>vr^</span></td>
		<td><span class='lang2' >വെ</span><br/><span class='keys'>ve</span></td>
		<td><span class='lang2' >വേ</span><br/><span class='keys'>vE</span></td>
		<td><span class='lang2' >വൈ</span><br/><span class='keys'>vai</span></td>
		<td><span class='lang2' >വൊ</span><br/><span class='keys'>vo</span></td>
		<td><span class='lang2' >വോ</span><br/><span class='keys'>vO</span></td>
		<td><span class='lang2' >വൌ</span><br/><span class='keys'>vau</span></td>
		<td><span class='lang2' >വം</span><br/><span class='keys'>vam</span></td>
		<td><span class='lang2' >വഃ</span><br/><span class='keys'>vaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ശ</span><br/><span class='keys'>S</span></td>
		<td><span class='lang2' >ശ്</span><br/><span class='keys'>S~</span></td>
		<td><span class='lang2' >ശ</span><br/><span class='keys'>S</span></td>
		<td><span class='lang2' >ശാ</span><br/><span class='keys'>SA</span></td>
		<td><span class='lang2' >ശി</span><br/><span class='keys'>Si</span></td>
		<td><span class='lang2' >ശീ</span><br/><span class='keys'>SI</span></td>
		<td><span class='lang2' >ശു</span><br/><span class='keys'>Su</span></td>
		<td><span class='lang2' >ശൂ</span><br/><span class='keys'>SU</span></td>
		<td><span class='lang2' >ശൃ</span><br/><span class='keys'>Sr^</span></td>
		<td><span class='lang2' >ശെ</span><br/><span class='keys'>Se</span></td>
		<td><span class='lang2' >ശേ</span><br/><span class='keys'>SE</span></td>
		<td><span class='lang2' >ശൈ</span><br/><span class='keys'>Sai</span></td>
		<td><span class='lang2' >ശൊ</span><br/><span class='keys'>So</span></td>
		<td><span class='lang2' >ശോ</span><br/><span class='keys'>SO</span></td>
		<td><span class='lang2' >ശൌ</span><br/><span class='keys'>Sau</span></td>
		<td><span class='lang2' >ശം</span><br/><span class='keys'>Sam</span></td>
		<td><span class='lang2' >ശഃ</span><br/><span class='keys'>SaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഷ</span><br/><span class='keys'>sh</span></td>
		<td><span class='lang2' >ഷ്</span><br/><span class='keys'>sh~</span></td>
		<td><span class='lang2' >ഷ</span><br/><span class='keys'>sh</span></td>
		<td><span class='lang2' >ഷാ</span><br/><span class='keys'>shA</span></td>
		<td><span class='lang2' >ഷി</span><br/><span class='keys'>shi</span></td>
		<td><span class='lang2' >ഷീ</span><br/><span class='keys'>shI</span></td>
		<td><span class='lang2' >ഷു</span><br/><span class='keys'>shu</span></td>
		<td><span class='lang2' >ഷൂ</span><br/><span class='keys'>shU</span></td>
		<td><span class='lang2' >ഷൃ</span><br/><span class='keys'>shr^</span></td>
		<td><span class='lang2' >ഷെ</span><br/><span class='keys'>she</span></td>
		<td><span class='lang2' >ഷേ</span><br/><span class='keys'>shE</span></td>
		<td><span class='lang2' >ഷൈ</span><br/><span class='keys'>shai</span></td>
		<td><span class='lang2' >ഷൊ</span><br/><span class='keys'>sho</span></td>
		<td><span class='lang2' >ഷോ</span><br/><span class='keys'>shO</span></td>
		<td><span class='lang2' >ഷൌ</span><br/><span class='keys'>shau</span></td>
		<td><span class='lang2' >ഷം</span><br/><span class='keys'>sham</span></td>
		<td><span class='lang2' >ഷഃ</span><br/><span class='keys'>shaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >സ</span><br/><span class='keys'>s</span></td>
		<td><span class='lang2' >സ്</span><br/><span class='keys'>s~</span></td>
		<td><span class='lang2' >സ</span><br/><span class='keys'>s</span></td>
		<td><span class='lang2' >സാ</span><br/><span class='keys'>sA</span></td>
		<td><span class='lang2' >സി</span><br/><span class='keys'>si</span></td>
		<td><span class='lang2' >സീ</span><br/><span class='keys'>sI</span></td>
		<td><span class='lang2' >സു</span><br/><span class='keys'>su</span></td>
		<td><span class='lang2' >സൂ</span><br/><span class='keys'>sU</span></td>
		<td><span class='lang2' >സൃ</span><br/><span class='keys'>sr^</span></td>
		<td><span class='lang2' >സെ</span><br/><span class='keys'>se</span></td>
		<td><span class='lang2' >സേ</span><br/><span class='keys'>sE</span></td>
		<td><span class='lang2' >സൈ</span><br/><span class='keys'>sai</span></td>
		<td><span class='lang2' >സൊ</span><br/><span class='keys'>so</span></td>
		<td><span class='lang2' >സോ</span><br/><span class='keys'>sO</span></td>
		<td><span class='lang2' >സൌ</span><br/><span class='keys'>sau</span></td>
		<td><span class='lang2' >സം</span><br/><span class='keys'>sam</span></td>
		<td><span class='lang2' >സഃ</span><br/><span class='keys'>saH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഹ</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >ഹ്</span><br/><span class='keys'>h~</span></td>
		<td><span class='lang2' >ഹ</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >ഹാ</span><br/><span class='keys'>hA</span></td>
		<td><span class='lang2' >ഹി</span><br/><span class='keys'>hi</span></td>
		<td><span class='lang2' >ഹീ</span><br/><span class='keys'>hI</span></td>
		<td><span class='lang2' >ഹു</span><br/><span class='keys'>hu</span></td>
		<td><span class='lang2' >ഹൂ</span><br/><span class='keys'>hU</span></td>
		<td><span class='lang2' >ഹൃ</span><br/><span class='keys'>hr^</span></td>
		<td><span class='lang2' >ഹെ</span><br/><span class='keys'>he</span></td>
		<td><span class='lang2' >ഹേ</span><br/><span class='keys'>hE</span></td>
		<td><span class='lang2' >ഹൈ</span><br/><span class='keys'>hai</span></td>
		<td><span class='lang2' >ഹൊ</span><br/><span class='keys'>ho</span></td>
		<td><span class='lang2' >ഹോ</span><br/><span class='keys'>hO</span></td>
		<td><span class='lang2' >ഹൌ</span><br/><span class='keys'>hau</span></td>
		<td><span class='lang2' >ഹം</span><br/><span class='keys'>ham</span></td>
		<td><span class='lang2' >ഹഃ</span><br/><span class='keys'>haH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ള</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >ള്</span><br/><span class='keys'>L~</span></td>
		<td><span class='lang2' >ള</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >ളാ</span><br/><span class='keys'>LA</span></td>
		<td><span class='lang2' >ളി</span><br/><span class='keys'>Li</span></td>
		<td><span class='lang2' >ളീ</span><br/><span class='keys'>LI</span></td>
		<td><span class='lang2' >ളു</span><br/><span class='keys'>Lu</span></td>
		<td><span class='lang2' >ളൂ</span><br/><span class='keys'>LU</span></td>
		<td><span class='lang2' >ളൃ</span><br/><span class='keys'>Lr^</span></td>
		<td><span class='lang2' >ളെ</span><br/><span class='keys'>Le</span></td>
		<td><span class='lang2' >ളേ</span><br/><span class='keys'>LE</span></td>
		<td><span class='lang2' >ളൈ</span><br/><span class='keys'>Lai</span></td>
		<td><span class='lang2' >ളൊ</span><br/><span class='keys'>Lo</span></td>
		<td><span class='lang2' >ളോ</span><br/><span class='keys'>LO</span></td>
		<td><span class='lang2' >ളൌ</span><br/><span class='keys'>Lau</span></td>
		<td><span class='lang2' >ളം</span><br/><span class='keys'>Lam</span></td>
		<td><span class='lang2' >ളഃ</span><br/><span class='keys'>LaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ഴ</span><br/><span class='keys'>Sh</span></td>
		<td><span class='lang2' >ഴ്</span><br/><span class='keys'>Sh~</span></td>
		<td><span class='lang2' >ഴ</span><br/><span class='keys'>Sh</span></td>
		<td><span class='lang2' >ഴാ</span><br/><span class='keys'>ShA</span></td>
		<td><span class='lang2' >ഴി</span><br/><span class='keys'>Shi</span></td>
		<td><span class='lang2' >ഴീ</span><br/><span class='keys'>ShI</span></td>
		<td><span class='lang2' >ഴു</span><br/><span class='keys'>Shu</span></td>
		<td><span class='lang2' >ഴൂ</span><br/><span class='keys'>ShU</span></td>
		<td><span class='lang2' >ഴൃ</span><br/><span class='keys'>Shr^</span></td>
		<td><span class='lang2' >ഴെ</span><br/><span class='keys'>She</span></td>
		<td><span class='lang2' >ഴേ</span><br/><span class='keys'>ShE</span></td>
		<td><span class='lang2' >ഴൈ</span><br/><span class='keys'>Shai</span></td>
		<td><span class='lang2' >ഴൊ</span><br/><span class='keys'>Sho</span></td>
		<td><span class='lang2' >ഴോ</span><br/><span class='keys'>ShO</span></td>
		<td><span class='lang2' >ഴൌ</span><br/><span class='keys'>Shau</span></td>
		<td><span class='lang2' >ഴം</span><br/><span class='keys'>Sham</span></td>
		<td><span class='lang2' >ഴഃ</span><br/><span class='keys'>ShaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >റ</span><br/><span class='keys'>R</span></td>
		<td><span class='lang2' >റ്</span><br/><span class='keys'>R~</span></td>
		<td><span class='lang2' >റ</span><br/><span class='keys'>R</span></td>
		<td><span class='lang2' >റാ</span><br/><span class='keys'>RA</span></td>
		<td><span class='lang2' >റി</span><br/><span class='keys'>Ri</span></td>
		<td><span class='lang2' >റീ</span><br/><span class='keys'>RI</span></td>
		<td><span class='lang2' >റു</span><br/><span class='keys'>Ru</span></td>
		<td><span class='lang2' >റൂ</span><br/><span class='keys'>RU</span></td>
		<td><span class='lang2' >റൃ</span><br/><span class='keys'>Rr^</span></td>
		<td><span class='lang2' >റെ</span><br/><span class='keys'>Re</span></td>
		<td><span class='lang2' >റേ</span><br/><span class='keys'>RE</span></td>
		<td><span class='lang2' >റൈ</span><br/><span class='keys'>Rai</span></td>
		<td><span class='lang2' >റൊ</span><br/><span class='keys'>Ro</span></td>
		<td><span class='lang2' >റോ</span><br/><span class='keys'>RO</span></td>
		<td><span class='lang2' >റൌ</span><br/><span class='keys'>Rau</span></td>
		<td><span class='lang2' >റം</span><br/><span class='keys'>Ram</span></td>
		<td><span class='lang2' >റഃ</span><br/><span class='keys'>RaH</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=17>&nbsp;</td>
	</tr>

	<tr class='keymanweb' style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top>Combined Consonants, etc.</td>
		<td><span class='lang2' >ત્ર</span><br/><span class='keys'>^</span></td>
		<td><span class='lang2' >ૃ</span><br/><span class='keys'>=</span></td>
		<td><span class='lang2' >ઋ</span><br/><span class='keys'>+</span></td>
		<td><span class='lang2' >ക്ക്</span><br/><span class='keys'>q</span></td>
		<td><span class='lang2' >ക്യു</span><br/><span class='keys'>Q</span></td>
		<td><span class='lang2' >വ്</span><br/><span class='keys'>w</span></td>
		<td><span class='lang2' >ઐ</span><br/><span class='keys'>W</span></td>
		<td><span class='lang2' >ડ</span><br/><span class='keys'>[[</span></td>
		<td><span class='lang2' >ઢ</span><br/><span class='keys'>{</span></td>
		<td><span class='lang2' >઼</span><br/><span class='keys'>]</span></td>
		<td><span class='lang2' >ઞ</span><br/><span class='keys'>}</span></td>
		<td><span class='lang2' >ഫ്</span><br/><span class='keys'>f</span></td>
		<td><span class='lang2' >ഗ്ഗ്</span><br/><span class='keys'>G</span></td>
		<td><span class='lang2' >ജ്ജ്</span><br/><span class='keys'>J</span></td>
		<td><span class='lang2' >ക്ക്</span><br/><span class='keys'>K</span></td>
		<td><span class='lang2' >છ</span><br/><span class='keys'>:</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ശ്</span><br/><span class='keys'>z</span></td>
		<td><span class='lang2' >ശ്ശ്</span><br/><span class='keys'>Z</span></td>
		<td><span class='lang2' >ക്ഷ്</span><br/><span class='keys'>x</span></td>
		<td><span class='lang2' >ക്ഷ്</span><br/><span class='keys'>X</span></td>
		<td><span class='lang2' >ച്ച്</span><br/><span class='keys'>C</span></td>
		<td><span class='lang2' >വ്വ്</span><br/><span class='keys'>V</span></td>
		<td><span class='lang2' >ബ്ബ്</span><br/><span class='keys'>B</span></td>
		<td><span class='lang2' >മ്മ്</span><br/><span class='keys'>M</span></td>
		<td><span class='lang2' >ષ</span><br/><span class='keys'>&lt;</span></td>
		<td><span class='lang2' >।</span><br/><span class='keys'>&gt;</span></td>
	</tr>

</table>

<h3>Atomic Chillus</h3>
<p>This keyboard now supports atomic encoding of Malayalam Chillus using Unicode 5.1 standards.</p>
    <table>
        <tr>
            <th>Chillu</th>
            <th>Keystroke</th>
            <th>Unicode 5.0
            <br/>
            representation</th>
            <th>Unicode 5.1
            <br/>
            representation</th>
        </tr>
        <tr>
            <td>NN (ൺ)</td>
            <td><kbd>Shift</kbd><kbd>n</kbd></td>
            <td>U+0D32 U+0D4D U+200D</td>
            <td>U+0D7A</td>
        </tr>
        <tr>
            <td>N (ൻ)</td>
            <td><kbd>n</kbd></td>
            <td>U+0D28 U+0D4D U+200D</td>
            <td>U+0D7B</td>
        </tr>
        <tr>
            <td>RR (ർ)</td>
            <td><kbd>r</kbd></td>
            <td>U+0D30 U+0D4D U+200D</td>
            <td>U+0D7C</td>
        </tr>
        <tr>
            <td>L (ൽ)</td>
            <td><kbd>l</kbd></td>
            <td>U+0D32 U+0D4D U+200D</td>
            <td>U+0D7D</td>
        </tr>
        <tr>
            <td>LL (ൾ)</td>
            <td><kbd>Shift</kbd><kbd>l</kbd></td>
            <td>U+0D33 U+0D4D U+200D</td>
            <td>U+0D7E</td>
        </tr>
        <tr>
            <td>K (ൿ)</td>
            <td><kbd>k</kbd><kbd>_</kbd></td>
            <td>U+0D15 U+0D4D U+200D</td>
            <td>U+0D7F</td>
        </tr>
    </table>


</div>
