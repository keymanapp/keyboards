<?php
  $pagename = 'Banne Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
    .coldiv { display: flex; flex-direction: row; gap: 5%;}
    table, tr, th, td { font: 10pt Arial; border-collapse: collapse; border: solid 1px; padding: 5px 5px; text-align: center;}
    th { font-weight: bold;}
    .combo { font-family: Courier, monospace; padding: 0px 10px;}
    .empty { background-color: lightgray;}
  END;

?>

<p>
  QWERTY-based keyboard for the Banne language.
</p>

<h2>Keystrokes</h2>
  <table>
    <thead>
      <tr>
        <th>Base</th>
        <th class="combo">+</th>
        <th>Modifier</th>
        <th class="combo">=</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><kbd>s</kbd></td>
        <td class="combo"><kbd>+</kbd></td>
        <td><kbd>'</kbd></td>
        <td class="combo">=</td>
        <td>š</td>
      </tr>
      <tr>
        <td><kbd>S</kbd></td>
        <td class="combo">+</td>
        <td><kbd>'</kbd></td>
        <td class="combo">=</td>
        <td>Š</td>
      </tr>
    </tbody>
  </table>
<h3>Punctuation</h3>
<p>
  The <kbd>'</kbd> key has been modified to cycle between <kbd>‹</kbd> (U+2039) and <kbd>›</kbd> (U+203A) from the second keypress onwards.
  <br>
  The first keypress will produce the <kbd>'</kbd> (U+0027) character as expected, and pressing it again will turn the <kbd>'</kbd> into a <kbd>‹</kbd>. Pressing the <kbd>'</kbd> key one more time will produce a <kbd>›</kbd>.
</p>
<p>
  The <kbd>"</kbd> key has been modified to automatically type the character <kbd>«</kbd> (U+00AB). To cancel this, pressing the <kbd>;</kbd> key before typing a <kbd>"</kbd> will produce a normal <kbd>"</kbd>.
  <br>
  Pressing the <kbd>"</kbd> key repeatedly will cycle between the <kbd>»</kbd> (U+00BB) and <kbd>«</kbd> characters.
</p>

<div class="coldiv">
  <table>
    <thead>
      <tr>
        <th>Base</th>
        <th class="combo">+</th>
        <th>Modifier</th>
        <th class="combo">=</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><kbd>'</kbd></td>
        <td class="combo"><kbd>+</kbd></td>
        <td><kbd>'</kbd></td>
        <td class="combo">=</td>
        <td>‹</td>
      </tr>
      <tr>
        <td><kbd><</kbd></td>
        <td class="combo">+</td>
        <td><kbd>'</kbd></td>
        <td class="combo">=</td>
        <td>‹</td>
      </tr>
      <tr>
        <td><kbd>></kbd></td>
        <td class="combo">+</td>
        <td><kbd>'</kbd></td>
        <td class="combo">=</td>
        <td>›</td>
      </tr>
      <tr>
        <td><kbd>"</kbd></td>
        <td class="empty"> </td>
        <td class="empty"> </td>
        <td class="combo">=</td>
        <td>«</td>
      </tr>
      <tr>
        <td><kbd><</kbd></td>
        <td class="combo">+</td>
        <td><kbd><</kbd></kbd></td>
        <td class="combo">=</td>
        <td>«</td>
      </tr>
      <tr>
        <td><kbd>></kbd></td>
        <td class="combo">+</td>
        <td><kbd>></kbd></td>
        <td class="combo">=</td>
        <td>»</td>
      </tr>
    </tbody>
  </table>

  <table>
    <thead>
      <tr>
        <th>Base</th>
        <th class="combo">+</th>
        <th>Modifier</th>
        <th class="combo">=</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>‹</td>
        <td class="combo">+</td>
        <td><kbd>'</kbd></td>
        <td class="combo">=</td>
        <td>›</td>
      </tr>
      <tr>
        <td>›</td>
        <td class="combo">+</td>
        <td><kbd>'</kbd></td>
        <td class="combo">=</td>
        <td>‹</td>
      </tr>
      <tr>
        <td>«</td>
        <td class="combo">+</td>
        <td><kbd>"</kbd></td>
        <td class="combo">=</td>
        <td>»</td>
      </tr>
      <tr>
        <td>»</td>
        <td class="combo">+</td>
        <td><kbd>"</kbd></td>
        <td class="combo">=</td>
        <td>«</td>
      </tr>
      <tr>
        <td>;</td>
        <td class="combo">+</td>
        <td><kbd>"</kbd></td>
        <td class="combo">=</td>
        <td>"</td>
      </tr>
    </tbody>
  </table>
</div>