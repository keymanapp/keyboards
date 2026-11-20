Pontic Greek Keyboard Change History
====================================

6.1 (2026-11-20)
----------------
* Added mobile auto-shift return (`shift` -> `default`) via Keyman 15 `PostKeystroke` after typing a capital letter, while preserving uppercase layer during pending dead keys
* Added dedicated `caps` touch layer (phone and tablet) activated by double-tapping Shift (`*ShiftedLock*`)
* Added full `[SHIFT T_TONOS]` and `[SHIFT T_PONTIC_DK]` post-fix/pre-fix parity and bi-directional dead-key composition

6.0 (2026-10-07)
----------------
* Updated Pontic Sans font to version 6.0 with calibrated GPOS anchors for all combining diacritics
* Improved optical alignment of caron (ˇ) and diaeresis below (̤) across all platforms

5.1 (2026-08-28)
----------------
* Expanded targets to support desktop, mobile, and web (`store(&TARGETS) 'any'`)
* Added On-Screen Visual Keyboard (.kvks) for desktop support
* Added standard LICENSE.md, README.md, and documentation structure for Keyman repository submission
* Embedded Pontic Sans font for correct diacritic positioning on all platforms

5.0 (2026-07-24)
----------------
* Font family update and HarfBuzz anchor tuning
* Aligned version numbering across all platforms

3.6 (2026-06-15)
----------------
* Embedded Pontic Sans font directly into package
* Fixed GPOS anchors for Pontic caron (hacek) diacritics

1.0 (2024-10-01)
----------------
* Initial Keyman release for Pontic Greek
