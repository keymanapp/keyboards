<?php 
  $pagename = 'Vai (Athinkra) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    samp {font:18pt Dukor; color:blue; }
    kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px;  padding:2px 4px; vertical-align:middle; line-height:2em; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
END;
  
  require_once('header.php');
?>

<p>
    A Keyman keyboard for the Vai language of Liberia, developed by the team at Athinkra, LLC.
</p>
<p>Because there are so many characters in the Vai script, this keyboard requires multiple keystrokes to access most of the characters.</p>

<h2>Desktop Keyboard Layout</h2>
<p>Vowel marks are on the corresponding vowel keys. Syllable Ng is also on a keycap. 
	<p>To type a consonant, you must type the consonant first, and then the vowel. For example:</p>
<ul>ɓꔀ (be) will produce ꔇ.</ul>
	<p>To type a nasal vowel, you must type the vowel first, and then the tilde. For example:</p>
<ul>ꕉ~ (a~) will produce ꕊ.</ul>
<ul>hꔤ~ (hi~) will produce ꔥ.</ul>

	<p>To type a breathy character, you must type the consonant first, then the h, and then the vowel. For example:</p>
<ul>bhꔤ (bhi) will produce ꔫ.</ul>

<p>Similar characters can be formed by typing "dl", "gb", "kp", "mgb", "mb", "nd", "ng", "ngg", "nj", and "ny" followed by a vowel. </p>

<p>The hyphen characters on the RIGHT ALT layer are used for accessing historic syllables. Type the character followed by a vowel and the historic syllable will be formed. There are not historic syllables for every vowel, so the hyphen may remain in the text unexpectedly).</p>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>


	<p>A table listing all the characters and keystrokes is below.</p>

<table class='grid colleft'>
  <col class='keys' />
  <col class='name' />
  <col class='glyph' />
<thead>
  <tr>
    <th>Keys</th><th>Name</th><th>Glyph</th>
  </tr>
</thead>
<tbody>
  <tr class='headrow'>
    <td colspan='3'>vowel</td>
  </tr>
  <tr>
    <td><kbd>e</kbd></td><td>ee</td><td><samp>&#xA500;</samp></td>
  </tr>
  <tr>
    <td><kbd>i</kbd></td><td>i</td><td><samp>&#xA524;</samp></td>
  </tr>
  <tr>
    <td><kbd>a</kbd></td><td>a</td><td><samp>&#xA549;</samp></td>
  </tr>
  <tr>
    <td><kbd>a</kbd><kbd>~</kbd></td><td>an</td><td><samp>&#xA54A;</samp></td>
  </tr>
  <tr>
    <td><kbd>o</kbd></td><td>oo</td><td><samp>&#xA571;</samp></td>
  </tr>
  <tr>
    <td><kbd>u</kbd></td><td>u</td><td><samp>&#xA595;</samp></td>
  </tr>
  <tr>
    <td><kbd>O</kbd></td><td>o</td><td><samp>&#xA5BA;</samp></td>
  </tr>
  <tr>
    <td><kbd>O</kbd><kbd>~</kbd></td><td>o</td><td><samp>&#xA5BB;</samp></td>
  </tr>
  <tr>
    <td><kbd>E</kbd></td><td>e</td><td><samp>&#xA5E1;</samp></td>
  </tr>
  <tr>
    <td><kbd>E</kbd><kbd>~</kbd></td><td>e</td><td><samp>&#xA5E2;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>N- (ŋ)</td>
  </tr>
  <tr>
    <td><kbd>N</kbd><kbd>a</kbd></td><td>ngan</td><td><samp>&#xA54B;</samp></td>
  </tr>
  <tr>
    <td><kbd>N</kbd><kbd>O</kbd></td><td>ngon</td><td><samp>&#xA5BC;</samp></td>
  </tr>
  <tr>
    <td><kbd>N</kbd><kbd>E</kbd></td><td>ngen</td><td><samp>&#xA5E3;</samp></td>
  </tr>
   <tr class='headrow'>
    <td colspan='3'>h-</td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>e</kbd></td><td>hee</td><td><samp>&#xA502;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>i</kbd></td><td>hi</td><td><samp>&#xA526;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>I</kbd></td><td>hin</td><td><samp>&#xA527;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>a</kbd></td><td>ha</td><td><samp>&#xA54C;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>a</kbd><kbd>~</kbd></td><td>han</td><td><samp>&#xA54D;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>o</kbd></td><td>hoo</td><td><samp>&#xA573;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>u</kbd></td><td>hu</td><td><samp>&#xA597;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>u</kbd><kbd>~</kbd></td><td>hun</td><td><samp>&#xA598;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>O</kbd></td><td>ho</td><td><samp>&#xA5BD;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>O</kbd><kbd>~</kbd></td><td>hon</td><td><samp>&#xA5BE;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>E</kbd></td><td>he</td><td><samp>&#xA5E4;</samp></td>
  </tr>
  <tr>
    <td><kbd>h</kbd><kbd>E</kbd><kbd>~</kbd></td><td>hen</td><td><samp>&#xA5E5;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>w-</td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>e</kbd></td><td>wee</td><td><samp>&#xA503;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>E</kbd></td><td>ween</td><td><samp>&#xA504;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>i</kbd></td><td>wi</td><td><samp>&#xA528;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>i</kbd><kbd>~</kbd></td><td>win</td><td><samp>&#xA529;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>a</kbd></td><td>wa</td><td><samp>&#xA54E;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>a</kbd><kbd>~</kbd></td><td>wan</td><td><samp>&#xA54F;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>o</kbd></td><td>woo</td><td><samp>&#xA574;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>o</kbd><kbd>~</kbd></td><td>woon</td><td><samp>&#xA575;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>u</kbd></td><td>wu</td><td><samp>&#xA599;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>u</kbd><kbd>~</kbd></td><td>wun</td><td><samp>&#xA59A;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>O</kbd></td><td>wo</td><td><samp>&#xA5BF;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>O</kbd><kbd>~</kbd></td><td>won</td><td><samp>&#xA5C0;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>E</kbd></td><td>we</td><td><samp>&#xA5E6;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>E</kbd><kbd>~</kbd></td><td>wen</td><td><samp>&#xA5E7;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>p-</td>
  </tr>
  <tr>
    <td><kbd>p</kbd><kbd>e</kbd></td><td>pee</td><td><samp>&#xA505;</samp></td>
  </tr>
  <tr>
    <td><kbd>p</kbd><kbd>i</kbd></td><td>pi</td><td><samp>&#xA52A;</samp></td>
  </tr>
  <tr>
    <td><kbd>p</kbd><kbd>a</kbd></td><td>pa</td><td><samp>&#xA550;</samp></td>
  </tr>
  <tr>
    <td><kbd>p</kbd><kbd>o</kbd></td><td>poo</td><td><samp>&#xA576;</samp></td>
  </tr>
  <tr>
    <td><kbd>p</kbd><kbd>u</kbd></td><td>pu</td><td><samp>&#xA59B;</samp></td>
  </tr>
  <tr>
    <td><kbd>p</kbd><kbd>O</kbd></td><td>po</td><td><samp>&#xA5C1;</samp></td>
  </tr>
  <tr>
    <td><kbd>p</kbd><kbd>E</kbd></td><td>pe</td><td><samp>&#xA5E8;</samp></td> 
  </tr>
  <tr class='headrow'>
    <td colspan='3'>bh-</td>
  </tr>
    <td><kbd>b</kbd><kbd>h</kbd><kbd>e</kbd></td><td>bhee</td><td><samp>&#xA506;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>h</kbd><kbd>i</kbd></td><td>bhi</td><td><samp>&#xA52B;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>h</kbd><kbd>a</kbd></td><td>bha</td><td><samp>&#xA551;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>h</kbd><kbd>o</kbd></td><td>bhoo</td><td><samp>&#xA577;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>h</kbd><kbd>u</kbd></td><td>bhu</td><td><samp>&#xA59C;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>h</kbd><kbd>O</kbd></td><td>bho</td><td><samp>&#xA5C2;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>h</kbd><kbd>E</kbd></td><td>bhe</td><td><samp>&#xA5E9;</samp></td> 
  </tr>
  <tr class='headrow'>
    <td colspan='3'>b- (ɓ)</td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>e</kbd></td><td>bee</td><td><samp>&#xA507;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>i</kbd></td><td>bi</td><td><samp>&#xA52C;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>a</kbd></td><td>ba</td><td><samp>&#xA552;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>o</kbd></td><td>boo</td><td><samp>&#xA578;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>u</kbd></td><td>bu</td><td><samp>&#xA59D;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>O</kbd></td><td>bo</td><td><samp>&#xA5C3;</samp></td>
  </tr>
  <tr>
    <td><kbd>b</kbd><kbd>E</kbd></td><td>be</td><td><samp>&#xA5EA;</samp></td> 
  </tr>
  <tr class='headrow'>
    <td colspan='3'>mb-</td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>b</kbd><kbd>e</kbd></td><td>mbee</td><td><samp>&#xA508;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>b</kbd><kbd>i</kbd></td><td>mbi</td><td><samp>&#xA52D;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>b</kbd><kbd>a</kbd></td><td>mba</td><td><samp>&#xA553;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>b</kbd><kbd>o</kbd></td><td>mboo</td><td><samp>&#xA579;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>b</kbd><kbd>u</kbd></td><td>mbu</td><td><samp>&#xA59E;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>b</kbd><kbd>O</kbd></td><td>mbo</td><td><samp>&#xA5C4;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>b</kbd><kbd>E</kbd></td><td>mbe</td><td><samp>&#xA5EB;</samp></td> 
  </tr>
  
    <tr class='headrow'>
    <td colspan='3'>kp-</td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>p</kbd><kbd>e</kbd></td><td>kpee</td><td><samp>&#xA509;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>p</kbd><kbd>i</kbd></td><td>kpi</td><td><samp>&#xA52E;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>p</kbd><kbd>a</kbd></td><td>kpa</td><td><samp>&#xA554;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>p</kbd><kbd>o</kbd></td><td>kpoo</td><td><samp>&#xA57A;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>p</kbd><kbd>u</kbd></td><td>kou</td><td><samp>&#xA59F;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>p</kbd><kbd>O</kbd></td><td>ko</td><td><samp>&#xA5C5;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>p</kbd><kbd>E</kbd></td><td>kpe</td><td><samp>&#xA5EC;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>p</kbd><kbd>E</kbd><kbd>~</kbd></td><td>kpen</td><td><samp>&#xA5ED;</samp></td>  
  </tr>
  <tr class='headrow'>
    <td colspan='3'>V- (mgb)</td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>g</kbd><kbd>b</kbd><kbd>e</kbd></td><td>mgbee</td><td><samp>&#xA50A;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>g</kbd><kbd>b</kbd><kbd>i</kbd></td><td>mgbi</td><td><samp>&#xA52F;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>g</kbd><kbd>b</kbd><kbd>a</kbd></td><td>mgba</td><td><samp>&#xA556;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>g</kbd><kbd>b</kbd><kbd>o</kbd></td><td>mgboo</td><td><samp>&#xA57B;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>g</kbd><kbd>b</kbd><kbd>u</kbd></td><td>mgbu</td><td><samp>&#xA5A0;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>g</kbd><kbd>b</kbd><kbd>O</kbd></td><td>mgbo</td><td><samp>&#xA5C6;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>g</kbd><kbd>b</kbd><kbd>E</kbd></td><td>mgbe</td><td><samp>&#xA5EE;</samp></td> 
  </tr>
  <tr class='headrow'>
    <td colspan='3'>gh-</td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>b</kbd><kbd>e</kbd></td><td>gbee</td><td><samp>&#xA50B;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>b</kbd><kbd>i</kbd></td><td>gbi</td><td><samp>&#xA530;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>b</kbd><kbd>a</kbd></td><td>gba</td><td><samp>&#xA557;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>b</kbd><kbd>o</kbd></td><td>gboo</td><td><samp>&#xA57C;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>b</kbd><kbd>u</kbd></td><td>gbu</td><td><samp>&#xA5A1;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>b</kbd><kbd>O</kbd></td><td>gbo</td><td><samp>&#xA5C7;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>b</kbd><kbd>O</kbd><kbd>~</kbd></td><td>gbon</td><td><samp>&#xA5C8;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>b</kbd><kbd>E</kbd></td><td>gbe</td><td><samp>&#xA5EF;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>b</kbd><kbd>E</kbd><kbd>~</kbd></td><td>gben</td><td><samp>&#xA5F0;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>f-</td>
  </tr>
  <tr>
    <td><kbd>f</kbd><kbd>e</kbd></td><td>fee</td><td><samp>&#xA50C;</samp></td>
  </tr>
  <tr>
    <td><kbd>f</kbd><kbd>i</kbd></td><td>fi</td><td><samp>&#xA531;</samp></td>
  </tr>
  <tr>
    <td><kbd>f</kbd><kbd>a</kbd></td><td>fa</td><td><samp>&#xA558;</samp></td>
  </tr>
  <tr>
    <td><kbd>f</kbd><kbd>o</kbd></td><td>foo</td><td><samp>&#xA57D;</samp></td>
  </tr>
  <tr>
    <td><kbd>f</kbd><kbd>u</kbd></td><td>fu</td><td><samp>&#xA5A2;</samp></td>
  </tr>
  <tr>
    <td><kbd>f</kbd><kbd>O</kbd></td><td>fo</td><td><samp>&#xA5C9;</samp></td>
  </tr>
  <tr>
    <td><kbd>f</kbd><kbd>E</kbd></td><td>fe</td><td><samp>&#xA5F1;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>F- (v)</td>
  </tr>
  <tr>
    <td><kbd>v</kbd><kbd>e</kbd></td><td>vee</td><td><samp>&#xA50D;</samp></td>
  </tr>
  <tr>
    <td><kbd>v</kbd><kbd>i</kbd></td><td>vi</td><td><samp>&#xA532;</samp></td>
  </tr>
  <tr>
    <td><kbd>v</kbd><kbd>a</kbd></td><td>va</td><td><samp>&#xA559;</samp></td>
  </tr>
  <tr>
    <td><kbd>v</kbd><kbd>o</kbd></td><td>voo</td><td><samp>&#xA57E;</samp></td>
  </tr>
  <tr>
    <td><kbd>v</kbd><kbd>u</kbd></td><td>vu</td><td><samp>&#xA5A3;</samp></td>
  </tr>
  <tr>
    <td><kbd>v</kbd><kbd>O</kbd></td><td>vo</td><td><samp>&#xA5CA;</samp></td>
  </tr>
  <tr>
    <td><kbd>v</kbd><kbd>E</kbd></td><td>ve</td><td><samp>&#xA5F2;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>t-</td>
  </tr>
  <tr>
    <td><kbd>t</kbd><kbd>e</kbd></td><td>tee</td><td><samp>&#xA50E;</samp></td>
  </tr>
  <tr>
    <td><kbd>t</kbd><kbd>i</kbd></td><td>ti</td><td><samp>&#xA533;</samp></td>
  </tr>
  <tr>
    <td><kbd>t</kbd><kbd>a</kbd></td><td>ta</td><td><samp>&#xA55A;</samp></td>
  </tr>
  <tr>
    <td><kbd>t</kbd><kbd>o</kbd></td><td>too</td><td><samp>&#xA57F;</samp></td>
  </tr>
  <tr>
    <td><kbd>t</kbd><kbd>u</kbd></td><td>tu</td><td><samp>&#xA5A4;</samp></td>
  </tr>
  <tr>
    <td><kbd>t</kbd><kbd>O</kbd></td><td>to</td><td><samp>&#xA5CB;</samp></td>
  </tr>
  <tr>
    <td><kbd>t</kbd><kbd>E</kbd></td><td>te</td><td><samp>&#xA5F3;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>T- (þ)</td>
  </tr>
  <tr>
    <td><kbd>T</kbd><kbd>e</kbd></td><td>thee</td><td><samp>&#xA50F;</samp></td>
  </tr>
  <tr>
    <td><kbd>T</kbd><kbd>i</kbd></td><td>thi</td><td><samp>&#xA534;</samp></td>
  </tr>
  <tr>
    <td><kbd>T</kbd><kbd>a</kbd></td><td>tha</td><td><samp>&#xA55B;</samp></td>
  </tr>
  <tr>
    <td><kbd>T</kbd><kbd>o</kbd></td><td>thoo</td><td><samp>&#xA580;</samp></td>
  </tr>
  <tr>
    <td><kbd>T</kbd><kbd>u</kbd></td><td>thu</td><td><samp>&#xA5A5;</samp></td>
  </tr>
  <tr>
    <td><kbd>T</kbd><kbd>O</kbd></td><td>tho</td><td><samp>&#xA5CC;</samp></td>
  </tr>
  <tr>
    <td><kbd>T</kbd><kbd>E</kbd></td><td>the</td><td><samp>&#xA5F4;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>d-</td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>e</kbd></td><td>dhee</td><td><samp>&#xA510;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>i</kbd></td><td>dhi</td><td><samp>&#xA535;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>a</kbd></td><td>dha</td><td><samp>&#xA55C;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>o</kbd></td><td>dhoo</td><td><samp>&#xA581;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>u</kbd></td><td>dhu</td><td><samp>&#xA5A6;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>O</kbd></td><td>dho</td><td><samp>&#xA5CD;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>E</kbd></td><td>dhe</td><td><samp>&#xA5F5;</samp></td>
  </tr>
 
  <tr class='headrow'>
    <td colspan='3'>D- (&#x00F0;)</td>
  </tr>
  <tr>
    <td><kbd>D</kbd><kbd>e</kbd></td><td>dhhee</td><td><samp>&#xA511;</samp></td>
  </tr>
  <tr>
    <td><kbd>D</kbd><kbd>i</kbd></td><td>dhhi</td><td><samp>&#xA536;</samp></td>
  </tr>
  <tr>
    <td><kbd>D</kbd><kbd>a</kbd></td><td>dhha</td><td><samp>&#xA55D;</samp></td>
  </tr>
  <tr>
    <td><kbd>D</kbd><kbd>o</kbd></td><td>dhhoo</td><td><samp>&#xA582;</samp></td>
  </tr>
  <tr>
    <td><kbd>D</kbd><kbd>u</kbd></td><td>dhhu</td><td><samp>&#xA5A7;</samp></td>
  </tr>
  <tr>
    <td><kbd>D</kbd><kbd>O</kbd></td><td>dhho</td><td><samp>&#xA5CE;</samp></td>
  </tr>
  <tr>
    <td><kbd>D</kbd><kbd>E</kbd></td><td>dhhe</td><td><samp>&#xA5F6;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>l-</td>
  </tr>
  <tr>
    <td><kbd>l</kbd><kbd>e</kbd></td><td>lee</td><td><samp>&#xA512;</samp></td>
  </tr>
  <tr>
    <td><kbd>l</kbd><kbd>i</kbd></td><td>li</td><td><samp>&#xA537;</samp></td>
  </tr>
  <tr>
    <td><kbd>l</kbd><kbd>a</kbd></td><td>la</td><td><samp>&#xA55E;</samp></td>
  </tr>
  <tr>
    <td><kbd>l</kbd><kbd>o</kbd></td><td>loo</td><td><samp>&#xA583;</samp></td>
  </tr>
  <tr>
    <td><kbd>l</kbd><kbd>u</kbd></td><td>lu</td><td><samp>&#xA5A8;</samp></td>
  </tr>
  <tr>
    <td><kbd>l</kbd><kbd>O</kbd></td><td>lo</td><td><samp>&#xA5CF;</samp></td>
  </tr>
  <tr>
    <td><kbd>l</kbd><kbd>E</kbd></td><td>le</td><td><samp>&#xA5F7;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>r-</td>
  </tr>
  <tr>
    <td><kbd>r</kbd><kbd>e</kbd></td><td>ree</td><td><samp>&#xA513;</samp></td>
  </tr>
  <tr>
    <td><kbd>r</kbd><kbd>i</kbd></td><td>ri</td><td><samp>&#xA538;</samp></td>
  </tr>
  <tr>
    <td><kbd>r</kbd><kbd>a</kbd></td><td>ra</td><td><samp>&#xA55F;</samp></td>
  </tr>
  <tr>
    <td><kbd>r</kbd><kbd>o</kbd></td><td>roo</td><td><samp>&#xA584;</samp></td>
  </tr>
  <tr>
    <td><kbd>r</kbd><kbd>u</kbd></td><td>ru</td><td><samp>&#xA5A9;</samp></td>
  </tr>
  <tr>
    <td><kbd>r</kbd><kbd>O</kbd></td><td>ro</td><td><samp>&#xA5D0;</samp></td>
  </tr>
  <tr>
    <td><kbd>r</kbd><kbd>E</kbd></td><td>re</td><td><samp>&#xA5F8;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>dl-</td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>l</kbd><kbd>e</kbd></td><td>dee</td><td><samp>&#xA514;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>l</kbd><kbd>i</kbd></td><td>di</td><td><samp>&#xA539;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>l</kbd><kbd>a</kbd></td><td>da</td><td><samp>&#xA560;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>l</kbd><kbd>o</kbd></td><td>doo</td><td><samp>&#xA585;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>l</kbd><kbd>u</kbd></td><td>du</td><td><samp>&#xA5AA;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>l</kbd><kbd>O</kbd></td><td>do</td><td><samp>&#xA5D1;</samp></td>
  </tr>
  <tr>
    <td><kbd>d</kbd><kbd>l</kbd><kbd>E</kbd></td><td>de</td><td><samp>&#xA5F9;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>nd- (&#x0257;)</td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>d</kbd><kbd>e</kbd></td><td>ndee</td><td><samp>&#xA515;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>d</kbd><kbd>i</kbd></td><td>ndi</td><td><samp>&#xA53A;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>d</kbd><kbd>a</kbd></td><td>nda</td><td><samp>&#xA561;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>d</kbd><kbd>o</kbd></td><td>ndoo</td><td><samp>&#xA586;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>d</kbd><kbd>u</kbd></td><td>ndu</td><td><samp>&#xA5AB;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>d</kbd><kbd>O</kbd></td><td>ndo</td><td><samp>&#xA5D2;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>d</kbd><kbd>E</kbd></td><td>nde</td><td><samp>&#xA5FA;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>s-</td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>e</kbd></td><td>see</td><td><samp>&#xA516;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>i</kbd></td><td>si</td><td><samp>&#xA53B;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>a</kbd></td><td>sa</td><td><samp>&#xA562;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>o</kbd></td><td>soo</td><td><samp>&#xA587;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>u</kbd></td><td>su</td><td><samp>&#xA5AC;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>O</kbd></td><td>so</td><td><samp>&#xA5D3;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>E</kbd></td><td>se</td><td><samp>&#xA5FB;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>sh- (&#x0283;)</td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>h</kbd><kbd>e</kbd></td><td>shee</td><td><samp>&#xA517;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>h</kbd><kbd>i</kbd></td><td>shi</td><td><samp>&#xA53C;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>h</kbd><kbd>a</kbd></td><td>sha</td><td><samp>&#xA563;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>h</kbd><kbd>o</kbd></td><td>shoo</td><td><samp>&#xA588;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>h</kbd><kbd>u</kbd></td><td>shu</td><td><samp>&#xA5AD;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>h</kbd><kbd>O</kbd></td><td>sho</td><td><samp>&#xA5D4;</samp></td>
  </tr>
  <tr>
    <td><kbd>s</kbd><kbd>h</kbd><kbd>E</kbd></td><td>she</td><td><samp>&#xA5FC;</samp></td>
  </tr>
   <tr class='headrow'>
    <td colspan='3'>z-</td>
  </tr>
  <tr>
    <td><kbd>z</kbd><kbd>e</kbd></td><td>zee</td><td><samp>&#xA518;</samp></td>
  </tr>
  <tr>
    <td><kbd>z</kbd><kbd>i</kbd></td><td>zi</td><td><samp>&#xA53D;</samp></td>
  </tr>
  <tr>
    <td><kbd>z</kbd><kbd>a</kbd></td><td>za</td><td><samp>&#xA564;</samp></td>
  </tr>
  <tr>
    <td><kbd>z</kbd><kbd>o</kbd></td><td>zoo</td><td><samp>&#xA589;</samp></td>
  </tr>
  <tr>
    <td><kbd>z</kbd><kbd>u</kbd></td><td>zu</td><td><samp>&#xA5AE;</samp></td>
  </tr>
  <tr>
    <td><kbd>z</kbd><kbd>O</kbd></td><td>zo</td><td><samp>&#xA5D5;</samp></td>
  </tr>
  <tr>
    <td><kbd>z</kbd><kbd>E</kbd></td><td>ze</td><td><samp>&#xA5FD;</samp></td>
  </tr>
 
  <tr class='headrow'>
    <td colspan='3'>J- (&#x0292;)</td>
  </tr>
  <tr>
    <td><kbd>J</kbd><kbd>e</kbd></td><td>zhee</td><td><samp>&#xA519;</samp></td>
  </tr>
  <tr>
    <td><kbd>J</kbd><kbd>i</kbd></td><td>zhi</td><td><samp>&#xA53E;</samp></td>
  </tr>
  <tr>
    <td><kbd>J</kbd><kbd>a</kbd></td><td>zha</td><td><samp>&#xA565;</samp></td>
  </tr>
  <tr>
    <td><kbd>J</kbd><kbd>o</kbd></td><td>zhoo</td><td><samp>&#xA58A;</samp></td>
  </tr>
  <tr>
    <td><kbd>J</kbd><kbd>u</kbd></td><td>zhu</td><td><samp>&#xA5AF;</samp></td>
  </tr>
  <tr>
    <td><kbd>J</kbd><kbd>O</kbd></td><td>zho</td><td><samp>&#xA5D6;</samp></td>
  </tr>
  <tr>
    <td><kbd>J</kbd><kbd>E</kbd></td><td>zhe</td><td><samp>&#xA5FE;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>c-</td>
  </tr>
  <tr>
    <td><kbd>c</kbd><kbd>e</kbd></td><td>cee</td><td><samp>&#xA51A;</samp></td>
  </tr>
  <tr>
    <td><kbd>c</kbd><kbd>i</kbd></td><td>ci</td><td><samp>&#xA53F;</samp></td>
  </tr>
  <tr>
    <td><kbd>c</kbd><kbd>a</kbd></td><td>ca</td><td><samp>&#xA566;</samp></td>
  </tr>
  <tr>
    <td><kbd>c</kbd><kbd>o</kbd></td><td>coo</td><td><samp>&#xA58B;</samp></td>
  </tr>
  <tr>
    <td><kbd>c</kbd><kbd>u</kbd></td><td>cu</td><td><samp>&#xA5B0;</samp></td>
  </tr>
  <tr>
    <td><kbd>c</kbd><kbd>O</kbd></td><td>ci</td><td><samp>&#xA5D7;</samp></td>
  </tr>
  <tr>
    <td><kbd>c</kbd><kbd>E</kbd></td><td>ce</td><td><samp>&#xA5FF;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>j-</td>
  </tr>
  <tr>
    <td><kbd>j</kbd><kbd>e</kbd></td><td>jee</td><td><samp>&#xA51B;</samp></td>
  </tr>
  <tr>
    <td><kbd>j</kbd><kbd>i</kbd></td><td>ji</td><td><samp>&#xA540;</samp></td>
  </tr>
  <tr>
    <td><kbd>j</kbd><kbd>a</kbd></td><td>ja</td><td><samp>&#xA567;</samp></td>
  </tr>
  <tr>
    <td><kbd>j</kbd><kbd>o</kbd></td><td>joo</td><td><samp>&#xA58C;</samp></td>
  </tr>
  <tr>
    <td><kbd>j</kbd><kbd>u</kbd></td><td>ju</td><td><samp>&#xA5B1;</samp></td>
  </tr>
  <tr>
    <td><kbd>j</kbd><kbd>O</kbd></td><td>jo</td><td><samp>&#xA5D8;</samp></td>
  </tr>
  <tr>
    <td><kbd>j</kbd><kbd>E</kbd></td><td>je</td><td><samp>&#xA600;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>nj-</td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>j</kbd><kbd>e</kbd></td><td>njee</td><td><samp>&#xA51C;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>j</kbd><kbd>i</kbd></td><td>nji</td><td><samp>&#xA541;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>j</kbd><kbd>a</kbd></td><td>nja</td><td><samp>&#xA568;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>j</kbd><kbd>o</kbd></td><td>njoo</td><td><samp>&#xA58D;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>j</kbd><kbd>u</kbd></td><td>nju</td><td><samp>&#xA5B2;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>j</kbd><kbd>O</kbd></td><td>njo</td><td><samp>&#xA5D9;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>j</kbd><kbd>E</kbd></td><td>nje</td><td><samp>&#xA601;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>y-</td>
  </tr>
  <tr>
    <td><kbd>y</kbd><kbd>e</kbd></td><td>yee</td><td><samp>&#xA51D;</samp></td>
  </tr>
  <tr>
    <td><kbd>y</kbd><kbd>i</kbd></td><td>yi</td><td><samp>&#xA542;</samp></td>
  </tr>
  <tr>
    <td><kbd>y</kbd><kbd>a</kbd></td><td>ya</td><td><samp>&#xA569;</samp></td>
  </tr>
  <tr>
    <td><kbd>y</kbd><kbd>o</kbd></td><td>yoo</td><td><samp>&#xA58E;</samp></td>
  </tr>
  <tr>
    <td><kbd>y</kbd><kbd>u</kbd></td><td>yu</td><td><samp>&#xA5B3;</samp></td>
  </tr>
  <tr>
    <td><kbd>y</kbd><kbd>O</kbd></td><td>yo</td><td><samp>&#xA5DA;</samp></td>
  </tr>
  <tr>
    <td><kbd>y</kbd><kbd>E</kbd></td><td>ye</td><td><samp>&#xA602;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>k-</td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>e</kbd></td><td>kee</td><td><samp>&#xA51E;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>i</kbd></td><td>ki</td><td><samp>&#xA543;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>a</kbd></td><td>ka</td><td><samp>&#xA56A;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>a</kbd><kbd>~</kbd></td><td>kan</td><td><samp>&#xA56B;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>o</kbd></td><td>koo</td><td><samp>&#xA58F;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>u</kbd></td><td>ku</td><td><samp>&#xA5B4;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>O</kbd></td><td>ko</td><td><samp>&#xA5DB;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>E</kbd></td><td>ke</td><td><samp>&#xA603;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>ngg- (&#x014B;g)</td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>g</kbd><kbd>g</kbd><kbd>e</kbd></td><td>nggee</td><td><samp>&#xA51F;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>g</kbd><kbd>g</kbd><kbd>i</kbd></td><td>nggi</td><td><samp>&#xA544;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>g</kbd><kbd>g</kbd><kbd>a</kbd></td><td>ngga</td><td><samp>&#xA56C;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>g</kbd><kbd>g</kbd><kbd>o</kbd></td><td>nggoo</td><td><samp>&#xA590;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>g</kbd><kbd>g</kbd><kbd>u</kbd></td><td>nggu</td><td><samp>&#xA5B5;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>g</kbd><kbd>g</kbd><kbd>O</kbd></td><td>nggo</td><td><samp>&#xA5DC;</samp></td> 
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>g</kbd><kbd>g</kbd><kbd>E</kbd></td><td>ngge</td><td><samp>&#xA604;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>g</kbd><kbd>g</kbd><kbd>E</kbd><kbd>~</kbd></td><td>nggen</td><td><samp>&#xA605;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>g-</td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>e</kbd></td><td>gee</td><td><samp>&#xA520;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>i</kbd></td><td>gi</td><td><samp>&#xA545;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>a</kbd></td><td>ga</td><td><samp>&#xA56D;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>o</kbd></td><td>goo</td><td><samp>&#xA591;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>u</kbd></td><td>gu</td><td><samp>&#xA5B6;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>O</kbd></td><td>go</td><td><samp>&#xA5DD;</samp></td> 
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>E</kbd></td><td>ge</td><td><samp>&#xA606;</samp></td>
  </tr>
  <tr>
    <td><kbd>g</kbd><kbd>E</kbd><kbd>~</kbd></td><td>gen</td><td><samp>&#xA607;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>m-</td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>e</kbd></td><td>mee</td><td><samp>&#xA521;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>i</kbd></td><td>mi</td><td><samp>&#xA546;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>a</kbd></td><td>ma</td><td><samp>&#xA56E;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>o</kbd></td><td>moo</td><td><samp>&#xA592;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>u</kbd></td><td>mu</td><td><samp>&#xA5B7;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>O</kbd></td><td>mo</td><td><samp>&#xA5DE;</samp></td>
  </tr>
  <tr>
    <td><kbd>m</kbd><kbd>E</kbd></td><td>me</td><td><samp>&#xA608;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>n-</td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>e</kbd></td><td>nee</td><td><samp>&#xA522;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>i</kbd></td><td>ni</td><td><samp>&#xA547;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>a</kbd></td><td>na</td><td><samp>&#xA56F;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>o</kbd></td><td>noo</td><td><samp>&#xA593;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>u</kbd></td><td>nu</td><td><samp>&#xA5B8;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>O</kbd></td><td>no</td><td><samp>&#xA5DF;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>E</kbd></td><td>ne</td><td><samp>&#xA609;</samp></td>
  </tr>
  <tr class='headrow'>
    <td colspan='3'>ny-</td>
  </tr>
  <tr>
  <tr>
    <td><kbd>n</kbd><kbd>y</kbd><kbd>e</kbd></td><td>nyee</td><td><samp>&#xA523;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>y</kbd><kbd>i</kbd></td><td>nyi</td><td><samp>&#xA548;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>y</kbd><kbd>a</kbd></td><td>nya</td><td><samp>&#xA570;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>y</kbd><kbd>o</kbd></td><td>nyoo</td><td><samp>&#xA594;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>y</kbd><kbd>u</kbd></td><td>nyu</td><td><samp>&#xA5B9;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>y</kbd><kbd>O</kbd></td><td>nyo</td><td><samp>&#xA5E0;</samp></td>
  </tr>
  <tr>
    <td><kbd>n</kbd><kbd>y</kbd><kbd>E</kbd></td><td>nye</td><td><samp>&#xA60A;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT b</kbd><kbd>a</kbd></td><td>symbol bang</td><td><samp>&#xA617;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT f</kbd><kbd>e</kbd></td><td>symbol feeng</td><td><samp>&#xA613;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT f</kbd><kbd>a</kbd></td><td>symbol ndole fa</td><td><samp>&#xA610;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT t</kbd><kbd>i</kbd></td><td>symbol ting</td><td><samp>&#xA615;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT t</kbd><kbd>O</kbd></td><td>symbol tong</td><td><samp>&#xA61D;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT d</kbd><kbd>a</kbd></td><td>symbol dang</td><td><samp>&#xA61A;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT d</kbd><kbd>o</kbd></td><td>symbol doong</td><td><samp>&#xA61B;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT s</kbd><kbd>o</kbd></td><td>symbol ndole soo</td><td><samp>&#xA612;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT c</kbd><kbd>O</kbd></td><td>symbol jong</td><td><samp>&#xA61F;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT k</kbd><kbd>e</kbd></td><td>symbol keeng</td><td><samp>&#xA614;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT k</kbd><kbd>a</kbd></td><td>symbol ndole ka</td><td><samp>&#xA611;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT k</kbd><kbd>u</kbd></td><td>symbol kung</td><td><samp>&#xA61C;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT f</kbd><kbd>A</kbd></td><td>symbol faa</td><td><samp>&#xA618;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT t</kbd><kbd>a</kbd><kbd>~</kbd></td><td>symbol taa</td><td><samp>&#xA619;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT d</kbd><kbd>O</kbd><kbd>~</kbd></td><td>symbol do-o</td><td><samp>&#xA61E;</samp></td>
  </tr>
  <tr>
    <td><kbd>RALT n</kbd><kbd>i</kbd><kbd>~</kbd></td><td>symbol nii</td><td><samp>&#xA616;</samp></td>
  </tr>
  <tr>
    <td><kbd>X</kbd></td><td>lenthener</td><td><samp>&#xA60C;</samp></td>
  </tr>
  <tr>
    <td><kbd>x</kbd></td><td>ng</td><td><samp>&#xA60B;</samp></td>
  </tr>

</tbody>
</table>

</body>
</html>
