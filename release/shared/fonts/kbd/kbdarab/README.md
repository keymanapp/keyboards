This font is solely used for internal use by Keyman in displaying the OSK for keyboards. It is PUA-encoded (Private Use Area) and has no OpenType code. It should not be used for general purpose use.

## KbdArab.json

This file was created by analyzing the Arabic Keyman keyboards

```bash
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/a/arabic_izza/source/arabic_izza.kvks
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/a/arabic_izza/source/arabic_izza.keyman-touch-layout
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/a/arabic_w_o_dots/source/arabic_w_o_dots.kvks
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/a/arabic_w_o_dots/source/arabic_w_o_dots.keyman-touch-layout
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/basic/basic_kbda1/source/basic_kbda1.kvks
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/basic/basic_kbda1/source/basic_kbda1.keyman-touch-layout
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/basic/basic_kbda2/source/basic_kbda2.kvks
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/basic/basic_kbda2/source/basic_kbda2.keyman-touch-layout
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/basic/basic_kbda3/source/basic_kbda3.kvks
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/basic/basic_kbda3/source/basic_kbda3.keyman-touch-layout
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/e/easy_arabic/source/easy_arabic.kvks
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/sil/sil_arabic_phonetic/source/sil_arabic_phonetic.kvks
npx kmc analyze osk-char-use -m output_file.json -i output_file.json release/sil/sil_arabic_phonetic/source/sil_arabic_phonetic.keyman-touch-layout
```

The resulting font needs a glyph for the dotted circle U+25CC so this was added to KbdArab.json:
```json
    {
      "pua": "F320",
      "str": "◌",
      "unicode": "25CC",
      "usages": [
        "none"
      ]
    }
```

----

## ttkbdfont

Instructions per @LornaSIL

ttkbdfont is a script in our [docker build](https://github.com/silnrsi/smith) and can also be installed from [Palaso-Python](https://github.com/silnrsi/palaso-python).

First of all there was an error when I ran it because we have removed `nonmarkingreturn` from our fonts. So, I edited the script to remove that and the build worked.

After running `ttkbdfont` (syntax like [KbdArab.sh](source/KbdArab.sh)), I also had to deal with:

> All the combining marks are non spacing. And they use anchors to position correctly when in an OpenType font, so they aren't correctly positioned.
>
> 1. I added the dotted circle to all the combining marks
> 2. I added width to all the combining marks
> 3. I moved all the combining marks to be positioned either above or below the dotted circle in approximately the correct location.
>
> Then, I regenerated the ttf
