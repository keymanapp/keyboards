<?php
  $pagename = 'Arbore Keyboard Help';
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
  A QWERTY-based keyboard for the Arbore language of Southwestern Ethiopia.
</p>

<h2>Keystrokes</h2>
<h3>Combining Comma Characters</h3>
<p>The key <kbd>'</kbd> (U+0027) is used to append the character <kbd>ʼ</kbd> (U+02BC) to a letter. The only exceptions are <kbd>ď</kbd> (U+010F) and <kbd>ť</kbd> (U+0165), which have precomposed characters for the <b>lowercase letters ONLY.</b></p>
<div class='coldiv'>
  <table>
    <thead>
      <tr>
        <th>Base</th>
        <th class='combo'>+</th>
        <th>Modifier</th>
        <th class='combo'>=</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><kbd>c</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>cʼ</td>
      </tr>
      <tr>
        <td><kbd>b</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>bʼ</td>
      </tr>
      <tr>
        <td><kbd>d</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>ď</td>
      </tr>
      <tr>
        <td><kbd>k</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>kʼ</td>
      </tr>
      <tr>
        <td>š</td>
        <td class='combo'>+</td>
        <td><kbd>TAB</kbd></td>
        <td class='combo'>=</td>
        <td>sʼ</td>
      </tr>
      <tr>
        <td><kbd>t</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>ť</td>
      </tr>
    </tbody>
  </table>

  <table>
    <thead>
      <tr>
        <th>Base</th>
        <th class='combo'>+</th>
        <th>Modifier</th>
        <th class='combo'>=</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><kbd>C</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>Cʼ</td>
      </tr>
      <tr>
        <td><kbd>B</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>Bʼ</td>
      </tr>
      <tr>
        <td><kbd>D</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>Dʼ</td>
      </tr>
      <tr>
        <td><kbd>K</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>Kʼ</td>
      </tr>
      <tr>
        <td>Š</td>
        <td class='combo'>+</td>
        <td><kbd>TAB</kbd></td>
        <td class='combo'>=</td>
        <td>Sʼ</td>
      </tr>
      <tr>
        <td><kbd>T</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>Tʼ</td>
      </tr>
    </tbody>
  </table>
</div>

<h3>Non-Latin Characters</h3>
<p>The precomposed characters <kbd>š</kbd> (U+0161) and <kbd>Š</kbd> (U+0160) are also typed using <kbd>'</kbd> (U+0027) for consistency and convenience.</p>
<div class='coldiv'>
  <table>
    <thead>
      <tr>
        <th>Base</th>
        <th class='combo'>+</th>
        <th>Modifier</th>
        <th class='combo'>=</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><kbd>;</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>n</kbd></td>
        <td class='combo'>=</td>
        <td>ŋ</td>
      </tr>
      <tr>
        <td><kbd>:</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>n</kbd></td>
        <td class='combo'>=</td>
        <td>ɲ</td>
      </tr>
      <tr>
        <td>ŋ</td>
        <td class='combo'>+</td>
        <td><kbd>TAB</kbd></td>
        <td class='combo'>=</td>
        <td>ɲ</td>
      </tr>
      <tr>
        <td>ɲ</td>
        <td class='combo'>+</td>
        <td><kbd>TAB</kbd></td>
        <td class='combo'>=</td>
        <td>ŋ</td>
      </tr>
      <tr>
        <td><kbd>s</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>š</td>
      </tr>
    </tbody>
  </table>

  <table>
    <thead>
      <tr>
        <th>Base</th>
        <th class='combo'>+</th>
        <th>Modifier</th>
        <th class='combo'>=</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><kbd>;</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>N</kbd></td>
        <td class='combo'>=</td>
        <td>Ŋ</td>
      </tr>
      <tr>
        <td><kbd>:</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>N</kbd></td>
        <td class='combo'>=</td>
        <td>Ɲ</td>
      </tr>
      <tr>
        <td>Ŋ</td>
        <td class='combo'>+</td>
        <td><kbd>TAB</kbd></td>
        <td class='combo'>=</td>
        <td>Ɲ</td>
      </tr>
      <tr>
        <td>Ɲ</td>
        <td class='combo'>+</td>
        <td><kbd>TAB</kbd></td>
        <td class='combo'>=</td>
        <td>Ŋ</td>
      </tr>
      <tr>
        <td><kbd>S</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>Š</td>
      </tr>
    </tbody>
  </table>
</div>

<h3>Punctuation</h3>
<p>
  The keys <kbd>'</kbd> and <kbd>'</kbd> have been modified to type the characters <kbd>‹</kbd> (U+2039) and <kbd>«</kbd> (U+00AB) respectively.
  <br>
  Continuing to press the key after the typed character will cycle between <kbd>›</kbd> and <kbd>‹</kbd> or <kbd>»</kbd> and <kbd>«</kbd>.
</p>

<div class='coldiv'>
  <table>
    <thead>
      <tr>
        <th>Base</th>
        <th class='combo'>+</th>
        <th>Modifier</th>
        <th class='combo'>=</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><kbd>'</kbd></td>
        <td class='empty'> </td>
        <td class='empty'> </td>
        <td class='combo'>=</td>
        <td>‹</td>
      </tr>
      <tr>
        <td><kbd><</kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>‹</td>
      </tr>
      <tr>
        <td><kbd>></kbd></td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>›</td>
      </tr>
      <tr>
        <td><kbd>"</kbd></td>
        <td class='empty'> </td>
        <td class='empty'> </td>
        <td class='combo'>=</td>
        <td>«</td>
      </tr>
      <tr>
        <td><kbd><</kbd></td>
        <td class='combo'>+</td>
        <td><kbd><kbd><</kbd></kbd></td>
        <td class='combo'>=</td>
        <td>«</td>
      </tr>
      <tr>
        <td><kbd>></kbd></td>
        <td class='combo'>+</td>
        <td><kbd>></kbd></td>
        <td class='combo'>=</td>
        <td>»</td>
      </tr>
    </tbody>
  </table>

  <table>
    <thead>
      <tr>
        <th>Base</th>
        <th class='combo'>+</th>
        <th>Modifier</th>
        <th class='combo'>=</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>‹</td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>›</td>
      </tr>
      <tr>
        <td>›</td>
        <td class='combo'>+</td>
        <td><kbd>'</kbd></td>
        <td class='combo'>=</td>
        <td>‹</td>
      </tr>
      <tr>
        <td>«</td>
        <td class='combo'>+</td>
        <td><kbd>"</kbd></td>
        <td class='combo'>=</td>
        <td>»</td>
      </tr>
      <tr>
        <td>»</td>
        <td class='combo'>+</td>
        <td><kbd>"</kbd></td>
        <td class='combo'>=</td>
        <td>«</td>
      </tr>
    </tbody>
  </table>

</div>
<br>
<br>
<br>
<div id='osk' data-states='default shift numeric'></div>