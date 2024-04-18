<?php

declare(strict_types=1);

namespace palPalani\Toastr;

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
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('toastr.php'),
            ], 'laravel-toastr-config');
        }
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        //$this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'toastr');

        $this->app->singleton('toastr', fn($app) => new Toastr($app['session'], $app['config']));
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [
            'toastr',
        ];
    }
}
