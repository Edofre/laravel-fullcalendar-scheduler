<?php

namespace AliMehraei\FullcalendarScheduler\Test\Integration;

/**
 * Class EventTest
 * @package AliMehraei\FullcalendarScheduler\Test\Integration
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
            \AliMehraei\FullcalendarScheduler\FullcalendarSchedulerServiceProvider::class,
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'FullcalendarScheduler' => \AliMehraei\FullcalendarScheduler\Facades\FullcalendarScheduler::class,
        ];
    }
}
