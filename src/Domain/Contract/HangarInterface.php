<?php

namespace App\Domain\Contract;

interface HangarInterface
{
    public function getName(): string;

    public function getAirplanes(): iterable;
}