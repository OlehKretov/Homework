<?php 
$handle = fopen("fizzbuzz_f.txt", "r");
while (!feof($handle)) {
	$str = fgets($handle);
	$arr = explode(" ", $str);
			for ($i=1; $i <= $arr[2]; $i++) {
			if ($i % $arr[0] == 0 && $i % $arr[1] == 0) {
				print "FB ";
			} elseif ($i % $arr[0] == 0) {
				print "F ";
			} elseif ($i % $arr[1] == 0) {
				print "B ";
			} else print "$i ";

			}
		print "\n";	
}

?>