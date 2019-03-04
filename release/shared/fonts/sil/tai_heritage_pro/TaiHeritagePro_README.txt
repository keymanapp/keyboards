**********
* README *
**********

- Tai Heritage Pro Release 2.600 -- October 2017
=========================================================

Thank you for your interest in Tai Heritage Pro. The 2009 release of Version 2.000 represented a major upgrade to the original Tai Heritage font, incorporating Unicode encoding and Graphite technology for correctly positioning the vowel and tone marks of the Tai Viet script. Version 2.500 added a bold face font, and gives the choice of either Graphite or OpenType rendering technology. Version 2.600 enables use of the font in OpenType applications on Windows 10 by correcting several errors in the OpenType code. In addition, several small discrepancies between OpenType and Graphite with respect to the positioning of combining vowels and tones in the Regular weight have been eliminated. See FONTLOG.txt and TaiHeritageProFontFeatures.pdf for more information.


REQUIREMENTS
------------
In order to obtain the correct placement of combining marks (i.e. diacritic vowels and tones), this font should be used with applications that use one of these rendering technologies:

	- OpenType. The Universal Shaping Engine on Windows 10 now supports the 
	  Tai Viet script, as do applications that use non-Microsoft rendering such 
	  as Harfbuzz.

	- Graphite. See http://scripts.sil.org/GraphiteFAQ "Applications that support
	  Graphite?"

When used in an application without either of these rendering technologies, the font will still be mostly readable, but the placement of combining marks will not be optimal, and there will occasionally be collisions between adjacent characters.

Tai Heritage Pro 2.600 has been tested in the following applications:
    - on Windows 10: 
        - Vowels and tones position correctly in Notepad, Firefox, Chrome, Edge, 
          Internet Explorer, MS Office 2016 (Word, Excel, and Publisher), Paint, 
          LibreOffice (Writer, Calc, Impress, and Draw), Thunderbird, InDesign, 
          Paratext, and Xetex. 
        - Vowels and tones do not position correctly in PowerPoint 2016.
    - on Windows 8.1:
        - Vowels and tones position correctly in Firefox, Chrome, 
          LibreOffice (Writer, Calc, Impress, and Draw), Paratext, and XeTeX. 
        - Vowels and tones do not position correctly in Notepad, Internet 
          Explorer, MS Office (any application), and Paint.
    - on Ubuntu 16:
        - Vowels and tones position correctly in Firefox, LibreOffice (Writer, 
          Calc, Impress, and Draw), and XeTeX.
        - Vowels and tones do not position correctly in gedit.
Applications and environments not listed here have not been tested.

INSTALLATION
------------
  - Expand the zip file, and drag the .ttf files onto the Fonts folder icon.


LICENSE
-------
The Tai Heritage Pro font is copyright 1995-2017 by SIL International. It is distributed under the SIL Open Font License. See OFL.txt for the complete text of the SIL Open Font License. See OFL-FAQ.txt for frequently-asked questions about the SIL Open Font License.

=========
- CONTACT
=========
For more information please visit http://software.sil.org/taiheritage/, or send an email to <fonts@sil.org>
