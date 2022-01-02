<?php
include "ex2.php"; // warning -> PHP 스크립트를 중단하지 않고 경고 표기

require "ex2.php"; // error -> PHP 스크립트를 중단하고 오류 표기

echo "<h1>출력되나요?</h1>";
/**result
ex2.php -> ex2.php 내용 불러오기
출력되나요?
*/