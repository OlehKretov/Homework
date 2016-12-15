<?php 

echo "Kakaya u vas temperatura tela?\n";
$handle = fopen ("php://stdin","r");
$temp = fgets($handle);

echo ($temp > 36 && $temp < 37) ? "Vasha temperatura v predelakh normy." : "Obratites' k vrachu!"; 

echo "\n";

?>