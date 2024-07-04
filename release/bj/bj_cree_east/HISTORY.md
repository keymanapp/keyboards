BJCreeUNI (east) Change History
=======================

9.2.0 (20 Feb 2024)
-------------------
* Fixed a bug related to NFC and long vowels

9.1.1 (30 Oct 2023)
-------------------
* Updated font to better support the Cans script

9.1 (2 Aug 2022)
-------------------
* Convert keyboard to produce composed characters with decomposed available through options
* Add a real touch layout (not just the desktop .js file)

9.0.4 (29 Apr 2019)
-------------------
* Adjust BCP47 codes

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

9.0.2 (18 Jun 2018)
-------------------

* Add touch keyboard to keyboard package

9.0.1 (21 Apr 2016)
-------------------

* Merged to tavultesoft keyboards github repository
* Synchronised keyboard and package version
* Updated to Keyman Developer 9.0

1.0 (17 Nov 2001)
-----------------

* Created East Cree keyboard based Bob Hallisey's 1995 legacy code, keyboard name "BJCreeUNI (east)"
