<?php 
  $pagename = 'Łingít Keyboard Help';
  $pagetitle = 'Łingít Keyboard Help';
  $pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>


<h1>Start Using Łingít</h1>
<p>
  This keyboard is designed for the <b>Łingít</b> language of the Western Subarctic region of Canada.
</p>
<p>
  If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>


<h2>Desktop Layout</h2>

<div id='osk' data-states='default shift'></div>

<ul>
  <li>
    <strong>Underline mark (macron)</strong> can be typed with the / key. Always type the underline, do not use your computer's underline formatting!
    <ul>
      <li>G̱ = G then / (slash)</li>
    </ul>
  </li>
  <li>
    <strong>Combining accents/tone marks</strong> are located on the ; [ ` keys. Type an accent after a vowel to add it on the vowel. If you've typed the wrong accent, just type the correct accent to replace it.
    <ul>
      <li>Á = A then ; (semicolon)</li>
      <li>À = A then ` (backquote)</li>
      <li>Â = A then [ (left bracket)</li>
    </ul>
  </li>
  <li>
    <strong>Nasal symbol (ogonek)</strong> is located on the \ key. Type this after a vowel to add it on the vowel.
    <ul>
      <li>Ą = A then \ (backslash)</li>
    </ul>
  </li>
  <li>
    <strong>Nasal + accent/tone</strong> can be typed by combining these two steps, or as a shortcut by pressing SHIFT when adding the accent/tone mark.
    <ul>
      <li>Ą́ = A then SHIFT + : (colon)</li>
      <li>Ą̀ = A then SHIFT + ~ (tilde)</li>
      <li>Ą̂ = A then SHIFT + { (left curly bracket)</li>
    </ul>
  </li>
  <li>
    By holding the ALT key, you can return to the standard US English keyboard value of any modified key (such as <strong>/ (slash)</strong>).
  </li>
</ul>


<h2>Mobile/Tablet Touch Layout</h2>

<h3>Notes on touch layout</h3>
<div id='wikitext'>
<div class='vspace'></div>
<table border='1' style='border-collapse:collapse' cellpadding='5' >
  <tr >
    <th  align='center'>◌̨</th>
    <td  align='center'>w</td>
    <td  align='center'>e é è ê</td>
    <th  align='center'>◌́</th>
    <td  align='center'>t</td>
    <td  align='center'>y</td>
    <td  align='center'>u ú ù û</td>
    <td  align='center'>i í ì î</td>
    <td  align='center'>o ó ò ô</td>
    <td  align='center'>ł</td>
  </tr>
  <tr >
    <td  align='center'>a á à â</td>
    <td  align='center'>s</td>
    <td  align='center'>d</td>
    <th  align='center'>◌̀</th>
    <td  align='center'>g g̱</td>
    <td  align='center'>h</td>
    <td  align='center'>j</td>
    <td  align='center'>k ḵ</td>
    <td  align='center'>l</td>
    <td  align='center'>' "</td>
  </tr>
  <tr >
    <td >&nbsp;</td>
    <td  align='center'>z</td>
    <td  align='center'>x x̱</td>
    <td  align='center'>c</td>
    <th  align='center'>◌̂</th>
    <th  align='center'>◌̱</th>
    <td  align='center'>n</td>
    <td  align='center'>m</td>
    <td  colspan='2'>&nbsp;</td>
  </tr>
</table>

<ul>
  <li>Keys with a red background are combining accents.</li>
  <li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</li>
</ul>

<h3>Keyboard map</h3>
<div id='osk-tablet' data-states='default shift'></div>
