<?php 
  $pagename = 'SYL Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
  require_once('header.php');
?>

<p>
    Mobile and desktop keyboards for Syloti Nagri, traditional script of the Sylheti language 
    spoken in Sylhet (Bangladesh) and Cachar (Assam).
</p>

<h1>Keyboard Layout</h1>

<h2>Mobile Keyboard layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<p>The keyboard graphic layout may not display the U+A806 (hasanta) character properly.</p> 
  <ul class="surma">Bottom right key outputs the <i>hasanta</i> to form conjuncts. </ul>
  <ul class="surma">Longpress the hasanta key and the user may gain access to the <i>hasanta</i> followed by zero width non-joiner, 
     showing a visible <i>hasanta</i> without forming conjuncts; or the <i>Bangla hasanta</i>, useful at the end of 
     a word. Each of these have a different appearance depending on context.</ul>
  <p>Currently the conjuncts do not form properly on Android devices. However, this may improve with newer versions of Android.</p>

<div id='osk-tablet' data-states='default numeric'>
</div>

<h2>Desktop Keyboard layout</h2>
<p>The keyboard graphic layout may not display the U+A806 (^ hasanta) character properly. </p>
  <ul class="surma">SHIFT+6 (^) outputs the <i>hasanta</i> to produce a conjunct. </ul>
  <ul class="surma">SHIFT+Y outputs the <i>hasanta</i> followed by zero width non-joiner, producing a visible <i>hasanta</i> but no conjunct.  </ul>
  <ul class="surma">SHIFT+H outputs the <i>Bangla hasanta</i>.  </ul>

<p>Each of these have a different appearance depending on context. Examples:</p>
  <ul class="surma"><b>r (ꠞ)</b> + SHIFT+6 ( ꠆ ) + <b>z (ꠒ)</b> should produce a conjunct: ꠞ꠆ꠒ</ul>
  <ul class="surma"><b>r (ꠞ)</b> + SHIFT+Y ( ꠆‌ ) + <b>z (ꠒ)</b> should produce a visible hasanta: ꠟ꠆‌ꠒ </ul>
  <ul class="surma"><b>r (ꠞ)</b> + SHIFT+H ( ꠬ ) + <b>z (ꠒ)</b> should produce the Bangla hasanta: ꠞ꠬ꠒ </ul>
  
<p>The <b>`</b> key is used to produce more characters:</p> 
	<ul class="surma"><b>`+</b> produces ⁕</p></ul>
	<ul class="surma"><b>`1</b> produces ꠨</p></ul>
	<ul class="surma"><b>`2</b> produces ꠩</p></ul>
	<ul class="surma"><b>`3</b> produces ꠪</p></ul>
	<ul class="surma"><b>`4</b> produces ꠫</p></ul>
	<ul class="surma"><b>`#</b> produces #</p></ul>
	<ul class="surma"><b>`$</b> produces $</p></ul>
	<ul class="surma"><b>`%</b> produces €</p></ul>

		
<div id='osk' data-states='default shift'>
</div>


