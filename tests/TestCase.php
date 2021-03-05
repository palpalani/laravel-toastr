<?php

namespace palPalani\Toastr\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use palPalani\Toastr\ToastrServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            ToastrServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        /*
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
        */

        /*
        include_once __DIR__.'/../database/migrations/create_laravel_toastr_laravel-toastr-skeleton_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
