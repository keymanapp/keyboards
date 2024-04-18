Dakelh keyboard
======================

Dakelh keyboard layout for Unicode

Links
-----

 * Home:     <https://www.firstvoices.com>
 * Deployed: <https://keyman.com/keyboards/fv_dakelh>
 * Help:     <http://help.keyman.com/keyboard/fv_dakelh>
 
Supported Platforms
-------------------

 * Windows
 * macOS
 * Linux
 * Web
 * Mobile

TODO
----
From PR 927 comments:

Minor concerns with touch layout:
- Default layer: type t then _ (top row, leftmost key): I'd expect an underlined t, but the keyboard actually gives an underlined ts. Maybe this is intentional?
- Shift layer: After typing a key on the shift layer, the user is returned to the default layer, except when typing a longpress key, which leaves the user on the shift layer. Seems inconsistent.
- Shift layer: Some longpress keys are not producing what the key shows, for example, on the T key:
  - underlined Ts produces underlined ts
  - underlined TS produces underlined t
  - underlined T produces nothing

