<?php

$ip = $_GET['ip'];
echo "IP-адрес из строки запроса: " . $ip . "<br>";

$ip1 = $_SERVER['REMOTE_ADDR'];
$ip_data = @json_decode(file_get_contents("https://api.2ip.ua/geo.json?ip=" . $ip1));
echo "IP-адрес через сервис 2ip: " . $ip1 . "<br>";

if($ip == $ip1) {
    echo "IP-адрес верный";
} else {
    echo "IP-адрес неверный";
}

?>
