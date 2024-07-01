# Open Source Keyman keyboards

## Table of Contents
- [File Layout](#file-layout)
- [Contributing](#contributing)
  - [Tool](#tool)
  - [Standard keyboard design](#standard-keyboard-design)
  - [Keyboard submission guidelines](#keyboard-submission-guidelines)
  - [Publish your keyboard](#publish-your-keyboard)
  - [Modify a keyboard layout](#modify-a-keyboard)
  - [Documentation](#documentation)
- [Building Keyboards](#building-keyboards)
  - [Prerequisites](#prerequisites)
  - [Build instructions](#build-instructions)
  - [Common `build.sh` parameters](#common-buildsh-parameters)
- [Deprecated Keyboards](#deprecated-keyboards)
- [Common Links](#common-links)
- [Community](#community)

## File Layout

Keyboards are grouped into three folders:

  * `release` - keyboards with full source that pass our stringent quality
    checks, Unicode only, generally no PUA
  * `legacy` - binary distributions of keyboards, migrated from Tavultesoft
    servers, Unicode and non-Unicode
  * `experimental` - keyboards that have not yet passed the quality check,
    available from the 'experimental' category in Keyman apps with Keyman 10 and
    later. Unicode only, but PUA is acceptable.

Within each of the folders, keyboards are further grouped by first letter or by
prefix, where multiple keyboards share the same prefix indicating provenance,
for example `sil` or `gff`.

## Contributing

### Tool

Get the latest version of [Keyman Developer](https://keyman.com/developer) to start the journey of keyboard development.

### Standard keyboard design

A good way to start creating a keyboard is to plan out the requirements of the keyboard ahead and decide on the keyboard's language, target users, usability, structure, and many more steps that can be carried out further along the process. To ensure that the keyboard is up to standard, start by implementing the D.I.S.C.U.S. method. Find out [more](https://help.keyman.com/developer/keyboards/standard/)!

### Keyboard submission guidelines

Please make sure the keyboard and the package compile successfully before making a keyboard submission. If there are warning messages, try to address all of them; if there are errors, those must be corrected before submission. Help on this: [Compiler Messages](https://help.keyman.com/developer/current-version/reference/messages/)

### Publish your keyboard

When a keyboard is ready to submit, please confirm that the folders and files are consistent to the repository. For more clarification: 

- [Folder and File layout](https://help.keyman.com/developer/current-version/reference/file-layout)
- [File types](https://help.keyman.com/developer/current-version/reference/file-types/)

After two to three rounds of confirmation and testing, you are welcome to create a Pull Request

- [GitHub Keyboard Submission Guide](https://help.keyman.com/developer/keyboards/github/)

### Modify a keyboard

To update a keyboard in this repository, follow these steps:

1. Create a fork from this repository (Update your fork of the keyboards repository if you already have one)
  - The Fork button is located near the top of the repository, then follow the instructions [here](https://help.keyman.com/developer/keyboards/advanced/), and come back.
  - Update the forked repository [here](https://help.keyman.com/developer/keyboards/github/step-3#toc-updating-your-fork), and proceed to the next step.

2. Download a copy of the latest files that are in your forked repository as a ZIP file.
  - Go to `https://github.com/[YourGitHubName]/keyboards/` (after replacing `[YourGitHubName]` with your actual GitHub name)
  - Navigate to the keyboard, for example, to “release”, then “a”, then “ausephon”
  - At that point, the browser URL will be something like: `https://github.com/[YourGitHubName]/keyboards/tree/master/release/a/ausephon`
  - Copy the URL
  - Go to: <https://download-directory.github.io/>
  - Paste the URL into the field and press Enter
  - The files for the keyboard are zipped up and offers for download as: `keymanapp keyboards master release-a_ausephon.zip`
  - Rename the file to `ausephon.zip` and save (Or save first, then rename).
  - Unzip `ausephon.zip` to get the keyboard project folder ausephon with all of its files and subfolders.

3. Update the keyboard files on your computer with Keyman Developer and/or a text editor
  - Double-click on the `ausephon.kpj` (Keyman project file) in the ausephon folder to launch Keyman Developer
  - Make your changes
  - Build and test the keyboard, then build the package
  - When everything is working and complete, include the changes to the HISTORY.md file and, if necessary, to the LICENSE.md file.
  - Almost there, but first, delete the build folder and the files in it
  - Also delete the .kpj.user <b>(but don’t delete the .kpj file!)</b>.

4. Submit your updates as a new pull request
  - Go back to GitHub
  - Create a new branch (from master) with a short name to represent the pull request. For example, ausephon-updates...
  - Navigate to the target folder location (click on release, then on a, and you’ll see the ausephon folder)
  - Click on “Add file”, then “Upload files”
  - Drag the “ausephon” folder from your Windows Explorer window, and drop it on the GitHub window
  - Follow the steps to create a pull request, although the commit message will be something like `[ausephon] updated keyboard`

### Include font files

If the fonts are used in multiple keyboards, the font files must be placed under the `shared folder`. Follow through this [documentation](https://help.keyman.com/developer/keyboards/github/step-2#toc-including-fonts-in-your-keyboard-package). However, if you are editing the keyboard package within the folders of the forked repository (skip step 2 above) only specifying the exisiting shared-font location in the package is neccesarily.
  
### Documentation

If the guides are not enough to provide you with a complete keyboard, don't be afraid to explore the main keyboard and keyman developer help pages! 

- [Keyboard helps](https://help.keyman.com/developer/keyboards/)
- [Keyman Developer helps](https://help.keyman.com/developer/current-version/)

## Building Keyboards

### Prerequisites

Windows:
  * Git for Windows (or MinGW)
  * You will need to use **Git Bash** or equivalent to build (not tested with
    Cygwin), not Windows Command Prompt or PowerShell.
  * You can also use **WSL2** (Bash on Ubuntu on Windows). Beware of line-ending
    changes if mixing Windows and WSL usage.
  * Node.js 18.0

Linux:
  * Node.js 18.0
  * bash 5.0 (standard now on most distributions)

macOS:
  * bash 5.0 (`brew install bash`)
  * coreutils (`brew install coreutils`)
  * Node.js 18.0 (`brew install node`)
  * Ensure coreutils is on the PATH: `export PATH="$HOMEBREW_PREFIX/opt/coreutils/libexec/gnubin:$PATH"`

### Build instructions

`./build.sh` can be used to build all the keyboards from the command line.

* `kmc`, the Keyman Developer compiler, is installed as a Node.js module, and so
  Keyman Developer is not required for builds.

#### Common `build.sh` parameters

```
Summary:
  Build Keyman keyboards

Script Identifier:
  /c/Projects/keyman/keyboards

Usage:
  build.sh [options...] [action][:target]...

Actions:
  clean                      remove build/ folder and build artifacts
  configure                  install dependencies, e.g. npm
  build                      build target(s)
  test                       run automated tests

Targets:
  :project                   this project

Options:
  --silent, -s               Suppress unnecessary messages
  --keyboard, -k KEYBOARD    Build specific targets only, e.g. release/ or release/a/ or release/a/anii/, comma separated
  --verbose, -v              Verbose logging
  --debug, -d                Debug build
  --color                    Force colorized output
  --no-color                 Never use colorized output
  --help, -h                 Show this help

Dependencies:
  This module has no dependencies

* Specify action:target to run a specific action against a specific :target.
* If action is specified without a target suffix, it will be applied to all :targets.
* If :target is specified without an action prefix, build:target will be inferred.
* If no action, :target, or action:target entries are specified, build will run on all :targets.
```

* Each keyboard also includes a project file which can be used to build the project - either from the command line
  kmc compiler, or from the Keyman Developer IDE.

## Deprecated Keyboards

If a keyboard has been replaced by another keyboard, include a DEPRECATED.md file in the folder referencing the new keyboard name.

## Common Links

* <https://help.keyman.com/developer/keyboards/>: Guide to working with this repository
* <https://help.keyman.com/keyboards/>: Published documentation for each keyboard
* <https://r.keymanweb.com/api/4.0/keyboards/>: JSON API for compiled keyboards available from Keyman Cloud

## Community

We appreciate the effort of reaching out about any issue or suggestion that is beneficial for the community. Share with us on our [community site](https://community.software.sil.org/new-message?groupname=keyman).
