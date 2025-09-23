<?php 
  $pagename = 'hoisan Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');


?>
<p>
  hoisan for Hòi Sán Vạ Coc Ngũi Tụ (Hoisanese). 
<p>
  <p>the Script of National Language for Hoisanese台山話國語字</p>
 <p> 台山話國語字係一種羅馬化嘅粵語文字 <p>
    <p> Hòi Sán Vạ Coc Ngũi Tụ hại yât chủng Lò-Mã phá ké Oạt Ngũi mùn tụ. <p>
<p>

<h1>音韻表 phonologic map</h1>
<p> 建議以下嘅台山話國語字音韻表打字<p>
<p> The suggested form of spelling of the Script of National Language for Hoisanese<p></p>

<h1>韻首consonants</h1>
<img src='consonants.png' alt='Keyboard Layout'>
<p>位於字母a â ă u ư o ô ơ 之前嘅韻首k可以轉變為c</p>
<p>The consonant "k" before vowels a â ă u ư o ô ơ can be transformed to "c"</p>

<h1>韻腹vowels</h1>
<img src='vowels.png' alt='Keyboard Layout'>
<p>如果韻腹i單獨出現，音調係陰聲í ỉ，頭先嘅韻首係y，咁韻首y可以俾省略</p>
<p>If vowel "i" appear alone, the tone is a high tone, such as "í" or "ỉ", and the consonant is "y", then the consonant "y" can be omitted.
<h1>音調tones</h1>
<img src='tones.png' alt='Keyboard Layout'>


</p>
<p>Specific Alphabet: 特別字母<p>
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
  <td>tac<strong>w</strong></td>
  <td>tăc則</td>
</tr>
<tr>
  <td>â</td>
  <td>aa</td>
  <td>yat<strong>a</strong></td>
  <td>yât一</td>
</tr>
<tr>
  <td>ê</td>
  <td>ee</td>
  <td>le<strong>e</strong>c</td>
  <td>lêc叻</td>
</tr>
  <tr>
  <td>iê</td>
  <td>ii</td>
  <td>t</strong>i<strong>i</strong>p</td>
  <td>tiêp接</td>
<tr>
  <td>ơ</td>
  <td>ow</td>
  <td>co<strong>w</strong></td>
  <td>cơ㗎</td>
</tr>
</tbody>
</table>

<p>tone rules: 音調規則<p>
<p> 對應粵拼嘅第一聲同第三聲打s，第二聲打r， 第四聲打f，第五聲打x，第六聲打j <p>
<p> tone 2 = r, tone 1 and tone 3 = s, tone 4 = f, tone 5 = x, tone 6 = j <p>
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
    <td>1(high level)</td>
    <td>s</td>
    <td>cao<strong>s</strong></td>
    <td>cáo高</td>
  </tr>
  <tr>
    <td>2 (high rising)</td>
    <td>r</td>
    <td>hao<strong>r</strong></td>
    <td>hảo好
     </td>
  </tr>
  <tr>
    <td>3 (mid level)</td>
    <td>s</td>
    <td>hui<strong>s</strong></td>
    <td>húi去
    </td>
  </tr>
  <tr>
    <td>4 (low falling)</td>
    <td>f</td>
    <td>tra<strong>f</strong></td>
    <td>trà茶
    </td></tr>
  <tr>
    <td>5 (low rising)</td>
    <td>x</td>
    <td>ma<strong>x</strong></td>
    <td>mã馬
    </td>
  </tr>
  <tr>
    <td>6 (low falling)</td>
    <td>j</td>
    <td>hai<strong>j</strong></td>
    <td>hại係
    </td>
  </tr>
  <tr>
    <td>7 (high entering)</td>
    <td>/</td>
    <td>yaat</td>
    <td>yât一
    </td>
  </tr>
  <tr>
    <td>8 (middle entering)</td>
    <td>s</td>
    <td>phat<strong>s</strong></td>
    <td>phát發
    </td>
  </tr>
  <tr>
    <td>9 (low entering)</td>
    <td>j</td>
    <td>phat<strong>j</strong></td>
    <td>phạt罰
    </td>
  </tr>
</tbody>
</table>

<p>examples: 舉例： <p>
<p> ar > ả, as > á, af > à, ax > ã, aj > ạ <p>
<p> 譬如話：‘兩’ 嘅羅馬字係‘lểnh’， 咁輸入內容就係‘leenhr’<p>


<p> 雙擊音調鍵同特殊轉化鍵，取消轉化，變返原本嘅拼寫 <p>
<p> doubletaping leads to generate original letters:  <p>
  <p>
    If more than one tone marking key is pressed, the last one will be used. For example, typing <code>asf</code> will return "à". To write a tone marking key as a normal character, one has to press it twice: <code>her</code> becomes <code>hẻ</code>, while <code>herr</code> becomes <code>her</code>.
  </p>
<p> 使用Z鍵取消音調轉換 <p>
<p> tap Z key to remove tonations  <p>


<a href="https://github.com/Cathaylaboratory/quokyuzi/blob/main/quocnguytihoisanva.dict.yaml">台山話國語字字典dictionary for Hoisanese Coc Ngũy Tụ</a>

<!-- <p>See <a href="file:taigi_poj.pdf">this document</a> for all the key combinations.</p> -->


<p>範文：南國山河 Nàm Coc Sán Hò<p>
<p>南國山河南帝居 Nàm Coc Sán Hò Nàm Ái Cúi<p>
<p>截然定分在天書 Tiệt Ngình Ịnh Phún Tọi Hính Sí<p>
<p>如何逆虜來侵犯 Ngùi Hò Ngịch Lũ Lòi Xấm Phạn<p>
<p>汝等行看取敗虛 Nỹ Ảnh Hành Hón Xủi Bại Húi<p>

<p>© cathaylab</p>