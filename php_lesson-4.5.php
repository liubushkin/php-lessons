
<?php

$ip = $_SERVER['REMOTE_ADDR'];
$ip_data = @json_decode(file_get_contents("https://api.2ip.ua/geo.json?ip=" . $ip));
echo "IP-адрес: " . $ip . "<br>";
//echo "Город: " . $ip_data->region . "<br>";
//echo "Страна: " . $ip_data->country . "<br>";
echo "Дополнительно о IP: https://api.2ip.ua/geo.json?ip=" . $ip;

?>