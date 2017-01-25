@echo off

rem -----------------------------------------------------
rem build.cmd script for Tavultesoft keyboards repository
rem -----------------------------------------------------

if "%KeymanDeveloperPath%"=="" goto err_env
if not exist "%KeymanDeveloperPath%\kmcomp.exe" goto err_env_not_exist
if "%1"=="-?" goto help
if "%1"=="/?" goto help
if /i "%1" EQU "-h" goto help
if /i "%1" EQU "/h" goto help
if /i "%1" EQU "--help" goto help
if "%1"=="/?" goto help

rem ###########################################
rem Check environment and parameters
rem ###########################################

setlocal ENABLEDELAYEDEXPANSION ENABLEEXTENSIONS

set global_silent=
set global_debug=
set global_clean=

:params

if "%1"=="" goto build

if "%1"=="-s" (
  set global_silent=-s
  shift
  goto params
)

if "%1"=="-c" (
  set global_clean=-c
  shift
  goto params
)

if "%1"=="-d" (
  set global_debug=-d
  shift
  goto params
)

rem ###########################################
rem Build all targets
rem ###########################################

:build

set global_target=%*

if "%1"=="" (
  set global_target=*
)

for /d %%d in (%global_target%) do (
  call :build_keyboard %%d "%~dp0"
  if !global_error! GEQ 1 (
    echo Aborting build with error !global_error!.
    exit /B !global_error!
  )
)
for /d %%d in (%global_target%) do call :build_package %%d "%~dp0"

exit /B 0

rem ###########################################
rem Build one target keyboard
rem ###########################################

:build_keyboard

if /i "%1" EQU ".git" goto :eof
if /i "%1" EQU "template" goto :eof
if /i "%1" EQU "packages" goto :eof

if not exist %1\build.cmd goto :eof

cd %1
call build.cmd -p %1.kpj %global_silent% %global_clean% %global_debug%

if errorlevel 1 (
  set global_error=%errorlevel%
  echo Aborting build of %1 due to error !global_error!.
  cd /d %2
  exit /B !global_error!
)
cd /d %2

goto :eof

rem ###########################################
rem Build one target package
rem ###########################################

:build_package

if /i "%1" NEQ "packages" goto :eof

if not exist %1\build.cmd goto :eof

cd %1
call build.cmd %global_silent% %global_clean% %global_debug%

if errorlevel 1 (
  set global_error=%errorlevel%
  echo Aborting build of %1 due to error !global_error!.
  cd /d %2
  exit /B !global_error!
)
cd /d %2

goto :eof

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
goto :eof

:err_env_not_exist
echo Error: the executable kmcomp.exe does not exist at %KeymanDeveloperPath%\kmcomp.exe
exit /b 4
goto :eof

