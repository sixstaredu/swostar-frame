<?php
$client = new Swoole\Client(SWOOLE_SOCK_TCP);

if (!$client->connect('127.0.0.1', 8300)) {
    exit("connect failed. Error: {$client->errCode}\n");
}
$send = [
    "method" => "App\Rpc\Service\DemoService::getList",
    "params" => []
];

$client->send(json_encode($send));
echo $client->recv();

$client->close();
