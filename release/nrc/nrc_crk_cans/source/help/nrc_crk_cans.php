<?php
  $pagename = 'ᓀᐦᐃᔭᐍᐏᐣ (Cree Syllabics) Keyboard Help';
  $pagetitle = 'ᓀᐦᐃᔭᐍᐏᐣ (Cree Syllabics) Keyboard Help';
  $pagestyle = <<<END

.lang2, [lang=cr], [lang=crk] {font-family:"Noto Sans", "Gadugi", "Euphemia UACS", Euphemia, sans-serif}
kbd { display: inline-block; box-sizing: border-box; border-radius: 4px; min-width: 1.5em; padding: 0 .25em; background-color: #EEE; text-align: center; box-shadow: 0 1px 1px 1px rgba(0,0,0,0.2); }
kbd.special { padding: .1rem .25rem; font-size: small; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; }
kbd.spacebar { min-width: 4em }
kbd.nnbsp { min-width: 2em }
figure { box-sizing: border-box; width: 100%; margin: 0; text-align: center }
figure > img { max-width: 100%; }
END;
  require_once('header.php');
?>

<p>
  This keyboard is for typing nêhiyawêwin/Plains Cree/Cree Y-Dialect in
  syllabics (ᒐᐦᑭᐯᐦᐃᑲᓇ) on smartphones (e.g., Android/iPhone).
</p>

<h3>Alternate Names</h3>
<ul>
    <li>Plains Cree</li>
    <li>Cree Y-dialect</li>
</ul>

<h2>Tutorial</h2>

<p> This ᓀᐦᐃᔭᐍᐏᐣ (Cree Syllabics) keyboard is a <em>phonetic</em>
keyboard. That is, <strong>you type the way you say it in Cree</strong>. </p>

<p> For example, the word
<strong><span title="kîkway" lang="crk">ᑮᑿᕀ</span></strong>:
it's spoken as <strong> ᐠ + ᐄ + ᐠ +  ᐤ + ᐊ + ᕀ </strong></p>

<p> To type <span title="kîkway" lang="crk">ᑮᑿᕀ</span> on this keyboard,
first press the first sound of <strong>ᑮ</strong>, which is <kbd>ᐠ</kbd>:</p>

<figure>
  <img alt="Pressing ᐠ" src="press-k.jpg" />
</figure>

<p> The keyboard has changed, and now the vowels (ᐁ ᐃ ᐅ ᐊ ᐄ ᐆ ᐋ) have
been replaced by all syllables starting with the <strong>ᐠ</strong> sound
(ᑫ ᑭ ᑯ ᑲ ᑮ ᑰ ᑳ, respectively). </p>

<figure>
  <img alt="Vowels replaced with ᑫ ᑭ ᑯ ᑲ ᑮ ᑰ ᑳ" src="layout-kv.jpg" />
</figure>

<p>Now, press <kbd>ᑮ</kbd>.</p>

<p>Pressing <kbd>ᑮ</kbd> replaces <strong>ᐠ</strong> with
  <strong>ᑮ</strong>, the first syllabic of ᑮᑿᕀ.</p>

<p> The next syllabic starts with the sound <kbd>ᐠ</kbd> yet again, so
  press <kbd>ᐠ</kbd>. We're back to this screen: </p>

<figure>
  <img alt="Vowels replaced with ᑫ ᑭ ᑯ ᑲ ᑮ ᑰ ᑳ" src="layout-kv.jpg" />
</figure>

<p> But this time, the syllabic we want to type, <strong>ᑿ</strong>, is
  nowhere to be found on the screen! This is because the next sound in
  the syllabic is <strong>ᐤ</strong>. We need to add the dot that makes
  the <strong>ᐤ</strong> sound. To do this, press <kbd>ᐤ</kbd>. </p>

<figure>
  <img alt="Pressing ᐤ after ᐠ" src="press-w.jpg" />
</figure>

<p>After pressing this, the keys will have
  changed yet again, with all of the syllables being replaced with
  syllables that start with the <strong>ᐠᐤ</strong> sounds, namely, ᑵ ᑷ ᑻ
  ᑿ ᑹ ᑽ ᒁ:</p>

<figure>
  <img alt="Syllables replaced with ᑵ ᑷ ᑻ ᑿ ᑹ ᑽ ᒁ" src="layout-kwv.jpg" />
</figure>

<p> Now, we can press the syllable we want: <kbd>ᑿ</kbd>. </p>

<p> Our keyboard is back on the default screen. </p>

<p>Finally, we want to type <strong>ᕀ</strong>. Tap the <kbd>ᕀ</kbd> key,
   and our word is complete!</p>

<figure>
  <img alt="pressing ᕀ" src="press-y.jpg" />
</figure>

<p>In this way, every word is typed phonetically &mdash; just as it sounds. </p>


<h2>Normal and half spacebar</h2>

<p> This keyboard has two spacebars: the normal spacebar
<kbd class="spacebar">&nbsp;&nbsp;&nbsp;&nbsp;</kbd> on the very bottom row of the
keyboard, and the <em>half spacebar</em> <kbd class="nnbsp">&nbsp;&nbsp;</kbd>, on the
second-to-bottom row. The half spacebar is not only half the size of a
normal spacebar on the keyboard, but it also inserts a thinner space. </p>

<h3>When do I use the half spacebar?</h3>

<p>When you want to separate components <strong>within a
word</strong>.</p>

<p>If you are familiar with Cree standard Roman orthography (SRO), you use a
half space <kbd class="nnbsp">&nbsp;&nbsp;</kbd> whenever you'd use a hyphen in SRO. For
example, in <span lang="cr">ê-itwêt</span>, you would write it in
syllabics on this keyboard by typing <kbd>ᐁ</kbd>
<kbd class="nnbsp">&nbsp;&nbsp;</kbd> <kbd>ᐃ</kbd> <kbd>ᐟ</kbd>
<kbd>ᐤ</kbd> <kbd>ᑘ</kbd> <kbd>ᐟ</kbd>
(<span lang="cr">ᐁ&#x202F;ᐃᑘᐟ</span>).</p>

<p>Other examples are complex words like
<strong><span lang="cr">ᓂᓇᓅᐦᑌ&#x202F;ᓂᐹᐣ</span></strong>. This is one
word, but you can see it has two: the beginning,
<strong><span lang="cr">ᓂᓇᓅᐦᑌ</span></strong> (eng. “I always want to...”)
and the core part of the word,
<strong><span lang="cr">ᓂᐹᐣ</span></strong> (eng. “sleep”).
Use the half space <kbd class="nnbsp">&nbsp;&nbsp;</kbd> between the two
parts of the word to insert a small gap between the two parts. The small
gap is subtle but noticable &mdash; not as large as a normal space, which
would indicate a new word.</p>

<p>Unlike the normal space, the half space <strong>is not a
word-breaker</strong>. This means that, when apps see a half-space in a
word, they will treat it and its surrounding syllabics as one whole word,
rather than breaking it apart and treating it as several smaller words.</p>


<h2>Keyboard layout</h2>

<h3>Default</h3>
<figure>
  <img alt="Default layout" src="layout-default.jpg" />
</figure>

<h3>Consonant pressed</h3>
<p> A similar layout will appear when pressing <kbd>ᑊ</kbd>,
<kbd>ᐟ</kbd>, <kbd>ᐠ</kbd>, <kbd>ᐨ</kbd>, <kbd>ᒼ</kbd>, <kbd>ᐣ</kbd>,
<kbd>ᐢ</kbd>, or <kbd>ᕀ</kbd>. </p>
<figure>
  <img alt="Layout after pressing ᐠ" src="layout-kv.jpg" />
</figure>

<h3>Consonant and ᐤ pressed</h3>
<p> A similar layout will appear when pressing <kbd>ᐤ</kbd> after having
already pressed <kbd>ᑊ</kbd>, <kbd>ᐟ</kbd>, <kbd>ᐠ</kbd>, <kbd>ᐨ</kbd>,
<kbd>ᒼ</kbd>, <kbd>ᐣ</kbd>, <kbd>ᐢ</kbd>, or <kbd>ᕀ</kbd>. </p>
<figure>
  <img alt="Layout after pressing ᐠᐤ" src="layout-kwv.jpg" />
</figure>

<h3>ᐤ pressed</h3>
<figure>
  <img alt="layout after pressing ᐤ" src="layout-wv.jpg" />
</figure>

<h3>Numeric</h3>
<p>After pressing <kbd class="special">123</kbd> from any other screen.</p>
<figure>
  <img alt="Numeric layout" src="layout-numeric.png" />
</figure>

<h3>Punctuation Subkeys</h3>
<p> Obtain this pop-up by pressing-and-holding the <kbd>᙮</kbd> key near
    the bottom-right corner of the keyboard.</p>
<figure>
  <img alt="Punctuation subkeys" src="layout-punctuation.png" />
</figure>

<hr/>

<p>© National Research Council Canada</p>
