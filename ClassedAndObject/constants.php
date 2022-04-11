<?php 

define("THIS_IS_CONSTANT","이것은 상수입니다.");
// 상수 정의 [define("상수명", "값");]
echo THIS_IS_CONSTANT;
echo "<br>";

class MyClass {
	const CONSTANT = 'constant value';
	// 클래스 상수 정의 [const 상수명 = 값;]
	public function showConstant() {
		echo self::CONSTANT." _showConstant()";
    // 클래스 내부에서는 self::상수명으로 접근
    echo "<br>";
	}
}

$class = new MyClass();
// MyClass 객체 생성
$class -> showConstant();
// $MyClass 객체에 있는 showConstant 함수 실행

echo MyClass::CONSTANT." _MyClass::CONSTANT";
// 클래스 외부에서는 클래스명::상수명 으로 접근
echo "<br>";

$classname = "MyClass";
// 변수 값으로 클래스네임 지정 후 접근
echo $classname::CONSTANT." _classname::CONSTANT";
echo "<br>";

/** result
이것은 상수입니다.
constant value _showConstant()
constant value _MyClass::CONSTANT
constant value _classname::CONSTANT
**/