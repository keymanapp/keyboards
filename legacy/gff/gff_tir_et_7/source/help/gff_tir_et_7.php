<?php /*
  Name:             Keyboard_gff_tir_et_7
  Copyright:        Keyboard ©2009 The Ge'ez Frontier Foundation
  Documentation:
  Description:
  Create Date:      18 Sep 2009

  Modified Date:    18 Sep 2009
  Authors:          mcdurdin, pbaehr
  Related Files:
  Dependencies:

  Bugs:
  Todo:
  Notes:
  History:          18 Sep 2009 - mcdurdin - Full help
*/
  $pagename = 'Tigrigna (Ethiopia) (GFF) Keyboard Help';
  $pagetitle = 'Tigrigna (Ethiopia) Keyboard Help';
  $keymanpromourl = 'http://ethiopic.keymankeyboards.com';
  $style = <<<EXTRA
  .highlightExample {font-family: GeezWeb !important; font-weight: bold; font-size: 1.4em; color: #0000ff}
  .highlightKeys img {vertical-align:baseline !important}
  .input {font-weight: bold; font-size: 1.2em; color: #a64826}
  .output {font-weight: bold; font-size: 1.2em; color: #0000ff}
  .typing p, ul {margin-top: 0px; margin-bottom: 2px}
EXTRA;
  require_once('header.php');
?>

<p style='margin:0px'>Keyboard &#169; 2009 Ge'ez Frontier Foundation.</p>

<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
<a style='margin-left:30px' target="_blank" href='chart.pdf'>Complete Typing Chart</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Author">Authorship</a><br/>


<div id='Overview'>
<h2>Overview</h2>
<p>
This keyboard is designed for use with the Tigrigna language of Ethiopia in Africa. Typing follows a consonant-vowel pattern. It is designed for use with a standard (QWERTY) keyboard.
</p>
<p class='keymanweb'>Most computers will automatically download a special font to display this keyboard correctly.  However, if the layout or the charts below do not display correctly, please read the <a target="_blank" href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>
<p>
<a href="#Related">Click here</a> to see keyboard layouts for Tigrigna (Eritrea) or other Ethiopic languages, like Amharic, Awngi, Bench, Blin, Dizi, Ge'ez, Me'en, Mursi, Sebatbeit, and Suri.
</p>
</div>

<div id='Using'>
<h2>Using this Keyboard</h2>

<h3>Keyboard Layout</h3>
<div id='osk'>
</div>

<div id='Quickstart'>
<h3>Quickstart</h3>

<p>This keyboard is designed to work intuitively with a standard (QWERTY) keyboard. This means that the Tigrigna sounds in this keyboard can be found by thinking of the most similar English letters. For example, you can type <span class='keys'>selamat</span> to get <span class='highlightExample'>ሰላማት</span>.
</p>
<p>As you can see, each Tigrigna character is typed with the base consonant first and then the vowel. For example, <span class='highlightExample'>ጤ</span> is typed <span class='keys'>T</span> then <span class='keys'>ie</span>.
</p>
</div>

<div id="Examples">
<h3>Examples</h3>
<?php renderLanguageExamples(); ?>
</div>

<div id="Documentation">
<h3>Keyboard Details</h3>

<p>
The Tigrigna keyboard uses an intuitive <i>phonetic</i> system where the Tigrigna sounds are matched to the nearest English letters. You can think of how a word sounds in
Tigrigna and then type it out with English.
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>selamat</span> produces <span class='highlightExample'>ሰላማት</span>
</p>
<p>
Because Tigrigna has more sounds than English, we sometimes have to adjust this
rule. For example, English does not have <span class='highlightExample'>ጽ</span> or <span class='highlightExample'>ቕ</span> and the closest similar letters would be <span class='input'>s</span> and <span class='input'>q</span> respectively. In this case you should type <span class='keys'>S</span> or <span class='keys'>Q</span>, for capital <span class='input'>S</span> and capital <span class='input'>Q</span>:</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>SbuQ</span> produces <span class='highlightExample'>ጽቡቕ</span></p>
<p>When the letter you want to type does not appear when you hit the similar sounding key in English, try using the capital next. If typing the capital does not work, then try hitting the key two times:
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>aarbi</span> produces <span class='highlightExample'>ዓርቢ</span></p>
<p>Next, when you need to type the extra letters of Tigrigna like <span class='highlightExample'>ሏ</span>,<span class='highlightExample'>ሟ</span>,<span class='highlightExample'>ኴ</span> you can do so by typing an extra vowel after a <span class='input'>u</span>:
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>mua</span> produces <span class='highlightExample'>ሟ</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>guie</span> produces <span class='highlightExample'>ጔ</span></p>
<p>
Finally, we must introduce a special rule for ' (apostrophe). Some words are spelt with a <span class='highlightExample'>ሳድስ</span> (6th) letter followed by a vowel, like <span class='highlightExample'>ርኤ</span> in <span class='highlightExample'>ገብርኤል</span>. We use the apostrophe here to type <span class='keys'>gebr'iel</span> to make sure we get <span class='highlightExample'>ርኤ</span> instead of <span class='highlightExample'>ሬ</span>.
</p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>wag'u</span> produces <span class='highlightExample'>ዋግኡ</span></p>
<p style='margin-left:40px'><b>Example:</b> typing <span class='keys'>T'uum</span> becomes <span class='highlightExample'>ጥዑም</span></p>
<p>
We also use the apostrophe for Ethiopic numbers, so <span class='keys'>'1</span> becomes <span class='highlightExample'>፩</span> and so on. If an English apostrophe <span class='highlightExample'>'</span> is needed in your document, type it twice: <span class='keys'>''</span>. This works for other punctuation as well,
so typing <span class='keys'>;</span> once makes <span class='highlightExample'>፤</span> and a second time gives English semi-colon <span class='input'>;</span>.
</p>
<p style='margin-top:10px'>
See <a target="_blank" href='TigrinyaEtTyping-English.pdf'>Typing in Tigrigna</a> for full details on how to type all Tigrigna letters, numbers and punctuation.
</p>
</div>
</div>

<div id="Troubleshooting">
<h2>Troubleshooting</h2>
<p class='keymanweb'>If the characters you type or those on the On Screen Keyboard do not appear to display correctly, please read the <a target="_blank" href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<p>For any other questions, <a target="_blank" href="https://keyman.com/contact/">contact us</a>.</p>

</div>

<div id="Resources">
<h2>Further Resources</h2>

<div id="Related">
<h3>Related Keyboard Layouts</h3>
<p>Keyboard Layouts for other Ethiopic languages:</p>
<p><a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_amh_7">Amharic</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_awn_7">Awngi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_bcq_7">Bench</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_byn_7">Blin</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mdx_7">Dizi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_gez_7">Ge'ez</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mym_7">Me'en</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_muz_7">Mursi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_sgw_7">Sebatbeit</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_suq_7">Suri</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tir_er_7">Tigrigna (Eritrea)</a></p>

</div>
<div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="https://keyman.com/keyboards/gff-tir-et-powerpack-7">Download the Tigrigna (Ethiopia) Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/tigrinya.htm">More on the Tigrigna Writing System at Omniglot.com</a><br/>
<a target="_blank" href="https://en.wikipedia.org/wiki/Tigrinya_language">More on the Tigrigna Language at Wikipedia.org</a><br/></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/ethiopic.htm">More on the Ge'ez Script at Omniglot.com</a><br/>
<a target="_blank" href="https://en.wikipedia.org/wiki/Ge%27ez_script">More on the Ge'ez Script at Wikipedia.org</a></p>
</div>
</div>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.1</p>

</div>

<div id="Author">
<h3>Keyboard Authorship</h3>
<p>
This keyboard was created by the Ge'ez Frontier Foundation.  Tavultesoft graciously acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb. Their effort assists in enabling people to communicate in their own language.
</p>
</div>
<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p>
The Tigrigna keyboard layout for Keyman Desktop and KeymanWeb is Copyright 2009 Ge'ez Frontier Foundation and Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
</p>
<p>
THIS SOFTWARE IS PROVIDED BY TAVULTESOFT PTY LTD "AS IS" AND ANY
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


