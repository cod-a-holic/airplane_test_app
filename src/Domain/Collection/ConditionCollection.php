<?php

namespace App\Domain\Collection;

use App\Domain\Contract\ConditionEnumInterface;

class ConditionCollection
{
    private $conditions;

    public function __construct(array $conditions)
    {
        foreach ($conditions as $condition) {
            $this->add($condition);
        }
    }

    public function add(ConditionEnumInterface $condition): void
    {
        $this->conditions[] = $condition;
    }

    /**
     * @return array|ConditionEnumInterface[]
     */
    public function getAll(): array
    {
        return $this->conditions;
    }

    public function has(ConditionEnumInterface $condition): bool
    {
        return in_array($condition, $this->conditions);
    }
}