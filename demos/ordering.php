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
    ['id' => 'a', 'title' => 'Auditorium A', 'occupancy' => 40],
    ['id' => 'b', 'title' => 'Auditorium B', 'occupancy' => 40, 'eventColor' => 'green'],
    ['id' => 'c', 'title' => 'Auditorium C', 'occupancy' => 40, 'eventColor' => 'orange'],
    ['id' => 'd', 'title' => 'Auditorium D', 'occupancy' => 40,],
    ['id' => 'e', 'title' => 'Auditorium E', 'occupancy' => 40],
    ['id' => 'f', 'title' => 'Auditorium F', 'occupancy' => 40, 'eventColor' => 'red'],
    ['id' => 'g', 'title' => 'Auditorium G', 'occupancy' => 40],
    ['id' => 'h', 'title' => 'Auditorium H', 'occupancy' => 40],
    ['id' => 'i', 'title' => 'Auditorium I', 'occupancy' => 50],
    ['id' => 'j', 'title' => 'Auditorium J', 'occupancy' => 50],
    ['id' => 'k', 'title' => 'Auditorium K', 'occupancy' => 40],
    ['id' => 'l', 'title' => 'Auditorium L', 'occupancy' => 40],
    ['id' => 'm', 'title' => 'Auditorium M', 'occupancy' => 40],
    ['id' => 'n', 'title' => 'Auditorium N', 'occupancy' => 80],
    ['id' => 'o', 'title' => 'Auditorium O', 'occupancy' => 80],
    ['id' => 'p', 'title' => 'Auditorium P', 'occupancy' => 40],
    ['id' => 'q', 'title' => 'Auditorium Q', 'occupancy' => 40],
    ['id' => 'r', 'title' => 'Auditorium R', 'occupancy' => 40],
    ['id' => 's', 'title' => 'Auditorium S', 'occupancy' => 40],
    ['id' => 't', 'title' => 'Auditorium T', 'occupancy' => 40],
    ['id' => 'u', 'title' => 'Auditorium U', 'occupancy' => 40],
    ['id' => 'v', 'title' => 'Auditorium V', 'occupancy' => 40],
    ['id' => 'w', 'title' => 'Auditorium W', 'occupancy' => 40],
    ['id' => 'x', 'title' => 'Auditorium X', 'occupancy' => 40],
    ['id' => 'y', 'title' => 'Auditorium Y', 'occupancy' => 40],
    ['id' => 'z', 'title' => 'Auditorium Z', 'occupancy' => 40],
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
    'resourceAreaWidth' => '30%',
    'resourceColumns'   => [
        [
            'labelText' => 'Room',
            'field'     => 'title',
        ],
        [
            'labelText' => 'Occupancy',
            'field'     => 'occupancy',
        ],
    ],
    'resourceOrder'     => '-occupancy,title', // when occupancy tied, order by title
]);
