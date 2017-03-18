<?php

namespace Edofre\FullcalendarScheduler\Test\Integration;

/**
 * Class EventTest
 * @package Edofre\FullcalendarScheduler\Test\Integration
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Do any setup
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Edofre\FullcalendarScheduler\FullcalendarSchedulerServiceProvider::class,
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Fullcalendar' => \Edofre\FullcalendarScheduler\Facades\FullcalendarScheduler::class,
        ];
    }
}