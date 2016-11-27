<?php

namespace Edofre\FullcalendarScheduler\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class FullcalendarScheduler
 * @package Edofre\FullcalendarScheduler\Facades
 */
class FullcalendarScheduler extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-fullcalendar-scheduler';
    }
}