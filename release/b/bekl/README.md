# BEKL (Bulgarian Enhanced) for Keyman

An iPhone/iPad-compatible Keyman touch version of the BEKL Bulgarian
Enhanced Keyboard Layout. BEKL is based on BDS, with letters ѣ, ѫ, ѭ,
ѝ and convenient long-press access to digits, currency, and punctuation.

The `phone` and `tablet` touch layouts include:

- The exact BEKL letters and key order from the WM Keyboard layout.
- All letter, comma and period long-press characters from the original.
- Uppercase letters on Shift (including Ѣ, Ѫ, Ѭ and Ѝ).
- An explicit numeric/punctuation layer and a second symbol layer.

This is a **touch-oriented Keyman keyboard**; it does not implement a
complete physical desktop keyboard mapping.

## Install on iPhone/iPad

1. Install **Keyman** for iOS from the App Store.
2. Download `bekl.kmp` from this project's `build/` directory or the
   distribution ZIP.
3. Open `bekl.kmp` in Keyman and confirm installation, or use the
   Keyman app's **Install from File** option.
4. Enable Keyman in iOS Settings → General → Keyboard → Keyboards if
   you want to use it across other iOS apps. Select BEKL within Keyman.

## Build

Install Node.js and the Keyman CLI (`npm install -g @keymanapp/kmc`).

```sh
kmc build bekl.kpj
```

The committed `source/bekl.keyman-touch-layout` contains the touch keys
and all long-press characters; the generated `build/` files are not
committed to the Keyman keyboard repository.

Project website: https://bekl.org
