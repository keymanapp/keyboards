@echo off

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

rem Build keyboards
for /d %%d in (%global_target%) do call :build_target -k %%d "%~dp0"

rem Build packages
for /d %%d in (%global_target%) do call :build_target -p %%d "%~dp0"

exit /B 0

rem ###########################################
rem Build one target
rem ###########################################

:build_target

if /i "%2" EQU ".git" goto :eof
if /i "%2" EQU "template" goto :eof
if /i "%2" EQU "packages" if /i "%1" NEQ "-p" goto :eof
if /i "%2" NEQ "packages" if /i "%1" EQU "-k" goto :eof

if not exist %2\build.cmd goto :eof

cd %2
call build.cmd -p %2.kpj %global_silent% %global_clean% %global_debug%
if errorlevel 1 (
  set global_error=%errorlevel%
  cd /d %3
  exit /B %global_error%
)
cd /d %3

exit /B 0

rem ###########################################
rem Help and errors
rem ###########################################

:help
echo. %0 [-s] [-c] [-d] [target]
echo.
echo. -s:      Silent build
echo. -c:      Clean instead of build
echo. -d:      Include debug information
echo. target:  If specified, then will build just that file in the project.
echo.          Target must be a .kmn or a .kps file referenced in the project
echo. 
echo. Exit code of 0 indicates success. Any other exit code is an error
exit /b 2
goto :eof

:err_env
echo Error: the environment variable KeymanDeveloperPath must be set to the path for kmcomp.exe
exit /b 3
