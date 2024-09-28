<?php 
  $pagename = 'Pulaar Ajamiya (Qwerty) Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>

<p>
  This is a Qwerty-based keyboard for the Pulaar language of Senegal using the Ajamiya script. 
</p>

<h1>Keyboard Layout</h1>
<p>This keyboard makes use of rotas for a few characters. For example: typing &lt; twice will produce &#x2039; and typing it three times will produce &#x00AB;. It works with &gt; to produce &#x203A; and &#x00BB;.</p>

<p>It may be difficult to tell, but kashida is on the SHIFT+7 key, and the ampersand is available on the RALT+7 key.</p>
<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt'>
</div>

<h2>Mobile/Phone Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-phone' data-states='default shift numeric'>
</div>

</body>
</html>