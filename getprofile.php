<?php
require "vendor/autoload.php";
include('config.php');
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $chanel_secret]);
$response = $bot->getProfile('Ue79f91fc4c149e18249b25ccc65b0519');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
?>
