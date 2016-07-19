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

$updates = $telegram->getWebhookUpdates();

  $updateArray = json_decode($updates, TRUE);
  $chatId = $updateArray["result"][0]["message"]["chat"]["id"];

  $response = $telegram->sendMessage([
    'chat_id' => $chatId,
    'text' => 'Hello World'
  ]);
