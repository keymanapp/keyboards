<?php 
  $pagename = 'vietnam Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');


?>

<p>
vietnam keyboard for Chữ Quốc Ngữ Tiếng Việt (Vietnamese)
</p>
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
    <td>d<strong>d</strong>a<strong>a</strong>u</td>
    <td>đâu</td>
  </tr>
  <tr>
    <td>ê</td>
    <td>ee</td>
    <td>d<strong>d</strong>e<strong>e</strong>m</td>
    <td>đêm</td>
  </tr>
  <tr>
    <td>ô</td>
    <td>oo</td>
    <td>nho<strong>o</strong></td>
    <td>nhô</td>
  </tr>
    <tr>
    <td>iê</td>
    <td>ii</td>
    <td>b</strong>i<strong>i</strong>n</td>
    <td>biên</td>
  </tr>
   </tr>
    <tr>
    <td>uyê</td>
    <td>uyy</td>
    <td>c</strong>h</strong>u</strong>y<strong>y</strong>n</td>
    <td>chuyên</td>
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
    <tr>
    <td>-nh</td>
    <td>nn</td>
    <td>a<strong>nn</strong></td>
    <td>anh</td>
  </tr>
  <tr>
    <td>ương</td>
    <td>uonn</td>
    <td>uon<strong>n</strong></td>
    <td>ương</td>
  </tr>
  <tr>
    <td>ông</td>
    <td>oonn</td>
    <td>o<strong>o</strong>n<strong>n</strong></td>
    <td>ông</td>
  </tr>
  <tr>
    <td>âng</td>
    <td>aann</td>
    <td>va<strong>a</strong>n<strong>n</strong></td>
    <td>vâng</td>
  </tr>
  <tr>
    <td>ăng</td>
    <td>awnn</td>
    <td>ta<strong>w</strong>n<strong>n</strong></td>
    <td>tăng</td>
  </tr>
  <tr>
    <td>ưng</td>
    <td>uwnn</td>
    <td>cu<strong>w</strong>n<strong>n</strong></td>
    <td>cưng</td>
  </tr>
    <tr>
    <td>iêng</td>
    <td>iinn</td>
    <td>li<strong>i</strong>n<strong>n</strong>/lie<strong>e</strong>n<strong>n</strong></td>
    <td>liêng</td>
  </tr>
  <tr>
    <td>ơi</td>
    <td>oii</td>
    <td>oi<strong>i</strong></td>
    <td>ơi</td>
  </tr>
  <tr>
    <td>ươi</td>
    <td>uoii</td>
    <td>tuoi<strong>i</strong></td>
    <td>tươi</td>
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
      <td>nothing</td>
      <td>ngang</td>
      <td>ngang</td>
    </tr>
    <tr>
      <td>Huyền (falling)</td>
      <td>f</td>
      <td>huye<strong>e</strong>n<strong>f</strong></td>
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

<div class="msg-ieioywrtant">
  <p><b>Ieioywrtant Notice:</b> This keyboard uses <a href="https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ#Kiểu_cũ">Quy tắc đặt dấu thanh kiểu cũ</a> (òa, òe, úy) by default.</p>
</div>

<hr>

<p>©cathaylab</p>