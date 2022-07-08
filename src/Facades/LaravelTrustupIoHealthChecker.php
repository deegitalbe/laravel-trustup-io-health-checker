<?php

namespace Deegitalbe\LaravelTrustupIoHealthChecker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deegitalbe\LaravelTrustupIoHealthChecker\LaravelTrustupIoHealthChecker
 */
class LaravelTrustupIoHealthChecker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-trustup-io-health-checker';
    }
}
