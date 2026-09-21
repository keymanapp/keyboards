<?php 
  $pagename = 'Commencez à utiliser Ntcham (AZERTY) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
      key, span.kbd { background: none repeat scroll 0% 0% #F7F7F7; padding: 0.1em 0.6em; border: 1px solid #CCC; font-size: 10pt; color: #333; box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 2px #FFF inset; border-radius: 3px; display: inline-block; margin: 0px 0.1em; text-shadow: 0px 1px 0px #FFF; line-height: 1.4; white-space: nowrap;
  }
END;
  require_once('header.php');
?>

<p>Ce clavier prend en charge la langue ntcham du Togo sur un clavier AZERTY (français).</p>
<p>This keyboard supports the Ntcham language of Togo for an AZERTY (French) Keyboard.</p>


<h2>Disposition du clavier pour ordinateur / Desktop Keyboard layout</h2>

<p>Ce clavier utilise des touches mortes (combinaisons de touches) pour produire les caractères accentués et les lettres spécifiques à la langue ntcham. Par exemple :</p>

<ul>
<li><key>a^</key> produit á (également disponible pour les lettres ɑ, b, e, i, ɩ, l, m, n, o, ɔ, r, u et ʋ, ainsi que leurs majuscules).</li>
<li><key>a$</key> produit ā (également disponible pour les lettres ɑ, b, e, i, ɩ, l, m, n, o, ɔ, r, u et ʋ, ainsi que leurs majuscules).</li>
<li><key>a*</key> produit à (également disponible pour les lettres ɑ, b, e, i, ɩ, l, m, n, o, ɔ, r, u et ʋ, ainsi que leurs majuscules).</li>
<li><key>a²</key> produit ã (également disponible pour les lettres ɑ, e, i, ɩ, o, ɔ, u et ʋ, ainsi que leurs majuscules).</li>
<li><key>;a</key> produit ɑ et ;A produit Ɑ.</li>
<li><key>;i</key> produit ɩ et ;I produit Ɩ.</li>
<li><key>;n</key> produit ŋ et ;N produit Ŋ.</li>
<li><key>;o</key> produit ɔ et ;O produit Ɔ.</li>
<li><key>;u</key> produit ʋ et ;U produit Ʋ.</li>
</ul>

<p>This keyboard makes use of multi-key input. For example:</p>
<ul>
<li><key>a^</key> produces á (also available for the letters ɑ, b, e, i, ɩ, l, m, n, o, ɔ, r, u and ʋ, as well as their capital letters).</li>
<li><key>a$</key> produces ā (also available for the letters ɑ, b, e, i, ɩ, l, m, n, o, ɔ, r, u and ʋ, as well as their capital letters).</li>
<li><key>a*</key> produces à (also available for the letters ɑ, b, e, i, ɩ, l, m, n, o, ɔ, r, u and ʋ, as well as their capital letters).</li>
<li><key>a²</key> produces ã (also available for the letters ɑ, e, i, ɩ, o, ɔ, u and ʋ, as well as their capital letters).</li>
<li><key>;a</key> produces ɑ and ;A produces Ɑ.</li>
<li><key>;i</key> produces ɩ and ;I produces Ɩ.</li>
<li><key>;n</key> produces ŋ and ;N produces Ŋ.</li>
<li><key>;o</key> produces ɔ and ;O produces Ɔ.</li>
<li><key>;u</key> produces ʋ and ;U produces Ʋ.</li>
</ul>

<p>Les différentes dispositions disponibles sont les suivantes :</p>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

  <h2>Disposition du clavier pour téléphone mobile / Mobile/Phone Keyboard layout</h2>

  <div id='osk-phone' data-states='default shift numeric'>
</div>	

 <h3>Appui long (pour accéder aux caractères supplémentaires) / Longpress</h3>
	<p>On mobile phone, keys with a little dot on the top right can be pressed and held for more keys.</p>
	<p><a href="mobile_longpress.png"><img class="keyboard" src="mobile_longpress.png" alt="longpress" /></a></p>
