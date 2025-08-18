
Many questions can be answered by consulting the following FAQ pages. Here are a few sample questions answered in each FAQ:

- [SIL fonts in general](https://software.sil.org/fonts/faq)
    - *How can I type...?*
    - *How can I use font features?*
    - *Will you add support for character...?*
    - *Will you add support for script...?*
    - *WIll you help me...?*

- [SIL’s Latin, Cyrillic, and Greek fonts](https://software.sil.org/lcgfonts/faq).
    - *How can I type IPA symbols?*
    - *How do I use both a single-story and double-story 'a' in italic?*
    - *Why don’t my diacritics position properly?*
    - *Why is the line spacing so much looser than other fonts?*
    - *I’ve updated my font to the latest version and some letters have become black boxes with white letters - why?*

- [The SIL Open Font License (OFL-FAQ)](https://openfontlicense.org/ofl-faq)
    - *Can I use this font for...?*
    - *Can I modify the font and then include it in...*
    - *If I use the font on a web page do I have to include an acknowledgement?*
    - The full OFL-FAQ.txt is also included in the font package.

Here are a few of the most frequently asked questions specifically regarding Charis:

#### *Why did you change the font family name to only Charis?*

The version 7 reduction of default line spacing and addition of kerning would have caused most documents that used Charis SIL to reflow. This would have caused significant pain for users who wanted to use the new version but also had large collections of existing documents that would reflow. Changing the name to only Charis allows both old and new font families to be installed at the same time and eases the transition to the new version.

#### *Why did you stop producing Compact versions?*

Improvements to both these fonts and industry font technology has reduced the need for *Compact* versions. The reduced default line spacing in v7 enables many users of *Compact* variants to switch to using the standard fonts, and allows documents to be shared without requiring special fonts. If tight or loose line spacing is needed the best solution is to use the standard fonts and explicitly set the line spacing in your application. If the application does not allow user-specified line spacing the [v6.2 Compact fonts remain available](https://software.sil.org/lcgfonts/download/). Please also contact the app developer to request that they give users better control over line spacing.

#### *Where are the Literacy versions?*

We have not prepared ‘pre-tuned’ *Literacy* versions of the version 7 fonts. The standard fonts include the literacy forms, which can be turned on in many applications and on web pages using OpenType stylistic sets (`ss01`, `ss11`, `ss12`) — see [Using Font Features](https://software.sil.org/fonts/features) and [Using SIL Fonts on Web Pages](https://software.sil.org/fonts/webfonts). If your application does not allow you to control these features the [v6.2 Literacy fonts remain available](https://software.sil.org/lcgfonts/download/). Please also contact the app developer to request that they give users access to OpenType stylistic sets.

#### *Is there a guide to the many versions of Charis and its variants?*

Yes! See the [Versions](versions) page.

#### *Why does my application not show the Bold weight in font menus and dialogs?*

Some applications will list all the weights but leave out Bold. To access the Bold you need to choose Regular and turn on Bold using the application’s UI controls such as a “B” button. See our [Font Help Guide on Axis-Based Font Families](https://software.sil.org/fonts/axis-based-fonts/) for more information.

#### *Why do I sometimes get a fake Bold?*

If you choose a weight other than Regular (such as Medium), and then use application controls to turn on Bold, some applications will make a “fake” Bold rather than use one of the real ones in the font (SemiBold, Bold). This is because only Regular has an associated Bold counterpart. This is a technical limitation with some apps and OSes. If you are using a weight other than Regular for text and want to make a word or phrase stand out, you will need to select the text and apply one of the heavier weights manually. See our [Font Help Guide on Axis-Based Font Families](https://software.sil.org/fonts/axis-based-fonts/) for more information.

#### *Why does the font have some Greek characters, but not all?*

Although Charis includes some Greek characters, it is not intended to provide general support for the Greek language. The Greek characters that are included are there to support various notational systems (linguistic, logical, mathematical). Other fonts, such as [Gentium](https://software.sil.org/gentium), provide complete Greek script support. 

#### *Will you add full Greek script support?*

We have no plans to do that, however the [OFL licensing](https://openfontlicense.org_web) allows anyone to add Greek support and freely distribute the font to others. It is even possible to [contribute that work back to the project](developer) and share it with others.

#### *Isn’t Charis just a copy of Charter?*

Charis is very closely based on the design of Bitstream Charter. However the glyphs were completely redrawn based only on visual reference to Charter. There are some significant design differences in the serif structure, proportions, diacritics, and Cyrillic. The design was also adjusted and extended to cover a much wider range of characters and publishing needs.

