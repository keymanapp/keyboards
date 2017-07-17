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
  Write-Error Error: the environment variable KeymanDeveloperPath must be set to the path for kmcomp.exe
}

if (-not (Test-Path "$Env:KeymanDeveloperPath\kmcomp.exe")) {
  Write-Error Error: the executable kmcomp.exe does not exist at ${Env:KeymanDeveloperPath}kmcomp.exe
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
    Write-Error "Failed to build $Name with error $LASTEXITCODE"
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
    Write-Error "Failed to build packages with error $LASTEXITCODE"
  }
}


function Test-Binary-Keyboard {
  param(
    [string]$Root,
    [string]$Name
  )
  <#
    Test that the binary keyboard meets basic requirements for uploading to the distribution point.
    We do very little apart from making sure it won't clobber another keyboard and that the files
    to upload actually exist.
  #>
  
  #
  # Verify that the folder does not exist in the root
  #
  
  if(Test-Path $Name) {
    Write-Error "The folder $Name exists in both the root of the repo and in $Root. The folder must not exist in both locations."
  }
  
  #
  # For experimental, verify that the folder does not exist in legacy, and vice-versa
  #
  
  if($Root -eq "legacy") { $Root2 = "experimental" } else { $Root2 = "legacy" }
  
  if(Test-Path $Root2\$Name) {
    Write-Error "The folder $Name exists in both $Root2 and in $Root. The folder must not exist in both locations."
  }
  
  #
  # Try and load the JSON file
  #

  $InfoJson = "$Root\$Name\$Name.keyboard_info"
  
  if(-not (Test-Path $InfoJson)) {
    Write-Error "The file $InfoJson does not exist."
  }
    
  $json = (Get-Content $InfoJson -Encoding UTF8) -Join "`n" | ConvertFrom-Json

  #
  # Basic json validation
  #
  
  if($json -eq $null) {
    Write-Error "The JSON file $InfoJson is empty"
  }
  
  if(-not(Get-Member -inputobject $json -name "version" -Membertype Properties)) {
    Write-Error "The version field is required in $InfoJson."
  }

  if(-not(Get-Member -inputobject $json -name "id" -Membertype Properties)) {
    Write-Error "The id field is required in $InfoJson."
  }
  
  #
  # Test that the target files exist
  #
  
  if(Get-Member -inputobject $json -name "packageFilename" -Membertype Properties) {
    if(-not (Test-Path $Root\$Name\$($json.packageFilename))) {
      Write-Error "File $Root\$Name\$($json.packageFilename) referenced in $InfoJson packageFilename does not exist." 
    }
    $HasPackage = $true
  }

  if(Get-Member -inputobject $json -name "jsFilename" -Membertype Properties) {
    if(-not (Test-Path "$Root\$Name\$($json.jsFilename)")) {
      Write-Error "File $Root\$Name\$($json.jsFilename) referenced in $InfoJson jsFilename does not exist."
    }
    
    $HasJS = $true
  }

  if(Get-Member -inputobject $json -name "docFilename" -Membertype Properties) {
    if(-not (Test-Path "$Root\$Name\$($json.docFilename)")) {
      Write-Error "File $Root\$Name\$($json.docFilename) referenced in $InfoJson docFilename does not exist."
    }
  }
  
  if(-not $HasPackage -and -not $HasJS) {
    Write-Warning "Folder $Root\$Name does not have a package or a .js. Skipping"
    Return
  }
  
  #
  # The .js filename must match $name-$version.js
  #
  # The .kmp filename is a bit less solid. For now it must match $name.kmp
  #
  
  if($HasPackage -and ($json.packageFilename -NotMatch "^$Name\.km.$")) {
    Write-Error "File $Root\$Name\$($json.packageFilename) should match the folder name $Name."
  }

  if($HasJS -and ($json.jsFilename -ne "$Name-$($json.version).js")) {
    Write-Error "File $Root\$Name\$($json.jsFilename) should match the folder name+keyboard version $Name-$($json.version)."
  }
  
  # At this point, we are reasonably happy to proceed
  
  if($HasPackage) {
    Write-Host "Package $Root\$Name\$($json.packageFilename) passes basic validation."
  }

  if($HasJS) {
    Write-Host "Package $Root\$Name\$($json.jsFilename) passes basic validation."
  }
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
