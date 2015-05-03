# Laravel Language File Creator

[![Build Status](https://travis-ci.org/LaraPackage/LanguageFile.svg)](https://travis-ci.org/LaraPackage/LanguageFile) 


## About

This package creates a ready-to-go language file for Laravel from an array or a traversable object (i.e. collections).

## Tests

```
vendor/bin/phpunit
```

## Usage

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
