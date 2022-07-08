# Health checker package for trustup apps

[![Latest Version on Packagist](https://img.shields.io/packagist/v/deegitalbe/laravel-trustup-io-health-checker.svg?style=flat-square)](https://packagist.org/packages/deegitalbe/laravel-trustup-io-health-checker)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/deegitalbe/laravel-trustup-io-health-checker/run-tests?label=tests)](https://github.com/deegitalbe/laravel-trustup-io-health-checker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/deegitalbe/laravel-trustup-io-health-checker/Check%20&%20fix%20styling?label=code%20style)](https://github.com/deegitalbe/laravel-trustup-io-health-checker/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/deegitalbe/laravel-trustup-io-health-checker.svg?style=flat-square)](https://packagist.org/packages/deegitalbe/laravel-trustup-io-health-checker)

Allow to quickly monitor a website.
## Installation

You can install the package via composer:

```bash
composer require deegitalbe/laravel-trustup-io-health-checker
```

You have to push the configuration file :

```bash
php artisan vendor:publish --tag="health-config"
```

Inside the generated `health.php` config file, inside the `'result_stores'`, just enable the `InMemoryHealthResultStore::class` and disable other storages :
```php
'result_stores' => [
    /*
    Spatie\Health\ResultStores\EloquentHealthResultStore::class => [
    'model' => Spatie\Health\Models\HealthCheckResultHistoryItem::class,
    'keep_history_for_days' => 5,
    ],

    Spatie\Health\ResultStores\CacheHealthResultStore::class => [
        'store' => 'file',
    ],

    Spatie\Health\ResultStores\JsonFileHealthResultStore::class => [
        'disk' => 's3',
        'path' => 'health.json',
    ],
    */
    
    Spatie\Health\ResultStores\InMemoryHealthResultStore::class,
],
```

## Usage

You can fetch the in real-time result on the route `/health-json` 

## Credits

- [Romain Vause](https://github.com/romainvausetrustup)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
