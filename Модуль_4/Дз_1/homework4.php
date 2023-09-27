<?php
$url = 'http://dota2.com/game.php';
$params = array(
    'username' => 'gamer', 
    'password' => '123456qwerty', 
);
$result = file_get_contents($url, false, stream_context_create(array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($params)
    )
)));

echo $result;
?>