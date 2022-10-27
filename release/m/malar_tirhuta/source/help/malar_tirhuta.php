<?php
  $pagename = 'Malar Tirhuta Keyboard Help';
  $pagetitle = 'Malar Tirhuta Keyboard Help';
  $pagestyle = <<<END
  
         @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Tirhuta&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');			
         .MalarH1 {font: bold 18pt 'Open Sans', sans-serif; color: #4444cc; margin-bottom: 2px; margin-left: 10px; margin-right: 10px; }
         .MalarMainCont { margin-left: 10px; margin-right: 10px; }
         .MalarP1 {line-height: 1.5; font-size: 12pt; font-family: 'Open Sans', sans-serif; text-align: justify;}
         .MalarH2 {text-align:left; font-size: 16pt; color: #4444cc; font-family:'Open Sans', sans-serif;}
         table.MalarTable1 {border-collapse:collapse;} 
         .MalarTable1 th {padding: 4px; background-color: #F6F9D4; color: brown; font-weight: normal; border: 1px solid black; font-size: 12pt; font-family: 'Open Sans', sans-serif;}
         .MalarTable1 td {padding: 4px; margin: 3px; border: 1px solid black; font-size: 12pt; background-color: white;}
         .MalarTable1 th:first-child + th {text-align:left; font-size: 12pt;}
         .MalarTable1 td:first-child {text-align:center; font-size: 12pt; font-family:'Open Sans', sans-serif;}
         .MalarTable1 td:first-child + td {text-align:left; font-size: 12pt; font-family:'Open Sans', sans-serif;}
         .MalarTable1 td:first-child + td + td {text-align:center; font-size: 15pt; font-family: 'Noto Sans Tirhuta', 'Open Sans', sans-serif; }
         .MalarTable1 td:first-child + td + td + td {text-align:center; font-size: 12pt; font-family: 'Open Sans', sans-serif;}
         table.MalarTable2 {font-size: 14px; border: 1px solid #CCC; border-collapse:collapse; } 
         .MalarTable2 th {text-align:left; padding: 4px; background-color: #F6F9D4; color: brown; font-weight: normal; border: 1px solid black; font-size: 12pt; font-family: 'Open Sans', sans-serif;}
         .MalarTable2 td {padding: 4px; margin: 3px; border: 1px solid black; font-size: 12pt; background-color: white;}
         .MalarTable2 td:first-child {text-align:left; font-size: 15pt; font-family: 'Noto Sans Tirhuta', 'Open Sans', sans-serif;}
         .MalarTable2 td:first-child + td {text-align:left; font-size: 12pt; font-family: 'Open Sans', sans-serif;}
         .MalarSpan1 {font-size: 15pt; font-family: 'Noto Sans Tirhuta', 'Open Sans', sans-serif;}
		 
END;
  require_once('header.php');
?>

      <div class="MalarMainCont">
         <p class="MalarP1"><b>Malar Tirhuta</b> Keyboard is a transliteration based Unicode input method for Tirhuta script. Refer the below table for the English letters to type to get Tirhuta characters.</p>
         <table class="MalarTable1">
            <tr>
               <th>Unicode Code Point</th>
               <th>Description</th>
               <th>Character</th>
               <th>Keyboard Input</th>
            </tr>
            <tr>
               <td>U+11480</td>
               <td>TIRHUTA ANJI</td>
               <td>𑒀</td>
               <td>~</td>
            </tr>
            <tr>
               <td>U+11481</td>
               <td>TIRHUTA LETTER A</td>
               <td>𑒁</td>
               <td>a</td>
            </tr>
            <tr>
               <td>U+11482</td>
               <td>TIRHUTA LETTER AA</td>
               <td>𑒂</td>
               <td>aa&nbsp;&nbsp;&nbsp;&nbsp;A</td>
            </tr>
            <tr>
               <td>U+11483</td>
               <td>TIRHUTA LETTER I</td>
               <td>𑒃</td>
               <td>i</td>
            </tr>
            <tr>
               <td>U+11484</td>
               <td>TIRHUTA LETTER II</td>
               <td>𑒄</td>
               <td>ii&nbsp;&nbsp;&nbsp;&nbsp;I&nbsp;&nbsp;&nbsp;&nbsp;ee</td>
            </tr>
            <tr>
               <td>U+11485</td>
               <td>TIRHUTA LETTER U</td>
               <td>𑒅</td>
               <td>u</td>
            </tr>
            <tr>
               <td>U+11486</td>
               <td>TIRHUTA LETTER UU</td>
               <td>𑒆</td>
               <td>uu&nbsp;&nbsp;&nbsp;&nbsp;U&nbsp;&nbsp;&nbsp;&nbsp;oo</td>
            </tr>
            <tr>
               <td>U+11487</td>
               <td>TIRHUTA LETTER VOCALIC R</td>
               <td>𑒇</td>
               <td>R</td>
            </tr>
            <tr>
               <td>U+11488</td>
               <td>TIRHUTA LETTER VOCALIC RR</td>
               <td>𑒈</td>
               <td>RR</td>
            </tr>
            <tr>
               <td>U+11489</td>
               <td>TIRHUTA LETTER VOCALIC L</td>
               <td>𑒉</td>
               <td>L</td>
            </tr>
            <tr>
               <td>U+1148A</td>
               <td>TIRHUTA LETTER VOCALIC LL</td>
               <td>𑒊</td>
               <td>LL</td>
            </tr>
            <tr>
               <td>U+1148B</td>
               <td>TIRHUTA LETTER E</td>
               <td>𑒋</td>
               <td>e</td>
            </tr>
            <tr>
               <td>U+1148C</td>
               <td>TIRHUTA LETTER AI</td>
               <td>𑒌</td>
               <td>ai&nbsp;&nbsp;&nbsp;&nbsp;ei</td>
            </tr>
            <tr>
               <td>U+1148D</td>
               <td>TIRHUTA LETTER O</td>
               <td>𑒍</td>
               <td>o</td>
            </tr>
            <tr>
               <td>U+1148E</td>
               <td>TIRHUTA LETTER AU</td>
               <td>𑒎</td>
               <td>au&nbsp;&nbsp;&nbsp;&nbsp;ou</td>
            </tr>
            <tr>
               <td>U+1148F</td>
               <td>TIRHUTA LETTER KA</td>
               <td>𑒏</td>
               <td>ka</td>
            </tr>
            <tr>
               <td>U+11490</td>
               <td>TIRHUTA LETTER KHA</td>
               <td>𑒐</td>
               <td>kha&nbsp;&nbsp;&nbsp;&nbsp;Ka</td>
            </tr>
            <tr>
               <td>U+11491</td>
               <td>TIRHUTA LETTER GA</td>
               <td>𑒑</td>
               <td>ga</td>
            </tr>
            <tr>
               <td>U+11492</td>
               <td>TIRHUTA LETTER GHA</td>
               <td>𑒒</td>
               <td>gha&nbsp;&nbsp;&nbsp;&nbsp;Ga</td>
            </tr>
            <tr>
               <td>U+11493</td>
               <td>TIRHUTA LETTER NGA</td>
               <td>𑒓</td>
               <td>nga</td>
            </tr>
            <tr>
               <td>U+11494</td>
               <td>TIRHUTA LETTER CA</td>
               <td>𑒔</td>
               <td>cha</td>
            </tr>
            <tr>
               <td>U+11495</td>
               <td>TIRHUTA LETTER CHA</td>
               <td>𑒕</td>
               <td>chha&nbsp;&nbsp;&nbsp;&nbsp;Cha</td>
            </tr>
            <tr>
               <td>U+11496</td>
               <td>TIRHUTA LETTER JA</td>
               <td>𑒖</td>
               <td>ja</td>
            </tr>
            <tr>
               <td>U+11497</td>
               <td>TIRHUTA LETTER JHA</td>
               <td>𑒗</td>
               <td>jha&nbsp;&nbsp;&nbsp;&nbsp;Ja</td>
            </tr>
            <tr>
               <td>U+11498</td>
               <td>TIRHUTA LETTER NYA</td>
               <td>𑒘</td>
               <td>nja</td>
            </tr>
            <tr>
               <td>U+11499</td>
               <td>TIRHUTA LETTER TTA</td>
               <td>𑒙</td>
               <td>ta</td>
            </tr>
            <tr>
               <td>U+1149A</td>
               <td>TIRHUTA LETTER TTHA</td>
               <td>𑒚</td>
               <td>Ta</td>
            </tr>
            <tr>
               <td>U+1149B</td>
               <td>TIRHUTA LETTER DDA</td>
               <td>𑒛</td>
               <td>Da</td>
            </tr>
            <tr>
               <td>U+1149C</td>
               <td>TIRHUTA LETTER DDHA</td>
               <td>𑒜</td>
               <td>Dha</td>
            </tr>
            <tr>
               <td>U+1149D</td>
               <td>TIRHUTA LETTER NNA</td>
               <td>𑒝</td>
               <td>Na</td>
            </tr>
            <tr>
               <td>U+1149E</td>
               <td>TIRHUTA LETTER TA</td>
               <td>𑒞</td>
               <td>tha</td>
            </tr>
            <tr>
               <td>U+1149F</td>
               <td>TIRHUTA LETTER THA</td>
               <td>𑒟</td>
               <td>Tha</td>
            </tr>
            <tr>
               <td>U+114A0</td>
               <td>TIRHUTA LETTER DA</td>
               <td>𑒠</td>
               <td>da</td>
            </tr>
            <tr>
               <td>U+114A1</td>
               <td>TIRHUTA LETTER DHA</td>
               <td>𑒡</td>
               <td>dha</td>
            </tr>
            <tr>
               <td>U+114A2</td>
               <td>TIRHUTA LETTER NA</td>
               <td>𑒢</td>
               <td>na</td>
            </tr>
            <tr>
               <td>U+114A3</td>
               <td>TIRHUTA LETTER PA</td>
               <td>𑒣</td>
               <td>pa</td>
            </tr>
            <tr>
               <td>U+114A4</td>
               <td>TIRHUTA LETTER PHA</td>
               <td>𑒤</td>
               <td>fa</td>
            </tr>
            <tr>
               <td>U+114A5</td>
               <td>TIRHUTA LETTER BA</td>
               <td>𑒥</td>
               <td>ba</td>
            </tr>
            <tr>
               <td>U+114A6</td>
               <td>TIRHUTA LETTER BHA</td>
               <td>𑒦</td>
               <td>bha</td>
            </tr>
            <tr>
               <td>U+114A7</td>
               <td>TIRHUTA LETTER MA</td>
               <td>𑒧</td>
               <td>ma</td>
            </tr>
            <tr>
               <td>U+114A8</td>
               <td>TIRHUTA LETTER YA</td>
               <td>𑒨</td>
               <td>ya</td>
            </tr>
            <tr>
               <td>U+114A9</td>
               <td>TIRHUTA LETTER RA</td>
               <td>𑒩</td>
               <td>ra</td>
            </tr>
            <tr>
               <td>U+114AA</td>
               <td>TIRHUTA LETTER LA</td>
               <td>𑒪</td>
               <td>la</td>
            </tr>
            <tr>
               <td>U+114AB</td>
               <td>TIRHUTA LETTER VA</td>
               <td>𑒫</td>
               <td>va&nbsp;&nbsp;&nbsp;&nbsp;wa</td>
            </tr>
            <tr>
               <td>U+114AC</td>
               <td>TIRHUTA LETTER SHA</td>
               <td>𑒬</td>
               <td>Sa</td>
            </tr>
            <tr>
               <td>U+114AD</td>
               <td>TIRHUTA LETTER SSA</td>
               <td>𑒭</td>
               <td>sha</td>
            </tr>
            <tr>
               <td>U+114AE</td>
               <td>TIRHUTA LETTER SA</td>
               <td>𑒮</td>
               <td>sa</td>
            </tr>
            <tr>
               <td>U+114AF</td>
               <td>TIRHUTA LETTER HA</td>
               <td>𑒯</td>
               <td>ha</td>
            </tr>
            <tr>
               <td>U+114B0</td>
               <td>TIRHUTA VOWEL SIGN AA</td>
               <td>𑒰</td>
               <td>aa\&nbsp;&nbsp;&nbsp;&nbsp;A\</td>
            </tr>
            <tr>
               <td>U+114B1</td>
               <td>TIRHUTA VOWEL SIGN I</td>
               <td>𑒱</td>
               <td>i\</td>
            </tr>
            <tr>
               <td>U+114B2</td>
               <td>TIRHUTA VOWEL SIGN II</td>
               <td>𑒲</td>
               <td>ii\&nbsp;&nbsp;&nbsp;&nbsp;I\&nbsp;&nbsp;&nbsp;&nbsp;ee\</td>
            </tr>
            <tr>
               <td>U+114B3</td>
               <td>TIRHUTA VOWEL SIGN U</td>
               <td>𑒳</td>
               <td>u\</td>
            </tr>
            <tr>
               <td>U+114B4</td>
               <td>TIRHUTA VOWEL SIGN UU</td>
               <td>𑒴</td>
               <td>uu\&nbsp;&nbsp;&nbsp;&nbsp;U\&nbsp;&nbsp;&nbsp;&nbsp;oo\</td>
            </tr>
            <tr>
               <td>U+114B5</td>
               <td>TIRHUTA VOWEL SIGN VOCALIC R</td>
               <td>𑒵</td>
               <td>R\</td>
            </tr>
            <tr>
               <td>U+114B6</td>
               <td>TIRHUTA VOWEL SIGN VOCALIC RR</td>
               <td>𑒶</td>
               <td>RR\</td>
            </tr>
            <tr>
               <td>U+114B7</td>
               <td>TIRHUTA VOWEL SIGN VOCALIC L</td>
               <td>𑒷</td>
               <td>L\</td>
            </tr>
            <tr>
               <td>U+114B8</td>
               <td>TIRHUTA VOWEL SIGN VOCALIC LL</td>
               <td>𑒸</td>
               <td>LL\</td>
            </tr>
            <tr>
               <td>U+114B9</td>
               <td>TIRHUTA VOWEL SIGN E</td>
               <td>𑒹</td>
               <td>e\</td>
            </tr>
            <tr>
               <td>U+114BA</td>
               <td>TIRHUTA VOWEL SIGN SHORT E</td>
               <td>𑒺</td>
               <td>e\\</td>
            </tr>
            <tr>
               <td>U+114BB</td>
               <td>TIRHUTA VOWEL SIGN AI</td>
               <td>𑒻</td>
               <td>ai\&nbsp;&nbsp;&nbsp;&nbsp;ei\</td>
            </tr>
            <tr>
               <td>U+114BC</td>
               <td>TIRHUTA VOWEL SIGN O</td>
               <td>𑒼</td>
               <td>o\</td>
            </tr>
            <tr>
               <td>U+114BD</td>
               <td>TIRHUTA VOWEL SIGN SHORT O</td>
               <td>𑒽</td>
               <td>o\\</td>
            </tr>
            <tr>
               <td>U+114BE</td>
               <td>TIRHUTA VOWEL SIGN AU</td>
               <td>𑒾</td>
               <td>au\&nbsp;&nbsp;&nbsp;&nbsp;ou\</td>
            </tr>
            <tr>
               <td>U+114BF</td>
               <td>TIRHUTA SIGN CANDRABINDU</td>
               <td>𑒿</td>
               <td>MM</td>
            </tr>
            <tr>
               <td>U+114C0</td>
               <td>TIRHUTA SIGN ANUSVARA</td>
               <td>𑓀</td>
               <td>M</td>
            </tr>
            <tr>
               <td>U+114C1</td>
               <td>TIRHUTA SIGN VISARGA</td>
               <td>𑓁</td>
               <td>H</td>
            </tr>
            <tr>
               <td>U+114C2</td>
               <td>TIRHUTA SIGN VIRAMA</td>
               <td>𑓂</td>
               <td>`</td>
            </tr>
            <tr>
               <td>U+114C3</td>
               <td>TIRHUTA SIGN NUKTA</td>
               <td>𑓃</td>
               <td><</td>
            </tr>
            <tr>
               <td>U+114C4</td>
               <td>TIRHUTA SIGN AVAGRAHA</td>
               <td>𑓄</td>
               <td>xa</td>
            </tr>
            <tr>
               <td>U+114C5</td>
               <td>TIRHUTA GVANG</td>
               <td>𑓅</td>
               <td>xM</td>
            </tr>
            <tr>
               <td>U+114C6</td>
               <td>TIRHUTA ABBREVIATION SIGN</td>
               <td>𑓆</td>
               <td>></td>
            </tr>
            <tr>
               <td>U+114C7</td>
               <td>TIRHUTA OM</td>
               <td>𑓇</td>
               <td>OM</td>
            </tr>
            <tr>
               <td>U+114D0</td>
               <td>TIRHUTA DIGIT ZERO</td>
               <td>𑓐</td>
               <td>0</td>
            </tr>
            <tr>
               <td>U+114D1</td>
               <td>TIRHUTA DIGIT ONE</td>
               <td>𑓑</td>
               <td>1</td>
            </tr>
            <tr>
               <td>U+114D2</td>
               <td>TIRHUTA DIGIT TWO</td>
               <td>𑓒</td>
               <td>2</td>
            </tr>
            <tr>
               <td>U+114D3</td>
               <td>TIRHUTA DIGIT THREE</td>
               <td>𑓓</td>
               <td>3</td>
            </tr>
            <tr>
               <td>U+114D4</td>
               <td>TIRHUTA DIGIT FOUR</td>
               <td>𑓔</td>
               <td>4</td>
            </tr>
            <tr>
               <td>U+114D5</td>
               <td>TIRHUTA DIGIT FIVE</td>
               <td>𑓕</td>
               <td>5</td>
            </tr>
            <tr>
               <td>U+114D6</td>
               <td>TIRHUTA DIGIT SIX</td>
               <td>𑓖</td>
               <td>6</td>
            </tr>
            <tr>
               <td>U+114D7</td>
               <td>TIRHUTA DIGIT SEVEN</td>
               <td>𑓗</td>
               <td>7</td>
            </tr>
            <tr>
               <td>U+114D8</td>
               <td>TIRHUTA DIGIT EIGHT</td>
               <td>𑓘</td>
               <td>8</td>
            </tr>
            <tr>
               <td>U+114D9</td>
               <td>TIRHUTA DIGIT NINE</td>
               <td>𑓙</td>
               <td>9</td>
            </tr>
            <tr>
               <td>U+200C</td>
               <td>ZERO WIDTH NON-JOINER</td>
               <td>‌</td>
               <td>|</td>
            </tr>
            <tr>
               <td>U+200D</td>
               <td>ZERO WIDTH JOINER</td>
               <td>‍</td>
               <td>^</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B0</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN AA</td>
               <td>𑒏 + 𑒰 = 𑒏𑒰</td>
               <td>kaa&nbsp;&nbsp;&nbsp;&nbsp;kA</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B1</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN I</td>
               <td>𑒏 + 𑒱 = 𑒏𑒱</td>
               <td>ki</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B2</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN II</td>
               <td>𑒏 + 𑒲 = 𑒏𑒲</td>
               <td>kii&nbsp;&nbsp;&nbsp;&nbsp;kI&nbsp;&nbsp;&nbsp;&nbsp;kee</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B3</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN U</td>
               <td>𑒏 + 𑒳 = 𑒏𑒳</td>
               <td>ku</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B4</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN UU</td>
               <td>𑒏 + 𑒴 = 𑒏𑒴</td>
               <td>kuu&nbsp;&nbsp;&nbsp;&nbsp;kU&nbsp;&nbsp;&nbsp;&nbsp;koo</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B5</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN VOCALIC R</td>
               <td>𑒏 + 𑒵 = 𑒏𑒵</td>
               <td>kR</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B6</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN VOCALIC RR</td>
               <td>𑒏 + 𑒶 = 𑒏𑒶</td>
               <td>kRR</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B7</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN VOCALIC L</td>
               <td>𑒏 + 𑒷 = 𑒏𑒷</td>
               <td>kL</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B8</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN VOCALIC LL</td>
               <td>𑒏 + 𑒸 = 𑒏𑒸</td>
               <td>kLL</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114B9</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN E</td>
               <td>𑒏 + 𑒹 = 𑒏𑒹</td>
               <td>ke</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114BA</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN SHORT E</td>
               <td>𑒏 + 𑒺 = 𑒏𑒺</td>
               <td>ke\</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114BB</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN AI</td>
               <td>𑒏 + 𑒻 = 𑒏𑒻</td>
               <td>kai&nbsp;&nbsp;&nbsp;&nbsp;kei</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114BC</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN O</td>
               <td>𑒏 + 𑒼 = 𑒏𑒼</td>
               <td>ko</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114BD</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN SHORT O</td>
               <td>𑒏 + 𑒽 = 𑒏𑒽</td>
               <td>ko\</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114BE</td>
               <td>TIRHUTA LETTER KA + TIRHUTA VOWEL SIGN AU</td>
               <td>𑒏 + 𑒾 = 𑒏𑒾</td>
               <td>kau&nbsp;&nbsp;&nbsp;&nbsp;kou</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114BF</td>
               <td>TIRHUTA LETTER KA + TIRHUTA SIGN CANDRABINDU</td>
               <td>𑒏 + 𑒿 = 𑒏𑒿</td>
               <td>kaMM</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114C0</td>
               <td>TIRHUTA LETTER KA + TIRHUTA SIGN ANUSVARA</td>
               <td>𑒏 + 𑓀 = 𑒏𑓀</td>
               <td>kaM</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114C1</td>
               <td>TIRHUTA LETTER KA + TIRHUTA SIGN VISARGA</td>
               <td>𑒏 + 𑓁 = 𑒏𑓁</td>
               <td>kaH</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114C2</td>
               <td>TIRHUTA LETTER KA + TIRHUTA SIGN VIRAMA</td>
               <td>𑒏 + 𑓂 = 𑒏𑓂</td>
               <td>k&nbsp;&nbsp;&nbsp;&nbsp;ka`</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114C3</td>
               <td>TIRHUTA LETTER KA + TIRHUTA SIGN NUKTA</td>
               <td>𑒏 + 𑓃 = 𑒏𑓃</td>
               <td>ka&lt;</td>
            </tr>
            <tr>
               <td>U+1CF2</td>
               <td>VEDIC SIGN ARDHAVISARGA</td>
               <td>ᳲ</td>
               <td>xH</td>
            </tr>
            <tr>
               <td>U+0951</td>
               <td>DEVANAGARI STRESS SIGN UDATTA</td>
               <td>॑</td>
               <td>_\</td>
            </tr>
            <tr>
               <td>U+0952</td>
               <td>DEVANAGARI STRESS SIGN ANUDATTA</td>
               <td>॒</td>
               <td>__\</td>
            </tr>
            <tr>
               <td>U+0964</td>
               <td>DEVANAGARI DANDA</td>
               <td>।</td>
               <td>[</td>
            </tr>
            <tr>
               <td>U+0965</td>
               <td>DEVANAGARI DOUBLE DANDA</td>
               <td>॥</td>
               <td>]</td>
            </tr>
            <tr>
               <td>U+09F4</td>
               <td>BENGALI CURRENCY NUMERATOR ONE</td>
               <td>৴</td>
               <td>1/\</td>
            </tr>
            <tr>
               <td>U+09F5</td>
               <td>BENGALI CURRENCY NUMERATOR TWO</td>
               <td>৵</td>
               <td>2/\</td>
            </tr>
            <tr>
               <td>U+09F6</td>
               <td>BENGALI CURRENCY NUMERATOR THREE</td>
               <td>৶</td>
               <td>3/\</td>
            </tr>
            <tr>
               <td>U+09F7</td>
               <td>BENGALI CURRENCY NUMERATOR FOUR</td>
               <td>৷</td>
               <td>4/\</td>
            </tr>
            <tr>
               <td>U+A830</td>
               <td>NORTH INDIC FRACTION ONE QUARTER</td>
               <td>꠰</td>
               <td>1/4\</td>
            </tr>
            <tr>
               <td>U+A831</td>
               <td>NORTH INDIC FRACTION ONE HALF</td>
               <td>꠱</td>
               <td>1/2\</td>
            </tr>
            <tr>
               <td>U+A832</td>
               <td>NORTH INDIC FRACTION THREE QUARTERS</td>
               <td>꠲</td>
               <td>3/4\</td>
            </tr>
            <tr>
               <td>U+A833</td>
               <td>NORTH INDIC FRACTION ONE SIXTEENTH</td>
               <td>꠳</td>
               <td>1/16\</td>
            </tr>
            <tr>
               <td>U+A834</td>
               <td>NORTH INDIC FRACTION ONE EIGHTH</td>
               <td>꠴</td>
               <td>1/8\</td>
            </tr>
            <tr>
               <td>U+A835</td>
               <td>NORTH INDIC FRACTION THREE SIXTEENTHS</td>
               <td>꠵</td>
               <td>3/16\</td>
            </tr>
            <tr>
               <td>U+A836</td>
               <td>NORTH INDIC QUARTER MARK</td>
               <td>꠶</td>
               <td>{\</td>
            </tr>
            <tr>
               <td>U+A837</td>
               <td>NORTH INDIC PLACEHOLDER MARK</td>
               <td>꠷</td>
               <td>}\</td>
            </tr>
            <tr>
               <td>U+A838</td>
               <td>NORTH INDIC RUPEE MARK</td>
               <td>꠸</td>
               <td>?\</td>
            </tr>
            <tr>
               <td>U+A839</td>
               <td>NORTH INDIC QUANTITY MARK</td>
               <td>꠹</td>
               <td>?\\</td>
            </tr>
            <tr>
               <td>U+11493  +  U+114C2  +  U+1148F</td>
               <td>TIRHUTA LETTER NGA + TIRHUTA SIGN VIRAMA + TIRHUTA LETTER KA</td>
               <td>𑒓𑓂𑒏</td>
               <td>ngka</td>
            </tr>
            <tr>
               <td>U+11498  +  U+114C2  +  U+11494</td>
               <td>TIRHUTA LETTER NYA + TIRHUTA SIGN VIRAMA + TIRHUTA LETTER CA</td>
               <td>𑒘𑓂𑒔</td>
               <td>njcha</td>
            </tr>
            <tr>
               <td>U+1148F  +  U+114C2  +  U+114AD</td>
               <td>TIRHUTA LETTER KA + TIRHUTA SIGN VIRAMA + TIRHUTA LETTER SSA</td>
               <td>𑒏𑓂𑒭</td>
               <td>ksha</td>
            </tr>
            <tr>
               <td>U+1149D  +  U+114C2  +  U+11499</td>
               <td>TIRHUTA LETTER NNA + TIRHUTA SIGN VIRAMA + TIRHUTA LETTER TTA</td>
               <td>𑒝𑓂𑒙</td>
               <td>Nta</td>
            </tr>
            <tr>
               <td>U+114A2  +  U+114C2  +  U+114A0</td>
               <td>TIRHUTA LETTER NA + TIRHUTA SIGN VIRAMA + TIRHUTA LETTER DA</td>
               <td>𑒢𑓂𑒠</td>
               <td>nda</td>
            </tr>
            <tr>
               <td>U+114A2  +  U+114C2  +  U+1149E</td>
               <td>TIRHUTA LETTER NA + TIRHUTA SIGN VIRAMA + TIRHUTA LETTER TA</td>
               <td>𑒢𑓂𑒞</td>
               <td>ntha</td>
            </tr>
            <tr>
               <td>U+1149E  +  U+114C2  +  U+1149E</td>
               <td>TIRHUTA LETTER TA + TIRHUTA SIGN VIRAMA + TIRHUTA LETTER TA</td>
               <td>𑒞𑓂𑒞</td>
               <td>ththa</td>
            </tr>
            <tr>
               <td>U+11496  +  U+114C2  +  U+11498</td>
               <td>TIRHUTA LETTER JA + TIRHUTA SIGN VIRAMA + TIRHUTA LETTER NYA</td>
               <td>𑒖𑓂𑒘</td>
               <td>jnja</td>
            </tr>
         </table>
         <br>
         <h2 class="MalarH2">Examples :</h2>
         <table class="MalarTable2">
            <tr>
               <th>Tirhuta</th>
               <th>Keyboard Input</th>
            </tr>
            <tr>
               <td>𑒞𑒱𑒩𑒯𑒳𑒞𑒰</td>
               <td>thirahuthaa</td>
            </tr>
            <tr>
               <td>𑒮𑒩𑒫𑒧</td>
               <td>saravama</td>
            </tr>
            <tr>
               <td>𑒂𑒡𑒰𑒩𑓁</td>
               <td>aadhaaraH</td>
            </tr>
            <tr>
               <td>𑒣𑒴𑒩𑓂𑒝𑒩𑒴𑒣𑒹𑒝</td>
               <td>puurNaruupeNa</td>
            </tr>
         </table>
         <br>
         <h2 class="MalarH2">
            Instructions for Use
         </h2>
         <ul class="MalarP1">
            <li>If necessary use <b>q</b> key between key strokes to break key combinations.<br>
               Example : kha = <span class="MalarSpan1">𑒐</span>, kqha = <span class="MalarSpan1">𑒏𑓂𑒯</span>
            </li>
            <li>For typing the Arabic digits, use the <b>x</b> key and use the number keys otherwise use numeric keypad.</li>
            <li>Use <b>x</b> key before typing <b>` ~ $ ^ [ ] \ &lt; &gt;</b> to get the same.</li>
         </ul>
         <br>
         <p class="MalarP1">Send your feedback about <b>Malar Tirhuta</b> Keyboard to <a href="mailto:ramesh1@protonmail.com?subject=Malar Tirhuta Keyboard - Feedback">ramesh1@protonmail.com</a>
         </p>
      </div>