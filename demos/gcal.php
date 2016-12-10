<?php
// Generate a new fullcalendar instance
$calendar = new \Edofre\FullcalendarScheduler\FullcalendarScheduler($view);

// Set the events and resources
$calendar->setEvents([
    // US Holidays
    'events' => 'usa__en@holiday.calendar.google.com',
]);

// Add the resources
$calendar->setResources([
    /*
       NOTE: unfortunately, Scheduler doesn't know how to associated events from
       Google Calendar with resources, so if you specify a resource list,
       nothing will show up :(  Working on some solutions.
    */
]);

// Set options
$calendar->setOptions([
    'now'                  => '2016-05-07',
    'editable'             => true, // enable draggable events
    'aspectRatio'          => 1.8,
    'scrollTime'           => '00:00', // undo default 6am scrollTime
    'header'               => [
        'left'   => 'today prev,next',
        'center' => 'title',
        'right'  => 'timelineMonth,timelineYear',
    ],
    'defaultView'          => 'timelineMonth',

    // THIS KEY WON'T WORK IN PRODUCTION!!!
    // To make your own Google API key, follow the directions here:
    // http://fullcalendar.io/docs/google_calendar/
    'googleCalendarApiKey' => 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

    // Add the callbacks
    'dayClick'             => new Edofre\FullcalendarScheduler\JsExpression("
            function (event) {
                // opens events in a popup window
                window.open(event.url, 'gcalevent', 'width=700,height=600');
                return false;
            }
        "),
]);
