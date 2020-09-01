<?php

namespace App\Domain\Enum;

use App\Domain\Contract\ConditionEnumInterface;
use MyCLabs\Enum\Enum;

class TimeOfDayEnum extends Enum implements ConditionEnumInterface
{
    public const DAY = 'day';
    public const NIGHT = 'night';
}