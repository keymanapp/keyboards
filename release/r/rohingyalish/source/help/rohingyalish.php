<?php
$pagename = 'Rohingyalish Keyboard Help';
$pagetitle = $pagename;
require_once('header.php');
?>

<div>
  <h2>About Rohingyalish</h2>

  <p>
    Rohingyalish is a Latin-script way to write the Rohingya language.
    This keyboard provides a familiar QWERTY layout and access to
    characters with diacritics.
  </p>

  <h2>Further Resources</h2>
  <ul>
    <li><a href="https://rohingyalanguage.org/tools/rohingya-keyboard/">Rohingya virtual keyboard</a> — select Rohingyalish to type in your browser.</li>
  </ul>

  <h2>Using the keyboard on a physical keyboard</h2>

  <p>
    Use the normal Latin keyboard layout for regular letters.
    Additional characters are entered using the keyboard's configured
    key sequences and modifier combinations.
  </p>

  <table>
    <thead>
      <tr>
        <th>Character</th>
        <th>Example sequence</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>á</td>
        <td><kbd>a</kbd>, then <kbd>'</kbd></td>
      </tr>
      <tr>
        <td>ā</td>
        <td><kbd>a</kbd>, then <kbd>-</kbd></td>
      </tr>
      <tr>
        <td>ñ, ṛ, ṭ, ḍ, ș</td>
        <td>Use the configured Right Alt combinations.</td>
      </tr>
    </tbody>
  </table>

  <h2>Desktop keyboard layouts</h2>
  <div id="osk" data-states="default shift rightalt rightalt-shift">
  </div>

  <h2>Touch keyboard layouts</h2>
  <p>
    On iPhone and iPad, touch and hold supported letters to access
    additional characters. Tap 123 to open the numeric and punctuation
    layer, and ABC to return to the alphabetic layer.
  </p>

  <div id="osk-phone" data-states="default shift numeric">
  </div>

  <h2>Characters with diacritics</h2>
  <p>
    The keyboard includes characters such as á, ā, ḍ, ṭ, ñ, ṛ, and ș,
    including uppercase forms where configured.
  </p>
</div>
