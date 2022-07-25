<?php
// Generate a new fullcalendar instance
$calendar = new \AliMehraei\FullcalendarScheduler\FullcalendarScheduler($view);

// Set the events and resources
$calendar->setEvents([
    ['id' => '1', 'resourceId' => 'b', 'start' => '2016-05-07T02:00:00', 'end' => '2016-05-07T07:00:00', 'title' => 'event 1'],
    ['id' => '2', 'resourceId' => 'c', 'start' => '2016-05-07T05:00:00', 'end' => '2016-05-07T22:00:00', 'title' => 'event 2'],
    ['id' => '3', 'resourceId' => 'd', 'start' => '2016-05-06', 'end' => '2016-05-08', 'title' => 'event 3'],
    ['id' => '4', 'resourceId' => 'e', 'start' => '2016-05-07T03:00:00', 'end' => '2016-05-07T08:00:00', 'title' => 'event 4'],
    ['id' => '5', 'resourceId' => 'f', 'start' => '2016-05-07T00:30:00', 'end' => '2016-05-07T02:30:00', 'title' => 'event 5'],
]);
$calendar->setResources([
    ['id' => 'a', 'building' => '460 Bryant', 'title' => 'Auditorium A'],
    ['id' => 'b', 'building' => '460 Bryant', 'title' => 'Auditorium B', 'eventColor' => 'green'],
    ['id' => 'c', 'building' => '460 Bryant', 'title' => 'Auditorium C', 'eventColor' => 'orange'],
    [
        'id'       => 'd',
        'building' => '460 Bryant',
        'title'    => 'Auditorium D',
        'children' => [
            ['id' => 'd1', 'title' => 'Room D1', 'occupancy' => 10],
            ['id' => 'd2', 'title' => 'Room D2', 'occupancy' => 10],
        ],
    ],
    ['id' => 'e', 'building' => '460 Bryant', 'title' => 'Auditorium E'],
    ['id' => 'f', 'building' => '460 Bryant', 'title' => 'Auditorium F', 'eventColor' => 'red'],
    ['id' => 'g', 'building' => '564 Pacific', 'title' => 'Auditorium G'],
    ['id' => 'h', 'building' => '564 Pacific', 'title' => 'Auditorium H'],
    ['id' => 'i', 'building' => '564 Pacific', 'title' => 'Auditorium I'],
    ['id' => 'j', 'building' => '564 Pacific', 'title' => 'Auditorium J'],
    ['id' => 'k', 'building' => '564 Pacific', 'title' => 'Auditorium K'],
    ['id' => 'l', 'building' => '564 Pacific', 'title' => 'Auditorium L'],
    ['id' => 'm', 'building' => '564 Pacific', 'title' => 'Auditorium M'],
    ['id' => 'n', 'building' => '564 Pacific', 'title' => 'Auditorium N'],
    ['id' => 'o', 'building' => '564 Pacific', 'title' => 'Auditorium O'],
    ['id' => 'p', 'building' => '564 Pacific', 'title' => 'Auditorium P'],
    ['id' => 'q', 'building' => '564 Pacific', 'title' => 'Auditorium Q'],
    ['id' => 'r', 'building' => '564 Pacific', 'title' => 'Auditorium R'],
    ['id' => 's', 'building' => '564 Pacific', 'title' => 'Auditorium S'],
    ['id' => 't', 'building' => '564 Pacific', 'title' => 'Auditorium T'],
    ['id' => 'u', 'building' => '564 Pacific', 'title' => 'Auditorium U'],
    ['id' => 'v', 'building' => '564 Pacific', 'title' => 'Auditorium V'],
    ['id' => 'w', 'building' => '564 Pacific', 'title' => 'Auditorium W'],
    ['id' => 'x', 'building' => '564 Pacific', 'title' => 'Auditorium X'],
    ['id' => 'y', 'building' => '564 Pacific', 'title' => 'Auditorium Y'],
    ['id' => 'z', 'building' => '564 Pacific', 'title' => 'Auditorium Z'],
]);

// Set options
$calendar->setOptions([
    'now'                => '2016-05-07',
    'editable'           => true, // enable draggable events
    'aspectRatio'        => 1.8,
    'scrollTime'         => '00:00', // undo default 6am scrollTime
    'header'             => [
        'left'   => 'today prev,next',
        'center' => 'title',
        'right'  => 'timelineDay,timelineThreeDays,agendaWeek,month',
    ],
    'defaultView'        => 'timelineDay',
    'views'              => [
        'timelineThreeDays' => [
            'type'     => 'timeline',
            'duration' => ['days' => 3],
        ],
    ],
    'resourceGroupField' => 'building',
]);
