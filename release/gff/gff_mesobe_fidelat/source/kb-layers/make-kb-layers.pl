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
	'𞟠',
	'መ',
	'ሠ',
	'ረ',
	'ሰ',
	'ሸ',
	'ቀ',
	'ቐ',
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


sub setModifier
{
my ($base, $form) = @_;
my %Orders = (
	"T_ካዕብ" => 1,
	"T_ሣልስ" => 2,
	"T_ራብዕ" => 3,
	"T_ኃምስ" => 4,
	"T_ሳድስ" => 5,
	"T_ሳብዕ" => 6,
	"T_WWA" => 7
);

	my $newLetter = sprintf( "%c" , (ord($base) + $Orders{$form}) ) ;
	s/"text": "(.*?)",/"text": "$newLetter",/;
}

main: {
	my $baseFile = "phone-default.json";

	for my $letter (@Fidel) {
		my $nextLayerSet = 0;
		my $newFile = $baseFile;
		$newFile =~ s/default/$letter/;
		print "$newFile\n";
		open( OLD, "<", $baseFile ) or die $!;
		open( NEW, ">", $newFile ) or die $!;
		# copy( $baseFile, $newFile ) or die "Copy failed: $!";
		while( <OLD> ) {
			s/default/$letter-layer/;
			if( /(T_ሣልስ|T_ካዕብ|T_ራብዕ|T_ኃምስ|T_ሳድስ|T_ሳብዕ|T_WWA)/ ) {
				print NEW;
				$_ = <OLD>;
				setModifier( $letter, $1 )
			}
			if( ($nextLayerSet == 0) && /"text": "$letter",/ ) {
				print NEW;
				$_ = '                "nextlayer": "' . $letter . "-layer\",\n";
				$nextLayerSet = 1;
			}
			print NEW;
		}
		close( OLD );
		close( NEW );
	}

}

#
# cat in this sequence:
#
# cat *.json > out.json
#
