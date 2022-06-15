<?php


namespace App\OOP\PHP;


abstract class Car
{
    protected string $brand;
    protected string $model;
    protected string $speed;


    private CarDashBoard $dashBoard;

    public function __construct(string $brand, string $model, string $speed)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function installDashBoard(CarDashBoard $dashBoard)
    {
        $this->dashBoard = $dashBoard;
    }

    public function carInfo()
    {
        if ($this->dashBoard) {
            return "the speeed is {$this->speed}\n , More Info ... \n {$this->dashBoard->readDashBoard()}";
        } else {
            return "the speeed is {$this->speed}\n";
        }
    }
    abstract public function turnOn(): bool;
    abstract public function turnOff(): bool;

    abstract public function accelerate(int $speed): int;

    abstract public function getPrice(): int;

    abstract public function getFuelConsumption(): int;

    abstract public function getFuelTankCapacity(): int;

    abstract public function getSpeed(int $speed): bool;
}
