$food_types = array("vegetables", "fruits", "meat"); // 음식 타입 배열
$food = new stdClass(); // $food 객체 생성
$food->vegetables = array('broccoli', 'corn', 'olive');
$food->fruits = array('apples', 'melon', 'banana');
$food->meat = array('beef', 'chicken', 'pork');
 
foreach($food_types as $type) { // 음식 타입을 $type 에 담는다
  for($i=0, $loop=count($food_types); $loop > $i; $i++) { 
      // 음식 타입 배열 접근(인덱스 번호 접근을 위한 반복문)
    echo "food type : ".$type.", food name : ".$food->{$type}[$i]."<br />";
        // $food->{$type}에 $type에 값이 지정
  }
}

/** result
food type : vegetables, food name : broccoli
food type : vegetables, food name : corn
food type : vegetables, food name : olive
food type : fruits, food name : apples
food type : fruits, food name : melon
food type : fruits, food name : banana
food type : meat, food name : beef
food type : meat, food name : chicken
food type : meat, food name : pork
**/