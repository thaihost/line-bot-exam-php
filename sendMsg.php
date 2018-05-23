<?php
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('PdRhGi4R3ijgxA2BeKNqK5l/UwCm986ywXM+PMX8jQMWYonPt6QFTfvxk5LkMmSUYpFOFu5sAOz8jL0dAbRNm8lGToB+JDyyQJaDqEM15VLcC7/hu7g6s7vJNWAfUys4H363hKe5lZQm9FoGXTQ8lQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '269d0c2229a8ecbc6b7e8844f721918d']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('mr.casper', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
