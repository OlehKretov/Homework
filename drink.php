<?php 

print "Vvedite kolichestvo p'yushchikh v kompanii?\n";
$handle = fopen ("php://stdin","r");
$a = fgets($handle);

if ($a <= 2) {
	print "Berite pol litra!";
} elseif (($a == 3) || ($a == 4)) {
	print "Berite litr!";
} else print "Berite iz rascheta 300 ml na kazhdogo p'yushchego!";

print "\n";

?>