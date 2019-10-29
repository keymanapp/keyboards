# Mozhi Malayalam Keyman Keyboard

Mozhi Malayalam Keyboard. Transliteration scheme was originally developed for Varamozhi Application. It uses a unique English character sequence for each Malayalam letter.

## Keyboard layout

< img src="mozhi_layout.png"> </img>

```perl
# a -> അ
##  ്+ a -> deletes ്
## വ്യഞ്ജനാക്ഷരം + a -> വ്യഞ്ജനാക്ഷരം +  ദീൎഘചിഹ്നം ( ാ)
### ഉദാ: ക് + a -> ക
## ചില്ലക്ഷരം ‍+ a -> ചില്ലക്ഷരത്തിൻ്റെ അടിസ്ഥാന രൂപം
### ഉദാ: ൻ + a -> ന 
# b -> ബ്
## ബ് + b -> ബ്ബ്
# c -> ൿ
## ൿ + c ‍-> ക്ക്
# d -> ദ്
# e -> എ
## വ്യഞ്ജനാക്ഷരം + e -> വ്യഞ്ജനാക്ഷരം +   െ
### ഉദാ: ക് ‍+ e -> കെ
## എ + e -> ഈ
### ഉദാ: eerppam -> ഈർപ്പം
##  െ + e -> ീ
### ഉദാ: veeran -> വീരൻ


# \
## 0 + \  -> ൦
## 1 + \  -> ൧
## 2 + \  -> ൨
## 3 + \  -> ൩
## 4 + \  -> ൪
## 5 + \  -> ൫
## 6 + \  -> ൬
## 7 + \  -> ൭
## 8 + \  -> ൮
## 9 + \  -> ൯
## 10 + \ -> ൰
## 100 + \ -> ൱
## 1000 + \ -> ൲
## 1/4 + \  -> ൳
## 1/2 + \  -> ൴
## 3/4 + \  -> ൵
## 1/16 + \  -> ൶
## 1/8 + \  -> ൷
## 3/16 + \  -> ൸

# + > ZWJ (Zero Width Joiner, U+200D)
## ഉദാ: ന് + + -> ന്‍ (ഒട്ടുചില്ല്. ഇപ്രകാരമുള്ള ഒട്ടുചില്ലുകൾ നിത്യോപയോഗത്തിനു വേണ്ടിയുള്ളതല്ല്)
## ZWNJ + + -> +

# | -> ZWNJ (Zero Width Non Joiner, U+200C)
## ZWNJ + | -> ZWSP (Zero Width Space, U+200B)
## ZWSP + | -> |
## | + | -> ||
```