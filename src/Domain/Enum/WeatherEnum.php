<?php

namespace App\Domain\Enum;

use App\Domain\Contract\ConditionEnumInterface;
use MyCLabs\Enum\Enum;

class WeatherEnum extends Enum implements ConditionEnumInterface
{
    public const GOOD = 'good';
    public const BAD = 'bad';
}