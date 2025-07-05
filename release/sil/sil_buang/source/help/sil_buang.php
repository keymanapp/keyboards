<?php /*
  Name:        Buang
  Copyright:   2001
  Description: Keyboard layout for Buang language of Papua New Guinea.  Works with Charis fonts.
  Authors:     Bruce Hooley
*/
  $pagename = 'Buang (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    html, body { cursor: default; padding: 0; margin: 4px 4px 0 4px; }
    div, p, li { font: 9pt Tahoma; margin-bottom: 8px }
    span.key, tr.key td { border: solid 1px #808080; background: #c0c0c4; margin: 2px; padding: 2px 4px; width: 1em; font: bold 10pt Tahoma; text-align: center; }
    span.key { display: inline-block }
    td.over { background: #c0c0ff; }
    div.table { padding: 4px }
    div.title { font-weight: bold; }
    tr.out td { text-align: center; font: bold 10pt Tahoma; color: blue }
END;
  require_once('header.php');
?>

<p>
    Keyboard layout for Buang language of Papua New Guinea.  Works with Charis fonts.
</p>

<p>Type any of the keys below, followed by <span class='key'>"</span>, to get the corresponding output.</p>
          
<div class='table'>
<table>
  <tr class='key'><td>o</td><td>O</td><td>e</td><td>E</td><td>k</td><td>K</td><td>g</td><td>G</td></tr>
  <tr class='out'><td>ö</td><td>Ö</td><td>ë</td><td>Ë</td><td>ḳ</td><td>Ḳ</td><td>ġ</td><td>Ġ</td></tr>
</table>           
</div>

<p>Type any of the keys below, followed by <span class='key'>^</span>, to get the corresponding output.</p>

<div class='table'>
<table>
  <tr class='key'><td>o</td><td>O</td><td>e</td><td>E</td></tr>
  <tr class='out'><td>ô</td><td>Ô</td><td>ê</td><td>Ê</td></tr>
</table>
</div>
