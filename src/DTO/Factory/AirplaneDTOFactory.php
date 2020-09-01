<?php

namespace App\DTO\Factory;

use App\DTO\AirplaneDTO;
use App\Model\Airplane;

class AirplaneDTOFactory
{
    public function build(Airplane $airplane): AirplaneDTO
    {
        $dto = new AirplaneDTO();

        $dto->id = $airplane->getId();
        $dto->name = $airplane->getName();

        return $dto;
    }
}