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
<tr><td>Ө</td><td>Ъ</td><td class='gap'></td><td>О</td><td>Ё</td><td class='gap'></td><td>А</td><td>Я</td><td class='gap'></td><td>Ң</td><td>Щ</td></tr>
<tr><td>Е</td><td>Э</td><td class='gap'></td><td>Ү</td><td>{</td><td class='gap'></td><td>С</td><td>Ш</td><td class='gap'></td><td>Ч</td><td>Ц</td></tr>
<tr><td>Ы</td><td>Й</td><td class='gap'></td><td>Ш</td><td>}</td><td class='gap'></td><td>Җ</td><td>Ж</td><td class='gap'></td><td>Й</td><td>Ь</td></tr>
<tr><td>У</td><td>Ю</td><td class='gap'></td><td>;</td><td>;</td><td class='gap'></td><td>'</td><td>'</td><td class='gap'></td><td>Н</td><td>Ң</td></tr>
</table>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>

<div id='osk-tablet' data-states='default shift numeric'>
</div>
