Hebrew (SIL) Keyboard Change History
=======================

1.7.1 (14 Sept 2018)
-----------------
* Rename keyboard
* Add support for linux as target

1.7 (17 May 2018)
-----------------
* Updated language codes adding script subtag for Windows 10

1.6 (23 Apr 2018)
-----------------
* Migrated to GitHub
* Removed patch rules for FieldWorks
* added macOS as a target

1.5 (23 Feb 2007)
-----------------

*  All PUA characters above have been replaced by the following, according to an agreement with other font designers and because PUA characters are not really usable in commercial software at this time.
    * d78 Hebrew reversed nun with dot - use Nun Hafukha(05C6)CGJ 0307
    * d170 Hebrew Mark Lower Dot - now defined as 05C5
    * Right Meteg - use 05BD CGJ before the low vowel or other low marks
    * Left Meteg with Hataf - use Hataf ZWNJ 05BD
* Note that U+05BD Hebrew Point Meteg is coded in the Ezra SIL fonts to always fall to the left of the vowel, except for with hatafs, it falls medially. These are the most common positions of meteg in BHS.

1.4 (22 Sep 2003)
-----------------

* Added: U+20AA New Sheqel, U+20AC Euro, U+0024 Dollar, U+00A0 no-break space
* PUA: PUA F300 d78 Hebrew Reversed Nun, PUA F301 d170 Hebrew Mark Lower Dot, PUA F302 Hebrew Accent Right Meteg (convert d149 to this when it occurs before a vowel), PUA F303 Hebrew Accent Left Meteg (for use to left of hatafs only)

1.3 (25 Jul 2003)
-----------------

1.2 (30 Sep 2002)
-----------------

1.1 (7 Aug 2002)
-----------------

1.0  (19 Dec 2001)
-----------------
* Unicode version adapted from legacy SIL Ezra keyboard layout.
