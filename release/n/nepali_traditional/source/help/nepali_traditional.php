<?php 
  $pagename = 'Nepali Traditional Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
	  	key, span.kbd { background: none repeat scroll 0% 0% #F7F7F7; padding: 0.1em 0.6em; border: 1px solid #CCC; font-size: 10pt; color: #333; box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 2px #FFF inset; border-radius: 3px; display: inline-block; margin: 0px 0.1em; text-shadow: 0px 1px 0px #FFF; line-height: 1.4; white-space: nowrap;
	}
END;
  require_once('header.php');
?>

  <p>
Traditional Layout for Nepali in Devanagiri script with dead keys support for special characters
  </p>

<h1>Keyboard Layout</h1>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>
<h3>Use dead key <key>{</key> for special characters like ! , @ etc</h3>
	<p><key>{</key> <key>!</key> = ! </p>
	<p><key>{</key> <key>@</key> = @ </p>
<a href="http://nepalitankan.blogspot.com/2013/10/nepali-traditional.html">Detailed instructions</a>	

<h2>Tablet Keyboard Layout</h2>
Similar to desktop layout for most part, except for some long press keys. Wherever a long press menu is available, there is a small dot on right top of the key. Symbols that required dead key combinations are in symbols layer as well.
<div id='osk-tablet' data-states='default shift symbol'>
</div>

<h2>Phone Keyboard Layout</h2>
While most of the layout remains the same as in desktop version, numerals have been moved to separate layer and some characters have been moved to longpress menu to account for limited screen estate. Wherever a long press menu is available, there is a small dot on right top of the key. 
<div id='osk-phone' data-states='default shift numeric'>
</div>
<h3>Notable longpresses </h3>
		<ul>
		<li><key>ी</key><key>इ</key><key>ई</key> are in <key>ि</key></li>
		<li><key>ै</key><key>ए</key><key>ऐ</key> are in <key>े</key></li>
		<li><key>ू</key><key>उ</key><key>ऊ</key> are in <key>ु</key></li>
		<li><key>zwj</key><key>zwnj</key> are in <key>्</key></li>
		<li><key>र्‍</key> is in <key>र</key></li>
		<li><key>ष</key> is in <key>स</key></li>
		<li><key>क्ष</key> is in <key>क</key></li>
		<li><key>ज्ञ</key> is in <key>ज</key></li>
		</ul>

<p>For Android and iOS, you may use long press key combinations.</p>
