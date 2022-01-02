<?php
$handle = fopen("data2.txt", "r");

$no = 1;
while(feof($handle) === false) {
	$line = fgets($handle);
	echo $no.".".$line."<br>";
	$no++;
}
/**
엔터를 기준으로 $no.$line 으로 출력
1.~~
2.~~
*/

fclose($handle);