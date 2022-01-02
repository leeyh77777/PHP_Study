<?php
function outerFunc($num1) {
	
	return function ($num2) use ($num1) {
		return $num1 + $num2;
	};
}

$outer = outerFunc(10);
echo $outer(30);
echo "<pre>";
print_r($outer);
echo "</pre>";

/** result 
40
Closure Object
(
    [static] => Array
        (
            [num1] => 10
        )

    [parameter] => Array
        (
            [$num2] => 
        )

)
*/