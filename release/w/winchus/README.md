# Winchus \- README.md

[(English below)](#english)

*Escriba en cualquier idioma Quechua con la agilidad de un colibrí.*

*© SIL Global*

# Propósito

Este teclado simplifica la digitación de los idiomas Quechuas en todos los dispositivos. Fue diseñado usando como base el Teclado Latinoamericano. 

También se puede usar en teclados físicos para escribir en español e inglés, minimizando la necesidad de cambiar la configuración de teclado. 

Al usar Winchus en tus dispositivos móviles no serás interrumpido por el autocorrector. No va a cambiar tus palabras en Quechua por palabras en otros idiomas, como hacen otros teclados.

Los nuevos caracteres disponibles son principalmente la Ć, Ĉ, Č, H́, Ŕ, Ś, Ŝ, Š, (tanto en minúscula como mayúscula) y las comillas angulares «, ‹, », y ›. Las comillas inglesas y simples “, ”, ‘, y ’ también están disponibles, ya que no todas las aplicaciones convierten la " y la ' de manera automática. Aunque el carácter del saltillo (glotal, Ꞌ) tradicionalmente no ha sido usado en la digitación de los idiomas Quechua, también está disponible en minúscula y mayúscula para los quienes deseen usarlo.

# Plataformas compatibles

* Computadoras Windows, macOS, y Linux  
* Celulares y tablets Android  
* Dispositivos iPhone y iPad  
* Web

# Instrucciones para desarrolladores de Winchus

**Antes de comenzar, asegúrate de tener la versión más reciente de los archivos en GitHub y Scriptoria.**

Se recomienda seguir el siguiente orden de revisión:

## Actualización del número de versión de Winchus
_(No es necesario cambiar la versión si solo se han realizado modificaciones en la documentación.)_

1. Abre Keyman Developer y carga el proyecto `winchus.kpj`
2. Abre `winchus.kmn`
3. En la pestaña vertical "Details" (izquierda), actualiza el campo "Keyboard version"
4. En la pestaña vertical "Build", haz clic en "Compile Keyboard"
5. Regresa a `winchus.kpj`
6. Ve a la pestaña "Packaging" (abajo) y abre `winchus.kps`
7. En la pestaña vertical "Details" por la izquierda, en el campo de "Description", actualiza la versión en los dos enlaces. (Usa la flecha del teclado para ir más abajo.)
8. En la pestaña vertical "Build", haz clic en "Compile Package"
9. Abre `welcome.htm` en un editor como Visual Studio Code o Notepad++
10. Busca cada instancia de "INSTANCIADEVERSIÓN#". En la próxima línea después de cada instancia verás donde actualizar la versión (a veces en un URL).
11. Guarda `welcome.htm`
12. Actualiza el número en los dos enlaces en este mismo documento, y guarda los cambios
13. Sigue las instrucciones para actualizar `winchus.php` (ver abajo)

## Actualizar `kb.css`
1. Abre `/winchus/welcome/kb.css`, edítalo y guárdalo
2. Verifica los cambios abriendo `welcome.htm` en el navegador
3. Copia el archivo en `/winchus/help/`
4. Abre `/winchus/help/kb.css`
5. Busca `/* #region sección#02 */`, y colapsa la sección en Visual Studio Code. (A la izquierda de la segunda línea haz clic en la flechita.) (Se trata de clases que no se usarán en la versión PHP.)
6. Selecciona la línea completa y un poco más hasta que el cursor apenas aparece en la próxima línea. (En realidad, no es la próxima, sino el fin de la sección.)
7. Borra esa segunda sección, y guarda el archivo

## Actualizar `welcome.htm`
1. Realiza las modificaciones necesarias y guarda los cambios
2. Crea una copia
3. Abre la copia en Word y activa el control de cambios.
4. Usa la revisión ortográfica y aplica las correcciones en **`welcome.htm` y en la copia**
5. envía el archivo a un hispanohablante para su revisión
6. Aplica las correcciones en **`welcome.htm`**, no en la copia
7. Actualiza la fecha al final del documento
8. Guarda los cambios
9. Si has modificado `kb.css`, sigue las indicaciones de la sección `Actualización de kb.css`

Es recomendable revisar periódicamente el documento completo y seguir los pasos indicados para asegurar que todo esté actualizado, especialmente tras un cambio de versión de Keyman.

## Actualizar `HISTORY.md`
Con cada cambio de versión, indica los cambios en `HISTORY.md`, siguiendo el mismo formato. Ser muy breve. 

## Actualizar `winchus.pdf`
1. Abre `welcome.htm` en Chrome
2. Imprime a PDF en formato A5 con ilustraciones de fondo y sin pies de página
3. Sube el PDF a [ilovepdf.com](https://ilovepdf.com) y usa la herramienta "[Page Numbers](https://www.ilovepdf.com/add_pdf_page_number)"
4. En el cuadrito de "Position", elige centrar el número en medio, en la parte inferior
5. Haz clic en "Add page numbers" y descarga el PDF
6. Verifica que el PDF se vea correctamente
7. Nómbralo `winchus.pdf` (todo en **minúsculas**)
8. Coloca el archivo en `/winchus/source/welcome` y `/winchus/source/help`

## Actualizar `winchus.php`
1. Abre `welcome.htm` y `winchus.php`
2. (Si ya actualizaste el número de versión en `welcome.htm`, no es necesario hacerlo aquí manualmente)
3. Busca `<!-- INICIO_SECCIÓN#01 -->` y `<!-- #region SECCIÓN#01 -->` en `welcome.htm` y `winchus.php`. En Visual Studio Code, colapsa la sección en ambos archivos. (A la izquierda de la segunda línea haz clic en la flechita para colapsar.)
4. En `welcome.htm`, selecciona toda esa línea y un poco más hasta que el cursor apenas aparece en la próxima línea. (En realidad, no es la próxima, sino el fin de la sección.)
5. Copia la selección completa y pégala en `winchus.php`
6. Repite el proceso para todas las secciones numeradas
7. Guarda los cambios

## Actualizar `LICENSE.md`
Verifica que el rango de años en línea 3 esté al día. (Debe terminar con el año actual.)

## Actualizar la aplicación Winchus en Android
1. Asegúrate de tener la última versión de Keyboard App Builder
2. Abre el proyecto en Keyboard App Builder, y en el lado izquierdo haz clic en "Keyboards"
3. Elimina el teclado Winchus de la lista
4. Haz clic en "Add Keyboard", en la parte superior derecha
5. Haz clic en "Browse..."
6. Escoge winchus.kmp y haz clic en "Open"
7. En "What text would you like to display on the keyboard space bar?", selecciona "Use this text:"
8. Escribe "Quechua - Winchus"
9. Haz clic en "OK"
10. En el lado izquierdo haz clic en "App"
11. Selecciona la pestaña "APK"
12. Aumenta la "Version Code" en uno
13. Ajusta "Version Name" a la misma versión de Keyboard App Builder. De ser necesario, aumenta el último dígito también para distinguirla de otra versión reciente. 
14. Considera si es necesario actualizar "About", en el lado izquierdo. (Ahí también está la documentación para el usuario.)
15. En el lado izquierdo haz clic en "App Store"
16. Selecciona la pestaña "Google Play Store Listing" y actualiza la descripción, los gráficos, y la sección "What's New"
17. Selecciona la pestaña "Scriptoria"
18. Haz clic en "Login..." para ingresar a la cuenta
19. Después haz clic en "Upload"
20. Seguir los pasos en Scriptoria para actualizar la aplicación en el Play Store
21. Una vez aprobada, promociona la aplicación en redes sociales

## Actualizar el repositorio Keyman
1. Accede a GitHub y actualiza tu _fork_ de [keymanapp/keyboards](https://github.com/keymanapp/keyboards)
2. Seguir los pasos [aquí](https://help.keyman.com/developer/keyboards/github/step-3)
3. Cuando hagas tu _pull request_, su nombre debe empezar con `[winchus]`

Siguiendo estos pasos, garantizas que Winchus esté siempre actualizado, funcionando correctamente, y con buena documentación.

# Más recursos

<!--INSTANCIADEVERSIÓN#-->
<!--ACTUALIZAR NÚMERO DE VERSIÓN EN ENLACE CON CADA ACTUALIZACIÓN--> [Haz clic aquí](https://help.keyman.com/keyboard/winchus/1.4/winchus) para leer la documentación completa, y para las indicaciones de cómo usar el teclado.

# Copyright

Véase [LICENSE.md](LICENSE.md) o [LICENCIA_ESPANOL_NO_OFICIAL.md](LICENCIA_ESPANOL_NO_OFICIAL.md)

# Información de contacto

Para problemas, preguntas, comentarios, y sugerencias, por favor escriba a [alex\_larkin@sil.org](mailto:alex_larkin@sil.org). WhatsApp: [+51.938.405.223](https://www.wa.me/51938405223). Menciona el idioma en que estás escribiendo e incluye ejemplos, si es relevante. 

¡Yulsulpallä\! Muchas gracias.

---
# English:

Write in any Quechua language with the agility of a hummingbird.

© SIL Global

# Purpose

This keyboard simplifies typing in Quechua languages on all devices. It was made with the Latin American keyboard as its base. 

It can also be used on physical keyboards to type in English and Spanish, minimizing the need to change the keyboard configuration. 

On mobile devices Winchus doesn’t interrupt you with “autocorrect.” It’s not going to change your Quechua words for words in other languages, like other keyboards do. 

The new characters that are available are mainly Ć, Ĉ, Č, H́, Ŕ, Ś, Ŝ, Š, (both in lowercase and uppercase), and the guillemets «, ‹, », and ›. The double and single quotes “, ”, ‘, and ’ are also available, since not all programs automatically switch out the " and the '. Even though the saltillo (glottal stop, Ꞌ) hasn’t traditionally been used for typing in Quechua languages, it is also available in lowercase and uppercase form for those that desire to use it.

# Compatible Platforms

* Windows, MacOS, and Linux computers  
* Android phones and tablets  
* iPhones and iPads  
* Web

# Instructions for Winchus Developers
See the section [Instrucciones para desarrolladores de Winchus](#instrucciones-para-desarrolladores-de-winchus), above.

# More resources

<!--INSTANCIADEVERSIÓN#-->
<!--ACTUALIZAR NÚMERO DE VERSIÓN EN ENLACE CON CADA ACTUALIZACIÓN-->[Click here](https://help.keyman.com/keyboard/winchus/1.4/winchus ) to read the full documentation, including instructions on how to use the keyboard. Note that it is only in Spanish, so you may want to use a machine translator like Deepl or Google Translate. 

# Copyright

See [LICENSE.md](LICENSE.md).

# Contact Information

For problems, questions, comments, and suggestions, please write to [alex\_larkin@sil.org](mailto:alex_larkin@sil.org). WhatsApp: [+51.938.405.223](https://wa.me/51938405223). Mention the name of the language in which you are writing and include examples, if relevant. 

¡Yulsulpallä\! Thanks so much.

