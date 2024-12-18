LDML Test keyboard
==============

Description
-----------
Test Keyboard for LDML


Trying it Out
-------------

This section describes how to test the keyboard. For example, typing <kbd>1</kbd> will produce `1:basic:OK`. Following these steps in order will make sure the keyboard (and the implementation) is working properly.

Each of the steps produces output ending in `:OK`.  You can press <kbd>enter</kbd> in between steps to put the output on separate lines.

### Direct key output

1. Press: <kbd>1</kbd>
2. Check: `1:basic:OK`

### A simple transform

1. Press: <kbd>2</kbd>
2. Check: `2:simple_transform:OK`

### Marker transform

1. Press: <kbd>3</kbd>
2. Check: `3:simple_marker:OK`

### Simple reorder

1. Press: <kbd>4</kbd>
2. Check: `4:simple_reorder:OK`

### Variable substitution

1. Press: <kbd>5</kbd>
2. Check: `5:simple_vars:OK`

### Mapped variable substitution

1. Press: <kbd>6</kbd>
2. Check: `6:map_var:OK`

### Uset subtitution

1. Press: <kbd>7</kbd>
2. Check: `7:simple_uset:OK`

### Context

1. Type or paste in: `ABC` and position the cursor after that text
2. Type: <kbd>8</kbd>
3. Check: `8:ctxt:OK`

### Non-BMP Context

1. Paste in: `𐓏` and position the cursor after that text
2. Type: <kbd>8</kbd>
3. Check: `8:ctxt:OK`

### Two-part Non-BMP Context

1. Paste in: `𐒻` and position the cursor after that text
2. Type: <kbd>Shift</kbd><kbd>8</kbd>
3. Type: <kbd>8</kbd>
4. Check: `8:ctxt:OK`

### Two-part Marker Test

1. Type: <kbd>9</kbd> (you will see FAIL temporarily, but continue to the next step)
2. Type: <kbd>Shift</kbd><kbd>9</kbd>
3. Check: `9:split_marker:OK`


Links
-----
Keyboard Homepage: https://keyman.com/keyboards/ldml_test

Copyright
---------
See [LICENSE.md](LICENSE.md)

Supported Platforms
-------------------
 * Windows
 * macOS
 * Linux
 * Web
 * iPhone
 * iPad
 * Android phone
 * Android tablet
 * Mobile devices
 * Desktop devices
 * Tablet devices

