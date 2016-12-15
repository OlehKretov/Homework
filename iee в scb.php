<?php

echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($number > 100) {
    echo "Thanks, man!";
} elseif (($number > 10) && ($number < 100)) {
    echo "OK :(";
} else echo "WHAAAAT????";

echo "\n";
if ($number > 1000) echo "\n!!!!WOOOOWWWW!!!\n";
?>