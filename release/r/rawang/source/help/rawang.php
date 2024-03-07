<?php
  $pagename = 'Rawang Keyboard Help';
  $pagetitle = $pagename;
  $style = <<<EXTRA
  .highlightExample {font-weight: bold; color: #0000ff}
  .highlightKeys img {vertical-align:baseline !important}
  .input {font-weight: bold; font-size: 1.2em; color: #a64826}
  .output {font-weight: bold; font-size: 1.2em; color: #0000ff}
  .typing p, ul {margin-top: 0px; margin-bottom: 2px}
EXTRA;
  require_once('header.php');
?>


<p>
    This keyboard is intended for the Rawang language of Myanmar and India. The keyboard is designed to be used with a standard (QWERTY) keyboard.
</p>

<h1>Keyboard Layout</h1>

<div id="Documentation">
<h3>Typing Instructions</h3>

<p>This keyboard is designed to work like a standard (QWERTY) keyboard. Tones (accents) in this keyboard are typed <b><i>after</i></b> the letter.</p> 

<p>To type a <b>high tone</b> (acute accent), use <span class='keys'>[</span>. Type after a,e,i,o,u,v,ø,g,A,E,I,O,U,V,Ø,G.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>á</span>, type <span class='keys'>a[</span>.</p>
<p style='margin-left:40px'><b>Example:</b> Also, for <span class='highlightExample'>ġ</span>, type <span class='keys'>g[</span>.</p>

<p>To type a <b>middle tone</b> (macron accent), use <span class='keys'>]</span>. Type after a,e,i,o,u,v,ø,g,A,E,I,O,U,V,Ø,G.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>ū</span>, type <span class='keys'>u]</span>.</p>

<p>To type a <b>low tone</b> (grave accent), use <span class='keys'>/</span>. Type after a,e,i,o,u,v,ø,s,A,E,I,O,U,V,Ø,S.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>ù</span>, type <span class='keys'>u/</span>.</p>
<p style='margin-left:40px'><b>Example:</b> Also, for <span class='highlightExample'>š</span>, type <span class='keys'>s/</span>.</p>

<p>Typing a high tone immediately after a low tone or a low tone after a high tone will switch the tone on a vowel.</p>
<p style='margin-left:40px'><b>Example:</b> After <span class='keys'>O[</span>, type <span class='keys'>/</span> to turn <span class='highlightExample'>Ó</span> into <span class='highlightExample'>Ò</span>.</p>
<p style='margin-left:40px'><b>Example:</b> After <span class='keys'>v/</span>, type <span class='keys'>[</span> to turn <span class='highlightExample'>v̀</span> into <span class='highlightExample'>v́</span>.</p>

<p>To type a <b>hat</b>, use <span class='keys'>^</span>. Type after a,e,i,o,u,v,ø,A,E,I,O,U,V,Ø.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>û</span>, type <span class='keys'>u^</span>.</p>

<p>To type a <b>caron</b>, use <span class='keys'>\</span>. Type after a,e,i,o,u,v,ø,A,E,I,O,U,V,Ø.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>ǔ</span>, type <span class='keys'>u\</span>.</p>

<p>To type a <b>tilde</b>, use <span class='keys'>`</span>. Type after a,e,i,o,u,v,ø,A,E,I,O,U,V,Ø.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>ũ</span>, type <span class='keys'>u`</span>.</p>

<p>To type the vowel <span class='highlightExample'>ø</span>, use the <span class='keys'>;</span> key.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>ø</span>, type <span class='keys'>;</span>.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>Ø</span>, type <span class='keys'>:</span>.</p>

<p>You can also type the special characters <span class='highlightExample'>/</span>, <span class='highlightExample'>[</span>, <span class='highlightExample'><</span>, and <span class='highlightExample'>></span> with this keyboard.</p>
<p style='margin-left:40px'>For <span class='highlightExample'>/</span>, type <span class='keys'>[RALT /]</span>.</p>
<p style='margin-left:40px'>For <span class='highlightExample'>[</span>, type <span class='keys'>[RALT []</span>.</p>
<p style='margin-left:40px'>For <span class='highlightExample'><</span>, type <span class='keys'>[RALT ,]</span>.</p>
<p style='margin-left:40px'>For <span class='highlightExample'>></span>, type <span class='keys'>[RALT .]</span>.</p>

</div>
<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>High, low, and middle tones are available on long presses for keys: (a, e, i, o, u, v, ø)
  Press and hold on the key with a little dot on the top right to reveal and use them.</p>
<p>Numerals are available as longpresses on the top row of keys</p>
<p>More punctuation are available as longpresses on the period key</p>

<div id='osk-tablet' data-states='default shift numeric'>
</div>


<h3 id="rawang-gesture-table">rawang Gesture Table</h3>
<p>Gestures for the Mobile Keyboard layers are described in <a href="rawang-tablet"> Rawang gesture tables</a></p>

</div>
