#!/usr/bin/perl

use DateTime;

my $start = DateTime->new(
    day   => 1,
    month => 1,
    year  => 2000,
);

my $stop = DateTime->new(
    day   => 10,
    month => 1,
    year  => 2000,
);

my $today = DateTime->today;
$last3Months = DateTime->today->subtract(months => 3);
$lastMonth = DateTime->today->subtract(months => 1);
$lastWeek = DateTime->today->subtract(weeks => 1);

my $sd = $ARGV[0];
my $ed = $ARGV[1];

if ( $sd != "" ) {
	printf "First param: %s\n", $sd;	
}

if ( $ed != "" ) {
	printf "Second param: %s\n", $ed;
}

printf "Last 3 months: %s\n", $last3Months->ymd('-');
printf "Last month: %s\n", $lastMonth->ymd('-');
printf "Last week: %s\n", $lastWeek->ymd('-');

while ( $lastMonth <= $today ) {
    printf "Date: %s\n", $lastMonth->ymd('-');
	$lastMonth->add(days => 1)
}