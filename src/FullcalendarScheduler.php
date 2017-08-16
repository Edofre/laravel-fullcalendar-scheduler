<?php

namespace Edofre\FullcalendarScheduler;

/**
 * Class FullcalendarScheduler
 * @package Edofre\FullcalendarScheduler
 */
class FullcalendarScheduler
{
    /** @var string */
    protected $id = 'fullcalendar-scheduler';
    /** @var array */
    protected $events = [];
    /** @var array */
    protected $resources = [];
    /** @var array */
    protected $defaultOptions = [
        'header'   => [
            'left'   => 'prev,next today',
            'center' => 'title',
            'right'  => 'timelineDay,timelineWeek,timelineMonth,timelineYear',
        ],
        'firstDay' => 1,
    ];
    /** @var array */
    protected $clientOptions = [];

    /**
     * Renders the view that includes the script files
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderScriptFiles()
    {
        return view('fullcalendar-scheduler::files', [
            'include_gcal' => config('fullcalendar-scheduler.enable_gcal'),
        ]);
    }

    /**
     * @return string
     */
    public function generate()
    {
        return $this->calendar() . $this->script();
    }

    /**
     * Create the <div> the calendar will be rendered into
     * @return string
     */
    private function calendar()
    {
        return "<div id='" . $this->getId() . "'></div>";
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the <script> block to render the calendar
     * @return \Illuminate\View\View
     */
    private function script()
    {
        return view('fullcalendar-scheduler::script', [
            'id'              => $this->getId(),
            'options'         => $this->getOptionsJson(),
            'include_scripts' => config('fullcalendar-scheduler.include_scripts'),
            'include_gcal'    => config('fullcalendar-scheduler.enable_gcal'),
        ]);
    }

    /**
     * @return string
     */
    public function getOptionsJson()
    {
        $options = $this->getOptions();

        if (!isset($options['events'])) {
            $options['events'] = $this->events;
        }

        if (!isset($options['resources'])) {
            $options['resources'] = $this->resources;
        }

        // Encode the JSON properly to format the callbacks
        return JsonEncoder::encode($options);
    }

    /**
     * Get the fullcalendar options (not including the events list)
     * @return array
     */
    public function getOptions()
    {
        return array_merge($this->defaultOptions, $this->clientOptions);
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->clientOptions = $options;
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param mixed $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @return array
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param mixed $resources
     */
    public function setResources($resources)
    {
        $this->resources = $resources;
    }
}