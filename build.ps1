<#
.SYNOPSIS
    Build Keyman keyboards
.DESCRIPTION
    Builds all the keyboards in the repository
.PARAMETER s
.PARAMETER Silent
    Reduces the verbosity of logging (silent build)
.PARAMETER c
    Clean instead of build
.PARAMETER Clean
    Clean instead of build
.PARAMETER d
    Include debug information in output files
.PARAMETER Debug
    Include debug information in output files
.PARAMETER Target
    Optional, one or more folder names to build. If excluded, builds all.
.EXAMPLE
.NOTES
    Author: Marc Durdin
    Date:   13 July 2017
#>

# ------------------------------------------------
# build.ps1 script for Keyman keyboards repository
# ------------------------------------------------

param(
  [switch]$s,
  [switch]$Silent,
  [switch]$c,
  [switch]$Clean,
  [switch]$d,
  [switch]$Debug,
  [string]$target = ""
)

$ErrorActionPreference = "Stop"

if($s) { $Silent = $true }
if($c) { $Clean = $true }
if($d) { $Debug = $true }

if($Silent) { $GlobalSilent = "-s" }
if($Clean) { $GlobalClean = "-c" }
if($Debug) { $GlobalDebug = "-d" }

if (-not (Test-Path Env:KeymanDeveloperPath)) {
  Write-Host Error: the environment variable KeymanDeveloperPath must be set to the path for kmcomp.exe
  Exit 3
}

if (-not (Test-Path "$Env:KeymanDeveloperPath\kmcomp.exe")) {
  Write-Host Error: the executable kmcomp.exe does not exist at ${Env:KeymanDeveloperPath}kmcomp.exe
  Exit 4
}

# Find all targets

if($target -eq "") {
  $targets = Get-ChildItem -Directory -Name
} else {
  $targets = @($target) + $args
}

function Build-Keyboard {
  param([string]$Name)
 
  if($Name -eq ".git") { return }
  if($Name -eq "template") { return }
  if($Name -eq "packages") { return }
  if($Name -eq "experimental") { return }
  if($Name -eq "legacy") { return }
  
  if(-not (Test-Path "$Name\build.cmd")) { return }

  $Arguments = @(
    "-p",
    "$Name.kpj",
    "$GlobalSilent",
    "$GlobalClean",
    "$GlobalDebug"
  )

  cd $Name
  & .\build.cmd $Arguments
  cd ..
  
  if($LASTEXITCODE -ne 0) {
    Write-Host "Failed to build $Name with error $LASTEXITCODE"
    Exit $LASTEXITCODE
  }
}

function Build-Packages {
  if(-not (Test-Path "packages\build.cmd")) { return 0 }

  $Arguments = @(
    "$GlobalSilent",
    "$GlobalClean",
    "$GlobalDebug"
  )

  cd packages
  & .\build.cmd $Arguments
  cd ..
  
  if($LASTEXITCODE -ne 0) {
    Write-Host "Failed to build packages with error $LASTEXITCODE"
    Exit $LASTEXITCODE
  }
}


function Test-Binary-Keyboard {
  param(
    [string]$Root,
    [string]$Name
  )
  <#
    Test that the binary keyboard meets basic requirements for uploading to the distribution point.
    We do very little apart from making sure it won't clobber another keyboard.
  #>
  
  #
  # Verify that the folder does not exist in the root
  #
  
  if(Test-Path $Name) {
    Write-Host "The folder $Name exists in both the root of the repo and in $Root. The folder must not exist in both locations."
    Exit 1
  }
  
  #
  # For experimental, verify that the folder does not exist in legacy, and vice-versa
  #
  
  if($Root -eq "legacy") { $Root2 = "experimental" } else { $Root2 = "legacy" }
  
  if(Test-Path $Root2\$Name) {
    Write-Host "The folder $Name exists in both $Root2 and in $Root. The folder must not exist in both locations."
    Exit 1
  }
  
  #
  # Try and load the JSON file
  #

  $InfoJson = "$Root\$Name\$Name.json"
  
  if(-not (Test-Path $InfoJson)) {
    Write-Host "The file $InfoJson does not exist."
    Exit 1
  }
    
  $json = (Get-Content $InfoJson -Encoding UTF8) -Join "`n" | ConvertFrom-Json
  
  #
  # Test that the target files exist
  #
  
  if(Get-Member -inputobject $json -name "packageFilename" -Membertype Properties) {
    if(-not (Test-Path $Root\$Name\$($json.packageFilename))) {
      Write-Host "File $Root\$Name\$($json.packageFilename) referenced in $InfoJson packageFilename does not exist."
      Exit 1
    }
  }

  if(Get-Member -inputobject $json -name "jsFilename" -Membertype Properties) {
    if(-not (Test-Path "$Root\$Name\$($json.jsFilename)")) {
      Write-Host "File $Root\$Name\$($json.jsFilename) referenced in $InfoJson jsFilename does not exist."
      Exit 1
    }
  }

  if(Get-Member -inputobject $json -name "docFilename" -Membertype Properties) {
    if(-not (Test-Path "$Root\$Name\$($json.docFilename)")) {
      Write-Host "File $Root\$Name\$($json.docFilename) referenced in $InfoJson docFilename does not exist."
      Exit 1
    }
  }
  
  # At this point, we are reasonably happy to proceed
}

function Build-Experimental-Keyboards {
  $targets = Get-ChildItem "experimental\*" -Directory -Name
  foreach($t in $targets) {
    Test-Binary-Keyboard "experimental" $t
  }
}

function Build-Legacy-Keyboards {
  $targets = Get-ChildItem "legacy\*" -Directory -Name
  foreach($t in $targets) {
    Test-Binary-Keyboard "legacy" $t
  }
}


foreach($t in $targets) {
  Build-Keyboard($t)
}

if($targets.Contains("experimental")) {
  Build-Experimental-Keyboards
}

if($targets.Contains("legacy")) {
  Build-Legacy-Keyboards
}

if($targets.Contains("packages")) {
  Build-Packages
}

<#

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

#>
