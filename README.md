# TH Presents: flex-n-gate-applicants

## Installation

You can install the package via composer:

```bash
composer require thagenbeek/flex-n-gate-applicants
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="flex-n-gate-applicants-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="flex-n-gate-applicants-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="flex-n-gate-applicants-views"
```

## Usage

```php
$flexNGateApplicants = new Thagenbeek\FlexNGateApplicants();
echo $flexNGateApplicants->echoPhrase('Hello, Thagenbeek!');
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

- [Tobias Hagenbeek](https://github.com/thagenbeek)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
