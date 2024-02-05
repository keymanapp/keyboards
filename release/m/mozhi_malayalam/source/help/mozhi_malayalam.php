<?php
  $pagename = 'Mozhi Malayalam Keyboard Help';
  $pagetitle = 'Mozhi Malayalam Keyboard Help';
  $pagestyle = <<<END
    .lang2,.languageExample {font-family:AnjaliOldLipi;}
    .lang2 {font-size:150%}
    table td{width: 180px;text-align: center;}
    table{SIL Hebrewbackground: #e3e3e3;}
    .col1 {width: 100px;}
    .col2, .col3 {width: 150px;}
    .col4 {width: 350px;}
END;
  require_once('header.php');
?>
    <title>Mozhi Malayalam Keyman Keyboard</title>
    <style>
        html,
        body {
            font-family: sans-serif;
            font-size: 100%;
        }

        samp {
            font-family: sans-serif;
            font-size: 20pt;

        }

        kbd {
            color: black;
            font: 0.8em sans-serif;
            border: solid 1px grey;
            background: #ccc;
            margin: 2px 1px;
            padding: 2px 3px;
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
		table,
		th,
		tr {
			border: 1px solid;
			border-color: rgb(55, 97, 132);
			background-color: rgb(223, 232, 237);
		}

		th {
			color: chocolate;
			padding: 3pt;
		}

		td {
			color: chocolate;
			padding-left: 10pt;
			border: 1px solid;
			border-color: rgba(30, 90, 154, 0.124);
		}

		.snippet-clipboard-content {
			background-color: rgba(213, 198, 179, 0.576);
			padding-top: 3pt;
			padding-bottom: 1pt;
			margin-bottom: 6pt;
		}
		.g {
			color: #4d4c68;
			/* text-decoration-line: underline; */
		}

    </style>
</head>

<body>
	<p>This is a Keyman implementation of the Mozhi Layout for Malayalam. Mozhi has been popular among both ametures and enthusiasts alike for about a couple of decades.</p>

	<h2>Keyboard Mapping in Keyman</h2>
	<img src="mozhi_malayalam.png"> </img>
	<p />
	<img src="mozhi_layout.png" width="70%"> </img>
	<div id="KeyboardChart">
		<h2>Mozhi Malayalam Layout</h2>
		<p>Mozhi v2 is an update to include newly encoded characters, handling of <em>chandakkala</em>, use of <em>joiners</em>, shift-less input etc. In this version, we are trying to hit a sweet spot with following objectives:
			<div class="snippet-clipboard-content position-relative overflow-auto">
			<ol>
				<li>Naturalness: being close to transliteration traditions of Malayalees; <em class="g">'th' → ത</em></li>
				<li>Consistency - same sequence for same phenomena, <em class="g">'h' is used to indicate aspirated consonants.</em></li>
				<li>Economical about keystrokes</li>
				<li>Type without pressing shift key</li>
			</ol>
			</div>
			<br>A <a href="https://docs.google.com/document/d/1081KgfIwCK0dzB1kHhE1Fain0F-KHJN6Bj3BaNbewGs/edit?usp=sharing">sample case study</a> looking at the relationship between these parameters and the corresponding keystroke economy.
		
		</p>
		<h2 class="mozhi">Mozhi Keyboard Details</h1>
		<h2>Vowels</h2>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>അ</td>
					<td>a</td>
					<td>A</td>
					<td>അല</td>
					<td>ala</td>
				</tr>
				<tr>
					<td>ആ</td>
					<td>aa</td>
					<td>AA</td>
					<td>ആല</td>
					<td>aala</td>
				</tr>
				<tr>
					<td>ഇ</td>
					<td>i</td>
					<td>I</td>
					<td>ഇല</td>
					<td>ila</td>
				</tr>
				<tr>
					<td>ഈ</td>
					<td>ii</td>
					<td>II</td>
					<td>ഈറ</td>
					<td>iiRa</td>
				</tr>
				<tr>
					<td>ഉ</td>
					<td>u</td>
					<td>U</td>
					<td>ഉമ</td>
					<td>uma</td>
				</tr>
				<tr>
					<td>ഊ</td>
					<td>uu</td>
					<td>UU</td>
					<td>ഊമ</td>
					<td>uuma</td>
				</tr>
				<tr>
					<td>ഋ</td>
					<td>R</td>
					<td>VOCALIC R</td>
					<td>ഋഷി</td>
					<td>Rshi</td>
				</tr>
				<tr>
					<td>എ</td>
					<td>e</td>
					<td>E</td>
					<td>എലി</td>
					<td>eli</td>
				</tr>
				<tr>
					<td>ഏ</td>
					<td>E</td>
					<td>EE</td>
					<td>ഏലം</td>
					<td>Elam</td>
				</tr>
				<tr>
					<td>ഐ</td>
					<td>ai</td>
					<td>AI</td>
					<td>ഐക്യം</td>
					<td>aikyam</td>
				</tr>
				<tr>
					<td>ഒ</td>
					<td>o</td>
					<td>O</td>
					<td>ഒരു</td>
					<td>oru</td>
				</tr>
				<tr>
					<td>ഓ</td>
					<td>O</td>
					<td>OO</td>
					<td>ഓരം</td>
					<td>Oram</td>
				</tr>
				<tr>
					<td>ഔ</td>
					<td>au</td>
					<td>AU</td>
					<td>ഔഷധം</td>
					<td>aushadham</td>
				</tr>
				<tr>
					<td>ഃ</td>
					<td>H</td>
					<td>VISARGA</td>
					<td>ദുഃഖം</td>
					<td>duHkham</td>
				</tr>
			</tbody>
		</table>
		<h2>Consonants</h2>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ക</td>
					<td>ka</td>
					<td>KA</td>
					<td>കല</td>
					<td>kala</td>
				</tr>
				<tr>
					<td>ഖ</td>
					<td>kha</td>
					<td>KHA</td>
					<td>നഖം</td>
					<td>nakham</td>
				</tr>
				<tr>
					<td>ഗ</td>
					<td>ga</td>
					<td>GA</td>
					<td>ഗരം</td>
					<td>garam</td>
				</tr>
				<tr>
					<td>ഘ</td>
					<td>gha</td>
					<td>GHA</td>
					<td>മേഘം</td>
					<td>mEgham</td>
				</tr>
				<tr>
					<td>ങ</td>
					<td>nga</td>
					<td>NGA</td>
					<td>ങ്യാവൂ</td>
					<td>ngyaavoo</td>
				</tr>
				<tr>
					<td>ച</td>
					<td>cha</td>
					<td>CA</td>
					<td>ചരം</td>
					<td>charam</td>
				</tr>
				<tr>
					<td>ഛ</td>
					<td>chha</td>
					<td>CHA</td>
					<td>ഛായ</td>
					<td>chhaaya</td>
				</tr>
				<tr>
					<td>ജ</td>
					<td>ja</td>
					<td>JA</td>
					<td>ജലം</td>
					<td>jalam</td>
				</tr>
				<tr>
					<td>ഝ</td>
					<td>jha</td>
					<td>JHA</td>
					<td>ഝാൻസി</td>
					<td>jhaansi</td>
				</tr>
				<tr>
					<td>ഞ</td>
					<td>nja</td>
					<td>NYA</td>
					<td>ഞാൻ</td>
					<td>njaan</td>
				</tr>
				<tr>
					<td>ട</td>
					<td>Ta</td>
					<td>TTA</td>
					<td>ടിപ്പു</td>
					<td>Tippu</td>
				</tr>
				<tr>
					<td>ഠ</td>
					<td>Tha</td>
					<td>TTHA</td>
					<td>പാഠം</td>
					<td>paaTham</td>
				</tr>
				<tr>
					<td>ഡ</td>
					<td>Da</td>
					<td>DDA</td>
					<td>ഡപ്പി</td>
					<td>Dappi</td>
				</tr>
				<tr>
					<td>ഢ</td>
					<td>Dha</td>
					<td>DDHA</td>
					<td>ദൃഢം</td>
					<td>dRDham</td>
				</tr>
				<tr>
					<td>ണ</td>
					<td>Na</td>
					<td>NNA</td>
					<td>മണം</td>
					<td>maNam</td>
				</tr>
				<tr>
					<td>ത</td>
					<td>tha</td>
					<td>TA</td>
					<td>തത്ത</td>
					<td>thaththa</td>
				</tr>
				<tr>
					<td>ഥ</td>
					<td>thha</td>
					<td>THA</td>
					<td>കഥ</td>
					<td>kathha</td>
				</tr>
				<tr>
					<td>ദ</td>
					<td>da</td>
					<td>DA</td>
					<td>ദയ</td>
					<td>daya</td>
				</tr>
				<tr>
					<td>ധ</td>
					<td>dha</td>
					<td>DHA</td>
					<td>ധനം</td>
					<td>dhanam</td>
				</tr>
				<tr>
					<td>ന</td>
					<td>na</td>
					<td>NA</td>
					<td>നന്ന്</td>
					<td>nann</td>
				</tr>
				<tr>
					<td>പ</td>
					<td>pa</td>
					<td>PA</td>
					<td>പല</td>
					<td>pala</td>
				</tr>
				<tr>
					<td>ഫ</td>
					<td>pha</td>
					<td>PHA</td>
					<td>ഫലം</td>
					<td>phalam</td>
				</tr>
				<tr>
					<td>ബ</td>
					<td>ba</td>
					<td>BA</td>
					<td>ബലം</td>
					<td>balam</td>
				</tr>
				<tr>
					<td>ഭ</td>
					<td>bha</td>
					<td>BHA</td>
					<td>ഭയം</td>
					<td>bhayam</td>
				</tr>
				<tr>
					<td>മ</td>
					<td>ma</td>
					<td>MA</td>
					<td>മയം</td>
					<td>mayam</td>
				</tr>
				<tr>
					<td>യ</td>
					<td>ya</td>
					<td>YA</td>
					<td>യതി</td>
					<td>yathi</td>
				</tr>
				<tr>
					<td>ര</td>
					<td>ra</td>
					<td>RA</td>
					<td>രണ്ട്</td>
					<td>raNT</td>
				</tr>
				<tr>
					<td>ല</td>
					<td>la</td>
					<td>LA</td>
					<td>ലത</td>
					<td>latha</td>
				</tr>
				<tr>
					<td>വ</td>
					<td>va</td>
					<td>VA</td>
					<td>വരം</td>
					<td>varam</td>
				</tr>
				<tr>
					<td>ശ</td>
					<td>Sa</td>
					<td>SHA</td>
					<td>ശരം</td>
					<td>Saram</td>
				</tr>
				<tr>
					<td>ഷ</td>
					<td>sha</td>
					<td>SSA</td>
					<td>ഷാരം</td>
					<td>shaaram</td>
				</tr>
				<tr>
					<td>സ</td>
					<td>sa</td>
					<td>SA</td>
					<td>സാരം</td>
					<td>saaram</td>
				</tr>
				<tr>
					<td>ഹ</td>
					<td>ha</td>
					<td>HA</td>
					<td>ഹാരം</td>
					<td>haaram</td>
				</tr>
				<tr>
					<td>ള</td>
					<td>La</td>
					<td>LLA</td>
					<td>ഇള</td>
					<td>iLa</td>
				</tr>
				<tr>
					<td>ഴ</td>
					<td>zha</td>
					<td>LLLA</td>
					<td>ഇഴ</td>
					<td>izha</td>
				</tr>
				<tr>
					<td>റ</td>
					<td>Ra</td>
					<td>RRA</td>
					<td>പറ</td>
					<td>paRa</td>
				</tr>
				<tr>
					<td>റ്റ</td>
					<td>ta</td>
					<td>RRA, VIRAMA, RRA</td>
					<td>റ്റാറ്റ</td>
					<td>taata</td>
				</tr>
				<tr>
					<td>₹</td>
					<td>$</td>
					<td>INDIAN RUPEE SIGN</td>
					<td>₹10</td>
					<td>$10</td>
				</tr>
			</tbody>
		</table>
		<h2>Chillus</h2>
		<p dir="auto">The letters r, n, N, l, L or m at the beginning of a word or after a vowel will form corresponding
			chillu character. Anusvara (ം) is considered a chillu of 'മ'.</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ർ</td>
					<td>r</td>
					<td>CHILLU RR</td>
					<td>അവർ</td>
					<td>avar</td>
				</tr>
				<tr>
					<td>ൻ</td>
					<td>n</td>
					<td>CHILLU N</td>
					<td>അവൻ</td>
					<td>avan</td>
				</tr>
				<tr>
					<td>ൺ</td>
					<td>N</td>
					<td>CHILLU NN</td>
					<td>ആൺ</td>
					<td>aanh</td>
				</tr>
				<tr>
					<td>ൽ</td>
					<td>l</td>
					<td>CHILLU L</td>
					<td>അവൽ</td>
					<td>aval</td>
				</tr>
				<tr>
					<td>ൾ</td>
					<td>L</td>
					<td>CHILLU LL</td>
					<td>അവൾ</td>
					<td>avalh</td>
				</tr>
				<tr>
					<td>ം</td>
					<td>m</td>
					<td>ANUSVARA</td>
					<td>ജിം</td>
					<td>jim</td>
				</tr>
			</tbody>
		</table>
		<h2>Semi-vowel signs</h2>
		<p dir="auto">Described by examples:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>സ്യ</td>
					<td>sya</td>
					<td>SA, VIRAMA, YA</td>
					<td>സസ്യം</td>
					<td>sasyam</td>
				</tr>
				<tr>
					<td>സ്ര</td>
					<td>sra</td>
					<td>SA, VIRAMA, RA</td>
					<td>സ്രാവം</td>
					<td>sraavam</td>
				</tr>
				<tr>
					<td>സ്ല</td>
					<td>sla</td>
					<td>SA, VIRAMA, LA</td>
					<td>സ്ലാവിക്</td>
					<td>slaavik</td>
				</tr>
				<tr>
					<td>സ്ള</td>
					<td>sLa</td>
					<td>SA, VIRAMA, LLA</td>
					<td>ബ്ളോഗ്</td>
					<td>bLOg</td>
				</tr>
				<tr>
					<td>സ്വ</td>
					<td>sva</td>
					<td>SA, VIRAMA, VA</td>
					<td>സ്വരം</td>
					<td>svaram</td>
				</tr>
			</tbody>
		</table>
		<p dir="auto">Additional mapping for shift-less entry</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ഏ</td>
					<td>ea</td>
					<td>EE</td>
					<td>ഗ്രേറ്റ്</td>
					<td>great</td>
				</tr>
				<tr>
					<td>ഓ</td>
					<td>oa</td>
					<td>OO</td>
					<td>സോപ്</td>
					<td>soap</td>
				</tr>
				<tr>
					<td>ട്ട</td>
					<td>ttta</td>
					<td>TTA, VIRAMA, TTA</td>
					<td>കട്ട</td>
					<td>kattta</td>
				</tr>
				<tr>
					<td>ഠ</td>
					<td>ttha</td>
					<td>TTHA</td>
					<td>കണ്ഠം</td>
					<td>kanttham</td>
				</tr>
				<tr>
					<td>ഡ</td>
					<td>dta</td>
					<td>DDA</td>
					<td>വീഡിയോ</td>
					<td>veedtiyoa</td>
				</tr>
				<tr>
					<td>ഢ</td>
					<td>dtha</td>
					<td>DDHA</td>
					<td>ഗൂഢം</td>
					<td>goodtham</td>
				</tr>
				<tr>
					<td>ണ</td>
					<td>nha</td>
					<td>NNA</td>
					<td>ആണ്</td>
					<td>aanh`</td>
				</tr>
				<tr>
					<td>ശ</td>
					<td>za</td>
					<td>SHA</td>
					<td>ശരം</td>
					<td>zaram</td>
				</tr>
				<tr>
					<td>ള</td>
					<td>lha</td>
					<td>LLA</td>
					<td>ഇള</td>
					<td>ilha</td>
				</tr>
			</tbody>
		</table>
		<h3>The letter 'n' can be 'ണ' in some conjuncts:</h3>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ണ്ട</td>
					<td>ntta</td>
					<td>NNA, VIRAMA, TTA</td>
					<td>കണ്ടം</td>
					<td>kanttam</td>
				</tr>
				<tr>
					<td>ണ്ഠ</td>
					<td>nttha</td>
					<td>NNA, VIRAMA, TTHA</td>
					<td>കണ്ഠം</td>
					<td>kanttham</td>
				</tr>
				<tr>
					<td>ഷ്ണ</td>
					<td>shna</td>
					<td>SSA, VIRAMA, NNA</td>
					<td>കൃഷ്ണ</td>
					<td>krshna</td>
				</tr>
			</tbody>
		</table>
		<h3>Additional mapping for minimum keystrokes</h3>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ച</td>
					<td>ca</td>
					<td>CA</td>
					<td>ചാടി</td>
					<td>cAtti</td>
				</tr>
				<tr>
					<td>ഫ</td>
					<td>fa</td>
					<td>PHA</td>
					<td>ഫാൻ</td>
					<td>fAn</td>
				</tr>
				<tr>
					<td>ഖ</td>
					<td>qa</td>
					<td>KHA</td>
					<td>ഖത്തർ</td>
					<td>qaTHar</td>
				</tr>
				<tr>
					<td>ക്സ</td>
					<td>xa</td>
					<td>KA, VIRAMA, SA</td>
					<td>എക്സ്റേ</td>
					<td>exRE</td>
				</tr>
				<tr>
					<td>ച്ഛ</td>
					<td>Cha</td>
					<td>CA, VIRAMA, CHA</td>
					<td>അച്ഛൻ</td>
					<td>aChan</td>
				</tr>
				<tr>
					<td>ഭ</td>
					<td>Fa</td>
					<td>BHA</td>
					<td>ഭാഷ</td>
					<td>Faasha</td>
				</tr>
				<tr>
					<td>ഘ</td>
					<td>Qa</td>
					<td>GHA</td>
					<td>മേഘം</td>
					<td>mEQam</td>
				</tr>
				<tr>
					<td>ക്ഷ</td>
					<td>Xa</td>
					<td>KA, VIRAMA, SSA</td>
					<td>ആക്ഷൻ</td>
					<td>AXan</td>
				</tr>
				<tr>
					<td>ഴ</td>
					<td>Za</td>
					<td>LLLA</td>
					<td>വ്യാഴാഴ്ച</td>
					<td>vyAZAZca</td>
				</tr>
			</tbody>
		</table>
		<h3>Corresponding minimization in conjuncts, for shift-less input:</h3>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ങ്ക</td>
					<td>nka</td>
					<td>NGA, VIRAMA, KA</td>
					<td>മങ്ക</td>
					<td>manka</td>
				</tr>
				<tr>
					<td>ഞ്ച</td>
					<td>nca</td>
					<td>GYA, VIRAMA, CA</td>
					<td>പുഞ്ച</td>
					<td>punca</td>
				</tr>
				<tr>
					<td>ഞ്ച</td>
					<td>ncha</td>
					<td>GYA, VIRAMA, CA</td>
					<td>പുഞ്ച</td>
					<td>puncha</td>
				</tr>
				<tr>
					<td>ഞ്ഛ</td>
					<td>nchha</td>
					<td>GYA, VIRAMA, CHA</td>
					<td>വാഞ്ഛ</td>
					<td>vAnchha</td>
				</tr>
				<tr>
					<td>ച്ച</td>
					<td>chca</td>
					<td>CA, VIRAMA, CA</td>
					<td>പൂച്ച</td>
					<td>poochca</td>
				</tr>
				<tr>
					<td>ച്ഛ</td>
					<td>ccha</td>
					<td>CA, VIRAMA, CHA</td>
					<td>പുച്ഛം</td>
					<td>puccham</td>
				</tr>
				<tr>
					<td>ത്ത</td>
					<td>thta</td>
					<td>TA, VIRAMA, TA</td>
					<td>അത്തം</td>
					<td>athtam</td>
				</tr>
				<tr>
					<td>ള്ള</td>
					<td>llha</td>
					<td>LLA, VIRAMA, LLA</td>
					<td>ഉള്ള</td>
					<td>ullha</td>
				</tr>
			</tbody>
		</table>
		<h3>Additional mapping for consistency</h3>
		<p dir="auto">Long form of the vowels with additional 'a':</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ആ</td>
					<td>aa</td>
					<td>AA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഏ</td>
					<td>ea</td>
					<td>EE</td>
					<td>ഗ്രേറ്റ്</td>
					<td>great</td>
				</tr>
				<tr>
					<td>ഈ</td>
					<td>ia</td>
					<td>II</td>
					<td>ഈട്</td>
					<td>iaT</td>
				</tr>
				<tr>
					<td>ഓ</td>
					<td>oa</td>
					<td>OO</td>
					<td>സോപ്</td>
					<td>soap</td>
				</tr>
				<tr>
					<td>ഊ</td>
					<td>ua</td>
					<td>UU</td>
					<td>ഊട്</td>
					<td>uaT</td>
				</tr>
			</tbody>
		</table>
		<h3>Additional mapping for naturalness</h3>
		<p dir="auto">Vowel mappings:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ഈ</td>
					<td>ee</td>
					<td>II</td>
					<td>ഹീൽ</td>
					<td>heel</td>
				</tr>
				<tr>
					<td>ഊ</td>
					<td>oo</td>
					<td>UU</td>
					<td>പൂൾ</td>
					<td>pooL</td>
				</tr>
				<tr>
					<td>ഏ</td>
					<td>ae</td>
					<td>EE</td>
					<td>ആൽഗേ</td>
					<td>Algae</td>
				</tr>
				<tr>
					<td>ഐ</td>
					<td>ei</td>
					<td>AI</td>
					<td>ഐൻസ്റ്റൈൻ</td>
					<td>einstein</td>
				</tr>
				<tr>
					<td>ഔ</td>
					<td>ou</td>
					<td>AU</td>
					<td>സൗത്ത്</td>
					<td>souTH</td>
				</tr>
				<tr>
					<td>Consonant and conjunct mappings:</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>വ</td>
					<td>wa</td>
					<td>VA</td>
					<td>വെബ്</td>
					<td>web</td>
				</tr>
				<tr>
					<td>ണ്ട</td>
					<td>Nta</td>
					<td>NNA, VIRAMA, TA</td>
					<td>ചെണ്ട</td>
					<td>cheNta</td>
				</tr>
			</tbody>
		</table>
		<h3>Repetition = upper-casing = gemination</h3>
		<p dir="auto">Repetition and upper-casing are equivalent and means gemination(vowel elongation or consonant
			doubling), if it does not conflict with the basic mapping.</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ആ</td>
					<td>aa</td>
					<td>AA</td>
					<td>ആസിഡ്</td>
					<td>aasiD</td>
				</tr>
				<tr>
					<td>ആ</td>
					<td>A</td>
					<td>AA</td>
					<td>ആസിഡ്</td>
					<td>AsiD</td>
				</tr>
				<tr>
					<td>ബ്ബ</td>
					<td>bba</td>
					<td>BA, VIRAMA, BA</td>
					<td>റബ്ബർ</td>
					<td>rrabbar</td>
				</tr>
				<tr>
					<td>ബ്ബ</td>
					<td>Ba</td>
					<td>BA, VIRAMA, BA</td>
					<td>റബ്ബർ</td>
					<td>RaBar</td>
				</tr>
				<tr>
					<td>ച്ച</td>
					<td>cca</td>
					<td>CA, VIRAMA, CA</td>
					<td>കൊച്ചി</td>
					<td>kocci</td>
				</tr>
				<tr>
					<td>ച്ച</td>
					<td>Ca</td>
					<td>CA, VIRAMA, CA</td>
					<td>കൊച്ചി</td>
					<td>koCi</td>
				</tr>
				<tr>
					<td>ച്ച</td>
					<td>chcha</td>
					<td>CA, VIRAMA, CA</td>
					<td>കൊച്ചി</td>
					<td>kochchi</td>
				</tr>
				<tr>
					<td>ച്ച</td>
					<td>CHa</td>
					<td>CA, VIRAMA, CA</td>
					<td>കൊച്ചി</td>
					<td>koCHi</td>
				</tr>
				<tr>
					<td>ഗ്ഗ</td>
					<td>gga</td>
					<td>GA, VIRAMA, GA</td>
					<td>വർഗ്ഗീസ്</td>
					<td>varggiis</td>
				</tr>
				<tr>
					<td>ഗ്ഗ</td>
					<td>Ga</td>
					<td>GA, VIRAMA, GA</td>
					<td>വർഗ്ഗീസ്</td>
					<td>varGIs</td>
				</tr>
				<tr>
					<td>ഈ</td>
					<td>ii</td>
					<td>II</td>
					<td>ഈജിപ്ത്</td>
					<td>iijipth</td>
				</tr>
				<tr>
					<td>ഈ</td>
					<td>I</td>
					<td>II</td>
					<td>ഈജിപ്ത്</td>
					<td>Ijipth</td>
				</tr>
				<tr>
					<td>ജ്ജ</td>
					<td>jja</td>
					<td>JA, VIRAMA, JA</td>
					<td>ഹജ്ജ്</td>
					<td>hajj</td>
				</tr>
				<tr>
					<td>ജ്ജ</td>
					<td>Ja</td>
					<td>JA, VIRAMA, JA</td>
					<td>ഹജ്ജ്</td>
					<td>haJ</td>
				</tr>
				<tr>
					<td>ക്ക</td>
					<td>kka</td>
					<td>KA, VIRAMA, KA</td>
					<td>സർക്കാർ</td>
					<td>sarkkaar</td>
				</tr>
				<tr>
					<td>ക്ക</td>
					<td>Ka</td>
					<td>KA, VIRAMA, KA</td>
					<td>സർക്കാർ</td>
					<td>sarKAr</td>
				</tr>
				<tr>
					<td>മ്മ</td>
					<td>mma</td>
					<td>MA, VIRAMA, MA</td>
					<td>മമ്മൂട്ടി</td>
					<td>mammuuttti</td>
				</tr>
				<tr>
					<td>മ്മ</td>
					<td>Ma</td>
					<td>MA, VIRAMA, MA</td>
					<td>മമ്മൂട്ടി</td>
					<td>maMUTTi</td>
				</tr>
				<tr>
					<td>ഞ്ഞ</td>
					<td>njnja</td>
					<td>NYA, VIRAMA, NYA</td>
					<td>മഞ്ഞ്</td>
					<td>manjnj</td>
				</tr>
				<tr>
					<td>ഞ്ഞ</td>
					<td>NJa</td>
					<td>NYA, VIRAMA, NYA</td>
					<td>മഞ്ഞ്</td>
					<td>maNJ</td>
				</tr>
				<tr>
					<td>ങ്ങ</td>
					<td>ngnga</td>
					<td>NGA, VIRAMA, NGA</td>
					<td>മൂങ്ങ</td>
					<td>muungnga</td>
				</tr>
				<tr>
					<td>ങ്ങ</td>
					<td>NGa</td>
					<td>NGA, VIRAMA, NGA</td>
					<td>മൂങ്ങ</td>
					<td>mUNGa</td>
				</tr>
				<tr>
					<td>പ്പ</td>
					<td>ppa</td>
					<td>PA, VIRAMA, PA</td>
					<td>റിപ്പോർട്ട്</td>
					<td>rrippOrtt</td>
				</tr>
				<tr>
					<td>പ്പ</td>
					<td>Pa</td>
					<td>PA, VIRAMA, PA</td>
					<td>റിപ്പോർട്ട്</td>
					<td>RiPOrTT</td>
				</tr>
				<tr>
					<td>റ</td>
					<td>Ra</td>
					<td>RRA</td>
					<td>പറ</td>
					<td>paRa</td>
				</tr>
				<tr>
					<td>റ</td>
					<td>rra</td>
					<td>RRA</td>
					<td>പറ</td>
					<td>parra</td>
				</tr>
				<tr>
					<td>ഋക്</td>
					<td>Rk</td>
					<td>VOCALIC R</td>
					<td>ഋണം</td>
					<td>RNam</td>
				</tr>
				<tr>
					<td>ഋക്</td>
					<td>rrk</td>
					<td>VOCALIC R</td>
					<td>ഋണം</td>
					<td>rrNam</td>
				</tr>
				<tr>
					<td>ട</td>
					<td>Ta</td>
					<td>TTA</td>
					<td>കട</td>
					<td>kaTa</td>
				</tr>
				<tr>
					<td>അട</td>
					<td>atta</td>
					<td>TTA</td>
					<td>കട</td>
					<td>katta</td>
				</tr>
				<tr>
					<td>ത്ത</td>
					<td>ththa</td>
					<td>TA, VIRAMA, TA</td>
					<td>തത്ത</td>
					<td>thaththa</td>
				</tr>
				<tr>
					<td>ത്ത</td>
					<td>THa</td>
					<td>TA, VIRAMA, TA</td>
					<td>തത്ത</td>
					<td>thaTHa</td>
				</tr>
				<tr>
					<td>ഊ</td>
					<td>uu</td>
					<td>UU</td>
					<td>ന്യൂസ്</td>
					<td>nyuus</td>
				</tr>
				<tr>
					<td>ഊ</td>
					<td>U</td>
					<td>UU</td>
					<td>ന്യൂസ്</td>
					<td>nyUs</td>
				</tr>
				<tr>
					<td>വ്വ</td>
					<td>vva</td>
					<td>VA, VIRAMA, VA</td>
					<td>സർവ്വീസ്</td>
					<td>sarvviis</td>
				</tr>
				<tr>
					<td>വ്വ</td>
					<td>Va</td>
					<td>VA, VIRAMA, VA</td>
					<td>സർവ്വീസ്</td>
					<td>sarVIs</td>
				</tr>
				<tr>
					<td>വ്വ</td>
					<td>wwa</td>
					<td>VA, VIRAMA, VA</td>
					<td>സർവ്വീസ്</td>
					<td>sarwwiis</td>
				</tr>
				<tr>
					<td>വ്വ</td>
					<td>Wa</td>
					<td>VA, VIRAMA, VA</td>
					<td>സർവ്വീസ്</td>
					<td>sarWIs</td>
				</tr>
				<tr>
					<td>യ്യ</td>
					<td>yya</td>
					<td>YA, VIRAMA, YA</td>
					<td>അയ്യപ്പൻ</td>
					<td>ayyappan</td>
				</tr>
				<tr>
					<td>യ്യ</td>
					<td>Ya</td>
					<td>YA, VIRAMA, YA</td>
					<td>അയ്യപ്പൻ</td>
					<td>aYaPan</td>
				</tr>
			</tbody>
		</table>
		<h3>Doubling of ങ (NGA) and ഞ (NYA) in medial position</h3>
		<p dir="auto">The sequence 'ng' produces ങ്ങ് and 'nj' produces ഞ്ഞ് if it is typed after a vowel and is not
			followed by a consonant.</p>
		<p dir="auto">At the same time, 'ngng' produces ങ്ങ് and 'njnj' produces ഞ്ഞ്. To produce singular form in those
			cases, prefix '-'(dash), by forcing it to be at word initial position. Examples:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ങ</td>
					<td>nga</td>
					<td>NGA</td>
					<td>ങ്യാവൂ</td>
					<td>ngyaavoo</td>
				</tr>
				<tr>
					<td>അങ്ങ</td>
					<td>anga</td>
					<td>A, NGA, VIRAMA, NGA</td>
					<td>അങ്ങനെ</td>
					<td>angane</td>
				</tr>
				<tr>
					<td>അങ്ങ</td>
					<td>angnga</td>
					<td>A, NGA, VIRAMA, NGA</td>
					<td>അങ്ങനെ</td>
					<td>angngane</td>
				</tr>
				<tr>
					<td>അങ</td>
					<td>a-nga</td>
					<td>A, NGA</td>
					<td>പിങ്പോങ്</td>
					<td>pi-ngpO-ng</td>
				</tr>
				<tr>
					<td>ങ്ഗ</td>
					<td>ngga</td>
					<td>NGA, VIRAMA, GA</td>
					<td>ശാർങ്ഗ</td>
					<td>Saarngga</td>
				</tr>
				<tr>
					<td>ഞ</td>
					<td>nja</td>
					<td>NYA</td>
					<td>ഞാൻ</td>
					<td>njaan</td>
				</tr>
				<tr>
					<td>അഞ്ഞ</td>
					<td>anja</td>
					<td>A, NYA, VIRAMA, NYA</td>
					<td>മഞ്ഞ്</td>
					<td>manj</td>
				</tr>
				<tr>
					<td>അഞ്ഞ</td>
					<td>anjnja</td>
					<td>A, NYA, VIRAMA, NYA</td>
					<td>മഞ്ഞ്</td>
					<td>manjnj</td>
				</tr>
				<tr>
					<td>അഞ</td>
					<td>a-nja</td>
					<td>A, NYA</td>
					<td>കൈഞരമ്പ്</td>
					<td>kai-njaramp</td>
				</tr>
				<tr>
					<td>ജ്ഞ</td>
					<td>jnja</td>
					<td>JA, VIRAMA, NYA</td>
					<td>ജ്ഞാനം</td>
					<td>jnjaanam</td>
				</tr>
				<tr>
					<td>ഞ്ജ</td>
					<td>njja</td>
					<td>NYA, VIRAMA, JA</td>
					<td>അഞ്ജനം</td>
					<td>anjjanam</td>
				</tr>
			</tbody>
		</table>
		<h3>t → ട് in consonant conjuncts</h3>
		<p dir="auto">The letter 't' becomes 'ട' instead of the default 'റ്റ' in the following exception cases:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ട്ട</td>
					<td>ttta</td>
					<td>TTA, VIRAMA, TTA</td>
					<td>വട്ടം</td>
					<td>vatttam</td>
				</tr>
				<tr>
					<td>ണ്ട</td>
					<td>Nta</td>
					<td>NNA, VIRAMA, TTA</td>
					<td>വെണ്ട</td>
					<td>veNta</td>
				</tr>
				<tr>
					<td>ഷ്ട</td>
					<td>shta</td>
					<td>SSA, VIRAMA, TTA</td>
					<td>ഇഷ്ടം</td>
					<td>ishtam</td>
				</tr>
				<tr>
					<td>അർട</td>
					<td>arta</td>
					<td>CHILLU RR, VIRAMA, TTA</td>
					<td>ആർട്സ്</td>
					<td>Arts</td>
				</tr>
				<tr>
					<td>ട്ര</td>
					<td>ttra</td>
					<td>TTA, VIRAMA, RA</td>
					<td>സ്ട്രീറ്റ്</td>
					<td>street</td>
				</tr>
			</tbody>
		</table>
		<h3>Contextual forms using 'r' and 'R'</h3>
		<p dir="auto">Generally, 'r' favors 'ര', '്ര' and 'ർ', while 'R' favors 'റ' and 'ഋ'.</p>
		<div class="snippet-clipboard-content position-relative overflow-auto">
			<ul>
				<li>'r' becomes:</li>
				<ul>
					<li>'ര' when a vowel follows it. Example: ri → രി</li>
					<li>'ർ' in a standalone position or following a vowel. Example: kar → കർ</li>
					<li>'്ര' if between a consonant and a vowel. Example: kri → ക്രി</li>
					<li>If '്ര' is not viable for the given consonant, produce full 'ര'. Example: yra → യ്‌ര</li>
				</ul>
				<li>'R' becomes:</li>
				<ul>
					<li>'റ' before or after a vowel. AR → ആറ്; RA → റാ</li>
					<li>'ഋ' in rest of the cases</li>
				</ul>
				<li>'r' becomes 'ഋ', aiding minimum key shift-less input, when:</li>
				<ul>
					<li>Word initial position before a consonant. Example: rsha → ഋഷ</li>
					<li>Word ending position after a consonant. Example: thr → തൃ</li>
					<li>Between two consonants. Example: krma → കൃമ</li>
					<li>Except, when second consonant is യ. Example: nthrya → ന്ത്ര്യ</li>
				</ul>
				<li>'rr' acts as 'R'.</li>
			</ul>
		</div>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ര</td>
					<td>ra</td>
					<td>RA</td>
					<td>രണ്ട്</td>
					<td>raNT</td>
				</tr>
				<tr>
					<td>കൃ</td>
					<td>kr</td>
					<td>KA, VOCALIC R</td>
					<td>പിതൃ</td>
					<td>pithr</td>
				</tr>
				<tr>
					<td>ക്ര</td>
					<td>kra</td>
					<td>KA, VIRAMA, RA</td>
					<td>പ്രക്രിയ</td>
					<td>prakriya</td>
				</tr>
				<tr>
					<td>ൽര</td>
					<td>lra</td>
					<td>CHILLU L, RA</td>
					<td>അയൽരാജ്യം</td>
					<td>ayalraajyam</td>
				</tr>
				<tr>
					<td>ന്ര</td>
					<td>nra</td>
					<td>NA, VIRAMA, RA</td>
					<td>ന്രസ്ഥി</td>
					<td>nrasthhi</td>
				</tr>
				<tr>
					<td>യ്‌ര</td>
					<td>yra</td>
					<td>YA, VIRAMA, ZWNJ, RA</td>
					<td>കൊയ്‌രാള</td>
					<td>koyraaLa</td>
				</tr>
				<tr>
					<td>കർ</td>
					<td>kar</td>
					<td>KA, CHILLU RR</td>
					<td>വർഷം</td>
					<td>varsham</td>
				</tr>
				<tr>
					<td>ർ</td>
					<td>r</td>
					<td>CHILLU RR</td>
					<td>ർർർ</td>
					<td>r-r-r</td>
				</tr>
				<tr>
					<td>ഋക</td>
					<td>rka</td>
					<td>VOCALIC R, KA</td>
					<td>ഋതു</td>
					<td>rthu</td>
				</tr>
				<tr>
					<td>കൃഗ</td>
					<td>krga</td>
					<td>KA, VOCALIC R, GA</td>
					<td>പ്രവൃത്തി</td>
					<td>pravrthti</td>
				</tr>
				<tr>
					<td>ക്ര്യ</td>
					<td>krya</td>
					<td>KA, VIRAMA, RA, VIRAMA, YA</td>
					<td>സ്വാതന്ത്ര്യ</td>
					<td>svaathanthrya</td>
				</tr>
				<tr>
					<td>റ</td>
					<td>Ra</td>
					<td>RRA</td>
					<td>പറ</td>
					<td>paRa</td>
				</tr>
				<tr>
					<td>കറ്</td>
					<td>kaR</td>
					<td>KA, CHILLU RR, VIRAMA</td>
					<td>സാറ്</td>
					<td>saaR</td>
				</tr>
				<tr>
					<td>കൃ</td>
					<td>kR</td>
					<td>KA, SIGN VOCALIC R</td>
					<td>നിരൃതി</td>
					<td>nirRthi</td>
				</tr>
				<tr>
					<td>ഋ</td>
					<td>R</td>
					<td>VOCALIC R</td>
					<td>ഋഷി</td>
					<td>Rshi</td>
				</tr>
				<tr>
					<td>ക്റ</td>
					<td>kRa</td>
					<td>KA, VIRAMA, RRA</td>
					<td>എക്സ്റേ</td>
					<td>exRE</td>
				</tr>
				<tr>
					<td>യ്റ</td>
					<td>yRa</td>
					<td>YA, VIRAMA, RA</td>
					<td>കെയ്റോ</td>
					<td>keyRO</td>
				</tr>
				<tr>
					<td>ൻറ</td>
					<td>nRa</td>
					<td>CHILLU N, RRA</td>
					<td>എൻറോൾ</td>
					<td>enROL</td>
				</tr>
				<tr>
					<td>കൃഗ</td>
					<td>kRga</td>
					<td>KA, VOCALIC R, GA</td>
					<td>പ്രവൃത്തി</td>
					<td>pravRthti</td>
				</tr>
				<tr>
					<td>കൃയ</td>
					<td>kRya</td>
					<td>KA, VOCALIC R, YA</td>
					<td>നേതൃയോഗം</td>
					<td>nEthRyOgam</td>
				</tr>
				<tr>
					<td>ഋക്</td>
					<td>rk</td>
					<td>VOCALIC R</td>
					<td>ഋണം</td>
					<td>rNam</td>
				</tr>
				<tr>
					<td>റ</td>
					<td>rra</td>
					<td>RRA</td>
					<td>കറ</td>
					<td>karra</td>
				</tr>
				<tr>
					<td>ക്റ</td>
					<td>krra</td>
					<td>KA, VIRAMA, RRA</td>
					<td>നെഹ്റു</td>
					<td>nehrru</td>
				</tr>
			</tbody>
		</table>
		<h2>Extra elongation for vowel signs</h2>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ആാ</td>
					<td>aaa</td>
					<td>AA, SIGN AA, SIGN AA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കാാ</td>
					<td>kaaa</td>
					<td>KA, SIGN AA, SIGN AA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ആാ</td>
					<td>AA</td>
					<td>AA, SIGN AA, SIGN AA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കാാ</td>
					<td>kAA</td>
					<td>KA, SIGN AA, SIGN AA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഈൗ</td>
					<td>iii</td>
					<td>II, AU LENGTH MARK</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കീീ</td>
					<td>kiii</td>
					<td>KA, SIGN II, SIGN II</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഈൗ</td>
					<td>eee</td>
					<td>II, AU LENGTH MARK</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കീീ</td>
					<td>keee</td>
					<td>KA, SIGN II, SIGN II</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഈൗ</td>
					<td>II</td>
					<td>II, AU LENGTH MARK</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കീീ</td>
					<td>kII</td>
					<td>KA, SIGN II, SIGN II</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഏേ</td>
					<td>EE</td>
					<td>EE, SIGN EE</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കേേ</td>
					<td>kEE</td>
					<td>KA, SIGN EE, SIGN EE</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഊൗ</td>
					<td>uuu</td>
					<td>UU, AU LENGTH MARK</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കൂൂ</td>
					<td>kuuu</td>
					<td>KA, SIGN UU, SIGN UU</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഊൗ</td>
					<td>UU</td>
					<td>UU, AU LENGTH MARK</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കൂൂ</td>
					<td>kUU</td>
					<td>KA, SIGN UU, SIGN UU</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഊൗ</td>
					<td>ooo</td>
					<td>UU, AU LENGTH MARK</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കൂൂ</td>
					<td>kooo</td>
					<td>KA, SIGN UU, SIGN UU</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഓാ</td>
					<td>OO</td>
					<td>AU, SIGN AA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കോോ</td>
					<td>kOO</td>
					<td>KA, SIGN OO, SIGN OO</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ഔൗ</td>
					<td>auu</td>
					<td>AU, AU LENGTH MARK</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>കൗൗ</td>
					<td>kauu</td>
					<td>KA, AU LENGTH MARK, AU LENGTH MARK</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<h2>Consonant Cluster</h2>
		<p dir="auto">Consonant Cluster in a word is the sequence of English letters representing more than one
			consonant. As an example, the word in Mozhi, 'svam' has the consonant cluster: 'sv' - for consonants 'sa'
			and 'va'. This definition is used in sections below.</p>
		<h3>Chillu or conjunct</h3>
		<p dir="auto">A chillu-capable letter in a consonant cluster will not form a chillu if that cluster starts with
			the following sequence. (Please ignore the ending 'a' which is to show the cluster in its simplest form):
		</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ണ്ട</td>
					<td>Nta</td>
					<td>NNA, VIRAMA, TA</td>
					<td>മണ്ട</td>
					<td>maNta</td>
				</tr>
				<tr>
					<td>ണ്ഠ</td>
					<td>NTha</td>
					<td>NNA, VIRAMA, THA</td>
					<td>കുണ്ഠിതം</td>
					<td>kuNThitham</td>
				</tr>
				<tr>
					<td>ണ്ഡ</td>
					<td>NDa</td>
					<td>NNA, VIRAMA, DDA</td>
					<td>പാണ്ഡു</td>
					<td>paaNDu</td>
				</tr>
				<tr>
					<td>ണ്ഢ</td>
					<td>NDha</td>
					<td>NNA, VIRAMA, DDHA</td>
					<td>ണ്ഢ</td>
					<td>NDha</td>
				</tr>
				<tr>
					<td>ണ്ണ</td>
					<td>NNa</td>
					<td>NNA, VIRAMA, NNA</td>
					<td>കണ്ണ്</td>
					<td>kaNN</td>
				</tr>
				<tr>
					<td>ണ്മ</td>
					<td>Nma</td>
					<td>NNA, VIRAMA, MA</td>
					<td>വെണ്മ</td>
					<td>veNma</td>
				</tr>
				<tr>
					<td>ണ്യ</td>
					<td>Nya</td>
					<td>NNA, VIRAMA, YA</td>
					<td>നാണ്യം</td>
					<td>naaNyam</td>
				</tr>
				<tr>
					<td>ണ്വ</td>
					<td>Nva</td>
					<td>NNA, VIRAMA, VA</td>
					<td>കണ്വൻ</td>
					<td>kaNvan</td>
				</tr>
				<tr>
					<td>ന്ത</td>
					<td>ntha</td>
					<td>NA, VIRAMA, TA</td>
					<td>തന്ത</td>
					<td>thantha</td>
				</tr>
				<tr>
					<td>ന്ഥ</td>
					<td>nthha</td>
					<td>NA, VIRAMA, THA</td>
					<td>പാന്ഥൻ</td>
					<td>paanthhan</td>
				</tr>
				<tr>
					<td>ന്ദ</td>
					<td>nda</td>
					<td>NA, VIRAMA, DA</td>
					<td>നന്ദി</td>
					<td>nandi</td>
				</tr>
				<tr>
					<td>ന്ധ</td>
					<td>ndha</td>
					<td>NA, VIRAMA, DHA</td>
					<td>അന്ധൻ</td>
					<td>andhan</td>
				</tr>
				<tr>
					<td>ന്ന</td>
					<td>nna</td>
					<td>NA, VIRAMA, NA</td>
					<td>പിന്നെ</td>
					<td>pinne</td>
				</tr>
				<tr>
					<td>ന്മ</td>
					<td>nma</td>
					<td>NA, VIRAMA, MA</td>
					<td>നന്മ</td>
					<td>nanma</td>
				</tr>
				<tr>
					<td>ന്യ</td>
					<td>nya</td>
					<td>NA, VIRAMA, YA</td>
					<td>അന്യം</td>
					<td>anyam</td>
				</tr>
				<tr>
					<td>ന്ര</td>
					<td>nra</td>
					<td>NA, VIRAMA, RA</td>
					<td>ന്രസ്ഥി</td>
					<td>nrasthhi</td>
				</tr>
				<tr>
					<td>ന്വ</td>
					<td>nva</td>
					<td>NA, VIRAMA, VA</td>
					<td>അന്വയം</td>
					<td>anvayam</td>
				</tr>
				<tr>
					<td>മ്പ</td>
					<td>mpa</td>
					<td>MA, VIRAMA, PA</td>
					<td>കമ്പം</td>
					<td>kampam</td>
				</tr>
				<tr>
					<td>മ്മ</td>
					<td>mma</td>
					<td>MA, VIRAMA, MA</td>
					<td>അമ്മ</td>
					<td>amma</td>
				</tr>
				<tr>
					<td>മ്യ</td>
					<td>mya</td>
					<td>MA, VIRAMA, YA</td>
					<td>രമ്യം</td>
					<td>ramyam</td>
				</tr>
				<tr>
					<td>മ്ര</td>
					<td>mra</td>
					<td>MA, VIRAMA, RA</td>
					<td>കമ്രം</td>
					<td>kamram</td>
				</tr>
				<tr>
					<td>മ്ല</td>
					<td>mla</td>
					<td>MA, VIRAMA, LA</td>
					<td>അമ്ലം</td>
					<td>amlam</td>
				</tr>
				<tr>
					<td>മ്ള</td>
					<td>mLa</td>
					<td>MA, VIRAMA, LA</td>
					<td>അമ്ളം</td>
					<td>amLam</td>
				</tr>
				<tr>
					<td>ര്യ</td>
					<td>rya</td>
					<td>RA, VIRAMA, YA</td>
					<td>ഭാര്യ</td>
					<td>bhaarya</td>
				</tr>
				<tr>
					<td>ഋക</td>
					<td>rka</td>
					<td>VOCALIC R, KA</td>
					<td>ഋഗ്വേദം</td>
					<td>rgvaedam</td>
				</tr>
				<tr>
					<td>ല്പ</td>
					<td>lpa</td>
					<td>LA, VIRAMA, PA</td>
					<td>അല്പം</td>
					<td>alpam</td>
				</tr>
				<tr>
					<td>ല്യ</td>
					<td>lya</td>
					<td>LA, VIRAMA, YA</td>
					<td>അഹല്യ</td>
					<td>ahalya</td>
				</tr>
				<tr>
					<td>ല്ല</td>
					<td>lla</td>
					<td>LA, VIRAMA, LA</td>
					<td>ഇല്ല</td>
					<td>illa</td>
				</tr>
				<tr>
					<td>ള്യ</td>
					<td>Lya</td>
					<td>LLA, VIRAMA, YA</td>
					<td>ജാള്യം</td>
					<td>jaaLyam</td>
				</tr>
				<tr>
					<td>ള്ള</td>
					<td>LLa</td>
					<td>LLA, VIRAMA, LLA</td>
					<td>ഉള്ള</td>
					<td>uLLa</td>
				</tr>
			</tbody>
		</table>
		<p dir="auto">Following examples are for more than two consonants in a consonant cluster:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ണ്ഡ്യ</td>
					<td>NDya</td>
					<td>NNA, VIRAMA, DDA, VIRAMA, YA</td>
					<td>പാണ്ഡ്യൻ</td>
					<td>paaNDyan</td>
				</tr>
				<tr>
					<td>ന്ത്ര്യ</td>
					<td>nthrya</td>
					<td>NA, VIRAMA, TA, VIRAMA, RA, VIRAMA, YA</td>
					<td>സ്വാതന്ത്ര്യം</td>
					<td>svaathanthryam</td>
				</tr>
			</tbody>
		</table>
		<h4>Exceptions</h4>
		<p dir="auto">If a consonant cluster starts as then consonant A will form chillu. Example:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ൽപ്പ</td>
					<td>lppa</td>
					<td>CHILLU L, PA, VIRAMA, PA</td>
					<td>അൽപ്പം</td>
					<td>alppam</td>
				</tr>
			</tbody>
		</table>
		<p dir="auto">The 'മ്യ' and 'മ്ര' conjuncts are not formed if they follow 'സം'. Example:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>സംയ</td>
					<td>samya</td>
					<td>SA, ANUSVARA, YA</td>
					<td>സംയോഗം</td>
					<td>samyOgam</td>
				</tr>
				<tr>
					<td>സംര</td>
					<td>samra</td>
					<td>SA, ANUSVARA, RA</td>
					<td>സംരംഭം</td>
					<td>samrambham</td>
				</tr>
			</tbody>
		</table>
		<p dir="auto">If 'മ്യ' and 'മ്ര' conjunct are required after 'സ', then please use '_' to make it the word
			initial consonant cluster. Examples:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>സമ്യ</td>
					<td>sa-mya</td>
					<td>SA, MA, VIRAMA, YA</td>
					<td>സമ്യക്</td>
					<td>sa-myak</td>
				</tr>
				<tr>
					<td>സമ്ര</td>
					<td>sa-mra</td>
					<td>SA, MA, VIRAMA, RA</td>
					<td>സമ്രാട്ട്</td>
					<td>sa-mraattt</td>
				</tr>
			</tbody>
		</table>
		<p dir="auto">While writing 'ൻ്റ' conjunct by 'nt..' sequence, 'n' will produce Chillu-N as follows:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ൻ്റ</td>
					<td>nta</td>
					<td>CHILLU N, VIRAMA, RRA</td>
					<td>എൻ്റെ</td>
					<td>ente</td>
				</tr>
				<tr>
					<td>ൻറ</td>
					<td>nrra</td>
					<td>CHILLU N, RRA</td>
					<td>എൻറോൾ</td>
					<td>enrrOL</td>
				</tr>
			</tbody>
		</table>
		<h2>Explicit Chandrakkala instead of Chillu</h2>
		<p dir="auto">The '`' (back quote) character can be used to get chandrakkala form instead of a chillu form. It
			can produce chandakkala after U-sign as well. If '`' is placed between two consonants, it would insert a
			ZWNJ after the virama to make the chandrakkala explicit.</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ന്</td>
					<td>n`</td>
					<td>NA, VIRAMA</td>
					<td>അവന്</td>
					<td>avan`</td>
				</tr>
				<tr>
					<td>ന്</td>
					<td>n~</td>
					<td>NA, VIRAMA</td>
					<td>അവന്</td>
					<td>avan~</td>
				</tr>
				<tr>
					<td>നു്</td>
					<td>nu`</td>
					<td>NA, SIGN U, VIRAMA</td>
					<td>അവനു്</td>
					<td>avanu`</td>
				</tr>
				<tr>
					<td>നു്</td>
					<td>nu~</td>
					<td>NA, SIGN U, VIRAMA</td>
					<td>അവനു്</td>
					<td>avanu~</td>
				</tr>
				<tr>
					<td>ൽമ</td>
					<td>lma</td>
					<td>CHILLU L, MA</td>
					<td>വാൽമീകി</td>
					<td>vaalmeeki</td>
				</tr>
				<tr>
					<td>ല്മ</td>
					<td>l`ma</td>
					<td>LA, VIRAMA, MA</td>
					<td>വാല്മീകി</td>
					<td>vaal`meeki</td>
				</tr>
				<tr>
					<td>മ്അ</td>
					<td>m`a</td>
					<td>MA, VIRAMA, A</td>
					<td>മ്അദനി</td>
					<td>m`adani</td>
				</tr>
			</tbody>
		</table>
		<p dir="auto">Sometimes users type '`' even when it is not required at the word endings. Those '`'s are always
			consumed.</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ത്</td>
					<td>th</td>
					<td>A, TA, VIRAMA</td>
					<td>അത്</td>
					<td>ath</td>
				</tr>
				<tr>
					<td>ത്</td>
					<td>th`</td>
					<td>A, TA, VIRAMA</td>
					<td>അത്</td>
					<td>ath`</td>
				</tr>
				<tr>
					<td>ത്</td>
					<td>th~</td>
					<td>A, TA, VIRAMA</td>
					<td>അത്</td>
					<td>ath~</td>
				</tr>
			</tbody>
		</table>
		<h2>Stand-alone combining marks</h2>
		<p dir="auto">The chandrakkala character '`' (back quote) in the word initial position can be used to get vowel
			signs without typing a base consonant.</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>്</td>
					<td>`</td>
					<td>VIRAMA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>്</td>
					<td>~</td>
					<td>VIRAMA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ാ</td>
					<td>`aa</td>
					<td>SIGN AA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ി</td>
					<td>`i</td>
					<td>SIGN I</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<h2>Separate two words without space</h2>
		<p dir="auto">Use '-' (dash) to start a new sequence out of context from previously typed text. The same effect
			can be achieved by typing a space instead and then later removing it. This feature is useful for:</p>
		<div class="snippet-clipboard-content position-relative overflow-auto">
			<ul>
				<li>Get chillu letter in contexts where it would otherwise form a conjunct with the following consonant.
					Example: 'nna' for ന്ന Vs 'n-na' for ൻന.</li>
				<li>Get a full vowel in-between a word</li>
			</ul>
		</div>
		<p dir="auto">If just '-' alone is typed, then that will appear to the user and will be consumed only when the
			next character typed would behave differently if typed without a space before it. All vowel producing
			letters have above property. Examples:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ന്വ</td>
					<td>nva</td>
					<td>NA, VIRAMA, VA</td>
					<td>അന്വയം</td>
					<td>anvayam</td>
				</tr>
				<tr>
					<td>ൻവ</td>
					<td>n-va</td>
					<td>CHILLU N, VA</td>
					<td>പൊൻവില</td>
					<td>pon-vila</td>
				</tr>
				<tr>
					<td>ൻവ</td>
					<td>n_va</td>
					<td>CHILLU N, VA</td>
					<td>പൊൻവില</td>
					<td>pon_vila</td>
				</tr>
				<tr>
					<td>ങ്ക</td>
					<td>nka</td>
					<td>NGA, VIRAMA, KA</td>
					<td>പങ്ക</td>
					<td>panka</td>
				</tr>
				<tr>
					<td>ൻക</td>
					<td>n-ka</td>
					<td>CHILLU N, KA</td>
					<td>ഇൻക</td>
					<td>in-ka</td>
				</tr>
				<tr>
					<td>ൻ-</td>
					<td>n-</td>
					<td>CHILLU N, -</td>
					<td>പൊൻ-</td>
					<td>pon-</td>
				</tr>
				<tr>
					<td>ൻ_</td>
					<td>n_</td>
					<td>CHILLU N, -</td>
					<td>പൊൻ_</td>
					<td>pon_</td>
				</tr>
				<tr>
					<td>ൻ-ഡ</td>
					<td>n-Da</td>
					<td>CHILLU N, -, DDA</td>
					<td>ആൻ-ഡ്</td>
					<td>An-D</td>
				</tr>
				<tr>
					<td>ൾ്ക</td>
					<td>L-`ka</td>
					<td>CHILLU LL, VIRAMA, KA</td>
					<td>ൾ്ക</td>
					<td>L-`ka</td>
				</tr>
			</tbody>
		</table>
		<h2>Archaic letters</h2>
		<p dir="auto">To get the archaic form of a letter, please use the symbol '#' following it. Even more archaic
			form is given out by repeating it - example: '##'. In the table below an archaic character is represented by
			its codepoint, if it is not available in the latest version of Noto Sans Malayalam font.</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>അ#</td>
					<td>ഽ</td>
					<td>a#</td>
					<td>AVAGRAHA</td>
					<td>അസോഽസൗ</td>
				</tr>
				<tr>
					<td>ഇ#</td>
					<td>ൟ</td>
					<td>ii#</td>
					<td>ARCHAIC II</td>
					<td>ൟറ</td>
				</tr>
				<tr>
					<td>ഋ#</td>
					<td>ൠ</td>
					<td>R#</td>
					<td>VOCALIC RR</td>
					<td>ൠന്ന്</td>
				</tr>
				<tr>
					<td>കൃ#</td>
					<td>കൄ</td>
					<td>kR#</td>
					<td>SIGN VOCALIC RR</td>
					<td>കൄന്ന്</td>
				</tr>
				<tr>
					<td>ക്#</td>
					<td>ൿ</td>
					<td>k#</td>
					<td>CHILLU K</td>
					<td>ആമ്പിൿ</td>
				</tr>
				<tr>
					<td>റ്റ്#</td>
					<td>ററ്</td>
					<td>t#</td>
					<td>RRA, RRA, VIRAMA</td>
					<td>അററം</td>
				</tr>
				<tr>
					<td>റ്റ#</td>
					<td>ററ</td>
					<td>ta#</td>
					<td>RRA, RRA</td>
					<td>അററം</td>
				</tr>
				<tr>
					<td>ററ്#</td>
					<td>ഺ്</td>
					<td>t##</td>
					<td>TTTA</td>
					<td>അഺ</td>
				</tr>
				<tr>
					<td>ററ#</td>
					<td>ഺ</td>
					<td>ta##</td>
					<td>TTTA</td>
					<td>അഺ</td>
				</tr>
				<tr>
					<td>ൻ്റ്#</td>
					<td>ൻറ്</td>
					<td>nt#</td>
					<td>CHILLU N, RRA</td>
					<td>എൻെറ</td>
				</tr>
				<tr>
					<td>ൻ#</td>
					<td>ഩ്</td>
					<td>n#</td>
					<td>NNNA</td>
					<td>അഩ</td>
				</tr>
				<tr>
					<td>ന#</td>
					<td>ഩ</td>
					<td>na#</td>
					<td>NNNA</td>
					<td>അഩ</td>
				</tr>
				<tr>
					<td>നു#</td>
					<td>൹</td>
					<td>nu#</td>
					<td>DATE MARK</td>
					<td>9-൹</td>
				</tr>
				<tr>
					<td>ം#</td>
					<td>ൔ</td>
					<td>m#</td>
					<td>CHILLU M</td>
					<td></td>
				</tr>
				<tr>
					<td>ൔ#</td>
					<td>ഀ</td>
					<td>m##</td>
					<td>ANUSVARA ABOVE</td>
					<td></td>
				</tr>
				<tr>
					<td>ഀ#</td>
					<td>ഁ</td>
					<td>m###</td>
					<td>CANDRABINDU</td>
					<td></td>
				</tr>
				<tr>
					<td>ഁ#</td>
					<td>ഄ</td>
					<td>m####</td>
					<td>VEDIC ANUSVARA</td>
					<td></td>
				</tr>
				<tr>
					<td>ഄ#</td>
					<td>ം</td>
					<td>m#####</td>
					<td>ANUSVARA</td>
					<td></td>
				</tr>
				<tr>
					<td>യ്#</td>
					<td>ൕ</td>
					<td>y#</td>
					<td>CHILLU Y</td>
					<td></td>
				</tr>
				<tr>
					<td>ഴ്#</td>
					<td>ൖ</td>
					<td>zh#</td>
					<td>CHILLU LLL</td>
					<td></td>
				</tr>
				<tr>
					<td>ക്#</td>
					<td>ൿ</td>
					<td>k#</td>
					<td>CHILLU K</td>
					<td></td>
				</tr>
				<tr>
					<td>ർ#</td>
					<td>ൎ</td>
					<td>r#</td>
					<td>DOT REPH</td>
					<td>ഭാൎയ്യ</td>
				</tr>
				<tr>
					<td>₹#</td>
					<td>₨</td>
					<td>$#</td>
					<td>RUPEE SIGN</td>
					<td>₨10</td>
				</tr>
				<tr>
					<td>പറ#</td>
					<td>൏</td>
					<td>parra#</td>
					<td>PARA SIGN</td>
					<td></td>
				</tr>
				<tr>
					<td>ൽ#</td>
					<td>ഌ</td>
					<td>l#</td>
					<td>VOCALIC L</td>
					<td>ഌകാരം</td>
				</tr>
				<tr>
					<td>ക്ല്#</td>
					<td>കൢ</td>
					<td>kl#</td>
					<td>KA, SIGN VOCALIC L</td>
					<td>കൢപ്തം</td>
				</tr>
				<tr>
					<td>ഌl</td>
					<td>ൡ</td>
					<td>l#l</td>
					<td>VOCALIC LL</td>
					<td>ൡതം</td>
				</tr>
				<tr>
					<td>കൢl</td>
					<td>കൣ</td>
					<td>kl#l</td>
					<td>KA, SIGN VOCALIC LL</td>
					<td>കൣതം</td>
				</tr>
				<tr>
					<td>കൗ#</td>
					<td>കൌ</td>
					<td>kau#</td>
					<td>KA, SIGN AU</td>
					<td>കൌതുകം</td>
				</tr>
				<tr>
					<td>ൻ്രറ്യൗ#</td>
					<td>ൻ്രെറ്യൗ</td>
					<td>nt#ryau#</td>
					<td>CHILLU N, VIRAMA, RA, SIGN E, RRA, VIRAMA, YA, AU LENGTH MARK</td>
					<td></td>
				</tr>
				<tr>
					<td>ൻ്രററ്യൗ#</td>
					<td>ൻ്രെററ്യൗ</td>
					<td>nt##ryau#</td>
					<td>CHILLU N, VIRAMA, RA, SIGN E, RRA, RRA, VIRAMA, YA, AU LENGTH MARK</td>
					<td></td>
				</tr>
				<tr>
					<td>യ‍്യ</td>
					<td>yy#a</td>
					<td>YA, ZWJ, VIRAMA, YA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>യ‍്യ</td>
					<td>yya#</td>
					<td>YA, ZWJ, VIRAMA, YA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>്#</td>
					<td>഼</td>
					<td>`#</td>
					<td>CIRCLE ABOVE VIRAMA</td>
					<td></td>
				</tr>
				<tr>
					<td>഼#</td>
					<td>഻</td>
					<td>`##</td>
					<td>VERTICAL BAR VIRAMA</td>
					<td></td>
				</tr>
				<tr>
					<td>഻#</td>
					<td>്</td>
					<td>`###</td>
					<td>VIRAMA</td>
					<td></td>
				</tr>
				<tr>
					<td>൧</td>
					<td>1#</td>
					<td>ONE</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൰</td>
					<td>10#</td>
					<td>TEN</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൱</td>
					<td>100#</td>
					<td>HUNDRED</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൲</td>
					<td>1000#</td>
					<td>THOUSAND</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൴</td>
					<td>1/2#</td>
					<td>ONE HALF</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൳</td>
					<td>1/4#</td>
					<td>ONE QUARTER</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൵</td>
					<td>3/4#</td>
					<td>THREE QUARTERS</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൷</td>
					<td>1/8#</td>
					<td>ONE EIGHTH</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൶</td>
					<td>1/16#</td>
					<td>ONE SIXTEENTH</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൸</td>
					<td>3/16#</td>
					<td>THREE SIXTEENTHS</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൞</td>
					<td>1/5#</td>
					<td>ONE FIFTH</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൜</td>
					<td>1/10#</td>
					<td>ONE TENTH</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൛</td>
					<td>1/20#</td>
					<td>ONE TWENTIETH</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൝</td>
					<td>3/20#</td>
					<td>THREE TWENTIETHS</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൙</td>
					<td>1/40#</td>
					<td>ONE FORTIETH</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>മ</td>
					<td>1/80#</td>
					<td>ONE EIGHTIETH</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൚</td>
					<td>3/80#</td>
					<td>THREE EIGHTIETHS</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൘</td>
					<td>1/160#</td>
					<td>ONE ONE-HUNDRED-AND-SIXTIETH</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>പ്ത</td>
					<td>1/320#</td>
					<td>ONE THREE-HUNDRED-AND-TWENTIETH</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<p dir="auto">Digits after a Malayalam digit will be a converted to Malayalam digit.</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>൧൨൩</td>
					<td>1#23</td>
					<td>ONE, TWO, THREE</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>൧൦#</td>
					<td>൰</td>
					<td>1#0#</td>
					<td>TEN</td>
					<td></td>
				</tr>
				<tr>
					<td>൧൦൦#</td>
					<td>൱</td>
					<td>1#00#</td>
					<td>HUNDRED</td>
					<td></td>
				</tr>
				<tr>
					<td>൧൦൦൦#</td>
					<td>൲</td>
					<td>1#000#</td>
					<td>THOUSAND</td>
					<td>൨൲൩൱൪൰൫</td>
				</tr>
			</tbody>
		</table>
		<h2>Escape by word</h2>
		<p dir="auto">Transliteration is not attempted if it is preceded by ''.</p>
		<p dir="auto">Keys after an English letter will be kept as it is. Along with English letters, it is continued
			for the following special characters: . : / @. When any of the rest of the special characters including
			space is entered, escaping is broken and transliteration will be continued. Examples:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>`</td>
					<td>\`</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>a</td>
					<td>\a</td>
					<td></td>
					<td>ഒരു cat വന്നു</td>
					<td>oru \cat vannu</td>
				</tr>
				<tr>
					<td><a href="mailto:ab@xyz.com">ab@xyz.com</a> എന്ന</td>
					<td>\<a href="mailto:ab@xyz.com">ab@xyz.com</a> enna</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><a href="http://9.com-%E0%B5%BD" rel="nofollow">http://9.com-ൽ</a></td>
					<td>\<a href="http://9.com-l" rel="nofollow">http://9.com-l</a></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<h2>Legacy encoding</h2>
		<p dir="auto">Chillu sequences mentioned in Unicode standard before its version 5.1 are produced by adding '^'
			after the standard chillu-letter.</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ൻ^</td>
					<td>ന്‍</td>
					<td>n^</td>
					<td>NA, VIRAMA, ZWJ</td>
					<td>മോഹന്‍ലാല്‍</td>
				</tr>
			</tbody>
		</table>
		<p dir="auto">There are multiple legacy encoding for ൻ്റ. The sequence generated by SMC tools are available by
			'^' and that supported primarily by Microsoft can be indicated by '^^'.</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ൻ്റ്^</td>
					<td>ന്റ്</td>
					<td>nt^</td>
					<td>NA, VIRAMA, RRA, VIRAMA</td>
					<td>എന്റെ</td>
				</tr>
				<tr>
					<td>ൻ്റ^</td>
					<td>ന്റ</td>
					<td>nta^</td>
					<td>NA, VIRAMA, RRA</td>
					<td>എന്റർ</td>
				</tr>
				<tr>
					<td>ന്റ്^</td>
					<td>ന്‍റ്</td>
					<td>nt^^</td>
					<td>NA, VIRAMA, ZWJ, RRA, VIRAMA</td>
					<td>എന്‍റെ</td>
				</tr>
				<tr>
					<td>ന്റ^</td>
					<td>ന്‍റ</td>
					<td>nta^^</td>
					<td>NA, VIRAMA, ZWJ, RRA</td>
					<td>എന്‍റർ</td>
				</tr>
			</tbody>
		</table>
		<h2>Joiners</h2>
		<p dir="auto">Explicit joiners can be typed as follows:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>U+200D</td>
					<td>++</td>
					<td>ZERO WIDTH JOINER</td>
					<td>ന്‍</td>
					<td>n`++</td>
				</tr>
				<tr>
					<td>U+200C</td>
					<td></td>
					<td></td>
					<td></td>
					<td>ZERO WIDTH NON JOINER</td>
				</tr>
				<tr>
					<td>U+200B</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<h2>Backspace</h2>
		<p dir="auto">On backspace, use the OS's backspace(⌫) operation. However, next key would use the context of the
			existing input. Example:</p>
		<table>
			<thead>
				<tr>
					<th>Malayalam</th>
					<th>Mozhi</th>
					<th>Unicode Character(s)</th>
					<th>Malayalam Example</th>
					<th>Mozhi Example</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ന്ന</td>
					<td>nna</td>
					<td>NA, VIRAMA, NA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ൻ</td>
					<td>nna⌫</td>
					<td>CHILLU N</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>ങ്ക</td>
					<td>nna⌫ka</td>
					<td>NGA, VIRAMA, KA</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<h2>Useful symbols and emojis</h2>
		<p dir="auto">Following mapping does not have anything to do with Malayalam; however, these are found to be
			useful to have in a keyboard:</p>
		<table>
			<thead>
				<tr>
					<th>Output</th>
					<th>Keystroke</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>—</td>
					<td>--</td>
				</tr>
				<tr>
					<td>→</td>
					<td>-&gt;</td>
				</tr>
				<tr>
					<td>←</td>
					<td>&lt;-</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="left_right_arrow"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2194.png">↔
						</g-emoji>
					</td>
					<td>&lt;-&gt;</td>
				</tr>
				<tr>
					<td>⇒</td>
					<td>=&gt;</td>
				</tr>
				<tr>
					<td>⇐</td>
					<td>&lt;=</td>
				</tr>
				<tr>
					<td>⇔</td>
					<td>&lt;=&gt;</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="blush"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f60a.png">😊
						</g-emoji>
					</td>
					<td>:)</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="smiley"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f603.png">😃
						</g-emoji>
					</td>
					<td>:D</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="laughing"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f606.png">😆
						</g-emoji>
					</td>
					<td>XD</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="joy"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f602.png">😂
						</g-emoji>
					</td>
					<td>:')</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="stuck_out_tongue"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f61b.png">😛
						</g-emoji>
					</td>
					<td>:P</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="wink"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f609.png">😉
						</g-emoji>
					</td>
					<td>;)</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="kissing_heart"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f618.png">😘
						</g-emoji>
					</td>
					<td>:x</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="kissing_heart"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f618.png">😘
						</g-emoji>
					</td>
					<td>:*</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="sunglasses"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f60e.png">😎
						</g-emoji>
					</td>
					<td>B)</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="thinking"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f914.png">🤔
						</g-emoji>
					</td>
					<td>:/</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="smiling_imp"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f608.png">😈
						</g-emoji>
					</td>
					<td>&gt;:)</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="rage"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f621.png">😡
						</g-emoji>
					</td>
					<td>&gt;:(</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="flushed"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f633.png">😳
						</g-emoji>
					</td>
					<td>:O</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="raised_eyebrow"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f928.png">🤨
						</g-emoji>
					</td>
					<td>O_o</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="confused"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f615.png">😕
						</g-emoji>
					</td>
					<td>:|</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="slightly_frowning_face"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f641.png">🙁
						</g-emoji>
					</td>
					<td>:(</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="worried"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f61f.png">😟
						</g-emoji>
					</td>
					<td>:S</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="cry"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f622.png">😢
						</g-emoji>
					</td>
					<td>:'(</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="facepalm"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f926.png">🤦
						</g-emoji>
					</td>
					<td>|O</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="pray"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f64f.png">🙏
						</g-emoji>
					</td>
					<td>/|</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="clap"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f44f.png">👏
						</g-emoji>
					</td>
					<td>\o/</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="+1"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f44d.png">👍
						</g-emoji>
					</td>
					<td>^,</td>
				</tr>
				<tr>
					<td>
						<g-emoji class="g-emoji" alias="heart"
							fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png">❤️
						</g-emoji>
					</td>
					<td>&lt;3</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h2>Mozhi 2.0 Spec</h2>
		<p>For more information and a complete coverage of characters supported along with the keystrokes, please visit the <a href="https://sites.google.com/site/cibu/mozhi2">online Mozhi 2.0 Spec.</a></p>
</body>
