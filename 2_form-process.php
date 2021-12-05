<?php
/**
$_GET - GET방식으로 요청을 보낸 데이터
$_POST - POST 방식으로 요청을 보낸 데이터
$_REQUEST - GET 방식, POST 방식, 쿠키 데이터
*/
echo "<pre>"

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
