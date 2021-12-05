<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<h1>POST</h1>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<h1>GET</h1>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<h1>REQUEST</h1>";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

/** result
// 포스트 방식
Array
(
    [HTTPS] => on
    .....
)
POST 
Array
(
    [memId] => ID
    [memPw] => Password
)
GET
Array
(
    [t1] => 1
    [t2] => 2
)
REQUEST
Array
(
    [t1] => 1
    [t2] => 2
    [memId] => ID
    [memPw] => Password
)
// 겟 방식
Array
(
    [HTTPS] => on
    .....
)
POST
Array
(
)
GET
Array
(
    [memId] => ID
    [memPw] => Password
)
REQUEST
Array
(
    [memId] => ID
    [memPw] => Password
)
*/
