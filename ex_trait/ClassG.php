<?php
class A {
	private $age = 30;
	
	public function __set($name, $value) {
		printf("name : %s, value : %s <br>", $name, $value);
	}
	
	public function __get($name) {
		printf("__get :: name : %s", $name);
	}
	
	public function __isset($name) {
		printf("__isset :: name : %s", $name);
	}
	
	public function __unset($name) {
		printf("__unset :: name : %s <br>", $name);
	}
}

$a = new A();
$a->age; // __get
$a->age = 30; // __set
isset($a->age); // __isset
unset($a->age); // __unset