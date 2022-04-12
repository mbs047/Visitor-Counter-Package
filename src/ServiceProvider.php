<?php

namespace Devhereco\Visitor;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->app['router']->aliasMiddleware('VisitorCounter', \Devhereco\Visitor\src\Http\Middleware\VisitorCounter::class);


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
