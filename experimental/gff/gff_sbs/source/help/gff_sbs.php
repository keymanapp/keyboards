<?php 
  $pagename = "Sheek Bakrii Saphaloo Qubee Keyboard";
  $pagetitle = "The Geʾez Frontier Foundation Sheek Bakrii Saphaloo Qubee Keyboard";
  $pagestyle = <<<END
  img.indented { text-indent: 10%}

table.flat { border-spacing: 0; margin: 0.5em 0 }
table.flat td, table.kb th { border: thin solid #666; text-align: center ; padding: 0.3em }
table.flat { border-bottom: hidden }
table.flat { empty-cells: show }
table.flat th { text-align: center; border: thin solid #666; background-color: #e0dacf }
table.flat caption { margin: 0.5em 0 0 0 }

   td.divide { border-left: 1px solid black }
   td.flat-bottom { border-bottom: 1px solid black }
   td.flat-top { border-top: 1px solid black }
  .note { background: #ffa }
  .note-emph { background: #ffa; font-style: italic }
  .question-unanswered { background: #ffa; font-style: italic; color: #ff0000 }
  .question-answered { background: #bfffa0; font-style: italic; text-decoration: line-through }
   body { max-width: 1200px }

table.kb th, table.kb td { padding: 0.3em }
table.kb th:first-child { background-color: #e0dacf; }
table.kb tr:first-child { background-color: #e0dacf; font-weight:bold; }
table.kb tr:first-child th:first-child { background-color: #ffffff; border-left-color: #ffffff; border-top-color: #ffffff }
table.kb tr:first-child th:last-child { background-color: #ffffff; border-right-color: #ffffff; border-top-color: #ffffff }
table.kb th { background-color: #e0dacf; border-left-color: #ffffff }
table.kb td, table.kb th { border: thin solid #666; text-align: center }
table.kb th { text-align: center; background-color: #d7d0b9 }
table.kb { border-bottom: hidden }
table.kb { empty-cells: show }
table.kb caption { margin: 0.5em 0 0 0 }
table.kb tr:last-child { text-align: center; background-color: #d7d0b9; font-weight:bold; }
table.kb tr:last-child th:first-child { background-color: #ffffff; border-left-color: #ffffff; border-bottom-color: #ffffff }
dd {margin: 0 0 1em; padding: 0}

table.punct th { font-weight: bold;  padding: 0.3em }
table.punct td { font-weight: normal; padding: 0.3em }
table.punct th:first-child { background-color: #e0dacf; }
table.punct tr:first-child { background-color: #e0dacf; }
table.punct tr:first-child th:first-child { background-color: #ffffff; border-left-color: #ffffff; border-top-color: #ffffff }
table.punct th { background-color: #e0dacf; border-left-color: #ffffff }
table.punct td, table.punct th { border: thin solid #666; text-align: center }
table.punct th { text-align: center; background-color: #d7d0b9 }
table.punct { border-bottom: hidden }
table.punct { empty-cells: show }

table.zaima th { font-weight: bold;  padding: 0.3em }
table.zaima td { font-weight: normal; padding: 0.3em }
table.zaima th:first-child { background-color: #e0dacf;}
table.zaima tr:first-child th  { background-color: #e0dacf; }
table.zaima tr:first-child th:first-child { background-color: #ffffff; border-left-color: #ffffff; border-top-color: #ffffff }
table.zaima th { background-color: #e0dacf; border-left-color: #ffffff }
table.zaima td, table.zaima th { border: thin solid #666; text-align: center }
table.zaima th { text-align: center; background-color: #d7d0b9 }
table.zaima { border-bottom: hidden }
table.zaima { empty-cells: show }

code {
    display: inline-block;
    width: 50px;
    border: 1px solid #000;
    text-align: center;
}
END;
  require_once('header.php');
?>


<h1>Sheek Bakrii Saphaloo Keyboard</h1>

<h2><a id="abstract" name="abstract"></a>Introduction</h2>

<p style="text-align: justify;">
This is a keyboard for typing the Sheek Bakrii Saphaloo script in a style very similar to typing in Qubee Latin.
Qubee Latin rules for typing Oromo language sounds are followed to the maximum extent possible,
in a few cases where the Sheek Bakrii Saphaloo script adds additional letters for the sounds
of other languages (Arabic for example), a small change from Qubee is introduced.  See the typing
manual for full details of the typing rules.
</p>


<p style="text-align: justify;">
The <a target="_blank" href="SBS-Typing-English.pdf">pdf manual</a> reviews typing in full detail.
</p>

<h3>Caveats</h3>
<p style="text-align: justify;">
This is an *exerimental* keyboard that will not be compatible with a future standard for the Sheek Bakrii Saphaloo
script. The font that the keyboard relies on, the <em>Sheek Bakri Saphaloo</em>  font, uses a temporary encoding
space that would change under a final standard for the script. The implication is that documents composed with
this typeface will be incompatible with the anticipated international standard and will either need to be
recomposed on converted into the standard encoding.
</p>

<hr/>

<h2>License</h2>

<p>This keyboard is copyright © Geʾez Frontier Foundation. It is distributed under the MIT free software license.</p>
