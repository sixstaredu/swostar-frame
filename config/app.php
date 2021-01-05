<?php
return [
    'prioviders' => [
        // swostar的核心事件
        \SwoStar\Event\EventServerProvider::class,
        \SwoStar\Consul\ConsulServerProvider::class,
        \SwoStar\Databases\DatabaseServerProvider::class,

        \App\Providers\RouteServerProvider::class,
        \App\Providers\RpcServiceProvider::class,
    ],
];
