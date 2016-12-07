<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Edofre\FullcalendarScheduler\CalendarEvent;
use Edofre\FullcalendarScheduler\CalendarResource;
use Illuminate\Http\Request;

class FullcalendarSchedulerController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function ajaxEvents(Request $request)
    {
        // You can use the start and end params from the request here to f.e. filter events
        //        var_dump($request->get('start'));
        //        var_dump($request->get('end'));
        return json_encode([
            new CalendarEvent(["id" => "1", "resourceId" => "b", "start" => Carbon::createFromFormat('Y-m-d\TH:i:s', "2016-05-07T02:00:00"), "end" => Carbon::createFromFormat('Y-m-d\TH:i:s', "2016-05-07T07:00:00"), "title" => "event 1"]),
            new CalendarEvent(["id" => "2", "resourceId" => "c", "start" => Carbon::createFromFormat('Y-m-d\TH:i:s', "2016-05-07T05:00:00"), "end" => Carbon::createFromFormat('Y-m-d\TH:i:s', "2016-05-07T22:00:00"), "title" => "event 2"]),
            new CalendarEvent(["id" => "3", "resourceId" => "d", "start" => Carbon::createFromFormat('Y-m-d', "2016-05-06"), "end" => Carbon::createFromFormat('Y-m-d', "2016-05-08"), "title" => "event 3"]),
            new CalendarEvent(["id" => "4", "resourceId" => "e", "start" => Carbon::createFromFormat('Y-m-d\TH:i:s', "2016-05-07T03:00:00"), "end" => Carbon::createFromFormat('Y-m-d\TH:i:s', "2016-05-07T08:00:00"), "title" => "event 4"]),
            new CalendarEvent(["id" => "5", "resourceId" => "f", "start" => Carbon::createFromFormat('Y-m-d\TH:i:s', "2016-05-07T00:30:00"), "end" => Carbon::createFromFormat('Y-m-d\TH:i:s', "2016-05-07T02:30:00"), "title" => "event 5"]),
        ]);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function ajaxResources(Request $request)
    {
        return json_encode([
            new CalendarResource(["id" => "a", "title" => "Auditorium A"]),
            new CalendarResource(["id" => "b", "title" => "Auditorium B", "eventColor" => "green"]),
            new CalendarResource(["id" => "c", "title" => "Auditorium C", "eventColor" => "orange"]),
            new CalendarResource([
                "id"       => "d",
                "title"    => "Auditorium D",
                "children" => [
                    new CalendarResource(["id" => "d1", "title" => "Room D1"]),
                    new CalendarResource(["id" => "d2", "title" => "Room D2"]),
                ],
            ]),
            new CalendarResource(["id" => "e", "title" => "Auditorium E"]),
            new CalendarResource(["id" => "f", "title" => "Auditorium F", "eventColor" => "red"]),
            new CalendarResource(["id" => "g", "title" => "Auditorium G"]),
            new CalendarResource(["id" => "h", "title" => "Auditorium H"]),
            new CalendarResource(["id" => "i", "title" => "Auditorium I"]),
            new CalendarResource(["id" => "j", "title" => "Auditorium J"]),
            new CalendarResource(["id" => "k", "title" => "Auditorium K"]),
            new CalendarResource(["id" => "l", "title" => "Auditorium L"]),
            new CalendarResource(["id" => "m", "title" => "Auditorium M"]),
            new CalendarResource(["id" => "n", "title" => "Auditorium N"]),
            new CalendarResource(["id" => "o", "title" => "Auditorium O"]),
            new CalendarResource(["id" => "p", "title" => "Auditorium P"]),
            new CalendarResource(["id" => "q", "title" => "Auditorium Q"]),
            new CalendarResource(["id" => "r", "title" => "Auditorium R"]),
            new CalendarResource(["id" => "s", "title" => "Auditorium S"]),
            new CalendarResource(["id" => "t", "title" => "Auditorium T"]),
            new CalendarResource(["id" => "u", "title" => "Auditorium U"]),
            new CalendarResource(["id" => "v", "title" => "Auditorium V"]),
            new CalendarResource(["id" => "w", "title" => "Auditorium W"]),
            new CalendarResource(["id" => "x", "title" => "Auditorium X"]),
            new CalendarResource(["id" => "y", "title" => "Auditorium Y"]),
            new CalendarResource(["id" => "z", "title" => "Auditorium Z"]),
        ]);
    }
}
