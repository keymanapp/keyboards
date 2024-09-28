<?php 
  $pagename = 'Brao (SIL) Keyboard Help';
  $pagetitle = $pagename;
  // Header we will tidy up later  
    $style = <<<END
    p { font: 12pt Khmer Mondulkiri; }
	ul { font: 12pt Khmer Mondulkiri; }
    h1 { font: bold 16pt Khmer Mondulkiri; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 14pt Khmer Mondulkiri; color: #4444cc; }
END;
  
  require_once('header.php');
?>


<p>
    ក្ដារចុច Brao (SIL) ត្រូវ​បាន​បង្កើតឡើងសម្រាប់​វាយជាភាសាព្រៅ ដែលជាភាសានិយាយនៅភាគ​ឦសាននៃប្រទេសកម្ពុជា ដោយប្រើតួអក្សរខ្មែរ។ ប្លង់​ក្ដារចុចសម្រាប់​ប្រើប្រាស់​លើ​កុំព្យូទ័រ​គឺ​ស្រដៀង​នឹង​ប្លង់ក្ដារចុចខ្មែរ NiDA ប៉ុន្តែ​មាន​ស្រៈ​តិចជាង។ គេ​ប្រើ​ជើងព្យញ្ជនៈ​តែ​ពីរ​ប៉ុណ្ណោះក្នុង​ភាសានេះ៖ «្រ» និង «្ល»។
</p>
<p>
	មានតួអក្សរបួនទៀតដែលគេប្រើក្នុងភាសាព្រៅ៖ 
	<ul>
	<li>«អ្យ» នៅលើគ្រាប់ចុច <kbd>o</kbd></li> 
	<li>«ឝ» នៅលើគ្រាប់ចុច <kbd>Shift</kbd> <kbd>o</kbd></li>
	<li>«ឞ» នៅលើគ្រាប់ចុច <kbd>Shift</kbd> <kbd>v</kbd> និង</li>
	<li>«៝» នៅលើគ្រាប់ចុច <kbd>e</kbd>។</li>
	</ul>
</p>

<h1>ប្លង់ក្ដារចុច</h1>
	<h2>ប្លង់ក្ដារចុចសម្រាប់កុំព្យូទ័រ</h2>
<div id='osk' data-states='default shift'>
</div>

	<h2>ប្លង់ក្ដារចុចសម្រាប់ទូរសព្ទ</h2>
<div id='osk-phone' data-states='default shift symbol'>

	<h2>ប្លង់ក្ដារចុចសម្រាប់ថេប្លេត</h2>
<div id='osk-tablet' data-states='default shift'>
</div>
