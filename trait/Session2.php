<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
/** result
Array
(
    [key1] => 값1
    [key2] => 값2
)
*/