bj_cree_east Change History
=======================

1.0 (17 Nov 2001)
-----------------

* Created East Cree keyboard based Bob Hallisey's 1995 legacy code, keyboard name "BJCreeUNI (east)"

9.0.1 (21 Apr 2016)
-------------------

* Merged to tavultesoft keyboards github repository
* Synchronised keyboard and package version
* Updated to Keyman Developer 9.0

9.0.2 (18 Jun 2018)
-------------------

* Add touch keyboard to keyboard package

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
