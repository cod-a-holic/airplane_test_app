<?php

namespace App\Tests\Unit\Domain\Model;

use App\Domain\Collection\ConditionCollection;
use App\Domain\Enum\LandTypeEnum;
use App\Domain\Enum\TimeOfDayEnum;
use App\Domain\Enum\WeatherEnum;
use App\Domain\Model\Boeing747;
use PHPUnit\Framework\TestCase;

class Boeing747Test extends TestCase
{
    private $airplane;

    public function setUp()
    {
        $this->airplane = new Boeing747();
    }

    public function testGetAllowedFlyConditions(): void
    {
        $this->assertEquals(
            $this->airplane->getAllowedFlyConditions(),
            new ConditionCollection([
                new TimeOfDayEnum(TimeOfDayEnum::DAY),
                new TimeOfDayEnum(TimeOfDayEnum::NIGHT),
                new WeatherEnum(WeatherEnum::GOOD),
                new WeatherEnum(WeatherEnum::BAD)
            ])
        );
    }

    public function testGetAllowedLandingConditions(): void
    {
        $this->assertEquals(
            $this->airplane->getAllowedLandingConditions(),
            new ConditionCollection([
                new LandTypeEnum(LandTypeEnum::RUNWAY)
            ])
        );
    }

    public function testGetAllowedTakeoffConditions(): void
    {
        $this->assertEquals(
            $this->airplane->getAllowedTakeoffConditions(),
            new ConditionCollection([
                new LandTypeEnum(LandTypeEnum::RUNWAY)
            ])
        );
    }
}