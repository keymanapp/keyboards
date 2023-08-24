<?php /*
  Name:             keyboard_yidish2k
  Copyright:        Keyboard © 2003 Gyula Zsigri
  Documentation:    
  Description:      
  Create Date:      22 Dec 2009

  Modified Date:    22 Dec 2009
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          22 Dec 2009 - mcdurdin - Wrote KMW help
*/
  $pagename = 'Yiddish Pasekh (deprecated) Keyboard Help';
  $pagetitle = 'Yiddish Pasekh (deprecated) Keyboard Help';
  $style = <<<END
.lang2 {font-family:"Times New Roman", Arial, Tahoma, Verdana; font-weight: bold; font-size: 1.2em; color: #0000ff}
h4 {font-size:11pt;}
table.grid { border-collapse: collapse; }
table.grid tr td, table.grid tr th { border: solid 1px #cccccc; }
END;

  require_once('header.php');


?>

<p>© 2002-2009 Gyula Zsigri.  All rights reserved.</p>

<br/>
<a href="#Overview">Overview</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#ProductInfo">Product Information</a><br/>
<a style='margin-left:20px' href="#Copyright">Copyright and Terms of Use</a><br/>

<div id='Overview'>
<h2>Overview</h2>

<p>This keyboard layout is designed to type Yiddish by transliteration.</p>

<p>This keyboard layout works best with a QWERTY (English) keyboard.  It uses standard Unicode fonts.  Many common Windows fonts support Yiddish,
including Times New Roman and Arial.  Use the Font Helper in Keyman Desktop to find more fonts that work with Yiddish.</p>

<h2>Keyboard Layout</h2>
<div id='osk'>
</div>

<div id='Quickstart'>
<h2>Quickstart</h2>
<p>This keyboard layout works intuitively with the QWERTY (English) keyboard.  Type Yiddish by transliteration: type
<span class='lang2'>ש</span> (shin) with <span class='keys'>sh</span> or <span class='lang2'>אײַ</span> (pasekh tsvey yudn) with
<span class='keys'>ay</span>.</p>

<p>You can use idle keys to speed up typing but you do not have to:</p>

<table class='grid'>
<tr><th>Key</th><th>Alternate method</th><th>Yiddish</th><th>Note</th></tr>
<tr><td><span class='keys'>c</span></td><td><span class='keys'>ts</span></td><td><span class='lang2'>ץ</span></td><td class='note'>From Eastern European orthographies</td></tr>
<tr><td><span class='keys'>j</span></td><td><span class='keys'>ey</span></td><td><span class='lang2'>ײ</span></td><td class='note'>The name of j rhymes with ey</td></tr>
<tr><td><span class='keys'>w</span></td><td><span class='keys'>sh</span></td><td><span class='lang2'>ש</span></td><td class='note'>Looks like</td></tr>
<tr><td><span class='keys'>x</span></td><td><span class='keys'>kh</span></td><td><span class='lang2'>ך</span></td><td class='note'>Phonetic symbol</td></tr>
</table>

<p><EM>Khof, mem, nun, fey</EM> and <EM>tsadek</EM>
are shaped automatically:&nbsp; they take their final forms at the end
of words and their regular forms otherwise.&nbsp; Isolated final forms
can be typed with shifted keys:</p>

<table class='grid'>
<tr><th>Key</th><th>Yiddish</th><th>Note</th></tr>
<tr><td><span class='keys'>[SC]</span></td><td><span class='lang2'>ץ</span></td><td class='note'>Final tsadek</td></tr>
<tr><td><span class='keys'>[SX]</span></td><td><span class='lang2'>ך</span></td><td class='note'>Final khof</td></tr>
</table>

<p><EM>Shtumer Alef</EM> is automatically inserted
before <EM>ay, ey, i, oy,</EM> or <EM>u</EM> at the beginning of
words.&nbsp; You can type a word-internal shtumer alef with
<span class='keys'>[SA]</span></p>

<p>Occasionally, you may need initial <EM>ay, ey,</EM>
etc. without a shtumer alef, e.g. when you want to list the letters of
the <EM>alefbeys</EM>.&nbsp; You can type them with the following key
combinations:</P>

<table class='grid'>
<tr><th>Key</th><th>Yiddish</th><th>Note</th></tr>
<tr><td><span class='keys'>[SE]</span></td><td><span class='lang2'>ײ</span></td><td class='note'></td></tr>
<tr><td><span class='keys'>[SI]</span></td><td><span class='lang2'>י</span></td><td class='note'></td></tr>
<tr><td><span class='keys'>[SJ]</span></td><td><span class='lang2'>ײ</span></td><td class='note'>The name of J rhymes with ey</td></tr>
<tr><td><span class='keys'>[SO]</span></td><td><span class='lang2'>ױ</span></td><td class='note'></td></tr>
<tr><td><span class='keys'>[SU]</span></td><td><span class='lang2'>ו</span></td><td class='note'></td></tr>
<tr><td><span class='keys'>[SY]</span></td><td><span class='lang2'>ײַ</span></td><td class='note'>The name of Y rhymes with ay</td></tr>
</table>

<p>Hebrew-specific letters are typed with shifted keys, too:</p>

<table class='grid'>
<tr><th>Key</th><th>Hebrew</th><th>Note</th></tr>
<tr><td><span class='keys'>[SB]</span></td><td><span class='lang2'>בֿ</span></td><td class='note'>veys</td></tr>
<tr><td><span class='keys'>[SH]</span></td><td><span class='lang2'>ח</span></td><td class='note'>khes</td></tr>
<tr><td><span class='keys'>[SK]</span></td><td><span class='lang2'>כּ</span></td><td class='note'>kof (Hebrew kaf)</td></tr>
<tr><td><span class='keys'>[SS]</span></td><td><span class='lang2'>ת</span></td><td class='note'>sof</td></tr>
<tr><td><span class='keys'>[ST]</span></td><td><span class='lang2'>תּ</span></td><td class='note'>tof</td></tr>
<tr><td><span class='keys'>[SW]</span></td><td><span class='lang2'>שׂ</span></td><td class='note'>sin</td></tr>
</table>

<p><EM>Geresh</EM> is typed with <span class='keys'>[SG]</span> and <EM>curly 
double quotes</EM> are typed with the <span class='keys'>q</span> key.&nbsp; The opening
quotation mark is low if Q is unshifted and high if shifted.</P>

<p>The <span class='keys'>\</span> key functions as a temporary place holder to separate letters or parts of compound words.&nbsp;
Type <span class='keys'>s\h</span> to output <span class='lang2'>סה</span> (samekh hey) instead of <span class='lang2'>ש</span> (shin), 
or type <span class='keys'>ge\aylt</span> to insert a <EM>shtumer alef</EM> between the <EM>ayen</EM> and the <EM>pasekh tsvey yudn</EM>.</p>

<p>The <span class='keys'>-</span> key outputs a makef after a Yiddish letter and a hyphen otherwise.&nbsp; If, for some reason, you need a
hyphen after a Yiddish letter, press the hyphen key twice.</p>

<p>A hyphen after a hyphen turns the hyphen into an en dash.<br />
A hyphen after an en dash turns the en dash into an em dash.<br />
A geresh after a geresh turns the geresh into gershayim.</p>

<div id="Troubleshooting">
<h2>Troubleshooting</h2>

<p>If you are having trouble with Yiddish text appearing left-to-right or re-ordering unexpectedly,
review Tavultesoft KB article <a href='http://tavultesoft.com/kb?id=41' target='_blank'>KMKB0041</a>.</p>

<p>For any other questions, <a target="_blank" href="http://www.tavultesoft.com/contact.php">contact us</a>.</p>

</div>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.1</p>

</div>

<div id="ProductInfo">
<h3>Product Information</h3>

<p>
Version 1.6 released 18 December 2009.  Includes automatic configuration, On Screen Keyboard and updated documentation.<br/>
Version 1.5 released in 2002.
</p>

<div id="Copyright">
<h3>Copyright and Terms of Use</h3>

<p>Use this product at your own risk.  You can freely use and distribute
it but you are not allowed to restrict the rights of others to freely
use and distribute it.</p>

<p>
The Yiddish Pasekh keyboard layout for Keyman Desktop and KeymanWeb is Copyright 2002-2009 Gyula Zsigri.
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


