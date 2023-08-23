<?php 
  $pagename = 'EuroLatin (deprecated) Keyboard Help';
  $pagetitle = 'EuroLatin (deprecated) Keyboard Help';
  $keymanpromourl = 'http://eurolatin.keymankeyboards.com';
  $style = <<<MORESTYLES
  
    #euroLatinLanguageList {display: none}
MORESTYLES;
  
  // Header we will tidy up later  
  require_once('header.php');

  $lglist = array("Afrikaans", "Albanian", "Aragonese", "Arpitan", "Asturian", "Aluet", "Bahamas Creole", 
  "Balearic", "Basque", "Bavarian", "Bislama", "Breton", "Bosnian", "Catalan", "Cimbrian", "Corsican", 
  "Cornish", "Crimean Tatar", "Croatian", "Czech", "Danish", "Drents", "Dutch","Emiliano-Romagnolo", 
  "Esperanto", "Estonian", "Extremaduran", "Fala", "Faroese", "Finnish", "Franconian", "French", "Frisian",
  "Friulian", "Gaelic, Scottish", "Gagauz (Latin script)", "Galician", "German", "Greenlandic", "Gronings",
  "Gullah", "Hawaiian", "Haitian", "Hungarian", "Icelandic", "Inuktitut", "Irish", "Istriot", "Italian",
  "Jamaican Creole", "Jutish", "Karelian", "Kashubian", "Kölsch", "Ladin", "Latin", "Latvian", "Ligurian",
  "Limburgish", "Lithuanian", "Lombard", "Luxembourgish", "Maltese", "Manx", "Mirandese", "Mócheno",
  "Neapolitan-Calabrese", "Norwegian", "Nynorsk", "Occitan", "Oromo", "Papiamentu", "Pfaelzisch", "Picard",
  "Piemontese", "Polish", "Portuguese", "Prussian", "Quechua", "Romani", "Romanian", "Romansch",
  "Saami (Latin script)", "Sallands", "Sardinian", "Saterfriesisch", "Saxon", "Scots",
  "Serbian (Latin script)", "Sicilian", "Silesian", "Slovak", "Slovenian", "Sorbian", "Spanish",
  "Stellingwerfs", "Swabian", "Swahili", "Swedish", "Swiss German", "Tagalog", "Tok Pisin", "Turkish",
  "Twents", "Valencian", "Veluws", "Venetian", "Vlaams", "Walloon", "Walser", "Welsh", "Westphalien",
  "Wolof", "Xhosa", "Yupik", "Zapotec", "Zeeuws", "Zhuang", "Zulu" );
    
  function language_table($lglist)
  {
    $t = "";
    $t .= "<table class='langs' border=0><tr>";
    for ($i=0;$i<sizeof($lglist);$i++)
    {
      if($i % 4 == 0 && $i > 0) $t .= "</tr><tr>";      
      $t .= "<td width=170>" . $lglist[$i] ."</td>";  
    }
    $t .= "</tr></table>";
    return $t;
  }
  
?>
<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
  <a style='margin-left:20px;' href="#Quickstart">Quickstart</a><br/>
  <a style='margin-left:20px;' href="#OSK">Keyboard Guide &amp; Typing Charts</a><br/>
  <a style='margin-left:20px;' href="#Examples">Examples</a><br/>
<a href="#Help">Troubleshooting</a><br/>
<a href="#Technical">Technical Information</a><br/>

<div id='Overview'>
  <h2>Overview</h2>
    <p>Many Latin-alphabet languages use letters and accent marks not found in English.  The EuroLatin keyboard enables you to type in <b>all</b> Latin-alphabet European languages, and most Latin-alphabet languages from the around the world.</p>

    <p id='languageListHeading'><a href='#' onclick='javascript:getElementById("euroLatinLanguageList").style.display="block";getElementById("languageListHeading").style.display="none";'>Click here</a> for a list of supported languages.</p>
  
  <div id='euroLatinLanguageList'>
    <div style='clear:left'>
      <div style='float:left'><h3>Languages supported include:</h3></div>
       <div style='float:right'>
         <p><a href='#' onclick='javascript:getElementById("euroLatinLanguageList").style.display="none";getElementById("languageListHeading").style.display="block";'>Hide list</a></p>
       </div>
    </div>
    <div style='clear:left'>
      <?php echo language_table($lglist); ?>  
    </div>
  </div>
</div>

<div id='Using'>
  <h2 style='font-size:16pt; margin-top: 20px; margin-bottom:-6px'>Using this Keyboard</h2>
</div>

<div id='Quickstart'>
  <h2>Quickstart</h2>
    <p>The EuroLatin keyboard is designed to be simple to use. Most letters, numbers, and symbols can be typed with the sequence <tt>symbol + character</tt>. For example:</p>
	<ul>
	  <li>To get <span class='highlightExample'>ô</span>, type <span class='keys'>^o</span>.</li>
	  <li>To get <span class='highlightExample'>²</span>, type <span class='keys'>\2</span>.</li>
	  <li>To get <span class='highlightExample'>¢</span>, type <span class='keys'>$c</span>.</li>
	</ul>
	
	<p>A few letters, numbers, and symbols are typed with other simple sequences. For example:</p>
	<ul>
	  <li>To get <span class='highlightExample'>æ</span>, type <span class='keys'>a\e</span>.</li>
	  <li>To get <span class='highlightExample'>«</span>, type <span class='keys'>&lt;&lt;</span>.</li>
	  <li>To get <span class='highlightExample'>⅓</span>, type <span class='keys'>1//3</span>.</li>
	</ul>	
	
	<p>The EuroLatin keyboard may be used with QWERTY, QWERTZ, AZERTY, Dvorak, or any other Latin-alphabet enabled hardware keyboard.</p>
</div>

<div id='OSK'> 
  <h2>Keyboard Guide &amp; Typing Charts</h2>
    <h3>Lowercase Letters</h3>
      <p>Type the symbol on the left and then the letter from the bottom row to get the character in the chart.</p>

	  <p><img style='border:none' src='lowercase.png' alt='Lowercase Typing Chart'/></p>

	<h3>Uppercase Letters</h3>
	  <p>Type the symbol on the left and then the letter from the bottom row to get the character in the chart.</p>

      <p><img style='border:none' src='uppercase.png' alt='Uppercase Typing Chart'/></p>
	  
	<h3>Digraphs</h3>
	  <p>Type the sequence in the bottom row to get the digraph in the top row.</p>

      <p><img style='border:none' src='digraphs.png' alt='Digraph Typing Chart'/></p>

   	<h3>Punctuation &amp; Symbols</h3>
 	  <p>Type the sequence in the bottom row to get the punctuation or symbols in the top row.<br/>
 	  <span style='color:#632523; font-weight:bold;'>Note:</span> Typing the combination <span class='keys'>\-</span> below gives a soft-hyphen (U+00AD).</p>
 
       <p><img style='border:none' src='symbols.png' alt='Punctuation and Symbols Typing Chart'/></p>	
   
 	<h3>Numbers &amp; Fractions</h3>
 	  <p>Type the sequence in the bottom row to get the punctuation or symbols in the top row.</p>
 
      <p><img style='border:none' src='numbers.png' alt='Numbers and Fractions Typing Chart'/></p>
 	  
 	<h3>Currency Symbols</h3>
 	  <p>Type the sequence in the bottom row to get the punctuation or symbols in the top row.</p>
 
      <p><img style='border:none' src='currency.png' alt='Currency Symbols Typing Chart'/></p>
 
 	<h3>Symbol Keys</h3>
 	  <p>Any of the symbol keys themselves can be entered by typing the key twice, instead of once.</p>
 
      <p><img style='border:none' src='prefix.png' alt='Symbol Key Typing Chart'/></p>

</div>	  
	  
<div id='Examples'>
  <h2>Examples</h2>
  <?php renderLanguageExamples(); ?>
</div>

<div id='Help'>
  <h2>Troubleshooting</h2>
    <h3>Font Issues</h3>
      <p>Most of the characters in this keyboard are included in the fonts Calibri, Cambria, Arial, and Times New Roman, as well as many other fonts. Some of the characters in this keyboard are only supported by specialty fonts, like Code2000.</p>
      <p>If you are having trouble seeing some of the characters in this keyboard, please read our <a target="_blank" href="/troubleshooting/#boxes">troubleshooting guide</a>.</p>
    <h3>Additional Issues</h3>
      <p>Please <a target="_blank" href="http://www.tavultesoft.com/contact.php">contact us</a> if you have any further questions.</p>
</div>

<div id='Technical'>
  <h2>Technical Information</h2>
    <h3>Unicode Version</h3>
      <p>This keyboard complies with Unicode 5.1 and later.</p>
  <h3>Keyboard Authorship</h3>
    <p>This keyboard was created by created by Tavultesoft Pty Ltd.</p> 
  <h3>Copyright and Terms of Use</h3>
    <p>The EuroLatin keyboard layout for Keyman Desktop and KeymanWeb is Copyright 2011 Tavultesoft Pty Ltd.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.</p>
    <p>THIS SOFTWARE IS PROVIDED BY TAVULTESOFT PTY LTD "AS IS" AND ANY
EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL TAVULTESOFT PTY LTD BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
    </p>
</div>

