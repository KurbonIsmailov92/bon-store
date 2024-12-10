<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'store:install';

    protected $description = 'Installation';

    public function handle(): int
    {
        return self::SUCCESS;
    }
}
