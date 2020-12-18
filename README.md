# clevercloud-php

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gaelreyrol/clevercloud-php.svg?style=flat-square)](https://packagist.org/packages/gaelreyrol/clevercloud-php)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/gaelreyrol/clevercloud-php/run-tests/main?label=tests&style=flat-square)](https://github.com/gaelreyrol/clevercloud-php/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gaelreyrol/clevercloud-php.svg?style=flat-square)](https://packagist.org/packages/gaelreyrol/clevercloud-php)

> [WIP] A PHP client for Clever Cloud API

## Installation

You can install the package via composer:

```bash
composer require gaelreyrol/clevercloud-php
```

## Usage

```php
$cc = new CleverCloud\CleverCloud([
    'consumer_key' => 'my_key',
    'consumer_secret' => 'my_secret',
    'token' => 'my_token',
    'token_secret' => 'my_token_secret',
]);
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

- [Gaël Reyrol](https://github.com/GaelReyrol)
- [All Contributors](../../contributors)

## License

The Apache-2.0 License. Please see [License File](LICENSE) for more information.
