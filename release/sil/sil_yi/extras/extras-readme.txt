Files in "extras" folder

ii-mobile.ods - LibreOffice Calc spreadsheet with touch layout for sil_yi keyboard. Range A4:M232 copied and pasted into yi.csv
yi.csv - input to Python script tsv-ktl.py
tsv-ktl.py - Python script that reads yi.csv and creates JSON output in yi.txt
yi.txt - output from Python script tsv-ktl.py, to be pasted into sil_yi.keyman-touch-layout
num_rad_layers.txt - contains JSON text for numeric and radicals layers, to be pasted into sil_yi.keyman-touch-layout

To construct sil_yi.keyman-touch-layout assemble the following text and file contents:

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
