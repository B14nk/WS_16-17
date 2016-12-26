<?php


$botToken = "207988270:AAEg1huSeSKcyQPmitmPhYasOZY31pZfqtQ";
$ website = "https://api.telegram.org/bot".botToken;

$update = file_get_contents($website."getupdates");

$updateArray = json_decode($update, TRUE);

$chatID = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."sendmessage?chat_id=".$chatID."&text=test");

?>
