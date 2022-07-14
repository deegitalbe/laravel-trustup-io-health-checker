<?php

use Deegitalbe\LaravelTrustupIoHealthChecker\Http\Middleware\TrustupAuthKeyMiddleware;
use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckJsonResultsController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

//Route::get('health-dashboard', HealthCheckResultsController::class);

Route::middleware([TrustupAuthKeyMiddleware::class])->group(function () {
    Route::get('trustup-io/health/json', HealthCheckJsonResultsController::class);
    Route::get('trustup-io/health/ping', fn () => 'pong');
});
