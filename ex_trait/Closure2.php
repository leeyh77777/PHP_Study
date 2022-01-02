<?php

function outerFunc($nums, $callback) {
	for($i = 0; $i < count($nums); $i++) {
		$callback($nums[$i], $i);
	}
}
$nums = range(0, 10); // 0~10
// $alpha = range('a', 'z'); // a~z
outerFunc($nums, function($num, $index) {
	printf("num : %d, index : %d <br>", $num, $index);
});