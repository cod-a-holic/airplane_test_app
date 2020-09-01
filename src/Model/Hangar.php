<?php

namespace App\Model;

use App\Domain\Contract\HangarInterface;
use Doctrine\Common\Collections\ArrayCollection;

class Hangar implements HangarInterface
{
    private $id;
    private $name;
    private $airplanes;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->airplanes = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAirplanes(): iterable
    {
        return $this->airplanes;
    }

    public function addAirplane(Airplane $airplane): self
    {
        $this->airplanes->add($airplane);

        return $this;
    }

    public function removeAirplane(Airplane $airplane): self
    {
        if ($this->airplanes->contains($airplane)) {
            $this->airplanes->removeElement($airplane);
        }

        return $this;
    }
}