<?php

namespace App\OOP\PHP;


class CarDashBoard
{
    protected int $oillevel;
    protected int $fuellevel;
    protected int $batterylevel;

    public function __construct(int $oillevel, int $fuellevel, int $batterylevel)
    {
        $this->oillevel = $oillevel;
        $this->fuellevel = $fuellevel;
        $this->batterylevel = $batterylevel;
    }

    private function getOillevel(): int
    {
        return $this->oillevel;
    }

    private function getFuellevel(): int
    {
        return $this->fuellevel;
    }

    private function getBatterylevel(): int
    {
        return $this->batterylevel;
    }

    public function readDashBoard(): string
    {
        return "shpwing the following analaysis : \n 
        Fuel Levle : {$this->getfuellevel()} \n
        Oil Level {$this->getOillevel()} \n
        Battery Level : {$this->getBatterylevel()} \n
        ";
    }
}
