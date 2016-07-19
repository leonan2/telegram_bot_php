<?php
require 'vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('263074817:AAGLTJYhzahHybKzyUzFVFEuk8LpxkZkjqc');

/*
$response = $telegram->getMe();

$botId = $response->getId();
$firstName = $response->getFirstName();
$username = $response->getUsername();

echo $response;
*/

//$updates = $telegram->getWebhookUpdates();
$response = $telegram->getUpdates();

//$updateArray = json_decode($response, TRUE);
//$chatId = $updateArray["result"][0]["message"]["chat"]["id"];


print_r($response );
