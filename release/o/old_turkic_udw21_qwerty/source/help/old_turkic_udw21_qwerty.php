<?php 
  $pagename = 'Old Turkic UDW21 (QWERTY) Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>

<h1>Old Turkic UDW21 (QWERTY)</h1>

<p>
    Old Turkic UDW21 (QWERTY) is an Old Turkic script keyboard for Old Turkish language per Universal Dependencies for Old Turkish paper at UDW21, based on US English keyboard and aimed at case insensitive ASCII input without special characters using QWERTY to output a subset of Old Turkic Unicode with minimal variables and restricted keyboard access.
</p>

<p>
    This Old Turkic script keyboard enables an ASCII representation of the Old Turkish language to be embeddable in various digital contexts such as programming language identifiers or other restrictive environments while not giving up on the full phonetic range of the script. The Keyman implementation works when the app is not given full access and does not bundle any fonts because the keyboard inherently does not use them, and target platforms' latest distributions include a fallback for the emitted Unicode characters, although the package links to a publicly-available font.
</p>

<p>
    Typing works as follows for the transliteration recognized ASCII inputs: initially, if the input is a vowel, it will set the backness, and if not an implicit vowel (a or e), it will emit the Old Turkic character; otherwise, if the input is a consonant, it will set the articulation and not emit any characters. If the initial input was a consonant, then if the middle input is a vowel, it will set the backness, emit the consonant's Old Turkic character with correct backness, and if not an implicit vowel, emit the vowel's Old Turkic character; otherwise, if the middle input is a consonant, it will only override the articulation with the new consonant. Finally, with backness not empty, any vowel or consonant will emit the corresponding Old Turkic character. In addition to primary consonant representations, h, f, and v fricative alternatives map to k, p, and b for ergonomics. At any place, pressing the space key once will clear both backness and articulation, which pressing backspace also does when there is no Old Turkic character yet, and pressing the space key again will emit the common punctuation colon. Doing a shift + space will emit actual space character.
</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default'>
</div>

<h2>Tablet Keyboard Layout</h2>
<div id='osk-tablet' data-states='default'>
</div>

<h2>Phone Keyboard Layout</h2>
<div id='osk-phone' data-states='default'>
</div>

<p>© 2022 Mehmet Oguz Derin and Takahiro Harada</p>
