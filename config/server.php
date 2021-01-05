<?php
return [
  "http" => [
      "host" => "0.0.0.0",
      "port" => 9500,
  ],
  "swoole" => [

  ],
  "rpc" => [
      "flag" => true, // 是否开启rpc
      "type" => SWOOLE_SOCK_TCP,
      "host" => "127.0.0.1",
      "port" => 8300,
      "swoole" => [

      ]
  ],

];
