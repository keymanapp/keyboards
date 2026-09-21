# Luri Paprik Keyboard

A Keyman keyboard for typing Northern Luri (ISO 639-3: `lrc`, BCP 47: `lrc-Arab`) in the Arabic script on desktop and mobile platforms.

## Prerequisites

- [Keyman Developer](https://keyman.com/developer/) 18.0+ (with `kmc` CLI)
- Node.js 18+ (for `kmc` dependency)

## Building

```sh
npm install
kmc build luri_paprik.kpj
```

Output is written to the `build/` directory as a `.kmp` package (plus platform-specific binaries).

## Installing

### Desktop (Windows, macOS, Linux)

Double-click the compiled `build/luri_paprik.kmp` file. Keyman will guide you through installation.

### Android / iOS

Transfer the `.kmp` file to your device and open it with Keyman, or distribute via a web link and Keyman will handle installation.

## Layout Layers

### Default (unshifted)

Luri-specific characters on the letter keys:

```
Row 1: ؽ ۋ گ ڤ ۉ ۏ ۊ ؤ ق ج چ پ
Row 2: آ ٱ لٛ اٛ ݩ ئ ا س ی ت ک
Row 3: ژ کٛ اْ ء ز ر ذ د ه
```

### Shift

Persian ISIRI 9147 layout with Extended Arabic-Indic digits on the number row:

```
Row 1: ض ص ث ق ف غ ع ه خ ح ج چ پ
Row 2: ش س ی ب ل ا ت ن م ک گ
Row 3: ظ ط ز ر ذ د ئ و ؟ ؟
Number row: ۱ ۲ ۳ ۴ ۵ ۶ ۷ ۸ ۹ ۰
```

### RALT (Right Alt)

Punctuation, math symbols, and currency:

```
Punctuation:  > < ≤ ≥ « » ⟨ ⟩ ﴿ ﴾ ‹ ›
Currency:     € £ ¥ ¢ ﷼ ٪
Extras:       ¿ ℅ ‰ ‽ ٫ ٬
Brackets:     [ ] { —
ZWNJ:         RALT+Space
```

### RALT+Shift

Persian letter access, Arabic diacritics, and extra punctuation:

```
Letters:      ض ص ث ق ف غ ع ه خ ح ج چ پ ظ ط ز ر ذ د
Diacritics:   َ (Fatha) ُ (Damma) ِ (Kasra) ّ (Shadda) ْ (Sukun)
Extras:       ـ (Tatweel) ڒ ? ·
```

## Touch Layout

On mobile devices, Luri characters are accessible via long-press menus on the relevant base keys:

- Long-press `و` → ۉ, ۏ, ۊ, ؤ
- Long-press `ر` → ڒ
- Long-press `ا` → آ, ٱ, اٛ, اْ
- Long-press `ل` → لٛ
- Long-press `ک` → کٛ, ݩ
- Long-press `ج` → چ, پ, ژ

Symbol groups provide access to currency, brackets, and punctuation via dedicated toggle keys.

## License

MIT
