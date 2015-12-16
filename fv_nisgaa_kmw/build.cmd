@echo off

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

if not "%1"=="" (
  set targetflag=-t
  set target=%1
  rem no additional params after target
)

rem ###########################################
rem Build
rem ###########################################

:build

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
echo. %0 [-p project[.kpj]] [-s] [-c] [-d] [target]
echo.
echo. -p project.kpj: If not specified, then will use the kpj file 
echo.                 with same name as current directory.
echo.                 If specified, project.kpj must be in the current path.
echo.
echo. -s:      Silent build
echo. -c:      Clean instead of build
echo. -d:      Include debug information [also allows warnings]
echo. target:  If specified, then will build just that file in the project.
echo.          Target must be a .kmn or a .kps file referenced in the project
echo. 
echo. Exit code of 0 indicates success. Any other exit code is an error
exit /b 2
goto :eof

:err_env
echo Error: the environment variable KeymanDeveloperPath must be set to the path for kmcomp.exe
exit /b 3
