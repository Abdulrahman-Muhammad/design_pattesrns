<?php

namespace app\OOP\PHP;


class Salary
{

    protected float $salary;
    protected float $tax;
    protected float $netSalary;
    protected int $absent;
    protected int $overTime;
    protected int $overTimeRate;
    protected int $absentRate;  


    public function __construct(float $salary, float $tax, float $netSalary, int $absent, int $overTime, int $overTimeRate, int $absentRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->netSalary = $netSalary;
        $this->absent = $absent;
        $this->overTime = $overTime;
        $this->overTimeRate = $overTimeRate;
        $this->absentRate = $absentRate;
    }

    public function calcSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax);
    }
}
