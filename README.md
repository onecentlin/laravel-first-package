# First Laravel Package
=============

This is my first laravel package for Laravel v5.x

## Installation

Add repositories to composer.json

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/onecentlin/laravel-first-package.git"
        }
    ],
    
Then place require new package for your laravel installation via composer.json

    "require": {
        "onecentlin/laravel-first-package": "dev-master"
    }   

Then do ```composer update```

### Registering to use it with laravel

Add following lines to ```config/app.php```

ServiceProvider array

```php
'Onecentlin\FirstPackage\FirstPackageServiceProvider'
```

Alias array
```php
'FirstPackage' => 'Onecentlin\FirstPackage\FirstPackage'
```