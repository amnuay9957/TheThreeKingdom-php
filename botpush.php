<?php



require "vendor/autoload.php";

$access_token = 'Z4L94grrat+Mj/EDYW/ANosMWLRkvLYeW2v/kd+j7v3JvdMd0hpw09B6JiAAjraxqBCd5taYXo/mhPnH8GV3Fh7O+ctXbtsCxTYs2qW/SYMSb740M87VDCkdP0zzUHSPFcsCUIz9Y7KygGKHThn30QdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







