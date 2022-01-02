<?php
namespace school;

class A {
	public function __construct() {
		echo "__CLASS__ : " . __CLASS__ ."<br>";
		echo "__LINE__ : " . __LINE__ ."<br>";
		echo "__DIR__ : " . __DIR__ ."<br>";
		echo "__FILE__ : " . __FILE__ ."<br>";
		echo "__METHOD__ : " . __METHOD__ ."<br>";
		echo "A::class : " . A::class . "<br>";
	}
}

$a = new A();

/** result
__CLASS__ : school\A
__LINE__ : 7
__DIR__ : /dydhyun/www/trait
__FILE__ : /dydhyun/www/trait/ClassF.php
__METHOD__ : school\A::__construct
A::class : school\A
*/