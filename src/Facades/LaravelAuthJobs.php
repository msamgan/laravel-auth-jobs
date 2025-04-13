<?php

namespace MrPunyapal\LaravelAuthJobs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MrPunyapal\LaravelAuthJobs\LaravelAuthJobs
 */
class LaravelAuthJobs extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MrPunyapal\LaravelAuthJobs\LaravelAuthJobs::class;
    }
}
