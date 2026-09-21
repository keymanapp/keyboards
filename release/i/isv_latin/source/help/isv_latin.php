<?php
  $pagename = 'Medžuslovjansky (latinica) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END

.isv-table { border-collapse: collapse; margin: 0.6em 0; }
.isv-table td, .isv-table th { border: 1px solid #ccc; padding: 4px 10px; text-align: left; }
.isv-table .big { font-size: 15pt; }
.isv-warn { border: 2px solid #c33; padding: 10px 14px; border-radius: 8px; }
.isv-gloss { color: #555; font-style: italic; }
END;

  require_once('header.php');
?>

<p>
  Tipkovnica za medžuslovjansky jezyk — standardna ortografija: <b>č š ž ě</b>.<br />
  <span class='isv-gloss'>Interslavic keyboard — standard orthography: <b>č š ž ě</b>.
  The extended alphabet is deliberately not on this layout.</span>
</p>

<p class='isv-warn'>
  ⚠ <b>iOS 16+:</b> vključi <b>„Allow Full Access"</b> v
  <b>Nastrojenja → Osnovne → Tipkovnica → Tipkovnici → Keyman</b>.
  Bez togo tipkovnica v drugyh aplikacijah jest <b>prazdna</b> — bez klaviš.
  V samoj aplikaciji Keyman vse rabotaje i bez togo.<br />
  <span class='isv-gloss'>⚠ <b>iOS 16+:</b> turn on <b>"Allow Full Access"</b> in
  <b>Settings → General → Keyboard → Keyboards → Keyman</b>. Without it the system
  keyboard renders blank — no keys. Inside the Keyman app it works either way.</span>
</p>

<h2>Na telefonu · On phone and tablet</h2>

<p>
  Prěvlečeš palcem iz tipky <b>v goru</b> — litera se napiše.<br />
  <span class='isv-gloss'>Swipe up from the key — the letter is typed. Any upward
  direction works, so you do not have to aim.</span>
</p>

<table class='isv-table'>
  <tr><th>Svaip v goru · Swipe up</th><th>Rezultat · Result</th></tr>
  <tr><td class='big'>c</td><td class='big'>č</td></tr>
  <tr><td class='big'>s</td><td class='big'>š</td></tr>
  <tr><td class='big'>z</td><td class='big'>ž</td></tr>
  <tr><td class='big'>e</td><td class='big'>ě</td></tr>
</table>

<p>
  Velike litery — najprvo <b>Shift</b>, potom prěvlečeš.<br />
  <span class='isv-gloss'>For capitals — press <b>Shift</b> first, then swipe.</span>
</p>

<p>
  Drži tipku — to jest drugy sposob.<br />
  <span class='isv-gloss'>Holding the key also works, but on iOS it is less
  reliable — Keyman wants you to slide onto the popup before releasing, and the
  popup sits in a different place for every key. Swiping avoids that
  entirely.</span>
</p>

<p>
  <b>dž</b> ne imaje svoju tipku: to jest <b>d</b> + <b>ž</b>, dva udarjenja.<br />
  <span class='isv-gloss'><b>dž</b> has no key of its own — it is <b>d</b> then
  <b>ž</b>, two taps.</span>
</p>

<p>
  Znaky citovanja i tire sut pod tipkoju <b>.</b> i pod <b>-</b> v numeričnom sloju
  („ ” – —).<br />
  <span class='isv-gloss'>Quotes and dashes sit under the <b>.</b> key and under
  <b>-</b> in the number layer.</span>
</p>

<h2>Na kompjuteru · On desktop</h2>

<p>
  Iste litery sut pod <b>AltGr</b> — tako kako v našej tipkovnici za Windows.<br />
  <span class='isv-gloss'>The same letters sit under <key>Right Alt</key> (AltGr) —
  exactly as in our Windows layout. Nothing on the base or shift layers is
  changed, so the keyboard can be left on permanently.</span>
</p>

<table class='isv-table'>
  <tr><th>AltGr +</th><th>Rezultat · Result</th></tr>
  <tr><td class='big'>c</td><td class='big'>č</td></tr>
  <tr><td class='big'>s</td><td class='big'>š</td></tr>
  <tr><td class='big'>z</td><td class='big'>ž</td></tr>
  <tr><td class='big'>e</td><td class='big'>ě</td></tr>
  <tr><td class='big'>;</td><td class='big'>„ &nbsp; “</td></tr>
  <tr><td class='big'>'</td><td class='big'>’ &nbsp; ”</td></tr>
  <tr><td class='big'>-</td><td class='big'>– &nbsp; —</td></tr>
</table>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Phone Keyboard Layout</h2>
<div id='osk-phone' data-states='default shift numeric'>
</div>

<h2>Pytanja i grěšky · Questions and bugs</h2>

<p>
  <a href='https://github.com/radoslove/keyboard-interslavic'>github.com/radoslove/keyboard-interslavic</a>
</p>

<p>© Radoslove · MIT</p>
