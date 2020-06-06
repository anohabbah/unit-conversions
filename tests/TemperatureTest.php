<?php

namespace Abbah\UnitConversions\Tests;

use Abbah\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $lbs = Temperature::fromCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $lbs);
    }
}
