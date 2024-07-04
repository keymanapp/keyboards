<?php /*
  Name:             albanian
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      18 Sep 2009

  Modified Date:    18 Sep 2009
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Sep 2009 - mcdurdin - Add further documentation on keyboard
*/
  $pagename = 'Albanian (deprecated) Keyboard Help';
  $pagetitle = 'Albanian (deprecated) Keyboard Help';
  require_once('header.php');
?>

<p>
This keyboard is designed for the <a href="http://en.wikipedia.org/wiki/Albanian_language">Albanian</a> language of Albania and other regions in Europe. It follows the standard Albanian keyboard layout.
</p>

<p>
Most computers will display the letters on this keyboard without a special font. If square boxes are displayed instead of characters, either when using this keyboard or in the charts below, please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<p>
This keyboard was created by Tavultesoft.
</p>

<h2>Quickstart</h2>

<p>Diacritics for this keyboard are typed <b>before</b> their respective letters. For example, <span class='highlightExample'>á</span> is typed <?php echo KeyRenderer::render('[CA9]'); ?> then <?php echo KeyRenderer::render('a'); ?>.</p>

<h2>Keyboard Layouts</h2>

<div id='osk'>
</div>

<h2>Examples</h2>
<?php renderLanguageExamples(); ?>



