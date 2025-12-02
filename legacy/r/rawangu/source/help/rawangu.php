<?php /*
  Name:             keyboard_rawang
  Copyright:        R. James © 2007 
  Documentation:    
  Description:      
  Create Date:      4 October 2010

  Modified Date:    4 October 2010
  Authors:          pbaehr
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          4 October 2010 - pbaehr - Create Rawang Help
*/
  $pagename = 'Rawang (deprecated) Keyboard Help';
  $pagetitle = 'Rawang (deprecated) Keyboard Help';
  $keymanpromourl = 'https://keyman.com/keyboards/rawangu';
  $style = <<<EXTRA
  .highlightExample {font-weight: bold; color: #0000ff}
  .highlightKeys img {vertical-align:baseline !important}
  .input {font-weight: bold; font-size: 1.2em; color: #a64826}
  .output {font-weight: bold; font-size: 1.2em; color: #0000ff}
  .typing p, ul {margin-top: 0px; margin-bottom: 2px}
EXTRA;
  require_once('header.php');
?>

<p style='margin:0px'>Keyboard &#169; 2007 R. James.</p>

<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Typing Instructions</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Author">Authorship</a><br/>


<div id='Overview'>
<h2>Overview</h2>
<p>
This keyboard is intended for the Rawang language of Myanmar and India. The keyboard is designed to be used with a standard (QWERTY) keyboard.  
</p>
<p class='keymanweb'>If any letters or symbols on this page or in this keyboard do not look correct, you will probably need to use a different font with this keyboard. Please read our <a target="_blank" href="/troubleshooting/#boxes">troubleshooting guide</a> for more help.
</p>
</div>

<div id='Using'>
<h2>Using this Keyboard</h2>

<h3>Keyboard Layout</h3>
<div id='osk'>
</div>

<div id="Examples">
<h3>Examples</h3>
<?php renderLanguageExamples(); ?>
</div>

<div id="Documentation">
<h3>Typing Instructions</h3>

<p>This keyboard is designed to work like a standard (QWERTY) keyboard. Tones (accents) in this keyboard are typed <b><i>after</i></b> the letter.</p> 
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>á</span>, type <span class='keys'>a[</span>.</p>

<p>To type a <b>low tone</b> (acute accent), use <span class='keys'>[</span>.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>Í</span>, type <span class='keys'>I[</span>.</p>

<p>To type a <b>high tone</b> (grave accent), use <span class='keys'>/</span>.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>ù</span>, type <span class='keys'>u/</span>.</p>

<p>Typing a high tone immediately after a low tone or a low tone after a high tone will switch the tone on a vowel.</p>
<p style='margin-left:40px'><b>Example:</b> After <span class='keys'>O[</span>, type <span class='keys'>/</span> to turn <span class='highlightExample'>Ó</span> into <span class='highlightExample'>Ò</span>.</p>
<p style='margin-left:40px'><b>Example:</b> After <span class='keys'>v/</span>, type <span class='keys'>[</span> to turn <span class='highlightExample'>v̀</span> into <span class='highlightExample'>v́</span>.</p>

<p>To type the vowel <span class='highlightExample'>ø</span>, use the <span class='keys'>;</span> key.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>ø</span>, type <span class='keys'>;</span>.</p>
<p style='margin-left:40px'><b>Example:</b> For <span class='highlightExample'>Ø</span>, type <span class='keys'>:</span>.</p>

<p>You can also type the special characters <span class='highlightExample'>;</span>, <span class='highlightExample'>:</span>, <span class='highlightExample'>/</span>, <span class='highlightExample'>[</span>, <span class='highlightExample'><</span>, and <span class='highlightExample'>></span> with this keyboard.</p>
<p style='margin-left:40px'>For <span class='highlightExample'>;</span>, type <span class='keys'><</span>.</p>
<p style='margin-left:40px'>For <span class='highlightExample'>:</span>, type <span class='keys'>></span>.</p>
<p style='margin-left:40px'>For <span class='highlightExample'>/</span>, type <span class='keys'>[A/]</span>.</p>
<p style='margin-left:40px'>For <span class='highlightExample'>[</span>, type <span class='keys'>[A[]</span>.</p>
<p style='margin-left:40px'>For <span class='highlightExample'><</span>, type <span class='keys'>[A,]</span>.</p>
<p style='margin-left:40px'>For <span class='highlightExample'>></span>, type <span class='keys'>[A.]</span>.</p>

</div>
</div>

<div id="Troubleshooting">
<h2>Troubleshooting</h2>
<p class='keymanweb'>If any letters or symbols on this page or in this keyboard do not look correct, you will probably need to use a different font with this keyboard. Please read our <a target="_blank" href="/troubleshooting/#boxes">troubleshooting guide</a> for more help.
</p>

<p>For any other questions, <a target="_blank" href="https://help.keyman.com/">contact us</a>.</p>

</div>

<div id="Resources">
<h2>Further Resources</h2>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="https://keyman.com/keyboards/rawangu">Download the Rawang Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="https://www.ethnologue.com/language/raw">More on the Rawang language from the Ethnologue</a></p>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 6.0</p>

</div>

<div id="Author">
<h3>Keyboard Authorship</h3>
<p>
This keyboard was created by R. James.  Tavultesoft gratefully acknowledges the contribution made by the author in developing this keyboard and making it available for Keyman Desktop and KeymanWeb. His effort enables people to communicate in Rawang.
</p>
</div>
<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p>
The Amharic keyboard layout for Keyman Desktop and KeymanWeb is Copyright 2007 R.James and Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
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


