<?php
$access_token = 'GPb2IqytF19A3sHOQVdZbqvopL4CpJmpA7xUO49z7JG/z5rzeG/OkuOiJ6j1ASqHV5Daig1P3sqUDDST/Ec9oPa4pd4Li8M+xH4lAJFuYsnifLJaRCsJOmfQCOf5aBqz8v0tBnMO+G9hXliBTRl1GQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
