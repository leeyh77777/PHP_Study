<?php
echo $_SERVER['REMOTE_ADDR'];
exit;
try{
	$dsn = "mysql:host=localhost;dbname=dydhyu";
	$username = "dydhuyn";
	$password = "dltkavkf3";
	$db = new PDO($dsn, $username, $password);
	$sql = "INSERT INTO member (memId, memPw, memNm) 
					VALUES('abcde', '12345', '이름')";
	$affectedRows = $db->exec($sql);
	echo $affectedRows;
	
} catch(PODException $e) {
	echo $e->getMessage;
}