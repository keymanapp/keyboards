<?php
  $pagename = 'Attic Greek for ABNT2 Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');

  $pagestyle = <<<END
    body { font: 10pt Arial; }
    h1 { font: bold 16pt; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 12pt; color: #4444cc; }
  END;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Start Using Attic Greek For ABNT2</title>
  <style type="text/css">
    body { font: 10pt Arial; }
    h1 { font: bold 16pt; color: #4444cc; margin-bottom: 2px }
    h2 { font: bold 12pt; color: #4444cc; }
  </style>
</head>
<body>

<h1>Welcome to the Attic Greek for ABNT2 keyboard</h1>

<p>For users of the ABNT2 Brazilian Portuguese keyboard, learning this layout will feel intuitive.</p>
<p>It combines the Greek keyboard layout with the accentuation keys of the Brazilian Portuguese ABNT2.</p>
<p>For those who know Portuguese and are already familiar with the Attic Greek alphabet and accentuation, learning to use this keyboard will require minimal effort.</p>

<hr>
<h1>How to type</h1>

<h2> • Main Accentuation Keys:</h2>

<p>The primary accent and diacritic keys are (ç), (~), (´), ([), (]) and (-):</p>

<p>
(ç): Iota subscript</br>
(~): Tilde</br>
(´): Acute and grave accents</br>
([): Rough breathing</br>
(]): Soft breathing</br>
(-): Macron</br>
</p>

<h2> • How to Type Accents:</h2>

<p>To apply accents and signs, press the accent keys before typing the vowel.</p>

<p>Note: The order of the accent keys does not matter; you can press them in any combination before typing the target letter.</p>

<p>Examples:</p>
<p>
To type ῳ, press (ç) followed by ω.<br/>
To type ῷ, press (ç), (~), and ω.<br/>
To type ᾧ, press (ç), (~), ([), and ω (and so on).<br/>
</p>

<hr>
<h1>List of accents and aspirations (using alpha as example)</h1>

<h2> • One Accent / Aspiration:</h2>
<table border="1" style="border-collapse: collapse;">
  <thead>
    <tr>
      <th>Diacritic / Accent</th>
      <th>Keys</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Acute</td>
      <td><code>´ + (letter)</code></td>
      <td style="text-align: center;">ά</td>
    </tr>
    <tr>
      <td>Grave</td>
      <td><code>` + (letter)</code></td>
      <td style="text-align: center;">ὰ</td>
    </tr>
    <tr>
      <td>Rough</td>
      <td><code>[ + (letter)</code></td>
      <td style="text-align: center;">ἁ</td>
    </tr>
    <tr>
      <td>Smooth</td>
      <td><code>] + (letter)</code></td>
      <td style="text-align: center;">ἀ</td>
    </tr>    
    <tr>
    <tr>
      <td>Tilde / circ.</td>
      <td><code>~ + (letter)</code></td>
      <td style="text-align: center;">ᾶ</td>
    </tr>
    <tr>
      <td>Macron</td>
      <td><code>- + (letter)</code></td>
      <td style="text-align: center;">ᾱ</td>
    </tr>
  </tbody>
</table>
</p>

<h2> • Accent + Aspiration:</h2>
<table border="1" style="border-collapse: collapse;">
  <thead>
    <tr>
      <th>Diacritic / Accent</th>
      <th>Keys</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Acute + Rough</td>
      <td><code>´ + [ + (letter)</code></td>
      <td style="text-align: center;">ἄ</td>
    </tr>
    <tr>
      <td>Grave + Rough</td>
      <td><code>` + [ + (letter)</code></td>
      <td style="text-align: center;">ἂ</td>
    </tr>
    <tr>
      <td>Acute + Smooth</td>
      <td><code>´ + ] + (letter)</code></td>
      <td style="text-align: center;">ἅ</td>
    </tr>
    <tr>
      <td>Grave + Smooth</td>
      <td><code>` + ] + (letter)</code></td>
      <td style="text-align: center;">ἅ</td>
    </tr>
    <tr>
    <td>Tilde + Rough</td>
      <td><code>~ + [ + (letter)</code></td>
      <td style="text-align: center;">ἆ</td>
    </tr>    
    <td>Tilde + Smooth</td>
      <td><code>~ + ] + (letter)</code></td>
      <td style="text-align: center;">ἇ</td>
    </tr>      
  </tbody>
</table>

<h2> • Iota subscribed + diacritics / accentuations</h2>
<table border="1" style="border-collapse: collapse;">
  <thead>
    <tr>
      <th>Diacritic / Accent</th>
      <th>Keys</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Iota subscribed</td>
      <td><code>ç + (letter)</code></td>
      <td style="text-align: center;">ᾳ</td>
    </tr>
    <tr>
    <tr>
      <td>Iota sub. + Acute</td>
      <td><code>ç + ´ + (letter)</code></td>
      <td style="text-align: center;">ᾴ</td>
    </tr>
    <tr>
      <td>Iota sub. + Grave</td>
      <td><code>ç + ` + (letter)</code></td>
      <td style="text-align: center;">ᾲ</td>
    </tr>
    <tr>
      <td>Iota sub. + Rough</td>
      <td style="text-align: center;"><code>ç + [ + (letter)</code></td>
      <td style="text-align: center;">ᾁ</td>
    </tr>
    <tr>
      <td>Iota sub. + Smooth</td>
      <td><code>ç + ] + (letter)</code></td>
      <td style="text-align: center;">ᾀ</td>
    </tr>
    <tr>
      <td>Iota sub. + Tilde</td>
      <td><code>ç + ~ + (letter)</code></td>
      <td style="text-align: center;">ᾷ</td> 
    </tr>
    <tr>
      <td>Iota sub. + Tilde + Rough</td>
      <td><code>ç + ~ + (letter)</code></td>
      <td style="text-align: center;">ᾇ</td> 
    </tr>
    <tr>
      <td>Iota sub. + Tilde + Smooth</td>
      <td><code>ç + ~ + (letter)</code></td>
      <td style="text-align: center;">ᾆ</td> 
    </tr>
  </tbody>
</table>

<h2> • Accent + Aspiration:</h2>
<table border="1" style="border-collapse: collapse;">
  <thead>
    <tr>
      <th>Accentuation</th>
      <th>Key</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Eisagogika [quotation mark]</td>
      <td><code>[SHIFT] + ,</code></td>
      <td style="text-align: center;">«</td>
    </tr>
    <tr>
      <td>Eisagogika [quotation mark]</td>
      <td><code>[SHIFT] + .]</code></td>
      <td style="text-align: center;">»</td>
    </tr>
    <tr>
      <td>Ano teleia [two dots]</td>
      <td><code>;</code></td>
      <td style="text-align: center;">·</td>
    </tr>
    <tr>
      <td>erotimatiko [question mark]</td>
      <td><code>/</code></td>
      <td style="text-align: center;">;</td>
    </tr>
    <tr>
    
  </tbody>
</table>

<hr>
<h1>Final notes</h1>

<p>Designed exclusively by the author. Programmed with use of artificial intelligence.</p>

</body>
</html>