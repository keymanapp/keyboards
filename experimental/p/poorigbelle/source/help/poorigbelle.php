<?php
  $pagename = 'poorigbelle Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
.keyman-table {
border-collapse: collapse;
width: 100%;
max-width: 600px;
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
font-size: 0.95rem;
color: black;
}

.keyman-table th,
.keyman-table td {
padding: 10px 14px;
border: 1px solid black;
text-align: left;
}

.keyman-table th {
background-color: #f6f8fa;
font-weight: 600;
}

.keyman-table tr:nth-child(even) {
background-color: #fcfcfc;
}

.keyman-table kbd {
background-color: #f3f4f6;
border: 1px solid #d1d5da;
border-radius: 4px;
padding: 2px 6px;
font-family: monospace;
font-size: 0.85em;
box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
}

.keyman-table td:last-child {
font-size: 1.1em;
font-weight: 600;
color: #0366d6;
}
END;
  require_once('header.php');
?>

<p>
    Are you tired of struggling to find the right characters for your native language? 
    <strong>poorigbellé</strong> is a custom-designed keyboard created specifically to support 
    the unique phonetic needs of African Darfurian native languages. 
</p>

<p>
    We speak from Darfur (98%) and West Sudan. Whether you are texting friends, writing emails, 
    or posting on social media, <strong>poorigbellé</strong> ensures your words are written 
    exactly as they are spoken.
</p>

<h2>Desktop Keyboard Layout</h2>
 <table class="keyman-table">
  <thead>
    <tr>
      <th>Base Character</th>
      <th>Key Combination</th>
      <th>Resulting Output</th>
    </tr>
  </thead>
  <tbody>
    <!-- Direct Diacritics / Deadkeys -->
    <tr>
      <td><em>None</em></td>
      <td><kbd>[</kbd></td>
      <td>◌́ (Combining Acute)</td>
    </tr>
    <tr>
      <td><em>None</em></td>
      <td><kbd>]</kbd></td>
      <td>◌̂ (Combining Circumflex)</td>
    </tr>
    <tr>
      <td><em>None</em></td>
      <td><kbd>Shift</kbd> + <kbd>[</kbd></td>
      <td>◌̌ (Combining Caron)</td>
    </tr>
    <tr>
      <td><em>None</em></td>
      <td><kbd>Shift</kbd> + <kbd>]</kbd></td>
      <td>◌̱ (Combining Macron Below)</td>
    </tr>

    <!-- Vowels + Acute -->
    <tr>
      <td>Vowel (<kbd>a</kbd>, <kbd>e</kbd>, <kbd>i</kbd>, <kbd>o</kbd>, <kbd>u</kbd>)</td>
      <td><kbd>[</kbd></td>
      <td>á, é, í, ó, ú (Á, É, Í, Ó, Ú)</td>
    </tr>

    <!-- Vowels + Circumflex -->
    <tr>
      <td>Vowel (<kbd>a</kbd>, <kbd>e</kbd>, <kbd>i</kbd>, <kbd>o</kbd>, <kbd>u</kbd>)</td>
      <td><kbd>]</kbd></td>
      <td>â, ê, î, ô, û (Â, Ê, Î, Ô, Û)</td>
    </tr>

    <!-- Vowels + Caron -->
    <tr>
      <td>Vowel (<kbd>a</kbd>, <kbd>e</kbd>, <kbd>i</kbd>, <kbd>o</kbd>, <kbd>u</kbd>)</td>
      <td><kbd>Shift</kbd> + <kbd>[</kbd></td>
      <td>ǎ, ě, ǐ, ǒ, ǔ (Ǎ, Ě, Ǐ, Ǒ, Ǔ)</td>
    </tr>

    <!-- Vowels with Macron Below -->
      <tr>
      <td>Vowel (<kbd>a</kbd>, <kbd>e</kbd>, <kbd>i</kbd>, <kbd>o</kbd>, <kbd>u</kbd>)</td>
      <td><kbd>Shift</kbd> + <kbd>]</kbd></td>
      <td>a̱ e̱ i̱ o̱ u̱ (A̱ E̱ I̱ O̱ U̱)</td>
    </tr>

    <!-- Vowels with Macron Below + Diacritics -->
    <tr>
      <td>Vowel (<kbd>a</kbd>, <kbd>e</kbd>, <kbd>i</kbd>, <kbd>o</kbd>, <kbd>u</kbd>)</td>
      <td><kbd>Shift</kbd> + <kbd>]</kbd> then <kbd>[</kbd></td>
      <td>á̱, é̱, í̱, ó̱, ú̱ (Á̱, É̱, Í̱, Ó̱, Ú̱)</td>
    </tr>
    <tr>
      <td>Vowel (<kbd>a</kbd>, <kbd>e</kbd>, <kbd>i</kbd>, <kbd>o</kbd>, <kbd>u</kbd>)</td>
      <td><kbd>Shift</kbd> + <kbd>]</kbd> then <kbd>]</kbd></td>
      <td>â̱, ê̱, î̱, ô̱, û̱ (Â̱, Ê̱, Î̱, Ô̱, Û̱)</td>
    </tr>
    <tr>
      <td>Vowel (<kbd>a</kbd>, <kbd>e</kbd>, <kbd>i</kbd>, <kbd>o</kbd>, <kbd>u</kbd>)</td>
      <td><kbd>Shift</kbd> + <kbd>]</kbd> then <kbd>Shift</kbd> + <kbd>[</kbd></td>
      <td>ǎ̱, ě̱, ǐ̱, ǒ̱, ǔ̱ (Ǎ̱, Ě̱, Ǐ̱, Ǒ̱, Ǔ̱)</td>
    </tr>
  </tbody>
</table>
<div id='osk' data-states='default shift'>
</div>

<h2>Mobile/Phone Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-phone' data-states='default shift numeric'>
</div>

