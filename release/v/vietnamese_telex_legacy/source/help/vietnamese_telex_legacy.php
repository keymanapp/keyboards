<?php 
  $pagename = 'Vietnamese Telex (Legacy Mode) (deprecated) Keyboard Help';
  $pagetitle = $pagename;
  
  // Header
  require_once('header.php');
?>

<p>
  Because the Vietnamese alphabet uses a complex system of diacritical marks, Telex requires the user to type in a base letter, followed by one or two characters that represent the diacritical marks:
</p>

<h2>Non-tonal diacritics</h2>

<table style='border-collapse: collapse;'>
  <tbody>
  <tr>
    <th style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Character</th>
    <th style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Key pressed</th>
    <th style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Sample input</th>
    <th style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Sample output</th>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ă</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>aw</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>trang<strong>w</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>trăng</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>â</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>aa</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>can<strong>a</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>cân</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>đ</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>dd</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'><strong>d</strong>dau<strong>a</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>đâu</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ê</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ee</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'><strong>d</strong>dem<strong>e</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>đêm</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ô</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>oo</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>nho<strong>o</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>nhô</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ơ</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ow</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>mo<strong>w</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>mơ</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ư</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>uw</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>tu<strong>w</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>tư</td>
  </tr>
  </tbody>
</table>

<p>
  To write the pair of keys as two distinct characters, the second character has to be repeated. For example, the Vietnamese word cải xoong must be entered as <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>cari xooong</code> rather than <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>cari xoong</code> (*cải xông).
</p>

<h2>Tonal diacritics</h2>

<table style='border-collapse: collapse;'>
  <tbody>
    <tr>
      <th style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Tone</th>
      <th style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Keys added to syllable</th>
      <th style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Sample input</th>
      <th style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Sample output
      </th>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Ngang (level)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>z or nothing</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ngang</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ngang</td>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Huyền (falling)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>f</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>huyeen<strong>f</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>huyền
      </td></tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Sắc (rising)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>s</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>sa<strong>w</strong>c<strong>s</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>sắc
      </td>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Hỏi (dipping-rising)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>r</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>hoi<strong>r</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>hỏi
      </td>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Ngã (rising glottalized)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>x</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>nga<strong>x</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ngã
      </td>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Nặng (falling glottalized)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>j</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>na<strong>w</strong>ng<strong>j</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>nặng
      </td>
    </tr>
  </tbody>
</table>

<p>
  If more than one tone marking key is pressed, the last one will be used. For example, typing <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>asf</code> will return "à". To write a tone marking key as a normal character, one has to press it twice: <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>her</code> becomes <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>hẻ</code>, while <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>herr</code> becomes <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>her</code>.
</p>

<div style='color: rgb(238, 0, 0); background-color: rgb(255, 213, 213); border: 2px dashed rgb(238, 0, 0); padding: 8pt 16pt; margin: 8pt 0; display: inline-block;'>
  <p><b>Important Notice:</b> This keyboard uses <a href="https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ#Kiểu_cũ">Quy tắc đặt dấu thanh kiểu cũ</a>.</p>
  <p>For <a href="https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ#Kiểu_mới">Quy tắc đặt dấu thanh kiểu mới</a>, use <a href="https://keyman.com/keyboards/vietnamese_telex">this version</a>.</p>
</div>

<hr>

<p>© 2022 Mike Vo &lt;<a href="mailto:info@miketvo.com">info@miketvo.com</a>&gt; | <a href="https://miketvo.com">miketvo.com</a></p>
