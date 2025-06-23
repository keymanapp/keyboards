<!--INSTANCIADEVERSIÓN#01 -->
<!--ACTUALIZAR NÚMERO DE VERSIÓN ABAJO CON CADA REVISIÓN-->
<!--BUSCA "INSTANCIADEVERSIÓN#" -->

<?php
  $pagename = 'Quechua: Ayuda para el teclado Winchus';
  $pagetitle = 'Winchus - Ayuda';
  $pagestyle = <<<END
  
         @import url('kb.css');
END;
  require_once('header.php');
?>

<!-- PEGAR DESDE welcome.htm -->
<!-- INICIO_SECCIÓN#01 -->
<!-- #region SECCIÓN#01 -->
<br /> 
    <h1>Winchus</h1><br />
    <div style="text-align: center;">
        <p><i>Escribe en cualquier idioma Quechua<br />
            con la agilidad de un colibrí.</i></p>
        <p><br/></p>
        <!--INSTANCIADEVERSIÓN#02-->
        <p>Versión 1.4</p>
    

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

    <a href="winchus.pdf" style="text-decoration: none;">
        <div style="border: 1px solid black; padding: 10px; display: inline-block; text-align: center; background-color: #f2f2f2;">
            <b>Descarga este documento<br />para leerlo sin conexión</b>
            <img src="file-type-pdf-47.png" style="display: block; margin-left: auto; margin-right: auto; padding-top: 10px;" />
        </div>
    </a>
    </div>

    <a id="tabla-de-contenidos">&nbsp;</a> <!-- Esta ancla esta aparte porque en algunos lados la tabla de contenidos está borrada. Mas, los enlaces abajo quedarán. Así no se desaparecerá la ancla.-->
    
    <!-- es: Estoy dejando esta tabla de contenidos en el documento PHP por que por el momento en la vista móvil no aparece el menú automático del lado derecho. Así que es vital que los usuarios en móvil tengan esta tabla de contenidos.-->
    <!-- en: I'm leaving this table of contents in the PHP document because at the moment the automatic menu on the right side doesn't appear in the mobile view. So it's vital that mobile users have this table of contents.-->
    <h3>Tabla de contenidos</h3>
    <ul>
        
        <li class="seccion-principal"><a href="#guia-rapida-celular">Guía rápida para usar con celular</a></li>
        <ul>
            <li><a href="#caracteres-adicionales">Caracteres adicionales</a></li>
            <ul>
                <li><a href="#metodo-rapido">Método rápido: presiona y desliza</a></li>
                <li><a href="#metodo-alternativo">Método alternativo: presión larga</a></li>
            </ul>
            <li><a href="#emojis">Emojis</a></li>
        </ul>
        <li class="seccion-principal"><a href="#guia-rapida-teclado-fisico">Guía rápida para usar con un teclado físico (Computadoras y laptops)</a></li>
        <li class="seccion-principal"><a href="#introduccion">Introducción al teclado Winchus</a></li>
            <li class="seccion-principal"><a href="#nuevos-caracteres">Nuevos caracteres</a></li>
            <ul>
                <li><a href="#consonantes">Consonantes</a></li>
                <li><a href="#puntuacion">Puntuación- comillas</a></li>
            </ul>
        <li class="seccion-principal"><a href="#teclado-fisico">Teclado físico (Computadoras y laptops)</a></li>
        <ul>
            <li><a href="#introduccion-teclado-fisico">Introducción a Winchus en los teclados físicos</a></li>
            <li><a href="#como-instalar">Cómo Instalar en tu computadora o laptop</a></li>
            <li><a href="#configuracion-teclado">Configuración del teclado</a></li>
            <li><a href="#consonantes-teclado">Cómo teclear los consonantes</a></li>
            <ul>
                <li><a href="#acentos">Acentos</a></li>
                <li><a href="#circunflejos">Circunflejos</a></li>
                <li><a href="#carones">Carones</a></li>
                <li><a href="#saltillos">Saltillos (glotales)</a></li>
            </ul>
            <li><a href="#vocales">Cómo teclear los vocales</a></li>
            <li><a href="#simbolos">Cómo teclear los símbolos y la puntuación</a></li>
            <li><a href="#ayuda-teclado-eeuu">Ayuda si tienes un teclado físico de los Estados Unidos</a></li>
            </ul>


    
        <li class="seccion-principal"><a href="#como-instalar-android">Cómo instalar en dispositivos Android</a></li>
        <li class="seccion-principal"><a href="#como-instalar-apple">Cómo instalar en dispositivos Apple (iPhone, iPad)</a></li>
        <li class="seccion-principal"><a href="#como-usar-celular">Cómo usar en el celular</a></li>
        <ul>
            <li><a href="#introduccion-celulares">Introducción a Winchus en los celulares</a></li>
            <li><a href="#deslizar">Método rápido: presiona y desliza</a></li>
            <ul>
                <li><a href="#indice-deslizamiento">Mapa de caracteres alternativos en el celular</a></li>
            </ul>
            <li><a href="#presion-larga">Método alternativo: presión larga</a></li>
            <li><a href="#emojis-2">Emojis</a></li>
            <li><a href="#como-cambiar-teclado">Como cambiar el teclado</a></li>
        </ul>
        <li class="seccion-principal"><a href="#solucionar-problemas">Solucionar Problemas</a></li>
        <ul>
            <li><a href="#problemas-celular">Problemas en el dispositivo móvil</a></li>
            <li><a href="#problemas-computadora">Problemas en la computadora</a></li>
        </ul>
        <li class="seccion-principal"><a href="#informacion-contacto">Información de contacto</a></li>
    </ul>

    <h2 id="guia-rapida-celular"><a href="#tabla-de-contenidos">Guía rápida para usar con celular</a></h2>
    <ul class="no-bullets">
        <h3 id="caracteres-adicionales"><a href="#tabla-de-contenidos">Caracteres adicionales</a></h3>
        <ul class="no-bullets">
            <h4 id="metodo-rapido"><a href="#tabla-de-contenidos">Método rápido: presiona y desliza</a></h4>
            <ul class="no-bullets">
                <p>Para acceder a un carácter especial, pulsa la tecla e inmediatamente desliza el dedo en una dirección. Dependiendo de hacia dónde lo deslices, aparecerá escrito uno de los caracteres especiales.</p>
                    <p>Este GIF animado muestra la función con la tecla <kbd>C</kbd>:</p>
                    <!--ASÍ LOS QUIENES ESTÁN VIENDO EN PDF PODRÁN VER EL GIF-->
                    <!--INSTANCIADEVERSIÓN#03-->
                    <a href="https://help.keyman.com/keyboard/winchus/1.4/winchus#deslizar-gif-1"><img src="deslizar-360.gif" style="display: block; margin-left: auto; margin-right: auto;" id="deslizar-gif-1"/></a>
                    <br />
                    <p>Desliza para abajo para conseguir la <kbd class="kbd-resultado">Ć</kbd>:</p>
                    <img src="deslizar-360-1era-imagen.png" style="display: block; margin-left: auto; margin-right: auto;" />
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
                        <td><kbd>´</kbd> + <kbd>'</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>'</kbd></td>
                    </tr>
                </tbody>
            </table>
            <table class="sin-saltos">
                <thead>
                    <tr>
                        <th>Puntuación </th>
                        <th>Abertura</th>
                        <th>Cierre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><kbd class="kbd-resultado">«</kbd> <kbd class="kbd-resultado">»</kbd></td>
                        <td><kbd>&lt;</kbd> + <kbd>&lt;</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>&gt;</kbd> + <kbd>Mayús</kbd> + <kbd>&gt;</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">‹</kbd> <kbd class="kbd-resultado">›</kbd></td>
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
                    <tr>
                        <td><kbd class="kbd-resultado">“</kbd> <kbd class="kbd-resultado">”</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>2</kbd> + <kbd>Mayús</kbd> + <kbd>2</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>2</kbd> + <kbd>Mayús</kbd> + <kbd>2</kbd> + <kbd>Mayús</kbd> + <kbd>2</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">‘</kbd> <kbd class="kbd-resultado">’</kbd></td>
                        <td><kbd>'</kbd> + <kbd>'</kbd></td>
                        <td><kbd>'</kbd> + <kbd>'</kbd> + <kbd>'</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">—</kbd><br />(Guion largo)</td>
                        <td colspan="2"><kbd>-</kbd> + <kbd>.</kbd></td>
                    </tr>
                </tbody>
            </table>
        </ul>
            
    <h2 id="introduccion"><a href="#tabla-de-contenidos">Introducción al teclado Winchus</a></h2>
    <ul class="no-bullets">
        <p>En todo el mundo hay más de 1.5 mil millones de personas que hablan un idioma minoritario. Para muchos de ellos usar su idioma en los sectores digitales resulta un gran reto. Caracteres no disponibles. Un autocorrector determinado a “corregir” cada palabra indígena por una palabra de otro idioma mayoritario. Para muchas personas, este reto es muy abrumador e influye en que su idioma se use menos, privando así al hablante de su derecho a expresarse completamente, y quitando oportunidades para que el mundo conozca su belleza.</p>

        <p>En el mundo hay más de siete millones de Quechuahablantes (Ethnologue). A pesar de que los sistemas de escritura en esta familia de idiomas sean parecidos al sistema español, muchos tienen consonantes adicionales. Por ende hasta ahora los recursos disponibles para teclear en Quechua han sido muy técnicos y difíciles de usar.</p>
        
        <p>La meta de este teclado es simplificar la digitación del Quechua en todos los dispositivos. (Gracias a la plataforma Keyman, ahora el desarrollador sólo tiene que configurarlo una vez y mantener una sola versión sin necesitar un gran equipo de programadores para adaptarlo y readaptarlo a cada sistema operativo).</p>

        <p>Este teclado fue diseñado usando como base el Teclado Latinoamericano. También se puede usar en teclados físicos para escribir en español e inglés, minimizando la necesidad de cambiar la configuración de teclado. Todos los caracteres disponibles en los teclados latinoamericanos y estadounidenses están disponibles en el teclado Winchus, aunque algunos símbolos han sido movidos, o las combinaciones de teclas han sido cambiadas debido a las diferencias entre los dos teclados y las necesidades del teclado Quechua.</p>
        
        <p>Este documento explica cómo usar el teclado cuando se usa en un dispositivo móvil (como un celular) y en un dispositivo físico (como una laptop).</p>
        
        <p>Primero en esta introducción se indicará cuáles son los nuevos caracteres disponibles. En las secciones siguientes se explicará primero cómo instalar el teclado, y después cómo usarlo en los dispositivos correspondientes.</p>
    </ul>

    <h2 id="nuevos-caracteres"><a href="#tabla-de-contenidos">Nuevos caracteres</a></h2>
    <ul class="no-bullets">
         <h3 id="consonantes"><a href="#tabla-de-contenidos">Consonantes</a></h3>
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
            
            <table class="sin-saltos">
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

    
        <h3 id="puntuacion"><a href="#tabla-de-contenidos">Puntuación- comillas</a></h3>
            <ul class="no-bullets">
                <table class="sin-saltos">
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
                    <tr>
                        <td>Comillas inglesas</td>
                        <td>“</td>
                        <td>”</td>
                    </tr>
                    <tr>
                        <td>Comillas simples</td>
                        <td>‘</td>
                        <td>’</td>
                    </tr>
                    <tr>
                        <td>Guion largo</td>
                        <td colspan="2">—</td>
                    </tr>
                </table>
            </ul>
    </ul>

    <h2 id="teclado-fisico"><a href="#tabla-de-contenidos">Teclado físico (Computadoras y laptops)</a></h2>
    <ul class="no-bullets">
        <h3 id="introduccion-teclado-fisico"><a href="#tabla-de-contenidos">Introducción a Winchus en los teclados físicos</a></h3>
        <ul class="no-bullets">
            <p>Siempre que sale <kbd>Alt</kbd>, recuerda que habla de la <kbd>Alt</kbd> Derecha (o <kbd>Alt Gr</kbd>) que está a la derecha de la barra de espacio. Igual como en el teclado latinoamericano, la <kbd>Alt</kbd> que está a la izquierda no tendrá el efecto deseado.</p>
            
            <p>Siempre que veas un gráfico como <kbd>Alt</kbd>, <kbd>.</kbd>, o <kbd>U</kbd>, este hace referencia a una tecla en tu teclado. Cuando veas un carácter como <kbd class="kbd-resultado">Ć</kbd>, hace referencia al carácter resultado, que aparece en la pantalla.</p>
        </ul>

        <h3 id="como-instalar"><a href="#tabla-de-contenidos">Cómo instalar en tu computadora o laptop</a></h3>
        <!-- Actualiza para aprovechar de la instalación directa de https://keyman.com/keyboards/install/winchus-->
        <ul class="no-bullets">
             <ol>
                <li><a href="https://keyman.com/keyboards/winchus" target="_blank">Visita esta página</a></li>
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
<!-- #endregion -->
<!-- PEGAR DESDE welcome.htm -->
<!-- FIN_SECCIÓN#01 -->

                    <!-- es: No estamos usando <div id='osk' data-states='default'></div> debido a dificultades con la localización -->
                    <!-- en: We're not using <div id='osk' data-states='default'></div> due to localization difficulties -->
                    <h4>Minúscula:</h4>
                    <img src="teclado_winchus_min_tran.png" style="display: block; margin-left: auto; margin-right: auto; max-width: 100%; height: auto;" />
                    
                    <br />
                    <h4>Mayúscula:</h4>
                    <img src="teclado_winchus_may_tran.png" style="display: block; margin-left: auto; margin-right: auto; max-width: 100%; height: auto;" />

                    <br />
                    <h4>Alt Derecha:</h4>
                    <img src="teclado_winchus_alt_tran.png" style="display: block; margin-left: auto; margin-right: auto; max-width: 100%; height: auto;" />

            </div>
            </ul>       
<!-- PEGAR DESDE welcome.htm -->
<!-- #region SECCIÓN#02 -->
<h3 id="consonantes-teclado"><a href="#tabla-de-contenidos">Cómo teclear los consonantes</a></h3>
        <ul class="no-bullets">
            <h4 id="acentos"><a href="#tabla-de-contenidos">Acentos</a></h4>
            <ul class="no-bullets">
        
                <p>Para escribir los acentos, usa la misma tecla que es para poner acentos en las vocales: la <kbd>´</kbd>, que suele estar a la derecha de la <kbd>P</kbd>.</p>
                <table class="sin-saltos">
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
                        <td><kbd class="kbd-resultado">h́</kbd> <kbd class="kbd-resultado">H́</kbd></td>
                        <td><kbd>´</kbd> + <kbd>H</kbd></td>
                        <td><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>H</kbd></td>
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
                <table class="sin-saltos">
                    <thead>
                        <tr>
                            <th>Caracteres</th>
                            <th>Minúscula</th>
                            <th>Mayúscula</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </ul>
            <h4 id="carones"><a href="#tabla-de-contenidos">Carones</a></h4>
            <ul class="no-bullets">
            <p>Siempre que salga <kbd>Mayús</kbd> dos o tres veces en un atajo, simplemente mantén presionada la tecla <kbd>Mayús</kbd> mientras tecleas las otras dos teclas una por una.</p>
                <table class="sin-saltos">
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
                <table class="sin-saltos">
                    <thead>
                        <tr>
                            <th>Carácter</th>
                            <th>Minúscula</th>
                            <th>Mayúscula</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><kbd class="kbd-resultado">ꞌ</kbd> <kbd class="kbd-resultado">Ꞌ</kbd></td>
                            <td><kbd>´</kbd> + <kbd>'</kbd></td>
                            <td><kbd>´</kbd> + <kbd>Mayús</kbd> +  <kbd>'</kbd></td>
                        </tr>
                    </tbody>
                </table>
                
                <p>En otras palabras, para teclear el saltillo (glotal) minúscula, teclea la tecla de acento (a la derecha de la <kbd>P</kbd>) y después la tecla de comilla (a la derecha de la <kbd>0</kbd>). 
                Para el saltillo mayúscula, teclea la tecla de acento, presiona <kbd>Mayús</kbd>, y mantenla presionada mientras tecleas la tecla de comilla.</p>
            </ul>
        </ul>    
        <h3 id="vocales"><a href="#tabla-de-contenidos">Cómo teclear los vocales</a></h3>
        <ul class="no-bullets">
            <p>Para escribir las vocales con acentos o con umlauts (¨), es igual que en el teclado latinoamericano. Por ejemplo:</p>
                <ul style="list-style-type: disc;">
                    <li><kbd>´</kbd> + <kbd>U</kbd> = <kbd class="kbd-resultado">ú</kbd></li>
                    <li><kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>U</kbd> = <kbd class="kbd-resultado">Ú</kbd></li>
                    <li><kbd>Mayús</kbd> + <kbd>´</kbd> + <kbd>U</kbd> = <kbd class="kbd-resultado">ü</kbd></li>
                    <li><kbd>Mayús</kbd> + <kbd>´</kbd> + <kbd>Mayús</kbd> + <kbd>U</kbd> = <kbd class="kbd-resultado">Ü</kbd>.</li>
                </ul>
        </ul>
        <h3 id="simbolos"><a href="#tabla-de-contenidos">Cómo teclear los símbolos y la puntuación</a></h3>
        <ul class="no-bullets">

            <p>Si tienes un teclado Latinoamericano, teclear las comillas angulares será un poco más fácil. Teclea la <kbd>&lt</kbd> dos veces seguidas para conseguir <kbd class="kbd-resultado">«</kbd>. Teclea la <kbd>&lt</kbd> una vez más para conseguir la <kbd class="kbd-resultado">‹</kbd>. Lo mismo aplica para la comilla de cierre.</p>
            <p>Si tu teclado es estadounidense, usa los atajos siguientes:</p>
            <table class="sin-saltos">
                <thead>
                    <tr>
                        <th>Carácter</th>
                        <th>Combinación<br />de teclado<br />estadounidense</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
   
            <p>Algunos caracteres que pueden ser difíciles de encontrar:</p>
            <table>
                <thead>
                    <tr>
                        <th>Carácter</th>
                        <th>Combinación</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
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
                    <tr>
                        <td><kbd class="kbd-resultado">“</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>2</kbd> + <kbd>Mayús</kbd> + <kbd>2</kbd></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">”</kbd></td>
                        <td><kbd>Mayús</kbd> + <kbd>2</kbd> + <kbd>Mayús</kbd> + <kbd>2</kbd> + <kbd>Mayús</kbd> + <kbd>2</kbd</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">‘</kbd></td>
                        <td><kbd>'</kbd> + <kbd>'</kbd></td>
                        <td class="td-nota">La <kbd>'</kbd> suele estar a la derecha de la <kbd>0</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">’</kbd></td>
                        <td><kbd>'</kbd> + <kbd>'</kbd> + <kbd>'</kbd></td>
                        <td class="td-nota">La <kbd>'</kbd> suele estar a la derecha de la <kbd>0</kbd></td>
                    </tr>
                    <tr>
                        <td><kbd class="kbd-resultado">—</kbd></td>
                        <td><kbd>-</kbd> + <kbd>.</kbd></td>
                        <td class="td-nota"></td>
                    </tr>
                </tbody>
            </table>
            

            <h3 id="ayuda-teclado-eeuu"><a href="#tabla-de-contenidos">Ayuda si tienes un teclado físico de los Estados Unidos</a></h3>
            <ul class="no-bullets">
                <p>Si hasta ahora solo has usado el teclado estadounidense, verás que este teclado tiene muchas diferencias en cuanto a como digitar los símbolos y signos de puntuación.</p>
                
                <p>El teclado Winchus, por lo general, sigue el mismo patrón del teclado latinoamericano para los símbolos. Al principio puede costar un poco acostumbrarse, pero después se hace fácil recordar. El conocimiento también será de mucho provecho cuando te toque usar un teclado latinoamericano.</p>
                
                <p>Aquí está la lista completa de diferencias entre el teclado estadounidense y el teclado Winchus. En la primera columna, las filas están ordenadas de acuerdo a como los caracteres aparecen en el teclado estadounidense. En la segunda columna, las teclas han sido indicadas con las etiquetas que normalmente tendrían en un teclado estadounidense.</p>
                
                <p>⚠ <b>OJO:</b> Si tu teclado físico es un teclado latinoamericano, este cuadro te resultará confuso. Mira los cuadros más arriba para teclados físicos latinoamericanos.</p>
                <table>
                    <thead>
                        <tr>
                            <th>Carácter</th>
                            <th>Combinación<br /><span style="background-color: yellow;">(con teclas de un teclado EEUU)</span></th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
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
                            <td><kbd class="kbd-resultado">'</kbd></td>
                            <td><kbd>-</kbd></td>
                            <td class="td-nota"></td>
                        </tr>
                        <tr>
                            <td><kbd class="kbd-resultado">"</kbd></td>
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
                        <tr>
                            <td><kbd class="kbd-resultado">“</kbd></td>
                            <td><kbd>Shift</kbd> + <kbd>2</kbd> + <kbd>2</kbd></td>
                            <td class="td-nota"></td>
                        </tr>
                        <tr>
                            <td><kbd class="kbd-resultado">”</kbd></td>
                            <td><kbd>Shift</kbd> + <kbd>2</kbd> + <kbd>2</kbd> + <kbd>2</kbd></td>
                            <td class="td-nota"></td>
                        </tr>
                        <tr>
                            <td><kbd class="kbd-resultado">‘</kbd></td>
                            <td><kbd>-</kbd> + <kbd>-</kbd></td>
                            <td class="td-nota"></td>
                        </tr>
                        <tr>
                            <td><kbd class="kbd-resultado">’</kbd></td>
                            <td><kbd>-</kbd> + <kbd>-</kbd> + <kbd>-</kbd></td>
                            <td class="td-nota"></td>
                        </tr>
                        <tr>
                            <td><kbd class="kbd-resultado">—</kbd></td>
                            <td><kbd>/</kbd> + <kbd>.</kbd></td>
                            <td class="td-nota"></td>
                        </tr>
                    </tbody>
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
            <li>Si aparece la opción de "Botón del teclado en la barra de navegación", asegúrate de que esté activada.</li>
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
    <h2 id="como-instalar-apple"><a href="#tabla-de-contenidos">Cómo instalar en dispositivos Apple (iPhone, iPad)</a></h2>
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
            <li>Toca "ACEPTAR" que sale en la parte inferior derecha de la pantalla</li>asegúrate
            <li>Toca los tres puntitos verticales (︙) en la parte superior derecha</li>
            <li>Toca "Configuración"</li>
            <li>Toca "Habilitar Keyman como teclado de sistema"</li>
            <li>Toca "Keyman"</li>
            <li>Toca "Aceptar". (Keyman nunca recopila ningún dato de lo que escribes con el teclado. Es una aplicación de código abierto.)</li>
            <li>Lee la nota y toca "Aceptar"</li>
            <li>Si aparece la opción de "Botón del teclado en la barra de navegación",  de que esté activada.</li>
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
        <h3 id="introduccion-celulares"><a href="#tabla-de-contenidos">Introducción a Winchus en los celulares</a></h3>
        <ul class="no-bullets">
            <p>¡Winchus no tiene autocorrector! No va a cambiar tus palabras en Quechua por palabras en español, como hacen los otros teclados.</p> 
            
            <p>Nota que en muchas teclas hay un signo más (“+”) en el rincón superior derecho. Eso indica que hay otros caracteres relacionados disponibles:</p>
            <img src="07-signo-de-mas-174.png" style="display: block; margin-left: auto; margin-right: auto;" />

        </ul>    
        <h3 id="deslizar"><a href="#tabla-de-contenidos">Método rápido: presiona y desliza</a></h3>

            <ol>
                    <li>Para acceder a un carácter especial, pulsa la tecla e inmediatamente desliza el dedo en alguna dirección. Dependiendo de hacia dónde lo deslices, aparecerá uno de los caracteres especiales.
                        <p>Este GIF animado muestra la función con la tecla <kbd>C</kbd>:</p>
                        <!--ASÍ LOS QUIENES ESTÁN VIENDO EN PDF PODRÁN VER EL GIF-->
                        <!--INSTANCIADEVERSIÓN#04-->
                        <a href="https://help.keyman.com/keyboard/winchus/1.4/winchus#deslizar-gif-2"><img src="deslizar-360.gif" style="display: block; margin-left: auto; margin-right: auto;"  id="deslizar-gif-2"/></a>
                        <br />
                        <p>Desliza para abajo para conseguir la <kbd class="kbd-resultado">Ć</kbd>:</p>
                        <img src="deslizar-360-1era-imagen.png" style="display: block; margin-left: auto; margin-right: auto;" />
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
        <h4 id="indice-deslizamiento"><a href="#tabla-de-contenidos">Mapa de caracteres alternativos en el celular</a></h4>
        <ul class="no-bullets">
        <div style="text-align: center;">
            <p>   
                <a href="#tecla-a"><kbd class="kbd-link">A</kbd></a>
                <a href="#tecla-c"><kbd class="kbd-link">C</kbd></a>
                <a href="#tecla-e"><kbd class="kbd-link">E</kbd></a>
                <a href="#tecla-h"><kbd class="kbd-link">H</kbd></a>
                <a href="#tecla-i"><kbd class="kbd-link">I</kbd></a>
                <a href="#tecla-k"><kbd class="kbd-link">K</kbd></a><br />
                <a href="#tecla-l"><kbd class="kbd-link">L</kbd></a>
                <a href="#tecla-m"><kbd class="kbd-link">M</kbd></a>
                <a href="#tecla-n"><kbd class="kbd-link">N</kbd></a>
                <a href="#tecla-o"><kbd class="kbd-link">O</kbd></a>
                <a href="#tecla-p"><kbd class="kbd-link">P</kbd></a>
                <a href="#tecla-q"><kbd class="kbd-link">Q</kbd></a>
                <a href="#tecla-r"><kbd class="kbd-link">R</kbd></a><br />
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
                    <td>⬇</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><kbd class="kbd-resultado">—</kbd></td>
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
        </ul>
   
        <h3 id="presion-larga"><a href="#tabla-de-contenidos">Método alternativo: presión larga</a></h3>
        <ul class="no-bullets">

            <p>Para acceder a un carácter especial, mantén presionada la tecla relacionada por un momento. Ahora sin soltar, desliza al carácter deseado, hasta que se ponga azul, luego, suelta.</p>
            <img src="06-presion-larga-360.png" style="display: block; margin-left: auto; margin-right: auto;" />
        </ul>
            <h3 id="emojis-2"><a href="#tabla-de-contenidos">Emojis</a></h3>
            <ul class="no-bullets">
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
        <ul class="no-bullets">
        <p>Para usar un autocorrector para escribir en otro idioma como el español o inglés, cambia a otro teclado. (Por ejemplo, al de fábrica o a Gboard). Para cambiar el teclado presiona uno de los botones indicados:</p>
        <img src="08-cambiar-teclado-360.png" style="display: block; margin-left: auto; margin-right: auto;" />

        <p>Si no tienes el botón para cambiar el teclado, haz lo siguiente:</p>
        <ol>
            <li>Vuelve a la página anterior </li>
            <li>Haz clic en “CONFIGURAR TECLADO”</li>
            <li>Haz clic en “HABILITAR EL TECLADO”</li>
            <li>Si aparece la opción de "Botón del teclado en la barra de navegación", asegúrate de que esté activada.</li>
        </ol>
        <p>(Nota que en algunos celulares esta opción no está disponible.)</p>
        <img src="activar-boton-teclado-360.png" style="display: block; margin-left: auto; margin-right: auto;" />            
    <br />
    </ul>

    </ul>  
    <h2 id="solucionar-problemas"><a href="#tabla-de-contenidos">Solucionar Problemas</a></h2>
    <ul class="no-bullets">
        <h3 id="problemas-celular"><a href="#tabla-de-contenidos">Problemas en el dispositivo móvil:</a></h3>
            <ul class="no-bullets">
                <table>
                    <thead>
                        <tr>
                            <th>Problema</th>
                            <th>Solución</th>
                        </tr>
                    </thead>
                    <tbody class="alinear-izquierda">
                        <tr>
                            <td>Las letras que salen no corresponden con las teclas que estoy presionando.</td>
                            <td>Se ha congelado la imagen del teclado. Intenta lo siguiente. Después de cada paso, verifica si el problema se ha resuelto.
                                <ol>
                                    <li><a href="#como-cambiar-teclado">Cambia a otro teclado</a> y regresa a Winchus</li>
                                    <li>Asegúrate de que la aplicación del teclado esté actualizada</li>
                                    <li>Reinicia el dispositivo</li>
                                    <li>Desinstala Winchus y vuelve a instalarlo</li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td>Todo el área del teclado se ha puesto toda negra o gris.</td>
                            <td>Intenta lo siguiente. Después de cada paso, verifica si el problema se ha resuelto.
                                <ol>
                                    <li>Toca el área del teclado en cualquier lado</li>
                                    <li><a href="#como-cambiar-teclado">Cambia a otro teclado</a> y regresa a Winchus</li>
                                    <li>Asegúrate de que la aplicación del teclado esté actualizada</li>
                                    <li>Reinicia el dispositivo</li>
                                    <li>Desinstala Winchus y vuelve a instalarlo</li>
                                </ol></td>
                        </tr>
                    </tbody>
                </table>
            </ul>
        <h3 id="problemas-computadora"><a href="#tabla-de-contenidos">Problemas en la computadora:</a></h3>
        <ul class="no-bullets">
            <table>
                <thead>
                    <tr>
                        <th>Problema</th>
                        <th>Solución</th>
                    </tr>
                </thead>
                <tbody class="alinear-izquierda">
                    <tr>
                        <td>Los atajos especiales no funcionan. (O sea, el teclado está funcionando como si fuera un teclado latinoamericano.)</td>
                        <td>Asegúrate de que el teclado Winchus esté seleccionado, mirando el rincón inferior derecho. Debe salir la letra <b>W</b> con el fondo verde. De no ser así, usa el atajo <kbd><img src="windows-30.png" alt="Tecla Windows" style="display: inline; vertical-align: middle; width: 50%; padding: 20%;" /></kbd> + <kbd>Espacio</kbd>. Verás la lista de teclados en la parte inferior derecha de tu pantalla.</li></td>
                    </tr>
                    <tr>
                        <td>Cuando quiero escribir símbolos o puntuación, salen otros no esperados. Por ejemplo, la <kbd class="kbd-resultado">;</kbd> sale cuando esperaba la <kbd class="kbd-resultado">ñ</kbd>, y la <kbd class="kbd-resultado">]c</kbd> sale cuando esperaba la <kbd class="kbd-resultado">ć</kbd>. (O sea, el teclado está funcionando como si fuera un teclado estadounidense.)</td>
                        <td>Aunque veas Winchus seleccionado en el rincón de la pantalla, Keyman no se ha ejecutado por completo. Haz clic en la app "Keyman" en el menú de inicio o en el escritorio. No saldrá nada, pero después de un momento el teclado debe empezar a funcionar. Si tienes este problema cada vez que prendes tu computadora, es posible que la computadora necesite un poco más de tiempo para terminar de prenderse, o que haga falta cambiar la configuración para que Keyman se ejecute automáticamente cuando se arranca la computadora. Verifica lo siguiente:
                            <ol>
                                <li>Teclea <kbd>Ctrl</kbd> + <kbd>Mayús</kbd> + <kbd>Esc</kbd></li>
                                <li>Escoge la cuarta pestaña de "Inicio"</li>
                                <li>Verifica que "Keyman Configuration" tiene el estado de "Habilitado"</li>
                                <li>Abre la aplicación "Keyman Configuration" en el menú de inicio o en el escritorio. En la pestaña de Opciones, en la sección de Inicio, asegúrate de que la opción "Iniciar cuando inicie Windows" esté seleccionada.</li>
                                <li>Una vez hechos estos cambios, Keyman debe ejecutarse de forma automática la próxima vez que prendes  tu computadora</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td>No funciona en Adobe Acrobat Reader</td>
                        <td><a href="https://help.keyman.com/knowledge-base/?id=69" target="_blank">Sigue los pasos en esta página</a></td>
                    </tr>
                    <tr>
                        <td>Todavía tengo problemas.</td>
                        <td>Asegúrate de que Keyman y Winchus estén actualizados.
                            <ol>
                                <li>Abre la aplicación "Keyman Configuration" en el menú de inicio o en el escritorio. Haz clic en la pestaña de "Soporte". Luego, en el lado derecho, haz clic en "Buscar actualizaciones".</li>
                                    <!--Actualiza esto cuando salga Keyman 18!-->
                                <li>Actualiza Winchus desde la aplicación Keyman Configuration:</a></li>
                                <ol></ol>
                                    <li>Abre el programa “Keyman Configuration”</li>
                                    <li>En el rincón inferior izquierdo de la ventanilla, haz clic en el botón “Descargar teclado…”</li>
                                    <li>Busca “Winchus” y haz clic en el resultado</li>
                                    <li>Haz clic en el botón verde que diga, “Install Keyboard”</li>
                                    <li>Después de la descarga, haz clic en el Botón “Instalar” </li>
                                    <li>Después de que se haya terminado de instalar, reinicia tu computadora. (<b>¡Importante!</b>)
                                    </li>
                                </ol>
                                <li>Después, reiniciar tu computadora</li>
                            </ol>
                            
                        </td>
                    </tr>
                    </tbody>
            </table>
            <p>Sí tu problema aún no se soluciona, por favor, comunícate con nosotros a través de la información de contacto al final.</p>
        </ul>
    </ul>



    <h2 id="informacion-contacto"><a href="#tabla-de-contenidos">Información de contacto</a></h2>
    <ul class="no-bullets">
        <p>Para problemas, preguntas, comentarios, y sugerencias, escribe a <a href="mailto:alex_larkin@sil.org">alex_larkin@sil.org</a>. WhatsApp: <a href="https://wa.me/51938405223">+51.938.405.223</a>. Por favor menciona en cuál idioma Quechua estás escribiendo e incluye ejemplos, si es relevante.</p>

        <p>También puedes buscar en los foros de ayuda de Keyman y hacer tu propia pregunta si no encuentras la solución que necesitas. <a href="https://community.software.sil.org/c/keyman/19" target="_blank">Haz clic aquí</a> para entrar al foro. La mayoría de usuarios en esta página hablan inglés, así que es recomendable escribir en inglés o usar un traductor de máquina como <a href="https://www.deepl.com/en/translator" target="_blank">Deepl</a>.
    </ul>
        <div style="text-align: center;">
            <p>¡Yulsulpallä! Muchas gracias.</p>
            <br />
             <h6><i>Documento actualizado 5 mayo 2025</i></h6><br />
         </div>
<!-- #endregion -->
<!-- PEGAR DESDE welcome.htm -->
<!-- FIN_SECCIÓN#02 -->