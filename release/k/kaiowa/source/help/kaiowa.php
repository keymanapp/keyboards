<?php
  $pagename = 'Kaiowá Keyboard Help';
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
  Teclado para a língua kaiowá (guarani kaiowá, pai tavyterã), do Mato Grosso do Sul e do Paraguai. Grafia das traduções oficiais da AGU (Língua Indígena Viva no Direito): ã ẽ ĩ õ ũ ỹ, g̃, ý e a glotal ( ' ), como em nhe'ẽ e mba'e.
</p>
<p>
  Kaiowá (Guarani Kaiowá, Pai Tavyterã; ISO 639-3 `kgk`) is spoken by tens of thousands of people in Mato Grosso do Sul, Brazil, and in eastern Paraguay. It is close to Paraguayan Guarani but has its own spelling. The spelling follows the official Kaiowá translations of the AGU programme "Língua Indígena Viva no Direito" (2025): nasal vowels ã ẽ ĩ õ ũ ỹ, g̃, ý and the glottal stop (puso) written with the apostrophe, as in nhe'ẽ and mba'e.
</p>

<h2>Teclado / Touch layout</h2>
<p><img src="kaiowa_teclado.png" alt="Teclado Kaiowá" style="max-width: 100%; width: 420px"></p>

<h2>Letras da fileira kaiowá / Kaiowá row</h2>
<table class="chars">
  <tr><th>Minúscula / Lower</th><th>Maiúscula / Upper</th><th>Unicode</th></tr>
  <tr><td class="ch">ã</td><td class="ch">Ã</td><td>U+00E3 / U+00C3</td></tr>
  <tr><td class="ch">ẽ</td><td class="ch">Ẽ</td><td>U+1EBD / U+1EBC</td></tr>
  <tr><td class="ch">ĩ</td><td class="ch">Ĩ</td><td>U+0129 / U+0128</td></tr>
  <tr><td class="ch">õ</td><td class="ch">Õ</td><td>U+00F5 / U+00D5</td></tr>
  <tr><td class="ch">ũ</td><td class="ch">Ũ</td><td>U+0169 / U+0168</td></tr>
  <tr><td class="ch">ỹ</td><td class="ch">Ỹ</td><td>U+1EF9 / U+1EF8</td></tr>
  <tr><td class="ch">g̃</td><td class="ch">G̃</td><td>U+0067 U+0303 / U+0047 U+0303</td></tr>
  <tr><td class="ch">ý</td><td class="ch">Ý</td><td>U+00FD / U+00DD</td></tr>
  <tr><td class="ch">'</td><td class="ch">'</td><td>U+0027 — glotal / glottal stop</td></tr>
</table>

<h2>Como usar / How to use</h2>
<ul>
  <li>Shift: uma letra maiúscula. Dois toques no Shift: trava as maiúsculas (caps lock); um toque destrava.<br>
      Shift: one capital letter. Double-tap Shift: caps lock; tap again to release.</li>
  <li>O começo da frase já sobe para maiúscula. / Sentences start in capitals automatically.</li>
  <li>Segure as vogais para á é í ó ú (e â ê ô à ü do português), o n para ñ e o c para ç.<br>
      Long-press vowels for á é í ó ú (and Portuguese â ê ô à ü), n for ñ and c for ç.</li>
  <li>Dois espaços depois de uma palavra viram ". " / Double space after a word types ". "</li>
  <li>A tecla 😀 abre os emojis (três páginas); ABC volta para as letras.<br>
      The 😀 key opens an emoji tab (three pages); ABC returns to the letters.</li>
</ul>

<h2>No computador / Desktop</h2>
<p>
  No computador (e com teclado físico no celular ou tablet) o layout é o ABNT2, o padrão dos computadores no
  Brasil, e as teclas de acento também fazem as letras kaiowá.<br>
  On desktop (and with a hardware keyboard on phones and tablets) the layout is Brazilian ABNT2, with the dead
  keys extended for Kaiowá.
</p>
<ul>
  <li>~ e depois a vogal: ã ẽ ĩ õ ũ ỹ<br>
      ~ then a vowel: ã ẽ ĩ õ ũ ỹ</li>
  <li>~ e depois g: g̃<br>
      ~ then g: g̃</li>
  <li>´ e depois a vogal: á é í ó ú ý<br>
      ´ then a vowel: á é í ó ú ý</li>
  <li>Glotal ( ' ): tecla ao lado do 1.<br>
      Glottal stop ( ' ): the key left of 1.</li>
  <li>Shift ou caps lock dão as maiúsculas.<br>
      Shift or caps lock give the capitals.</li>
</ul>

<p>
  © Bruno Maia de Jesus - TJ. Released under the MIT license.
</p>
