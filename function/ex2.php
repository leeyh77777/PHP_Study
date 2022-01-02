<?php

function outerFunc($callback) {
	$event = "매개변수";
	$callback($event);
}

$callback =function($event) {
	echo "함수를 인수로 호출!! - " .$event;
};

//outerFunc($callback);
/** result : outerFunc($callback);
함수를 인수로 호출!! - 매개변수
*/

outerFunc(function($event) {
	echo $event;
});

/** result
매개변수
*/