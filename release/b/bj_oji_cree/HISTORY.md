BJ-OjiCree (Kingfisher) Change History
=======================

1.0 (02 Sep 2014)
-----------------

* Created Oji-Cree keyboard based on Plains Cree 30 Jan 2010 version, but replaced the final y U+1429 ("plus") with U+153E (small "ya")

1.1 (28 Jul 2015)
-----------------

* Added curvy quotes on the "wedge" keys like Naskapi.

9.0 (24 Mar 2016)
-----------------

* Merged to tavultesoft keyboards github repository
* Synchronised keyboard and package version
* Updated to Keyman Developer 9.0

9.0.1 (31 Mar 2016)
-----------------

* Bug fix for initial consonant keys

9.0.2 (18 Jun 2018)
-------------------

* Add touch keyboard to package

9.0.3 (5 Jul 2018)
-------------------

* Added readme.htm
* Changed .bmp to .ico
* Changed .kvk to kvks
* Fixed compile errors
  * Removed Î and ÿ from "ConsKey" and "CapConsKey" stores since those cannot be typed.
  * Copied "CC" store and named it "CCKey" store. Removed U+15AE and U+14D1 from "CCKey" store.
  * Changed two rules which change Consonant key to standalone consonant to use the "CCKey" store instead of the "CC" store):
* Removed "extra" folder and "Oji-Cree syllabic chart1.pdf" (it's in the welcome and help files).
* Updated keyboard_info file to include platformSupport for "windows" and "macos".
* Added fonts to package for installing
