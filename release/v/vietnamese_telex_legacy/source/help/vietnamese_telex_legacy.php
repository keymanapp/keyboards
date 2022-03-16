<?php 
  $pagename = 'Vietnamese Telex Keyboard (Legacy Mode) Help';
  $pagetitle = $pagename;
  $style = 'p { font: 10pt Tahoma; } h1 { font: bold 16pt Tahoma; color: #4444cc; margin-bottom: 2px } h2 { font: bold 12pt Tahoma; color: #4444cc; } table { border-collapse: collapse; } th, td { border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt; } code { border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt; } .msg-important { color: rgb(238, 0, 0); background-color: rgb(255, 213, 213); border: 2px dashed rgb(238, 0, 0); padding: 8pt 16pt; margin: 8pt 0; display: inline-block; }';

  // Header
  require_once('header.php');
?>

<h1>Start Using Keyman Vietnamese Telex (Legacy Mode) keyboard</h1>

<p>
  Because the Vietnamese alphabet uses a complex system of diacritical marks, Telex requires the user to type in a base letter, followed by one or two characters that represent the diacritical marks:
</p>

<h2>Non-tonal diacritics</h2>

<table>
  <tbody>
  <tr>
    <th>Character</th>
    <th>Key pressed</th>
    <th>Sample input</th>
    <th>Sample output</th>
  </tr>
  <tr>
    <td>ă</td>
    <td>aw</td>
    <td>trang<strong>w</strong></td>
    <td>trăng</td>
  </tr>
  <tr>
    <td>â</td>
    <td>aa</td>
    <td>can<strong>a</strong></td>
    <td>cân</td>
  </tr>
  <tr>
    <td>đ</td>
    <td>dd</td>
    <td><strong>d</strong>dau<strong>a</strong></td>
    <td>đâu</td>
  </tr>
  <tr>
    <td>ê</td>
    <td>ee</td>
    <td><strong>d</strong>dem<strong>e</strong></td>
    <td>đêm</td>
  </tr>
  <tr>
    <td>ô</td>
    <td>oo</td>
    <td>nho<strong>o</strong></td>
    <td>nhô</td>
  </tr>
  <tr>
    <td>ơ</td>
    <td>ow</td>
    <td>mo<strong>w</strong></td>
    <td>mơ</td>
  </tr>
  <tr>
    <td>ư</td>
    <td>uw</td>
    <td>tu<strong>w</strong></td>
    <td>tư</td>
  </tr>
  </tbody>
</table>

<p>
  To write the pair of keys as two distinct characters, the second character has to be repeated. For example, the Vietnamese word cải xoong must be entered as <code>cari xooong</code> rather than <code>cari xoong</code> (*cải xông).
</p>

<h2>Tonal diacritics</h2>

<table>
  <tbody>
    <tr>
      <th>Tone</th>
      <th>Keys added to syllable</th>
      <th>Sample input</th>
      <th>Sample output
      </th>
    </tr>
    <tr>
      <td>Ngang (level)</td>
      <td>z or nothing</td>
      <td>ngang</td>
      <td>ngang</td>
    </tr>
    <tr>
      <td>Huyền (falling)</td>
      <td>f</td>
      <td>huyeen<strong>f</strong></td>
      <td>huyền
      </td></tr>
    <tr>
      <td>Sắc (rising)</td>
      <td>s</td>
      <td>sa<strong>w</strong>c<strong>s</strong></td>
      <td>sắc
      </td>
    </tr>
    <tr>
      <td>Hỏi (dipping-rising)</td>
      <td>r</td>
      <td>hoi<strong>r</strong></td>
      <td>hỏi
      </td>
    </tr>
    <tr>
      <td>Ngã (rising glottalized)</td>
      <td>x</td>
      <td>nga<strong>x</strong></td>
      <td>ngã
      </td>
    </tr>
    <tr>
      <td>Nặng (falling glottalized)</td>
      <td>j</td>
      <td>na<strong>w</strong>ng<strong>j</strong></td>
      <td>nặng
      </td>
    </tr>
  </tbody>
</table>

<p>
  If more than one tone marking key is pressed, the last one will be used. For example, typing <code>asf</code> will return "à". To write a tone marking key as a normal character, one has to press it twice: <code>her</code> becomes <code>hẻ</code>, while <code>herr</code> becomes <code>her</code>.
</p>

<div class="msg-important">
  <p><b>Important Notice:</b> This keyboard uses <a href="https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ#Kiểu_cũ">Quy tắc đặt dấu thanh kiểu cũ</a>.</p>
  <p>For <a href="https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ#Kiểu_mới">Quy tắc đặt dấu thanh kiểu mới</a>, use <a href="https://keyman.com/keyboards/vietnamese_telex">this version</a>.</p>
</div>

<hr>

<p>© 2022 Mike Vo &lt;<a href="mailto:info@miketvo.com">info@miketvo.com</a>&gt; | <a href="https://miketvo.com">miketvo.com</a></p>
