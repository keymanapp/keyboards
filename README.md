# Open Source Keyman keyboards

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

First, read the guide! <https://help.keyman.com/developer/keyboards/>

Keyman Developer 17.0+ is recommended to edit these files. <https://keyman.com/developer>

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

## Deprecated keyboards

If a keyboard has been replaced by another keyboard, include a DEPRECATED.md file in the folder referencing the
new keyboard name.

## Common links

* <https://help.keyman.com/developer/keyboards/>: Guide to working with this repository
* <https://help.keyman.com/keyboards/>: Published documentation for each keyboard
* <https://r.keymanweb.com/api/4.0/keyboards/>: JSON API for compiled keyboards available from Keyman Cloud


