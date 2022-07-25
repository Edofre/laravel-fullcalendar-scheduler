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
            'duration' => ['days' => 3],
        ],
    ],
    'eventOverlap'      => false, // will cause the event to take up entire resource height
    'resourceAreaWidth' => '25%',
    'resourceLabelText' => 'Rooms',
    'header'            => [
        'left'   => 'today prev,next',
        'center' => 'title',
        'right'  => 'timelineDay,timelineThreeDays,agendaWeek,month',
    ],
]);
