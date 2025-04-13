<?php

namespace MrPunyapal\LaravelAuthJobs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MrPunyapal\LaravelAuthJobs\Commands\LaravelAuthJobsCommand;

class LaravelAuthJobsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-auth-jobs')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_auth_jobs_table')
            ->hasCommand(LaravelAuthJobsCommand::class);
    }
}
