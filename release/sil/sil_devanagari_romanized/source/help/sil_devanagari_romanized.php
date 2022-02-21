

<?php
$pagename = 'Devanagari Romanized (SIL) Keyboard Help';
$pagetitle = $pagename;
$pagestyle=<<<END
key, span.kbd { background: none repeat scroll 0% 0% #F7F7F7; padding: 0.1em 0.6em; border: 1px solid #CCC; font-size: 10pt; color: #333; box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 2px #FFF inset; border-radius: 3px; display: inline-block; margin: 0px 0.1em; text-shadow: 0px 1px 0px #FFF; line-height: 1.4; white-space: nowrap;
}
END;
require_once('header.php');
?>
<p>Devanagari Romanized (SIL) keyboard is designed for the languages of Nepal. This keyboard includes an on screen keyboard which can be viewed by clicking on the Keyman icon and selecting the On Screen Keyboard menu item. Many Unicode fonts will display the letters on this keyboard, but Annapurna SIL Nepal font is recommended.
<br><br>This keyboard was created by SIL International.
</p>
<h1>Keyboard Layout</h1>
<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightaltshift'>
</div>
<h3>How to type in Devanagari Romanized (SIL) Keyboard? How it is different than other Nepali keyboards? </h3>
Most of the alfabetical keys represents the Devnagari letters with similar sounds. For instance, <key>k</key> represents 'क', <key>K</key> (<key>Shift</key>+<key>k</key>) represents 'ख' and <key>g</key> represents 'ग'. Similarly, you can find the related letters with ease using this keyboard.
<h4>
  <li>इकार (iikar)</li>  
</h4>
<pre>
<key>k</key> + <key>i</key> → कि (ह्रस्व)
<key>k</key> + <key>Shift</key> +  <key>i</key> → की (दीर्घ)
</pre>
<h4>
  <li>ह्रस्व उकार र दीर्घ ऊकार (rasso ukar and dhirga uukar)</li>  
</h4>
<pre>
<key>k</key> + <key>u</key> → कु (उकार)
<key>k</key> + <key>Shift</key> +  <key>u</key> → कू (ऊकार)
</pre>
<h4>
  <li>एकार र ऐकार (ikar and ekar)</li>  
</h4>
<pre>
<key>k</key> + <key>e</key> → के (एकार)
<key>k</key> + <key>Shift</key> +  <key>e</key> → कै (ऐकार)
</pre>
<h4>
  <li>ओकार र औकार (okar and aukar)</li>  
</h4>
<pre>
<key>k</key> + <key>o</key> → को (ओकार)
<key>k</key> + <key>Shift</key> +  <key>o</key> → कौ (औकार)
</pre>
<h4>
  <li>Dead Key</li>
</h4>
In Nepali language we have many letters and symbols. So, we cannot fit all of them into the QWERTY layout. Therefore, we use 'dead key', a key on a computer’s keyboard that when pressed by itself produces no output character but only works in conjunction with another key, effectively changing the output of the key that is pressed immediately after the dead key. In this keyboard, we are using <key>q</key> as a dead key.
<h4>
  <li>स्वर अक्षरहरू छुट्टै लेख्न परेमा (If you want to write vowels separately)</li>  
</h4>
<pre>
<key>q</key> + <key>Shift</key> + <key>a</key> → अ
<key>q</key> + <key>a</key> → आ
<key>q</key> + <key>i</key> → इ
<key>q</key> + <key>Shift</key> + <key>i</key> → ई
<key>q</key> + <key>u</key> → उ
<key>q</key> + <key>Shift</key> + <key>u</key> → ऊ
<key>q</key> + <key>L-Ctrl</key> + <key>L-Alt</key> + <key>z</key> → ऋ
<key>q</key> + <key>R-Alt</key> + <key>z</key> → ऋ
<key>q</key> + <key>e</key> → ए
<key>q</key> + <key>Shift</key> + <key>e</key> → ऐ
<key>q</key> + <key>o</key> = ओ
<key>q</key> + <key>Shift</key> + <key>o</key> → औ
</pre>
<h4>
  <li>रेफ  (Reff)</li>  
</h4>
<pre>
<key>र</key> + <key>्</key> + <key>क</key> → र्क
</pre>
<h4>
  <li>अरु अक्षरहरू (Other Letters)</li>  
</h4>
<pre>
<key>f</key> → ट
<key>Shift</key> + <key>f</key> → ठ
<key>v</key> → ड
<key>Shift</key> + <key>v</key> → ढ
<key>Shift</key> + <key>w</key> → द्व
<key>Shift</key> + <key>z</key> → क्ष
</pre>
<h4>
  <li>आधा अक्षरहरू  (Half-Letters)</li>  
</h4>
<pre>
<key>k</key> + <key>;</key> → क्
<key>K</key> + <key>;</key> → ख्
</pre>
<h4>
  <li>संयुक्त अक्षरहरू (Combined Letters)</li>
</h4>
<pre>
क + ् + क → क्क
क + ् + त → क्त
क + ् + र → क्र
ङ +  ् + क → ङ्क
ङ + ् + ख → ङ्ख
श + ् + र → श्र
द + ् + ध → द्ध (बुद्ध)
द + ् + द → द्द (मद्दत)
द + ्  + व → द्व (द्वारा)
द + ् + य + → द्य
द + ् + र → द्र
प + ् + र → प्र
ट + ् + ट → ट्ट
ठ + ् + ठ → ठ्ठ
ह + ृ → हृ (हृदय)
ह + ् + र → ह्र (गाह्रो)
ह + ् + य → ह्य (ह्याकुला)
ह + ् + व → ह्व (विह्वोल)
क + ् + ष → क्ष
त + ् + र → त्र
ज + ् + ञ → ज्ञ
</pre>
<h4>
  <li>ZWJ (Zero Width Joiner)</li>
</h4>
हलन्त नदेखिने गरि फरक तरिकाले जोड्न परेमा ZWJ को प्रयोग हुन्छ ।
<pre>
झ + र + ्‍ य ो → झर्‍यो
र्‍ + य  +ा + ल→ र्‍याल
ह + ा + न्‍ + न + ु → हान्‍नु
</pre>
Here <key>x</key> is the ZWJ.
<h4>
  <li>ZWNJ (Zero Width Non Joiner)</li>
</h4>
हलन्त देखिने गरि जोड्न परेमा ZWNJ को प्रयोग हुन्छ ।
<pre>
श्री + मा + न्‌(Shift + x ) + को → श्रीमान्‌को
</pre>
Here <key>Shift</key> + <key>x</key> is the ZWNJ.
<h4>
  <li>अंकहरू (Numbers)</li>
</h4>
Just press the english numeric keys to type numbers in the Devnagari script.
<h2>Phone Keyboard Layout</h2>
While most of the layout remains the same as in desktop version, Alt-Ctrl have been moved to separate key on the bottom right of the screen.
<div id='osk-phone' data-states='default shift rightalt rightaltshift'>
</div>
<p>Note: We can get same result using Left Ctrl and Left Alt as Right Alt key. <br>Right Alt → Left Ctrl + Left Alt. </p>
