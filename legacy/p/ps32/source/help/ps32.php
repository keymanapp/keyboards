<?php /*
  Name:             Keyboard_ps32
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
  History:          18 Sep 2009 - mcdurdin - Tweaks
*/
  $pagename = 'Pan-Sahelian (deprecated) Keyboard Help';
  $pagetitle = 'Pan-Sahelian (deprecated) Keyboard Help';
  // Header we will tidy up later  
  require_once('header.php');


?>


<p style='margin: 16px 0 0 0'>
This keyboard is designed for use with various languages of Western and Central Africa, including:
</p>

<table class='display grid' border=0>
<tr>
   <td width=100>
   <a href="http://en.wikipedia.org/wiki/Fulfulde"><b>Fulfulde</b></a>
   </td>
   <td width=100>
   <b>Bokyi</b>
   </td>
   <td width=100>
   <a href="http://en.wikipedia.org/wiki/Bura-Pabir_language"><b>Bura-Pabir</b></a>
   </td>
</tr>
</table>

<p>
Most computers will automatically download a special font to display the diacritic marks on this keyboard
correctly.  However, if the layout or the charts below do not appear to display correctly, please read the <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<h2>Diacritics</h2>

<p>Type diacritics (on keys <?php echo KeyRenderer::render('1'); ?>-<?php echo KeyRenderer::render('9'); ?>) after the base character.</p>

<p>Each diacritic mark is shown above an <span class='highlightExample'>a</span> character in the On Screen Keyboard as an example of how it will appear.  When you
type a diacritic mark, it will be placed above or below the previous letter &mdash; the <span class='highlightExample'>a</span> will not appear.</p>

<h2>Keyboard Layout</h2>
<div id='osk'>
</div>

<p>This keyboard was created by <a href='http://www.openroad.net.au/'>OpenRoad</a></p>


