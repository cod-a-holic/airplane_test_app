<?php

namespace App\Domain\Contract;

use App\Domain\Collection\ConditionCollection;

interface LandingInterface extends ConditionEnumInterface
{
    public function getAllowedLandingConditions(): ConditionCollection;
}