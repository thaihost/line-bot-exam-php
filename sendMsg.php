<?php
require "vendor/autoload.php";
require "config.php";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('PdRhGi4R3ijgxA2BeKNqK5l/UwCm986ywXM+PMX8jQMWYonPt6QFTfvxk5LkMmSUYpFOFu5sAOz8jL0dAbRNm8lGToB+JDyyQJaDqEM15VLcC7/hu7g6s7vJNWAfUys4H363hKe5lZQm9FoGXTQ8lQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '269d0c2229a8ecbc6b7e8844f721918d']);

$txt='สวัสดีครับทุกท่าน';

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($txt);
$response = $bot->pushMessage('Ue79f91fc4c149e18249b25ccc65b0519', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
