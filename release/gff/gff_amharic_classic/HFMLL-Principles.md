# Principles for Hints, Flicks, and Multitaps, Longpresses, and Layer Shifting in Ethiopic Keyboards

## Preamble
This documentation of design “principles” started as personal notes to keep track of decisions
made for defining and interweaving the various entry types in some optimal fashion that minimizes
the typing effort while providing an intuitive experience when inputing Ethiopic script -which itself
has many inter-tangled historo-phonetic coorelations.

The number and complexitiy of these relationships can be difficult to recall between work sessions
that may be many months apart. Thus the motivation to record the rationale behind the decisions made.
In the hopes that these notes may benefit other people working on virtual keyboards for Ethiopic,
or wishing to understand why the Ge'ez Frontier Foundation mobile keyboards are they way they are,
the notes have been expanded and formalized to be (hopefully) comprehensible to persons other than
the author.

These principles have been developed after years of practical experience and user feedback.  All have
been refined over time and principles for some of the newer featueres (such as flicks) are likely to
mature in the years ahead.

## Introduction &amp; Assumptions
“Touch” keyboards found on mobile phones and tablets introduce a number of tactile features not possible with
traditional mechanical keyboards.  While touch keyboards inherit the simple *press-to-enter* approach of
their mechanical forebearers, which remains the primary means of character entry, they also support a
small number of finger contact and gesture types as secondary means of entry.

These new character entry capabilities include the:
  * “Longpress” – a key press of more than a ½ second that activates an array selection of “pop-up”
    keys that the user may tap for entry in place of the initially pressed key.
  * “Flick” – a quick swiping gesture across a key in one of 8 cardinal directions (e.g north, south, ..
    north-east, south-west, etc.), each of which may enter a different character.
  * “Multitap” – quick, repeated taps on a key. Successive tapping will change the entry character
    to a new one associated with the tap count.

Each of these secondary entry types may also change the keyboard “layer” (the layout of characters presented
on-screen to the user, e.g. lower vs UPPER cases).  When any of they entry methods *should* lead to a
layer change is a topic for investigation. An unexpected layer change may befudle users and impart a
subpar typing experience (usability). Layer changes that negatively impact productivity (as measured by
entry speed) similarly should be avoided.

The GFF Ethiopic keyboards have explored leveraging these touch entry features and their relationships
to layer changes in an effort to optimize both a natural and intuitive user experience along with
minimizing the physicial effort needed for the desired character composition and entry.



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
  * Design considerations are biased for right-handed typists, typing with a single finger.  Some rules
    might apply in the first for left-handed typists.

## Hints
Hints are a means of informing the typist of addition characters available from a given key. Accessing the associated
character will require another action such as: performing a longpress, a flick, or a layer change (often performed
with the `shift` key). Hints appear visually as one or more symbols appearing in the upper-right corner of a key cap,
with a subtle color hue change so as not to be distracting or taking attention way from the primary key cap letter.

By default, Keyman will present a dot symbol, ·, in the hint positing to signal that a longpress letter selection menu
is available. The developer may override the default and use another symbol that they think serves as a better
mnemonic.

In GFF keyboards hints are used to indicate the availability of an alternative letter from the same key. For example
“ሥ”  also available from the “ስ” key, and “ኅ” available from the “ህ” , etc.  Doing so aids the user user by informing him
or her that the letters can be input from the indicated key without having to hunt around for them.


### Hints on QWERTY Style Keyboards
When applying hints to a virtual keyboard that emulates a familiar layout from a hardware keyboard, such as QWERTY,
hints may beneficially apply the underlying key.

Employing underlying keys as hints provides a helpful cue that aids the user in anchorng their layout perception -a locational mnemonic.
Although the user is expected to be highly experienced with the layout, the hint serves as a visual “crutch” to help
overcome the phenomenon of “screen blindness” and minor disorientation with the mobile platform.

The GFF Keyboards will apply the underlying key as the hint in a QWERTY based layout. Additionally, the associated uppercase
and alternative letter is also indicated in the hint. For example “ጥ”, typed with uppercase “T” will be the hint on the 
“ት” key. Similarly, “ቕ” becomes the hint on the “ቅ” key. Phonetic alternative letters (e.g. “ኅ”, “ሥ”,  “ፅ” ) will also 
appear in the hint position so the  user is aware that the letters can be input from the indicated key without having to hunt around
for them (often with a double-strike or longpress).  Applying both the underlying key and the associated  letter presents a
“crowding” in the space above the key cap letter, and may even overlap with it.  For this reason, not more than 2 characters
are applied in the hint.  Thus, “ሕ ” and “ጽ”, both entered with a `shift`, do not appear in the hint on their respective keys,
“ህ” and “ስ” respectively. If all associated letters were applied in the hint, the hint for “ህ” would become “ሕኅH” and for “ስ” 
would be the even mroe extreme “ፅጽሥS”. Once in the shifted state, the “ጽ” can be more practically hinted with “ፅS”.

**Note:** Keyman mobile keyboards provide the option to display the underlying keys in the top-left corner of a keycap. 
This is helpful in that it reduces the labor needed to populate the same letters as hints. The underlying key appearing
in the opposite-side corner from the hint, has the benefit of alleviating the crowding problem that occurs when a 
hint and underlying key appear in the same corner.

However, in some cases the
underlying key shown may be misleading or undesireable. For example, a key for “?” may be defined with the mapping
SHIFT + K\_SLASH , and a slash “/” will appear as the underlying key. This seems unnatural or  ...
[Can be worked around by using U\_003F as an ID instead which will not receive the underlying key.]

On some layers, such as for punctuation, native keys might be mixed with punctuation that does not have a corresponding
underying key. This presents an optically uneven/unbalanced layout when the upper-right corner is populated sporadically.
The underlying keys are associated with key codes that have their origins in hardware keyboards. When a key is not in its
familiar hardware location, the presence of the underlying key can be disorienting.

For the above reasons, it would be desirable to disable the underlying key appearance on a per-layer, and even per-key
basis.  Alternatively, the keyboard developer could be granted access to position secondary hints in the top-left key
cap location. [suggest in a ticket]


[Add a screenshot to illustrate the issue]


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

#### Lateral Flicks (Experimental)
On regular keys for letters, flicking to produce the next most frequent letters can be applied. Tried experimentally
on GFF keyboards, an East flick enters the first-order character (e.g. “ለ”, while a west-flick enters the 4th order
(e.g “ላ”) as these are the two most frequenlty occuring Amaharic letters after the sixth order.

The assumption is made here that East flick is an easier (lower strain) finger motion than a West flick.  A keyboard
designed for left handed person should reverse these mappings.


### Flicks on Keys with Alternatives
On keys that support more than one letter family, such as a key that is primarily for the “ሰ” family, but also supports
“ሠ”, as a secondary entry (perhaps in combination with a `shift`, `alt`, or double-tap), the “north” flick should
be used to support the quick entry of these letters while *also* changeing to its letter-family layer to allow further
composition of the syllable.  Thus these keys will have both the south and north flicks defined.

In our example, the “ስ” key will display “ሥ” as a hint and will provide “ስ” as the south-flick, and “ሥ” as the
north-flick which will also change the layout to the “ሠ-layer” to suport further compoistion of "ሥ”.

### Flicks on Modifier Keys
South flicks on keys that act to change the displayed sylalble of a letter (for example, from “ል” to “ሌ”, should likewise
support the "General Rule" of south flicks and be used to input the displayed key without a layer change.  This
is done largely for consistancy, but is also helpful for composing words where some form of the base letter appears
twice (“ሌሊት”, “ሚሚ ”, etc.).

### Flicks on Control Keys (Return-Flicks)
Control keys, and other “special” keys, that do not enter a letter directly, can be leveraged to help support the
return-to-start requirement. For example, this has been done with the GFF kebyoards on the `shift`, `globe`,
`punctuation-shift`, `spacebar`, `enter`, and `backspace` keys.  On these keys, the south flick will return the keyboard
to the starting layer with no additional action occuring.  The east and west keys also support this action on the
`spacebar` where its greater width makes the physical action more practical to execute correctly.

This utilization of the flicks on the special keys is considered experimental at this time and may be adjusted
following user feedback.


## Multitaps
“Multitaps” leverage a leverage simple repeated action, finger “tapping”, to input an associated character.
In GFF keyboards, multitaps are used to fascilitate faster input of frequent letters and avoid an action
requiring more time to perform, such as a longpress or layer change. The same policy is applied to multitaps
as with flick actions, that no visual or state-changing side effects occur.

### Multitaps on Regular Keys
On regular keys, that are *not* associated with an alternative letter (e.g. “ለ”, “መ ”, “ረ”, “በ”, etc.),
a single multitap is defined to enter the first-order syllable of the primary key (which is sixth-order
letter on most GFF keyboards).  Thus from the “ል” key, “ለ” can be entered with a double-tap action.
The first-order letter is chosen under productivity and fatigue minimization rationale. In Amharic, and
other Ethio-Semitic languages, the first-order letter is the next most frequently occuring letter after
the sixth-order.

### Multitaps on Keys with Alternatives
When an alterantive key is associated with a primary key, it's first-order can be entered via an additional tap.

For example, the “ስ” key will display “ሥ” as a hint and will provide “ሰ” as the double-tap, and “ሠ” as the triple-tap.
Unlike the related flick action, no layer change occurs for after “ሠ ” is entered via the triple-tap since no
further composition of “ሠ ” will be possible. The related north-flick should be used if the typist does wish
to enter into “ሥ” syllabic composition.

## Longresses
A “longpress” on a Keyman touch keyboard will present a pop-up array of available letters or other symbols that
the user may select for entry in place of the letter on the key that has been pressed. Selecting a letter in this
way may be preferable and labor saving to some users over changing layers to locate, compose, and enter the same
characters.

GFF keyboards apply the identical policy that governs entry by flicks. Layer changes do not occur when a longpress is
used *except* in a few cases where further composition remains possible. The regular usage and exceptional cases will be
discussed in the following.

### Longresses on Regular Keys
On regular keys, of letters having 7 or 8 family members, the longpress menu should present all family members,
as used by the target language of the keyboad, save for the 6th order letter which appears on they key itself
and is available by a simple press. The letters should appear in-order so as to make them easy to locate and
select.  

The first order letter is a sensible longress default opion as it is the most frequently used. However, since the
1st and 4th order may also be available using flicks or multitaps, another default key can be set to the 4th must
frequently occuring letter in the target language.

### Longresses on Keys with Alternatives
When a key also supports an alterative entry letter, such as “ሥ” on the “ስ” key, the family members of alternative 
letter should also be made available from the longpress pop-up menu. Ideally, the two letter families will appear
on separate rows, where the primary letter family will reside on the lower row, and the alternatives on an upper
(further to reach) row.

Unlike the regular keys, the longpress menu must present the 6th order family member of alternative letter which is
otherwise unavailable. Doing so creates unbalanced rows, where an upper row may have 8 cells and the lower row 7.
In this scenario, the 6th order letter of the primary family should also be made available to balance the rows
and help maintain the separation of letter families across the two rows.  The 6th order letter of the primary 
family may be set as the default selection which offers a neutral starting point for selecting the desired letter
from the pop-up offerings.

[screenshot example]

When a key spports an alternative entry letter, and the primary letter is in 12 member family, the longpress sould 
present the 6 basic family members on the first row (sans the 6th order) and the 5 extended members on the upper
row (lesser used and so may be more distant), along with the 6th order alternative letter as the final (left-to-right
ordering) entry on the upper row.  Selecting the alternative member from the longpress should also change to its
respective layer.

[screenshot example]

### Longress on Returning vs Non-Returning Layered Composition Approaches

When a layer is used for letter composition (e.g. the “ለ” layer provides composition further composition to
form its family members “ሉ”, “ሊ”, “ላ”, “ሌ”, “ል”, “ሎ”, and “ሏ”) the keyboard designer must decide between
one of two follow up actions at the completion of composition.  Once the family member is fully composed, the
keyboard may then remain on the same layer, or return to the default layer.

Remaining on the same layer is sensible to help minimize the composition effort when a word contains members of
a letter family occuring in succession (e.g. “ሌሊት”, “ሚሚ ”, etc. as referenced earlier), and eliminates
a keypress.  On the other hand, returning to the default layout following composition may be a more user friendly
approach preferred by some users. In the later case, the longpress pop-ups are less likely to be utilized and
need not be provided on the composition layers -the user has already opted for the layered base composition
pathway over the use of longpresses for the initial letter of the word and will most likely fully compose
the word under the same approach..

In this later case, an argument could be made that *only* the keys used to compose a letter need be provided on
the composition layer.  However, the GFF keyboards do provide all of the same letters from the default layer
to help maintain visual continuity on screen, as well as to support the very frequent occurence of consonant
clusters found in Amharic and related languages.  “ትምህርት”, for example can thusly be composed with 5 keypresses
instead of 10 that would otherwise be necessary.

## Haptic
Thoughts on haptic feedback, mostly for errors or unavailable input keys?  It may not be applicable if the layer
is designed to avoid errors, etc.
