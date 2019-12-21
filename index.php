<?php
$getUpdates         = $_REQUEST['getUpdates'];
$bot_id             = $_REQUEST['bot_id'];
$bot_token          = $_REQUEST['bot_token'];
$bot_text           = $_REQUEST['bot_text'];
$chat_id            = $_REQUEST['chat_id'];
$api                = 'https://api.telegram.org/bot' . $bot_id . ':' . $bot_token;


if(!empty($getUpdates)) {
    $output          = json_decode(file_get_contents($api . '/getUpdates'));
    $chat_id         = $output->result[0]->message->chat->id;

    if($chat_id) {
        echo '{"response": "' . $chat_id . '"}';
    } else {
        echo '{"response": "error_chat_id"}';
    }

} else {
    $message        = empty($bot_text) ? 'Новая заявка на сайте' : $bot_text;
    file_get_contents($api . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
    echo '1';
}


