<?php

namespace App\OOP\PHP;

class Application
{

    protected string $destination;
    protected string $source;
    protected int $weight;

    public function __construct(string $destination, string $source, int $weight)
    {
        $this->destination = $destination;
        $this->source = $source;
        $this->weight = $weight;
    }


    public function deliverOrder(Car $car): string
    {
        $car->turnOn();
        $car->accelerate(120);
        $car->turnOff();


        return "I'am delegating the order to {$this->destination} from {$this->source } and {$this->weight} kg";
    }



    public function run()
    {
        $bmw = new BMW('BMW', 'X5', '100');
        $mercedes = new Mercedes('Mercedes', 'C300', '100');

        echo $bmw->getBrand();
        echo $bmw->getModel();
        echo $bmw->getPrice();
        echo $bmw->getFuelConsumption();
        echo $bmw->getFuelTankCapacity();
        echo $bmw->getSpeed(100);
    }
}
