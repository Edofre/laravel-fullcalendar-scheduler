# WIP
# Laravel fullcalendar scheduler component

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require edofre/laravel-fullcalendar-scheduler
```

or add

```
"edofre/laravel-fullcalendar-scheduler": "*"
```

to the ```require``` section of your `composer.json` file.

## Configuration

Publish assets and configuration files
```
php artisan vendor:publish --tag=config
php artisan vendor:publish --tag=fullcalendar
```

Add the ServiceProvider to your config/app.php
```php
'providers' => [
        ...
        Edofre\FullcalendarScheduler\FullcalendarSchedulerServiceProvider::class,
    ],
```

And add the facade
```php
'aliases' => [
        ...
        'Fullcalendar' => Edofre\FullcalendarScheduler\Facades\FullcalendarScheduler::class,
    ],
```

### Example
// TODO