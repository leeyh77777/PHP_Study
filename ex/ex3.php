<!--
// fileupload (ex3_process.php) 
<form method="post" action="ex3_process.php" enctype="multipart/form-data">
	<input type ="file"  name="file">
	<input type="submit" value="업로드">
</form>
-->
<?php
/**
$fruits = ['apple', 'orange', 'mango'];
echo $fruits[0]."<br>";
echo $fruits[1]."<br>";
echo $fruits[2]."<br>";

echo "<pre>";
print_r($fruits);
echo "</pre>";

$student = [
	"id" => 20211118,
	"name" => "이름",
	"age" => 30,
	'nums' => [0,1,2,3,4,5,6,7,8,9,10, [
		'key1' => 1,
		'key2' => 2,
	]],	
];

echo "아이디 : " .$student['id']. "<br>";
echo "이름 : " .$student['name']. "<br>";
echo "나이 : " .$student['age']. "<br>";

echo "<pre>";
print_r($student);
echo "</pre>";

$fruit = [];
$fruit[0] = "apple";
$fruit[2] = "mango";
$fruit['key1'] = "value1";

array_push($fruit, "a","b"); // 끝에 추가

unset($fruit['key1']); // 삭제

echo "<pre>";
print_r($fruit);
echo "</pre>";


$fruits = ["apple", "mango", "orange", "peach"];

for ($i = 0; $i < count($fruits); $i++) {
	echo $fruits[$i]."<br>";
	
$student = [
	'id' => 20211118,
	'name' => '이름',
	'age' => 30,
];

foreach ($student as $key => $value) {
		printf("key : %s, value : %s <br>",$key, $value);
}

// key 값 생략 가능
foreach ($student as $value) {
	echo $value."<br>";
	
}


$nums = [
	[0,1,2,3,4],
	[5,6,7,8,9],
	[10,11,12,13,14,],
];

for ($i = 0; $i < count($nums); $i++) {
	for ($j = 0; $j <count($nums[$i]); $j++) {
		
	}
}


$productList = [
	["name" => "상품명1", "price" => 2000],
	["name" => "상품명2", "price" => 3000],
	["name" => "상품명3", "price" => 4000],
	["name" => "상품명4", "price" => 5000],
];

foreach ($productList as $item) {
	
	echo "<pre>";
	print_r($item);
	echo "</pre>";
	
	printf("상품명 : %s, 가격 : %d <br>",$item['name'], $item['price']);
}
	
	
function outerFunc($callback) {
	$event = "매개변수";
	$callback($event);
}

$callback = function($event) {
		echo "함수를 인수로 호출!!" .$event;
};

outerFunc($callback);

outerFunc(function($event) {
	echo $event;
});



function outerFunc($fruits, $callback) {
	foreach ($fruits as $index => $fruit) {
		$callback($fruit, $index);
	}
}

$fruits = ["apple", "orange", "mango", "banana"];
outerFunc($fruits, function($fruit, $index) {
	printf("%d = %s <br>",  $index, $fruit);
});


function outerFunc($num1) {
	
	return function ($num2) use ($num1) {
			return $num1 + $num2;
	};
}

$outer = outerFunc(10);
echo $outer(30);
echo"<pre>";
print_r($outer);
echo "</pre>";


class Student {
	public $id;
	public $name;
	
	public function __construct($id = "10000", $name = "이름없음") {
		echo "인스턴스 생성!<br>";
		$this->id = $id;
		$this->name = $name;
	}
	
	public function printInfo() {
		printf("%d : %s <br>", $this->id, $this->name);
	}
}

//$s1 = new Student(20211118, "이름");
$s1 = new Student();
$s1->printInfo();

class A {
	public $numA = 10;
	
	public function getNumA() {
		return $this->numA;
	}
}

$a = new A();
//echo $a->numA;
echo $a -> getNumA();
}


class A {
	protected $numA = 10; // private 과 동일 -> 상속받은 클래스 내부에서 접근이 가능
	
	public fucntion getNumA() {
		return $numA;
	}
}

class B extends A {
		public function getNumA2() {
			parent::getNumA();
		}
}

$b = new B();
$b->getNumA2();
*/

function funcNm($a, $b, $c, $d) {
	printf("%s,%s,%s,%s <br>", $a, $b, $c, $d);
	
}
funcNm('a','b','c','d');