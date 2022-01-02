<?php
$sum = function($num1, $num2) { // Closure 인스턴스의 __invoke(....)
		return $num1 + $num2;
};

echo $sum(10, 20); // result : 30

echo "<pre>";
echo "<pre>";
print_r($sum);
echo "</pre>";
/** result
Closure Object
(
    [parameter] => Array
        (
            [$num1] => 
            [$num2] => 
        )

)
*/