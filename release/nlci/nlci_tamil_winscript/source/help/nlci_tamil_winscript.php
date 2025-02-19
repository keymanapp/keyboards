<?php
  $pagename = 'NLCI Tamil WinScript Keyboard Help';
  $pagetitle = 'NLCI Tamil WinScript Keyboard Help';
  require_once('header.php');
?>
 <style>

        html, body {
            font-family: sans-serif;
            font-size: 100%;
        }
        samp {
            font-family: Annapurna; 
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
    <h1>NLCI Tamil WinScript Keyboard help</h1>

    <p>This Keyboard mimic Tamil WinScript Keyboard Layout designed by NLCI in 1988. Several linguists and members of translation community are still using this keyboard layout for keyboarding the text. This is a phonetic based keyboarding system designed with the objective of keyboarding text with minimal keystrokes. Keys are also layed out according the frequency of occurance, yet tried to follow a phonetic based keyboarding system.</p>

    <h2>Keyboard layout</h2>
	

     <img src = "tamil keyboard.png" style="width:auto;"> </img>
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

    
</body>
    


