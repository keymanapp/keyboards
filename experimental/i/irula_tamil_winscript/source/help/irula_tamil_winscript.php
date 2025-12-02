<?php 
  $pagename = 'Irula Tamil WinScript Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    samp {font-family: ThiruValluvar; font-size:20pt }
    kbd {color:black; font: 0.8em sans-serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
END;
  require_once('header.php');
?>

    <p>This keyboard is based on the Tamil WinScript (NLCI) Keyboard Layout. This is a phonetic based keyboarding system designed with the objective of keyboarding text with minimal keystrokes. Keys are also layed out according the frequency of occurance, yet tried to follow a phonetic based keyboarding system. This keyboard includes experimental support for the Irula language.</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift alt'>
</div>

    <h2>Input sequences</h2>
    
	
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
                <td><kbd>e</kbd><kbd>e</kbd> </td>
                <td>ஏ</td>
                
            </tr>
            <tr>
                <td><kbd>i</kbd><kbd>i</kbd>  </td>
                <td>ஈ</td>
                
            </tr>
            <tr>
                <td><kbd>l</kbd><kbd>l</kbd>  </td>
                <td>ள</td>
                
            </tr>
            <tr>
                <td><kbd>l</kbd><kbd>l</kbd><kbd>l</kbd>  </td>
                <td>ழ</td>
                
            </tr>
            <tr>
                <td><kbd>L</kbd><kbd>L</kbd>  </td>
                <td>ழ</td>
                
            </tr>
           
           
            <tr>
               <td><kbd>n</kbd><kbd>n</kbd>  </td>
                <td>ண</td>
               
            </tr>
            <tr>
               <td><kbd>o</kbd><kbd>o</kbd>  </td>
                <td>ஓ</td>
               
            </tr>
            <tr>
                <td><kbd>r</kbd><kbd>r</kbd>  </td>
                <td>ற</td>
                
            </tr>
            
			
			<tr>
               <td><kbd>u</kbd><kbd>u</kbd>  </td>
                <td>ஊ</td>
                
            </tr>
			
			<tr>
               <td><kbd>s</kbd><kbd>s</kbd>  </td>
                <td>ஷ</td>
                
            </tr>
			
			
			
        </tbody>
    </table>

<h3>Nukta</h3>

    <p> <kbd>f</kbd> is used for nukta Eg <kbd>k</kbd> <kbd>f</kbd> will generate <samp>க𑌼</samp>, and <kbd>k</kbd> <kbd>o</kbd> <kbd>o</kbd> <kbd>f</kbd> will generate <samp>க𑌼ோ</samp></p>
    
    <h3>Virama</h3>

    <p> <kbd>X</kbd> is used as virama Eg <kbd>k</kbd> <kbd>X</kbd> <kbd>L</kbd> will generate <samp>க்‌ள</samp></p>
	
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
                <td>ர</td>
                
            </tr>
            <tr>
                <td><kbd>=</kbd><kbd>z</kbd> </td>
                <td>ழ</td>
                
            </tr>
</tbody>
    </table>
	
	<h3>Using \ </h3>
	
      <table class="inputSequences">
        <thead>
            <tr>
                <th>Keys</th>
                <th>Character</th>
              
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>\</kbd><kbd>n</kbd> </td>
                <td>ன</td>
                
            </tr>
            <tr>
                <td><kbd>\</kbd><kbd>L</kbd> </td>
                <td>ழ</td>
                
            </tr>
			<tr>
                <td><kbd>\</kbd><kbd>r</kbd> </td>
                <td>ற</td>
                
            </tr>
</tbody>
    </table>
	
	 <h3>Conjuncts</h3>

    <p> <kbd>x</kbd> is used as conjuncts Eg <kbd>k</kbd> <kbd>x</kbd> <kbd>l</kbd> will generate <samp>க்ள </samp></p>
    
	<h3>Numbers</h3>

    <p> <kbd>`</kbd> Backtick with number will get Tamil number Eg <kbd>`</kbd> <kbd>1</kbd> will generate <kbd>௧</kbd></p>  

	<h3>Backtick for change into English</h3>

    <p> <kbd>`</kbd> Backtick is used to change into English Eg <kbd>`</kbd> <kbd>த</kbd> will generate <kbd>q</kbd></p>  

    


