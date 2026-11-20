<?php
  $pagename = 'Kaingang Keyboard Help';
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
  Teclado de toque para escrever a língua kaingang. É um teclado QWERTY comum com uma fileira fixa, acima das
  letras, com as nove letras do alfabeto kaingang que não estão no QWERTY.
</p>
<p>
  Touch keyboard for writing Kaingang: a standard QWERTY layout with an extra fixed row for the nine Kaingang
  letters that are not on QWERTY.
</p>

<h2>Teclado / Touch layout</h2>
<p><img src="kaingang_teclado.png" alt="Teclado Kaingang" style="max-width: 100%; width: 420px"></p>

<h2>Letras da fileira kaingang / Kaingang row</h2>
<table class="chars">
  <tr><th>Minúscula / Lower</th><th>Maiúscula / Upper</th><th>Unicode</th></tr>
  <tr><td class="ch">ã</td><td class="ch">Ã</td><td>U+00E3 / U+00C3</td></tr>
  <tr><td class="ch">ẽ</td><td class="ch">Ẽ</td><td>U+1EBD / U+1EBC</td></tr>
  <tr><td class="ch">ĩ</td><td class="ch">Ĩ</td><td>U+0129 / U+0128</td></tr>
  <tr><td class="ch">ũ</td><td class="ch">Ũ</td><td>U+0169 / U+0168</td></tr>
  <tr><td class="ch">ỹ</td><td class="ch">Ỹ</td><td>U+1EF9 / U+1EF8</td></tr>
  <tr><td class="ch">á</td><td class="ch">Á</td><td>U+00E1 / U+00C1</td></tr>
  <tr><td class="ch">é</td><td class="ch">É</td><td>U+00E9 / U+00C9</td></tr>
  <tr><td class="ch">ó</td><td class="ch">Ó</td><td>U+00F3 / U+00D3</td></tr>
  <tr><td class="ch">'</td><td class="ch">'</td><td>U+0027 — glotal / glottal stop (pã'i)</td></tr>
</table>

<h2>Como usar / How to use</h2>
<ul>
  <li>Shift: uma letra maiúscula. Dois toques no Shift: trava as maiúsculas (caps lock); um toque destrava.<br>
      Shift: one capital letter. Double-tap Shift: caps lock; tap again to release.</li>
  <li>O começo da frase já sobe para maiúscula. / Sentences start in capitals automatically.</li>
  <li>Segure a vogal para â à ê í ô õ ú ü; segure o c para ç. / Long-press for Portuguese accented letters.</li>
  <li>Dois espaços depois de uma palavra viram ". " / Double space after a word types ". "</li>
  <li>A tecla 😀 abre os emojis (três páginas); ABC volta para as letras.<br>
      The 😀 key opens an emoji tab (three pages); ABC returns to the letters.</li>
</ul>

<h2>No computador / Desktop</h2>
<p>
  No computador (e com teclado físico no celular ou tablet) o layout é o ABNT2, o padrão dos computadores no
  Brasil, e as teclas de acento também fazem as letras kaingang.<br>
  On desktop (and with a hardware keyboard on phones and tablets) the layout is Brazilian ABNT2, with the dead
  keys extended for Kaingang.
</p>
<ul>
  <li>~ e depois a vogal: ã ẽ ĩ ũ ỹ<br>
      ~ then a vowel: ã ẽ ĩ ũ ỹ</li>
  <li>´ e depois a vogal: á é ó<br>
      ´ then a vowel: á é ó</li>
  <li>Glotal ( ' ): tecla ao lado do 1.<br>
      Glottal stop ( ' ): the key left of 1.</li>
  <li>Shift ou caps lock dão as maiúsculas.<br>
      Shift or caps lock give the capitals.</li>
</ul>

<p>
  © Bruno Maia de Jesus - TJ. Released under the MIT license.
</p>
