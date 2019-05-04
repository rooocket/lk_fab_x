<?php

$chat_array = array(
    293854654
);

$bot_id          = $_REQUEST['bot_id'];
$bot_token       = $_REQUEST['bot_token'];
$bot_text        = $_REQUEST['bot_text'];
$api            = 'https://api.telegram.org/bot' . $bot_id . ':' . $bot_token;


$output         = json_decode(file_get_contents($api . '/getUpdates'));
$chat_id        = $output->result[0]->message->chat->id;
//echo $chat_id;

//Отправляем сообщение
foreach ($chat_array as $chat) {
    $message = empty($bot_text) ? 'Новая заявка на сайте' : $bot_text;
    file_get_contents($api . '/sendMessage?chat_id=' . $chat . '&text=' . urlencode($message));
}

//
//
//
//
//
//function vd($requerst) {
//    echo '<pre>';
//    var_dump($requerst);
//    echo '</pre>';
//}