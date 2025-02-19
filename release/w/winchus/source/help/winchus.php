<?php
  $pagename = 'Ayuda para el teclado Winchus';
  $pagetitle = $pagename;
  require_once('header.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Winchus</title>

$pagestyle = <<<END
        body {
            margin: 0 auto;
            padding: 0 5%;
            max-width: 1600px;
            font-family: Arial, sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 0.5em;
            text-align: center;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 0.75em;
            /* padding-left: 20px; */
        }

        h3 {
            font-size: 1.75em;
            margin-bottom: 1em;
            /* padding-left: 20px; */
        }

        h4 {
            font-size: 1.5em;
            margin-bottom: 1.25em;
        }

        h5 {
            font-size: 1.25em;
            margin-bottom: 1.5em;
        }

        h6 {
            font-size: 1em;
            margin-bottom: 1.75em;
        }

        kbd {
        background: none repeat scroll 0 0 #4D4D4D;
        border: 1px solid #CACACA;
        border-right: 2px solid #B3B1B1;
        border-bottom: 2px solid #B3B1B1;
        border-radius: 8px;
        color: #FEFEFE;
        font-family: "NotoSans-Regular-Ascii", "Arial", sans-serif;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        padding: 1px 4px;
        min-width: 1.0em;
        text-align: center;
        display: inline-block;
        /* height: 1.5em; Added to make the height uniform. But it doesn't seem to work */
        }
        .kbd-link {
            background-color: blue;
            color: #ffffff;
        }
    
        .kbd-resultado { /*es: Un nuevo formato para representar el resultado, lo que aparece en la pantalla*/
                    /*en: A new format to represent output, what appears on the screen*/
        background: none repeat scroll 0 0 #b2d3ff;
        border: 2px solid #b2d3ff;
        border-right: 0px solid #B3B1B1;
        border-bottom: 0px solid #B3B1B1;
        border-radius: 25px;
        color: #000000;
    }

        table {
            border-collapse: collapse;
            margin-bottom: 1.5em;
            margin-left: auto;
            margin-right: auto;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            vertical-align: middle; /* Vertically center */
        }

        th {
            background-color: #f2f2f2;
        }

        td.td-nota {
            text-align: left;
        }
        ol {
            line-height: 1.75;
        }
        ul {
            line-height: 1.75;
        }

        ul.no-bullets {
        list-style-type: none;
        /* margin: 0;
        padding: 0; */
        }

        li {
        }
        .seccion-principal {  /* en: main section */
            font-weight: bold; 
        }
        table.mapa-deslizamiento {
            border: 2px solid black; /* Border around the table */
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 18px;
            font-weight: bold;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
            min-width: 30px;  /* Ensure all cells have the same width */
            height: 30px;
            max-width: 50px; /* Maximum width */
            max-height: 30px; /* Maximum height */
            white-space: nowrap; /* Prevents text from wrapping */
            text-align: center;
            background-color: #ffffffCC;
        }

        table.mapa-deslizamiento th, table.mapa-deslizamiento td {
            border: none; /* No border for table cells */
            vertical-align: middle; /* Vertically center */
            min-width: 30px; /* Ensure all cells have the same width */
        }

        /* @page, @page landscape-secion, y .landscape permiten los teclados en la sección de "Configuración del teclado" imprimirse en modo horizontal, lo cual es importante al imprimir en A5 (lo cual facilita la lectura en celulares). */
        @page {
        size: auto;
        }

        @page landscape-section {
        size: landscape;
        }

        .landscape {
        page: landscape-section;
        }
        
        /* INICIO DE CLASES PARA MOSTRAR EL TECLADO*/
        /* COPIADO Y PEGADO DESDE EL ARCHIVO GENERADO POR KEYMAN DEVELOPER */
        /* winchus.kmn , On-Screen , Export... */
        
        .key { 
            float: left;
            display: block; 
            position: relative;
            overflow: hidden;
            height: 35px;
            
                margin: 2px 0px 0px 4px;
              
        }
        
        #K_SPACE {
          width: 234px; 
          
            background-image: url('key-space.gif'); 
          
        }

        #K_BKSLASH {
          width: 42px; 
          
            background-image: url('key-bkslash.gif'); 
          
        }
        
        #K_oE2 {
          
            display:none;
          
        }
        
        #K_SHIFTL {
          width: 80px;background-image: url('key-shiftl.gif');
        }
        
        .plain {
          
            background-image: url('key-plain.gif');
          
          background-repeat: no-repeat;
          width: 34px;
        }
        
        .special {
          background-repeat: no-repeat;
          
        }
        
        .keycap {
          font: bold 7pt Arial; 
          position: absolute; 
          left: 6px; 
          top: 6px;
        }
        
        .key .keycap {          
          display: none;
        }
        
        .special .keycap {
          display: block;
        }
        
        .keytext {
          
					font:
						12pt
							 
						"Arial"; 
          position: absolute; 
          display: block;
          right: 5px;
          bottom: 4px;
          color: blue;
        }

        /* FIN DE CLASES PARA MOSTRAR EL TECLADO*/
        
        END;
</head>
<body>
    <br /> 
    <h1>Winchus</h1><br />
    <div style="text-align: center;">
        <p><i>Escribe en cualquier idioma Quechua<br />
            con la agilidad de un colibrí.</i></p>
        <p><br/></p>
        <p>Versión 1.0</p>
    

    <!-- <br /><br /><a href="http://tiny.cc/descargar-winchus-teclado">tiny.cc/descargar-winchus-teclado</a><br />
    <br /> -->
    <br />
    <p>Haz clic para descargar el teclado:</p>
    <a href="https://keyman.com/keyboards/winchus" style="text-decoration: none;">
        <button style="border-radius: 25px; background-color: green; color: white; padding: 10px 20px; border: none; cursor: pointer; font-weight: bold; font-size: 110%;">
            keyman.com/keyboards/winchus
        </button>
    </a>
    <br /><br />

    <a href="https://raw.githubusercontent.com/keymanapp/keyboards/master/release/w/winchus/source/welcome/Winchus.pdf" style="text-decoration: none;">
        <div style="border: 1px solid black; padding: 10px; display: inline-block; text-align: center; background-color: #f2f2f2;">
            <b>Descarga este documento<br />para leerlo sin conexión</b>
            <img src="file-type-pdf-47.png" style="display: block; margin-left: auto; margin-right: auto; padding-top: 10px;" />
        </div>
    </a>
    </div>

<a id="tabla-de-contenidos">&nbsp;</a> <!-- Esta ancla esta aparte porque en algunos lados la tabla de contenidos está borrada. Mas, los enlaces abajo quedarán. Así no se desaparecerá la ancla.-->

    <h2 id="guia-rapida-celular"><a href="#tabla-de-contenidos">Guía rápida para usar con celular</a></h2>
    <ul class="no-bullets">
        <h3 id="caracteres-adicionales"><a href="#tabla-de-contenidos">Caracteres adicionales</a></h3>
        <ul class="no-bullets">
            <h4 id="metodo-rapido"><a href="#tabla-de-contenidos">Método rápido: presiona y desliza</a></h4>
            <ul class="no-bullets">
                <p>Para acceder a un carácter especial, pulsa la tecla e inmediatamente desliza el dedo en una dirección. Dependiendo de hacia dónde lo deslices, aparecerá escrito uno de los caracteres especiales.</p>
                    <img src="deslizar-360.gif" style="display: block; margin-left: auto; margin-right: auto;" />
                    <h5>Consejos:</h5>
                    <ul style="list-style-type: disc;">
                        <li>Para acentos (´), desliza desde la vocal hacia el centro del teclado.</li> 
                        <li>Para números, desliza desde una tecla de la primera fila hacia arriba y hacia el centro de la pantalla.</li>
                        <li>Para la diéresis (¨), desliza desde la vocal hacia arriba.</li>
                        <li>Si la vista previa no te muestra el carácter deseado, mueve tu dedo alrededor de la tecla para explorar y descubrir cuáles están disponibles y dónde están.</li>
                    </ul>
                    </ul>
            <h4 id="metodo-alternativo"><a href="#tabla-de-contenidos">Método alternativo: presión larga</a></h4>
                <ol>
                    <p>Para acceder a un carácter especial, mantén presionada la tecla relacionada por un momento. Ahora sin soltar, desliza al carácter deseado, hasta que se ponga azul, luego, suelta.</p>
                    <img src="06-presion-larga-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                </ol>
        </ul>
        <h3 id="emojis"><a href="#tabla-de-contenidos">Emojis</a></h3>
        <ol>
            <li>Toca la "😀" en el rincón inferior derecho para ver la capa principal de emojis:
            <img src="01-capa-emoji-donde-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
            </li>
            <li>Las primeras tres filas son emojis básicos:
                <img src="02-primeros-emojis-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                </li>
            <li>Los de la última fila son botones que llevan a más emojis:
                <img src="03-otros-emojis-donde-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                </li>
            <li>Toca la "😀" en el mismo rincón para volver a la capa de emojis principal:
                <img src="04-volver-capa-emojis-principal-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                </li>
            <li>O, toca 'abc' para volver a las letras:
                <img src="05-volver-al-teclado-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                </li>
        </ol>
        <h2 id="guia-rapida-teclado-fisico"><a href="#tabla-de-contenidos">Guía rápida para usar con un teclado físico (Computadoras y laptops)</a></h2>
        <ul class="no-bullets">
            <p>Este teclado fue diseñado usando como base el Teclado Latinoamericano.</p>
            
            <p>siempre que veas un gráfico como <kbd>Alt</kbd>, <kbd>.</kbd>, o <kbd>U</kbd>, hace referencia a una tecla en tu teclado.</p>

            <p>siempre que veas un gráfico como <kbd class="kbd-resultado">Ć</kbd> o <kbd class="kbd-resultado">Ü  </kbd>, hace referencia a un carácter resultado que sale en la pantalla.</p>
            
            <p>Siempre que salga <kbd>Mayús</kbd> dos o tres veces en un atajo, simplemente mantén presionada la tecla <kbd>Mayús</kbd> mientras tecleas las otras dos teclas una por una.</p>
            
       
            <table>
                <thead>
                    <tr>
                        <th>Caracteres</th>
                        <th>Minúscula</th>
                        <th>Mayúscula</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><kbd class="kbd-resultado">ć</kbd> <kbd class="kbd-resultado">Ć</kbd></td>
                        <td><kbd>´</kbd> + <kbd>C</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>C</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ŕ</kbd> <kbd class="kbd-resultado">Ŕ</kbd></td>
                        <td><kbd>´</kbd> + <kbd>R</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>R</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ś</kbd> <kbd class="kbd-resultado">Ś</kbd></td>
                        <td><kbd>´</kbd> + <kbd>S</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>S</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ĉ</kbd> <kbd class="kbd-resultado">Ĉ</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>{</kbd> + <kbd>C</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>{</kbd> + <kbd>Mayús</kbd> + <kbd>C</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ĉ</kbd> <kbd class="kbd-resultado">Ĉ</kbd><br /> (2<sup>da</sup> opción)</td>
                        <td><kbd>Mayús</kbd> + <kbd>6</kbd> + <kbd>C</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>6</kbd> + <kbd>Mayús</kbd> + <kbd>C</kbd> </td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">č</kbd> <kbd class="kbd-resultado">Č</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>5</kbd> + <kbd>C</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>5</kbd> + <kbd>Mayús</kbd> + <kbd>C</kbd> </td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">š</kbd> <kbd class="kbd-resultado">Š</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>5</kbd> + <kbd>S</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>5</kbd> + <kbd>Mayús</kbd> + <kbd>S</kbd> </td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ꞌ</kbd> <kbd class="kbd-resultado">Ꞌ</kbd></td>
                        <td><kbd>´</kbd> + <kbd>’</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>’</kbd></td>
                    </tr>
                    <tr>
                        <th>Puntuación </th>
                        <th>Abertura</th>
                        <th>Cierre</th>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">«</kbd> <kbd class="kbd-resultado">»</kbd></td>
                        <td><kbd>&lt;</kbd> + <kbd>&lt;</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>&gt;</kbd> + <kbd>Mayús</kbd> + <kbd>&gt;</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">&lt;</kbd> <kbd class="kbd-resultado">&gt;</kbd></td>
                        <td><kbd>&lt;</kbd> + <kbd>&lt;</kbd> + <kbd>&lt;</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>&gt;</kbd> + <kbd>Mayús</kbd> + <kbd>&gt;</kbd> + <kbd>Mayús</kbd> + <kbd>&gt;</kbd></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><kbd class="kbd-resultado">&lt;</kbd> <kbd class="kbd-resultado">&gt;</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>,</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>.</kbd></td>
                    </tr>
                    <tr>
                        <td colspan="2">(Para teclados estadounidenses. Recuerda usar la <kbd>Alt</kbd> derecha.)</td>
                    </tr>
                </tbody>
            </table>
        </ul>
            
    <h2 id="introduccion"><a href="#tabla-de-contenidos">Introducción</a></h2>
    <ul class="no-bullets">
        <p>En todo el mundo hay más de 1.5 mil millones de personas que hablan un idioma minoritario. Para muchos de ellos usar su idioma en los sectores digitales resulta un gran reto. Caracteres no disponibles. Un autocorrector determinado a “corregir” cada palabra indígena por una palabra de otro idioma mayoritario. Para muchas personas, este reto es muy abrumador e influye en que su idioma se use menos, privando así al hablante de su derecho a expresarse completamente, y quitando oportunidades para que el mundo conozca su belleza.</p>

        <p>En el mundo hay más de siete millones de Quechuahablantes (Ethnologue). A pesar de que los sistemas de escritura en esta familia de idiomas sean parecidos al sistema español, muchos tienen consonantes adicionales. Por ende hasta ahora los recursos disponibles para teclear en Quechua han sido muy técnicos y difíciles de usar.</p>
        
        <p>La meta de este teclado es simplificar la digitación del Quechua en todos los dispositivos. (Gracias a la plataforma Keyman, ahora el desarrollador sólo tiene que configurarlo una vez y mantener una sola versión sin necesitar un gran equipo de programadores para adaptarlo y readaptarlo a cada sistema operativo).</p>

        <p>Este teclado fue diseñado usando como base el Teclado Latinoamericano. También se puede usar en teclados físicos para escribir en español e inglés, minimizando la necesidad de cambiar la configuración de teclado. Todos los caracteres disponibles en los teclados latinoamericanos y estadounidenses están disponibles en el teclado Winchus, aunque algunos símbolos han sido movidos, o las combinaciones de teclas han sido cambiadas debido a las diferencias entre los dos teclados y las necesidades del teclado Quechua.</p>
        
        <p>Este documento explica cómo usar el teclado cuando se usa en un dispositivo móvil (como un celular) y en un dispositivo físico (como una laptop).</p>
        
        <p>Primero en esta introducción se indicará cuáles son los nuevos caracteres disponibles. En las secciones siguientes se explicará primero cómo instalar el teclado, y después cómo usarlo en los dispositivos correspondientes.</p>
    </ul>

    <h3 id="nuevos-caracteres"><a href="#tabla-de-contenidos">Nuevos caracteres</a></h3>
    <ul class="no-bullets">
         <h4 id="consonantes"><a href="#tabla-de-contenidos">Consonantes</a></h4>
            <ul class="no-bullets">
            <p>Las nuevas consonantes disponibles son derivadas de la C, H, R, y S.</p>
            <table>
                <thead>
                    <tr>
                        <th>Letra</th>
                        <th>Acento</th>
                        <th>Circunflejo</th>
                        <th>Carón</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C</td>
                        <td>ć Ć</td>
                        <td>ĉ Ĉ</td>
                        <td>č Č</td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>h́ H́</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>R</td>
                        <td>ŕ Ŕ</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>ś Ś</td>
                        <td>ŝ Ŝ</td>
                        <td>š Š</td>
                    </tr>
                </tbody>
            </table>
            
            <p>Para representar la glotal que aparece frecuentemente en las variantes sureñas, tradicionalmente se ha usado la comilla simple (‘). Sin embargo, eso puede presentar dificultades en la representación del texto y en su procesamiento. (Por ejemplo, ¿cómo verificar que cada citación lleva ambas comillas cuando el mismo carácter también se usa en la formación de palabras?) Por eso este teclado también dispone del saltillo, otra manera de representar la glotal que hasta ahora tiene más uso en los idiomas indígenas de México. El saltillo se parece mucho a la comilla simple del español, pero no se dobla a un lado, como suele ocurrir cuando la comilla simple se usa para hacer una citación. Se debe tener en consideración que al usarla, podría surgir una dificultad al buscar una palabra si está escrita con la comilla en la búsqueda y con el saltillo en el texto (o viceversa). Puedes usar la opción que prefieras.</p>
            
            <table>
                <tr>
                    <th>-</th>
                    <th>Minúscula</th>
                    <th>Mayúscula</th>
                </tr>
                <tr>
                    <td>Saltillo (glotal)</td>
                    <td>ꞌ</td>
                    <td>Ꞌ</td>
                </tr>
            </table>
        </ul>

        <h4 id="puntuacion"><a href="#tabla-de-contenidos">Puntuación- Comillas</a></h4>
            <ul class="no-bullets">
                <table>
                    <tr>
                        <th>-</th>
                        <th>Abertura</th>
                        <th>Cerrada</th>
                    </tr>
                    <tr>
                        <td>Citación</td>
                        <td>«</td>
                        <td>»</td>
                    </tr>
                    <tr>
                        <td>Citación incrustada</td>
                        <td>‹</td>
                        <td>›</td>
                    </tr>
                </table>
            </ul>
    </ul>

    <h2 id="teclado-fisico"><a href="#tabla-de-contenidos">Teclado físico (Computadoras y laptops)</a></h2>
    <ul class="no-bullets">
        <h3 id="introduccion-teclado-fisico"><a href="#tabla-de-contenidos">Introducción</a></h3>
        <ul class="no-bullets">
            <p>Siempre que sale <kbd>Alt</kbd>, recuerda que habla de la <kbd>Alt</kbd> Derecha (o “<kbd>Alt Gr</kbd>”) que está a la derecha de la barra de espacio. Igual como en el teclado latinoamericano, la <kbd>Alt</kbd> que está a la izquierda no tendrá el efecto deseado.</p>
            
            <p>Siempre que veas un gráfico como <kbd>Alt</kbd>, <kbd>.</kbd>, o <kbd>U</kbd>, este hace referencia a una tecla en tu teclado. Cuando veas un carácter como <kbd class="kbd-resultado">Ć</kbd>, hace referencia al carácter resultado, que aparece en la pantalla.</p>
        </ul>

        <h3 id="como-instalar"><a href="#tabla-de-contenidos">Cómo Instalar</a></h3>
        <ul class="no-bullets">
          </ul>  <ol>
                <li>Descarga Keyman para <a href="https://keyman.com/windows/download#standalone" target="_blank">Windows</a> <a href="https://keyman.com/mac/" target="_blank">Mac</a> o <a href="https://keyman.com/linux/" target="_blank">Linux</a></li>
                <ul style="list-style-type: disc;">
                    <li>(Si tienes Mac o Linux, estos pasos podrían variar un poco)</li>
                </ul>
                <li>Instala Keyman</li>
                <li>Abre el programa “Keyman Configuration”</li>
                <li>En el rincón inferior izquierdo de la ventanilla, haz clic en el botón “Descargar teclado…”</li>
                <li>Busca “Winchus” y haz clic en el resultado</li>
                <li>Haz clic en el botón verde que diga, “Install Keyboard”</li>
                <li>Después de la descarga, haz clic en el Botón “Instalar” </li>
                <li>Después de que se haya terminado de instalar, reinicia tu computadora. (<b>¡Importante!</b>)</li>
                <li>En la configuración de tu computadora, selecciona el teclado Winchus</li>
                <li>En computadoras Windows, también puedes cambiar el teclado con teclear <kbd><img src="windows-30.png" alt="Tecla Windows" style="display: inline; vertical-align: middle; width: 50%; padding: 20%;" /></kbd> + <kbd>Espacio</kbd>. Verás la lista de teclados en la parte inferior derecha de tu pantalla.</li>
                
                <li>¡Empieza a escribir!</li>
            </ol>
        </ul>
            <div class="landscape">
                <h3 style="page-break-before: always;" id="configuracion-teclado"><a href="#tabla-de-contenidos">Configuración del teclado</a></h3>
                <ul class="no-bullets">
                    <p>La configuración es muy parecida al teclado latinoamericano. Si estás viendo desde tu celular, gíralo para verla en modo horizontal:</p>
                    
                    <h4>Minúscula:</h4>
                    <div id='osk' data-states='default'>
                    </div>

                    <br />
                    <h4 style="page-break-before: always;">Mayúscula:</h4>
                    <div id='osk' data-states='shift'>
                    </div>

                    <br />
                    <h4 style="page-break-before: always;">Alt Derecha:</h4>
                    <div id='osk' data-states='rightalt'>
                    </div>

            </div>
            </ul>        
        <h3 id="consonantes-teclado"><a href="#tabla-de-contenidos">Consonantes</a></h3>
        <ul class="no-bullets">
            <h4 id="acentos"><a href="#tabla-de-contenidos">Acentos</a></h4>
            <ul class="no-bullets">
        
                <p>Para escribir los acentos, usa la misma tecla que es para poner acentos en las vocales: la <kbd>´</kbd>, que suele estar a la derecha de la <kbd>P</kbd>.</p>
                <table>
                    <tr>
                        <th>Caracteres</th>
                        <th>Minúscula</th>
                        <th>Mayúscula</th>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ć</kbd> <kbd class="kbd-resultado">Ć</kbd></td>
                        <td><kbd>´</kbd> + <kbd>C</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>C</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ŕ</kbd> <kbd class="kbd-resultado">Ŕ</kbd></td>
                        <td><kbd>´</kbd> + <kbd>R</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>R</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ś</kbd> <kbd class="kbd-resultado">Ś</kbd></td>
                        <td><kbd>´</kbd> + <kbd>S</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>S</kbd></td>
                    </tr>
                </table>
            </ul>

            <h4 id="circunflejos"><a href="#tabla-de-contenidos">Circunflejos</a></h4>
            <ul class="no-bullets">
                <p>Siempre que salga <kbd>Mayús</kbd> dos o tres veces en un atajo, simplemente mantén presionada la tecla <kbd>Mayús</kbd> mientras tecleas las otras dos teclas una por una.</p>
                <table>
                    <tr>
                        <th>Caracteres</th>
                        <th>Minúscula</th>
                        <th>Mayúscula</th>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ĉ</kbd> <kbd class="kbd-resultado">Ĉ</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>{</kbd> + <kbd>C</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>{</kbd> + <kbd>Mayús</kbd> + <kbd>C</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ĉ</kbd> <kbd class="kbd-resultado">Ĉ</kbd><br />(2<sup>da</sup> opción)</td>
                        <td><kbd>Mayús</kbd> + <kbd>6</kbd> + <kbd>C</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>6</kbd> + <kbd>Mayús</kbd> <kbd>C</kbd></td>
                    </tr>
                </table>
            </ul>
            <h4 id="carones"><a href="#tabla-de-contenidos">Carones</a></h4>
            <ul class="no-bullets"></ul>
            <p>Siempre que salga <kbd>Mayús</kbd> dos o tres veces en un atajo, simplemente mantén presionada la tecla <kbd>Mayús</kbd> mientras tecleas las otras dos teclas una por una.</p>
                <table>
                    <tr>
                        <th>Caracteres</th>
                        <th>Minúscula</th>
                        <th>Mayúscula</th>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">č</kbd> <kbd class="kbd-resultado">Č</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>5</kbd> + <kbd>C</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>5</kbd> + <kbd>Mayús</kbd> <kbd>C</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">š</kbd> <kbd class="kbd-resultado">Š</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>5</kbd> + <kbd>S</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>5</kbd> + <kbd>Mayús</kbd> <kbd>S</kbd></td>
                    </tr>
                </table>
            </ul>

            <h4 id="saltillos"><a href="#tabla-de-contenidos">Saltillos (glotales)</a></h4>
            <ul class="no-bullets">
                <table>
                    <tr>
                        <th>Carácter</th>
                        <th>Minúscula</th>
                        <th>Mayúscula</th>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">ꞌ</kbd> <kbd class="kbd-resultado">Ꞌ</kbd></td>
                        <td><kbd>´</kbd> + <kbd>’</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> +  <kbd>’</kbd></td>
                    </tr>
                </table>
                
                <p>En otras palabras, para teclear el saltillo (glotal) minúscula, teclea la tecla de acento (a la derecha de la <kbd>P</kbd>) y después la tecla de comilla (a la derecha de la <kbd>0</kbd>). 
                Para el saltillo mayúscula, teclea la tecla de acento, presiona <kbd>Mayús</kbd>, y mantenla presionada mientras tecleas la tecla de comilla.</p>
            </ul>
        </ul>    
        <h3 id="vocales"><a href="#tabla-de-contenidos">Vocales</a></h3>
        <ul class="no-bullets">
            <p>Para escribir las vocales con acentos o con umlauts (¨), es igual que en el teclado latinoamericano. Por ejemplo:</p>
                <ul style="list-style-type: disc;">
                    <li><kbd>´</kbd> + <kbd>U</kbd> = <kbd class="kbd-resultado">ú</kbd></li>
                    <li><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>U</kbd> = <kbd class="kbd-resultado">Ú</kbd></li>
                    <li><kbd>Mayús</kbd> + <kbd>´</kbd> + <kbd>U</kbd> = <kbd class="kbd-resultado">ü</kbd></li>
                    <li><kbd>Mayús</kbd> + <kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>U</kbd> = <kbd class="kbd-resultado">Ü</kbd>.</li>
                </ul>
        </ul>
        <h3 id="simbolos"><a href="#tabla-de-contenidos">Símbolos y puntuación</a></h3>
        <ul class="no-bullets">

                <p>Si tienes un teclado Latinoamericano, teclear las comillas angulares será un poco más fácil. Teclea la <kbd>&lt</kbd> dos veces seguidas para conseguir <kbd class="kbd-resultado">«</kbd>. Teclea la <kbd>&lt</kbd> una vez más para conseguir la <kbd class="kbd-resultado">‹</kbd>. Lo mismo aplica para la comilla de cierre.</p>
                <p>Si tu teclado es estadounidense, usa los atajos siguientes:</p>
                <table>
                    <tr>
                        <th>Carácter</th>
                        <th>Combinación<br />de teclado<br />estadounidense</th>
                        <th>Nota</th>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">&lt</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>,</kbd></td>
                        <td>Recuerda usar la <kbd>Alt</kbd> derecha.</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">&gt</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>.</kbd></td>
                        <td>Recuerda usar la <kbd>Alt</kbd> derecha.</td>
                    </tr>
                </table>
   
            <p>Algunos caracteres que pueden ser difíciles de encontrar:</p>
            <table>
                <tr>
                    <th>Carácter</th>
                    <th>Combinación</th>
                    <th>Nota</th>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">`</kbd></td>
                    <td><kbd>Alt</kbd> + <kbd>}</kbd> + <kbd>Espacio</kbd></td>
                    <td class="td-nota">cambia el <kbd>Espacio</kbd> por una vocal para conseguir la vocal con el acento grave </td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">~</kbd></td>
                    <td><kbd>Alt</kbd> + <kbd>+</kbd></td>
                    <td class="td-nota"></td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">@</kbd></td>
                    <td><kbd>Alt</kbd> + <kbd>Q</kbd></td>
                    <td class="td-nota">Recuerda usar la <kbd>Alt</kbd> derecha</td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">\</kbd></td>
                    <td><kbd>Alt</kbd> + <kbd>‘</kbd></td>
                    <td class="td-nota">Recuerda usar la <kbd>Alt</kbd> derecha</td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">&#47;</kbd></td>
                    <td><kbd>Mayús</kbd> + <kbd>7</kbd></td>
                    <td class="td-nota"></td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">|</kbd></td>
                    <td><kbd>|</kbd></td>
                    <td class="td-nota">La tecla de pleca <kbd>|</kbd> suele estar encima del <kbd>Tab</kbd></td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">°</kbd></td>
                    <td><kbd>Mayús</kbd> + <kbd>|</kbd></td>
                    <td class="td-nota">La tecla de pleca <kbd>|</kbd> suele estar encima del <kbd>Tab</kbd></td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">¬</kbd></td>
                    <td><kbd>Alt</kbd> + <kbd>|</kbd></td>
                    <td class="td-nota">La tecla de pleca <kbd>|</kbd> suele estar encima del <kbd>Tab</kbd>. Recuerda usar la <kbd>Alt</kbd> derecha.</td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">^</kbd></td>
                    <td><kbd>Alt</kbd> + <kbd>{</kbd> + <kbd>Espacio</kbd></td>
                    <td class="td-nota">Recuerda usar la <kbd>Alt</kbd> derecha</td>
                </tr>
            </table>
            

            <h3 id="ayuda-teclado-eeuu"><a href="#tabla-de-contenidos">Ayuda si tienes un teclado físico de los Estados Unidos</a></h3>
            <ul class="no-bullets">
                <p>Si hasta ahora solo has usado el teclado estadounidense, verás que este teclado tiene muchas diferencias en cuanto a como digitar los símbolos y signos de puntuación.</p>
                
                <p>El teclado Winchus, por lo general, sigue el mismo patrón del teclado latinoamericano para los símbolos. Al principio puede costar un poco acostumbrarse, pero después se hace fácil recordar. El conocimiento también será de mucho provecho cuando te toque usar un teclado latinoamericano.</p>
                
                <p>Aquí está la lista completa de diferencias entre el teclado estadounidense y el teclado Winchus. En la primera columna, las filas están ordenadas de acuerdo a como los caracteres aparecen en el teclado estadounidense. En la segunda columna, las teclas han sido indicadas con las etiquetas que normalmente tendrían en un teclado estadounidense.</p>
                
                <p>⚠ <b>OJO:</b> Si tu teclado físico es un teclado latinoamericano, este cuadro te resultará confuso. Mira los cuadros más arriba para teclados físicos latinoamericanos.</p>
                <table>
                    <tr>
                        <th>Carácter</th>
                        <th>Combinación<br /><span style="background-color: yellow;">(con teclas de un teclado EEUU)</span></th>
                        <th>Nota</th>
                    </tr>
                    <tr>
                        <td colspan="3"><b>Símbolos de la fila 1 del teclado estadounidense:</b></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">`</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>\</kbd> + <kbd>Spacebar</kbd> (Espacio)</td>
                        <td class="td-nota">Cambia el <kbd>Spacebar</kbd> (Espacio) por una vocal para conseguir la vocal con el acento grave</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">~</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>}</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">!</kbd></td>
                        <td></td>
                        <td class="td-nota">(Sin cambio)</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">@</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>Q</kbd></td>
                        <td class="td-nota">Recuerda usar la <kbd>Alt</kbd> derecha</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">#</kbd></td>
                        <td></td>
                        <td class="td-nota">(Sin cambio)</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">$</kbd></td>
                        <td></td>
                        <td class="td-nota">(Sin cambio)</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">%</kbd></td>
                        <td></td>
                        <td class="td-nota">(Sin cambio)</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">^</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>‘</kbd> + <kbd>Spacebar</kbd> (Espacio)</td>
                        <td class="td-nota">Recuerda usar la <kbd>Alt</kbd> derecha</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">&</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>6</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">*</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>]</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">(</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>8</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">)</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>9</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">-</kbd></td>
                        <td><kbd>/</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">_</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>/</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">=</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>0</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">+</kbd></td>
                        <td><kbd>]</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>Símbolos de la fila 2 del teclado estadounidense:</b></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">[</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>‘</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">]</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>\</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">{</kbd></td>
                        <td><kbd>‘</kbd></td>
                        <td class="td-nota">El apóstrofe, a la izquierda del <kbd>Enter</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">}</kbd></td>
                        <td><kbd>\</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">\</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>-</kbd></td>
                        <td class="td-nota">Recuerda usar la <kbd>Alt</kbd> derecha</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">|</kbd></td>
                        <td><kbd>`</kbd></td>
                        <td class="td-nota">La tecla del acento grave <kbd>`</kbd> suele estar encima del <kbd>Tab</kbd></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>Símbolos de la fila 3 del teclado estadounidense:</b></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">;</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>,</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">:</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>.</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">’</kbd></td>
                        <td><kbd>-</kbd></td>
                        <td class="td-nota">El apóstrofe </td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">”</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>2</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>Símbolos de la fila 4 del teclado estadounidense:</b></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">,</kbd></td>
                        <td></td>
                        <td class="td-nota">(Sin cambio)</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">&lt;</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>,</kbd></td>
                        <td class="td-nota">Recuerda usar la <kbd>Alt</kbd> derecha</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">.</kbd></td>
                        <td></td>
                        <td class="td-nota">(Sin cambio)</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">&gt;</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>.</kbd></td>
                        <td class="td-nota">Recuerda usar la <kbd>Alt</kbd> derecha</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">?</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>-</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">&#47;</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>7</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>Símbolos que no aparecen en el teclado estadounidense:</b></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">´</kbd></td>
                        <td><kbd>[</kbd><br />o<br /><kbd>[</kbd> + <kbd>Spacebar</kbd> (Espacio)</kbd></td>
                        <td class="td-nota">El acento agudo. Para acentuar un carácter, primero teclea <kbd>[</kbd> y después el carácter que deseas acentuar.<br /><br />Si quieres solo el acento, teclea <kbd>[</kbd> y después <kbd>Spacebar</kbd> (Espacio)</td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">¿</kbd></td>
                        <td><kbd>=</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">¡</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>=</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">°</kbd></td>
                        <td><kbd>Shift</kbd> + <kbd>`</kbd></td>
                        <td class="td-nota">La tecla del acento grave <kbd>`</kbd> suele estar encima del <kbd>Tab</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">¬</kbd></td>
                        <td><kbd>Alt</kbd> + <kbd>`</kbd></td>
                        <td class="td-nota">La tecla del acento grave <kbd>`</kbd> suele estar encima del <kbd>Tab</kbd>. Recuerda usar la <kbd>Alt</kbd> derecha.</td>
                    </tr>
                </table>
            </ul>
        </ul>
    </ul>
    <h2 id="como-instalar-android"><a href="#tabla-de-contenidos">Cómo instalar en dispositivos Android</a></h2>
    <ul class="no-bullets">
        
        <!-- <p style="text-decoration: line-through;">Para dispositivos Android, descarga la aplicación Winchus del Play Store acá (aún no disponible) y sigue las instrucciones en la aplicación.</p> -->
        <ol>
            <li>Descarga <a href="https://play.google.com/store/apps/details?id=com.tavultesoft.kmapro" target="_blank">la aplicación Keyman</a> del Play Store y abre la aplicación.</li>
            <li>Toca, “Agregar un teclado para tu idioma”</li>
            <li>Toca, “Instalar desde keyman.com”</li>
            <li>En la barra de búsqueda, escribe “Winchus” y toca en el botón azul “Search”</li>
            <li>Toca “Winchus” </li>
            <li>Toca en el botón verde que diga, “Install Keyboard”</li>
            <li>Toca la palabra “INSTALAR” que sale en la parte inferior derecha de la pantalla</li>
            <li>Después obtendrás este mismo documento. Toca el botón de PDF para descargarlo a tu celular.</li>
            <li>Toca "ACEPTAR" que sale en la parte inferior derecha de la pantalla</li>
            <li>Toca los tres puntitos verticales (︙) en la parte superior derecha</li>
            <li>Toca "Configuración"</li>
            <li>Toca "Habilitar Keyman como teclado de sistema"</li>
            <li>Toca "Keyman"</li>
            <li>Toca "Aceptar". (Keyman nunca recopila ningún dato de lo que escribes con el teclado. Es una aplicación de código abierto.)</li>
            <li>Lee la nota y toca "Aceptar"</li>
            <li>¡Empieza a escribir en cualquier aplicación!</li>
            <li>Paso recomendado: elimina el teclado inglés que viene incluido con Keyman</li>  
            <ol type="a">
                <li>Abre la aplicación Keyman</li>
                <li>Toca los tres puntitos verticales (︙) en la parte superior derecha</li>
                <li>Toca "Configuración"</li>
                <li>Toca "Idiomas instalados"</li>
                <li>Toca "English"</li>
                <li>Toca "EuroLatin (SIL) Keyboard"</li>
                <li>Toca "Desinstalar teclado"</li>
                <li>Toca "ELIMINAR"</li>
            </ol>
        </ol>
    </ul>
    <h2 id="como-instalar-apple"><a href="#tabla-de-contenidos">Cómo instalar en celulares Apple (iPhone, iPad)</a></h2>
    <ul class="no-bullets">
        <ol>
            <li>Descarga <a href="https://apps.apple.com/us/app/keyman/id933676545" target="_blank">la aplicación Keyman</a> del App Store y abre la aplicación.</li>
            <li>Toca, “Agregar un teclado para tu idioma”</li>
            <li>Toca, “Instalar desde keyman.com”</li>
            <li>En la barra de búsqueda, escribe “Winchus” y toca en el botón azul “Search”</li>
            <li>Toca “Winchus” </li>
            <li>Toca en el botón verde que diga, “Install Keyboard”</li>
            <li>Toca la palabra “INSTALAR” que sale en la parte inferior derecha de la pantalla</li>
            <li>Después obtendrás este mismo documento. Toca el botón de PDF para descargarlo a tu celular.</li>
            <li>Toca "ACEPTAR" que sale en la parte inferior derecha de la pantalla</li>
            <li>Toca los tres puntitos verticales (︙) en la parte superior derecha</li>
            <li>Toca "Configuración"</li>
            <li>Toca "Habilitar Keyman como teclado de sistema"</li>
            <li>Toca "Keyman"</li>
            <li>Toca "Aceptar". (Keyman nunca recopila ningún dato de lo que escribes con el teclado. Es una aplicación de código abierto.)</li>
            <li>Lee la nota y toca "Aceptar"</li>
            <li>¡Empieza a escribir en cualquier aplicación!</li>
            <li>Paso recomendado: elimina el teclado inglés que viene incluido con Keyman</li>  
            <ol type="a">
                <li>Abre la aplicación Keyman</li>
                <li>Toca los tres puntitos verticales (︙) en la parte superior derecha</li>
                <li>Toca "Configuración"</li>
                <li>Toca "Idiomas instalados"</li>
                <li>Toca "English"</li>
                <li>Toca "EuroLatin (SIL) Keyboard"</li>
                <li>Toca "Desinstalar teclado"</li>
                <li>Toca "ELIMINAR"</li>
            </ol>
        </ol>
    </ul>
    <h2 id="como-usar-celular"><a href="#tabla-de-contenidos">Cómo usar en el celular</a></h2>
    <ul class="no-bullets">
        <h3 id="introduccion-celulares"><a href="#tabla-de-contenidos">Introducción</a></h3>
        <ul class="no-bullets">
            <p>¡Winchus no tiene autocorrector! No va a cambiar tus palabras en Quechua por palabras en español, como hacen los otros teclados.</p> 
            
            <p>Nota que en muchas teclas hay un signo más (“+”) en el rincón superior derecho de la mayoría de las teclas. Eso indica que hay otros caracteres relacionados disponibles:</p>
            <img src="07-signo-de-mas-174.png" style="display: block; margin-left: auto; margin-right: auto;" />

        </ul>    
        <h4 id="deslizar"><a href="#tabla-de-contenidos">Método rápido: presiona y desliza</a></h4> 

            <ol>
                    <li>Para acceder a un carácter especial, pulsa la tecla e inmediatamente desliza el dedo en alguna dirección. Dependiendo de hacia dónde lo deslices, aparecerá uno de los caracteres especiales.
                    <img src="deslizar-360.gif" style="display: block; margin-left: auto; margin-right: auto;" />
                    </li>
                    <br />
            </li>
            <li>Tomemos la tecla <kbd>C</kbd> por ejemplo:</li> 
            <br />
            <table class="mapa-deslizamiento">
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><kbd class="kbd-resultado">Cꞌ</kbd></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>⬆</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
                <tr>
                <td><kbd class="kbd-resultado">Ĉ</kbd></td>
                <td>⬅</td>
                <td><kbd>C</kbd></td>
                <td>⮕</td>
                <td><kbd class="kbd-resultado">Č</kbd></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>⬇</td>
                <td>⬊</td>
                <td>&nbsp;</td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><kbd class="kbd-resultado">Ć</kbd></td>
                <td>&nbsp;</td>
                <td><kbd class="kbd-resultado">Ç</kbd></td>
                </tr>
            </table>
            <ol style="list-style-type: lower-alpha;">
                <li>Desliza hacia abajo para escribir la <kbd class="kbd-resultado">ć</kbd>. </li>
                <li>Desliza hacia la izquierda para escribir la <kbd class="kbd-resultado">ĉ</kbd>. </li>
                <li>Desliza hacia la derecha para escribir la <kbd class="kbd-resultado">č</kbd>.</li>
                <li>Desliza hacia arriba para escribir la <kbd class="kbd-resultado">c</kbd> y la glotal <kbd class="kbd-resultado">ꞌ</kbd> juntos, para que no tengas que buscar la glotal aparte (o sea, saldrá <kbd class="kbd-resultado">cꞌ</kbd>). </li>
                <li>Desliza diagonalmente hacia abajo y hacia la derecha para escribir la <kbd class="kbd-resultado">ç</kbd>.</li>
            </ol>
            <h5>Consejos:</h5>
            <ul style="list-style-type: disc;">
                <li>Para acentos (´), desliza desde la vocal hacia el centro del teclado.</li> 
                <li>Para números, desliza desde una tecla de la primera fila hacia arriba y hacia el centro de la pantalla.</li>
                <li>Para la diéresis (¨), desliza desde la vocal hacia arriba.</li>
                <li>Si la vista previa no te muestra el carácter deseado, mueve tu dedo alrededor de la tecla para explorar y descubrir cuáles están disponibles y dónde están.</li>
            </ul>

        </ol>
        
        <div style="text-align: center;">
            <h5 id="indice-deslizamiento"><a href="#tabla-de-contenidos">Mapa de caracteres alternativos en el celular</a></h5>
            <p>   
                <a href="#tecla-a"><kbd class="kbd-link">A</kbd></a>
                <a href="#tecla-c"><kbd class="kbd-link">C</kbd></a>
                <a href="#tecla-e"><kbd class="kbd-link">E</kbd></a>
                <a href="#tecla-h"><kbd class="kbd-link">H</kbd></a>
                <a href="#tecla-i"><kbd class="kbd-link">I</kbd></a>
                <a href="#tecla-k"><kbd class="kbd-link">K</kbd></a>
                <a href="#tecla-l"><kbd class="kbd-link">L</kbd></a>
                <a href="#tecla-m"><kbd class="kbd-link">M</kbd></a>
                <a href="#tecla-n"><kbd class="kbd-link">N</kbd></a><br />
                <a href="#tecla-o"><kbd class="kbd-link">O</kbd></a>
                <a href="#tecla-p"><kbd class="kbd-link">P</kbd></a>
                <a href="#tecla-q"><kbd class="kbd-link">Q</kbd></a>
                <a href="#tecla-r"><kbd class="kbd-link">R</kbd></a>
                <a href="#tecla-s"><kbd class="kbd-link">S</kbd></a>
                <a href="#tecla-t"><kbd class="kbd-link">T</kbd></a>
                <a href="#tecla-u"><kbd class="kbd-link">U</kbd></a>
                <a href="#tecla-w"><kbd class="kbd-link">W</kbd></a>
                <a href="#tecla-y"><kbd class="kbd-link">Y</kbd></a>
                <a href="#tecla-punto"><kbd class="kbd-link">.</kbd></a>
            </p>
        

                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-a"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ä</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">@</kbd></td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>⬈</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>A</kbd></td>
                    <td>⮕</td>
                    <td><kbd class="kbd-resultado">Á</kbd></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬇</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">A'</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
            
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-c"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                </tr>  
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Cꞌ</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                <td><kbd class="kbd-resultado">Ĉ</kbd></td>
                    <td>⬅</td>
                    <td><kbd>C</kbd></td>
                    <td>⮕</td>
                    <td><kbd class="kbd-resultado">Č</kbd></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬇</td>
                    <td>⬊</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ć</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ç</kbd></td>
                </tr>
                </tbody>
                </table>
            
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-e"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ë</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">3</kbd></td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>⬈</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>E</kbd></td>
                    <td>⮕</td>
                    <td><kbd class="kbd-resultado">É</kbd></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  

                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-h"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;H&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">H'</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>H</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬇</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">H́</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
        
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-i"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td><kbd class="kbd-resultado">8</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ï</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>⬉</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>I</kbd></td>
                    <td>⮕</td>
                    <td><kbd class="kbd-resultado">Í</kbd></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬇</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">I'</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
        
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-k"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;K&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">K'</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>K</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
        
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-l"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">L'</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>L</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  

                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-m"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td><kbd class="kbd-resultado">\</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">'</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">;</kbd></td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>⬉</td>
                    <td>⬆</td>
                    <td>⬈</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">¿</kbd></td>
                    <td>⬅</td>
                    <td><kbd>M</kbd></td>
                    <td>⮕</td>
                    <td><kbd class="kbd-resultado">?</kbd></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
        
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-n"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">N'</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>N</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
            
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-o"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td><kbd class="kbd-resultado">9</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ö</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>⬉</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">Ó</kbd></td>
                    <td>⬅</td>
                    <td><kbd>O</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  

                <table class="mapa-deslizamiento">
                        <thead>
                    <tr>
                        <th colspan="5"><a id="tecla-p"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                        </tr>   
                    <tr>
                        <td><kbd class="kbd-resultado">0</kbd></td>
                        <td>&nbsp;</td>
                        <td><kbd class="kbd-resultado">P'</kbd></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr></thead>
                    <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>⬉</td>
                        <td>⬆</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><kbd>P</kbd></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>  
            
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-q"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Q'</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">1</kbd></td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>⬈</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>Q</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
            
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-r"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">4</kbd></td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬈</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>R</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬇</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ŕ</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  

                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-s"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">Ŝ</kbd></td>
                    <td>⬅</td>
                    <td><kbd>S</kbd></td>
                    <td>⮕</td>
                    <td><kbd class="kbd-resultado">Š</kbd></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬇</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ś</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
    
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-t"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">T'</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">5</kbd></td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>⬈</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>T</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
        
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-u"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td><kbd class="kbd-resultado">7</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ü</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>⬉</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>U</kbd></td>
                    <td>⮕</td>
                    <td><kbd class="kbd-resultado">Ú</kbd></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬇</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">U'</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
    
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-w"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">2</kbd></td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬈</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>W</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  

                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-y"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Y&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td><kbd class="kbd-resultado">6</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Y'</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>⬉</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>Y</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  

                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-t"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">T'</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">5</kbd></td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬆</td>
                    <td>⬈</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>T</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
        
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-u"><a href="#indice-deslizamiento">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td><kbd class="kbd-resultado">7</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">Ü</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>⬉</td>
                    <td>⬆</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd>U</kbd></td>
                    <td>⮕</td>
                    <td><kbd class="kbd-resultado">Ú</kbd></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>⬇</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">U'</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
                </table>  
            
                <table class="mapa-deslizamiento">
                    <thead>
                <tr>
                    <th colspan="5"><a id="tecla-punto"><a href="#indice-deslizamiento">&nbsp;. (Punto)&nbsp;</a></th>
                    </tr>   
                <tr>
                    <td><kbd class="kbd-resultado">:</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">¡</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">'</kbd></td>
                </tr></thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>⬉</td>
                    <td>⬆</td>
                    <td>⬈</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">-</kbd></td>
                    <td>⬅</td>
                    <td><kbd>.</kbd></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>⬋</td>
                    <td>⬇</td>
                    <td>⬊</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><kbd class="kbd-resultado">,</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">!</kbd></td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">"</kbd></td>
                </tr>
                </tbody>
                </table>  
         </div>

        <h3 id="presion-larga"><a href="#tabla-de-contenidos">Método alternativo: presión larga</a></h3>
        <ul class="no-bullets">

            <p>Para acceder a un carácter especial, mantén presionada la tecla relacionada por un momento. Ahora sin soltar, desliza al carácter deseado, hasta que se ponga azul, luego, suelta.</p>
            <img src="06-presion-larga-360.png" style="display: block; margin-left: auto; margin-right: auto;" />

            <h4 id="emojis-2"><a href="#tabla-de-contenidos">Emojis</a></h4>
            <ol>
                <li>Toca la "😀" en el rincón inferior derecho para ver la capa principal de emojis:
                <img src="01-capa-emoji-donde-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                </li>
                <li>Las primeras tres filas son emojis básicos:
                    <img src="02-primeros-emojis-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                    </li>
                <li>Los de la última fila son botones que llevan a más emojis:
                    <img src="03-otros-emojis-donde-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                    </li>
                <li>Toca la "😀" en el mismo rincón para volver a la capa de emojis principal:
                    <img src="04-volver-capa-emojis-principal-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                    </li>
                <li>O, toca 'abc' para volver a las letras:
                    <img src="05-volver-al-teclado-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
                    </li>
            </ol>
        </ul>
        
        <h3 id="como-cambiar-teclado"><a href="#tabla-de-contenidos">Como cambiar el teclado</a></h3>
        <p>Para usar un autocorrector para escribir en otro idioma como el español o inglés, cambia a otro teclado. (Por ejemplo, al de fábrica o a Gboard). Para cambiar el teclado presiona uno de los botones indicados:</p>
        <img src="08-cambiar-teclado-360.png" style="display: block; margin-left: auto; margin-right: auto;" />

    </ul>  
    <h2 id="informacion-contacto"><a href="#tabla-de-contenidos">Información de contacto</a></h2>
    <ul class="no-bullets">
        <p>Para problemas, preguntas, comentarios, y sugerencias, escribe a <a href="mailto:alex_larkin@sil.org">alex_larkin@sil.org</a>. WhatsApp: <a href="https://wa.me/51938405223">+51.938.405.223</a>. Por favor menciona en cuál idioma Quechua estás escribiendo e incluye ejemplos, si es relevante.</p>
    </ul>
        <div style="text-align: center;">
            <p>¡Yulsulpallä! Muchas gracias.</p>
        <br />
    <h6><i>Documento actualizado 19 febrero 2025</i></h6><br />
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />