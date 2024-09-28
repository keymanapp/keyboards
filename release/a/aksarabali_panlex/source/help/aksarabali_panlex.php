<?php
  $pagename = 'Aksara Bali Keyboard Help';
  $pagetitle = 'Aksara Bali Keyboard Help';
  $style = <<<EXTRA
  span.bali {font-family: "Vimala","Noto Sans Balinese"; font-size: 12pt }
EXTRA;
  require_once('header.php');
?>

<p>This keyboard lets you type Aksara Bali (Balinese script) in Unicode. It is a Unicode reimplementation of the Bali Simbar keyboard (the de-facto standard keyboard in Bali for typing in Balinese script).</p>

<p>The keyboard follows the Bali Simbar keyboard as closely as possible. Basic usage is as follows:</p>

<ul>
    <li>Type according to Balinese Latin orthography. For example, [W] [A] [Y] [A] [N] [space] types ⟨<span class='bali'>ᬯᬬᬦ᭄</span>⟩.</li>
    <li>Right after you type a consonant, a question mark ⟨<span class='bali'>?</span>⟩ appears after it. This indicates that the input is incomplete and you still need to type a vowel, consonant, or punctuation mark. The question mark automatically disappears after subsequent input.</li>
    <li>It is important to type [space] at the end of each word. This does not actually insert a space, but tells the keyboard not to apply certain automatic changes. For example, <em>bapan ceningé</em> typed without a space is incorrect: ⟨<span class='bali'>ᬩᬧᬜ᭄ᬘᭂᬦᬶᬗᬾ</span>⟩. Using [space], the result is the correct ⟨<span class='bali'>ᬩᬧᬦ᭄ᬘᭂᬦᬶᬗᬾ</span>⟩. In order to use explicit <em>adeg-adeg</em> between words, type [space] twice: ⟨<span class='bali'>ᬩᬧᬦ᭄‌ᬘᭂᬦᬶᬗᬾ</span>⟩. To insert a space character, type [Shift-space].</li>
    <li>In order to override certain automatic changes after consonants, you may occasionally need to type [/]. This blocks various changes by inserting <em>adeg-adeg</em>. For example, typing [R] [/] ensures that [ᬭ] will not be converted to <em>surang</em>.
    <li>The most common modifiers are Shift, Ctrl, and Ctrl-Shift. For example, [B] [E] types ⟨<span class='bali'>ᬩᭂ</span>⟩, [B] [Shift-E] types ⟨<span class='bali'>ᬩᬾ</span>⟩, and [Ctrl-Shift-E] types ⟨<span class='bali'>ᬏ</span>⟩; [S] types ⟨<span class='bali'>ᬲ</span>⟩ and [S] [Ctrl-'] types ⟨<span class='bali'>ᬰ</span>⟩.</li>
</ul>

<p>This keyboard contains several additions to the original Bali Simbar keyboard:</p>

<ul>
    <li>[/] types <em>adeg-adeg</em>.</li>
    <li>[Ctrl-/] types ZWNJ (zero-width non-joiner). This may be used to prevent certain ligatures. For example, [L] [E] [Ctrl-A] types ⟨<span class='bali'>ᬎ</span>⟩, while [L] [E] [Ctrl-/] [Ctrl-A] types ⟨<span class='bali'>ᬍ‌ᬵ</span>⟩.
    <li>[Ctrl-Shift-/] types ⟨<span class='bali'>/</span>⟩.</li>
    <li>[Shift-number] types Arabic numerals. For example, [Shift-1] types ⟨<span class='bali'>1</span>⟩.
    <li>[Ctrl-Alt-O] types <em>windu</em> ⟨<span class='bali'>᭜</span>⟩.</li>
    <li>[Ctrl-Shift-,] types ⟨<span class='bali'>᭚᭜᭚</span>⟩. Repeat for ⟨<span class='bali'>᭟᭜᭟</span>⟩.</li>
    <li>[Ctrl-Shift-.] types ⟨<span class='bali'>᭛᭜᭛</span>⟩. Repeat for ⟨<span class='bali'>᭟᭜᭟</span>⟩.</li>
    <li>[Alt-vowel] types a dependent vowel even in places where it normally isn’t allowed. For example, [P] [I] [Alt-U] lets you type ⟨<span class='bali'>ᬧᬶᬸ</span>⟩, with <em>suku</em> after <em>ulu</em>. This is attested as a way to indicate a scribal error.</li>
    <li>[Alt-R] types <em>rerekan</em>. For example, [P] [Alt-R] types ⟨<span class='bali'>ᬧ᬴</span>⟩.</li>
</ul>

<p>For much more detailed information, read the original <a href="bali_simbar_panduan.pdf">Bali Simbar keyboard guide</a> (in Indonesian), included with the permission of author I Made Suatjana. Keyboard instructions begin on page 8.</p>
