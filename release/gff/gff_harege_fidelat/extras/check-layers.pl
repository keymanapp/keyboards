#!/usr/bin/perl -w

use File::Copy;

binmode(STDOUT, ":utf8");
binmode(STDERR, ":utf8");
use utf8;
use strict;
use open ':encoding(utf-8)';


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
