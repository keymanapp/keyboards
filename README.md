# Open Source Keyman keyboards

## Contributing

First, read the guide! <https://help.keyman.com/developer/keyboards/>

Keyman Developer 9.0 or 10.0 is recommended to edit these files. <https://keyman.com/developer>
 
## Building Keyboards

### Prerequisites

Windows:
  * Git for Windows

Linux, macOS:
  * WINE

### Build instructions

build.sh can be used to build all the keyboards from the command line.

* On Windows, you will need to use Git Bash or Bash on Ubuntu on Windows to build. The Keyman Developer compiler
  is included in the `tools/` folder and so Keyman Developer is not required for builds.

* Common build.sh parameters:
    --help     List build.cmd parameters
    -s         Quieter build
    -c         Clean instead of build
    -d         Include debug information
    [target]   Specific folder to build

* Each keyboard also includes a project file which can be used to build the project - either from the command line 
  kmcomp compiler, or from the Keyman Developer IDE.

## Common links

   * <https://help.keyman.com/developer/keyboards/>: Guide to working with this repository 
   * <https://keyman.com/developer/keymanweb/keyboards.php>: Published documentation for each keyboard
   * <https://r.keymanweb.com/api/4.0/keyboards/>: JSON API for compiled keyboards available from Keyman Cloud
   * <https://help.keyman.com/developer/cloud/keyboard_info/>: Documentation on the .keyboard_info file format used in this repository
