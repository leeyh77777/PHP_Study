<?php

$fruits = ["apple", "mango", "orange", "peach", "banana"];

for ($i = 0; $i < count($fruits); $i++) {
echo $fruits[$i] . "<br>";
}
/** result
apple
mango
orange
peach
banana
*/

foreach ($fruits as $value) {
	echo $value. "<br>";
}
/** result
apple
mango
orange
peach
banana
apple
mango
orange
peach
banana
*/