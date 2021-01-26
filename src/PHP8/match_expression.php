<?php /** @noinspection PhpUnhandledExceptionInspection */
{

    switch ('foo') {
        case 0:
            $result = "Oh no!\n";
            break;
        case 'foo':
            $result = "This is what I expected\n";
            break;
    }
    echo $result;






}
//> Oh no!

// То же самое на match:
echo match ('foo') {
    0 => "Oh no!\n",
    'foo' => "This is what I expected\n",
};
//> This is what I expected


$request_method = '';


    $status = match($request_method) {
        'POST' => $this->handlePost(),
        'GET', 'HEAD' =>  $this->handleGet(),
        default => throw new \Exception('Unsupported'),
    };








match (true) {
    0 => false,
};