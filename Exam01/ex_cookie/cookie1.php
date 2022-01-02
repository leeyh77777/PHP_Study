<?php
/** 쿠키는 반드시 출력전에 설정 */

//setcookie("key1", "value1"); //설정
setcookie("key1", "value1", time() -1); // 삭제
setcookie("key2", "value2", 0, "/DB");


echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
