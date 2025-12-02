#!/usr/bin/perl -w

binmode(STDOUT, ":utf8");
binmode(STDERR, ":utf8");
use utf8;
use strict;
use open ':encoding(utf-8)';

my @X =(
	"፩",
	"፪",
	"፫",
	"፬",
	"፭",
	"፮",
	"፯",
	"፰",
	"፱",
	"፲",
	"፳",
	"፴",
	"፵",
	"፶",
	"፷",
	"፸",
	"፹",
	"፺",
	"፻",
	"፼",
	""
);

#
# Note to self, this is the PUA based generator.  The next time it is run it will need the
# minor updates for variation selectors.
#
main:
{
my @Numbers =(
	"ones",
	"twos",
	"threes",
	"fours",
	"fives",
	"sixes",
	"sevens",
	"eights",
	"nines",
	"tens",
	"twenties",
	"thirties",
	"forties",
	"fifties",
	"sixties",
	"seventies",
	"eighties",
	"nineties",
	"hundreds",
	"tenthousands",
	"conjtens"
);

my $i = 0;
for my $number (@Numbers) {

my @nums = split( //, $X[$i] );

print<<END;
c $nums[0] Menus:
  store(${number}Base፡menu) '[$nums[2]①|$nums[1]②|$nums[6]③|$nums[3]④|$nums[5]⑤|$nums[21]⑥]'
  store(${number}SingleBlackBar፡menu) '[$nums[4]①|$nums[8]②|$nums[16]③|$nums[18]④|$nums[22]⑤]'
  store(${number}SingleBarRedBody፡menu) '[$nums[12]①|$nums[20]②|$nums[10]③|$nums[14]④]'
  store(${number}RedBars፡menu) '[$nums[7]①|$nums[15]②|$nums[17]③]'
  store(${number}RedBody፡menu) '[$nums[11]①|$nums[19]②|$nums[9]③|$nums[13]④]'
  store(${number}SansSerifBars፡menu) '[$nums[23]①|$nums[24]②|$nums[25]③]'

END

	$i++;
}

$i = 0;
for my $number (@Numbers) {

my @nums = split( //, $X[$i] );

print<<END;
c $nums[0] Menus:
'$nums[0]' + [K_TAB] > outs(${number}Base፡menu)
  outs(${number}Base፡menu) + any(sixKeys) > use (${number}Base፡group)
'$nums[1]' + [K_TAB] > outs(${number}SingleBlackBar፡menu)
  outs(${number}SingleBlackBar፡menu) + any(fiveKeys) > use (${number}SingleBlackBar፡group)
'$nums[6]' + [K_TAB] > outs(${number}SingleBarRedBody፡menu)
  outs(${number}SingleBarRedBody፡menu) + any(fourKeys) > use (${number}SingleBarRedBody፡group)
'$nums[3]' + [K_TAB] > outs(${number}RedBars፡menu)
  outs(${number}RedBars፡menu) + any(threeKeys) > use (${number}RedBars፡group)
'$nums[5]' + [K_TAB] > outs(${number}RedBody፡menu)
  outs(${number}RedBody፡menu) + any(fourKeys) > use (${number}RedBody፡group)
'$nums[21]' + [K_TAB] > outs(${number}SansSerifBars፡menu)
  outs(${number}SansSerifBars፡menu) + any(threeKeys) > use (${number}SansSerifBars፡group)

END

	$i++;
}


$i = 0;
for my $number (@Numbers) {

my @nums = split( //, $X[$i] );

print<<END;
c $nums[0] Groups:
group(${number}Base፡group) using keys
  + any(sixKeys፡index) > index(${number}Base፡menu,1)
  + [K_TAB] > '$nums[0]'
group(${number}SingleBlackBar፡group) using keys
  + any(fiveKeys፡index) > index(${number}SingleBlackBar፡menu,1)
  + [K_TAB] > '$nums[1]'
group(${number}SingleBarRedBody፡group) using keys
  + any(fourKeys፡index) > index(${number}SingleBarRedBody፡menu,1)
  + [K_TAB] > '$nums[6]'
group(${number}RedBars፡group) using keys
  + any(threeKeys፡index) > index(${number}RedBars፡menu,1)
  + [K_TAB] > '$nums[3]'
group(${number}RedBody፡group) using keys
  + any(fourKeys፡index) > index(${number}RedBody፡menu,1)
  + [K_TAB] > '$nums[5]'
group(${number}SansSerifBars፡group) using keys
  + any(threeKeys፡index) > index(${number}SansSerifBars፡menu,1)
  + [K_TAB] > '$nums[21]'

END

	$i++;
}



}
