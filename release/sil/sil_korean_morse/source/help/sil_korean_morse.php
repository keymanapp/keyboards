<?php /*
  Name:        Korean Morse
  Copyright: 2006-2011
  Description: The Korean Morse keyboard creates Korean hangeul from jamo each time you press Spacebar.

The Korean Morse keyboard is built to type Korean using the Morse transliteration system, also called SKATS (Standard Korean Alphabet Transliteration System). The Morse system is designed to make Latin-Korean transliteration 100% unambiguous.

The Morse system is not based on the pronunciation of Korean, but is an historical system created by pairing each Korean jamo with the Latin letter that uses the same Morse code value. The system is used among government and military organisations for whom data accuracy is essential. For an alternative accurate transliteration system, based on Korean pronunciation, use the Korean KORDA keyboards.
  Authors:     Tavultesoft Pty Ltd
*/
  $pagename = 'Korean Morse (SIL) Keyboard Help';
  $pagetitle = 'Korean Morse (SIL) Keyboard Help';
  $pagestyle = "@import url('style.css');";
  require_once('header.php');
?>

    <h2>Overview</h2>
    <p>The Korean Morse (SIL) keyboard is built to type Korean using the Morse transliteration system, also called SKATS (Standard Korean Alphabet Transliteration System). The Morse system is designed to make Latin-Korean transliteration 100% unambiguous.</p>
    <p>The Morse system is not based on the pronunciation of Korean, but is an historical system created by pairing each Korean jamo with the Latin letter that uses the same Morse code value. The system is used among government and military organisations for whom data accuracy is essential. For an alternative accurate transliteration system, based on Korean pronunciation, use the Korean KORDA keyboards.</p>
    <p>The Korean Morse (SIL) keyboard creates hangeul syllables from jamo each time you press <kbd>Spacebar</kbd>.</p>
    <h4>On Screen Keyboard</h4>
    <p>This keyboard includes an On Screen Keyboard view for easy reference. The On Screen Keyboard works best when associated with a QWERTY US layout.</p>
    <h4>Fonts</h4>
    <p>This is a Unicode keyboard and works with any Unicode font which has support for Korean characters. Common fonts which work with this keyboard are:</p>
    <ul class='columns'>
        <li>Arial Unicode MS</li>
        <li>Batang</li>
        <li>Dotum</li>
        <li>Gulim</li>
        <li>Gungsuh</li>
        <li>Malgun Gothic</li>
    </ul>

   <h2>Keyboard Layout</h2>
    <h3 style="clear:left">Korean Morse (SIL) Keyboard</h3>
    <div class="key plain" id="K_BKQUOTE">
    <div class="keycap">`</div>
    <div class="keytext">`</div>
    </div>
    <div class="key plain" id="K_1">
    <div class="keycap">1</div>
    <div class="keytext">1</div>
    </div>
    <div class="key plain" id="K_2">
    <div class="keycap">2</div>
    <div class="keytext">2</div>
    </div>
    <div class="key plain" id="K_3">
    <div class="keycap">3</div>
    <div class="keytext">3</div>
    </div>
    <div class="key plain" id="K_4">
    <div class="keycap">4</div>
    <div class="keytext">4</div>
    </div>
    <div class="key plain" id="K_5">
    <div class="keycap">5</div>
    <div class="keytext">5</div>
    </div>
    <div class="key plain" id="K_6">
    <div class="keycap">6</div>
    <div class="keytext">6</div>
    </div>
    <div class="key plain" id="K_7">
    <div class="keycap">7</div>
    <div class="keytext">7</div>
    </div>
    <div class="key plain" id="K_8">
    <div class="keycap">8</div>
    <div class="keytext">8</div>
    </div>
    <div class="key plain" id="K_9">
    <div class="keycap">9</div>
    <div class="keytext">9</div>
    </div>
    <div class="key plain" id="K_0">
    <div class="keycap">0</div>
    <div class="keytext">0</div>
    </div>
    <div class="key plain" id="K_HYPHEN">
    <div class="keycap">-</div>
    <div class="keytext">-</div>
    </div>
    <div class="key plain" id="K_EQUAL">
    <div class="keycap">=</div>
    <div class="keytext">=</div>
    </div>
    <div class="key special" id="K_BKSP">
    <div class="keycap">Backspace</div>
    </div>
    <br style="clear: left">
    <div class="key special" id="K_TAB">
    <div class="keycap">Tab</div>
    </div>
    <div class="key plain" id="K_Q">
    <div class="keycap">q</div>
    <div class="keytext"></div>
    </div>
    <div class="key plain" id="K_W">
    <div class="keycap">w</div>
    <div class="keytext">ᄇ</div>
    </div>
    <div class="key plain" id="K_E">
    <div class="keycap">e</div>
    <div class="keytext">ᅡ</div>
    </div>
    <div class="key plain" id="K_R">
    <div class="keycap">r</div>
    <div class="keytext">ᅲ</div>
    </div>
    <div class="key plain" id="K_T">
    <div class="keycap">t</div>
    <div class="keytext">ᅥ</div>
    </div>
    <div class="key plain" id="K_Y">
    <div class="keycap">y</div>
    <div class="keytext"></div>
    </div>
    <div class="key plain" id="K_U">
    <div class="keycap">u</div>
    <div class="keytext">ᅵ</div>
    </div>
    <div class="key plain" id="K_I">
    <div class="keycap">i</div>
    <div class="keytext">ᅣ</div>
    </div>
    <div class="key plain" id="K_O">
    <div class="keycap">o</div>
    <div class="keytext">ᄑ</div>
    </div>
    <div class="key plain" id="K_P">
    <div class="keycap">p</div>
    <div class="keytext">ᄌ</div>
    </div>
    <div class="key plain" id="K_LBRKT">
    <div class="keycap">[</div>
    <div class="keytext">[</div>
    </div>
    <div class="key plain" id="K_RBRKT">
    <div class="keycap">]</div>
    <div class="keytext">]</div>
    </div>
    <div class="key plain" id="K_BKSLASH">
    <div class="keycap">\</div>
    <div class="keytext">\</div>
    </div>
    <br style="clear: left">
    <div class="key special" id="K_CAPS">
    <div class="keycap">Caps Lock</div>
    </div>
    <div class="key plain" id="K_A">
    <div class="keycap">a</div>
    <div class="keytext">ᅩ</div>
    </div>
    <div class="key plain" id="K_S">
    <div class="keycap">s</div>
    <div class="keytext">ᅧ</div>
    </div>
    <div class="key plain" id="K_D">
    <div class="keycap">d</div>
    <div class="keytext">ᅳ</div>
    </div>
    <div class="key plain" id="K_F">
    <div class="keycap">f</div>
    <div class="keytext">ᄂ</div>
    </div>
    <div class="key plain" id="K_G">
    <div class="keycap">g</div>
    <div class="keytext">ᄉ</div>
    </div>
    <div class="key plain" id="K_H">
    <div class="keycap">h</div>
    <div class="keytext">ᅮ</div>
    </div>
    <div class="key plain" id="K_J">
    <div class="keycap">j</div>
    <div class="keytext">ᄒ</div>
    </div>
    <div class="key plain" id="K_K">
    <div class="keycap">k</div>
    <div class="keytext">ᄋ</div>
    </div>
    <div class="key plain" id="K_L">
    <div class="keycap">l</div>
    <div class="keytext">ᄀ</div>
    </div>
    <div class="key plain" id="K_COLON">
    <div class="keycap">;</div>
    <div class="keytext">;</div>
    </div>
    <div class="key plain" id="K_QUOTE">
    <div class="keycap">'</div>
    <div class="keytext">'</div>
    </div>
    <div class="key special" id="K_ENTER">
    <div class="keycap">Enter</div>
    </div>
    <br style="clear: left">
    <div class="key special" id="K_SHIFTL">
    <div class="keycap">Shift</div>
    </div>
    <div class="key plain" id="K_oE2">
    <div class="keycap">\</div>
    </div>
    <div class="key plain" id="K_Z">
    <div class="keycap">z</div>
    <div class="keytext">ᄐ</div>
    </div>
    <div class="key plain" id="K_X">
    <div class="keycap">x</div>
    <div class="keytext">ᄏ</div>
    </div>
    <div class="key plain" id="K_C">
    <div class="keycap">c</div>
    <div class="keytext">ᄎ</div>
    </div>
    <div class="key plain" id="K_V">
    <div class="keycap">v</div>
    <div class="keytext">ᄅ</div>
    </div>
    <div class="key plain" id="K_B">
    <div class="keycap">b</div>
    <div class="keytext">ᄃ</div>
    </div>
    <div class="key plain" id="K_N">
    <div class="keycap">n</div>
    <div class="keytext">ᅭ</div>
    </div>
    <div class="key plain" id="K_M">
    <div class="keycap">m</div>
    <div class="keytext">ᄆ</div>
    </div>
    <div class="key plain" id="K_COMMA">
    <div class="keycap">,</div>
    <div class="keytext">,</div>
    </div>
    <div class="key plain" id="K_PERIOD">
    <div class="keycap">.</div>
    <div class="keytext">.</div>
    </div>
    <div class="key plain" id="K_SLASH">
    <div class="keycap">/</div>
    <div class="keytext">/</div>
    </div>
    <div class="key special" id="K_SHIFTR">
    <div class="keycap">Shift</div>
    </div>
    <br style="clear: left">
    <div class="key special" id="K_CTRLL">
    <div class="keycap">Ctrl</div>
    </div>
    <div style="width: 30px; display: block; float: left;"> </div>
    <div class="key special" id="K_ALTL">
    <div class="keycap">Alt</div>
    </div>
    <div class="key plain" id="K_SPACE">
    <div class="keycap"> </div>
    <div class="keytext"> </div>
    </div>
    <div class="key special" id="K_ALTR">
    <div class="keycap">Alt</div>
    </div>
    <div style="width: 54px; display: block; float: left;"> </div>
    <div class="key special" id="K_CTRLR">
    <div class="keycap">Ctrl</div>
    </div>
    <br style="clear: left" />

    <h2 class='details'>Keyboard Details</h2>
    <p>The Korean Morse (SIL) keyboard converts Korean jamo into hangeul after you press <kbd>Spacebar</kbd>. As you type, Korean jamo are shown.
      When you press <kbd>Spacebar</kbd>, the jamo are converted into a hanguel sylable.
      Pressing <kbd>Spacebar</kbd> twice will insert a space. If you wish to insert uncombined syllables,
      press <kbd>Shift</kbd>+<kbd>Spacebar</kbd>.</p>

    <h2 class='guide'>Complete Typing Guide</h2>

        <h3>Consonants</h3>
        <table class='grid'>
            <col width=50 />
            <col width=125 />

            <tr>
                <th>Jamo</th><th>Keystroke</th>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄀ</td><td><span class='keys'>l</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄁ</td><td><span class='keys'>l</span>+<span class='keys'>l</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄂ</td><td><span class='keys'>f</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄃ</td><td><span class='keys'>b</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄄ</td><td><span class='keys'>b</span>+<span class='keys'>b</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄅ</td><td><span class='keys'>v</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄆ</td><td><span class='keys'>m</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄇ</td><td><span class='keys'>w</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄈ</td><td><span class='keys'>w</span>+<span class='keys'>w</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄉ</td><td><span class='keys'>g</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄊ</td><td><span class='keys'>g</span>+<span class='keys'>g</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᆼ</td><td><span class='keys'>k</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄌ</td><td><span class='keys'>p</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄍ</td><td><span class='keys'>p</span>+<span class='keys'>p</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄎ</td><td><span class='keys'>c</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄏ</td><td><span class='keys'>x</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄐ</td><td><span class='keys'>z</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄑ</td><td><span class='keys'>o</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᄒ</td><td><span class='keys'>j</span></td>
            </tr>
        </table>

        <h3>Vowels</h3>
        <table class='grid'>
            <col width=50 />
            <col width=125 />

            <tr>
                <th>Jamo</th><th>Keystroke</th>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅡ</td><td><span class='keys'>e</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅣ</td><td><span class='keys'>i</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅥ</td><td><span class='keys'>t</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅧ</td><td><span class='keys'>s</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅩ</td><td><span class='keys'>a</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅭ</td><td><span class='keys'>n</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅮ</td><td><span class='keys'>h</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅲ</td><td><span class='keys'>r</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅳ</td><td><span class='keys'>d</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅵ</td><td><span class='keys'>u</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅢ</td><td><span class='keys'>e</span>+<span class='keys'>u</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅤ</td><td><span class='keys'>i</span>+<span class='keys'>u</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅦ</td><td><span class='keys'>t</span>+<span class='keys'>u</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅨ</td><td><span class='keys'>s</span>+<span class='keys'>u</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅪ</td><td><span class='keys'>a</span>+<span class='keys'>e</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅫ</td><td><span class='keys'>a</span>+<span class='keys'>e</span>+<span class='keys'>u</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅬ</td><td><span class='keys'>a</span>+<span class='keys'>u</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅯ</td><td><span class='keys'>h</span>+<span class='keys'>t</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅰ</td><td><span class='keys'>h</span>+<span class='keys'>t</span>+<span class='keys'>u</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅱ</td><td><span class='keys'>h</span>+<span class='keys'>u</span></td>
            </tr>
            <tr style='text-align:center'>
                <td class='lang2' style='font-size:24pt'>ᅴ</td><td><span class='keys'>d</span>+<span class='keys'>u</span></td>
            </tr>
        </table>

