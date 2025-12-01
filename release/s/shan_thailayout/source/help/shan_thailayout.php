<?php 
  $pagename = 'Shan (ThaiLayout) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    /* Any custom CSS from your welcome.htm document. */
    /* (See CSS formatting section for details.) */
  END;
  require_once('header.php');
?>

<p>
  A Keyman keyboard for the Shan language, utilizing a familiar Thai keyboard layout (Kedmanee/Pattachote) as a base for character placement.
</p>

<h2>Keyboard Layout</h2>

  <h3>Desktop Keyboard layouts</h3>
  <div id='osk' data-states='default shift rightalt'>
  </div>

  <h3>Touch Keyboard layouts</h3>
  <div id='osk-tablet' data-states='default shift alt'>
  </div>