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

<!-- All information of the keyboard -->

  <h3>Desktop Keyboard layouts</h3>
  <div id='osk' data-states='default shift rightalt'>
      <!-- By including this tag, the images of each layers for the 
      On-screen keyboard will be placed here -->
	  <img src="desktop_layout.png" alt="Shan (ThaiLayout) Desktop Layout" style="max-width: 100%; height: auto;" />
  </div>

  <h3>Touch Keyboard layouts</h3>
  <div id='osk-phone' data-states='default shift alt'>
      <!-- By including this tag, the images of each layers for the 
      Touch keyboard will be placed here -->
	  <img src="tablet_layout.png" alt="Shan (ThaiLayout) Tablet Layout" style="max-width: 100%; height: auto;" />
  </div>

