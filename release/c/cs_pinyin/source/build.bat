@echo off

if "%1" == "--debug" (
  set CONFIG=Debug
) else (
  set CONFIG=Release
)

msbuild keymanimx/KeymanIMX.vcxproj /p:Platform=Win32 /p:Configuration=%CONFIG%
msbuild keymanimx/KeymanIMX.vcxproj /p:Platform=x64 /p:Configuration=%CONFIG%
msbuild imxconfig/imxconfig.vcxproj /p:Platform=Win32 /p:Configuration=%CONFIG%
msbuild imxreload/imxreload.vcxproj /p:Platform=Win32 /p:Configuration=%CONFIG%
copy ..\build\KeymanIMX\Win32\%CONFIG%\KeymnIMX.dll ..\source
copy ..\build\KeymanIMX\x64\%CONFIG%\KeymnIMX.x64.dll ..\source
copy ..\build\imxconfig\Win32\%CONFIG%\imxconfig.exe ..\source
