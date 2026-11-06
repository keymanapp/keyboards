
# Rohingyalish Keyboard

A Keyman keyboard for typing Rohingyalish, the Latin-script writing system used to write the Rohingya language.

## Keyboard features

- A familiar Latin QWERTY layout.
- Long-press access to characters with diacritics on touch devices.
- Sequence-based character entry for physical keyboards.
- Support for characters including á, ā, ḍ, ṭ, ñ, ṛ, and ș.
- A dedicated numeric and punctuation layer on the touch keyboard.

## Language

- Rohingya (`rhg-Latn`)

## Platforms

The keyboard project includes a desktop keyboard and a touch layout for use with supported Keyman applications.

The physical keyboard has been tested on macOS. The touch layout, including its numeric and punctuation layer and long-press characters, has been tested on iPhone and iPad.

## Repository contents

- `source/rohingyalish.kmn` — keyboard rules.
- `source/rohingyalish.keyman-touch-layout` — touch keyboard layout.
- `source/rohingyalish.kps` — package configuration.
- `source/rohingyalish.kvks` — desktop on-screen keyboard layout.
- `source/readme.htm` — package installation description.
- `source/welcome.htm` — keyboard usage instructions.
- `source/help/rohingyalish.php` — online keyboard help.

## Building

Build the project using Keyman Developer or the Keyman command-line compiler (`kmc`).

From the keyboard project directory, run:

```bash
kmc build rohingyalish.kpj
```

## License

Copyright © Ro Mehrooz.

See [LICENSE.md](LICENSE.md) for the applicable license terms.
