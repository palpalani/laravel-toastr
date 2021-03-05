<?php namespace palPalani\Toastr;

use Illuminate\Support\ServiceProvider;

class ToastrServiceProvider extends ServiceProvider
{

     /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/config.php' => config_path('toastr.php'),
            ], 'laravel-toastr-config');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/toastr.php', 'toastr');

        $this->app->singleton('toastr', function ($app) {
            return new Toastr($app['session'], $app['config']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['toastr'];
    }
}
