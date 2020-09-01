<?php

namespace App\DTO\Factory;

use App\DTO\HangarDTO;
use App\Model\Hangar;

class HangarDTOFactory
{
    private $airplaneDTOFactory;

    public function __construct(AirplaneDTOFactory $airplaneDTOFactory)
    {
        $this->airplaneDTOFactory = $airplaneDTOFactory;
    }

    public function build(Hangar $hangar): HangarDTO
    {
        $dto = new HangarDTO();
        $airplanes = [];

        foreach ($hangar->getAirplanes() as $airplane) {
            $airplanes[] = $this->airplaneDTOFactory->build($airplane);
        }

        $dto->id = $hangar->getId();
        $dto->name = $hangar->getName();
        $dto->airplanes = $airplanes;

        return $dto;
    }
}