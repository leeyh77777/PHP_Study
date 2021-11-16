<?
// 변수 생성
	//$text1 = "문자1";
	
	// 변수 출력
	//echo $text1;
	
	$num1 = 10;
	$num2 = 20;
	$boolean = true;
	$boolean2 = false;
	
	// 마침표로 문자열 결합->(.)
	echo "문자1"."문자2"."문자3<br>";
	
	$text1 = "문자1";
	$text2 = "문자2";
	$text3 = "문자3<br>";
	
	echo $text1.$text2.$text3;
	
	//큰따옴표일때 변수명 출력가능
	echo "출력할 문자는? $text1 $text2 $text3<br>";
	
	echo "출력할 문자는? {$text1} {$text2} {$text3}<br>";
	//작은따옴표일때 불가
	echo '출력할 문자는? $text1 $text2 $text3<br> ';
	echo '출력할 문자는? '.$text1.''.$text2.''.$text3.'<br>';
	
	// 문자열 인식(줄개행)
	$text4 = <<<EOD
		안녕하세요.
		반값습니다.
		$text1
		{$text2}
	EOD;
	echo $text4;
?>