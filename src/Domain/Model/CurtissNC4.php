<?php

namespace App\Domain\Model;

use App\Domain\Collection\ConditionCollection;
use App\Domain\Contract\AirplaneInterface;
use App\Domain\Enum\LandTypeEnum;
use App\Domain\Enum\TimeOfDayEnum;
use App\Domain\Enum\WeatherEnum;

class CurtissNC4 implements AirplaneInterface
{
    private const NAME = 'Curtiss NC-4';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getAllowedFlyConditions(): ConditionCollection
    {
        return new ConditionCollection([
            new TimeOfDayEnum(TimeOfDayEnum::DAY),
            new WeatherEnum(WeatherEnum::GOOD),
        ]);
    }

    public function getAllowedLandingConditions(): ConditionCollection
    {
        return new ConditionCollection([
            new LandTypeEnum(LandTypeEnum::WATER),
        ]);
    }

    public function getAllowedTakeoffConditions(): ConditionCollection
    {
        return new ConditionCollection([
            new LandTypeEnum(LandTypeEnum::WATER),
        ]);
    }
}