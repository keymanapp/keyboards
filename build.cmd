@echo off
rem
rem If we call Git Bash directly then we keep the same console
rem which gives us feedback in CI builds. Note Teamcity agent
rem running on 32-bit Java requires programw6432 env var to
rem find git reliably...
rem
setlocal
set bash_shell=
if exist "%programfiles%\git\usr\bin\bash.exe" (
  echo Found bash in "%programfiles%\git\usr\bin\bash.exe"
  set bash_shell="%programfiles%\git\usr\bin\bash.exe" --login
) else (
  if exist "%programfiles(x86)%\git\usr\bin\bash.exe" (
    echo Found bash in "%programfiles(x86)%\git\usr\bin\bash.exe"
    set bash_shell="%programfiles(x86)%\git\usr\bin\bash.exe" --login
  ) else (
    if exist "%programw6432%\git\usr\bin\bash.exe" set bash_shell="%programw6432%\git\usr\bin\bash.exe" --login
  )
)
echo.
echo Using bash shell command: %bash_shell%
echo.
%bash_shell% .\build.sh
