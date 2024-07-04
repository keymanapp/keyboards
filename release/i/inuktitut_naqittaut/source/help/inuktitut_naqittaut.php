<?php 
  $pagename = 'Inuktitut Naqittaut Keyboard Help';
  $pagetitle = 'Inuktitut Naqittaut Keyboard Help';
  $pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
This keyboard is designed for the <b>Inuktut</b> languages of Canada. This keyboard uses the Canadian Aboriginal Syllabics script orthography. It works with Windows and Mac computers, and tablets and phones.
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<br/>

<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift'></div>
</div>

<div id='osk-phone-container'>
  <h2>Phone Keyboard Layout</h2>
  <div id='osk-phone' data-states='default more symbol'></div>
</div>

<div id='osk-tablet-container'>
  <h2>Tablet Keyboard Layout</h2>
  <div id='osk-tablet' data-states='default more symbol'></div>
</div>
