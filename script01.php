<?php
$start = 12;
$end = 16;
if($start > 0 && $end > 0 && $start <= $end) {
	$str = '';
	for($ctr = $start; $ctr <= $end; $ctr++) {
		$str2 = ( $ctr%3 == 0 ? 'Fizz' : '' ) . ( $ctr%5 == 0 ? 'Buzz' : '' );
		$str .= ( empty($str2) ? $ctr : $str2 ) . ' ';
	}
	echo $str;
} else {
	echo 'Invalid range';
}	
?>