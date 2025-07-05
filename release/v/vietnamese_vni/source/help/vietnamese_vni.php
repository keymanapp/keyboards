<?php 
  $pagename = 'Vietnamese VNI Keyboard Help';
  $pagetitle = $pagename;

  // Header
  require_once('header.php');
?>

<p>
  Because the Vietnamese alphabet uses a complex system of diacritical marks, VNI requires the user to type in a base letter, followed by one or two characters that represent the diacritical marks:
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
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>nothing</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ngang</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ngang</td>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Sắc (rising)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>1</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>sa<strong>8</strong>c<strong>1</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>sắc
      </td>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Huyền (falling)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>2</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>huye<strong>6</strong>n<strong>2</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>huyền
      </td>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Hỏi (dipping-rising)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>3</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>hoi<strong>3</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>hỏi
      </td>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Ngã (rising glottalized)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>4</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>nga<strong>4</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ngã
      </td>
    </tr>
    <tr>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>Nặng (falling glottalized)</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>5</td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>na<strong>8</strong>ng<strong>5</strong></td>
      <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>nặng
      </td>
    </tr>
  </tbody>
</table>

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
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>â</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>a6</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>can<strong>6</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>cân</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ê</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>e6</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>d<strong>9</strong>e<strong>6</strong>m</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>đêm</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ô</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>o6</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>nho<strong>6</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>nhô</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ơ</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>o7</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>mo<strong>7</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>mơ</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ư</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>u7</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>tu<strong>7</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>tư</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>ă</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>a8</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>trang<strong>8</strong></td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>trăng</td>
  </tr>
  <tr>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>đ</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>d9</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>d<strong>9</strong>a<strong>6</strong>u</td>
    <td style='border: 1px solid rgb(0, 0, 0); padding: 5pt 10pt;'>đâu</td>
  </tr>
  </tbody>
</table>

<p>
  If more than one tone marking key is pressed, the last one will be used. For example, typing <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>a12</code> will return "à". To write a tone marking key as a normal character, one has to press it twice: <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>he3</code> becomes <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>hẻ</code>, while <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>he33</code> becomes <code style='border: 1px solid rgb(199, 199, 199); border-radius: 3pt; background: rgb(238, 238, 238); padding: 1pt 2pt;'>he3</code>.
</p>

<div style='color: rgb(238, 0, 0); background-color: rgb(255, 213, 213); border: 2px dashed rgb(238, 0, 0); padding: 8pt 16pt; margin: 8pt 0; display: inline-block;'>
  <p><b>Important Notice:</b> This keyboard uses <a href="https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ#Kiểu_cũ">Quy tắc đặt dấu thanh kiểu cũ</a> (òa, òe, úy) by default.</p>
  <p>You can turn on <a href="https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ#Kiểu_mới">Quy tắc đặt dấu thanh kiểu mới</a> (oà, oè, uý) in <b>Keyman → Configuration → Keyboard Layouts → Vietnamese VNI → Keyboard Options</b></p>
</div>

<hr>

<p>© Mike Vo &lt;<a href="mailto:info@miketvo.com">info@miketvo.com</a>&gt; | <a href="https://miketvo.com">miketvo.com</a></p>
