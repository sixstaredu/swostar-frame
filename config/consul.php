<?php
return [
    // 咱不去支持集群
    "consul" => [
        "host" => '192.168.169.99',
        "port" => 8500
    ],
    "service" => [
        'ID'   => "swo-1",
        'Name' => "swo",
        'Tags' => [
            'rpc'
        ],
        'Address' => "192.168.169.99",
        'Port'    => 7600,
        // "Check" => [
        //     "name"     => "swoft.goods.server",
        //     // 192.168.169.200 这是 swoft 的服务宿主机地址
        //     "tcp"      => "192.168.169.200:".env("CONSUL_CHECK_PORT"),
        //     "interval" => '10s',
        //     "timeout"  => '2s'
        // ]
    ]
];
