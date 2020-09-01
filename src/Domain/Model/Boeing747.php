<?php

namespace App\Domain\Model;

use App\Domain\Collection\ConditionCollection;
use App\Domain\Collection\LandTypeCollection;
use App\Domain\Collection\TimeOfDayCollection;
use App\Domain\Collection\WeatherCollection;
use App\Domain\Contract\AirplaneInterface;
use App\Domain\Enum\LandTypeEnum;
use App\Domain\Enum\TimeOfDayEnum;
use App\Domain\Enum\WeatherEnum;

class Boeing747 implements AirplaneInterface
{
    private const NAME = 'Boeing 747';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getAllowedFlyConditions(): ConditionCollection
    {
        return new ConditionCollection([
            new TimeOfDayEnum(TimeOfDayEnum::DAY),
            new TimeOfDayEnum(TimeOfDayEnum::NIGHT),
            new WeatherEnum(WeatherEnum::GOOD),
            new WeatherEnum(WeatherEnum::BAD)
        ]);
    }

    public function getAllowedLandingConditions(): ConditionCollection
    {
        return new ConditionCollection([
            new LandTypeEnum(LandTypeEnum::RUNWAY)
        ]);
    }

    public function getAllowedTakeoffConditions(): ConditionCollection
    {
        return new ConditionCollection([
            new LandTypeEnum(LandTypeEnum::RUNWAY)
        ]);
    }
}