<?php

$name_bot       = 'LkFabXBot';
$site           = 'https://lkfabxbot.herokuapp.com';
$access_token   = '742869666:AAGDllupJpDtVGQ6scurdONkGhk2pJ8SIjM';
$api            = 'https://api.telegram.org/bot' . $access_token;

//
$output = json_decode(file_get_contents($GLOBALS['api'] . '/getUpdates'));
vd($output);







function vd($requerst) {
    echo '<pre>';
    var_dump($requerst);
    echo '</pre>';
}