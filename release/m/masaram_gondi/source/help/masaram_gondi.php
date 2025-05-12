<?php 
  $pagename = 'Masaram Gondi (ITRANS) Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>

  <style type="text/css">
    @font-face {
      font-display: swap;
      font-family: 'Noto Sans Masaram Gondi';
      src: URL('./NotoSansMasaramGondi-Regular.ttf') format('truetype');
    }
    p { font: 10pt Tahoma; }
    h1 { font: bold 16pt Tahoma; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 14pt Tahoma; color: #4444cc; }
    h3 { font: bold 12pt Tahoma; color: #4444cc; }
    .gond { font-family:Noto Sans Masaram Gondi;}
    .char { font-family:Noto Sans Masaram Gondi; font-size: 28px;}
    .key  { font: 12pt Tahoma; color: #708090; }
    .cell-t{box-shadow:0 0 .25rem rgba(0,0,0,.075)!important}
    .cell-r{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}
  </style>

    <p>
      This keyboard is designed for typing the Masaram Gondi language in the Gondi script. 
A Gondi font is required for displaying the characters. This keyboard package 
will install the <b>Noto Sans Masaram Gondi</b> font.
    </p>

    <hr class="mb-5" />

    <div class="row g-5">
      <div class="col-md-12">
        <h2>Guides</h2>
        <p>Read more detailed instructions and documentation on using keyboard.</p>
        <ul class="icon-list">
          <li><a href="#vowels">Vowels</a></li>
          <li><a href="#matra">Matra</a></li>
          <li><a href="#alphabat">Alphabat</a></li>
          <li><a href="#barahkhadi">Barahkhadi</a></li>
          <li><a href="#number">Numbers</a></li>
        </ul>
      </div>
    </div>
      <h3 id="computer">Keyboard layouts</h3>
      <p>The default and shifted layouts cover Masaram Gondi digits, consonants, vowels and other commonly used characters.</p>
      <h4>Default (unshifted)</h4>
      <p><img src="gondi_keyboard_without_shift.jpg" class="img-fluid" alt="Default (unshifted) state"/></p>
      <h4>Shift</h4>
      <p><img src="gondi_keyboard_with_shift.jpg" class="img-fluid" alt="Shift state"/></p>
        <p>You can phonetically type Gondi 
          using the modified ITRANS transliteration scheme on a regular QWERTY keyboard
          and get Masaram Gondi output. 
        </p>
        

      <h3 id="mobile">Mobile Keyboard layouts</h3>
      <p>The default and shifted layouts cover Masaram Gondi digits, consonants, vowels and other commonly used characters.</p>
      <h4>Default (unshifted)</h4>
      <p><img src="m_normal.png" class="img-fluid" alt="Default (unshifted) state"/></p>
      <h4>Shift</h4>
      <p><img src="m_shifted.png" class="img-fluid" alt="Shift state"/></p>


<div class="mx-1 row" id="vowels">
<h3 class="text-center">सूर्क ( गोंडी स्वर )</h3>

<table border-bottom="1px" solid cellspacing="4" cellpadding="6" class="col text-center rounded shadow-sm">
          <col width="64" span="6">
          <tr height="19">
            <td class="char cell-t">𑴀</span></td>
            <td class="char cell-t">𑴁</span></td>
            <td class="char cell-t">𑴂</span></td>
            <td class="char cell-t">𑴃</span></td>
            <td class="char cell-t">𑴄</span></td>
            <td class="char cell-t">𑴅</span></td>
        </tr>
<br>
          <tr height="19">
            <td class="key cell-r">अ a</td>
            <td class="key cell-r">आ aa</td>
            <td class="key cell-r">इ i</td>
            <td class="key cell-r">ई &nbsp; ii</td>
            <td class="key cell-r">उ u</td>
            <td class="key cell-r">ऊ oo</td>
        </tr>
<br>
            <td class="char cell-t">𑴆</span></td>
            <td class="char cell-t">𑴈</span></td>
            <td class="char cell-t">𑴉</span></td>
            <td class="char cell-t">𑴋</span></td>
            <td class="char cell-t">𑴀𑵀</span></td>
            <td class="char cell-t">𑴀𑵁</span></td>
        </tr>
<br>
          <tr height="19">
            <td class="key cell-r">ए e</td>
            <td class="key cell-r">ऐ ai</td>
            <td class="key cell-r">ओ o</td>
            <td class="key cell-r">औ au</td>
            <td class="key cell-r">अं ang</td>
            <td class="key cell-r">अः ah</td>
        </tr>
      </table>
</div>

<div class="mx-1 my-3 row" id="matra">
<h3 class="text-center">कून्क ( गोंडी मात्रा )</h3>
<table border-bottom="1px" solid cellspacing="4" cellpadding="6" class="col text-center rounded shadow-sm">
          <col width="64" span="6">
          <tr height="19">
            <td class="char cell-t">𑵄</span></td>
            <td class="char cell-t">𑴱</span></td>
            <td class="char cell-t">𑴲</span></td>
            <td class="char cell-t">𑴳</span></td>
            <td class="char cell-t">𑴴</span></td>
            <td class="char cell-t">𑴵</span></td>
        </tr>
<br>
          <tr height="19">
            <td class="key cell-r" style="font-family: Masaram-Gondi;">𑴀</td>
            <td class="key cell-r">a</td>
            <td class="key cell-r">i</td>
            <td class="key cell-r">I</td>
            <td class="key cell-r">u</td>
            <td class="key cell-r">U</td>
        </tr>
<br>
          <tr height="19">
           <td class="char cell-t">𑴺</span></td>
           <td class="char cell-t">𑴼</span></td>
           <td class="char cell-t">𑴽</span></td>
           <td class="char cell-t">𑴿</span></td>
           <td class="char cell-t">𑵀</span></td>
           <td class="char cell-t">𑵁</span></td>
        </tr>
<br>
          <tr height="19">
            <td class="key cell-r">e</td>
            <td class="key cell-r" style="font-family: Masaram-Gondi;">𑴆+i</td>
            <td class="key cell-r">o</td>
            <td class="key cell-r" style="font-family: Masaram-Gondi;">𑴀+u</td>
            <td class="key cell-r">M</td>
            <td class="key cell-r">H</td>
        </tr>
      </table>
</div>


      <div class="mx-1 my-3 row" id="alphabet">
        <h3 class="text-center">वंजेग ( गोंडी व्यंजन )</h3>

<table border-bottom="1px" solid cellspacing="4" cellpadding="6" class="col text-center rounded shadow-sm">
          <col width="64" span="10">
          <tr height="19">
            <td colspan="2" class="char cell-t">𑴌</span></td>
            <td colspan="2" class="char cell-t">𑴍</span></td>
            <td colspan="2" class="char cell-t">𑴎</span></td>
            <td colspan="2" class="char cell-t">𑴏</span></td>
            <td colspan="2" class="char cell-t">𑴐</span></td>
        </tr>
<br>
          <tr height="19">
            <td colspan="2" class="key cell-r">क ka</td>
            <td colspan="2" class="key cell-r">ख kha</sd>
            <td colspan="2" class="key cell-r">ग ga</td>
            <td colspan="2" class="key cell-r">घ gha</td>
            <td colspan="2" class="key cell-r">ड़ Fa</td>
        </tr>
<br>
          <tr height="19">
            <td colspan="2" class="char cell-t">𑴑</td>
            <td colspan="2" class="char cell-t">𑴒</td>
            <td colspan="2" class="char cell-t">𑴓</td>
            <td colspan="2" class="char cell-t">𑴔</td>
            <td colspan="2" class="char cell-t">𑴕</td>
        </tr>
<br>
          <tr height="19">
            <td colspan="2" class="key cell-r">च ca</td>
            <td colspan="2" class="key cell-r">छ cha</td>
            <td colspan="2" class="key cell-r">ज ja</td>
            <td colspan="2" class="key cell-r">झ jha</td>
            <td colspan="2" class="key cell-r">ञ Ya</td>
        </tr>
<br>                       
        <tr height="19"> 
            <td colspan="2" class="char cell-t">𑴖</td>
            <td colspan="2" class="char cell-t">𑴗</td>
            <td colspan="2" class="char cell-t">𑴘</td>
            <td colspan="2" class="char cell-t">𑴙</td>
            <td colspan="2" class="char cell-t">𑴚</td>
        </tr>
<br>
          <tr height="19">
            <td colspan="2" class="key cell-r">ट Ta</td>
            <td colspan="2" class="key cell-r">ठ Tha</td>
            <td colspan="2" class="key cell-r">ड Da</td>
            <td colspan="2" class="key cell-r">ढ़ Dha</td>
            <td colspan="2" class="key cell-r">ण Na</td>
        </tr>
<br>                       
        <tr height="19"> 
            <td colspan="2" class="char cell-t">𑴛</td>
            <td colspan="2" class="char cell-t">𑴜</td>
            <td colspan="2" class="char cell-t">𑴝</td>
            <td colspan="2" class="char cell-t">𑴞</td>
            <td colspan="2" class="char cell-t">𑴟</td>
        </tr>
<br>
          <tr height="19">
            <td colspan="2" class="key cell-r">त ta</td>
            <td colspan="2" class="key cell-r">थ tha</td>
            <td colspan="2" class="key cell-r">द da</td>
            <td colspan="2" class="key cell-r">ध dha</td>
            <td colspan="2" class="key cell-r">न na</td>
        </tr>
<br>                       
        <tr height="19"> 
            <td colspan="2" class="char cell-t">𑴠</td>
            <td colspan="2" class="char cell-t"">𑴡</td>
            <td colspan="2" class="char cell-t"">𑴢</td>
            <td colspan="2" class="char cell-t"">𑴣</td>
            <td colspan="2" class="char cell-t"">𑴤</td>
        </tr>
<br>
          <tr height="19">
            <td colspan="2" class="key cell-r">प pa</td>
            <td colspan="2" class="key cell-r">फ pha</td>
            <td colspan="2" class="key cell-r">ब ba</td>
            <td colspan="2" class="key cell-r">भ bha</td>
            <td colspan="2" class="key cell-r">म ma</td>
        </tr>
<br>                       
        <tr height="19"> 
            <td colspan="2" class="char cell-t">𑴥</td>
            <td colspan="2" class="char cell-t">𑴦</td>
            <td colspan="2" class="char cell-t">𑴧</td>
            <td colspan="2" class="char cell-t">𑴨</td>
            <td colspan="2" class="char cell-t">𑴩</td>
        </tr>
<br>
          <tr height="19">
            <td colspan="2" class="key cell-r">य ya</td>
            <td colspan="2" class="key cell-r">र ra</td>
            <td colspan="2" class="key cell-r">ल la</td>
            <td colspan="2" class="key cell-r">व va</td>
            <td colspan="2" class="key cell-r">श sha</td>            
        </tr>

<br>
          <tr height="19">
            <td class="char cell-t"></td>
            <td colspan="2" class="char cell-t">𑴪</td>
            <td colspan="2" class="char cell-t">𑴫</td>
            <td colspan="2" class="char cell-t">𑴬</td>
            <td colspan="2" class="char cell-t">𑴭</td>
            <td class="char cell-t"></td>
        </tr>
<br>
          <tr height="19">
            <td class="key cell-r"></td>
            <td colspan="2" class="key cell-r">ष Sa</td>
            <td colspan="2" class="key cell-r">स sa</td>
            <td colspan="2" class="key cell-r">ह ha</td>
            <td colspan="2" class="key cell-r">ळ La</td>
            <td class="key cell-r"></td>
         </tr>
<br>
          <tr height="19">
            <td colspan="2" class="char cell-t"></td>
            <td colspan="2" class="char cell-t">𑴮</td>
            <td colspan="2" class="char cell-t">𑴯</td>
            <td colspan="2" class="char cell-t">𑴰</td>
            <td colspan="2" class="char cell-t"></td>
        </tr>
<br>
          <tr height="19">
            <td colspan="2" class="key cell-r"></td>
            <td colspan="2" class="key cell-r">क्ष xa</td>
            <td colspan="2" class="key cell-r">ज्ञ Xa</td>
            <td colspan="2" class="key cell-r">त्र Za</td>
            <td colspan="2" class="key cell-r"></td>
         </tr>
</table>
</div>

<div class="row mt-3" id="barahkhadi">
<h3 class="text-start">बारहखड़ीग (बारहखड़ी)</h3>
<table border-bottom="1px" solid cellspacing="4" cellpadding="6" class="col text-center rounded shadow-sm">
          <col width="64" span="16">
          <tr height="19">
            <td class="char cell-t">𑴌𑵄</td>
            <td class="char cell-t">𑴌</td>
            <td class="char cell-t">𑴌𑴱</td>
            <td class="char cell-t">𑴌𑴲</td>
            <td class="char cell-t">𑴌𑴳</td>
            <td class="char cell-t">𑴌𑴴</td>
            <td class="char cell-t">𑴌𑴵</td>
            <td class="char cell-t">𑴌𑴺</td>
            <td class="char cell-t">𑴌𑴼</td>
            <td class="char cell-t">𑴌𑴽</td>
            <td class="char cell-t">𑴌𑴿</td>
            <td class="char cell-t">𑴌𑵀</td>
            <td class="char cell-t">𑴌𑵁</td>
            <td class="char cell-t">𑴌𑵇</td>
            <td class="char cell-t">𑴌𑵆</td>
            <td class="char cell-t">𑴌𑵇𑴲</td>
        </tr>
<br>
        <tr height="19">
            <td class="key cell-r">क k</td>
            <td class="key cell-r">क ka</td>
            <td class="key cell-r">का kaa</td>
            <td class="key cell-r">कि ki</td>
            <td class="key cell-r">की kI</td>
            <td class="key cell-r">कु ku</td>
            <td class="key cell-r">कू koo</td>
            <td class="key cell-r">के ke</td>
            <td class="key cell-r">कै kaI</td>
            <td class="key cell-r">को ko</td>
            <td class="key cell-r">कौ kau</td>
            <td class="key cell-r">कं kaM</td>
            <td class="key cell-r">कः kaH</td>
            <td class="key cell-r">क्र kra</td>
            <td class="key cell-r">र्क kr</td>
            <td class="key cell-r">कृ kri</td>
        </tr>
      </table>
</div>

    <div class="row mt-3" id="sentence">
      <h4 class="text-start">Sentences Example (वाक्य उदाहरण)</h4>
      <div class="row">
        <h5>1- meraa naama rajesha kumaara dhuriyaa hai. </h5>
        <h5 class="gond">𑵑. 𑴤𑴺𑴦𑴱 𑴟𑴱𑴤 𑴦𑴱𑴓𑴺𑴩 𑴌𑴴𑴤𑴱𑴦 𑴞𑴴𑴦𑴲𑴥𑴱 𑴬𑴼.</h5>
        <h5>1- मेरा नाम राजेश कुमार धुरिया है । </h5>
      </div>
    </div>

<div class="mx-1 my-3 row" id="number">
<h3>कंकू ( अंक )</h3>
<table cellspacing="4" cellpadding="6" class="col text-center rounded shadow-sm">
          <col width="64" span="10">
          <tr height="19">
            <td class="char cell-t">𑵑</td>
            <td class="char cell-t">𑵒</td>
            <td class="char cell-t">𑵓</td>
            <td class="char cell-t">𑵔</td>
            <td class="char cell-t">𑵕</td>
            <td class="char cell-t">𑵖</td>
            <td class="char cell-t">𑵗</td>
            <td class="char cell-t">𑵘</td>
            <td class="char cell-t">𑵙</td>
            <td class="char cell-t">𑵐</td>
        </tr>
<br>
          <tr height="19">
            <td class="key cell-r">1</td>
            <td class="key cell-r">2</td>
            <td class="key cell-r">3</td>
            <td class="key cell-r">4</td>
            <td class="key cell-r">5</td>
            <td class="key cell-r">6</td>
            <td class="key cell-r">7</td>
            <td class="key cell-r">8</td>
            <td class="key cell-r">9</td>
            <td class="key cell-r">0</td>
        </tr>
      </table>
</div>




    <div class="row">
      <div class="col-md-6">
        <h2>About Author</h2>
        <p>
          My self Rajesh Kumar Dhuriya a full time Computer teacher and freelauncer software & web developer.
        </p>
        <p class="text-muted">Contact us</p>
        <p>
          Siddharth Nagar, UP(E), India <br />
          Email us: <a href="mailto:hinditutorpoint@gmail.com">hinditutorpoint[at]gmail[dot]com</a>
        </p>
      </div>
    </div>
  </main>
  <p>
    Created by Rajesh Kumar Dhuriya 
  </p>
</div>
</div>
