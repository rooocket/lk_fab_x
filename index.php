<?php

$chat_array = array(
    293854654
);

$name_bot       = 'LkFabXBot';
$site           = 'https://lkfabxbot.herokuapp.com';
$access_token   = '742869666:AAGDllupJpDtVGQ6scurdONkGhk2pJ8SIjM';
$api            = 'https://api.telegram.org/bot' . $access_token;


$output         = json_decode(file_get_contents($api . '/getUpdates'));
$chat_id        = $output->result[0]->message->chat->id;
echo $chat_id;







function vd($requerst) {
    echo '<pre>';
    var_dump($requerst);
    echo '</pre>';
}