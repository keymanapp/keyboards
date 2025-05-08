<?php
  $pagename = 'Lavanya Keyboard Help';
    $pagetitle = $pagename;
    $pagestyle = <<<END
        body { font-family: Nirmala UI, Vani, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  }
        table { border-collapse: collapse; width: 100%; margin: 20px 0; }
        th { background-color: #e8eaf6; padding: 10px; text-align: left;  border: 1px solid #c5cae9; }
        td { padding: 8px 10px; border: 1px solid #c5cae9; }
        tr:nth-child(even) { background-color: #f5f5f5; }
        code { background-color: #f5f5f5; padding: 2px 4px; border-radius: 3px; font-family: 'Courier New', Courier, monospace; }
        .example { background-color: #e3f2fd; padding: 15px; border-left: 4px solid #2196f3; margin: 20px 0; }
        ul, ol { margin-left: 20px; }
        li { margin-bottom: 8px; }
  END;
  require_once('header.php');
?>

    <h2>Introduction</h2>
    <p>This document provides comprehensive guidelines for using the Telugu Keyman keyboard layout. The keyboard allows for transliteration from Latin (English) characters to Telugu script. This document outlines the character mappings, rules for combining consonants and vowels, and special features of the keyboard.</p>

    <h2>Basic Principles</h2>
    <p>The keyboard follows a phonetic transliteration system where Latin characters are mapped to their corresponding Telugu characters. The following principles apply:</p>
    <ol>
        <li>Consonants by default include the virama (్) mark, which is removed when followed by a vowel</li>
        <li>When consonants are followed by vowels, the respective vowel diacritics are applied</li>
        <li>Special characters like Zero Width Non-Joiner (ZWNJ) can be inserted using '^' or 'f'</li>
    </ol>

    <h2>Character Mapping</h2>

    <h3>Vowels</h3>
    <table>
        <thead>
            <tr>
                <th>Latin</th>
                <th>Telugu</th>
                <th>Alternate</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>a</td>
                <td>అ</td>
                <td></td>
            </tr>
            <tr>
                <td>A</td>
                <td>ఆ</td>
                <td>aa</td>
            </tr>
            <tr>
                <td>i</td>
                <td>ఇ</td>
                <td></td>
            </tr>
            <tr>
                <td>I</td>
                <td>ఈ</td>
                <td>ii</td>
            </tr>
            <tr>
                <td>u</td>
                <td>ఉ</td>
                <td></td>
            </tr>
            <tr>
                <td>U</td>
                <td>ఊ</td>
                <td>uu</td>
            </tr>
            <tr>
                <td>R</td>
                <td>ఋ</td>
                <td></td>
            </tr>
            <tr>
                <td>RU</td>
                <td>ౠ</td>
                <td>Ru</td>
            </tr>
            <tr>
                <td>e</td>
                <td>ఎ</td>
                <td></td>
            </tr>
            <tr>
                <td>E</td>
                <td>ఏ</td>
                <td>ee</td>
            </tr>
            <tr>
                <td>Y</td>
                <td>ఐ</td>
                <td>ai</td>
            </tr>
            <tr>
                <td>o</td>
                <td>ఒ</td>
                <td></td>
            </tr>
            <tr>
                <td>O</td>
                <td>ఓ</td>
                <td>oo</td>
            </tr>
            <tr>
                <td>V</td>
                <td>ఔ</td>
                <td>au, ou</td>
            </tr>
            <tr>
                <td>a(</td>
                <td>అఁ</td>
                <td></td>
            </tr>
            <tr>
                <td>aM</td>
                <td>అం</td>
                <td></td>
            </tr>
            <tr>
                <td>a:</td>
                <td>అః</td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <h3>Consonants</h3>
    <table>
        <thead>
            <tr>
                <th>Latin</th>
                <th>Telugu</th>
                <th>Alternate</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>k</td>
                <td>క్</td>
                <td></td>
            </tr>
            <tr>
                <td>K</td>
                <td>ఖ్</td>
                <td>kh</td>
            </tr>
            <tr>
                <td>g</td>
                <td>గ్</td>
                <td></td>
            </tr>
            <tr>
                <td>G</td>
                <td>ఘ్</td>
                <td>gh</td>
            </tr>
            <tr>
                <td>q</td>
                <td>ఙ్</td>
                <td></td>
            </tr>
            <tr>
                <td>c</td>
                <td>చ్</td>
                <td></td>
            </tr>
            <tr>
                <td>C</td>
                <td>ఛ్</td>
                <td>ch</td>
            </tr>
            <tr>
                <td>j</td>
                <td>జ్</td>
                <td></td>
            </tr>
            <tr>
                <td>J</td>
                <td>ఝ్</td>
                <td>jh</td>
            </tr>
            <tr>
                <td>Q</td>
                <td>ఞ్</td>
                <td></td>
            </tr>
            <tr>
                <td>T</td>
                <td>ట్</td>
                <td></td>
            </tr>
            <tr>
                <td>Th</td>
                <td>ఠ్</td>
                <td></td>
            </tr>
            <tr>
                <td>D</td>
                <td>డ్</td>
                <td></td>
            </tr>
            <tr>
                <td>Dh</td>
                <td>ఢ్</td>
                <td></td>
            </tr>
            <tr>
                <td>N</td>
                <td>ణ్</td>
                <td></td>
            </tr>
            <tr>
                <td>t</td>
                <td>త్</td>
                <td></td>
            </tr>
            <tr>
                <td>th</td>
                <td>థ్</td>
                <td></td>
            </tr>
            <tr>
                <td>d</td>
                <td>ద్</td>
                <td></td>
            </tr>
            <tr>
                <td>dh</td>
                <td>ధ్</td>
                <td></td>
            </tr>
            <tr>
                <td>n</td>
                <td>న్</td>
                <td></td>
            </tr>
            <tr>
                <td>p</td>
                <td>ప్</td>
                <td></td>
            </tr>
            <tr>
                <td>P</td>
                <td>ఫ్</td>
                <td>ph</td>
            </tr>
            <tr>
                <td>b</td>
                <td>బ్</td>
                <td></td>
            </tr>
            <tr>
                <td>B</td>
                <td>భ్</td>
                <td>bh</td>
            </tr>
            <tr>
                <td>m</td>
                <td>మ్</td>
                <td></td>
            </tr>
            <tr>
                <td>y</td>
                <td>య్</td>
                <td></td>
            </tr>
            <tr>
                <td>r</td>
                <td>ర్</td>
                <td></td>
            </tr>
            <tr>
                <td>l</td>
                <td>ల్</td>
                <td></td>
            </tr>
            <tr>
                <td>v</td>
                <td>వ్</td>
                <td></td>
            </tr>
            <tr>
                <td>S</td>
                <td>శ్</td>
                <td></td>
            </tr>
            <tr>
                <td>sh</td>
                <td>ష్</td>
                <td></td>
            </tr>
            <tr>
                <td>s</td>
                <td>స్</td>
                <td></td>
            </tr>
            <tr>
                <td>H</td>
                <td>హ్</td>
                <td></td>
            </tr>
            <tr>
                <td>L</td>
                <td>ళ్</td>
                <td></td>
            </tr>
            <tr>
                <td>ksh</td>
                <td>క్ష్</td>
                <td></td>
            </tr>
            <tr>
                <td>=r</td>
                <td>ఱ్</td>
                <td></td>
            </tr>
            <tr>
                <td>=l</td>
                <td>ఴ్(U+0c34 U+0c4D)</td>
                <td></td>
            </tr>
            <tr>
                <td>$</td>
                <td>₹</td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <h3>Vowel Diacritics</h3>
    <p>When consonants are followed by vowels, the vowel's diacritic form is applied to the consonant instead of using the independent vowel form.</p>
    <table>
        <thead>
            <tr>
                <th>Vowel</th>
                <th>Diacritic</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>a</td>
                <td>(none)</td>
            </tr>
            <tr>
                <td>A or aa</td>
                <td>ా</td>
            </tr>
            <tr>
                <td>i</td>
                <td>ి</td>
            </tr>
            <tr>
                <td>I or ii</td>
                <td>ీ</td>
            </tr>
            <tr>
                <td>u</td>
                <td>ు</td>
            </tr>
            <tr>
                <td>U or uu</td>
                <td>ూ</td>
            </tr>

            <tr>
                <td>R</td>
                <td>ృ</td>
            </tr>

            <tr>
                <td>RU or Ru</td>
                <td>ౄ</td>
            </tr>

            <tr>
                <td>e</td>
                <td>ె</td>
            </tr>
            <tr>
                <td>E</td>
                <td>ే</td>
            </tr>
            <tr>
                <td>Y</td>
                <td>ై</td>
            </tr>
            <tr>
                <td>o</td>
                <td>ొ</td>
            </tr>
            <tr>
                <td>O</td>
                <td>ో</td>
            </tr>
            <tr>
                <td>V</td>
                <td>ౌ</td>
            </tr>

            <tr>
                <td>(</td>
                <td>ఁ</td>
            </tr>

            <tr>
                <td>M</td>
                <td>ం</td>
            </tr>

            <tr>
                <td>:</td>
                <td>ః</td>
            </tr>

        </tbody>
    </table>

    <h2>Usage Rules</h2>

    <h3>1. Basic Consonant and Vowel Combinations</h3>
    <p>When a consonant is followed by a vowel, the vowel is represented as a diacritic attached to the consonant.</p>
    <div class="example">
        <p><strong>Examples:</strong></p>
        <ul>
            <li><code>ka</code> → క</li>
            <li><code>kA</code> → కా (or <code>kaa</code> → కా)</li>
            <li><code>ki</code> → కి</li>
            <li><code>kI</code> → కీ (or <code>kii</code> → కీ)</li>
            <li><code>ku</code> → కు</li>
            <li><code>kU</code> → కూ (or <code>kuu</code> → కూ)</li>
            <li><code>ke</code> → కె</li>
            <li><code>kE</code> → కే (or <code>kee</code> → కే)</li>
            <li><code>kY</code> → కై (or <code>kai</code> → కై)</li>
            <li><code>ko</code> → కొ</li>
            <li><code>kO</code> → కో (or <code>koo</code> → కో)</li>
            <li><code>kV</code> → కౌ (or <code>kau</code> → కౌ, <code>kou</code> → కౌ)</li>
            <li><code>ka(</code> → కఁ</li>
            <li><code>kaM</code> → కం</li>
            <li><code>ka:</code> → కః</li>
        </ul>
    </div>

    <h3>2. Compound Words and Multiple Consonants</h3>
    <p>When multiple consonants appear together, each consonant except the last one receives a virama (్) mark.</p>
    <div class="example">
        <p><strong>Examples:</strong></p>
        <ul>
            <li><code>karma</code> → కర్మ</li>
            <li><code>akshara</code> → అక్షర</li>
        </ul>
    </div>

    <h3>3. Zero Width Non-Joiner (ZWNJ)</h3>
    <p>The characters <code>^</code> or <code>f</code> can be used to insert a Zero Width Non-Joiner (ZWNJ) between characters to prevent them from forming a ligature.</p>
    <div class="example">
        <p><strong>Examples:</strong></p>
        <ul>
            <li><code>karma</code> → కర్మ</li>
            <li><code>kar^ma or karfma</code> → కర్‌మ (Note the visible space between ర్ and మ)</li>
        </ul>
    </div>

    <h3>4. Special Characters</h3>
    <table>
        <thead>
            <tr>
                <th>Input</th>
                <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>M</td>
                <td>ం (Anusvara)</td>
            </tr>
            <tr>
                <td>:</td>
                <td>ః (Visarga)</td>
            </tr>
            <tr>
                <td>(</td>
                <td>ఁ (Candrabindu)</td>
            </tr>
        </tbody>
    </table>

    <h2>Telugu Numbers</h2>
    <p>The keyboard supports typing Telugu numerals. To type a Telugu numeral:</p>
    <div class="example">
        <p><strong>Method:</strong></p>
        <ol>
            <li>Type a backtick (`)</li>
            <li>Type the corresponding number key (1-0)</li>
        </ol>
        <p><strong>Examples:</strong></p>
        <table>
            <thead>
                <tr>
                    <th>Input</th>
                    <th>Output</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>`1</td><td>౧</td></tr>
                <tr><td>`2</td><td>౨</td></tr>
                <tr><td>`3</td><td>౩</td></tr>
                <tr><td>`4</td><td>౪</td></tr>
                <tr><td>`5</td><td>౫</td></tr>
                <tr><td>`6</td><td>౬</td></tr>
                <tr><td>`7</td><td>౭</td></tr>
                <tr><td>`8</td><td>౮</td></tr>
                <tr><td>`9</td><td>౯</td></tr>
                <tr><td>`0</td><td>౦</td></tr>
            </tbody>
        </table>
        <p><strong>Complete Example:</strong></p>
        <p>To type the number 2025 in Telugu: `2`0`2`5 → ౨౦౨౫</p>
    </div>

    <h2>Switching Between Telugu and English</h2>
    <p>You can temporarily switch to English characters in the middle of typing Telugu text:</p>
    <div class="example">
        <p><strong>Method:</strong></p>
        <ol>
            <li>Type a backtick (`) to activate English mode</li>
            <li>Type any of the mapped keys to get the English character instead of the Telugu character</li>
        </ol>
        
        <p>Note: In some cases the backtick acts as a toggle only for a single character rather than for the entire word.</p>
    </div>

    <h2>Typing En Dash and Em Dash</h2>
    <p>The keyboard supports typing en dash and em dash characters:</p>
    <div class="example">
        <p><strong>En Dash (–):</strong></p>
        <ol>
            <li>Type two hyphens (--)</li>
            <li>Type a backtick (`)</li>
        </ol>
        <p>Example: <code>--`</code> → –</p>
        
        <p><strong>Em Dash (—):</strong></p>
        <ol>
            <li>Type three hyphens (---)</li>
            <li>Type a backtick (`)</li>
        </ol>
        <p>Example: <code>---`</code> → —</p>
        
        <p><strong>Usage Examples:</strong></p>
        <ul>
            <li>Time range: <code>2--`5 gaMTalu</code> → 2–5 గంటలు</li>
            <li>Break in thought: <code>avunu---`kAni</code> → అవును—కాని</li>
        </ul>
        <p>To convert back to regular hyphens, type a backtick after the dash character.</p>
    </div>

    <h2>Using Smart Quotes</h2>
    <p>The keyboard automatically handles typographic quotation marks (smart quotes):</p>
    <div class="example">
        <p><strong>Double Quotes:</strong></p>
        <ul>
            <li>First <code>"</code> → Opening double quote (")</li>
            <li>Second <code>"</code> → Closing double quote (")</li>
            <li>Third <code>"</code> → Regular double quote (")</li>
        </ul>
        <p>Example: <code>"telugu BAsha"</code> → "తెలుగు భాష"</p>
        
        <p><strong>Single Quotes:</strong></p>
        <ul>
            <li>First <code>'</code> → Opening single quote (')</li>
            <li>Second <code>'</code> → Closing single quote (')</li>
            <li>Third <code>'</code> → Regular single quote (')</li>
        </ul>
        <p>Example: <code>'idi'</code> → 'ఇది'</p>
        
    </div>

    <h2>Comprehensive Examples</h2>
    <p>Here are comprehensive examples demonstrating the keyboard's capabilities:</p>

    <div class="example">
        <h3>1. <code>lAvaNya</code> → లావణ్య</h3>
        <ul>
            <li><code>l</code> → ల్</li>
            <li><code>A</code> → ా (added to ల్ to make లా)</li>
            <li><code>v</code> → వ్</li>
            <li><code>a</code> → (added to వ్ to make వ)</li>
            <li><code>N</code> → ణ్</li>
            <li><code>y</code> → య్</li>
            <li><code>a</code> → (added to య్ to make య)</li>
        </ul>
    </div>

    <div class="example">
        <h3>2. <code>rAm</code> → రామ్</h3>
        <ul>
            <li><code>r</code> → ర్</li>
            <li><code>A</code> → ా (added to ర్ to make రా)</li>
            <li><code>m</code> → మ్</li>
        </ul>
    </div>

    <div class="example">
        <h3>3. <code>akshara</code> → అక్షర</h3>
        <ul>
            <li><code>a</code> → అ</li>
            <li><code>k</code> → క్</li>
            <li><code>sh</code> → ష్</li>
            <li><code>a</code> → (added to ష్ to make ష)</li>
            <li><code>r</code> → ర్</li>
            <li><code>a</code> → (added to ర్ to make ర)</li>
        </ul>
    </div>

    <div class="example">
        <h3>4. <code>strI</code> → స్త్రీ</h3>
        <ul>
            <li><code>s</code> → స్</li>
            <li><code>t</code> → త్</li>
            <li><code>r</code> → ర్</li>
            <li><code>I</code> → ీ (added to ర్ to make రీ)</li>
        </ul>
    </div>

    <div class="example">
        <h3>5. <code>Siva:</code> → శివః</h3>
        <ul>
            <li><code>S</code> → శ్</li>
            <li><code>i</code> → ి (added to శ్ to make శి)</li>
            <li><code>v</code> → వ్</li>
            <li><code>a</code> → (added to వ్ to make వ)</li>
            <li><code>:</code> → ః</li>
        </ul>
    </div>

    <div class="example">
        <h3>6. <code>karma</code> → కర్మ</h3>
        <ul>
            <li><code>k</code> → క్</li>
            <li><code>a</code> → (added to క్ to make క)</li>
            <li><code>r</code> → ర్</li>
            <li><code>m</code> → మ్</li>
            <li><code>a</code> → (added to మ్ to make మ)</li>
        </ul>
    </div>

    <div class="example">
        <h3>7. <code>kar^ma</code> → కర్‌మ</h3>
        <ul>
            <li><code>k</code> → క్</li>
            <li><code>a</code> → (added to క్ to make క)</li>
            <li><code>r</code> → ర్</li>
            <li><code>^</code> → ‌ (ZWNJ)</li>
            <li><code>m</code> → మ్</li>
            <li><code>a</code> → (added to మ్ to make మ)</li>
        </ul>
    </div>

    <h2>Alternative Input Methods</h2>
    <p>Many characters can be input using multiple methods. Here are the alternative inputs:</p>

    <h3>Vowels</h3>
    <ul>
        <li><code>A</code> or <code>aa</code> → ఆ</li>
        <li><code>I</code> or <code>ii</code> → ఈ</li>
        <li><code>U</code> or <code>uu</code> → ఊ</li>
        <li><code>RU</code> or <code>Ru</code> → ౠ</li>
        <li><code>E</code> or <code>ee</code> → ఏ</li>
        <li><code>Y</code> or <code>ai</code> → ఐ</li>
        <li><code>O</code> or <code>oo</code> → ఓ</li>
        <li><code>V</code> or <code>au</code> or <code>ou</code> → ఔ</li>
    </ul>

    <h3>Consonants</h3>
    <ul>
        <li><code>K</code> or <code>kh</code> → ఖ్</li>
        <li><code>G</code> or <code>gh</code> → ఘ్</li>
        <li><code>C</code> or <code>ch</code> → ఛ్</li>
        <li><code>J</code> or <code>jh</code> → ఝ్</li>
        <li><code>P</code> or <code>ph</code> → ఫ్</li>
        <li><code>B</code> or <code>bh</code> → భ్</li>
    </ul>

    <h2>Unmapped Keys</h2>
    <p>The following keys are reserved for future updates and currently do not map to any Telugu characters:</p>
    <ul>
        <li>F, h, w, W, x, X, z, Z</li>
    </ul>

    <h2>Typing Strategies</h2>

    <h3>1. For Words with Multiple Consonants</h3>
    <p>When typing words with multiple consonants in sequence, type each consonant followed by appropriate vowels.</p>
    <div class="example">
        <p><strong>Example:</strong></p>
        <p>For <code>ప్రసన్న</code>, type <code>p</code> + <code>r</code> + <code>a</code> + <code>s</code> + <code>a</code> + <code>n</code> + <code>n</code> + <code>a</code></p>
    </div>

    <h3>2. For Consonant Clusters</h3>
    <p>Type each consonant in the cluster.</p>
    <div class="example">
        <p><strong>Example:</strong></p>
        <p>For <code>సంస్కృతి</code>, type <code>s</code> + <code>a</code> + <code>M</code> + <code>s</code> + <code>k</code> + <code>R</code> + <code>t</code> + <code>i</code></p>
    </div>

    <h3>3. Using Zero Width Non-Joiner</h3>
    <p>Use <code>^</code> or <code>f</code> between consonants when you want to prevent them from forming a ligature.</p>
    <div class="example">
        <p><strong>Example:</strong></p>
        <p>For <code>కర్‌మ</code> (with visible separation), type <code>k</code> + <code>a</code> + <code>r</code> + <code>^</code> + <code>m</code> + <code>a</code></p>
    </div>

    <h2>Tips and Best Practices</h2>
    <ol>
        <li>For beginners, using the lowercase single-letter inputs (e.g., <code>kaa</code> instead of <code>KA</code>) is generally easier to remember.</li>
        <li>For users familiar with the ITRANS transliteration scheme, the alternative spellings (e.g., <code>kh</code> for <code>K</code>) will be more intuitive.</li>
        <li>When typing long passages, consider using capitalized vowels (<code>A</code> instead of <code>aa</code>) to minimize keystrokes.</li>
        <li>Remember that consonants by default include the virama mark (్), which is automatically removed when a vowel follows.</li>
        <li>For special Telugu characters that don't have direct English phonetic equivalents, refer to the specialized mappings:
            <ul>
                <li><code>q</code> → ఙ్</li>
                <li><code>Q</code> → ఞ్</li>
                <li><code>=r</code> → ఱ్</li>
                <li><code>=l</code> → ఴ్ (U+0c34 U+0c4D)</li>
            </ul>
        </li>
    </ol>
