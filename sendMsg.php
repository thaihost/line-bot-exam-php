<?php
require "vendor/autoload.php";
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('PdRhGi4R3ijgxA2BeKNqK5l/UwCm986ywXM+PMX8jQMWYonPt6QFTfvxk5LkMmSUYpFOFu5sAOz8jL0dAbRNm8lGToB+JDyyQJaDqEM15VLcC7/hu7g6s7vJNWAfUys4H363hKe5lZQm9FoGXTQ8lQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '269d0c2229a8ecbc6b7e8844f721918d']);

$txt='ประเภทคำถาม: สอบถามเรื่องทั่วไป

เรื่อง/ประเด็น: การปลอล็อคสถานะการล็อครถยนต์ จากกรมการขนส่งทางบก

ชื่อ-นามสกุล: วาสนา เวชพันธุ์

สถานที่เกิดเหตุ: 

อีเมล์: krissamon@gmail.com

โทรศัพท์: 0986934692

รายละเอียด:
สถานะการล็อครถยนต์ จากกรมการขนส่งทางบก ระบบแจ้งปลดล็อค เมื่อวันที่ 30 เมษายน 2560 เวลา 03:13 น.	ดำเนินการเรียบร้อยแล้ว อยากทราบว่าถ้าหากจะทำการซื้อ-ขาย สามาถไปทำที่ขนส่งได้เลยหรือไม่ ขอทราบกระบวนการด้วยค่ะ ว่ามีขั้นตอนอย่างไรบ้าง

วัน/เวลาส่ง: 22-05-2018 14:05:26';

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($txt);
$response = $bot->pushMessage('Ue79f91fc4c149e18249b25ccc65b0519', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
