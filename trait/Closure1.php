<?php

function outerFunc($callback) {
	$callback();
}

$innerFunc = function() {
	echo "내부 호출 함수 <br>";
};

outerFunc($innerFunc); // result : 내부 호출 함수

outerFunc(function() {
	echo "내부 호출 함수";
});
// result : 내부 호출 함수