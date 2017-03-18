<?php

namespace Edofre\FullcalendarScheduler\Test\Integration;

/**
 * Class FullcalendarScheduler
 * @package Edofre\FullcalendarScheduler\Test\Integration
 */
class FullcalendarSchedulerTest extends TestCase
{

    /** @test */
    public function generate_event_with_id()
    {
        // Generate a new fullcalendar instance
        $scheduler = new \Edofre\FullcalendarScheduler\FullcalendarScheduler();

        // Set options
        $scheduler->setOptions([
            'locale'      => 'nl',
            'weekNumbers' => true,
            'selectable'  => true,
            'defaultView' => 'agendaWeek',
        ]);

        // This looks terrible, I'm sorry...
        $this->assertEquals("<div id='fullcalendar-scheduler'></div><!-- fullcalendar css -->
<link href=\"/css/fullcalendar.print.css\" rel=\"stylesheet\" media=\"print\">
<link href=\"/css/fullcalendar.css\" rel=\"stylesheet\">
<!-- scheduler css -->
<link href=\"/css/scheduler.css\" rel=\"stylesheet\">
<!-- moment js -->
<script src=\"/js/moment.js\"></script>
<!-- fullcalendar js -->
<script src=\"/js/fullcalendar.js\"></script>
<script src=\"/js/locale-all.js\"></script>
<!-- scheduler js -->
<script src=\"/js/scheduler.js\"></script>


<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        jQuery('#fullcalendar-scheduler').fullCalendar({\"header\":{\"left\":\"prev,next today\",\"center\":\"title\",\"right\":\"timelineDay,timelineWeek,timelineMonth,timelineYear\"},\"firstDay\":1,\"locale\":\"nl\",\"weekNumbers\":true,\"selectable\":true,\"defaultView\":\"agendaWeek\",\"events\":[],\"resources\":[]});
    });
</script>", $scheduler->generate());
    }
}