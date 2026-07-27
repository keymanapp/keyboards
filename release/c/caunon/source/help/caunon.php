<?php
  $pagename = 'CauNon Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    .caunon-help { font-family: system-ui, -apple-system, sans-serif; line-height: 1.6; }
    .caunon-mon-text { font-family: 'Pyidaungsu', 'Padauk', serif; }
    .caunon-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.5rem; margin-bottom: 1.5rem; }
    .caunon-highlight { background: #eff6ff; border-left: 4px solid #3b82f6; padding: 1rem; margin: 1rem 0; }
    .caunon-table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
    .caunon-table th, .caunon-table td { padding: 0.75rem; text-align: left; border-bottom: 1px solid #e2e8f0; }
    .caunon-table th { background: #f8fafc; font-weight: bold; }
    .caunon-img-container { text-align: center; margin: 1rem 0; background: #f8fafc; padding: 1rem; border: 1px dashed #cbd5e1; }
    .caunon-img-container img { 
        max-width: 100%; 
        max-height: 65vh; /* Limits image height to 65% of the screen height */
        width: auto; 
        object-fit: contain; /* Ensures the image scales proportionally */
        border-radius: 4px; 
        margin: 0 auto; 
        display: block; 
    }
    .caunon-kbd { background: #f1f5f9; padding: 0.2rem 0.4rem; border-radius: 4px; font-family: monospace; color: #3b82f6; }
END;

  require_once('header.php');
?>

<div class="caunon-help">
	<p><h1>ကောန်ဍေၚ် CauNon Keyboard</h1></p>
    <p class="caunon-mon-text" align="justify">ပ္ဍဲအရာတက်လိက် Unicode ဂှ် တၞဟ်ခြာနူကဵုတက်လိက်သာမညတံရ။ ​အက္ခရ် ( ြ ု ​​​​ူ ) တအ်ဂှ် ဂၠိၚ်/ဂၠေံ/ဍောတ်/ဇၞော်/ပိုတ်/ဝေက်တအ်ဟွံမွဲ နွံဆမွဲဂကူဓဝ်ဟေၚ်တုဲ ကာလတက်မ္ဂး ဍေံပြံၚ်လှာဲကဵု ဗွဲမဗဗွဲကုအက္ခရ်ဆက်စပ်တံဂှ်အလဵုဍေံတုဲ ဒးသမ္တီကောန်ဍေင် Key လိက်သက်သာရ။</p>
    
    <div class="caunon-card caunon-highlight caunon-mon-text">
        <p><strong>လၟေၚ်တက်လိက်တုန် - </strong> တက်အတိုၚ်တြေံ ပိုဲကေၚ်တက်မံၚ် UniMon တေံတေံရ。</p>
        <ul>
            <li>တက် ​'ေ' ကၠာ။</li>
            <li>တက် ​'​ြ' ကၠာ။</li>
            <li>တက် ​'ေ' တုဲ တက် '​ြ' - ဗီုအခိၚ်တက်မံၚ်လိက်သာမညတေံဂှ်ရ။</li>
        </ul>
        <p><strong>ဗီုပြၚ်လၟေၚ်တက် >>&nbsp; </strong> ​ေ + ​ြ + မ + က + ် = မြေက်</p>
        <ul>
            <li>Keyboard ဝွံ လၟေၚ်တက်လိက်Unicode - ('ု' ကၠာ 'ိ' ကြဴ၊ 'ု' ကၠာ 'ဲ' ကြဴ၊ 'ိ' ကၠာ 'ဲ' ကြဴ) ဗီုတအ်ဏံ ဟွံမွဲတုဲ ဗီုဒးစိုတ်ဂှ်တက်ကေတ်မာန် ဗီုတက်မံၚ်လိက်သာမည ဗီုကေၚ်တက်မံၚ်လိက် UniMon တေံရ။</li>
        </ul>
    </div>
    
    <p class="caunon-mon-text" align="justify" style="font-size: 0.9em; color: #475569;">လဆောဝ်လဆောဝ်ပိုဲတအ် အကြာကြာတက်မံၚ်လိက်မန်ဂှ် ဒးတက်လိက်ဗၟာနွံအာမွဲၜါမမ္ဂး သ္ဒးလှာဲ Keyboard ဗၟာဂှ် စိုတ်ယှုက်အာညိနွံရ (အခိၚ်ဒးတက်စရၚ်ညးတၠဒါန်ဒှ်စဂၠိုၚ်)။ ဘဲဏံဂွံသာညိရန်တၟံတုဲ CauNon Keyboard ဝွံ ကၠောန်လဝ်ညံၚ်ဂွံတက်သီုအက္ခရ်ဗၟာမာန်တုဲ၊ ပ္ဍဲစက်ပိုဲ / ပ္ဍဲဖုၚ်ပိုဲ ဒးစုတ်လဝ် Keyboard မွဲဓဝ် တက်သီုလိက်မန်ဂွံ လိက်ဗၟာလေဝ်ဂွံတှ်ေ သီုဍေံသောင်မတ် သီုသောၚ်စိုတ်ညိရောၚ် ထေၚ်ကေတ်တုဲ သွက်ညးနွံအလဲစိုတ်သာ်ဏံတအ် ဒးဂၞပ်ရောၚ်ထေၚ်ကေတ်ရ။</p>

    <hr style="margin: 2rem 0; border: 0; border-top: 1px solid #e2e8f0;">

    <h2 class="caunon-mon-text">1. ဗီုပြၚ်ခံက်အၚ်ကောန်ဍေၚ်ဂမၠိုၚ်</h2>
    
	<h2 class="caunon-mon-text">Desktop Layout</h2>
    <div id='osk' data-states='default shift rightalt rightalt-shift'></div>

    <h2 class="caunon-mon-text">Mobile Layout</h2>
    <div id='osk-phone' data-states='default shift numeric symbol'></div>
    
    <div class="caunon-card">
        <h3 class="caunon-mon-text">Longpress & Swipe Down (Mobile)</h3>
        <div class="caunon-img-container">
            <img src="caunonLongpress.png" alt="Mobile Longpress & Swipe Down">
        </div>
        <p class="caunon-mon-text" align='center'>တၚ်စၟတ်။&nbsp;&nbsp;&nbsp;။ဗျဉ်မဂ္ဇံက်မာန်တအ်အိုဿီု တက်နကဵုသၞောတ် " ဍဵုခရေတ်ဖျေံ " ဂှ် မာန်ဖအိုတ်ရ။</p>
    </div>

    <hr style="margin 2rem 0; border: 0; border-top: 1px solid #e2e8f0;">

    <h2 class="caunon-mon-text">2. ဗီုဂွံတက်အက္ခရ်ဂ္ဇံက်ဂမၠိုင်</h2>
    <p class="caunon-mon-text" style="color: #475569;">လက္ချန် <span class="caunon-kbd">္</span> ဝွံ နွံပ္ဍဲကောန်ဍေင် Shift + F ရောၚ်။</p>
    
    <div class="caunon-card">
        <table class="caunon-table caunon-mon-text">
            <thead>
                <tr>
                    <th>မလိက်</th>
                    <th>လၟေင်တက်ပံင်အက္ခရ်</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>အက္ခဏ</td><td>အ + က + <span class="caunon-kbd">္‌</span> + ခ + ဏ</td></tr>
                <tr><td>ကဏ္ဍ</td><td>က + ဏ + <span class="caunon-kbd">္‌</span> + ဍ</td></tr>
                <tr><td>မင်္ဂလ</td><td>မ + ၚ + ် + <span class="caunon-kbd">္‌</span> + ဂ + လ</td></tr>
                <tr><td>အဋ္ဌမ</td><td>အ + ဋ + <span class="caunon-kbd">္‌</span> + ဌ + မ</td></tr>
                <tr><td>၀ဍ္ဎိ</td><td>၀ + ဍ + <span class="caunon-kbd">္‌</span> + ဎ + ိ</td></tr>
                <tr><td>သိၚ်္ဂဳ</td><td>သ + ိ + ၚ + ် + <span class="caunon-kbd">္‌</span> + ဂ +  ဳ</td></tr>
                <tr><td>ကြက္က</td><td>​ြ + က + က + <span class="caunon-kbd">္‌</span> + က</td></tr>
                <tr><td>ဣန္ဒြိ</td><td>​ဣ + ​ြ + န + <span class="caunon-kbd">္‌</span> + ဒ + ိ</td></tr>
                <tr><td>အိ​န္ဒြေ</td><td>​အ + ိ + ​ေ+ ​ြ + န + <span class="caunon-kbd">္‌</span> + ဒ</td></tr>
            </tbody>
        </table>
    </div>

    <hr style="margin: 2rem 0; border: 0; border-top: 1px solid #e2e8f0;">

    <h2 class="caunon-mon-text">3. အက္ခရ်တၟေၚ်တၞဟ်ခြာဂမၠိုၚ်</h2>
    <div class="caunon-card">
        <ul class="caunon-mon-text" style="padding-left: 1.5rem;">
            <li style="margin-bottom: 0.5rem;">'၀' (သုည) ကေုာံ 'ဝ' ဗျဉ် ဟွံတုပ်။</li>
            <li style="margin-bottom: 0.5rem;">'ဇ' ကွက်ယ ကေုာံ 'ၛ' ဟွံတုပ်။</li>
            <li style="margin-bottom: 0.5rem;"> 'ဉ' ဗျဉ် ကေုာံ 'ဥ' သွဵု ဟွံတုပ်။</li>
            <li style="margin-bottom: 0.5rem;"> 'သ' ကွက်ရ ကေုာံ 'ဩ' သွဵု ဟွံတုပ်။</li>
        </ul>
    </div>
    
    <p class="caunon-mon-text" align='center' style="margin-top: 2rem;">
        သွက်ညးမမိက်ဂိုၚ်စွံတၞးလိက် CauNon Keyboard Layout (သွက်ဂွံရံၚ် အခိၚ်တက်လိက်) မ္ဂး ဍဵုကေတ် <a href="cauNon_Keyboard.jpg">ဒၞာဲဏံ</a> ညိ။
    </p>

</div>
