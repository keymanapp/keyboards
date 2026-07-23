<?php 
  $pagename = 'Laz Phonetic Keyboard Help';
  $pagetitle = $pagename;

  $pagestyle = <<<END 
    p { font: 10pt Tahoma; }
    h1 { font: bold 16pt Tahoma; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 12pt Tahoma; color: #4444cc; }

    .georgian-table {
      border-collapse: collapse;
      width: 100%;
      font-family: sans-serif;
      font-size: 14px;
      border: 1px solid #ccc;
    }
    .georgian-table thead tr {
      background-color: #f5f5f5;
      border-bottom: 2px solid #ccc;
    }
    .georgian-table th {
      border: 1px solid #ccc;
      padding: 6px;
      text-align: center;
      font-size: 11px;
    }
    .georgian-table tbody tr {
      border-bottom: 1px solid #ddd;
    }
    .georgian-table td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: center;
      font-size: 16px;
    }
    .georgian-table .empty-cells {
      background-color: #fafafa;
    }
  END;
  
  require_once('header.php');
?>

<p>
    Laz Phonetic keyboard for the Laz language using Asomtavruli.
</p>

<table class="georgian-table">
  <thead>
    <tr>
      <th>Asomtavruli</th>
      <th>Modern Georgian</th>
      <th>Asomtavruli</th>
      <th>Modern Georgian</th>
      <th>Asomtavruli</th>
      <th>Modern Georgian</th>
      <th>Asomtavruli</th>
      <th>Modern Georgian</th>
      <th>Asomtavruli</th>
      <th>Modern Georgian</th>
      <th>Asomtavruli</th>
      <th>Modern Georgian</th>
      <th>Asomtavruli</th>
      <th>Modern Georgian</th>
      <th>Asomtavruli</th>
      <th>Modern Georgian</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ⴀ</td><td>ა</td>
      <td>Ⴁ</td><td>ბ</td>
      <td>Ⴂ</td><td>გ</td>
      <td>Ⴃ</td><td>დ</td>
      <td>Ⴄ</td><td>ე</td>
      <td>Ⴅ</td><td>ვ</td>
      <td>Ⴆ</td><td>ზ</td>
      <td>Ⴇ</td><td>თ</td>
    </tr>
    <tr>
      <td>Ⴈ</td><td>ი</td>
      <td>Ⴉ</td><td>კ</td>
      <td>Ⴊ</td><td>ლ</td>
      <td>Ⴋ</td><td>მ</td>
      <td>Ⴌ</td><td>ნ</td>
      <td>Ⴍ</td><td>ო</td>
      <td>Ⴎ</td><td>პ</td>
      <td>Ⴏ</td><td>ჟ</td>
    </tr>
    <tr>
      <td>Ⴐ</td><td>რ</td>
      <td>Ⴑ</td><td>ს</td>
      <td>Ⴒ</td><td>ტ</td>
      <td>Ⴓ</td><td>უ</td>
      <td>Ⴔ</td><td>ფ</td>
      <td>Ⴕ</td><td>ქ</td>
      <td>Ⴖ</td><td>ღ</td>
      <td>Ⴗ</td><td>ყ</td>
    </tr>
    <tr>
      <td>Ⴘ</td><td>შ</td>
      <td>Ⴙ</td><td>ჩ</td>
      <td>Ⴚ</td><td>ც</td>
      <td>Ⴛ</td><td>ძ</td>
      <td>Ⴜ</td><td>წ</td>
      <td> ','); </td><td>ჭ</td>
      <td>Ⴞ</td><td>ხ</td>
      <td>Ⴟ</td><td>ჯ</td>
    </tr>
    <tr>
      <td>Ⴠ</td><td>ჰ</td>
      <td>ჸ</td><td>Ⴭ</td>
      <td>ჷ</td><td>Ⴧ</td>
      <td>ჲ</td><td>Ⴢ</td>
      <td colspan="8" class="empty-cells"></td>
    </tr>
  </tbody>
</table>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Phone Keyboard Layout</h2>
<div id='osk-phone' data-states='default shift numeric'>

<p>MARGALEF gave input on the keyboard layouts.</p>
</div>