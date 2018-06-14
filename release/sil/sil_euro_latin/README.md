____________ Keyboard
=====================

Copyright (C) YYYY _____________________

Version A.B

__DESCRIPTION__
<add a description of this keyboard>

Links
-----

 * Home:     <___URL of keyboard info on your website___> or else omit this line
 * Help:     <___URL of keyboard help on your website___> or else omit this line
 * Contact:  <___EMAIL___> if you want to include your email address or else omit this line

Supported Platforms
-------------------
 * Windows
 * macOS
 * Web
 * Mobile Web
 * iOS
 * Android

Todo
----

* Fill in the blanks in this README.md file:
  * Fill in the name of keyboard
  * Complete the copyright information: YYYY should be year (or range of years from date of first release to date of present release), followed by copyright holder (person or legally recognised entity)
  * Fill in the version number: change "A.B" to the version number of the present release; use "1.0" if this is a new keyboard
  * Fill in a description of the keyboard
  * Fill in the Links information (or delete the line if it doesn't apply)
  * Delete any platforms under the "Supported Platforms" section that your keyboard files do not support. The result should agree with the "store(&TARGETS)" information in the .kmn file. (If "store(&TARGETS)" is "any", then leave all the platforms in the list.)
* Update the LICENSE.md file with the same copyright information used in the README.md file [note, to be included in the Keyman keyboards repo, you must use MIT license]
* Update HISTORY.md to give date of first release (and any other history you want)
* Rename the template.keyboard_info file to match your project name (project_name + ".keyboard_info" extension), for example "inuktitut_latin.keyboard_info" for the "inuktitut_latin" keyboard.
  * Complete the information in the .keyboard_info file by filling in data for "language" and "description".
  * replace "zzz" with the BCP 47 code for the language-script-region for which this keyboard is designed, for example: "aak" for Ankave (where no script or region subtag is needed), "ahk-Thai" for Ahka written with the Thai script, or "ti-ET" for Tigrigna as used in Ethiopia. (Keyman BCP 47 support allows a language-script-region triplet. The language code is required: the two-letter ISO 639-1 code, if one exists, or else the three-letter ISO 639-3 (Ethnologue) code. Script and region are optional. See https://www.w3.org/International/questions/qa-choosing-language-tags for details.)
  * if this keyboard supports more than one language, separate the codes with commas: "zzz", "qqq"
  * supply a meaningful description for the keyboard; this description will be what website visitors will see when they view the keyboard details and on which they can search
* This should cover many cases, but if the keyboard is more complicated, see: https://help.keyman.com/developer/cloud/keyboard_info/1.0/ for more details of what can be included in the .keyboard_info file, and for examples.
* Finally, remove these TODO items from this file once you have completed them!

 