<?php
    $pagename = 'Khmer Traditional Keyboard Help';
    $pagetitle = 'Khmer Traditional Keyboard Help';
    require_once('header.php');
?>

<p>
   The Khmer Traditional keyboard is designed to facilitate a seamless transition from the standard Microsoft
   Khmer keyboard layout to the Keyman platform. It preserves the canonical character inventory and key mappings
   familiar to users across both desktop and mobile environments, thereby minimizing cognitive load and supporting continuity
   in typing Khmer alphabets.
</p>

<p>
    A distinctive feature of this keyboard is the inclusion of the character ឲ, which is mapped to the <kbd>Right Alt</kbd> + <kbd>y</kbd>
    key combination. This character is not currently represented in the standard Microsoft Khmer layout,
    although its inclusion is under consideration as of April 2026. The present implementation addresses this gap 
    by providing direct access within Keyman.
</p>

<div class="overview">

<div id='osk-container'>
    <h2>Desktop Keyboard Layout</h2>

    <div id='osk' data-states='default shift rightalt rightalt-shift'></div>

</div>

<div id='osk-tablet-container'>
    <h2>Mobile Keyboard Layout</h2>

  <div id='osk-tablet' data-states='default shift numeric symbols'></div>

</div>