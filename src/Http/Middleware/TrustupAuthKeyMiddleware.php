<?php

namespace Deegitalbe\LaravelTrustupIoHealthChecker\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TrustupAuthKeyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $authorizationKey = request()->header('X-Server-Authorization');
        if (! $authorizationKey || $authorizationKey !== env('TRUSTUP_SERVER_AUTHORIZATION')) {
            return response('Invalid authorization key.', 401);
        }

        return $next($request);
    }
}
