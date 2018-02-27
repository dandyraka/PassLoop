<?php
header("Content-Type: text/plain");
function passlist($string, $start, $end){
	for($i=$start; $i<=$end;$i++) {
		echo $string.str_pad($i, 3, '0', STR_PAD_LEFT)."\n";
	}
}

echo passlist("abc", 0, 999);
?>
