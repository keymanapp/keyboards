<?php
  $pagename = 'Mara Keyboard Help';
  $pagetitle = 'Mara Keyboard Help';
  require_once('header.php');
?>

<div class="container">
    <p style="text-align:center;">This keyboard is for the Mara language.</p>

    <hr>

    <h2>Description</h2>
    <p>The Mara Keyboard is designed for the Mara people to type easily in their language.</p>
    <p>The Mara Keyboard is based on the standard English (QWERTY) layout, but includes special characters for the Mara language.</p>
    <ul>
        <li>The <strong>Q</strong> key has been replaced with <strong>Â</strong> (unshifted <strong>â</strong>).</li>
        <li>The <strong>X</strong> key has been replaced with <strong>Ô</strong> (unshifted <strong>ô</strong>).</li>
        <li>The <strong>J</strong> key produces the digraph <strong>Ch</strong>.
            <ul>
                <li>Press <strong>j</strong> for <strong>ch</strong></li>
                <li>Press <strong>Shift</strong> + <strong>j</strong> for <strong>Ch</strong></li>
                <li>Turn on <strong>Caps Lock</strong> and press <strong>j</strong> for <strong>CH</strong></li>
            </ul>
        </li>
    </ul>
    
    <h3>Typing Original English Letters</h3>
    <p>If you need to type the original English <strong>q</strong>, <strong>x</strong>, or <strong>j</strong>, you can use the <strong>Right Alt (AltGr)</strong> key:</p>
    <ul>
        <li><strong>Right Alt</strong> + <strong>q</strong> = <strong>q</strong> (Hold Shift for <strong>Q</strong>)</li>
        <li><strong>Right Alt</strong> + <strong>x</strong> = <strong>x</strong> (Hold Shift for <strong>X</strong>)</li>
        <li><strong>Right Alt</strong> + <strong>j</strong> = <strong>j</strong> (Hold Shift for <strong>J</strong>)</li>
    </ul>

    <h3>Smart Backspace (Step-Wise Backspacing)</h3>
    <p>The keyboard features smart, step-wise backspacing for circumflex characters. Pressing <strong>Backspace</strong> immediately after typing <strong>â</strong>, <strong>Â</strong>, <strong>ô</strong>, or <strong>Ô</strong> will only delete the circumflex (<strong>^</strong>) and leave the base letter intact. Pressing it a second time will delete the base letter.</p>

    <p>This allows for easy typing of the Mara alphabet while retaining access to standard English letters. The rest of the keys follow the standard QWERTY layout.</p>
    <p>The touch layout for phones follows a similar pattern, with the special characters readily available on the main keyboard layer.</p>

    <h2>Palâsana</h2>
    <p>Mara Keyboard he Marasawzy ta âmo reih hmâpa ta chhuh awpa ta pachhuahpa a châ.</p>
    <p>Mara Keyboard he English (QWERTY) layout hmâpa ta pachhuahpa châ ta, Mara reihchâ liata hawhrawh eihpa ta <code>â</code>, <code>ô</code>, <code>ch</code> zy pahlaopa a châ.</p>
    <ul>
        <li><strong>Q</strong> key he <strong>Â</strong> (unshifted <strong>â</strong>) ta thla pa a châ.</li>
        <li><strong>X</strong> key he <strong>Ô</strong> (unshifted <strong>ô</strong>) ta thla pa a châ.</li>
        <li><strong>J</strong> key châta <strong>Ch</strong> he thlapa a châ.
            <ul>
                <li><strong>j</strong> key hmiepa a châ khiah, <strong>ch</strong></li>
                <li><strong>Shift</strong> + <strong>j</strong> key hmiepa a châ khiah, <strong>Ch</strong></li>
                <li><strong>Caps Lock</strong> ON nota <strong>j</strong> key hmiepa a châ khiah, <strong>CH</strong> a châ.</li>
            </ul>
        </li>
    </ul>
    
    <h3>English Hawrawh Chhuhna</h3>
    <p>English hawrawh <strong>q</strong>, <strong>x</strong>, nata <strong>j</strong> zy chhuh awpa ta, <strong>Right Alt (AltGr)</strong> key hmâ theipa a châ:</p>
    <ul>
        <li><strong>Right Alt</strong> + <strong>q</strong> = <strong>q</strong> (<strong>Q</strong> châta Shift)</li>
        <li><strong>Right Alt</strong> + <strong>x</strong> = <strong>x</strong> (<strong>X</strong> châta Shift)</li>
        <li><strong>Right Alt</strong> + <strong>j</strong> = <strong>j</strong> (<strong>J</strong> châta Shift)</li>
    </ul>

    <h3>Smart Backspace (Step-Wise Backspacing)</h3>
    <p>He keyboard liata smart backspace khôpa a châ. <strong>â</strong>, <strong>Â</strong>, <strong>ô</strong>, nata <strong>Ô</strong> na chhuh tawhta <strong>Backspace</strong> na hmie khiahta, luhkhu (<strong>^</strong>) he lei tua aw ta, hawhrawh pizy a y chy aw. Backspace na hmie heih khiahta hawhrawh pizy a lei aw.</p>

    <p>He he Mara châhnawh chhuhna a pahlâ nawpa châta ta pachhuahpa a châ. Key hropazy cha QWERTY layout a ypa hawhta a y.</p>
    <p>Phone châta touch layout chhao he hawhna heta pachhuahpa châ ta, Mara reihchâ hnawh eih viapazy chhao main keyboard liana he hmâ theipa a châ haw bâ!</p>

    <h2>Links</h2>
    <ul>
        <li>Keyboard Homepage: <a href="https://keyman.com/keyboards/mara" target="_blank" rel="noopener noreferrer">https://keyman.com/keyboards/mara</a></li>
    </ul>

    <h2>Author & Copyright</h2>
    <p>This keyboard was created by <a href="https://laitei.dev" target="_blank" rel="noopener noreferrer">Laitei</a>.</p>
    <p>Copyright © Laitei</p>
    
    <h2>Supported Platforms</h2>
    <ul>
        <li>Windows</li>
        <li>macOS</li>
        <li>Linux</li>
        <li>Web</li>
        <li>iPhone & iPad</li>
        <li>Android phone & tablet</li>
    </ul>

    <h2>Keyboard Layouts</h2>
    <h3>Desktop Layout</h3>
    <div id='osk' data-states='default shift'></div>

    <h3>Phone Layout</h3>
    <div id='osk-phone' data-states='default shift numeric'></div>
</div>