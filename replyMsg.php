<?php
require('vendor/autoload.php');
require('config.php');

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $chanel_secret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('0f3779fba3b349968c5d07db31eab56f', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
