<?php
require 'vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('BOT TOKEN');

$response = $telegram->getMe();

$botId = $response->getId();
$firstName = $response->getFirstName();
$username = $response->getUsername();
