<?php

namespace Onecentlin\FirstPackage;

use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        return new FirstPackage();
    }

    public function register()
    {
    }
}
