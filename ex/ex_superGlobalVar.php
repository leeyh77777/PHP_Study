<?php
/** --전역변수 & 초전역변수 -- */
// 지역 local // 전역 global
$num3 = 10;
// 초전역변수 -> 지역내에서 명시안해도 전역변수로 동작

function sum($num1, $num2) {
	// 전역변수 명시해줄것!!
	//global $num3;
	
	//print_r($GLOBALS);
	
	//$GLOBALS['num3'] -> 초전역변수
	$result = $num1 + $num2 + $GLOBALS['num3'];
	
	//오류 ($num3 전역변수가 아니라서..)
	//$result = $num1 + $num2 + $num3;
	
	return $result;
}
echo sum(10, 20);