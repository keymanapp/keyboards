<?php
  $pagename = 'Pak Urdu Phonetic Keyboard Help';
  $pagetitle = $pagename;

  $pagestyle = <<<END
    .container { max-width: 900px; margin: 20px auto; padding: 20px; font-family: 'Segoe UI', sans-serif; line-height: 1.6; }
    h1 { font-size: 24px; color: #2c3e50; border-bottom: 2px solid #ddd; padding-bottom: 10px; margin-bottom: 20px; }
    h2 { font-size: 20px; color: #2980b9; margin-top: 30px; }
    h3 { font-size: 18px; margin-top: 20px; color: #2c3e50; }
    ul, ol { padding-left: 20px; }
    table { width: 100%; border-collapse: collapse; margin-top: 15px; }
    th, td { padding: 8px 12px; border: 1px solid #ccc; }
    th { background: #f0f0f0; }
    .welcome-message { background: #e3f2fd; padding: 15px; border-left: 4px solid #2196f3; }
    .keyman-notice { background: #fff3cd; padding: 10px 15px; border-left: 4px solid #ffc107; margin: 20px 0; }
    a { color: #1565c0; text-decoration: none; }
    a:hover { text-decoration: underline; }
  END;

  require_once('header.php');
?>

<style>

.container { max-width: 900px; margin: 20px auto; padding: 20px; font-family: 'Segoe UI', sans-serif; line-height: 1.6; }
    h1 { font-size: 24px; color: #2c3e50; border-bottom: 2px solid #ddd; padding-bottom: 10px; margin-bottom: 20px; }
    h2 { font-size: 20px; color: #2980b9; margin-top: 30px; }
    h3 { font-size: 18px; margin-top: 20px; color: #2c3e50; }
    ul, ol { padding-left: 20px; }
    table { width: 100%; border-collapse: collapse; margin-top: 15px; }
    th, td { padding: 8px 12px; border: 1px solid #ccc; }
    th { background: #f0f0f0; }
    .welcome-message { background: #e3f2fd; padding: 15px; border-left: 4px solid #2196f3; }
    .keyman-notice { background: #fff3cd; padding: 10px 15px; border-left: 4px solid #ffc107; margin: 20px 0; }
    a { color: #1565c0; text-decoration: none; }
    a:hover { text-decoration: underline; }

</style>
<div class="container">
  <h1>🎉 Welcome to Pak Urdu Phonetic!</h1>

<div class="welcome-message">
  <p><strong>Pak Urdu Phonetic</strong> is an Urdu keyboard layout faithfully ported from the popular Windows-based <a href="https://mbilalm.com/urdu-installer.php">Pak Urdu Installer</a> layout by <strong>mBilalm</strong>. It offers the same simple, intuitive phonetic typing experience and brings this widely adopted standard to the Keyman platform for cross-platform use.</p>

  <p>This Keyman-based layout is a modern reimplementation, adapted for cross-platform use (Linux, Windows, macOS) while maintaining compatibility with the original mapping for familiarity and ease of transition.</p>

  <p><strong>With over 170 unique key mappings</strong> spanning regular, Shift, AltGr (Right Alt), and Shift+AltGr combinations, this layout offers the most complete phonetic Urdu typing solution currently available — more comprehensive than any previous Urdu keyboard.</p>
</div>

  <div class="keyman-notice">
    <p>This keyboard layout is intended for use with <strong>Keyman</strong> keyboard software.
    Please ensure you have Keyman installed to use this keyboard package effectively.</p>
  </div>

  <h2>✨ Key Features</h2>
  <ul>
    <li><strong>Phonetic Layout:</strong> Type Urdu using English phonetic sounds</li>
    <li><strong>Keyman Compatible:</strong> Designed specifically for Keyman implementation</li>
    <li><strong>Unicode Support:</strong> Proper rendering of Urdu characters</li>
    <li><strong>Cross-Platform:</strong> Works on Linux, Windows and macOS via Keyman</li>
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

  <h2>⌨️ Keyboard Layout Viewer</h2>
  <p>The visual keyboard layout below shows which Urdu characters appear when you press different keys and modifiers (Shift, AltGr, etc.).</p>

  <div id='osk' data-states='default shift shift-ctrl alt shift-alt'></div>

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
        <tr><td>'</td><td>'</td><td>U+0027</td></tr>
        <tr><td>,</td><td>،</td><td>U+060C</td></tr>
        <tr><td>-</td><td>-</td><td>U+002D</td></tr>
        <tr><td>.</td><td>۔</td><td>U+06D4</td></tr>
        <tr><td>/</td><td>/</td><td>U+002F</td></tr>
        <tr><td>0</td><td>0</td><td>U+0030</td></tr>
        <tr><td>1</td><td>1</td><td>U+0031</td></tr>
        <tr><td>2</td><td>2</td><td>U+0032</td></tr>
        <tr><td>3</td><td>3</td><td>U+0033</td></tr>
        <tr><td>4</td><td>4</td><td>U+0034</td></tr>
        <tr><td>5</td><td>5</td><td>U+0035</td></tr>
        <tr><td>6</td><td>6</td><td>U+0036</td></tr>
        <tr><td>7</td><td>7</td><td>U+0037</td></tr>
        <tr><td>8</td><td>8</td><td>U+0038</td></tr>
        <tr><td>9</td><td>9</td><td>U+0039</td></tr>
        <tr><td>;</td><td>؛</td><td>U+061B</td></tr>
        <tr><td>=</td><td>ٓ</td><td>U+0653</td></tr>
        <tr><td>A</td><td>ا</td><td>U+0627</td></tr>
        <tr><td>B</td><td>ب</td><td>U+0628</td></tr>
        <tr><td>C</td><td>چ</td><td>U+0686</td></tr>
        <tr><td>D</td><td>د</td><td>U+062F</td></tr>
        <tr><td>E</td><td>ع</td><td>U+0639</td></tr>
        <tr><td>F</td><td>ف</td><td>U+0641</td></tr>
        <tr><td>G</td><td>گ</td><td>U+06AF</td></tr>
        <tr><td>H</td><td>ھ</td><td>U+06BE</td></tr>
        <tr><td>I</td><td>ی</td><td>U+06CC</td></tr>
        <tr><td>J</td><td>ج</td><td>U+062C</td></tr>
        <tr><td>K</td><td>ک</td><td>U+06A9</td></tr>
        <tr><td>L</td><td>ل</td><td>U+0644</td></tr>
        <tr><td>M</td><td>م</td><td>U+0645</td></tr>
        <tr><td>N</td><td>ن</td><td>U+0646</td></tr>
        <tr><td>O</td><td>ہ</td><td>U+06C1</td></tr>
        <tr><td>P</td><td>پ</td><td>U+067E</td></tr>
        <tr><td>Q</td><td>ق</td><td>U+0642</td></tr>
        <tr><td>R</td><td>ر</td><td>U+0631</td></tr>
        <tr><td>S</td><td>س</td><td>U+0633</td></tr>
        <tr><td>Space</td><td>&nbsp;</td><td>U+0020</td></tr>
        <tr><td>T</td><td>ت</td><td>U+062A</td></tr>
        <tr><td>U</td><td>ئ</td><td>U+0626</td></tr>
        <tr><td>V</td><td>ط</td><td>U+0637</td></tr>
        <tr><td>W</td><td>و</td><td>U+0648</td></tr>
        <tr><td>X</td><td>ش</td><td>U+0634</td></tr>
        <tr><td>Y</td><td>ے</td><td>U+06D2</td></tr>
        <tr><td>Z</td><td>ز</td><td>U+0632</td></tr>
        <tr><td>[</td><td>ٌ</td><td>U+064C</td></tr>
        <tr><td>\</td><td>؎</td><td>U+060E</td></tr>
        <tr><td>]</td><td>ْ</td><td>U+0652</td></tr>
        <tr><td>`</td><td>ٍ</td><td>U+064D</td></tr>
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
        <tr><td>'</td><td>ً</td><td>U+0022</td></tr>
        <tr><td>,</td><td>ِ</td><td>U+0650</td></tr>
        <tr><td>-</td><td>ـ</td><td>U+003D</td></tr>
        <tr><td>.</td><td>َ</td><td>U+064E</td></tr>
        <tr><td>/</td><td>؟</td><td>U+061F</td></tr>
        <tr><td>0</td><td>٠</td><td>U+0660</td></tr>
        <tr><td>1</td><td>١</td><td>U+0661</td></tr>
        <tr><td>2</td><td>٢</td><td>U+0662</td></tr>
        <tr><td>3</td><td>٣</td><td>U+0663</td></tr>
        <tr><td>4</td><td>٤</td><td>U+0664</td></tr>
        <tr><td>5</td><td>٥</td><td>U+0665</td></tr>
        <tr><td>6</td><td>٦</td><td>U+0666</td></tr>
        <tr><td>7</td><td>٧</td><td>U+0667</td></tr>
        <tr><td>8</td><td>٨</td><td>U+0668</td></tr>
        <tr><td>9</td><td>٩</td><td>U+0669</td></tr>
        <tr><td>;</td><td>:</td><td>U+003A</td></tr>
        <tr><td>=</td><td>ۤ</td><td>U+002B</td></tr>
        <tr><td>A</td><td>آ</td><td>U+0622</td></tr>
        <tr><td>B</td><td>﷽</td><td>U+FDFD</td></tr>
        <tr><td>C</td><td>ث</td><td>U+062B</td></tr>
        <tr><td>D</td><td>ڈ</td><td>U+0688</td></tr>
        <tr><td>E</td><td>ؑ</td><td>U+0611</td></tr>
        <tr><td>F</td><td>ٖ</td><td>U+0656</td></tr>
        <tr><td>G</td><td>غ</td><td>U+063A</td></tr>
        <tr><td>H</td><td>ح</td><td>U+062D</td></tr>
        <tr><td>I</td><td>ٰ</td><td>U+0670</td></tr>
        <tr><td>J</td><td>ض</td><td>U+0636</td></tr>
        <tr><td>K</td><td>خ</td><td>U+062E</td></tr>
        <tr><td>L</td><td>ؒ</td><td>U+0612</td></tr>
        <tr><td>M</td><td>ؐ</td><td>U+0610</td></tr>
        <tr><td>N</td><td>ں</td><td>U+06BA</td></tr>
        <tr><td>O</td><td>ۃ</td><td>U+06C3</td></tr>
        <tr><td>P</td><td>ُ</td><td>U+064F</td></tr>
        <tr><td>Q</td><td>ﷺ</td><td>U+FDFA</td></tr>
        <tr><td>R</td><td>ڑ</td><td>U+0691</td></tr>
        <tr><td>S</td><td>ص</td><td>U+0635</td></tr>
        <tr><td>T</td><td>ٹ</td><td>U+0679</td></tr>
        <tr><td>U</td><td>ء</td><td>U+0621</td></tr>
        <tr><td>V</td><td>ظ</td><td>U+0638</td></tr>
        <tr><td>W</td><td>ؤ</td><td>U+0624</td></tr>
        <tr><td>X</td><td>ژ</td><td>U+0698</td></tr>
        <tr><td>Y</td><td>ۓ</td><td>U+06D3</td></tr>
        <tr><td>Z</td><td>ذ</td><td>U+0630</td></tr>
        <tr><td>[</td><td>ٗ</td><td>U+0657</td></tr>
        <tr><td>\</td><td>ؔ</td><td>U+0614</td></tr>
        <tr><td>]</td><td>ّ</td><td>U+0651</td></tr>
        <tr><td>`</td><td>۟</td><td>U+06DF</td></tr>
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
        <tr><td>'</td><td>”</td><td>U+201D</td></tr>
        <tr><td>,</td><td>۫</td><td>U+06EB</td></tr>
        <tr><td>-</td><td>؀</td><td>U+0600</td></tr>
        <tr><td>.</td><td>ۯ</td><td>U+06EF</td></tr>
        <tr><td>/</td><td></td><td>U+E011</td></tr>
        <tr><td>0</td><td>۰</td><td>U+06F0</td></tr>
        <tr><td>1</td><td>۱</td><td>U+06F1</td></tr>
        <tr><td>2</td><td>۲</td><td>U+06F2</td></tr>
        <tr><td>3</td><td>۳</td><td>U+06F3</td></tr>
        <tr><td>4</td><td>۴</td><td>U+06F4</td></tr>
        <tr><td>5</td><td>۵</td><td>U+06F5</td></tr>
        <tr><td>6</td><td>۶</td><td>U+06F6</td></tr>
        <tr><td>7</td><td>۷</td><td>U+06F7</td></tr>
        <tr><td>8</td><td>۸</td><td>U+06F8</td></tr>
        <tr><td>9</td><td>۹</td><td>U+06F9</td></tr>
        <tr><td>;</td><td>“</td><td>U+201C</td></tr>
        <tr><td>=</td><td>؂</td><td>U+0602</td></tr>
        <tr><td>A</td><td>أ</td><td>U+0623</td></tr>
        <tr><td>B</td><td>‏</td><td>U+200F</td></tr>
        <tr><td>C</td><td>ۣ</td><td>U+06E3</td></tr>
        <tr><td>D</td><td>‭</td><td>U+202D</td></tr>
        <tr><td>E</td><td>۠</td><td>U+06E0</td></tr>
        <tr><td>F</td><td>‮</td><td>U+202E</td></tr>
        <tr><td>G</td><td>‪</td><td>U+202A</td></tr>
        <tr><td>H</td><td>‫</td><td>U+202B</td></tr>
        <tr><td>I</td><td>ي</td><td>U+064A</td></tr>
        <tr><td>J</td><td>ۚ</td><td>U+06DA</td></tr>
        <tr><td>K</td><td>ك</td><td>U+0643</td></tr>
        <tr><td>L</td><td>ۙ</td><td>U+06D9</td></tr>
        <tr><td>M</td><td>ۘ</td><td>U+06D8</td></tr>
        <tr><td>N</td><td>ۨ</td><td>U+06E8</td></tr>
        <tr><td>O</td><td>ه</td><td>U+0647</td></tr>
        <tr><td>P</td><td>‬</td><td>U+202C</td></tr>
        <tr><td>Q</td><td>ۥ</td><td>U+06E5</td></tr>
        <tr><td>R</td><td>ؓ</td><td>U+0613</td></tr>
        <tr><td>S</td><td>ۜ</td><td>U+06DC</td></tr>
        <tr><td>T</td><td>‌</td><td>U+200C</td></tr>
        <tr><td>U</td><td>ٔ</td><td>U+0654</td></tr>
        <tr><td>V</td><td>ؕ</td><td>U+0615</td></tr>
        <tr><td>W</td><td>‍</td><td>U+200D</td></tr>
        <tr><td>X</td><td>‎</td><td>U+200E</td></tr>
        <tr><td>Y</td><td>؁</td><td>U+0601</td></tr>
        <tr><td>Z</td><td>ۡ</td><td>U+06E1</td></tr>
        <tr><td>[</td><td>۩</td><td>U+06E9</td></tr>
        <tr><td>\</td><td>؏</td><td>U+060F</td></tr>
        <tr><td>]</td><td>٘</td><td>U+0658</td></tr>
        <tr><td>`</td><td>ۤ</td><td>U+06E4</td></tr>
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
        <tr><td>'</td><td>’</td><td>U+2019</td></tr>
        <tr><td>,</td><td>؍</td><td>U+060D</td></tr>
        <tr><td>.</td><td>۝</td><td>U+06DD</td></tr>
        <tr><td>/</td><td>ۛ</td><td>U+06DB</td></tr>
        <tr><td>0</td><td>﴿</td><td>U+FD3F</td></tr>
        <tr><td>1</td><td>ٱ</td><td>U+0671</td></tr>
        <tr><td>5</td><td>۬</td><td>U+06EC</td></tr>
        <tr><td>6</td><td>ۮ</td><td>U+06EE</td></tr>
        <tr><td>7</td><td>ۧ</td><td>U+06E7</td></tr>
        <tr><td>8</td><td>۞</td><td>U+06DE</td></tr>
        <tr><td>9</td><td>﴾</td><td>U+FD3E</td></tr>
        <tr><td>;</td><td>‘</td><td>U+2018</td></tr>
        <tr><td>A</td><td>إ</td><td>U+0625</td></tr>
        <tr><td>E</td><td></td><td>U+E001</td></tr>
        <tr><td>I</td><td>ى</td><td>U+0649</td></tr>
        <tr><td>J</td><td>ۭ</td><td>U+06ED</td></tr>
        <tr><td>K</td><td></td><td>U+E020</td></tr>
        <tr><td>L</td><td></td><td>U+E002</td></tr>
        <tr><td>M</td><td>ۢ</td><td>U+06E2</td></tr>
        <tr><td>N</td><td>ۿ</td><td>U+06FF</td></tr>
        <tr><td>O</td><td>ة</td><td>U+0629</td></tr>
        <tr><td>P</td><td>ۗ</td><td>U+06D7</td></tr>
        <tr><td>Q</td><td>ڪ</td><td>U+06AA</td></tr>
        <tr><td>R</td><td></td><td>U+E000</td></tr>
        <tr><td>S</td><td>۪</td><td>U+06EA</td></tr>
        <tr><td>U</td><td>ٕ</td><td>U+0655</td></tr>
        <tr><td>W</td><td>ۥ</td><td>U+06E5</td></tr>
        <tr><td>Y</td><td>ۦ</td><td>U+06E6</td></tr>
        <tr><td>[</td><td>ۖ</td><td>U+06D6</td></tr>
        <tr><td>\</td><td>؃</td><td>U+0603</td></tr>
        <tr><td>]</td><td></td><td>U+E01D</td></tr>
        <tr><td>`</td><td>.</td><td>U+002E</td></tr>
      </tbody>
    </table>


  <p><strong>Total Keys:</strong> 48 | <strong>Total Mappings:</strong> 174</p>

  <h2>📖 Need Help?</h2>
  <p>If you encounter any issues, visit the
    <a href="https://github.com/NashitAhmedBarq/pak-urdu-phonetic">GitHub repository</a>
    or check <a href="https://keyman.com/support/">Keyman support</a>.</p>

    <p><strong>Credits:</strong><br><br>
    Original keyboard layout by <strong>mBilalm</strong> (<a href="https://mbilalm.com/urdu-installer.php">Pak Urdu Installer</a>)<br>
    Keyman port and packaging by <strong>Nashit Ahmed Barq</strong><br>
    Keyman implementation and distribution</p>
</div>
