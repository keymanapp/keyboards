@echo off

rem -------------------------------------------
rem packages\build.cmd script
rem -------------------------------------------

if "%KeymanDeveloperPath%"=="" goto err_env
if "%1"=="-?" goto help
if "%1"=="/?" goto help
if /i "%1" EQU "-h" goto help
if /i "%1" EQU "/h" goto help
if /i "%1" EQU "--help" goto help
if "%1"=="/?" goto help

rem ###########################################
rem Check environment and parameters
rem ###########################################

setlocal

set packages_silent=
set packages_debug=
set packages_clean=

:params

if "%1"=="" goto build

if "%1"=="-s" (
  set packages_silent=-s
  shift
  goto params
)

if "%1"=="-c" (
  set packages_clean=-c
  shift
  goto params
)

if "%1"=="-d" (
  set packages_debug=-d
  shift
  goto params
)

rem ###########################################
rem Build all targets
rem ###########################################

:build

set packages_target=%*

if "%1"=="" (
  set packages_target=*
)

for /d %%d in (%packages_target%) do call :build_target %%d "%~dp0"

exit /B 0

rem ###########################################
rem Build one target
rem ###########################################

:build_target

if /i "%1" EQU "template" goto :eof

if not exist %1\build.cmd goto :eof

cd %1
call build.cmd -p %1.kpj %packages_silent% %packages_clean% %packages_debug%
if errorlevel 1 (
  set packages_error=%errorlevel%
  cd /d %2
  exit /B %packages_error%
)
cd /d %2

exit /B 0

rem ###########################################
rem Help and errors
rem ###########################################

:help
echo. %0 [-s] [-c] [-d] [target ...]
echo.
echo. -s:      Silent build
echo. -c:      Clean instead of build
echo. -d:      Include debug information
echo. target:  Optional, one or more folder names. If excluded, builds all.
echo. 
echo. Exit code of 0 indicates success. Any other exit code is an error
exit /b 2
goto :eof

:err_env
echo Error: the environment variable KeymanDeveloperPath must be set to the path for kmcomp.exe
exit /b 3
