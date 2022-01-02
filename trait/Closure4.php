<?php
function outerFunc($num1) {
	return function ($num2) use($num1) {
		return $num1 + $num2;
	};
}

$func = outerFunc(10);
echo $func(20);
// result : 30