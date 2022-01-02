<?php
$fruits = ['apple', 'orange', 'mango'];
echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[2] . "<br>";

echo "<pre>";
print_r($fruits);
echo "</pre>";

$student = [
	'id' => 20211118,
	'name' => "이름",
	'age' => 30,
	'nums' => [0,1,2,3,4,5,6,7,8,9,10, [
		'key1' => 1,
		'key2' => 2,
	]],
];

echo "아이디 : " . $student['id'] . "<br>";
echo "이름 : " . $student['name']. "<br>";
echo "나이 : " . $student['age']. "<br>";

echo "<pre>";
print_r($student);
echo "</pre>";

/** result 
apple
orange
mango
Array
(
    [0] => apple
    [1] => orange
    [2] => mango
)
아이디 : 20211118
이름 : 이름
나이 : 30
Array
(
    [id] => 20211118
    [name] => 이름
    [age] => 30
    [nums] => Array
        (
            [0] => 0
            [1] => 1
            [2] => 2
            [3] => 3
            [4] => 4
            [5] => 5
            [6] => 6
            [7] => 7
            [8] => 8
            [9] => 9
            [10] => 10
            [11] => Array
                (
                    [key1] => 1
                    [key2] => 2
                )

        )

)
*/