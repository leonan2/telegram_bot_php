<?php

$botToken = "263074817:AAGLTJYhzahHybKzyUzFVFEuk8LpxkZkjqc";
$website = "https://api.telegram.org/bot".$botToken;

//$update = file_get_contents($website."/getupdates");

//webhook
$update = file_get_contents("php://input");

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");

print_r($updateArray);

