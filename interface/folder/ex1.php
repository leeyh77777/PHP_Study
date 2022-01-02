<?php
include "../ex2.php"; // 상대 경로
include __DIR__ . "/../ex2.php"; // 절대경로
/** result
ex2.php
ex2.php
*/

echo "<h1>".__DIR__."</h1>"; // result : /dydhyun/www/interface/folder
echo "<h1>".__FILE__."</h1>"; // result : /dydhyun/www/interface/folder/ex1.php