<?php /*
  Name:             keyboard_PhoneticMalayalam
  Copyright:        Copyright (C) 2012 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      01 Jun 2012

  Modified Date:    01 Jun 2012
  Authors:          pbaehr, mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          01 Jun 2012 - pbaehr - Generate documentation from Keyman Desktop documentation
*/
  $pagename = "Phonetic Malayalam Keyboard Help";
  $pagetitle = $pagename;
  $style = <<<END
body {
	margin: 30px; 
	font-family: 'Arial Unicode MS', Helvetica, sans-serif; 
	font-size: 11pt;color: #2D2C2C;}
img {border: none; }

p {font-size: 11pt; margin:5px 0px 0px;}

h1, h2, h3{color: #AD4A28; font-weight: bold;clear:left;}

h1 {font-size: 22pt; margin: 22px 0px 11px; padding:0px;}
h2 {font-size: 16pt; margin: 14px 0px 7px; padding:0px;}
h3 {font-size: 12pt; margin: 12px 0px 6px; padding:0px;}
h4 {font-size: 11pt; margin: 10px 0px 5px; padding:0px;}

a:link {color: #AD4A28; text-decoration: none;}
a:visited {color: #AD4A28;text-decoration: none;}
a:hover {color: #AD4A28;text-decoration: underline;} 
END;
  require_once('header.php');
?>
<p>This package includes an easy to use phonetic keyboard for typing 
Malayalam, and the Malayalam Unicode OpenType font 'AnjaliOldLipi'.</p>
<p>For more information, please see the documentation file <a href='chart.pdf' target='_blank'>Phonetic Malayalam Keyboard Version 1.3</a>.</p> 

