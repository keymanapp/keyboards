<?php
    $pagename = 'Slaviature Keyboard Help';
    $pagetitle = $pagename;
    $pagestyle = <<<END
         body {
            font-family: 'Charis', 'Times New Roman', serif;
            margin: 20px;
            font-size: 18px;
        }
        h1 {
            text-align: center;
        }
        h2 {
            color: #333;
        }
        table {
            width: 75%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #140707;
            padding: 8px;
            text-align: center;
            width: 100px;
        }
        th {
            background-color: #f2f2f2;
        }
        .note {
            font-size: 0.9em;
            color: #888;
        }
    END;
    require_once('header.php');
?>

    <p>Slaviature is a phonetic keyboard layout designed for Slavistic
    linguistic transcription. It provides a set of diacritics and phonetic
    characters based on Latin, Greek, and IPA standards. Accented characters can
    be entered using the Right Alt (R_Alt / AltGr) key combined with base
    characters. Additional characters are available via the Right Alt and Shift
    combination. </p>

    <h2>Desktop Keyboard Layout</h2>
    <div id='osk' data-states='default shift rightalt rightalt-shift'></div>

    <h2>Vowels</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>a</td>
                <td>a</td>
                <td>U+0061</td>
                <td>Latin small letter A</td>
            </tr>
            <tr>
                <td>ä</td>
                <td>R_Alt + a</td>
                <td>U+00E4</td>
                <td>Latin small letter A with diaeresis</td>
            </tr>
            <tr>
                <td>ã</td>
                <td>a, Shift + R_Alt + `</td>
                <td>U+00E3</td>
                <td>Latin small letter A with tilde</td>
            </tr>
            <tr>
                <td>ä̃</td>
                <td>R_Alt + a, Shift + R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter A with diaeresis and tilde</td>
            </tr>
            <tr>
                <td>e</td>
                <td>e</td>
                <td>U+0065</td>
                <td>Latin small letter E</td>
            </tr>
            <tr>
                <td>ė</td>
                <td>R_Alt + e</td>
                <td>U+0117</td>
                <td>Latin small letter E with dot above</td>
            </tr>
            <tr>
                <td>ẽ</td>
                <td>e, Shift + R_Alt + `</td>
                <td>U+1EBD</td>
                <td>Latin small letter E with tilde</td>
            </tr>
            <tr>
                <td>ė̃</td>
                <td>R_Alt + e, Shift + R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter E with dot above and tilde</td>
            </tr>
            <tr>
                <td>o</td>
                <td>o</td>
                <td>U+006F</td>
                <td>Latin small letter O</td>
            </tr>
            <tr>
                <td>ȯ</td>
                <td>R_Alt + o</td>
                <td>U+022F</td>
                <td>Latin small letter O with dot above</td>
            </tr>
            <tr>
                <td>õ</td>
                <td>o, Shift + R_Alt + `</td>
                <td>U+00F5</td>
                <td>Latin small letter O with dot above and tilde</td>
            </tr>
            <tr>
                <td>õ</td>
                <td>o, R_Alt + 8, Shift + R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter O with ring above and tilde</td>
            </tr>
            <tr>
                <td>i</td>
                <td>i</td>
                <td>U+0069</td>
                <td>Latin small letter I</td>
            </tr>
            <tr>
                <td>ĩ</td>
                <td>i, Shift + R_Alt + `</td>
                <td>U+0129</td>
                <td>Latin small letter I with tilde</td>
            </tr>
            <tr>
                <td>u</td>
                <td>u</td>
                <td>U+0075</td>
                <td>Latin small letter U</td>
            </tr>
            <tr>
                <td>ü</td>
                <td>R_Alt + u</td>
                <td>U+00FC</td>
                <td>Latin small letter U with diaeresis</td>
            </tr>
            <tr>
                <td>ũ</td>
                <td>u, Shift + R_Alt + `</td>
                <td>U+0169</td>
                <td>Latin small letter U with tilde</td>
            </tr>
            <tr>
                <td>ü̃</td>
                <td>R_Alt + u, Shift + R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter U with diaeresis and tilde</td>
            </tr>
            <tr>
                <td>y</td>
                <td>y</td>
                <td>U+0079</td>
                <td>Latin small letter Y</td>
            </tr>
            <tr>
                <td>ỹ</td>
                <td>y, Shift + R_Alt + `</td>
                <td>U+1EF9</td>
                <td>Latin small letter Y with tilde</td>
            </tr>
        </tbody>
    </table>

    <h2>Plosive Consonants</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>b</td>
                <td>b</td>
                <td>U+0062</td>
                <td>Latin small letter B</td>
            </tr>
            <tr>
                <td>p</td>
                <td>p</td>
                <td>U+0070</td>
                <td>Latin small letter P</td>
            </tr>
            <tr>
                <td>bˊ</td>
                <td>b, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter B with prime</td>
            </tr>
            <tr>
                <td>pˊ</td>
                <td>p, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter P with prime</td>
            </tr>
            <tr>
                <td>d</td>
                <td>d</td>
                <td>U+0064</td>
                <td>Latin small letter D</td>
            </tr>
            <tr>
                <td>t</td>
                <td>t</td>
                <td>U+0074</td>
                <td>Latin small letter T</td>
            </tr>
            <tr>
                <td>dˊ</td>
                <td>d, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter D with prime</td>
            </tr>
            <tr>
                <td>tˊ</td>
                <td>t, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter T with primet</td>
            </tr>
            <tr>
                <td>ḍ</td>
                <td>d, R_Alt + .</td>
                <td>U+1E0D</td>
                <td>Latin small letter D with dot below</td>
            </tr>
            <tr>
                <td>ṭ</td>
                <td>t, R_Alt + .</td>
                <td>U+1E6D</td>
                <td>Latin small letter T with dot below</td>
            </tr>
            <tr>
                <td>ǵ</td>
                <td>g, R_Alt + `</td>
                <td>U+01F5</td>
                <td>Latin small letter G with combining acute accent</td>
            </tr>
            <tr>
                <td>ḱ</td>
                <td>k, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter K with combining acute accent</td>
            </tr>
            <tr>
                <td>g</td>
                <td>g</td>
                <td>U+0067</td>
                <td>Latin small letter G</td>
            </tr>
            <tr>
                <td>k</td>
                <td>k</td>
                <td>U+006B</td>
                <td>Latin small letter K</td>
            </tr>
        </tbody>
    </table>

    <h2>Affricate Consonants</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>ʒ</td>
            <td>R_Alt + z</td>
            <td>U+0292</td>
            <td>Latin small letter Ezh</td>
          </tr>
          <tr>
            <td>c</td>
            <td>c</td>
            <td>U+0063</td>
            <td>Latin small letter C</td>
          </tr>
          <tr>
            <td>ʒˊ</td>
            <td>R_Alt + z, R_Alt + `</td>
            <td>-</td>
            <td>Latin small letter Ezh with prime</td>
          </tr>
          <tr>
            <td>cˊ</td>
            <td>c, R_Alt + `</td>
            <td>-</td>
            <td>Latin small letter C with prime</td>
          </tr>
          <tr>
            <td>ǯ</td>
            <td>R_Alt + z, R_Alt + v</td>
            <td>U+01EF</td>
            <td>Latin small letter Ezh with caron</td>
          </tr>
          <tr>
            <td>č</td>
            <td>c, R_Alt + v</td>
            <td>U+010D</td>
            <td>Latin small letter C with caron</td>
          </tr>
          <tr>
            <td>ǯˊ</td>
            <td>R_Alt + z, R_Alt + v, R_Alt + `</td>
            <td>-</td>
            <td>Latin small letter Ezh with caron and prime</td>
          </tr>
          <tr>
            <td>čˊ</td>
            <td>R_Alt + c, R_Alt + v, R_Alt + `</td>
            <td>-</td>
            <td>Latin small letter C with caron and prime</td>
          </tr>
          <tr>
            <td>ʒ́</td>
            <td>R_Alt + z, R_Alt + ‘</td>
            <td>-</td>
            <td>Latin small letter Ezh with combining acute accent</td>
          </tr>
          <tr>
            <td>ć</td>
            <td>c, R_Alt + ‘</td>
            <td>U+0107</td>
            <td>Latin small letter C combining acute accent</td>
          </tr>
        </tbody>
    </table>

    <h2>Fricative Consonants</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>v</td>
                <td>v</td>
                <td>U+0076</td>
                <td>Latin small letter V</td>
            </tr>
            <tr>
                <td>f</td>
                <td>f</td>
                <td>U+0066</td>
                <td>Latin small letter F</td>
            </tr>
            <tr>
                <td>vˊ</td>
                <td>v, R_Alt + ˊ</td>
                <td>-</td>
                <td>Latin small letter V with prime</td>
            </tr>
            <tr>
                <td>fˊ</td>
                <td>f, R_Alt + ˊ</td>
                <td>-</td>
                <td>Latin small letter F with prime</td>
            </tr>
            <tr>
                <td>z</td>
                <td>z</td>
                <td>U+007A</td>
                <td>Latin small letter Z</td>
            </tr>
            <tr>
                <td>s</td>
                <td>s</td>
                <td>U+0073</td>
                <td>Latin small letter S</td>
            </tr>
            <tr>
                <td>zˊ</td>
                <td>z, R_Alt + ˊ</td>
                <td>-</td>
                <td>Latin small letter Z with prime</td>
            </tr>
            <tr>
                <td>sˊ</td>
                <td>s, R_Alt + ˊ</td>
                <td>-</td>
                <td>Latin small letter S with prime</td>
            </tr>
            <tr>
                <td>ž</td>
                <td>z, R_Alt + v</td>
                <td>U+017E</td>
                <td>Latin small letter Z with caron</td>
            </tr>
            <tr>
                <td>š</td>
                <td>s, R_Alt + v</td>
                <td>U+0161</td>
                <td>Latin small letter S with caron</td>
            </tr>
            <tr>
                <td>žˊ</td>
                <td>z, R_Alt + v, R_Alt + ˊ</td>
                <td>-</td>
                <td>Latin small letter Z with caron and prime</td>
            </tr>
            <tr>
                <td>šˊ</td>
                <td>s, R_Alt + v, R_Alt + ˊ</td>
                <td>-</td>
                <td>Latin small letter S with caron and prime</td>
            </tr>
            <tr>
                <td>ź</td>
                <td>R_Alt + x</td>
                <td>U+017A</td>
                <td>Latin small letter Z with combining acute accent</td>
            </tr>
            <tr>
                <td>ś</td>
                <td>R_Alt + s</td>
                <td>U+015B</td>
                <td>Latin small letter S with combining acute accent</td>
            </tr>
            <tr>
                <td>γ</td>
                <td>R_Alt + y</td>
                <td>U+03B3</td>
                <td>Greek small letter Gamma</td>
            </tr>
            <tr>
                <td>χ</td>
                <td>x</td>
                <td>U+03C7</td>
                <td>Greek small letter Chi</td>
            </tr>
            <tr>
                <td>γˊ</td>
                <td>R_Alt + y, R_Alt + ˊ</td>
                <td>-</td>
                <td>Greek small letter Gamma with prime</td>
            </tr>
            <tr>
                <td>χˊ</td>
                <td>x, R_Alt + ˊ</td>
                <td>-</td>
                <td>Greek small letter Chi with prime</td>
            </tr>
        </tbody>
    </table>

    <h2>Nasal Consonants</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>m</td>
                <td>m</td>
                <td>U+006D</td>
                <td>Latin small letter M</td>
            </tr>
            <tr>
                <td>m̦</td>
                <td>m, R_Alt + ,</td>
                <td>-</td>
                <td>Latin small letter M wirh comma below</td>
            </tr>
            <tr>
                <td>mˊ</td>
                <td>m, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter M with prime</td>
            </tr>
            <tr>
                <td>m̦ˊ</td>
                <td>m, R_Alt + , ; R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter M with comma below and prime</td>
            </tr>
            <tr>
                <td>n</td>
                <td>n</td>
                <td>U+006E</td>
                <td>Latin small letter N</td>
            </tr>
            <tr>
                <td>n̦</td>
                <td>n, R_Alt + ,</td>
                <td>-</td>
                <td>Latin small letter N with comma below</td>
            </tr>
            <tr>
                <td>nˊ</td>
                <td>n, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter N with prime</td>
            </tr>
            <tr>
                <td>ṇ</td>
                <td>n, R_Alt + .</td>
                <td>U+1E47</td>
                <td>Latin small letter N with dot below</td>
            </tr>
            <tr>
                <td>ṇ̩</td>
                <td>n, R_Alt + ., R_Alt + /</td>
                <td>-</td>
                <td>Latin small letter N dot and vertical line below</td>
            </tr>
            <tr>
                <td>ń</td>
                <td>R_Alt + n</td>
                <td>U+0144</td>
                <td>Latin small letter N with acute</td>
            </tr>
            <tr>
                <td>ń̦</td>
                <td>R_Alt + n, R_Alt + ,</td>
                <td>-</td>
                <td>Latin small letter N with combining acute accent and comma below</td>
            </tr>
            <tr>
                <td>ŋ</td>
                <td>R_Alt + m</td>
                <td>U+014B</td>
                <td>Latin small letter Eng</td>
            </tr>
            <tr>
                <td>ŋˊ</td>
                <td>R_Alt + m, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter Eng with prime</td>
            </tr>
            <tr>
                <td>ŋ̩</td>
                <td>R_Alt + m, R_Alt + /</td>
                <td>-</td>
                <td>Latin small letter Eng with vertical line below</td>
            </tr>
            <tr>
                <td>ŋ̩ʹ</td>
                <td>R_Alt + m, R_Alt + /, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter Eng with vertical line below and prime</td>
            </tr>
        </tbody>
    </table>

    <h2>Trill Consonants</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>r</td>
                <td>r</td>
                <td>U+0072</td>
                <td>Latin small letter R</td>
            </tr>
            <tr>
                <td>r̦</td>
                <td>r, R_Alt + ,</td>
                <td>-</td>
                <td>Latin small letter R with comma below</td>
            </tr>
            <tr>
                <td>rˊ</td>
                <td>r, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter R with prime</td>
            </tr>
            <tr>
                <td>r̦ˊ</td>
                <td>r, R_Alt + , ; R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter R with comma below and prime</td>
            </tr>
        </tbody>
    </table>

    <h2>Lateral Consonants</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>l</td>
                <td>l</td>
                <td>U+006C</td>
                <td>Latin small letter L</td>
            </tr>
            <tr>
                <td>l̦</td>
                <td>l, R_Alt + ,</td>
                <td>-</td>
                <td>Latin small letter L with comma below</td>
            </tr>
            <tr>
                <td>lˊ</td>
                <td>l, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter L with prime</td>
            </tr>
            <tr>
                <td>l̦ˊ</td>
                <td>l, R_Alt + , ; R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter L with comma below and prime</td>
            </tr>
        </tbody>
    </table>

    <h2>Oral Semivowels</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>i̯</td>
                <td>i, R_Alt + 9</td>
                <td>-</td>
                <td>Latin small letter I with inverted breve below</td>
            </tr>
            <tr>
                <td>u̯</td>
                <td>u, R_Alt + 9</td>
                <td>-</td>
                <td>Latin small letter U with inverted breve below</td>
            </tr>
            <tr>
                <td>u̯̦</td>
                <td>u, R_Alt + 9, R_Alt + ,</td>
                <td>-</td>
                <td>Latin small letter U with comma and inverted breve below</td>
            </tr>
            <tr>
                <td>u̯ˊ</td>
                <td>u, R_Alt + 9, R_Alt + `</td>
                <td>-</td>
                <td>Latin small letter U with comma and inverted breve below</td>
            </tr>
        </tbody>
    </table>

    <h2>Nasal Semivowels</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ĩ̯</td>
                <td>i, Shift + R_Alt + `, R_Alt + 9</td>
                <td>-</td>
                <td>Latin small letter I with inverted breve below and tilde</td>
            </tr>
            <tr>
                <td>ũ̦</td>
                <td>u, Shift + R_Alt + `, R_Alt + 9</td>
                <td>-</td>
                <td>Latin small letter U with inverted breve below and tilde</td>
            </tr>
        </tbody>
    </table>

    <h2>Diacritics</h2>
    <table>
        <thead>
            <tr>
                <th>Glyph*</th>
                <th>Key Stroke</th>
                <th>Unicode**</th>
                <th>Symbol Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>̃</td>
                <td>Shift + R_Alt + `</td>
                <td>U+0303</td>
                <td>Combining Tilde</td>
            </tr>
            <tr>
                <td>̈</td>
                <td>Shift + R_Alt + ;</td>
                <td>U+0308</td>
                <td>Combining Diaeresis</td>
            </tr>
            <tr>
                <td>ʹ</td>
                <td>R_Alt + `</td>
                <td>U+02B9</td>
                <td>Modifier Letter Prime</td>
            </tr>
            <tr>
                <td>̌</td>
                <td>R_Alt + v</td>
                <td>U+030C</td>
                <td>Combining Caron</td>
            </tr>
            <tr>
                <td>́</td>
                <td>R_Alt + ‘</td>
                <td>U+0301</td>
                <td>Combining Acute Accent</td>
            </tr>
            <tr>
                <td>̦</td>
                <td>R_Alt + ,</td>
                <td>U+0326</td>
                <td>Combining Comma Below</td>
            </tr>
            <tr>
                <td>̣̩</td>
                <td>R_Alt + /</td>
                <td>U+0329</td>
                <td>Combining Vertical Line Below</td>
            </tr>
            <tr>
                <td>̯</td>
                <td>R_Alt + 9</td>
                <td>U+032F</td>
                <td>Combining Inverted Breve Below</td>
            </tr>
            <tr>
                <td>̮</td>
                <td>R_Alt + 0</td>
                <td>U+034E</td>
                <td>Combining Breve Below</td>
            </tr>
            <tr>
                <td>̈</td>
                <td>Shift + R_Alt + ;</td>
                <td>U+0308</td>
                <td>Combining Diaeresis</td>
            </tr>
            <tr>
                <td>̢</td>
                <td>R_Alt + :</td>
                <td>U+0322</td>
                <td>Combining Cedilla</td>
            </tr>
        </tbody>
    </table>

    <p class="note">*To make a capital Glyph, press Shift before the given key stroke.</p>
    <p class="note">**Some of the Glyphs have a complicated structure, so they do not have a Unicode sign.</p>

    <p>The documentation is modified version of
        <a href="https://pl.wiktionary.org/wiki/Aneks:J%C4%99zyk_polski_-_wymowa_-_g%C5%82oski">
            Aneks:Język polski - wymowa - głoski - Wikisłownik, wolny słownik wielojęzyczny
        </a>
    under <a href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International Public License</a>.
    </p>
