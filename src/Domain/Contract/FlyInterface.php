<?php

namespace App\Domain\Contract;

use App\Domain\Collection\ConditionCollection;

interface FlyInterface extends ConditionEnumInterface
{
    public function getAllowedFlyConditions(): ConditionCollection;
}