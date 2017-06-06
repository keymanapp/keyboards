keyboards
=========

Open Source Keyman keyboards
----------------------------

First, read the guide! <http://help.keyman.com/developer/keyboards/>

 * Keyman Developer 9.0 is required to edit these files. <http://keyman.com/developer>
 
 * build.cmd in each folder can be run to build keyboards; optional parameters include:
    --help   List build.cmd parameters
    -s       Silent build
    -c       Clean instead of build
    -d       Include debug information
    [target] Specific file or project to build
    
 * Each keyboard has a project file which can be used to build the project - either from the command line kmcomp compiler,
   or from the Keyman Developer IDE.
   
 * packages folder: contains Keyman Package files that are a set of keyboard files for simplicity of deployment.

 * template folder: contains a bare-bones structure for each keyboard, including build.cmd. Avoid modifying build.cmd.
 
 * Common links: 
   * <http://help.keyman.com/developer/keyboards/>: Guide to working with this repository 
   * <http://keyman.com/developer/keymanweb/keyboards.php>: Published documentation for each keyboard
   * <https://r.keymanweb.com/api/4.0/keyboards/>: JSON API for compiled keyboards available from Keyman Cloud
