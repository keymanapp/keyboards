<?php
  $pagename = 'Komono (Côte d’Ivoire) - QWERTY Keyboard Help';
  $pagetitle = 'Komono (Côte d’Ivoire) - QWERTY Keyboard Help';
  require_once('header.php');
?>

<p>
  The Komono keyboard is a phonetic keyboard designed for typing the Komono language using a custom set of phonetic characters. 
  It allows users to input Komono text efficiently on both desktop and mobile devices using Keyman.
</p>

<p>The layout is based on a phonetic approach, where keys correspond intuitively to Komono sounds while maintaining compatibility with standard Latin input. 
  This enables users familiar with Latin keyboards to learn the layout quickly.
</p>

<p>The keyboard supports:
  <ul>
    <li>Komono phonetic characters</li>
    <li>Standard Latin characters for mixed-language typing</li>
  </ul>
</p>

<p>
  The on-screen keyboard is optimized for clarity and ease of use, displaying the most common Komono characters directly, 
  with additional characters accessible via long-press on mobile devices.
</p>

<p>This keyboard is intended for:
  <ul>
    <li>Writing in the Komono language</li>
    <li>Linguistic work and documentation</li>
    <li>Everyday communication by Komono users</li>
  </ul>
</p>

<p>It is designed to work across platforms, including desktop and mobile devices, ensuring consistent typing behavior.</p>

<div id='osk-container'>
    <h2>Desktop Keyboard Layout</h2>
    <div id='osk' data-states='default shift'></div>
</div>

 <div id='osk-tablet-container'>
    <h2>Mobile/Tablet Keyboard Layout</h2>
    <div id='osk-tablet' data-states='default shift numeric'></div>

    <h2>Gesture: Longpress</h2>
    <p>Access the variants of the letters by holding a key that has a dot at the right corner.</p>
    <img src="longpress.gif" alt="Touch layout - Long Press">

    <h2>Gesture: Flick up</h2>
    <p>Access the English characters by doing a flick-up motion on a key.</p>
    <img src="flick.gif" alt="Toch layout - Flick">
</div>