<?php


$access_token = 'PdRhGi4R3ijgxA2BeKNqK5l/UwCm986ywXM+PMX8jQMWYonPt6QFTfvxk5LkMmSUYpFOFu5sAOz8jL0dAbRNm8lGToB+JDyyQJaDqEM15VLcC7/hu7g6s7vJNWAfUys4H363hKe5lZQm9FoGXTQ8lQdB04t89/1O/w1cDnyilFU=';

$userId = 'Ue79f91fc4c149e18249b25ccc65b0519';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

