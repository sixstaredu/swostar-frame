<?php
namespace App\Listener;

use SwoStar\Event\Listener;
use Swoole\Coroutine;

class StopListener extends Listener
{
    protected $name = 'swoole:stop';

    public function handler($swoStarServer = null, $swooleServer  = null)
    {
        Coroutine::create(function(){
            $this->deregisterConsul();
        });
    }

    protected function deregisterConsul()
    {
        $consul = $this->app->make('consul');

        $config = $this->app->make('config')->get("consul.service");

        dd($config["ID"], "注销cousl");
        $consul->deregisterService($config["ID"]);
    }
}
