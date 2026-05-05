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
    
    <h2>Key combinations</h2>

    <h3>Deadkey ( / )</h3>

    <p>Press <kbd>/</kbd> then combine it with the following characters:</p>

    <p><b>Note: </b>deadkey / does not produce a slash when typing.</p>

    <table>
    <tr>
      <th colspan="3">Acute & Cedilla</th>
    </tr>
    <tr>
      <th>First Key</th><th>Second Key</th><th>Output</th></tr>
    <tr>
      <td rowspan="4">/</td>
      <td>e</td><td>é</td>
    </tr>
      <tr><td>E</td><td>É</td></tr>
      <tr><td>c</td><td>ç</td></tr>
      <tr><td>C</td><td>Ç</td></tr>
    <tr>
      <th colspan="3">English characters</th>
    </tr>
    <tr>
      <td rowspan="22">/</td>
    </tr>
      <tr><td>x</td><td>x</td></tr>
      <tr><td>X</td><td>X</td></tr>
      <tr><td>q</td><td>q</td></tr>
      <tr><td>Q</td><td>Q</td></tr>
      <tr><td>z</td><td>z</td></tr>
      <tr><td>Z</td><td>Z</td></tr>

      <tr><td>'</td><td>'</td></tr>
      <tr><td>"</td><td>"</td></tr>
      <tr><td>;</td><td>;</td></tr>
      <tr><td>:</td><td>:</td></tr>
      <tr><td>`</td><td>`</td></tr>
      <tr><td>~</td><td>~</td></tr>

      <tr><td>[</td><td>[</td></tr>
      <tr><td>{</td><td>{</td></tr>
      <tr><td>]</td><td>]</td></tr>
      <tr><td>}</td><td>}</td></tr>

      <tr><td>/</td><td>/</td></tr>
      <tr><td>?</td><td>?</td></tr>
      <tr><td>&lt;</td><td>&lt;</td></tr>
      <tr><td>&gt;</td><td>&gt;</td></tr>
      <tr><td>|</td><td>|</td></tr>

    </table>

    <p>This deadkey only modifies <strong>e, E, c, C</strong>. All other combinations return the original character.</p>

    <h3>Deadkeys (Less-than, Greater-than, Vertical line)</h3>
    <p>Press one of these keys, then combine it with a vowel (a, e, i, o, u — uppercase or lowercase):</p>
    <table>
      <tr><th>Combination Pattern</th><th>Result</th></tr>
      <tr><td>&lt; + vowel</td><td>Grave accent (e.g., a → à)</td></tr>
      <tr><td>&gt; + vowel</td><td>Circumflex (e.g., a → â)</td></tr>
      <tr><td>| + vowel</td><td>Diaeresis (e.g., a → ä)</td></tr>
    </table>
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