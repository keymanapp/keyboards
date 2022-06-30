Vietnamese Telex Change History
====================

1.0 (2022-02-16)
----------------
* Created by Mike Vo.

1.01 (2022-03-16)
----------------
* **Bugfix:** Added missing Telex diacritic rules for gi + a (previously gia + s would incorrectly outputs "gía" instead of "giá"; same with huyền - "f", hỏi "r", ngã "x", and "nặng" j modifiers).

1.02 (2022-04-16)
----------------
* **Feature:** Added smart `ưo` → `ươ` autocorrection when a final consonant character/digraph is present to better emulate the same behavior from [Microsoft's Vietnamese Telex IME](https://support.microsoft.com/vi-vn/windows/cách-cài-đặt-và-sử-dụng-bàn-phím-tiếng-việt-telex-và-number-key-based-968ba67e-0e19-f004-dc5a-abcacef5048b) and the popular third-party [Unikey IME](https://www.unikey.org). This is to help users migrating from those IMEs to get used to this keyboard faster by making use of their existing muscle memory.
* Added missing `uo-<final consonant(s)>` + `w` → `ươ-<final consonant(s)>` rules. Thanks [u/AdrikIvanov](https://www.reddit.com/user/AdrikIvanov/) from Reddit for letting me know.
* Added rhymes: `uym`, `uým`, `uỳm`, `uỷm`, `uỹm` and `uỵm` (currently no evidence of usage in either spoken or written Vietnamese, but I included them anyway as to future proof this IME in case those rhymes ever get used).
* **Feature:** Merged features from my other keyboard [Vietnamese Telex (Legacy Mode)](https://keyman.com/keyboards/vietnamese_telex_legacy). The user can now choose from `Keyman Configuration / Keyboard Layouts / Vietnamese Telex / Keyboard Options` which tonal diacritics placement convention they want to use (See: [Quy tắc đặt dấu thanh trong chữ quốc ngữ](https://vi.wikipedia.org/wiki/Quy_tắc_đặt_dấu_thanh_trong_chữ_quốc_ngữ)). **Note: Because of its popularity, the older convention is now the default setting when the user first install this keyboard.** [Vietnamese Telex (Legacy Mode)](https://keyman.com/keyboards/vietnamese_telex_legacy) is now deprecated.
* Additional documentation.

1.03 (2022-05-30)
* Added missing `quy` + `<tone>` rules. Example: Old behavior: `quy` + `s` would produce `qúy` (incorrect); New (fixed) behavior: `quy` + `s` would produce `quý`.
* Added smart tonal diacritic placement for `q` + `u` + `<tone>` + `<vowel>` combinations. For example: `q` + `ư` + `s` would produce `qú`, and then `qú` + `a` would produce `quá` instead of `qúa` (incorrect spelling).

1.04 (2022-06-21)
* Hotfix: Fixed incorrect output for `q` + `u` + `<tone>` + `i` combinations.

1.05 (2022-06-23)
* Hotfix: Address Keyman compiler warnings on duplicate/overidden rules to improve performance and make code maintenance easier. More details [here](https://github.com/keymanapp/keyboards/pull/1889)
