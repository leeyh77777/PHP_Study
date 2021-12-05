<?php
$fruits = [];
$fruits[0] = "apple";
$fruits[1] = "mango";
$fruits[] = "melon"; // 마지막 배열 끝에 추가 , 기본값 melon2로 변경
$fruits['key1'] = "value1";
$fruits[] = "peach";

$fruits['key1'] = "value2";
$fruits[2] = "melon2"; // melon 에 대체 
array_push($fruits, "a", "b", "c", "d"); // 추가

unset($fruits['key1']); // 삭제 


echo "<pre>";
print_r($fruits);
echo "</pre>";

/** result
Array
(
    [0] => apple
    [1] => mango
    [2] => melon2
    [3] => peach
    [4] => a
    [5] => b
    [6] => c
    [7] => d
)
*/
