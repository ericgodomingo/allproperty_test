<?php
$start = 4;
$end = 25;
if($start > 0 && $end > 0 && $start <= $end) {
	$strarr = array();
	for($ctr = $start; $ctr <= $end; $ctr++) {
		$str2 = ( $ctr%3 == 0 ? 'Fizz' : '' ) . ( $ctr%5 == 0 ? 'Buzz' : '' );
		array_push($strarr, ( empty($str2) ? $ctr : $str2 ) );
	}
	$ctr = 0;
	$prev = '';
	foreach($strarr as $key => $val) {
		if(is_int($prev)) {
			$ctr = 0;
		}
		if($ctr == 2) {
			$strarr[$key] = 'Bazz';
			$ctr = 0;
		}
		if(!is_int($val)) {
			$ctr++;
		}
		$prev = $val;
	}
	echo implode(' ', $strarr);a
} else {
	echo 'Invalid range';
}
?>