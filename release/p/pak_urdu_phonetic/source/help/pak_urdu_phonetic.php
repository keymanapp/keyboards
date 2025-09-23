<?php
  $pagename = 'Pak Urdu Phonetic Keyboard Help';
  $pagetitle = $pagename;

  $pagestyle = <<<END
    .container { max-width: 900px; margin: 20px auto; padding: 20px; font-family: 'Segoe UI', sans-serif; line-height: 1.6; }
    ul, ol { padding-left: 20px; }
    table { width: 100%; border-collapse: collapse; margin-top: 15px; }
    th, td { padding: 8px 12px; border: 1px solid #ccc; }
    th { background: #f0f0f0; }
    .welcome-message { background: #e3f2fd; padding: 15px; border-left: 4px solid #2196f3; }
    .keyman-notice { background: #fff3cd; padding: 10px 15px; border-left: 4px solid #ffc107; margin: 20px 0; }
    a { color: #1565c0; text-decoration: none; }
    a:hover { text-decoration: underline; }
    .introduction_ur p { direction: rtl; font-family: 'Calibri', Arial, sans-serif; font-size: 1.25rem; }
  END;

  require_once('header.php');
?>

<div class="container">
  <h2>🎉 Welcome to Pak Urdu Phonetic!</h2>

   <div class="introduction_ur">

    <p>

اگر آپ بھی میری طرح اُردُو میں لکھتے ہیں، تحقیق (research) کرتے ہیں یا دل کی بات کسی سے بانٹتے ہیں – تو آپ جانتے ہوں گے کہ ایک اچھا کی بورڈ لے آؤٹ (keyboard layout) کتنا ضروری ہوتا ہے۔ میں برسوں سے ونڈوز (Windows) پر پاک اُردُو انسٹالر استعمال کرتا آرہا ہوں۔ اُس کا فونیٹک لے آؤٹ (phonetic layout) ایسا ہے جیسے اُنگلیوں کی زبان سمجھتا ہو؛ آسان اور فطری۔ مگر جب بھی لینکس (Linux) پر منتقل ہونے کی کوشش کی، ایک چیز ہمیشہ روک دیتی تھی: اُردُو کے لیے کوئی ایسا لے آؤٹ ہی نہیں تھا جو مکمل (polished)، خوبصورت اور فیچر رِچ (feature-rich) ہو، ونڈوز جیسا سکون کہیں نہ مِلا۔    </p>
    </p>

    <p>

یہ وہ خلاء تھا جسے پُر کرنے کا عزم کِیا۔

    </p>


    <p>

یہ پراجیکٹ پاک اُردو انسٹالر کا ایک خالص، محبت بھرا پورٹ (port) ہے – ایسا لےآؤٹ جو اُردُو بولنے والوں کو ہر پلیٹ فارم پر اپنائیت کا احساس دے، چاہے وہ لینکس (Linux) ہو، ونڈوز (Windows) یا میک اوایس (macOS)۔ اگر آپ بھی کبھی سوچتے رہے ہیں کہ لینکس (Linux) پر اُردُو صحیح طریقے سے کیسے لِکھی جائے – اور کوئی موزوں حل نہیں مِلا–

    </p>


    <p>

تو شاید آپ کی تلاش اب ختم ہو چُکی ہے۔

    </p>

    <p>

–	ناشط احمد برقؔ


    </p>

  </div>

  <div class="welcome-message">
  <p><strong>Pak Urdu Phonetic</strong> is an Urdu keyboard layout faithfully ported from the popular Windows-based <a href="https://mbilalm.com/urdu-installer.php">Pak Urdu Installer</a> layout by <strong>mBilalm</strong>. It offers the same simple, intuitive phonetic typing experience and brings this widely adopted standard to the Keyman platform for cross-platform use.</p>

<p><strong>With over 160+ unique key mappings</strong> across regular, Shift, AltGr (Right Alt), and Shift+AltGr combinations, this layout offers the most complete phonetic Urdu typing solution available — more comprehensive than any previous Urdu keyboard layout to date.</p>
  </div>

  <div class="keyman-notice">
    <p>This keyboard layout is intended for use with <strong>Keyman</strong> keyboard software.
    Please ensure you have Keyman installed to use this keyboard package effectively.</p>
  </div>

    <h2>⌨️ Keyboard Layout Viewer</h2>
  <p>The visual keyboard layout below shows which Urdu characters appear when you press different keys and modifiers (Shift, AltGr, AltGr + Shift).</p>

  <div id='osk' data-states='default shift rightalt rightalt-shift'></div>

  <h2>✨ Key Features</h2>
 <ul>
      <li><strong>Phonetic Layout:</strong> Type Urdu using English phonetic sounds</li>
      <li><strong>Keyman Compatible:</strong> Designed specifically for Keyman implementation</li>
      <li><strong>Unicode Support:</strong> Proper rendering of Urdu characters</li>
    <li><strong>Cross-Platform:</strong> Works across Linux, Windows, and macOS via Keyman, with support for both physical and on-screen keyboards.</li>
      <li><strong>Easy Installation:</strong> Simple keyboard package installation</li>
    </ul>

  <h2>💡 Getting Started</h2>
  <ol>
    <li>Ensure Keyman is installed on your system</li>
    <li>Install the Pak Urdu Phonetic package</li>
    <li>Select the keyboard in Keyman's input method</li>
    <li>Open any text editor or application</li>
    <li>Start typing English letters to get Urdu characters</li>
    <li>The keyboard follows phonetic patterns - type how words sound!</li>
  </ol>

  <h2>Key Mappings</h2>

  <h3>Regular Layout
</h3>
         <table>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Character</th>
                    <th>Unicode</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>U+0030</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>U+0031</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>U+0032</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>3</td>
                    <td>U+0033</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>4</td>
                    <td>U+0034</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>5</td>
                    <td>U+0035</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>6</td>
                    <td>U+0036</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>7</td>
                    <td>U+0037</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>8</td>
                    <td>U+0038</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>9</td>
                    <td>U+0039</td>
                </tr>
                <tr>
                    <td>A</td>
                    <td>ا</td>
                    <td>U+0627</td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>ب</td>
                    <td>U+0628</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>چ</td>
                    <td>U+0686</td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>د</td>
                    <td>U+062F</td>
                </tr>
                <tr>
                    <td>E</td>
                    <td>ع</td>
                    <td>U+0639</td>
                </tr>
                <tr>
                    <td>F</td>
                    <td>ف</td>
                    <td>U+0641</td>
                </tr>
                <tr>
                    <td>G</td>
                    <td>گ</td>
                    <td>U+06AF</td>
                </tr>
                <tr>
                    <td>H</td>
                    <td>ھ</td>
                    <td>U+06BE</td>
                </tr>
                <tr>
                    <td>I</td>
                    <td>ی</td>
                    <td>U+06CC</td>
                </tr>
                <tr>
                    <td>J</td>
                    <td>ج</td>
                    <td>U+062C</td>
                </tr>
                <tr>
                    <td>K</td>
                    <td>ک</td>
                    <td>U+06A9</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>ل</td>
                    <td>U+0644</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>م</td>
                    <td>U+0645</td>
                </tr>
                <tr>
                    <td>N</td>
                    <td>ن</td>
                    <td>U+0646</td>
                </tr>
                <tr>
                    <td>O</td>
                    <td>ہ</td>
                    <td>U+06C1</td>
                </tr>
                <tr>
                    <td>P</td>
                    <td>پ</td>
                    <td>U+067E</td>
                </tr>
                <tr>
                    <td>Q</td>
                    <td>ق</td>
                    <td>U+0642</td>
                </tr>
                <tr>
                    <td>R</td>
                    <td>ر</td>
                    <td>U+0631</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>س</td>
                    <td>U+0633</td>
                </tr>
                <tr>
                    <td>T</td>
                    <td>ت</td>
                    <td>U+062A</td>
                </tr>
                <tr>
                    <td>U</td>
                    <td>ئ</td>
                    <td>U+0626</td>
                </tr>
                <tr>
                    <td>V</td>
                    <td>ط</td>
                    <td>U+0637</td>
                </tr>
                <tr>
                    <td>W</td>
                    <td>و</td>
                    <td>U+0648</td>
                </tr>
                <tr>
                    <td>X</td>
                    <td>ش</td>
                    <td>U+0634</td>
                </tr>
                <tr>
                    <td>Y</td>
                    <td>ے</td>
                    <td>U+06D2</td>
                </tr>
                <tr>
                    <td>Z</td>
                    <td>ز</td>
                    <td>U+0632</td>
                </tr>
                <tr>
                    <td>`</td>
                    <td>ٍ</td>
                    <td>U+064D</td>
                </tr>
                <tr>
                    <td>\</td>
                    <td>؎</td>
                    <td>U+060E</td>
                </tr>
                <tr>
                    <td>;</td>
                    <td>؛</td>
                    <td>U+061B</td>
                </tr>
                <tr>
                    <td>,</td>
                    <td>،</td>
                    <td>U+060C</td>
                </tr>
                <tr>
                    <td>=</td>
                    <td>ٓ</td>
                    <td>U+0653</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>U+002D</td>
                </tr>
                <tr>
                    <td>[</td>
                    <td>ٌ</td>
                    <td>U+064C</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>۔</td>
                    <td>U+06D4</td>
                </tr>
                <tr>
                    <td>&#39;</td>
                    <td>&#39;</td>
                    <td>U+0027</td>
                </tr>
                <tr>
                    <td>]</td>
                    <td>ْ</td>
                    <td>U+0652</td>
                </tr>
                <tr>
                    <td>/</td>
                    <td>/</td>
                    <td>U+002F</td>
                </tr>
            </tbody>
        </table>
   <h3>Shift Layout
</h3>
    <table>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Character</th>
                    <th>Unicode</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>(</td>
                    <td>U+0028</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>!</td>
                    <td>U+0021</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>@</td>
                    <td>U+0040</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>#</td>
                    <td>U+0023</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>$</td>
                    <td>U+0024</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>٪</td>
                    <td>U+066A</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>ۂ</td>
                    <td>U+06C2</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>&amp;</td>
                    <td>U+0026</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>٭</td>
                    <td>U+066D</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>)</td>
                    <td>U+0029</td>
                </tr>
                <tr>
                    <td>A</td>
                    <td>آ</td>
                    <td>U+0622</td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>﷽</td>
                    <td>U+FDFD</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>ث</td>
                    <td>U+062B</td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>ڈ</td>
                    <td>U+0688</td>
                </tr>
                <tr>
                    <td>E</td>
                    <td>ؑ</td>
                    <td>U+0611</td>
                </tr>
                <tr>
                    <td>F</td>
                    <td>ٖ</td>
                    <td>U+0656</td>
                </tr>
                <tr>
                    <td>G</td>
                    <td>غ</td>
                    <td>U+063A</td>
                </tr>
                <tr>
                    <td>H</td>
                    <td>ح</td>
                    <td>U+062D</td>
                </tr>
                <tr>
                    <td>I</td>
                    <td>ٰ</td>
                    <td>U+0670</td>
                </tr>
                <tr>
                    <td>J</td>
                    <td>ض</td>
                    <td>U+0636</td>
                </tr>
                <tr>
                    <td>K</td>
                    <td>خ</td>
                    <td>U+062E</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>ؒ</td>
                    <td>U+0612</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>ؐ</td>
                    <td>U+0610</td>
                </tr>
                <tr>
                    <td>N</td>
                    <td>ں</td>
                    <td>U+06BA</td>
                </tr>
                <tr>
                    <td>O</td>
                    <td>ۃ</td>
                    <td>U+06C3</td>
                </tr>
                <tr>
                    <td>P</td>
                    <td>ُ</td>
                    <td>U+064F</td>
                </tr>
                <tr>
                    <td>Q</td>
                    <td>ﷺ</td>
                    <td>U+FDFA</td>
                </tr>
                <tr>
                    <td>R</td>
                    <td>ڑ</td>
                    <td>U+0691</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>ص</td>
                    <td>U+0635</td>
                </tr>
                <tr>
                    <td>T</td>
                    <td>ٹ</td>
                    <td>U+0679</td>
                </tr>
                <tr>
                    <td>U</td>
                    <td>ء</td>
                    <td>U+0621</td>
                </tr>
                <tr>
                    <td>V</td>
                    <td>ظ</td>
                    <td>U+0638</td>
                </tr>
                <tr>
                    <td>W</td>
                    <td>ؤ</td>
                    <td>U+0624</td>
                </tr>
                <tr>
                    <td>X</td>
                    <td>ژ</td>
                    <td>U+0698</td>
                </tr>
                <tr>
                    <td>Y</td>
                    <td>ۓ</td>
                    <td>U+06D3</td>
                </tr>
                <tr>
                    <td>Z</td>
                    <td>ذ</td>
                    <td>U+0630</td>
                </tr>
                <tr>
                    <td>`</td>
                    <td>ً</td>
                    <td>U+064B</td>
                </tr>
                <tr>
                    <td>\</td>
                    <td>ؔ</td>
                    <td>U+0614</td>
                </tr>
                <tr>
                    <td>;</td>
                    <td>:</td>
                    <td>U+003A</td>
                </tr>
                <tr>
                    <td>,</td>
                    <td>ِ</td>
                    <td>U+0650</td>
                </tr>
                <tr>
                    <td>=</td>
                    <td>ۤ</td>
                    <td>U+06E4</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>ـ</td>
                    <td>U+0640</td>
                </tr>
                <tr>
                    <td>[</td>
                    <td>ٗ</td>
                    <td>U+0657</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>َ</td>
                    <td>U+064E</td>
                </tr>
                <tr>
                    <td>&#39;</td>
                    <td>&quot;</td>
                    <td>U+0022</td>
                </tr>
                <tr>
                    <td>]</td>
                    <td>ّ</td>
                    <td>U+0651</td>
                </tr>
                <tr>
                    <td>/</td>
                    <td>؟</td>
                    <td>U+061F</td>
                </tr>
            </tbody>
        </table>
   <h3>AltGr (Right Alt) Layout
</h3>
        <table>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Character</th>
                    <th>Unicode</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>۰</td>
                    <td>U+06F0</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>۱</td>
                    <td>U+06F1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>۲</td>
                    <td>U+06F2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>۳</td>
                    <td>U+06F3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>۴</td>
                    <td>U+06F4</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>۵</td>
                    <td>U+06F5</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>۶</td>
                    <td>U+06F6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>۷</td>
                    <td>U+06F7</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>۸</td>
                    <td>U+06F8</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>۹</td>
                    <td>U+06F9</td>
                </tr>
                <tr>
                    <td>A</td>
                    <td>أ</td>
                    <td>U+0623</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>ۣ</td>
                    <td>U+06E3</td>
                </tr>
                <tr>
                    <td>E</td>
                    <td>۠</td>
                    <td>U+06E0</td>
                </tr>
                <tr>
                    <td>I</td>
                    <td>ي</td>
                    <td>U+064A</td>
                </tr>
                <tr>
                    <td>J</td>
                    <td>ۚ</td>
                    <td>U+06DA</td>
                </tr>
                <tr>
                    <td>K</td>
                    <td>ك</td>
                    <td>U+0643</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>ۙ</td>
                    <td>U+06D9</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>ۘ</td>
                    <td>U+06D8</td>
                </tr>
                <tr>
                    <td>N</td>
                    <td>ۨ</td>
                    <td>U+06E8</td>
                </tr>
                <tr>
                    <td>O</td>
                    <td>ه</td>
                    <td>U+0647</td>
                </tr>
                <tr>
                    <td>Q</td>
                    <td>ۥ</td>
                    <td>U+06E5</td>
                </tr>
                <tr>
                    <td>R</td>
                    <td>ؓ</td>
                    <td>U+0613</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>ۜ</td>
                    <td>U+06DC</td>
                </tr>
                <tr>
                    <td>T</td>
                    <td>‌‌ZERO WIDTH NON-JOINER (ZWNJ)‌</td>
                    <td>U+200C</td>
                </tr>
                <tr>
                    <td>U</td>
                    <td>ٔ</td>
                    <td>U+0654</td>
                </tr>
                <tr>
                    <td>V</td>
                    <td>ؕ</td>
                    <td>U+0615</td>
                </tr>
                <tr>
                    <td>W</td>
                    <td>ZERO WIDTH JOINER (ZWJ)‍</td>
                    <td>U+200D</td>
                </tr>
                <tr>
                    <td>Y</td>
                    <td>؁</td>
                    <td>U+0601</td>
                </tr>
                <tr>
                    <td>Z</td>
                    <td>ۡ</td>
                    <td>U+06E1</td>
                </tr>
                <tr>
                    <td>`</td>
                    <td>ۤ</td>
                    <td>U+06E4</td>
                </tr>
                <tr>
                    <td>\</td>
                    <td>؏</td>
                    <td>U+060F</td>
                </tr>
                <tr>
                    <td>;</td>
                    <td>“</td>
                    <td>U+201C</td>
                </tr>
                <tr>
                    <td>,</td>
                    <td>۫</td>
                    <td>U+06EB</td>
                </tr>
                <tr>
                    <td>=</td>
                    <td>؂</td>
                    <td>U+0602</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>؀</td>
                    <td>U+0600</td>
                </tr>
                <tr>
                    <td>[</td>
                    <td>۩</td>
                    <td>U+06E9</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>ۯ</td>
                    <td>U+06EF</td>
                </tr>
                <tr>
                    <td>&#39;</td>
                    <td>”</td>
                    <td>U+201D</td>
                </tr>
                <tr>
                    <td>]</td>
                    <td>٘</td>
                    <td>U+0658</td>
                </tr>
            </tbody>
        </table>
  <h3>AltGr + Shift Layout
</h3>
   <table>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Character</th>
                    <th>Unicode</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>﴿</td>
                    <td>U+FD3F</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ٱ</td>
                    <td>U+0671</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>۬</td>
                    <td>U+06EC</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>ۮ</td>
                    <td>U+06EE</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>ۧ</td>
                    <td>U+06E7</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>۞</td>
                    <td>U+06DE</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>﴾</td>
                    <td>U+FD3E</td>
                </tr>
                <tr>
                    <td>A</td>
                    <td>إ</td>
                    <td>U+0625</td>
                </tr>
                <tr>
                    <td>E</td>
                    <td>علیہ السلام</td>
                    <td>U+0639 U+0644 U+06CC U+06C1 U+0020 U+0627 U+0644 U+0633 U+0644 U+0627 U+0645</td>
                </tr>
                <tr>
                    <td>I</td>
                    <td>ى</td>
                    <td>U+0649</td>
                </tr>
                <tr>
                    <td>J</td>
                    <td>ۭ</td>
                    <td>U+06ED</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>رحمۃ اللہ علیہ</td>
                    <td>U+0631 U+062D U+0645 U+06C3 U+0020 U+0627 U+0644 U+0644 U+06C1 U+0020 U+0639 U+0644 U+06CC U+06C1</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>ۢ</td>
                    <td>U+06E2</td>
                </tr>
                <tr>
                    <td>N</td>
                    <td>ۿ</td>
                    <td>U+06FF</td>
                </tr>
                <tr>
                    <td>O</td>
                    <td>ة</td>
                    <td>U+0629</td>
                </tr>
                <tr>
                    <td>P</td>
                    <td>ۗ</td>
                    <td>U+06D7</td>
                </tr>
                <tr>
                    <td>Q</td>
                    <td>ڪ</td>
                    <td>U+06AA</td>
                </tr>
                <tr>
                    <td>R</td>
                    <td>رضی اللہ عنہ</td>
                    <td>U+0631 U+0636 U+06CC U+0020 U+0627 U+0644 U+0644 U+06C1 U+0020 U+0639 U+0646 U+06C1</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>۪</td>
                    <td>U+06EA</td>
                </tr>
                <tr>
                    <td>U</td>
                    <td>ٕ</td>
                    <td>U+0655</td>
                </tr>
                <tr>
                    <td>W</td>
                    <td>ۥ</td>
                    <td>U+06E5</td>
                </tr>
                <tr>
                    <td>X</td>
                    <td>ﷻ</td>
                    <td>U+FDFB</td>
                </tr>
                <tr>
                    <td>Y</td>
                    <td>ۦ</td>
                    <td>U+06E6</td>
                </tr>
                <tr>
                    <td>`</td>
                    <td>.</td>
                    <td>U+002E</td>
                </tr>
                <tr>
                    <td>\</td>
                    <td>؃</td>
                    <td>U+0603</td>
                </tr>
                <tr>
                    <td>;</td>
                    <td>‘</td>
                    <td>U+2018</td>
                </tr>
                <tr>
                    <td>,</td>
                    <td>؍</td>
                    <td>U+060D</td>
                </tr>
                <tr>
                    <td>[</td>
                    <td>ۖ</td>
                    <td>U+06D6</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>۝</td>
                    <td>U+06DD</td>
                </tr>
                <tr>
                    <td>&#39;</td>
                    <td>’</td>
                    <td>U+2019</td>
                </tr>
                <tr>
                    <td>/</td>
                    <td>ۛ</td>
                    <td>U+06DB</td>
                </tr>
            </tbody>
        </table>


  <p><strong>Total Keys:</strong> 47 | <strong>Total Mappings:</strong> 164</p>

  <h2>📖 Need Help?</h2>
  <p>If you encounter any issues, visit the
    <a href="https://github.com/NashitAhmedBarq/pak-urdu-phonetic">GitHub repository</a>
    or check <a href="https://keyman.com/support/">Keyman support</a>.</p>

    <p><strong>Credits:</strong><br><br>
    Original keyboard layout by <strong>mBilalm</strong> (<a href="https://mbilalm.com/urdu-installer.php">Pak Urdu Installer</a>)<br>
    Keyman port and packaging by <strong>Nashit Ahmed Barq</strong><br>
    Keyman implementation and distribution</p>
</div>
