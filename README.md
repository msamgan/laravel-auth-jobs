# This package allows you to authorize you laravel jobs.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mrpunyapal/laravel-auth-jobs.svg?style=flat-square)](https://packagist.org/packages/mrpunyapal/laravel-auth-jobs)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mrpunyapal/laravel-auth-jobs/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mrpunyapal/laravel-auth-jobs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mrpunyapal/laravel-auth-jobs.svg?style=flat-square)](https://packagist.org/packages/mrpunyapal/laravel-auth-jobs)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require mrpunyapal/laravel-auth-jobs
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-auth-jobs-config"
```

This is the contents of the published config file:

```php
return [
    // No configuration options yet
];
```

## Usage

This package provides two middleware: `AuthenticateJob`, you can add this middleware to your job class. and you can now access `auth()->user()` in your job class.

### Job Class

```php
use App\Models\Example;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use MrPunyapal\LaravelAuthJobs\Http\Middleware\AuthenticateJob;

class ExampleJob implements ShouldQueue
{
    use Queueable;

    /**
     * Get the middleware the job should pass through.
     *
     * @return array<int, object>
     */
    public function middleware(): array
    {
        return [new AuthenticateJob];
    }

    public function handle()
    {
        // You can now access auth()->user() here
        $user = auth()->user();

        // authorize your actions
        Gate::authorize('view', Example::class);
    }
}

```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Punyapal Shah](https://github.com/MrPunyapal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
