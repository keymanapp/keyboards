<?php 
  $pagename = 'Gwich\'in Keyboard Help';
  $pagetitle = 'Gwich\'in Keyboard Help';
  $pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
This keyboard is designed for the <b>Gwich'in</b> language of the Western Subarctic region of Canada.
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>


<h2>Notes on touch layout</h2>
<div id='wikitext'>
<div class='vspace'></div>
<table border='1' style='border-collapse:collapse' cellpadding='5' ><tr ><th  align='center'>`</th><td  align='center'>w</td><td  align='right'>e è ę ę̀</td><td  align='center'>r</td><td  align='center'>t</td><td  align='center'>y</td><td  align='center'>u ù ų ų̀</td><td  align='center'>i ì į į̀</td><td  align='center'>o ò ǫ ǫ̀</td><td  align='center'>ł</td></tr>
<tr ><td  align='center'>a à ą ą̀</td><td  align='center'>s</td><td  align='center'>d</td><th  align='center'>˛</th><td  align='center'>g</td><td  align='center'>h</td><td  align='center'>j</td><td  align='center'>k</td><td  align='center'>l</td><td  align='center'>' "</td></tr>
<tr ><td >&nbsp;</td><td  align='center'>z</td><td  align='center'>. ,</td><td  align='center'>c</td><td  align='center'>v</td><td  align='center'>b</td><td  align='center'>n</td><td  align='center'>m</td><td  colspan='2'>&nbsp;</td></tr>
</table>
<div class='vspace'></div><ul><li>` (grave) , (ogonek) / (acute) % (caron) ^ (circumflex) & (diaeresis) are combining accents and should be typed before the vowel.
</li><li>the first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.
</li></ul>
</div>

<br/>

<h2>Desktop Keyboard Layout</h2>
<div id='osk'>
</div>

<h2>Tablet Keyboard Layout</h2>
<div id='osk-tablet' data-states='default shift numeric'></div>
</div>
