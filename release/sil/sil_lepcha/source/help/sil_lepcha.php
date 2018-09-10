<?php
  $pagename = 'Lepcha (SIL) Keyboard Help';
  $pagetitle = 'Lepcha (SIL) Keyboard Help';
  $pagestyle = <<<END
    table {border: 3px solid black ;}
    table, tr,td {border-spacing: 0; border-collapse: collapse;}
    tr,td {border: 1px solid black ;}
    tr.lepcha td {font-family:Mingzat; font-size: 1.5em; }
    td {text-align:center; padding: 5px;}
END;
  require_once('header.php');
?>


<h2><a id="a__Introduction"></a>Introduction</h2>
<p>This keyboard is designed for typing Lepcha text. The keyboard is a phonetic keyboard. This means that the keystrokes are tied to the Latin keyboard. For example, to type LEPCHA LETTER KA, you would type the letter "k" on the keyboard. In some cases you will need to type two keystrokes. For example, to type LEPCHA LETTER KHA, you would type "kh". Visually, when you begin typing the sequence (k), you will first see LEPCHA LETTER KA (ᰀ), but once you add an "h" it will turn into KHA (ᰂ). </p>
<p>The Lepcha script, as encoded in Unicode, requires some reordering. That means that although the vowel might display <i>before</i> a consonant, it is actually stored in the computer <i>after</i> the consonant. This keyboard requires  you  to type characters in Unicode order. That is:</p>
<p>C(.)(R)(Y)(V)(F)(^) </p>
<p>This translates into <strong>Consonant</strong> followed by optional <strong>nukta</strong>, followed by optional <strong>Ra</strong>, followed by optional <strong>Ya</strong>, followed by optional <strong>Dependent vowel</strong>, followed by optional <strong>Consonant sign </strong>,followed by optional<strong> Ran</strong>. It is then up to the font to display them in the correct order.</p>

     <p>In the charts below, the keystroke is
in the top row, the character is below that and the Unicode Scalar Value (USV) is in the 3<sup>rd</sup>
row. To type ᰕᰧᰵᰶᰙᰳᰶ you would type "miG_zT_". To type  ᰣᰤᰩᰭ you would type "aYOK". </p>

<h2><a id="a__Consonants"><span/></a>Consonants</h2>

<table><colgroup><col width="32"/><col width="29"/><col
width="31"/><col width="31"/><col width="33"/><col width="32"/><col width="32"/><col width="31"/><col
width="34"/><col width="31"/><col width="34"/><col width="28"/></colgroup><tr><td
style="width:0.2924in; ">
     <p>k</p></td><td style="width:0.2639in; ">
     <p>kl</p></td><td style="width:0.275in; ">
     <p>kh</p></td><td style="width:0.2778in; ">
     <p>g</p></td><td style="width:0.2958in; ">
     <p>gl</p></td><td style="width:0.291in; ">
     <p>ng</p></td><td style="width:0.291in; ">
     <p>c</p></td><td style="width:0.2792in; ">
     <p>ch</p></td><td style="width:0.3097in; ">
     <p>j</p></td><td style="width:0.2799in; ">
     <p>ny</p></td><td style="width:0.3028in; ">
     <p>t</p></td><td style="width:0.2507in; ">
     <p>th</p></td></tr><tr class="lepcha"><td style="width:0.2924in; ">
     <p>ᰀ</p></td><td style="width:0.2639in; ">
     <p>ᰁ</p></td><td style="width:0.275in; ">
     <p>ᰂ</p></td><td style="width:0.2778in; ">
     <p>ᰃ</p></td><td style="width:0.2958in; ">
     <p>ᰄ</p></td><td style="width:0.291in; ">
     <p>ᰅ</p></td><td style="width:0.291in; ">
     <p>ᰆ</p></td><td style="width:0.2792in; ">
     <p>ᰇ</p></td><td style="width:0.3097in; ">
     <p>ᰈ</p></td><td style="width:0.2799in; ">
     <p>ᰉ</p></td><td style="width:0.3028in; ">
     <p>ᰊ</p></td><td style="width:0.2507in; ">
     <p>ᰋ</p></td></tr><tr><td style="width:0.2924in; ">
     <p>1c00</p></td><td style="width:0.2639in; ">
     <p>1c01</p></td><td style="width:0.275in; ">
     <p>1c02</p></td><td style="width:0.2778in; ">
     <p>1c03</p></td><td style="width:0.2958in; ">
     <p>1c04</p></td><td style="width:0.291in; ">
     <p>1c05</p></td><td style="width:0.291in; ">
     <p>1c06</p></td><td style="width:0.2792in; ">
     <p>1c07</p></td><td style="width:0.3097in; ">
     <p>1c08</p></td><td style="width:0.2799in; ">
     <p>1c09</p></td><td style="width:0.3028in; ">
     <p>1c0a</p></td><td style="width:0.2507in; ">
     <p>1c0b</p></td></tr><tr><td style="width:0.2924in; ">
     <p>d</p></td><td style="width:0.2639in; ">
     <p>n</p></td><td style="width:0.275in; ">
     <p>p</p></td><td style="width:0.2778in; ">
     <p>pl</p></td><td style="width:0.2958in; ">
     <p>ph</p></td><td style="width:0.291in; ">
     <p>f</p></td><td style="width:0.291in; ">
     <p>fl</p></td><td style="width:0.2792in; ">
     <p>b</p></td><td style="width:0.3097in; ">
     <p>bl</p></td><td style="width:0.2799in; ">
     <p>m</p></td><td style="width:0.3028in; ">
     <p>ml</p></td><td style="width:0.2507in; ">
     <p>q</p></td></tr><tr class="lepcha"><td style="width:0.2924in; ">
     <p>ᰌ</p></td><td style="width:0.2639in; ">
     <p>ᰍ</p></td><td style="width:0.275in; ">
     <p>ᰎ</p></td><td style="width:0.2778in; ">
     <p>ᰏ</p></td><td style="width:0.2958in; ">
     <p>ᰐ</p></td><td style="width:0.291in; ">
     <p>ᰑ</p></td><td style="width:0.291in; ">
     <p>ᰒ</p></td><td style="width:0.2792in; ">
     <p>ᰓ</p></td><td style="width:0.3097in; ">
     <p>ᰔ</p></td><td style="width:0.2799in; ">
     <p>ᰕ</p></td><td style="width:0.3028in; ">
     <p>ᰖ</p></td><td style="width:0.2507in; ">
     <p>ᰗ</p></td></tr><tr><td style="width:0.2924in; ">
     <p>1c0c</p></td><td style="width:0.2639in; ">
     <p>1c0d</p></td><td style="width:0.275in; ">
     <p>1c0e</p></td><td style="width:0.2778in; ">
     <p>1c0f</p></td><td style="width:0.2958in; ">
     <p>1c10</p></td><td style="width:0.291in; ">
     <p>1c11</p></td><td style="width:0.291in; ">
     <p>1c12</p></td><td style="width:0.2792in; ">
     <p>1c13</p></td><td style="width:0.3097in; ">
     <p>1c14</p></td><td style="width:0.2799in; ">
     <p>1c15</p></td><td style="width:0.3028in; ">
     <p>1c16</p></td><td style="width:0.2507in; ">
     <p>1c17</p></td></tr><tr><td style="width:0.2924in; ">
     <p>qh</p></td><td style="width:0.2639in; ">
     <p>z</p></td><td style="width:0.275in; ">
     <p>y</p></td><td style="width:0.2778in; ">
     <p>r</p></td><td style="width:0.2958in; ">
     <p>l</p></td><td style="width:0.291in; ">
     <p>h</p></td><td style="width:0.291in; ">
     <p>hl</p></td><td style="width:0.2792in; ">
     <p>v</p></td><td style="width:0.3097in; ">
     <p>s</p></td><td style="width:0.2799in; ">
     <p>sh</p></td><td style="width:0.3028in; ">
     <p>w</p></td><td style="width:0.2507in; ">
     <p>a</p></td></tr><tr class="lepcha"><td style="width:0.2924in; ">
     <p>ᰘ</p></td><td style="width:0.2639in; ">
     <p>ᰙ</p></td><td style="width:0.275in; ">
     <p>ᰚ</p></td><td style="width:0.2778in; ">
     <p>ᰛ</p></td><td style="width:0.2958in; ">
     <p>ᰜ</p></td><td style="width:0.291in; ">
     <p>ᰝ</p></td><td style="width:0.291in; ">
     <p>ᰞ</p></td><td style="width:0.2792in; ">
     <p>ᰟ</p></td><td style="width:0.3097in; ">
     <p>ᰠ</p></td><td style="width:0.2799in; ">
     <p>ᰡ</p></td><td style="width:0.3028in; ">
     <p>ᰢ</p></td><td style="width:0.2507in; ">
     <p>ᰣ</p></td></tr><tr><td style="width:0.2924in; ">
     <p>1c18</p></td><td style="width:0.2639in; ">
     <p>1c19</p></td><td style="width:0.275in; ">
     <p>1c1a</p></td><td style="width:0.2778in; ">
     <p>1c1b</p></td><td style="width:0.2958in; ">
     <p>1c1c</p></td><td style="width:0.291in; ">
     <p>1c1d</p></td><td style="width:0.291in; ">
     <p>1c1e</p></td><td style="width:0.2792in; ">
     <p>1c1f</p></td><td style="width:0.3097in; ">
     <p>1c20</p></td><td style="width:0.2799in; ">
     <p>1c21</p></td><td style="width:0.3028in; ">
     <p>1c22</p></td><td style="width:0.2507in; ">
     <p>1c23</p></td></tr></table>

<h2><a id="a__Dependent_Vowels"><span/></a>Dependent Vowels</h2>

<table><colgroup><col width="32"/><col width="35"/><col width="32"/><col
width="32"/><col width="34"/><col width="35"/><col width="27"/></colgroup><tr><td
style="width:0.2917in; ">
     <p>A</p></td><td style="width:0.316in; ">
     <p>i</p></td><td style="width:0.2917in; ">
     <p>o</p></td><td style="width:0.2917in; ">
     <p>O</p></td><td style="width:0.3035in; ">
     <p>u</p></td><td style="width:0.3188in; ">
     <p>U</p></td><td style="width:0.2472in; ">
     <p>e</p></td></tr><tr class="lepcha"><td style="width:0.2917in; ">
     <p>◌ᰦ</p></td><td style="width:0.316in; ">
     <p>ᰧ◌</p></td><td style="width:0.2917in; ">
     <p>ᰨ◌</p></td><td style="width:0.2917in; ">
     <p>ᰩ◌</p></td><td style="width:0.3035in; ">
     <p>◌ᰪ</p></td><td style="width:0.3188in; ">
     <p>◌ᰫ</p></td><td style="width:0.2472in; ">
     <p>◌ᰬ</p></td></tr><tr><td style="width:0.2917in; ">
     <p>1c26</p></td><td style="width:0.316in; ">
     <p>1c27</p></td><td style="width:0.2917in; ">
     <p>1c28</p></td><td style="width:0.2917in; ">
     <p>1c29</p></td><td style="width:0.3035in; ">
     <p>1c2a</p></td><td style="width:0.3188in; ">
     <p>1c2b</p></td><td style="width:0.2472in; ">
     <p>1c2c</p></td></tr></table>

<h2><a id="a__Consonant_Signs"><span/></a>Consonant Signs</h2><table><colgroup><col width="28"/><col width="28"/><col width="26"/><col
width="28"/><col width="28"/><col width="28"/><col width="28"/><col width="36"/><col width="33"/>
</colgroup><tr><td style="width:0.2521in; ">
     <p>K</p></td><td style="width:0.25in; ">
     <p>M</p></td><td style="width:0.2368in; ">
     <p>L</p></td><td style="width:0.2493in; ">
     <p>N</p></td><td style="width:0.2514in; ">
     <p>P</p></td><td style="width:0.2493in; ">
     <p>R</p></td><td style="width:0.2486in; ">
     <p>T</p></td><td style="width:0.3285in; ">
     <p>D</p></td><td style="width:0.2931in; ">
     <p>G</p></td></tr><tr class="lepcha"><td style="width:0.2521in; ">
     <p>◌ᰭ</p></td><td style="width:0.25in; ">
     <p>◌ᰮ</p></td><td style="width:0.2368in; ">
     <p>◌ᰯ</p></td><td style="width:0.2493in; ">
     <p>◌ᰰ</p></td><td style="width:0.2514in; ">
     <p>◌ᰱ</p></td><td style="width:0.2493in; ">
     <p>◌ᰲ</p></td><td style="width:0.2486in; ">
     <p>◌ᰳ</p></td><td style="width:0.3285in; ">
     <p>ᰴ◌</p></td><td style="width:0.2931in; ">
     <p>ᰵ◌</p></td></tr><tr><td style="width:0.2521in; ">
     <p>1c2d</p></td><td style="width:0.25in; ">
     <p>1c2e</p></td><td style="width:0.2368in; ">
     <p>1c2f</p></td><td style="width:0.2493in; ">
     <p>1c30</p></td><td style="width:0.2514in; ">
     <p>1c31</p></td><td style="width:0.2493in; ">
     <p>1c32</p></td><td style="width:0.2486in; ">
     <p>1c33</p></td><td style="width:0.3285in; ">
     <p>1c34</p></td><td style="width:0.2931in; ">
     <p>1c35</p></td></tr></table>

<h2><a id="a__Various_Signs"><span/></a>Various Signs</h2><table border="0" cellspacing="0"
cellpadding="0"><colgroup><col width="53"/><col width="28"/><col width="36"/><col
width="31"/></colgroup><tr><td style="width:0.4799in; ">
     <p>Y</p></td><td style="width:0.25in; ">
     <p>Q</p></td><td style="width:0.3271in; ">
     <p>_</p></td><td style="width:0.2792in; ">
     <p>.</p></td></tr><tr class="lepcha"><td style="width:0.4799in; ">
     <p> ᰤ   </p></td><td style="width:0.25in; ">
     <p>ᰥ </p></td><td style="width:0.3271in; ">
     <p>◌ᰶ</p></td><td style="width:0.2792in; ">
     <p>◌᰷</p></td></tr><tr class="Table23"><td style="width:0.4799in; ">
     <p>1c24</p></td><td style="width:0.25in; ">
     <p>1c25</p></td><td style="width:0.3271in; ">
     <p>1c36</p></td><td style="width:0.2792in; ">
     <p>1c37</p></td></tr></table>

<h2><a id="a__Numerals"><span/></a>Numerals</h2><table border="0" cellspacing="0"
cellpadding="0"><colgroup><col width="36"/><col width="28"/><col width="36"/><col width="36"/><col
width="39"/><col width="38"/><col width="30"/>
<col width="36"/><col width="34"/><col width="36"/></colgroup><tr><td style="text-align:right; width:0.3222in; "
class="Table4_A1">
     <p>0</p></td><td style="text-align:right; width:0.2556in; ">
     <p>1</p></td><td style="text-align:right; width:0.3229in; ">
     <p>2</p></td><td style="text-align:right; width:0.3201in; ">
     <p>3</p></td><td style="text-align:right; width:0.3472in; ">
     <p>4</p></td><td style="text-align:right; width:0.341in; ">
     <p>5</p></td><td style="text-align:right; width:0.266in; ">
     <p>6</p></td><td style="text-align:right; width:0.3271in; ">
     <p>7</p></td><td style="text-align:right; width:0.309in; ">
     <p>8</p></td><td style="text-align:right; width:0.3285in; ">
     <p>9</p></td></tr><tr class="lepcha"><td style="width:0.3222in; ">
     <p>᱀</p></td><td style="width:0.2556in; ">
     <p>᱁</p></td><td style="width:0.3229in; ">
     <p>᱂</p></td><td style="width:0.3201in; ">
     <p>᱃</p></td><td style="width:0.3472in; ">
     <p>᱄</p></td><td style="width:0.341in; ">
     <p>᱅</p></td><td style="width:0.266in; ">
     <p>᱆</p></td><td style="width:0.3271in; ">
     <p>᱇</p></td><td style="width:0.309in; ">
     <p>᱈</p></td><td style="width:0.3285in; ">
     <p>᱉</p></td></tr><tr><td style="width:0.3222in; ">
     <p>1c40</p></td><td style="width:0.2556in; ">
     <p>1c41</p></td><td style="width:0.3229in; ">
     <p>1c42</p></td><td style="width:0.3201in; ">
     <p>1c43</p></td><td style="width:0.3472in; ">
     <p>1c44</p></td><td style="width:0.341in; ">
     <p>1c45</p></td><td style="width:0.266in; ">
     <p>1c46</p></td><td style="width:0.3271in; ">
     <p>1c47</p></td><td style="width:0.309in; ">
     <p>1c48</p></td><td style="width:0.3285in; ">
     <p>1c49</p></td></tr></table>

<h2><a id="a__Extra-orthographical_Marks___Punctuation"><span/></a>Extra-orthographical
Marks / Punctuation</h2>
<table border="0" cellspacing="0"><colgroup><col width="45"/><col width="36"/><col
width="45"/><col width="45"/><col width="48"/><col width="48"/><col width="37"/><col width="46"/></colgroup>
<tr><td style="width:0.4042in; ">
     <p>'</p></td><td style="width:0.3208in; ">
     <p>”</p></td><td style="width:0.4049in; ">
     <p>=</p></td><td style="width:0.4021in; ">
     <p>+</p></td><td style="width:0.4347in; ">
     <p>Z</p></td><td style="width:0.4285in; ">
     <p>V</p></td><td style="width:0.3333in; ">
     <p>W</p></td><td style="width:0.4111in; ">
     <p>X</p></td></tr><tr class="lepcha"><td style="width:0.4042in; ">
     <p>᰻ </p></td><td style="width:0.3208in; ">
     <p>᰼ </p></td><td style="width:0.4049in; ">
     <p>᰽ </p></td><td style="width:0.4021in; ">
     <p>᰾ </p></td><td style="width:0.4347in; ">
     <p>᰿ </p></td><td style="width:0.4285in; ">
     <p>ᱍ </p></td><td style="width:0.3333in; ">
     <p>ᱎ </p></td><td style="width:0.4111in; ">
     <p>ᱏ </p></td></tr><tr><td style="width:0.4042in; ">
     <p>1c3b</p></td><td style="width:0.3208in; ">
     <p>1c3c</p></td><td style="width:0.4049in; ">
     <p>1c3d</p></td><td style="width:0.4021in; ">
     <p>1c3e</p></td><td style="width:0.4347in; ">
     <p>1c3f</p></td><td style="width:0.4285in; ">
     <p>1c4d</p></td><td style="width:0.3333in; ">
     <p>1c4e</p></td><td style="width:0.4111in; ">
     <p>1c4f</p></td></tr></table>


<h2><a id="a__Consonant_Conjuncts"><span/></a>Consonant Conjuncts</h2><table border="0"
cellspacing="0"><colgroup><col width="41"/><col width="42"/><col width="51"/><col
width="42"/><col width="38"/><col width="42"/><col width="47"/><col width="42"/><col width="38"/><col
width="36"/><col width="39"/><col width="34"/></colgroup><tr><td style="width:0.366in; ">
     <p>kY</p></td><td style="width:0.3792in; ">
     <p>klY</p></td><td style="width:0.4618in; ">
     <p>khY</p></td><td style="width:0.3806in; ">
     <p>gY</p></td><td style="width:0.3458in; ">
     <p>glY</p></td><td style="width:0.3792in; ">
     <p>tY</p></td><td style="width:0.4222in; ">
     <p>thY</p></td><td style="width:0.3771in; ">
     <p>dY</p></td><td style="width:0.3382in; ">
     <p>pY</p></td><td style="width:0.3215in; ">
     <p>plY</p></td><td style="width:0.3521in; ">
     <p>phY</p></td><td style="width:0.3049in; ">
     <p>fY</p></td></tr><tr class="lepcha"><td style="width:0.366in; ">
     <p>ᰀᰤ</p></td><td style="width:0.3792in; ">
     <p>ᰁᰤ</p></td><td style="width:0.4618in; ">
     <p>ᰂᰤ</p></td><td style="width:0.3806in; ">
     <p>ᰃᰤ</p></td><td style="width:0.3458in; ">
     <p>ᰄᰤ</p></td><td style="width:0.3792in; ">
     <p>ᰊᰤ</p></td><td style="width:0.4222in; ">
     <p>ᰋᰤ</p></td><td style="width:0.3771in; ">
     <p>ᰌᰤ</p></td><td style="width:0.3382in; ">
     <p>ᰎᰤ</p></td><td style="width:0.3215in; ">
     <p>ᰏᰤ</p></td><td style="width:0.3521in; ">
     <p>ᰐᰤ</p></td><td style="width:0.3049in; ">
     <p>ᰑᰤ</p></td></tr><tr><td style="width:0.366in; ">
     <p>flY</p></td><td style="width:0.3792in; ">
     <p>bY</p></td><td style="width:0.4618in; ">
     <p>blY</p></td><td style="width:0.3806in; ">
     <p>mY</p></td><td style="width:0.3458in; ">
     <p>mlY</p></td><td style="width:0.3792in; ">
     <p>rY</p></td><td style="width:0.4222in; ">
     <p>lY</p></td><td style="width:0.3771in; ">
     <p>hY</p></td><td style="width:0.3382in; ">
     <p>hlY</p></td><td style="width:0.3215in; ">
     <p>vY</p></td><td style="width:0.3521in; ">
     <p>shY</p></td><td style="width:0.3049in; ">
     <p>aY</p></td></tr><tr class="lepcha"><td style="width:0.366in; ">
     <p>ᰒᰤ</p></td><td style="width:0.3792in; ">
     <p>ᰓᰤ</p></td><td style="width:0.4618in; ">
     <p>ᰔᰤ</p></td><td style="width:0.3806in; ">
     <p>ᰕᰤ</p></td><td style="width:0.3458in; ">
     <p>ᰖᰤ</p></td><td style="width:0.3792in; ">
     <p>ᰛᰤ</p></td><td style="width:0.4222in; ">
     <p>ᰜᰤ</p></td><td style="width:0.3771in; ">
     <p>ᰝᰤ</p></td><td style="width:0.3382in; ">
     <p>ᰞᰤ</p></td><td style="width:0.3215in; ">
     <p>ᰟᰤ</p></td><td style="width:0.3521in; ">
     <p>ᰡᰤ</p></td><td style="width:0.3049in; ">
     <p>ᰣᰤ</p></td></tr><tr><td style="width:0.366in; ">
     <p>kQ</p></td><td style="width:0.3792in; ">
     <p>gQ</p></td><td style="width:0.4618in; ">
     <p>ngQ</p></td><td style="width:0.3806in; ">
     <p>pQ</p></td><td style="width:0.3458in; ">
     <p>fQ</p></td><td style="width:0.3792in; ">
     <p>bQ</p></td><td style="width:0.4222in; ">
     <p>mQ</p></td><td style="width:0.3771in; ">
     <p>hQ</p></td><td style="width:0.3382in; ">
     <p> </p></td><td style="width:0.3215in; ">
     <p> </p></td><td style="width:0.3521in; ">
     <p> </p></td><td style="width:0.3049in; ">
     <p> </p></td></tr><tr class="lepcha"><td style="width:0.366in; ">
     <p>ᰀᰥ</p></td><td style="width:0.3792in; ">
     <p>ᰃᰥ</p></td><td style="width:0.4618in; ">
     <p>ᰅᰥ</p></td><td style="width:0.3806in; ">
     <p>ᰎᰥ</p></td><td style="width:0.3458in; ">
     <p>ᰑᰥ</p></td><td style="width:0.3792in; ">
     <p>ᰓᰥ</p></td><td style="width:0.4222in; ">
     <p>ᰕᰥ</p></td><td style="width:0.3771in; ">
     <p>ᰝᰥ</p></td><td style="width:0.3382in; ">
     <p> </p></td><td style="width:0.3215in; ">
     <p> </p></td><td style="width:0.3521in; ">
     <p> </p></td><td style="width:0.3049in; ">
     <p> </p></td></tr><tr><td style="width:0.366in; ">
     <p>kQY</p></td><td style="width:0.3792in; ">
     <p>gQY</p></td><td style="width:0.4618in; ">
     <p>ngQY</p></td><td style="width:0.3806in; ">
     <p>pQY</p></td><td style="width:0.3458in; ">
     <p>fQY</p></td><td style="width:0.3792in; ">
     <p>bQY</p></td><td style="width:0.4222in; ">
     <p>mQY</p></td><td style="width:0.3771in; ">
     <p>hQY</p></td><td style="width:0.3382in; ">
     <p> </p></td><td style="width:0.3215in; ">
     <p> </p></td><td style="width:0.3521in; ">
     <p> </p></td><td style="width:0.3049in; ">
     <p> </p></td></tr><tr class="lepcha"><td style="width:0.366in; ">
     <p>ᰀᰥᰤ</p></td><td style="width:0.3792in; ">
     <p>ᰃᰥᰤ</p></td><td style="width:0.4618in; ">
     <p>ᰅᰥᰤ</p></td><td style="width:0.3806in; ">
     <p>ᰎᰥᰤ</p></td><td style="width:0.3458in; ">
     <p>ᰑᰥᰤ</p></td><td style="width:0.3792in; ">
     <p>ᰓᰥᰤ</p></td><td style="width:0.4222in; ">
     <p>ᰕᰥᰤ</p></td><td style="width:0.3771in; ">
     <p>ᰝᰥᰤ</p></td><td style="width:0.3382in; ">
     <p> </p></td><td style="width:0.3215in; ">
     <p> </p></td><td style="width:0.3521in; ">
     <p> </p></td><td style="width:0.3049in; ">
     <p> </p></td></tr></table>

<h2><a id="a__Nuktas"><span/></a>Nuktas</h2>
<table border="0" cellspacing="0"><colgroup><col width="51"/><col border="0"
cellspacing="0" width="53"/><col
width="52"/><col width="37"/><col width="38"/></colgroup><tr><td style="width:0.4611in; ">
     <p>k.Q</p></td><td style="width:0.4743in; ">
     <p>g.Q</p></td><td style="width:0.4722in; ">
     <p>h.Q</p></td><td style="width:0.3313in; ">
     <p>r.</p></td><td style="width:0.3458in; ">
     <p>z.</p></td></tr><tr class="lepcha"><td style="width:0.4611in; ">
     <p>ᰀ᰷ᰥ</p></td><td style="width:0.4743in; ">
     <p>ᰃ᰷ᰥ</p></td><td style="width:0.4722in; ">
     <p>ᰝ᰷ᰥ</p></td><td style="width:0.3313in; ">
     <p>ᰛ᰷</p></td><td style="width:0.3458in; ">
     <p>ᰙ᰷</p></td></tr></table>
