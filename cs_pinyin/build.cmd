@echo off

rem !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
rem This script diverges from the standard build.cmd because
rem it also can build the DLL files used for the project.
rem
rem See the help for the script for additional parameters
rem relating to this.
rem !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

setlocal

if "%KeymanDeveloperPath%"=="" goto err_env
if "%1"=="-?" goto help
if "%1"=="/?" goto help
if /i "%1" EQU "-h" goto help
if /i "%1" EQU "/h" goto help
if /i "%1" EQU "--help" goto help
if "%1"=="/?" goto help

rem ###########################################
rem Locate the project based on the path name
rem ###########################################

if "%1"=="-p" goto prebuild

set kpj=%~dp0
set kpj=%kpj:~0,-1%
call %0 -p %kpj% %*
exit /b %errorlevel%

:prebuild
shift
set kpj=%~n1.kpj
shift

rem ###########################################
rem Check environment and parameters
rem ###########################################

set silent=
set targetflag=
set target=
set debug=-w
set clean=

set dllbuild=default

:params

if "%1"=="" goto build

if "%1"=="-s" (
  set silent=-s
  shift
  goto params
)

if "%1"=="-c" (
  set clean=-c
  shift
  goto params
)

if "%1"=="-d" (
  set debug=-d
  shift
  goto params
)

if "%1"=="-dll" (
  set dllbuild=%2
  shift
  shift
  goto params
)

if not "%1"=="" (
  set targetflag=-t
  set target=%1
  rem no additional params after target
)

rem ###########################################
rem Build
rem ###########################################

:build

rem -------------------------------------------
rem Building C++ projects
rem -------------------------------------------

if "%dllbuild%" == "never" goto dll_copy
if "%dllbuild%" == "always" goto dll_build

rem Test for existence of msbuild.exe and cl.exe

call :dll_test_where msbuild.exe
if errorlevel 2 exit /b %errorlevel%
if errorlevel 1 goto dll_copy

call :dll_test_where cl.exe
if errorlevel 2 exit /b %errorlevel%
if errorlevel 1 goto dll_copy

goto dll_build

:dll_test_where

if not "%silent%" == "-s" echo Testing for %1

where /q %1
if errorlevel 2 echo Fatal error calling `where /q %1` && goto :eof
if errorlevel 1 if not "%silent%" == "-s" echo %1 not found
goto :eof

:dll_build

if not "%silent%" == "-s" echo Building imxconfig, imxreload and keymnimx

if not exist build mkdir build

msbuild /p:Configuration=Release source\imxconfig\imxconfig.vcxproj /p:Platform=Win32
if errorlevel 1 exit /b 4
copy build\imxconfig\win32\release\imxconfig.exe build\imxconfig.exe
if errorlevel 1 exit /b 4
if defined codesigntool %codesigntool% build\imxconfig.exe
if errorlevel 1 exit /b 4

msbuild /p:Configuration=Release source\imxreload\imxreload.vcxproj /p:Platform=Win32
if errorlevel 1 exit /b 5
copy build\imxreload\win32\release\imxreload.exe build\imxreload.exe
if errorlevel 1 exit /b 5
if defined codesigntool %codesigntool% build\imxreload.exe
if errorlevel 1 exit /b 5

msbuild /p:Configuration=Release source\keymanimx\keymanimx.vcxproj /p:Platform=x64
if errorlevel 1 exit /b 6
msbuild /p:Configuration=Release source\keymanimx\keymanimx.vcxproj /p:Platform=Win32
if errorlevel 1 exit /b 6
copy build\keymanimx\win32\release\keymnimx.dll build\keymnimx.dll
if errorlevel 1 exit /b 6
copy build\keymanimx\x64\release\keymnimx.x64.dll build\keymnimx.x64.dll
if errorlevel 1 exit /b 6
if defined codesigntool %codesigntool% build\keymnimx.dll
if errorlevel 1 exit /b 6
if defined codesigntool %codesigntool% build\keymnimx.x64.dll
if errorlevel 1 exit /b 6

goto kmp_build

:dll_copy

if not "%silent%" == "-s" echo Copying static imxconfig, imxreload and keymnimx

copy source\static\imxconfig.exe.bin build\imxconfig.exe
if errorlevel 1 echo "Failed: copy source\static\imxconfig.exe.bin build\imxconfig.exe" && exit /b 7
copy source\static\imxreload.exe.bin build\imxreload.exe
if errorlevel 1 echo "Failed: copy source\static\imxreload.exe.bin build\imxreload.exe" && exit /b 7
copy source\static\keymnimx.dll.bin build\keymnimx.dll
if errorlevel 1 echo "Failed: copy source\static\keymnimx.dll.bin build\keymnimx.dll" && exit /b 7
copy source\static\keymnimx.x64.dll.bin build\keymnimx.x64.dll
if errorlevel 1 echo "Failed: copy source\static\keymnimx.x64.dll.bin build\keymnimx.x64.dll" && exit /b 7
goto kmp_build

rem -------------------------------------------
rem Building KPJ project
rem -------------------------------------------

:kmp_build

if not "%silent%" == "-s" (
  if "%target%" == ""  (
    if "%clean%" == "-c" (echo Cleaning %kpj%...) else (echo Building %kpj%...)
  ) else (
    if "%clean%" == "-c" (echo Cleaning %target%...) else (echo Building %target%...)
  )
)

"%KeymanDeveloperPath%\kmcomp.exe" -nologo %silent% %clean% %debug% %kpj% %targetflag% "%target%"
exit /B %ERRORLEVEL%

rem ###########################################
rem Help and errors
rem ###########################################

:help
echo. %0 [-p project[.kpj]] [-dll mode] [-s] [-c] [-d] [target]
echo.
echo. -p project.kpj: If not specified, then will use the kpj file 
echo.                 with same name as current directory.
echo.                 If specified, project.kpj must be in the current path.
echo.
echo. -dll:    Build DLL mode: default, always, never (*)
echo. -s:      Silent build
echo. -c:      Clean instead of build
echo. -d:      Include debug information [also allows warnings]
echo. target:  If specified, then will build just that file in the project.
echo.          Target must be a .kmn or a .kps file referenced in the project
echo. 
echo. Exit code of 0 indicates success. Any other exit code is an error
echo.
echo. (*) The -dll parameter is specific to the CS-Pinyin project. If it
echo.     is not specified, then 'default' applies: the build will attempt 
echo.     to compile the DLLs, and it cannot, will copy them from binaries 
echo.     stored in the source/ folder.
exit /b 2
goto :eof

:err_env
echo Error: the environment variable KeymanDeveloperPath must be set to the path for kmcomp.exe
exit /b 3
