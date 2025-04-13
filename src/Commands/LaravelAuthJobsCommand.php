<?php

namespace MrPunyapal\LaravelAuthJobs\Commands;

use Illuminate\Console\Command;

class LaravelAuthJobsCommand extends Command
{
    public $signature = 'laravel-auth-jobs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
