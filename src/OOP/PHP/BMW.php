<?php

namespace App\OOP\PHP;

class BMW extends Car
{


    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPrice(): int
    {
        return 100000;
    }

    public function getFuelConsumption(): int
    {
        return 10;
    }

    public function getFuelTankCapacity(): int
    {
        return 50;
    }

    public function getSpeed(int $speed): bool
    {
        $this->speed = $speed;

        return true;
    }

    public function turnOn(): bool
    {
        return true;
    }

    public function turnOff(): bool
    {
        return true;
    }

    public function accelerate($speed): int
    {
        return $this->speed;
    }
}
