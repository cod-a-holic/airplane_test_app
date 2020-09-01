<?php

namespace App\Domain\Contract;

interface AirplaneInterface extends FlyInterface, LandingInterface, TakeoffInterface
{
    public function getName(): string;
}