<?php
  $pagename = "Tchad keyboard";
  $pagetitle = "tchad qwerty keyboard";
  require_once('header.php');
?>
<link rel="stylesheet" href="Td.css">
<style type="text/css">
.keyboard {
  font-size: 20px;
  white-space: nowrap;
}
.keyboard--row {
  display: block;
  height: 3em;
  margin: 0.5em;
}

.keyboard--row > * {
  display: inline-block;
  box-sizing: border-box;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;
  border-radius: 0.3em;
  margin: 0.06em;
  padding: 0 0.2em;
  width: 3.3em;
  height: 100%;
}

.key--bottom-left > * {
  position: absolute;
  text-align: left;
  bottom: 0.4em;
  left: 0.4em;
}

.key--bottom-right > * {
  position: absolute;
  text-align: right;
  bottom: 0.4em;
  right: 0.4em;
  white-space:pre;
}

.key--word > * {
  font-size: 0.8em;
}

.key--letter > div {
  font-size: 1.2em;
  height: 1.2em;
  float: right;
  clear: right;
}

.key--letter > div:first-child {
  margin-top: -0.2em;
}

.key--letter > span {
  font-size: 1.2em;
  height: 1.2em;
  display: block;
  position: absolute;
  margin-top: -0.2em;
  margin-left: 0.1em;
}
.key--letter > span:last-child {
  margin-top: 1em;
}

/* Light keyboard */

.keyboard.keyboard--light .keyboard--row > * {
  background: #ccc;
  color: #111;
  border: 1px solid #888;
  box-shadow: 0 0.2em 0 0.05em #666;
  border-bottom-color: #ddd;
}

.keyboard.keyboard--light .keyboard--row > .key--letter {
  background: #f0f0f0;
  box-shadow: 0 0.2em 0 0.05em #666;
  border-bottom-color: #ddd;
}

.keyboard.keyboard--light .key--letter > span {
  color: black
}

.keyboard.keyboard--light .key--letter span.french {
  color: blue
}

.keyboard.keyboard--light .key--letter span.spec {
  color: gray
}

.keyboard.keyboard--light .key--letter span.specTd {
  color: #9400D3
}
</style>
</head>

<body data-device="Windows" data-section="keyboard">
<div class="tab-folder">
<!--Starting English-->
<div id="en" class="tab-content">
<a class="buttonlang" href="#fr">Cliquer ici pour voir cette page en français...</a>
<div id="container">
<img src="sil_tchad_logo.png" class="left responsive">
<img src="sil-logo-blue.png" class="right responsive">
<span id="toc-Chad-qwerty-keyboard-for-keyman-by-sil-Chad-"></span>
<h1 xml:lang="en">Chad QWERTY Keyboard for Keyman
<br>by SIL Chad</h1>

<p class="tagline" xml:lang="en">Welcome to the Chad QWERTY Keyboard!<br>
This keyboard, maintained by the Language Technology team of <a href="https://sites.google.com/sil.org/sil-tchad-langtech/home">SIL Chad</a>,
allows you to type all of the special characters of the languages of Chad.</p>
<hr/>

<h3>Using the keyboard</h3>
<p xml:lang="en">To learn how to type a character with this keyboard, refer to the graphical keyboard layout below. The characters to the right on each key cap are typed with the help of a special “Chad” key.
This key is found just to the left of the right-Shift key, and will likely appear like this on your keyboard: <img src="touche TD.png" width="30" height="30" title="slash"> (for typing slash and question mark).
On the keyboard layout below, this key appears with a Chadian flag, to remind you that the “special” characters of Chad are typed with this key.</p>
<p>To type a character, find the character you want to type on the graphical keyboard layout below, 
and note the position of the <b>key on the keyboard </b>and the position of the <b>character on the key cap (one of four positions)</b>.
Depending on the position of that character on the key cap, you might need to tap the “Chad” key and/or hold down the Shift key as shown here:</p>

<table  style="border: 0pt">
  <tr>
    <td style="text-align: right; padding-top:05px; border: 0;">
      <p style="margin: 4pt;">Hold down Shift and tap the B&nbsp;key&nbsp;→</p>
      <p style="margin: 4pt;">Simply tap the B&nbsp;key&nbsp;→</p>
    </td>
    <td style="border: 0;">
        <div class="keyboard keyboard--light">
          <div class="keyboard--row">
            <div class="key--letter"><div><span class="specTd">Ɓ</span></div><div><span class="specTd">ɓ</span></div><span>B</span><span>b</span></div>
          </div>
        </div>
    </td>
    <td style="text-align: left; padding-top:5px; border: 0;">
      <p style="margin: 4pt;">←&nbsp;tap the Chad key, then hold down Shift and tap the B key</p>
      <p style="margin: 4pt">←&nbsp;tap the Chad key, then tap the B key</p>
    </td>
  </tr>
</table>

<p>Note that you can type a slash character by tapping the <b>“Chad”</b> key twice, since  the <b>“/” </b>character appears in the lower-right corner of that key cap.</p>

<!--Physical Keyboard-->
<span id="toc-physical-keyboard-windows"></span>
<h3>Chad QWERTY Keyboard layout</h3>

<div class="keyboard keyboard--light">
  <div class="keyboard--row">
    <div class="key--letter"><div><span>~</span></div><div><span>`</span></div><span>&#x25CC;&#x0303;</span><span>&#x25CC;&#x0327;</span></div>
    <div class="key--letter"><div></div><div></div><span>!</span><span>1</span></div>
    <div class="key--letter"><div><span>@</span></div><div></div><span>&#x25CC;&#x0325;</span><span>2</span></div>
    <div class="key--letter"><div><span>#</span></div><div></div><span>&#x25CC;&#x0308;</span><span>3</span></div>
    <div class="key--letter"><div><span>$</span></div><div></div><span>&#x25CC;&#x0329;</span><span>4</span></div>
    <div class="key--letter"><div><span>%</span></div><div></div><span>&#x25CC;&#x0323;</span><span>5</span></div>
    <div class="key--letter"><div><span>^</span></div><div></div><span>&#x25CC;&#x0302;</span><span>6</span></div>
    <div class="key--letter"><div><span></span></div><div></div><span>&amp;</span><span>7</span></div>
    <div class="key--letter"><div><span>°</span></div><div>º</div><span>*</span><span>8</span></div>
    <div class="key--letter"><div><span>‘</span></div><div></div><span>(</span><span>9</span></div>
    <div class="key--letter"><div><span>’</span></div><div></div><span>)</span><span>0</span></div>
    <div class="key--letter"><div><span>_</span></div><div></div><span>&#x25CC;&#x0330;</span><span>-</span></div>
    <div class="key--letter"><div><span>&#x00a0;</span></div><div><span>=</span></div><span>+</span><span>&#x25CC;&#x0304;</span></div>
    <div class="key--bottom-right key--word" style="width: 7.4em;"><span>Backspace</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word" style="width: 5.5em;"><span>Tab</span></div>
    <div class="key--letter"><div><span class="spec">ɖ</span></div><div><span class="spec">ʁ</span></div><span>Q</span><span>q</span></div>
    <div class="key--letter"><div><span class="spec">&#x00a0;</span></div><div><span class="spec">ø</span></div><span>W</span><span>w</span></div>
    <div class="key--letter"><div><span class="specTd">Ə</span></div><div><span class="specTd">ə</span></div><span>E</span><span>e</span></div>
    <div class="key--letter"><div><span class="specTd">ɽ</span></div><div><span class="specTd">ɾ</span></div><span>R</span><span>r</span></div>
    <div class="key--letter"><div><span class="spec">θ</span></div><div><span class="spec">ʈ</span></div><span>T</span><span>t</span></div>
    <div class="key--letter"><div><span class="specTd">Ƴ</span></div><div><span class="specTd">ƴ</span></div><span>Y</span><span>y</span></div>
    <div class="key--letter"><div><span class="spec">Ʊ</span></div><div><span class="spec">ʊ</span></div><span>U</span><span>u</span></div>
    <div class="key--letter"><div><span class="specTd">Ɨ</span></div><div><span class="specTd">ɨ</span></div><span>I</span><span>i</span></div>
    <div class="key--letter"><div><span class="specTd">Ɔ</span></div><div><span class="specTd">ɔ</span></div><span>O</span><span>o</span></div>
    <div class="key--letter"><div><span class="french">Œ</span></div><div><span class="french">œ</span></div><span>P</span><span>p</span></div>
    <div class="key--letter"><div><span>“</span></div><div><span><span>[</span></span></div><span>{</span><span>&#x25CC;&#x0301;</span></div>
    <div class="key--letter"><div><span>”</span></div><div><span><span>]</span></span></div><span>}</span><span>&#x25CC;&#x0300;</span></div>
    <div class="key--letter" style="width: 5.2em"><div><span>|</span></div><div></div><span>&#x25CC;&#x030C;</span><span>\</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word" style="width: 7.2em"><span>Caps Lock</span></div>
    <div class="key--letter"><div><span class="french">Æ</span></div><div><span class="french">æ</span></div><span>A</span><span>a</span></div>
    <div class="key--letter"><div><span class="spec">ß</span></div><div><span class="spec">ʃ</span></div><span>S</span><span>s</span></div>
    <div class="key--letter"><div><span class="specTd">Ɗ</span></div><div><span class="specTd">ɗ</span></div><span>D</span><span>d</span></div>
    <div class="key--letter"><div><span class="specTd">Ɛ</span></div><div><span class="specTd">ɛ</span></div><span>F</span><span>f</span></div>
    <div class="key--letter"><div><span class="specTd">Ǝ</span></div><div><span class="spec">ɣ</span></div><span>G</span><span>g</span></div>
    <div class="key--letter"><div><span class="specTd">Ɦ</span></div><div><span class="specTd">ɦ</span></div><span>H</span><span>h</span></div>
    <div class="key--letter"><div><span class="spec">ɟ</span></div><div><span class="spec">ʄ</span></div><span>J</span><span>j</span></div>
    <div class="key--letter"><div><span class="specTd">Ɨ</span></div><div><span class="specTd">ɪ</span></div><span>K</span><span>k</span></div>
    <div class="key--letter"><div><span class="spec">ɮ</span></div><div><span class="spec">ɬ</span></div><span>L</span><span>l</span></div>
    <div class="key--letter"><div>ː</div><div>&#x0027;</div><span>:</span><span>;</span></div>
    <div class="key--letter"><div>&#xA78B;</div><div>&#xA78C;</div><span>"</span><span>&#x02BC;</span></div>
    <div class="key--bottom-right key--word" style="width: 7.2em"><span>Enter</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word" style="width: 9em"><span>Shift</span></div>
    <div class="key--letter"><div><span class="spec">ð</span></div><div><span class="spec">ʒ</span></div><span>Z</span><span>z</span></div>
    <div class="key--letter"><div><span class="spec">ħ</span></div><div><span class="spec">χ</span></div><span>X</span><span>x</span></div>
    <div class="key--letter"><div><span class="french">Ç</span></div><div><span class="french">ç</span></div><span>C</span><span>c</span></div>
    <div class="key--letter"><div><span class="spec">ʋ</span></div><div><span class="spec">ⱱ</span></div><span>V</span><span>v</span></div>
    <div class="key--letter"><div><span class="specTd">Ɓ</span></div><div><span class="specTd">ɓ</span></div><span>B</span><span>b</span></div>
    <div class="key--letter"><div><span class="specTd">Ŋ</span></div><div><span class="specTd">ŋ</span></div><span>N</span><span>n</span></div>
    <div class="key--letter"><div><span class="spec">Ɲ</span></div><div><span class="spec">ɲ</span></div><span>M</span><span>m</span></div>
    <div class="key--letter"><div><span>‹</span></div><div><span></span></div><span>&lt;</span><span>,</span></div>
    <div class="key--letter"><div><span>›</span></div><div><span></span></div><span>&gt;</span><span>.</span></div>
    <div class="key--letter"><div><span>&#x0294;</span></div><div><span>/</span></div><span>?</span><span><img src="drapeau.tchad.png" width="30" height="20" title="Chad" /></span></div>
    <div class="key--bottom-right key--word" style="width: 9em"><span>Shift</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word" style="width: 3.5em;"><span>Ctrl</span></div>
    <div class="key--bottom-left key--word" style="width: 3.5em;"><span>Fn</span></div>
    <div class="key--bottom-left key--word" style="width: 3.5em;"><img src="windows.logo.png" width="50" height="40" title="Windows"></div>
    <div class="key--bottom-left key--word" style="width: 3.5em;"><span>Alt </span></div>
    <div class="key--letter" style="width: 20.3em;"><div></div><div></div><span></span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>Alt</span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>Ctrl</span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>Home</span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>PgUp&#10;&#13;PgDn</span><span></span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>End</span></div>	
  </div>
</div>

<p>Note that the special characters that appear in <span style="color: #9400D3">purple</span> can be used in Chadian languages, but that those in <span style="color: blue">blue</span> are just used in French, 
and those in <span style="color: gray">gray</span> are intended to be used phonetically, not orthographically in Chadian languages.</p>

<h3>Typing accents / combining diacritics</h3>
<p>Note that some of the characters appear with dotted circles: <b>◌</b>. 
These indicate accents (diacritics) which are combined with the previous character typed. 
So if you type <b>“a”</b> and then type the character <b>“◌́”</b>, then the resulting character on the screen will be <b>“á”</b>.
 Type <b>“n”</b> plus <b>“◌̃”</b> to get <b>“ñ”</b>. As much as possible, the keyboard will produce the combined form of the character–
 both of the previous examples are one single character at the end, even though they are each typed with two separate keypresses.
 However not all accents can combine with all base characters. So if you type <b>“n̰”</b> or <b>“ɛ̂”</b>, 
 each resulting text contains two characters –  the base character and the combining accent.</p>

<h3>Additional Characters</h3>
<p>There are some additional characters that can be typed with this keyboard that are not displayed on the graphical keyboard layout above.
In most cases they are modified forms of other characters that are on the layout.</p>
<table border="1" cellspacing="1" cellpadding="5">
  <thead>
    <th>type:</th>
    <th>to get:</th>
    <th>type:</th>
    <th>to get:</th>
    <th>type:</th>
    <th>to get:</th>
  </thead>
  <tbody>
    <tr>
      <td>//</td>
      <td>/</td>
      <td>/$$</td>
      <td>€</td>
      <td>/@@</td>
      <td>©</td>
    </tr>
    <tr>
      <td>--</td>
      <td>–</td>
      <td>/$$$</td>
      <td>£</td>
      <td>/@@@</td>
      <td>℗</td>
    </tr>
    <tr>
      <td>---</td>
      <td>—</td>
      <td>/##</td>
      <td>̚</td>
      <td>/@@@@</td>
      <td>®</td>
    </tr>
    <tr>
      <td>/??</td>
      <td>ʕ</td>
      <td>/::</td>
      <td>ˑ</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<p>In addition, the “Chad” key plus space ( /⎵ ) gives a no-break space, and typing space bar again ( /⎵ ⎵ ) gives a narrow no-break space.
The “Chad” key plus hyphen ( /- ) gives a no-break hyphen.</p>

<h3>Quotation Marks and Glottal Stop Characters</h3>
<p>When you type an apostrophe <b>( ' )</b>, this keyboard produces a right single quotation mark <b>( ’ ), i.e. </b>the character used for contractions in English and French. 
If you immediately type another apostrophe, you will get a “modifier letter apostrophe” <b>( ʼ )</b>. 
While this looks identical to the single quotation mark, it is considered a letter and not punctuation, 
and can be used as a glottal stop character in the middle of words without causing any unwanted word-breaking issues. 
And if you type the “Chad” key plus apostrophe <b>( /' )</b>, you get something that looks like a heavy apostrophe<b> ( ꞌ ) </b>– a character called the “saltillo”. 
The “Chad” key plus Shift-apostrophe <b>( /" )</b> produces the capital saltillo which is just heavier still <b>( Ꞌ )</b>.
Both of these saltillo characters and the modifier letter apostrophe (typed with two consecutive apostrophes) are word-forming characters, 
and not punctuation. In Unicode, there is a difference. You should use one of these options for the glottal stop character, so that it will be considered part of the word.
For quotation marks as punctuation, use the following guide:</p>

<table border="1" cellspacing="1" cellpadding="5">
  <thead>
    <th>type:</th>
    <th>to get:</th>
    <th>type:</th>
    <th>to get:</th>
    <th>type:</th>
    <th>to get:</th>
  </thead>
  <tbody>
    <tr>
      <td>&lt;&lt;</td>
      <td>«</td>
      <td>/{</td>
      <td>“</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>&gt;&gt;</td>
      <td>»</td>
      <td>/{</td>
      <td>”</td>
      <td>"</td>
      <td>"</td>
    </tr>
    <tr>
      <td>/&lt;</td>
      <td>‹</td>
      <td>/(</td>
      <td>‘</td>
      <td>/;</td>
      <td>'</td>
    </tr>
    <tr>
      <td>/></td>
      <td>›</td>
      <td>/)</td>
      <td>’</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>'</td>
      <td>’</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<p>You may use the “smart quotes” auto-correct feature in your editor. If you do, 
all of the straight apostrophes and double-quotes (in the right column of the table above) 
will be changed to curled quotes depending on the context. If you need to use straight apostrophes or straight double-quotes in your text,
 you must turn off the “smart quotes” feature. In this case, you can still type curled quotes, as shown in the middle column of the table above.
 The left column shows how to type French guillemets. If the language of your document is French, 
 you may get these automatically by typing straight double-quotes if the “smart quotes” feature is on.
 Remember that typing a double apostrophe <b>( ' ' ) </b>or a “Chad” key plus apostrophe <b>( /' ) </b>does not give you punctuation, 
 but a word-forming character to be used as a glottal in Chadian languages.</p>

<h3>Fonts</h3>
<p>Make sure you have a Unicode font selected (e.g. Charis SIL, Doulos SIL, Andika, Gentium, Times New Roman, etc.) to type special characters.</p>

<h3>Contact</h3>
<p>For more information and guidance on the QWERTY Keyboard of Chad, you can reach us here : 
<a href=https://sites.google.com/sil.org/sil-tchad-langtech/home>Language Technology Chad</a></p>

<p>©&nbsp;2017-2024 SIL International.</p>
</div>
</div>
<!--Ending English-->

<!--Starting French-->
<div id="fr" class="tab-content">
<a class="buttonlang" href="#en">Click here to view this page in English...</a>
<div id="container">
<img src="sil_tchad_logo.png" class="left responsive">
<img src="sil-logo-blue.png" class="right responsive">
<span id="toc-clavier-Tchad-qwerty-pour-keyman-par-sil-Tchad-"></span>
<h1 class="color" xml:lang="fr">Clavier Tchad QWERTY pour Keyman
<br>par SIL Tchad
</h1>
         
<p class="tagline" xml:lang="fr">Bienvenue au Clavier Tchad QWERTY !<br>
Ce clavier, maintenu par l’équipe de Technologie Linguistique de <a href="https://sites.google.com/sil.org/sil-tchad-langtech/home">SIL Tchad</a>,
vous permet de taper tous les caractères spéciaux des langues du Tchad. </p>
<hr/>

<h3>Utilisation du clavier</h3>
<p xml:lang="fr">Pour apprendre comment taper un caractère avec ce clavier, référez-vous à la disposition graphique du clavier ci-dessous. 
Les caractères à droite de chaque touche sont tapés a l’aide d’une touche spéciale « Tchad ». 
Cette touche se trouve juste à gauche de la touche Majuscule-droite et apparaîtra probablement ainsi sur votre clavier :  <img src="touche TD.png" width="30" height="30" title="slash">
(pour taper le slash et le point d’interrogation). Sur la disposition du clavier ci-dessous, 
cette touche apparaît avec un drapeau tchadien, pour vous rappeler que les caractères « spéciaux » du Tchad sont tapés avec cette touche.</p>
<p>Pour taper un caractère, repérez le caractère que vous souhaitez taper sur la disposition graphique du clavier ci-dessous, 
et notez la position de la <b>touche sur le clavier</b> et la position du <b>caractère sur la touche (une des quatre positions)</b>.
Selon la position de ce caractère sur la touche, 
vous devrez peut-être taper sur la touche « Tchad » et/ou maintenir la touche Majuscule enfoncée comme indiqué ici :</p>

<table  style="border: 0;">
  <tr>
    <td style="text-align: right; padding-top:5px; border: 0;">
      <p style="margin: 4pt;">Maintenez la touche Majuscule enfoncée et tapez sur la touche&nbsp;B&nbsp;→</p>
      <p style="margin: 4pt;">Tapez simplement sur la touche&nbsp;B&nbsp;→</p>
    </td>
    <td style="border: 0;">
        <div class="keyboard keyboard--light">
          <div class="keyboard--row">
            <div class="key--letter"><div><span class="specTd">Ɓ</span></div><div><span class="specTd">ɓ</span></div><span>B</span><span>b</span></div>
          </div>
        </div>
    </td>
    <td style="text-align: left; padding-top:5px; border: 0;">
      <p style="margin: 4pt;">← Tapez sur la touche « Tchad », puis maintenez la touche Majuscule enfoncée et tapez sur la touche B</p>
      <p style="margin: 4pt;">← Tapez sur la touche « Tchad », puis tapez sur la touche B</p>
    </td>
  </tr>
</table>

<p>Notez que vous pouvez taper un caractère slash en tapant deux fois sur la touche <b>« Tchad »</b>, puisque le caractère <b>« / »</b> apparaît dans le coin inférieur droit de cette touche.</p>

<!--Physical Keyboard-->
<span id="toc-physical-keyboard-windows"></span>
<h3>Disposition du clavier QWERTY Tchad</h3>

<div class="keyboard keyboard--light">
  <div class="keyboard--row">
    <div class="key--letter"><div><span>~</span></div><div><span>`</span></div><span>&#x25CC;&#x0303;</span><span>&#x25CC;&#x0327;</span></div>
    <div class="key--letter"><div></div><div></div><span>!</span><span>1</span></div>
    <div class="key--letter"><div><span>@</span></div><div></div><span>&#x25CC;&#x0325;</span><span>2</span></div>
    <div class="key--letter"><div><span>#</span></div><div></div><span>&#x25CC;&#x0308;</span><span>3</span></div>
    <div class="key--letter"><div><span>$</span></div><div></div><span>&#x25CC;&#x0329;</span><span>4</span></div>
    <div class="key--letter"><div><span>%</span></div><div></div><span>&#x25CC;&#x0323;</span><span>5</span></div>
    <div class="key--letter"><div><span>^</span></div><div></div><span>&#x25CC;&#x0302;</span><span>6</span></div>
    <div class="key--letter"><div><span></span></div><div></div><span>&amp;</span><span>7</span></div>
    <div class="key--letter"><div><span>°</span></div><div>º</div><span>*</span><span>8</span></div>
    <div class="key--letter"><div><span>‘</span></div><div></div><span>(</span><span>9</span></div>
    <div class="key--letter"><div><span>’</span></div><div></div><span>)</span><span>0</span></div>
    <div class="key--letter"><div><span>_</span></div><div></div><span>&#x25CC;&#x0330;</span><span>-</span></div>
    <div class="key--letter"><div><span>&#x00a0;</span></div><div><span>=</span></div><span>+</span><span>&#x25CC;&#x0304;</span></div>
    <div class="key--bottom-right key--word" style="width: 7.4em;"><span>Backspace</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word" style="width: 5.5em;"><span>Tab</span></div>
    <div class="key--letter"><div><span class="spec">ɖ</span></div><div><span class="spec">ʁ</span></div><span>Q</span><span>q</span></div>
    <div class="key--letter"><div><span class="spec">&#x00a0;</span></div><div><span class="spec">ø</span></div><span>W</span><span>w</span></div>
    <div class="key--letter"><div><span class="specTd">Ə</span></div><div><span class="specTd">ə</span></div><span>E</span><span>e</span></div>
    <div class="key--letter"><div><span class="specTd">ɽ</span></div><div><span class="specTd">ɾ</span></div><span>R</span><span>r</span></div>
    <div class="key--letter"><div><span class="spec">θ</span></div><div><span class="spec">ʈ</span></div><span>T</span><span>t</span></div>
    <div class="key--letter"><div><span class="specTd">Ƴ</span></div><div><span class="specTd">ƴ</span></div><span>Y</span><span>y</span></div>
    <div class="key--letter"><div><span class="spec">Ʊ</span></div><div><span class="spec">ʊ</span></div><span>U</span><span>u</span></div>
    <div class="key--letter"><div><span class="specTd">Ɨ</span></div><div><span class="specTd">ɨ</span></div><span>I</span><span>i</span></div>
    <div class="key--letter"><div><span class="specTd">Ɔ</span></div><div><span class="specTd">ɔ</span></div><span>O</span><span>o</span></div>
    <div class="key--letter"><div><span class="french">Œ</span></div><div><span class="french">œ</span></div><span>P</span><span>p</span></div>
    <div class="key--letter"><div><span>“</span></div><div><span><span>[</span></span></div><span>{</span><span>&#x25CC;&#x0301;</span></div>
    <div class="key--letter"><div><span>”</span></div><div><span><span>]</span></span></div><span>}</span><span>&#x25CC;&#x0300;</span></div>
    <div class="key--letter" style="width: 5.2em"><div><span>|</span></div><div></div><span>&#x25CC;&#x030C;</span><span>\</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word" style="width: 7.2em"><span>Caps Lock</span></div>
    <div class="key--letter"><div><span class="french">Æ</span></div><div><span class="french">æ</span></div><span>A</span><span>a</span></div>
    <div class="key--letter"><div><span class="spec">ß</span></div><div><span class="spec">ʃ</span></div><span>S</span><span>s</span></div>
    <div class="key--letter"><div><span class="specTd">Ɗ</span></div><div><span class="specTd">ɗ</span></div><span>D</span><span>d</span></div>
    <div class="key--letter"><div><span class="specTd">Ɛ</span></div><div><span class="specTd">ɛ</span></div><span>F</span><span>f</span></div>
    <div class="key--letter"><div><span class="specTd">Ǝ</span></div><div><span class="spec">ɣ</span></div><span>G</span><span>g</span></div>
    <div class="key--letter"><div><span class="specTd">Ɦ</span></div><div><span class="specTd">ɦ</span></div><span>H</span><span>h</span></div>
    <div class="key--letter"><div><span class="spec">ɟ</span></div><div><span class="spec">ʄ</span></div><span>J</span><span>j</span></div>
    <div class="key--letter"><div><span class="specTd">Ɨ</span></div><div><span class="specTd">ɪ</span></div><span>K</span><span>k</span></div>
    <div class="key--letter"><div><span class="spec">ɮ</span></div><div><span class="spec">ɬ</span></div><span>L</span><span>l</span></div>
    <div class="key--letter"><div>ː</div><div>&#x0027;</div><span>:</span><span>;</span></div>
    <div class="key--letter"><div>&#xA78B;</div><div>&#xA78C;</div><span>"</span><span>&#x02BC;</span></div>
    <div class="key--bottom-right key--word" style="width: 7.2em"><span>Enter</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word" style="width: 9em"><span>Shift</span></div>
    <div class="key--letter"><div><span class="spec">ð</span></div><div><span class="spec">ʒ</span></div><span>Z</span><span>z</span></div>
    <div class="key--letter"><div><span class="spec">ħ</span></div><div><span class="spec">χ</span></div><span>X</span><span>x</span></div>
    <div class="key--letter"><div><span class="french">Ç</span></div><div><span class="french">ç</span></div><span>C</span><span>c</span></div>
    <div class="key--letter"><div><span class="spec">ʋ</span></div><div><span class="spec">ⱱ</span></div><span>V</span><span>v</span></div>
    <div class="key--letter"><div><span class="specTd">Ɓ</span></div><div><span class="specTd">ɓ</span></div><span>B</span><span>b</span></div>
    <div class="key--letter"><div><span class="specTd">Ŋ</span></div><div><span class="specTd">ŋ</span></div><span>N</span><span>n</span></div>
    <div class="key--letter"><div><span class="spec">Ɲ</span></div><div><span class="spec">ɲ</span></div><span>M</span><span>m</span></div>
    <div class="key--letter"><div><span>‹</span></div><div><span></span></div><span>&lt;</span><span>,</span></div>
    <div class="key--letter"><div><span>›</span></div><div><span></span></div><span>&gt;</span><span>.</span></div>
    <div class="key--letter"><div><span>&#x0294;</span></div><div><span>/</span></div><span>?</span><span><img src="drapeau.tchad.png" width="30" height="20" title="Chad" /></span></div>
    <div class="key--bottom-right key--word" style="width: 9em"><span>Shift</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word" style="width: 3.5em;"><span>Ctrl</span></div>
    <div class="key--bottom-left key--word" style="width: 3.5em;"><span>Fn</span></div>
    <div class="key--bottom-left key--word" style="width: 3.5em;"><img src="windows.logo.png" width="50" height="40" title="Windows"></div>
    <div class="key--bottom-left key--word" style="width: 3.5em;"><span>Alt </span></div>
    <div class="key--letter" style="width: 20.3em;"><div></div><div></div><span></span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>Alt</span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>Ctrl</span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>Home</span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>PgUp&#10;&#13;PgDn</span><span></span></div>
    <div class="key--bottom-right key--word" style="width: 3.5em;"><span>End</span></div>	
  </div>
</div>

<p>Notez aussi que les caractères spéciaux qui apparaissent en <span style="color: #9400D3">violet</span> peuvent être utilisés dans les langues tchadiennes, 
mais que ceux en <span style="color: blue">bleu</span> sont seulement utilisés en français, et ceux en <span style="color: gray">gris</span> sont destinés à être utilisés phonétiquement, 
pas orthographiquement dans les langues tchadiennes.</p>

<h3>Taper des accents / diacritiques de combinaison</h3>
<p>Notez que certains des caractères apparaissent avec des cercles en pointillés : <b>◌</b>.
Ceux-ci indiquent des accents (diacritiques) qui sont combinés avec le caractère précédent tapé. Ainsi, si vous tapez <b>« a »</b> puis tapez le caractère <b>« ◌́ »</b>,
 le caractère résultant à l’écran sera <b>« á »</b>. Tapez <b>« n »</b> plus <b>« ◌̃ »</b> pour obtenir <b>« ñ »</b>. Autant que possible, 
 le clavier produira la forme combinée du caractère&nbsp;–&nbsp;les deux exemples précédents sont un seul caractère à la fin, 
 même s’ils sont chacun tapés avec deux frappes de touche séparées. Cependant, tous les accents ne peuvent pas se combiner avec tous les caractères de base. 
 Donc si vous tapez <b>« n̰ »</b> ou <b>« ɛ̂ »</b>, chaque texte résultant contient deux caractères &nbsp;–&nbsp; le caractère de base et l’accent combinant.</p>

<h3>Caractères supplémentaires</h3>
<p>Il y a quelques caractères supplémentaires qui peuvent être tapés avec ce clavier et qui ne sont pas affichés sur la disposition graphique du clavier ci-dessus. 
Dans la plupart des cas, ce sont des formes modifiées d’autres caractères qui se trouvent sur la disposition.</p>

<table border="1" cellspacing="1" cellpadding="5">
  <thead>
      <th>taper:</th>
      <th>pour avoir:</th>
      <th>taper:</th>
      <th>pour avoir:</th>
      <th>taper:</th>
      <th>pour avoir:</th>
  </thead>
  <tbody>
    <tr>
      <td>//</td>
      <td>/</td>
      <td>/$$</td>
      <td>€</td>
      <td>/@@</td>
      <td>©</td>
    </tr>
    <tr>
      <td>--</td>
      <td>–</td>
      <td>/$$$</td>
      <td>£</td>
      <td>/@@@</td>
      <td>℗</td>
    </tr>
    <tr>
      <td>---</td>
      <td>—</td>
      <td>/##</td>
      <td>̚</td>
      <td>/@@@@</td>
      <td>®</td>
    </tr>
    <tr>
      <td>/??</td>
      <td>ʕ</td>
      <td>/::</td>
      <td>ˑ</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<p>De plus, la touche « Tchad » suivie de la barre d’espace ( /⎵ ) vous donne un espace insécable, 
et si vous ajoutez un autre espace ( /⎵ ⎵ ), vous obtenez un espace insécable étroit.
La touche « Tchad » plus le trait d’union ( /- ) donne un trait d’union insécable.</p>

<h3>Guillemets et caractères de coup de glotte</h3>

<p>Lorsque vous tapez une apostrophe ( ' ), ce clavier produit un guillemet simple fermant ( ’ ), 
c’est-à-dire le caractère utilisé pour les contractions en anglais et en français. Si vous tapez immédiatement une autre apostrophe, 
vous obtiendrez une « lettre de modification apostrophe » ( ʼ ). Bien qu’elle semble identique au guillemet simple, 
elle est considérée comme une lettre et non comme une ponctuation, 
et peut être utilisée comme un caractère de coup de glotte au milieu des mots sans causer de problèmes de séparation de mots indésirables. 
Et si vous tapez la touche « Tchad » suivie de l’apostrophe ( /' ), vous obtenez quelque chose qui ressemble à une apostrophe lourde ( ꞌ )&nbsp;–&nbsp;un caractère appelé le « saltillo ». 
La touche « Tchad » suivie de Majuscule-apostrophe ( /" ) produit le saltillo en majuscule qui est simplement plus lourd encore ( Ꞌ ). 
Ces deux caractères de saltillo et la lettre de modification apostrophe (tapée avec deux apostrophes consécutives) sont des caractères de formation de mots, 
et non de ponctuation. En Unicode, il y a une différence. Vous devez utiliser l’une de ces options pour le caractère de coupure glottale, 
afin qu’il soit considéré comme faisant partie du mot. Pour les guillemets en tant que ponctuation, suivez le guide suivant :</p>

<table border="1" cellspacing="1" cellpadding="5">
  <thead>
    <th>taper :</th>
    <th>pour avoir :</th>
    <th>taper :</th>
    <th>pour avoir :</th>
    <th>taper :</th>
    <th>pour avoir :</th>
  </thead>
  <tbody>
    <tr>
      <td>&lt;&lt;</td>
      <td>«</td>
      <td>/{</td>
      <td>“</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>&gt;&gt;</td>
      <td>»</td>
      <td>/{</td>
      <td>”</td>
      <td>"</td>
      <td>"</td>
    </tr>
    <tr>
      <td>/&lt;</td>
      <td>‹</td>
      <td>/(</td>
      <td>‘</td>
      <td>/;</td>
      <td>'</td>
    </tr>
    <tr>
      <td>/></td>
      <td>›</td>
      <td>/)</td>
      <td>’</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>'</td>
      <td>’</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<p>Vous pouvez utiliser la fonctionnalité de correction automatique des « guillemets intelligents » dans votre éditeur. Si vous le faites, 
tous les apostrophes droits et guillemets doubles (dans la colonne de droite du tableau ci-dessus) seront transformés en guillemets courbes en fonction du contexte.
Si vous avez besoin d’utiliser des apostrophes droites ou des guillemets droits dans votre texte, vous devez désactiver la fonctionnalité des « guillemets intelligents ». 
Dans ce cas, vous pouvez toujours taper des guillemets courbes, comme indiqué dans la colonne du milieu du tableau ci-dessus. 
La colonne de gauche montre comment taper les guillemets français. Si la langue de votre document est le français,
 vous pouvez les obtenir automatiquement en tapant des guillemets droits si la fonctionnalité des « guillemets intelligents » est activée.
N’oubliez pas que taper deux apostrophes ( ' ' ) ou la touche « Tchad » suivie de l’apostrophe ( /' ) ne vous donne pas de ponctuation, 
mais un caractère formateur de mot à utiliser comme coup de glotte dans les langues tchadiennes.</p>

<h3>Polices</h3>
<p>Assurez-vous d’avoir sélectionné une police Unicode (par exemple, Charis SIL, Doulos SIL, Andika, Gentium, Times New Roman, etc.) 
pour taper des caractères spéciaux.</p>

<h3>Contact</h3>
<p> Pour plus d’information et orientation sur le Clavier QWERTY du Tchad vous pouvez nous joindre ici :
<a href=https://sites.google.com/sil.org/sil-tchad-langtech/home>Technologie Linguistique Tchad</a></p>

<p>©&nbsp;2017-2024 SIL International</p>
</div>
</div>
<!--Ending French-->

<!--
<script src="/cdn/deploy/js/jquery1-11-1.min.8101d596b2b8fa35fe3a634ea342d7c3.js"></script>
<script src="/cdn/deploy/js/kbd-docs.75e1bcb8b752654daa7e44ba4a1353b1.js"></script>
<div style="user-select: none;"></div><div class="kmw-wait-background"><div class="kmw-wait-box">
<div class="kmw-alert-close"></div><div class="kmw-wait-text"></div><div class="kmw-wait-graphic"></div></div></div>
<div data-lastpass-root="" style="position: absolute !important; top: 0px !important; left: 0px !important; height: 0px !important; width: 0px !important;"></div>
-->
