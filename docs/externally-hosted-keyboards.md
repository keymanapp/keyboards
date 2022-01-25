# Externally hosted keyboards

Keyboards may be hosted in three different ways:

1. Within this repository.
2. Within another repository, hosted on github.com
3. As compiled files only, hosted on any web server

The presence of the file `external_source` in a keyboard folder in the
repository determines the hosting location of the keyboard.

If the file `external_source` is present, only three files are permitted in the
folder:

* `external_source`: instructions on where to find the keyboard files
* `README_EXTERNAL.md`: brief description of the keyboard for repository
  browsers
* `.gitignore`: a template file setup to ignore all files apart from these three
  in the folder. This file will be rewritten by the build if it does not match:

  ```
  # Only specific files may be added to repository for external references
  *
  !external_source
  !README_EXTERNAL.md
  !.gitignore
  ```

## Within this repository

This is documented on https://help.keyman.com/developer/. The file
`external_source` must not exist in the keyboard folder.

## Within another repository

The file `external_source` must contain a single line, with a reference to a
specific tree commit in a repository on github.com, for example:

```
https://github.com/mcdurdin/external_experiment_1/tree/0619c3a12a0d48b3ead3d02e9a5b15b325213fcd
```

It is also possible to point to a specific folder within a repository as well,
allowing for hosting of multiple keyboards within a single repository, for example:

```
https://github.com/mcdurdin/external_experiment_2/tree/ade06704300fe7a1fdd40e101c415f23dabc6839/e/external_experiment_2
```

Keyboards referenced in this model must still conform to the requirements for
all keyboards hosted in this repository, including using the MIT license,
matching the specified file layout, and containing all the required metadata as
documented at https://help.keyman.com/developer/keyboards/.

Publishing an update to a keyboard will generate a new git sha hash, which will
necessitate an update to the `external_source` file.

## As compiled files with URL references

This repository supports sourcing compiled keyboard files from an arbitrary web
server. However, the repository maintainers can only accept compiled keyboard
files when SIL has a current contractual agreement with the supplier of the
keyboard files that covers this usage. Under normal circumstances, you should
host keyboard source files either here or within another public repository on
github.com.


The file `external_source` must contain one line for each file to be downloaded,
in a `file url sha256` format. For example:

```
external_experiment_3.keyboard_info https://github.com/mcdurdin/external_experiment_3/releases/download/1.0/external_experiment_3.keyboard_info 191278d97d00fa8511de58464c1a02c70176794762c62fbe3bbb79d28f2821d8
source/external_experiment_3.kmp https://github.com/mcdurdin/external_experiment_3/releases/download/1.0/external_experiment_3.kmp 73695bf67e1a000b7681515a70fe6ef40c6896dc271dc34f2de78c8f72dfc834
```

The two required files are `<keyboard>.keyboard_info` and `source/<keyboard>.kmp`.

The `.keyboard_info` file must contain all metadata that cannot be easily
determined from the compiled files. See keyboards in the legacy/ folder for
examples.

# Compiling externally hosted keyboards

The build script will automatically download keyboard source and/or compiled files
once it finds the `external_source` file. If the folder contains files other than
the three permitted files listed above, the build will fail.

This would download the source repository for external_experiment_1 and build the
keyboard:

```
./build.sh experimental/e/external_experiment_1
```

Following a build, the folder will contain additional files in the folder which
must be removed before you can run the build again by running with the `-c`
parameter to clean the folder:

```
./build.sh -c experimental/e/external_experiment_1
```

Otherwise, the build will abort when any additional files are present, to avoid
accidental overwriting of data.

The file `.source_is_binary` will be created in (or deleted from) the keyboard
folder during the build if the external keyboard source is a binary file. This
file should not be created by the user, nor should it be committed to the
repository.
