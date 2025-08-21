<?php
  $pagename = 'Hindi Flick Keyboard Help';
  $pagetitle = $pagename;
  require_once('header.php');
?>


  <p>
    <b>
      A mobile keyboard layout designed for Hindi, utilizing a flick input method.
    </b>
  </p>
  <p>Hindi Flick is based on the clustering of syllables according to the area of the mouth used that is inherent to
    Devanagari and many other Indian scripts. There are 7 such clusters in total (8 if you count the conjuncts क्ष, त्र,
    ज्ञ as a separate cluster), with 5 having five consonants each, and 2 having four each. Thus, we get a character set
    of 33 consonants. In addition, there are 12 vowels, out of which 10 are actually part of a pair of short and long
    vowels.</p>
  <p>We utilise these two facts - that there are upto 5 related consonants per consonant cluster, as well as that there
    are 10 pairs of short and long vowels, to be able to create a keyboard that encompasses nearly 50 characters (along
    with punctuation etc.) into only 12 keys. In addition, by adding numerous rules to the parser, we are able to
    correctly preserve the phonetic order of the characters and diacritics, something especially important for syllabic
    scripts (also known as <em>abugidas</em>) like Devanagari.</p>
 
  <h2>Functionality and Usage</h2>
  
  <div id='osk-phone' data-states='default abc_noshift shift numeric'>
  </div>
  
  <p>Each <em>akshara</em> (syllable) key is equipped with the ability to produce not only the character on the key, but
    3-8 other related characters from its cluster (i.e. <em>varga</em>). This is done by flicking the key in the
    direction of the desired character. For example, flicking the क key to the right will produce ख, flicking it up will
    produce ग, and so on. The characters available on flicking are displayed on the key itself. They are ordered in
    clockwise order <strong>starting from the left</strong>. For keys with more than 4 options, the order continues
    <strong>from the top left corner of the key</strong>.</p>
  <p>Each of these options can also be accessed by holding the key for at least a second, which brings up a list of the
    available characters to choose from.</p>
  <p>Finally, you can also cycle through the characters available by tapping on the key multiple times.</p>

  <h3>Vowels (<em>Svara</em>)</h3>
  <p>Vowels and their diacritics play a central role in designating sounds to consonants in most Indian scripts.
  <p>If you notice, the only vowels available on the key are the short vowels अ, इ, उ, ए, ओ (with additional, less used
    ones like ऋ and ऑ on the corners). This is to utilise the fact that each of these vowels has a corresponding long
    vowel, and thus there is no need to clutter the key with these. Instead, we provide the key <strong>अ↔आ</strong>
    which converts short vowels to long vowels and vice versa. This also works on their matras (diacritics).</p>
  <p>For example, क + इ = कि, and pressing <strong>अ↔आ</strong> makes it की.</p>
  <p>Speaking of diacritics, all the vowels have the corresponding diacritics as their output when a consonant is found
    as the previous character (except अ, which outputs the ा diacritic, as each consonant has the अ sound by default and
    ा is probably one of the most frequently used matras). The keyboard has rules in place to dictate what should happen
    in different scenarios. A few of these include:</p>

  <ul>
    <li>If a <em>consonant</em> is found before adding a vowel, the vowel's diacritic is added. For example, क + इ = कि.
    </li>
    <li>If a <em>vowel</em> is found before adding a vowel, the whole vowel is placed, no diacritic (as it is
      nonsensical to do so). For example, इ + उ = इउ, not इु.</li>
    <li>If a <em>vowel diacritic</em> is found before adding a vowel, the whole new vowel is placed. For example, कि + उ
      = किउ.</li>
    <li>If an <em>anusvara</em> (ं), <em>chandrabindu</em> (ँ) or <em>visarga</em> (ः) is found before adding a vowel,
      the whole new vowel is placed. For example, कं + उ = कंउ.</li>
  </ul>

  <h3>Matra to Svara Key (े↔ए)</h3>
  <p>Sometimes, it is not desired to put a matra right after a consonant, but rather a full vowel. This is where the
    <strong>े↔ए</strong> key comes in. It converts the matra to a full vowel and vice versa. For example, क + े = के,
    and pressing <strong>े↔ए</strong> makes it कए.</p>
  <p>An example of a word I can imagine this would be real helpful for is कई (many), where the ई is a full vowel and not
    a matra.</p>
  <h3>Halant (्)</h3>
  <p>The halant is a special character in Devanagari that is used to remove the inherent vowel sound from a consonant.
    It is used to create conjuncts, and is also used in many other scenarios. The halant key is placed at the bottom of
    the keyboard. Similar to the 12-kana keyboard, it also contains the flick-keys for parentheses, the Devanagari
    abbreviation sign (॰), and a dash.</p>
  <h3>Bindus and nuqtas</h3>
  <p>The tenth key in the keyboard contains the bindu (ँ), chandrabindu (ं), visarga (ः), chandra (ॅ) and nuqta (़)
    characters. The keyboard automatically handles the placement of these characters when a vowel is added after them.
  </p>
  <p>A particular note for nuqtas, the order utilised (as with other parts of the keyboard) is consonant + nuqta +
    matra. Even if you add a matra first, the nuqta will be placed after the consonant. This is to ensure that the nuqta
    is always placed after the consonant, as is the norm in Devanagari.</p>
