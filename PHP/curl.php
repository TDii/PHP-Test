<?php
/**
 * Date: 2019/3/23
 * Time: 16:13
 * 练习curl模块获取网页信息
 */
$url = "http://www.httpbin.org/get";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$html = curl_exec($ch);
curl_close($ch);
echo "<pre>";
print_r($html);
