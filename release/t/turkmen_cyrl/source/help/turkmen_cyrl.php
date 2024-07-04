<?php 
  $pagename = 'Turkmen Cyrillic Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
p { font: 10pt Tahoma }
h1 { font: bold 16pt Tahoma; color: #4444cc }
h2 { font: bold 12pt Tahoma; color: #4444cc }
table.display tr .gap { width: 16px; border: none; }
table.display tr td { font: 10pt Tahoma; border: solid 1px #ccccff; padding: 4px }
table.display tr th { font: bold 10pt Tahoma; border: solid 1px #ccccff; padding: 4px; text-align: left }
table.display { border-collapse: collapse; }
END;
  require_once('header.php');
?>

<p>
    <b>Turkmen Cyrillic</b> is a Cyrillic script keyboard for Turkmen.  This
keyboard also includes an On Screen Keyboard and includes the Cyrillic letters needed for Russian loan words.
</p>

<h1>Keyboard Layout</h1>
<p><b>;</b> or <b>:</b> are used as a deadkey with a second keystroke to allow input of the following letters:</p>
                           
<table class='display'>
<tr>
<th>Key</th><th>Cyrillic</th><th class='gap'></th>
<th>Key</th><th>Cyrillic</th><th class='gap'></th>
<th>Key</th><th>Cyrillic</th><th class='gap'></th>
<th>Key</th><th>Cyrillic</th>
</tr>
<tr><td>Е</td><td>Э</td><td class='gap'></td><td>Ш</td><td>Щ</td><td class='gap'></td><td>Г</td><td>Ъ</td><td class='gap'></td><td>Ң</td><td>{</td></tr>
<tr><td>У</td><td>Ю</td><td class='gap'></td><td>С</td><td>Ц</td><td class='gap'></td><td>;</td><td>;</td><td class='gap'></td><td>Ө</td><td>}</td></tr>
<tr><td>О</td><td>Ё</td><td class='gap'></td><td>Җ</td><td>Ж</td><td class='gap'></td><td>:</td><td>:</td><td class='gap'></td><td></td><td></td></tr>
<tr><td>А</td><td>Я</td><td class='gap'></td><td>Й</td><td>Ь</td><td class='gap'></td><td>'</td><td>'</td><td class='gap'></td><td></td><td></td></tr>
</table>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default shift numeric'>
</div>
