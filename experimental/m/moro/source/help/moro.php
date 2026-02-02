<?php
  $pagename = 'Moro Keyboard Layout';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
    * {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      font-size: 11pt;
      color: #000000;
      line-height: 1.15;
      max-width: 468pt;
      padding: 72pt;
      background-color: #ffffff;
    }

    h1 {
      font-size: 20pt;
      font-weight: bold;
      color: #000000;
      margin-top: 20pt;
      margin-bottom: 6pt;
      page-break-after: avoid;
    }

    h2 {
      font-size: 16pt;
      font-weight: normal;
      color: #000000;
      margin-top: 18pt;
      margin-bottom: 6pt;
      page-break-after: avoid;
    }

    h3 {
      font-size: 14pt;
      color: #434343;
      margin-top: 16pt;
      margin-bottom: 4pt;
      page-break-after: avoid;
    }

    p {
      margin-bottom: 11pt;
      orphans: 2;
      widows: 2;
    }

    .subtitle {
      font-size: 14pt;
      color: #333333;
      margin-bottom: 16pt;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    table {
      border-collapse: collapse;
      margin: 12pt 0;
    }

    td, th {
      border: 1px solid #000000;
      padding: 5pt;
      text-align: left;
      vertical-align: top;
    }

    hr {
      margin: 24pt 0;
      border: none;
      border-top: 1px solid #cccccc;
    }
  END;
?>

  <p>A keyboard for typing the Moro language. Moro is a language spoken in the Nuba Mountains of South Kordofan, Sudan.</p>

  <h1>Keyboard Layouts</h1>
  <p>The keyboard layouts shown below show the position of the key to press to output the desired character.</p>

  <h2>Desktop Keyboard Layouts</h2>

  <h3>Unshifted</h3>
  <p><img src="unshifted.png" alt="Unshifted keyboard layout" width="624" height="233"></p>

  <h3>Shifted</h3>
  <p><img src="shifted.png" alt="Shifted keyboard layout" width="624" height="233"></p>

  <hr>

  <h2>Touch Keyboard Layouts</h2>

  <h3>Default</h3>
  <p><img src="touch_unshifted.png" alt="Default touch keyboard" width="624" height="400"></p>

  <h3>Shift</h3>
  <p><img src="touch_shifted.png" alt="Shift touch keyboard" width="624" height="400"></p>

  <h3>Numeric</h3>
  <p><img src="touch_numeric.png" alt="Numeric touch keyboard" width="624" height="400"></p>

  <h2>Flicks and Longpress</h2>

  <h3>Flicks</h3>
  <p>If you swipe down starting on the 'ŋ' key a '?' will be output. If you swipe up starting on the 'ŋ' key a '/' will be output.</p>

  <h3>Long Press</h3>
  <p>Alternatively, if you press and hold the 'ŋ' a pop-up with two options, '?' or '/' you can then slide without lifting to the desired character. Note the full stop also has other punctuation on long press.</p>

  <h1>Keyboard rules</h1>
  <p>Keyboard for majority letters will follow the standard qwerty keyboard layout, except for the following in the table below.</p>
  <p>The table shows the key cap, the character shown on the hardware keyboard and the character it outputs.</p>

  <h2>Lowercase</h2>
  <table>
    <tr>
      <td>q</td>
      <td>ɗ</td>
    </tr>
    <tr>
      <td>[</td>
      <td>ñ</td>
    </tr>
    <tr>
      <td>]</td>
      <td>ë</td>
    </tr>
    <tr>
      <td>\</td>
      <td>ḏ</td>
    </tr>
    <tr>
      <td>h</td>
      <td>ə</td>
    </tr>
    <tr>
      <td>z</td>
      <td>ẓ</td>
    </tr>
    <tr>
      <td>x</td>
      <td>đ</td>
    </tr>
    <tr>
      <td>/</td>
      <td>ŋ</td>
    </tr>
  </table>

  <h2>Uppercase</h2>
  <table>
    <tr>
      <td>SHIFT + q</td>
      <td>Ɗ</td>
    </tr>
    <tr>
      <td>SHIFT + [</td>
      <td>Ñ</td>
    </tr>
    <tr>
      <td>SHIFT + ]</td>
      <td>Ë</td>
    </tr>
    <tr>
      <td>SHIFT + \</td>
      <td>Ḏ</td>
    </tr>
    <tr>
      <td>SHIFT + h</td>
      <td>Ə</td>
    </tr>
    <tr>
      <td>SHIFT + z</td>
      <td>Ẑ</td>
    </tr>
    <tr>
      <td>SHIFT + x</td>
      <td>Đ</td>
    </tr>
    <tr>
      <td>SHIFT + /</td>
      <td>Ŋ</td>
    </tr>
  </table>

  <p>To be able to type the characters from the standard qwerty keyboard press the right alt key + the desired key as shown in the table.</p>

  <table>
    <tr>
      <td>RAlt + [</td>
      <td>[</td>
    </tr>
    <tr>
      <td>RAlt + ]</td>
      <td>]</td>
    </tr>
    <tr>
      <td>RAlt + \</td>
      <td>\</td>
    </tr>
    <tr>
      <td>RAlt + /</td>
      <td>/</td>
    </tr>
    <tr>
      <td>Shift + RAlt + [</td>
      <td>{</td>
    </tr>
    <tr>
      <td>Shift + RAlt + ]</td>
      <td>}</td>
    </tr>
    <tr>
      <td>Shift + RAlt + \</td>
      <td>|</td>
    </tr>
    <tr>
      <td>Shift + RAlt + /</td>
      <td>/</td>
    </tr>
  </table>