<?php
namespace LaraPackage\LanguageFile;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        \App::bind('LaraPackage\LanguageFile\Creator', function()
        {
            return new Creator();
        });
    }
}
