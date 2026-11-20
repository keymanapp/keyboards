<?php
  $pagename = 'Xetá Keyboard Help';
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
  Teclado para a língua xetá (tupi-guarani, Paraná), em revitalização pelo povo Xetá. Grafia do Vocabulário Ilustrado Xetá (UEM, 2013) e dos materiais das escolas xetá: vogais nasais com til, ñ, y, acento agudo na sílaba tônica e a glotal ( ' ).
</p>
<p>
  Xetá (ISO 639-3 `xet`) is a Tupi-Guarani language of Paraná, Brazil. After the violence of the 1950s only a few elderly speakers remained, and the Xetá people are now revitalizing it in their schools. The spelling follows the Vocabulário Ilustrado Xetá (Rodrigues et al., UEM, 2013) and the current school materials of the Paraná state education department: nasal vowels with tilde (ã ẽ ĩ õ ũ ỹ), ñ, y, the acute accent on the stressed vowel (máj, mój, miráka) and the glottal stop written with the apostrophe.
</p>

<h2>Teclado / Touch layout</h2>
<p><img src="xeta_teclado.png" alt="Teclado Xetá" style="max-width: 100%; width: 420px"></p>

<h2>Letras da fileira xetá / Xetá row</h2>
<table class="chars">
  <tr><th>Minúscula / Lower</th><th>Maiúscula / Upper</th><th>Unicode</th></tr>
  <tr><td class="ch">ã</td><td class="ch">Ã</td><td>U+00E3 / U+00C3</td></tr>
  <tr><td class="ch">ẽ</td><td class="ch">Ẽ</td><td>U+1EBD / U+1EBC</td></tr>
  <tr><td class="ch">ĩ</td><td class="ch">Ĩ</td><td>U+0129 / U+0128</td></tr>
  <tr><td class="ch">õ</td><td class="ch">Õ</td><td>U+00F5 / U+00D5</td></tr>
  <tr><td class="ch">ũ</td><td class="ch">Ũ</td><td>U+0169 / U+0168</td></tr>
  <tr><td class="ch">ỹ</td><td class="ch">Ỹ</td><td>U+1EF9 / U+1EF8</td></tr>
  <tr><td class="ch">ñ</td><td class="ch">Ñ</td><td>U+00F1 / U+00D1</td></tr>
  <tr><td class="ch">´</td><td class="ch">´</td><td>acentua a vogal anterior (a ´ = á) / adds an acute accent to the previous vowel</td></tr>
  <tr><td class="ch">'</td><td class="ch">'</td><td>U+0027 — glotal / glottal stop</td></tr>
</table>

<h2>Como usar / How to use</h2>
<ul>
  <li>Shift: uma letra maiúscula. Dois toques no Shift: trava as maiúsculas (caps lock); um toque destrava.<br>
      Shift: one capital letter. Double-tap Shift: caps lock; tap again to release.</li>
  <li>O começo da frase já sobe para maiúscula. / Sentences start in capitals automatically.</li>
  <li>A tecla ´ da fileira acentua a vogal que você acabou de digitar: a ´ = á, y ´ = ý.<br>
      The ´ key in the Xetá row adds an acute accent to the vowel just typed: a ´ = á, y ´ = ý.</li>
  <li>Segure as vogais para os acentos do português (â à ê ô ü) e o c para ç.<br>
      Long-press vowels for Portuguese accents (â à ê ô ü) and c for ç.</li>
  <li>Dois espaços depois de uma palavra viram ". " / Double space after a word types ". "</li>
  <li>A tecla 😀 abre os emojis (três páginas); ABC volta para as letras.<br>
      The 😀 key opens an emoji tab (three pages); ABC returns to the letters.</li>
</ul>

<h2>No computador / Desktop</h2>
<p>
  No computador (e com teclado físico no celular ou tablet) o layout é o ABNT2, o padrão dos computadores no
  Brasil, e as teclas de acento também fazem as letras xetá.<br>
  On desktop (and with a hardware keyboard on phones and tablets) the layout is Brazilian ABNT2, with the dead
  keys extended for Xetá.
</p>
<ul>
  <li>~ e depois a vogal: ã ẽ ĩ õ ũ ỹ<br>
      ~ then a vowel: ã ẽ ĩ õ ũ ỹ</li>
  <li>~ e depois n: ñ<br>
      ~ then n: ñ</li>
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
