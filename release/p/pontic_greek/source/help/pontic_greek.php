<?php 
  $pagename = 'Pontic Greek Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    table { border-collapse: collapse; width: 100%; margin: 12px 0; }
    th, td { border: 1px solid #d1d5db; padding: 8px 12px; text-align: left; }
    th { background: #f3f4f6; }
    .pontic { font-size: 1.25em; font-weight: 500; color: #1e40af; }
    .hint { color: #4b5563; font-size: 0.9em; }
    code { background: #f3f4f6; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 0.95em; }
END;
  require_once('header.php');
?>

<p>Official Pontic Greek (Ποντιακά) keyboard layout with full support for specialized diacritics (caron/hacek ˇ, breve ˘, and diaeresis below ̤). Includes the embedded <strong>Pontic Sans</strong> font for correct diacritic placement across all devices.</p>

<h2>Touch Devices (iOS / Android)</h2>
<p class="hint">Long-press (tap and hold) any key to access specialized Pontic letters:</p>

<table>
    <thead>
        <tr><th>Base Key</th><th>Variants</th><th>Description</th></tr>
    </thead>
    <tbody>
        <tr><td class="pontic">σ</td><td class="pontic">σ̌ ς ς̌</td><td>Sigma + caron, final sigma, final sigma + caron</td></tr>
        <tr><td class="pontic">ζ</td><td class="pontic">ζ̌</td><td>Zeta + caron</td></tr>
        <tr><td class="pontic">χ</td><td class="pontic">χ̌</td><td>Chi + caron</td></tr>
        <tr><td class="pontic">κ</td><td class="pontic">κ̌</td><td>Kappa + caron</td></tr>
        <tr><td class="pontic">ξ</td><td class="pontic">ξ̌</td><td>Xi + caron</td></tr>
        <tr><td class="pontic">ψ</td><td class="pontic">ψ̌</td><td>Psi + caron</td></tr>
        <tr><td class="pontic">γ</td><td class="pontic">γ̆</td><td>Gamma + breve</td></tr>
        <tr><td class="pontic">α</td><td class="pontic">ά α̤ ά̤</td><td>Tonos, diaeresis below, tonos + diaeresis below</td></tr>
        <tr><td class="pontic">ο</td><td class="pontic">ό ο̤ ό̤</td><td>Tonos, diaeresis below, tonos + diaeresis below</td></tr>
    </tbody>
</table>

<h2>Desktop (Windows / macOS / Linux)</h2>
<p class="hint">Use <code>/</code> (slash) as the Pontic dead key, followed by the letter:</p>
<table>
    <thead>
        <tr><th>Keystroke</th><th>Output</th><th>Description</th></tr>
    </thead>
    <tbody>
        <tr><td><code>/</code> + <code>ζ</code></td><td class="pontic">ζ̌</td><td>Zeta with caron</td></tr>
        <tr><td><code>/</code> + <code>σ</code></td><td class="pontic">σ̌</td><td>Sigma with caron</td></tr>
        <tr><td><code>/</code> + <code>ς</code> (w)</td><td class="pontic">ς̌</td><td>Final sigma with caron</td></tr>
        <tr><td><code>/</code> + <code>χ</code></td><td class="pontic">χ̌</td><td>Chi with caron</td></tr>
        <tr><td><code>/</code> + <code>κ</code></td><td class="pontic">κ̌</td><td>Kappa with caron</td></tr>
        <tr><td><code>/</code> + <code>ξ</code></td><td class="pontic">ξ̌</td><td>Xi with caron</td></tr>
        <tr><td><code>/</code> + <code>ψ</code></td><td class="pontic">ψ̌</td><td>Psi with caron</td></tr>
        <tr><td><code>/</code> + <code>γ</code></td><td class="pontic">γ̆</td><td>Gamma with breve</td></tr>
        <tr><td><code>/</code> + <code>α</code></td><td class="pontic">α̤</td><td>Alpha with diaeresis below</td></tr>
        <tr><td><code>/</code> + <code>ο</code></td><td class="pontic">ο̤</td><td>Omicron with diaeresis below</td></tr>
        <tr><td><code>/</code> + <code>;</code> (tonos) + <code>α</code></td><td class="pontic">ά̤</td><td>Alpha with tonos + diaeresis below</td></tr>
        <tr><td><code>/</code> + <code>;</code> (tonos) + <code>ο</code></td><td class="pontic">ό̤</td><td>Omicron with tonos + diaeresis below</td></tr>
    </tbody>
</table>

<p class="hint">© Pontic Greek Keyboard Project · Released under the MIT License</p>
