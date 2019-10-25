# How the Repository is Organized

Keyboards are grouped into three folders: release, experimental and legacy.

The `release` section of the repository (contained in the "release" folder) contains keyboards that have complete source files and documentation.

The `experimental` section of the repository (in the "experimental" folder) contains keyboards that are under active development, but don't yet have all the files necessary for release, or are being tested by user community members before finalizing the design. 

The `legacy` section of the repository (in the "legacy" folder) contains older keyboards that are functional, but don't contain complete source and documentation.

Within each section of the repository, there is a level of subfolders that serve to group the keyboards so that it isn't necessary to scroll through hundreds of entries to find a particular keyboard. Most of these subfolders are single alphabetic characters, and each folder contains the keyboards that start with that letter. In addition, there are some folders (`fv` and `gff`, for example) that correspond to organizations which have contributed a number of keyboards.

# More details on the experimental folder

Only Unicode keyboards are allowed.

You may need to create a subfolder for your keyboard if one doesn't exist. For example, if your keyboard is named `xyz`, you may need to create a folder `x` under `experimental` in which to place the `xyz` folder containing your keyboard project, so that you have the proper folder structure: `experimental/x/xyz`.

This `experimental/` folder is for keyboards that are under active development, but don't yet have all the files necessary for release, or are being tested by user community members before finalizing the design.

See https://help.keyman.com/developer/keyboards/
