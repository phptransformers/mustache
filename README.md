# Mustache for PHPTransformers

[![Latest Version](https://img.shields.io/github/release/phptransformers/mustache.svg?style=flat-square)](https://github.com/phptransformers/mustache/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/phptransformers/mustache/master.svg?style=flat-square)](https://travis-ci.org/phptransformers/mustache)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/phptransformers/mustache.svg?style=flat-square)](https://scrutinizer-ci.com/g/phptransformers/mustache/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/phptransformers/mustache.svg?style=flat-square)](https://scrutinizer-ci.com/g/phptransformers/mustache)
[![Total Downloads](https://img.shields.io/packagist/dt/phptransformers/mustache.svg?style=flat-square)](https://packagist.org/packages/phptransformers/mustache)

[Mustache.php](https://github.com/bobthecow/mustache.php) support for [PHPTransformers](http://github.com/phptransformers/phptransformer).

## Install

Via Composer

``` bash
$ composer require phptransformers/mustache
```

## Usage

``` php
$engine = new BladeTransformer();
echo $engine->render('Hello, {{name}}!', array('name' => 'phptransformers'));
```

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email robloach@gmail.com instead of using the issue tracker.

## Credits

- [Rob Loach](https://github.com/RobLoach)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
