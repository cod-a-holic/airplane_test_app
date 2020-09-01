<?php

namespace App\Domain\Enum;

use App\Domain\Contract\ConditionEnumInterface;
use MyCLabs\Enum\Enum;

class LandTypeEnum extends Enum implements ConditionEnumInterface
{
    public const RUNWAY = 'runway';
    public const WATER = 'water';
}