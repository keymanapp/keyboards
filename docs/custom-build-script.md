
The following example shows how to create a minimal build script for a keyboard. 
If you don't need a custom build step, don't include a build script in the keyboard.

````bash
#!/bin/bash
echo A custom build.sh script for a release/ keyboard

. ../../../resources/util.sh

parse_args $@

local kpjs=(*.kpj)
local kpj=${kpjs[0]}

echo "$KMCOMP" -nologo $FLAG_SILENT $FLAG_CLEAN $FLAG_DEBUG "$kpj" $FLAG_TARGET "$PROJECT_TARGET" || die "Could not compile keyboard"
"$KMCOMP" -nologo $FLAG_SILENT $FLAG_CLEAN $FLAG_DEBUG "$kpj" $FLAG_TARGET "$PROJECT_TARGET" || die "Could not compile keyboard"
````
