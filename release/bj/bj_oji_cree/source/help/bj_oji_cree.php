<?php 
  $pagename = 'BJ-OjiCree (Kingfisher) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
	  	.cree {font-family: 'BJCree UNI';}
      .msg-important { color: rgb(238, 0, 0); background-color: rgb(255, 213, 213); border: 2px dashed rgb(238, 0, 0); padding: 8pt 16pt; margin: 8pt 0; display: inline-block; }
END;
  require_once('header.php');
?>

  <section id='overview'>
	<h2>Overview</h2>
	<p>This keyboard is designed for the Oji-Cree syllabic script used in Northwestern Ontario, Canada. The keyboard has been developed to make it easy to type all of the symbols necessary for Oji-Cree. This keyboard is fully compliant with the <a href='http://unicode.org/standard/standard.html'>Unicode Standard</a>.</p>

<div class="msg-important">
  <p><b>Important Notice:</b> The default for this keyboard is for characters to be composed. For example, this sequence "wa" would produce ᐘ (U+1418).</p>
  <p>You can change the keyboard to produce decomposed characters in two ways. The preferred method is to use <b>Keyman → Configuration</b>.</p>
<ol>
	<li><b>Using Keyman Configuration</b>: On Windows or Linux, go to <b>Keyman → Configuration → Keyboard Layouts → BJ-OjiCree (Kingfisher) → Keyboard Options</b> and choose <b>Decomposed</b>. 
	You may need to close and reopen your input application and keyboard, before the default behavior changes. This method will change your default to <i>Decomposed</i> and 
	everytime you switch to this keyboard it will remain using the <i>Decomposed</i> style until you change it back to <i>Composed</i> style using <b>Keyman configuration</b>.</li>
<li><b>Using RALT hotkeys</b> (primarily needed for macOS): It is also possible to switch from <i>Composed</i> to <i>Decomposed</i> using the RALT HYPHEN sequence (RALT+-). 
	Switch back to <i>Composed</i> using the RALT EQUAL sequence (RALT+=). This method will change to <i>Decomposed</i> during just this session of 
	using the keyboard. After you stop using the keyboard it will return to <i>Composed</i>.</li>
</ol>
</div>
	<h4>Basic Function</h4>
	<p>This keyboard is phonetic. The basic consonant+vowel syllabic characters are formed as a result of pressing the equivalent Latin letters. For example, type <kbd>n</kbd><kbd>a</kbd> to get <samp>ᓇ</samp>, and type <kbd>n</kbd><kbd>i</kbd> to get <samp>ᓂ</samp>. Type the vowel a second time to get the dot over the character for "long" syllables:  <kbd>n</kbd><kbd>i</kbd><kbd>i</kbd> to get <samp>ᓃ</samp>. For a consonant alone (finals) simply type the consonant not followed by a vowel: type <kbd>n</kbd><kbd>i</kbd><kbd>i</kbd><kbd>n</kbd> to get <samp>ᓃᐣ</samp>. Finally, the "w" dot (mid-dot) is formed by typing the <kbd>w</kbd> key between the consonant and vowel: type <kbd>n</kbd><kbd>w</kbd><kbd>a</kbd> to get <samp>ᓇᐧ</samp> and <kbd>n</kbd><kbd>w</kbd><kbd>a</kbd><kbd>a</kbd> to get <samp>ᓈᐧ</samp>.
	<h4>On Screen Keyboard</h4>
	<p>The On Screen Keyboard view for this keyboard is simply a QWERTY US layout, since the keyboard equivalents are designed to match the Latin characters standard Oji-Cree syllabic chart.</p>
	<h4>Fonts</h4>
	<p>This keyboard installs with the Unicode Aboriginal Syllabic font <b>BJCreeUNI</b>, which offers full support for the characters in Oji-Cree and other related languages.</p>
	<aside class='break'>
		
  </section>
  <section id='layout' class='break'>
    <div id='osk-container'>
      <h2>Desktop Keyboard Layout</h2>
      <div id='osk' data-states='default shift'></div>
    </div>
  </section>
  <section id='guide' class='break'>
	<h2>Typing Guide</h2>
	<p>This typing guide is based on the standard Oji-Cree syllabic chart.</p>

	<table class='grid colleft'>	
<tr>
     <th width="50"></th>
     <th width="50"></th>
     <th width="50"></th>
     <th width="50"></th>
     <th width="50"></th>     <th width="50"></th>
</tr>
		<tbody>	
			<tr>
				<th> </th>
				<th> e </th>
				<th>i/ii</th>
				<th>o/oo</th>
				<th>a/aa</th>
				<th>finals</th>
			</tr>
			<tr>
				<th> </th>
				<th><span class="cree">ᐁ</span></th>
				<th><span class="cree">ᐃ</span></th>
				<th><span class="cree">ᐅ</span></th>
				<th><span class="cree">ᐊ</span></th>
				<th> </th>
			</tr>
			<tr>
				<th>w</th>
				<th><span class="cree">ᐍ</span></th>
				<th><span class="cree">ᐏ</span></th>
				<th><span class="cree">ᐓ</span></th>
				<th><span class="cree">ᐘ</span></th>
				<th><span class="cree">ᐤ</span></th>
			</tr>
			<tr>
				<th>p</th>
				<th><span class="cree">ᐯ</span></th>
				<th><span class="cree">ᐱ</span></th>
				<th><span class="cree">ᐳ</span></th>
				<th><span class="cree">ᐸ</span></th>
				<th><span class="cree">ᑊ</span></th>
			</tr>
			<tr>
				<th>t</th>
				<th><span class="cree">ᑌ</span></th>
				<th><span class="cree">ᑎ</span></th>
				<th><span class="cree">ᑐ</span></th>
				<th><span class="cree">ᑕ</span></th>
				<th><span class="cree">ᐟ</span></th>
			</tr>
			<tr>
				<th>k</th>
				<th><span class="cree">ᑫ</span></th>
				<th><span class="cree">ᑭ</span></th>
				<th><span class="cree">ᑯ</span></th>
				<th><span class="cree">ᑲ</span></th>
				<th><span class="cree">ᐠ</span></th>
			</tr>
			<tr>
				<th>c</th>
				<th><span class="cree">ᒉ</span></th>
				<th><span class="cree">ᒋ</span></th>
				<th><span class="cree">ᒍ</span></th>
				<th><span class="cree">ᒐ</span></th>
				<th><span class="cree">ᐨ</span></th>
			</tr>
			<tr>
				<th>m</th>
				<th><span class="cree">ᒣ</span></th>
				<th><span class="cree">ᒥ</span></th>
				<th><span class="cree">ᒧ</span></th>
				<th><span class="cree">ᒪ</span></th>
				<th><span class="cree">ᒼ</span></th>
			</tr>
			<tr>
				<th>n</th>
				<th><span class="cree">ᓀ</span></th>
				<th><span class="cree">ᓂ</span></th>
				<th><span class="cree">ᓄ</span></th>
				<th><span class="cree">ᓇ</span></th>
				<th><span class="cree">ᐣ</span></th>
			</tr>
			<tr>
				<th>s</th>
				<th><span class="cree">ᓭ</span></th>
				<th><span class="cree">ᓯ</span></th>
				<th><span class="cree">ᓱ</span></th>
				<th><span class="cree">ᓴ</span></th>
				<th><span class="cree">ᐢ</span></th>
			</tr>
			<tr>
				<th>sh</th>
				<th><span class="cree">ᔐ</span></th>
				<th><span class="cree">ᔑ</span></th>
				<th><span class="cree">ᔓ</span></th>
				<th><span class="cree">ᔕ</span></th>
				<th><span class="cree">ᐡ</span></th>
			</tr>
			<tr>
				<th>y</th>
				<th><span class="cree">ᔦ</span></th>
				<th><span class="cree">ᔨ</span></th>
				<th><span class="cree">ᔪ</span></th>
				<th><span class="cree">ᔭ</span></th>
				<th><span class="cree">ᔭ</span></th>
			</tr>
			<tr>
				<th> </th>
				<th>(h)<span class="cree"> ᐦ </span></th>
				<th>(l)<span class="cree"> ᓬ </span></th>
				<th>(r)<span class="cree"> ᕒ </span></th>
				<th> </th>
			</tr>		
		</tbody>		
	</table>
  <p></p>
  </section>	