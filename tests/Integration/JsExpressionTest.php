<?php

namespace AliMehraei\FullcalendarScheduler\Test\Integration;

/**
 * Class JsExpressionTest
 * @package AliMehraei\FullcalendarScheduler\Test\Integration
 */
class JsExpressionTest extends \Orchestra\Testbench\TestCase
{
    /** @test */
    public function generate_event_with_id()
    {
        $jsExpressionTest = new \AliMehraei\FullcalendarScheduler\JsExpression("
                function( view, element ) {
                    console.log(\"View \"+view.name+\" rendered\");
                }
            ");

        $this->assertEquals("
                function( view, element ) {
                    console.log(\"View \"+view.name+\" rendered\");
                }
            ", $jsExpressionTest);
    }
}
