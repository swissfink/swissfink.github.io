<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
where, XXXXXXXXXXXXXXXXXXXXXXX - your bot's token received earlier */

$sitename = "Osaka - One Page Portfolio Bootstrap 4"; // Add Your Site Name
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$token = ""; // paste your bot's token
$chat_id = ""; // paste your chat id (-XXXXXXXXXX)
$arr = array(
  'SiteName' => $sitename,
  'Name: ' => $name,
  'Email:' => $email,
  'Text: ' => $text
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");