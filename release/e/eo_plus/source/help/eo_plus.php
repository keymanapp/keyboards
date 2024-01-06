<?php
$pagename = 'Esperanto Plus Keyboard Help';
$pagetitle = 'Esperanto Plus Keyboard Help';
require_once('header.php');
?>

<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Andrea Vaccari"/>
    <title>Esperanto Plus Keyboard Help</title>
    <link rel="stylesheet" type="text/css" href="eo_plus.css">
</head>

<body>
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
        <div class="box box-3">
            <div>cx</div><div>=</div><div><span class="special-char">ĉ</span></div>
            <div>gx</div><div>=</div><div><span class="special-char">ĝ</span></div>
            <div>hx</div><div>=</div><div><span class="special-char">ĥ</span></div>
            <div>jx</div><div>=</div><div><span class="special-char">ĵ</span></div>
            <div>sx</div><div>=</div><div><span class="special-char">ŝ</span></div>
            <div>ux</div><div>=</div><div><span class="special-char">ŭ</span></div>
        </div>
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
        <div class="box box-5">
            <div>o</div><div>+</div><div>\</div><div>=</div><div><span class="special-char">o, on, oj, ojn</span></div>
            <div>a</div><div>+</div><div>\</div><div>=</div><div><span class="special-char">a, an, aj, ajn</span></div>
            <div> </div><div> </div><div>\</div><div>=</div><div><span class="special-char">i, as, is, os, us, u</span></div>
            <div> </div><div> </div><div>|</div><div>=</div><div><span class="special-char">anta, ante, inta, inte, ata, ita, ite</span></div>
        </div>

        <div class="box box-5">
            <div>'</div><div>+</div><div>\</div><div>=</div><div><span class="special-char">\</span></div>
            <div>'</div><div>+</div><div>|</div><div>=</div><div><span class="special-char">|</span></div>
        </div>

    </div>

    <h2>Frequent words and phrases</h2>

    <p>
        Sequences of letters that automatically lengthen into the corresponding words or sentences, only when word-initial.
        Initial letters are automatically capitalized depending on position.
    </p>

    <div class="rules">
        <div class="box box-3">
            <div>dnk</div><div>=</div><div><span class="special-char">Dankon</span></div>
            <div>ndk</div><div>=</div><div><span class="special-char">Ne dankinde</span></div>
            <div>bdn</div><div>=</div><div><span class="special-char">Bone, dankon</span></div>
            <div>bvl</div><div>=</div><div><span class="special-char">Bonvolu</span></div>
            <div>slt</div><div>=</div><div><span class="special-char">Saluton</span></div>
            <div>slc</div><div>=</div><div><span class="special-char">Saluton al ĉiuj</span></div>
            <div>kdn</div><div>=</div><div><span class="special-char">Koran dankon</span></div>
            <div>ksl</div><div>=</div><div><span class="special-char">Korajn salutojn</span></div>
            <div>bmt</div><div>=</div><div><span class="special-char">Bonan matenon</span></div>
            <div>btg</div><div>=</div><div><span class="special-char">Bonan tagon</span></div>
            <div>bvs</div><div>=</div><div><span class="special-char">Bonan vesperon</span></div>
        </div>

        <div class="boxes">
            <div class="box box-3">
                <div>bkn</div><div>=</div><div><span class="special-char">Bonan Kristnaskon</span></div>
                <div>bps</div><div>=</div><div><span class="special-char">Bonan Paskvon</span></div>
                <div>fkn</div><div>=</div><div><span class="special-char">Feliĉan Kristnaskon</span></div>
            </div>

            <div class="box box-3">
                <div>kvf</div><div>=</div><div><span class="special-char">Kiel vi fartas?</span></div>
                <div>mfb</div><div>=</div><div><span class="special-char">Mi fartas bone</span></div>
                <div>mfd</div><div>=</div><div><span class="special-char">Mi fartas bone, dankon</span></div>
            </div>

            <div class="box box-3">
                <div>mkp</div><div>=</div><div><span class="special-char">Mi komprenas</span></div>
                <div>mks</div><div>=</div><div><span class="special-char">Mi konsentas</span></div>
                <div>vpr</div><div>=</div><div><span class="special-char">Vi pravas</span></div>
            </div>
        </div>

        <div class="boxes">
            <div class="box box-3">
                <div>eeo</div><div>=</div><div><span class="special-char">Esperanto</span></div>
                <div>eea</div><div>=</div><div><span class="special-char">Esperanta</span></div>
                <div>zmf</div><div>=</div><div><span class="special-char">Zamenhof</span></div>
            </div>

            <div class="box box-3">
                <div>hd</div><div>=</div><div><span class="special-char">hodiaŭ</span></div>
                <div>hr</div><div>=</div><div><span class="special-char">hieraŭ</span></div>
                <div>mg</div><div>=</div><div><span class="special-char">morgaŭ</span></div>
            </div>

            <div class="box box-3">
                <div>kmp</div><div>=</div><div><span class="special-char">kompreni</span></div>
                <div>kns</div><div>=</div><div><span class="special-char">konsenti</span></div>
            </div>
        </div>     
    </div>

    <h2>Characters map</h2>
    
    <p>
        Table of all the characters that can be obtained from the pop-up menu of the touch keys,
        which can be used to write words in other languages or other useful symbols.
    </p>
            
    <div class="rules">
        <div class="box box-3">
            <div>a</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">à á â ã ä ä å æ ª</span></div>
            <div>b</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">þ</span></div>
            <div>c</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">© ç ¢</span></div>
            <div>d</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">ð</span></div>
            <div>e</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">è é ê ë</span></div>
            <div>i</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">ì í î ï</span></div>
            <div>n</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">ñ</span></div>
            <div>o</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">ò ó ô õ ö ø</span></div>
            <div>r</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">®</span></div>
            <div>s</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">ß</span></div>
            <div>u</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">ù ú û ü</span></div>
            <div>x</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">×</span></div>
            <div>y</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">ý ÿ ¥</span></div>
        </div>

        <div class="box box-3">
            <div>A</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">À Á Â Ã Ä Å Æ</span></div>
            <div>B</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">Þ</span></div>
            <div>C</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">Ç</span></div>
            <div>D</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">Ð</span></div>
            <div>E</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">È É Ê Ë</span></div>
            <div>I</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">Ì Í Î Ï</span></div>
            <div>N</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">Ñ</span></div>
            <div>O</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">Ò Ó Ô Õ Ö Ø</span></div>
            <div>U</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">Ù Ú Û Ü</span></div>
            <div>Y</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">Ý</span></div>
        </div>

        <div class="box box-3">
            <div>1</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">¹</span></div>
            <div>2</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">² ½</span></div>
            <div>3</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">³ ¾</span></div>
            <div>4</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">¼</span></div>
        </div>

        <div class="box box-3">
            <div>(</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">&lt; «</span></div>
            <div>)</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">&gt; »</span></div>
            <div>.</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">° ¤</span></div>
            <div>!</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">¡</span></div>
            <div>?</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">¿</span></div>
            <div>\</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">| ¦ /</span></div>
            <div>+</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">±</span></div>
            <div>/</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">÷</span></div>
            <div>€</div><div>&nbsp;:&nbsp;</div><div><span class="special-char">£</span></div>
        </div>
    </div>
</body>
