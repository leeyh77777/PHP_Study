<?php
class A {
	public $numA = 10;
	public function methodA() {
			echo "메서드 A";
	}
}

class B extends A {
	public function methodA() {
		parent::methodA();
		echo "메서드 B";
		echo $this->numA;
	}
}

$b = new B();
echo $b->numA . "<br>";
// result : 10
echo $b->methodA();
// result : 메서드 A메서드 B10

echo "<br>";
echo $b instanceof B;
// result : 1