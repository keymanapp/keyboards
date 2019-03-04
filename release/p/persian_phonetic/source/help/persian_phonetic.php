<?php 
  $pagename = 'Persian Phonetic Keyboard Help';
  $pagetitle = 'Persian Phonetic Keyboard Help';
  require_once('header.php');
?>

<p>This keyboard layout is designed for Persian.  It includes an on screen keyboard
which can be viewed by clicking on the Keyman icon and selecting the On Screen Keyboard
menu item. Similar keyboards are also available for other desktop and mobile platforms.</p>

<p>Special key combinations are as follows:</p>
<table>
<tr>
<td>\ + h = </td>
<td>ۀ</td>
</tr>
<tr>
<td>\ + w = </td>
<td>ؤ</td>
</tr>
<tr>
<td>\ + &lt; = </td>
<td>«</td>
</tr>
<tr>
<td>\ + &gt; = </td>
<td>»</td>
</tr>
<tr>
<td>\ + e = </td>
<td>ً◌</td>
</tr>
</table>

<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift'></div>
</div>

<div id='osk-phone-container'>
  <h2>Phone Keyboard Layout</h2>
  <p>Note: Longpress keys are not currently visible in this static documentation, and so some additional letters may be accessible through these longpress keys.</p>
  <div id='osk-phone' data-states='default shift numeric'></div>
</div>

<div id='osk-tablet-container'>
  <h2>Tablet Keyboard Layout</h2>
  <p>Note: Longpress keys are not currently visible in this static documentation, and so some additional letters may be accessible through these longpress keys.</p>
  <div id='osk-tablet' data-states='default shift'></div>
</div>


<h2>Release History</h2>
<p>Version 1.0, released 10 February 2017</p>
<p>Version 1.0.1, released 18 June 2018</p>
