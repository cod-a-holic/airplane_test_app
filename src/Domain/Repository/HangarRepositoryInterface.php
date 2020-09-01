<?php

namespace App\Domain\Repository;

use App\Domain\Contract\HangarInterface;
use App\Domain\Exception\ModelNotFoundException;
use App\Model\Hangar;

interface HangarRepositoryInterface
{
    /**
     * @param string $name
     *
     * @return Hangar
     *
     * @throws ModelNotFoundException
     */
    public function getByName(string $name): HangarInterface;
}