#!/usr/bin/perl

use 5.010;
use strict;
use warnings;

open(FH, '<', $ARGV[0]) or die $!;
read FH, my $kps, -s FH;
close(FH);

# This extracts relevant variables from the <Keyboard> section of the .kps file:

my $name = $1 if($kps =~ /\<Keyboard\>\s*\<Name\>(.*?)\<\/Name\>/);
my $version = $1 if($kps =~ /\<Keyboard\>.+<Version\>(.*?)\<\/Version\>/s);
my $bcp47 = $1 if($kps =~ /\<Keyboard\>.+<Language\s+ID="(.+?)"\>/s);
my $langname = $1 if($kps =~ /\<Keyboard\>.+<Language.+?\>(.+?)\<\/Language\>/s);

print "$name\n$version\n$bcp47\n$langname";
