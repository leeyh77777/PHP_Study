<?php
$handle = curl_init("https://www.naver.com");
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($handle);
curl_close($handle);

$pattern = "/<img.+src=['\"]?([^'\">]+)['\"]?[^>]*>/im";
preg_match_all($pattern, $html, $matches);
echo "<pre>";
print_r($matches);
?>
