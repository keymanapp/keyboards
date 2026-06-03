<?php
  $pagename = 'Moro Omwarəŋ Keyboard Layout';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
    * {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Charis, sans-serif;
      font-feature-settings: "cv55" 1, "ss04" 1;
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

    table.kbdrules {
      border-collapse: collapse;
      margin: 12pt 0;
    }

    table.kbdrules td, table.kbdrules th {
      border: 1px solid rgb(0, 0, 0);
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
  <p>ŋəɽəwata ŋəđawəṯaralo iŋi ṯa ŋəɽwađaṯe ṯa ŋëwarđia ole gəđamwarəŋ ŋen ŋanṯa ole gađəmwarəŋ gayiɽətunia alo isi nayian Iəpərnia alo idəlgawa gərḏufan isudan. ləmofəṯa lëđawarəđa.
  <p>A keyboard for typing the Moro language. Moro is a language spoken in the Nuba Mountains of South Kordofan, Sudan.</p>

  <h1>Lǝmufta lǝđwarđa (Keyboard Layouts)</h1>

  <p>waŋge igi ṯa gaŋəmađaṯa ṯa ŋëwarəđi ole gađəmwarəŋ səcu fəŋu igi gəɽənaṯiŋa pəlelo ṯa ŋasëci na ŋəumađaṯe ŋen ŋanṯa ŋaləŋeṯe fəṯau agawərëđa ole gađəmwarəŋ open ŋaməla ŋəŋəɽawta iŋi ŋəwarđëniya</p>
  <p>The keyboard layouts shown below show the position of the key to press to output the desired character.</p>

  <h2>ŋamla ŋǝŋoɽiḏa ta ŋewarđinya (Desktop Keyboard Layouts)</h2>
  <p>ŋəɽiñ iŋi ŋaper ŋargađənia ŋen ŋanṯa ŋaper ŋəmaləđinia</p>

  <h3>ŋǝɽiña iŋi ŋaper ŋǝmarldǝđiya (Unshifted)</h3>
  <p>papəro ŋəɽiñ  ŋəyewarđe ole igi agonaṯa</p>
  <p><img src="unshifted.png" alt="Unshifted keyboard layout" width="624" height="233"></p>

  <h3>ŋǝɽiña iŋi ŋǝmarldǝđiya (Shifted)</h3>
  <p><img src="shifted.png" alt="Shifted keyboard layout" width="624" height="233"></p>

  <hr>

  <h2>đərgiđia ŋəɽiñ eđəwarëđa (Touch Keyboard Layouts)</h2>

  <h3>ŋǝɽiña iŋi ŋaper ŋǝmarldǝđiya (Default - Unshifted)</h3>
  <p><img src="touch_unshifted.png" alt="Default touch keyboard" width="624" height="400"></p>

  <h3>Đǝrgeđiya ŋǝɽiña (Shift)</h3>
  <p><img src="touch_shifted.png" alt="Shift touch keyboard" width="624" height="400"></p>

  <h3>Đumađata (Numeric)</h3>
  <p>ŋen ŋanṯa ŋəđarənaṯe loman alo ṯawnəŋ</p>
  <p><img src="touch_numeric.png" alt="Numeric touch keyboard" width="624" height="400"></p>

  <h2>Đǝđrnata loman alo tǝwanaŋ (Flicks and Longpress)</h2>

  <h3>Đǝpređya taltal (Flicks)</h3>
  <p>agiđu ndə agəđarnaṯo loman alo ndəlga aten alo elmofəḏa 'ŋ' anano '?' agiđi ŋəsci '/' đəđarnaṯađa loman alo đawalano aten.</p>
  <p>If you swipe down starting on the 'ŋ' key a '?' will be output. If you swipe up starting on the 'ŋ' key a '/' will be output.</p>

  <h3>Đǝđrnata loman alo đalano aten (Long Press)</h3>
  <p>Đađ đoman com ndə igiđ agəđarnaṯo alo pëur aten 'ŋ' agiđi aŋəŋaci ŋen ŋəɽəjan '?' na '/' orn ŋa đəge ŋaɽəwađaṯe agama ŋəɽiñ iŋi agonaṯa na com ləŋeṯo ṯa ŋəɽiñ iŋi ŋəpërinia"." orn ndə agerṯo ŋen ŋəman təŋ darnaṯo loman alo puër aten ŋənəŋu ŋiđ naŋəməlađini. Paɽən algənun isi iđəwarđa</p>
  <p>Alternatively, if you press and hold the 'ŋ' a pop-up with two options, '?' or '/' you can then slide without lifting to the desired character. Note the full stop also has other punctuation on long press.</p>

  <h1>Alganun isi eđwarđa (Keyboard rules)</h1>
  <p>Falgənun isi eđəwarəđa ŋəɽiñ iŋi ređnəđenəŋ namwardəŋ ŋole gomwarəŋ orn gerṯe pređ ŋerṯo ŋəwal ŋen ŋarəno orpa isi ñamaraba iñi ñəsina orn ñerṯo ŋapəɽa ŋəwaña kaiñ đəŋəiđađa đələwaɽəŋu đəpëra ñumofḏa iñi ñəwarđa na đərŋiđya đəmiñaca ŋəɽiñalo pređ ŋəɽiñ iŋi ŋero ŋəperṯa đəwarađa iguruf goɽra</p>
  <p>Keyboard for majority letters will follow the standard qwerty keyboard layout, except for the following in the table below.</p>
  <p>The table shows the key cap, the character shown on the hardware keyboard and the character it outputs.</p>

  <h2>ŋǝɽiña lŋi ŋero ŋǝperta đwarđa irufya isi ŋoɽra (Lowercase)</h2>
  <table class="kbdrules">
    <tr>
      <td>q</td>
      <td>ɽ</td>
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

  <h2>ŋəɽiñ iŋi ŋerṯo đəwarađa uruff goɽra (Uppercase)</h2>
  <table class="kbdrules">
    <tr>
      <td>SHIFT + q</td>
      <td>Ɽ</td>
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

  <p>ŋen ŋanta ŋǝɽwađate ta ŋewarđi iruf isi yañaŋɽa alo isi ŋǝɽiña ŋofafia ŋadǝrne ndaŋ đǝŋacaba lafumta indi "alt" and "+" ŋen ŋarno indi lafo alo is iɽo lamǝraba</p>
  <p>To be able to type the characters from the standard qwerty keyboard press the right alt key + the desired key as shown in the table.</p>

  <table class="kbdrules">
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
