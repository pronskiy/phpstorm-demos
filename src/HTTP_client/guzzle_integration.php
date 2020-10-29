<?php /** @noinspection PhpUnhandledExceptionInspection */

require __DIR__ . '/../../vendor/autoload.php';


$client = new \GuzzleHttp\Client();
$response = $client->request(
    'POST',
    '/post',
    [
        'base_uri' => 'https://httpbin.org',
        'json' => ['foo' => 'bar'],
    ],
);

echo $response->getStatusCode();
echo $response->getHeaderLine('content-type');
echo $response->getBody();
