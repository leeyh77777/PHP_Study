<?php

Class A {
	private $numA = 10;
	
	public function getNumA() {
		return $this->numA;
	}
}

$a = new A();
//echo $a->numA; // -> 에러
echo $a->getNumA();
/** result
10
*/