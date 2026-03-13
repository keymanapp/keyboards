<?php
  $pagename = 'Kaḷaṣamondr Keyboard Help';
  $pagetitle = 'Kaḷaṣamondr Keyboard Help';
  $pagestyle = <<<END
        body {
          font-family: Arial, Helvetica, sans-serif;
          margin: 40px;
          background: #f9f9f9;
        }

        table {
          width: 100%;
          border-collapse: collapse;
          background: white;
        }

        thead.main-header, .main-foot {
          background: #2c3e50;
          color: white;
        }

        thead.sub-header {
          background-color: #284a6e;
          color: white;
        }

        th, td {
          padding: 12px 16px;
          text-align: left;
          border-bottom: 1px solid #ddd;
        }

        th {
          font-weight: 600;
          letter-spacing: 0.02em;
        }

        tbody tr:hover {
          background: #f5f7fa;
        }

        tbody tr:nth-child(even) {
          background: #fafafa;
        }

        kbd {
          font-size: 20px;
          background-color: black;
          color: white ;
          border-radius: 20px;
          text-align: center;
          padding: 2px 25px;
        }
    END;
  require_once('header.php');
?>

<div>
    <div class="keyboard-description">
        <p>The Kaḷaṣamondr keyboard is created to type the kalasha language with Roman (Latin) script. Allowing keyboard users to write in English and Kalasha without switching keyboards.</p>

        <p>
          The Kaḷaṣamondr keyboards has a number of rules to differentiate itself from the standard US keyboard. At first glance, the keyboard
          only has the typical english characters we are accustomed to, however, the backquote `\`` is replace with a dot. 
        </p>

        <p>
          If you are familiar with the language, you'd know that there are characters which created from two characters (sometimes with a dot) to produce one phoneme. These characters are
          <kbd>ch</kbd>, <kbd>c̣h</kbd>, <kbd>dh</kbd>, <kbd>ḍh</kbd>, <kbd>gh</kbd>, <kbd>jh</kbd>, <kbd>j̣h</kbd>, <kbd>lh</kbd>, <kbd>ḷh</kbd>, <kbd>mh</kbd>, 
          <kbd>nh</kbd>, <kbd>rh</kbd>, <kbd>ṛh</kbd>, <kbd>ṣh</kbd>, <kbd>th</kbd>, <kbd>ṭh</kbd>, <kbd>ẓh</kbd>, <kbd>sh</kbd>, and <kbd>zh</kbd>.
          <br>
          When one of these characters is typed, there is a special rule that would make sure the characters are deleted together (behaving like a composed letter), unless the next letter is typed, then
          the special phonemes return to "de-composed" behavior.
          <br>
          Exceptionally, the <kbd>sh</kbd>, <kbd>zh</kbd>, and <kbd>c</kbd> have composed characters to represent them:
          <ul>
            <li><kbd>sh</kbd> -> `š`</li>
            <li><kbd>zh</kbd> -> `ž`</li>
            <li><kbd>c</kbd> -> `č`</li>
          </ul> 
          
          <b>(See the key combinations below).</b>
        </p>
    </div>

    <div id='osk-container'>
        <h2>Desktop Keyboard Layout</h2>
        <div id='osk' data-states='default shift'></div>

        <div class="keyboard-key-combination">
        <h2>Key combinations</h2>
        <table>
            <thead class="main-header">
                <tr>
                  <th>Name</th>
                  <th>Lowercase</th>
                  <th>Keystroke</th>
                  <th>Uppercase</th>
                  <th>Keystroke</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>BACKTICK or BACKQUOTE</td>
                  <td>`</td>
                  <td><kbd>`</kbd><kbd>`</kbd></td>
                  <td></td>
                  <td></td>
                </tr>

                <tr>
                  <td>LATIN LETTER S WITH CARON</td>
                  <td>sh (š)</td>
                  <td><kbd>s</kbd><kbd>h</kbd><kbd>^</kbd></td>
                  <td>SH (Š)</td>
                  <td><kbd>S</kbd><kbd>H</kbd><kbd>^</kbd></td>
                </tr>

                <tr>
                  <td>LATIN LETTER Z WITH CARON</td>
                  <td>zh (ž)</td>
                  <td><kbd>z</kbd><kbd>h</kbd><kbd>^</kbd></td>
                  <td>ZH (Ž)</td>
                  <td><kbd>Z</kbd><kbd>H</kbd><kbd>^</kbd></td>
                </tr>

                <tr>
                  <td>LATIN LETTER C WITH CARON</td>
                  <td>c (č)</td>
                  <td><kbd>c</kbd><kbd>^</kbd></td>
                  <td>C (Č)</td>
                  <td><kbd>C</kbd><kbd>^</kbd></td>
                </tr>
                <thead class="sub-header">
                  <tr>
                    <th colspan="5">DOT ( &nbsp; ̣ ) </th>
                  </tr>
                </thead>
                <tr>
                  <td>LETTER A WITH DOT BELOW</td>
                  <td>ạ</td>
                  <td><kbd>a</kbd><kbd>`</kbd></td>
                  <td>Ạ</td>
                  <td><kbd>A</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                  <td>LETTER C WITH DOT BELOW</td>
                  <td>c̣</td>
                  <td><kbd>c</kbd><kbd>`</kbd></td>
                  <td>C̣</td>
                  <td><kbd>C</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER D WITH DOT BELOW</td>
                <td>ḍ</td>
                <td><kbd>d</kbd><kbd>`</kbd></td>
                <td>Ḍ</td>
                <td><kbd>D</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER E WITH DOT BELOW</td>
                <td>ẹ</td>
                <td><kbd>e</kbd><kbd>`</kbd></td>
                <td>Ẹ</td>
                <td><kbd>E</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER I WITH DOT BELOW</td>
                <td>ị</td>
                <td><kbd>i</kbd><kbd>`</kbd></td>
                <td>Ị</td>
                <td><kbd>I</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER L WITH DOT BELOW</td>
                <td>ḷ</td>
                <td><kbd>l</kbd><kbd>`</kbd></td>
                <td>Ḷ</td>
                <td><kbd>L</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER O WITH DOT BELOW</td>
                <td>ọ</td>
                <td><kbd>o</kbd><kbd>`</kbd></td>
                <td>Ọ</td>
                <td><kbd>O</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER R WITH DOT BELOW</td>
                <td>ṛ</td>
                <td><kbd>r</kbd><kbd>`</kbd></td>
                <td>Ṛ</td>
                <td><kbd>R</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER S WITH DOT BELOW</td>
                <td>ṣ</td>
                <td><kbd>s</kbd><kbd>`</kbd></td>
                <td>Ṣ</td>
                <td><kbd>S</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER T WITH DOT BELOW</td>
                <td>ṭ</td>
                <td><kbd>t</kbd><kbd>`</kbd></td>
                <td>Ṭ</td>
                <td><kbd>T</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER U WITH DOT BELOW</td>
                <td>ụ</td>
                <td><kbd>u</kbd><kbd>`</kbd></td>
                <td>Ụ</td>
                <td><kbd>U</kbd><kbd>`</kbd></td>
              </tr>

              <tr>
                <td>LETTER Z WITH DOT BELOW</td>
                <td>ẓ</td>
                <td><kbd>z</kbd><kbd>`</kbd></td>
                <td>Ẓ</td>
                <td><kbd>Z</kbd><kbd>`</kbd></td>
              </tr>
               <thead class="sub-header">
                  <tr>
                    <th colspan="5">TILDE (~)</th>
                  </tr>
                  <tr>
                </thead>
                  <td>LETTER A WITH TILDE</td>
                  <td>ã</td>
                  <td><kbd>a</kbd><kbd>~</kbd></td>
                  <td>Ã</td>
                  <td><kbd>A</kbd><kbd>~</kbd></td>
                </tr>

                <tr>
                  <td>LETTER E WITH TILDE</td>
                  <td>ẽ</td>
                  <td><kbd>e</kbd><kbd>~</kbd></td>
                  <td>Ẽ</td>
                  <td><kbd>E</kbd><kbd>~</kbd></td>
                </tr>

                <tr>
                  <td>LETTER I WITH TILDE</td>
                  <td>ĩ</td>
                  <td><kbd>i</kbd><kbd>~</kbd></td>
                  <td>Ĩ</td>
                  <td><kbd>I</kbd><kbd>~</kbd></td>
                </tr>

                <tr>
                  <td>LETTER O WITH TILDE</td>
                  <td>õ</td>
                  <td><kbd>o</kbd><kbd>~</kbd></td>
                  <td>Õ</td>
                  <td><kbd>O</kbd><kbd>~</kbd></td>
                </tr>

                <tr>
                  <td>LETTER U WITH TILDE</td>
                  <td>ũ</td>
                  <td><kbd>u</kbd><kbd>~</kbd></td>
                  <td>Ũ</td>
                  <td><kbd>U</kbd><kbd>~</kbd></td>
                </tr>
                <thead class="sub-header">
                  <tr>
                    <th colspan="5">DOT BELOW + TILDE ( &nbsp; ̣ ) + (~)</th>
                  </tr>
                  <tr>
                </thead>
                <tr>
                  <td>LETTER A WITH DOT BELOW AND TILDE</td>
                  <td>ạ̃</td>
                  <td><kbd>a</kbd><kbd>`</kbd><kbd>~</kbd></td>
                  <td>Ạ̃</td>
                  <td><kbd>A</kbd><kbd>`</kbd><kbd>~</kbd></td>
                </tr>

                <tr>
                  <td>LETTER E WITH DOT BELOW AND TILDE</td>
                  <td>ẹ̃</td>
                  <td><kbd>e</kbd><kbd>`</kbd><kbd>~</kbd></td>
                  <td>Ẹ̃</td>
                  <td><kbd>E</kbd><kbd>`</kbd><kbd>~</kbd></td>
                </tr>

                <tr>
                  <td>LETTER I WITH DOT BELOW AND TILDE</td>
                  <td>ị̃</td>
                  <td><kbd>i</kbd><kbd>`</kbd><kbd>~</kbd></td>
                  <td>Ị̃</td>
                  <td><kbd>I</kbd><kbd>`</kbd><kbd>~</kbd></td>
                </tr>

                <tr>
                  <td>LETTER O WITH DOT BELOW AND TILDE</td>
                  <td>ọ̃</td>
                  <td><kbd>o</kbd><kbd>`</kbd><kbd>~</kbd></td>
                  <td>Ọ̃</td>
                  <td><kbd>O</kbd><kbd>`</kbd><kbd>~</kbd></td>
                </tr>

                <tr>
                  <td>LETTER U WITH DOT BELOW AND TILDE</td>
                  <td>ụ̃</td>
                  <td><kbd>u</kbd><kbd>`</kbd><kbd>~</kbd></td>
                  <td>Ụ̃</td>
                  <td><kbd>U</kbd><kbd>`</kbd><kbd>~</kbd></td>
                </tr>
            </tbody>
              <tfoot class="main-foot">
                  <tr>
                    <th>Name</th>
                    <th>Lowercase</th>
                    <th>Keystroke</th>
                    <th>Uppercase</th>
                    <th>Keystroke</th>
                  </tr>
              </tfoot>
            </table>
        </div>
    </div>

    <div id='osk-tablet-container'>
        <h2>Mobile/Tablet Keyboard Layout</h2>
        <div id='osk-tablet' data-states='default shift numeric'></div>

        <h3>Longpress</h3>
        <img src="longpress.gif" alt="Mobile Layout - Longpress" style="width:50%">

    </div>

</div>
