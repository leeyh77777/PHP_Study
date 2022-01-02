<?php
namespace A;
include "ex2.php"; // B
include "ex3.php"; // C

$num = 20;

echo sum(10, 20) . "<br>"; // A 영역에 있는 함수
echo \B\sum(20,30) . "<br>"; // B 영역에 있는 함수
echo \C\sum(40,50) . "<br>"; // C 영역에 있는 함수

function sum($num1, $num2) {
	echo __NAMESPACE__ . "<br>"; // -> namespace 명
		return $num1 + $num2;
}
/** result
A
30
B
50
C
90
*/