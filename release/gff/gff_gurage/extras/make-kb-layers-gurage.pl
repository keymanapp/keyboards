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
	'𞟨',
	'𞟠',
	'መ',
	'ᎀ',
	'ረ',
	'ሰ',
	'ሸ',
	'ቀ',
	'ቈ',
	'ቐ',
	'በ',
	'ᎄ',
	'ቨ',
	'ተ',
	'ቸ',
	'ነ',
	'ኘ',
	'አ',
	'ከ',
	'ኰ',
	'ኸ',
	'ዀ',
	'ወ',
	'ዘ',
	'ዠ',
	'የ',
	'ደ',
	'ጀ',
	'ገ',
	'ጐ',
	'ጘ',
	'ጠ',
	'ጨ',
	'ጰ',
	'ፈ',
	'ᎈ',
	'ፐ',
	'ᎌ'
);

my %HasMeen =(
	'ሀ' => 'ሇ',
	'ለ' => 'ⶀ',
	'መ' => 'ⶁ',
	'ረ' => 'ⶂ',
	'ሰ' => 'ⶃ',
	'ሸ' => 'ⶄ',
	'ቀ' => 'ቇ',
	'በ' => 'ⶅ',
	'ተ' => 'ⶆ',
	'ቸ' => 'ⶇ',
	'ኀ' => 'ኇ',
	'ነ' => 'ⶈ',
	'ኘ' => 'ⶉ',
	'አ' => 'ⶊ',
	'ከ' => 'ኯ',
	'ወ' => 'ዏ',
	'ዘ' => 'ⶋ',
	'የ' => 'ዯ',
	'ደ' => 'ⶌ',
	'ዸ' => 'ⶍ',
	'ጀ' => 'ⶎ',
	'ገ' => 'ጏ',
	'ጠ' => 'ⶏ',
	'ጨ' => 'ⶐ',
	'ጰ' => 'ⶑ',
	'ፀ' => 'ፇ',
	'ፐ' => 'ⶒ'
);

my @Extras =(
	'ዠ',
	'ቨ',
	'ኘ',
	'ኀ',
	'ኈ',
	'ኸ',
	'ሀ',
	'ሠ',
	'ዐ',
	'ጸ',
	'ጰ',
	'ዸ',
	'ፀ',
	'ቘ',
	'ⶓ'
	# 'ꬁ',
	# 'ⶠ',
	# 'ⷀ',
	# 'ⶨ',
	# 'ኀ',
	# 'ⷈ',
	# 'ⷐ',
	# 'ꬑ',
	# 'ⶰ',
	# 'ዸ',
	# 'ꬉ',
	# 'ⷘ',
	# 'ⶸ',
	# 'ꬠ',
	# 'ꬨ'
);

my %Alternates =(
	'ኀ' => 'ሀ'
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
my %LabiovelarOrders = (
        "ግዕዝ" => 0,
	"ሣልስ" => 1,
	"ራብዕ" => 2,
	"ኃምስ" => 3,
	"ካዕብ" => 4,
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
	"𞟨" => "ሐ",
	"ᎀ" => "መ",
	"ᎄ" => "በ",
	"ቈ" => "ቀ",
	"ቘ" => "ቐ",
	"ኈ" => "ኀ",
	"ኰ" => "ከ",
	"ዀ" => "ኸ",
	"ጐ" => "ገ",
	"ⶓ" => "ጘ",
	"ᎈ" => "ፈ",
	"ᎌ" => "ፐ"
);
my %LabiovelarSeries = (
	"𞟨" => ['𞟨','𞟩','ሗ','𞟪','𞟫'],
	"ᎀ" => ['ᎀ','𞟭','ሟ','𞟮','ᎃ'],
	"ᎄ" => ['ᎄ','𞟳','ቧ','𞟴','ᎇ'],
	"ቈ" => ['ቈ','ቊ','ቋ','ቌ','ቍ'],
	"ቘ" => ['ቘ','ቚ','ቛ','ቜ','ቝ'],
	"ኈ" => ['ኈ','ኊ','ኋ','ኌ','ኍ'],
	"ኰ" => ['ኰ','ኲ','ኳ','ኴ','ኵ'],
	"ዀ" => ['ዀ','ዂ','ዃ','ዄ','ዅ'],
	"ጐ" => ['ጐ','ጒ','ጓ','ጔ','ጕ'],
	"ⶓ" => ['ⶓ','ⶔ','ጟ','ⶕ','ⶖ'],
	"ᎈ" => ['ᎈ','𞟻','ፏ','𞟼','ᎋ'],
	"ᎌ" => ['ᎌ','𞟽','ፗ','𞟾','ᎏ']
);


	# my $newAddr = ( $form eq "ካዕብ" ) ? "T_BACK" : sprintf( "U_%X" , (ord($base) + $Orders{$form}) ) ;

print STDERR "HERE[1]: $base => $form\n";

	my( $newAddr, $newLetter );
	if ( $form eq "ካዕብ" ) {
		# $newAddr = "T_BACK" ;
		# $newLetter =  "↺" ;
		$newLetter =  "⟲" ;
		
		$_ = "\t\t\"nextlayer\": \"$LabiovelarOf{$base}-layer\",\n" . $_ ;
	}
	else {
		$form = "ካዕብ" if ( $form eq "ሳብዕ" );
print STDERR "HERE[2]: $base => $form\n";
		my $index = $LabiovelarOrders{$form};
		$newLetter = $LabiovelarSeries{$base}[ $index ];
		# $newLetter = sprintf( "%c"   , (ord($base) + $Orders{$form}) ) ;
		# $newAddr   = sprintf( "U_%X" , (ord($base) + $Orders{$form}) ) ;
	}

	# s/T_$form/$newAddr/;
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

	if( ($form eq "ራብዕ") && $Has8thOrder{$base} ) {
		my $eigth = $Has8thOrder{$base};
		# my $addr  = sprintf( "U_%X" , ord($eigth) ) ;
		my $addr  = "T_WWA";
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
	elsif( ($form eq "ራብዕ") && $Has12Orders{$base} ) {
		my $eigth = $Has12Orders{$base};
		my $addr  = sprintf( "U_%X" , ord($eigth) ) ;
		my $next  = $NextLayer{$base};
		s/\n/,\n/;
		$_ .= <<ENDW
		"hint": "$eigth",
                "nextlayer": "$next-layer"
ENDW
	}
	elsif( 0 && ($form eq "ሳብዕ") && $HasMeen{$base} ) {
		my $meen = $HasMeen{$base};
		# my $addr  = sprintf( "U_%X" , ord($meen) ) ;
		my $addr  = "T_ሳምን";
		$_ .= ",";
		$_ .= <<ENDM
		"hint": "$meen",
                "sk": [
                  {
                    "text": "$meen",
                    "id": "$addr"
                  }
                ]
ENDM
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
				if( $letter =~ /[𞟨ᎀᎄቈቘኈኰዀጐⶓᎈᎌ]/ ) {
					if( $lastLine =~ /ካዕብ/ ) {
						$lastLine =~ s/ካዕብ/BACK/;
						print NEW $lastLine;
					}
					else {
						$lastLine =~ s/T_/T_ዘመደ_/;
						if ( $order eq "ሳብዕ" ) {
							$lastLine =~ s/T_ዘመደ_ሳብዕ/T_ዘመደ_ካዕብ/;
						}
						print NEW $lastLine;
					}
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
	# processFile( "phone-template.json",  "layer", \@Fidel );
	processFile( "extras-template.json", "extra", \@Extras );
	# processFile( "tablet-template.json",  "layer", \@Fidel );
	# processFile( "tablet-extras-template.json", "extra", \@Extras );
}

#
# cat in this sequence:
#
# cat *.json > out.json
#
