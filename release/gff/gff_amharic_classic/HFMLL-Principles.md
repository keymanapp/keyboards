# Principles for Hints, Flicks, and Multitaps, Longpresses, and Layer Shifting in Ethiopic Keyboards
“”

## Introduction &amp; Assumptions
“Touch” keyboards found on mobile phones and tablets introduce a number of tactile features not possible with
traditional mechanical keyboards.  While touch keyboards inherit the simple press-to-enter approach of
their mechanical counterparts, which remains as the primary means of character entry, they also support a
small number of finger contact types as a secondary means of entry.

These means include
entertwine with layers



### Assumptions
  * Descriptions of the hint, flick, multitap, and longpress mechanisms are grounded in their implementation
    in the Keyman keyboard software.  Other keyboard and input method platforms may treat these features
    slightly differently.  However, it is beleived that the principles described here are transferable.
  * When “Ethiopic keyboard” is used, the expression is in reference to the “GFF” Ethiopic keyboards, though the
principles should apply to any touch screen Ethiopic keyboard implementation.
  * “Ethiopic” here covers the letter inventory of the languages Amharic, Awngwi, Blin, Ge'ez, Harari, Khimtanga,
    Tigre, Tigrinya, and other languages that use letters outside of the Unicode Ethiopic Extended-A, and
    Ethiopic Extended-B ranges. Special cases, such as for Gurage (which utilizes Ethiopic Extended-B) are not
    covered in these recommendations under a multilingual context (but will apply for a Gurage-only keyboard).
  * Assumption that letter-family specific layers are used by the keyboard to support entry of the syllables
    associated with a base letter displayed in the intial, or shifted, state of the keyboard.

## Hints

### Hints on QWERTY Style Keyboards

## Flicks
“Flicks” (add hyperlink) are a convenient way to support additional character input from a single key whose primary
input has been defined with the standard "Press" action. Flicks offer a means to enter a related character quickly
while avoiding the need to change to another keyboard layers, and return, to exectute the entry.

### A General Rule for South Flicks
A “south” (or downward) flick should enter the Ethiopic letter displayed on the key.  No layer change must  occur.
No further composition of the letter is possible unless the controls for doing so reside on the present layer.

### Flicks and Layer Changes
As a general rule in Ethiopic keyboards, flicks should not have the side effect of changing layers. Indeed, the primary value
of flicks is the avoidance of a layer change.  However, in some special cases that will be reviewed here, flicks can be used
advantageously to affect a layer change when they would otherwise be more laborious to perform.

A challenge when designing a keyboard for the Ethiopic scripts, and other writing systems that are larger than Latin, is 
arranging the keys needed for normal composition within the constraints of available screen space, while not making
the keys smaller than the average person's finger tip size. Despite increasing screen resolutions, keys that are too small
will make the keyboard unusable, thus a practical limit exists for the number of keys that can be presented across a row
of keys.  Here again an assumption has been made that the single keyboard layout will be used in both the “portrait”
and “landscape” orientations of a mobile device.  Indeed the problem described can be mitigated somewhat for a keyboard
designed for the wider landscape orientation (which is supported by Keyman).

A problem that arrises with Ethiopic keyboards that use layers to compose the letter families,
such as “ለ” for the family of “ለ”, “ሉ”, “ሊ”, “ላ”, “ሌ”, “ል”, “ሎ”, and “ሏ”, is the need to return to the starting (“default”)
layer. Given the space limitations on the keyboard, it is difficult to add a special key whose function is simply
to return to the starting layer, without sacrificing another key on the screen for this purpose. A key that by itself would
have no purpose on the starting layer. To conserve valuable layout space, the keyboard designer is driven to avoid adding
a special key for this purpose, or temporarily hijacking an existing key to serve this role. The recommendations in the 
following subsections will describe how where flicks can be used to support the return-to-start requirement.

### Flicks on Regular Keys
On keys that are associated with a *single* letter family, such as “ለ” for the family of “ለ, ሉ, ሊ, ላ, ሌ, ል, ሎ, and ሏ”, 
only the “south” flick is defined and follows the “General Rule” stated earlier.  The letter displayed on the keycap
is entered, and visible layer *does not* change.

A special case is when the layer *of the letter* has been loaded. For example on the “ለ” layer used to compose the
“ለ” family. On these letter-family layers, the south-flick of the associated base key, the “ለ” key, can be used to
return to the default layer. No letter input should occur.

### Flicks on Keys with Alternatives
On keys that support more than one letter family, such as a key that is primarily for the “ሰ” family, but also supports
“ሠ”, as a secondary entry (perhaps in combination with a `shift`, `alt`, or double-tap), the “north” flick should
be used to support the quick entry of these letters while *also* changeing to its letter-family layer to allow further
composition of the syllable.  Thus these keys will have both the south and north flicks defined.


### Flicks on Modifier Keys
South flicks on keys that act to change the displayed sylalble of a letter (for example, from “ል” to “ሌ”, should likewise
support the "General Rule" of south flicks and be used to input the displayed key without a layer change.  This
is done largely for consistancy, but is also helpful for composing words where some form of the base letter appears
twice (“ሌሊት”, “ሚሚ ”, etc.).


### Flicks on Control Keys
Control keys, and other “special” keys, that do not enter a letter directly, can be leveraged to help support the
return-to-start requirement. For example, this has been done with the GFF kebyoards on the `shift`, `globe`,
`punctuation-shift`, `spacebar`, `enter`, and `backspace` keys.  On these keys, the south flick will return the keyboard
to the starting layer with no additional action occuring.  The east and west keys also support this action on the
`spacebar` where its greater width makes the physical action more practical to execute correctly.

This utilization of the flicks on the special keys is considered experimental at this time and may be adjusted
following user feedback.


## Multitaps

### Multitaps on Regular Keys

### Multitaps on Keys with Alternatives

## Longresses
"No side effects"

### Longresses on Regular Keys

### Longresses on Keys with Alternatives

## Haptic
Thoughts on haptic feedback, mostly for errors or unavailable input keys?  It may not be applicable if the layer
is designed to avoid errors, etc.
