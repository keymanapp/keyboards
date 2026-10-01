<?php 
    $pagename = "Phonetic Hebrew Help";
    $pagetitle = $pagename;
    $pagestyle = <<<END

    END;
    require_once('header.php'); 
?>

<p>
    The Phonetic Hebrew keyboard is designed by assigning the letters to the most similar sound of the English keys or appearance to type the Ancient Hebrew language.
</p>

<img src="tmp.jpg">

<h2>Desktop Keyboard Layout</h2>

<a href="documentation.pdf">
  Phonetic Hebrew Documentation in PDF format (English)
</a>

<div id='osk' data-states='default'></div>

<h2>Touch Keyboard Layout</h2>

<div id='osk-phone' data-states='default'>