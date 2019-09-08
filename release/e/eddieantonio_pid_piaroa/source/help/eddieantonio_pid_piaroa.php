<?php
  $pagename = 'Piaroa Keyboard Help';
  $pagetitle = 'Piaroa Keyboard Help';
  require_once('header.php');
?>
<p>The Piaroa keyboard allows you to type Piaroa vowels which are not present in the Spanish alphabet. These vowels utilize the <kbd>AltGr</kbd> key, which is the <kbd>Alt</kbd> key to the right of the spacebar.</p>

<h1>Fonts</h1>

<p>There is no special font required to render Piaroa text, however, some fonts and applications struggle to render the combining cedilla (<span style="font-family: Calibri, Helvetica Neue">&nbsp;&#x0327;</span>) underneath the vowel.  On Windows, Calibri renders this correctly (<span style="font-family: Calibri">a̧, ä̧, ȩ, i̧, o̧, ö̧, u̧</span>); on macOS, Helvetica Neue renders these characters correctly (<span style="font-family: Helvetica Neue">a̧, ä̧, ȩ, i̧, o̧, ö̧, u̧</span>).</p>

<h1>Characters</h1>

<p>Apart from the key sequences in the table below, all keys on a regular Latin keyboard should work the same as in your default keyboard layout. </h1>
<table>
  <thead>
    <tr>
      <th>To type&hellip;</th> <th>Press&hellip;</th>
    </tr>
  </thead>
  <tbody>
    <tr> <td>ä</td> <td> <kbd>AltGr</kbd> + <kbd>A</kbd></td> </tr>
    <tr> <td>ö</td> <td> <kbd>AltGr</kbd> + <kbd>O</kbd></td> </tr>
    <tr> <td>Ä</td> <td> <kbd>Shift</kbd> + <kbd>AltGr</kbd> + <kbd>A</kbd></td> </tr>
    <tr> <td>Ö</td> <td> <kbd>Shift</kbd> + <kbd>AltGr</kbd> + <kbd>O</kbd></td> </tr>
    <tr> <td>a&#x327;</td> <td> <kbd>A</kbd>, then <kbd>AltGr</kbd> + <kbd>,</kbd> </td> </tr>
    <tr> <td>e&#x327;</td> <td> <kbd>E</kbd>, then <kbd>AltGr</kbd> + <kbd>,</kbd> </td> </tr>
    <tr> <td>i&#x327;</td> <td> <kbd>I</kbd>, then <kbd>AltGr</kbd> + <kbd>,</kbd> </td> </tr>
    <tr> <td>o&#x327;</td> <td> <kbd>O</kbd>, then <kbd>AltGr</kbd> + <kbd>,</kbd> </td> </tr>
    <tr> <td>u&#x327;</td> <td> <kbd>U</kbd>, then <kbd>AltGr</kbd> + <kbd>,</kbd> </td> </tr>
    <tr> <td>ä&#x327;</td> <td> <kbd>AltGr</kbd> + <kbd>A</kbd>, then <kbd>AltGr</kbd> + <kbd>,</kbd> </td> </tr>
    <tr> <td>ö&#x327;</td> <td> <kbd>AltGr</kbd> + <kbd>O</kbd>, then <kbd>AltGr</kbd> + <kbd>,</kbd> </td> </tr>
  </tbody>
</table>

<h1>Keyboard Source</h1>

<p>This keyboard is available online at <a href='https://keyman.com/keyboards/eddieantonio_pid_piaroa'>keyman.com/keyboards/eddieantonio_pid_piaroa</a></p>

<h1>Change History</h1>
<p>1.1.1: Prepare for inclusion in Keyman Keyboards repository.</p>
<p>1.1.0: Prevent inserting extraneous cedillas.</p>
<p>1.0.0: Initial release.</p>

<p>&copy; 2019 Eddie Antonio Santos</p>
