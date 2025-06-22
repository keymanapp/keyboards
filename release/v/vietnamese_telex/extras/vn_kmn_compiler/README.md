# vn_kmn_compiler
Keyman keyboard .kmn generator for Vietnamese keyboards

## How to use:

Replace `%keyboard_name%` with one of the available keyboards in this project. Use `ls ./keyboard` (Unix/Linux/MacOS) or `dir .\keyboard` (Windows) to list available keyboards

- Run `python ./keyboard/%keyboard_name%/compile.py` to generate Keyman keyboard source code (.kmn) for the respective keyboard.
- Output is located in `./keyboard/%keyboard_name%/compiled/out.kmn`. This folder might need to be created if it does not already exist: `mkdir ./keyboard/%keyboard_name%/compiled`.

## Data sources:
- List of all vietnamese syllables (content of `latin-quoc-ngu-syllables.txt`, `nucleus_tones_table.png`, and `rimes_construction_table.png`): [All syllables in Vietnamese language, Luong Hieu Thi, 21 Mar 2017](https://www.hieuthi.com/blog/2017/03/21/all-vietnamese-syllables.html)
