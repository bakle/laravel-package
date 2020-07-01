<?php

namespace Vendor\Package\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Vendor\Package\PackageServiceProvider;

class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array|string[]
     */
    protected function getPackageProviders($app)
    {
        return [PackageServiceProvider::class];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'test_connection');
        $app['config']->set('database.connections.test_connection', [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'port' => '3306',
            'database' => env('DB_DATABASE', 'database'),
            'username' => env('DB_USERNAME', 'username'),
            'password' => env('DB_PASSWORD', 'password'),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
        ]);
    }
}
