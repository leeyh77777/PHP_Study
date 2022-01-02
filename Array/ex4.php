<?php
$student = [
	'id' => 20211118,
	'name' => '이름',
	'age' => 30,
];

foreach ($student as $key => $value) {
	printf("key : %s, value : %s <br>", $key, $value);
}

/** result
key : id, value : 20211118
key : name, value : 이름
key : age, value : 30
*/