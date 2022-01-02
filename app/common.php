<?php
header("Access-Control-Allow-Origin: *"); // CORS
header("Access-Control-Allow-Headers: *"); // CORS
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=utf-8");
http_response_code(200);
include "lib/DB.php"; // DB 클래스
include "lib/Request.php";
include "lib/Member.php"; // Member 클래스
include "lib/Kanban.php"; // Kanban 클래스

//$in = $_REQUEST?$_REQUEST:[];
$inputData = file_get_contents("PHP://input");
$in = json_decode($inputData, true);
print_r($in);
//$in = $_REQUEST ?? [];


$success = false;
$returnData = [];
$message = "";