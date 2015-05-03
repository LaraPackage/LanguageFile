# Laravel Language File Creator

[![Build Status](https://travis-ci.org/LaraPackage/LanguageFile.svg)](https://travis-ci.org/LaraPackage/LanguageFile) 
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/3717a477-28d4-4688-8764-98e2e48f5e9e/mini.png)](https://insight.sensiolabs.com/projects/3717a477-28d4-4688-8764-98e2e48f5e9e) 
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/LaraPackage/LanguageFile/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/LaraPackage/LanguageFile/?branch=master) 
[![Code Coverage](https://scrutinizer-ci.com/g/LaraPackage/LanguageFile/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/LaraPackage/LanguageFile/?branch=master) 
[![Latest Stable Version](https://poser.pugx.org/larapackage/languagefile/v/stable)](https://packagist.org/packages/larapackage/languagefile) 
[![License](https://poser.pugx.org/larapackage/languagefile/license)](https://packagist.org/packages/larapackage/languagefile)


## About

This package creates a ready-to-go language file for Laravel from an array or a traversable object (i.e. collections).

## Tests

```
vendor/bin/phpunit
```

## Usage

To install the generated file [see the docs](http://laravel.com/docs/5.0/localization).

```php
$tags = ['key' => 'value', 'key2' => 'value'];

// this creates a ready to go php language file for Laravel
$fileString = \LanguageFileCreator::make($tags);
```

### Service Provider & Facade

If you want to use the facade use the service provider by adding it to your `config/app.php`.  You will need to add 
the facade there as well.

```php
'providers' => [
    //...
    LaraPackage\LanguageFile\ServiceProvider::class,
];

'aliases' => [
    //...
    'LanguageFileCreator' => LaraPackage\LanguageFile\Facades\LanguageFileCreator::class,
];
```
