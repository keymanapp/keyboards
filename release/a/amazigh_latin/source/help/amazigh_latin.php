<?php 
  $pagename = 'Amazigh Latin Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    samp {font-size:16pt; line-height:.8em;}
    kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px;  padding:2px 4px; vertical-align:middle; line-height:2em; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
    table { border-collapse: collapse; width: 25%; font-size: small; }
    td, th { border: 1px solid #cccccc; text-align: left; padding: 5px; font: 12pt Tahoma;}
    tr:nth-child(even) { background-color: #eeeeee; }
    tr { height: 2.2em; }
END;
  
  require_once('header.php');
?>

<p>
  This keyboard layout has been created to facilitate the Latin-script transcription of most of the Amazigh languages. This is designed to support the systems of transcription commonly used amongst scholars of these languages. 
</p>
<h2>To use</h2>

<p>The semi-colon key is a “dead key” that works in combination with the following key to produce the following characters. (Note: The semi-colon is typed before the base letter. For example, <kbd>;</kbd><kbd>a</kbd> outputs <samp>ɛ</samp>.)</p>

	<table>
		<tbody>
			<tr>
				<td>Base letter</td>
				<td><kbd>a</kbd></td>
				<td><kbd>c</kbd></td>
				<td><kbd>d</kbd></td>
				<td><kbd>e</kbd></td>
				<td><kbd>g</kbd></td>
				<td><kbd>h</kbd></td>
				<td><kbd>i</kbd></td>
				<td><kbd>n</kbd></td>
				<td><kbd>o</kbd></td>
				<td><kbd>q</kbd></td>
				<td><kbd>r</kbd></td>
				<td><kbd>s</kbd></td>
				<td><kbd>t</kbd></td>
				<td><kbd>u</kbd></td>
				<td><kbd>w</kbd></td>
				<td><kbd>y</kbd></td>
				<td><kbd>z</kbd></td>
				<td><kbd>j</kbd></td>
				<td><kbd>k</kbd></td>
				<td><kbd>x</kbd></td>
			</tr>
			<tr>
				<td>Extended letter</td>
				<td><samp>ɛ</samp></td>
				<td><samp>č</samp></td>
				<td><samp>ḓ</samp></td>
				<td><samp>ə</samp></td>
				<td><samp>ġ</samp></td>
				<td><samp>ƹ</samp></td>
				<td><samp>ɨ</samp></td>
				<td><samp>ŋ</samp></td>
				<td><samp>ɔ</samp></td>
				<td><samp>ʼ</samp></td>
				<td><samp>ȓ</samp></td>
				<td><samp>š</samp></td>
				<td><samp>ț</samp></td>
				<td><samp>ʉ</samp></td>
				<td><samp>ʷ</samp></td>
				<td><samp>ɣ</samp></td>
				<td><samp>ž</samp></td>
				<td><samp>ǧ</samp></td>
				<td><samp>ḫ</samp></td>
				<td><samp>ḫ</samp></td>
			</tr>
</tbody>
</table>
	
	
<p>In addition, there are five diacritics that can be added to any letter 
(Note: the diacritic keys are typed after the base letter). For example, <kbd>;</kbd><kbd>a</kbd><kbd>[</kbd> outputs <samp>ɛ̣</samp>.</p>

	<table>
		<tbody>
			<tr>
				<td>Key</td>
				<td><kbd>[</kbd></td>
				<td><kbd>RALT</kbd><kbd>{</kbd></td>
				<td><kbd>{</kbd></td>
				<td><kbd>]</kbd></td>
				<td><kbd>}</kbd></td>
			</tr>
			<tr>
				<td>Example</td>
				<td><samp>ẓ</samp></td>
				<td><samp>ś</samp></td>
				<td><samp>s̀</samp></td>
				<td><samp>ṯ</samp></td>
				<td><samp>ḡ</samp></td>
			</tr>
</tbody>
</table>

<p>Several diacritics can be added to the same letter, e.g. <samp>ḏ̣</samp>, <samp>ṣ́</samp>.  
To get the normal symbol (e.g. a bracket [, {, etc.), type semi-colon followed by the [, {,  etc. </p>
