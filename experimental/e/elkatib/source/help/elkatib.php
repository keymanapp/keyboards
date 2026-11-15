<?php
  $pagename = 'Elkatib Arabic Keyboard Help';
  $pagetitle = $pagename;

  $pagestyle = <<<CSS
    .elkatib-container {
      max-width: 800px;
      margin: 0 auto;
      line-height: 1.6;
    }
    .elkatib-section {
      margin-bottom: 32px;
      padding-bottom: 24px;
      border-bottom: 1px solid #eaeaea;
    }
    .elkatib-section:last-child {
      border-bottom: none;
    }
    .en {
      direction: ltr;
      text-align: left;
    }
    .ar {
      direction: rtl;
      text-align: right;
      font-size: 1.15em; /* Slight bump for better Arabic legibility */
    }
    .keyboard-img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 20px 0;
    }
CSS;

  require_once('header.php');
?>

<div class="elkatib-container">

  <section class="elkatib-section">
    <h2>Elkatib – الكاتب</h2>
    <a href="elkatib-keyboard-layout.png">
      <img class="keyboard-img" src="elkatib-keyboard-layout.png" alt="Elkatib Arabic Keyboard Layout" />
    </a>
    <p class="en">Elkatib is an Arabic keyboard layout designed to make typing faster, easier, and more efficient.</p>
    <p class="ar" lang="ar">الكاتب هو تخطيط لوحة مفاتيح عربية صُمم لجعل الكتابة باللغة العربية أسرع وأسهل وأكثر كفاءة.</p>
  </section>

  <section class="elkatib-section">
    <h2 class="en">Desktop Keyboard Layout</h2>
    <h2 class="ar" lang="ar">تخطيط لوحة المفاتيح</h2>
    <p class="en">Explore the layout and its different key combinations using the visual keyboard below.</p>
    <p class="ar" lang="ar">يمكنك استعراض توزيع الحروف العربية والتعرف على الرموز المتاحة باستخدام مفتاح Shift.</p>
    <div id="osk" data-states="default shift"></div>
  </section>

  <section class="elkatib-section">
    <h2 class="en">Using the Shift Key</h2>
    <h2 class="ar" lang="ar">استخدام مفتاح Shift</h2>
    <p class="en">The Shift key provides access to additional characters and symbols assigned to the secondary layer.</p>
    <p class="ar" lang="ar">يتيح مفتاح Shift الوصول إلى مجموعة إضافية من الحروف والرموز الموجودة في المستوى الثاني.</p>
  </section>

  <section class="elkatib-section">
    <h2>About the Project</h2>
    <p>Elkatib is an independent layout project created by Optikman. It includes extensive documentation and research analyzing letter frequency distributions and optimal home-row key placement.</p>
    <ul>
      <li><a href="https://github.com/Optikman/Elkatib-Arabic-keyboard-layout" target="_blank" rel="noopener">View Elkatib on GitHub</a></li>
    </ul>
  </section>

</div>