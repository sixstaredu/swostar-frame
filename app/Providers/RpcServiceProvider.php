<?php
namespace App\Providers;

use SwoStar\Rpc\RpcServiceProvider as ServiceProvider;

/**
 *
 */
class RpcServiceProvider extends ServiceProvider
{
    protected $services;

    protected function provider()
    {
        $this->services = function($serviceName){
            $data = $this->app->make('consul')->health($serviceName)->getResult();
            $address = [];
            foreach ($data as $k => $v) {
                //判断当前的服务是否是活跃的,并且是当前想要去查询服务
                // $address[] = $v['Service']['Address'] . ":" . $v['Service']['Port'];

                $address[] = [
                    "host" => $v['Service']['Address'],
                    "port" => $v['Service']['Port']
                ];
            }
            return $address;
        };
    }

    public function boot()
    {
        parent::boot();
    }
}
