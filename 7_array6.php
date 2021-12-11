<?php
$school = "연희직업전문학교";

$a = "school";
echo $$a; // $$a == $school
/** result
연희직업전문학교
*/

echo "<br>";
define("NUM1", 10); 
//define( string $constant_name, mixed $value, bool $case_insensitive = false(대소문자 false 구분함, true 구분안함)
echo NUM1;

