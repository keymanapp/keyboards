<?php
  $pagename = 'Ticuna Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
table.chars { border-collapse: collapse; margin-bottom: 1.5em }
table.chars td, table.chars th { border: solid 1px #999; padding: 6px 10px; text-align: left; vertical-align: top }
table.chars th { background-color: #eee }
table.chars td.ch { font-size: 1.6em; text-align: center; min-width: 2.5em }
END;
  require_once('header.php');
?>

<p>
  Teclado de toque para escrever a língua ticuna (tikuna, magüta) na grafia usada no Brasil. É um teclado
  QWERTY comum com uma fileira fixa de letras ticuna acima das letras.
</p>
<p>
  Touch keyboard for writing Ticuna (Tikuna, Magüta) as written in Brazil: a standard QWERTY layout with an
  extra fixed row of Ticuna letters above it.
</p>

<h2>Teclado / Touch layout</h2>
<p><img src="ticuna_teclado.png" alt="Teclado Ticuna" style="max-width: 100%; width: 420px"></p>

<h2>Letras da fileira ticuna / Ticuna row</h2>
<table class="chars">
  <tr><th>Minúscula / Lower</th><th>Maiúscula / Upper</th><th>Unicode</th></tr>
  <tr><td class="ch">ã</td><td class="ch">Ã</td><td>U+00E3 / U+00C3</td></tr>
  <tr><td class="ch">ẽ</td><td class="ch">Ẽ</td><td>U+1EBD / U+1EBC</td></tr>
  <tr><td class="ch">ĩ</td><td class="ch">Ĩ</td><td>U+0129 / U+0128</td></tr>
  <tr><td class="ch">õ</td><td class="ch">Õ</td><td>U+00F5 / U+00D5</td></tr>
  <tr><td class="ch">ũ</td><td class="ch">Ũ</td><td>U+0169 / U+0168</td></tr>
  <tr><td class="ch">ü</td><td class="ch">Ü</td><td>U+00FC / U+00DC</td></tr>
  <tr><td class="ch">ü̃</td><td class="ch">Ü̃</td><td>U+00FC U+0303 / U+00DC U+0303</td></tr>
  <tr><td class="ch">ü̃́</td><td class="ch">Ü̃́</td><td>U+00FC U+0303 U+0301 / U+00DC U+0303 U+0301</td></tr>
  <tr><td class="ch">'</td><td class="ch">'</td><td>U+0027 — glotal / glottal stop</td></tr>
</table>

<h2>Como usar / How to use</h2>
<ul>
  <li>Shift: uma letra maiúscula. Dois toques no Shift: trava as maiúsculas (caps lock); um toque destrava.<br>
      Shift: one capital letter. Double-tap Shift: caps lock; tap again to release.</li>
  <li>O começo da frase já sobe para maiúscula. / Sentences start in capitals automatically.</li>
  <li>Segure a vogal para á à â ä é ê è ë í î ì ï ó ô ò ö ú û ù; segure o c para ç e o n para ñ.<br>
      Long-press vowels, c and n for Portuguese accented letters.</li>
  <li>Dois espaços depois de uma palavra viram ". " / Double space after a word types ". "</li>
  <li>A tecla 😀 abre os emojis (três páginas); ABC volta para as letras.<br>
      The 😀 key opens an emoji tab (three pages); ABC returns to the letters.</li>
</ul>

<h2>No computador / Desktop</h2>
<p>
  No computador (e com teclado físico no celular ou tablet) o layout é o ABNT2, o padrão dos computadores no
  Brasil, e as teclas de acento também fazem as letras ticuna.<br>
  On desktop (and with a hardware keyboard on phones and tablets) the layout is Brazilian ABNT2, with the dead
  keys extended for Ticuna.
</p>
<ul>
  <li>~ e depois a vogal: ã ẽ ĩ õ ũ<br>
      ~ then a vowel: ã ẽ ĩ õ ũ</li>
  <li>¨ (Shift+6) e depois u: ü<br>
      ¨ (Shift+6) then u: ü</li>
  <li>~ e ¨ (qualquer ordem) e depois u: ü̃<br>
      ~ and ¨ (any order) then u: ü̃</li>
  <li>~, ¨ e ´ e depois u: ü̃́<br>
      ~, ¨ and ´ then u: ü̃́</li>
  <li>Glotal ( ' ): tecla ao lado do 1.<br>
      Glottal stop ( ' ): the key left of 1.</li>
  <li>Shift ou caps lock dão as maiúsculas.<br>
      Shift or caps lock give the capitals.</li>
</ul>

<p>
  © Bruno Maia de Jesus - TJ. Released under the MIT license.
</p>
