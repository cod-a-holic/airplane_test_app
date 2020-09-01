<?php

namespace App\Domain\Service;

use App\Domain\Collection\ConditionCollection;
use App\Domain\Contract\LandingInterface;

class LandingService
{
    private $conditionCollection;

    public function __construct(ConditionCollection $conditionCollection)
    {
        $this->conditionCollection = $conditionCollection;
    }

    public function landing(LandingInterface $unit): bool
    {
        foreach ($this->conditionCollection->getAll() as $condition) {
            if (!$unit->getAllowedLandingConditions()->has($condition)) {
                return false;
            }
        }

        return true;
    }
}