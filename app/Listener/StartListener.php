<?php
namespace App\Listener;

use SwoStar\Event\Listener;
use Swoole\Coroutine;

class StartListener extends Listener
{
    protected $name = 'swoole:start';

    public function handler($swoStarServer = null, $swooleServer  = null)
    {
        // Coroutine::create(function(){
        //     $this->registerConsul();
        // });
    }

    protected function registerConsul()
    {
        $consul = $this->app->make('consul');

        $config = $this->app->make('config')->get("consul.service");

        $consul->registerService($config);
    }
}
