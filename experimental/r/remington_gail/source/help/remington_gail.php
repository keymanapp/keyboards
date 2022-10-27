<?php 
  $pagename = 'Remington GAIL (SIL) Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>


<p>This keyboard is an implementation of the Remington-GAIL typewriter layout for Hindi. Specifically, it is based on and mimics the implementation by Webduniya for Hindi Indic Input 3. However, it also makes heavy use or RALT/AltGr for numerous keys.</p>
<p>Some deviations from the Hindi Indic Input 3 layout include:</p>

<p>Alternate keys are accessed by RALT+SHIFT+KEY combination instead of ESC+KEY combination</p>
<ul>
  <li><i>Rakar</i> (keystroke 'z') should be typed <i>after</i> a consonant/conjunct.</li>
  <li><i>Reph</i> (keystroke 'Z') should be typed <i>before</i> a consonant/conjunct.</li>
  <li>To get ई first you need to type the letter इ then you have to type र् (SHIFT+Z) (this is an exception to the <i>Reph</i> rule).</li>
  <li><i>i matra</i> (keystroke 'f') should be typed <i>after</i> a consonant/conjunct.</li>
</ul>

<p>Some new key combinations for letters include:</p>

<ul>
  <li>ञ = RALT+SHIFT+T</li>
  <li>ङ = RALT+SHIFT+> </li>
  <li>ई = b+SHIFT+Z<br/>
Type the letter इ (b) <i>then</i> type र् (SHIFT+Z). (This is an exception to the <i>Reph</i> rule).</li>
</ul>


  <h2>Desktop Keyboard layout</h2>
<p>The keyboard layout is demonstrated in the keyboard images below.</p>
<p>Half forms and full consonant letters are sometimes present in same key (on default and shift states). For example  क and क्‍ are placed on same key.</p>
<p>Some consonant letters do not have dedicated keys for half letters. To get the half letter, a halant ( ् ), typed by ‘+’, should be pressed after a full consonant letter. For example, there is no key for typing छ्. We have to type छ and then  ् to get छ्</p>
<p>There are no dedicated full consonant letters for some consonants. For example, there is no dedicated key for भ, so भ will require two keystrokes: type भ्‍ and then ा to get भ.</p>


<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-tablet' data-states='default shift'>
</div>
