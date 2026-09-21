Medžuslovjansky (latinica) Change History
====================

1.6 (2026-08-17)
----------------
* On-Screen Keyboard filled in: the underlying US layout on the base and shift
  layers plus this keyboard's AltGr cells, so an OSK user can see that č is
  AltGr+C. It was an empty stub before, and rendered blank.
* Online help added (source/help/isv_latin.php).
* &TARGETS is now 'any' instead of a hand-written list of every platform.
* The touch layout ships the phone form only. The tablet form was byte-identical
  to it; Keyman uses the phone form on tablets when no tablet form is present.

1.5 (2026-08-09)
----------------
* Flick gestures on č š ž ě extended to all eight directions. Restricting them
  to north-east still lost any swipe that drifted low or left.

1.3 (2026-08-08)
----------------
* Flick gestures added to č š ž ě, alongside longpress. A flick cannot be
  mistaken for a tap, so it does not depend on release timing.

1.2 (2026-08-08)
----------------
* Fixed uppercase longpress: a subkey on the shift layer fires with the shift
  modifier held, so the touch keys needed explicit [SHIFT T_*] rules. Before
  this, holding a capital letter emitted nothing.

1.0 (2026-08-08)
----------------
* Created by Radoslove
