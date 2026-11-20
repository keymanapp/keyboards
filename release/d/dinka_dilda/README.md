# Dinka (DILDA) Keyboard

**Dinka (Thuɔŋjäŋ)** keyboard based on the DILDA (Dinka Language Development Association) unified writing system.

## Overview

This keyboard provides full support for typing Thuɔŋjäŋ, a language spoken in South Sudan. It is based on the **Grammar of Unified Thuɔŋjäŋ** published by DILDA, which was developed through a series of workshops held in Juba between 2011 and 2019 with representatives from all Thuɔŋjäŋ dialect groups (Agar, Bor, Padang, and Rek). The keyboard implements the DILDA unified writing system standard, including:

- **Acute tones**: á, é, í, ó, ú, ɛ́, ɔ́
- **Diaeresis**: ä, ë, ï, ö, ü, ɛ̈, ɔ̈
- **Circumflex**: â, ê, î, ô, û, ɛ̂, ɔ̂
- **Extended consonants**: ŋ/Ŋ, ɣ/Ɣ
- **Extended vowels**: ɛ/Ɛ, ɔ/Ɔ
- **Digraphs**: th, dh, nh, ny

## Desktop Typing

| Mark | Trigger | Example | Output |
|------|---------|---------|--------|
| Acute | `'` + vowel | `'` → `a` | á |
| Diaeresis | `;` + vowel | `;` → `a` | ä |
| Circumflex | `Shift+6` + vowel | `Shift+6` → `a` | â |

## Touch Devices

Long-press any vowel key to access all three accent variants (acute, diaeresis, circumflex) in both lowercase and uppercase. Long-press consonant keys (t, d, n, y) for digraphs (th, dh, nh, ny).

## Font

The keyboard includes the **Noto Sans Dinka** custom font that renders capital Ŋ in the correct "n-form" (matching lowercase ŋ), as required for African languages per Microsoft typography standards.

## Reference

This keyboard implements the writing system described in:

- **Grammar of Unified Thuɔŋjäŋ** — DILDA (Akutmɛ̈t Latueŋ Thuɔŋjäŋ), Juba, South Sudan, 2021. The unified standard was agreed upon at workshops organized by DILDA between 2011 and 2019, with consultation from Prof. John Myhill of the University of Haifa.

## Acknowledgments

This keyboard uses work from the original **el_dinka** keyboard (MIT license), available at `keyboards/release/el/el_dinka/` in the Keyman keyboards repository. The original keyboard provided the base layout, character mappings, and touch layout structure that were enhanced for DILDA compliance.

## License

MIT License — see [LICENSE.md](LICENSE.md)
