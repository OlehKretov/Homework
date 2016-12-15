<?php 

print "Enter the number fizz! \n";
$handle = fopen ("php://stdin","r");
$fizz = fgets($handle);

print "Enter the number buzz! \n";
$handle = fopen ("php://stdin","r");
$buzz = fgets($handle);

print "Enter a finite number! \n";
$handle = fopen ("php://stdin","r");
$end = fgets($handle);

for ($i=1; $i <= $end; $i++) {
	if ($i % $fizz == 0 && $i % $buzz == 0) {
		print "FB ";
	} elseif ($i % $fizz == 0) {
		print "F ";
	} elseif ($i % $buzz == 0) {
		print "B ";
	} else print "$i ";
}

?>