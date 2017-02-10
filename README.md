# Laravel fullcalendar scheduler component

[![Latest Stable Version](https://poser.pugx.org/edofre/laravel-fullcalendar-scheduler/v/stable)](https://packagist.org/packages/edofre/laravel-fullcalendar-scheduler)
[![Total Downloads](https://poser.pugx.org/edofre/laravel-fullcalendar-scheduler/downloads)](https://packagist.org/packages/edofre/laravel-fullcalendar-scheduler)
[![Latest Unstable Version](https://poser.pugx.org/edofre/laravel-fullcalendar-scheduler/v/unstable)](https://packagist.org/packages/edofre/laravel-fullcalendar-scheduler)
[![License](https://poser.pugx.org/edofre/laravel-fullcalendar-scheduler/license)](https://packagist.org/packages/edofre/laravel-fullcalendar-scheduler)
[![composer.lock](https://poser.pugx.org/edofre/laravel-fullcalendar-scheduler/composerlock)](https://packagist.org/packages/edofre/laravel-fullcalendar-scheduler)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require edofre/laravel-fullcalendar-scheduler
```

or add

```
"edofre/laravel-fullcalendar-scheduler": "v1.0.1"
```

to the ```require``` section of your `composer.json` file.

### Note 
The fxp/composer-asset plugin is required for this package to install properly.
This plugin enables you to download bower packages through composer.

You can install it using this command:
```
composer global require "fxp/composer-asset-plugin:^1.2.0”
```

This will add the fxp composer-asset-plugin and your composer will be able to find and download the required bower-asset/fullcalendar-scheduler package.
You can find more info on this page: [https://packagist.org/packages/fxp/composer-asset-plugin](https://packagist.org/packages/fxp/composer-asset-plugin).

## Configuration

Publish assets and configuration files
```
php artisan vendor:publish --tag=config
php artisan vendor:publish --tag=fullcalendar-scheduler
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

Use the following as your controller action
```php
/**
 * @return \Illuminate\Http\Response
 */
public function index(\Illuminate\View\Factory $view)
{
    // Generate a new fullcalendar instance
    $calendar = new \Edofre\FullcalendarScheduler\FullcalendarScheduler($view);

    // Set events and resources, commented lines shows how to add them via ajax
    // $calendar->setEvents(route('fullcalendar-scheduler-ajax-events'));
    $calendar->setEvents([
        ['id' => '1', 'resourceId' => 'b', 'start' => '2016-05-07T02:00:00', 'end' => '2016-05-07T07:00:00', 'title' => 'event 1'],
        ['id' => '2', 'resourceId' => 'c', 'start' => '2016-05-07T05:00:00', 'end' => '2016-05-07T22:00:00', 'title' => 'event 2'],
        ['id' => '3', 'resourceId' => 'd', 'start' => '2016-05-06', 'end' => '2016-05-08', 'title' => 'event 3'],
        ['id' => '4', 'resourceId' => 'e', 'start' => '2016-05-07T03:00:00', 'end' => '2016-05-07T08:00:00', 'title' => 'event 4'],
        ['id' => '5', 'resourceId' => 'f', 'start' => '2016-05-07T00:30:00', 'end' => '2016-05-07T02:30:00', 'title' => 'event 5'],
    ]);
    
    // $calendar->setResources(route('fullcalendar-scheduler-ajax-resources'));
    $calendar->setResources([
        ['id' => 'a', 'title' => 'Auditorium A'],
        ['id' => 'b', 'title' => 'Auditorium B', 'eventColor' => 'green'],

['id' => 'c', 'title' => 'Auditorium C', 'eventColor' => 'orange'],
        [
            'id'       => 'd',
            'title'    => 'Auditorium D',
            'children' => [
                ['id' => 'd1', 'title' => 'Room D1'],
                ['id' => 'd2', 'title' => 'Room D2'],
            ],
        ],
        ['id' => 'e', 'title' => 'Auditorium E'],
        ['id' => 'f', 'title' => 'Auditorium F', 'eventColor' => 'red'],
        ['id' => 'g', 'title' => 'Auditorium G'],
        ['id' => 'h', 'title' => 'Auditorium H'],
        ['id' => 'i', 'title' => 'Auditorium I'],
        ['id' => 'j', 'title' => 'Auditorium J'],
        ['id' => 'k', 'title' => 'Auditorium K'],
        ['id' => 'l', 'title' => 'Auditorium L'],
        ['id' => 'm', 'title' => 'Auditorium M'],
        ['id' => 'n', 'title' => 'Auditorium N'],
        ['id' => 'o', 'title' => 'Auditorium O'],
        ['id' => 'p', 'title' => 'Auditorium P'],
        ['id' => 'q', 'title' => 'Auditorium Q'],
        ['id' => 'r', 'title' => 'Auditorium R'],
        ['id' => 's', 'title' => 'Auditorium S'],
        ['id' => 't', 'title' => 'Auditorium T'],
        ['id' => 'u', 'title' => 'Auditorium U'],
        ['id' => 'v', 'title' => 'Auditorium V'],
        ['id' => 'w', 'title' => 'Auditorium W'],
        ['id' => 'x', 'title' => 'Auditorium X'],
        ['id' => 'y', 'title' => 'Auditorium Y'],
        ['id' => 'z', 'title' => 'Auditorium Z'],
    ]);

    // Set options
    $calendar->setOptions([
        'now'               => '2016-05-07',
        'editable'          => true, // enable draggable events
        'aspectRatio'       => 1.8,
        'scrollTime'        => '00:00', // undo default 6am scrollTime
        'defaultView'       => 'timelineDay',
        'views'             => [
            'timelineThreeDays' => [
                'type'     => 'timeline',
                'duration' => [
                    'days' => 3,
                ],
            ],
        ],
        'resourceLabelText' => 'Rooms',
        'eventClick' => new Edofre\FullcalendarScheduler\JsExpression("
                    function(event, jsEvent, view) {
                        console.log(event);
                    }
                "),
                'viewRender' => new Edofre\FullcalendarScheduler\JsExpression("
                    function( view, element ) {
                        console.log(\"View \"+view.name+\" rendered\");
                    }
                "),
    ]);

    return view('fullcalendar-scheduler.index', [
        'calendar' => $calendar,
    ]);
}
```

And then add the following to your view
```php
{!! $calendar->generate() !!}
```
