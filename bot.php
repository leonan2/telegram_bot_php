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
//$response = $telegram->getUpdates();

//$updateArray = json_decode($updates, TRUE);
//$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

$content = file_get_contents("php://input");
$update = json_decode($content, true);
$hello = "hello";


if ($update) {
  $response = $telegram->sendMessage([
    'chat_id' => $update['message']['chat']['id'],
    'text' => $update['message']['text']
  ]);
}
