<?php

namespace App\Domain\Service;

use App\Domain\Collection\ConditionCollection;
use App\Domain\Contract\FlyInterface;

class FlyService
{
    private $conditionCollection;

    public function __construct(ConditionCollection $conditionCollection)
    {
        $this->conditionCollection = $conditionCollection;
    }

    public function fly(FlyInterface $unit): bool
    {
        foreach ($this->conditionCollection->getAll() as $condition) {
            if (!$unit->getAllowedFlyConditions()->has($condition)) {
                return false;
            }
        }

        return true;
    }
}