<?php /*
  Name:        Buang
  Copyright:   2001
  Description: Keyboard layout for Buang language of Papua New Guinea.  Works with Doulos SIL or Charis SIL fonts.
  Authors:     Bruce Hooley
*/
  $pagename = 'Buang (deprecated) Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>
<style type='text/css'>
    html, body { cursor: default; padding: 0; margin: 4px 4px 0 4px; }
    div, p, li { font: 9pt Tahoma; margin-bottom: 8px }
    span.key, tr.key td { border: solid 1px #808080; background: #c0c0c4; margin: 2px; padding: 2px 4px; width: 1em; font: bold 10pt Tahoma; text-align: center; }
    span.key { display: inline-block }
    td.over { background: #c0c0ff; }
    div.table { padding: 4px }
    div.title { font-weight: bold; }
    tr.out td { text-align: center; font: bold 10pt Tahoma; color: blue }
</style>

<div class='title'>Buang Keyboard Usage Tips</div>

<div>Type any of the keys below, followed by <span class='key'>"</span>, to get the corresponding output.</div>
          
<div class='table'>
<table>
  <tr class='key'><td>o</td><td>O</td><td>e</td><td>E</td><td>k</td><td>K</td><td>g</td><td>G</td></tr>
  <tr class='out'><td>ö</td><td>Ö</td><td>ë</td><td>Ë</td><td>ḳ</td><td>Ḳ</td><td>ġ</td><td>Ġ</td></tr>
</table>           
</div>

<div>Type any of the keys below, followed by <span class='key'>^</span>, to get the corresponding output.</div>

<div class='table'>
<table>
  <tr class='key'><td>o</td><td>O</td><td>e</td><td>E</td></tr>
  <tr class='out'><td>ô</td><td>Ô</td><td>ê</td><td>Ê</td></tr>
</table>
</div>

<div class='title'>Keyboard Information</div>

<ul>
<li>Copyright &copy; 2008 Tavultesoft Pty Ltd, &copy; 2008 Bruce Hooley</li>
<li>Licenced under the <a href='http://creativecommons.org/licenses/by-sa/2.5/au/' target='_blank'>Creative Commons Attribution-Share Alike 2.5 licence</a>.</li>

<div class='title'>Version History</div>

<p>Version 1.1: Added support for <span class='key'>^</span>; removed <span class='key'>"</span> + <span class='key'>"</span> rule</p>

