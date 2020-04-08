<?php
$access_token = 'ftjUaqpBKtJhT61KMb3yBf38JhTkrWe/VZvJEjXqVzgLmCr2CxjR0xIEqJ298duOdHRL22Jd90NmSDJqYtZwWgnY6NymB1gAhxelTvgLHUddeGvpAH6vkwpXCTKi3TMYKmfMzKNAedwCC/w96RlwmwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
