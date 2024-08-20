<?php
  $pagename = 'ᓀᐦᐃᔭᐍᐏᐣ Keyboard Help';
  $pagetitle = 'ᓀᐦᐃᔭᐍᐏᐣ Keyboard Help';
  $pagestyle = <<<END

table.keyboard-layer {
  margin: 12px;
  border-collapse:collapse;
  font-family: system-ui, -apple-system, "Segoe UI", Roboto, Tahoma, Euphemia, "Euphemia UCAS", "Aboriginal Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
table.keyboard-layer,
table.keyboard-layer td,
table.keyboard-layer th { border: 1px solid #888; }
table.keyboard-layer td {
  min-width: 1em;
  padding: 5px;
  text-align: center;
}
td.keyboard-layer__special { background-color: #fcc; }
td.keyboard-layer__empty { background-color: #888; }
END;

  require_once('header.php');
?>

<img src="plains_creeU_.png" />
<p>
    This keyboard is for writing <b>ᓀᐦᐃᔭᐍᐏᐣ</b> (Plains Cree Spirit Markers / syllabics).
</p>
<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>
<ul>
    <li>The on-screen keyboard shows each syllable in their final form and in their e-orientation (cosonants) or in
        their short and long form (vowels).</li>
    <li>The Spirit Markers / syllabics used to write ᓀᐦᐃᔭᐍᐏᐣ (Plains Cree) are typed phonetically. See <b><a
                href=plains_cree.pdf>this document</a></b> for a full list of how to type each Spirit Marker with the
        keyboard, and all of the special key combinations.</li>
    <ul>
        <li><b>ᓀᐦᐃᔭᐍᐏᐣ</b> is typed <b>nehiyawewin</b></li>
    </ul>
    </li>
    <li>By typing a single consonant or a key that's assigned to a consonant, the Spirit Marker / syllabic final form
        will appear on your screen. Following the consonant with a vowel will change the final into its full form, in
        the orientation corresponding with the vowel typed.
        <ul>
            <li>Typing the <kbd>k</kbd> key outputs <b>ᐠ</b>. If the <kbd>a</kbd> key is typed after, it will change to
                <b>ᑲ</b></li>
        </ul>
    </li>
    <li>To type a long vowel / add the top dot, type the vowel twice.
        <ul>
            <li><b>ᑳ</b> is typed <b>kaa</b></li>
        </ul>
    </li>
    <li>In the case of Spirit Markers / syllables with multiple finals, type the <b>left bracket key</b> <kbd>[</kbd> to
        keep the Spirit Markers / syllables separate.
        <ul>
            <li><b>ᐸᐦᐠᐍᓯᑲᐣ</b> is typed <b>pahk[wesikan</b></li>
        </ul>
    </li>
</ul>
<p></p>
<li>Punctuation
    <ul>
        <li>The narrow no-break space is typed <kbd>Shift</kbd>+<kbd>Space</kbd></b></li>
        <li><b>᙮</b> is typed with the period key <kbd>.</kbd></li>
        <li>single guillemets: ‹ <kbd>;</kbd> — › <kbd>'</kbd></li>
        <li>double guillemets: « <kbd>Shift</kbd>+<kbd>;</kbd> — » <kbd>Shift</kbd>+<kbd>'</kbd></li>
        <li>apostrophe and quotation mark: ' <kbd>Right-Alt</kbd>+<kbd>'</kbd> — "
            <kbd>Right-Alt</kbd>+<kbd>Shift</kbd>+</kbd><kbd>'</kbd></li>
        <li>Any modified punctuation can be typed using <b>Right-Alt</b> (Windows) or <b>Option</b> (Mac) + the original
            key
            <ul>
                <li><b>.</b> is typed <kbd>Right-Alt</kbd>+<kbd>.</kbd> / <kbd>⌥ Option</kbd>+<kbd>.</kbd></li>
                <li><b>[</b> is typed <kbd>Right-Alt</kbd>+<kbd>[</kbd> / <kbd>⌥ Option</kbd>+<kbd>[</kbd></li>
            </ul>
        </li>
        <li>All English letters can be typed by pressing <kbd>Right-Alt</kbd> (Windows) / <kbd>⌥ Option</kbd> (Mac)
            followed by the letter(s) you wish to type.</li>
        <li>All uppercase English letters can be typed by pressing <kbd>Shift</kbd>+<kbd>Right-Alt</kbd> (Windows) /
            <kbd>Shift</kbd>+<kbd>⌥ Option</kbd>
    </ul>
</li>
</ul>

<h2>Unicode Fonts</h2>
<p>The following fonts have been installed on your computer: <strong>Aboriginal Sans, Aboriginal Serif.</strong> Please
    use these fonts when typing in your language as they have been specially built to represent your language as
    accurately as possible. </p>
<h3><a href="http://www.languagegeek.com/font/fontdownload.html">Download the latest version of Aboriginal Sans and
        Aboriginal Serif</a></h3>
<hr>
</td>



<h2>Touch layout</h2>
<div class='cree'>
    <h3>Unshifted</h3>
    <table class="keyboard-layer">
        <tr>
            <td align='center'>ᐃ</td>
            <td>ᐱ</td>
            <td>ᑎ</td>
            <td>ᑭ</td>
            <td>ᒋ</td>
            <td>ᒥ</td>
            <td>ᓂ</td>
            <td>ᓯ</td>
            <td>ᔨ</td>
            <td>ᐦ</td>
        </tr>
        <tr>
            <td>ᐊ</td>
            <td>ᐸ</td>
            <td>ᑕ</td>
            <td>ᑲ</td>
            <td>ᒐ</td>
            <td>ᒪ</td>
            <td>ᓇ</td>
            <td>ᓴ</td>
            <td>ᔭ</td>
            <td>ᕽ</td>
        </tr>
        <tr>
            <td>⇧</td>
            <td>ᑊ</td>
            <td>ᐟ</td>
            <td>ᐠ</td>
            <td>ᐨ</td>
            <td>ᒼ</td>
            <td>ᐣ</td>
            <td>ᐢ</td>
            <td>ᐩ</td>
            <td>⌫</td>
        </tr>
        <tr>
            <td>123</td>
            <td>🌐</td>
            <td class="keyboard-layer__special">◌̇</td>
            <td colspan="4">space</td>
            <td class="keyboard-layer__special">◌ᐧ</td>
            <td>ᐤ</td>
            <td>⏎</td>
        </tr>
    </table>

    <h3>Shifted</h3>
    <table class="keyboard-layer">
        <tr>
            <td>ᐁ</td>
            <td>ᐯ</td>
            <td>ᑌ</td>
            <td>ᑫ</td>
            <td>ᒉ</td>
            <td>ᒣ</td>
            <td>ᓀ</td>
            <td>ᓭ</td>
            <td>ᔦ</td>
            <td>ᓬ</td>
        </tr>
        <tr>
            <td>ᐅ</td>
            <td>ᐳ</td>
            <td>ᑐ</td>
            <td>ᑯ</td>
            <td>ᒍ</td>
            <td>ᒧ</td>
            <td>ᓄ</td>
            <td>ᓱ</td>
            <td>ᔪ</td>
            <td>ᕒ</td>
        </tr>
        <tr>
            <td>⇧</td>
            <td class="keyboard-layer__empty" colspan="2"></td>
            <td>ᖧ</td>
            <td>ᖨ</td>
            <td>ᖪ</td>
            <td>ᖬ</td>
            <td>ᖮ</td>
            <td class="keyboard-layer__empty"></td>
            <td>⌫</td>
        </tr>
        <tr>
            <td>123</td>
            <td>🌐</td>
            <td class="keyboard-layer__special">◌̇</td>
            <td colspan="4">space</td>
            <td class="keyboard-layer__special">◌ᐧ</td>
            <td>ᐤ</td>
            <td>⏎</td>
        </tr>
    </table>
    <aside>Keys with a red background are combining accents.</aside>
</div>

<h2>Keyboard Layout</h2>
<div id='osk' data-states='default shift numeric'></div>