<?php
  $pagename = 'Hebrew (SIL) Keyboard Help';
  $pagetitle = 'Hebrew (SIL) Keyboard Help';
  $pagestyle = <<<END
      div, p, li { margin-bottom: 8px }
      table.inputSequences {border: 1px solid #1C6EA4;background-color: #FFFFFF;width: 100%;text-align: left;border-collapse: collapse;}
      table.inputSequences td, table.inputSequences th {border: 1px solid #FFFFFF;padding: 3px 2px;text-align:center;}
      table.inputSequences t {font-family: "Ezra SIL","SBL Hebrew",sans-serif;}
      table.inputSequences tr:nth-child(even) {background: #D0E4F5;}
      table.inputSequences thead {background: #1C6EA4;background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);border-bottom: 2px solid #444444;}
      table.inputSequences thead th {font-weight: bold;color: #FFFFFF;border-left: 4px solid #D0E4F5;}
      table.inputSequences thead th:first-child {border-left: none;}
      table.inputSequences tfoot td {font-size: 14px;}
      table.inputSequences tfoot .links {text-align: right;}
      table.inputSequences tfoot .links a{display: inline-block;background: #1C6EA4;color: #FFFFFF;padding: 2px 8px;border-radius: 5px;}
      table.inputSequences td.label p {font-size: 16px;}
      table.inputSequences tr.glyphs td:not(.label) p {font-size: 26px;}
      table+table {margin-top: 30px;}
      .important {text-align: center;font-size: 20px;background-color: #D0E4F5;padding-top:20px;padding-bottom:20px;max-width:850px;margin-left:auto;margin-right: auto;}
      .centered {text-align: center;}
      p.centered+table {margin-top:32px;}
END;
  require_once('header.php');
?>


<p>Data must be typed in the following order:</p>

<p class="important">Consonant - Dagesh - Vowel - Low Marks - Pre-positive Marks - High Marks - Post-Positive Marks</p>



<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-tablet' data-states='default shift rightalt rightalt-shift'>
</div>


<table class="inputSequences">
    <colgroup>
        <col width="96" />
        <col width="57" />
        <col width="57" />
        <col width="57" />
        <col width="57" />
        <col width="57" />
        <col width="57" />
        <col width="57" />
        <col width="57" />
        <col width="57" />
        <col width="57" />
        <col width="57" />
        <col width="67" />
        <col width="58" />
    </colgroup>
    <thead>
    <tr>
        <th class="label"><p>Key:</p></th>
        <th><p>`</p></th>
        <th><p>1</p></th>
        <th><p>2</p></th>
        <th><p>3</p></th>
        <th><p>4</p></th>
        <th><p>5</p></th>
        <th><p>6</p></th>
        <th><p>7</p></th>
        <th><p>8</p></th>
        <th><p>9</p></th>
        <th><p>0</p></th>
        <th><p>-</p></th>
        <th><p>=</p></th>
    </tr>
    </thead>
    <tbody>
    <tr class="glyphs">
        <td class="label"><p>Output:</p></td>
        <td><p>€</p></td>
        <td><p>1</p></td>
        <td><p>2</p></td>
        <td><p>3</p></td>
        <td><p>4</p></td>
        <td><p>5</p></td>
        <td><p>6</p></td>
        <td><p>7</p></td>
        <td><p>8</p></td>
        <td><p>9</p></td>
        <td><p>0</p></td>
        <td><p>־</p></td>
        <td><p>◌ּ</p></td>
    </tr>
    <tr>
        <td class="label"><p>Unicode:</p></td>
        <td><p>20AC</p></td>
        <td><p>0031</p></td>
        <td><p>0032</p></td>
        <td><p>0033</p></td>
        <td><p>0034</p></td>
        <td><p>0035</p></td>
        <td><p>0036</p></td>
        <td><p>0037</p></td>
        <td><p>0038</p></td>
        <td><p>0039</p></td>
        <td><p>0030</p></td>
        <td><p>05BE</p></td>
        <td><p>05BC</p></td>
    </tr>
    <tr class="glyphs">
        <td class="label"><p>Shift:</p></td>
        <td><p>₪</p></td>
        <td><p>!</p></td>
        <td><p>◌֘</p></td>
        <td><p>◌֨</p></td>
        <td><p>◌֜</p></td>
        <td><p>◌֞</p></td>
        <td><p> </p></td>
        <td><p>◌֬</p></td>
        <td><p>◌֝</p></td>
        <td><p>(</p></td>
        <td><p>)</p></td>
        <td><p>–</p></td>
        <td><p> </p></td>
    </tr>
    <tr>
        <td class="label"><p>Unicode:</p></td>
        <td><p>20AA</p></td>
        <td><p>0021</p></td>
        <td><p>0598</p></td>
        <td><p>05A8</p></td>
        <td><p>059C</p></td>
        <td><p>059E</p></td>
        <td><p> </p></td>
        <td><p>05AC</p></td>
        <td><p>059D</p></td>
        <td><p>0028</p></td>
        <td><p>0029</p></td>
        <td><p>2013</p></td>
        <td><p> </p></td>
    </tr>
    <tr class="glyphs">
        <td class="label"><p>Alt:</p></td>
        <td><p>$</p></td>
        <td><p>◌ֽ</p></td>
        <td><p>◌֢</p></td>
        <td><p>◌֖</p></td>
        <td><p>◌֥</p></td>
        <td><p>◌֦</p></td>
        <td><p>◌֭</p></td>
        <td><p>◌֣</p></td>
        <td><p>◌֛</p></td>
        <td><p>◌֧</p></td>
        <td><p>◌֪</p></td>
        <td><p>—</p></td>
        <td><p>◌֑</p></td>
    </tr>
    <tr>
        <td class="label"><p>Unicode:</p></td>
        <td><p>0024</p></td>
        <td><p>05BD</p></td>
        <td><p>05A2</p></td>
        <td><p>0596</p></td>
        <td><p>05A5</p></td>
        <td><p>05A6</p></td>
        <td><p>05AD</p></td>
        <td><p>05A3</p></td>
        <td><p>059B</p></td>
        <td><p>05A7</p></td>
        <td><p>05AA</p></td>
        <td><p>2014</p></td>
        <td><p>0591</p></td>
    </tr>
    <tr class="glyphs">
        <td class="label"><p>Alt-shift:</p></td>
        <td><p> </p></td>
        <td><p>◌֗</p></td>
        <td><p>◌֮</p></td>
        <td><p>◌֙</p></td>
        <td><p>◌֠</p></td>
        <td><p>◌֩</p></td>
        <td><p>◌֟</p></td>
        <td><p>◌֡</p></td>
        <td><p>◌֕</p></td>
        <td><p>◌֓</p></td>
        <td><p>◌֯</p></td>
        <td><p>◌ֿ</p></td>
        <td><p>◌</p></td>
    </tr>
    <tr>
        <td class="label"><p>Unicode:</p></td>
        <td><p> </p></td>
        <td><p>0597</p></td>
        <td><p>05AE</p></td>
        <td><p>0599</p></td>
        <td><p>05A0</p></td>
        <td><p>05A9</p></td>
        <td><p>059F</p></td>
        <td><p>05A1</p></td>
        <td><p>0595</p></td>
        <td><p>0593</p></td>
        <td><p>05AF</p></td>
        <td><p>05BF</p></td>
        <td><p>25CC</p></td>
    </tr>
    </tbody>
</table>





<table class="inputSequences">
    <colgroup>
        <col width="91" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="54" />
        <col width="55" />
    </colgroup>
    <thead>
    <tr>
        <th class="label">
            <p>Key:</p>
        </th>
        <th>
            <p>Q</p>
        </th>
        <th>
            <p>W</p>
        </th>
        <th>
            <p>E</p>
        </th>
        <th>
            <p>R</p>
        </th>
        <th>
            <p>T</p>
        </th>
        <th>
            <p>Y</p>
        </th>
        <th>
            <p>U</p>
        </th>
        <th>
            <p>I</p>
        </th>
        <th>
            <p>O</p>
        </th>
        <th>
            <p>P</p>
        </th>
        <th>
            <p>[</p>
        </th>
        <th>
            <p>]</p>
        </th>
        <th>
            <p>|</p>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr class="glyphs">
        <td class="label">
            <p>Output:</p>
        </td>
        <td>
            <p>ק</p>
        </td>
        <td>
            <p>ו</p>
        </td>
        <td>
            <p>◌ֶ</p>
        </td>
        <td>
            <p>ר</p>
        </td>
        <td>
            <p>ת</p>
        </td>
        <td>
            <p>י</p>
        </td>
        <td>
            <p>◌ֻ</p>
        </td>
        <td>
            <p>◌ִ</p>
        </td>
        <td>
            <p>◌ֹ</p>
        </td>
        <td>
            <p>פ</p>
        </td>
        <td>
            <p>[</p>
        </td>
        <td>
            <p>]</p>
        </td>
        <td>
            <p>\</p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>05E7</p>
        </td>
        <td>
            <p>05D5</p>
        </td>
        <td>
            <p>05B6</p>
        </td>
        <td>
            <p>05E8</p>
        </td>
        <td>
            <p>05EA</p>
        </td>
        <td>
            <p>05D9</p>
        </td>
        <td>
            <p>05BB</p>
        </td>
        <td>
            <p>05B4</p>
        </td>
        <td>
            <p>05B9</p>
        </td>
        <td>
            <p>05E4</p>
        </td>
        <td>
            <p>005B</p>
        </td>
        <td>
            <p>005D</p>
        </td>
        <td>
            <p>005C</p>
        </td>
    </tr>
    <tr class="glyphs">
        <td class="label">
            <p>Shift:</p>
        </td>
        <td>
            <p>◌֗</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>◌ֵ</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>◌֟</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>◌ֹ</p>
        </td>
        <td>
            <p>ף</p>
        </td>
        <td>
            <p>{</p>
        </td>
        <td>
            <p>}</p>
        </td>
        <td>
            <p>׀</p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>0597</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05B5</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>059F</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05B9</p>
        </td>
        <td>
            <p>05E3</p>
        </td>
        <td>
            <p>007B</p>
        </td>
        <td>
            <p>007D</p>
        </td>
        <td>
            <p>05C0</p>
        </td>
    </tr>
    <tr class="glyphs">
        <td class="label">
            <p>Alt:</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>◌ׇ</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>◌֚</p>
        </td>
        <td>
            <p>◌֤</p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05C7</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>059A</p>
        </td>
        <td>
            <p>05A4</p>
        </td>
    </tr>
    <tr class="glyphs">
        <td class="label">
            <p>Alt-shift:</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>◌ֱ</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>◌ֳ</p>
        </td>
        <td>
            <p>CGJ</p>
        </td>
        <td>
            <p>◌֔</p>
        </td>
        <td>
            <p>◌֒</p>
        </td>
        <td>
            <p>◌֫</p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05B1</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05B3</p>
        </td>
        <td>
            <p>034F</p>
        </td>
        <td>
            <p>0594</p>
        </td>
        <td>
            <p>0592</p>
        </td>
        <td>
            <p>05AB</p>
        </td>

    </tr>
</tbody>
</table>






<table class="inputSequences">
    <colgroup>
        <col width="98" />
        <col width="58" />
        <col width="58" />
        <col width="58" />
        <col width="58" />
        <col width="58" />
        <col width="58" />
        <col width="58" />
        <col width="58" />
        <col width="58" />
        <col width="58" />
        <col width="59" />
    </colgroup>
    <thead>
    <tr>
        <th class="label">
            <p>Key:</p>
        </th>
        <th>
            <p>A</p>
        </th>
        <th>
            <p>S</p>
        </th>
        <th>
            <p>D</p>
        </th>
        <th>
            <p>F</p>
        </th>
        <th>
            <p>G</p>
        </th>
        <th>
            <p>H</p>
        </th>
        <th>
            <p>J</p>
        </th>
        <th>
            <p>K</p>
        </th>
        <th>
            <p>L</p>
        </th>
        <th>
            <p>;</p>
        </th>
        <th>
            <p>'</p>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr class="glyphs">
        <td class="label">
            <p>Output:</p>
        </td>
        <td>
            <p>◌ַ</p>
        </td>
        <td>
            <p>ס</p>
        </td>
        <td>
            <p>ד</p>
        </td>
        <td>
            <p>שׂ</p>
        </td>
        <td>
            <p>ג</p>
        </td>
        <td>
            <p>ה</p>
        </td>
        <td>
            <p>שׁ</p>
        </td>
        <td>
            <p>כ</p>
        </td>
        <td>
            <p>ל</p>
        </td>
        <td>
            <p>◌ְ</p>
        </td>
        <td>
            <p>’</p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>05B7</p>
        </td>
        <td>
            <p>05E1</p>
        </td>
        <td>
            <p>05D3</p>
        </td>
        <td>
            <p>05E9<br/>05C2</p>
        </td>
        <td>
            <p>05D2</p>
        </td>
        <td>
            <p>05D4</p>
        </td>
        <td>
            <p>05E9<br/>05C1</p>
        </td>
        <td>
            <p>05DB</p>
        </td>
        <td>
            <p>05DC</p>
        </td>
        <td>
            <p>05B0</p>
        </td>
        <td>
            <p>2019</p>
        </td>
    </tr>
    <tr class="glyphs">
        <td class="label">
            <p>Shift:</p>
        </td>
        <td>
            <p>◌ָ</p>
        </td>
        <td>
            <p>ש</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>ך</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>״</p>
        </td>
        <td>
            <p>”</p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>05B8</p>
        </td>
        <td>
            <p>05E9</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05DA</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05F4</p>
        </td>
        <td>
            <p>201D</p>
        </td>
    </tr>
    <tr class="glyphs">
        <td class="label">
            <p>Alt:</p>
        </td>
        <td>
            <p>◌ׇ</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>;</p>
        </td>
        <td>
            <p>◌ׅ</p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>05C7</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>003B</p>
        </td>
        <td>
            <p>05C5</p>
        </td>
    </tr>
    <tr class="glyphs">
        <td class="label">
            <p>Alt-shift:</p>
        </td>
        <td>
            <p>◌ֲ</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>׃</p>
        </td>
        <td>
            <p>◌ׄ</p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>05B2</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05C3</p>
        </td>
        <td>
            <p>05C4</p>
        </td>
    </tr>
</tbody>
</table>







<table class="inputSequences">
    <colgroup>
        <col width="93" />
        <col width="55" />
        <col width="55" />
        <col width="55" />
        <col width="55" />
        <col width="55" />
        <col width="55" />
        <col width="55" />
        <col width="83" />
        <col width="61" />
        <col width="83" />
        <col width="55" />
        <col width="84" />
    </colgroup>
    <thead>
    <tr>
        <th class="label">
            <p>Key:</p>
        </th>
        <th>
            <p>\</p>
        </th>
        <th>
            <p>Z</p>
        </th>
        <th>
            <p>X</p>
        </th>
        <th>
            <p>C</p>
        </th>
        <th>
            <p>V</p>
        </th>
        <th>
            <p>B</p>
        </th>
        <th>
            <p>N</p>
        </th>
        <th>
            <p>M</p>
        </th>
        <th>
            <p>,</p>
        </th>
        <th>
            <p>.</p>
        </th>
        <th>
            <p>/</p>
        </th>
        <th>
            <p>space</p>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr class="glyphs">
        <td class="label">
            <p>Output:</p>
        </td>
        <td>
            <p>\</p>
        </td>
        <td>
            <p>ז</p>
        </td>
        <td>
            <p>ח</p>
        </td>
        <td>
            <p>צ</p>
        </td>
        <td>
            <p>ט</p>
        </td>
        <td>
            <p>ב</p>
        </td>
        <td>
            <p>נ</p>
        </td>
        <td>
            <p>מ</p>
        </td>
        <td>
            <p>,</p>
        </td>
        <td>
            <p>.</p>
        </td>
        <td>
            <p>/</p>
        </td>
        <td>
            <p> </p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>005C</p>
        </td>
        <td>
            <p>05D6</p>
        </td>
        <td>
            <p>05D7</p>
        </td>
        <td>
            <p>05E6</p>
        </td>
        <td>
            <p>05D8</p>
        </td>
        <td>
            <p>05D1</p>
        </td>
        <td>
            <p>05E0</p>
        </td>
        <td>
            <p>05DE</p>
        </td>
        <td>
            <p>002C</p>
        </td>
        <td>
            <p>002E</p>
        </td>
        <td>
            <p>002F</p>
        </td>
        <td>
            <p>0020</p>
        </td>
    </tr>
    <tr class="glyphs">
        <td class="label">
            <p>Shift:</p>
        </td>
        <td>
            <p>|</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>ץ</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>ן</p>
        </td>
        <td>
            <p>ם</p>
        </td>
        <td>
            <p>ע</p>
        </td>
        <td>
            <p>א</p>
        </td>
        <td>
            <p>?</p>
        </td>
        <td>
            <p> </p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>007C</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05E5</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05DF</p>
        </td>
        <td>
            <p>05DD</p>
        </td>
        <td>
            <p>05E2</p>
        </td>
        <td>
            <p>05D0</p>
        </td>
        <td>
            <p>003F</p>
        </td>
        <td>
            <p>0020</p>
        </td>
    </tr>
    <tr class="glyphs">
        <td class="label">
            <p>Alt:</p>
        </td>
        <td>
            <p>֤</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>׆</p>
        </td>
        <td>
            <p>ZWNJ</p>
        </td>
        <td>
            <p>»</p>
        </td>
        <td>
            <p>«</p>
        </td>
        <td>
            <p>׳</p>
        </td>
        <td>
            <p> </p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>05A4</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>05C6</p>
        </td>
        <td>
            <p>200C<br/>zerowidth<br/>nonjoiner</p>
        </td>
        <td>
            <p>00AB</p>
        </td>
        <td>
            <p>00BB</p>
        </td>
        <td>
            <p>05F3</p>
        </td>
        <td>
            <p>2009<br/>thinspace</p>
        </td>
    </tr>
    <tr class="glyphs">
        <td class="label">
            <p>Alt-shift:</p>
        </td>
        <td>
            <p>◌֫</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>ZWJ</p>
        </td>
        <td>
            <p>◌̇</p>
        </td>
        <td>
            <p>◌̈</p>
        </td>
        <td>
            <p>״</p>
        </td>
        <td>
            <p> </p>
        </td>
    </tr>
    <tr>
        <td class="label">
            <p>Unicode:</p>
        </td>
        <td>
            <p>05AB</p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p> </p>
        </td>
        <td>
            <p>200D<br/>zerowidth<br/>joiner</p>
        </td>
        <td>
            <p>0307<br/>number<br/>dot</p>
        </td>
        <td>
            <p>0308<br/>thousands dot</p>
        </td>
        <td>
            <p>05F4</p>
        </td>
        <td>
            <p>00A0<br/>NBSP</p>
        </td>
    </tr>
</tbody>
</table>


</h2>Multi-key input sequences</h2>


    <table class="inputSequences">
        <colgroup>
            <col width="149" />
            <col width="63" />
            <col width="63" />
            <col width="63" />
            <col width="63" />
            <col width="63" />
            <col width="63" />
            <col width="63" />
            <col width="63" />
            <col width="64" />
        </colgroup>
        <thead>
        <tr>
            <th>
                <p>Combinations:</p>
            </th>
            <th>
                <p>.h</p>
            </th>
            <th>
                <p>.t</p>
            </th>
            <th>
                <p>.s</p>
            </th>
            <th>
                <p>s+</p>
            </th>
            <th>
                <p>s^</p>
            </th>
            <th>
                <p>Ow or ow</p>
            </th>
            <th>
                <p>wO or wo </p>
            </th>
            <th>
                <p>w=O or w=o</p>
            </th>
            <th>
                <p>wow or wOw</p>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="glyphs">
            <td class="label">
                <p>Output:</p>
            </td>
            <td>
                <p>ח</p>
            </td>
            <td>
                <p>ט</p>
            </td>
            <td>
                <p>צ</p>
            </td>
            <td>
                <p>שׂ</p>
            </td>
            <td>
                <p>שׁ</p>
            </td>
            <td>
                <p>וֹ</p>
            </td>
            <td>
                <p>וֺ</p>
            </td>
            <td>
                <p>וֺּ</p>
            </td>
            <td>
                <p>ווֹ</p>
            </td>
        </tr>
        <tr>
            <td class="label">
                <p>Unicode:</p>
            </td>
            <td>
                <p>05D7</p>
            </td>
            <td>
                <p>05D8</p>
            </td>
            <td>
                <p>05E6</p>
            </td>
            <td>
                <p>05E9 05C2</p>
            </td>
            <td>
                <p>05E9 05C1</p>
            </td>
            <td>
                <p>05D5 05B9</p>
            </td>
            <td>
                <p>05D5 05BA</p>
            </td>
            <td>
                <p>05D5 05BC 05BA</p>
            </td>
            <td>
                <p>05D5 05D5 05B9</p>
            </td>
        </tr>
        </tbody>
    </table>








    <table class="inputSequences">
        <colgroup>
            <col width="149" />
            <col width="63" />
            <col width="63" />
            <col width="63" />
            <col width="63" />
            <col width="63" />
            <col width="64" />
        </colgroup>
        <thead>
        <tr>
            <th>
                <p><span>ֹCombinations:</span></p>
            </th>
            <th>
                <p>a=</p>
            </th>
            <th>
                <p>e=</p>
            </th>
            <th>
                <p>o=</p>
            </th>
            <th>
                <p>a;</p>
            </th>
            <th>
                <p>e;</p>
            </th>
            <th>
                <p>o;</p>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="label">
                <p>Unicode:</p>
            </td>
            <td>
                <p>05B8</p>
            </td>
            <td>
                <p>05B5</p>
            </td>
            <td>
                <p>05B9</p>
            </td>
            <td>
                <p>05B2</p>
            </td>
            <td>
                <p>05B1</p>
            </td>
            <td>
                <p>05B3</p>
            </td>
        </tr>
        <tr class="glyphs">
            <td class="label">
                <p>Output:</p>
            </td>
            <td>
                <p>&#x25CC;&#x05B8;</p>
            </td>
            <td>
                <p>&#x25CC;&#x05B5;</p>
            </td>
            <td>
                <p>&#x25CC;&#x05B9;</p>
            </td>
            <td>
                <p>&#x25CC;&#x05B2;</p>
            </td>
            <td>
                <p>&#x25CC;&#x05B1;</p>
            </td>
            <td>
                <p>&#x25CC;&#x05B3;</p>
            </td>
        </tr>
        </tbody>
    </table>






    <table class="inputSequences">
        <colgroup>
            <col width="145" />
            <col width="63" />
            <col width="63" />
            <col width="119" />
            <col width="72" />
            <col width="91" />
            <col width="105" />
        </colgroup>
        <thead>
        <tr>
            <th class="label">
                <p>Combinations:</p>
            </th>
            <th>
                <p>vowel vowel</p>
            </th>
            <th>
                <p>nun <br/>number dot</p>
            </th>
            <th>
                <p>nun hafukha <br/>number dot</p>
            </th>
            <th>
                <p>ZWNJ<br/>or ZWJ masora</p>
            </th>
            <th>
                <p>thinspace<br/>masora</p>
            </th>
            <th>
                <p>all low marks,<br/>(opt. CGJ)<br/>2nd vowel</p>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="label">
                <p>Output:</p>
            </td>
            <td>
                <p>vowel CGJ vowel</p>
            </td>
            <td>
                <p>nun <br/>w/dot </p>
                <p>נ̇</p>
            </td>
            <td>
                <p>rev nun <br/>w/dot</p>
                <p>׆̇</p>
                <p>masora<br/>on left</p>
            </td>
            <td>
                <p>masora<br/>between<br/>consonants</p>
            </td>
            <td>
                <p>low marks, <br/>(CGJ),<br/>2nd vowel</p>
            </td>
            <td>
                <p> </p>
            </td>
        </tr>
        <tr>
            <td class="label">
                <p>Unicode:</p>
            </td>
            <td>
                <p>vowel 034F vowel</p>
            </td>
            <td>
                <p>05E0<br/>0307</p>
            </td>
            <td>
                <p>05C6<br/>0307</p>
            </td>
            <td>
                <p>200C or 200D 05AF</p>
            </td>
            <td>
                <p>2009<br/>05AF</p>
            </td>
            <td>
                <p>same as above</p>
            </td>
        </tr>
        </tbody>
    </table>
