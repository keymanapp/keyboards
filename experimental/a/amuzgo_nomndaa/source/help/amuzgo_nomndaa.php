<?php 
  $pagename = 'Ñomndaa (Amuzgo de Guerrero) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
table.chars { border-collapse: collapse; margin-bottom: 1.5em }
table.chars td, table.chars th { border: solid 1px #999; padding: 6px 10px; text-align: left; vertical-align: top }
table.chars th { background-color: #eee }
table.chars td.ch { font-size: 1.6em; text-align: center; min-width: 2.5em }
span.k { display: inline-block; padding: 2px 6px; font-size: small; color: #444d56; background-color: #fafbfc; border: solid 1px #c6cbd1; border-bottom-color: #959da5; border-radius: 3px; box-shadow: inset 0 -1px 0 #959da5; white-space: nowrap }
div.note { background-color: #eef; border: solid 1px #ccd; border-radius: 6px; padding: 9px; margin: 1em 0 }
END;
  require_once('header.php');
?>

<p>
  Este es un teclado para escribir el ñomndaa (amuzgo de Guerrero, México). Está basado en la
  distribución <b>Español (Latinoamérica)</b>: todas las letras, números y signos están donde ya
  los conoces, y solo se añaden los caracteres propios del idioma.
</p>

<p>
  This keyboard is for writing Ñomndaa (Guerrero Amuzgo, Mexico). It is based on the
  <b>Spanish (Latin America)</b> layout: every letter, digit and symbol stays where users already
  expect it, and only the characters specific to the language are added.
</p>

<h2>Diseño del teclado / Desktop Keyboard Layout</h2>

<p>
  Las teclas marcadas en verde en las imágenes son las propias del ñomndaa.
  Mantén presionada <span class="k">Shift</span> o <span class="k">AltGr</span> (Alt derecho) para ver cada capa.
</p>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Caracteres del ñomndaa / Ñomndaa characters</h2>

<table class="chars">
  <tr><th>Carácter</th><th>Nombre / Name</th><th>En computadora / On desktop</th><th>En teléfono / On touch</th></tr>
  <tr>
    <td class="ch">ꞌ</td><td>Saltillo<br/>U+A78C</td>
    <td>Tecla del apóstrofo <span class="k">'</span> (a la derecha del <span class="k">0</span>)</td>
    <td>Tecla <b>ꞌ</b> junto a <span class="k">m</span></td>
  </tr>
  <tr>
    <td class="ch">a&#x331;&nbsp;&nbsp;o&#x331;</td><td>Vocal con macrón inferior<br/>Vowel with macron below<br/>U+0331</td>
    <td><span class="k">AltGr</span> + <span class="k">A</span>, <span class="k">AltGr</span> + <span class="k">O</span></td>
    <td>Mantén presionada la vocal y elige la variante</td>
  </tr>
  <tr>
    <td class="ch">&#xE2;&#x331;&nbsp;&nbsp;&#xF4;&#x331;</td><td>Circunflejo + macrón inferior<br/>Circumflex + macron below</td>
    <td><span class="k">AltGr</span> + <span class="k">1</span> (â̱), <span class="k">AltGr</span> + <span class="k">0</span> (ô̱)</td>
    <td>Mantén presionada <b>a</b> u <b>o</b></td>
  </tr>
  <tr>
    <td class="ch">&#x207F;</td><td>Nasal en superíndice<br/>Superscript nasal marker<br/>U+207F</td>
    <td><span class="k">AltGr</span> + <span class="k">N</span></td>
    <td>Mantén presionada <b>n</b></td>
  </tr>
  <tr>
    <td class="ch">&#xE2; &#xEA; &#xEE; &#xF4;</td><td>Vocales con circunflejo<br/>Circumflex vowels</td>
    <td>Tecla <span class="k">^</span> (a la izquierda del <span class="k">1</span>) y luego la vocal</td>
    <td>Mantén presionada la vocal</td>
  </tr>
  <tr>
    <td class="ch">&#xF1;</td><td>Eñe</td>
    <td>Tecla <span class="k">Ñ</span> (igual que en español)</td>
    <td>Tecla <b>ñ</b></td>
  </tr>
</table>

<h2>Macrón inferior después de cualquier letra / Macron below after any letter</h2>

<p>
  Todas las vocales aceptan macrón inferior. Escribe la letra y después presiona
  <span class="k">AltGr</span> + <span class="k">/</span>. El macrón es un signo combinante (U+0331):
  se coloca debajo de la letra que acabas de escribir.
</p>

<div class="note">
  <p><b>Ejemplos / Examples</b></p>
  <p>
    <span class="k">AltGr</span>+<span class="k">A</span> → a̱ &nbsp;&nbsp;
    <span class="k">AltGr</span>+<span class="k">O</span> → o̱ &nbsp;&nbsp;
    <span class="k">AltGr</span>+<span class="k">1</span> → â̱ &nbsp;&nbsp;
    <span class="k">AltGr</span>+<span class="k">0</span> → ô̱
  </p>
</div>

<h2>Vocales con circunflejo / Circumflex vowels</h2>

<p>
  La tecla <span class="k">^</span> (a la izquierda del <span class="k">1</span>) es una <b>tecla muerta</b>:
  no escribe nada por sí sola; presiónala y luego la vocal (<b>a, e, i, o</b>; la <b>u</b> con circunflejo no existe en ñomndaa).
  También puedes usar <span class="k">AltGr</span> + <span class="k">{</span>.
</p>

<p>
  Para la combinación circunflejo + macrón inferior, presiona la tecla muerta <span class="k">^</span>
  y luego <span class="k">AltGr</span> + <span class="k">A</span> o <span class="k">AltGr</span> + <span class="k">O</span>
  (â̱ y ô̱). Las combinaciones <span class="k">AltGr</span> + <span class="k">1</span> y
  <span class="k">AltGr</span> + <span class="k">0</span> son atajos más cortos.
</p>

<h2>Otras teclas muertas / Other dead keys</h2>

<p>Para escribir en español u otros idiomas con el mismo teclado:</p>
<ul>
  <li><b>Acento agudo:</b> tecla <span class="k">´</span> y luego la vocal (á é í ó ú ý).</li>
  <li><b>Diéresis:</b> <span class="k">Shift</span> + <span class="k">´</span> y luego la vocal (ä ë ï ö ü ÿ).</li>
  <li><b>Acento grave:</b> <span class="k">AltGr</span> + <span class="k">}</span> y luego la vocal (à è ì ò ù).</li>
</ul>

<h2>Mayúsculas / Capital letters</h2>

<p>
  Todas las combinaciones tienen su versión en mayúscula (A̱, O̱, Â̱, Ô̱…): usa <span class="k">Shift</span> o
  <span class="k">Bloq Mayús</span> como siempre. El marcador nasal ⁿ no tiene mayúscula en Unicode;
  con <span class="k">Shift</span> se escribe ᴺ únicamente como equivalente visual en textos sin minúsculas.
</p>

<h2>Teclado táctil / Touch keyboard</h2>

<p>
  En teléfonos y tablets (Keyman para Android y iOS):
</p>
<ul>
  <li><b>Mantén presionada una vocal</b> para ver sus variantes: á, a̱, â, â̱ en la <b>a</b>; é, ê en la <b>e</b>;
      í, î en la <b>i</b>; ó, ô, o̱, ô̱ en la <b>o</b>; ú, ü en la <b>u</b>.</li>
  <li>La tecla <b>ꞌ</b> es el saltillo; manténla presionada para escribir <b>?</b>.</li>
  <li>Mantén presionada la <b>n</b> para escribir ⁿ.</li>
  <li>El teclado pasa solo a mayúsculas al inicio de una oración o de un párrafo.</li>
  <li>La tecla <b>Symbol</b> abre números y signos; desde allí, la tecla 😊 abre las categorías de emojis.</li>
</ul>

<h2>Sobre el texto en Unicode / About the text (Unicode)</h2>

<p>
  Este teclado escribe texto en Unicode estándar. El macrón inferior es un carácter combinante (U+0331) y
  el saltillo es U+A78C (LATIN SMALL LETTER SALTILLO). Para que se vean bien, usa una fuente que los incluya,
  por ejemplo <b>Gentium</b>, <b>Noto Sans</b> o <b>Charis</b>.
</p>


