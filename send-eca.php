<?php
require "vendor/autoload.php";
require "eca.php";
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $chanel_secret]);
$txt='เรียน เจ้าหน้าที่พัสดุ

ตามที่กรมสรรพสามิตได้ลงนามทำสัญญาเลขที่ 5/2561 กับ ห้างหุ้นส่วนจำกัด เอส พีบิลดิ้ง นั้ัน ในการส่งมอบงวดงานที่ 2 ได้มีการหักประกันผลงานไว้ เป็นจำนวน 50,000 บาท

จึงแจ้งมาเพื่อทราบ';
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($txt);
$response = $bot->pushMessage('Ue96da58faf93ffecd17e309f43369a20', $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
