# Change History — Luri Keyboard (Northern Luri)

## 1.0.8

- Updated documentation to use "Northern Luri" (ISO 639-3: `lrc`, BCP 47: `lrc-Arab`).
- Fixed KVKS: corrected RALT+SHIFT layer (`shift=""` → `shift="RSA"`), filled empty `<kbdname>`.
- Fixed `K_LBRKT`/`K_RBRKT` mismatch between KMN and touch layout (parentheses now handled via `U_0028`/`U_0029`).
- Added missing `K_BKSLASH`, shifted number keys, `SHIFT K_COMMA`, `SHIFT K_PERIOD` rules to KMN.
- Added `.gitignore`.

## 1.0.7

- Restructured to standard Keyman project layout.
- Standardized desktop punctuation to match US keyboard layout.
- Added shifted punctuation rules for desktop.
- Added desktop backtick/tilde keys.
- Fixed K_COLON / U_003A conflict between desktop and touch.
- Removed redundant 0x4 / 0x5 layers from KVKS.

## 1.0

- Regenerated all source files from `luri_unicode_characters.txt` for comprehensive character coverage.
- Changed language to Northern Luri (`lrc`).
- Added compound Luri characters: لٛ (U+0644 U+065B), اٛ (U+0627 U+065B), کٛ (U+06A9 U+065B).
- Updated touch layout long-press menus for all new characters.
