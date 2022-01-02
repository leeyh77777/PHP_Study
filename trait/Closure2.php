<?php
/** callback 함수로 printf 설정 */
function outerFunc($nums, $callback) {
	for($i = 0; $i < count($nums); $i++) {
		$callback($nums[$i], $i);
	}
}
$nums = range(0, 10);
outerFunc($nums, function($num, $index) {
	printf("num : %d, index : %d <br>", $num, $index);
});
/** result
num : 0, index : 0
num : 1, index : 1
num : 2, index : 2
num : 3, index : 3
num : 4, index : 4
num : 5, index : 5
num : 6, index : 6
num : 7, index : 7
num : 8, index : 8
num : 9, index : 9
num : 10, index : 10
*/