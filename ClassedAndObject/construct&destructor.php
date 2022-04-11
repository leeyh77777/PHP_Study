<?php 

/** 생성자 **/

class Address {
  private $city;
  private $town;
  private $township;
  
  function __construct($city, $town, $township) {
    // Address 가지고 있는 변수의 값을 매개변수로 지정
    $this->setAddress($city, $town, $township);
    // 클래스내에 있는 setAddress() 함수에 매개변수로 지정
  }
  
  public function setAddress($city, $town, $township) {
    // 각 객체에 매개변수값 지정
    $this->city = $city;
    $this->town = $town;
    $this->township = $township;
  }
  
  public function showAddress() {
    echo $this->city." ".$this->town." ".$this->township;
  }
}

// 매개변수에 값 지정
$address = new Address('서울', '강남구', '논현동');

// showAddress() 함수로 출력
echo $address->showAddress();

/** result
서울 강남구 논현동
*/

/** 소멸자 **/

class MyDestructableClass
{
	public function __construct()
	{
		print '생성자';
	}
	
	/** 소멸자 */
	public function __destruct()
	{
		echo "<script>alert('소멸자');</script>";
	}
}

$test = new MyDestructableClass();
/** result
소멸자는 객체가 자동으로 소멸 될 때 호출
MyDestructableClass()가 끝난 후 alert 창 출력
**/