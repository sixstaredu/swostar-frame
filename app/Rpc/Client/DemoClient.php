<?php
namespace App\Rpc\Client;

use SwoStar\Rpc\RpcClient;

class DemoClient extends RpcClient
{
    protected $service = "swostar";

    protected $classType = \App\Rpc\Service\DemoService::class;
}
