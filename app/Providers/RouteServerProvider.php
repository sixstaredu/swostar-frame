<?php
namespace App\Providers;

use SwoStar\Routes\RouteServerProvider as ServerPriovder;


class RouteServerProvider extends ServerPriovder
{

    public function boot()
    {
        $this->mapRouteHttp();

        $this->mapRouteWebSocket();

        parent::boot();
    }

    public function mapRouteHttp()
    {
        $this->map['http'] = [
            "namespace" => "App\Http\Controller",
            "path"      => $this->app->getBasePath()."/route/http.php",
            "flag"      => "http"
        ];
    }

    public function mapRouteWebSocket()
    {
        $this->map['websocket'] = [
            "namespace" => "App\WebSocket\Controller",
            "path"      => $this->app->getBasePath()."/route/websocket.php",
            "flag"      => "websocket"
        ];
    }
}
