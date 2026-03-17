#!/usr/bin/perl

use 5.010;
use strict;
use warnings;

open(FH, '<', $ARGV[0]) or die $!;
read FH, my $kps, -s FH;
close(FH);

# This extracts relevant variables from the <Keyboard> section of the .kps file:
# Keyman Developer 18.0+ stopped using name and version in .kps files (#13600)
my $bcp47 = $1 if($kps =~ /\<Keyboard\>.+<Language\s+ID="(.+?)"\>/s);
my $langname = $1 if($kps =~ /\<Keyboard\>.+<Language.+?\>(.+?)\<\/Language\>/s);
# Font paths are optional
my $oskFont = 'none';
$oskFont = $1 if($kps =~ /\<Keyboard\>.+<OSKFont\>(.*?)\<\/OSKFont\>/s);
my $displayFont = 'none';
$displayFont = $1 if($kps =~ /\<Keyboard\>.+<DisplayFont\>(.*?)\<\/DisplayFont\>/s);

print "$bcp47\n$langname\n$oskFont\n$displayFont";
