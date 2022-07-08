<?php

namespace Deegitalbe\LaravelTrustupIoHealthChecker\Tests;

use Deegitalbe\LaravelTrustupIoHealthChecker\LaravelTrustupIoHealthCheckerServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Deegitalbe\\LaravelTrustupIoHealthChecker\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelTrustupIoHealthCheckerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-trustup-io-health-checker_table.php.stub';
        $migration->up();
        */
    }
}
