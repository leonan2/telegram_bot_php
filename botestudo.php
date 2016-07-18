<?php

$botToken = "263074817:AAGLTJYhzahHybKzyUzFVFEuk8LpxkZkjqc";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

print_r($updateArray);
