<?php

namespace Deegitalbe\LaravelTrustupIoHealthChecker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use function Pest\Laravel\artisan;

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
