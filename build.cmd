@echo off
rem
rem If we call Git Bash directly then we keep the same console
rem which gives us feedback in CI builds
rem
if exist "%programfiles%\git\usr\bin\bash.exe" (
  set bash_shell="%programfiles%\git\usr\bin\bash.exe" --login
) else (
  if exist "%programfiles(x86)%\git\usr\bin\bash.exe" (
    set bash_shell="%programfiles(x86)%\git\usr\bin\bash.exe" --login
  ) else (
    set bash_shell=
  )
)
%bash_shell% .\build.sh
