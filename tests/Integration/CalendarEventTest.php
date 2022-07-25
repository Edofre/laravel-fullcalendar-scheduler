<?php

namespace AliMehraei\FullcalendarScheduler\Test\Integration;

use Carbon\Carbon;
use AliMehraei\FullcalendarScheduler\CalendarEvent;

/**
 * Class CalendarEventTest
 * @package AliMehraei\FullcalendarScheduler\Test\Integration
 */
class CalendarEventTest extends \Orchestra\Testbench\TestCase
{
    /** @test */
    public function generate_event_with_id()
    {
        $event = new CalendarEvent(
            [
                'id' => 1,
            ]
        );

        $this->assertEquals('1', $event->id);
        $this->assertNotEquals('2', $event->id);
    }

    /** @test */
    public function generate_event_with_start_end_dates()
    {
        $event = new CalendarEvent(
            [
                'start' => Carbon::create(2016, 11, 16, 10),
                'end'   => Carbon::create(2016, 11, 16, 13),
            ]
        );

        $this->assertEquals(strtotime("2016-11-16T10:00:00+0000"), strtotime($event->start));
        $this->assertNotEquals(strtotime("2016-11-16T10:00:00+0000"), strtotime($event->end));
    }

    /** @test */
    public function generate_event_with_all_attributes()
    {
        $event = new CalendarEvent(
            [
                'id'               => '1',
                'title'            => 'Test event',
                'allDay'           => false,
                'start'            => Carbon::create(2016, 11, 16, 10),
                'end'              => Carbon::create(2016, 11, 16, 13),
                'url'              => 'www.test.dev',
                'className'        => 'test-event',
                'editable'         => true,
                'startEditable'    => true,
                'durationEditable' => true,
                'rendering'        => CalendarEvent::RENDERING_BACKGROUND,
                'overlap'          => false,
                'constraint'       => 'businessHours',
                'color'            => '',
                'backgroundColor'  => 'red',
                'borderColor'      => 'black',
                'textColor'        => 'black',
            ]
        );

        $this->assertNotEquals('2', $event->id);
        $this->assertEquals("Test event", $event->title);
        $this->assertEquals(false, $event->allDay);
        $this->assertEquals(strtotime("2016-11-16T10:00:00+0000"), strtotime($event->start));
        $this->assertNotEquals(strtotime("2016-11-16T10:00:00+0000"), strtotime($event->end));
        $this->assertEquals('www.test.dev', $event->url);
        $this->assertNotEquals('event-test', $event->className);
        $this->assertEquals(true, $event->editable);
        $this->assertEquals(true, $event->startEditable);
        $this->assertNotEquals(false, $event->durationEditable);
        $this->assertNotEquals(CalendarEvent::RENDERING_INVERSE_BACKGROUND, $event->rendering);
        $this->assertNotEquals(true, $event->overlap);
        $this->assertEquals('businessHours', $event->constraint);
        $this->assertNotEquals('purple', $event->color);
        $this->assertEquals('red', $event->backgroundColor);
        $this->assertNotEquals('pink', $event->borderColor);
        $this->assertEquals('black', $event->textColor);
    }
}
