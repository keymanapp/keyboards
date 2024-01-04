<?php
$pagename = 'Esperanto Plus Keyboard Help';
$pagetitle = 'Esperanto Plus Keyboard Help';
require_once('header.php');
?>

<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Andrea Vaccari"/>
    <title>Esperanto Plus Keyboard Help</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
    <div id="divWrap">

        <!-- I contenuti -->
        <div id="divContent">

            <h1>Esperanto Plus</h1>

            <p>
                This keyboard is designed to simplify the input  of the Esperanto special characters
                and shorten the writing of the most common words and phrases.
            </p>

            <h2>Special letters</h2>
            
            <p>
                Type "x" after "c, g, h, j, s, u", to write the letters "ch, g, ch, j, sh, w".
                Type "x" again, to write the original letter followed by an "x".
                The same applies to the capital letters "C, G, H, J, S, U".
                You can also type "X" instead of "x".
            </p>
                    
            <div class="rules">

                <table class="box">
                    <tr><td>cx</td><td>=</td><td><span class="special-char">ĉ</span></td></tr>
                    <tr><td>gx</td><td>=</td><td><span class="special-char">ĝ</span></td></tr>
                    <tr><td>hx</td><td>=</td><td><span class="special-char">ĥ</span></td></tr>
                    <tr><td>jx</td><td>=</td><td><span class="special-char">ĵ</span></td></tr>
                    <tr><td>sx</td><td>=</td><td><span class="special-char">ŝ</span></td></tr>
                    <tr><td>ux</td><td>=</td><td><span class="special-char">ŭ</span></td></tr>
                </table>

            </div>

            <p>
                In the touch version of the keyboard are additional special keys, to type the letters "ĉ, ĝ, ĥ, ĵ, ŝ, ŭ".
            </p>

            <div id='osk-tablet' data-states='default shift'></div>

            <h2>Endings</h2>
            
            <p>
                On physical keyboards, type "\" and "|", to alternate between the following endings.
                As an example, the first rule means that, by pressing the "\" key after one of the sequences "o, on, oj, ojn"
                (with or without a trailing space), the next sequence will be written instead (eg "on " + "\" = "oj ").
                In the touch version press the <img src="key_on.png" class="key"> and <img src="key_anta.png" class="key"> keys,
                to get the same result.
            </p>
                    
            <div class="rules">

                <table class="box">
                    <tr><td>o</td><td>+</td><td>\</td><td>=</td><td><span class="special-char">o, on, oj, ojn</span></td></tr>
                    <tr><td>a</td><td>+</td><td>\</td><td>=</td><td><span class="special-char">a, an, aj, ajn</span></td></tr>
                    <tr><td> </td><td> </td><td>\</td><td>=</td><td><span class="special-char">i, as, is, os, us, u</span></td></tr>
                    <tr><td> </td><td> </td><td>|</td><td>=</td><td><span class="special-char">anta, ante, inta, inte, ata, ita, ite</span></td></tr>
                </table>

                <table class="box">
                    <tr><td>'</td><td>+</td><td>\</td><td>=</td><td><span class="special-char">\</span></td></tr>
                    <tr><td>'</td><td>+</td><td>|</td><td>=</td><td><span class="special-char">|</span></td></tr>
                </table>

            </div>

            <h2>Frequent words and phrases</h2>

            <p>
                Sequences of letters that automatically lengthen into the corresponding words or sentences, only when word-initial.
                Initial letters are automatically capitalized depending on position.
            </p>

            <div class="rules">

                <table class="box">
                    <tr><td>dnk</td><td>=</td><td><span class="special-char">Dankon</span></td></tr>
                    <tr><td>ndk</td><td>=</td><td><span class="special-char">Ne dankinde</span></td></tr>
                    <tr><td>bdn</td><td>=</td><td><span class="special-char">Bone, dankon</span></td></tr>
                    <tr><td>bvl</td><td>=</td><td><span class="special-char">Bonvolu</span></td></tr>
                    <tr><td>slt</td><td>=</td><td><span class="special-char">Saluton</span></td></tr>
                    <tr><td>slc</td><td>=</td><td><span class="special-char">Saluton al ĉiuj</span></td></tr>
                    <tr><td>kdn</td><td>=</td><td><span class="special-char">Koran dankon</span></td></tr>
                    <tr><td>ksl</td><td>=</td><td><span class="special-char">Korajn salutojn</span></td></tr>
                    <tr><td>bmt</td><td>=</td><td><span class="special-char">Bonan matenon</span></td></tr>
                    <tr><td>btg</td><td>=</td><td><span class="special-char">Bonan tagon</span></td></tr>
                    <tr><td>bvs</td><td>=</td><td><span class="special-char">Bonan vesperon</span></td></tr>
                </table>

                <div>
                    <table class="box" style="width: 293px; margin-bottom: 18px">
                        <tr><td>bkn</td><td>=</td><td><span class="special-char">Bonan Kristnaskon</span></td></tr>
                        <tr><td>bps</td><td>=</td><td><span class="special-char">Bonan Paskvon</span></td></tr>
                        <tr><td>fkn</td><td>=</td><td><span class="special-char">Feliĉan Kristnaskon</span></td></tr>
                    </table>
   
                    <table class="box" style="width: 293px; margin-bottom: 18px">
                        <tr><td>kvf</td><td>=</td><td><span class="special-char">Kiel vi fartas?</span></td></tr>
                        <tr><td>mfb</td><td>=</td><td><span class="special-char">Mi fartas bone</span></td></tr>
                        <tr><td>mfd</td><td>=</td><td><span class="special-char">Mi fartas bone, dankon</span></td></tr>
                    </table>
                </div>
 
                <div>
                    <table class="box" style="width: 224px; margin-bottom: 18px">
                        <tr><td>eeo</td><td>=</td><td><span class="special-char">Esperanto</span></td></tr>
                        <tr><td>eea</td><td>=</td><td><span class="special-char">Esperanta</span></td></tr>
                        <tr><td>zmf</td><td>=</td><td><span class="special-char">Zamenhof</span></td></tr>
                    </table>

                    <table class="box" style="width: 224px; margin-bottom: 18px">
                        <tr><td>mkp</td><td>=</td><td><span class="special-char">Mi komprenas</span></td></tr>
                        <tr><td>mks</td><td>=</td><td><span class="special-char">Mi konsentas</span></td></tr>
                        <tr><td>vpr</td><td>=</td><td><span class="special-char">Vi pravas</span></td></tr>
                    </table>
                </div>
 
                <div>
                    <table class="box" style="width: 184px; margin-bottom: 20px">
                        <tr><td>hd</td><td>=</td><td><span class="special-char">hodiaŭ</span></td></tr>
                        <tr><td>hr</td><td>=</td><td><span class="special-char">hieraŭ</span></td></tr>
                        <tr><td>mg</td><td>=</td><td><span class="special-char">morgaŭ</span></td></tr>
                    </table>

                    <table class="box" style="width: 184px; margin-bottom: 20px">
                        <tr><td>kmp</td><td>=</td><td><span class="special-char">kompreni</span></td></tr>
                        <tr><td>kns</td><td>=</td><td><span class="special-char">konsenti</span></td></tr>
                    </table>
                </div>     
            </div>

            <h2>Characters map</h2>
            
            <p>
                Table of all the characters that can be obtained from the pop-up menu of the touch keys,
                which can be used to write words in other languages or other useful symbols.
            </p>
                    
            <div class="rules">

                <table class="box">
                    <tr><td>a</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">à á â ã ä ä å æ ª</span></td></tr>
                    <tr><td>b</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">þ</span></td></tr>
                    <tr><td>c</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">© ç ¢</span></td></tr>
                    <tr><td>d</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">ð</span></td></tr>
                    <tr><td>e</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">è é ê ë</span></td></tr>
                    <tr><td>i</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">ì í î ï</span></td></tr>
                    <tr><td>n</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">ñ</span></td></tr>
                    <tr><td>o</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">ò ó ô õ ö ø</span></td></tr>
                    <tr><td>r</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">®</span></td></tr>
                    <tr><td>s</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">ß</span></td></tr>
                    <tr><td>u</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">ù ú û ü</span></td></tr>
                    <tr><td>x</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">×</span></td></tr>
                    <tr><td>y</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">ý ÿ ¥</span></td></tr>
                </table>

                <table class="box">
                    <tr><td>A</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">À Á Â Ã Ä Å Æ</span></td></tr>
                    <tr><td>B</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">Þ</span></td></tr>
                    <tr><td>C</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">Ç</span></td></tr>
                    <tr><td>D</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">Ð</span></td></tr>
                    <tr><td>E</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">È É Ê Ë</span></td></tr>
                    <tr><td>I</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">Ì Í Î Ï</span></td></tr>
                    <tr><td>N</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">Ñ</span></td></tr>
                    <tr><td>O</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">Ò Ó Ô Õ Ö Ø</span></td></tr>
                    <tr><td>U</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">Ù Ú Û Ü</span></td></tr>
                    <tr><td>Y</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">Ý</span></td></tr>
                </table>

                <table class="box">
                    <tr><td>1</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">¹</span></td></tr>
                    <tr><td>2</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">² ½</span></td></tr>
                    <tr><td>3</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">³ ¾</span></td></tr>
                    <tr><td>4</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">¼</span></td></tr>
                </table>

                <table class="box">
                    <tr><td>(</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">&lt; «</span></td></tr>
                    <tr><td>)</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">&gt; »</span></td></tr>
                    <tr><td>.</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">° ¤</span></td></tr>
                    <tr><td>!</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">¡</span></td></tr>
                    <tr><td>?</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">¿</span></td></tr>
                    <tr><td>\</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">| ¦ /</span></td></tr>
                    <tr><td>+</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">±</span></td></tr>
                    <tr><td>/</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">÷</span></td></tr>
                    <tr><td>€</td><td>&nbsp;:&nbsp;</td><td><span class="special-char">£</span></td></tr>
                </table>

            </div>

        </div>
    </div>
</body>