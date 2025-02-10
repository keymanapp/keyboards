<?php
    $pagename = 'Tengwar for Mobile Keyboard Help';
    $pagetitle = $pagename;
    require_once('header.php');
?>

<p>
    Tengwar for Mobile
</p>

<h2>Desktop Keyboard Layout</h2>
<div id="osk" data-states='default shift rightalt rightalt-shift'>
    <img src="keyboard_layout.png" alt="Keyboard Layout" srcset=""><br>
    <img src="keyboard_layout_shifted.png" alt="Shift Keyboard Layout" srcset=""><br>
    <img src="keyboard_layout_alt.png" alt="" srcset="Alt Keyboard Layout"><br>
    <img src="keyboard_layout_alt-shift.png" alt="Alt-Shift Keyboard Layout" srcset=""><br>
    <p>
        This keyboard follows Dvorak for Programmers keyboard layout.
    </p>
</div>

<h2>Mobile Keyboard Layout</h2>
<div id='osk-phone' data-states='default numbers'>
    <img src="mobile_keyboard_layout.jpg" alt="Mobile Keyboard Layout" srcset=""><br>
    <img src="mobile_layout_numbers.jpg" alt="Mobile Keyboard Layout (Numbers)" srcset="">
    <p>
        This keyboard uses the same layout as the desktop layout. While characters in desktop shift, alt and alt-shift are available at long press. 
    </p>
</div>