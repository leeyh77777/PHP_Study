<?php
include "traits/traitA.php";
include "traits/traitB.php";

class ClassA {
	// use traitA, traitB;
	use traitA;
	use traitB;
}

$classA = new ClassA();
$classA->methodA(); // result : methodA
echo "<br>";
echo $classA->numA; // result : 10
echo "<br>";
$classA->methodB(); // result : methodB
