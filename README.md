# laravel-tinify

This package provides integration with the Tinify a.k.a TinyPNG API.

[![Latest Stable Version](https://poser.pugx.org/msonowal/laravel-tinify/v/stable)](https://packagist.org/packages/msonowal/laravel-tinify)
[![Total Downloads](https://poser.pugx.org/msonowal/laravel-tinify/downloads)](https://packagist.org/packages/msonowal/laravel-tinify)

The package simply provides a Tinify facade that acts as a wrapper to the [tinify/tinfiy-php](https://github.com/tinify/tinify-php)

It was originaly developed by [Marvin Oßwald](https://github.com/marvinosswald/laravel-tinify)

I added functionality to use of laravel bulit in config cache helper which was having issues of returning null when configs are cached via `php artisan config:cache` because it was directly loading via `env` helper.
So, I converted it to use the api_key from config which can be defined to load from `env` and still use the 
`php artisan config:cache command` and it works.

### For Laravel < 5.5, please use the [1.0.2 Tag](https://github.com/msonowal/laravel-tinify/tree/1.0.2)!

## Installation

Install the package via Composer:

```
   composer require msonowal/laravel-tinify
```

### Laravel 5.5+:

If you don't use auto-discovery, add the ServiceProvider to the providers array in ```config/app.php```


```php
    ...
    msonowal\LaravelTinify\LaravelTinifyServiceProvider::class
    ...
```

Add alias to ```config/app.php```:

```php
    ...
    'Tinify' => msonowal\LaravelTinify\Facades\Tinify::class
    ...
```

## Configuration
Publish the Configuration for the package which will create the config file tinify.php inside config directory

`php artisan vendor:publish --provider="msonowal\LaravelTinify\LaravelTinifyServiceProvider"`

Set a env variable "TINIFY_APIKEY" with your issued apikey or set api_key into config/tinify.php 

This package is available under the [MIT license](http://opensource.org/licenses/MIT).
