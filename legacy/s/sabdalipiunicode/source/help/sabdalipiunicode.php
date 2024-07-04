<?php /*
  Name:             keyboard_sabdalipiunicode
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      18 Sep 2009

  Modified Date:    18 Sep 2009
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Sep 2009 - mcdurdin - Initial version
*/
?>
﻿<?php	
  $pagename = 'Assamese (Sabdalipi) (deprecated) Keyboard Help';
  $pagetitle = 'Assamese (Sabdalipi) (deprecated) Keyboard Help';
  $style = '.lang2 {font-size:180%}';
  require_once('header.php');
?>
   	
  
<p style='margin:0px'>Keyboard &#169; 2009 TI Trade and Tavultesoft</p>





<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Authorship">Authorship</a><br/>

<h4><a target="_blank" href="chart.pdf"><img border=0 style='vertical-align:bottom' src="<?php echo cdn('img/pdficon_small.gif'); ?>" /></a> Download this documentation in <a target="_blank" href="chart.pdf">PDF format</a>.</h4>


<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically 
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard is designed for the Assamese language.  It is a phonetic keyboard, which means the characters are arranged according to the letters of the English keyboard.
</p>
<p class='keymanweb'>
Most computers will automatically download a special font if needed to display this language correctly.
</p>
<p>
<a href="#Related">Click here</a> to see other keyboard layouts for Assamese.
</p>
</div>

<div id='Using'>
<h2>Using this Keyboard</h2>
</div>

<h3>Keyboard Layout</h3>
		<!-- On Screen Keyboard is automatically included here -->

<div id='osk'>
</div>

<div id="Examples">
<h3>Examples</h3>
		<!-- Simple example(s) illustrating the notes in the Quickstart section above -->

<?php renderLanguageExamples(); ?>

</div>

<div id="Documentation">
<h3>Keyboard Details</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->


<p>The Sabdalipi Assamese keyboard uses a phonetic-style layout, so that the key sequence 
for each Assamese (Unicode) character is usually the similar sounding English character, for example:</p>

<p style='margin-left:30px'>k is <span class='lang2'>ক</span>, g is <span class='lang2'>গ</span>, p is <span class='lang2'>প</span> and so on.</p>
<p>Similarly uppercase characters are used for the deep sounding characters, for example:</p>
<p style='margin-left:30px'> K is <span class='lang2'>খ</span>, G is <span class='lang2'>ঘ</span>, P is <span class='lang2'>ফ</span> and so on.</p>

<p>The plus '+' sign is used to create juktyakhars, for example:</p>

<p style='margin-left:30px'>typing 'l+p' would result in <span class='lang2'>ল্প</span><br />
typing 'j+j+b' would result in <span class='lang2'>জ্জ্ব</span></p>

<p>A special key is reserved for all kaar jogs, for example:</p>
<p style='margin-left:30px'>a stands for Aakaar<br />
u stands for Ukaar, i.e pu gives <span class='lang2'>পু</span>, ru gives <span class='lang2'>ৰু</span> and gu gives <span class='lang2'>গু</span><br />
y stands for rhokaar, i.e gy is <span class='lang2'>গ্ৰ</span>, ty is <span class='lang2'>ত্ৰ</span> and ky is <span class='lang2'>ক্ৰ</span></p>

<p>The keyboard layout and kaar jogs are shown below.</p>

<img src='kbdlayout.jpg' /> <img src='Kaarjogs.jpg' />
	
</div>


<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>Further Resources</h2>
<div id="Related">
		<!-- A list of links to related keyboards - to the help pages or to (download) the keyboards? -->

<h3>Related Keyboard Layouts</h3>
<p>Other Keyboard Layouts for the Assamese language:</p>
<p>
<a href="/go?language=asm&amp;keyboard=Keyboard_isis_bangla">ISIS Bangla</a><br/>

</div>
<h3>Other Internet Resources</h3>
<p><a href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=619&amp;FromKeyman=0">Download Sabdalipi Assamese Keyboard for Keyman Desktop</a></p>
<p><a href="http://www.omniglot.com/writing/assamese.htm">Assamese Writing System at Omniglot.com</a><br/>
<a href="http://en.wikipedia.org/wiki/assamese_language">Assamese Language at Wikipedia.org</a><br/>

</div>




<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>This keyboard requires an English QWERTY hardware keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.2</p>

</div>


<div id="Authorship">
<h3>Authorship</h3>
<h3>Copyright and Terms of Use</h3>
<p>
The Sabdalipi Assamese Keyboard for Keyman Desktop and KeymanWeb is Copyright 2009 TI Trade and Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
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




