# laravel-toastr

[![Latest Version on Packagist](https://img.shields.io/packagist/v/palpalani/laravel-toastr.svg?style=flat-square)](https://packagist.org/packages/palpalani/laravel-toastr)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/palpalani/laravel-toastr/run-tests?label=tests)](https://github.com/palpalani/laravel-toastr/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/palpalani/laravel-toastr/Check%20&%20fix%20styling?label=code%20style)](https://github.com/palpalani/laravel-toastr/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/palpalani/laravel-toastr.svg?style=flat-square)](https://packagist.org/packages/palpalani/laravel-toastr)

Implements toastr.js for Laravel

## Installation

**Bower**

to install a plugin via Bower run

***bower install toastr***

###1
Link to toastr.css  ```<link href="toastr.css" rel="stylesheet"/>```

###2 
Link to toastr.js  ```<script src="toastr.js"></script>```

###3
You can install the package via composer:

```bash
composer require palpalani/laravel-toastr
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="palPalani\Toastr\ToastrServiceProvider" --tag="laravel-toastr-config"
```

This is the contents of the published config file:

```php
return [
    'options' => [
        "progressBar" => true,
        "positionClass" =>"toast-bottom-right",
        "preventDuplicates"=> false,
        "showDuration" => 300,
        "hideDuration" => 1000,
        "timeOut" => 5000,
        "extendedTimeOut" => 1000,
        "showEasing" => "swing",
        "hideEasing"=> "linear",
        "showMethod" => "fadeIn",
        "hideMethod" => "fadeOut",
    ]
];
```

edit `config/toastr.php` and set the `options` array to whatever you want to pass to Toastr. These options are set as 
the default options and can be overridden by passing an array of options to any of the methods in the **Usage** section.

## Usage
-----

Include jQuery and [toastr.js](http://codeseven.github.io/toastr/) and plugin styles in your master view template  

after everything is done do
``` html
{!! Toastr::render() !!}
```
in your template just before body closing tag or after toastr.js script instantiated in your file.

You can use these methods in your controllers to insert a toast:
  - `Toastr::warning($message, $title = null, $options = [])` - add a warning toast
  - `Toastr::error($message, $title = null, $options = [])` - add an error toast
  - `Toastr::info($message, $title = null, $options = [])` - add an info toast
  - `Toastr::success($message, $title = null, $options = [])` - add a success toast
  - `Toastr::add($type: warning|error|info|success, $message, $title = null, $options = [])` - add a toast
  - **`Toastr::clear()` - clear all current toasts** don't forget to use it

---
For a list of available options, see [toastr.js' documentation](http://codeseven.github.io/toastr/demo.html).

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

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/palpalani/laravel-toastr/tags).

## Credits

- [palPalani](https://github.com/palPalani)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
