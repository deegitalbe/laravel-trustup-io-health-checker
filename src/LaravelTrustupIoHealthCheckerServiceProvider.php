<?php

namespace Deegitalbe\LaravelTrustupIoHealthChecker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Deegitalbe\LaravelTrustupIoHealthChecker\Commands\LaravelTrustupIoHealthCheckerCommand;

class LaravelTrustupIoHealthCheckerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-trustup-io-health-checker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-trustup-io-health-checker_table')
            ->hasCommand(LaravelTrustupIoHealthCheckerCommand::class);
    }
}
