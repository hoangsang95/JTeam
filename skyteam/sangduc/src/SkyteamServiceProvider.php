<?php

namespace skyteam\sangduc;

use Illuminate\Support\ServiceProvider;

class SkyteamServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'routes/web.php';
        $this->app->make('skyteam\sangduc\SampleController');
    }
}
