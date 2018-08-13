<?php
require "vendor/autoload.php";
require "eca.php";
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $chanel_secret]);
$txt='เรียน เจ้าหน้าที่พัสดุ

ตามที่กรมสรรพสามิตได้ลงนามทำสัญญาเลขที่ 5/2561 กับ ห้างหุ้นส่วนจำกัด เอส พีบิลดิ้ง นั้ัน ซึ่งขณะนี้ได้เลยระยะเวลาส่งมอบงานแล้ว เป็นเวลา 11 วัน 
คิดเป็นค่าปรับเป็นจำนวนเงิน 15,827.77 บาท ขอให้เร่งดำเนินการในขั้นตอนที่เกี่ยวข้อง และทำการส่งมอบงานให้เรียบร้อยโดยเร็วที่สุด

จึงแจ้งมาเพื่อทราบและโปรดดำเนินการต่อไป';
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($txt);
$response = $bot->pushMessage('Ue96da58faf93ffecd17e309f43369a20', $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
