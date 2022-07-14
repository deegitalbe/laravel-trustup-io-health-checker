<?php

namespace Deegitalbe\LaravelTrustupIoHealthChecker\Commands;

use Illuminate\Console\Command;

class LaravelTrustupIoHealthCheckerCommand extends Command
{
    public $signature = 'health-checker:check';

    public $description = 'Test';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
