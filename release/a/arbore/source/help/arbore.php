<?php
  $pagename = 'Arbore Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
    p { font: 10pt Tahoma; }
    h1 { font: bold 16pt Tahoma; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 12pt Tahoma; color: #4444cc; }
    code { font: bold 10pt Courier, monospace; background-color: #D1D3D4; padding: 1px 4px; border-radius: 5px;}

    table, tr, th, td { font: 10pt Arial; border-collapse: collapse; border: solid 1px; padding: 5px 5px; text-align: center;}
    th { font-weight: bold;}
    .combo { font-family: Courier, monospace; padding: 0px 10px;}
    .empty { background-color: lightgray;}
  END;

?>

<p>
  A modified version of the <a href="https://keyman.com/keyboards/sil_el_ethiopian_latin" target="_blank">"SIL EL - Ethiopian Latin"</a> keyboard, tailored to suit the Arbore language.
</p>

<h2>Modified Keys</h2>
<p>All key combinations listed work for both upper and lower cased characters.</p>
<p>The key <code>'</code> (U+0027) is used to append the character <code>̕</code> (U+0315) to a letter. The only exceptions are <code>ď</code> (U+010F) and <code>ť</code> (U+0165), which have precomposed characters for the <b>lowercase letters ONLY.</b></p>
<p>The precomposed characters <code>š</code> (U+0161) and <code>Š</code> (U+0160) are also typed using <code>'</code> (U+0027) for consistency and convenience.</p>

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
      <td><code>c</code></td>
      <td class="combo">+</td>
      <td><code>'</code></td>
      <td class="combo">=</td>
      <td>c̕</td>
    </tr>
    <tr>
      <td><code>b</code></td>
      <td class="combo">+</td>
      <td><code>'</code></td>
      <td class="combo">=</td>
      <td>b̕</td>
    </tr>
    <tr>
      <td><code>d</code></td>
      <td class="combo">+</td>
      <td><code>'</code></td>
      <td class="combo">=</td>
      <td>ď</td>
    </tr>
    <tr>
      <td><code>k</code></td>
      <td class="combo">+</td>
      <td><code>'</code></td>
      <td class="combo">=</td>
      <td>k̕</td>
    </tr>
    <tr>
    <tr>
      <td><code>;</code></td>
      <td class="combo">+</td>
      <td><code>n</code></td>
      <td class="combo">=</td>
      <td>ŋ</td>
    </tr>
    <tr>
      <td>ŋ</td>
      <td class="combo">+</td>
      <td><code>TAB</code></td>
      <td class="combo">=</td>
      <td>ɲ</td>
    </tr>
    <tr>
      <td>ɲ</td>
      <td class="combo">+</td>
      <td><code>TAB</code></td>
      <td class="combo">=</td>
      <td>ŋ</td>
    </tr>
    <tr>
      <td><code>s</code></td>
      <td class="combo">+</td>
      <td><code>'</code></td>
      <td class="combo">=</td>
      <td>š</td>
    </tr>
    <tr>
      <td><code>t</code></td>
      <td class="combo">+</td>
      <td><code>'</code></td>
      <td class="combo">=</td>
      <td>ť</td>
    </tr>
  </tbody>
</table>

<h1>Keyboard Layout</h1>

<p>This help page only covers the <b>keys that have been modified or changed</b> from the original. <br> Documentation for the rest of the keys can be found <a href="https://help.keyman.com/keyboard/sil_el_ethiopian_latin/1.4.1/sil_el_ethiopian_latin" target="_blank">here</a>.</p>
<div id='osk' data-states='default shift'></div>