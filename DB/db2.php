<?php
try {
	$dsn = "mysql:host=localhost;dbname=dydhyun";
	$username = "dydhyun";
	$password = "dltkavkf3";
	$db = new PDO($dsn, $username, $password);
	$sql = "SELECT * FROM member";
	$stmt = $db->query($sql);
	while($row = $stmt->fetch(PDO::FETCH_NUM)) {
		echo "<pre>";
		print_r($row);
		echo "</pre>";
	}
} catch (PODException $e) {
	echo $e->getMessage();
}