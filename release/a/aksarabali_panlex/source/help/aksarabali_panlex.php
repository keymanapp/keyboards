<?php
  $pagename = 'Aksara Bali Unicode Keyboard Help';
  $pagetitle = 'Aksara Bali Unicode Keyboard Help';
  require_once('header.php');
?>

<p>The keyboard follows the Bali Simbar keyboard as closely as possible. Basic usage is as follows:</p>

<ul>
    <li>Type according to Balinese Latin orthography. For example, [w] [a] [y] [a] [n] [space] types [ᬯᬬᬦ᭄].</li>
    <li>Right after you type a consonant, a question mark (?) appears after it. This indicates that the input is incomplete and you still need to type a vowel, consonant, or punctuation mark. The question mark automatically disappears after subsequent input.</li>
    <li>It is important to type [space] at the end of each word. This does not actually insert a space, but tells the keyboard not to apply certain automatic changes. For example, <em>bapan ceningé</em> typed without a space is incorrect: [ᬩᬧᬜ᭄ᬘᭂᬦᬶᬗᬾ]. Using [space], the result is the correct [ᬩᬧᬦ᭄ᬘᭂᬦᬶᬗᬾ]. In order to use explicit <em>adeg-adeg</em> between words, type [space] twice: [ᬩᬧᬦ᭄‌ᬘᭂᬦᬶᬗᬾ]. To insert a space character, type [Shift-space].</li>
    <li>In order to override certain automatic changes after consonants, you may occasionally need to type [/]. This blocks various changes by inserting <em>adeg-adeg</em>. For example, typing [r] [/] ensures that [ᬭ] will not be converted to <em>surang</em>.
    <li>The most common modifiers are Shift and Ctrl-Shift. For example, [b] [e] types [ᬩᭂ] and [b] [Shift-e] types [ᬩᬾ]; [s] types [ᬲ] and [s] [Ctrl-'] types [ᬰ].</li>
</ul>

<p>This keyboard contains several additions to the original Bali Simbar keyboard:</p>

<ul>
    <li>[/] types <em>adeg-adeg</em></li>
    <li>[Ctrl-Shift-/] types [/]</li>
    <li>[Shift-number] types Arabic numerals, for example [Shift-1] types [1]
    <li>[Ctrl-r] types <em>rerekan</em>, for example [p] [Ctrl-r] types [ᬧ᬴]</li>
    <li>[Ctrl-Alt-o] types <em>windu</em> [᭜]</li>
    <li>[Ctrl-Shift-,] types [᭚᭜᭚], repeat for [᭟᭜᭟]</li>
    <li>[Ctrl-Shift-.] types [᭛᭜᭛], repeat for [᭟᭜᭟]</li>
</ul>

<p>For much more detailed information, read the original <a href="bali_simbar_panduan.pdf">Bali Simbar keyboard guide</a> (in Indonesian), included with the permission of author I Made Suatjana. Keyboard instructions begin on page 8.</p>
