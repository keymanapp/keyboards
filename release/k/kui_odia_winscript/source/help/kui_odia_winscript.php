<?php 
  $pagename = 'Kui Odia Winscript Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    samp {font-family: Japa Sans Oriya; font-size:120%;}
    kbd {color:black; font: 0.8em sans-serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
    .inputSequences {border-collapse: collapse;font-size: 110%; min-width: 592px;}
    .inputSequences th, .inputSequences td {padding: 7px 17px;}
    .inputSequences thead th {border-bottom: 2px solid #6ea1cc;text-transform: uppercase;}
    .inputSequences tbody td {border-bottom: 1px solid #e1edff;color: #353535;text-align: center;}
    .inputSequences tbody tr:nth-child(odd) td {background-color: #f4fbff;}
    .inputSequences tbody tr:hover td {background-color: #ffffa2;border-color: #ffff0f;}
END;
  require_once('header.php');
?>

<p>This Keyboard is for the Kui language using the Odiya script. It follows a phonetic-based keyboarding system. This keyboard uses temporary codepoints for the dot above and double-dot above. When these characters are supported by Unicode the keyboard will be updated. Any data using these codepoints (U+0307 and U+0308) will need to be converted to the new codepoints.</p>

<h2>Desktop Keyboard layout</h2>

<div id='osk' data-states='default shift'>
</div>

<table class="inputSequences">
<h3>Special cases</h3>

<thead>
    <tr>
        <th>Keys</th>
        <th>Character</th>
      
  </tr>
</thead>
<tbody>
   
    <tr>
        <td><kbd>i</kbd><kbd>i</kbd>  </td>
        <td>ଈ</td>
        
    </tr>
    <tr>
        <td><kbd>l</kbd><kbd>l</kbd>  </td>
        <td>ଳ</td>
        
    </tr>
    
    
    
    
    <tr>
        <td><kbd>R</kbd><kbd>R</kbd>  </td>
        <td>ୠ</td>
        
    </tr>



<tr>
       <td><kbd>u</kbd><kbd>u</kbd>  </td>
        <td>ଊ</td>
        
    </tr>

<tr>
       <td><kbd>s</kbd><kbd>s</kbd>  </td>
        <td>ଷ</td>
        
    </tr>

<tr>
       <td><kbd>y</kbd><kbd>y</kbd>  </td>
        <td>ୟ</td>
        
    </tr>

<tr>
       <td><kbd>D</kbd><kbd>D</kbd>  </td>
        <td>ଢ଼</td>
        
    </tr>


<tr>
       <td><kbd>d</kbd><kbd>d</kbd>  </td>
        <td>ଡ଼</td>
        
    </tr>


</tbody>
</table>

<h3>Using = </h3>

<table class="inputSequences">
<thead>
    <tr>
        <th>Keys</th>
        <th>Character</th>
      
  </tr>
</thead>
<tbody>
    <tr>
        <td><kbd>=</kbd><kbd>r</kbd> </td>
        <td>ଡ଼</td>
        
    </tr>
   
</tbody>
</table>

<h3>Vowel Sign Elongation</h3>

<table class="inputSequences">
<thead>
    <tr>
        <th>Keys</th>
        <th>Character</th>
      
  </tr>
</thead>
<tbody>
    <tr>
        <td><kbd>ୀ</kbd><kbd>i</kbd> </td>
        <td>ୀ</td>
        
    </tr>
    <tr>
        <td><kbd>ୂ</kbd><kbd>u</kbd> </td>
        <td>ୂ</td>
        
    </tr>
<tr>
        <td><kbd>ା</kbd><kbd>a</kbd> </td>
        <td>ା</td>
        
    </tr>
</tbody>
</table>
<p> Eg <kbd>k</kbd> <kbd>i</kbd> <kbd>i</kbd> <kbd>i</kbd> will generate <samp>କୀୀ</samp></p>


<h3>Virama</h3>

<p> <kbd>X</kbd> is used as virama Eg <kbd>k</kbd> <kbd>X</kbd> <kbd>L</kbd> will generate <samp>କ୍‌ଳ</samp></p>


<h3>Conjuncts</h3>

<p> <kbd>x</kbd> is used as conjuncts Eg <kbd>k</kbd> <kbd>x</kbd> <kbd>l</kbd> will generate <samp>କ୍ଲ</samp></p>

<h3>Numbers</h3>

<p> <kbd>`</kbd> Backtick with number will get Oriya number Eg <kbd>`</kbd> <kbd>1</kbd> will generate <kbd>୧</kbd></p>  

<h3>Backtick for change into English</h3>

<p> <kbd>`</kbd> Backtick is used to change into English Eg <kbd>`</kbd> <kbd>ତ</kbd> will generate <kbd>q</kbd></p>  

