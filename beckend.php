<?php


$api = "https://catfact.ninja/fact";

$ch = curl_init($api);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
if ($http_code !==200) {
    echo 'Ошибка №: '.$http_code;
    exit;
}
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$html = curl_exec($ch);
curl_close($ch);


echo $html;
?>