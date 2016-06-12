<?php

namespace Velopress;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Larapress\Larapress\Console\InstallWordpress;

class VelopressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/bootstrap/wordpress.php';

        $this->publishes(
            [__DIR__.'/wordpress/' => public_path()],
            'wordpress'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            InstallWordpress::class
        ]);

        App::bind('wordpress', function() {
            return new Wordpress(); 
        });
    }
}
