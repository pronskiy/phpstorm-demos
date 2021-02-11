<?php /** @noinspection PhpUnhandledExceptionInspection */



    $client = new \GuzzleHttp\Client();
    $response = $client->get('https://httpbin.org/get');





$url = 'http://google.com';
$ch = curl_init($url);
curl_exec($ch);
