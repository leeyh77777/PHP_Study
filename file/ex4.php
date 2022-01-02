<?php
$handle = fopen("data2.txt", "a");
fwrite($handle, "텍스트1....");
fwrite($handle, "텍스트2....");
fclose($handle);
/** result
date2.txt 생성후 fwrite 차례로 입력
*/