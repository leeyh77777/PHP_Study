<!-- superglobals
	$_GET - GET방식으로 요청을 보낸 데이터
	$_POST - POST 방식으로 요청을 보낸 데이터
	$_REQUEST - GET 방식, POST 방식, 쿠키 데이터
 -->
<form method="post" action="ex2_process.php?t1=1&t2=2">
	아이디 <input type="text" name="memId"><br>
	비밀번호 <input type="password" name="memPw"><br>
	<input type="submit" value="POST 로그인!">
</form>
<form method="get" action="ex2_process.php">
	아이디 <input type="text" name="memId"><br>
	비밀번호 <input type="password" name="memPw"><br>
	<input type="submit" value="GET 로그인!">
</form>


<?php

/**구구단
for($i = 2; $i <= 9; $i++) {
	for($j = 1; $j <= 9; $j++) {
		//echo "$i X $j = ".($i*%$j)."<br>";
		echo "{$i}X{$j} = ".($i*$j)."<br>";
	}
	echo "<br><br>";
}
------------------------------------------*/

/** --전역변수 & 초전역변수 --
// 지역 local // 전역 global
$num3 = 10;
// 초전역변수 -> 지역내에서 명시안해도 전역변수로 동작

function sum($num1, $num2) {
	// 전역변수 명시해줄것!!
	//global $num3;
	
	//print_r($GLOBALS);
	
	//$GLOBALS['num3'] -> 초전역변수
	$result = $num1 + $num2 + $GLOBALS['num3'];
	
	//오류 ($num3 전역변수가 아니라서..)
	//$result = $num1 + $num2 + $num3;
	
	return $result;
}
echo sum(10, 20);
-------------------------------------------*/




