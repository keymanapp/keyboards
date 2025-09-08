<?php 
  $pagename = 'Hupdah (SIL) Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<< END
        table {
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            position: sticky;
            top: 0;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .key-combo {
            font-weight: bold;
        }
    END;
?>

<div>
<p>
  The Hupdah (SIL) keyboard is for the <a href="https://en.wikipedia.org/wiki/Hup_language" alt="Hup language - Wikipedia">Hup language</a> (also called Hupda, Hupdah, Hupdé", "Húpd’äh, Jupde, and more). Hup language is one of the four Naduhup languages. 
</p>
<p>
  It is spoken by the Hupda indigenous Amazonian peoples who live on the border between Colombia and the Brazilian state of Amazonas.
</p>

<h1>Keyboard rules</h1>
<h2>Uppercase</h2>
<table>
    <thead>
        <tr>
            <th>Key 1</th>
            <th>Key 2</th>
            <th>Key 3</th>
            <th>Key 4</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>/</td><td>~</td><td>A</td><td></td><td class="result-cell">Ã́</td></tr>
        <tr><td>`</td><td>~</td><td>A</td><td></td><td class="result-cell">Ã̀</td></tr>
        <tr><td>/</td><td>:</td><td>A</td><td></td><td class="result-cell">Ä́</td></tr>
        <tr><td>`</td><td>:</td><td>A</td><td></td><td class="result-cell">Ä̀</td></tr>
        <tr><td>/</td><td></td><td>A</td><td></td><td class="result-cell">Á</td></tr>
        <tr><td>`</td><td></td><td>A</td><td></td><td class="result-cell">À</td></tr>
        <tr><td>~</td><td></td><td>A</td><td></td><td class="result-cell">Ã</td></tr>
        <tr><td>[</td><td></td><td>A</td><td></td><td class="result-cell">Ã́</td></tr>
        <tr><td>]</td><td></td><td>A</td><td></td><td class="result-cell">Ã̀</td></tr>
        <tr><td>:</td><td></td><td>A</td><td></td><td class="result-cell">Ä</td></tr>
        <tr><td>{</td><td></td><td>A</td><td></td><td class="result-cell">Ä́</td></tr>
        <tr><td>}</td><td></td><td>A</td><td></td><td class="result-cell">Ä̀</td></tr>
        <tr><td>,</td><td></td><td>C</td><td></td><td class="result-cell">Ç</td></tr>
        <tr><td>/</td><td>~</td><td>E</td><td></td><td class="result-cell">Ẽ́</td></tr>
        <tr><td>`</td><td>~</td><td>E</td><td></td><td class="result-cell">Ẽ̀</td></tr>
        <tr><td>/</td><td>:</td><td>E</td><td></td><td class="result-cell">Ë́</td></tr>
        <tr><td>`</td><td>:</td><td>E</td><td></td><td class="result-cell">Ë̀</td></tr>
        <tr><td>/</td><td></td><td>E</td><td></td><td class="result-cell">É</td></tr>
        <tr><td>`</td><td></td><td>E</td><td></td><td class="result-cell">È</td></tr>
        <tr><td>~</td><td></td><td>E</td><td></td><td class="result-cell">Ẽ</td></tr>
        <tr><td>[</td><td></td><td>E</td><td></td><td class="result-cell">Ẽ́</td></tr>
        <tr><td>]</td><td></td><td>E</td><td></td><td class="result-cell">Ẽ̀</td></tr>
        <tr><td>:</td><td></td><td>E</td><td></td><td class="result-cell">Ë</td></tr>
        <tr><td>{</td><td></td><td>E</td><td></td><td class="result-cell">Ë́</td></tr>
        <tr><td>}</td><td></td><td>E</td><td></td><td class="result-cell">Ë̀</td></tr>
        <tr><td>/</td><td>~</td><td>=</td><td>I</td><td class="result-cell">Ɨ̃́</td></tr>
        <tr><td>`</td><td>~</td><td>=</td><td>I</td><td class="result-cell">Ɨ̃̀</td></tr>
        <tr><td>/</td><td>~</td><td></td><td>I</td><td class="result-cell">Ĩ́</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>I</td><td class="result-cell">Ĩ̀</td></tr>
        <tr><td>~</td><td>=</td><td></td><td>I</td><td class="result-cell">Ɨ̃</td></tr>
        <tr><td>/</td><td>=</td><td></td><td>I</td><td class="result-cell">Ɨ́</td></tr>
        <tr><td>`</td><td>=</td><td></td><td>I</td><td class="result-cell">Ɨ̀</td></tr>
        <tr><td>[</td><td>=</td><td></td><td>I</td><td class="result-cell">Ɨ̃́</td></tr>
        <tr><td>]</td><td>=</td><td></td><td>I</td><td class="result-cell">Ɨ̃̀</td></tr>
        <tr><td>/</td><td></td><td></td><td>I</td><td class="result-cell">Í</td></tr>
        <tr><td>`</td><td></td><td></td><td>I</td><td class="result-cell">Ì</td></tr>
        <tr><td>~</td><td></td><td></td><td>I</td><td class="result-cell">Ĩ</td></tr>
        <tr><td>[</td><td></td><td></td><td>I</td><td class="result-cell">Ĩ́</td></tr>
        <tr><td>]</td><td></td><td></td><td>I</td><td class="result-cell">Ĩ̀</td></tr>
        <tr><td>=</td><td></td><td></td><td>I</td><td class="result-cell">Ɨ</td></tr>
        <tr><td>/</td><td>~</td><td></td><td>L</td><td class="result-cell">Ɨ̃́</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>L</td><td class="result-cell">Ɨ̃̀</td></tr>
        <tr><td>~</td><td></td><td></td><td>L</td><td class="result-cell">Ɨ̃</td></tr>
        <tr><td>/</td><td></td><td></td><td>L</td><td class="result-cell">Ɨ́</td></tr>
        <tr><td>`</td><td></td><td></td><td>L</td><td class="result-cell">Ɨ̀</td></tr>
        <tr><td>[</td><td></td><td></td><td>L</td><td class="result-cell">Ɨ̃́</td></tr>
        <tr><td>]</td><td></td><td></td><td>L</td><td class="result-cell">Ɨ̃̀</td></tr>
        <tr><td>/</td><td>~</td><td></td><td>O</td><td class="result-cell">Ṍ</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>O</td><td class="result-cell">Õ̀</td></tr>
        <tr><td>/</td><td>:</td><td></td><td>O</td><td class="result-cell">Ö́</td></tr>
        <tr><td>`</td><td>:</td><td></td><td>O</td><td class="result-cell">Ö̀</td></tr>
        <tr><td>/</td><td></td><td></td><td>O</td><td class="result-cell">Ó</td></tr>
        <tr><td>`</td><td></td><td></td><td>O</td><td class="result-cell">Ò</td></tr>
        <tr><td>~</td><td></td><td></td><td>O</td><td class="result-cell">Õ</td></tr>
        <tr><td>[</td><td></td><td></td><td>O</td><td class="result-cell">Ṍ</td></tr>
        <tr><td>]</td><td></td><td></td><td>O</td><td class="result-cell">Õ̀</td></tr>
        <tr><td>:</td><td></td><td></td><td>O</td><td class="result-cell">Ö</td></tr>
        <tr><td>{</td><td></td><td></td><td>O</td><td class="result-cell">Ö́</td></tr>
        <tr><td>}</td><td></td><td></td><td>O</td><td class="result-cell">Ö̀</td></tr>
        <tr><td>/</td><td>~</td><td></td><td>U</td><td class="result-cell">Ṹ</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>U</td><td class="result-cell">Ũ̀</td></tr>
        <tr><td>/</td><td></td><td></td><td>U</td><td class="result-cell">Ú</td></tr>
        <tr><td>`</td><td></td><td></td><td>U</td><td class="result-cell">Ù</td></tr>
        <tr><td>~</td><td></td><td></td><td>U</td><td class="result-cell">Ũ</td></tr>
        <tr><td>[</td><td></td><td></td><td>U</td><td class="result-cell">Ṹ</td></tr>
        <tr><td>]</td><td></td><td></td><td>U</td><td class="result-cell">Ũ̀</td></tr>
    </tbody>
</table>
<h2>Lowercase</h2>
<table>
    <thead>
        <tr>
            <th>Key 1</th>
            <th>Key 2</th>
            <th>Key 3</th>
            <th>Key 4</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>/</td><td>~</td><td></td><td>a</td><td class="result-cell">ã́</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>a</td><td class="result-cell">ã̀</td></tr>
        <tr><td>/</td><td>:</td><td></td><td>a</td><td class="result-cell">ä́</td></tr>
        <tr><td>`</td><td>:</td><td></td><td>a</td><td class="result-cell">ä̀</td></tr>
        <tr><td>/</td><td></td><td></td><td>a</td><td class="result-cell">á</td></tr>
        <tr><td>`</td><td></td><td></td><td>a</td><td class="result-cell">à</td></tr>
        <tr><td>~</td><td></td><td></td><td>a</td><td class="result-cell">ã</td></tr>
        <tr><td>[</td><td></td><td></td><td>a</td><td class="result-cell">ã́</td></tr>
        <tr><td>]</td><td></td><td></td><td>a</td><td class="result-cell">ã̀</td></tr>
        <tr><td>:</td><td></td><td></td><td>a</td><td class="result-cell">ä</td></tr>
        <tr><td>{</td><td></td><td></td><td>a</td><td class="result-cell">ä́</td></tr>
        <tr><td>}</td><td></td><td></td><td>a</td><td class="result-cell">ä̀</td></tr>
        <tr><td>,</td><td></td><td></td><td>c</td><td class="result-cell">ç</td></tr>
        <tr><td>/</td><td>~</td><td></td><td>e</td><td class="result-cell">ẽ́</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>e</td><td class="result-cell">ẽ̀</td></tr>
        <tr><td>/</td><td>:</td><td></td><td>e</td><td class="result-cell">ë́</td></tr>
        <tr><td>`</td><td>:</td><td></td><td>e</td><td class="result-cell">ë̀</td></tr>
        <tr><td>/</td><td></td><td></td><td>e</td><td class="result-cell">é</td></tr>
        <tr><td>`</td><td></td><td></td><td>e</td><td class="result-cell">è</td></tr>
        <tr><td>~</td><td></td><td></td><td>e</td><td class="result-cell">ẽ</td></tr>
        <tr><td>[</td><td></td><td></td><td>e</td><td class="result-cell">ẽ́</td></tr>
        <tr><td>]</td><td></td><td></td><td>e</td><td class="result-cell">ẽ̀</td></tr>
        <tr><td>:</td><td></td><td></td><td>e</td><td class="result-cell">ë</td></tr>
        <tr><td>{</td><td></td><td></td><td>e</td><td class="result-cell">ë́</td></tr>
        <tr><td>}</td><td></td><td></td><td>e</td><td class="result-cell">ë̀</td></tr>
        <tr><td>/</td><td>~</td><td>=</td><td>i</td><td class="result-cell">ɨ̃́</td></tr>
        <tr><td>`</td><td>~</td><td>=</td><td>i</td><td class="result-cell">ɨ̃̀</td></tr>
        <tr><td>/</td><td>~</td><td></td><td>i</td><td class="result-cell">ĩ́</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>i</td><td class="result-cell">ĩ̀</td></tr>
        <tr><td>~</td><td>=</td><td></td><td>i</td><td class="result-cell">ɨ̃</td></tr>
        <tr><td>/</td><td>=</td><td></td><td>i</td><td class="result-cell">ɨ́</td></tr>
        <tr><td>`</td><td>=</td><td></td><td>i</td><td class="result-cell">ɨ̀</td></tr>
        <tr><td>[</td><td>=</td><td></td><td>i</td><td class="result-cell">ɨ̃́</td></tr>
        <tr><td>]</td><td>=</td><td></td><td>i</td><td class="result-cell">ɨ̃̀</td></tr>
        <tr><td>/</td><td></td><td></td><td>i</td><td class="result-cell">í</td></tr>
        <tr><td>`</td><td></td><td></td><td>i</td><td class="result-cell">ì</td></tr>
        <tr><td>~</td><td></td><td></td><td>i</td><td class="result-cell">ĩ</td></tr>
        <tr><td>[</td><td></td><td></td><td>i</td><td class="result-cell">ĩ́</td></tr>
        <tr><td>]</td><td></td><td></td><td>i</td><td class="result-cell">ĩ̀</td></tr>
        <tr><td>=</td><td></td><td></td><td>i</td><td class="result-cell">ɨ</td></tr>
        <tr><td>/</td><td>~</td><td></td><td>l</td><td class="result-cell">ɨ̃́</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>l</td><td class="result-cell">ɨ̃̀</td></tr>
        <tr><td>~</td><td></td><td></td><td>l</td><td class="result-cell">ɨ̃</td></tr>
        <tr><td>/</td><td></td><td></td><td>l</td><td class="result-cell">ɨ́</td></tr>
        <tr><td>`</td><td></td><td></td><td>l</td><td class="result-cell">ɨ̀</td></tr>
        <tr><td>[</td><td></td><td></td><td>l</td><td class="result-cell">ɨ̃́</td></tr>
        <tr><td>]</td><td></td><td></td><td>l</td><td class="result-cell">ɨ̃̀</td></tr>
        <tr><td>/</td><td>~</td><td></td><td>o</td><td class="result-cell">ṍ</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>o</td><td class="result-cell">õ̀</td></tr>
        <tr><td>/</td><td>:</td><td></td><td>o</td><td class="result-cell">ö́</td></tr>
        <tr><td>`</td><td>:</td><td></td><td>o</td><td class="result-cell">ö̀</td></tr>
        <tr><td>/</td><td></td><td></td><td>o</td><td class="result-cell">ó</td></tr>
        <tr><td>`</td><td></td><td></td><td>o</td><td class="result-cell">ò</td></tr>
        <tr><td>~</td><td></td><td></td><td>o</td><td class="result-cell">õ</td></tr>
        <tr><td>[</td><td></td><td></td><td>o</td><td class="result-cell">ṍ</td></tr>
        <tr><td>]</td><td></td><td></td><td>o</td><td class="result-cell">õ̀</td></tr>
        <tr><td>:</td><td></td><td></td><td>o</td><td class="result-cell">ö</td></tr>
        <tr><td>{</td><td></td><td></td><td>o</td><td class="result-cell">ö́</td></tr>
        <tr><td>}</td><td></td><td></td><td>o</td><td class="result-cell">ö̀</td></tr>
        <tr><td>/</td><td>~</td><td></td><td>u</td><td class="result-cell">ṹ</td></tr>
        <tr><td>`</td><td>~</td><td></td><td>u</td><td class="result-cell">ũ̀</td></tr>
        <tr><td>/</td><td></td><td></td><td>u</td><td class="result-cell">ú</td></tr>
        <tr><td>`</td><td></td><td></td><td>u</td><td class="result-cell">ù</td></tr>
        <tr><td>~</td><td></td><td></td><td>u</td><td class="result-cell">ũ</td></tr>
        <tr><td>[</td><td></td><td></td><td>u</td><td class="result-cell">ṹ</td></tr>
        <tr><td>]</td><td></td><td></td><td>u</td><td class="result-cell">ũ̀</td></tr>
    </tbody>
</table>
<h2>Symbols & Punctuation marks</h2>
    <table>
        <thead>
            <tr>
                <th>Key 1</th>
                <th>Key 2</th>
                <th>Key 3</th>
                <th>Key 4</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>&lt;</td><td>[space]</td><td></td><td></td><td class="result-cell">‘</td></tr>
            <tr><td>=</td><td>%</td><td></td><td></td><td class="result-cell">‰</td></tr>
            <tr><td>-</td><td>-</td><td></td><td></td><td class="result-cell">–</td></tr>
            <tr><td>.</td><td>.</td><td></td><td></td><td class="result-cell">…</td></tr>
            <tr><td>=</td><td>.</td><td></td><td></td><td class="result-cell">•</td></tr>
            <tr><td>&lt;</td><td>&lt;</td><td></td><td></td><td class="result-cell">“</td></tr>
            <tr><td>=</td><td>=</td><td></td><td></td><td class="result-cell">—</td></tr>
            <tr><td>[space]</td><td>&gt;</td><td></td><td></td><td class="result-cell">’</td></tr>
            <tr><td>&gt;</td><td>&gt;</td><td></td><td></td><td class="result-cell">”</td></tr>
            <tr><td>=</td><td>&gt;</td><td></td><td></td><td class="result-cell">‣</td></tr>
            <tr><td>=</td><td>[</td><td></td><td></td><td class="result-cell">†</td></tr>
            <tr><td>=</td><td>]</td><td></td><td></td><td class="result-cell">‡</td></tr>
            
        </tbody>
    </table>

  <h2>Desktop Keyboard layouts</h2>
  <div id='osk' data-states='default shift'>
      
  </div>

  <h2>Touch Keyboard layouts</h2>
  <div id='osk-phone' data-states='default shift numeric'>
      
  </div>

</div>
