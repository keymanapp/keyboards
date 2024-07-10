<?php 
  $pagename = 'Mende Kikakui (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    samp {font:18pt Noto Sans Mende Kikakui; color:blue; }
    kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px;  padding:2px 4px; vertical-align:middle; line-height:2em; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
END;
   require_once('header.php');
?>

<p>
  This keyboard is for the Mende Kikakui script. It is based on a phonetic system of typing. The Keyboard works best when associated with a QWERTY US layout. Feedback on the keyboard design is welcome.</p>
<p>In order to type the <i>ki</i> syllable, <kbd>k</kbd><kbd>i</kbd> should be typed to output the <samp>&#x1E800;</samp> Mende Kikakui syllable.</p>
<p>In general, the long syllables are typed as normal followed by a hyphen. For example, <kbd>l</kbd><kbd>q</kbd> becomes <samp>&#x1E83A;</samp>, but <kbd>l</kbd><kbd>q</kbd><kbd>-</kbd> becomes <samp>&#x1E83D;</p>
<p>The syllables ending in an "N" usually are typed with an uppercase. For example, <i>min</i> is typed <kbd>M</kbd><kbd>i</kbd> becoming <samp>&#x1E814;</samp>, but <i>hin</i> is typed <kbd>h</kbd><kbd>I</kbd>to become <samp>&#x1E871;</samp>. Whether it is the first or second character which is uppercase is dependent on whether other forms exist; for example, there is no <i>mi</i> syllable, but there is an <i>hi</i> syllable.</p>
<p>The dipthongs can be typed in a sequence. For example <i>kua</i> is type as <kbd>k</kbd><kbd>u</kbd><kbd>a</kbd> to become <samp>&#x1E807;</samp>.</p>
<p>In the event that an undesired syllable is being formed, the <kbd>/</kbd> key can be used to end the syllable. For example, <kbd>x</kbd><kbd>u</kbd><kbd>a</kbd> (nggua) becomes <samp>&#x1E87F;</samp>. However, if <samp>&#x1E879;&#x1E823;</samp> (nggu / a) was desired, the keystrokes would be <kbd>x</kbd><kbd>u</kbd><kbd>/</kbd><kbd>a</kbd> (where the <kbd>/</kbd> is used to end the first syllable). If the forward slash is actually desired, type the slash twice.</p>

<h2>Desktop Keyboard layout</h2>
<div id='osk' data-states='default shift rightalt'>
</div>

<p>A table listing all the characters and keystrokes is below.</p>

<!-- Insert Keyboard Layout Images or HTML here -->

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
    <td colspan='3'>k-</td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>i</kbd></td><td>ki</td><td><samp>&#x1E800;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>a</kbd></td><td>ka</td><td><samp>&#x1E801;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>u</kbd></td><td>ku</td><td><samp>&#x1E802;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>e</kbd></td><td>kee</td><td><samp>&#x1E803;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>q</kbd></td><td>ke</td><td><samp>&#x1E804;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>o</kbd></td><td>koo</td><td><samp>&#x1E805;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>z</kbd></td><td>ko</td><td><samp>&#x1E806;</samp></td>
  </tr>
  <tr>
    <td><kbd>k</kbd><kbd>u</kbd><kbd>a</kbd></td><td>kua</td><td><samp>&#x1E807;</samp></td>
  </tr>

  <tr class='headrow'>
    <td colspan='3'>w-</td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>i</kbd></td><td>wi</td><td><samp>&#x1E808;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>a</kbd></td><td>wa</td><td><samp>&#x1E809;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>u</kbd></td><td>wu</td><td><samp>&#x1E80A;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>e</kbd></td><td>wee</td><td><samp>&#x1E80B;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>q</kbd></td><td>we</td><td><samp>&#x1E80C;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>o</kbd></td><td>woo</td><td><samp>&#x1E80D;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>z</kbd></td><td>wo</td><td><samp>&#x1E80E;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>u</kbd><kbd>i</kbd></td><td>wui</td><td><samp>&#x1E80F;</samp></td>
  </tr>
  <tr>
    <td><kbd>w</kbd><kbd>q</kbd><kbd>i</kbd></td><td>wei</td><td><samp>&#x1E810;</samp></td>
  </tr>

<tr class='headrow'>
  <td colspan='3'>wv-</td>
</tr>
<tr>
  <td><kbd>w</kbd><kbd>v</kbd><kbd>i</kbd></td><td>wvi</td><td><samp>&#x1E811;</samp></td>
</tr>
<tr>
  <td><kbd>w</kbd><kbd>v</kbd><kbd>a</kbd></td><td>wva</td><td><samp>&#x1E812;</samp></td>
</tr>
<tr>
  <td><kbd>w</kbd><kbd>v</kbd><kbd>q</kbd></td><td>wve</td><td><samp>&#x1E813;</samp></td>
</tr>

<tr class='headrow'>
  <td colspan='3'>m-</td>
</tr>
<tr>
  <td><kbd>M</kbd><kbd>i</kbd></td><td>min</td><td><samp>&#x1E814;</samp></td>
</tr>
<tr>
  <td><kbd>M</kbd><kbd>a</kbd></td><td>man</td><td><samp>&#x1E815;</samp></td>
</tr>
<tr>
  <td><kbd>M</kbd><kbd>u</kbd></td><td>mun</td><td><samp>&#x1E816;</samp></td>
</tr>
<tr>
  <td><kbd>M</kbd><kbd>q</kbd></td><td>men</td><td><samp>&#x1E817;</samp></td>
</tr>
<tr>
  <td><kbd>M</kbd><kbd>z</kbd></td><td>mon</td><td><samp>&#x1E818;</samp></td>
</tr>
<tr>
  <td><kbd>M</kbd><kbd>u</kbd><kbd>a</kbd></td><td>muan</td><td><samp>&#x1E819;</samp></td>
</tr>
<tr>
  <td><kbd>M</kbd><kbd>u</kbd><kbd>q</kbd></td><td>muen</td><td><samp>&#x1E81A;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>b-</td>
</tr>
<tr>
  <td><kbd>b</kbd><kbd>i</kbd></td><td>bi</td><td><samp>&#x1E81B;</samp></td>
</tr>
<tr>
  <td><kbd>b</kbd><kbd>a</kbd></td><td>ba</td><td><samp>&#x1E81C;</samp></td>
</tr>
<tr>
  <td><kbd>b</kbd><kbd>u</kbd></td><td>bu</td><td><samp>&#x1E81D;</samp></td>
</tr>
<tr>
  <td><kbd>b</kbd><kbd>e</kbd></td><td>bee</td><td><samp>&#x1E81E;</samp></td>
</tr>
<tr>
  <td><kbd>b</kbd><kbd>q</kbd></td><td>be</td><td><samp>&#x1E81F;</samp></td>
</tr>
<tr>
  <td><kbd>b</kbd><kbd>o</kbd></td><td>boo</td><td><samp>&#x1E820;</samp></td>
</tr>
<tr>
  <td><kbd>b</kbd><kbd>z</kbd></td><td>bo</td><td><samp>&#x1E821;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>Vowels</td>
</tr>
<tr>
  <td><kbd>i</kbd></td><td>i</td><td><samp>&#x1E822;</samp></td>
</tr>
<tr>
  <td><kbd>a</kbd></td><td>a</td><td><samp>&#x1E823;</samp></td>
</tr>
<tr>
  <td><kbd>u</kbd></td><td>u</td><td><samp>&#x1E824;</samp></td>
</tr>
<tr>
  <td><kbd>e</kbd></td><td>ee</td><td><samp>&#x1E825;</samp></td>
</tr>
<tr>
  <td><kbd>q</kbd></td><td>e</td><td><samp>&#x1E826;</samp></td>
</tr>
<tr>
  <td><kbd>o</kbd></td><td>oo</td><td><samp>&#x1E827;</samp></td>
</tr>
<tr>
  <td><kbd>z</kbd></td><td>o</td><td><samp>&#x1E828;</samp></td>
</tr>
<tr>
  <td><kbd>q</kbd><kbd>i</kbd></td><td>ei</td><td><samp>&#x1E829;</samp></td>
</tr>
<tr>
  <td><kbd>I</kbd></td><td>m131 in</td><td><samp>&#x1E82A;</samp></td>
</tr>
<tr>
  <td><kbd>I</kbd><kbd>N</kbd></td><td>m135 in</td><td><samp>&#x1E82B;</samp></td>
</tr>
<tr>
  <td><kbd>A</kbd></td><td>an</td><td><samp>&#x1E82C;</samp></td>
</tr>
<tr>
  <td><kbd>Q</kbd></td><td>en</td><td><samp>&#x1E82D;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>s-</td>
</tr>
<tr>
  <td><kbd>s</kbd><kbd>i</kbd></td><td>si</td><td><samp>&#x1E82E;</samp></td>
</tr>
<tr>
  <td><kbd>s</kbd><kbd>a</kbd></td><td>sa</td><td><samp>&#x1E82F;</samp></td>
</tr>
<tr>
  <td><kbd>s</kbd><kbd>u</kbd></td><td>su</td><td><samp>&#x1E830;</samp></td>
</tr>
<tr>
  <td><kbd>s</kbd><kbd>e</kbd></td><td>see</td><td><samp>&#x1E831;</samp></td>
</tr>
<tr>
  <td><kbd>s</kbd><kbd>q</kbd></td><td>se</td><td><samp>&#x1E832;</samp></td>
</tr>
<tr>
  <td><kbd>s</kbd><kbd>o</kbd></td><td>soo</td><td><samp>&#x1E833;</samp></td>
</tr>
<tr>
  <td><kbd>s</kbd><kbd>z</kbd></td><td>so</td><td><samp>&#x1E834;</samp></td>
</tr>
<tr>
  <td><kbd>s</kbd><kbd>i</kbd><kbd>a</kbd></td><td>sia</td><td><samp>&#x1E835;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>l-</td>
</tr>
<tr>
  <td><kbd>l</kbd><kbd>i</kbd></td><td>li</td><td><samp>&#x1E836;</samp></td>
</tr>
<tr>
  <td><kbd>l</kbd><kbd>a</kbd></td><td>la</td><td><samp>&#x1E837;</samp></td>
</tr>
<tr>
  <td><kbd>l</kbd><kbd>u</kbd></td><td>lu</td><td><samp>&#x1E838;</samp></td>
</tr>
<tr>
  <td><kbd>l</kbd><kbd>e</kbd></td><td>lee</td><td><samp>&#x1E839;</samp></td>
</tr>
<tr>
  <td><kbd>l</kbd><kbd>q</kbd></td><td>le</td><td><samp>&#x1E83A;</samp></td>
</tr>
<tr>
  <td><kbd>l</kbd><kbd>o</kbd></td><td>loo</td><td><samp>&#x1E83B;</samp></td>
</tr>
<tr>
  <td><kbd>l</kbd><kbd>z</kbd></td><td>lo</td><td><samp>&#x1E83C;</samp></td>
</tr>
<tr>
  <td><kbd>l</kbd><kbd>q</kbd><kbd>-</kbd></td><td>long le</td><td><samp>&#x1E83D;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>d-</td>
</tr>
<tr>
  <td><kbd>d</kbd><kbd>i</kbd></td><td>di</td><td><samp>&#x1E83E;</samp></td>
</tr>
<tr>
  <td><kbd>d</kbd><kbd>a</kbd></td><td>da</td><td><samp>&#x1E83F;</samp></td>
</tr>
<tr>
  <td><kbd>d</kbd><kbd>u</kbd></td><td>du</td><td><samp>&#x1E840;</samp></td>
</tr>
<tr>
  <td><kbd>d</kbd><kbd>e</kbd></td><td>dee</td><td><samp>&#x1E841;</samp></td>
</tr>
<tr>
  <td><kbd>d</kbd><kbd>o</kbd></td><td>doo</td><td><samp>&#x1E842;</samp></td>
</tr>
<tr>
  <td><kbd>d</kbd><kbd>z</kbd></td><td>do</td><td><samp>&#x1E843;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>t-</td>
</tr>
<tr>
  <td><kbd>t</kbd><kbd>i</kbd></td><td>ti</td><td><samp>&#x1E844;</samp></td>
</tr>
<tr>
  <td><kbd>t</kbd><kbd>a</kbd></td><td>ta</td><td><samp>&#x1E845;</samp></td>
</tr>
<tr>
  <td><kbd>t</kbd><kbd>u</kbd></td><td>tu</td><td><samp>&#x1E846;</samp></td>
</tr>
<tr>
  <td><kbd>t</kbd><kbd>e</kbd></td><td>tee</td><td><samp>&#x1E847;</samp></td>
</tr>
<tr>
  <td><kbd>t</kbd><kbd>q</kbd></td><td>te</td><td><samp>&#x1E848;</samp></td>
</tr>
<tr>
  <td><kbd>t</kbd><kbd>o</kbd></td><td>too</td><td><samp>&#x1E849;</samp></td>
</tr>
<tr>
  <td><kbd>t</kbd><kbd>z</kbd></td><td>to</td><td><samp>&#x1E84A;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>j-</td>
</tr>
<tr>
  <td><kbd>j</kbd><kbd>i</kbd></td><td>ji</td><td><samp>&#x1E84B;</samp></td>
</tr>
<tr>
  <td><kbd>j</kbd><kbd>a</kbd></td><td>ja</td><td><samp>&#x1E84C;</samp></td>
</tr>
<tr>
  <td><kbd>j</kbd><kbd>u</kbd></td><td>ju</td><td><samp>&#x1E84D;</samp></td>
</tr>
<tr>
  <td><kbd>j</kbd><kbd>e</kbd></td><td>jee</td><td><samp>&#x1E84E;</samp></td>
</tr>
<tr>
  <td><kbd>j</kbd><kbd>q</kbd></td><td>je</td><td><samp>&#x1E84F;</samp></td>
</tr>
<tr>
  <td><kbd>j</kbd><kbd>o</kbd></td><td>joo</td><td><samp>&#x1E850;</samp></td>
</tr>
<tr>
  <td><kbd>j</kbd><kbd>z</kbd></td><td>jo</td><td><samp>&#x1E851;</samp></td>
</tr>
<tr>
  <td><kbd>j</kbd><kbd>z</kbd><kbd>-</kbd></td><td>long jo</td><td><samp>&#x1E852;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>y-</td>
</tr>
<tr>
  <td><kbd>y</kbd><kbd>i</kbd></td><td>yi</td><td><samp>&#x1E853;</samp></td>
</tr>
<tr>
  <td><kbd>y</kbd><kbd>a</kbd></td><td>ya</td><td><samp>&#x1E854;</samp></td>
</tr>
<tr>
  <td><kbd>y</kbd><kbd>u</kbd></td><td>yu</td><td><samp>&#x1E855;</samp></td>
</tr>
<tr>
  <td><kbd>y</kbd><kbd>e</kbd></td><td>yee</td><td><samp>&#x1E856;</samp></td>
</tr>
<tr>
  <td><kbd>y</kbd><kbd>q</kbd></td><td>ye</td><td><samp>&#x1E857;</samp></td>
</tr>
<tr>
  <td><kbd>y</kbd><kbd>o</kbd></td><td>yoo</td><td><samp>&#x1E858;</samp></td>
</tr>
<tr>
  <td><kbd>y</kbd><kbd>z</kbd></td><td>yo</td><td><samp>&#x1E859;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>f-</td>
</tr>
<tr>
  <td><kbd>f</kbd><kbd>i</kbd></td><td>fi</td><td><samp>&#x1E85A;</samp></td>
</tr>
<tr>
  <td><kbd>f</kbd><kbd>a</kbd></td><td>fa</td><td><samp>&#x1E85B;</samp></td>
</tr>
<tr>
  <td><kbd>f</kbd><kbd>u</kbd></td><td>fu</td><td><samp>&#x1E85C;</samp></td>
</tr>
<tr>
  <td><kbd>f</kbd><kbd>e</kbd></td><td>fee</td><td><samp>&#x1E85D;</samp></td>
</tr>
<tr>
  <td><kbd>f</kbd><kbd>q</kbd></td><td>fe</td><td><samp>&#x1E85E;</samp></td>
</tr>
<tr>
  <td><kbd>f</kbd><kbd>o</kbd></td><td>foo</td><td><samp>&#x1E85F;</samp></td>
</tr>
<tr>
  <td><kbd>f</kbd><kbd>z</kbd></td><td>fo</td><td><samp>&#x1E860;</samp></td>
</tr>
<tr>
  <td><kbd>f</kbd><kbd>u</kbd><kbd>a</kbd></td><td>fua</td><td><samp>&#x1E861;</samp></td>
</tr>
<tr>
  <td><kbd>f</kbd><kbd>A</kbd></td><td>fan</td><td><samp>&#x1E862;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>n-</td>
</tr>
<tr>
  <td><kbd>N</kbd><kbd>i</kbd></td><td>nin</td><td><samp>&#x1E863;</samp></td>
</tr>
<tr>
  <td><kbd>N</kbd><kbd>a</kbd></td><td>nan</td><td><samp>&#x1E864;</samp></td>
</tr>
<tr>
  <td><kbd>N</kbd><kbd>u</kbd></td><td>nun</td><td><samp>&#x1E865;</samp></td>
</tr>
<tr>
  <td><kbd>N</kbd><kbd>q</kbd></td><td>nen</td><td><samp>&#x1E866;</samp></td>
</tr>
<tr>
  <td><kbd>N</kbd><kbd>z</kbd></td><td>non</td><td><samp>&#x1E867;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>h-</td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>i</kbd></td><td>hi</td><td><samp>&#x1E868;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>a</kbd></td><td>ha</td><td><samp>&#x1E869;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>u</kbd></td><td>hu</td><td><samp>&#x1E86A;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>e</kbd></td><td>hee</td><td><samp>&#x1E86B;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>q</kbd></td><td>he</td><td><samp>&#x1E86C;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>o</kbd></td><td>hoo</td><td><samp>&#x1E86D;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>z</kbd></td><td>ho</td><td><samp>&#x1E86E;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>e</kbd><kbd>i</kbd></td><td>heei</td><td><samp>&#x1E86F;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>o</kbd><kbd>u</kbd></td><td>hoou</td><td><samp>&#x1E870;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>I</kbd></td><td>hin</td><td><samp>&#x1E871;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>A</kbd></td><td>han</td><td><samp>&#x1E872;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>U</kbd></td><td>hun</td><td><samp>&#x1E873;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>Q</kbd></td><td>hen</td><td><samp>&#x1E874;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>Z</kbd></td><td>hon</td><td><samp>&#x1E875;</samp></td>
</tr>
<tr>
  <td><kbd>h</kbd><kbd>u</kbd><kbd>A</kbd></td><td>huan</td><td><samp>&#x1E876;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>ngg-</td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>i</kbd></td><td>nggi</td><td><samp>&#x1E877;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>a</kbd></td><td>ngga</td><td><samp>&#x1E878;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>u</kbd></td><td>nggu</td><td><samp>&#x1E879;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>e</kbd></td><td>nggee</td><td><samp>&#x1E87A;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>q</kbd></td><td>ngge</td><td><samp>&#x1E87B;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>o</kbd></td><td>nggoo</td><td><samp>&#x1E87C;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>z</kbd></td><td>nggo</td><td><samp>&#x1E87D;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>a</kbd><kbd>a</kbd></td><td>nggaa</td><td><samp>&#x1E87E;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>u</kbd><kbd>a</kbd></td><td>nggua</td><td><samp>&#x1E87F;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>q</kbd><kbd>-</kbd></td><td>long ngge</td><td><samp>&#x1E880;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>o</kbd><kbd>-</kbd></td><td>long nggoo</td><td><samp>&#x1E881;</samp></td>
</tr>
<tr>
  <td><kbd>x</kbd><kbd>z</kbd><kbd>-</kbd></td><td>long nggo</td><td><samp>&#x1E882;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>g-</td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>i</kbd></td><td>gi</td><td><samp>&#x1E883;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>a</kbd></td><td>ga</td><td><samp>&#x1E884;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>u</kbd></td><td>gu</td><td><samp>&#x1E885;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>e</kbd></td><td>gee</td><td><samp>&#x1E886;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>u</kbd><kbd>q</kbd></td><td>guei</td><td><samp>&#x1E887;</samp></td>
</tr>
<tr>
  <td><kbd>b</kbd><kbd>u</kbd><kbd>A</kbd></td><td>guan</td><td><samp>&#x1E888;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>ng-</td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>g</kbd><kbd>E</kbd></td><td>ngen</td><td><samp>&#x1E889;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>g</kbd><kbd>Z</kbd></td><td>ngon</td><td><samp>&#x1E88A;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>g</kbd><kbd>U</kbd></td><td>nguan</td><td><samp>&#x1E88B;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>p-</td>
</tr>
<tr>
  <td><kbd>p</kbd><kbd>i</kbd></td><td>pi</td><td><samp>&#x1E88C;</samp></td>
</tr>
<tr>
  <td><kbd>p</kbd><kbd>a</kbd></td><td>pa</td><td><samp>&#x1E88D;</samp></td>
</tr>
<tr>
  <td><kbd>p</kbd><kbd>u</kbd></td><td>pu</td><td><samp>&#x1E88E;</samp></td>
</tr>
<tr>
  <td><kbd>p</kbd><kbd>e</kbd></td><td>pee</td><td><samp>&#x1E88F;</samp></td>
</tr>
<tr>
  <td><kbd>p</kbd><kbd>q</kbd></td><td>pe</td><td><samp>&#x1E890;</samp></td>
</tr>
<tr>
  <td><kbd>p</kbd><kbd>o</kbd></td><td>poo</td><td><samp>&#x1E891;</samp></td>
</tr>
<tr>
  <td><kbd>p</kbd><kbd>z</kbd></td><td>po</td><td><samp>&#x1E892;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>mb-</td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>i</kbd></td><td>mbi</td><td><samp>&#x1E893;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>a</kbd></td><td>mba</td><td><samp>&#x1E894;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>u</kbd></td><td>mbu</td><td><samp>&#x1E895;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>e</kbd></td><td>m047 mbee</td><td><samp>&#x1E896;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>e</kbd><kbd>E</kbd></td><td>m188 mbee</td><td><samp>&#x1E897;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>q</kbd></td><td>mbe</td><td><samp>&#x1E898;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>o</kbd></td><td>mboo</td><td><samp>&#x1E899;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>z</kbd></td><td>mbo</td><td><samp>&#x1E89A;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>u</kbd><kbd>U</kbd></td><td>mbuu</td><td><samp>&#x1E89B;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>q</kbd><kbd>-</kbd></td><td>long mbe</td><td><samp>&#x1E89C;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>o</kbd><kbd>-</kbd></td><td>long mboo</td><td><samp>&#x1E89D;</samp></td>
</tr>
<tr>
  <td><kbd>m</kbd><kbd>b</kbd><kbd>z</kbd><kbd>-</kbd></td><td>long mbo</td><td><samp>&#x1E89E;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>kp-</td>
</tr>
<tr>
  <td><kbd>k</kbd><kbd>p</kbd><kbd>i</kbd></td><td>kpi</td><td><samp>&#x1E89F;</samp></td>
</tr>
<tr>
  <td><kbd>k</kbd><kbd>p</kbd><kbd>a</kbd></td><td>kpa</td><td><samp>&#x1E8A0;</samp></td>
</tr>
<tr>
  <td><kbd>k</kbd><kbd>p</kbd><kbd>u</kbd></td><td>kpu</td><td><samp>&#x1E8A1;</samp></td>
</tr>
<tr>
  <td><kbd>k</kbd><kbd>p</kbd><kbd>e</kbd></td><td>kpee</td><td><samp>&#x1E8A2;</samp></td>
</tr>
<tr>
  <td><kbd>k</kbd><kbd>p</kbd><kbd>q</kbd></td><td>kpe</td><td><samp>&#x1E8A3;</samp></td>
</tr>
<tr>
  <td><kbd>k</kbd><kbd>p</kbd><kbd>o</kbd></td><td>kpoo</td><td><samp>&#x1E8A4;</samp></td>
</tr>
<tr>
  <td><kbd>k</kbd><kbd>p</kbd><kbd>z</kbd></td><td>kpo</td><td><samp>&#x1E8A5;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>gb-</td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>b</kbd><kbd>i</kbd></td><td>gbi</td><td><samp>&#x1E8A6;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>b</kbd><kbd>a</kbd></td><td>gba</td><td><samp>&#x1E8A7;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>b</kbd><kbd>u</kbd></td><td>gbu</td><td><samp>&#x1E8A8;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>b</kbd><kbd>e</kbd></td><td>gbee</td><td><samp>&#x1E8A9;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>b</kbd><kbd>q</kbd></td><td>gbe</td><td><samp>&#x1E8AA;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>b</kbd><kbd>o</kbd></td><td>gboo</td><td><samp>&#x1E8AB;</samp></td>
</tr>
<tr>
  <td><kbd>g</kbd><kbd>b</kbd><kbd>z</kbd></td><td>gbo</td><td><samp>&#x1E8AC;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>r-</td>
</tr>
<tr>
  <td><kbd>r</kbd><kbd>a</kbd></td><td>ra</td><td><samp>&#x1E8AD;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>nd-</td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>d</kbd><kbd>i</kbd></td><td>ndi</td><td><samp>&#x1E8AE;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>d</kbd><kbd>a</kbd></td><td>nda</td><td><samp>&#x1E8AF;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>d</kbd><kbd>u</kbd></td><td>ndu</td><td><samp>&#x1E8B0;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>d</kbd><kbd>e</kbd></td><td>ndee</td><td><samp>&#x1E8B1;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>d</kbd><kbd>q</kbd></td><td>nde</td><td><samp>&#x1E8B2;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>d</kbd><kbd>o</kbd></td><td>ndoo</td><td><samp>&#x1E8B3;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>d</kbd><kbd>z</kbd></td><td>ndo</td><td><samp>&#x1E8B4;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>nj-</td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>j</kbd><kbd>a</kbd></td><td>nja</td><td><samp>&#x1E8B5;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>j</kbd><kbd>u</kbd></td><td>nju</td><td><samp>&#x1E8B6;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>j</kbd><kbd>e</kbd></td><td>njee</td><td><samp>&#x1E8B7;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>j</kbd><kbd>o</kbd></td><td>njoo</td><td><samp>&#x1E8B8;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>v-</td>
</tr>
<tr>
  <td><kbd>v</kbd><kbd>i</kbd></td><td>vi</td><td><samp>&#x1E8B9;</samp></td>
</tr>
<tr>
  <td><kbd>v</kbd><kbd>a</kbd></td><td>va</td><td><samp>&#x1E8BA;</samp></td>
</tr>
<tr>
  <td><kbd>v</kbd><kbd>u</kbd></td><td>vu</td><td><samp>&#x1E8BB;</samp></td>
</tr>
<tr>
  <td><kbd>v</kbd><kbd>e</kbd></td><td>vee</td><td><samp>&#x1E8BC;</samp></td>
</tr>
<tr>
  <td><kbd>v</kbd><kbd>q</kbd></td><td>ve</td><td><samp>&#x1E8BD;</samp></td>
</tr>
<tr>
  <td><kbd>v</kbd><kbd>o</kbd></td><td>voo</td><td><samp>&#x1E8BE;</samp></td>
</tr>
<tr>
  <td><kbd>v</kbd><kbd>z</kbd></td><td>vo</td><td><samp>&#x1E8BF;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>ny-</td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>y</kbd><kbd>I</kbd></td><td>nyin</td><td><samp>&#x1E8C0;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>y</kbd><kbd>A</kbd></td><td>nyan</td><td><samp>&#x1E8C1;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>y</kbd><kbd>U</kbd></td><td>nyun</td><td><samp>&#x1E8C2;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>y</kbd><kbd>Q</kbd></td><td>nyen</td><td><samp>&#x1E8C3;</samp></td>
</tr>
<tr>
  <td><kbd>n</kbd><kbd>y</kbd><kbd>Z</kbd></td><td>nyon</td><td><samp>&#x1E8C4;</samp></td>
</tr>
</tbody>
</table>

<table class='grid colleft'>
  <col class='keys' />
  <col class='name' />
  <col class='glyph' />
<thead>
  <tr>
    <th>Keys</th><th>Name</th><th>Glyph</th>
  </tr>
</thead>
<tr class='headrow'>
  <td colspan='3'>Digits</td>
</tr>
<tr>
  <td><kbd>1</kbd></td><td>digit one</td><td><samp>&#x1E8C7;</samp></td>
</tr>
<tr>
  <td><kbd>2</kbd></td><td>digit two</td><td><samp>&#x1E8C8;</samp></td>
</tr>
<tr>
  <td><kbd>3</kbd></td><td>digit three</td><td><samp>&#x1E8C9;</samp></td>
</tr>
<tr>
  <td><kbd>4</kbd></td><td>digit four</td><td><samp>&#x1E8CA;</samp></td>
</tr>
<tr>
  <td><kbd>5</kbd></td><td>digit five</td><td><samp>&#x1E8CB;</samp></td>
</tr>
<tr>
  <td><kbd>6</kbd></td><td>digit six</td><td><samp>&#x1E8CC;</samp></td>
</tr>
<tr>
  <td><kbd>7</kbd></td><td>digit seven</td><td><samp>&#x1E8CD;</samp></td>
</tr>
<tr>
  <td><kbd>8</kbd></td><td>digit eight</td><td><samp>&#x1E8CE;</samp></td>
</tr>
<tr>
  <td><kbd>9</kbd></td><td>digit nine</td><td><samp>&#x1E8CF;</samp></td>
</tr>
<tr class='headrow'>
  <td colspan='3'>Combining number bases</td>
</tr>
<tr>
  <td><kbd>RALT</kbd><kbd>1</kbd></td><td>combining number teens</td><td><samp>&#x1E8D0;</samp></td>
</tr>
<tr>
  <td><kbd>RALT</kbd><kbd>2</kbd></td><td>combining number tens</td><td><samp>&#x1E8D1;</samp></td>
</tr>
<tr>
  <td><kbd>RALT</kbd><kbd>3</kbd></td><td>combining number hundreds</td><td><samp>&#x1e8d2;</samp></td>
</tr>
<tr>
  <td><kbd>RALT</kbd><kbd>4</kbd></td><td>combining number thousands</td><td><samp>&#x1e8d3;</samp></td>
</tr>
<tr>
  <td><kbd>RALT</kbd><kbd>5</kbd></td><td>combining number ten thousands</td><td><samp>&#x1e8d4;</samp></td>
</tr>
<tr>
  <td><kbd>RALT</kbd><kbd>6</kbd></td><td>combining number hundred thousands</td><td><samp>&#x1e8d5;</samp></td>
</tr>
<tr>
  <td><kbd>RALT</kbd><kbd>7</kbd></td><td>combining number millions</td><td><samp>&#x1E8D6;</samp></td>
</tr>
<tr>


</tbody>
</table>

<h2>Mobile Keyboard layout</h2>

<p>The mobile layout has the first syllable in a sequence on the main keycap. All the other syllables for that sequence will be under a longpress key. Press and hold to select a different syllable. There are hints to show which sequence is on which key.</p>

<h3>Main layer</h3>
<div id='osk-phone' data-states='default numeric'>
</div>

<h3>Example of longpress with "hi" syllable selected</h3>
<p><a href="MobileLongpress.png"><img class="keyboard" src="MobileLongpress.png" alt="Longpress" /></a></p>
