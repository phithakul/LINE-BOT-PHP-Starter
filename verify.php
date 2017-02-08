<?php
$access_token = 'YBSRs8RsUu6uTjsOSA3aTB1brtR1zdOKTv4MYWpW/T9VXvYdwnRPNnwPv6VuUWXlNoRUsSYIRiXJz/y55+W6Dij1bEGVrqcLVoLTgMYeNCR0WiO9i0nWMuxAeTb2qQwGtzaNtf+rkgAuu/PttjuR7wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/oauth/verify';

$headers = array('Content-Type: application/x-www-form-urlencoded');
$data = array('access_token=' => $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;