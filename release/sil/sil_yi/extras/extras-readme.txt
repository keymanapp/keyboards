Files in "extras" folder

ii-mobile.ods - LibreOffice Calc spreadsheet with touch layout for sil_yi keyboard. Range A4:M232 copied and pasted into yi.csv
yi.csv - input to Python script tsv-ktl.py
tsv-ktl.py - Python script that reads yi.csv and creates JSON output in yi.txt (run as: python tsv-ktl.py in folder where yi.csv is located; creates yi.txt)
yi.txt - output from Python script tsv-ktl.py, to be pasted into sil_yi.keyman-touch-layout
num_rad_layers.txt - contains JSON text for numeric and radicals layers, to be pasted into sil_yi.keyman-touch-layout


(A) To construct sil_yi.keyman-touch-layout assemble the following text and file contents:

---
{
  "tablet": {
    "font": "Noto Sans Yi",
---
[Contents of yi.txt omitting the first line (containing "{") and omitting the end of the file from the line before "id": "numeric" to the end]
---
[Contents of num_rad_layers.txt]
---

Paste result into https://jsonformatter.org/ (or equivalent) to validate and reformat. Result becomes sil_yi.keyman-touch-layout.


(B) To copy changes made in sil_yi/source/welcome.htm to sil_yi/source/help/sil_yi.php

Note: When making changes to welcome.htm and sil_yi.php, it is recommended to use a text editor to avoid changing the HTML/CSS.

From the welcome.htm file, copy the contents of the <style> element (that is, the lines between the <style> and </style> tags, excluding the tags themselves)
and paste it into the sil_yi.php file, replacing the lines between the "$pagestyle = <<<END" line and the "END;" line.
This copies the document style information.

From the welcome.htm file, copy the contents of the <body> element (that is, the lines betweeen the <body> and </body> tags, excluding the tags themselves)
and past it into the sil_yi.php file, replacing the lines after the "?>" line to the end of the sil_yi.php file.
This copies the document content information.
