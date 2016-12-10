<?php
// Generate a new fullcalendar instance
$calendar = new \Edofre\FullcalendarScheduler\FullcalendarScheduler($view);

// Set the events and resources
$calendar->setEvents([
    ['id' => '1', 'resourceId' => 'b', 'start' => '2016-05-07T02:00:00', 'end' => '2016-05-07T07:00:00', 'title' => 'event 1'],
    ['id' => '2', 'resourceId' => 'c', 'start' => '2016-05-07T05:00:00', 'end' => '2016-05-07T22:00:00', 'title' => 'event 2'],
    ['id' => '3', 'resourceId' => 'd', 'start' => '2016-05-06', 'end' => '2016-05-08', 'title' => 'event 3'],
    ['id' => '4', 'resourceId' => 'e', 'start' => '2016-05-07T03:00:00', 'end' => '2016-05-07T08:00:00', 'title' => 'event 4'],
    ['id' => '5', 'resourceId' => 'f', 'start' => '2016-05-07T00:30:00', 'end' => '2016-05-07T02:30:00', 'title' => 'event 5'],
]);
// Add the resources
$calendar->setResources([
    ['id' => 'a'],
    ['id' => 'b', 'eventColor' => 'green'],
    ['id' => 'c', 'eventColor' => 'orange'],
    ['id' => 'd'],
    ['id' => 'e'],
    ['id' => 'f', 'eventColor' => 'red'],
    ['id' => 'g'],
    ['id' => 'h'],
    ['id' => 'i'],
    ['id' => 'j'],
    ['id' => 'k'],
    ['id' => 'l'],
    ['id' => 'm'],
    ['id' => 'n'],
    ['id' => 'o'],
    ['id' => 'p'],
    ['id' => 'q'],
    ['id' => 'r'],
    ['id' => 's'],
    ['id' => 't'],
    ['id' => 'u'],
    ['id' => 'v'],
    ['id' => 'w'],
    ['id' => 'x'],
    ['id' => 'y'],
    ['id' => 'z'],
]);

// Set options
$calendar->setOptions([
    'header'            => [
        'left'   => 'today prev,next',
        'center' => 'title',
        'right'  => 'timelineDay,timelineThreeDays,agendaWeek,month',
    ],
    'now'               => '2016-05-07',
    'editable'          => true, // enable draggable events
    'aspectRatio'       => 1.8,
    'scrollTime'        => '00:00', // undo default 6am scrollTime
    'defaultView'       => 'timelineDay',
    'views'             => [
        'timelineThreeDays' => [
            'type'     => 'timeline',
            'duration' => ['days' => 3],
        ],
    ],
    'resourceLabelText' => 'Rooms',
    // Add the callbacks
    'resourceText'      => new Edofre\FullcalendarScheduler\JsExpression("
        function(resource) {
            return 'Auditorium ' + ('' + resource.id).toUpperCase();
        }
    "),
    'resourceRender'    => new Edofre\FullcalendarScheduler\JsExpression("
        function(resource, leftCells, rightCells) {
            if (resource.id == 'h') {
                leftCells.css('background-color', 'rgb(255, 243, 206)');
                rightCells.css('background-color', 'rgba(255, 243, 206, .5)');
            }
        }
    "),
]);
