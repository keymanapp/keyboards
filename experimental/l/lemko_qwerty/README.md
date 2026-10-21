# Rusyn (Lemko, Poland) keyboard

A phonetic Cyrillic keyboard for Lemko. Additional mappings include і on Option/AltGr+I, ї on Option/AltGr+A and ґ on Option/AltGr+H. The language tag rue identifies Rusyn broadly; this keyboard and its visible labels target Lemko specifically.

Includes desktop rules, on-screen keyboard legends, and phone/tablet touch layouts. Touch long-press alternatives include і/ї on и, ґ on г, and щ on ш; a separate symbols layer provides numbers and punctuation.

This package contains no lexical model or dictionary data. A separately developed Lemko model is not included in this submission. The keyboard itself does not provide desktop autocorrection.

## Build

`kmc build lemko_qwerty.kpj`

## License

MIT. Copyright 2026 lemko.tools. See LICENSE.md.

## Touch behavior

The number page follows the EuroLatin-style arrangement, with a second currency/symbol page. Grey corner labels show long-press alternatives. Automatic Shift is enabled at an empty field, after a newline, and after `.`, `?`, or `!` followed by one to three spaces. After a letter it returns to lowercase. Manual Shift can override the next letter; decimal points without a following space do not start a sentence. Abbreviations are not detected linguistically. Desktop capitalization is unchanged.
