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
// Add the resources
$calendar->setResources([
    ['id' => 'a', 'building' => '460 Bryant', 'title' => 'Auditorium A', 'occupancy' => 40],
    ['id' => 'b', 'building' => '460 Bryant', 'title' => 'Auditorium B', 'occupancy' => 40, 'eventColor' => 'green'],
    ['id' => 'c', 'building' => '460 Bryant', 'title' => 'Auditorium C', 'occupancy' => 40, 'eventColor' => 'orange'],
    [
        'id'        => 'd',
        'building'  => '460 Bryant',
        'title'     => 'Auditorium D',
        'occupancy' => 40,
        'children'  => [
            ['id' => 'd1', 'title' => 'Room D1', 'occupancy' => 10],
            ['id' => 'd2', 'title' => 'Room D2', 'occupancy' => 10],
        ],
    ],
    ['id' => 'e', 'building' => '460 Bryant', 'title' => 'Auditorium E', 'occupancy' => 40],
    ['id' => 'f', 'building' => '460 Bryant', 'title' => 'Auditorium F', 'occupancy' => 40, 'eventColor' => 'red'],
    ['id' => 'g', 'building' => '564 Pacific', 'title' => 'Auditorium G', 'occupancy' => 40],
    ['id' => 'h', 'building' => '564 Pacific', 'title' => 'Auditorium H', 'occupancy' => 40],
    ['id' => 'i', 'building' => '564 Pacific', 'title' => 'Auditorium I', 'occupancy' => 40],
    ['id' => 'j', 'building' => '564 Pacific', 'title' => 'Auditorium J', 'occupancy' => 40],
    ['id' => 'k', 'building' => '564 Pacific', 'title' => 'Auditorium K', 'occupancy' => 40],
    ['id' => 'l', 'building' => '564 Pacific', 'title' => 'Auditorium L', 'occupancy' => 40],
    ['id' => 'm', 'building' => '564 Pacific', 'title' => 'Auditorium M', 'occupancy' => 40],
    ['id' => 'n', 'building' => '564 Pacific', 'title' => 'Auditorium N', 'occupancy' => 40],
    ['id' => 'o', 'building' => '564 Pacific', 'title' => 'Auditorium O', 'occupancy' => 40],
    ['id' => 'p', 'building' => '564 Pacific', 'title' => 'Auditorium P', 'occupancy' => 40],
    ['id' => 'q', 'building' => '564 Pacific', 'title' => 'Auditorium Q', 'occupancy' => 40],
    ['id' => 'r', 'building' => '564 Pacific', 'title' => 'Auditorium R', 'occupancy' => 40],
    ['id' => 's', 'building' => '564 Pacific', 'title' => 'Auditorium S', 'occupancy' => 40],
    ['id' => 't', 'building' => '564 Pacific', 'title' => 'Auditorium T', 'occupancy' => 40],
    ['id' => 'u', 'building' => '564 Pacific', 'title' => 'Auditorium U', 'occupancy' => 40],
    ['id' => 'v', 'building' => '564 Pacific', 'title' => 'Auditorium V', 'occupancy' => 40],
    ['id' => 'w', 'building' => '564 Pacific', 'title' => 'Auditorium W', 'occupancy' => 40],
    ['id' => 'x', 'building' => '564 Pacific', 'title' => 'Auditorium X', 'occupancy' => 40],
    ['id' => 'y', 'building' => '564 Pacific', 'title' => 'Auditorium Y', 'occupancy' => 40],
    ['id' => 'z', 'building' => '564 Pacific', 'title' => 'Auditorium Z', 'occupancy' => 40],
]);

// Set options
$calendar->setOptions([
    'now'               => '2016-05-07',
    'editable'          => true, // enable draggable events
    'aspectRatio'       => 1.8,
    'scrollTime'        => '00:00', // undo default 6am scrollTime
    'header'            => [
        'left'   => 'today prev,next',
        'center' => 'title',
        'right'  => 'timelineDay,timelineThreeDays,agendaWeek,month',
    ],
    'defaultView'       => 'timelineDay',
    'views'             => [
        'timelineThreeDays' => [
            'type'     => 'timeline',
            'duration' => ['days' => 3],
        ],
    ],
    'resourceLabelText' => 'Rooms',
    'resourceAreaWidth' => '40%',
    'resourceColumns'   => [
        [
            'group'     => true,
            'labelText' => 'Building',
            'field'     => 'building',
        ],
        [
            'labelText' => 'Room',
            'field'     => 'title',
        ],
        [
            'labelText' => 'Occupancy',
            'field'     => 'occupancy',
        ],
    ],
]);
