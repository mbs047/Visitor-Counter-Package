<?php

namespace Devhereco\Visitor;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    protected $middleware = [
        'VisitorCounter' => 'Vendor\Visitor\src\Http\Middleware\VisitorCounter'
    ];

    public function boot(Illuminate\Routing\Router $router)
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $router->middleware('custom_auth', 'Path\To\Your\Middleware\custom_auth');


        //$this->mergeConfigFrom(__DIR__.'/configs/visitor.php', 'visitor');

        /* $this->publishes([
            __DIR__.'/configs/visitor.php' => config_path('visitor.php'),
        ]); */
    }

    public function register()
    {
        $this->app->singleton(Visitor::class, function () {
            return new Visitor();
        });
    }

}
