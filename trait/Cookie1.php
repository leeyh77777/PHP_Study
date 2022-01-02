<?php
setcookie("key1", "value");
/** result -> 애플리케이션 쿠키 세팅
Array
(
    [key1] => value
)
*/
//setcookie("key1", "value1", time() - 1); // 쿠키 삭제


echo "<pre>";
print_r($_COOKIE);
echo "</pre>";