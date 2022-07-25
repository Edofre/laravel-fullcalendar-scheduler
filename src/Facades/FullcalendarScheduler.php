<?php

namespace AliMehraei\FullcalendarScheduler\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class FullcalendarScheduler
 * @package AliMehraei\FullcalendarScheduler\Facades
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
