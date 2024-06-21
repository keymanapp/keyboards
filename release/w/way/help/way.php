<?php
  $pagename = 'Wayana Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
    p { font: 10pt Tahoma; }
    h1 { font: bold 16pt Tahoma; color: #4444cc; }
    h2 { font: bold 12pt Tahoma; color: #4444cc; }
    code { font: bold 10pt Courier, monospace; background-color: #D1D3D4; padding: 1px 4px; border-radius: 5px;}

    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-baqh{text-align:center;vertical-align:top}
    .tg .tg-4luf{background-color:lightgray;text-align:center;vertical-align:top}
    .tg .tg-2nhx{background-color:lightgray;text-align:center;vertical-align:top}
  END;
?>

    <h1><img src='way.ico' alt='Wayana Keyboard Icon'> Start Using Wayana</h1>

    <p>
      QWERTY-based keyboard for the Wayana language in Suriname and Brazil.
    </p>

    <h1>Keyboard Layout</h1>
    <h2><b>Desktop Modifier Keys</b></h2>
    <p>
      The <code>f</code> and <code>y</code> keys on the QWERTY keyboard layout are automatically converted into <code>ï</code> and <code>ë</code> characters, respectively.
      To type an <code>f</code> or <code>y</code> using the Wayana keyboard, use the <code>;</code> semicolon key to change the next <code>ï</code> or <code>ë</code> back into the original <code>f</code> or <code>y</code> character.
    </p>

    <table class="tg"><thead>
      <tr>
        <th class="tg-baqh">Base key</th>
        <th class="tg-baqh">+</th>
        <th class="tg-baqh">Modifier key</th>
        <th class="tg-0lax">=</th>
        <th class="tg-baqh">Result</th>
      </tr></thead>
    <tbody>
      <tr>
        <td class="tg-baqh">f</td>
        <td class="tg-4luf"></td>
        <td class="tg-4luf"></td>
        <td class="tg-baqh">=</td>
        <td class="tg-baqh">ï</td>
      </tr>
      <tr>
        <td class="tg-baqh">y</td>
        <td class="tg-2nhx"></td>
        <td class="tg-2nhx"></td>
        <td class="tg-baqh">=</td>
        <td class="tg-baqh">ë</td>
      </tr>
      <tr>
        <td class="tg-baqh">;</td>
        <td class="tg-baqh">+</td>
        <td class="tg-baqh">f</td>
        <td class="tg-baqh">=</td>
        <td class="tg-baqh">f</td>
      </tr>
      <tr>
        <td class="tg-baqh">;</td>
        <td class="tg-baqh">+</td>
        <td class="tg-baqh">y<br></td>
        <td class="tg-baqh">=</td>
        <td class="tg-baqh">y</td>
      </tr>
    </tbody>
    </table>

    <h2><b>Mobile Device Modifier Keys</b></h2>
    <p>
      The <code>f</code> and <code>y</code> keys on the QWERTY keyboard layout have been replaced with <code>ï</code> and <code>ë</code> characters, respectively.
      To type an <code>f</code> or <code>y</code> using the Wayana keyboard, long press its corresponding key until the alternate character appears.
    </p>
    <br>
    <p><b>Keyboard Layout</b></p>
    <div id='osk' data-states='default shift'></div>