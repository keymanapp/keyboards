<?php
  $pagename = 'NLCI Malayalam WinScript Keyboard Help';
  $pagetitle = 'NLCI Malayalam WinScript Keyboard Help';
  require_once('header.php');
?>
 <style>

        html, body {
            font-family: sans-serif;
            font-size: 100%;
        }
        samp {
            font-family: sans-serif; 
            font-size:20pt; 
            
        }
        kbd {
            color:black; 
            font: 0.8em sans-serif; 
            border:solid 1px grey; 
            background:#ccc; 
            margin:2px 1px; 
            padding:2px 3px; 
            -webkit-border-radius: 3px; 
            -moz-border-radius: 3px; 
            border-radius: 3px;
        }


        /* Table */
        .inputSequences {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 592px;
        }

        .inputSequences th, 
        .inputSequences td {
            padding: 7px 17px;
        }
        /* .inputSequences caption {
            margin: 7px;
        } */

        /* Table Header */
        .inputSequences thead th {
            border-bottom: 2px solid #6ea1cc;
            text-transform: uppercase;
        }

        /* Table Body */
        .inputSequences tbody td {
            border-bottom: 1px solid #e1edff;
            color: #353535;
            text-align: center;
        }
        .inputSequences tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        /* 
        .inputSequences tbody td:nth-child(4),
        .inputSequences tbody td:first-child,
        .inputSequences tbody td:last-child {
            text-align: right;
        }
        */
        .inputSequences tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        /* 
            .inputSequences tfoot th {
            border-top: 2px solid #6ea1cc;
            text-align: right;
        } 
        */


    </style>
</head>

<body>
    <h1>NLCI Malayalam WinScript Keyboard help</h1>

    <p>This Keyboard mimic Malayalam WinScript Keyboard Layout designed by NLCI in 1988. Several linguists and members of translation community are still using this keyboard layout for keyboarding the text. This is a phonetic based keyboarding system designed with the objective of keyboarding text with minimal keystrokes. Keys are also layed out according the frequency of occurance, yet tried to follow a phonetic based keyboarding system.</p>

    <h2>Keyboard layout</h2>

    
    <img src="malayalam.png" > </img>
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
                <td>ഏ</td>
                
            </tr>
            <tr>
                <td><kbd>i</kbd><kbd>i</kbd>  </td>
                <td>ഈ</td>
                
            </tr>
            <tr>
                <td><kbd>l</kbd><kbd>l</kbd>  </td>
                <td>ള</td>
                
            </tr>
            <tr>
                <td><kbd>l</kbd><kbd>l</kbd><kbd>l</kbd>  </td>
                <td>ഴ</td>
                
            </tr>
            <tr>
                <td><kbd>L</kbd><kbd>L</kbd>  </td>
                <td>ഴ</td>
                
            </tr>
            <tr>
               <td><kbd>o</kbd><kbd>o</kbd>  </td>
                <td>ഓ </td>
                
            </tr>
            <tr>
                <td><kbd>r</kbd><kbd>r</kbd>  </td>
                <td>റ</td>
                
            </tr>
            <tr>
               <td><kbd>R</kbd><kbd>R</kbd>  </td>
                <td>ൠ</td>
               
            </tr>
            <tr>
               <td><kbd>u</kbd><kbd>u</kbd>  </td>
                <td>ഊ</td>
               
            </tr>
            <tr>
                <td><kbd>s</kbd><kbd>s</kbd>  </td>
                <td>ഷ</td>
                
            </tr>
           
        </tbody>
    </table>

    
	
	<h3>nta</h3>

<table class="inputSequences">
        <thead>
            <tr>
                <th>Keys</th>
                <th>Character</th>
              
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>n</kbd><kbd>x</kbd><kbd>t</kbd> </td>
                <td>ൻ്റ</td>
                
            </tr>
            
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
                <td>റ</td>
                
            </tr>
            <tr>
                <td><kbd>=</kbd><kbd>z</kbd> </td>
                <td>ഴ</td>
                
            </tr>
</tbody>
    </table>
	
	<h3>Vowel sign elongation </h3>
	
      <table class="inputSequences">
        <thead>
            <tr>
                <th>Keys</th>
                <th>Character</th>
              
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>i</kbd><kbd>i</kbd> or <kbd>I</kbd><kbd>i</kbd>  </td>
                <td>ീ</td>
                
            </tr>
            <tr>
                <td><kbd>u</kbd><kbd>u</kbd> or <kbd>U</kbd><kbd>u</kbd>   </td>
                <td>ൂ</td>
                
            </tr>
			<tr>
                <td><kbd>a</kbd><kbd>a</kbd> or <kbd>A</kbd><kbd>a</kbd>  </td>
                <td>ാ</td>
                
            </tr>
</tbody>
    </table>
	
	<h3>Legacy nta </h3>
	
      <table class="inputSequences">
        <thead>
            <tr>
                <th>Keys</th>
                <th>Character</th>
              
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>n</kbd><kbd>x</kbd><kbd>t</kbd> </td>
                 <td>ന്‍റ</td>
                
            </tr>
            <tr>
                <td><samp>ൻ്റ + ` </samp> </td>
                <td>ന്റ</td>
                
            </tr>
			
</tbody>
    </table>
	
	<h3>Malayalam Vowel Sign Vocalic L</h3>
	<p> <kbd>^</kbd> is used to generate Malayalam vowel sign vocalic L, Eg <kbd>k</kbd> <kbd>x</kbd><kbd>l</kbd><kbd>^</kbd>  will generate <samp>കൢ</samp></p>
	<h3>Malayalam Vowel Sign Vocalic LL</h3>
	<p> <kbd>^</kbd><kbd>^</kbd> is used to generate Malayalam vowel sign vocalic LL, Eg <kbd>k</kbd> <kbd>x</kbd><kbd>l</kbd><kbd>^</kbd><kbd>^</kbd>  will generate <samp>കൣ</samp></p>
      
	<h3>Praslesham</h3>

    <p>Praslesham <samp>ഽ</samp> can be typed using the <kbd>F</kbd> key. </p>
    
     <h3>Chandrakala</h3>

    <p> <kbd>x</kbd> is used as chandrakala Eg <kbd>k</kbd> <kbd>x</kbd>  will generate <samp>ക്‌</samp></p>
	
	 <h3>Conjuncts</h3>

    <p> <kbd>x</kbd> is used as conjuncts Eg <kbd>k</kbd> <kbd>x</kbd> <kbd>l</kbd> will generate <samp>ക്ല</samp></p>
	
	<h3> Using X </h3>
	<p> Eg <kbd>k</kbd> <kbd>X</kbd> <kbd>g</kbd> will generate <samp>ക്‌ഗ</samp>
	
	
    
	<h3>Numbers</h3>

    <p> <kbd>`</kbd> Backtick with number will get malayalam number Eg <kbd>`</kbd> <kbd>1</kbd> will generate <kbd>൧</kbd></p>  

	<h3>Backtick for change into English</h3>

    <p> <kbd>`</kbd> Backtick is used to change into English Eg <kbd>`</kbd> <kbd>ത</kbd> will generate <kbd>q</kbd></p>  

    
</body>