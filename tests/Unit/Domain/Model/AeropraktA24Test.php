<?php

namespace App\Tests\Unit\Domain\Model;

use App\Domain\Collection\ConditionCollection;
use App\Domain\Enum\LandTypeEnum;
use App\Domain\Enum\TimeOfDayEnum;
use App\Domain\Enum\WeatherEnum;
use App\Domain\Model\AeropraktA24;
use PHPUnit\Framework\TestCase;

class AeropraktA24Test extends TestCase
{
    private $airplane;

    public function setUp()
    {
        $this->airplane = new AeropraktA24();
    }

    public function testGetAllowedFlyConditions(): void
    {
        $this->assertEquals(
            $this->airplane->getAllowedFlyConditions(),
            new ConditionCollection([
                new TimeOfDayEnum(TimeOfDayEnum::DAY),
                new WeatherEnum(WeatherEnum::GOOD),
            ])
        );
    }

    public function testGetAllowedLandingConditions(): void
    {
        $this->assertEquals(
            $this->airplane->getAllowedLandingConditions(),
            new ConditionCollection([
                new LandTypeEnum(LandTypeEnum::WATER),
                new LandTypeEnum(LandTypeEnum::RUNWAY),
            ])
        );
    }

    public function testGetAllowedTakeoffConditions(): void
    {
        $this->assertEquals(
            $this->airplane->getAllowedTakeoffConditions(),
            new ConditionCollection([
                new LandTypeEnum(LandTypeEnum::WATER),
                new LandTypeEnum(LandTypeEnum::RUNWAY),
            ])
        );
    }
}