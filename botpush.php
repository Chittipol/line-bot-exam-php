<?php



require "vendor/autoload.php";

$access_token = 'ftjUaqpBKtJhT61KMb3yBf38JhTkrWe/VZvJEjXqVzgLmCr2CxjR0xIEqJ298duOdHRL22Jd90NmSDJqYtZwWgnY6NymB1gAhxelTvgLHUddeGvpAH6vkwpXCTKi3TMYKmfMzKNAedwCC/w96RlwmwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '67ac7eab7a054915f36d3a547dae93bd';

$pushID = 'Ubb0fd4ca1eff80b3f82e3abe067f9268';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







