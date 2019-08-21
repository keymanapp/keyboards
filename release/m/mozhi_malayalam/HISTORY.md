Mozhi Malayalam Keyboard Change History
=======================
2.0.8 (19 September 2018)
--------------------
## Major Changes
* Added support for Nukta (F key)
* nta is now Standard nta
  * nta^ will give legacy nta
* Fix bug // > avagraha
* Standardized the ZW characters
  * always remove none joiner before vowels
  * always remove zwnj before a word final chars
  * '_' will output zwnj only after a chandrakkala
  * prevent the typing of repeated zw(n)j
  * Removed redundant rules to prevent ZWNJ after Chillus (before Double consonants)
* Internal: Cleaning up
  * Removed redundant rules for malayalam fractions
  * Removed commented out rules and irrelvant comments
  * Reorganized the order of consonants to the natural malayalam order
  * Reorganized stores to the beginning of the code file
  * Commented out redundant rules that prevents zwnj after chillu
* Fix bug: nta + h (after correcting the encoding of nta, the earlier rule got broken)
* nj now outputs ഞ്ഞ് in word medial and word final positions
* 'മ്യ' and 'മ്ര' conjunct after 'സ''
* Expanded Error Correction Rules
* Unused keys are now mapped as per the specs
* Expanded Extra elongation for vowel signs
* Expanded the Archaic character support
* Fixed the behavior of 'R' according to the spec
* Legacy encoding of 'nta' and it's combinations
* Backspace is now more intuitive (not exhaustive though)
* Smart quotes are now the first preference, and quotes cycles now
* Emoji and other extended character support

2.0.7 (19 September 2018)
--------------------
## Major changes in this release are
  - Fix #11 add support for danda viramas
  - Fix #18 cch should output 'ച്ച്'
  - Fix #19 Stop using '\' for vowel signs
  - Fix #20 chandrakkala repeating issue
  - Fix #21 Add support for chandrabindu
  - Fix #22 Modify rule for Anusvara and Vattu

2.0.6 (17 September 2018)
--------------------
A rule to handle `vattu` in the code was causing the keyboard to malfunction (only in Firefox with TSF integration). This was due to a known, but yet to be fixed bug in the TSF integration. We have modified the code so that the keyboard will function correctly in Firefox.


2.0.5 (12 August 2018)
--------------------
## പ്രധാന മാറ്റങ്ങൾ
* ട്രാൻസ്ലിറ്ററേഷൻ ബൈപാസ് ചെയ്യാനായുള്ള റൂൾ കൂടി ചേർത്തിരിക്കുന്നു.
  * സമചിഹ്നം ഇട്ടതിനു ശേഷം റ്റൈപ്പ് ചെയ്താൽ ഇംഗ്ലീഷ് അക്ഷരങ്ങൾ നേരിട്ട് ലഭിക്കും
  * സമചിഹ്നം റ്റൈപ്പ് ചെയ്യാനായി രണ്ട് പ്രാവശ്യം സമചിഹ്നം അടിക്കുക
  * ഒരു ഇംഗ്ലീഷ് അക്ഷരത്തിനു ശേഷം അടിക്കുന്ന അക്ഷരങ്ങളെല്ലാം ഇംഗ്ലീഷിൽ തന്നെയായിരിക്കും വരുന്നത്
  * ചില ചിഹ്നങ്ങളും ട്രാൻസ്ലിറ്ററേഷൻ ബൈപാസ് ചെയ്യാനാകും (ഉദാ: .@=~ മുതലായവ).
  * വെബ്, ഇമെയ്‌ൽ അഡ്രസ് അടിക്കേണ്ടതായി വരുമ്പോൾ ഇത് ഉപകാരമായി വരും
* ലെഗസി ചില്ല്
  * മൊഴിയിൽ ഈ പഴയ ചില്ല് (ലെഗസി) ലഭിക്കുവാനായി ചില്ലിനു ശേഷം ^ ചേർത്താൽ മതിയാകും.
  * [ൿ/ൺ/ൻ/ർ/ൽ/ൾ] + ^	ക്zwj/ണ്zwj/ന്zwj/ര്zwj/ല്zwj/ള്zwj
  * സ്പെക്കിലില്ലെങ്കിലും, ഇത് തിരിച്ച് വരാനുള്ള റൂൾ കൂടി ഉൾപ്പെടുത്തി. അറ്റോമിക് -> സീക്വൻസ് -> അറ്റോമിക്
  * ക്zwj/ണ്zwj/ന്zwj/ര്zwj/ല്zwj/ള്zwj + ^	[ൿ/ൺ/ൻ/ർ/ൽ/ൾ]
* ഭിന്നസംഖ്യകൾ
  * 1/8, 1/16, 3/16 എന്നിവയ്ക്ക് ശേഷം '' റ്റൈപ്പ് ചെയ്താൽ അവയുടെ മലയാള ചിഹ്നം ലഭിക്കും
* മറ്റ് ചെറിയ വ്യത്യാസങ്ങൾ
  * ഈ-യുടെ സ്വരാക്ഷര ചിഹ്നം ഇപ്പോൾ ഈ + \ അടിച്ചാൽ കിട്ടും
  * 'I' അടിച്ചാൽ ഈ വരും (മുമ്പ് ഐ ആണ് വന്നിരുന്നത്)

2.0.4 (30 July 2018)
--------------------
* Solve anusvaram issue

2.0.3 (30 July 2018)
--------------------
* Basic mozhi map is complete (testing pending)

2.0.2 (26 July 2018)
--------------------

2.0.1 (25 July 2018)
--------------------

2.0 (25 July 2018)
------------------
Mozhi 2.0 is a complete re-write of the Mozhi keyboard by Junaid P. V. Because this version replaces the existing keyboard by Mr. Raj Nair, here is a little bit of background.

Mozhi Malayalam was originally created by Raj Nair, but the source is lost. Junaid created a new source and this released based on Junaid's code. There are several missings/mismatches with the Mozhi Spec. We will soon release another update with improvements.

1.2 (29 May 2018)
-----------------
* Migrated to GitHub

1.1
-----------------

1.0
-----------------
* Initial version for Unicode 5.1
