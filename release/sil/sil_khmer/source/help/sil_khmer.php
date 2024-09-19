<?php 
  $pagename = 'Khmer (SIL) Keyboard Help';
  $pagetitle = 'Khmer (SIL) Keyboard Help';
  // Header we will tidy up later  
  require_once('header.php');

?>

<p>
    This keyboard is designed for any languages using the Khmer script. This keyboard is very similar to the Khmer ABS keyboard, but it is a Unicode keyboard.
</p>
  <p>The layouts below output all the characters in this keyboard. However, there are alternate methods to access the same keys with other keystrokes. Some of these are described below:</p>
    <ul>
      <li><p>All "feet" are accessible through first typing ";" and then the letter for which the foot is desired.</p></li>
      <li><p>Typing "b" followed by "a" or "A" automatically produces the "បា" and "បៅ" respectively.</p></li>
	    <li><p>The symbols of the moon calendar (᧠, ᧪...) can also be typed.</p>
      <ul>
          <li><p>For computers: typing the numbers with ">" two times. For example:</p>
                <ol>
                  <li><p>Typing <kbd>0</kbd> + <kbd>8</kbd> + <kbd>></kbd> and <kbd>></kbd> will give the same symbol as Ctrl-Alt-Shift-`.</p></li>
                  <li><p>Typing <kbd>1</kbd> + <kbd>0</kbd> + <kbd>></kbd> and <kbd>></kbd> will give the same symbol as Ctrl-Alt-Shift-0.</p></li>
                </ol>
            </li>
        </ul>
      </li>
    </ul>
  <p>Many of the alternate characters and a few vowels can be accessed by typing one or more <ins>commas</ins> (<kbd>,</kbd>) after the initial keystroke. 
    <br>To get arabic numbers type first the Khmer number, then a comma. A further comma will result in a lesser used type of number in Khmer, a third comma will revert the symbol to the Khmer number.
    Many of the symbols, vowels, independent vowels, and diacritics work this way. For example:</p>
    <ul>
    <li><p>Start with <kbd>\</kbd> , or type <kbd>ឮ</kbd> on mobile, produces "ឮ":
      <ul>
        <li><p><kbd>ឮ</kbd> + <kbd>,</kbd> produces "ឭ" </p></li>
        <li><p><kbd>ឭ</kbd> + <kbd>,</kbd> produces "ឰ". </p></li>
        <li><p><kbd>ឰ</kbd> + <kbd>,</kbd> produces "ឮ". </p></li>
      </ul>
    </li>
    <li><p>Typing <kbd>{</kbd> , on mobile type <kbd>ឪ</kbd>, produces "ឪ":</p>
      <ul>
        <li><p><kbd>ឪ</kbd> + <kbd>,</kbd> produces "ឱ" </p></li>
        <li><p><kbd>ឱ</kbd> + <kbd>,</kbd> produces "ឳ". </p></li>
        <li><p><kbd>ឳ</kbd> + <kbd>,</kbd> produces "ឪ". </p></li>
      </ul>
    </li>
    <li>
      <p>The same logic applies to ឥ or type "}": ឥ ឯ ឧ</p>
    <ul>
        <li><p><kbd>ឥ</kbd> + <kbd>,</kbd> produces "ឯ" </p></li>
        <li><p><kbd>ឯ</kbd> + <kbd>,</kbd> produces "ឧ". </p></li>
        <li><p><kbd>ឧ</kbd> + <kbd>,</kbd> produces "ឥ". </p></li>
      </ul>
    </li>
    <li>
      <p>The same logic applies to ឬ or type "|": ឬ ឫ ឩ</p>
      <ul>
          <li><p><kbd>ឬ</kbd> + <kbd>,</kbd> produces "ឫ" </p></li>
          <li><p><kbd>ឫ</kbd> + <kbd>,</kbd> produces "ឩ". </p></li>
          <li><p><kbd>ឩ</kbd> + <kbd>,</kbd> produces "ឬ". </p></li>
        </ul>
      </li>
    <li>
      <p>The same logic applies to Khmer Sign Avakrahasanya ៜ:</p>
      <ul>
        <li><p><kbd>ៜ</kbd> + <kbd>,</kbd> produces "ឨ". </p></li>
        <li><p><kbd>ឨ</kbd> + <kbd>,</kbd> produces "ៜ". </p></li>
      </ul>
    </li>
    <li>
      <p>The same logic applies to ឲ្យ or type "[": ឲ្យ ឲ</p>
      <ul>
          <li><p><kbd>ឲ្យ</kbd> + <kbd>,</kbd> produces "ឲ" </p></li>
        </ul>
      </li>
    <li>
      <p>On the keyboard, there is a ខ្ញុំ key that applies the same logic to get ឦ or type "]":</p>
      <ul>
          <li><p><kbd>ខ្ញុំ</kbd> + <kbd>,</kbd> produces "ឦ" </p></li>
      </ul>
    </li>
    <li>
      <p>The same logic applies to ។ or type ">": ។ ៕ ៚ ៘</p>
      <ul>
          <li><p><kbd>។</kbd> + <kbd>,</kbd> produces "៕" </p></li>
          <li><p><kbd>៕</kbd> + <kbd>,</kbd> produces "៚". </p></li>
          <li><p><kbd>៚</kbd> + <kbd>,</kbd> produces "៘". </p></li>
          <li><p><kbd>៘</kbd> + <kbd>,</kbd> produces "។". </p></li>
        </ul>
      </li>
    <li>
      <p>The same logic applies some vowels such as: ា ​េា  ៃ</p>
      <ul>
        <li><p><kbd>ា</kbd> + <kbd>,</kbd> produces "ោ" (not the same as <kbd>េ</kbd> + <kbd>ា</kbd>)</p></li>
        <li><p><kbd>ោ</kbd> + <kbd>,</kbd> produces <i>U+17B5</i> "◌឵". </p></li>
        <li><p><kbd>◌឵</kbd> + <kbd>,</kbd> produces <i>U+17B4</i> "◌឴". </p></li>
        <li><p><kbd>◌</kbd> + <kbd>,</kbd> produces "឴ា". </p></li>
        <li><p><kbd>េ</kbd> + <kbd>,</kbd> produces "ៃ". </p></li>
      </ul>
    </li>
    <li>
      <p>To output េាះ correctly, you must use it with a consonant. First choose a consonant to your liking then:</p>
      <ul>
        <li><p><kbd>ា</kbd> + <kbd>,</kbd> produces "ោ" </p></li>
        <li><p><kbd>ះ</kbd> + <kbd>,</kbd> produces "ោះ", if not it will produce as seperate vowels. </p></li>
      </ul>
    </li>
    <li>
      <p>The same logic applies most of the diacritics such as: ័  ៍  ៏  ៌</p>
      <ul>
        <li><p><kbd>័</kbd> + <kbd>,</kbd> produces " ៌". </p></li>
        <li><p><kbd>឵ ៌឵</kbd> + <kbd>,</kbd> produces "័឴". </p></li>
        <li><p><kbd> ៍</kbd> + <kbd>,</kbd> produces "឴ ៏". </p></li>
        <li><p><kbd> ៏</kbd> + <kbd>,</kbd> produces "៍". </p></li>
      </ul>
    </li>
    <li><p>Typing "(" or ")" followed by one or more commas will give different kinds of braces "( ​[ ​{ ​<​".</p></li>
    <li><p>Typing "/" followed by one or more commas will give different kinds of punctuation "\ ​.​ ,​".</p></li>
    <li><p>Typing single quote <kbd>'</kbd> followed by one or more commas will output "◌ ៊ “ «", and typing double quote <kbd>"</kbd> followed by one or more commas will output "◌៊ “ «".</p></li>
    <li>
      <p>Other symbols such as: ៙ ៓ and more!</p>
      <ul>
        <li><p><kbd>*</kbd> + <kbd>,</kbd> produces " ៙". </p></li>
        <li><p><kbd>឵៙</kbd> + <kbd>,</kbd> produces "*". </p></li>
        <li><p><kbd>~</kbd> + <kbd>,</kbd> produces "឴  ៓". </p></li>
        <li><p><kbd> ៓</kbd> + <kbd>,</kbd> produces "~". </p></li>
      </ul>
    </li>
  </ul>
  <p>Experiment using commas with other keys to see what we haven't covered yet.</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift alt ctrl shift-ctrl ctrl-alt shift-ctrl-alt'>
</div>

  <h2>Mobile/tablet layouts</h2>

    <p>Due to the size and number of keys, some characters are hidden in the long press. 
        Press and hold on the key with a little dot on the top right to reveal and use them.</p>
<div id='osk-tablet' data-states='default shift ctrl-alt shift-ctrl-alt'>
</div>