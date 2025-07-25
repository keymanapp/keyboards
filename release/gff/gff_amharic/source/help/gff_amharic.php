<?php
/*
  Name:             Keyboard_gff_amhamaric
  Copyright:        Keyboard ©1997-2025 The Geʾez Frontier Foundation 
  Documentation:    
  Description:      
  Create Date:      18 Sep 2009

  Modified Date:    22 April 2025
  Authors:          dyacob, mcdurdin, pbaehr
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Sep 2009 - mcdurdin - Polish help
*/
  $pagetitle = 'GFF አማርኛ (Amharic) Keyboard Help';
  $pagename  = $pagetitle;
  $pagestyle = "@import url('kb.css'); @import url('html.css');";
  $keymanpromourl = 'https://ethiopic.keymankeyboards.com';
  require_once('header.php');
?>

<p style='margin:0px'>Keyboard &#169; Geʾez Frontier Foundation.</p>

<div id='Overview'>
<h2>Overview</h2>
<p>
This keyboard is designed for use with the Amharic language of Ethiopia in Africa. Typing follows a consonant-vowel pattern. It is designed for use with a standard (QWERTY) keyboard.
</p>
<p class='keymanweb'>Most computers will automatically download a special font to display this keyboard correctly.  However, if the layout or the charts below do not display correctly, please read the <a target="_blank" href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>
<p>
<a href="#Related">Click here</a> to see keyboard layouts for other Ethiopic languages, like Awngi, Bench, Blin, Dizi, Geʾez, Meʾen, Mursi, Sebatbeit, Suri and Tigrigna.
</p>
</div>

<h2>Using this Keyboard</h2>
<div id="desktop">
<details>
<summary>🖥️ Desktop/Laptop (Windows, Mac, Linux)</summary>
<h1>Desktop (Windows, Mac) Keyboard</h1>
<p style="text-align: justify;">
This is an Amharic  (amh, አማርኛ) language mnemonic input method that applies Ethiopian writing conventions. 
It requires a font supporting Ethiopic script under the Unicode 3.0 standard (two historic punctuation marks require Unicode 4.1 support). 
The Amharic keyboard is &ldquo;mnemonic&rdquo; and designed for the US English QWERTY keyboard.  This means that the keyboard is designed to
be intuitive and natural with respect to the sounds available in the English language via the standard English keyboard (known as QWERTY).
The keyboard also supports mnemonic mappings from non-English letters found in European keyboards.
</p>

<p>
A more complete typing manual is provided as 
<a target="_blank" href="https://help.keyman.com/keyboard/gff_amharic/3.2/AmharicTyping-English.pdf">a PDF file (English)</a>
(<a target="_blank" href="https://help.keyman.com/keyboard/gff_amharic/3.2/AmharicTyping-Amharic.pdf">Amharic</a>) with this distribution.
</p>
 
<h2><a id="letters" name="letters"></a>Typing Letters</h2>

<p style="text-align: justify;">
<i>Only</i> the letters used in Amharic may be typed with this keyboard. To type additional Ethiopic letters used by other languages, please
<a href="https://keyman.com/keyboards?q=GFF">download a keyboard</a> for the language needed or the <em><a href="https://keyman.com/keyboards/gff_ethiopic">language-neutral</a></em> keyboard that supports composition of all Ethiopic symbols found in Unicode 14.
</p>

<h3>Quick Start Examples</h3>
<p>
The Amharic keyboard uses an intuitive <i>phonetic</i> system where the Amharic sounds are matched to the nearest English letters. You can think of how a word sounds in
Amharic and then type it out with English.
</p>
<p style='margin-left:40px'><b>Example:</b> typing <kbd>s</kbd><kbd>e</kbd><kbd>l</kbd><kbd>a</kbd><kbd>m</kbd> produces <span class='output'>ሰላም</span></p>
<p>
Because Amharic has more sounds than English, we sometimes have to adjust this
rule. For example, English does not have &lsquo;ጠ&rsquo; and the closest similar letter would be &lsquo;T&rsquo;. In this case you should type <kbd>Shift</kbd><kbd>T</kbd>, for capital <kbd>T</kbd>:</p>
<p style='margin-left:40px'><b>Example:</b> typing <kbd>T</kbd><kbd>i</kbd><kbd>e</kbd><kbd>n</kbd><kbd>a</kbd><kbd>y</kbd><kbd>s</kbd><kbd>T</kbd><kbd>l</kbd><kbd>N</kbd> produces <span class='output'>ጤናይስጥልኝ</span></p>
<p>Notice that we used capital <kbd>N</kbd> also for <span class='output'>ኝ</span> and we needed both <kbd>i</kbd><kbd>e</kbd> together to change <span class='output'>ጠ</span> into the 5<sup>th</sup> letter, <span class='output'>ጤ</span>. When the letter you want to type does not appear when you hit the similar sounding key in English, try using the capital next. If typing the capital does not work, then try hitting the key two times:
</p>
<p style='margin-left:40px'><b>Example:</b> typing <kbd>s</kbd><kbd>s</kbd><kbd>e</kbd><kbd>l</kbd><kbd>a</kbd><kbd>m</kbd> produces <span class='output'>ሠላም</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <kbd>S</kbd><kbd>S</kbd><kbd>e</kbd><kbd>H</kbd><kbd>e</kbd><kbd>y</kbd> produces <span class='output'>ፀሐይ</span></p>
<p>Next, when you need to type the extra letters of Amharic like <span class='output'>ሏ</span>,<span class='output'>ሟ</span>,<span class='output'>ኴ</span> you can do so by typing an extra vowel after a <kbd>u</kbd>:
</p>
<p style='margin-left:40px'><b>Example:</b> typing <kbd>m</kbd><kbd>u</kbd><kbd>a</kbd> produces <span class='output'>ሟ</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <kbd>g</kbd><kbd>u</kbd><kbd>i</kbd><kbd>e</kbd> produces <span class='output'>ጔ</span></p>
<p>
Finally, we must introduce a special rule for ' (apostrophe). Some words are spelt with a &ldquo;ሳድስ&rdquo; (6<sup>th</sup>) letter followed by a vowel, like &ldquo;ርኤ&rdquo; in &ldquo;ገብርኤል&rdquo;. We use the apostrophe here to type <kbd>g</kbd><kbd>e</kbd><kbd>b</kbd><kbd>r</kbd><kbd>'</kbd><kbd>i</kbd><kbd>e</kbd><kbd>l</kbd> to make sure we get <span class='output'>ርኤ</span> instead of <span class='output'>ሬ</span>.
</p>
<p style='margin-left:40px'><b>Example:</b> typing <kbd>m</kbd><kbd>e</kbd><kbd>l</kbd><kbd>'</kbd><kbd>a</kbd><kbd>k</kbd> produces <span class='output'>መልአክ</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <kbd>m</kbd><kbd>'</kbd><kbd>e</kbd><kbd>e</kbd><kbd>r</kbd><kbd>a</kbd><kbd>f</kbd> produces <span class='output'>ምዕራፍ</span></p>
<p>
Type Apostrophe twice after a 6<sup>th</sup> order letter to make it appear in your document:</p>
<p style='margin-left:40px'><b>Example:</b> typing <kbd>m</kbd><kbd>e</kbd><kbd>l</kbd><kbd>'</kbd><kbd>'</kbd><kbd>a</kbd><kbd>k</kbd> produces <span class='output'>መል'አክ</span></p>
<p>
We also use the &ldquo;number sign&rdquo;, &lsquo;#&rsquo;, (also know as the &ldquo;hash mark&rdquo;) for Ethiopic numbers, so <kbd>#</kbd><kbd>1</kbd> becomes <span class='output'>፩</span> and so on. If a <span class='output'>#</span> is needed in your document before a number, type it twice and: <kbd>#</kbd><kbd>#</kbd><kbd>1</kbd> becomes <span class='output'>#1</span>. The double strike works for other punctuation as well,
so typing <kbd>;</kbd> once makes <span class='output'>፤</span> and a second time gives English semicolon <span class='output'>;</span>. 
</p>

<p><br/></p>


<h2>Typing Tables</h2>
<p>Typing all Amharic letters, punctuation and numerals is shown in the following tables:</p>

<div style="margin-left: 1em;">
<table class="kb">
  <tr>
    <th>&nbsp;</th><td>ቤተሰብ</td><td>ግዕዝ</td><td>ካዕብ</td><td>ሣልስ</td><td>ራብዕ</td><td>ኃምስ</td><td>ሳድስ</td><td>ሳብዕ</td><td>ዘመደ፡ግዕዝ</td><td>ዘመደ፡ካዕብ</td><td>ዘመደ፡ሣልስ</td><td>ዘመደ፡ራብዕ</td><td>ዘመደ፡ኃምስ</td><th  style="border-bottom-color: #ffffff;">&nbsp;</th>
  </tr>
  <tr>
    <th>ቤተሰብ</th><th>Key</th><th>+[eE]</th><th>+[uU]</th><th>+[iI]</th><th>+[aA]</th><th>+[iI][eE]</th><th>&nbsp;</th><th>+[oO]</th><th>+[uU][eE]</th><th>+[uU][uU]</th><th>+[uU][iI]</th><th>+[uU][aA]</th><th>+[uU][iI][eE]</th><th style="background-color: #ffffff; border-right-color: #ffffff; border-top-color: #ffffff;">&nbsp;</th>
  </tr>
  <tr>
    <th>ሆይ</th><th>h</th><td>ሀ</td><td>ሁ</td><td>ሂ</td><td>ሃ</td><td>ሄ</td><td>ህ</td><td>ሆ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>h</th>
  </tr>
  <tr>
    <th>ላዊ</th><th>[lL]</th><td>ለ</td><td>ሉ</td><td>ሊ</td><td>ላ</td><td>ሌ</td><td>ል</td><td>ሎ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሏ</td><td>&nbsp;</td><th>l</th>
  </tr>
  <tr>
    <th>ሐውት</th><th>H</th><td>ሐ</td><td>ሑ</td><td>ሒ</td><td>ሓ</td><td>ሔ</td><td>ሕ</td><td>ሖ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሗ</td><td>&nbsp;</td><th>ħ</th>
  </tr>
  <tr>
    <th>ማይ</th><th>[mM]</th><td>መ</td><td>ሙ</td><td>ሚ</td><td>ማ</td><td>ሜ</td><td>ም</td><td>ሞ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሟ</td><td>&nbsp;</td><th>m</th>
  </tr>
  <tr>
    <th>ሠውት</th><th>ss</th><td>ሠ</td><td>ሡ</td><td>ሢ</td><td>ሣ</td><td>ሤ</td><td>ሥ</td><td>ሦ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሧ</td><td>&nbsp;</td><th>s</th>
  </tr>
  <tr>
    <th>ርእስ</th><th>[rR]</th><td>ረ</td><td>ሩ</td><td>ሪ</td><td>ራ</td><td>ሬ</td><td>ር</td><td>ሮ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሯ</td><td>&nbsp;</td><th>r</th>
  </tr>
  <tr>
    <th>ሳት</th><th>s</th><td>ሰ</td><td>ሱ</td><td>ሲ</td><td>ሳ</td><td>ሴ</td><td>ስ</td><td>ሶ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሷ</td><td>&nbsp;</td><th>s</th>
  </tr>
  <tr>
    <th>ሻ-ሳት</th><th>[xX]</th><td>ሸ</td><td>ሹ</td><td>ሺ</td><td>ሻ</td><td>ሼ</td><td>ሽ</td><td>ሾ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ሿ</td><td>&nbsp;</td><th>ʃ</th>
  </tr>
  <tr>
    <th>ቃፍ</th><th>[qQ]</th><td>ቀ</td><td>ቁ</td><td>ቂ</td><td>ቃ</td><td>ቄ</td><td>ቅ</td><td>ቆ</td><td>ቈ</td><td>ቍ</td><td>ቊ</td><td>ቋ</td><td>ቌ</td><th>kʼ</th>
  </tr>
  <tr>
    <th>ቤት</th><th>[bB]</th><td>በ</td><td>ቡ</td><td>ቢ</td><td>ባ</td><td>ቤ</td><td>ብ</td><td>ቦ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ቧ</td><td>&nbsp;</td><th>b</th>
  </tr>
  <tr>
    <th>ቨ-ቤት</th><th>[vV]</th><td>ቨ</td><td>ቩ</td><td>ቪ</td><td>ቫ</td><td>ቬ</td><td>ቭ</td><td>ቮ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ቯ</td><td>&nbsp;</td><th>v</th>
  </tr>
  <tr>
    <th>ታው</th><th>t</th><td>ተ</td><td>ቱ</td><td>ቲ</td><td>ታ</td><td>ቴ</td><td>ት</td><td>ቶ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ቷ</td><td>&nbsp;</td><th>t</th>
  </tr>
  <tr>
    <th>ቻ-ታው</th><th>c</th><td>ቸ</td><td>ቹ</td><td>ቺ</td><td>ቻ</td><td>ቼ</td><td>ች</td><td>ቾ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ቿ</td><td>&nbsp;</td><th>ʧ</th>
  </tr>
  <tr>
    <th>ኀርም</th><th>hh</th><td>ኀ</td><td>ኁ</td><td>ኂ</td><td>ኃ</td><td>ኄ</td><td>ኅ</td><td>ኆ</td><td>ኈ</td><td>ኍ</td><td>ኊ</td><td>ኋ</td><td>ኌ</td><th>h</th>
  </tr>
  <tr>
    <th>ነሐስ</th><th>n</th><td>ነ</td><td>ኑ</td><td>ኒ</td><td>ና</td><td>ኔ</td><td>ን</td><td>ኖ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ኗ</td><td>&nbsp;</td><th>n</th>
  </tr>
  <tr>
    <th>ኘ-ነሐስ</th><th>N</th><td>ኘ</td><td>ኙ</td><td>ኚ</td><td>ኛ</td><td>ኜ</td><td>ኝ</td><td>ኞ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ኟ</td><td>&nbsp;</td><th>ɲ</th>
  </tr>
  <tr>
    <th>አልፍ</th><th>&nbsp;</th><td>አ<br/>a</td><td>ኡ<br/>u</td><td>ኢ<br/>i</td><td>ኣ<br/>aaaa</td><td>ኤ<br/>ie</td><td>እ<br/>e</td><td>ኦ<br/>o</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>ʔ</th>
  </tr>
  <tr>
    <th>ካፍ</th><th>k</th><td>ከ</td><td>ኩ</td><td>ኪ</td><td>ካ</td><td>ኬ</td><td>ክ</td><td>ኮ</td><td>ኰ</td><td>ኵ</td><td>ኲ</td><td>ኳ</td><td>ኴ</td><th>k</th>
  </tr>
  <tr>
    <th>ኻ-ካፍ</th><th>K</th><td>ኸ</td><td>ኹ</td><td>ኺ</td><td>ኻ</td><td>ኼ</td><td>ኽ</td><td>ኾ</td><td>ዀ</td><td>ዅ</td><td>ዂ</td><td>ዃ</td><td>ዄ</td><th>x</th>
  </tr>
  <tr>
    <th>ወዌ</th><th>[wW]</th><td>ወ</td><td>ዉ</td><td>ዊ</td><td>ዋ</td><td>ዌ</td><td>ው</td><td>ዎ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>w</th>
  </tr>
  <tr>
    <th>ዐይን</th><th>&nbsp;</th><td>ዐ<br/>aaa</td><td>ዑ<br/>uu</td><td>ዒ<br/>ii</td><td>ዓ<br/>aa</td><td>ዔ<br/>iie</td><td>ዕ<br/>ee</td><td>ዖ<br/>oo</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>ʕ</th>
  </tr>
  <tr>
    <th>ዘይ</th><th>z</th><td>ዘ</td><td>ዙ</td><td>ዚ</td><td>ዛ</td><td>ዜ</td><td>ዝ</td><td>ዞ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ዟ</td><td>&nbsp;</td><th>z</th>
  </tr>
  <tr>
    <th>ዠ-ዘይ</th><th>Z</th><td>ዠ</td><td>ዡ</td><td>ዢ</td><td>ዣ</td><td>ዤ</td><td>ዥ</td><td>ዦ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ዧ</td><td>&nbsp;</td><th>ʒ</th>
  </tr>
  <tr>
    <th>የመን</th><th>[yY]</th><td>የ</td><td>ዩ</td><td>ዪ</td><td>ያ</td><td>ዬ</td><td>ይ</td><td>ዮ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>y</th>
  </tr>
  <tr>
    <th>ድንት</th><th>d</th><td>ደ</td><td>ዱ</td><td>ዲ</td><td>ዳ</td><td>ዴ</td><td>ድ</td><td>ዶ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ዷ</td><td>&nbsp;</td><th>d</th>
  </tr>
  <tr>
    <th>ጀ-ድንት</th><th>[jJ]</th><td>ጀ</td><td>ጁ</td><td>ጂ</td><td>ጃ</td><td>ጄ</td><td>ጅ</td><td>ጆ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ጇ</td><td>&nbsp;</td><th>ʤ</th>
  </tr>
  <tr>
    <th>ገምል</th><th>[gG]</th><td>ገ</td><td>ጉ</td><td>ጊ</td><td>ጋ</td><td>ጌ</td><td>ግ</td><td>ጎ</td><td>ጐ</td><td>ጕ</td><td>ጒ</td><td>ጓ</td><td>ጔ</td><th>g</th>
  </tr>
  <tr>
    <th>ጠይት</th><th>T</th><td>ጠ</td><td>ጡ</td><td>ጢ</td><td>ጣ</td><td>ጤ</td><td>ጥ</td><td>ጦ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ጧ</td><td>&nbsp;</td><th>tʼ</th>
  </tr>
  <tr>
    <th>ጨ-ጠይት</th><th>C</th><td>ጨ</td><td>ጩ</td><td>ጪ</td><td>ጫ</td><td>ጬ</td><td>ጭ</td><td>ጮ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ጯ</td><td>&nbsp;</td><th>ʧʼ</th>
  </tr>
  <tr>
    <th>ጰይት</th><th>P</th><td>ጰ</td><td>ጱ</td><td>ጲ</td><td>ጳ</td><td>ጴ</td><td>ጵ</td><td>ጶ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ጷ</td><td>&nbsp;</td><th>pʼ</th>
  </tr>
  <tr>
    <th>ጸደይ</th><th>S</th><td>ጸ</td><td>ጹ</td><td>ጺ</td><td>ጻ</td><td>ጼ</td><td>ጽ</td><td>ጾ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ጿ</td><td>&nbsp;</td><th>sʼ</th>
  </tr>
  <tr>
    <th>ፀጳ</th><th>SS</th><td>ፀ</td><td>ፁ</td><td>ፂ</td><td>ፃ</td><td>ፄ</td><td>ፅ</td><td>ፆ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th>sʼ</th>
  </tr>
  <tr>
    <th>አፍ</th><th>[fF]</th><td>ፈ</td><td>ፉ</td><td>ፊ</td><td>ፋ</td><td>ፌ</td><td>ፍ</td><td>ፎ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ፏ</td><td>&nbsp;</td><th>f</th>
  </tr>
  <tr>
    <th>ፕሳ</th><th>p</th><td>ፐ</td><td>ፑ</td><td>ፒ</td><td>ፓ</td><td>ፔ</td><td>ፕ</td><td>ፖ</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ፗ</td><td>&nbsp;</td><th>p</th>
  </tr>
  <tr>
    <th style="border-right-color: #ffffff;">&nbsp;</th><td style="background-color: #ffffff; border-left-color: #ffffff; border-bottom-color: #ffffff;">&nbsp;</td><td>+ə</td><td>+u</td><td>+i</td><td>+a</td><td>+e</td><td>ɨ/-</td><td>+o</td><td>+ʷə</td><td>+ʷu</td><td>+ʷi</td><td>+ʷa</td><td>+ʷe</td><th>IPA</th>
  </tr>
</table>
</div>

<h2><a id="punctuation" name="punctuation"></a>Punctuation</h2>

<div style="margin-left: 1em;">

<h3>Ethiopic Punctuation</h3>
<table class="punct" style="margin-top: 0;">
  <tr>
    <th style="background-color: #e0dacf; border: thin solid #666;">Keystrokes</th>
    <th>:</th><th>::</th><th>,</th><th>,,</th><th>;</th><th>:-</th><th>:+</th><th>:#</th><th>&lt;</th><th>&gt;</th><th>&lt;&lt;</th><th>&gt;&gt;</th>
  </tr>
  <tr>
    <th>Punctuation</th>
    <td>፡</td><td>።</td><td>፣</td><td>፥</td><td>፤</td><td>፦</td><td>፠</td><td>፨</td><td>‹</td><td>›</td><td>«</td><td>»</td>
  </tr>
</table>

<h3>Keyboard Punctuation</h3>
<p>All regular punctuation on your keyboard remains available. Most punctuation can be typed
with a single keystroke as usual.  Those used to input Ethiopic symbols can be entered by
hitting the punctuation key two or more times until it appears.</p>


</div>

<h2><a id="numerals" name="numerals"></a>Typing Numerals</h2>

<div style="margin-left: 1em;">

<h3>Ethiopic Numerals</h3>
<table class="punct" style="margin-top: 0;">
  <tr>
    <th style="background-color: #e0dacf; border: thin solid #666;">Keystrokes</th>
    <th>#1</th><th>#2</th><th>#3</th><th>#4</th><th>#5</th><th>#6</th><th>#7</th><th>#8</th><th>#9</th>
  </tr>
  <tr>
    <th>Numeral</th>
    <td>፩</td><td>፪</td><td>፫</td><td>፬</td><td>፭</td><td>፮</td><td>፯</td><td>፰</td><td>፱</td>
  </tr>
  <tr><td colspan="10" style="border-color: #ffffff;"/></tr>
  <tr>
    <th style="background-color: #e0dacf; border: thin solid #666;">Keystrokes</th>
    <th>#10</th><th>#20</th><th>#30</th><th>#40</th><th>#50</th><th>#60</th><th>#70</th><th>#80</th><th>#90</th>
  </tr>
  <tr>
    <th>Numeral</th>
    <td>፲</td><td>፳</td><td>፴</td><td>፵</td><td>፶</td><td>፷</td><td>፸</td><td>፹</td><td>፺</td>
  </tr>
  <tr><td colspan="10" style="border-color: #ffffff;"/></tr>
  <tr>
    <th style="background-color: #e0dacf; border: thin solid #666;">Keystrokes</th>
    <th>#100</th><th>#1000</th><th>#10000</th>
  </tr>
  <tr>
    <th>Numeral</th>
    <td>፻</td><td>፲፻</td><td>፼</td>
  </tr>
</table>

<p>Numeral composition will continue as 0s are entered up to ፼፼ (100,000,000).</p>

</div>


<h2><a id="typing-practice" name="typing-practice"></a>Typing Practice</h2>

<div style="margin-left: 1em;">
<p>An Amharic typing practice document can be downloaded from the link below:</p>
<dir><a href="http://keyboards.ethiopic.org/docs/AmharicTypingPractice.docx">http://keyboards.ethiopic.org/docs/AmharicTypingPractice.docx</a>
</dir>
</div>

<hr/>
</details>
</div>

<div id="phone">
<details>
<summary>📱 Mobile (Phone)</summary>
<h1>Mobile Phone Keyboard</h1>

<h2>Letters</h2>

<p>
When the GFF Amharic mobile keyboard starts, the key layout appears as shown in the following image.  Note the relationship between the letters of the <b>middle</b> row and <b>top</b> row:
</p>

<img src="images/phone/gff_amharic-phone-default-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p>
Tapping a key once, the modifier letters to the left (<kbd class='geez'>አ</kbd>, <kbd class='kaib'>ኡ</kbd>, <kbd class='salis'>ኢ</kbd>) and right  (<kbd class='rabi'>ኣ</kbd>, <kbd class='hamis'>ኤ</kbd>, <kbd class='sabi'>ኦ</kbd>) of the spacebar. For example, tapping <kbd>ግ</kbd> the modifiers change to <kbd class='geez'>ገ</kbd>, <kbd class='kaib'>ጉ</kbd>, <kbd class='salis'>ጊ</kbd>, <kbd class='rabi'>ጋ</kbd>, <kbd class='hamis'>ጌ</kbd>, and <kbd class='sabi'>ጎ</kbd> .  If a modifier is tapped, ግ will be updated on screen.
</p>
<p>
Observe that some keys have a small “hint” letter in the upper right corner. The hint letters can be typed by making a quick, light, downward “flick” on the key. These letters can also be typed using the “longress” approach explained in a following example.
</p>

<img src="images/phone/gff_amharic-phone-default-2.jpeg" style="border: 1px solid black;" width="100%"/>

<h3>Long Presses</h3>
<p>
As an alternative, if preferred, holding a key down for a few moments (called a “longpress”) a popup menu appears where you can tap the letter desired.  The popup menu for <kbd>ግ</kbd> is shown below:
</p>

<img src="images/phone/gff_amharic-phone-default-3.jpeg" style="border: 1px solid black;" width="100%"/>

<p>
The modifier keys will also have popups as applicable.  To enter the extended syllables for <kbd class='zemede-geez'>ጐ</kbd>, 
<kbd class='zemede-kaib'>ጕ</kbd>, <kbd class='zemede-salis'>ጒ</kbd>, <kbd class='zemede-rabi'>ጓ</kbd>, and <kbd class='zemede-hamis'>ጔ</kbd>
type the related key. For example, the <kbd class='rabi'>ጋ<sup style="color: #777">ጓ</sup></kbd> key has the popup key <kbd class='zemede-rabi'>ጓ</kbd>
as shown:
</p>

<img src="images/phone/gff_amharic-phone-default-4.jpeg" style="border: 1px solid black;" width="100%"/>

<h3>Flicks</h3>
<p>
Keys with hints can be &ldquo;flicked&rdquo; to type the symbol shown in the hint. A flick is a quick downward stroke (like a swipe) made on the key.
Flicks are very convenient since they can save you from having to shift to the next keyboard view to access a letter, or avoid the need of
making additional finger motions to type a letter. Some examples:
</p>

<dl style="text-indent: 20px">
  <dd>• Flicking the <kbd class="key_example">ስ<sup>ሥ</sup></kbd> key will type &lsquo;ሥ &rsquo; instead of &lsquo;ስ&rsquo;.</dd>
  <dd>• Flicking the <kbd class="key_example">$<sup>€</sup></kbd> key will type &lsquo;€&rsquo; instead of &lsquo;$&rsquo;.</dd>
  <dd>• Flicking the <kbd class="key_example">2<sup>፪</sup></kbd> key will type &lsquo;፪&rsquo; instead of &lsquo;2&rsquo;.</dd>
</dl>

<h3>Taps</h3>
<p>
By default, the keyboard keys enter the 6<sup>th</sup> order (ሳድስ) letter because the are the most frequent in Amharic vocabulary.
Tapping a key quickly twice, a &ldquo;Double-Tap&rdquo;, will enter the 1<sup>st</sup> order (ግዕዝ) letter (the next most frequently occuring).
When a letter has a hint, a &ldquo;Triple-Tap&rdquo; is also possible where the third tap will enter the hint letter in the first order.
For example, the &lsquo;ብ&rsquo; key has the hint &lsquo;ቭ&rsquo;, appearing as <kbd class="key_example">ብ<sup>ቭ</sup></kbd>, tapping the key produces:
</p>

<dl style="text-indent: 20px">
  <dd><kbd class="key_example">ብ<sup>ቭ</sup></kbd> 1 tap: ብ</dd>
  <dd><kbd class="key_example">ብ<sup>ቭ</sup></kbd> 2 taps: በ</dd>
  <dd><kbd class="key_example">ብ<sup>ቭ</sup></kbd> 3 taps: ቨ</dd>
</dl>

<p>
In other cases, such as for punctuation or numerals, multiple-taps can be used in addition to a flick to type the symbol shown in the hint.
For example, the &lsquo;2&rsquo; key has the hint &lsquo;፪&rsquo;, appearing as <kbd class="key_example">2<sup>፪</sup></kbd>, tapping the key produces: 
</p>

<dl style="text-indent: 20px">
  <dd><kbd class="key_example">2<sup>፪</sup></kbd> 1 tap: 2</dd>
  <dd><kbd class="key_example">2<sup>፪</sup></kbd> 2 taps: ፪</dd>
  <dd><kbd class="key_example">2<sup>፪</sup></kbd> 3 taps: ፳</dd>
</dl>


<h2>Punctuation</h2>

<p>When typing letters, the <kbd class='epunct'>!</kbd> and <kbd class='epunct'>።</kbd> keys are available for entering the most common punctuation without shifting to another “layer”.  The following image shows the punctuation for a longpress of <kbd class='epunct'>!</kbd>:</p>

<img src="images/phone/gff_amharic-phone-punctuation-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p>The punctuation for a longpress of <kbd class='epunct'>።</kbd>:</p>

<img src="images/phone/gff_amharic-phone-punctuation-2.jpeg" style="border: 1px solid black;" width="100%"/>

<p>For additional punctuation and numerals, tap the <kbd class='epunct'>123</kbd> key to shift to the next layer:</p>

<img src="images/phone/gff_amharic-phone-punctuation-3.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Note that numerals on the punctuation layer use the long press feature to make Geʾez numerals available:</p>

<img src="images/phone/gff_amharic-phone-numerals-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Tapping the <kbd class='epunct'>@</kbd> shifts to a 2nd layer to access all remaining punctuation:</p>

<img src="images/phone/gff_amharic-phone-punctuation-4.jpeg" style="border: 1px solid black;" width="100%"/>

<p>A tap of the <kbd class='epunct'>፩</kbd> key will go to the final layer where Geʾez numbers and some less used, and non-Amharic letters, can be accessed.</p>

<h2>Numerals</h2>

<p>The last layer to shift to presents the Geʾez numbers, all Geʾez punctuation, letters of related languages, and a few lesser used letters that did not fit conveniently on the initial letters layer.</p>

<p>Note the arrow button, <kbd class='etens'>▶</kbd>, at the end of the row of Geʾez numerals, tapping it will slide the numerals to the remaining numbers that are orders of ten (e.g. ፳, ፴, ፵, etc.):</p>

<img src="images/phone/gff_amharic-phone-numerals-2.jpeg" style="border: 1px solid black;" width="100%"/>

<p>After tapping the <kbd class='etens'>▶</kbd> button, the Geʾez orders of ten appear as shown:</p>

<img src="images/phone/gff_amharic-phone-numerals-3.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Tapping the <kbd class="key_example">▶</kbd> button again slides to the western digits, a final tap will return to the initial Geʾez numerals.</p>

<img src="images/phone/gff_amharic-phone-numerals-4.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Simply tap the <kbd class='epunct'>ሀለሐ</kbd> key to return to the starting letters layers.</p>

<hr/>
</details>
</div>

<div id="tablet">
<details>
<summary>🔲 Tablet</summary>
<h1>Tablet Keyboard</h1>

<h2>Letters</h2>

<p>
When the GFF Amharic mobile keyboard starts, the key layout appears as shown in the following image.  Note the relationship between the letters of the <b>middle</b> row and <b>top</b> row:
</p>

<img src="images/tablet/gff_amharic-tablet-default-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p>
Tapping a key once, the modifier letters to the left (<kbd class='geez'>አ</kbd>, <kbd class='kaib'>ኡ</kbd>, <kbd class='salis'>ኢ</kbd>) and right  (<kbd class='rabi'>ኣ</kbd>, <kbd class='hamis'>ኤ</kbd>, <kbd class='sabi'>ኦ</kbd>) of the spacebar. For example, tapping <kbd>ግ</kbd> the modifiers change to <kbd class='geez'>ገ</kbd>, <kbd class='kaib'>ጉ</kbd>, <kbd class='salis'>ጊ</kbd>, <kbd class='rabi'>ጋ</kbd>, <kbd class='hamis'>ጌ</kbd>, and <kbd class='sabi'>ጎ</kbd> .  If a modifier is tapped, ግ will be updated on screen.
</p>
<p>
Observe that some keys have a small “hint” letter in the upper right corner. The hint letters can be typed by making a quick, light, downward “flick” on the key. These letters can also be typed using the “longress” approach explained in a following example.
</p>

<img src="images/tablet/gff_amharic-tablet-default-2.jpeg" style="border: 1px solid black;" width="100%"/>

<h3>Long Presses</h3>
<p>
As an alternative, if preferred, holding a key down for a few moments (called a “longpress”) a popup menu appears where you can tap the letter desired.  The popup menu for <kbd>ግ</kbd> is shown below:
</p>

<img src="images/tablet/gff_amharic-tablet-default-3.jpeg" style="border: 1px solid black;" width="100%"/>

<p>
The modifier keys will also have popups as applicable.  To enter the extended syllables for <kbd class='zemede-geez'>ጐ</kbd>, 
<kbd class='zemede-kaib'>ጕ</kbd>, <kbd class='zemede-salis'>ጒ</kbd>, <kbd class='zemede-rabi'>ጓ</kbd>, and <kbd class='zemede-hamis'>ጔ</kbd>
type the related key. For example, the <kbd class='rabi'>ጋ<sup style="color: #777">ጓ</sup></kbd> key has the popup key <kbd class='zemede-rabi'>ጓ</kbd>
as shown:
</p>

<img src="images/tablet/gff_amharic-tablet-default-4.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Note that Geʾez numerals are available by using a long press on the number keys:</p>

<img src="images/tablet/gff_amharic-tablet-numerals-1.jpeg" style="border: 1px solid black;" width="100%"/>

<h3>Flicks</h3>
<p>
Keys with hints can be &ldquo;flicked&rdquo; to type the symbol shown in the hint. A flick is a quick downward stroke (like a swipe) made on the key.
Flicks are very convenient since they can save you from having to shift to the next keyboard view to access a letter, or avoid the need of
making additional finger motions to type a letter. Some examples:
</p>

<dl style="text-indent: 20px">
  <dd>• Flicking the <kbd class="key_example">ስ<sup>ሥ</sup></kbd> key will type &lsquo;ሥ &rsquo; instead of &lsquo;ስ&rsquo;.</dd>
  <dd>• Flicking the <kbd class="key_example">$<sup>€</sup></kbd> key will type &lsquo;€&rsquo; instead of &lsquo;$&rsquo;.</dd>
  <dd>• Flicking the <kbd class="key_example">2<sup>፪@</sup></kbd> key will type &lsquo;፪&rsquo; instead of &lsquo;2&rsquo;.</dd>
</dl>

<p>
Note that two flicks are possible on the numeral keys. An <em>upward</em> flick is also available, for example an upward flick on the
<kbd class="key_example">2<sup>፪@</sup></kbd> key will type &lsquo;@&rsquo; instead of &lsquo;2&rsquo;.</dd>
</p>


<h3>Taps</h3>
<p>
By default, the keyboard keys enter the 6<sup>th</sup> order (ሳድስ) letter because the are the most frequent in Amharic vocabulary.
Tapping a key quickly twice, a &ldquo;Double-Tap&rdquo;, will enter the 1<sup>st</sup> order (ግዕዝ) letter (the next most frequently occuring).
When a letter has a hint, a &ldquo;Triple-Tap&rdquo; is also possible where the third tap will enter the hint letter in the first order.
For example, the &lsquo;ብ&rsquo; key has the hint &lsquo;ቭ&rsquo;, appearing as <kbd class="key_example">ብ<sup>ቭ</sup></kbd>, tapping the key produces:
</p>

<dl style="text-indent: 20px">
  <dd><kbd class="key_example">ብ<sup>ቭ</sup></kbd> 1 tap: ብ</dd>
  <dd><kbd class="key_example">ብ<sup>ቭ</sup></kbd> 2 taps: በ</dd>
  <dd><kbd class="key_example">ብ<sup>ቭ</sup></kbd> 3 taps: ቨ</dd>
</dl>

<p>
In other cases, such as for punctuation or numerals, multiple-taps can be used in addition to a flick to type the symbol shown in the hint.
For example, the &lsquo;2&rsquo; key has the hint &lsquo;፪@&rsquo;, appearing as <kbd class="key_example">2<sup>፪@</sup></kbd>, tapping the key produces: 
</p>

<dl style="text-indent: 20px">
  <dd><kbd class="key_example">2<sup>፪@</sup></kbd> 1 tap: 2</dd>
  <dd><kbd class="key_example">2<sup>፪@</sup></kbd> 2 taps: @</dd>
</dl>


<h2>Punctuation</h2>

<p>When typing letters, the <kbd>!</kbd> and <kbd class='epunct'>።</kbd> keys are available for entering the most common punctuation without shifting to another “layer”.  The following image shows the punctuation for a longpress of <kbd>!</kbd>:</p>

<img src="images/tablet/gff_amharic-tablet-punctuation-1.jpeg" style="border: 1px solid black;" width="100%"/>

<p>The punctuation for a longpress of <kbd class='epunct'>።</kbd>:</p>

<img src="images/tablet/gff_amharic-tablet-punctuation-2.jpeg" style="border: 1px solid black;" width="100%"/>

<p>For additional punctuation and numerals, tap the <kbd class='epunct'>@</kbd> key to shift to the next layer:</p>

<img src="images/tablet/gff_amharic-tablet-punctuation-3.jpeg" style="border: 1px solid black;" width="100%"/>

<p>A tap of the <kbd class='epunct'>፩፪፫</kbd> key will go to the final layer where Geʾez numbers and some less used, and non-Amharic letters, can be accessed.</p>

<h2>Numerals</h2>

<p>The last layer to shift to presents the Geʾez numbers, all Geʾez punctuation, letters of related languages, and a few lesser used letters that did not fit conveniently on the initial letters layer.</p>

<img src="images/tablet/gff_amharic-tablet-numerals-2.jpeg" style="border: 1px solid black;" width="100%"/>

<p>Simply tap the <kbd class='epunct'>ሀለሐ</kbd> key to return to the starting letters layers.</p>

</details>
</div>

<div id="Troubleshooting">
<h2>Troubleshooting</h2>
<p class='keymanweb'>If the characters you type or those on the On Screen Keyboard do not appear to display correctly, please read the <a target="_blank" href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<p>For any other questions, <a target="_blank" href="https://keyman.com/contact/">contact us</a>.</p>
</div>

<div id="Resources">
<h2>Further Resources</h2>

<div id="Related">
<h3>Related Keyboard Layouts</h3>
<p>Keyboard Layouts for other Ethiopic languages:</p>
<p><a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_harege_fidelat">Harege Fidelat (All Languages)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mesobe_fidelat">Mesobe Fidelat (All Languages)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_awn_7">Awngi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_bcq_7">Bench</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_blin">Blin</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mdx_7">Dizi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_geez">Geʾez</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_gurage">Gurage</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mym_7">Meʾen</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_muz_7">Mursi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_suq_7">Suri</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_eritrea">Tigrigna (Eritrea)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_ethiopia">Tigrigna (Ethiopia)</a></p>
</div>

<div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://keymankeyboards.com/?id=455">Download the Amharic Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/amharic.htm">More on the Amharic Writing System at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/Amharic_language">More on the Amharic Language at Wikipedia.org</a><br/></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/ethiopic.htm">More on the Geʾez Script at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/Ge'ez_alphabet">More on the Geʾez Script at Wikipedia.org</a></p>
</div>

</div>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 4.1</p>
</div>


<div id="Author">
<h3>Keyboard Authorship</h3>
<p>
This keyboard was created by the Geʾez Frontier Foundation.  SIL Global graciously acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb. Their effort assists in enabling people to communicate in their own language.
</p>
</div>
<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p>
The Amharic keyboard layout for Keyman Desktop and KeymanWeb is Copyright Geʾez Frontier Foundation and SIL Global.  It may be freely distributed and used under the terms of <a href="https://opensource.org/licenses/MIT">The MIT License</a>.
</p>
</div>


