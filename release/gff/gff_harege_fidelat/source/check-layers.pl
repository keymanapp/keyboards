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
	my $baseFile = "gff_harege_fidelat.keyman-touch-layout";

		open( OLD, "<", $baseFile ) or die $!;
		my ( $id, $text, $nextlayer, $layer );
		while( <OLD> ) {
			if( /^        "id": "(.*?)",/ ) {
				$layer = $1;
				print "Layer: $layer\n";
			}
              		elsif( /{/ ){
				$id = $text = $nextlayer = undef;
			}
			elsif ( /"text": "(.*?)"/ ) {
                		$text = $1;
			}
			elsif ( /"nextlayer": "(.*?)"/ ) {
                		$nextlayer = $1;
			}
			elsif( /}/ ) {
				if( $nextlayer ) {
					next if( $nextlayer eq "$text-layer" );
					next if( ($text =~ /[@▶◀]/) ||($text eq "1/፩") );
					print "  $text => $nextlayer\n" if( $nextlayer ne "default" );
				}
				else {
					print "  WARN: $text => no nextlayer\n" if ( $text && ($text !~ /[\$€\p{IsPunct}]/) );
				}
			}
		}
		close( OLD );

}
