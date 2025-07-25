<?php 
  $pagename = 'Urdu (deprecated) Keyboard Help';
  $pagetitle = 'Urdu (deprecated) Keyboard Help';
  $pagestyle = "
  
  .desktop .kmw-key-default .kmw-key-text {
    top: 0% !important;
  }
  .kmw-key-text {
    font-family: \"Noto Nastaliq Urdu Draft\";
  }
  
  ";
  require_once('header.php');
?>


<p style='margin: 16px 0 0 0'>
This keyboard is designed for use with the <a href="http://en.wikipedia.org/wiki/Urdu_language"><b>Urdu</b></a> language of India and Pakistan.  It includes an on screen keyboard which can be viewed by clicking on the Keyman icon and selecting the On Screen Keyboard menu item, and a touch layout optimized for phones and tablets.</p>

<p>This keyboard includes the Google font Noto Nastaliq Urdu Draft. This is the recommended
font for Urdu text on Windows and online.</p>

<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift ctrlshift'></div>
</div>

<div id='osk-phone-container'>
  <h2>Phone Keyboard Layout</h2>
  <div id='osk-phone' data-states='default shift numeric'></div>
</div>

<div id='osk-tablet-container'>
  <h2>Tablet Keyboard Layout</h2>
  <div id='osk-tablet' data-states='default shift numeric'></div>
</div>

<p>Note: Longpress keys are not currently visible in this static documentation, and so some additional letters may be accessible through these longpress keys.</p>

<div id="Examples">
<h3>Examples</h3>
<?php renderLanguageExamples(); ?>
</div>

<h2>Release History</h2>
<p>Version 1.0, released 10 November 2008</p>
<p>Version 1.1, released 13 January 2015: added touch layouts and Noto Nastaliq Urdu Draft font</p>
<p>Version 1.2, released 16 January 2015: additional diacritic marks on longpress keys</p>
