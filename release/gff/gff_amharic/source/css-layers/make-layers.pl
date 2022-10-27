#!/usr/bin/perl -w

use File::Copy;

binmode(STDOUT, ":utf8");
binmode(STDERR, ":utf8");
use utf8;
use strict;
use open ':encoding(utf-8)';

my @Fidel =(
'ሀ',
'ለ',
'ሐ',
'መ',
'ሠ',
'ረ',
'ሰ',
'ሸ',
'ቀ',
'በ',
'ቨ',
'ተ',
'ቸ',
'ኀ',
'ነ',
'ኘ',
'አ',
'ከ',
'ኸ',
'ወ',
'ዐ',
'ዘ',
'ዠ',
'የ',
'ደ',
'ዸ',
'ጀ',
'ገ',
'ጘ',
'ጠ',
'ጨ',
'ጰ',
'ጸ',
'ፀ',
'ፈ',
'ፐ'
);

my $baseFile = "gff_amharic-layer-popup-default.css";

for my $letter (@Fidel) {
	my $newFile = $baseFile;
	$newFile =~ s/default/$letter/;
	print "$newFile\n";
	open( OLD, "<", $baseFile ) or die $!;
	open( NEW, ">", $newFile ) or die $!;
	# copy( $baseFile, $newFile ) or die "Copy failed: $!";
	while( <OLD> ) {
		s/default/$letter/;
		print NEW;
	}
	close( OLD );
	close( NEW );
}



my @FidelExtra =(
'ሠ',
'ቐ',
'ቨ',
'ኀ',
'ዠ',
'ኸ',
'ጘ',
'ፀ',
'ፐ',
'𞟠'
);

$baseFile = "gff_amharic-layer-popup-non-amharic.css";

for my $letter (@FidelExtra) {
	my $newFile = $baseFile;
	$newFile =~ s/non-amharic/$letter-extra/;
	print "$newFile\n";
	open( OLD, "<", $baseFile ) or die $!;
	open( NEW, ">", $newFile ) or die $!;
	# copy( $baseFile, $newFile ) or die "Copy failed: $!";
	while( <OLD> ) {
		s/non-amharic/$letter-extra/;
		print NEW;
	}
	close( OLD );
	close( NEW );
}

#
# cat in this sequence:
#
# cat gff_amharic-modifier-keys.css gff_amharic-layer-popup-default.css gff_amharic-layer-popup-non-amharic.css gff_amharic-layer-popup-?.css gff_amharic-layer-popup-*-extra.css > gff_amharic.css
#
