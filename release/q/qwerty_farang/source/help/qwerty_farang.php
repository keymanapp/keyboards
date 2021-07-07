<?php 
  $pagename = "QWERTY Farang";
  $pagetitle = "QWERTY Farang Keyboard Help";
  require_once('header.php');
?>

<p>QWERTY Farang keyboard created for Thai learners who are more familiar with the QWERTY layout. It uses "longpress" and "rota" to house characters with identical phonetics by order of frequency.</p>

<h2>Consonant Class are Color-Coded</h2>
<p>Many Thai learners feel Thai tones are difficult due to the complex tone rules. Thai tone depends on the initial consonant class. To aid your memorization, we color-coded low-class consonants blue, mid-class consonants green, and high-class constants red.</p>

<h2>Rota</h2>
<p>The Rota function allows users to cycle through multiple phonetically-similar letters assigned to a single key. Consonants are ordered by frequency of appearance per this list: <a href="http://pioneer.chula.ac.th/~awirote/ling/ThaiStat.pdf" target="_blank">List of Thai characters sorted by frequency</a>.</p>

<p>Eg. ช > ฉ > ฌ</p>

<p>Vowels are ordered as short vowels first, long vowels second.</p>
<p>Eg. เ >  แ</p>

<p>Rota is available on both desktop and touch (mobile devices).</p> 
<p>On Windows, some vowels have to be typed after another charather, otherwise nothing would be output. This is also true for tone marks and diacritical marks.</p>

<h2>Full Rota Rules</h2>
<ul>
	<li><kbd>`</kbd> (Backquote)=  ่ > ้ > ๊ > ๋ </li>
	<li><kbd>Q</kbd> = ช > ฉ > ฌ</li>
	<li><kbd>W</kbd> = ว > ะ (ie, วิสรรชนีย์ or wisanchani)</li>
	<li><kbd>E</kbd> = เ > แ</li>
	<li><kbd>R</kbd> = ร > ฤ > ฤๅ</li>
	<li><kbd>T</kbd> = ต > ฏ</li>
	<li><kbd>Y</kbd> = ย > ญ</li>
	<li><kbd>U</kbd> =  ุ > ู</li>
	<li><kbd>I</kbd> =  ิ > ี</li>
	<li><kbd>O</kbd> = อ > โ > °</li>
	<li><kbd>[</kbd> = พ > ผ > ภ</li>
	<li><kbd>\</kbd> =  ํ > ฺ > ๎ (Sanskritist symbols not used in standard Thai)</li>
	<li><kbd>A</kbd> =  ั > า > ะ</li>
	<li><kbd>S</kbd> = ส > ศ > ซ > ษ</li>
	<li><kbd>D</kbd> = ด > ฎ</li>
	<li><kbd>F</kbd> = ฟ > ฝ</li>
	<li><kbd>G</kbd> = ก > ์ (ie, การันต์ or garan)</li>
	<li><kbd>H</kbd> = ห > ฮ</li>
	<li><kbd>K</kbd> = ค > ข > ฆ</li>
	<li><kbd>L</kbd> = ล > ฬ</li>
	<li><kbd>;</kbd> = ฯ > ๚ > ๏ > ๛</li>
	<li><kbd>Z</kbd> = ท > ธ > ถ > ฐ > ฒ > ฑ</li>
	<li><kbd>X</kbd> =  ็ > ๆ (Thai diacritics derived from Thai numerals)</li>
	<li><kbd>C</kbd> = ไ > ใ (/aɪ/)</li>
	<li><kbd>V</kbd> = ึ > ื (/ɯ/)</li>
	<li><kbd>B</kbd> = บ > ฿</li>
	<li><kbd>N</kbd> = น > ณ</li>
	<li><kbd>M</kbd> = ม > ำ</li>
	<li><kbd>RALT</kbd> <kbd>K</kbd> = ฆ > ฃ > ฅ (to access obsolete /kʰ/)</li>
	<li><kbd>RALT</kbd> <kbd>R</kbd> = ๅ > ฦ (to access obsolete “r”-related vowels, [ตัว ฦ, Tua lue])</li>
	<li><kbd>RALT</kbd> <kbd>M</kbd> = ᴍ > ʟ > ꜰ > ʜ > ʀ (Learner’s Tone Marks)</li>
</ul>

<h2>Notable Key Assignments</h2>
<ul>
	<li><kbd>`</kbd> : Thai Tone marks  ่, ้, ๊, ๋.</li>
	<li><kbd>Q</kbd> : The aspirated alveolar-palatals /tɕʰ/ ช > ฉ > ฌ.</br>Per the letter “q” in Mandarin Chinese pinyin.</li>
	<li><kbd>J</kbd> : The Voiceless alveolo-palatal affricate /tɕ/ จ</br>Per the letter “j” in Mandarin Chinese pinyin.</li>
	<li><kbd>X</kbd> : The two diacritics evolved from Thai numerals  ็ > ๆ</li>
	<li><kbd>C</kbd> : Diphthong /aɪ/ ไ > ใ</li>
	<li><kbd>Z</kbd> : /tʰ/ (aspirated /t/)</li>
	<li><kbd>V</kbd> : The close back unrounded vowel /ɯ/ ◌ึ > ◌ื</li>
</ul>

	<p>All other letters are arranged per the Royal Thai General System of Transcription (RTGS) or “loose” IPA.</p>
	<p>And we left a few redundancies within for you to discover.</p>

<h1>Keyboard Layout</h1>

  <h2>Desktop</h2>
   <div id='osk' data-states='default shift rightalt'></div>

  <h2>Touch</h2>
   <div id='osk-tablet' data-states='default numeric'></div>
   <h3>Longpress</h3>
	<p>Keys with a little dot on the top right can be pressed and held for more keys.</p>
	<p>Eg. press and hold on <kbd>R</kbd> key to reveals ฤ and ๅ. Move your finger over to one of the two popped up keys to type it.</p>
	<p><a href="touch_longpress.png"><img class="keyboard" src="touch_longpress.png" alt="Longpress state" /></a></p>

  <h3>Lexical Model</h3>
	<p>This keyboard employs a Lexical Model per the Chulalongkorn University Thai Language Word Frequency List. It will offer auto-complete suggestions (predictive text) for single words at a time, but it will not understand multiple words.</p>
	
<p>© 2021 Sebastian Restrepo & LatamAsia</p>