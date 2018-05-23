<?php
require "vendor/autoload.php";
require "config.php";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $chanel_secret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('โอเค');
$response = $bot->pushMessage('mr.casper', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
