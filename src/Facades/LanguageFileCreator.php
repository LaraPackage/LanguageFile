<?php
namespace LaraPackage\LanguageFile\Facades;

class LanguageFileCreator extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LaraPackage\LanguageFile\Creator';
    }
}
