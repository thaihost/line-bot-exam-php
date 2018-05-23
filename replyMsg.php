<?php
require('vendor/autoload.php');
require('config.php');

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $chanel_secret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('nHuyWiB7yP5Zw52FIkcQobQuGDXCTA', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
