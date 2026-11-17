<?php 
  $pagename = "Dinka (DILDA) Keyboard Help";
  $pagetitle = $pagename;
  require_once('header.php');
?>

<p>A keyboard layout for the Dinka (Thuɔŋjäŋ) language, based on the <strong>Grammar of Unified Thuɔŋjäŋ</strong> published by DILDA (Akutmɛ̈t Latueŋ Thuɔŋjäŋ), Juba, South Sudan, 2021.</p>

<div id='osk'>
</div>

<h2>Usage notes</h2>

<h3>Acute tones (creaky high tone)</h3>

<p>Press the apostrophe key <kbd>'</kbd> followed by a vowel to produce an acute tone:</p>

<p><kbd>'</kbd><kbd>a</kbd> → á &nbsp;|&nbsp; <kbd>'</kbd><kbd>e</kbd> → é &nbsp;|&nbsp; <kbd>'</kbd><kbd>i</kbd> → í &nbsp;|&nbsp; <kbd>'</kbd><kbd>o</kbd> → ó &nbsp;|&nbsp; <kbd>'</kbd><kbd>u</kbd> → ú</p>

<p>Extended vowels: <kbd>'</kbd><kbd>s</kbd> → ɛ́ &nbsp;|&nbsp; <kbd>'</kbd><kbd>x</kbd> → ɔ́</p>

<h3>Diaeresis (breathy voice)</h3>

<p>Press the semicolon key <kbd>;</kbd> followed by a vowel to produce a diaeresis:</p>

<p><kbd>;</kbd><kbd>a</kbd> → ä &nbsp;|&nbsp; <kbd>;</kbd><kbd>e</kbd> → ë &nbsp;|&nbsp; <kbd>;</kbd><kbd>i</kbd> → ï &nbsp;|&nbsp; <kbd>;</kbd><kbd>o</kbd> → ö &nbsp;|&nbsp; <kbd>;</kbd><kbd>u</kbd> → ü</p>

<p>Extended vowels: <kbd>;</kbd><kbd>s</kbd> → ɛ̈ &nbsp;|&nbsp; <kbd>;</kbd><kbd>x</kbd> → ɔ̈</p>

<h3>Circumflex tones (breathy high tone)</h3>

<p>Press <kbd>Shift</kbd><kbd>^</kbd> followed by a vowel to produce a circumflex:</p>

<p><kbd>Shift</kbd><kbd>^</kbd><kbd>a</kbd> → â &nbsp;|&nbsp; <kbd>Shift</kbd><kbd>^</kbd><kbd>e</kbd> → ê &nbsp;|&nbsp; <kbd>Shift</kbd><kbd>^</kbd><kbd>i</kbd> → î &nbsp;|&nbsp; <kbd>Shift</kbd><kbd>^</kbd><kbd>o</kbd> → ô &nbsp;|&nbsp; <kbd>Shift</kbd><kbd>^</kbd><kbd>u</kbd> → û</p>

<p>Extended vowels: <kbd>Shift</kbd><kbd>^</kbd><kbd>s</kbd> → ɛ̂ &nbsp;|&nbsp; <kbd>Shift</kbd><kbd>^</kbd><kbd>x</kbd> → ɔ̂</p>

<h3>Long breathy vowels</h3>

<p>There are a few optimisations for typing long breathy vowels. There is the default way, pressing the key for the base vowel and then the diaeresis key, then repeating, ie to type <strong>ɔ̈ɔ̈</strong> you would type <kbd>x</kbd><kbd>;</kbd><kbd>x</kbd><kbd>;</kbd>. The keyboard will also allow you to type <kbd>x</kbd><kbd>x</kbd><kbd>;</kbd> to generate <strong>ɔ̈ɔ̈</strong>.</p>

<p>On touch devices (iPad, iPhone, Android phones and tablets), accented vowels can be entered by holding down the vowel key (referred to as long-press). Long-press any vowel to see acute, diaeresis, and circumflex variants. The iPad and Android tablets also have a diaeresis key to allow typing similar to a desktop computer or laptop.</p>

<h3>Digraphs</h3>

<p>The digraphs <strong>th</strong>, <strong>dh</strong>, <strong>nh</strong>, and <strong>ny</strong> are typed by pressing both keys. On touch devices, they are also available as long-press options on their base consonant keys.</p>

<h3>Backspace key</h3>

<p><kbd>Back Space</kbd> will delete a single letter, including accented vowels.</p>

<p><kbd>Shift</kbd><kbd>Back Space</kbd> will delete the diacritical mark from an accented vowel.</p>

<p><kbd>Ctrl</kbd><kbd>Back Space</kbd> will delete a long breathy vowel.</p>

<h2>Tablet Keyboard Layout</h2>
<div id='osk-tablet' data-states='default shift numeric'></div>

<h2>Acknowledgments</h2>

<p>This keyboard uses work from the original <strong>el_dinka</strong> keyboard (MIT license). The original keyboard provided the base layout, character mappings, and touch layout structure that were enhanced for DILDA compliance.</p>

