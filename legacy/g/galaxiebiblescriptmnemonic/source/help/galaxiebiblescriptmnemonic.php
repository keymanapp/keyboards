<?php /*
  Name:             keyboard_galaxiegreekkm6
  Copyright:        Keyboard ©2004-2011 Hampton Keathley
  Documentation:    
  Description:      
  Create Date:      05 Sep 2011

  Modified Date:    05 Sep 2011
  Authors:          tpbaehr
  Related Files:    keyboard_galaxiebiblescriptmnemonic/keyboardchart.htm
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          05 Sep 2011 - tpbaehr - Create online help from package help.
*/
  $pagename = 'Galaxie BibleScript Mnemonic (deprecated) Keyboard Help';
  $pagetitle = 'Galaxie BibleScript Mnemonic (deprecated) Keyboard Help';
  $style = <<<END
/* General */
body {
	margin: 30px; 
	font-family: Arial, Helvetica, sans-serif; 
	font-size: 10pt;color: #2D2C2C;}
img {border: none; }

p {font-size: 10pt; line-height:1.5em; }
	
/* Headers */
h1, h2, h3{color: #AD4A28; font-weight: bold;}

h2 {font-size: 14pt; }

/* Links */
a:link {color: #AD4A28; text-decoration: none;}
a:visited {text-decoration: none;}
a:hover {text-decoration: underline;}

/* Columns */
.columns {width:295px; padding-left:20px; -webkit-column-count: 2; -webkit-column-gap: 5px; -moz-column-count: 2; -moz-column-gap: 5px; column-count: 2; column-gap: 5px;}
.columns li {margin:0px;}

/* Buttons */
.button {text-decoration: none !important; margin:0px 1px; padding:1px 2px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; white-space: nowrap; color: #2D2C2C !important; border:solid 1px #707070; background: #D4D4D4; background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.15, #F2F2F2), color-stop(0.47, #EBEBEB), color-stop(0.48, #DDDDDD), color-stop(0.9, #CFCFCF)); background-image: -webkit-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: -moz-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: -ms-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: -o-linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%); background-image: linear-gradient(top, #F2F2F2 15%, #EBEBEB 47%, #DDDDDD 48%, #CFCFCF 90%);}
.button:hover {text-decoration:none !important; background: #BEE6FD; background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.15, #EAF6FD), color-stop(0.47, #D9F0FC), color-stop(0.48, #BEE6FD), color-stop(0.9, #A7D8F5)); background-image: -webkit-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: -moz-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: -ms-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: -o-linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%); background-image: linear-gradient(top, #EAF6FD 15%,#D9F0FC 47%,#BEE6FD 48%,#A7D8F5 90%);}

/* Welcome Floats */
.welcome {float:left; width:295px; height:600px;border:1px solid #dddddd;padding:8px 15px; margin-top:20px;margin-left:5px;}
.right {}

END;
  require_once('header.php');


?>
<p style='margin:0px'>Keyboards &#169; 2004-2011 Galaxie Software and Tavultesoft Pty Ltd</p>

<div class='welcome'>
<h2>About Galaxie BibleScript<br/>Greek Mnemonic Keyboard</h2>
<p>This Keyman keyboard is designed for Koine Greek, a trade language of the ancient Mediterranean and the language of the Septuagint and New Testament Scriptures. It is a mnemonic Keyman keyboard. This means that the arrangement of the letters in the Keyman keyboard will depend on the order of the keys on your hardware layout.</p>

<p>This keyboard has been optimised for use with the following hardware layouts:</p>
<ul class='columns'>
	<li>AZERTY French</li>
	<li>QWERTY Dutch</li>
	<li>QWERTY Italian</li>
    <li>QWERTY Norwegian</li>
    <li>QWERTY Spanish</li>
	<li>QWERTY Swedish</li>
	<li>QWERTY UK</li>
    <li>QWERTY US</li>
	<li>QWERTZ German</li>
</ul>	

<p>This keyboard includes an On Screen Keyboard view, which displays best on a QWERTY US layout.</p>

<p>This keyboard works with standard Unicode fonts.</p>
<h2>Keyboard Help</h2>
<p>For full help on the Greek Mnemonic keyboard, <a class='button' target="_blank" href='welcome-greek.htm'>Click Here</a>.</p>

</div>

<div class='welcome right'>
<h2>About Galaxie BibleScript<br/>Hebrew Mnemonic Keyboard</h2>
<p>This Keyman keyboard is designed for Biblical Hebrew, a Semitic language of the ancient Near East and the language of the Hebrew Bible. It is a mnemonic Keyman keyboard. This means that the arrangement of the letters in the Keyman keyboard will depend on the order of the keys on your hardware layout.</p>

<p>This keyboard has been optimised for use with the following hardware layouts:</p>
<ul class='columns'>
	<li>AZERTY French</li>
	<li>QWERTY UK</li>
    <li>QWERTY US</li>
	<li>QWERTZ German</li>
</ul>	

<p>This keyboard includes an On Screen Keyboard view, which displays best on a QWERTY US layout.</p>

<p>This keyboard works with standard Unicode fonts.</p>
<h2>Keyboard Help</h2>
<p>For full help on the Hebrew Mnemonic keyboard, <a class='button'  target="_blank" href='welcome-hebrew.htm'>Click Here</a>.</p>

</div>
<div style='clear:both;'>
</div>

