<?php
  $pagename = 'Wayana Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
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
    <h2>Wayana Keyboard Help Reference</h2>
    <p>
      This QWERTY-based keyboard was designed for users of the Wayana language in Suriname and Brazil, with simple substitutions for the <code>f</code> and <code>y</code> keys.
    </p>
    
    <h2>Desktop Modifier Keys</h2>
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

    <h2>Mobile Device Modifier Keys</h2>
    <p>
      The <code>f</code> and <code>y</code> keys on the QWERTY keyboard layout have been replaced with <code>ï</code> and <code>ë</code> characters, respectively.
      To type an <code>f</code> or <code>y</code> using the Wayana keyboard, long press its corresponding key until the alternate character appears.
    </p>
    <br>
    <div id='osk-mobi-container'>
      <h3>Keyboard Layout</h3>
      <div id='osk-phone' data-states='default shift numeric'></div>
    </div>