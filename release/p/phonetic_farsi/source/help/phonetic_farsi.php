<?php
  $pagename = 'Phonetic Farsi Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
 /* Font Definitions */
            @font-face {
                font-family: ScherazadeNew;
                src: url(https://fonts.googleapis.com/css?family=Scheherazade New) format('truetype');
            }
            font-family: ScherazadeNew;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .feature {
            background-color: #f7f9fa;
            border-left: 4px solid #3498db;
            padding: 10px;
            margin-bottom: 10px;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
END;
  require_once('header.php');
?>
    
    <p>Thank you for choosing the Phonetic Farsi keyboard! This keyboard layout is designed to provide a phonetically accurate typing experience for Farsi (Persian) language users.</p>
    
    <h2>Key Features</h2>
    
    <div class="feature">
        <h3>Phonetic Accuracy</h3>
        <p>Our keyboard layout is designed to closely match the phonetic structure of Farsi, making it intuitive for users familiar with the language.</p>
    </div>
    
    <div class="feature">
        <h3>Diacritics and Vowels</h3>
        <p>Easily add diacritics to letters by typing an apostrophe (') after the letter. For vowels, hold the Alt key and type the corresponding letter (a, e, i, o, u).</p>
        <p>Other diacritics such as Tanwin, Shadda, Madda, etc, also supported.</p>
    </div>
    
    <div class="feature">
        <h3>Ligature Support</h3>
        <p>Automatic ligature completion for the 25 Prophets, and 14 Shia Infallibles</p>
        <p>Keybinds for honorific symbols (Radiallahu Anh, Alahyi Salam, etc)</p>
    </div>
    
    <div class="feature">
        <h3>Special Characters</h3>
        <p>Support for Farsi numbers, basic symbols, and special characters like Tatwil and zero-width non-joiner.</p>
    </div>

    <div class="feature">
        <h3>Feature Toggles</h3>
        <p>Ability to enable and disable diacritics being addded with the apostrophe key.</p>
        <p>Ability to enable and disable the automatic ligature completion.</p>
        <p>Ability to enable and disable the brackets around honorifics</p>
    </div>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift shift-ctrl'>
</div>

    <h2>Guide</h2>
    <p>Note, some of the characters here may not be available on all typefaces.</p>
    <p>This keyboard was made using the Scherezade New font, which implements all symbols included here.</p>
    <table>
    <thead>
        <tr>
        <th>Input</th>
        <th>Character Output</th>
        <th>Character Name</th>
        <th>Unicode</th>
        <th>Unicode Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>a</td>
        <td>ا</td>
        <td>Alef</td>
        <td>0627</td>
        <td>ARABIC_LETTER_ALEF</td>
        </tr>
        <tr>
        <td>a&#39;</td>
        <td>أ</td>
        <td>Alef Hamza Top</td>
        <td>0623</td>
        <td>ARABIC_LETTER_ALEF_WITH_HAMZA_ABOVE</td>
        </tr>
        <tr>
        <td>b</td>
        <td>ب</td>
        <td>Ba</td>
        <td>0628</td>
        <td>ARABIC_LETTER_BEH</td>
        </tr>
        <tr>
        <td>b&#39;</td>
        <td>پ</td>
        <td>Pe</td>
        <td>067E</td>
        <td>ARABIC_LETTER_PEH</td>
        </tr>
        <tr>
        <td>c</td>
        <td>چ</td>
        <td>Che</td>
        <td>0686</td>
        <td>ARABIC_LETTER_TCHEH</td>
        </tr>
        <tr>
        <td>d</td>
        <td>د</td>
        <td>Dal</td>
        <td>062F</td>
        <td>ARABIC_LETTER_DAL</td>
        </tr>
        <tr>
        <td>d&#39;</td>
        <td>ذ</td>
        <td>Thal</td>
        <td>0630</td>
        <td>ARABIC_LETTER_THAL</td>
        </tr>
        <tr>
        <td>e</td>
        <td>ه</td>
        <td>Ha</td>
        <td>0647</td>
        <td>ARABIC_LETTER_HEH</td>
        </tr>
        <tr>
        <td>e&#39;</td>
        <td>ة</td>
        <td>Teh Marbutah</td>
        <td>0629</td>
        <td>ARABIC_LETTER_TEH_MARBUTA</td>
        </tr>
        <tr>
        <td>f</td>
        <td>ف</td>
        <td>Fa</td>
        <td>0641</td>
        <td>ARABIC_LETTER_FEH</td>
        </tr>
        <tr>
        <td>f&#39;</td>
        <td>ق</td>
        <td>Qaf</td>
        <td>0642</td>
        <td>ARABIC_LETTER_QAF</td>
        </tr>
        <tr>
        <td>g</td>
        <td>گ</td>
        <td>Gaf</td>
        <td>06AF</td>
        <td>ARABIC_LETTER_GAF</td>
        </tr>
        <tr>
        <td>h</td>
        <td>ه</td>
        <td>Ha</td>
        <td>0647</td>
        <td>ARABIC_LETTER_HEH</td>
        </tr>
        <tr>
        <td>h&#39;</td>
        <td>ة</td>
        <td>Teh Marbutah</td>
        <td>0629</td>
        <td>ARABIC_LETTER_TEH_MARBUTA</td>
        </tr>
        <tr>
        <td>i</td>
        <td>ی</td>
        <td>Ya</td>
        <td>06CC</td>
        <td>ARABIC_LETTER_FARSI_YEH</td>
        </tr>
        <tr>
        <td>i&#39;</td>
        <td>ي</td>
        <td>Arabic Ya</td>
        <td>064A</td>
        <td>ARABIC_LETTER_YEH</td>
        </tr>
        <tr>
        <td>j</td>
        <td>ج</td>
        <td>Jeem</td>
        <td>062C</td>
        <td>ARABIC_LETTER_JEEM</td>
        </tr>
        <tr>
        <td>j&#39;</td>
        <td>چ</td>
        <td>Che</td>
        <td>0686</td>
        <td>ARABIC_LETTER_TCHEH</td>
        </tr>
        <tr>
        <td>k</td>
        <td>ک</td>
        <td>Keheh</td>
        <td>06A9</td>
        <td>ARABIC_LETTER_KEHEH</td>
        </tr>
        <tr>
        <td>k&#39;</td>
        <td>گ</td>
        <td>Gaf</td>
        <td>06AF</td>
        <td>ARABIC_LETTER_GAF</td>
        </tr>
        <tr>
        <td>l</td>
        <td>ل</td>
        <td>Lam</td>
        <td>0644</td>
        <td>ARABIC_LETTER_LAM</td>
        </tr>
        <tr>
        <td>m</td>
        <td>م</td>
        <td>Mim</td>
        <td>0645</td>
        <td>ARABIC_LETTER_MEEM</td>
        </tr>
        <tr>
        <td>n</td>
        <td>ن</td>
        <td>Nun</td>
        <td>0646</td>
        <td>ARABIC_LETTER_NOON</td>
        </tr>
        <tr>
        <td>o</td>
        <td>و</td>
        <td>Waw</td>
        <td>0648</td>
        <td>ARABIC_LETTER_WAW</td>
        </tr>
        <tr>
        <td>p</td>
        <td>پ</td>
        <td>Pe</td>
        <td>067E</td>
        <td>ARABIC_LETTER_PEH</td>
        </tr>
        <tr>
        <td>q</td>
        <td>ق</td>
        <td>Qaf</td>
        <td>0642</td>
        <td>ARABIC_LETTER_QAF</td>
        </tr>
        <tr>
        <td>r</td>
        <td>ر</td>
        <td>Ra</td>
        <td>0631</td>
        <td>ARABIC_LETTER_REH</td>
        </tr>
        <tr>
        <td>r&#39;</td>
        <td>ز</td>
        <td>Zain</td>
        <td>0632</td>
        <td>ARABIC_LETTER_ZAIN</td>
        </tr>
        <tr>
        <td>r&#39;&#39;</td>
        <td>ژ</td>
        <td>Zhe</td>
        <td>0698</td>
        <td>ARABIC_LETTER_JEH</td>
        </tr>
        <tr>
        <td>s</td>
        <td>س</td>
        <td>Seen</td>
        <td>0633</td>
        <td>ARABIC_LETTER_SEEN</td>
        </tr>
        <tr>
        <td>s&#39;</td>
        <td>ش</td>
        <td>Sheen</td>
        <td>0634</td>
        <td>ARABIC_LETTER_SHEEN</td>
        </tr>
        <tr>
        <td>t</td>
        <td>ت</td>
        <td>Ta</td>
        <td>062A</td>
        <td>ARABIC_LETTER_TEH</td>
        </tr>
        <tr>
        <td>t&#39;</td>
        <td>ث</td>
        <td>Tha</td>
        <td>062B</td>
        <td>ARABIC_LETTER_THEH</td>
        </tr>
        <tr>
        <td>u</td>
        <td>و</td>
        <td>Waw</td>
        <td>0648</td>
        <td>ARABIC_LETTER_WAW</td>
        </tr>
        <tr>
        <td>v</td>
        <td>و</td>
        <td>Waw</td>
        <td>0648</td>
        <td>ARABIC_LETTER_WAW</td>
        </tr>
        <tr>
        <td>w</td>
        <td>و</td>
        <td>Waw</td>
        <td>0648</td>
        <td>ARABIC_LETTER_WAW</td>
        </tr>
        <tr>
        <td>x</td>
        <td>خ</td>
        <td>Kha</td>
        <td>062E</td>
        <td>ARABIC_LETTER_KHAH</td>
        </tr>
        <tr>
        <td>y</td>
        <td>ی</td>
        <td>Ya</td>
        <td>06CC</td>
        <td>ARABIC_LETTER_FARSI_YEH</td>
        </tr>
        <tr>
        <td>y&#39;</td>
        <td>ي</td>
        <td>Arabic Ya</td>
        <td>064A</td>
        <td>ARABIC_LETTER_YEH</td>
        </tr>
        <tr>
        <td>z</td>
        <td>ز</td>
        <td>Zain</td>
        <td>0632</td>
        <td>ARABIC_LETTER_ZAIN</td>
        </tr>
        <tr>
        <td>z&#39;</td>
        <td>ژ</td>
        <td>Zhe</td>
        <td>0698</td>
        <td>ARABIC_LETTER_JEH</td>
        </tr>
        <tr>
        <td>A</td>
        <td>ع</td>
        <td>&#39;Ain</td>
        <td>0639</td>
        <td>ARABIC_LETTER_AIN</td>
        </tr>
        <tr>
        <td>A&#39;</td>
        <td>غ</td>
        <td>Ghain</td>
        <td>063A</td>
        <td>ARABIC_LETTER_GHAIN</td>
        </tr>
        <tr>
        <td>B</td>
        <td>ك</td>
        <td>Kaf</td>
        <td>0643</td>
        <td>ARABIC_LETTER_KAF</td>
        </tr>
        <tr>
        <td>B&#39;</td>
        <td>گ</td>
        <td>Gaf</td>
        <td>06AF</td>
        <td>ARABIC_LETTER_GAF</td>
        </tr>
        <tr>
        <td>C</td>
        <td>٬</td>
        <td>Arabic Decimal Separator</td>
        <td>066B</td>
        <td>ARABIC_DECIMAL_SEPARATOR</td>
        </tr>
        <tr>
        <td>D</td>
        <td>ض</td>
        <td>Dad</td>
        <td>0636</td>
        <td>ARABIC_LETTER_DAD</td>
        </tr>
        <tr>
        <td>E</td>
        <td>ـ</td>
        <td>Kashida/Tatweel</td>
        <td>0640</td>
        <td>ARABIC_TATWEEL</td>
        </tr>
        <tr>
        <td>G</td>
        <td>غ</td>
        <td>Ghain</td>
        <td>063A</td>
        <td>ARABIC_LETTER_GHAIN</td>
        </tr>
        <tr>
        <td>H</td>
        <td>ح</td>
        <td>Hah</td>
        <td>062D</td>
        <td>ARABIC_LETTER_HAH</td>
        </tr>
        <tr>
        <td>H&#39;</td>
        <td>خ</td>
        <td>Kha</td>
        <td>062E</td>
        <td>ARABIC_LETTER_KHAH</td>
        </tr>
        <tr>
        <td>J</td>
        <td>ة</td>
        <td>Teh Marbutah</td>
        <td>0629</td>
        <td>ARABIC_LETTER_TEH_MARBUTA</td>
        </tr>
        <tr>
        <td>K</td>
        <td>خ</td>
        <td>Kha</td>
        <td>062E</td>
        <td>ARABIC_LETTER_KHAH</td>
        </tr>
        <tr>
        <td>M</td>
        <td>ى</td>
        <td>Alef Maksura</td>
        <td>0649</td>
        <td>ARABIC_LETTER_ALEF_MAKSURA</td>
        </tr>
        <tr>
        <td>N</td>
        <td>ڪ</td>
        <td>Swish Kaf</td>
        <td>06AA</td>
        <td>ARABIC_LETTER_SWASH_KAF</td>
        </tr>
        <tr>
        <td>O</td>
        <td>أ</td>
        <td>Alef Hamza Top</td>
        <td>0623</td>
        <td>ARABIC_LETTER_ALEF_WITH_HAMZA_ABOVE</td>
        </tr>
        <tr>
        <td>P</td>
        <td>إ</td>
        <td>Alef Hamza Bottom</td>
        <td>0625</td>
        <td>ARABIC_LETTER_ALEF_WITH_HAMZA_BELOW</td>
        </tr>
        <tr>
        <td>Q</td>
        <td>ء</td>
        <td>Hamza</td>
        <td>0621</td>
        <td>ARABIC_LETTER_HAMZA</td>
        </tr>
        <tr>
        <td>S</td>
        <td>ص</td>
        <td>Sad</td>
        <td>0635</td>
        <td>ARABIC_LETTER_SAD</td>
        </tr>
        <tr>
        <td>S&#39;</td>
        <td>ض</td>
        <td>Dad</td>
        <td>0636</td>
        <td>ARABIC_LETTER_DAD</td>
        </tr>
        <tr>
        <td>T</td>
        <td>ط</td>
        <td>Tah</td>
        <td>0637</td>
        <td>ARABIC_LETTER_TAH</td>
        </tr>
        <tr>
        <td>T&#39;</td>
        <td>ظ</td>
        <td>Zah</td>
        <td>0638</td>
        <td>ARABIC_LETTER_ZAH</td>
        </tr>
        <tr>
        <td>V</td>
        <td>آ</td>
        <td>Alef Madda</td>
        <td>0622</td>
        <td>ARABIC_LETTER_ALEF_WITH_MADDA_ABOVE</td>
        </tr>
        <tr>
        <td>W</td>
        <td>ٱ</td>
        <td>Alef Wasla</td>
        <td>0671</td>
        <td>ARABIC_LETTER_ALEF_WASLA</td>
        </tr>
        <tr>
        <td>X</td>
        <td>٬</td>
        <td>Arabic Thousands Separator</td>
        <td>066C</td>
        <td>ARABIC_THOUSANDS_SEPARATOR</td>
        </tr>
        <tr>
        <td>Y</td>
        <td>ي</td>
        <td>Arabic Ya</td>
        <td>064A</td>
        <td>ARABIC_LETTER_YEH</td>
        </tr>
        <tr>
        <td>Z</td>
        <td>ظ</td>
        <td>Zah</td>
        <td>0638</td>
        <td>ARABIC_LETTER_ZAH</td>
        </tr>
        <tr>
        <td>0</td>
        <td>۰</td>
        <td>Zero</td>
        <td>06F0</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_ZERO</td>
        </tr>
        <tr>
        <td>1</td>
        <td>۱</td>
        <td>Arabic-Indic One</td>
        <td>06F1</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_ONE</td>
        </tr>
        <tr>
        <td>2</td>
        <td>۲</td>
        <td>Arabic-Indic Two</td>
        <td>06F2</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_TWO</td>
        </tr>
        <tr>
        <td>3</td>
        <td>۳</td>
        <td>Arabic-Indic Three</td>
        <td>06F3</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_THREE</td>
        </tr>
        <tr>
        <td>4</td>
        <td>۴</td>
        <td>Arabic-Indic Four</td>
        <td>06F4</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_FOUR</td>
        </tr>
        <tr>
        <td>5</td>
        <td>۵</td>
        <td>Arabic-Indic Five</td>
        <td>06F5</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_FIVE</td>
        </tr>
        <tr>
        <td>6</td>
        <td>۶</td>
        <td>Arabic-Indic Six</td>
        <td>06F6</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_SIX</td>
        </tr>
        <tr>
        <td>7</td>
        <td>۷</td>
        <td>Arabic-Indic Seven</td>
        <td>06F7</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_SEVEN</td>
        </tr>
        <tr>
        <td>8</td>
        <td>۸</td>
        <td>Arabic-Indic Eight</td>
        <td>06F8</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_EIGHT</td>
        </tr>
        <tr>
        <td>9</td>
        <td>۹</td>
        <td>Arabic-Indic Nine</td>
        <td>06F9</td>
        <td>EXTENDED_ARABIC-INDIC_DIGIT_NINE</td>
        </tr>
        <tr>
        <td>?</td>
        <td>؟</td>
        <td>Arabic Question Mark</td>
        <td>061F</td>
        <td>ARABIC_QUESTION_MARK</td>
        </tr>
        <tr>
        <td>%</td>
        <td>٪</td>
        <td>Arabic percentage</td>
        <td>066A</td>
        <td>ARABIC_PERCENT_SIGN</td>
        </tr>
    </tbody>
    </table>
    <h2 id="letters-with-diacritic-support">Letters with Diacritic Support</h2>
    <p>To add diacritic, press the apostrophe key (&#39;).</p>
    <table>
    <thead>
        <tr>
        <th>Input</th>
        <th>Diacritic Letter</th>
        <th>Input Character Name</th>
        <th>Output</th>
        <th>Output Character Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>ر</td>
        <td>&#39;</td>
        <td>Ra</td>
        <td>ز</td>
        <td>Za</td>
        </tr>
        <tr>
        <td>ز</td>
        <td>&#39;</td>
        <td>Za</td>
        <td>ژ</td>
        <td>Zha</td>
        </tr>
        <tr>
        <td>ب</td>
        <td>&#39;</td>
        <td>Ba</td>
        <td>پ</td>
        <td>Pe</td>
        </tr>
        <tr>
        <td>ع</td>
        <td>&#39;</td>
        <td>Ain</td>
        <td>غ</td>
        <td>Ghain</td>
        </tr>
        <tr>
        <td>ت</td>
        <td>&#39;</td>
        <td>Te</td>
        <td>ث</td>
        <td>Theh (pronounced as &quot;s&quot;)</td>
        </tr>
        <tr>
        <td>د</td>
        <td>&#39;</td>
        <td>Dal</td>
        <td>ذ</td>
        <td>Thal</td>
        </tr>
        <tr>
        <td>ج</td>
        <td>&#39;</td>
        <td>Jeem</td>
        <td>چ</td>
        <td>Che</td>
        </tr>
        <tr>
        <td>ح</td>
        <td>&#39;</td>
        <td>Hah</td>
        <td>خ</td>
        <td>Khah</td>
        </tr>
        <tr>
        <td>ه</td>
        <td>&#39;</td>
        <td>Heh</td>
        <td>ة</td>
        <td>Teh Marbutah</td>
        </tr>
        <tr>
        <td>ی</td>
        <td>&#39;</td>
        <td>Ya</td>
        <td>ي</td>
        <td>Arabic Ya</td>
        </tr>
        <tr>
        <td>ف</td>
        <td>&#39;</td>
        <td>Feh</td>
        <td>ق</td>
        <td>Qaf</td>
        </tr>
        <tr>
        <td>ک</td>
        <td>&#39;</td>
        <td>Keheh</td>
        <td>گ</td>
        <td>Gaf</td>
        </tr>
        <tr>
        <td>ك</td>
        <td>&#39;</td>
        <td>Kaf</td>
        <td>ک</td>
        <td>Gaf</td>
        </tr>
        <tr>
        <td>ط</td>
        <td>&#39;</td>
        <td>Tah</td>
        <td>ظ</td>
        <td>Zah</td>
        </tr>
        <tr>
        <td>ا</td>
        <td>a</td>
        <td>Alef</td>
        <td>آ</td>
        <td>Alef Madda</td>
        </tr>
        <tr>
        <td>ا</td>
        <td>&#39;</td>
        <td>Alef</td>
        <td>أ</td>
        <td>Alef Hamza Top</td>
        </tr>
    </tbody>
    </table>
    <h2 id="vowels">Vowels</h2>
    <table>
    <thead>
        <tr>
        <th>Input</th>
        <th>Character Output</th>
        <th>Character Name</th>
        <th>Unicode</th>
        <th>Unicode Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Shift + F</td>
        <td>َ</td>
        <td>Fatha</td>
        <td>0618</td>
        <td>ARABIC_SMALL_FATHA</td>
        </tr>
        <tr>
        <td>Shift + I</td>
        <td>ِ</td>
        <td>Kasra</td>
        <td>061A</td>
        <td>ARABIC_SMALL_KASRA</td>
        </tr>
        <tr>
        <td>Shift + U</td>
        <td>ُ</td>
        <td>Damma</td>
        <td>0619</td>
        <td>ARABIC_SMALL_DAMMA</td>
        </tr>
        <tr>
        <td>Shift + F, Shift + F</td>
        <td>ً</td>
        <td>Fathatan</td>
        <td>064B</td>
        <td>ARABIC_FATHATAN</td>
        </tr>
        <tr>
        <td>Shift + I, Shift + I</td>
        <td>ٍ</td>
        <td>Kasratan</td>
        <td>064D</td>
        <td>ARABIC_KASRATAN</td>
        </tr>
        <tr>
        <td>Shift + U, Shift + U</td>
        <td>ٌ</td>
        <td>Dammatan</td>
        <td>064C</td>
        <td>ARABIC_DAMMATAN</td>
        </tr>
        <tr>
        <td>Shift + L</td>
        <td>ّ</td>
        <td>Shadda</td>
        <td>0651</td>
        <td>ARABIC_SHADDA</td>
        </tr>
        <tr>
        <td>Shift + R</td>
        <td>ْ</td>
        <td>Sukun</td>
        <td>0652</td>
        <td>ARABIC_SUKUN</td>
        </tr>
        </tr>
    </tbody>
    </table>
    <h2 id="honorifics-ligature">Honorifics/Ligature</h2>
    <p>To create an honorific, simply type the corresponding letter combination and press Shift + Backquote (Tilde) Ke</p>
    <table>
    <thead>
        <tr>
        <th>Combination</th>
        <th>Honorific</th>
        <th>Meaning</th>
        <th>Usage</th>
        <th>Output</th>
        <th>Unicode</th>
        <th>Unicode Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>صت</td>
        <td>سُبْحَانَهُ وَتَعَالَى <br>
        </td>
        <td>The Glorious, the Most High</td>
        <td>Used after the name of Allah</td>
        <td>﷾</td>
        <td>FDFE</td>
        <td>ARABIC_LIGATURE_SUBHAANAHU_WA_TAAALAA</td>
        </tr>
        <tr>
        <td>ازوج</td>
        <td>أَللّٰه عَزَّ وَ جَلَّ</td>
        <td>Mighty and Majestic</td>
        <td>Used after the name of Allah</td>
        <td>﷿</td>
        <td>FDFF</td>
        <td>ARABIC_LIGATURE_AZZA_WA_JALL</td>
        </tr>
        <tr>
        <td>بسم</td>
        <td>بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</td>
        <td>With the name of Allah, the Infinitely Merciful, the Extremely Merciful</td>
        <td>Recited before reading the Holy Qur&#39;an and performing any daily activity</td>
        <td>﷽</td>
        <td>FDFD</td>
        <td>ARABIC_LIGATURE_BISMILLAH_AR-RAHMAN_AR-RAHEEM</td>
        </tr>
        <tr>
        <td>سا</td>
        <td>صلى الله عليه وآله</td>
        <td>The blessings of God be upon him and the people of his household.</td>
        <td>Used after the name of the Prophet Muhammad</td>
        <td>﵆</td>
        <td>FD46</td>
        <td>ARABIC_LIGATURE_SALLALLAAHU_ALAYHI_WA-AALIH</td>
        </tr>
        <tr>
        <td>سو</td>
        <td>صَلَّى اللّٰهُ عَلَيْهِ وَسَلَّمَ</td>
        <td>The blessings and peace of God be upon him.</td>
        <td>Used after the name of a major prophet, particularly Prophet Muhammad</td>
        <td>ﷺ</td>
        <td>FDFA</td>
        <td>ARABIC_LIGATURE_SALLALLAHOU_ALAYHE_WASALLAM</td>
        </tr>
        <tr>
        <td>ساو</td>
        <td>صلى الله عليه وآله وسلم</td>
        <td>The blessings of God and peace be upon him and the people of his household.</td>
        <td>Used after the name of the Prophet Muhammad</td>
        <td>﵌</td>
        <td>FD4C</td>
        <td>ARABIC_LIGATURE_SALLALLAHU_ALAYHI_WAAALIHEE_WA-SALLAM</td>
        </tr>
        <tr>
        <td>اس</td>
        <td>عَلَيْهِ ٱلسَّلَامُ</td>
        <td>Peace be upon him.</td>
        <td>Used after the name of a prophet, Imam or Archangel.</td>
        <td>﵇</td>
        <td>FD47</td>
        <td>ARABIC_LIGATURE_ALAYHI_AS-SALAAM</td>
        </tr>
        <tr>
        <td>رال</td>
        <td>رَحِمَهُ ٱللَّٰهُ</td>
        <td>May God have mercy upon him.</td>
        <td>Used for companions of the prophet or other widely recognized scholars. Can be for any believer who has passed away.</td>
        <td>﵀</td>
        <td>FD40</td>
        <td>ARABIC_LIGATURE_RAHIMAHU_ALLAAH</td>
        </tr>
        <tr>
        <td>رض</td>
        <td>رَضِيَ اللَّهُ عَنْهُ</td>
        <td>May God be pleased with him.</td>
        <td>Used for companions of the prophet.</td>
        <td>﵁</td>
        <td>FD41</td>
        <td>ARABIC_LIGATURE_RADI_ALLAAHU_ANH</td>
        </tr>
        <tr>
        <td>رضا</td>
        <td>رَضِيَ اللَّهُ عَنْهَا</td>
        <td>May God be pleased with her.</td>
        <td>Used for companions of the prophet, and in some regions for others such as Mary or Jesus’ apostles.</td>
        <td>﵂</td>
        <td>FD42</td>
        <td>ARABIC_LIGATURE_RADI_ALLAAHU_ANHAA</td>
        </tr>
    </tbody>
    </table>
    <h2 id="special-characters">Special Characters</h2>
    <table>
    <thead>
        <tr>
        <th>Key Input</th>
        <th>Character Output</th>
        <th>Character Name</th>
        <th>Unicode</th>
        <th>Unicode Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Shift Ctrl + ` (backquote)</td>
        <td>‏</td>
        <td>Right to left mark</td>
        <td>200F</td>
        <td>RIGHT-TO-LEFT_MARK</td>
        </tr>
        <tr>
        <td>Shift + Comma</td>
        <td>«</td>
        <td>Guillemet left</td>
        <td>00AB</td>
        <td>LEFT-POINTING_DOUBLE_ANGLE_QUOTATION_MARK</td>
        </tr>
        <tr>
        <td>Shift + Period</td>
        <td>»</td>
        <td>Guillemet right</td>
        <td>00BB</td>
        <td>RIGHT-POINTING_DOUBLE_ANGLE_QUOTATION_MARK</td>
        </tr>
        <tr>
        <td>Colon</td>
        <td>؛</td>
        <td>Arabic semi-colon</td>
        <td>061B</td>
        <td>ARABIC_SEMICOLON</td>
        </tr>
        <tr>
        <td>Comma</td>
        <td>،</td>
        <td>Arabic comma</td>
        <td>060C</td>
        <td>ARABIC_COMMA</td>
        </tr>
        <tr>
        <td>Shift + Space</td>
        <td>‌</td>
        <td>Zero-width non-joiner</td>
        <td>200C</td>
        <td>ZERO_WIDTH_NON-JOINER</td>
        </tr>
        <tr>
        <td>Shift + 5</td>
        <td>٪</td>
        <td>Arabic percentage</td>
        <td>066A</td>
        <td>ARABIC_PERCENT_SIGN</td>
        </tr>
        <tr>
        <td>Shift + E</td>
        <td>ـ</td>
        <td>Kashida/Tatwil</td>
        <td>0640</td>
        <td>ARABIC_TATWEEL</td>
        </tr>
        <tr>
        <td>Shift + X</td>
        <td>٫</td>
        <td>Arabic Decimal Separator</td>
        <td>066B</td>
        <td>ARABIC_DECIMAL_SEPARATOR</td>
        </tr>
        <tr>
        <td>Shift + C</td>
        <td>٬</td>
        <td>Arabic Thousands Separator</td>
        <td>066C</td>
        <td>ARABIC_THOUSANDS_SEPARATOR</td>
        </tr>
        <tr>
        <td>Shift + /</td>
        <td>؟</td>
        <td>Arabic Question Mark</td>
        <td>061F</td>
        <td>ARABIC_QUESTION_MARK</td>
        </tr>
    </tbody>
    </table>
    <h2 id="settings-toggles">Settings/Toggles</h2>
    <p>There are 3 settings for the keyboard that can be toggled ON and OFF.</p>
    <h3 id="ligature-completion-and-honorifics">Ligature Completion and Honorifics</h3>
    <p>Whether to enable the addition of ligature completion and honorifics when typing, e.g. &quot;محمد&quot; to &quot;ﷴ (﵌)‏&quot; (which can be done by pressing Shift + Backquote).</p>
    <p>CTRL SHIFT + 1 to enable <br> CTRL SHIFT + 2 to disable </p>
    <h3 id="honorific-brackets">Honorific Brackets</h3>
    <p>Whether to enable the addition of brackets around the honorifics when typing.</p>
    <p>CTRL SHIFT + 3 to enable <br> CTRL SHIFT + 4 to disable </p>
    <h3 id="diacritic-addition">Diacritic Addition</h3>
    <p>Whether to enable the addition of diacritics (dots) to letters when typing using the apostrophe key (&#39;).</p>
    <p>CTRL SHIFT + 5 to enable <br> CTRL SHIFT + 6 to disable </p>
    <h3 id="license">License</h3>
    <p>This keyboard is licensed under the MIT License. You can find the full license text in the LICENSE file.</p>
    </p>
    <h3 id="download">Download</h3>
    <p>
    <a href="https://keyman.com/keyboards/phonetic_farsi?bcp47=fa">https://keyman.com/keyboards/phonetic_farsi?bcp47=fa</a>
    </p>
    
    <h2>Getting Started</h2>
    <p>On Windows, you can do this by opening Keyman and selecting the Phonetic Farsi keyboard. You can change between keyboards easily with the shortcut "Windows + Space".</p>
    <p>For Mac users, once you have installed the keyboard, you can select it from the language menu bar by first switching to the Keyman input source, and then clicking Phonetic Farsi.</p>
    
    <p>We hope you enjoy using the Phonetic Farsi keyboard!</p>
