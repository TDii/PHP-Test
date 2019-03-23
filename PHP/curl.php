<?php
/**
 * Date: 2019/3/23
 * Time: 16:13
 * 练习curl模块获取网页信息
 -添加了请求头模拟$header
 */
$url = "http://www.httpbin.org/get";
$header = [
    'Accept:application/json, text/javascript, */*; q=0.01',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36'
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$html = curl_exec($ch);
curl_close($ch);
echo "<pre>";
print_r($html);
