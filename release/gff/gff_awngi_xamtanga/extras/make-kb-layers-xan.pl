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
	'ቈ',
	'ቐ',
	'ቘ',
	'በ',
	'ቨ',
	'ተ',
	'ቸ',
	'ኀ',
	'ኈ',
	'ነ',
	'ኘ',
	'አ',
	'ከ',
	'ኰ',
	'ኸ',
	'ዀ',
	'ወ',
	'ዐ',
	'ዘ',
	'ዠ',
	'የ',
	'ደ',
	'ዸ',
	'ጀ',
	'ገ',
	'ጐ',
	'ጘ',
	'ⶓ',
	'ጠ',
	'ጨ',
	'ጰ',
	'ጸ',
	'ፀ',
	'ፈ',
	'ፐ'
);

my @Extras =(
	'𞟠',
	'ሠ',
	'ቨ',
	'ቸ',
	'ኀ',
	'ኘ',
	'ዸ',
	'ዠ',
	'ጘ',
	'ጨ',
	'ጰ',
	'ፀ'
);

my %Alternates =(
	'ሠ' => 'ሰ',
	'ቸ' => 'ተ',
	'ዠ' => 'ዘ',
	'ኘ' => 'ነ',
	'ፀ' => 'ጸ',
	'ጰ' => 'ፐ',
	'ቨ' => 'በ',
	'ኀ' => 'ሀ',
	'ጨ' => 'ጠ'
);


my %Orders = (
        "ግዕዝ" => 0,
	"ካዕብ" => 1,
	"ሣልስ" => 2,
	"ራብዕ" => 3,
	"ኃምስ" => 4,
	"ሳድስ" => 5,
	"ሳብዕ" => 6,
	"WWA" => 7
);

my %Has8thOrder = (
	'ሀ' => 'ኋ',
	'ለ' => 'ሏ',
	'ሐ' => 'ሗ',
	'መ' => 'ሟ',
	'ሠ' => 'ሧ',
	'ረ' => 'ሯ',
	'ሰ' => 'ሷ',
	'ሸ' => 'ሿ',
	'በ' => 'ቧ',
	'ቨ' => 'ቯ',
	'ተ' => 'ቷ',
	'ቸ' => 'ቿ',
	'ነ' => 'ኗ',
	'ኘ' => 'ኟ',
	'አ' => 'ኧ',
	'ዘ' => 'ዟ',
	'ዠ' => 'ዧ',
	'ደ' => 'ዷ',
	'ዸ' => 'ዿ',
	'ጀ' => 'ጇ',
	'ጠ' => 'ጧ',
	'ጨ' => 'ጯ',
	'ጰ' => 'ጷ',
	'ጸ' => 'ጿ',
	'ፈ' => 'ፏ',
	'ፐ' => 'ፗ'
);

sub setModifierLabiovelar
{
my ($base, $form) = @_;
my %LabiovelarOf = (
	"ቈ" => "ቀ",
	"ቘ" => "ቐ",
	"ኈ" => "ኀ",
	"ኰ" => "ከ",
	"ዀ" => "ኸ",
	"ጐ" => "ገ",
	"ⶓ" => "ጘ"
);

	$form = "ሳድስ"  if ( $form eq "ሳብዕ" );

	# my $newAddr = ( $form eq "ካዕብ" ) ? "T_BACK" : sprintf( "U_%X" , (ord($base) + $Orders{$form}) ) ;


	my( $newAddr, $newLetter );
	if ( $form eq "ካዕብ" ) {
		$newAddr = "T_BACK" ;
		# $newLetter =  "↺" ;
		$newLetter =  "⟲" ;
		
		$_ = "\t\t\"nextlayer\": \"$LabiovelarOf{$base}-layer\",\n" . $_ ;
	}
	else {
		$newLetter = sprintf( "%c"   , (ord($base) + $Orders{$form}) ) ;
		$newAddr   = sprintf( "U_%X" , (ord($base) + $Orders{$form}) ) ;
	}

	s/T_$form/$newAddr/;
	s/"text": "(.*?)"/"text": "$newLetter"/;
	

}

sub setModifier
{
my ($base, $form) = @_;
my %Has12Orders = (
	"ቀ" => "ቋ", 
	"ቐ" => "ቛ", 
	"ኀ" => "ኋ",
	"ከ" => "ኳ", 
	"ኸ" => "ዃ", 
	"ገ" => "ጓ", 
	"ጘ" => "ጟ" 
);
my %NextLayer = (
	"ቀ" => "ቈ", 
	"ቐ" => "ቘ", 
	"ኀ" => "ኈ",
	"ከ" => "ኰ", 
	"ኸ" => "ዀ", 
	"ገ" => "ጐ", 
	"ጘ" => "ⶓ" 
);

	my $newLetter = sprintf( "%c" , (ord($base) + $Orders{$form}) ) ;
	s/"text": "(.*?)"/"text": "$newLetter"/;

	if( ($form eq "ካዕብ") && $Has8thOrder{$base} ) {
		my $eigth = $Has8thOrder{$base};
		my $addr  = sprintf( "U_%X" , ord($eigth) ) ;
		$_ .= ",";
		$_ .= <<END
		"hint": "$eigth",
                "sk": [
                  {
                    "text": "$eigth",
                    "id": "$addr"
                  }
                ]
END
	}
	elsif( ($form eq "ካዕብ") && $Has12Orders{$base} ) {
		my $eigth = $Has12Orders{$base};
		my $addr  = sprintf( "U_%X" , ord($eigth) ) ;
		my $next  = $NextLayer{$base};
		s/\n/,\n/;
		$_ .= <<ENDW
		"hint": "$eigth",
                "nextlayer": "$next-layer"
ENDW
	}
	
}

sub processFile
{
my ($baseFile, $layer, $List) = @_;


	for my $letter (@{$List}) {
		my $nextLayerSet = 0;
		my $newFile = $baseFile;
		$newFile =~ s/template/$letter/;
		print "$newFile\n";
		open( OLD, "<", $baseFile ) or die $!;
		open( NEW, ">", $newFile ) or die $!;
		# copy( $baseFile, $newFile ) or die "Copy failed: $!";
		while( <OLD> ) {
			s/default/$letter-$layer/;
			if( /T_(ግዕዝ|ሣልስ|ካዕብ|ራብዕ|ኃምስ|ሳብዕ|WWA)/ ) {
				my $lastLine = $_;
				$_ = <OLD>;
				my $order = $1;
				if( $letter =~ /[ቈቘኰዀጐⶓ]/ ) {
					$lastLine =~ s/ካዕብ/BACK/;
					print NEW $lastLine;
					setModifierLabiovelar( $letter, $order );
				}
				else {
					print NEW $lastLine;
					setModifier( $letter, $order );
				}
			}
			if( ($nextLayerSet == 0) && /"text": "$letter",/ ) {
				print NEW;
				$_ = '                "nextlayer": "' . $letter . "-$layer\",\n";
				$nextLayerSet = 1;
			}

			#
			# Maybe use this block later if following the Harari approach
			#
			if( 0 && exists($Alternates{$letter}) ) {
				my $alternate = $Alternates{$letter};
				my $alternateSadis = sprintf( "%c" , (ord($alternate) + 5 ) );
				my $letterSadis    = sprintf( "%c" , (ord($letter) + 5 ) );
				if( /(\s+)"text": "$alternateSadis",/ ) {
					my $indent = $1;
					s/$alternateSadis/$letterSadis/;
					print NEW;
					$_ = <OLD>;
					$_ = <OLD>;
					if ( /shift/ ) {
						print NEW;
						$_ = <OLD>;
					}
					print NEW $indent.'"nextlayer": "'.$letter.'-$layer",'."\n" ;
			                print NEW $indent.'"hint": "'.$alternateSadis.'",'."\n"  ;
					my $count = 0;
					while( 1 ) {
						$_ = <OLD>;
						if( /]/ ) {
							last;
						}
                    				elsif ( /"nextlayer": "$letter-$layer"/ ) {
                    					s/$letter/$alternate/;
						}
						elsif( /"text": "(.*?)"/ ) {
							$count = 6 if ( $count == 5 );
							my $old = $1;
							my $new = sprintf( "%c" , (ord($letter) + $count ) ) ;
							s/$old/$new/;
							print NEW;
							$_ = <OLD>;
							my $addr = sprintf( "%X" , ord($new) ) ;
							s/U_\w{4}/U_$addr/;
							$count++;
						}
						print NEW;
						
					}
				}
			}
			print NEW;
		}
		close( OLD );
		close( NEW );
	}

}


main: {
	# processFile( "tablet-template.json",  "layer", \@Fidel );
	processFile( "phone-template.json",  "layer", \@Fidel );
	# processFile( "extras-template.json", "extra", \@Extras );
}

#
# cat in this sequence:
#
# cat *.json > out.json
#
