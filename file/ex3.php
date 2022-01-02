<?php
$handle = fopen("data.txt", "w");
fwrite($handle, "텍스트... 텍스트... 텍스트");
fclose($handle);
/** result
data.txt -> fwrite 내용 입력
*/

$handle = fopen("data.txt", "w");
fwrite($handle, "텍스트..");
fclose($handle);
/** result
data.txt -> 위에 내용 지워지고 새로 입력
*/