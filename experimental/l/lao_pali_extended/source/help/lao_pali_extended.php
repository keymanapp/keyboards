<?php 
  $pagename = 'Lao Pali Extended Keyboard Help';
  $pagetitle = $pagename;
    $style = <<<END
    .lao {font-family: "Lanexang Pali25"; font-size: 15pt;}
END;
  
  require_once('header.php');
?>
<p>The keyboard uses the official Lao standard layout, adapted to support entry of the Lao Pali and Lao Sanskrit characters included in Unicode. It includes some Private Use Area (PUA) code points for characters not yet supported in Unicode. Because of this, some of the characters will not display properly on mobile devices or without the included <b>Lanexang Pali25</b> font.</p>

<p>These PUA characters have been found in the old (Pali) Lao manuscripts, representing the sounds in the original Indic source language. They are clearly distinct and not yet included in Unicode:</p>
<ul>
<li><span class="lao">&#xE002;</span> U+E002 - although visually similar to <span class="lao">&#x0E82;</span> U+0E82 it is a distinct character (with an extra dip in the top) and corresponds to the Thai character U+0E03, for which the corresponding Lao Unicode cell is unassigned.</li>
<li><span class="lao">&#xE003;</span> U+E003 - although visually similar to <span class="lao">&#x0E84;</span> U+0E84 it is a distinct character (with an extra dip in the top) and corresponds to the Thai character U+0E05, for which the corresponding Lao Unicode cell is unassigned.</li>
<li><span class="lao">&#xE091;</span> U+E091 - Pali Lao, ancient alternate for U+0EA5 (LAO LETTER “LA”)</li>
<li><span class="lao">&#xE09D;</span> U+E09D - Pali Lao, ancient alternate for U+0E81 (LAO LETTER “KA”).</li>
<li><span class="lao">&#xE09E;</span> U+E09E - Pali Lao, ancient alternate for U+0E8A (LAO LETTER “CHA”).</li>
<li><span class="lao">&#xE09F;</span> U+E09F - Pali Lao, ancient alternate for U+0E9C (LAO LETTER “PHA”).</li>
</ul>  

<p>In addition, one unassigned character in the Lao code-block has been appropriated.</p>
<ul>
<li><span class="lao">&#x0EA4;</span> U+0EA4 LAO LETTER “RUE” - corresponding to Thai U+0E34 (phonetically /reu/)</li>
</ul>  

  <h2>Desktop Keyboard layout</h2>
	<h3>Default (unshifted)</h3>
	<p><a href="LayoutU_.png"><img class="keyboard" src="LayoutU_.png" alt="Default (unshifted) state" /></a></p>
	<h3>Shift</h3>
	<p><a href="LayoutU_S.png"><img class="keyboard" src="LayoutU_S.png" alt="Shift state" /></a></p>
	<h3>Right ALT (unshifted)</h3>
	<p><a href="LayoutU_RA.png"><img class="keyboard" src="LayoutU_RA.png" alt="Right ALT (unshifted) state" /></a></p>
