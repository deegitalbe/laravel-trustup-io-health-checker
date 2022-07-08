<?php

namespace Deegitalbe\LaravelTrustupIoHealthChecker;

use Deegitalbe\LaravelTrustupIoHealthChecker\Commands\LaravelTrustupIoHealthCheckerCommand;
use Spatie\CpuLoadHealthCheck\CpuLoadCheck;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\HorizonCheck;
use Spatie\Health\Checks\Checks\RedisCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Facades\Health;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasRoute('web')
            ->hasCommand(LaravelTrustupIoHealthCheckerCommand::class);
    }

    public function boot()
    {
        parent::boot();

        Health::checks([
            UsedDiskSpaceCheck::new(),
            CpuLoadCheck::new(),
            DatabaseCheck::new(),
            DebugModeCheck::new(),
            EnvironmentCheck::new(),
            CacheCheck::new(),
            HorizonCheck::new(),
            ScheduleCheck::new(),
        ]);
    }
}
