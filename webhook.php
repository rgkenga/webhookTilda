<?php  
header('Access-Control-Allow-Origin: *');
$headers = "From: rgkenga@yandex.ru";
$message = print_r($_POST,true);
@mail('rgkenga@yandex.ru', 'Tilda TEST', $message, $headers);
echo "ok";
?>
