<?php 
  $pagename = 'Koulango Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    .letters { font: bold 22pt; letter-spacing: 8px; }
    .layout { font: 12pt "Courier New";  }
    .note { background: #eef4fb; }
END;
  require_once('header.php');
?>

<p>
  Bienvenue dans le clavier Koulango. Ce clavier permet d’écrire le koulango
  avec son orthographe latine standardisée sur les téléphones, tablettes et
  ordinateurs compatibles avec Keyman.
</p>

<h2>Lettres koulango</h2>

<p class="letters">ɛ ɔ ɩ ʋ ɲ ŋ</p>
<p class="letters">Ɛ Ɔ Ɩ Ʋ Ɲ Ŋ</p>

<h2>Disposition tactile principale</h2>

<p>
  Sur les téléphones et tablettes, les lettres particulières du koulango
  sont directement visibles sur le clavier.
</p>

<div class="layout">
  a z e r t y u i o p ɔ<br>
  q s d f g h j k l m ɛ<br>
  w c v b n ɩ ʋ ɲ ŋ
</div>

<h2>Utilisation sur écran tactile</h2>

<ul>
  <li>
    Appuyez sur la touche Majuscule pour écrire les lettres capitales.
  </li>
  <li>
    Maintenez la touche <strong>c</strong> pour obtenir <strong>x</strong>.
  </li>
  <li>
    Maintenez la touche <strong>C</strong> pour obtenir <strong>X</strong>.
  </li>
  <li>
    Utilisez la touche <strong>123</strong> pour accéder aux chiffres
    et aux symboles.
  </li>
</ul>

<h2>Utilisation avec un clavier physique</h2>

<p>
  Sur un ordinateur ou lorsqu’un clavier externe est connecté à un téléphone
  ou à une tablette, utilisez la touche <strong>AltGr</strong> avec la lettre
  latine correspondante.
</p>

<table  class='display'>
  <thead>
    <tr>
      <th>Combinaison</th>
      <th>Résultat</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>AltGr + E</td>
      <td>ɛ</td>
    </tr>
    <tr>
      <td>AltGr + O</td>
      <td>ɔ</td>
    </tr>
    <tr>
      <td>AltGr + I</td>
      <td>ɩ</td>
    </tr>
    <tr>
      <td>AltGr + U</td>
      <td>ʋ</td>
    </tr>
    <tr>
      <td>AltGr + N</td>
      <td>ɲ</td>
    </tr>
    <tr>
      <td>AltGr + G</td>
      <td>ŋ</td>
    </tr>
  </tbody>
</table>

<div class="note">
  Pour obtenir les majuscules, utilisez
  <strong>Majuscule + AltGr + lettre</strong>.
  Sur certains systèmes, AltGr correspond à
  <strong>Ctrl + Alt</strong>.
</div>

<div id='osk-container'>
  <h2>Desktop Keyboard Layout</h2>
  <div id='osk' data-states='default shift ctrl-alt shift-ctrl-alt'></div>
</div>

<div id='osk-phone-container'>
  <h2>Phone Keyboard Layout</h2>
  <div id='osk-phone' data-states='default shift numeric symbol'></div>
</div>

<h2>À propos</h2>

<p>
  Le clavier Koulango est un projet de
  <strong>Kulam Akademi – Académie koulango</strong>,
  développé et maintenu par Yao Seyi.
</p>

<p>
  Site officiel :
  <a href="https://koulango.org">https://koulango.org</a>
</p>
