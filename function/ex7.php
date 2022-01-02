<?php

function funcNm($a, $b, $c = 'c', $d = 'd') {
	printf("%s,%s,%s,%s <br>", $a, $b, $c, $d);
}

funcNm('a', 'b');
/** result
a,b,c,d
*/

function funcNm2($a, ...$b) {
	echo "<pre>";
	print_r($b);
	echo "</pre>";
}

funcNm2(1,2,3,4,5,6,7,8,10);
/** result -> 맨앞에 1은 없다.
Array
(
    [0] => 2
    [1] => 3
    [2] => 4
    [3] => 5
    [4] => 6
    [5] => 7
    [6] => 8
    [7] => 10
)
*/