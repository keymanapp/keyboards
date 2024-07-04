<?php
  $pagename = 'Indic Romanization from ITRANS Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    samp {font-family: Siddhanta; font-size:20pt;   }
    kbd {color:black; font: 0.8em sans-serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
    .inputSequences {border-collapse: collapse;font-size: 14px;min-width: 592px;}
    .inputSequences th, .inputSequences td {padding: 7px 17px;}
    .inputSequences thead th {border-bottom: 2px solid #6ea1cc;text-transform: uppercase;}
    .inputSequences tbody td {border-bottom: 1px solid #e1edff;color: #353535;text-align: center;}
    .inputSequences tbody tr:nth-child(odd) td {background-color: #f4fbff;}
    .inputSequences tbody tr:hover td {background-color: #ffffa2;border-color: #ffff0f;}
END;
  require_once('header.php');
?>

<h2><span style="color: chocolate;">Indic Romanization from ITRANS</span> Keyboard Version 1.1.1</h2>

<p>This is a phonetic keyboard for Indic Romanization which is based on  
<strong><a href="https://www.aczoom.com/itrans/">ITRANS</a></strong> 
transliteration scheme with some modifications for input. 7bit ISO scheme
has also been referred to for modifying the input scheme. 
Accented letters used by various Indic Romanization schemes such as 
<strong><a href="https://en.wikipedia.org/wiki/ISO_15919">ISO 15919</a></strong>, 
<strong><a href="https://en.wikipedia.org/wiki/International_Alphabet_of_Sanskrit_Transliteration">IAST</a></strong>,
<strong><a href="https://en.wikipedia.org/wiki/National_Library_at_Kolkata_romanisation#Scheme_table">NLK</a></strong>  
are supported for output.</p>

<p>The modified input scheme 
uses only lowercase letters. This allows the same letters to be typed
with CAPS LOCK/SHIFT to get Unicode Romanized output in UPPERCASE letters, 
which is useful for typing Proper names, Headings, etc. 
It also supports typing of IPA vowels for pronunciation keys.</p>

<p>Some punctuation keys are used as part of mapping to get Romanized accented 
output, use these keys twice (thrice for period) if punctuation is required. 
e.g. <kbd>,,</kbd> for <samp>,</samp> and  <kbd>;;</kbd> for <samp>;</samp>

<h3>Vowels</h3>
<p>The following table shows the letters to type to get the vowels.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Indic</th><th>Input</th><th>Output</th><th>Output Scheme</th></tr>
</thead>
<tbody>
<tr><td>अ</td><td>a</td> <td><samp>a</samp></td><td>IAST/ISO</td></tr>
<tr><td>आ</td><td>aa</td> <td><samp>ā</samp></td><td>IAST/ISO</td></tr>
<tr><td>इ</td><td>i</td> <td><samp>i</samp></td><td>IAST/ISO</td></tr>
<tr><td>ई</td><td>ii/ee/-i</td> <td><samp>ī</samp></td><td>IAST/ISO</td></tr>
<tr><td>उ</td><td>u</td> <td><samp>u</samp></td><td>IAST/ISO</td></tr>
<tr><td>ऊ</td><td>uu/oo/-u</td> <td><samp>ū</samp></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ऋ</td><td>.r</td> <td><samp>ṛ</samp></td><td>IAST</td></tr>
<tr><td>ॠ</td><td>.rr</td> <td><samp>ṝ</samp></td><td>IAST</td></tr>
<tr><td>ऌ</td><td>.l</td> <td><samp>ḷ</samp></td><td>IAST</td></tr>
<tr><td>ॡ</td><td>.ll</td> <td><samp>ḹ</samp></td><td>IAST</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ऋ</td><td>,r</td> <td><samp>r̥</samp></td><td>ISO</td></tr>
<tr><td>ॠ</td><td>,rr</td> <td><samp>r̥̄</samp></td><td>ISO</td></tr>
<tr><td>ऌ</td><td>,l</td> <td><samp>l̥</samp></td><td>ISO</td></tr>
<tr><td>ॡ</td><td>,ll</td> <td><samp>l̥̄</samp></td><td>ISO</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ॲ/ऍ</td><td>^e</td> <td><samp>ê</samp></td><td>ISO</td></tr>
<tr><td>ऑ</td><td>^o</td> <td><samp>ô</samp></td><td>ISO</td></tr>
<tr><td>ॲ</td><td>ae</td> <td><samp>ă</samp></td><td>ă/æ/</td></tr>
<tr><td>ऍ</td><td>~ae</td> <td><samp>ĕ</samp></td><td></td></tr>
<tr><td>ऑ</td><td>aw</td> <td><samp>ŏ</samp></td><td>ŏ/ɔ/</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ऎ</td><td>~e</td> <td><samp>ẽ</samp></td><td>resembles matra</td></tr>
<tr><td>ऎ</td><td>e</td> <td><samp>e</samp></td><td>ISO</td></tr>
<tr><td>ए</td><td>-e</td> <td><samp>ē</samp></td><td>ISO</td></tr>
<tr><td>ए</td><td>e</td> <td><samp>e</samp></td><td>IAST</td></tr>
<tr><td>ऐ</td><td>ai</td> <td><samp>ai</samp></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ऒ</td><td>~o</td> <td><samp>õ</samp></td><td>resembles matra</td></tr>
<tr><td>ऒ</td><td>o</td> <td><samp>o</samp></td><td>ISO</td></tr>
<tr><td>ओ</td><td>-o</td> <td><samp>ō</samp></td><td>ISO</td></tr>
<tr><td>ओ</td><td>o</td> <td><samp>o</samp></td><td>IAST</td></tr>
<tr><td>औ</td><td>au</td> <td><samp>au</samp></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ः</td><td>.h</td> <td><samp>ḥ</samp></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ं</td><td>.m</td> <td><samp> ̇</samp></td><td>for ȧ ā̇ ï ī̇ u̇ ū̇ ė aï ȯ au̇ </td></tr>
<tr><td>ँ</td><td>.c</td> <td><samp> ̐</samp></td><td>for a̐ ā̐ i̐ ī̐ u̐ ū̐ e̐ ai̐ o̐ au̐ </td></tr>
<tr><td>ँ</td><td>~m/m.c</td> <td><samp>m̐</samp></td><td>IAST/ISO</td></tr>
<tr><td>ं</td><td>;m/m.m</td> <td><samp>ṁ</samp></td><td>ISO</td></tr>
<tr><td>ं</td><td>.mm</td> <td><samp>ṃ</samp></td><td>ISO - Gurmukhi Tippi</td></tr>
<tr><td>ं</td><td>.mm</td> <td><samp>ṃ</samp></td><td>IAST</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ऽ</td><td>'</td> <td><samp>ʼ</samp></td><td>IAST</td></tr>
<tr><td>ऽ</td><td>''</td> <td><samp>’</samp></td><td>ISO</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
</tbody>
</table>

<h3>Consonants</h3>
<p>The following table shows the letters to type to get the consonants.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Indic</th><th>Input</th><th>Output</th><th>Output Scheme</th></tr>
</thead>
<tbody>
<tr><td>क्</td><td>k</td> <td><samp>k</samp></td><td>IAST/ISO</td></tr>
<tr><td>ख्</td><td>kh</td> <td><samp>kh</samp></td><td>IAST/ISO</td></tr>
<tr><td>ग्</td><td>g</td> <td><samp>g</samp></td><td>IAST/ISO</td></tr>
<tr><td>घ्</td><td>gh</td> <td><samp>gh</samp></td><td>IAST/ISO</td></tr>
<tr><td>ङ्</td><td>.nn/;n</td> <td><samp>ṅ</samp></td><td>IAST/ISO</td></tr>
<tr><td>च्</td><td>c</td> <td><samp>c</samp></td><td>IAST/ISO</td></tr>
<tr><td>छ्</td><td>ch</td> <td><samp>ch</samp></td><td>IAST/ISO</td></tr>
<tr><td>ज्</td><td>j</td> <td><samp>j</samp></td><td>IAST/ISO</td></tr>
<tr><td>झ्</td><td>jh</td> <td><samp>jh</samp></td><td>IAST/ISO</td></tr>
<tr><td>ञ्</td><td>~n</td> <td><samp>ñ</samp></td><td>IAST/ISO</td></tr>
<tr><td>ट्</td><td>.t</td> <td><samp>ṭ</samp></td><td>IAST/ISO</td></tr>
<tr><td>ठ्</td><td>.th</td> <td><samp>ṭh</samp></td><td>IAST/ISO</td></tr>
<tr><td>ड्</td><td>.d</td> <td><samp>ḍ</samp></td><td>IAST/ISO</td></tr>
<tr><td>ढ्</td><td>.dh</td> <td><samp>ḍh</samp></td><td>IAST/ISO</td></tr>
<tr><td>ण्</td><td>.n</td> <td><samp>ṇ</samp></td><td>IAST/ISO</td></tr>
<tr><td>त्</td><td>t</td> <td><samp>t</samp></td><td>IAST/ISO</td></tr>
<tr><td>थ्</td><td>th</td> <td><samp>th</samp></td><td>IAST/ISO</td></tr>
<tr><td>द्</td><td>d</td> <td><samp>d</samp></td><td>IAST/ISO</td></tr>
<tr><td>ध्</td><td>dh</td> <td><samp>dh</samp></td><td>IAST/ISO</td></tr>
<tr><td>न्</td><td>n</td> <td><samp>n</samp></td><td>IAST/ISO</td></tr>
<tr><td>प्</td><td>p</td> <td><samp>p</samp></td><td>IAST/ISO</td></tr>
<tr><td>फ्</td><td>ph</td> <td><samp>ph</samp></td><td>IAST/ISO</td></tr>
<tr><td>ब्</td><td>b</td> <td><samp>b</samp></td><td>IAST/ISO</td></tr>
<tr><td>भ्</td><td>bh</td> <td><samp>bh</samp></td><td>IAST/ISO</td></tr>
<tr><td>म्</td><td>m</td> <td><samp>m</samp></td><td>IAST/ISO</td></tr>
<tr><td>य्</td><td>y</td> <td><samp>y</samp></td><td>IAST/ISO</td></tr>
<tr><td>र्</td><td>r</td> <td><samp>r</samp></td><td>IAST/ISO</td></tr>
<tr><td>ल्</td><td>l</td> <td><samp>l</samp></td><td>IAST/ISO</td></tr>
<tr><td>व्</td><td>v</td> <td><samp>v</samp></td><td>IAST/ISO</td></tr>
<tr><td>श्</td><td>'s/;s</td> <td><samp>ś</samp></td><td>IAST/ISO</td></tr>
<tr><td>ष्</td><td>.s</td> <td><samp>ṣ</samp></td><td>IAST/ISO</td></tr>
<tr><td>स्</td><td>s</td> <td><samp>s</samp></td><td>IAST/ISO</td></tr>
<tr><td>ह्</td><td>h</td> <td><samp>h</samp></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>क्ष्</td><td>k.s</td> <td><samp>kṣ</samp></td><td>IAST/ISO</td></tr>
<tr><td>त्र्</td><td>tr</td> <td><samp>tr</samp></td><td>IAST/ISO</td></tr>
<tr><td>ज्ञ्</td><td>j~n</td> <td><samp>jñ</samp></td><td>IAST/ISO</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ळ्</td><td>.l</td> <td><samp>ḷ</samp></td><td>ISO</td></tr>
<tr><td>ळ्</td><td>..l</td> <td><samp>l̤</samp></td><td>IAST</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>क़्</td><td>q</td> <td><samp>q</samp></td><td>IAST/ISO</td></tr>
<tr><td>ख़्</td><td>x</td> <td><samp>x</samp></td><td>ISO</td></tr>
<tr><td>ख़्</td><td>_kh</td> <td><samp>k͟h</samp></td><td>IAST</td></tr>
<tr><td>ग़्</td><td>;g/.gg</td> <td><samp>ġ</samp></td><td>ISO</td></tr>
<tr><td>ज़्</td><td>z</td> <td><samp>z</samp></td><td>ISO</td></tr>
<tr><td>फ़्</td><td>f</td> <td><samp>f</samp></td><td>ISO</td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>क़्</td><td>.k</td> <td><samp>ḳ</samp></td><td></td></tr>
<tr><td>ख़्</td><td>.kh</td> <td><samp>ḳh</samp></td><td></td></tr>
<tr><td>ग़्</td><td>.g</td> <td><samp>g̣</samp></td><td></td></tr>
<tr><td>ज़्</td><td>.j</td> <td><samp>j̣</samp></td><td></td></tr>
<tr><td>फ़्</td><td>.f</td> <td><samp>f̣</samp></td><td></td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>ड़्</td><td>.r</td> <td><samp>ṛ</samp></td><td>ISO</td></tr>
<tr><td>ढ़्</td><td>.rh</td> <td><samp>ṛh</samp></td><td>ISO</td></tr>
<tr><td>ड़्</td><td>..r</td> <td><samp>r̤</samp></td><td>IAST</td></tr>
<tr><td>ढ़्</td><td>..rh</td> <td><samp>r̤h</samp></td><td>IAST</td></tr>
<tr><td>ड़्</td><td>..d</td> <td><samp>d̤</samp></td><td></td></tr>
<tr><td>ढ़्</td><td>..dh</td> <td><samp>d̤h</samp></td><td></td></tr>
<tr><td></td><td></td> <td><samp></samp></td><td></tr>
<tr><td>र्‍</td><td>^r</td> <td><samp>r̆</samp></td><td>ISO</td></tr>
</tbody>
</table>

<h3>Additional characters</h3>
<p>The following table shows the letters to type to get additional
romanized letters needed for other Indic languages 
as per ISO 15919 scheme.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Indic</th><th>Input</th><th>Output</th><th>Output Scheme</th></tr>
</thead>
<tbody>
<tr><td>്</td><td>^u</td> <td><samp>ŭ</samp></td><td>ISO</td></tr>
<tr><td>ఁ</td><td>^n</td> <td><samp>n̆</samp></td><td>ISO</td></tr>
<tr><td>ᳵ</td><td>_h</td> <td><samp>ẖ</samp></td><td>ISO</td></tr>
<tr><td>ᳶ</td><td>^h</td> <td><samp>ḫ</samp></td><td>ISO</td></tr>
<tr><td>ஃ</td><td>_k</td> <td><samp>ḵ</samp></td><td>ISO</td></tr>
<tr><td>ౘ</td><td>^c</td> <td><samp>ĉ</samp></td><td>ISO</td></tr>
<tr><td>ऱ्, ற, ఱ, ಱ, റ</td><td>_r</td> <td><samp>ṟ</samp></td><td>IAST/ISO</td></tr>
<tr><td>ഺ</td><td>_t</td> <td><samp>ṯ</samp></td><td>ISO</td></tr>
<tr><td>ऩ्, ன, ഩ</td><td>_n</td> <td><samp>ṉ</samp></td><td>IAST/ISO</td></tr>
<tr><td>ऴ्, ழ, ఴ, ೞ, ഴ</td><td>_l</td> <td><samp>ḻ</samp></td><td>IAST/ISO</td></tr>
<tr><td>य़्, 	য়</td><td>;y</td> <td><samp>ẏ</samp></td><td>IAST/ISO</td></tr>
</tbody>
</table>

<hr>

<h3>Devanāgarī Păngrăm:</h3>
<p>गङ्गा के किनारे अमरूद और आम के पेड़ों की छाए में बैठे ऊंट/ऊँट  के पास खड़े ऐरावत नामक चञ्चल हाथी ने पंकज/पँकज  का फूल उठाकर होदे में रखे गणेश की मूर्ति के शीर्ष पर डाला और चिंघाड़ उठा, और ईख का गट्ठर सूंड़/सूँड से उठाकर मुंह/मुँह  में डालकर इत्मीनान से चबाने लगा, जिसे देखकर झांझर/झाँझर, ढोल मजीरे जोर से बजने लगे, पटाखों के धमाके हुए और भक्त गणों ने ओं नमः शिवाय की गुहार से सारे क्षेत्र को गुंजा/गुँजा  दिया और थाली में सिक्के डाल दिए।</p>

<h3>IAST:</h3>
<p>Gaṅgā ke kināre amarūda aura āma ke per̤oṃ kī chāe meṃ baiṭhe ūṃṭa/ūm̐ṭa ke pāsa khar̤e airāvata nāmaka cañcala hāthī ne paṃkaja/pam̐kaja kā phūla uṭhākara hode meṃ rakhe Gaṇeśa kī mūrti ke śīrṣa para ḍālā aura ciṃghār̤a uṭhā, aura īkha kā gaṭṭhara sūṃr̤a/sūm̐ḍa se uṭhākara muṃha/mum̐ha meṃ ḍālakara itmīnāna se cabāne lagā, jise dekhakara jhāṃjhara/jhām̐jhara , ḍhola majīre jora se bajane lage, paṭākhoṃ ke dhamāke hue aura bhakta gaṇoṃ ne oṃ namaḥ śivāya kī guhāra se sāre kṣetra ko guṃjā/gum̐jā diyā aura thālī meṃ sikke ḍāla die.</p>

<h3>IAST Modified:</h3>
<p>Gaṅgā ke kināre amarūda aura āma ke ped̤ȯ  kī chhāe mė  baiṭhe ū̇ṭa/ū̐ṭa ke pāsa khad̤e airāvata nāmaka chañchala hāthī ne pȧkaja/pa̐kaja kā phūla uṭhākara hode mė  rakhe Gaṇesha kī mūrti ke shīrṣa para ḍālā aura chïghād̤a uṭhā, aura īkha kā gaṭṭhara sū̇d̤a/sū̐ḍa se uṭhākara mu̇ha/mu̐ha mė  ḍālakara itmīnāna se chabāne lagā, jise dekhakara jhā̇jhara/jhā̐jhara , ḍhola majīre jora se bajane lage, paṭākhȯ  ke dhamāke hue aura bhakta gaṇȯ  ne ȯ  namaḥ shivāya kī guhāra se sāre kṣetra ko gu̇jā/gu̐jā diyā aura thālī mė  sikke ḍāla die.<p>

<hr>

<h3>IPA Vowels</h3>
<p>The following table shows the letters to type to get IPA vowels 
for words pronunciation key.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Input</th><th>IPA</th></tr>
</thead>
<tbody>
<tr><td>@/a-</td> <td><samp>æ</samp></td></tr>
<tr><td>a'</td> <td><samp>ə</samp></td></tr>
<tr><td>ai'</td> <td><samp>əɪ</samp></td></tr>
<tr><td>au'</td> <td><samp>əʊ</samp></td></tr>
<tr><td>a:/a;</td> <td><samp>ɑː</samp></td></tr>
<tr><td>a`</td> <td><samp>ʌ</samp></td></tr>
<tr><td>a"/a,</td> <td><samp>ɒ</samp></td></tr>
<tr><td>e'</td> <td><samp>ɛ</samp></td></tr>
<tr><td>i'</td> <td><samp>ɪ</samp></td></tr>
<tr><td>i:/i;</td> <td><samp>iː</samp></td></tr>
<tr><td>o:/o;</td> <td><samp>ɔː</samp></td></tr>
<tr><td>u'</td> <td><samp>ʊ</samp></td></tr>
<tr><td>u:/u;</td> <td><samp>uː</samp></td></tr>
</tbody>
</table>

<hr>

<h3>Devanagari:</h3>
<p>एक समय था जब महात्मा गांधी और विनोबा भावे जैसे स्वतंत्रता सेनानी राष्ट्रीय एकता की दृष्टि से राष्ट्रभाषा के रूप में हिंदी और राष्ट्रीय लिपि के रूप में देवनागरी लिपि को स्थापित करने के लिए प्रयासरत थे। यहाँ तक कि शहीदे आज़म भगत सिंह ने भी अपनी मातृभाषा पंजाबी के लिए गुरुमुखी के बजाए वैज्ञानिकता के चलते देवनागरी को अपनाने की बात कही थी। उनका प्रयास था कि देश के जिन हिस्सों में देनवागरी प्रचलित नहीं हैं वहाँ भी जन-जन तक देवनागरी लिपि पहुंचाई जाए। इसलिए महात्मा गांधी व विनोबा भावे द्वारा हिंदी के साथ-साथ देवनागरी लिपि के लिए अनेक संस्थाएँ खड़ी की थी।</p>

<h3>IAST:</h3>
<p>Eka samaya thā jaba mahātmā gāṃdhī aura vinobā bhāve jaise svataṃtratā senānī rāṣṭrīya ekatā kī dṛṣṭi se rāṣṭrabhāṣā ke rūpa meṃ hiṃdī aura rāṣṭrīya lipi ke rūpa meṃ devanāgarī lipi ko sthāpita karane ke lie prayāsarata the. Yahām̐ taka ki śahīde āzama bhagata siṃha ne bhī apanī mātṛbhāṣā paṃjābī ke lie gurumukhī ke bajāe vaijñānikatā ke calate devanāgarī ko apanāne kī bāta kahī thī. Unakā prayāsa thā ki deśa ke jina hissoṃ meṃ denavāgarī pracalita nahīṃ haiṃ vahām̐ bhī jana-jana taka devanāgarī lipi pahuṃcāī jāe. Isalie mahātmā gāṃdhī va vinobā bhāve dvārā hiṃdī ke sātha-sātha devanāgarī lipi ke lie aneka saṃsthāem̐ khar̤ī kī thī.</p>

<h3>IAST with IPA vowels:</h3>

<p>Ɛkə səməyə thɑː jəbə Məhɑːtmɑː Gɑːṃdhɪː əʊrə Vɪnobɑː Bhɑːvɛ jəɪsɛ svətəṃtrətɑː sɛnɑːnɪː rɑːṣṭrɪːyə ɛkətɑː kɪː dṛṣṭɪ sɛ rɑːṣṭrəbhɑːṣɑː kɛ ruːpə mɛṃ Hɪṃdɪː əʊrə rɑːṣṭrɪːyə lɪpɪ kɛ ruːpə mɛṃ Dɛvənɑːgərɪː lɪpɪ ko sthɑːpɪtə kərənɛ kɛ lɪɛ prəyɑːsərətə thɛ. Yəhɑːm̐ təkə kɪ śəhɪːdɛ ɑːzəmə Bhəgətə Sɪṃhə nɛ bhɪː əpənɪː mɑːtṛbhɑːṣɑː pəṃjɑːbɪː kɛ lɪɛ Gurumukhɪː kɛ bəjɑːɛ vəɪjñɑːnɪkətɑː kɛ cələtɛ Dɛvənɑːgərɪː ko əpənɑːnɛ kɪː bɑːtə kəhɪː thɪː. Unəkɑː prəyɑːsə thɑː kɪ dɛśə kɛ jɪnə hɪssoṃ mɛṃ Dɛnəvɑːgərɪː prəcəlɪtə nəhɪːṃ həɪṃ vəhɑːm̐ bhɪː jənə-jənə təkə Dɛvənɑːgərɪː lɪpɪ pəhuṃcɑːɪː jɑːɛ. ɪsəlɪɛ Məhɑːtmɑː Gɑːṃdhɪː və vɪnobɑː bhɑːvɛ dvɑːrɑː Hɪṃdɪː kɛ sɑːthə-sɑːthə Dɛvənɑːgərɪː lɪpɪ kɛ lɪɛ ənɛkə səṃsthɑːɛm̐ khər̤ɪː kɪː thɪː.</p>

<hr>

Credit: Ken P for the text samples and pangram.
