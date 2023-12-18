
<?php
$pagename = 'Devanagari Typewriter (SIL) Keyboard Help';
$pagetitle = $pagename;
$pagestyle=<<<END
key, span.kbd { background: none repeat scroll 0% 0% #F7F7F7; padding: 0.1em 0.6em; border: 1px solid #CCC; font-size: 10pt; color: #333; box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 2px #FFF inset; border-radius: 3px; display: inline-block; margin: 0px 0.1em; text-shadow: 0px 1px 0px #FFF; line-height: 1.4; white-space: nowrap;
}, .margin-50 { margin-left: 50px; }, .padding-50 { padding: 0px 0px 0px 50px; }
END;
require_once('header.php');
?>
The Devanagari Typewriter (SIL) keyboard is designed for those users who are using traditional Nepali keyboard layout. The keyboard layout can be viewed by clicking on the Keyman icon and selecting the On-Screen Keyboard menu item, or by opening the Help documentation. This layout nearly matches the “Nepali Traditional” Windows keyboard layout with only few changes.
<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>
<h2>Note:</h2>
<p>You can use Left Ctrl + Left Alt in place of the Right Alt key.</p>
<h3>How to type in Devanagari Typewriter (SIL) keyboard? How it is different than other Nepali keyboards? </h3>
Here.
<h4>
  <li>इकार (iikar)</li>  
</h4>
<pre class="padding-50">
<key>S</key> + <key>I</key> → कि (ह्रस्व)
<key>S</key> + <key>Shift</key> +  <key>I</key> → की (दीर्घ)
</pre>
<h4>
  <li>ह्रस्व उकार र दीर्घ ऊकार (rasso ukar and dhirga uukar)</li>  
</h4>
<pre class="padding-50">
<key>S</key> + <key>;</key> → कु (उकार)
<key>S</key> + <key>Shift</key> +  <key>;</key> → कू (ऊकार)
</pre>
<h4>
  <li>एकार र ऐकार (ikar and ekar)</li>  
</h4>
<pre class="padding-50">
<key>S</key> + <key>`</key> → के (एकार)
<key>S</key> + <key>Shift</key> +  <key>`</key> → कै (ऐकार)
</pre>
<h4>
  <li>ओकार र औकार (okar and aukar)</li>  
</h4>
<pre class="padding-50">
<key>S</key> + <key>Shift</key> + <key>F</key> → को (ओकार)
<key>S</key> + <key>RAlt</key> +  <key>F</key> → कौ (औकार)
</pre>
<h4>
  <li>The हलन्त (halanta)</li>  
</h4>
<p>The हलन्त (halanta) looks like this (्) and goes under the base of the consonant. When you add a हलन्त (halanta) to the consonant characters, you cancel their respective vowel sound, for example प्, क्, ट्. The हलन्त (halanta) can be used to join consnants in three different ways: <ul><li>The consonants can joined together to make a conjunct</li><li>The first consonant becomes a half-character</li><li>The first consonant is followed by an explicit halanta</li></ul></p>
<div class="halanta-wrapper margin-50">
<h4>संयुक्त/संयोजन (Conjuncts)</h4>
<p>In this keyboard we use <key>\</key> (backslash or reverse solidus) to form Conjuncts.</p>
<pre class="padding-50">
<key>k</key> + <key>;</key> → क +  ्  → क्
<key>K</key> + <key>;</key> → ख +  ्  → ख्
</pre>
<h4>Half-Characters using ZWJ (Zero Width Joiner)</h4>
<p>In this keyboard we use <key>Ralt</key> + <key>\</key> to type a halanta followed by ZWJ character U+200D. The ZWJ is used when you want the first consonant to be displayed as a half-character, immediately followed by the next consonant.</p>
<pre class="padding-50">
झ + र +  ्‍ + ZWJ + य ो → झर्‍यो
र् + ZWJ + य  +ा + ल → र्‍याल
ह + ा + न् + ZWJ + न + ु → हान्‍नु
</pre>
<h4>Forced Halanta using ZWNJ (Zero Width Non Joiner)</h4>
<p>In this keyboard we use <key>Shift</key> + <key>x</key> to type a halanta followed by the ZWNJ character U+200C. The ZWNJ is used when you want an explicit halant between the consonants</p>
<pre class="padding-50">
श्री + मा + न्‌(Shift + x ) + को → श्रीमान्‌को
</pre>
</div>
<h4>
  <li>रेफ (reph)</li>  
</h4>
<p>It is the letter 'र' (ra) with the inherent short vowel dropped. The mark by which it is denoted is placed over the letter following it, such as- कर्म, हर्ष etc. Reph looks like a right-facing sickle.</p>
<pre class="padding-50">
<key>र</key> + <key>्</key> + <key>क</key> → र्क
<key>र</key> + <key>्</key> + <key>म</key> → र्म
</pre>
<h4>
  <li>रकार (rakār)</li>  
</h4>
<p>Rakar is used to indicate a consonant conjunct ending in "Ra". Rakār looks like a left-facing diagonal dash (sometimes duplicated in some cases). Note that reph will go above the letter while rakār will go beneath. In this keyboard we input rakār by two ways as shown below.</p>
<pre class="padding-50">
<key>k</key> + <key>/</key> → प्र
<key>k</key> + <key>\</key> + <key>[</key> → प + ् + र → प्र
</pre>
<h4>
  <li>बारम्बार प्रयोग हुने संयुक्त अक्षरहरू (Common Conjuncts)</li>  
</h4>
<p>A conjunct consonant comprises two or more consonants with nothing separating them; in particular there is no vowel between them. In this case we use halanta/virama (्), which tries to combine two or more consonants together. Some of the frequently occuring arrangements are shown below.</p>
<pre class="padding-50">
त +  ् + म → त्म
न +  ् + त +  ् + य → न्त्य
म +  ् + न → म्न
ब +  ् + व → ब्व
ष +  ् + ट → ष्ट
द +  ् + ग → द्ग
ट +  ् + ट → ट्ट
ङ +  ् + क → ङ्क
स +  ् + न +  ् + य → स्न्य
ष +  ् + ठ +  ् + य → ष्ठ्य
श +  ् + र → श्र
द +  ् + ध → द्ध (बुद्ध)
द +  ् + द → द्द (मद्दत)
त् + त → त्त
ह् + न → ह्न
द् + य → द्य
ट् + य → ट्य
ह् + म → ह्म
क +  ् + क → क्क
क +  ् + त → क्त
ह +  ् + र → ह्र (गाह्रो)
ह +  ् + य → ह्य (ह्याकुला)
ह +  ् + व → ह्व (विह्वोल)
त +  ् + र → त्र
* ह +  ृ → हृ (हृदय)
</pre>
<h4>
  <li>विशेष संयोजन अक्षरहरू (Special Conjuncts)</li>
</h4>
<p>Normally the symbols for a conjunct consonants are constructed from their component symbols and are quite obvious to see, and their construction reflects their pronunciation. However, there are two which are quite different from their component parts. In Devanagari, such a sound is represented by concatenating two consonants to form what is known as a ligature.</p>
<pre class="padding-50">
क + ् + ष → क्ष
ज + ् + ञ → ज्ञ
</pre>
<h2>Tablet Keyboard Layout</h2>
<p>The layout for tablet version remains same as the phone layout. </p>
<h2>Phone Keyboard Layout</h2>
<div id='osk-phone' data-states='default shift rightalt rightalt-shift'>
</div>
<p>© SIL International</p>