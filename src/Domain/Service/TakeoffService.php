<?php

namespace App\Domain\Service;

use App\Domain\Collection\ConditionCollection;
use App\Domain\Contract\TakeoffInterface;

class TakeoffService
{
    private $conditionCollection;

    public function __construct(ConditionCollection $conditionCollection)
    {
        $this->conditionCollection = $conditionCollection;
    }

    public function takeoff(TakeoffInterface $unit): bool
    {
        foreach ($this->conditionCollection->getAll() as $condition) {
            if (!$unit->getAllowedTakeoffConditions()->has($condition)) {
                return false;
            }
        }

        return true;
    }
}