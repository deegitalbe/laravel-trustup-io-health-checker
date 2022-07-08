<?php

namespace Deegitalbe\LaravelTrustupIoHealthChecker\Commands;

use Illuminate\Console\Command;

class LaravelTrustupIoHealthCheckerCommand extends Command
{
    public $signature = 'laravel-trustup-io-health-checker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
