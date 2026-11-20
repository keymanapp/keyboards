<?php
  $pagename = 'Nheengatu Keyboard Help';
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
  Teclado para a língua nheengatu (língua geral amazônica), do Rio Negro e do Tapajós. Grafia da Constituição Federal em nheengatu (CNJ/STF, 2023): vogais nasais ã ẽ ĩ ũ, acento agudo (á é í ú) e ê.
</p>
<p>
  Nheengatu (Língua Geral Amazônica, "modern Tupi"; ISO 639-3 `yrl`) is spoken along the Rio Negro and in the Tapajós region in the Brazilian Amazon, and in neighbouring Colombia and Venezuela. It is co-official in São Gabriel da Cachoeira (AM). The spelling follows the 2023 official translation of the Brazilian Constitution into Nheengatu (CNJ/STF): nasal vowels ã ẽ ĩ ũ, the stress marked with acute accents (á é í ú) and ê.
</p>

<h2>Teclado / Touch layout</h2>
<p><img src="nheengatu_teclado.png" alt="Teclado Nheengatu" style="max-width: 100%; width: 420px"></p>

<h2>Letras da fileira nheengatu / Nheengatu row</h2>
<table class="chars">
  <tr><th>Minúscula / Lower</th><th>Maiúscula / Upper</th><th>Unicode</th></tr>
  <tr><td class="ch">ã</td><td class="ch">Ã</td><td>U+00E3 / U+00C3</td></tr>
  <tr><td class="ch">ẽ</td><td class="ch">Ẽ</td><td>U+1EBD / U+1EBC</td></tr>
  <tr><td class="ch">ĩ</td><td class="ch">Ĩ</td><td>U+0129 / U+0128</td></tr>
  <tr><td class="ch">ũ</td><td class="ch">Ũ</td><td>U+0169 / U+0168</td></tr>
  <tr><td class="ch">á</td><td class="ch">Á</td><td>U+00E1 / U+00C1</td></tr>
  <tr><td class="ch">é</td><td class="ch">É</td><td>U+00E9 / U+00C9</td></tr>
  <tr><td class="ch">í</td><td class="ch">Í</td><td>U+00ED / U+00CD</td></tr>
  <tr><td class="ch">ú</td><td class="ch">Ú</td><td>U+00FA / U+00DA</td></tr>
  <tr><td class="ch">ê</td><td class="ch">Ê</td><td>U+00EA / U+00CA</td></tr>
</table>

<h2>Como usar / How to use</h2>
<ul>
  <li>Shift: uma letra maiúscula. Dois toques no Shift: trava as maiúsculas (caps lock); um toque destrava.<br>
      Shift: one capital letter. Double-tap Shift: caps lock; tap again to release.</li>
  <li>O começo da frase já sobe para maiúscula. / Sentences start in capitals automatically.</li>
  <li>Segure o o para ó õ ô, o a para â à, o u para ü e o c para ç.<br>
      Long-press o for ó õ ô, a for â à, u for ü and c for ç.</li>
  <li>Dois espaços depois de uma palavra viram ". " / Double space after a word types ". "</li>
  <li>A tecla 😀 abre os emojis (três páginas); ABC volta para as letras.<br>
      The 😀 key opens an emoji tab (three pages); ABC returns to the letters.</li>
</ul>

<h2>No computador / Desktop</h2>
<p>
  No computador (e com teclado físico no celular ou tablet) o layout é o ABNT2, o padrão dos computadores no
  Brasil, e as teclas de acento também fazem as letras nheengatu.<br>
  On desktop (and with a hardware keyboard on phones and tablets) the layout is Brazilian ABNT2, with the dead
  keys extended for Nheengatu.
</p>
<ul>
  <li>~ e depois a vogal: ã ẽ ĩ ũ<br>
      ~ then a vowel: ã ẽ ĩ ũ</li>
  <li>´ e depois a vogal: á é í ú<br>
      ´ then a vowel: á é í ú</li>
  <li>^ (Shift + ~) e depois e: ê<br>
      ^ (Shift + ~) then e: ê</li>
  <li>Shift ou caps lock dão as maiúsculas.<br>
      Shift or caps lock give the capitals.</li>
</ul>

<p>
  © Bruno Maia de Jesus - TJ. Released under the MIT license.
</p>
