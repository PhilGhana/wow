<?php

namespace Wisp1999\Wow;

use Illuminate\Support\ServiceProvider;

class WowServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //更改路由位置
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //註冊Controller
        $this->app->make(WowController::class);
    }
}
