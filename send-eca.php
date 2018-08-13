<?php
require "vendor/autoload.php";
require "config.php";
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('buYf800xQgGQZMD3w3LAtQtLNYP81blCa6jFF2+t6ACDpwg3u8TmLjFNNx30y7yhQofFQT/NN8T7upUACQZdGuTWDFpS5EqgVvjNLuyJuJ9hGBGB2TXk47hhbdOXb5EXKP1J+BhAsFprDOaz3VjtiwdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '90b28c62ec083be23aa8356de778c5a3']);
$txt='สวัสดีครับทุกท่าน\nเป็นอย่างไรบ้าง';
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($txt);
$response = $bot->pushMessage('Ue96da58faf93ffecd17e309f43369a20', $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
