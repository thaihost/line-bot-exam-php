<?php
require "vendor/autoload.php";
require "eca.php";
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $chanel_secret]);
$txt='เรียน ห้างหุ้นส่วนจำกัด เอส พีบิลดิ้ง

ตามที่กรมสรรพสามิตได้ลงนามทำสัญญาเลขที่ 5/2561 กับ ห้างหุ้นส่วนจำกัด เอส พีบิลดิ้ง นั้ัน 
ขอให้มารับคืนหลักประกันสัญญาได้ ตั้งแต่วันที่ 02/03/2562 เป็นต้นไป

จึงแจ้งมาเพื่อทราบและโปรดดำเนินการต่อไป';
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($txt);
$response = $bot->pushMessage('Ue96da58faf93ffecd17e309f43369a20', $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
