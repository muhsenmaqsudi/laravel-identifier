# a Laravel package that makes the best identifiers available for your projects

[![Latest Version on Packagist](https://img.shields.io/packagist/v/muhsenmaqsudi/laravel-identifier.svg?style=flat-square)](https://packagist.org/packages/muhsenmaqsudi/laravel-identifier)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/muhsenmaqsudi/laravel-identifier/run-tests?label=tests)](https://github.com/muhsenmaqsudi/laravel-identifier/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/muhsenmaqsudi/laravel-identifier/Check%20&%20fix%20styling?label=code%20style)](https://github.com/muhsenmaqsudi/laravel-identifier/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/muhsenmaqsudi/laravel-identifier.svg?style=flat-square)](https://packagist.org/packages/muhsenmaqsudi/laravel-identifier)

---
This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require muhsenmaqsudi/laravel-identifier
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Muhsenmaqsudi\Identifier\IdentifierServiceProvider" --tag="laravel-identifier-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Muhsenmaqsudi\Identifier\IdentifierServiceProvider" --tag="laravel-identifier-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravelIdentifier = new Muhsenmaqsudi\Identifier();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [muhsenmaqsudi](https://github.com/muhsenmaqsudi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
