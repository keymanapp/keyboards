Vedic Sanskrit Devanagari Phonetic (ITRANS) Version History
======================================

1.2.1 (2019-05-30)
----------------
* 20190530 
* Add OM for ॐ
* Add examples with Vedic accents to welcome and help
* Add missing Samaveda marks for  key + EQUAL (similar to RCTRL) 

1.2.0 (2019-05-26)
----------------
* 20190526
* Streamline code with use of `store` and `any`
* Add support for Marathi eyelash ra R - र्‍ 
* Add support for ZERO WIDTH JOINER +
* Add option for implicit akaara deletion for Hindi mode 
* Remap and add keys
* RR, RR^, LL, LL^, MM
* .k .kh .g .j .jh .D .Dh .f
* 20190527
* L maps to ळ् as well as ॢ 
* That combination is NOT used in Sanskrit, rendering will be incorrect if both used together.
* Add nukta chars - .n .r .L .y 
* Add  X ज्ञ् and F ङ् 
* Add W } ऄ ॵ ॆ ॏ 
* Add q Q  ऺ ऻ कऺ कऻ
* Add z Z  ॖ   ॗ  कॖ कॗ
* Add { for U+A8FE Aand U+A8FF (AY) not yet supported in fonts
* Remove some Samaveda marks from RALT
* Add some Samaveda marks to RCTRL
* Regenerate keyboard graphics with ZWJ & ZWNJ
* Edit manually Shift layout graphics to add AY and svasti
* Limit Samaveda Cantillation marks 1-7
* Change 8 - "꣢꣯" 9 - "꣢꣫" 0 - "꣣꣬"
* 20190529 
* Changes based on PR feedback
* Fix double virama bug

1.1.0 (2019-05-22)
----------------
* Increase minor version because of mapping change
* Change {/ऍ , }/ऑ  to ae/E/ऍ ,   aw/O/ऑ
* Add Hindi as a supported language
* Add alternate mapping for Samaveda marks on Right Ctrl layout
* Give error for unused keys with beep
* Display punctuation marks on OSK
* Display ZWNJ on OSK for _

1.0.0 (2019-05-10)
----------------
* Initial Version by Shree Devi Kumar
