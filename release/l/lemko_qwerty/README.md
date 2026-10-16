# Rusyn (Lemko, Poland) keyboard

Version 0.3.2, initial submission.

A positional Cyrillic keyboard for Lemko, based on the Apple macOS Russian Phonetic layout. The backslash position produces є instead of э; Shift produces Є. Option on macOS and right Alt on other platforms also provide є at the backslash position. Additional mappings include і on Option/AltGr+I, ї on Option/AltGr+A and ґ on Option/AltGr+H. The language tag rue identifies Rusyn broadly; this keyboard and its visible labels target Lemko specifically.

Includes desktop rules, on-screen keyboard legends, and phone/tablet touch layouts. Touch long-press alternatives include і/ї on и, ґ on г, and щ on ш; a separate symbols layer provides numbers and punctuation.

## Validation and status

Compiled without errors with Keyman Developer kmc 18.0.253. Desktop and mobile-profile tests pass in KeymanWeb 18.0.253 on Microsoft Edge, including direct є/Є, AltGr, macOS-profile Option, and phone/tablet symbol layers. Those are browser tests, not native Windows/macOS/Android/iOS acceptance tests. Native installation, shortcut interactions, and offline restart testing remain pending. This is an initial submission, not a production-readiness claim.

This package contains no lexical model or dictionary data. A separately developed Lemko model is not included in this submission. The keyboard itself does not provide desktop autocorrection.

## Build

`kmc build lemko_qwerty.kpj`

## License

MIT. Copyright 2026 lemko.tools. See LICENSE.md.
