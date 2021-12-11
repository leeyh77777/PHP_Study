<?php
$fruits = [];
$fruits[0] = "apple";
$fruits[1] = "mango";
$fruits[] = "melon"; // 마지막 배열에 추가
$fruits['key1'] = "value1";
$fruits[] = "peach";

/** result(위에)
	Array
	(
		[0] => apple
		[1] => mango
		[2] => melon
		[key1] => value1
		[3] => peach
	)
*/

$fruits['key1'] = "value2";
$fruits[2] = "melon2";
array_push($fruits, "a", "b", "c", "d"); // 추가

/** result ([4,5,6,7]추가)
	Array
	(
		[0] => apple
		[1] => mango
		[2] => melon2
		[key1] => value2
		[3] => peach
		[4] => a
		[5] => b
		[6] => c
		[7] => d
	)
*/

unset($fruits['key1']); // 삭제
/** result (key1 삭제)
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

echo "<pre>";
print_r($fruits);
echo "</pre>";