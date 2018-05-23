<?php
require "vendor/autoload.php";
require "config.php";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $chanel_secret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('Ue79f91fc4c149e18249b25ccc65b0519', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
