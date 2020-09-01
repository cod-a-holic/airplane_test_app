<?php

namespace App\Domain\Contract;

use App\Domain\Collection\ConditionCollection;

interface TakeoffInterface extends ConditionEnumInterface
{
    public function getAllowedTakeoffConditions(): ConditionCollection;
}